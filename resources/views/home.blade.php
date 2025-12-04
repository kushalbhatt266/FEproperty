@extends('layouts.app')

<!-- Title -->
@section('title', 'Nancy EHLEN - Real estate agents in Tampa Florida')
@section('page-heading','Home')

<!-- Meta Description -->
@section('meta-description','Nancy EHLEN is real property agents which property sales, rentals, marketing, portfolio management, mortgage consultations, property listing services, financing solutions and investment consultations in Tampa, Florida.')

<!-- Meta Keyword -->
@section('meta-keyword','best agent in tampa bay, best local realtor in tampa bay, commercial real estate in tampa florida, condos and townhomes for sale in Tampa Bay, florida real estate agents')
@php
use App\Models\Wishlist;
if(!empty(Auth::user())){
$customerData = Auth::user()->toArray();
}else{
$customerData['id'] = 0;
}
@endphp
@section('content')
<main class="content-offset-to-top">
   <div class="header-carousel offset-bottom h-100 w-100">
      <div class="banner_vd">
          <video width="100%" muted autoplay loop preload id="homevideo">
           <source src="{{ asset('assets/video/file.mp4') }}" type="video/mp4">
           <source src="{{ asset('assets/video/file.ogg') }}" type="video/ogg">
           Your browser does not support HTML video.
         </video>
      </div>
      <div class="vd_txt">
          <h1>Your Florida Real Estate Experts</h1>
          <h3>Trusted . Respected . Recommended</h3>
      </div>
   </div>
   <div class="px-3">
      <div class="theme-container">
         <div class="mdc-card main-content-header">
            <form method="GET" action="{{ route('list-search') }}" id="filters" class="search-wrapper">
               <h1 class="section-title">Quick Property Search</h1>
               <div class="row mt-3">
                  <div class="col-xs-12 col-sm-6 col-md-4 p-2">
                     <div class="mdc-text-field mdc-text-field--outlined">
                        <input class="mdc-text-field__input" name="location" id="location" placeholder="Type address, City or Zipcode">
                        <div class="mdc-notched-outline">
                           <div class="mdc-notched-outline__leading"></div>
                           <div class="mdc-notched-outline__notch">
                              <label class="mdc-floating-label">Location</label>
                           </div>
                           <div class="mdc-notched-outline__trailing"></div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xs-12 col-sm-6 col-md-2 p-2">
                     <div class="mdc-select mdc-select--outlined bedrooms_list">
                        <div class="mdc-select__anchor">
                           <i class="mdc-select__dropdown-icon"></i>
                           <div class="mdc-select__selected-text"></div>
                           <div class="mdc-notched-outline">
                              <div class="mdc-notched-outline__leading"></div>
                              <div class="mdc-notched-outline__notch">
                                 <label class="mdc-floating-label">Bedrooms:</label>
                              </div>
                              <div class="mdc-notched-outline__trailing"></div>
                           </div>
                        </div>
                        <div class="mdc-select__menu mdc-menu mdc-menu-surface">
                           <ul class="mdc-list">
                              <!-- <li class="mdc-list-item mdc-list-item--selected" data-value=""></li> -->
                              <li class="mdc-list-item" data-value="any">Any</li>
                              <li class="mdc-list-item" data-value="1">1 Or More</li>
                              <li class="mdc-list-item" data-value="2">2 Or More</li>
                              <li class="mdc-list-item" data-value="3">3 Or More</li>
                              <li class="mdc-list-item" data-value="4">4 Or More</li>
                              <li class="mdc-list-item" data-value="5">5 Or More</li>
                              <li class="mdc-list-item" data-value="6">6 Or More</li>
                           </ul>
                        </div>
                     </div>
                     <input type="hidden" name="bedrooms" id="bedrooms" value="">
                  </div>
                  <div class="col-xs-12 col-sm-6 col-md-2 p-2">
                     <div class="mdc-select mdc-select--outlined bathroom_list">
                        <div class="mdc-select__anchor">
                           <i class="mdc-select__dropdown-icon"></i>
                           <div class="mdc-select__selected-text"></div>
                           <div class="mdc-notched-outline">
                              <div class="mdc-notched-outline__leading"></div>
                              <div class="mdc-notched-outline__notch">
                                 <label class="mdc-floating-label">Bathrooms:</label>
                              </div>
                              <div class="mdc-notched-outline__trailing"></div>
                           </div>
                        </div>
                        <div class="mdc-select__menu mdc-menu mdc-menu-surface">
                           <ul class="mdc-list">
                              <!-- <li class="mdc-list-item mdc-list-item--selected" data-value=""></li> -->
                              <li class="mdc-list-item" data-value="any">Any</li>
                              <li class="mdc-list-item" data-value="1">1 Or More</li>
                              <li class="mdc-list-item" data-value="2">2 Or More</li>
                              <li class="mdc-list-item" data-value="3">3 Or More</li>
                              <li class="mdc-list-item" data-value="4">4 Or More</li>
                           </ul>
                        </div>
                     </div>
                     <input type="hidden" name="bathrooms" id="bathrooms" value="">
                  </div>
                  <div class="col-xs-6 col-md-2 p-2">
                     <div class="mdc-text-field mdc-text-field--outlined">
                        <input class="mdc-text-field__input" name="min_price" id="min_price">
                        <div class="mdc-notched-outline">
                           <div class="mdc-notched-outline__leading"></div>
                           <div class="mdc-notched-outline__notch">
                              <label class="mdc-floating-label">Min Price</label>
                           </div>
                           <div class="mdc-notched-outline__trailing"></div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xs-6 col-md-2 p-2 to">
                     <div class="mdc-text-field mdc-text-field--outlined">
                        <input class="mdc-text-field__input" name="max_price" id="max_price">
                        <div class="mdc-notched-outline">
                           <div class="mdc-notched-outline__leading"></div>
                           <div class="mdc-notched-outline__notch">
                              <label class="mdc-floating-label">Max Price</label>
                           </div>
                           <div class="mdc-notched-outline__trailing"></div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="row center-xs middle-xs p-2"> 
                  <button class="mdc-button mdc-button--raised" type="submit">
                  <span class="mdc-button__ripple"></span>
                  <i class="material-icons mdc-button__icon">search</i>
                  <span class="mdc-button__label">Search</span> 
                  </button>  
               </div>
            </form>
         </div>
      </div>
   </div>
   <div class="theme-container">
   <div class="page-drawer-container mt-3">
     
        @include('templates.components.search')
        <div class="mdc-drawer-scrim page-sidenav-scrim"></div>     
      <div class="page-sidenav-content">
         @if(count($for_sale)>0)
         <!-- <div class="section mt-3">
            <div class="px-3">
               <div class="theme-container">
                  <h1 class="section-title">For Sale</h1>
                  <div class="properties-carousel">
                     <div class="swiper-container carousel-outer">
                        <div class="swiper-wrapper">
                           @foreach($for_sale as $saleData)
                           @php 
                           $sale_wishlist = Wishlist::where(['listing_id'=>$saleData->id, 'user_id' => $customerData['id']])->first();
                           @endphp
                           <div class="swiper-slide">
                              <div class="mdc-card property-item grid-item column-4 full-width-page">
                                 <div class="thumbnail-section">
                                    <div class="row property-status">
                                       <span class="blue">For Sale</span>
                                    </div>
                                    <div class="property-image">
                                       <div class="swiper-container">
                                          <div class="swiper-wrapper">
                                             @if(count($saleData->media)>0)
                                             @foreach($saleData->media as $key => $mediaSale)
                                             @php if($key <= 2) { @endphp
                                             <div class="swiper-slide">
                                                <img src="{{ asset('assets/images/others/transparent-bg.png') }}" alt="slide image" data-src="{{$mediaSale->MediaURL?config('constant.media_site').$mediaSale->MediaURL:config('constant.no_property_image')}}" class="slide-item swiper-lazy">
                                                <div class="swiper-lazy-preloader"></div>
                                             </div>
                                             @php } @endphp
                                             @endforeach
                                             @else
                                             <div class="swiper-slide">
                                                <img src="{{ asset('assets/images/others/transparent-bg.png') }}" alt="slide image" data-src="{{config('constant.no_property_image')}}" class="slide-item swiper-lazy">
                                                <div class="swiper-lazy-preloader"></div>
                                             </div>
                                             @endif
                                          </div>
                                          <div class="swiper-pagination white"></div>
                                          <button class="mdc-icon-button swiper-button-prev swipe-arrow"><i class="material-icons mat-icon-lg">keyboard_arrow_left</i></button>
                                          <button class="mdc-icon-button swiper-button-next swipe-arrow"><i class="material-icons mat-icon-lg">keyboard_arrow_right</i></button>
                                       </div>
                                    </div>
                                    <div class="control-icons">
                                       @if($sale_wishlist == null)
                                       <button class="mdc-button add-to-favorite" title="Add To Favorite" data-name="add_featured_wish-{{$saleData->id}}" onclick="addToWishlist(this,{{$saleData->id}})">
                                       <i class="material-icons mat-icon-sm">favorite_border</i>
                                       </button>
                                       @else
                                       <button class="mdc-button add-to-favorite" title="Remove To Favorite" data-name="remove_featured_product-{{$sale_wishlist['id']}}" onclick="removeToWishlist(this,{{$sale_wishlist['id']}})">
                                       <i class="fa fa-heart"></i>
                                       </button>
                                       @endif
                                       <button class="mdc-button" title="Add To Compare">
                                          <i class="material-icons mat-icon-sm">compare_arrows</i>
                                          </button>  
                                    </div>
                                 </div>
                                 <div class="property-content-wrapper">
                                    <div class="property-content">
                                       <div class="content">
                                          <h1 class="title"><i class="material-icons text-muted">location_on</i>
                                             {{$saleData->UnparsedAddress}}</h1>
                                          <p class="row address flex-nowrap">
                                             <a href="{{ route('property.property-details',[$saleData->id]) }}">{{$saleData->ListOfficeName}}</a>
                                          </p>
                                          <div class="row between-xs middle-xs">
                                             <h3 class="primary-color price">
                                                <span>$ {{$saleData->ListPrice}}</span> 
                                             </h3>
                                          </div>
                                          <div class="d-none d-md-flex d-lg-flex d-xl-flex">
                                             <div class="description mt-3">
                                                <p></p>
                                             </div>
                                          </div>
                                          <div class="features mt-3">
                                             <p><span>Property size</span><span>{{$saleData->LotSizeSquareFeet}} ft²</span></p>
                                             <p><span>Bedrooms</span><span>{{$saleData->BedroomsTotal}}</span></p>
                                             <p><span>Bathrooms</span><span>{{$saleData->BathroomsTotalInteger}}</span></p>
                                             <p><span>Garages</span><span>{{$saleData->GarageSpaces}}</span></p>
                                          </div>
                                       </div>
                                       <div class="grow"></div>
                                       <div class="actions row between-xs middle-xs">
                                          <p class="row date mb-0">
                                             <i class="material-icons text-muted">date_range</i>
                                             <span class="mx-2">12 September, 2013</span>
                                             </p> 
                                          <a href="{{ route('property.property-details',[$saleData->id]) }}" class="mdc-button mdc-button--outlined">
                                          <span class="mdc-button__ripple"></span>
                                          <span class="mdc-button__label">Details</span> 
                                          </a>  
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           @endforeach
                        </div>
                        <button class="prop-prev swiper-button-prev swipe-arrow mdc-fab mdc-fab--mini primary">
                        <span class="mdc-fab__ripple"></span>
                        <span class="mdc-fab__icon material-icons">keyboard_arrow_left</span> 
                        </button>
                        <button class="prop-next swiper-button-next swipe-arrow mdc-fab mdc-fab--mini primary"> 
                        <span class="mdc-fab__ripple"></span>
                        <span class="mdc-fab__icon material-icons">keyboard_arrow_right</span> 
                        </button> 
                     </div>
                  </div>
               </div>
            </div>
         </div> -->
         <div class="section">
            <div class="px-3">
               <div class="theme-container">
                  <h1 class="section-title" style="margin-top:-4%;">Search By Places</h1>
                  <div class="services-wrapper row">
                     <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 p-2">
                        <div class="mdc-card h-100 w-100 text-center middle-xs p-3">
                           <img src="{{ asset('assets/images/props/slide-3.jpg') }}" style="width: 100%;height: 200px;">
                           <h2 class="capitalize fw-600 my-3 mp ds1" style="margin-bottom: 0px !important">ST PETERSBURG</h2>
                           <p class="text-muted fw-500">
                              <a href="{{ route('list-search',['location'=>'ST PETERSBURG', 'min_price' => '200000']) }}" style="color:#000" class="ds">Under $200,000</a><br>
                              <a href="{{ route('list-search',['location'=>'ST PETERSBURG', 'min_price' => '200000', 'max_price' => '300000']) }}" style="color:#000" class="ds">$200,000 to $300,000</a><br>
                              <a href="{{ route('list-search',['location'=>'ST PETERSBURG', 'min_price' => '300000', 'max_price' => '400000']) }}" style="color:#000" class="ds">$300,000 to $400,000</a><br>
                              <a href="{{ route('list-search',['location'=>'ST PETERSBURG', 'min_price' => '400000', 'max_price' => '600000']) }}" style="color:#000" class="ds">$400,000 to $600,000</a><br>
                              <!-- <a href="#" style="color:#000" class="ds">Luxury Homes</a><br>
                                 <a href="#" style="color:#000" class="ds">Open Houses</a> -->
                           </p>
                        </div>
                     </div>
                     <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 p-2">
                        <div class="mdc-card h-100 w-100 text-center middle-xs p-3">
                           <img src="{{asset('assets/images/props/slide-4.jpg') }}" style="width: 100%;height: 200px;">
                           <h2 class="capitalize fw-600 my-3 mp ds1" style="margin-bottom: 0px !important">SOUTH TAMPA</h2>
                           <p class="text-muted fw-500">
                              <a href="{{ route('list-search',['direction'=>'south','location'=>'TAMPA', 'min_price' => '200000']) }}" style="color:#000" class="ds">Under $200,000</a><br>
                              <a href="{{ route('list-search',['direction'=>'south','location'=>'TAMPA', 'min_price' => '200000', 'max_price' => '300000']) }}" style="color:#000" class="ds">$200,000 to $300,000</a><br>
                              <a href="{{ route('list-search',['direction'=>'south','location'=>'TAMPA', 'min_price' => '300000', 'max_price' => '400000']) }}" style="color:#000" class="ds">$300,000 to $400,000</a><br>
                              <a href="{{ route('list-search',['direction'=>'south','location'=>'TAMPA', 'min_price' => '400000', 'max_price' => '600000']) }}" style="color:#000" class="ds">$400,000 to $600,000</a><br>
                              <!-- <a href="#" style="color:#000" class="ds">Luxury Homes</a><br>
                                 <a href="#" style="color:#000" class="ds">Open Houses</a></p> -->             
                        </div>
                     </div>
                     <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 p-2">
                        <div class="mdc-card h-100 w-100 text-center middle-xs p-3">
                           <img src="{{ asset('assets/images/props/slide-5.jpg') }}" style="width: 100%;height: 200px;">
                           <h2 class="capitalize fw-600 my-3 mp ds1" style="margin-bottom: 0px !important">TAMPA</h2>
                           <p class="text-muted fw-500">
                              <a href="{{ route('list-search',['location'=>'TAMPA', 'min_price' => '200000']) }}" style="color:#000" class="ds">Under $200,000</a><br>
                              <a href="{{ route('list-search',['location'=>'TAMPA', 'min_price' => '200000', 'max_price' => '300000']) }}" style="color:#000" class="ds">$200,000 to $300,000</a><br>
                              <a href="{{ route('list-search',['location'=>'TAMPA', 'min_price' => '300000', 'max_price' => '400000']) }}" style="color:#000" class="ds">$300,000 to $400,000</a><br>
                              <a href="{{ route('list-search',['location'=>'TAMPA', 'min_price' => '400000', 'max_price' => '600000']) }}" style="color:#000" class="ds">$400,000 to $600,000</a><br>
                              <!-- <a href="#" style="color:#000" class="ds">Luxury Homes</a><br>
                                 <a href="#" style="color:#000" class="ds">Open Houses</a></p> -->             
                        </div>
                     </div>
                     <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 p-2">
                        <div class="mdc-card h-100 w-100 text-center middle-xs p-3">
                           <img src="assets/images/props/slide-6.jpg" style="width: 100%;height: 200px;">
                           <h2 class="capitalize fw-600 my-3 mp ds1" style="margin-bottom: 0px !important">CLEARWATER</h2>
                           <p class="text-muted fw-500">
                              <a href="{{ route('list-search',['location'=>'CLEARWATER', 'min_price' => '200000']) }}" style="color:#000" class="ds">Under $200,000</a><br>
                              <a href="{{ route('list-search',['location'=>'CLEARWATER', 'min_price' => '200000', 'max_price' => '300000']) }}" style="color:#000" class="ds">$200,000 to $300,000</a><br>
                              <a href="{{ route('list-search',['location'=>'CLEARWATER', 'min_price' => '300000', 'max_price' => '400000']) }}" style="color:#000" class="ds">$300,000 to $400,000</a><br>
                              <a href="{{ route('list-search',['location'=>'CLEARWATER', 'min_price' => '400000', 'max_price' => '600000']) }}" style="color:#000" class="ds">$400,000 to $600,000</a><br>
                              <!-- <a href="#" style="color:#000" class="ds">Luxury Homes</a><br>
                                 <a href="#" style="color:#000" class="ds">Open Houses</a></p> -->
                        </div>
                     </div>
                  </div>
                  <!-- <div class="mdc-card p-0 row o-hidden"> 
                     <div class="col-xs-12 col-lg-12 col-xl-6 p-3">            
                        <div class="row">
                             <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 col-xl-6 p-2" style="text-align: center;">
                                 <div class="bord" style="text-align: center;border: 5px solid #007a27;padding: 30px !important;">
                                <a href=""><i class="fal fa-search-location" style="    font-size: 55px;color: #007a27;margin-bottom: 10px;"></i></a>
                                <a href="" style="    color: #007a27;text-decoration: auto;"> <h2 class="capitalize fw-600 mb-2">SEARCH MORE AREAS</h2></a>
                             </div>
                                 
                             </div>
                             <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 col-xl-6 p-2" style="text-align:center;">
                                                                     <div class="bord" style="text-align: center;border: 5px solid #007a27;padding: 30px !important;">
                     
                               <a href=""> <i class="fal fa-search-location" style="    font-size: 55px;color: #007a27;margin-bottom: 10px;"></i></a>
                                <a href="" style="    color: #007a27;text-decoration: auto;"> <h2 class="capitalize fw-600 mb-2">SEARCH BY PROPERTY TYPE</h2></a>
                                 </div>
                             </div>
                             <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 col-xl-6 p-2 tc" style="text-align:center;">
                                                                     <div class="bord" style="text-align: center;border: 5px solid #007a27;padding: 30px !important;">
                     
                               <a href=""> <i class="fal fa-search-location" style="    font-size: 55px;color: #007a27;margin-bottom: 10px;"></i></a>
                                <a href="" style="    color: #007a27;text-decoration: auto;"> <h2 class="capitalize fw-600 mb-2">SEARCH BY ZIP CODE</h2></a>
                                 </div>
                             </div>
                            
                        </div>                     
                     </div> 
                             
                     </div> -->
               </div>
            </div>
         </div>
         @endif
         @if(count($for_rent)>0)
         <div class="section mt-3" style="padding-top: 0px;">
            <div class="px-3">
               <div class="theme-container">
                  <h1 class="section-title">Owning a home has never been easier!</h1>
                  <div class="services-wrapper row">
                     <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 p-2">
                        <div class="mdc-card w-100 text-center middle-xs p-3 nw_icon">
                           <span class="material-icons">apartment</span>
                           <h4 class="mb-4">Lease With A Right To Purchase </h4>
                           <a href="https://leasewitharighttopurchase.com/properties" class="mdc-button mdc-button--raised mdc-ripple-upgraded" style="--mdc-ripple-fg-size:68px; --mdc-ripple-fg-scale:1.89812; --mdc-ripple-fg-translate-start:14.75px, -20.2813px; --mdc-ripple-fg-translate-end:22.75px, -16px;">
                           <span class="mdc-button__ripple"></span>
                           <span class="mdc-button__label">View Properties</span> 
                           </a>         
                        </div>
                     </div>
                     <!-- <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 p-2">
                        <div class="mdc-card h-100 w-100 text-center middle-xs p-3 nw_icon">
                           <span class="material-icons">house</span>           
                           <h4 style="margin-bottom:40px;">Property For Sale </h4>
                           <a href="http://www.feelgreatrealestate.com/" class="mdc-button mdc-button--raised mdc-ripple-upgraded" style="--mdc-ripple-fg-size:68px; --mdc-ripple-fg-scale:1.89812; --mdc-ripple-fg-translate-start:14.75px, -20.2813px; --mdc-ripple-fg-translate-end:22.75px, -16px;">
                           <span class="mdc-button__ripple"></span>
                           <span class="mdc-button__label">View Properties</span> 
                           </a>     
                        </div>
                     </div> -->
                  </div>
               </div>
            </div>
         </div>
         @endif
         <div class="section mt-3" style="padding-top: 0px;">
            <div class="px-3">
               <div class="theme-container">
                  <div class="services-wrapper row">
                     <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="w-100 text-center middle-xs mt-3 nw_icon"> 
                           <a href="{{ route('search-by-area') }}" class="mdc-button w-100 mdc-button--raised mdc-ripple-upgraded cus_h" style="--mdc-ripple-fg-size:68px; --mdc-ripple-fg-scale:1.89812; --mdc-ripple-fg-translate-start:14.75px, -20.2813px; --mdc-ripple-fg-translate-end:22.75px, -16px;">
                           <span class="mdc-button__ripple"></span>
                           <span class="mdc-button__label d-flex align-items-center"><span class="material-icons mx-2">location_on</span> Search More Areas</span> 
                           </a>         
                        </div>
                     </div>
                     <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <div class=" w-100 text-center middle-xs mt-3  nw_icon"> 
                           <a href="{{ route('search-by-property-type') }}" class="mdc-button w-100 mdc-button--raised mdc-ripple-upgraded cus_h" style="--mdc-ripple-fg-size:68px; --mdc-ripple-fg-scale:1.89812; --mdc-ripple-fg-translate-start:14.75px, -20.2813px; --mdc-ripple-fg-translate-end:22.75px, -16px;">
                           <span class="mdc-button__ripple"></span>
                           <span class="mdc-button__label d-flex align-items-center"><span class="material-icons mx-2">maps_home_work</span> Property Type</span> 
                           </a>         
                        </div>
                     </div>
                     <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="w-100 text-center middle-xs mt-3 nw_icon"> 
                           <a href="{{ route('search-by-zip') }}" class="mdc-button w-100 mdc-button--raised mdc-ripple-upgraded cus_h" style="--mdc-ripple-fg-size:68px; --mdc-ripple-fg-scale:1.89812; --mdc-ripple-fg-translate-start:14.75px, -20.2813px; --mdc-ripple-fg-translate-end:22.75px, -16px;">
                           <span class="mdc-button__ripple"></span>
                           <span class="mdc-button__label d-flex align-items-center"><span class="material-icons mx-2">map</span> Zip Code</span> 
                           </a>         
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         
   </div>
   </div>
   
         <!-- <div class="section mt-3">
            <div class="px-3">
                <div class="theme-container">
                    <h1 class="section-title">Our Services</h1>  
                    <div class="services-wrapper row">
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-3 p-2"> 
                            <div class="mdc-card h-100 w-100 text-center middle-xs p-3">            
                                <i class="material-icons mat-icon-xlg primary-color">location_on</i>
                                <h2 class="capitalize fw-600 my-3">Find places anywhere in the world</h2>
                                <p class="text-muted fw-500">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vestibulum egestas nunc sed ultricies.</p>           
                            </div> 
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-3 p-2"> 
                            <div class="mdc-card h-100 w-100 text-center middle-xs p-3">     
                                <i class="material-icons mat-icon-xlg primary-color">supervisor_account</i>
                                <h2 class="capitalize fw-600 my-3">We have agents with experience</h2>
                                <p class="text-muted fw-500">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vestibulum egestas nunc sed ultricies.</p>             
                            </div> 
                        </div> 
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-3 p-2">  
                            <div class="mdc-card h-100 w-100 text-center middle-xs p-3">  
                                <i class="material-icons mat-icon-xlg primary-color">home</i>
                                <h2 class="capitalize fw-600 my-3">Buy or rent beautiful properties</h2>
                                <p class="text-muted fw-500">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vestibulum egestas nunc sed ultricies.</p>             
                            </div> 
                        </div>  
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-3 p-2"> 
                            <div class="mdc-card h-100 w-100 text-center middle-xs p-3">     
                                <i class="material-icons mat-icon-xlg primary-color">format_list_bulleted</i>
                                <h2 class="capitalize fw-600 my-3">With agent account you can list properties</h2>
                                <p class="text-muted fw-500">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vestibulum egestas nunc sed ultricies.</p>             
                            </div> 
                        </div>  
                    </div> 
                </div>
            </div>   
            </div>   -->
         <div class="section testimonials">
            <div class="px-3">
               <div class="theme-container">
                  <h1 class="section-title">What people are saying</h1>
                  <div class="testimonials-carousel">
                     <div class="swiper-container">
                        <div class="swiper-wrapper">
                           <div class="swiper-slide">
                              <div class="content text-center">
                                 <!-- <img src="assets/images/profile/adam.jpg" alt="adam"> -->
                                 <div class="quote open text-left primary-color">“</div>
                                 <p class="text">Excellent professionalism, negotiation skills, and communication. He has helped me with few deals and gives unbiased opinion. I will definitely recommend him for any buying and selling needs.</p>
                                 <div class="quote close text-right primary-color">”</div>
                                 <h3 class="author">James65</h3>
                              </div>
                           </div>
                           <div class="swiper-slide">
                              <div class="content text-center">
                                 <!-- <img src="assets/images/profile/adam.jpg" alt="adam"> -->
                                 <div class="quote open text-left primary-color">“</div>
                                 <p class="text">I highly recommend Nancy EHLEN. We own a small portfolio of properties in which they helped. They continually impress me with their service. I cannot be more happier with their service; I highly advise you use them!</p>
                                 <div class="quote close text-right primary-color">”</div>
                                 <h3 class="author">Jaime Allen</h3>
                              </div>
                           </div>
                           <div class="swiper-slide">
                              <div class="content text-center">
                                 <!-- <img src="assets/images/profile/ashley.jpg" alt="ashley"> -->
                                 <div class="quote open text-left primary-color">“</div>
                                 <p class="text">Noah was awesome! The process was very smooth. We are very happy with his services. His knowledge and expertise exceeded our expectation. Communication was better than any other company we have dealt with. We definitely recommend to all of our family and friends. We will be using him again in the future if we ever need his services.</p>
                                 <div class="quote close text-right primary-color">”</div>
                                 <h3 class="author">Alecia Coleman</h3>
                              </div>
                           </div>
                           <div class="swiper-slide">
                              <div class="content text-center">
                                <!--  <img src="assets/images/profile/bruno.jpg" alt="bruno"> -->
                                 <div class="quote open text-left primary-color">“</div>
                                 <p class="text">From the application process to the move in, it was all made simple. The process was quicker than we thought and any questions we had were quickly answered along the way.</p>
                                 <div class="quote close text-right primary-color">”</div>
                                 <h3 class="author">Jeff Baker</h3>
                              </div>
                           </div>
                           <div class="swiper-slide">
                              <div class="content text-center">
                                 <!-- <img src="assets/images/profile/julia.jpg" alt="julia"> -->
                                 <div class="quote open text-left primary-color">“</div>
                                 <p class="text">It has been a pleasure working with Nancy EHLEN from the start. Their communication is timely and professional. From the Lease Purchase application process to moving in, our experience was extremely smooth.</p>
                                 <div class="quote close text-right primary-color">”</div>
                                 <h3 class="author">Teresa Diaz</h3>
                              </div>
                           </div>
                           <div class="swiper-slide">
                              <div class="content text-center">
                                 <!-- <img src="assets/images/profile/julia.jpg" alt="julia"> -->
                                 <div class="quote open text-left primary-color">“</div>
                                 <p class="text">I have known Noah who is the owner/broker of Nancy EHLEN for around 10 years and he has always been very attentive to my needs as an owner / investor of several homes in the Tampa/St pete area . I have also had the experience of dealing with other companies all around Florida and I would have to say that Nancy EHLEN really does a better job than all of them by always putting their customer needs first no matter how small.</p>
                                 <div class="quote close text-right primary-color">”</div>
                                 <h3 class="author">Walter Greenplat</h3>
                              </div>
                           </div>
                           <div class="swiper-slide">
                              <div class="content text-center">
                                 <!-- <img src="assets/images/profile/julia.jpg" alt="julia"> -->
                                 <div class="quote open text-left primary-color">“</div>
                                 <p class="text">I recommend Nancy EHLEN as my first choice whenever I need to buy or sell any property. Noah has been a great help.</p>
                                 <div class="quote close text-right primary-color">”</div>
                                 <h3 class="author">James Conley</h3>
                              </div>
                           </div>
                        </div>
                        <div class="swiper-pagination"></div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         @if(count($featured)>0)
         <div class="section mt-3">
            <div class="px-3">
               <div class="theme-container">
                  <h1 class="section-title">Featured properties</h1>
                  <div class="properties-carousel">
                     <div class="swiper-container carousel-outer">
                        <div class="swiper-wrapper">
                           @foreach($featured as $latest)
                           @php 
                           $latest_wishlist = Wishlist::where(['listing_id'=>$saleData->id, 'user_id' => $customerData['id']])->first();
                           @endphp
                           <div class="swiper-slide">
                              <div class="mdc-card property-item grid-item column-4 full-width-page">
                                 <div class="thumbnail-section">
                                    <div class="row property-status">
                                       <!-- <span class="blue">For rent</span> -->
                                       <span class="orange">New</span>
                                    </div>
                                    <div class="property-image">
                                       <div class="swiper-container">
                                          <div class="swiper-wrapper">
                                             @if(count($latest->media)>0)
                                             @foreach($latest->media as $fkey => $f_media)
                                             @php if($fkey <= 2) { @endphp
                                                AA
                                             <div class="swiper-slide">
                                                <img src="assets/images/others/transparent-bg.png" alt="slide image" data-src="{{$f_media->MediaURL?config('constant.media_site').$f_media->MediaURL:config('constant.no_property_image')}}" class="slide-item swiper-lazy">
                                                <div class="swiper-lazy-preloader"></div>
                                             </div>
                                             @php } @endphp
                                             @endforeach
                                             @else
                                             BB
                                             <div class="swiper-slide">
                                                <img src="{{ asset('assets/images/others/transparent-bg.png') }}" alt="slide image" data-src="{{config('constant.no_property_image')}}" class="slide-item swiper-lazy">
                                                <div class="swiper-lazy-preloader"></div>
                                             </div>
                                             @endif
                                          </div>
                                          <div class="swiper-pagination white"></div>
                                          <button class="mdc-icon-button swiper-button-prev swipe-arrow"><i class="material-icons mat-icon-lg">keyboard_arrow_left</i></button>
                                          <button class="mdc-icon-button swiper-button-next swipe-arrow"><i class="material-icons mat-icon-lg">keyboard_arrow_right</i></button>
                                       </div>
                                    </div>
                                    <div class="control-icons">
                                       @if($latest_wishlist == null)
                                       <button class="mdc-button add-to-favorite" title="Add To Favorite" data-name="add_featured_wish-{{$latest->id}}" onclick="addToWishlist(this,{{$latest->id}})">
                                       <i class="material-icons mat-icon-sm">favorite_border</i>
                                       </button>
                                       @else
                                       <button class="mdc-button add-to-favorite" title="Remove To Favorite" data-name="remove_featured_product-{{$latest_wishlist['id']}}" onclick="removeToWishlist(this,{{$latest_wishlist['id']}})">
                                       <i class="fa fa-heart"></i>
                                       </button>
                                       @endif
                                       <!-- <button class="mdc-button" title="Add To Compare">
                                          <i class="material-icons mat-icon-sm">compare_arrows</i>
                                          </button> -->  
                                    </div>
                                 </div>
                                 <div class="property-content-wrapper">
                                    <div class="property-content">
                                       <div class="content">
                                          <h1 class="title">
                                             <i class="material-icons text-muted">location_on</i>
                                             <span>{{$latest->UnparsedAddress}}</span></h1>
                                          <p class="row address flex-nowrap">
                                             <a href="{{ route('property.property-details',[$latest->id]) }}">{{$latest->ListOfficeName}}</a>
                                          </p>
                                          <div class="row between-xs middle-xs">
                                             <h3 class="primary-color price">
                                                <span>$ {{$latest->ListPrice}}</span> 
                                             </h3>
                                          </div>
                                          <div class="d-none d-md-flex d-lg-flex d-xl-flex">
                                             <div class="description mt-3">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat modi dignissimos blanditiis accusamus, magni provident omnis perferendis laudantium illo recusandae ab molestiae repudiandae cum obcaecati nulla adipisci fuga culpa repellat!</p>
                                             </div>
                                          </div>
                                          <div class="features mt-3">
                                             <p><span>Property size</span><span>{{$latest->LotSizeSquareFeet}} ft²</span></p>
                                             <p><span>Bedrooms</span><span>{{$latest->BedroomsTotal}}</span></p>
                                             <p><span>Bathrooms</span><span>{{$latest->BathroomsTotalInteger}}</span></p>
                                             <p><span>Garages</span><span>{{$latest->GarageSpaces}}</span></p>
                                          </div>
                                       </div>
                                       <div class="grow"></div>
                                       <div class="actions row between-xs middle-xs">
                                          <!-- <p class="row date mb-0">
                                             <i class="material-icons text-muted">date_range</i>
                                             <span class="mx-2">12 September, 2013</span>
                                             </p>  -->
                                          <a href="{{ route('property.property-details',[$latest->id]) }}" class="mdc-button mdc-button--outlined">
                                          <span class="mdc-button__ripple"></span>
                                          <span class="mdc-button__label">Details</span> 
                                          </a>  
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           @endforeach
                        </div>
                        <button class="prop-prev swiper-button-prev swipe-arrow mdc-fab mdc-fab--mini primary">
                        <span class="mdc-fab__ripple"></span>
                        <span class="mdc-fab__icon material-icons">keyboard_arrow_left</span> 
                        </button>
                        <button class="prop-next swiper-button-next swipe-arrow mdc-fab mdc-fab--mini primary"> 
                        <span class="mdc-fab__ripple"></span>
                        <span class="mdc-fab__icon material-icons">keyboard_arrow_right</span> 
                        </button> 
                     </div>
                  </div>
               </div>
            </div>
         </div>
         @endif
         <div class="section advaties">
            <div class="px-3">
               <div class="theme-container">
                  <h1 class="section-title">Featured Title Company</h1>
                  <div class="advaties-slider">
                     <div class="swiper-container">
                        <div class="swiper-wrapper">
                           <div class="swiper-slide">
                              <div class="row my-3 justify-content-center" style="justify-content: center;">
                                 <div class="col-12">
                                    <div class="content text-center mdc-card">
                                 <!-- <img src="assets/images/profile/adam.jpg" alt="adam"> -->
                                 
                                 <!-- <h3 class="author">Tier 1 Title </h3>
                                 <p class="text">4801 George Rd Suite 150 Tampa, FL 33634.</p>
                                 <p class="text">Phone: 866-217-0018</p>
                                 <p class="text">Email: purchaseclosings@tieronetitle.com</p>
                                 <p class="text">"Tell em Nancy EHLEN sent ya!"</p> -->
                                 <img src="assets/images/tier-one-title.png" width="100%">
                                 
                                 
                              </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="swiper-pagination mt-5"></div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!--  <div class="section agents">
            <div class="px-3">
                <div class="theme-container">
                    <h1 class="section-title">Meet our agents</h1> 
                    <div class="agents-carousel"> 
                        <div class="swiper-container carousel-outer"> 
                            <div class="swiper-wrapper">  
                                <div class="swiper-slide"> 
                                    <div class="mdc-card o-hidden">
                                        <div>
                                            <img src="assets/images/others/transparent-bg.png" alt="slide image" data-src="./assets/images/agents/a-1.jpg" class="swiper-lazy d-block mw-100">
                                            <div class="swiper-lazy-preloader"></div>
                                        </div>
                                        <div class="p-3">
                                            <h2 class="fw-600">Lusia Manuel</h2> 
                                            
                                            <p class="mt-3 text-muted fw-500">Phasellus sed metus leo. Donec laoreet, lacus ut suscipit convallis, erat enim eleifend nulla, at sagittis enim urna et lacus.</p>                                    
                                            <p class="row middle-xs"><i class="material-icons primary-color" title="Organization">business</i><span class="mx-2 text-muted fw-500">Nancy EHLEN</span></p>
                                            <p class="row middle-xs"><i class="material-icons primary-color">email</i><span class="mx-2 text-muted fw-500">lusia.m@Nancy EHLEN.com</span></p>
                                            <p class="row middle-xs"><i class="material-icons primary-color">call</i><span class="mx-2 text-muted fw-500">(224) 267-1346</span></p>
                                            <div class="row pb-3">
                                                <div class="divider"></div>
                                            </div> 
                                            <div class="row between-xs middle-xs">
                                                <div class="row start-xs middle-xs"> 
                                                    <a href="https://www.facebook.com/" target="blank" class="social-icon" title="facebook">
                                                        <svg class="material-icons text-muted" viewBox="0 0 24 24">
                                                          <path d="M5,3H19A2,2 0 0,1 21,5V19A2,2 0 0,1 19,21H5A2,2 0 0,1 3,19V5A2,2 0 0,1 5,3M18,5H15.5A3.5,3.5 0 0,0 12,8.5V11H10V14H12V21H15V14H18V11H15V9A1,1 0 0,1 16,8H18V5Z" />
                                                        </svg>
                                                    </a> 
                                                    <a href="https://twitter.com/" target="blank" class="social-icon" title="twitter">
                                                        <svg class="material-icons text-muted" viewBox="0 0 24 24">
                                                            <path d="M5,3H19A2,2 0 0,1 21,5V19A2,2 0 0,1 19,21H5A2,2 0 0,1 3,19V5A2,2 0 0,1 5,3M17.71,9.33C18.19,8.93 18.75,8.45 19,7.92C18.59,8.13 18.1,8.26 17.56,8.33C18.06,7.97 18.47,7.5 18.68,6.86C18.16,7.14 17.63,7.38 16.97,7.5C15.42,5.63 11.71,7.15 12.37,9.95C9.76,9.79 8.17,8.61 6.85,7.16C6.1,8.38 6.75,10.23 7.64,10.74C7.18,10.71 6.83,10.57 6.5,10.41C6.54,11.95 7.39,12.69 8.58,13.09C8.22,13.16 7.82,13.18 7.44,13.12C7.81,14.19 8.58,14.86 9.9,15C9,15.76 7.34,16.29 6,16.08C7.15,16.81 8.46,17.39 10.28,17.31C14.69,17.11 17.64,13.95 17.71,9.33Z" />
                                                        </svg>
                                                    </a>
                                                    <a href="https://www.linkedin.com/" target="blank" class="social-icon" title="linkedin"> 
                                                        <svg class="material-icons text-muted" viewBox="0 0 24 24">
                                                          <path d="M19,3A2,2 0 0,1 21,5V19A2,2 0 0,1 19,21H5A2,2 0 0,1 3,19V5A2,2 0 0,1 5,3H19M18.5,18.5V13.2A3.26,3.26 0 0,0 15.24,9.94C14.39,9.94 13.4,10.46 12.92,11.24V10.13H10.13V18.5H12.92V13.57C12.92,12.8 13.54,12.17 14.31,12.17A1.4,1.4 0 0,1 15.71,13.57V18.5H18.5M6.88,8.56A1.68,1.68 0 0,0 8.56,6.88C8.56,5.95 7.81,5.19 6.88,5.19A1.69,1.69 0 0,0 5.19,6.88C5.19,7.81 5.95,8.56 6.88,8.56M8.27,18.5V10.13H5.5V18.5H8.27Z" />
                                                        </svg>
                                                    </a>
                                                    <a href="https://instagram.com/" target="blank" class="social-icon" title="instagram"> 
                                                        <svg class="material-icons text-muted" viewBox="0 0 24 24">
                                                            <path d="M7.8,2H16.2C19.4,2 22,4.6 22,7.8V16.2A5.8,5.8 0 0,1 16.2,22H7.8C4.6,22 2,19.4 2,16.2V7.8A5.8,5.8 0 0,1 7.8,2M7.6,4A3.6,3.6 0 0,0 4,7.6V16.4C4,18.39 5.61,20 7.6,20H16.4A3.6,3.6 0 0,0 20,16.4V7.6C20,5.61 18.39,4 16.4,4H7.6M17.25,5.5A1.25,1.25 0 0,1 18.5,6.75A1.25,1.25 0 0,1 17.25,8A1.25,1.25 0 0,1 16,6.75A1.25,1.25 0 0,1 17.25,5.5M12,7A5,5 0 0,1 17,12A5,5 0 0,1 12,17A5,5 0 0,1 7,12A5,5 0 0,1 12,7M12,9A3,3 0 0,0 9,12A3,3 0 0,0 12,15A3,3 0 0,0 15,12A3,3 0 0,0 12,9Z" />
                                                        </svg>
                                                    </a> 
                                                    <a href="http://www.agent.com/" target="blank" class="social-icon" title="website"> 
                                                        <svg class="material-icons text-muted" viewBox="0 0 24 24">
                                                            <path d="M10.59,13.41C11,13.8 11,14.44 10.59,14.83C10.2,15.22 9.56,15.22 9.17,14.83C7.22,12.88 7.22,9.71 9.17,7.76V7.76L12.71,4.22C14.66,2.27 17.83,2.27 19.78,4.22C21.73,6.17 21.73,9.34 19.78,11.29L18.29,12.78C18.3,11.96 18.17,11.14 17.89,10.36L18.36,9.88C19.54,8.71 19.54,6.81 18.36,5.64C17.19,4.46 15.29,4.46 14.12,5.64L10.59,9.17C9.41,10.34 9.41,12.24 10.59,13.41M13.41,9.17C13.8,8.78 14.44,8.78 14.83,9.17C16.78,11.12 16.78,14.29 14.83,16.24V16.24L11.29,19.78C9.34,21.73 6.17,21.73 4.22,19.78C2.27,17.83 2.27,14.66 4.22,12.71L5.71,11.22C5.7,12.04 5.83,12.86 6.11,13.65L5.64,14.12C4.46,15.29 4.46,17.19 5.64,18.36C6.81,19.54 8.71,19.54 9.88,18.36L13.41,14.83C14.59,13.66 14.59,11.76 13.41,10.59C13,10.2 13,9.56 13.41,9.17Z" />
                                                        </svg>
                                                    </a> 
                                                </div> 
                                                <a href="javascript:void(0);" class="mdc-button">
                                                    <span class="mdc-button__ripple"></span>
                                                    <span class="mdc-button__label">View Profile</span>
                                                </a>
                                            </div> 
                                        </div>  
                                    </div>  
                                </div> 
                                <div class="swiper-slide"> 
                                    <div class="mdc-card o-hidden">
                                        <div>
                                            <img src="assets/images/others/transparent-bg.png" alt="slide image" data-src="./assets/images/agents/a-2.jpg" class="swiper-lazy d-block mw-100">
                                            <div class="swiper-lazy-preloader"></div>
                                        </div>
                                        <div class="p-3">
                                            <h2 class="fw-600">Andy Warhol</h2> 
                                           
                                            <p class="mt-3 text-muted fw-500">Phasellus sed metus leo. Donec laoreet, lacus ut suscipit convallis, erat enim eleifend nulla, at sagittis enim urna et lacus.</p>                                    
                                            <p class="row middle-xs"><i class="material-icons primary-color" title="Organization">business</i><span class="mx-2 text-muted fw-500">Nancy EHLEN</span></p>
                                            <p class="row middle-xs"><i class="material-icons primary-color">email</i><span class="mx-2 text-muted fw-500">andy.w@Nancy EHLEN.com</span></p>
                                            <p class="row middle-xs"><i class="material-icons primary-color">call</i><span class="mx-2 text-muted fw-500">(212) 457-2308</span></p>
                                            <div class="row pb-3">
                                                <div class="divider"></div>
                                            </div> 
                                            <div class="row between-xs middle-xs">
                                                <div class="row start-xs middle-xs"> 
                                                    <a href="https://www.facebook.com/" target="blank" class="social-icon" title="facebook">
                                                        <svg class="material-icons text-muted" viewBox="0 0 24 24">
                                                          <path d="M5,3H19A2,2 0 0,1 21,5V19A2,2 0 0,1 19,21H5A2,2 0 0,1 3,19V5A2,2 0 0,1 5,3M18,5H15.5A3.5,3.5 0 0,0 12,8.5V11H10V14H12V21H15V14H18V11H15V9A1,1 0 0,1 16,8H18V5Z" />
                                                        </svg>
                                                    </a> 
                                                    <a href="https://twitter.com/" target="blank" class="social-icon" title="twitter">
                                                        <svg class="material-icons text-muted" viewBox="0 0 24 24">
                                                            <path d="M5,3H19A2,2 0 0,1 21,5V19A2,2 0 0,1 19,21H5A2,2 0 0,1 3,19V5A2,2 0 0,1 5,3M17.71,9.33C18.19,8.93 18.75,8.45 19,7.92C18.59,8.13 18.1,8.26 17.56,8.33C18.06,7.97 18.47,7.5 18.68,6.86C18.16,7.14 17.63,7.38 16.97,7.5C15.42,5.63 11.71,7.15 12.37,9.95C9.76,9.79 8.17,8.61 6.85,7.16C6.1,8.38 6.75,10.23 7.64,10.74C7.18,10.71 6.83,10.57 6.5,10.41C6.54,11.95 7.39,12.69 8.58,13.09C8.22,13.16 7.82,13.18 7.44,13.12C7.81,14.19 8.58,14.86 9.9,15C9,15.76 7.34,16.29 6,16.08C7.15,16.81 8.46,17.39 10.28,17.31C14.69,17.11 17.64,13.95 17.71,9.33Z" />
                                                        </svg>
                                                    </a>
                                                    <a href="https://www.linkedin.com/" target="blank" class="social-icon" title="linkedin"> 
                                                        <svg class="material-icons text-muted" viewBox="0 0 24 24">
                                                          <path d="M19,3A2,2 0 0,1 21,5V19A2,2 0 0,1 19,21H5A2,2 0 0,1 3,19V5A2,2 0 0,1 5,3H19M18.5,18.5V13.2A3.26,3.26 0 0,0 15.24,9.94C14.39,9.94 13.4,10.46 12.92,11.24V10.13H10.13V18.5H12.92V13.57C12.92,12.8 13.54,12.17 14.31,12.17A1.4,1.4 0 0,1 15.71,13.57V18.5H18.5M6.88,8.56A1.68,1.68 0 0,0 8.56,6.88C8.56,5.95 7.81,5.19 6.88,5.19A1.69,1.69 0 0,0 5.19,6.88C5.19,7.81 5.95,8.56 6.88,8.56M8.27,18.5V10.13H5.5V18.5H8.27Z" />
                                                        </svg>
                                                    </a>
                                                    <a href="https://instagram.com/" target="blank" class="social-icon" title="instagram"> 
                                                        <svg class="material-icons text-muted" viewBox="0 0 24 24">
                                                            <path d="M7.8,2H16.2C19.4,2 22,4.6 22,7.8V16.2A5.8,5.8 0 0,1 16.2,22H7.8C4.6,22 2,19.4 2,16.2V7.8A5.8,5.8 0 0,1 7.8,2M7.6,4A3.6,3.6 0 0,0 4,7.6V16.4C4,18.39 5.61,20 7.6,20H16.4A3.6,3.6 0 0,0 20,16.4V7.6C20,5.61 18.39,4 16.4,4H7.6M17.25,5.5A1.25,1.25 0 0,1 18.5,6.75A1.25,1.25 0 0,1 17.25,8A1.25,1.25 0 0,1 16,6.75A1.25,1.25 0 0,1 17.25,5.5M12,7A5,5 0 0,1 17,12A5,5 0 0,1 12,17A5,5 0 0,1 7,12A5,5 0 0,1 12,7M12,9A3,3 0 0,0 9,12A3,3 0 0,0 12,15A3,3 0 0,0 15,12A3,3 0 0,0 12,9Z" />
                                                        </svg>
                                                    </a> 
                                                    <a href="http://www.agent.com/" target="blank" class="social-icon" title="website"> 
                                                        <svg class="material-icons text-muted" viewBox="0 0 24 24">
                                                            <path d="M10.59,13.41C11,13.8 11,14.44 10.59,14.83C10.2,15.22 9.56,15.22 9.17,14.83C7.22,12.88 7.22,9.71 9.17,7.76V7.76L12.71,4.22C14.66,2.27 17.83,2.27 19.78,4.22C21.73,6.17 21.73,9.34 19.78,11.29L18.29,12.78C18.3,11.96 18.17,11.14 17.89,10.36L18.36,9.88C19.54,8.71 19.54,6.81 18.36,5.64C17.19,4.46 15.29,4.46 14.12,5.64L10.59,9.17C9.41,10.34 9.41,12.24 10.59,13.41M13.41,9.17C13.8,8.78 14.44,8.78 14.83,9.17C16.78,11.12 16.78,14.29 14.83,16.24V16.24L11.29,19.78C9.34,21.73 6.17,21.73 4.22,19.78C2.27,17.83 2.27,14.66 4.22,12.71L5.71,11.22C5.7,12.04 5.83,12.86 6.11,13.65L5.64,14.12C4.46,15.29 4.46,17.19 5.64,18.36C6.81,19.54 8.71,19.54 9.88,18.36L13.41,14.83C14.59,13.66 14.59,11.76 13.41,10.59C13,10.2 13,9.56 13.41,9.17Z" />
                                                        </svg>
                                                    </a> 
                                                </div> 
                                                <a href="javascript:void(0);" class="mdc-button">
                                                    <span class="mdc-button__ripple"></span>
                                                    <span class="mdc-button__label">View Profile</span>
                                                </a>
                                            </div> 
                                        </div>  
                                    </div>  
                                </div> 
                                <div class="swiper-slide"> 
                                    <div class="mdc-card o-hidden">
                                        <div>
                                            <img src="assets/images/others/transparent-bg.png" alt="slide image" data-src="./assets/images/agents/a-3.jpg" class="swiper-lazy d-block mw-100">
                                            <div class="swiper-lazy-preloader"></div>
                                        </div>
                                        <div class="p-3">
                                            <h2 class="fw-600">Tereza Stiles</h2> 
                                            
                                            <p class="mt-3 text-muted fw-500">Phasellus sed metus leo. Donec laoreet, lacus ut suscipit convallis, erat enim eleifend nulla, at sagittis enim urna et lacus.</p>                                    
                                            <p class="row middle-xs"><i class="material-icons primary-color" title="Organization">business</i><span class="mx-2 text-muted fw-500">Nancy EHLEN</span></p>
                                            <p class="row middle-xs"><i class="material-icons primary-color">email</i><span class="mx-2 text-muted fw-500">tereza.s@Nancy EHLEN.com</span></p>
                                            <p class="row middle-xs"><i class="material-icons primary-color">call</i><span class="mx-2 text-muted fw-500">(214) 617-2614</span></p>
                                            <div class="row pb-3">
                                                <div class="divider"></div>
                                            </div> 
                                            <div class="row between-xs middle-xs">
                                                <div class="row start-xs middle-xs"> 
                                                    <a href="https://www.facebook.com/" target="blank" class="social-icon" title="facebook">
                                                        <svg class="material-icons text-muted" viewBox="0 0 24 24">
                                                          <path d="M5,3H19A2,2 0 0,1 21,5V19A2,2 0 0,1 19,21H5A2,2 0 0,1 3,19V5A2,2 0 0,1 5,3M18,5H15.5A3.5,3.5 0 0,0 12,8.5V11H10V14H12V21H15V14H18V11H15V9A1,1 0 0,1 16,8H18V5Z" />
                                                        </svg>
                                                    </a> 
                                                    <a href="https://twitter.com/" target="blank" class="social-icon" title="twitter">
                                                        <svg class="material-icons text-muted" viewBox="0 0 24 24">
                                                            <path d="M5,3H19A2,2 0 0,1 21,5V19A2,2 0 0,1 19,21H5A2,2 0 0,1 3,19V5A2,2 0 0,1 5,3M17.71,9.33C18.19,8.93 18.75,8.45 19,7.92C18.59,8.13 18.1,8.26 17.56,8.33C18.06,7.97 18.47,7.5 18.68,6.86C18.16,7.14 17.63,7.38 16.97,7.5C15.42,5.63 11.71,7.15 12.37,9.95C9.76,9.79 8.17,8.61 6.85,7.16C6.1,8.38 6.75,10.23 7.64,10.74C7.18,10.71 6.83,10.57 6.5,10.41C6.54,11.95 7.39,12.69 8.58,13.09C8.22,13.16 7.82,13.18 7.44,13.12C7.81,14.19 8.58,14.86 9.9,15C9,15.76 7.34,16.29 6,16.08C7.15,16.81 8.46,17.39 10.28,17.31C14.69,17.11 17.64,13.95 17.71,9.33Z" />
                                                        </svg>
                                                    </a>
                                                    <a href="https://www.linkedin.com/" target="blank" class="social-icon" title="linkedin"> 
                                                        <svg class="material-icons text-muted" viewBox="0 0 24 24">
                                                          <path d="M19,3A2,2 0 0,1 21,5V19A2,2 0 0,1 19,21H5A2,2 0 0,1 3,19V5A2,2 0 0,1 5,3H19M18.5,18.5V13.2A3.26,3.26 0 0,0 15.24,9.94C14.39,9.94 13.4,10.46 12.92,11.24V10.13H10.13V18.5H12.92V13.57C12.92,12.8 13.54,12.17 14.31,12.17A1.4,1.4 0 0,1 15.71,13.57V18.5H18.5M6.88,8.56A1.68,1.68 0 0,0 8.56,6.88C8.56,5.95 7.81,5.19 6.88,5.19A1.69,1.69 0 0,0 5.19,6.88C5.19,7.81 5.95,8.56 6.88,8.56M8.27,18.5V10.13H5.5V18.5H8.27Z" />
                                                        </svg>
                                                    </a>
                                                    <a href="https://instagram.com/" target="blank" class="social-icon" title="instagram"> 
                                                        <svg class="material-icons text-muted" viewBox="0 0 24 24">
                                                            <path d="M7.8,2H16.2C19.4,2 22,4.6 22,7.8V16.2A5.8,5.8 0 0,1 16.2,22H7.8C4.6,22 2,19.4 2,16.2V7.8A5.8,5.8 0 0,1 7.8,2M7.6,4A3.6,3.6 0 0,0 4,7.6V16.4C4,18.39 5.61,20 7.6,20H16.4A3.6,3.6 0 0,0 20,16.4V7.6C20,5.61 18.39,4 16.4,4H7.6M17.25,5.5A1.25,1.25 0 0,1 18.5,6.75A1.25,1.25 0 0,1 17.25,8A1.25,1.25 0 0,1 16,6.75A1.25,1.25 0 0,1 17.25,5.5M12,7A5,5 0 0,1 17,12A5,5 0 0,1 12,17A5,5 0 0,1 7,12A5,5 0 0,1 12,7M12,9A3,3 0 0,0 9,12A3,3 0 0,0 12,15A3,3 0 0,0 15,12A3,3 0 0,0 12,9Z" />
                                                        </svg>
                                                    </a> 
                                                    <a href="http://www.agent.com/" target="blank" class="social-icon" title="website"> 
                                                        <svg class="material-icons text-muted" viewBox="0 0 24 24">
                                                            <path d="M10.59,13.41C11,13.8 11,14.44 10.59,14.83C10.2,15.22 9.56,15.22 9.17,14.83C7.22,12.88 7.22,9.71 9.17,7.76V7.76L12.71,4.22C14.66,2.27 17.83,2.27 19.78,4.22C21.73,6.17 21.73,9.34 19.78,11.29L18.29,12.78C18.3,11.96 18.17,11.14 17.89,10.36L18.36,9.88C19.54,8.71 19.54,6.81 18.36,5.64C17.19,4.46 15.29,4.46 14.12,5.64L10.59,9.17C9.41,10.34 9.41,12.24 10.59,13.41M13.41,9.17C13.8,8.78 14.44,8.78 14.83,9.17C16.78,11.12 16.78,14.29 14.83,16.24V16.24L11.29,19.78C9.34,21.73 6.17,21.73 4.22,19.78C2.27,17.83 2.27,14.66 4.22,12.71L5.71,11.22C5.7,12.04 5.83,12.86 6.11,13.65L5.64,14.12C4.46,15.29 4.46,17.19 5.64,18.36C6.81,19.54 8.71,19.54 9.88,18.36L13.41,14.83C14.59,13.66 14.59,11.76 13.41,10.59C13,10.2 13,9.56 13.41,9.17Z" />
                                                        </svg>
                                                    </a> 
                                                </div> 
                                                <a href="javascript:void(0);" class="mdc-button">
                                                    <span class="mdc-button__ripple"></span>
                                                    <span class="mdc-button__label">View Profile</span>
                                                </a>
                                            </div> 
                                        </div>  
                                    </div>  
                                </div> 
                                <div class="swiper-slide"> 
                                    <div class="mdc-card o-hidden">
                                        <div>
                                            <img src="assets/images/others/transparent-bg.png" alt="slide image" data-src="./assets/images/agents/a-4.jpg" class="swiper-lazy d-block mw-100">
                                            <div class="swiper-lazy-preloader"></div>
                                        </div>
                                        <div class="p-3">
                                            <h2 class="fw-600">Michael Blair</h2> 
                                            
                                            <p class="mt-3 text-muted fw-500">Phasellus sed metus leo. Donec laoreet, lacus ut suscipit convallis, erat enim eleifend nulla, at sagittis enim urna et lacus.</p>                                    
                                            <p class="row middle-xs"><i class="material-icons primary-color" title="Organization">business</i><span class="mx-2 text-muted fw-500">Nancy EHLEN</span></p>
                                            <p class="row middle-xs"><i class="material-icons primary-color">email</i><span class="mx-2 text-muted fw-500">michael.b@Nancy EHLEN.com</span></p>
                                            <p class="row middle-xs"><i class="material-icons primary-color">call</i><span class="mx-2 text-muted fw-500">(267) 388-1637</span></p>
                                            <div class="row pb-3">
                                                <div class="divider"></div>
                                            </div> 
                                            <div class="row between-xs middle-xs">
                                                <div class="row start-xs middle-xs"> 
                                                    <a href="https://www.facebook.com/" target="blank" class="social-icon" title="facebook">
                                                        <svg class="material-icons text-muted" viewBox="0 0 24 24">
                                                          <path d="M5,3H19A2,2 0 0,1 21,5V19A2,2 0 0,1 19,21H5A2,2 0 0,1 3,19V5A2,2 0 0,1 5,3M18,5H15.5A3.5,3.5 0 0,0 12,8.5V11H10V14H12V21H15V14H18V11H15V9A1,1 0 0,1 16,8H18V5Z" />
                                                        </svg>
                                                    </a> 
                                                    <a href="https://twitter.com/" target="blank" class="social-icon" title="twitter">
                                                        <svg class="material-icons text-muted" viewBox="0 0 24 24">
                                                            <path d="M5,3H19A2,2 0 0,1 21,5V19A2,2 0 0,1 19,21H5A2,2 0 0,1 3,19V5A2,2 0 0,1 5,3M17.71,9.33C18.19,8.93 18.75,8.45 19,7.92C18.59,8.13 18.1,8.26 17.56,8.33C18.06,7.97 18.47,7.5 18.68,6.86C18.16,7.14 17.63,7.38 16.97,7.5C15.42,5.63 11.71,7.15 12.37,9.95C9.76,9.79 8.17,8.61 6.85,7.16C6.1,8.38 6.75,10.23 7.64,10.74C7.18,10.71 6.83,10.57 6.5,10.41C6.54,11.95 7.39,12.69 8.58,13.09C8.22,13.16 7.82,13.18 7.44,13.12C7.81,14.19 8.58,14.86 9.9,15C9,15.76 7.34,16.29 6,16.08C7.15,16.81 8.46,17.39 10.28,17.31C14.69,17.11 17.64,13.95 17.71,9.33Z" />
                                                        </svg>
                                                    </a>
                                                    <a href="https://www.linkedin.com/" target="blank" class="social-icon" title="linkedin"> 
                                                        <svg class="material-icons text-muted" viewBox="0 0 24 24">
                                                          <path d="M19,3A2,2 0 0,1 21,5V19A2,2 0 0,1 19,21H5A2,2 0 0,1 3,19V5A2,2 0 0,1 5,3H19M18.5,18.5V13.2A3.26,3.26 0 0,0 15.24,9.94C14.39,9.94 13.4,10.46 12.92,11.24V10.13H10.13V18.5H12.92V13.57C12.92,12.8 13.54,12.17 14.31,12.17A1.4,1.4 0 0,1 15.71,13.57V18.5H18.5M6.88,8.56A1.68,1.68 0 0,0 8.56,6.88C8.56,5.95 7.81,5.19 6.88,5.19A1.69,1.69 0 0,0 5.19,6.88C5.19,7.81 5.95,8.56 6.88,8.56M8.27,18.5V10.13H5.5V18.5H8.27Z" />
                                                        </svg>
                                                    </a>
                                                    <a href="https://instagram.com/" target="blank" class="social-icon" title="instagram"> 
                                                        <svg class="material-icons text-muted" viewBox="0 0 24 24">
                                                            <path d="M7.8,2H16.2C19.4,2 22,4.6 22,7.8V16.2A5.8,5.8 0 0,1 16.2,22H7.8C4.6,22 2,19.4 2,16.2V7.8A5.8,5.8 0 0,1 7.8,2M7.6,4A3.6,3.6 0 0,0 4,7.6V16.4C4,18.39 5.61,20 7.6,20H16.4A3.6,3.6 0 0,0 20,16.4V7.6C20,5.61 18.39,4 16.4,4H7.6M17.25,5.5A1.25,1.25 0 0,1 18.5,6.75A1.25,1.25 0 0,1 17.25,8A1.25,1.25 0 0,1 16,6.75A1.25,1.25 0 0,1 17.25,5.5M12,7A5,5 0 0,1 17,12A5,5 0 0,1 12,17A5,5 0 0,1 7,12A5,5 0 0,1 12,7M12,9A3,3 0 0,0 9,12A3,3 0 0,0 12,15A3,3 0 0,0 15,12A3,3 0 0,0 12,9Z" />
                                                        </svg>
                                                    </a> 
                                                    <a href="http://www.agent.com/" target="blank" class="social-icon" title="website"> 
                                                        <svg class="material-icons text-muted" viewBox="0 0 24 24">
                                                            <path d="M10.59,13.41C11,13.8 11,14.44 10.59,14.83C10.2,15.22 9.56,15.22 9.17,14.83C7.22,12.88 7.22,9.71 9.17,7.76V7.76L12.71,4.22C14.66,2.27 17.83,2.27 19.78,4.22C21.73,6.17 21.73,9.34 19.78,11.29L18.29,12.78C18.3,11.96 18.17,11.14 17.89,10.36L18.36,9.88C19.54,8.71 19.54,6.81 18.36,5.64C17.19,4.46 15.29,4.46 14.12,5.64L10.59,9.17C9.41,10.34 9.41,12.24 10.59,13.41M13.41,9.17C13.8,8.78 14.44,8.78 14.83,9.17C16.78,11.12 16.78,14.29 14.83,16.24V16.24L11.29,19.78C9.34,21.73 6.17,21.73 4.22,19.78C2.27,17.83 2.27,14.66 4.22,12.71L5.71,11.22C5.7,12.04 5.83,12.86 6.11,13.65L5.64,14.12C4.46,15.29 4.46,17.19 5.64,18.36C6.81,19.54 8.71,19.54 9.88,18.36L13.41,14.83C14.59,13.66 14.59,11.76 13.41,10.59C13,10.2 13,9.56 13.41,9.17Z" />
                                                        </svg>
                                                    </a> 
                                                </div> 
                                                <a href="javascript:void(0);" class="mdc-button">
                                                    <span class="mdc-button__ripple"></span>
                                                    <span class="mdc-button__label">View Profile</span>
                                                </a>
                                            </div> 
                                        </div>  
                                    </div>  
                                </div> 
                                <div class="swiper-slide"> 
                                    <div class="mdc-card o-hidden">
                                        <div>
                                            <img src="assets/images/others/transparent-bg.png" alt="slide image" data-src="./assets/images/agents/a-5.jpg" class="swiper-lazy d-block mw-100">
                                            <div class="swiper-lazy-preloader"></div>
                                        </div>
                                        <div class="p-3">
                                            <h2 class="fw-600">Michelle Ormond</h2> 
                                            
                                            <p class="mt-3 text-muted fw-500">Phasellus sed metus leo. Donec laoreet, lacus ut suscipit convallis, erat enim eleifend nulla, at sagittis enim urna et lacus.</p>                                    
                                            <p class="row middle-xs"><i class="material-icons primary-color" title="Organization">business</i><span class="mx-2 text-muted fw-500">Nancy EHLEN</span></p>
                                            <p class="row middle-xs"><i class="material-icons primary-color">email</i><span class="mx-2 text-muted fw-500">michelle.o@Nancy EHLEN.com</span></p>
                                            <p class="row middle-xs"><i class="material-icons primary-color">call</i><span class="mx-2 text-muted fw-500">(267) 388-1637</span></p>
                                            <div class="row pb-3">
                                                <div class="divider"></div>
                                            </div> 
                                            <div class="row between-xs middle-xs">
                                                <div class="row start-xs middle-xs"> 
                                                    <a href="https://www.facebook.com/" target="blank" class="social-icon" title="facebook">
                                                        <svg class="material-icons text-muted" viewBox="0 0 24 24">
                                                          <path d="M5,3H19A2,2 0 0,1 21,5V19A2,2 0 0,1 19,21H5A2,2 0 0,1 3,19V5A2,2 0 0,1 5,3M18,5H15.5A3.5,3.5 0 0,0 12,8.5V11H10V14H12V21H15V14H18V11H15V9A1,1 0 0,1 16,8H18V5Z" />
                                                        </svg>
                                                    </a> 
                                                    <a href="https://twitter.com/" target="blank" class="social-icon" title="twitter">
                                                        <svg class="material-icons text-muted" viewBox="0 0 24 24">
                                                            <path d="M5,3H19A2,2 0 0,1 21,5V19A2,2 0 0,1 19,21H5A2,2 0 0,1 3,19V5A2,2 0 0,1 5,3M17.71,9.33C18.19,8.93 18.75,8.45 19,7.92C18.59,8.13 18.1,8.26 17.56,8.33C18.06,7.97 18.47,7.5 18.68,6.86C18.16,7.14 17.63,7.38 16.97,7.5C15.42,5.63 11.71,7.15 12.37,9.95C9.76,9.79 8.17,8.61 6.85,7.16C6.1,8.38 6.75,10.23 7.64,10.74C7.18,10.71 6.83,10.57 6.5,10.41C6.54,11.95 7.39,12.69 8.58,13.09C8.22,13.16 7.82,13.18 7.44,13.12C7.81,14.19 8.58,14.86 9.9,15C9,15.76 7.34,16.29 6,16.08C7.15,16.81 8.46,17.39 10.28,17.31C14.69,17.11 17.64,13.95 17.71,9.33Z" />
                                                        </svg>
                                                    </a>
                                                    <a href="https://www.linkedin.com/" target="blank" class="social-icon" title="linkedin"> 
                                                        <svg class="material-icons text-muted" viewBox="0 0 24 24">
                                                          <path d="M19,3A2,2 0 0,1 21,5V19A2,2 0 0,1 19,21H5A2,2 0 0,1 3,19V5A2,2 0 0,1 5,3H19M18.5,18.5V13.2A3.26,3.26 0 0,0 15.24,9.94C14.39,9.94 13.4,10.46 12.92,11.24V10.13H10.13V18.5H12.92V13.57C12.92,12.8 13.54,12.17 14.31,12.17A1.4,1.4 0 0,1 15.71,13.57V18.5H18.5M6.88,8.56A1.68,1.68 0 0,0 8.56,6.88C8.56,5.95 7.81,5.19 6.88,5.19A1.69,1.69 0 0,0 5.19,6.88C5.19,7.81 5.95,8.56 6.88,8.56M8.27,18.5V10.13H5.5V18.5H8.27Z" />
                                                        </svg>
                                                    </a>
                                                    <a href="https://instagram.com/" target="blank" class="social-icon" title="instagram"> 
                                                        <svg class="material-icons text-muted" viewBox="0 0 24 24">
                                                            <path d="M7.8,2H16.2C19.4,2 22,4.6 22,7.8V16.2A5.8,5.8 0 0,1 16.2,22H7.8C4.6,22 2,19.4 2,16.2V7.8A5.8,5.8 0 0,1 7.8,2M7.6,4A3.6,3.6 0 0,0 4,7.6V16.4C4,18.39 5.61,20 7.6,20H16.4A3.6,3.6 0 0,0 20,16.4V7.6C20,5.61 18.39,4 16.4,4H7.6M17.25,5.5A1.25,1.25 0 0,1 18.5,6.75A1.25,1.25 0 0,1 17.25,8A1.25,1.25 0 0,1 16,6.75A1.25,1.25 0 0,1 17.25,5.5M12,7A5,5 0 0,1 17,12A5,5 0 0,1 12,17A5,5 0 0,1 7,12A5,5 0 0,1 12,7M12,9A3,3 0 0,0 9,12A3,3 0 0,0 12,15A3,3 0 0,0 15,12A3,3 0 0,0 12,9Z" />
                                                        </svg>
                                                    </a> 
                                                    <a href="http://www.agent.com/" target="blank" class="social-icon" title="website"> 
                                                        <svg class="material-icons text-muted" viewBox="0 0 24 24">
                                                            <path d="M10.59,13.41C11,13.8 11,14.44 10.59,14.83C10.2,15.22 9.56,15.22 9.17,14.83C7.22,12.88 7.22,9.71 9.17,7.76V7.76L12.71,4.22C14.66,2.27 17.83,2.27 19.78,4.22C21.73,6.17 21.73,9.34 19.78,11.29L18.29,12.78C18.3,11.96 18.17,11.14 17.89,10.36L18.36,9.88C19.54,8.71 19.54,6.81 18.36,5.64C17.19,4.46 15.29,4.46 14.12,5.64L10.59,9.17C9.41,10.34 9.41,12.24 10.59,13.41M13.41,9.17C13.8,8.78 14.44,8.78 14.83,9.17C16.78,11.12 16.78,14.29 14.83,16.24V16.24L11.29,19.78C9.34,21.73 6.17,21.73 4.22,19.78C2.27,17.83 2.27,14.66 4.22,12.71L5.71,11.22C5.7,12.04 5.83,12.86 6.11,13.65L5.64,14.12C4.46,15.29 4.46,17.19 5.64,18.36C6.81,19.54 8.71,19.54 9.88,18.36L13.41,14.83C14.59,13.66 14.59,11.76 13.41,10.59C13,10.2 13,9.56 13.41,9.17Z" />
                                                        </svg>
                                                    </a> 
                                                </div> 
                                                <a href="javascript:void(0);" class="mdc-button">
                                                    <span class="mdc-button__ripple"></span>
                                                    <span class="mdc-button__label">View Profile</span>
                                                </a>
                                            </div> 
                                        </div>  
                                    </div>  
                                </div> 
                            </div>                      
                            <button class="prop-prev swiper-button-prev swipe-arrow mdc-fab mdc-fab--mini primary">
                                <span class="mdc-fab__ripple"></span>
                                <span class="mdc-fab__icon material-icons">keyboard_arrow_left</span> 
                            </button>
                            <button class="prop-next swiper-button-next swipe-arrow mdc-fab mdc-fab--mini primary"> 
                                <span class="mdc-fab__ripple"></span>
                                <span class="mdc-fab__icon material-icons">keyboard_arrow_right</span> 
                            </button> 
                        </div>
                    </div> 
                    <div class="w-100 text-center mt-5">                
                        <a href="javascript:void(0);" class="mdc-button mdc-button--raised">
                            <span class="mdc-button__ripple"></span>
                            <span class="mdc-button__label">Our agents</span> 
                        </a>
                    </div>  
                </div>
            </div>   
            </div>   -->
   <div class="px-3">
      <div class="theme-container">
         <div class="get-in-touch bg-primary">
            <img src="assets/images/others/operator.png" alt="operator" class="d-none d-sm-flex d-md-flex d-lg-flex d-xl-flex">        
            <div class="row between-xs middle-xs content">
               <div class="column p-3">
                  <h2>LOOKING TO SELL YOUR HOME?</h2>
                  <!-- <p class="mb-0">Lorem ipsum dolor sit, amet consectetur adipisicing elit.</p> -->
               </div>
               <div class="row start-xs middle-xs p-3">
                  <i class="material-icons mat-icon-xlg mx-2">call</i>
                  <div class="column">
                     <p class="mb-0">CALL US NOW</p>
                     <h2 class="ws-nowrap"> <a href="tel:813-494-2595" style="color:#fff;">813-494-2595</a></h2>
                  </div>
               </div>
               <div class="p-3">
                  <a href="#ex2" rel="modal:open" id="open_intent_modal"  class="mdc-button mdc-button--raised mx-3">
                  <span class="mdc-button__ripple"></span>
                  <span class="mdc-button__label">get in touch</span> 
                  </a>  
               </div>
            </div>
         </div>
      </div>
   </div>
      </div>
      
</main>
@endsection
@push('scripts')
<script>
   // =========================== For bedroom selector ==================================
   mdc.select.MDCSelect.attachTo(document.querySelector('.bedrooms_list'));
   const bedrooms = new mdc.select.MDCSelect(document.querySelector('.bedrooms_list'));
   bedrooms.listen('MDCSelect:change', (el) => {
       document.getElementById('bedrooms').value = bedrooms.value;
   });
   
   // =========================== For bathroom selector ==================================
   mdc.select.MDCSelect.attachTo(document.querySelector('.bathroom_list'));
   const bathroom = new mdc.select.MDCSelect(document.querySelector('.bathroom_list'));
   bathroom.listen('MDCSelect:change', (el) => {
       console.log(bathroom.value);
       document.getElementById('bathrooms').value = bathroom.value;
   });
setTimeout(function(){
   var video = document.getElementById("homevideo");
   video.play();
}, 3000);
</script>
@endpush