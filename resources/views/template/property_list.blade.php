@extends('layout.app')
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
@section('head')
        <link rel="stylesheet" href="{{asset('frontend/css/leaflet.css')}}">
        <link rel="stylesheet" href="{{asset('frontend/css/leaflet-gesture-handling.min.css')}}">
        <link rel="stylesheet" href="{{asset('frontend/css/leaflet.markercluster.css')}}">
        <link rel="stylesheet" href="{{asset('frontend/css/leaflet.markercluster.default.css')}}">
        <link rel="stylesheet" href="{{asset('frontend/css/timedropper.css')}}">
        <link rel="stylesheet" href="{{asset('frontend/css/datedropper.css')}}">
        <link rel="stylesheet" href="{{asset('frontend/css/swiper.min.css')}}">
        <link rel="stylesheet" id="color" href="{{asset('frontend/css/default.css')}}">
@endsection
@section('body') <body class="inner-pages sin-1 homepage-4 hd-white">@endsection
@section('content')
  <!-- Header Container / End -->
  <div class="single-property-4">
  @include('template.header_image')
         </div>
         <!-- END SECTION HEADINGS -->
         <section class="properties-right featured portfolio blog">
            <div class="container">
                <section class="pb-4 pt-0 ">
                    <div class="pro-wrapper">
                        <div class="detail-wrapper-body">
                            <div class="listing-title-bar">
                                <div class="text-heading text-left">
                                    <p class="pb-2"><a href="{{url('/')}}">Home </a> &nbsp;/&nbsp; <span>Listing</span></p>
                                </div>
                               
                            </div>
                        </div>
                        
                    </div>
                    <hr>
                </section>
               
                <div class="row">
                @include('template.search')
                    @if(count($searchData)>0)
                           
                    <div class="col-lg-8 col-md-12 blog-pots">
                        <h4 class="listing-head">Listing </h4>
                        <div class="row">
                            
                        @foreach($searchData as $search_data)
                            <div class="item col-lg-6 col-md-6 col-xs-12 landscapes sale">
                                <div class="project-single" data-aos="fade-up">
                                    <div class="project-inner project-head">
                                        <div class="project-bottom">
                                            <h4><a href="{{ route('property.property-details',[$search_data->id]) }}">View Property</a></h4>
                                        </div>
                                        @if(count($search_data->media)>0)
                                        @foreach($search_data->media as $key => $media)
                                        @if($key ==0)
                                        <div class="homes">
                                            <!-- homes img -->
                                            <a href="{{ route('property.property-details',[$search_data->id]) }}" class="homes-img">
                                                <!-- <div class="homes-tag button alt featured">Featured</div> -->
                                                <div class="homes-tag button alt sale">For Sale</div>
                                               <!--  <div class="homes-price">Family Home</div> -->
                                                <img src="{{$media->MediaURL?config('constant.media_site').$media->MediaURL:config('constant.no_property_image')}}" alt="home-1" class="img-responsive">
                                            </a>
                                        </div>
                                        @endif
                                        @endforeach
                                        @else
                                                    <div class="homes">
                                            <!-- homes img -->
                                            <a href="" class="homes-img">
                                               <!-- <div class="homes-tag button alt featured">Featured</div> -->
                                               <div class="homes-tag button alt sale">For Sale</div>
                                               <!--  <div class="homes-price">Family Home</div> -->
                                                <img src="{{config('constant.no_property_image')}}" alt="home-1" class="img-responsive">
                                            </a>
                                        </div>
                                        @endif
                                        <!-- <div class="button-effect">
                                            <a href="single-property-1.html" class="btn"><i class="fa fa-link"></i></a>
                                            <a href="https://www.youtube.com/watch?v=2xHQqYRcrx4" class="btn popup-video popup-youtube"><i class="fas fa-video"></i></a>
                                            <a href="single-property-2.html" class="img-poppu btn"><i class="fa fa-photo"></i></a>
                                        </div> -->
                                    </div>
                                    <!-- homes content -->
                                    <div class="homes-content">
                                        <!-- homes address -->
                                        <h3><a href="{{ route('property.property-details',[$search_data->id]) }}">{{$search_data->ListOfficeName}}</a></h3>
                                        <p class="homes-address mb-3">
                                            <a href="javascript::void(0)">
                                                <i class="fa fa-map-marker"></i><span>{{$search_data->UnparsedAddress}}</span>
                                            </a>
                                        </p>
                                        <!-- homes List -->
                                        <ul class="homes-list clearfix pb-3">
                                            <li class="the-icons">
                                                <i class="flaticon-bed mr-2" aria-hidden="true"></i>
                                                <span>{{$search_data->BathroomsTotalInteger}} Bedrooms</span>
                                            </li>
                                            <li class="the-icons">
                                                <i class="flaticon-bathtub mr-2" aria-hidden="true"></i>
                                                <span>{{$search_data->BedroomsTotal}} Bathrooms</span>
                                            </li>
                                            <li class="the-icons">
                                                <i class="flaticon-square mr-2" aria-hidden="true"></i>
                                                <span>{{$search_data->LotSizeSquareFeet}} sq ft</span>
                                            </li>
                                            <li class="the-icons">
                                                <i class="flaticon-car mr-2" aria-hidden="true"></i>
                                                <span>{{$search_data->GarageSpaces}} Garages</span>
                                            </li>
                                        </ul>
                                        <!-- Price -->
                                        <div class="price-properties">
                                            <h3 class="title mt-3">
                                        <a href="{{ route('property.property-details',[$search_data->id]) }}">$ {{$search_data->ListPrice}}</a>
                                        </h3>
                                            <div class="compare">
                                               <a href="{{ route('property.property-details',[$search_data->id]) }}" class="listing_btn">View Details</a>
                                            </div>
                                        </div>
                                        <div class="footer d-none">
                                            <a href="agent-details.html">
                                                <i class="fa fa-user"></i> Jhon Doe
                                            </a>
                                            <span>
                                            <i class="fa fa-calendar"></i> 2 months ago
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach   
                        </div>
                    </div>
                    
                    @endif 
                </div>
                @if(count($searchData)>0)
                @if ($searchData->lastPage() > 1)
                <nav aria-label="..." class="agents pt-55">
                    <ul class="pagination disabled">
                        <li class="page-item disabled">
                            <a class="{{ ($searchData->currentPage() == 1) ? 'disabled' : '' }} page-link" href="{{ $searchData->url(1) }}" style="text-decoration:none;"><span>Previous</span>
                                            </a>
                        </li>
                       
                                     @for ($i = 1; $i <= $searchData->lastPage(); $i++)
                                        <li class="page-item {{ ($searchData->currentPage() == $i) ? ' active' : '' }}">
                                        @if($searchData->currentPage() == $i)
                                           
                                            <a class="page-link" href="#">{{ $i }}</a>
                                        @else
                                           
                                            <a class="page-link" href="{{ $searchData->url($i) }}">{{ $i }}</a>
                                        @endif
                                        </li>
                                        @endfor
                       
                        <li class="page-item">
                        <a class="{{ ($searchData->currentPage() == $searchData->lastPage()) ? ' disabled' : '' }} page-link" href="{{ $searchData->url($searchData->currentPage()+1) }}" style="text-decoration:none;"><span>Next</span>
                                            </a>
                        </li>
                    </ul>
                </nav>
                @endif 
                @endif
                
            </div>
        </section>
         <!-- START SECTION PROPERTIES LISTING -->

        
         <!-- END SECTION PROPERTIES LISTING -->
