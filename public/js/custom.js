$.widget( "custom.catcomplete", $.ui.autocomplete, {
    _create: function() {
      this._super();
      this.widget().menu( "option", "items", "> :not(.ui-autocomplete-category)" );
    },
    _renderMenu: function( ul, items ) {
      var that = this,
        currentCategory = "";
      $.each( items, function( index, item ) {
        var li;
        if ( item.category != currentCategory ) {
          ul.append( "<li class='ui-autocomplete-category'>" + item.category + "</li>" );
          currentCategory = item.category;
        }
        li = that._renderItemData( ul, item );
        if ( item.category ) {
          li.attr( "aria-label", item.category + " : " + item.label );
        }
      });
    }
  });

var path='/autocomplete';
 $( "#location, #location_search" ).catcomplete({
    delay: 0,
    source:function(terms,process){        
        return $.get(path, {terms:terms}, function(data){
            // var array = $.map(data, function(value, index) {
            //     return [value.prod_name];
            // });
            return process(data);
        });
    }
});

 var address_path='/address-autocomplete';
 $( "#address_search" ).catcomplete({
    delay: 0,
    source:function(terms,process){
        var cities = $("input[name='cities']:checked").map(function() {
            return this.value;
        }).get();    
        return $.get(address_path, {terms:terms, cities:cities}, function(data){
            // var array = $.map(data, function(value, index) {
            //     return [value.prod_name];
            // });
            return process(data);
        });
    }
});

 function addToWishlist(invoker,listing_id){
    var name = $(invoker).data('name');
    $.ajax({
            url: '/add-to-wishlist-js',
            type: 'POST',
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            data: {
                'listing_id': listing_id
            },
            beforeSend: function() {
                $("button[data-name='"+name+"']").html('<i class="fas fa-spinner fa-spin"></i>');
            },
            success: function (response) {
                if(response=='success'){                    
                    toastr.success("The property has been added to favorites.");                   
                    setTimeout(function(){
                        location.reload();
                    }, 3000);
                }
            },
            error: function (error) {
                toastr.error('Please login to save this listing');
                setTimeout(function(){
                    window.location.replace('/login')
                }, 5000);
                console.log(error.status);
            },
        });
}

function removeToWishlist(invoker,wishlist_id){
    var name = $(invoker).data('name');
    $.ajax({
            url: '/remove-to-wishlist-js',
            type: 'POST',
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            data: {
                'wishlist_id': wishlist_id
            },
            beforeSend: function() {
                $("button[data-name='"+name+"']").html('<i class="fas fa-spinner fa-spin"></i>');
            },
            success: function (response) {
                if(response=='success'){                    
                    toastr.success("The property has been removed from favorites.");          
                    setTimeout(function(){
                        location.reload();
                    }, 3000);
                }
            },
            error: function (error) {
                toastr.error('Failed');
                setTimeout(function(){
                    window.location.replace('/login')
                }, 5000);
                console.log(error.status);
            },
        });
}

function removeSavedSearch(invoker,search_id){
    var name = $(invoker).data('name');
    $.ajax({
            url: '/remove-saved-search',
            type: 'POST',
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            data: {
                'search_id': search_id
            },
            beforeSend: function() {
                $("button[data-name='"+name+"']").html('<i class="fas fa-spinner fa-spin"></i>');
            },
            success: function (response) {
                if(response=='success'){                    
                    toastr.success("The search has been removed.");          
                    setTimeout(function(){
                        location.reload();
                    }, 3000);
                }
            },
            error: function (error) {
                toastr.error('Please login to save this listing');
                setTimeout(function(){
                    window.location.replace('/login')
                }, 5000);
                console.log(error.status);
            },
        });
}

// Map
// function loadScript() {
//   var script = document.createElement('script');
//   script.type = 'text/javascript';
//   script.src = 'https://maps.googleapis.com/maps/api/js?libraries=places' +
//       '&key=' + MAP_API_KEY +'&callback=initMap'; //& needed
//   document.body.appendChild(script);
// }
// window.onload = loadScript;

// function initMap() {    
//     var map = new google.maps.Map(document.getElementById('map'), {
//       center: {lat: 27.994402, lng: -81.760254},
//       zoom: 7
//     }); 
// }