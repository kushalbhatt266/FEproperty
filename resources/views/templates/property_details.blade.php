@extends('layouts.app')
@section('title', 'Search Result')
@section('page-heading','Search Result')
@push('styles')
<style>
  
</style>
@endpush
@section('content')
<main>   
    <div class="px-3">  
        <div class="theme-container">  
            <div class="page-drawer-container single-property mt-3"> 
                <div class="page-sidenav-content">
                    <div class="mdc-card row between-xs middle-xs p-3">             
                        <div>
                            <h2 class="uppercase">{{ $property_details->ListOfficeName }}</h2>
                            <p class="row flex-nowrap address mb-0">
                                <i class="material-icons text-muted">location_on</i>
                                <span class="fw-500 text-muted">{{$property_details->UnparsedAddress}}, {{$property_details->City}}, {{$property_details->StateOrProvince}} {{$property_details->PostalCode}}, USA</span>
                            </p>
                        </div>
                        <div class="column mx-3"> 
                            <h2 class="primary-color price">
                                <span>$ {{$property_details->ListPrice}}</span> 
                            </h2> 
                            <!-- <div class="row start-xs middle-xs ratings" title="29">      
                                <i class="material-icons mat-icon-sm">star</i>
                                <i class="material-icons mat-icon-sm">star</i>
                                <i class="material-icons mat-icon-sm">star</i>
                                <i class="material-icons mat-icon-sm">star</i>
                                <i class="material-icons mat-icon-sm">star_half</i>
                            </div>  --> 
                        </div>
                        <button id="page-sidenav-toggle" class="mdc-icon-button material-icons text-muted d-md-none d-lg-none d-xl-none"> 
                            more_vert 
                        </button>
                    </div>
                    
                    <div class="mdc-card p-3 mt-3">  
                        <div class="main-carousel mb-3"> 
                            <div class="control-icons">
                                @if($property_details->wishlist == null)
                                    <button class="mdc-button add-to-favorite" title="Add To Favorite" data-name="add_featured_wish-{{$property_details->id}}" onclick="addToWishlist(this,{{$property_details->id}})">
                                        <i class="material-icons mat-icon-sm">favorite_border</i>
                                    </button>
                                @else
                                    <button class="mdc-button add-to-favorite" title="Remove To Favorite" data-name="remove_featured_product-{{$property_details->wishlist['id']}}" onclick="removeToWishlist(this,{{$property_details->wishlist['id']}})">
                                        <i class="fa fa-heart"></i>
                                    </button>
                                @endif
                                <!-- <button class="mdc-button" title="Add To Compare">
                                    <i class="material-icons">compare_arrows</i>
                                </button>   -->
                            </div>  
                            <div class="swiper-container">
                                <div class="swiper-wrapper"> 
                                    @if(count($property_details->media)>0)
                                    @foreach($property_details->media as $media)
                                    <div class="swiper-slide">
                                        <img src="{{ asset('assets/images/others/transparent-bg.png') }}" alt="slide image" data-src="{{$media->MediaURL?config('constant.media_site').$media->MediaURL:asset(config('constant.no_property_image'))}}" class="slide-item swiper-lazy">
                                        <div class="swiper-lazy-preloader"></div> 
                                    </div> 
                                    @endforeach
                                    @else
                                     <div class="swiper-slide" style="text-align: center;">
                                        <img src="{{ asset('assets/images/others/transparent-bg.png') }}" alt="slide image" data-src="{{asset(config('constant.no_property_image'))}}" class="slide-item swiper-lazy" style="height: 384px; width: 384px;">
                                        <div class="swiper-lazy-preloader"></div>
                                     </div>
                                    @endif
                                </div>     
                                <button class="swiper-button-prev swipe-arrow mdc-fab mdc-fab--mini primary">
                                    <span class="mdc-fab__ripple"></span>
                                    <span class="mdc-fab__icon material-icons">keyboard_arrow_left</span> 
                                </button>
                                <button class="swiper-button-next swipe-arrow mdc-fab mdc-fab--mini primary"> 
                                    <span class="mdc-fab__ripple"></span>
                                    <span class="mdc-fab__icon material-icons">keyboard_arrow_right</span> 
                                </button>   
                            </div>
                        </div> 

                        <div class="small-carousel">   
                            <div id="small-carousel" class="swiper-container"> 
                                <div class="swiper-wrapper"> 
                                  @if(count($property_details->media)>0)
                                  @foreach($property_details->media as $media_thumb)
                                    <div class="swiper-slide">
                                        <img src="{{ asset('assets/images/others/transparent-bg.png') }}" alt="slide image" data-src="{{$media_thumb->MediaURL?config('constant.media_site').$media_thumb->MediaURL:config('constant.no_property_image')}}" class="slide-item swiper-lazy">
                                        <div class="swiper-lazy-preloader"></div> 
                                    </div> 
                                  @endforeach
                                  @else
                                     <!-- <div class="swiper-slide">
                                        <img src="{{ asset('assets/images/others/transparent-bg.png') }}" alt="slide image" data-src="{{config('constant.no_property_image')}}" class="slide-item swiper-lazy">
                                        <div class="swiper-lazy-preloader"></div>
                                     </div> -->
                                  @endif
                                </div>  
                            </div>
                        </div>


                    </div>
                    
                    @if($openHouse)
                    <div class="mdc-card p-3 mt-3"> 
                        <h2 class="uppercase text-center fw-500 mb-2">Open House</h2>  
                        <div class="row details">
                            <div class="row col-xs-12 col-sm-6 item">
                                <span>Open House Date:</span>
                                <span>{{date('d-m-Y', strtotime($openHouse->OpenHouseDate))}}</span>
                            </div> 
                            <div class="row col-xs-12 col-sm-6 item">
                                <span>OpenHouse StartTime:</span>
                                <span>{{date('w M d, H-iA',strtotime($openHouse->OpenHouseStartTime))}}</span>
                                <!-- <div class="row list">
                                    <span class="last">No Fees</span>
                                </div> -->
                            </div>
                            <div class="row col-xs-12 col-sm-6 item">
                                <span>OpenHouse EndTime:</span>
                                <span>{{date('H:i',strtotime($openHouse->OpenHouseEndTime))}}</span>
                            </div>
                            <div class="row col-xs-12 col-sm-6 item">
                                <span>OpenHouse Status:</span>
                                <span>{{$openHouse->OpenHouseStatus}}</span>
                            </div>
                            <div class="row col-xs-12 col-sm-6 item">
                                <span>OpenHouseType:</span>
                                <span>{{$openHouse->OpenHouseType}}</span>
                            </div>
                            
                        </div>   
                    </div>
                    @endif
                    <div class="mdc-card p-3 mt-3"> 
                        <h2 class="uppercase text-center fw-500 mb-2">Details</h2>  
                        <div class="row details">
                            <div class="row col-xs-12 col-sm-6 item">
                                <span>Property Type:</span>
                                <span>{{$property_details->PropertyType}}</span>
                            </div> 
                            <div class="row col-xs-12 col-sm-6 item">
                                <span>Property Subtype:</span>
                                <span>{{$property_details->PropertySubType}}</span>
                                <!-- <div class="row list">
                                    <span class="last">No Fees</span>
                                </div> -->
                            </div>
                            <div class="row col-xs-12 col-sm-6 item">
                                <span>Listing Status:</span>
                                <span>{{$property_details->MlsStatus}}</span>
                            </div> 
                            <div class="row col-xs-12 col-sm-6 item">
                                <span>County/Area:</span>
                                <span>{{$property_details->CountyOrParish}}</span>
                            </div> 
                            <div class="row col-xs-12 col-sm-6 item">
                                <span>City:</span>
                                <span>{{$property_details->City}}</span>
                            </div>
                            <div class="row col-xs-12 col-sm-6 item">
                                <span>Zip Code:</span>
                                <span>{{$property_details->PostalCode}}</span>
                            </div> 
                            <div class="row col-xs-12 col-sm-6 item">
                                <span>Year Built:</span>
                                <span>{{$property_details->YearBuilt}}</span>
                            </div> 
                            <div class="row col-xs-12 col-sm-6 item">
                                <span>Subdivision/Neighborhood:</span>
                                <!-- <div class="row list"> -->
                                    <span>{{$property_details->SubdivisionName}}</span>
                                    <!-- <span class="last">Midtown</span> -->
                                <!-- </div>  -->
                            </div>
                            <div class="row col-xs-12 col-sm-6 item">
                                <span>Street:</span>
                                <!-- <div class="row list"> -->
                                    <span>{{$property_details->StreetName}}</span>
                                    
                                <!-- </div> -->
                            </div>
                            <div class="row col-xs-12 col-sm-6 item">
                                <span>Bedrooms:</span>
                                <span>{{$property_details->BathroomsTotalInteger}}</span>
                            </div>
                            <div class="row col-xs-12 col-sm-6 item">
                                <span>Bathrooms:</span>
                                <span>{{$property_details->BedroomsTotal}}</span>
                            </div>
                            <div class="row col-xs-12 col-sm-6 item">
                                <span>Garages:</span>
                                <span>{{$property_details->GarageSpaces}}</span>
                            </div>
                            <div class="row col-xs-12 col-sm-6 item">
                                <span>Property size:</span>
                                <span>{{$property_details->LotSizeSquareFeet}} ft²</span>
                            </div>
                            
                        </div>   
                    </div>
                    <div class="mdc-card p-3 mt-3"> 
                        <h2 class="uppercase text-center fw-500 mb-2">Features</h2>  
                        <div class="row">
                            <div class="col-xs-12 row middle-xs">
                                <i class="material-icons mat-icon-sm primary-color">check</i>
                                <span class="mx-2">Community Features: </span>
                                <span class="">{{isset($property_details->CommunityFeatures)?$property_details->CommunityFeatures:'N/A'}}</span>
                            </div>
                            <div class="col-xs-12 row middle-xs">
                                <i class="material-icons mat-icon-sm primary-color">check</i>
                                <span class="mx-2">Exterior Features: </span>
                                <span class="">{{isset($property_details->ExteriorFeatures)?$property_details->ExteriorFeatures:'N/A'}}</span>
                            </div>
                            <div class="col-xs-12 row middle-xs">
                                <i class="material-icons mat-icon-sm primary-color">check</i>
                                <span class="mx-2">Fireplace Features: </span>
                                <span class="">{{isset($property_details->FireplaceFeatures)?$property_details->FireplaceFeatures:'N/A'}}</span>
                            </div>
                            <div class="col-xs-12 row middle-xs">
                                <i class="material-icons mat-icon-sm primary-color">check</i>
                                <span class="mx-2">Interior Features: </span>
                                <span class="">{{isset($property_details->InteriorFeatures)?$property_details->InteriorFeatures:'N/A'}}</span>
                            </div>
                            <div class="col-xs-12 row middle-xs">
                                <i class="material-icons mat-icon-sm primary-color">check</i>
                                <span class="mx-2">Laundry Features: </span>
                                <span class="">{{isset($property_details->LaundryFeatures)?$property_details->LaundryFeatures:'N/A'}}</span>
                            </div>
                            <div class="col-xs-12 row middle-xs">
                                <i class="material-icons mat-icon-sm primary-color">check</i>
                                <span class="mx-2">Lot Features: </span>
                                <span class="">{{isset($property_details->LotFeatures)?$property_details->LotFeatures:'N/A'}}</span>
                            </div>
                            <div class="col-xs-12 row middle-xs">
                                <i class="material-icons mat-icon-sm primary-color">check</i>
                                <span class="mx-2">Parking Features: </span>
                                <span class="">{{isset($property_details->ParkingFeatures)?$property_details->ParkingFeatures:'N/A'}}</span>
                            </div>
                            <div class="col-xs-12 row middle-xs">
                                <i class="material-icons mat-icon-sm primary-color">check</i>
                                <span class="mx-2">Patio And Porch Features: </span>
                                <span class="">{{isset($property_details->PatioAndPorchFeatures)?$property_details->PatioAndPorchFeatures:'N/A'}}</span>
                            </div>
                            <div class="col-xs-12 row middle-xs">
                                <i class="material-icons mat-icon-sm primary-color">check</i>
                                <span class="mx-2">Pool Features: </span>
                                <span class="">{{isset($property_details->PoolFeatures)?$property_details->PoolFeatures:'N/A'}}</span>
                            </div>
                            <div class="col-xs-12 row middle-xs">
                                <i class="material-icons mat-icon-sm primary-color">check</i>
                                <span class="mx-2">Security Features: </span>
                                <span class="">{{isset($property_details->SecurityFeatures)?$property_details->SecurityFeatures:'N/A'}}</span>
                            </div>
                            <div class="col-xs-12 row middle-xs">
                                <i class="material-icons mat-icon-sm primary-color">check</i>
                                <span class="mx-2">Spa Features: </span>
                                <span class="">{{isset($property_details->SpaFeatures)?$property_details->SpaFeatures:'N/A'}}</span>
                            </div>
                            <div class="col-xs-12 row middle-xs">
                                <i class="material-icons mat-icon-sm primary-color">check</i>
                                <span class="mx-2">Waterfront Features: </span>
                                <span class="">{{isset($property_details->WaterfrontFeatures)?$property_details->WaterfrontFeatures:'N/A'}}</span>
                            </div>
                            <div class="col-xs-12 row middle-xs">
                                <i class="material-icons mat-icon-sm primary-color">check</i>
                                <span class="mx-2">Window Features: </span>
                                <span class="">{{isset($property_details->WindowFeatures)?$property_details->WindowFeatures:'N/A'}}</span>
                            </div>
                        </div> 
                    </div>
                    <div class="mdc-card p-3 mt-3"> 
                        <h2 class="uppercase text-center fw-500 mb-2">Additional features</h2>  
                        <div class="row details">
                            <div class="row col-xs-12 col-sm-6 item">
                                <span>Heat:</span>
                                <span>{{isset($property_details->Heating)?$property_details->Heating:'N/A'}}</span>
                            </div>
                            <div class="row col-xs-12 col-sm-6 item">
                                <span>Roof:</span>
                                <span>{{isset($property_details->Roof)?$property_details->Roof:'N/A'}}</span>
                            </div>
                            <div class="row col-xs-12 col-sm-6 item">
                                <span>Floors:</span>
                                <span>{{isset($property_details->Flooring)?$property_details->Flooring:'N/A'}}</span>
                            </div>
                            <div class="row col-xs-12 col-sm-6 item">
                                <span>Water:</span>
                                <span>{{isset($property_details->WaterSource)?$property_details->WaterSource:'N/A'}}</span>
                            </div>
                            <div class="row col-xs-12 col-sm-6 item">
                                <span>Cooling:</span>
                                <span>{{isset($property_details->Cooling)?$property_details->Cooling:'N/A'}}</span>
                            </div>
                            <div class="row col-xs-12 col-sm-6 item">
                                <span>Appliances:</span>
                                <span>{{isset($property_details->Appliances)?$property_details->Appliances:'N/A'}}</span>
                            </div>
                            
                            <div class="row col-xs-12 col-sm-6 item">
                                <span>Additional Roomd:</span>
                                <span>{{isset($property_details->MFR_AdditionalRooms)?$property_details->MFR_AdditionalRooms:'N/A'}}</span>
                            </div>
                        </div> 
                    </div>
                    <div class="mdc-card p-3 mt-3"> 
                        <h2 class="uppercase text-center fw-500 mb-2">Description</h2>  
                        <p><b>Directions: </b>{{isset($property_details->Directions)?$property_details->Directions:'N/A'}}</p>
                        <p><b>Public Remarks: </b>{{isset($property_details->PublicRemarks)?$property_details->PublicRemarks:'N/A'}}</p>
                        
                    </div>
                    <!-- <div class="mdc-card p-3 mt-3"> 
                        <h2 class="uppercase text-center fw-500 mb-2">Location</h2> 
                        <div id="contact-map"></div>
                    </div> -->
                    <!-- <div class="mdc-card p-3 mt-3"> 
                        <h2 class="uppercase text-center fw-500 mb-2">Plans</h2> 
                        <div class="expansion-panel-wrapper"> 
                            <div class="mdc-card expansion-panel">
                                <div class="row between-xs middle-xs expansion-panel-header">
                                    <div class="fw-500">First floor</div>
                                    <div class="text-muted d-none d-md-flex d-lg-flex d-xl-flex"> 
                                        <span>Area: <span class="fw-500">1180 ft²</span></span>
                                        <span class="mx-3">Rooms: <span class="fw-500">3</span></span>
                                        <span>Baths: <span class="fw-500">1</span></span>  
                                    </div>                         
                                </div>
                                <div class="expansion-panel-body text-center">
                                    <img src="assets/images/others/plan-1.jpg" alt="plan-1" class="mw-100">
                                    <p>Plan description. Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium magnam veniam sit reprehenderit deserunt ad voluptates id aperiam veritatis! Nobis saepe quos eveniet numquam vitae quis, tenetur consectetur impedit dolore.</p>
                                </div>
                            </div> 
                            <div class="mdc-card expansion-panel">
                                <div class="row between-xs middle-xs expansion-panel-header">
                                    <div class="fw-500">Second floor</div>
                                    <div class="text-muted d-none d-md-flex d-lg-flex d-xl-flex"> 
                                        <span>Area: <span class="fw-500">1200 ft²</span></span>
                                        <span class="mx-3">Rooms: <span class="fw-500">5</span></span>
                                        <span>Baths: <span class="fw-500">2</span></span>  
                                    </div>                        
                                </div>
                                <div class="expansion-panel-body text-center">
                                    <img src="assets/images/others/plan-2.jpg" alt="plan-2" class="mw-100">
                                    <p>Plan description. Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium magnam veniam sit reprehenderit deserunt ad voluptates id aperiam veritatis! Nobis saepe quos eveniet numquam vitae quis, tenetur consectetur impedit dolore.</p>
                                </div>
                            </div>  
                        </div>
                    </div> -->
                    <!-- <div class="mdc-card p-3 mt-3"> 
                        <h2 class="uppercase text-center fw-500 mb-2">Videos</h2> 
                        <div class="videoWrapper">
                            <iframe src="https://www.youtube.com/embed/-NInBEdSvp8"></iframe>
                        </div> 
                    </div>
                    <div class="mdc-card p-3 mt-3 row between-xs middle-xs"> 
                        <span>ID:<span class="fw-500 mx-2">1</span></span>
                        <span>Published:<span class="fw-500 mx-2">12 August, 2012</span></span>
                        <span>Last Update:<span class="fw-500 mx-2">20 May, 2019</span></span>
                        <span>Views:<span class="fw-500 mx-2">322</span></span> 
                    </div>  -->
                    

                    <!-- <div class="mdc-card p-5 mt-5"> 
                        <h2 class="uppercase text-center fw-500 mb-2">Leave a Reply</h2>                
                        <div class="row pb-3 p-relative">
                            <div class="divider"></div>
                        </div>  
                        <div class="reviews mt-3">
                            <div class="review-item">
                                <img src="assets/images/avatars/avatar-1.png" alt="avatar-1" class="author-img">
                                <div class="review-content">
                                    <p class="d-flex mb-0">
                                        <span class="author-name">Bruno Vespa</span> 
                                        <i class="material-icons text-muted px-1" title="Dissatisfied">sentiment_dissatisfied</i>
                                    </p>
                                    <p class="text-muted fw-500 mb-2"><small>13 January, 2018 at 7:09</small></p>
                                    <p class="text">Integer id eros et mi fringilla imperdiet. In dictum turpis eget magna viverra condimentum. Ut malesuada interdum ultrices. Proin tristique sem pellentesque, posuere dui in, maximus magna. Aenean vehicula, tortor gravida elementum tincidunt, justo lorem vestibulum ex, eget egestas arcu tellus in magna.</p>
                                </div> 
                            </div> 
                            <div class="review-item">
                                <img src="assets/images/avatars/avatar-2.png" alt="avatar-2" class="author-img">
                                <div class="review-content">
                                    <p class="d-flex mb-0">
                                        <span class="author-name">Julia Aniston</span> 
                                        <i class="material-icons text-muted px-1" title="Very Satisfied">sentiment_very_satisfied</i>
                                    </p>
                                    <p class="text-muted fw-500 mb-2"><small>04 February, 2018 at 10:22</small></p>
                                    <p class="text">Nulla accumsan, lacus sed suscipit rutrum, turpis augue accumsan metus, in accumsan urna mi vehicula lorem. Pellentesque semper nibh vitae augue placerat finibus. Nulla sed porttitor nunc, quis tristique sem. Quisque in varius nisl. Integer turpis lorem, ultricies sed sem nec, commodo molestie arcu. Nulla finibus ex tortor, et suscipit magna semper consectetur. Cras sit amet metus dui. Maecenas eget dui at ex varius malesuada vel non felis.</p>
                                </div> 
                            </div> 
                            <div class="review-item">
                                <img src="assets/images/avatars/avatar-3.png" alt="avatar-3" class="author-img">
                                <div class="review-content">
                                    <p class="d-flex mb-0">
                                        <span class="author-name">Andy Warhol</span> 
                                        <i class="material-icons text-muted px-1" title="Neutral">sentiment_neutral</i>
                                    </p>
                                    <p class="text-muted fw-500 mb-2"><small>14 February, 2018 at 11:10</small></p>
                                    <p class="text">Pellentesque hendrerit vel turpis aliquam placerat. Suspendisse ullamcorper congue feugiat. Etiam gravida metus ac massa posuere venenatis. Pellentesque vehicula lobortis dolor, ac pretium dolor maximus quis. Fusce vitae iaculis mauris, quis posuere ex. Mauris vitae convallis nibh. Etiam eget enim at orci interdum maximus nec in ante.</p>
                                </div> 
                            </div> 
                        </div>  
                        <h3 class="uppercase mt-3">Leave your review</h3>
                        <div class="row pb-2 p-relative">
                            <div class="divider"></div>
                        </div> 
                        <p class="mt-3 text-muted">Your email address will not be published. Required fields are marked *</p>
                        <h3 class="row flex-nowrap middle-xs my-2 text-muted">
                            <span>Your Rating:</span> 
                            <button class="mdc-icon-button d-flex middle-xs center-xs p-0" title="Very Dissatisfied"> 
                                <span class="material-icons mat-icon-lg">sentiment_very_dissatisfied</span>
                            </button>  
                            <button class="mdc-icon-button d-flex middle-xs center-xs p-0" title="Dissatisfied"> 
                                <span class="material-icons mat-icon-lg">sentiment_dissatisfied</span>
                            </button>  
                            <button class="mdc-icon-button d-flex middle-xs center-xs p-0" title="Neutral"> 
                                <span class="material-icons mat-icon-lg">sentiment_neutral</span>
                            </button>  
                            <button class="mdc-icon-button d-flex middle-xs center-xs p-0" title="Satisfied"> 
                                <span class="material-icons mat-icon-lg">sentiment_satisfied</span>
                            </button>  
                            <button class="mdc-icon-button d-flex middle-xs center-xs p-0" title="Very Satisfied"> 
                                <span class="material-icons mat-icon-lg">sentiment_very_satisfied</span>
                            </button>  
                        </h3> 
                        <form action="javascript:void(0);" class="row comment-form"> 
                            <div class="col-xs-12">
                                <div class="mdc-text-field mdc-text-field--outlined mdc-text-field--textarea w-100 custom-field my-2">
                                    <textarea class="mdc-text-field__input" rows="5"></textarea>
                                    <div class="mdc-notched-outline mdc-notched-outline--upgraded">
                                        <div class="mdc-notched-outline__leading"></div>
                                        <div class="mdc-notched-outline__notch">
                                            <label for="feedback-message" class="mdc-floating-label">Your review</label>
                                        </div>
                                        <div class="mdc-notched-outline__trailing"></div>
                                    </div>
                                </div> 
                            </div>
                            <div class="col-xs-12 col-sm-6">
                                <div class="mdc-text-field mdc-text-field--outlined w-100 custom-field my-2">
                                    <input class="mdc-text-field__input">
                                    <div class="mdc-notched-outline">
                                        <div class="mdc-notched-outline__leading"></div>
                                        <div class="mdc-notched-outline__notch">
                                            <label class="mdc-floating-label">Your name</label>
                                        </div>
                                        <div class="mdc-notched-outline__trailing"></div>
                                    </div>
                                </div> 
                            </div>
                            <div class="col-xs-12 col-sm-6">
                                <div class="mdc-text-field mdc-text-field--outlined w-100 custom-field my-2">
                                    <input class="mdc-text-field__input">
                                    <div class="mdc-notched-outline">
                                        <div class="mdc-notched-outline__leading"></div>
                                        <div class="mdc-notched-outline__notch">
                                            <label class="mdc-floating-label">Your email</label>
                                        </div>
                                        <div class="mdc-notched-outline__trailing"></div>
                                    </div>
                                </div> 
                            </div> 
                            <div class="col-xs-12 text-center mt-3">
                                <button class="mdc-button mdc-button--raised" type="button">
                                    <span class="mdc-button__ripple"></span>
                                    <span class="mdc-button__label">Submit review</span> 
                                </button> 
                            </div> 
                        </form>   
                    </div>  -->
                </div>  
                <aside class="mdc-drawer mdc-drawer--modal page-sidenav">
                    <a href="#" class="h-0"></a>
                    <div class="mdc-card p-3"> 
                        <div class="widget">  
                            <div class="mdc-card o-hidden">
                                <!-- <a href="agent.html">
                                    <img src="assets/images/agents/a-4.jpg" alt="agent-4" class="d-block mw-100">
                                </a> -->
                                <div class="p-3">
                                    <h2 class="fw-600">Agent Info</h2>
                                    <h4 class="fw-600">{{isset($property_details->ListAgentFullName)?$property_details->ListAgentFullName:'N/A'}}</h4> 
                                    <!-- <div class="row start-xs middle-xs ratings" title="15">      
                                        <i class="material-icons mat-icon-sm">star</i>
                                        <i class="material-icons mat-icon-sm">star</i>
                                        <i class="material-icons mat-icon-sm">star</i>
                                        <i class="material-icons mat-icon-sm">star</i>
                                        <i class="material-icons mat-icon-sm">star_half</i>
                                    </div>  -->
                                    <!-- <p class="mt-3 text-muted fw-500">Phasellus sed metus leo. Donec laoreet, lacus ut suscipit convallis, erat enim eleifend nulla, at sagittis enim urna et lacus.</p>   -->                                  
                                    <p class="row middle-xs"><i class="material-icons primary-color" title="Organization">business</i><span class="mx-2 text-muted fw-500">Nancy EHLEN</span></p>
                                    <p class="row middle-xs"><i class="material-icons primary-color">email</i><span class="mx-2 text-muted fw-500"><a href="mailto:{{isset($property_details->ListAgentEmail)?$property_details->ListAgentEmail:'N/A'}}">{{isset($property_details->ListAgentEmail)?$property_details->ListAgentEmail:'N/A'}}</a></span></p>
                                    <p class="row middle-xs"><i class="material-icons primary-color">call</i><span class="mx-2 text-muted fw-500"><a href="tel:{{isset($property_details->ListAgentDirectPhone)?$property_details->ListAgentDirectPhone:'N/A'}}">{{isset($property_details->ListAgentDirectPhone)?$property_details->ListAgentDirectPhone:'N/A'}}</a></span></p>
                                    <div class="row pb-3 p-relative">
                                        <div class="divider"></div>
                                    </div> 
                                    <!-- <div class="row between-xs middle-xs">
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
                                    </div>  -->
                                </div>  
                            </div>  
                        </div>  
                        <!-- <div class="widget">
                            <div class="widget-title bg-primary">Reply to the listing</div>
                            <form action="javascript:void(0);"> 
                                <p>Interested in renting or buying this property? Then send us an email.</p>
                                <div class="mdc-text-field mdc-text-field--outlined w-100 custom-field my-2">
                                    <input class="mdc-text-field__input">
                                    <div class="mdc-notched-outline">
                                        <div class="mdc-notched-outline__leading"></div>
                                        <div class="mdc-notched-outline__notch">
                                            <label class="mdc-floating-label">Name</label>
                                        </div>
                                        <div class="mdc-notched-outline__trailing"></div>
                                    </div>
                                </div> 
                                <div class="mdc-text-field mdc-text-field--outlined w-100 custom-field my-2">
                                    <input class="mdc-text-field__input">
                                    <div class="mdc-notched-outline">
                                        <div class="mdc-notched-outline__leading"></div>
                                        <div class="mdc-notched-outline__notch">
                                            <label class="mdc-floating-label">Email</label>
                                        </div>
                                        <div class="mdc-notched-outline__trailing"></div>
                                    </div>
                                </div> 
                                <div class="mdc-text-field mdc-text-field--outlined w-100 custom-field my-2">
                                    <input class="mdc-text-field__input">
                                    <div class="mdc-notched-outline">
                                        <div class="mdc-notched-outline__leading"></div>
                                        <div class="mdc-notched-outline__notch">
                                            <label class="mdc-floating-label">Phone</label>
                                        </div>
                                        <div class="mdc-notched-outline__trailing"></div>
                                    </div>
                                </div> 
                                <div class="mdc-text-field mdc-text-field--outlined mdc-text-field--textarea w-100 custom-field my-2">
                                    <textarea class="mdc-text-field__input" rows="5" placeholder="Message is required"></textarea>
                                    <div class="mdc-notched-outline mdc-notched-outline--upgraded">
                                        <div class="mdc-notched-outline__leading"></div>
                                        <div class="mdc-notched-outline__notch">
                                            <label for="feedback-message" class="mdc-floating-label">Message</label>
                                        </div>
                                        <div class="mdc-notched-outline__trailing"></div>
                                    </div>
                                </div> 
                                <div class="row around-xs middle-xs p-2 mb-3"> 
                                    <button class="mdc-button mdc-button--raised bg-accent" type="button">
                                        <span class="mdc-button__ripple"></span>
                                        <span class="mdc-button__label">Send email</span> 
                                    </button> 
                                </div> 
                            </form>  
                        </div> -->
                        <!-- <div class="widget">
                            <div class="widget-title bg-primary">Mortgage Calculator</div>
                            <form action="javascript:void(0);">  
                                <div class="mdc-text-field mdc-text-field--outlined w-100 custom-field my-2">
                                    <input class="mdc-text-field__input" placeholder="$">
                                    <div class="mdc-notched-outline">
                                        <div class="mdc-notched-outline__leading"></div>
                                        <div class="mdc-notched-outline__notch">
                                            <label class="mdc-floating-label">Principal Amount</label>
                                        </div>
                                        <div class="mdc-notched-outline__trailing"></div>
                                    </div>
                                </div> 
                                <div class="mdc-text-field mdc-text-field--outlined w-100 custom-field my-2">
                                    <input class="mdc-text-field__input" placeholder="$">
                                    <div class="mdc-notched-outline">
                                        <div class="mdc-notched-outline__leading"></div>
                                        <div class="mdc-notched-outline__notch">
                                            <label class="mdc-floating-label">Down Payment</label>
                                        </div>
                                        <div class="mdc-notched-outline__trailing"></div>
                                    </div>
                                </div> 
                                <div class="mdc-text-field mdc-text-field--outlined w-100 custom-field my-2">
                                    <input class="mdc-text-field__input" placeholder="%">
                                    <div class="mdc-notched-outline">
                                        <div class="mdc-notched-outline__leading"></div>
                                        <div class="mdc-notched-outline__notch">
                                            <label class="mdc-floating-label">Interest Rate</label>
                                        </div>
                                        <div class="mdc-notched-outline__trailing"></div>
                                    </div>
                                </div>  
                                <div class="mdc-text-field mdc-text-field--outlined w-100 custom-field my-2">
                                    <input class="mdc-text-field__input" placeholder="Number of Years">
                                    <div class="mdc-notched-outline">
                                        <div class="mdc-notched-outline__leading"></div>
                                        <div class="mdc-notched-outline__notch">
                                            <label class="mdc-floating-label">Period</label>
                                        </div>
                                        <div class="mdc-notched-outline__trailing"></div>
                                    </div>
                                </div>
                                <div class="row around-xs middle-xs p-2 mb-3"> 
                                    <button class="mdc-button mdc-button--raised bg-accent" type="button">
                                        <span class="mdc-button__ripple"></span>
                                        <span class="mdc-button__label">Calculate Mortgage</span> 
                                    </button> 
                                </div> 
                            </form>  
                        </div> -->
                        <!-- <div class="widget">
                            <div class="widget-title bg-primary">Featured Properties</div>
                            <div class="mdc-card property-item grid-item column-3 mb-3">
                                <div class="thumbnail-section">
                                    <div class="row property-status">
                                        <span class="blue">For rent</span>
                                        <span class="orange">No fees</span>
                                    </div> 
                                    <div class="property-image"> 
                                        <div class="swiper-container">
                                            <div class="swiper-wrapper"> 
                                                <div class="swiper-slide">
                                                    <img src="assets/images/others/transparent-bg.png" alt="slide image" data-src="assets/images/props/office/1-medium.jpg" class="slide-item swiper-lazy">
                                                    <div class="swiper-lazy-preloader"></div> 
                                                </div> 
                                                <div class="swiper-slide">
                                                    <img src="assets/images/others/transparent-bg.png" alt="slide image" data-src="assets/images/props/office/2-medium.jpg" class="slide-item swiper-lazy">
                                                    <div class="swiper-lazy-preloader"></div> 
                                                </div> 
                                                <div class="swiper-slide">
                                                    <img src="assets/images/others/transparent-bg.png" alt="slide image" data-src="assets/images/props/office/3-medium.jpg" class="slide-item swiper-lazy">
                                                    <div class="swiper-lazy-preloader"></div> 
                                                </div> 
                                                <div class="swiper-slide">
                                                    <img src="assets/images/others/transparent-bg.png" alt="slide image" data-src="assets/images/props/office/4-medium.jpg" class="slide-item swiper-lazy">
                                                    <div class="swiper-lazy-preloader"></div> 
                                                </div> 
                                                <div class="swiper-slide">
                                                    <img src="assets/images/others/transparent-bg.png" alt="slide image" data-src="assets/images/props/office/5-medium.jpg" class="slide-item swiper-lazy">
                                                    <div class="swiper-lazy-preloader"></div> 
                                                </div> 
                                                <div class="swiper-slide">
                                                    <img src="assets/images/others/transparent-bg.png" alt="slide image" data-src="assets/images/props/office/6-medium.jpg" class="slide-item swiper-lazy">
                                                    <div class="swiper-lazy-preloader"></div> 
                                                </div> 
                                            </div>  
                                            <div class="swiper-pagination white"></div>  
                                            <button class="mdc-icon-button swiper-button-prev swipe-arrow"><i class="material-icons mat-icon-lg">keyboard_arrow_left</i></button>
                                            <button class="mdc-icon-button swiper-button-next swipe-arrow"><i class="material-icons mat-icon-lg">keyboard_arrow_right</i></button>
                                        </div>  
                                    </div> 
                                    <div class="control-icons">
                                        <button class="mdc-button add-to-favorite" title="Add To Favorite">
                                            <i class="material-icons mat-icon-sm">favorite_border</i>
                                        </button>
                                        <button class="mdc-button" title="Add To Compare">
                                            <i class="material-icons mat-icon-sm">compare_arrows</i>
                                        </button>  
                                    </div>  
                                </div>
                                <div class="property-content-wrapper"> 
                                    <div class="property-content">
                                        <div class="content">
                                            <h1 class="title"><a href="#">Centrally located office</a></h1>
                                            <p class="row address flex-nowrap">
                                                <i class="material-icons text-muted">location_on</i>
                                                <span>1052 W 91st St, Los Angeles, CA 90044, USA</span>
                                            </p>
                                            <div class="row between-xs middle-xs">
                                                <h3 class="primary-color price">
                                                    <span>$ 6,500 /month</span> 
                                                </h3> 
                                                <div class="row start-xs middle-xs ratings" title="29">      
                                                    <i class="material-icons mat-icon-sm">star</i>
                                                    <i class="material-icons mat-icon-sm">star</i>
                                                    <i class="material-icons mat-icon-sm">star</i>
                                                    <i class="material-icons mat-icon-sm">star</i>
                                                    <i class="material-icons mat-icon-sm">star</i>
                                                </div>
                                            </div>
                                            <div class="d-none d-md-flex d-lg-flex d-xl-flex">
                                                <div class="description mt-3"> 
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat modi dignissimos blanditiis accusamus, magni provident omnis perferendis laudantium illo recusandae ab molestiae repudiandae cum obcaecati nulla adipisci fuga culpa repellat!</p>
                                                </div>
                                            </div>
                                            <div class="features mt-3">                    
                                                <p><span>Property size</span><span>1500 ft²</span></p>
                                                <p><span>Bedrooms</span><span>4</span></p>
                                                <p><span>Bathrooms</span><span>2</span></p>
                                                <p><span>Garages</span><span>2</span></p>
                                            </div>   
                                        </div> 
                                        <div class="grow"></div>
                                        <div class="actions row between-xs middle-xs">
                                            <p class="row date mb-0">
                                                <i class="material-icons text-muted">date_range</i>
                                                <span class="mx-2">12 September, 2013</span>
                                            </p> 
                                            <a href="javascript:void(0);" class="mdc-button mdc-button--outlined">
                                                <span class="mdc-button__ripple"></span>
                                                <span class="mdc-button__label">Details</span> 
                                            </a>  
                                        </div>
                                    </div>  
                                </div> 
                            </div> 
                            <div class="mdc-card property-item grid-item column-3 mb-3">
                                <div class="thumbnail-section">
                                    <div class="row property-status">
                                        <span class="blue">For Rent</span>
                                        <span class="orange">No Fees</span>
                                    </div> 
                                    <div class="property-image"> 
                                        <div class="swiper-container">
                                            <div class="swiper-wrapper"> 
                                                <div class="swiper-slide">
                                                    <img src="assets/images/others/transparent-bg.png" alt="slide image" data-src="assets/images/props/house-2/1-medium.jpg" class="slide-item swiper-lazy">
                                                    <div class="swiper-lazy-preloader"></div> 
                                                </div> 
                                                <div class="swiper-slide">
                                                    <img src="assets/images/others/transparent-bg.png" alt="slide image" data-src="assets/images/props/house-2/2-medium.jpg" class="slide-item swiper-lazy">
                                                    <div class="swiper-lazy-preloader"></div> 
                                                </div> 
                                                <div class="swiper-slide">
                                                    <img src="assets/images/others/transparent-bg.png" alt="slide image" data-src="assets/images/props/house-2/3-medium.jpg" class="slide-item swiper-lazy">
                                                    <div class="swiper-lazy-preloader"></div> 
                                                </div> 
                                                <div class="swiper-slide">
                                                    <img src="assets/images/others/transparent-bg.png" alt="slide image" data-src="assets/images/props/house-2/4-medium.jpg" class="slide-item swiper-lazy">
                                                    <div class="swiper-lazy-preloader"></div> 
                                                </div>    
                                            </div>  
                                            <div class="swiper-pagination white"></div>  
                                            <button class="mdc-icon-button swiper-button-prev swipe-arrow"><i class="material-icons mat-icon-lg">keyboard_arrow_left</i></button>
                                            <button class="mdc-icon-button swiper-button-next swipe-arrow"><i class="material-icons mat-icon-lg">keyboard_arrow_right</i></button>
                                        </div>  
                                    </div> 
                                    <div class="control-icons">
                                        <button class="mdc-button add-to-favorite" title="Add To Favorite">
                                            <i class="material-icons mat-icon-sm">favorite_border</i>
                                        </button>
                                        <button class="mdc-button" title="Add To Compare">
                                            <i class="material-icons mat-icon-sm">compare_arrows</i>
                                        </button>  
                                    </div>  
                                </div>
                                <div class="property-content-wrapper"> 
                                    <div class="property-content">
                                        <div class="content">
                                            <h1 class="title"><a href="#">Bright and sunny house</a></h1>
                                            <p class="row address flex-nowrap">
                                                <i class="material-icons text-muted">location_on</i>
                                                <span>1400 W 44th St, Chicago, IL 60609, USA</span>
                                            </p>
                                            <div class="row between-xs middle-xs">
                                                <h3 class="primary-color price">
                                                    <span>$ 9,000 /month</span> 
                                                </h3> 
                                                <div class="row start-xs middle-xs ratings" title="29">      
                                                    <i class="material-icons mat-icon-sm">star</i>
                                                    <i class="material-icons mat-icon-sm">star</i>
                                                    <i class="material-icons mat-icon-sm">star</i>
                                                    <i class="material-icons mat-icon-sm">star_half</i>
                                                    <i class="material-icons mat-icon-sm">star_border</i>
                                                </div>
                                            </div>
                                            <div class="d-none d-md-flex d-lg-flex d-xl-flex">
                                                <div class="description mt-3"> 
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat modi dignissimos blanditiis accusamus, magni provident omnis perferendis laudantium illo recusandae ab molestiae repudiandae cum obcaecati nulla adipisci fuga culpa repellat!</p>
                                                </div>
                                            </div>
                                            <div class="features mt-3">                    
                                                <p><span>Property size</span><span>1600 ft²</span></p>
                                                <p><span>Bedrooms</span><span>2</span></p>
                                                <p><span>Bathrooms</span><span>2</span></p>
                                                <p><span>Garages</span><span>1</span></p>
                                            </div>   
                                        </div> 
                                        <div class="grow"></div>
                                        <div class="actions row between-xs middle-xs">
                                            <p class="row date mb-0">
                                                <i class="material-icons text-muted">date_range</i>
                                                <span class="mx-2">19 November, 2013</span>
                                            </p> 
                                            <a href="javascript:void(0);" class="mdc-button mdc-button--outlined">
                                                <span class="mdc-button__ripple"></span>
                                                <span class="mdc-button__label">Details</span> 
                                            </a>  
                                        </div>
                                    </div>  
                                </div> 
                            </div>   
                            <div class="mdc-card property-item grid-item column-3 mb-3">
                                <div class="thumbnail-section">
                                    <div class="row property-status">
                                        <span class="blue">For Rent</span>
                                        <span class="orange">No Fees</span>
                                    </div> 
                                    <div class="property-image"> 
                                        <div class="swiper-container">
                                            <div class="swiper-wrapper"> 
                                                <div class="swiper-slide">
                                                    <img src="assets/images/others/transparent-bg.png" alt="slide image" data-src="assets/images/props/apartment/1-medium.jpg" class="slide-item swiper-lazy">
                                                    <div class="swiper-lazy-preloader"></div> 
                                                </div> 
                                                <div class="swiper-slide">
                                                    <img src="assets/images/others/transparent-bg.png" alt="slide image" data-src="assets/images/props/apartment/2-medium.jpg" class="slide-item swiper-lazy">
                                                    <div class="swiper-lazy-preloader"></div> 
                                                </div> 
                                                <div class="swiper-slide">
                                                    <img src="assets/images/others/transparent-bg.png" alt="slide image" data-src="assets/images/props/apartment/3-medium.jpg" class="slide-item swiper-lazy">
                                                    <div class="swiper-lazy-preloader"></div> 
                                                </div> 
                                                <div class="swiper-slide">
                                                    <img src="assets/images/others/transparent-bg.png" alt="slide image" data-src="assets/images/props/apartment/4-medium.jpg" class="slide-item swiper-lazy">
                                                    <div class="swiper-lazy-preloader"></div> 
                                                </div> 
                                                <div class="swiper-slide">
                                                    <img src="assets/images/others/transparent-bg.png" alt="slide image" data-src="assets/images/props/apartment/5-medium.jpg" class="slide-item swiper-lazy">
                                                    <div class="swiper-lazy-preloader"></div> 
                                                </div>   
                                            </div>  
                                            <div class="swiper-pagination white"></div>  
                                            <button class="mdc-icon-button swiper-button-prev swipe-arrow"><i class="material-icons mat-icon-lg">keyboard_arrow_left</i></button>
                                            <button class="mdc-icon-button swiper-button-next swipe-arrow"><i class="material-icons mat-icon-lg">keyboard_arrow_right</i></button>
                                        </div>  
                                    </div> 
                                    <div class="control-icons">
                                        <button class="mdc-button add-to-favorite" title="Add To Favorite">
                                            <i class="material-icons mat-icon-sm">favorite_border</i>
                                        </button>
                                        <button class="mdc-button" title="Add To Compare">
                                            <i class="material-icons mat-icon-sm">compare_arrows</i>
                                        </button>  
                                    </div>  
                                </div>
                                <div class="property-content-wrapper"> 
                                    <div class="property-content">
                                        <div class="content">
                                            <h1 class="title"><a href="#">Centrally located apartment</a></h1>
                                            <p class="row address flex-nowrap">
                                                <i class="material-icons text-muted">location_on</i>
                                                <span>1627 Vine St, Los Angeles, CA 90028, USA</span>
                                            </p>
                                            <div class="row between-xs middle-xs">
                                                <h3 class="primary-color price">
                                                    <span>$ 5,600 /month</span> 
                                                </h3> 
                                                <div class="row start-xs middle-xs ratings" title="29">      
                                                    <i class="material-icons mat-icon-sm">star</i>
                                                    <i class="material-icons mat-icon-sm">star</i>
                                                    <i class="material-icons mat-icon-sm">star</i>
                                                    <i class="material-icons mat-icon-sm">star</i>
                                                    <i class="material-icons mat-icon-sm">star_half</i>
                                                </div>
                                            </div>
                                            <div class="d-none d-md-flex d-lg-flex d-xl-flex">
                                                <div class="description mt-3"> 
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat modi dignissimos blanditiis accusamus, magni provident omnis perferendis laudantium illo recusandae ab molestiae repudiandae cum obcaecati nulla adipisci fuga culpa repellat!</p>
                                                </div>
                                            </div>
                                            <div class="features mt-3">                    
                                                <p><span>Property size</span><span>1600 ft²</span></p>
                                                <p><span>Bedrooms</span><span>2</span></p>
                                                <p><span>Bathrooms</span><span>1</span></p>
                                                <p><span>Garages</span><span>1</span></p>
                                            </div>   
                                        </div> 
                                        <div class="grow"></div>
                                        <div class="actions row between-xs middle-xs">
                                            <p class="row date mb-0">
                                                <i class="material-icons text-muted">date_range</i>
                                                <span class="mx-2">29 March, 2016</span>
                                            </p> 
                                            <a href="javascript:void(0);" class="mdc-button mdc-button--outlined">
                                                <span class="mdc-button__ripple"></span>
                                                <span class="mdc-button__label">Details</span> 
                                            </a>  
                                        </div>
                                    </div>  
                                </div> 
                            </div>  
                        </div> -->
                    </div>
                </aside>
                <div class="mdc-drawer-scrim page-sidenav-scrim"></div>  
            </div> 
        </div>  
    </div>  
   <!--  <div class="section mt-3">
        <div class="px-3">
            <div class="theme-container">
                <h1 class="section-title">Related properties</h1>  
                <div class="properties-carousel">   
                    <div class="swiper-container carousel-outer"> 
                        <div class="swiper-wrapper">  
                            <div class="swiper-slide"> 
                                <div class="mdc-card property-item grid-item column-4 full-width-page">
                                    <div class="thumbnail-section">
                                        <div class="row property-status">
                                            <span class="blue">For rent</span>
                                            <span class="orange">No fees</span>
                                        </div> 
                                        <div class="property-image"> 
                                            <div class="swiper-container">
                                                <div class="swiper-wrapper"> 
                                                    <div class="swiper-slide">
                                                        <img src="assets/images/others/transparent-bg.png" alt="slide image" data-src="assets/images/props/office/1-medium.jpg" class="slide-item swiper-lazy">
                                                        <div class="swiper-lazy-preloader"></div> 
                                                    </div> 
                                                    <div class="swiper-slide">
                                                        <img src="assets/images/others/transparent-bg.png" alt="slide image" data-src="assets/images/props/office/2-medium.jpg" class="slide-item swiper-lazy">
                                                        <div class="swiper-lazy-preloader"></div> 
                                                    </div> 
                                                    <div class="swiper-slide">
                                                        <img src="assets/images/others/transparent-bg.png" alt="slide image" data-src="assets/images/props/office/3-medium.jpg" class="slide-item swiper-lazy">
                                                        <div class="swiper-lazy-preloader"></div> 
                                                    </div> 
                                                    <div class="swiper-slide">
                                                        <img src="assets/images/others/transparent-bg.png" alt="slide image" data-src="assets/images/props/office/4-medium.jpg" class="slide-item swiper-lazy">
                                                        <div class="swiper-lazy-preloader"></div> 
                                                    </div> 
                                                    <div class="swiper-slide">
                                                        <img src="assets/images/others/transparent-bg.png" alt="slide image" data-src="assets/images/props/office/5-medium.jpg" class="slide-item swiper-lazy">
                                                        <div class="swiper-lazy-preloader"></div> 
                                                    </div> 
                                                    <div class="swiper-slide">
                                                        <img src="assets/images/others/transparent-bg.png" alt="slide image" data-src="assets/images/props/office/6-medium.jpg" class="slide-item swiper-lazy">
                                                        <div class="swiper-lazy-preloader"></div> 
                                                    </div> 
                                                </div>  
                                                <div class="swiper-pagination white"></div>  
                                                <button class="mdc-icon-button swiper-button-prev swipe-arrow"><i class="material-icons mat-icon-lg">keyboard_arrow_left</i></button>
                                                <button class="mdc-icon-button swiper-button-next swipe-arrow"><i class="material-icons mat-icon-lg">keyboard_arrow_right</i></button>
                                            </div>  
                                        </div> 
                                        <div class="control-icons">
                                            <button class="mdc-button add-to-favorite" title="Add To Favorite">
                                                <i class="material-icons mat-icon-sm">favorite_border</i>
                                            </button>
                                            <button class="mdc-button" title="Add To Compare">
                                                <i class="material-icons mat-icon-sm">compare_arrows</i>
                                            </button>  
                                        </div>  
                                    </div>
                                    <div class="property-content-wrapper"> 
                                        <div class="property-content">
                                            <div class="content">
                                                <h1 class="title"><a href="#">Centrally located office</a></h1>
                                                <p class="row address flex-nowrap">
                                                    <i class="material-icons text-muted">location_on</i>
                                                    <span>1052 W 91st St, Los Angeles, CA 90044, USA</span>
                                                </p>
                                                <div class="row between-xs middle-xs">
                                                    <h3 class="primary-color price">
                                                        <span>$ 6,500 /month</span> 
                                                    </h3> 
                                                    <div class="row start-xs middle-xs ratings" title="29">      
                                                        <i class="material-icons mat-icon-sm">star</i>
                                                        <i class="material-icons mat-icon-sm">star</i>
                                                        <i class="material-icons mat-icon-sm">star</i>
                                                        <i class="material-icons mat-icon-sm">star</i>
                                                        <i class="material-icons mat-icon-sm">star</i>
                                                    </div>
                                                </div>
                                                <div class="d-none d-md-flex d-lg-flex d-xl-flex">
                                                    <div class="description mt-3"> 
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat modi dignissimos blanditiis accusamus, magni provident omnis perferendis laudantium illo recusandae ab molestiae repudiandae cum obcaecati nulla adipisci fuga culpa repellat!</p>
                                                    </div>
                                                </div>
                                                <div class="features mt-3">                    
                                                    <p><span>Property size</span><span>1500 ft²</span></p>
                                                    <p><span>Bedrooms</span><span>4</span></p>
                                                    <p><span>Bathrooms</span><span>2</span></p>
                                                    <p><span>Garages</span><span>2</span></p>
                                                </div>   
                                            </div> 
                                            <div class="grow"></div>
                                            <div class="actions row between-xs middle-xs">
                                                <p class="row date mb-0">
                                                    <i class="material-icons text-muted">date_range</i>
                                                    <span class="mx-2">12 September, 2013</span>
                                                </p> 
                                                <a href="javascript:void(0);" class="mdc-button mdc-button--outlined">
                                                    <span class="mdc-button__ripple"></span>
                                                    <span class="mdc-button__label">Details</span> 
                                                </a>  
                                            </div>
                                        </div>  
                                    </div> 
                                </div>                  
                            </div> 
                            <div class="swiper-slide">
                                <div class="mdc-card property-item grid-item column-4 full-width-page">
                                    <div class="thumbnail-section">
                                        <div class="row property-status">
                                            <span class="red">Hot Offer</span>
                                            <span class="orange">No Fees</span>
                                        </div> 
                                        <div class="property-image"> 
                                            <div class="swiper-container">
                                                <div class="swiper-wrapper"> 
                                                    <div class="swiper-slide">
                                                        <img src="assets/images/others/transparent-bg.png" alt="slide image" data-src="assets/images/props/flat-2/1-medium.jpg" class="slide-item swiper-lazy">
                                                        <div class="swiper-lazy-preloader"></div> 
                                                    </div> 
                                                    <div class="swiper-slide">
                                                        <img src="assets/images/others/transparent-bg.png" alt="slide image" data-src="assets/images/props/flat-2/2-medium.jpg" class="slide-item swiper-lazy">
                                                        <div class="swiper-lazy-preloader"></div> 
                                                    </div> 
                                                    <div class="swiper-slide">
                                                        <img src="assets/images/others/transparent-bg.png" alt="slide image" data-src="assets/images/props/flat-2/3-medium.jpg" class="slide-item swiper-lazy">
                                                        <div class="swiper-lazy-preloader"></div> 
                                                    </div> 
                                                    <div class="swiper-slide">
                                                        <img src="assets/images/others/transparent-bg.png" alt="slide image" data-src="assets/images/props/flat-2/4-medium.jpg" class="slide-item swiper-lazy">
                                                        <div class="swiper-lazy-preloader"></div> 
                                                    </div> 
                                                    <div class="swiper-slide">
                                                        <img src="assets/images/others/transparent-bg.png" alt="slide image" data-src="assets/images/props/flat-2/5-medium.jpg" class="slide-item swiper-lazy">
                                                        <div class="swiper-lazy-preloader"></div> 
                                                    </div>   
                                                </div>  
                                                <div class="swiper-pagination white"></div>  
                                                <button class="mdc-icon-button swiper-button-prev swipe-arrow"><i class="material-icons mat-icon-lg">keyboard_arrow_left</i></button>
                                                <button class="mdc-icon-button swiper-button-next swipe-arrow"><i class="material-icons mat-icon-lg">keyboard_arrow_right</i></button>
                                            </div>  
                                        </div> 
                                        <div class="control-icons">
                                            <button class="mdc-button add-to-favorite" title="Add To Favorite">
                                                <i class="material-icons mat-icon-sm">favorite_border</i>
                                            </button>
                                            <button class="mdc-button" title="Add To Compare">
                                                <i class="material-icons mat-icon-sm">compare_arrows</i>
                                            </button>  
                                        </div>  
                                    </div>
                                    <div class="property-content-wrapper"> 
                                        <div class="property-content">
                                            <div class="content">
                                                <h1 class="title"><a href="#">Spacious and warm flat</a></h1>
                                                <p class="row address flex-nowrap">
                                                    <i class="material-icons text-muted">location_on</i>
                                                    <span>55 W Jackson Blvd, Chicago, IL 60604, USA</span>
                                                </p>
                                                <div class="row between-xs middle-xs">
                                                    <h3 class="primary-color price">
                                                        <span>$ 1,450,000</span> 
                                                    </h3> 
                                                    <div class="row start-xs middle-xs ratings" title="29">      
                                                        <i class="material-icons mat-icon-sm">star</i>
                                                        <i class="material-icons mat-icon-sm">star</i>
                                                        <i class="material-icons mat-icon-sm">star</i>
                                                        <i class="material-icons mat-icon-sm">star_half</i>
                                                        <i class="material-icons mat-icon-sm">star_border</i>
                                                    </div>
                                                </div>
                                                <div class="d-none d-md-flex d-lg-flex d-xl-flex">
                                                    <div class="description mt-3"> 
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat modi dignissimos blanditiis accusamus, magni provident omnis perferendis laudantium illo recusandae ab molestiae repudiandae cum obcaecati nulla adipisci fuga culpa repellat!</p>
                                                    </div>
                                                </div>
                                                <div class="features mt-3">                    
                                                    <p><span>Property size</span><span>1700 ft²</span></p>
                                                    <p><span>Bedrooms</span><span>5</span></p>
                                                    <p><span>Bathrooms</span><span>2</span></p>
                                                    <p><span>Garages</span><span>2</span></p>
                                                </div>   
                                            </div> 
                                            <div class="grow"></div>
                                            <div class="actions row between-xs middle-xs">
                                                <p class="row date mb-0">
                                                    <i class="material-icons text-muted">date_range</i>
                                                    <span class="mx-2">12 October, 2016</span>
                                                </p> 
                                                <a href="javascript:void(0);" class="mdc-button mdc-button--outlined">
                                                    <span class="mdc-button__ripple"></span>
                                                    <span class="mdc-button__label">Details</span> 
                                                </a>  
                                            </div>
                                        </div>  
                                    </div> 
                                </div>  
                            </div> 
                            <div class="swiper-slide">
                                <div class="mdc-card property-item grid-item column-4 full-width-page">
                                    <div class="thumbnail-section">
                                        <div class="row property-status">
                                            <span class="dark">Sold</span>
                                            <span class="green">For Sale</span>
                                        </div> 
                                        <div class="property-image"> 
                                            <div class="swiper-container">
                                                <div class="swiper-wrapper"> 
                                                    <div class="swiper-slide">
                                                        <img src="assets/images/others/transparent-bg.png" alt="slide image" data-src="assets/images/props/house-3/1-medium.jpg" class="slide-item swiper-lazy">
                                                        <div class="swiper-lazy-preloader"></div> 
                                                    </div> 
                                                    <div class="swiper-slide">
                                                        <img src="assets/images/others/transparent-bg.png" alt="slide image" data-src="assets/images/props/house-3/2-medium.jpg" class="slide-item swiper-lazy">
                                                        <div class="swiper-lazy-preloader"></div> 
                                                    </div> 
                                                    <div class="swiper-slide">
                                                        <img src="assets/images/others/transparent-bg.png" alt="slide image" data-src="assets/images/props/house-3/3-medium.jpg" class="slide-item swiper-lazy">
                                                        <div class="swiper-lazy-preloader"></div> 
                                                    </div> 
                                                    <div class="swiper-slide">
                                                        <img src="assets/images/others/transparent-bg.png" alt="slide image" data-src="assets/images/props/house-3/4-medium.jpg" class="slide-item swiper-lazy">
                                                        <div class="swiper-lazy-preloader"></div> 
                                                    </div>    
                                                </div>  
                                                <div class="swiper-pagination white"></div>  
                                                <button class="mdc-icon-button swiper-button-prev swipe-arrow"><i class="material-icons mat-icon-lg">keyboard_arrow_left</i></button>
                                                <button class="mdc-icon-button swiper-button-next swipe-arrow"><i class="material-icons mat-icon-lg">keyboard_arrow_right</i></button>
                                            </div>  
                                        </div> 
                                        <div class="control-icons">
                                            <button class="mdc-button add-to-favorite" title="Add To Favorite">
                                                <i class="material-icons mat-icon-sm">favorite_border</i>
                                            </button>
                                            <button class="mdc-button" title="Add To Compare">
                                                <i class="material-icons mat-icon-sm">compare_arrows</i>
                                            </button>  
                                        </div>  
                                    </div>
                                    <div class="property-content-wrapper"> 
                                        <div class="property-content">
                                            <div class="content">
                                                <h1 class="title"><a href="#">House with a pool</a></h1>
                                                <p class="row address flex-nowrap">
                                                    <i class="material-icons text-muted">location_on</i>
                                                    <span>5921 17th Ave S, Seattle, WA 98108, USA</span>
                                                </p>
                                                <div class="row between-xs middle-xs">
                                                    <h3 class="primary-color price">
                                                        <span>$ 4,500,000</span> 
                                                    </h3> 
                                                    <div class="row start-xs middle-xs ratings" title="29">      
                                                        <i class="material-icons mat-icon-sm">star</i>
                                                        <i class="material-icons mat-icon-sm">star</i>
                                                        <i class="material-icons mat-icon-sm">star</i>
                                                        <i class="material-icons mat-icon-sm">star</i>
                                                        <i class="material-icons mat-icon-sm">star_border</i>
                                                    </div>
                                                </div>
                                                <div class="d-none d-md-flex d-lg-flex d-xl-flex">
                                                    <div class="description mt-3"> 
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat modi dignissimos blanditiis accusamus, magni provident omnis perferendis laudantium illo recusandae ab molestiae repudiandae cum obcaecati nulla adipisci fuga culpa repellat!</p>
                                                    </div>
                                                </div>
                                                <div class="features mt-3">                    
                                                    <p><span>Property size</span><span>2200 ft²</span></p>
                                                    <p><span>Bedrooms</span><span>3</span></p>
                                                    <p><span>Bathrooms</span><span>2</span></p>
                                                    <p><span>Garages</span><span>1</span></p>
                                                </div>   
                                            </div> 
                                            <div class="grow"></div>
                                            <div class="actions row between-xs middle-xs">
                                                <p class="row date mb-0">
                                                    <i class="material-icons text-muted">date_range</i>
                                                    <span class="mx-2">20 November, 2017</span>
                                                </p> 
                                                <a href="javascript:void(0);" class="mdc-button mdc-button--outlined">
                                                    <span class="mdc-button__ripple"></span>
                                                    <span class="mdc-button__label">Details</span> 
                                                </a>  
                                            </div>
                                        </div>  
                                    </div> 
                                </div> 
                            </div> 
                            <div class="swiper-slide">
                                <div class="mdc-card property-item grid-item column-4 full-width-page">
                                    <div class="thumbnail-section">
                                        <div class="row property-status">
                                            <span class="blue">For Rent</span>
                                            <span class="orange">No Fees</span>
                                        </div> 
                                        <div class="property-image"> 
                                            <div class="swiper-container">
                                                <div class="swiper-wrapper"> 
                                                    <div class="swiper-slide">
                                                        <img src="assets/images/others/transparent-bg.png" alt="slide image" data-src="assets/images/props/house-2/1-medium.jpg" class="slide-item swiper-lazy">
                                                        <div class="swiper-lazy-preloader"></div> 
                                                    </div> 
                                                    <div class="swiper-slide">
                                                        <img src="assets/images/others/transparent-bg.png" alt="slide image" data-src="assets/images/props/house-2/2-medium.jpg" class="slide-item swiper-lazy">
                                                        <div class="swiper-lazy-preloader"></div> 
                                                    </div> 
                                                    <div class="swiper-slide">
                                                        <img src="assets/images/others/transparent-bg.png" alt="slide image" data-src="assets/images/props/house-2/3-medium.jpg" class="slide-item swiper-lazy">
                                                        <div class="swiper-lazy-preloader"></div> 
                                                    </div> 
                                                    <div class="swiper-slide">
                                                        <img src="assets/images/others/transparent-bg.png" alt="slide image" data-src="assets/images/props/house-2/4-medium.jpg" class="slide-item swiper-lazy">
                                                        <div class="swiper-lazy-preloader"></div> 
                                                    </div>    
                                                </div>  
                                                <div class="swiper-pagination white"></div>  
                                                <button class="mdc-icon-button swiper-button-prev swipe-arrow"><i class="material-icons mat-icon-lg">keyboard_arrow_left</i></button>
                                                <button class="mdc-icon-button swiper-button-next swipe-arrow"><i class="material-icons mat-icon-lg">keyboard_arrow_right</i></button>
                                            </div>  
                                        </div> 
                                        <div class="control-icons">
                                            <button class="mdc-button add-to-favorite" title="Add To Favorite">
                                                <i class="material-icons mat-icon-sm">favorite_border</i>
                                            </button>
                                            <button class="mdc-button" title="Add To Compare">
                                                <i class="material-icons mat-icon-sm">compare_arrows</i>
                                            </button>  
                                        </div>  
                                    </div>
                                    <div class="property-content-wrapper"> 
                                        <div class="property-content">
                                            <div class="content">
                                                <h1 class="title"><a href="#">Bright and sunny house</a></h1>
                                                <p class="row address flex-nowrap">
                                                    <i class="material-icons text-muted">location_on</i>
                                                    <span>1400 W 44th St, Chicago, IL 60609, USA</span>
                                                </p>
                                                <div class="row between-xs middle-xs">
                                                    <h3 class="primary-color price">
                                                        <span>$ 9,000 /month</span> 
                                                    </h3> 
                                                    <div class="row start-xs middle-xs ratings" title="29">      
                                                        <i class="material-icons mat-icon-sm">star</i>
                                                        <i class="material-icons mat-icon-sm">star</i>
                                                        <i class="material-icons mat-icon-sm">star</i>
                                                        <i class="material-icons mat-icon-sm">star_half</i>
                                                        <i class="material-icons mat-icon-sm">star_border</i>
                                                    </div>
                                                </div>
                                                <div class="d-none d-md-flex d-lg-flex d-xl-flex">
                                                    <div class="description mt-3"> 
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat modi dignissimos blanditiis accusamus, magni provident omnis perferendis laudantium illo recusandae ab molestiae repudiandae cum obcaecati nulla adipisci fuga culpa repellat!</p>
                                                    </div>
                                                </div>
                                                <div class="features mt-3">                    
                                                    <p><span>Property size</span><span>1600 ft²</span></p>
                                                    <p><span>Bedrooms</span><span>2</span></p>
                                                    <p><span>Bathrooms</span><span>2</span></p>
                                                    <p><span>Garages</span><span>1</span></p>
                                                </div>   
                                            </div> 
                                            <div class="grow"></div>
                                            <div class="actions row between-xs middle-xs">
                                                <p class="row date mb-0">
                                                    <i class="material-icons text-muted">date_range</i>
                                                    <span class="mx-2">19 November, 2013</span>
                                                </p> 
                                                <a href="javascript:void(0);" class="mdc-button mdc-button--outlined">
                                                    <span class="mdc-button__ripple"></span>
                                                    <span class="mdc-button__label">Details</span> 
                                                </a>  
                                            </div>
                                        </div>  
                                    </div> 
                                </div>  
                            </div> 
                            <div class="swiper-slide">
                                <div class="mdc-card property-item grid-item column-4 full-width-page">
                                    <div class="thumbnail-section">
                                        <div class="row property-status">
                                            <span class="blue">For Rent</span>
                                            <span class="orange">No Fees</span>
                                        </div> 
                                        <div class="property-image"> 
                                            <div class="swiper-container">
                                                <div class="swiper-wrapper"> 
                                                    <div class="swiper-slide">
                                                        <img src="assets/images/others/transparent-bg.png" alt="slide image" data-src="assets/images/props/apartment/1-medium.jpg" class="slide-item swiper-lazy">
                                                        <div class="swiper-lazy-preloader"></div> 
                                                    </div> 
                                                    <div class="swiper-slide">
                                                        <img src="assets/images/others/transparent-bg.png" alt="slide image" data-src="assets/images/props/apartment/2-medium.jpg" class="slide-item swiper-lazy">
                                                        <div class="swiper-lazy-preloader"></div> 
                                                    </div> 
                                                    <div class="swiper-slide">
                                                        <img src="assets/images/others/transparent-bg.png" alt="slide image" data-src="assets/images/props/apartment/3-medium.jpg" class="slide-item swiper-lazy">
                                                        <div class="swiper-lazy-preloader"></div> 
                                                    </div> 
                                                    <div class="swiper-slide">
                                                        <img src="assets/images/others/transparent-bg.png" alt="slide image" data-src="assets/images/props/apartment/4-medium.jpg" class="slide-item swiper-lazy">
                                                        <div class="swiper-lazy-preloader"></div> 
                                                    </div> 
                                                    <div class="swiper-slide">
                                                        <img src="assets/images/others/transparent-bg.png" alt="slide image" data-src="assets/images/props/apartment/5-medium.jpg" class="slide-item swiper-lazy">
                                                        <div class="swiper-lazy-preloader"></div> 
                                                    </div>   
                                                </div>  
                                                <div class="swiper-pagination white"></div>  
                                                <button class="mdc-icon-button swiper-button-prev swipe-arrow"><i class="material-icons mat-icon-lg">keyboard_arrow_left</i></button>
                                                <button class="mdc-icon-button swiper-button-next swipe-arrow"><i class="material-icons mat-icon-lg">keyboard_arrow_right</i></button>
                                            </div>  
                                        </div> 
                                        <div class="control-icons">
                                            <button class="mdc-button add-to-favorite" title="Add To Favorite">
                                                <i class="material-icons mat-icon-sm">favorite_border</i>
                                            </button>
                                            <button class="mdc-button" title="Add To Compare">
                                                <i class="material-icons mat-icon-sm">compare_arrows</i>
                                            </button>  
                                        </div>  
                                    </div>
                                    <div class="property-content-wrapper"> 
                                        <div class="property-content">
                                            <div class="content">
                                                <h1 class="title"><a href="#">Centrally located apartment</a></h1>
                                                <p class="row address flex-nowrap">
                                                    <i class="material-icons text-muted">location_on</i>
                                                    <span>1627 Vine St, Los Angeles, CA 90028, USA</span>
                                                </p>
                                                <div class="row between-xs middle-xs">
                                                    <h3 class="primary-color price">
                                                        <span>$ 5,600 /month</span> 
                                                    </h3> 
                                                    <div class="row start-xs middle-xs ratings" title="29">      
                                                        <i class="material-icons mat-icon-sm">star</i>
                                                        <i class="material-icons mat-icon-sm">star</i>
                                                        <i class="material-icons mat-icon-sm">star</i>
                                                        <i class="material-icons mat-icon-sm">star</i>
                                                        <i class="material-icons mat-icon-sm">star_half</i>
                                                    </div>
                                                </div>
                                                <div class="d-none d-md-flex d-lg-flex d-xl-flex">
                                                    <div class="description mt-3"> 
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat modi dignissimos blanditiis accusamus, magni provident omnis perferendis laudantium illo recusandae ab molestiae repudiandae cum obcaecati nulla adipisci fuga culpa repellat!</p>
                                                    </div>
                                                </div>
                                                <div class="features mt-3">                    
                                                    <p><span>Property size</span><span>1600 ft²</span></p>
                                                    <p><span>Bedrooms</span><span>2</span></p>
                                                    <p><span>Bathrooms</span><span>1</span></p>
                                                    <p><span>Garages</span><span>1</span></p>
                                                </div>   
                                            </div> 
                                            <div class="grow"></div>
                                            <div class="actions row between-xs middle-xs">
                                                <p class="row date mb-0">
                                                    <i class="material-icons text-muted">date_range</i>
                                                    <span class="mx-2">29 March, 2016</span>
                                                </p> 
                                                <a href="javascript:void(0);" class="mdc-button mdc-button--outlined">
                                                    <span class="mdc-button__ripple"></span>
                                                    <span class="mdc-button__label">Details</span> 
                                                </a>  
                                            </div>
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
            </div>
        </div>   
    </div>   -->
    @include('templates.components.call_us')
</main> 
@endsection
@push('scripts')
@endpush