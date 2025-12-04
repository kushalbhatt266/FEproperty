var tiles = L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    maxZoom: 18,
    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, Points &copy 2012 LINZ'
}),
latlng = L.latLng(27.994402, -81.760254);

var map = L.map('map', {center: latlng, zoom: 8, layers: [tiles]});

var LISTINGMARKERLAYER = L.markerClusterGroup();
map.addLayer(LISTINGMARKERLAYER);
getMapResult();
setTimeout(function(){
    getMapMarker();
}, 3000);


function getMapMarker(params=[]){
    $.ajax({
        url: '/ajax-search/map-marker',
        type: 'POST',
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        data: params,
        beforeSend: function() {
            // $("button[data-name='"+name+"']").html('<i class="fas fa-spinner fa-spin"></i>');
        },
        success: function (response) {
            // console.log(response);
            var markers = [];
                markersById = {};
                $('#total_listing').text('Total: '+response.length);
            for (var i = 0; i < response.length; i++) {
                var a = response[i];
                var id = a[0] + "_" + a[1];
                var price = a[4];
                var point = L.LatLng(a[2], a[3]);
                var marker = L.marker(new L.LatLng(a[2], a[3]), { price: price });
                // var marker = createPriceMarker(price, point);
                // create popup
                var html = "";
                var $listing = $("#" + id);
                // if there's already a listing tile somewhere on the page, use it.
                // or else we'll fetch it on demand later via ajax
               if ($listing.length) {
                    html = getPopupHTMLFromListingTile($listing);
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

                marker.listing = { 'mls_id': a[0], 'mls_no':a[1], 'lat':a[2], 'lng':a[3], 'price':a[4]  };
                popup.marker = marker;
                marker.bindPopup(popup);
                markers.push(marker);
                markersById[id] = marker;

                // markers.addLayer(marker);
            }

            if (markers.length) {
                LISTINGMARKERLAYER.clearLayers(); 
                LISTINGMARKERLAYER.addLayers(markers);
            }
            // markers.clearLayers();
            // map.addLayer(markers);
        },
        error: function (error) {
            console.log(error.status);
        },
    });
}

function getMapResult(params=[]){
    $("#btn_filter").html('<i class="fas fa-spinner fa-spin"></i>');
    $.ajax({
        url: '/ajax-search/map-result',
        type: 'POST',
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        data: params,
        beforeSend: function() {
            $("#btn_filter").html('<i class="fas fa-spinner fa-spin"></i>');
        },
        success: function (response) {
            // console.log(response);
            // setTimeout(function(){
                $('#map_result').html(response.html);
                // $('#total_listing').text('Total: '+response.length);
                $('#close_map_filter_modal').trigger('click');
            // }, 1000);
            $("#btn_filter").html('<span>Search</span>');   
        },
        error: function (error) {
            console.log(error.status);
        },
    });
}

$('#btn_filter').on('click', function () {
    var params = $('form#map_search').serializeArray();
    // console.log(params);
    getMapResult(params);
    setTimeout(function(){
        getMapMarker(params);
    }, 3000);
    return false;
});

getPopupHTMLFromListingTile = function(a) { 
    var b = a.first().clone();
    return b[0];
};


createPriceMarker = function(a, b) { 
    var marker = new L.marker(b, { icon: priceLabelIcon(a), riseOnHover: !0 });
    // var c = new L.Marker(b, { icon: priceLabelIcon(a), riseOnHover: !0 }); 
    return marker; 
}

priceLabelIcon = function(a) { 
    return labelIcon("ih-map-price-label-icon", a) 
}

labelIcon = function(a, b) {
    return L.divIcon({ popupAnchor: [0, -20], className: a, html: "<span class='ih-map-price-arrow'></span><span class='ih-map-price-label'>" + b + "</span>" });
}