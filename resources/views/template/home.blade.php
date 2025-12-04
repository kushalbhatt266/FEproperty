@extends('layout.app')
@section('head')
    <link rel="stylesheet" id="color" href="{{asset('frontend/css/colors/pink.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/aos.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/aos2.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/maps.css')}}">
@endsection
@php
use App\Models\Wishlist;
if(!empty(Auth::user())){
$customerData = Auth::user()->toArray();
}else{
$customerData['id'] = 0;
}
@endphp
@section('body')<body class="homepage-9 hp-6 homepage-1 mh">@endsection
@section('content')

        <!-- Header Container / End -->

        <!-- STAR HEADER SEARCH -->
        <section id="hero-area" class="parallax-searchs home15 overlay thome-6 thome-1" data-stellar-background-ratio="0.5">
            <div class="hero-main">
                <div class="container" data-aos="zoom-in">
                    <div class="row">
                        <div class="col-12">
                            <div class="hero-inner">
                                <!-- Welcome Text -->
                                <div class="welcome-text">
                                    <h1 class="h1">Find Your Dream
                                    <br class="d-md-none">
                                    <span class="typed border-bottom"></span>
                                </h1>
                                    <p class="mt-4">We Have Over Million Properties For You.</p>
                                </div>
                                <!--/ End Welcome Text -->
                                <!-- Search Form -->
                                <div class="col-12">
                                    <div class="banner-search-wrap">
                                        <ul class="nav nav-tabs rld-banner-tab d-none">
                                            <li class="nav-item">
                                                <a class="nav-link active" data-toggle="tab" href="#tabs_1">For Sale</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" data-toggle="tab" href="#tabs_2">For Rent</a>
                                            </li>
                                        </ul>
                                        <div class="tab-content">
                                            <div class="tab-pane fade show active" id="tabs_1">
                                                <div class="rld-main-search">
                                                <form method="GET" action="{{ route('list-search') }}" id="filters" class="search-wrapper">
                                                 
                                                    <div class="row">
                                                       
                                                        
                                                        
                                                        <div class="rld-single-input">
                                                            <input type="text" name="location" id="location" placeholder="Type address, City or Zipcode">
                                                        </div>
                                                        <div class="rld-single-select ml-22">
                                                            <select class="select single-select" name="bedrooms" id="bedrooms">
                                                                <option value="any">Bedrooms</option>
                                                                <option value="1">1 Or More</option>
                                                                <option value="2">2 Or More</option>
                                                                <option value="3">3 Or More</option>
                                                                <option value="4">4 Or More</option>
                                                                <option value="5">5 Or More</option>
                                                                <option value="6">6 Or More</option>
                                                            </select>
                                                        </div>
                                                        <div class="rld-single-select">
                                                            <select class="select single-select mr-0" name="bathrooms" id="bathrooms">
                                                                <option value="any">Bathrooms</option>
                                                                <option value="1">1 Or More</option>
                                                                <option value="2">2 Or More</option>
                                                                <option value="3">3 Or More</option>
                                                                <option value="4">4 Or More</option>
                                                               
                                                            </select>
                                                        </div>
                                                        <div class="dropdown-filter"><span>Advanced Search</span></div>
                                                        <div class="col-xl-2 col-lg-2 col-md-4 pl-0">
                                                      
                                                           <button type="submit" class="btn btn-yellow">Search Now</button>
                                                        </div>
                                                        <div class="explore__form-checkbox-list full-filter" style="width: 100%;">
                                                            <div class="row">
                                                               
                                                                <div class="col-lg-6 col-md-6 py-1 pr-30 pl-0 ">
                                                                    <!-- Form Bedrooms -->
                                                                    <div class="form-group beds">
                                                                       <input type="text" class="form-control" name="min_price" id="min_price" placeholder="Min Price">
                                                                    </div>
                                                                    <!--/ End Form Bedrooms -->
                                                                </div>
                                                                <div class="col-lg-6 col-md-6 py-1 pr-30 pl-0">
                                                                    <!-- Form Bathrooms -->
                                                                    <div class="form-group bath">
                                                                        <div class="form-group beds">
                                                                            <input type="text" class="form-control" placeholder="Max Price"  name="max_price" id="max_price">
                                                                         </div>
                                                                    </div>
                                                                    <!--/ End Form Bathrooms -->
                                                                </div>
                                                               
                                                               
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                                </div>
                                            </div>
                                           
                                        </div>
                                    </div>
                                </div>
                                <!--/ End Search Form -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- END HEADER SEARCH -->
        
        <!-- START SECTION POPULAR PLACES -->
        <section class="feature-categories bg-white rec-pro">
            <div class="container-fluid">
                <div class="sec-title">
                    <h2><span>Popular </span>Places</h2>
                    <p>Properties In Most Popular Places.</p>
                </div>
                <div class="row">
                    <!-- Single category -->
                    <div class="col-xl-3 col-lg-6 col-sm-6" data-aos="fade-up" data-aos-delay="150">
                        <div class="small-category-2">
                            <div class="small-category-2-thumb img-1">
                                <a href="javascript:avoid(0)"><img src="{{asset('frontend/images/popular-places/12.jpg')}}" alt=""></a>
                            </div>
                            <div class="sc-2-detail">
                                <h4 class="sc-jb-title">
                                    <a href="javascript:avoid(0)">ST PETERSBURG</a></h4>
                                    <ul class="ul">
                                        <li> <a href="{{ route('list-search',['location'=>'ST PETERSBURG', 'min_price' => '200000']) }}" style="color:#000" class="ds">Under $200,000</a></li>
                                        <li><a href="{{ route('list-search',['location'=>'ST PETERSBURG', 'min_price' => '200000', 'max_price' => '300000']) }}" style="color:#000" class="ds">$200,000 to $300,000</a></li>
                                        <li><a href="{{ route('list-search',['location'=>'ST PETERSBURG', 'min_price' => '300000', 'max_price' => '400000']) }}" style="color:#000" class="ds">$300,000 to $400,000</a></li>
                                        <li> <a href="{{ route('list-search',['location'=>'ST PETERSBURG', 'min_price' => '400000', 'max_price' => '600000']) }}" style="color:#000" class="ds">$400,000 to $600,000</a></li>
                                    </ul>
                                   
                                    
                            </div>
                        </div>
                    </div>
                    <!-- Single category -->
                    <div class="col-xl-3 col-lg-6 col-sm-6" data-aos="fade-up" data-aos-delay="250">
                        <div class="small-category-2">
                            <div class="small-category-2-thumb img-2">
                                <a href="javascript:avoid(0)"><img src="{{asset('frontend/images/popular-places/13.jpg')}}" alt=""></a>
                            </div>
                            <div class="sc-2-detail">
                                <h4 class="sc-jb-title"><a href="javascript:avoid(0)">SOUTH TAMPA</a></h4>
                                <ul class="ul">
                                        <li><a href="{{ route('list-search',['direction'=>'south','location'=>'TAMPA', 'min_price' => '200000']) }}" style="color:#000" class="ds">Under $200,000</a></li>
                                        <li> <a href="{{ route('list-search',['direction'=>'south','location'=>'TAMPA', 'min_price' => '200000', 'max_price' => '300000']) }}" style="color:#000" class="ds">$200,000 to $300,000</a></li>
                                        <li><a href="{{ route('list-search',['direction'=>'south','location'=>'TAMPA', 'min_price' => '300000', 'max_price' => '400000']) }}" style="color:#000" class="ds">$300,000 to $400,000</a></li>
                                        <li><a href="{{ route('list-search',['direction'=>'south','location'=>'TAMPA', 'min_price' => '400000', 'max_price' => '600000']) }}" style="color:#000" class="ds">$400,000 to $600,000</a></li>
                                    </ul>
                                   
                               
                            </div>
                        </div>
                    </div>
                    <!-- Single category -->
                    <div class="col-xl-3 col-lg-6 col-sm-6" data-aos="fade-up" data-aos-delay="350">
                        <div class="small-category-2">
                            <div class="small-category-2-thumb img-3">
                                <a href="javascript:avoid(0)"><img src="{{asset('frontend/images/popular-places/14.jpg')}}" alt=""></a>
                            </div>
                            <div class="sc-2-detail">
                                <h4 class="sc-jb-title"><a href="javascript:avoid(0)">TAMPA</a></h4>
                                <ul class="ul">
                                    <li><a href="{{ route('list-search',['location'=>'TAMPA', 'min_price' => '200000']) }}" style="color:#000" class="ds">Under $200,000</a></li>
                                    <li> <a href="{{ route('list-search',['location'=>'TAMPA', 'min_price' => '200000', 'max_price' => '300000']) }}" style="color:#000" class="ds">$200,000 to $300,000</a></li>
                                   
                                    <li><a href="{{ route('list-search',['location'=>'TAMPA', 'min_price' => '300000', 'max_price' => '400000']) }}" style="color:#000" class="ds">$300,000 to $400,000</a></li>
                                    <li> <a href="{{ route('list-search',['location'=>'TAMPA', 'min_price' => '400000', 'max_price' => '600000']) }}" style="color:#000" class="ds">$400,000 to $600,000</a></li>
                                </ul>
                               
                              
                            </div>
                        </div>
                    </div>
                    <!-- Single category -->
                    <div class="col-xl-3 col-lg-6 col-sm-6" data-aos="fade-up" data-aos-delay="450">
                        <div class="small-category-2">
                            <div class="small-category-2-thumb img-3">
                                <a href="javascript:avoid(0)"><img src="{{asset('frontend/images/popular-places/9.jpg')}}" alt=""></a>
                            </div>
                            <div class="sc-2-detail">
                                <h4 class="sc-jb-title"><a href="javascript:avoid(0)">CLEARWATER</a></h4>
                                <ul class="ul">
                                    <li><a href="{{ route('list-search',['location'=>'CLEARWATER', 'min_price' => '200000']) }}" style="color:#000" class="ds">Under $200,000</a></li>
                                    <li><a href="{{ route('list-search',['location'=>'CLEARWATER', 'min_price' => '200000', 'max_price' => '300000']) }}" style="color:#000" class="ds">$200,000 to $300,000</a></li>
                                    <li> <a href="{{ route('list-search',['location'=>'CLEARWATER', 'min_price' => '300000', 'max_price' => '400000']) }}" style="color:#000" class="ds">$300,000 to $400,000</a></li>
                                    <li> <a href="{{ route('list-search',['location'=>'CLEARWATER', 'min_price' => '400000', 'max_price' => '600000']) }}" style="color:#000" class="ds">$400,000 to $600,000</a></li>
                                </ul>
                               
                              
                            </div>
                        </div>
                    </div>
                   
                </div>
                <!-- /row -->
            </div>
        </section>
        <!-- END SECTION POPULAR PLACES -->

        <!-- START SECTION FEATURED PROPERTIES -->
        <section class="featured portfolio bg-white-2 rec-pro full-l">
            <div class="container-fluid">
                <div class="sec-title">
                    <h2><span>Featured </span>Properties</h2>
                    <p>These are our featured properties</p>
                </div>
                <div class="row portfolio-items mx-0">
                @foreach($featured as $latest)
                           @php 
                           $latest_wishlist = Wishlist::where(['listing_id'=>$saleData->id??'', 'user_id' => $customerData['id']])->first();
                           @endphp
                    <div class="item col-xl-6 col-lg-12 col-md-12 col-xs-12 landscapes sale">
                        <div class="project-single" data-aos="fade-right">
                            <div class="project-inner project-head">
                                <div class="homes">
                                    <!-- homes img -->
                                    @if(count($latest->media)>0)
                                             @foreach($latest->media as $fkey => $f_media)
                                             @php if($fkey == 2) { @endphp
                                            <a href="{{ route('property.property-details',[$latest->id]) }}" class="homes-img">
                                                <div class="homes-tag button alt featured">New</div>
                                                <!-- <div class="homes-tag button alt sale">For Sale</div> -->
                                                <img src="{{config('constant.no_property_image')}}" alt="home-1" class="img-responsive" data-src="{{$f_media->MediaURL?config('constant.media_site').$f_media->MediaURL:config('constant.no_property_image')}}" >
                                            </a>
                                            @php } @endphp
                                             @endforeach
                                             @else
                                            
                                            <a href="{{ route('property.property-details',[$latest->id]) }}" class="homes-img">
                                                <div class="homes-tag button alt featured">New</div>
                                                <!-- <div class="homes-tag button alt sale">For Sale</div> -->
                                                <img src="{{config('constant.no_property_image')}}" alt="slide image" data-src="{{config('constant.no_property_image')}}" class="slide-item swiper-lazy">
                                            </a>
                                             @endif
                                </div>
                                <!-- <div class="button-effect">
                                    <a href="single-property-1.html" class="btn"><i class="fa fa-link"></i></a>
                                    <a href="https://www.youtube.com/watch?v=14semTlwyUY" class="btn popup-video popup-youtube"><i class="fas fa-video"></i></a>
                                    <a href="single-property-2.html" class="img-poppu btn"><i class="fa fa-photo"></i></a>
                                </div> -->
                            </div>
                            <!-- homes content -->
                            <div class="homes-content">
                                <!-- homes address -->
                                <h3><a href="{{ route('property.property-details',[$latest->id]) }}">{{$latest->ListOfficeName}}</a></h3>
                                <p class="homes-address mb-3">
                                    <a href="{{ route('property.property-details',[$latest->id]) }}">
                                        <i class="fa fa-map-marker"></i><span>{{$latest->UnparsedAddress}}</span>
                                    </a>
                                </p>
                                <!-- homes List -->
                                <ul class="homes-list clearfix pb-3">
                                    <li class="the-icons">
                                        <i class="flaticon-bed mr-2" aria-hidden="true"></i>
                                        <span>{{$latest->BedroomsTotal}} Bedrooms</span>
                                    </li>
                                    <li class="the-icons">
                                        <i class="flaticon-bathtub mr-2" aria-hidden="true"></i>
                                        <span>{{$latest->BathroomsTotalInteger}} Bathrooms</span>
                                    </li>
                                    <li class="the-icons">
                                        <i class="flaticon-square mr-2" aria-hidden="true"></i>
                                        <span>{{$latest->LotSizeSquareFeet}} sq ft</span>
                                    </li>
                                    <li class="the-icons">
                                        <i class="flaticon-car mr-2" aria-hidden="true"></i>
                                        <span>{{$latest->GarageSpaces}} Garages</span>
                                    </li>
                                </ul>
                                <div class="price-properties footer pt-3 pb-0">
                                    <h3 class="title mt-3">
                                     <a href="javascript:void(0)">$ {{$latest->ListPrice}}</a>
                                    </h3>
                                    <div class="compare">
                                    <a href="{{ route('property.property-details',[$latest->id]) }}" class="listing_btn">View Details</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                <div class="bg-all">
                    <a href="{{ route('list-search',['featured' => true]) }}" class="btn btn-outline-light">View More</a>
                </div>
            </div>
        </section>
        <!-- END SECTION FEATURED PROPERTIES -->

        <!-- START SECTION WHY CHOOSE US -->
        <section class="how-it-works bg-white rec-pro">
            <div class="container-fluid">
                <div class="sec-title">
                    <h2><span>Why </span>Choose Us</h2>
                    <p>We provide full service at every step.</p>
                </div>
                <div class="row service-1">
                    <article class="col-lg-3 col-md-6 col-xs-12 serv" data-aos="fade-up" data-aos-delay="150">
                        <div class="serv-flex">
                            <div class="art-1 img-13">
                                <img src="{{asset('frontend/images/icons/icon-4.svg')}}" alt="">
                                <h3>Wide Renge Of Properties</h3>
                            </div>
                            <div class="service-text-p">
                                <p class="text-center">lorem ipsum dolor sit amet, consectetur pro adipisici consectetur debits adipisicing lacus consectetur Business Directory.</p>
                            </div>
                        </div>
                    </article>
                    <article class="col-lg-3 col-md-6 col-xs-12 serv" data-aos="fade-up" data-aos-delay="250">
                        <div class="serv-flex">
                            <div class="art-1 img-14">
                                <img src="{{asset('frontend/images/icons/icon-5.svg')}}" alt="">
                                <h3>Trusted by thousands</h3>
                            </div>
                            <div class="service-text-p">
                                <p class="text-center">lorem ipsum dolor sit amet, consectetur pro adipisici consectetur debits adipisicing lacus consectetur Business Directory.</p>
                            </div>
                        </div>
                    </article>
                    <article class="col-lg-3 col-md-6 col-xs-12 serv mb-0 pt" data-aos="fade-up" data-aos-delay="350">
                        <div class="serv-flex arrow">
                            <div class="art-1 img-15">
                                <img src="{{asset('frontend/images/icons/icon-6.svg')}}" alt="">
                                <h3>Financing made easy</h3>
                            </div>
                            <div class="service-text-p">
                                <p class="text-center">lorem ipsum dolor sit amet, consectetur pro adipisici consectetur debits adipisicing lacus consectetur Business Directory.</p>
                            </div>
                        </div>
                    </article>
                    <article class="col-lg-3 col-md-6 col-xs-12 serv mb-0 pt its-2" data-aos="fade-up" data-aos-delay="450">
                        <div class="serv-flex">
                            <div class="art-1 img-14">
                                <img src="{{asset('frontend/images/icons/icon-15.svg')}}" alt="">
                                <h3>We are here near you</h3>
                            </div>
                            <div class="service-text-p">
                                <p class="text-center">lorem ipsum dolor sit amet, consectetur pro adipisici consectetur debits adipisicing lacus consectetur Business Directory.</p>
                            </div>
                        </div>
                    </article>
                </div>
            </div>
        </section>
        <!-- END SECTION WHY CHOOSE US -->        

        <!-- START SECTION RECENTLY PROPERTIES -->
        <section class="featured portfolio rec-pro disc">
            <div class="container-fluid">
                <div class="sec-title discover">
                    <h2><span>Off </span>Market Properties</h2>
                   
                </div>
                <div class="portfolio col-xl-12">
                    <div class="slick-lancers">
                    @if(count($offMarketData)>0)
                            @foreach($offMarketData as $search_data)
                        <div class="agents-grid" data-aos="fade-up" data-aos-delay="150">
                            <div class="landscapes">
                                <div class="project-single">
                                    <div class="project-inner project-head">
                                   
                                    @if(count($search_data->images)>0)
                                                    @foreach($search_data->images as $key => $media)
                                                    @if($key == 0)
                                        <div class="homes">
                                            <!-- homes img -->
                                            <a href="{{ route('property.off-market-property-details',[$search_data->id]) }}" class="homes-img">
                                                <!-- <div class="homes-tag button alt featured">Featured</div> -->
                                                <div class="homes-tag button alt sale">For Sale</div>
                                                <img src="{{$media->file?config('constant.media_site').'storage/property_image/'.$media->file:config('constant.no_property_image')}}" alt="home-1" class="img-responsive" style='height:195px'>
                                            </a>
                                        </div>
                                        @endif
                                                    @endforeach
                                                    @else
                                             <div class="homes">
                                            <!-- homes img -->
                                            <a href="{{ route('property.off-market-property-details',[$search_data->id]) }}" class="homes-img">
                                                <!-- <div class="homes-tag button alt featured">Featured</div> -->
                                                <div class="homes-tag button alt sale">For Sale</div>
                                                <img src="{{asset('frontend/images/blog/b-11.jpg')}}" alt="home-1" class="img-responsive" style='height:195px'>
                                            </a>
                                            </div>
                                            @endif
                                        <!-- <div class="button-effect">
                                            <a href="single-property-1.html" class="btn"><i class="fa fa-link"></i></a>
                                            <a href="https://www.youtube.com/watch?v=14semTlwyUY" class="btn popup-video popup-youtube"><i class="fas fa-video"></i></a>
                                            <a href="single-property-2.html" class="img-poppu btn"><i class="fa fa-photo"></i></a>
                                        </div> -->
                                    </div>
                                    <!-- homes content -->
                                    <div class="homes-content">
                                        <!-- homes address -->
                                        <h3><a href="{{ route('property.off-market-property-details',[$search_data->id]) }}">{{$search_data->title}}</a></h3>
                                        <p class="homes-address mb-3">
                                            <a href="{{ route('property.off-market-property-details',[$search_data->id]) }}">
                                                <i class="fa fa-map-marker"></i><span>{{$search_data->address}}</span>
                                            </a>
                                        </p>
                                        <!-- homes List -->
                                        <ul class="homes-list clearfix pb-3">
                                            <li class="the-icons">
                                                <i class="flaticon-bed mr-2" aria-hidden="true"></i>
                                                <span>{{$search_data->additionalDetails->rooms}} Bedrooms</span>
                                            </li>
                                            <li class="the-icons">
                                                <i class="flaticon-bathtub mr-2" aria-hidden="true"></i>
                                                <span>{{$search_data->additionalDetails->bathrooms}} Bathrooms</span>
                                            </li>
                                            <li class="the-icons">
                                                <i class="flaticon-square mr-2" aria-hidden="true"></i>
                                                <span>{{$search_data->additionalDetails->total_area}} sq ft</span>
                                            </li>
                                            <li class="the-icons">
                                                <i class="flaticon-car mr-2" aria-hidden="true"></i>
                                                <span>{{$latest->GarageSpaces}} Garages</span>
                                            </li>
                                        </ul>
                                        <div class="price-properties footer pt-0 pb-0">
                                            <h3 class="title mt-3">
                                                <a href="{{ route('property.off-market-property-details',[$search_data->id]) }}">$ {{$search_data->rental_price}}/Month</a>
                                            </h3>
                                            <!-- <div class="compare">
                                                <a href="#" title="Compare">
                                                    <i class="flaticon-compare"></i>
                                                </a>
                                                <a href="#" title="Share">
                                                    <i class="flaticon-share"></i>
                                                </a>
                                                <a href="#" title="Favorites">
                                                    <i class="flaticon-heart"></i>
                                                </a>
                                            </div> -->
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
        </section>
        <!-- END SECTION RECENTLY PROPERTIES -->

        <!-- START SECTION AGENTS -->
        <section class="team bg-white rec-pro">
            <div class="container-fluid">
                <div class="sec-title">
                    <h2><span>Meet Our </span>Agents</h2>
                    <p>Our Agents are here to help you</p>
                </div>
                <div class="row team-all">
                    <!--Team Block-->
                    @php $agents  = App\Models\Agent::orderby('id','desc')->get(); @endphp
                    @foreach($agents as $agent)
                    <div class="team-block col-sm-6 col-md-4 col-lg-4 col-xl-2" data-aos="fade-up" data-aos-delay="150">
                        <div class="inner-box team-details">
                            <div class="image team-head">
                                <a href="{{url('our-agents/'.$agent->id.'/'.str_replace(' ','-',strtolower($agent->name)))}}">
                                <img src="{{!empty($agent->photo)?$agent->photo:asset('user.jpg')}}" alt="" />
                                </a>
                                <div class="team-hover">
                                    <ul class="team-social">
                                        @if(!empty($agent->facebook_link))
                                        <li><a href="{{$agent->facebook_link}}" class="facebook"><i class="fa fa-facebook"></i></a></li>
                                        @endif
                                        @if(!empty($agent->twitter_link))
                                        <li><a href="{{$agent->twitter_link}}" class="twitter"><i class="fa fa-twitter"></i></a></li>
                                        @endif
                                        @if(!empty($agent->instagram_link))
                                        <li><a href="{{$agent->instagram_link}}" class="instagram"><i class="fa fa-instagram"></i></a></li>
                                        @endif
                                        @if(!empty($agent->linkdin_link))
                                        <li><a href="{{$agent->linkdin_link}}" class="linkedin"><i class="fa fa-linkedin"></i></a></li>
                                        @endif
                                        @if(!empty($agent->pinterest_link))
                                        <li><a href="{{$agent->pinterest_link}}" class="linkedin"><i class="fa fa-pinterest"></i></a></li>
                                        @endif
                                    </ul>
                                </div>
                            </div>
                            <div class="lower-box">
                                <h3><a href="javascript:void(0)">{{$agent->name}}</a></h3>
                            </div>
                        </div>
                    </div>
                    @endforeach
                   
                </div>
            </div>
        </section>
        <!-- END SECTION AGENTS -->

        <!-- START SECTION TESTIMONIALS -->
        <section class="testimonials bg-white-2 rec-pro">
            <div class="container-fluid">
                <div class="sec-title">
                    <h2><span>Clients </span>Testimonials</h2>
                    <p>We collect reviews from our customers.</p>
                </div>
                <div class="owl-carousel job_clientSlide " >
                    @foreach(get_testimonial() as $testimonial)
                    <div class="singleJobClinet " data-aos="zoom-in" data-aos-delay="150">
                        <p>
                           {!! $testimonial->title !!}
                        </p>
                        <div class="detailJC">
                            <span><img src="{{asset($testimonial->image)}}" alt=""/></span>
                            <h5>{{$testimonial->client_name}}</h5>
                            <p>{{$testimonial->desination}}</p>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>
        <!-- END SECTION TESTIMONIALS -->

        <!-- STAR SECTION PARTNERS -->
        <div class="partners bg-white rec-pro d-none">
            <div class="container-fluid">
                <div class="sec-title">
                    <h2><span>Our </span>Partners</h2>
                    <p>The Companies That Represent Us.</p>
                </div>
                <div class="owl-carousel style2">
                    @foreach(App\Models\Client::get() as $client)
                    <div class="owl-item" data-aos="fade-up"><img src="{{$client->image}}" alt=""></div>
                    @endforeach
                   
                </div>
            </div>
        </div>
        <!-- END SECTION PARTNERS -->