@endsection
@section('scripts')
         <script src="{{asset('frontend/js/jquery-ui.js')}}"></script>
         <script src="{{asset('frontend/js/range-slider.js')}}"></script>
         <script src="{{asset('frontend/js/popper.min.js')}}"></script>
         <script src="{{asset('frontend/js/slick4.js')}}"></script>
         <script src="{{asset('frontend/js/popup.js')}}"></script>
         <script src="{{asset('frontend/js/timedropper.js')}}"></script>
         <script src="{{asset('frontend/js/datedropper.js')}}"></script>
         <script src="{{asset('frontend/js/jqueryadd-count.js')}}"></script>
         <script src="{{asset('frontend/js/leaflet.js')}}"></script>
         <script src="{{asset('frontend/js/leaflet-gesture-handling.min.js')}}"></script>
         <script src="{{asset('frontend/js/leaflet-providers.js')}}"></script>
         <script src="{{asset('frontend/js/leaflet.markercluster.js')}}"></script>
         <script src="{{asset('frontend/js/map-single.js')}}"></script>
         <script src="{{asset('frontend/js/swiper.min.js')}}"></script>
         <script src="{{asset('frontend/js/inner.js')}}"></script>
        
         <script>
            var swiper = new Swiper('.swiper-container', {
                slidesPerView: 3,
                slidesPerGroup: 1,
                loop: true,
                loopFillGroupWithBlank: true,
                pagination: {
                    el: '.swiper-pagination',
                    clickable: true,
                },
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                },
                breakpoints: {
                    640: {
                        slidesPerView: 1,
                        spaceBetween: 20,
                    },
                    768: {
                        slidesPerView: 1,
                        spaceBetween: 40,
                    },
                    1024: {
                        slidesPerView: 5,
                        spaceBetween: 50,
                    },
                }
            });
            
         </script>
         <!-- Date Dropper Script-->
         <script>
            $('#reservation-date').dateDropper();
            
         </script>
         <!-- Time Dropper Script-->
         <script>
            this.$('#reservation-time').timeDropper({
                setCurrentTime: false,
                meridians: true,
                primaryColor: "#e8212a",
                borderColor: "#e8212a",
                minutesInterval: '15'
            });
            
         </script>
         <script>
            $(document).ready(function() {
                $('.popup-youtube, .popup-vimeo, .popup-gmaps').magnificPopup({
                    disableOn: 700,
                    type: 'iframe',
                    mainClass: 'mfp-fade',
                    removalDelay: 160,
                    preloader: false,
                    fixedContentPos: false
                });
            });
            
         </script>
         <script>
            $('.slick-carousel').each(function() {
                var slider = $(this);
                $(this).slick({
                    infinite: true,
                    dots: false,
                    arrows: false,
                    centerMode: true,
                    centerPadding: '0'
                });
            
                $(this).closest('.slick-slider-area').find('.slick-prev').on("click", function() {
                    slider.slick('slickPrev');
                });
                $(this).closest('.slick-slider-area').find('.slick-next').on("click", function() {
                    slider.slick('slickNext');
                });
            });
            
         </script>
@endsection