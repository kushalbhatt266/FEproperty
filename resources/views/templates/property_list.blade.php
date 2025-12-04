@extends('layouts.app')
<!-- Title -->
@if(request()->input('sold'))
    @section('title', 'Nancy EHLEN - Sold Property '.ucwords(str_replace('_', ' ',request()->input('point'))).' in '.ucfirst(strtolower(request()->input('direction')?request()->input('direction'):'Tampa, Florida')).' '.ucfirst(strtolower(request()->input('location'))))

@elseif(request()->input('featured'))
    @section('title', 'Nancy EHLEN - Featured Property '.ucwords(str_replace('_', ' ',request()->input('point'))).' in '.ucfirst(strtolower(request()->input('direction')?request()->input('direction'):'Tampa, Florida')).' '.ucfirst(strtolower(request()->input('location'))))
@else
    @section('title', 'Nancy EHLEN - '.ucwords(str_replace('_', ' ',request()->input('point'))).' in '.ucfirst(strtolower(request()->input('direction'))).' '.ucfirst(strtolower(request()->input('location'))))
@endif
@section('page-heading','Search Result')

<!-- Meta Description -->
@section('meta-description','Nancy EHLEN is real property agents which property sales, rentals, marketing, portfolio management, mortgage consultations, property listing services, financing solutions and investment consultations in '.ucfirst(strtolower(request()->input('direction'))).' '.ucfirst(strtolower(request()->input('location'))). ' Florida')

<!-- Meta Keyword -->
@section('meta-keyword','waterfront homes for sale in tampa bay, open house in South Tampa, properties for sale in 33602, properties for sale in 33603, condos and townhomes for sale in Tampa Bay, open houses in '.ucfirst(strtolower(request()->input('direction'))).' '.ucfirst(strtolower(request()->input('location'))). ' Florida')
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
            <div class="bg" style="background-image: url('/assets/images/carousel/slide-3.jpg');"></div>
            <div class="mask"></div>            
            <div class="header-image-content mh-200"> 
                <p class="desc">Listings</p> 
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
                            @if(count($searchData)>0)
                            @foreach($searchData as $search_data)
                            <div class="row item col-xs-12 col-sm-6 col-md-6 col-lg-4 col-xl-4"> 
                                <div class="mdc-card property-item grid-item column-3">
                                    <div class="thumbnail-section">
                                        <div class="row property-status">
                                            <span class="green">For Sale</span> 
                                        </div> 
                                        <div class="property-image"> 
                                            <div class="swiper-container">
                                                <div class="swiper-wrapper"> 
                                                    @if(count($search_data->media)>0)
                                                    @foreach($search_data->media as $key => $media)
                                                    @if($key <= 2)
                                                    <div class="swiper-slide">
                                                        <img src="{{ asset('assets/images/others/transparent-bg.png') }}" alt="slide image" data-src="{{$media->MediaURL?config('constant.media_site').$media->MediaURL:config('constant.no_property_image')}}" class="slide-item swiper-lazy">
                                                        <div class="swiper-lazy-preloader"></div> 
                                                    </div>
                                                    @endif
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
                                            @if($search_data->wishlist == null)
                                                <button class="mdc-button add-to-favorite" title="Add To Favorite" data-name="add_featured_wish-{{$search_data->id}}" onclick="addToWishlist(this,{{$search_data->id}})">
                                                    <i class="material-icons mat-icon-sm">favorite_border</i>
                                                </button>
                                            @else
                                                <button class="mdc-button add-to-favorite" title="Remove To Favorite" data-name="remove_featured_product-{{$search_data->wishlist['id']}}" onclick="removeToWishlist(this,{{$search_data->wishlist['id']}})">
                                                    <i class="fa fa-heart"></i>
                                                </button>
                                            @endif
                                            <!-- <button class="mdc-button" title="Add To Compare">
                                                <i class="material-icons mat-icon-sm">compare_arrows</i>
                                            </button>   -->
                                        </div>  
                                    </div>
                                    <div class="property-content-wrapper"> 
                                        <div class="property-content">
                                            <div class="content">
                                                <h1 class="title">
                                                    <i class="material-icons text-muted">location_on</i>
                                                    <span>{{$search_data->UnparsedAddress}}</span></h1>
                                                <p class="row address flex-nowrap">
                                                    <a href="{{ route('property.property-details',[$search_data->id]) }}">{{$search_data->ListOfficeName}}</a>
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
                                            </div>
                                        </div>  
                                    </div> 
                                </div>  
                            </div>  
                            @endforeach
                            @if ($searchData->lastPage() > 1)
                            <div class="row center-xs middle-xs p-2 w-100">                
                                <div class="mdc-card w-100">
                                    <ul class="theme-pagination">
                                        <li class="pagination-previous">
                                            <a class="{{ ($searchData->currentPage() == 1) ? 'disabled' : '' }}" href="{{ $searchData->url(1) }}" style="text-decoration:none;"><span>Previous</span>
                                            </a>
                                        </li>
                                        @for ($i = 1; $i <= $searchData->lastPage(); $i++)
                                        <li class="{{ ($searchData->currentPage() == $i) ? ' current' : '' }}">
                                        @if($searchData->currentPage() == $i)
                                            <span>{{ $i }}</span>
                                        @else
                                            <a href="{{ $searchData->url($i) }}" style="text-decoration:none;"><span>{{ $i }}</span>
                                            </a>
                                        @endif
                                        </li>
                                        @endfor
                                        <li class="pagination-next">
                                            <a class="{{ ($searchData->currentPage() == $searchData->lastPage()) ? ' disabled' : '' }}" href="{{ $searchData->url($searchData->currentPage()+1) }}" style="text-decoration:none;"><span>Next</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            @endif
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