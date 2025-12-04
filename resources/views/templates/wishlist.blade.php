@extends('layouts.app')
@section('title', 'Saved List')
@section('page-heading','Saved List')
@push('styles')
<style>
    .disabled {
      pointer-events: none;
      cursor: default;
      opacity: 0.6;
    }
</style>
@endpush
@section('content')
    <main> 
        <div class="header-image-wrapper">
            <div class="bg" style="background-image: url('assets/images/carousel/slide-3.jpg');"></div>
            <div class="mask"></div>            
            <div class="header-image-content mh-200"> 
                <p class="desc">Saved List</p> 
            </div>
        </div>  
        <div class="px-3">  
            <div class="theme-container">  
                <div class="page-drawer-container mt-3">
                    @include('templates.components.search')
                    <div class="mdc-drawer-scrim page-sidenav-scrim"></div>  
                    <div class="page-sidenav-content"> 
                        <div class="properties-wrapper row mt-0">
                            @include('templates.components.sorting')
                            @if(count($wishlists)>0)
                            @foreach($wishlists as $wishlist)
                            @php $search_data = $wishlist['listing']; @endphp
                            <div class="row item col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12"> 
                                <div class="mdc-card property-item list-item column-1">
                                    <div class="thumbnail-section">
                                        <div class="row property-status">
                                            <span class="green">For Sale</span> 
                                        </div> 
                                        <div class="property-image"> 
                                            <div class="swiper-container">
                                                <div class="swiper-wrapper"> 
                                                    @if(count($search_data->media)>0)
                                                    @foreach($search_data->media as $media)
                                                    <div class="swiper-slide">
                                                        <img src="{{ asset('assets/images/others/transparent-bg.png') }}" alt="slide image" data-src="{{config('constant.media_site').$media->MediaURL}}" class="slide-item swiper-lazy">
                                                        <div class="swiper-lazy-preloader"></div> 
                                                    </div> 
                                                    @endforeach
                                                    @endif
                                                </div>  
                                                <div class="swiper-pagination white"></div>  
                                                <button class="mdc-icon-button swiper-button-prev swipe-arrow"><i class="material-icons mat-icon-lg">keyboard_arrow_left</i></button>
                                                <button class="mdc-icon-button swiper-button-next swipe-arrow"><i class="material-icons mat-icon-lg">keyboard_arrow_right</i></button>
                                            </div>  
                                        </div> 
                                        <div class="control-icons">
                                            
                                            <!-- <button class="mdc-button" title="Add To Compare">
                                                <i class="material-icons mat-icon-sm">compare_arrows</i>
                                            </button>   -->
                                        </div>  
                                    </div>
                                    <div class="property-content-wrapper"> 
                                        <div class="property-content">
                                            <div class="content">
                                                <h1 class="title"><a href="#">{{$search_data->ListOfficeName}}</a></h1>
                                                <p class="row address flex-nowrap">
                                                    <i class="material-icons text-muted">location_on</i>
                                                    <span>{{$search_data->UnparsedAddress}}</span>
                                                </p>
                                                <div class="row between-xs middle-xs">
                                                    <h3 class="primary-color price">
                                                        <span>$ {{$search_data->ListPrice}}</span> 
                                                    </h3> 
                                                    <!-- <div class="row start-xs middle-xs ratings" title="29">      
                                                        <i class="material-icons mat-icon-sm">star</i>
                                                        <i class="material-icons mat-icon-sm">star</i>
                                                        <i class="material-icons mat-icon-sm">star</i>
                                                        <i class="material-icons mat-icon-sm">star</i>
                                                        <i class="material-icons mat-icon-sm">star_half</i>
                                                    </div> -->
                                                </div>
                                                <div class="d-none d-md-flex d-lg-flex d-xl-flex">
                                                    <div class="description mt-3"> 
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat modi dignissimos blanditiis accusamus, magni provident omnis perferendis laudantium illo recusandae ab molestiae repudiandae cum obcaecati nulla adipisci fuga culpa repellat!</p>
                                                    </div>
                                                </div>
                                                <div class="features mt-3">                    
                                                    <p><span>Property size</span><span>{{$search_data->LotSizeSquareFeet}} ft²</span></p>
                                                    <p><span>Bedrooms</span><span>{{$search_data->BedroomsTotal}}</span></p>
                                                    <p><span>Bathrooms</span><span>{{$search_data->BathroomsTotalInteger}}</span></p>
                                                    <p><span>Garages</span><span>{{$search_data->GarageSpaces}}</span></p>
                                                </div>   
                                            </div> 
                                            <div class="grow"></div>
                                            <div class="actions row between-xs middle-xs">
                                                <!-- <p class="row date mb-0">
                                                    <i class="material-icons text-muted">date_range</i>
                                                    <span class="mx-2">12 August, 2012</span>
                                                </p> -->
                                                <a href="{{ route('property.property-details',[$search_data->id]) }}" class="mdc-button mdc-button--outlined">
                                                    <span class="mdc-button__ripple"></span>
                                                    <span class="mdc-button__label">Details</span> 
                                                </a>  
                                                <button class="mdc-icon-button material-icons warn-color" data-name="remove_featured_product-{{$wishlist['id']}}" onclick="removeToWishlist(this,{{$wishlist['id']}})">delete</button>
                                            </div>
                                        </div>  
                                    </div> 
                                </div>  
                            </div>  
                            @endforeach
                           
                            @endif 
                        </div> 
                    </div> 
                </div> 
            </div>  
        </div>  
        @include('templates.components.call_us')
    </main> 
@endsection
@push('scripts')
@endpush