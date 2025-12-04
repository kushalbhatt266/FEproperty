
(function($) {
    // show/hide console.log messages within this closure 
    // based on a debug flag
    var debug = false;
    var console = {
            log: function() { if (debug) window.console.log.apply(this, arguments); },
            error: function() { if (debug) window.console.error.apply(this, arguments); }
    };

    var $form = $("#FilterMenu form");
    // TODO: set this back to var
    map = ih.map.load("Map");
    map.form = $form;
    map.resultsEnabled = true;
    map.resubmitFormOnChange = true;
    map.enableDrawing();

    // used to cache that last set of search params
    // (excluding sort)
    
    // assoc array/obj of markers by id (mls_id + "_" + "mls_no")
    var markersById = {};
    

    var $results = $("#MapSearchResultsContent");  
    var $sort = $('#MapSearch select[name=SORT_order]');
    var $loading = $("#MapSearchResultsLoading").hide();
    
    var $loadingProgress = $("#MapLoadingProgress");
    var $loadingProgressBar = $loadingProgress.children("div");
    var $loadingMessage = $("#MapMsg");
    
    console.log("Map loaded, center: ", map.getCenter());

    /*
     * Show a loading message and a progress bar while loading.
     * 
     * Any percent besides 100 will open the bar and start animating, 
     * setting the message immediately.
     * 
     * When set to 100, the bar animates closed quickly, and THEN
     * the message gets set with the callback so it coincides with the animation.
     * This typically injects the new results count.
     * 
     * @param float pct 0-100
     * @param string message
     */
    var showLoadingProgress = function(pct, message, count) {
        // show the progress bar and start animating
        if ( pct !== 100 ) {
            $loadingProgress.show();
            $loadingMessage.html(message);
            if (count) {
                $("#map-results-count").text(count);
            }
        }

        // set default duration to around half a second while loading, 
        // but when finishing, we want to finish quickly.
        var duration = ( pct !== 100 ) ? 700 : 200;

        // current width in pct
        var w = parseFloat( $loadingProgressBar.stop()[0].style.width );
        if ( isNaN(w) ) w = 0;

        // animate the progress bar from where it is to where it should be
        $loadingProgressBar.animate({
            width: pct + "%"
        },
        duration, 
        function() {
            if ( pct == 100 ) {
                $loadingProgress.hide();
                $loadingProgressBar.css("width", "0%");
                $loadingMessage.html(message);
                if (count) {
                    $("#map-results-count").text(count);
                }
            }
        });
        // if done, hide the container afterwards.
    };
    
    
    var resultsHeight = $results.height();
    
    var currentParams;// = $form.serializeArray();
    var currentSort = $sort.val();
    
    var currentTotal = 0;   // number of listings
    var currentPage = 1;    // pages of listings
    var totalPages = 1;
    
    var currentListingId = false;   // if there is a detail loaded, it's id is stored here
    
    // acts as a limit on the number of results returned
    var markerLimit = 5000;
    
    // in px - how close to the end of the results column you can scroll 
    // before loading the next "page" of results
    var lazyLoadTolerance = 1000;
    var loading = false; // status set to true while loading results in column

    
    
    
    var LISTINGMARKERLAYER = new L.markerClusterGroup(ih.map.markerClusterOptions);
    map.addLayer(LISTINGMARKERLAYER);
    
    
    var mapSearchBounds = false;
    
    //Use to create darkened background for rectangle and polygon search
    var negativeSpace = [
                         new L.LatLng(-85, -180), 
                         new L.LatLng(-85, 180), 
                         new L.LatLng(85, 180), 
                         new L.LatLng(85, -180), 
                         new L.LatLng(-85, -180)
                         ];
    
    var shapeOptions =  {
        color: "#808080",
        opacity: 0.75,
        fillOpacity: 0.4,
        weight: 3
     };
    
    var shapeOptionsNoFill =  {
            color: "#808080",
            opacity: 0.75,
            fillOpacity: .4,
            weight: 3
         };
    


    map.on('baselayerchange', function(e) {
        var maxZoom;
        if( e.name == 'Terrain'){
            maxZoom = 17
        } else {
            maxZoom = map.tileLayers[e.name].options.maxZoom;
        }
        map.options.maxZoom = maxZoom;
        if( map.getZoom() >  maxZoom ){
            map.setZoom(  maxZoom  );
            map.invalidateSize(false);
            reloadResultsBasedOnView();
        }
    });
    
    
    // loads a new set of markers on the map
    function updateMarkers(params, sort) {

        var params = $.merge([], params); // make a copy
        params.push({
            name: 'SORT_order',
            value: sort
        });
        
        
        // we store the current/last XHR request as a property of the class instance
        // if there is already an XHR request in progress, abort it before we start a new one
        var updatemarkers = this; // reference to class instance
        if ( updatemarkers.xhr ) {
            updatemarkers.xhr.abort();
        }
        updatemarkers.xhr = $.post( ih.url("/ajax-search/map-marker/"), params).done( function(json) {
            
            map.allResultsLoaded = true;
            
            console.log(json);
            
            
            //LISTINGMARKERLAYER.clearLayers();
            var markers = [];
            markersById = {};
            
            //while( listing = json.listings.pop()){
            //for (var i = 0; i < json.listings.length; i++) {
            $.each(json.listings, function(i, listing) {

                //var id = listing.mls_id + "_" + listing.mls_no;
                var id = listing[0] + "_" + listing[1];
                //var price = listing.price;
                var price = listing[4]
                if ( $.isNumeric( price ) ) {
                    price = ih.utils.formatPrice( price, true );
                }
                //var point = L.latLng(parseFloat(listing.lat), parseFloat(listing.lng));
                var point = L.latLng(parseFloat(listing[2]), parseFloat(listing[3]));
                
                // create marker
                var marker = ih.map.createPriceMarker(price, point);
                
                // create popup
                var html = "";
                var $listing = $("#" + id);
                
                // if there's already a listing tile somewhere on the page, use it.
                // or else we'll fetch it on demand later via ajax
               if ($listing.length) {
                    html = ih.map.getPopupHTMLFromListingTile($listing);
                    console.log(html);
                }
                
                var popup = new L.Popup({
                    maxWidth:       350,
                    closeOnClick:   true,
                    autoPan:        true,
                    closeButton:    true,
                    autoPanPadding: [10,10],
                    className:      "ih-listing-popup"
                })
                .setLatLng(point)
                .setContent(html);
                
                // save some extra properties for convenience
                //marker.listing = listing;
                marker.listing = { 'mls_id': listing[0], 'mls_no':listing[1], 'lat':listing[2], 'lng':listing[3], 'price':listing[4]  };
                popup.marker = marker;
                marker.bindPopup(popup);
                
                markers.push(marker);

                markersById[id] = marker;
            });
            
            currentTotal = markers.length;

            console.log( "CURRENT TOTAL: " + currentTotal);
            var message = "Please use the search filters above to find listings.";
            

            if (markers.length) {
                LISTINGMARKERLAYER.clearLayers(); 
                LISTINGMARKERLAYER.addLayers(markers);
            }
            else {
                message = "No listings found. Try a different location or use fewer filters."
            }
            
            if (json.boundary_info && json.boundary_info.length) {
                ih.map.drawBoundary( json.boundary_info, map );
                map.fitBounds( map.searchBoundsLayer.getBounds() );
            }
            
            // don't fit to bounds of results if we're searching by map viewport.
            // leave the map view unchanged
            if ( markers.length && ! mapSearchBounds) {
                map.fitBounds(LISTINGMARKERLAYER.getBounds());
            }
            
            
            
            //if (markers.length) {
            //    var plus = (json.total >= markerLimit) ? "+" : "";
            //    message = "Showing " + markers.length + " of " + json.total + plus +" results";
           // }
            reloadResultsBasedOnView();
            
            if( json.all_results_loaded == true){
                map.allResultsLoaded = true;
                console.log("ALL RESULTS LOADED");
            } else {
                map.allResultsLoaded = false;
                console.log("ALL RESULTS NOT LOADED");
            }
            
        });
    }
    
    // Loads a new page of results to the results column. 
    // When a new search or sort is performed, this clears out any old results
    // and then loads the first page of results.
    // Additional pages are lazy-loaded as the results column gets scrolled.
    function updateResults(params, sort, page) {
        console.log("UpdateResults: ", params);

        if ( ! page) page = 1;
        loading = true;
        $loading.show();
        
        showLoadingProgress(75, "Loading...");
        
        // if we're starting fresh dump any existing content
        if (page == 1) {
            $results.html("").scrollTop(0);
        }
        
        // create placeholder with height so fast scrolling doesn't break
        var $placeholder = $("<div class='widget loading'></div>");
        $placeholder.height(2000);
        $results.append($placeholder);
        
        // make a copy
//        var params = $.merge([], params); 
        var extraParams = [
            {
                name: 'map_results',
                value: true
            },
            {
                name: 'SEARCH__page__',
                value: page
            },
            {
                name: 'display_page',
                value: page
            },
            {
                name: 'SORT_order',
                value: sort
            }
        ];
        var params = params.concat(extraParams);

        console.log("Calling map_results with: ", params);

        $.post( ih.url("/AjaxSearch/map_results/"), params).done( function(json) {
            console.log(json);
            
            $placeholder.replaceWith(json.html);
            currentPage = page;
            totalPages = json.num_pages;
            loading = false;
            $loading.hide();
            
            // finish loading animation, update results message and hide it.
            showLoadingProgress(100, json.total_listings + " results", json.total_listings);
            
//            if ( page == 1 && json.boundary_info.length) {
//                ih.map.drawBoundary( json.boundary_info, map );
//            }
        });
    }
    
    // Loads the next page of results if there is one.
    // Triggered by scrolling the results column when a critical scroll position is reached
    function loadMoreResults() {
        console.log("Load more results ");
        if ( currentPage < totalPages ) 
        {
            var nextPage = currentPage + 1;
            updateResults(currentParams, currentSort, nextPage);
        }
    }
    

/*
    if ("geolocation" in navigator) {
        
        var searchByCurrentLocation = false;
        
        map.on('locationfound', function(e) {
            if ( searchByCurrentLocation ) {
                
                console.log(e);
//                console.log(L.geo);
                $("#MapSearchLocation").val("Current Location");
                
                
//                var params = $("#FilterForm").serializeArray();
//                params.push({
//                    name: 'map_markers',
//                    value: true
//                });
                
                // do a 5 mile radial search from the current location.
                
                var params = {
                        SEARCH__page__: 1,
                        SEARCH__lpp__: 50,
//                        SEARCH_lat: L.geo.location.latitude,
//                        SEARCH_lng: L.geo.location.longitude,
//                        SEARCH_radius: 5,
//                        map_results: 1,
                        SEARCH_radius: {
                            'radius': 5,
                            'given_lat': e.latitude,
                            'given_lng': e.longitude
                        },
                        from: 'map_search'
                };
                
                updateMarkers(params);
                
                searchByCurrentLocation = false;
            }
        });

        $("#whereAmI").on("click", function(e) {
            e.preventDefault();
            searchByCurrentLocation = true;
            map.locateControl.start();
        });
    }
*/

    // Keep the map centered while css animates it's width
    function refreshMapSize() {
        
        // We need to animate least one property here for animate to work. 
        // Using z-index 1->2 since it is harmless
        $("#Map").stop(true, true).animate({
            "z-index": 2
        }, {
            duration: 400,
            step: function(now, fx) {
                // invalidateSize finds the current size and 
                // triggers a resize event, which we're already listening for elsewhere,
                // and which handles the centerpoint and zoom
                map.invalidateSize(false);
                
                
            },
            // set z-index back to normal
            complete: function() {
                $(this).css({
                    "z-index": 1
                });
                reloadResultsBasedOnView();
            }
        });
    }
    
    
    // Compares the new params with the current ones 
    // to see if they are different.
    // returns boolean
    function paramsHaveChanged(params) 
    {
        console.log("CHECKING PARAMS HAVE CHANGED");
        if ( ! currentParams ) return true;
        
        // make copies of the params arrays
        var params = params.concat([]);//$.merge([], params); 
        var currentParams = currentParams.concat([]);//$.merge([], currentParams);
        
        if ( params.length !== currentParams.length ) return true;
        $.each(params, function(i, param) {
            if ( param.name !== currentParams[i].name && 
                    param.value !== currentParams[i].value ) {
                return true;
            }
        });
        
        return false;
    }
    
    
    /*
     * Toggle the filters menu
     */
    $("#BtnFilterMenu").on("click", function(e) {
        $("#FilterMenu").toggle();
    });
    $(document).on("click", function(e) {
        var $target = $(e.target);
        if ( $("#FilterMenu").is(":visible") && 
                ! $target.is("#BtnFilterMenu") && 
                ! $target.closest("#FilterMenu").length) {
            $("#FilterMenu").hide();
        }
    });

    
    // convert a bounds object into our app's legacy string form:
    // ((latS,lngW),(latN,lngE))
    //If there is a drawn item return only the intersection of map boundary and drawn boundary
    function boundsToString(bounds) {
        if( !map.drawnItem)
        {
            console.log("NO DRAWN ITEM")
            return "((" + bounds._southWest.lat + "," + bounds._southWest.lng + "),(" + bounds._northEast.lat + "," + bounds._northEast.lng + "))";
        }
        else
        {
            console.log("DRAWN ITEM");
            drawn_bounds = map.drawnItem.layer.getBounds();
            return "((" + Math.max( bounds._southWest.lat, drawn_bounds._southWest.lat ) + "," + Math.max( bounds._southWest.lng, drawn_bounds._southWest.lng ) + "),(" + Math.min( bounds._northEast.lat, drawn_bounds._northEast.lat ) + "," + Math.min( bounds._northEast.lng, drawn_bounds._northEast.lng  ) + "))";
        }
    }

    
    

    /*
     * Submit the Filter Form via ajax to perform a new search.
     * Refreshes map markers and results column listings as needed.
     */
    map.form.on("submit", function(e) {

        e.preventDefault();
        console.log("Map.form.on: ", "submit");

         if( map.drawnItem )
         {
             mapSearchBounds = map.getBounds();
             var $boundsInput = map.form.find("input[name=SEARCH_viewport]");
             if ( ! $boundsInput.length ) 
             {
                 $boundsInput = $("<input name='SEARCH_viewport' type='hidden'>").appendTo(map.form);
             }
             $boundsInput.val( boundsToString(mapSearchBounds) );
         } 
         else 
         {
             mapSearchBounds = map.getBounds();
             var $boundsInput = map.form.find("input[name=SEARCH_viewport]");
             if ( ! $boundsInput.length ) 
             {
                 $boundsInput = $("<input name='SEARCH_viewport' type='hidden'>").appendTo(map.form);
             }
             $boundsInput.val( boundsToString(mapSearchBounds) );
         }


        var params = map.form.serializeArray();
        var sort = $sort.val();
        
        // don't request new results unless the search params have changed
        if ( paramsHaveChanged(params) || sort !== currentSort ) {
            
            console.log("Map.form.on: ", "params have changed!!");
            
            // If we're using the same search params, then the sort does not matter. 
            // It is the same set of markers unless we've hit the marker limit
            if ( paramsHaveChanged(params) || currentTotal == markerLimit) 
            {
                updateMarkers(params, sort);
            }
            //updateResults(params, sort, 1);
            //reloadResultsBasedOnView();
            
            currentParams = params;
            currentSort = sort;
        }
        
        // hide the form and remove focus from any buttons/inputs
        $("#FilterMenu").hide();
        $(document.activeElement).blur();
    });


    // Changing the sorting re-submits the search
    $sort.on('change', function(e) {
        //$form.trigger("submit");
        reloadResultsBasedOnView();
    });
    
    
    
    // load a details page via ajax into the details tab
    function details(mls_id, mls_no) 
    {
        var id = mls_id + "_" + mls_no;
        if ( id !== currentListingId ) 
        {
            // select the marker on the map if it's not already
            var marker = markersById[mls_id + "_" + mls_no];
            if ( marker !== undefined && ! $(marker._icon).hasClass("active")) 
            {
                LISTINGMARKERLAYER.zoomToShowLayer(marker, function() {
                    marker.fire("click");
                });
            }
            
            // refresh the details pane
            var $widget = $("#MapSearchDetailsContent").find(".listing-details-widget");
            if ( $widget.is(":ih-listingslideshow") ) 
            {
                $widget.listingslideshow("destroy");
            }
            $("#MapSearchDetailsContent").html("");
            $("#MapSearchDetailsLoading").show();
            $.get( ih.url("/ListingSearch/details/"), {
                mls_id: mls_id,
                mls_no: mls_no,
                from: "map_search"
            }).done( function(html) {
                if ( "register" == html )
                {
                    if(ih.data.modalRegistration) {
                        ih.modalRegistrationOpen(ih.data.modalTeaserRegistrationHref, 'register', ih.data.modalTeaserForceRegistration);
                    } else {
                        url = ih.url("/WebUser/register");
                        window.location = url;
                    }
                }
                else
                {
                    $("#MapSearchDetailsLoading").hide();
                   //$("#MapSearchDetailsContent").html(html)
                   //     .find(".listing-details-widget").listingslideshow();
                    var $widget = $("#MapSearchDetailsContent").html(html)
                         .find(".listing-details-widget");
                    $widget.listingslideshow({
                        effects: ( $widget.data("slideshoweffects") == "Y" ),
                        delay: $widget.data("delay")
                    });
                    currentListingId = id;
                }
            });
        }
        $("#MapSearch").addClass("map-details-open");
        $("#MapTabDetails").show().addClass("map_tab_selected").siblings().removeClass("map_tab_selected");
        
        // MLS Compliance issue: when going to a details page, we have to only show the appropriate MLS's disclaimer
        // As such, we need to hide the main disclaimer block, since it will contain all disclaimers for any 
        // customer who has more than one MLS
        $("#Disclaimers").hide();
    }
    
    
    $("#MapTabResults").on("click", function(e) {
        e.preventDefault();
        if ( ! $(this).hasClass("map_tab_selected") ) {
            $(this).addClass("map_tab_selected").siblings().removeClass("map_tab_selected");
            $("#MapSearch").addClass("map-results-open").removeClass("map-details-open");
            if( showResults._map)
            {
                map.removeControl(showResults);
            }
            if(hideResults._map == undefined){
                map.addControl(hideResults);
            }
            refreshMapSize();
        }
        
        // MLS Compliance issue: when going to a details page, we have to only show the appropriate MLS's disclaimer
        // As such, we need to hide the main disclaimer block, since it will contain all disclaimers for any 
        // customer who has more than one MLS
        $("#Disclaimers").show();
    });
    
    $("#MapTabMap").on("click", function(e) {
        e.preventDefault();
        if ( ! $(this).hasClass("map_tab_selected") ) {
            $(this).addClass("map_tab_selected").siblings().removeClass("map_tab_selected");
            $("#MapSearch").removeClass("map-results-open map-details-open");
            if( hideResults._map)
            {
                map.removeControl(hideResults);
            }
            if(showResults._map == undefined){
                map.addControl(showResults);
            }
            refreshMapSize();
        }
        
        // MLS Compliance issue: when going to a details page, we have to only show the appropriate MLS's disclaimer
        // As such, we need to hide the main disclaimer block, since it will contain all disclaimers for any 
        // customer who has more than one MLS
        $("#Disclaimers").show();
    });
    
    $("#MapTabDetails").on("click", function(e) {
        e.preventDefault();
        if ( ! $(this).hasClass("map_tab_selected") ) {
            $(this).addClass("map_tab_selected").siblings().removeClass("map_tab_selected");
            $("#MapSearch").addClass("map-details-open");
        }
        
     // MLS Compliance issue: when going to a details page, we have to only show the appropriate MLS's disclaimer
        // As such, we need to hide the main disclaimer block, since it will contain all disclaimers for any 
        // customer who has more than one MLS
        $("#Disclaimers").hide();
    });
    
    // When scrolling the results column, lazy-load more results
    // as you get near to the bottom.
    $results.on("scroll", function(e) {
        var $this = $(this);
        // logic: scrollTop + resultsHeight = scrollHeight
        var criticalHeight = this.scrollHeight - resultsHeight - lazyLoadTolerance;
        if ( ! loading && 
                $this.scrollTop() >= criticalHeight &&
                currentPage < totalPages
        ) {
            loadMoreResults();
        }
    });
    
    // TODO: to get this working we'll need to keep around a reference to the markers
    $results.on("click", ".listing-button-map", function(e) {
        e.preventDefault();
        var $listing = $(this).closest(".listing");
        var marker = markersById[$listing.data("mlsid") + "_" + $listing.data("mlsno")];
        if ( marker !== undefined ) {
            LISTINGMARKERLAYER.zoomToShowLayer(marker, function() {
                marker.fire("click");
            });
        }
    });
    
    
    // hijack "details" links and load the page via ajax
    // from results listing tiles
    $results.on("click", ".listing-photo-wrapper a, .listing-name a, .listing-button-view-details", function(e) {
        e.preventDefault();
        var $listing = $(this).closest(".listing");
        details($listing.data("mlsid"), $listing.data("mlsno"));
    });
    // from map popups
    $("#Map").on("click", ".listing-info-window-name a, .listing-info-window-photo-wrapper a", function(e) {
        e.preventDefault();
        var $listing = $(this).closest(".listing-info-window");
        details($listing.data("mlsid"), $listing.data("mlsno"));
    });
    
    
    
    

    map.on("startsearchbymap", function(e) {
        console.log("start search by map", e);
        
        // clear out the omnibox location field(s)
        // TODO: eventually we'll want our rectangular search bounds 
        // to be shown in the location field since we are using that instead of the other value
        map.form.find("input[name=SEARCH_omnilocation], input[name=SEARCH_omnilocation_type]").val("");
        
        mapSearchBounds = map.getBounds();
//        console.log("bounds", mapSearchBounds);
        
        map.searchBoundsLayer.clearLayers();
        
        L.rectangle(mapSearchBounds, ih.map.polygonOptions)
            .addTo(map.searchBoundsLayer);
        
        map.form.trigger("submit");
    });

    map.on("stopsearchbymap", function(e) {
//        console.log("stop search by map", e);
        mapSearchBounds = false;
        map.searchBoundsLayer.clearLayers();
        
//        $form.trigger("submit");
    });
    
   // map.searchByMapControl = new L.Control.SearchByMap({
   //     active: true
   // });
   // map.addControl(map.searchByMapControl);
    
    function reloadResultsBasedOnView(){
        
        console.log("RELOAD BASED ON VIEW");
        //If more results than displayable, trigger reload all resultswhen view changes
        if( map.allResultsLoaded != true || ( mapSearchBounds && !mapSearchBounds.contains( map.getBounds() ) ) ){
            console.log("RELOADING RESULTS");
            LISTINGMARKERLAYER.clearLayers();
            mapSearchBounds = map.getBounds();
            map.searchBoundsLayer.clearLayers();
            if( !map.drawnItem ){
                L.rectangle(mapSearchBounds, ih.map.polygonOptions)
                .addTo(map.searchBoundsLayer);
            }
            map.form.trigger('submit');
            return;
        }
        
        
        var count = 0;
        $.each(markersById, function(i, marker) 
        {
            if(  map.getBounds().contains( marker.getLatLng() ))
            {
                count++;
            }
            
        });
        console.log("COUNT:" + count);
        console.log( map.getBounds());
        var sort = $sort.val();

        var $boundsInput = map.form.find("input[name=SEARCH_viewport]");
        if ( ! $boundsInput.length ) {
            $boundsInput = $("<input name='SEARCH_viewport' type='hidden'>").appendTo(map.form);
        }
        $boundsInput.val( boundsToString(map.getBounds()) );
        console.log( $boundsInput.val() );
        var params = map.form.serializeArray();
        console.log(params);
        updateResults(params, sort, 1);
        currentParams = params;
        

    }
    
    
    map.on('zoomend', function() {
        
        console.log("ZOOM END TRIGGERED");
        if( map.drawInProgress ){
            return;
        }
        //if( allResultsLoaded != true || ( mapSearchBounds && !mapSearchBounds.contains( map.getBounds() ) ) ){
        //    showLoadingProgress(75, "Loading...");
        //    LISTINGMARKERLAYER.clearLayers();
        //}
        reloadResultsBasedOnView();
    });
    
    map.on('dragend', function() {

        console.log("DRAG END TRIGGERED");
        if( map.drawInProgress ){
            return;
        }
       // if( allResultsLoaded != true || ( mapSearchBounds && !mapSearchBounds.contains( map.getBounds() ) ) ){
       //     showLoadingProgress(75, "Loading...");
       //     LISTINGMARKERLAYER.clearLayers();
       // }
        reloadResultsBasedOnView();
    });
    
    
//    map.on('moveend', function() {
//        if( allResultsLoaded != true || ( mapSearchBounds && !mapSearchBounds.contains( map.getBounds() ) ) ){
//            showLoadingProgress(75, "Loading...");
//            LISTINGMARKERLAYER.clearLayers();
//        }
//    });
    
    
    var showResultsControl = L.Control.extend({
        
        options: {
          position: 'bottomright',
          title: "View results list"
          //control position - allowed: 'topleft', 'topright', 'bottomleft', 'bottomright'
        },
        onAdd: function (map) {
            //var container = L.DomUtil.create('button', 'button leaflet-bar leaflet-control leaflet-control-custom');
            
            
            var container = L.DomUtil.create('button', 
                    'leaflet-control leaflet-results-link' );

            container.innerHTML = "View <span id='map-results-count'></span> results";
            
            container.onclick = function(e) {
                e.preventDefault();
                if ( ! $("#MapTabResults").hasClass("map_tab_selected") ) {
                    $("#MapTabResults").addClass("map_tab_selected").siblings().removeClass("map_tab_selected");
                    $("#MapSearch").addClass("map-results-open").removeClass("map-details-open");
                    map.removeControl(showResults);
                    map.addControl(hideResults);
                    refreshMapSize();
                }
            }
            return container;
        }
      });
    
    var showResults = new showResultsControl();
    
    var hideResultsControl = L.Control.extend({
        
        options: {
          position: 'bottomright',
          title: "Hide Results List"
          //control position - allowed: 'topleft', 'topright', 'bottomleft', 'bottomright'
        },
        onAdd: function (map) {
            //var container = L.DomUtil.create('button', 'button leaflet-bar leaflet-control leaflet-control-custom');
            
            
            var container = L.DomUtil.create('button', 
                    'leaflet-control leaflet-results-link' );

            container.innerHTML = "Hide Results";
            
            container.onclick = function(e) {
                e.preventDefault();
                if ( ! $("#MapTabMap").hasClass("map_tab_selected") ) {
                    $("#MapTabMap").addClass("map_tab_selected").siblings().removeClass("map_tab_selected");
                    $("#MapSearch").removeClass("map-results-open map-details-open");
                    map.removeControl(hideResults);
                    map.addControl(showResults);
                    refreshMapSize();
                }
            }
            return container;
        }
      });
    
    var hideResults = new hideResultsControl();
    
    
    
    
    map.addControl( showResults );

    mapSearchBounds = map.getBounds();
    map.searchBoundsLayer.clearLayers();

    L.rectangle(mapSearchBounds, ih.map.polygonOptions)
                .addTo(map.searchBoundsLayer);

    map.form.trigger("submit");

})(jQuery);