@endsection
@section('scripts')
        <script src="{{asset('frontend/js/moment.js')}}"></script>
        <script src="{{asset('frontend/js/aos.js')}}"></script>
        <script src="{{asset('frontend/js/aos2.js')}}"></script>
        <script src="{{asset('frontend/js/animate.js')}}"></script>
        <script src="{{asset('frontend/js/jquery.waypoints.min.js')}}"></script>
        <script src="{{asset('frontend/js/typed.min.js')}}"></script>
        <script src="{{asset('frontend/js/jquery.counterup.min.js')}}"></script>
        <script src="{{asset('frontend/js/imagesloaded.pkgd.min.js')}}"></script>
        <script src="{{asset('frontend/js/isotope.pkgd.min.js')}}"></script>
        <script src="{{asset('frontend/js/lightcase.js')}}"></script>
        <script src="{{asset('frontend/js/owl.carousel.js')}}"></script>
        <script src="{{asset('frontend/js/jquery.form.js')}}"></script>
        <script src="{{asset('frontend/js/jquery.validate.min.js')}}"></script> 
        <script src="{{asset('frontend/js/forms-2.js')}}"></script>
        <script src="{{asset('frontend/js/map-style2.js')}}"></script>
        <script src="{{asset('frontend/js/range.js')}}"></script>

        <script>
            $(window).on('scroll load', function() {
                $("#header.cloned #logo img").attr("src", $('#header #logo img').attr('data-sticky-logo'));
            });

        </script>

        <!-- Slider Revolution scripts -->
        <script src="{{asset('frontend/revolution/js/jquery.themepunch.tools.min.js')}}"></script>
        <script src="{{asset('frontend/revolution/js/jquery.themepunch.revolution.min.js')}}"></script>


        <script>
            var typed = new Typed('.typed', {
                strings: ["House ^2000", "Apartment ^2000", "Plaza ^4000"],
                smartBackspace: false,
                loop: true,
                showCursor: true,
                cursorChar: "|",
                typeSpeed: 50,
                backSpeed: 30,
                startDelay: 800
            });

        </script>

        <script>
            $('.slick-lancers').slick({
                infinite: false,
                slidesToShow: 4,
                slidesToScroll: 1,
                dots: true,
                arrows: false,
                adaptiveHeight: true,
                responsive: [{
                    breakpoint: 1292,
                    settings: {
                        slidesToShow: 4,
                        slidesToScroll: 1,
                        dots: true,
                        arrows: false
                    }
                }, {
                    breakpoint: 993,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 2,
                        dots: true,
                        arrows: false
                    }
                }, {
                    breakpoint: 769,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        dots: true,
                        arrows: false
                    }
                }]
            });

        </script>

        <script>
            $('.job_clientSlide').owlCarousel({
                items: 2,
                loop: true,
                margin: 30,
                autoplay: false,
                nav: true,
                smartSpeed: 1000,
                slideSpeed: 1000,
                navText: ["<i class='fa fa-chevron-left'></i>", "<i class='fa fa-chevron-right'></i>"],
                dots: false,
                responsive: {
                    0: {
                        items: 1
                    },
                    991: {
                        items: 3
                    }
                }
            });

        </script>

        <script>
            $('.style2').owlCarousel({
                loop: true,
                margin: 0,
                dots: false,
                autoWidth: false,
                autoplay: true,
                autoplayTimeout: 5000,
                responsive: {
                    0: {
                        items: 2,
                        margin: 20
                    },
                    400: {
                        items: 2,
                        margin: 20
                    },
                    500: {
                        items: 3,
                        margin: 20
                    },
                    768: {
                        items: 4,
                        margin: 20
                    },
                    992: {
                        items: 5,
                        margin: 20
                    },
                    1000: {
                        items: 7,
                        margin: 20
                    }
                }
            });

        </script>

        <script>
            $(".dropdown-filter").on('click', function() {

                $(".explore__form-checkbox-list").toggleClass("filter-block");

            });

        </script>



        <!-- MAIN JS -->
        <script src="{{asset('frontend/js/script.js')}}"></script>
@endsection