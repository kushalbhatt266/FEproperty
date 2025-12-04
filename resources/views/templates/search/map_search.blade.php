@extends('layouts.app')
@section('title', 'Map Search')
@section('page-heading','Map Search')
@push('styles')
<style>
   .ih-map-price-label {
       position: absolute;
       top: -17px;
       left: 50%;
       display: block;
       height: 20px;
       padding: 0 4px;
       margin: 0;
       line-height: 20px;
       background: #000;
       border-radius: 2px;
       font-family: Arial;
       font-size: 12px;
       color: #fff;
       box-shadow: 0 0 3px rgba(200,200,200,.9);
       -webkit-transform: translate(-50%,0);
       -ms-transform: translate(-50%,0);
       transform: translate(-50%,0);
   }
</style>
@endpush
@section('content')
<main> 
    <div class="header-image-wrapper">
        <div class="bg" style="background-image: url('assets/images/carousel/slide-3.jpg');"></div>
        <div class="mask"></div>            
        <div class="header-image-content mh-200"> 
            <p class="desc">Map Search</p> 
        </div>
    </div>  
    <div class="px-3">  
        <div class="theme-container">  
            <div class="page-drawer-container mt-3">
                @include('templates.components.search')
                <div class="mdc-drawer-scrim page-sidenav-scrim"></div>
                 <div class="page-sidenav-content">
                     <div class="properties-wrapper row mt-0" style="display: block;">
                        <!-- <form action="javascript:void(0);" id="filters" class="search-wrapper"> -->
                        <div class="section mt-3" style="padding-top: 0px;">
                            <h1 class="section-title" style="text-align: center;">Map Search</h1>
                          
                            <div class="mdc-tab-bar-wrapper centered pricing-tabs">
                               <div class="mdc-tab-bar mb-3">
                                  <div class="mdc-tab-scroller">
                                     <div class="mdc-tab-scroller__scroll-area">
                                        <div class="mdc-tab-scroller__scroll-content">
                                           <button class="mdc-tab mdc-tab" tabindex="0">
                                               <span class="mdc-tab__content">
                                               <span class="mdc-tab__text-label">Results</span>
                                               </span>
                                               <span class="mdc-tab-indicator mdc-tab-indicator">
                                               <span class="mdc-tab-indicator__content mdc-tab-indicator__content--underline"></span>
                                               </span>
                                               <span class="mdc-tab__ripple"></span>
                                           </button>
                                           <button class="mdc-tab mdc-tab--active" tabindex="0">
                                               <span class="mdc-tab__content">
                                               <span class="mdc-tab__text-label">Map</span>
                                               </span>
                                               <span class="mdc-tab-indicator mdc-tab-indicator--active">
                                               <span class="mdc-tab-indicator__content mdc-tab-indicator__content--underline"></span>
                                               </span>
                                               <span class="mdc-tab__ripple"></span>
                                           </button>
                                           
                                        </div>
                                     </div>
                                  </div>
                               </div>
                               <div class="row">
                                   <div class="col-xs-12">
                                      <div class="search row">
                                         <div class="col-md-6">
                                            <a href="#map_filter_modal" rel="modal:open" class="mdc-button mdc-ripple-surface">Search Filters</a>
                                       </div>
                                       <div class="col-md-6" style="text-align:right">
                                           <label id="total_listing" for="cars" style="font-size: 22px;">Total: </label>
                                         
                                        </div>
                                       </div>
                                   </div>
                                </div>
                               <div class="tab-content">
                                  <div class="properties-wrapper row mt-0" id="map_result">
                                     
                                  </div>
                               </div>
                               <div class="tab-content tab-content--active">
                                  <div class="row">
                                     <div class="col-xs-12 col-sm-12 col-md-12 p-2">
                                        <div id="map" class="map" data-centerpoint="26.908839303264415,-79.88936195974269" data-maptype="TERRAIN" data-zoom="8"></div>
                                     </div>
                                  </div>
                               </div>
                              
                           </div>
                    </div>
                </div>
            </div>
        </div>
    </div>  
    @include('templates.components.call_us')
</main> 
@endsection
@push('scripts')
<script>
//     $(function() {
//     $('#btn_filter').on('click', function () {
//         var location = $('#location_search').val();
//         var min_price = $('#search_min_price').val();
//         var max_price = $('#search_max_price').val();
//         var bathrooms = $('#search_bathrooms :selected').val();
//         var bedrooms = $('#search_bedrooms :selected').val();
//         var property_type = $("input[name='property_type']:checked").map(function() {
//             return this.value;
//         }).get();
//         //console.log(min_price+", "+max_price+", "+brands);
//         var url = APP_URL+"/list-search?min_price="+min_price+"&max_price="+max_price+"&location="+location+"&bathrooms="+bathrooms+"&bedrooms="+bedrooms+"&property_type="+property_type;
//         if (url) {
//             window.location = url;
//         }
//         return false;
//     });
// });
</script>
@endpush