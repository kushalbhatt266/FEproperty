@extends('layouts.app')
@section('title', 'Off Market Property Details')
@section('page-heading','Off Market Property Details')
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
                            <h2 class="uppercase">{{ $property_details->title }}</h2>
                            <p class="row flex-nowrap address mb-0">
                                <i class="material-icons text-muted">location_on</i>
                                <span class="fw-500 text-muted">{{$property_details->address}}</span>
                            </p>
                        </div>
                        <div class="column mx-3"> 
                            <h2 class="primary-color price">
                                <span>$ {{$property_details->rental_price}}/Month</span> 
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
                                <!-- @if($property_details->wishlist == null)
                                    <button class="mdc-button add-to-favorite" title="Add To Favorite" data-name="add_featured_wish-{{$property_details->id}}" onclick="addToWishlist(this,{{$property_details->id}})">
                                        <i class="material-icons mat-icon-sm">favorite_border</i>
                                    </button>
                                @else
                                    <button class="mdc-button add-to-favorite" title="Remove To Favorite" data-name="remove_featured_product-{{$property_details->wishlist['id']}}" onclick="removeToWishlist(this,{{$property_details->wishlist['id']}})">
                                        <i class="fa fa-heart"></i>
                                    </button>
                                @endif -->
                                <!-- <button class="mdc-button" title="Add To Compare">
                                    <i class="material-icons">compare_arrows</i>
                                </button>   -->
                            </div>  
                            <div class="swiper-container">
                                <div class="swiper-wrapper"> 
                                    @if(count($property_details->images)>0)
                                    @foreach($property_details->images as $media)
                                    <div class="swiper-slide">
                                        <img src="{{ asset('assets/images/others/transparent-bg.png') }}" alt="slide image" data-src="{{$media->file?config('constant.media_site').'storage/property_image/'.$media->file:config('constant.no_property_image')}}" class="slide-item swiper-lazy">
                                        <div class="swiper-lazy-preloader"></div> 
                                    </div> 
                                    @endforeach
                                    @else
                                     <div class="swiper-slide">
                                        <img src="{{ asset('assets/images/others/transparent-bg.png') }}" alt="slide image" data-src="{{config('constant.no_property_image')}}" class="slide-item swiper-lazy">
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
                                  @if(count($property_details->images)>0)
                                  @foreach($property_details->images as $media_thumb)
                                    <div class="swiper-slide">
                                        <img src="{{ asset('assets/images/others/transparent-bg.png') }}" alt="slide image" data-src="{{$media_thumb->file?config('constant.media_site').'storage/property_image/'.$media_thumb->file:config('constant.no_property_image')}}" class="slide-item swiper-lazy">
                                        <div class="swiper-lazy-preloader"></div> 
                                    </div> 
                                  @endforeach
                                  @else
                                     <div class="swiper-slide">
                                        <img src="{{ asset('assets/images/others/transparent-bg.png') }}" alt="slide image" data-src="{{config('constant.no_property_image')}}" class="slide-item swiper-lazy">
                                        <div class="swiper-lazy-preloader"></div>
                                     </div>
                                  @endif
                                </div>  
                            </div>
                        </div>


                    </div>
                    
                    
                    <div class="mdc-card p-3 mt-3"> 
                        <h2 class="uppercase text-center fw-500 mb-2">Details</h2>  
                        <div class="row details">
                            <div class="row col-xs-12 col-sm-6 item">
                                <span>Property Type:</span>
                                <span>{{$property_details->category->name}}</span>
                            </div> 
                            <div class="row col-xs-12 col-sm-6 item">
                                <span>Property Subtype:</span>
                                <span>{{$property_details->subcategory->subcategory}}</span>
                                <!-- <div class="row list">
                                    <span class="last">No Fees</span>
                                </div> -->
                            </div>
                            
                             
                            <div class="row col-xs-12 col-sm-6 item">
                                <span>Year Built:</span>
                                <span>{{$property_details->additionalDetails->built_year}}</span>
                            </div> 
                            
                           
                            <div class="row col-xs-12 col-sm-6 item">
                                <span>Bedrooms:</span>
                                <span>{{$property_details->additionalDetails->rooms}}</span>
                            </div>
                            <div class="row col-xs-12 col-sm-6 item">
                                <span>Bathrooms:</span>
                                <span>{{$property_details->additionalDetails->bathrooms}}</span>
                            </div>
                            <div class="row col-xs-12 col-sm-6 item">
                                <span>Garages:</span>
                                <span>{{$property_details->additionalDetails->garage}}</span>
                            </div>
                            <div class="row col-xs-12 col-sm-6 item">
                                <span>Property size:</span>
                                <span>{{$property_details->additionalDetails->total_area}} ft²</span>
                            </div>
                            
                        </div>   
                    </div>
                    @if(count($property_details->amenities)>0)
                    <div class="mdc-card p-3 mt-3"> 
                        <h2 class="uppercase text-center fw-500 mb-2">Amenities</h2>  
                        <div class="row">
                            @foreach($property_details->amenities as $amenities)
                            <div class="col-xs-12 row middle-xs">
                                <i class="material-icons mat-icon-sm primary-color">check</i>
                                <span class="mx-2">{{$amenities->amenity->name}}</span>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    @endif
                    <div class="mdc-card p-3 mt-3"> 
                        <h2 class="uppercase text-center fw-500 mb-2">Additional features</h2>  
                        <div class="row details">
                            <div class="row col-xs-12 col-sm-6 item">
                                <span>Heat:</span>
                                <span>{{isset($property_details->additionalDetails->heating)?$property_details->additionalDetails->heating:'N/A'}}</span>
                            </div>
                            <div class="row col-xs-12 col-sm-6 item">
                                <span>Parking:</span>
                                <span>{{isset($property_details->additionalDetails->parking)?$property_details->additionalDetails->parking:'N/A'}}</span>
                            </div>
                            <div class="row col-xs-12 col-sm-6 item">
                                <span>Balconies:</span>
                                <span>{{isset($property_details->additionalDetails->balconies)?$property_details->additionalDetails->balconies:'N/A'}}</span>
                            </div>
                        </div> 
                    </div>
                    <div class="mdc-card p-3 mt-3"> 
                        <h2 class="uppercase text-center fw-500 mb-2">Description</h2>  
                        
                        <p><b>Public Remarks: </b>{{isset($property_details->about)?$property_details->about:'N/A'}}</p>
                        
                    </div>
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
                                    <h4 class="fw-600">{{isset($property_details->contact_person)?$property_details->contact_person:'N/A'}}</h4> 
                                                                   
                                    <p class="row middle-xs"><i class="material-icons primary-color" title="Organization">business</i><span class="mx-2 text-muted fw-500">Nancy EHLEN</span></p>
                                    <!-- <p class="row middle-xs"><i class="material-icons primary-color">email</i><span class="mx-2 text-muted fw-500"><a href="mailto:{{isset($property_details->ListAgentEmail)?$property_details->ListAgentEmail:'N/A'}}">{{isset($property_details->ListAgentEmail)?$property_details->ListAgentEmail:'N/A'}}</a></span></p> -->
                                    <p class="row middle-xs"><i class="material-icons primary-color">call</i><span class="mx-2 text-muted fw-500"><a href="tel:{{isset($property_details->contact)?$property_details->contact:'N/A'}}">{{isset($property_details->contact)?$property_details->contact:'N/A'}}</a></span></p>
                                    <div class="row pb-3 p-relative">
                                        <div class="divider"></div>
                                    </div> 
                                   
                    </div>
                </aside>
                <div class="mdc-drawer-scrim page-sidenav-scrim"></div>  
            </div> 
        </div>  
    </div>  
    @include('templates.components.call_us')
</main> 
@endsection
@push('scripts')
@endpush