@extends('layout.app')
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
                                    <p class="pb-2"><a href="{{asset('/')}}">Home </a> &nbsp;/&nbsp; <span>Search By Property Type</span></p>
                                </div>
                               
                            </div>
                        </div>
                        
                    </div>
                    <hr>
                </section>
                
                <div class="row">
                @include('template.search')
                    <div class="col-lg-8 col-md-12 blog-pots">
                        <h4 class="listing-head">Search By Property Type</h4>
                        <div class="row search_by_row">
                           
                        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 p-2"> 
                                     <div class="mdc-card h-100 w-100 text-center middle-xs p-3">
                                         <img src="{{ asset('assets/images/props/slide-3.jpg') }}" style="width: 100%;height: 200px;">
                                         <a href="{{ route('list-search',['location'=>'ST PETERSBURG']) }}" style="color:#000" class="ds" target="_blank"><h2 class="capitalize fw-600 my-3 mp ds1" style="margin-bottom: 0px !important">ST PETERSBURG</h2></a>
                                         <p class="text-muted fw-500">
                                             <a href="{{ route('list-search',['location'=>'ST PETERSBURG', 'min_price' => '600000']) }}" style="color:#000" class="ds" target="_blank">Luxury Homes</a><br>
                                             <a href="{{ route('list-search',['location'=>'ST PETERSBURG', 'waterfront' => '1']) }}" style="color:#000" class="ds" target="_blank">Waterfront Homes</a><br>
                                             <a href="{{ route('list-search',['location'=>'ST PETERSBURG', 'adult_community_bool' => '1']) }}" style="color:#000" class="ds" target="_blank">55+ Homes</a><br>
                                             <a href="{{ route('list-search',['location'=>'ST PETERSBURG', 'property_subtypes' => 'Townhouse', 'property_type' => 'Condo']) }}" style="color:#000" class="ds" target="_blank">Condos & Townhomes</a><br>
                                         </p>         
                                     </div> 
                                 </div>
                                 <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 p-2"> 
                                     <div class="mdc-card h-100 w-100 text-center middle-xs p-3">     
                                         <img src="assets/images/props/slide-6.jpg" style="width: 100%;height: 200px;">
                                        <a href="{{ route('list-search',['location'=>'Palm Harbor']) }}" style="color:#000" class="ds" target="_blank"><h2 class="capitalize fw-600 my-3 mp ds1" style="margin-bottom: 0px !important">Palm Harbor</h2></a>
                                         <p class="text-muted fw-500">
                                             <a href="{{ route('list-search',['location'=>'Palm Harbor', 'min_price' => '600000']) }}" style="color:#000" class="ds" target="_blank">Luxury Homes</a><br>
                                             <a href="{{ route('list-search',['location'=>'Palm Harbor', 'waterfront' => '1']) }}" style="color:#000" class="ds" target="_blank">Waterfront Homes</a><br>
                                             <a href="{{ route('list-search',['location'=>'Palm Harbor', 'adult_community_bool' => '1']) }}" style="color:#000" class="ds" target="_blank">55+ Homes</a><br>
                                             <a href="{{ route('list-search',['location'=>'Palm Harbor', 'property_subtypes' => 'Townhouse', 'property_type' => 'Condo']) }}" style="color:#000" class="ds" target="_blank">Condos & Townhomes</a><br>
                                         </p>
                                    </div> 
                                 </div>
                                 <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 p-2"> 
                                     <div class="mdc-card h-100 w-100 text-center middle-xs p-3">     
                                         <img src="{{asset('assets/images/props/slide-4.jpg') }}" style="width: 100%;height: 200px;">
                                         <a href="{{ route('list-search',['direction'=>'south','location'=>'TAMPA']) }}" style="color:#000" class="ds" target="_blank"><h2 class="capitalize fw-600 my-3 mp ds1" style="margin-bottom: 0px !important">SOUTH TAMPA</h2></a>
                                         <p class="text-muted fw-500">
                                             <a href="{{ route('list-search',['direction'=>'south','location'=>'TAMPA', 'min_price' => '600000']) }}" style="color:#000" class="ds" target="_blank">Luxury Homes</a><br>
                                             <a href="{{ route('list-search',['direction'=>'south','location'=>'TAMPA', 'waterfront' => '1']) }}" style="color:#000" class="ds" target="_blank">Waterfront Homes</a><br>
                                             <a href="{{ route('list-search',['direction'=>'south','location'=>'TAMPA', 'adult_community_bool' => '1']) }}" style="color:#000" class="ds" target="_blank">55+ Homes</a><br>
                                             <a href="{{ route('list-search',['direction'=>'south','location'=>'TAMPA', 'property_subtypes' => 'Townhouse', 'property_type' => 'Condo']) }}" style="color:#000" class="ds" target="_blank">Condos & Townhomes</a><br>
                                         </p>           
                                     </div> 
                                 </div> 
                                 <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 p-2">  
                                     <div class="mdc-card h-100 w-100 text-center middle-xs p-3">  
                                         <img src="{{ asset('assets/images/props/slide-5.jpg') }}" style="width: 100%;height: 200px;">
                                         <a href="{{ route('list-search',['location'=>'TAMPA']) }}" style="color:#000" class="ds" target="_blank"><h2 class="capitalize fw-600 my-3 mp ds1" style="margin-bottom: 0px !important">TAMPA</h2></a>
                                         <p class="text-muted fw-500">
                                             <a href="{{ route('list-search',['location'=>'TAMPA', 'min_price' => '600000']) }}" style="color:#000" class="ds" target="_blank">Luxury Homes</a><br>
                                             <a href="{{ route('list-search',['location'=>'TAMPA', 'waterfront' => '1']) }}" style="color:#000" class="ds" target="_blank">Waterfront Homes</a><br>
                                             <a href="{{ route('list-search',['location'=>'TAMPA', 'adult_community_bool' => '1']) }}" style="color:#000" class="ds" target="_blank">55+ Homes</a><br>
                                             <a href="{{ route('list-search',['location'=>'TAMPA', 'property_subtypes' => 'Townhouse', 'property_type' => 'Condo']) }}" style="color:#000" class="ds" target="_blank">Condos & Townhomes</a><br>
                                         </p>            
                                     </div> 
                                 </div>  
                                 <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 p-2"> 
                                     <div class="mdc-card h-100 w-100 text-center middle-xs p-3">     
                                         <img src="assets/images/props/slide-6.jpg" style="width: 100%;height: 200px;">
                                        <a href="{{ route('list-search',['location'=>'St Pete Beach']) }}" style="color:#000" class="ds" target="_blank"><h2 class="capitalize fw-600 my-3 mp ds1" style="margin-bottom: 0px !important">St Pete Beach</h2></a>
                                         <p class="text-muted fw-500">
                                             <a href="{{ route('list-search',['location'=>'St Pete Beach', 'min_price' => '600000']) }}" style="color:#000" class="ds" target="_blank">Luxury Homes</a><br>
                                             <a href="{{ route('list-search',['location'=>'St Pete Beach', 'waterfront' => '1']) }}" style="color:#000" class="ds" target="_blank">Waterfront Homes</a><br>
                                             <a href="{{ route('list-search',['location'=>'St Pete Beach', 'adult_community_bool' => '1']) }}" style="color:#000" class="ds" target="_blank">55+ Homes</a><br>
                                             <a href="{{ route('list-search',['location'=>'St Pete Beach', 'property_subtypes' => 'Townhouse', 'property_type' => 'Condo']) }}" style="color:#000" class="ds" target="_blank">Condos & Townhomes</a><br>
                                         </p>
                                    </div> 
                                 </div>
                                 
                                 <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 p-2"> 
                                     <div class="mdc-card h-100 w-100 text-center middle-xs p-3">     
                                         <img src="assets/images/props/slide-6.jpg" style="width: 100%;height: 200px;">
                                        <a href="{{ route('list-search',['location'=>'Treasure Island']) }}" style="color:#000" class="ds" target="_blank"><h2 class="capitalize fw-600 my-3 mp ds1" style="margin-bottom: 0px !important">Treasure Island</h2></a>
                                         <p class="text-muted fw-500">
                                             <a href="{{ route('list-search',['location'=>'Treasure Island', 'min_price' => '600000']) }}" style="color:#000" class="ds" target="_blank">Luxury Homes</a><br>
                                             <a href="{{ route('list-search',['location'=>'Treasure Island', 'waterfront' => '1']) }}" style="color:#000" class="ds" target="_blank">Waterfront Homes</a><br>
                                             <a href="{{ route('list-search',['location'=>'Treasure Island', 'adult_community_bool' => '1']) }}" style="color:#000" class="ds" target="_blank">55+ Homes</a><br>
                                             <a href="{{ route('list-search',['location'=>'Treasure Island', 'property_subtypes' => 'Townhouse', 'property_type' => 'Condo']) }}" style="color:#000" class="ds" target="_blank">Condos & Townhomes</a><br>
                                         </p>
                                    </div> 
                                 </div>
                                 <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 p-2"> 
                                     <div class="mdc-card h-100 w-100 text-center middle-xs p-3">     
                                         <img src="assets/images/props/slide-6.jpg" style="width: 100%;height: 200px;">
                                        <a href="{{ route('list-search',['location'=>'Clearwater Beach']) }}" style="color:#000" class="ds" target="_blank"><h2 class="capitalize fw-600 my-3 mp ds1" style="margin-bottom: 0px !important">Clearwater Beach</h2></a>
                                         <p class="text-muted fw-500">
                                             <a href="{{ route('list-search',['location'=>'Clearwater Beach', 'min_price' => '600000']) }}" style="color:#000" class="ds" target="_blank">Luxury Homes</a><br>
                                             <a href="{{ route('list-search',['location'=>'Clearwater Beach', 'waterfront' => '1']) }}" style="color:#000" class="ds" target="_blank">Waterfront Homes</a><br>
                                             <a href="{{ route('list-search',['location'=>'Clearwater Beach', 'adult_community_bool' => '1']) }}" style="color:#000" class="ds" target="_blank">55+ Homes</a><br>
                                             <a href="{{ route('list-search',['location'=>'Clearwater Beach', 'property_subtypes' => 'Townhouse', 'property_type' => 'Condo']) }}" style="color:#000" class="ds" target="_blank">Condos & Townhomes</a><br>
                                         </p>
                                    </div> 
                                 </div>
                                 <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 p-2"> 
                                     <div class="mdc-card h-100 w-100 text-center middle-xs p-3">     
                                         <img src="assets/images/props/slide-6.jpg" style="width: 100%;height: 200px;">
                                        <a href="{{ route('list-search',['location'=>'Riverview']) }}" style="color:#000" class="ds" target="_blank"><h2 class="capitalize fw-600 my-3 mp ds1" style="margin-bottom: 0px !important">Riverview</h2></a>
                                         <p class="text-muted fw-500">
                                             <a href="{{ route('list-search',['location'=>'Riverview', 'min_price' => '600000']) }}" style="color:#000" class="ds" target="_blank">Luxury Homes</a><br>
                                             <a href="{{ route('list-search',['location'=>'Riverview', 'waterfront' => '1']) }}" style="color:#000" class="ds" target="_blank">Waterfront Homes</a><br>
                                             <a href="{{ route('list-search',['location'=>'Riverview', 'adult_community_bool' => '1']) }}" style="color:#000" class="ds" target="_blank">55+ Homes</a><br>
                                             <a href="{{ route('list-search',['location'=>'Riverview', 'property_subtypes' => 'Townhouse', 'property_type' => 'Condo']) }}" style="color:#000" class="ds" target="_blank">Condos & Townhomes</a><br>
                                         </p>
                                    </div> 
                                 </div>
                                 <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 p-2"> 
                                     <div class="mdc-card h-100 w-100 text-center middle-xs p-3">     
                                         <img src="assets/images/props/slide-6.jpg" style="width: 100%;height: 200px;">
                                        <a href="{{ route('list-search',['location'=>'Brandon']) }}" style="color:#000" class="ds" target="_blank"><h2 class="capitalize fw-600 my-3 mp ds1" style="margin-bottom: 0px !important">Brandon</h2></a>
                                         <p class="text-muted fw-500">
                                             <a href="{{ route('list-search',['location'=>'Brandon', 'min_price' => '600000']) }}" style="color:#000" class="ds" target="_blank">Luxury Homes</a><br>
                                             <a href="{{ route('list-search',['location'=>'Brandon', 'waterfront' => '1']) }}" style="color:#000" class="ds" target="_blank">Waterfront Homes</a><br>
                                             <a href="{{ route('list-search',['location'=>'Brandon', 'adult_community_bool' => '1']) }}" style="color:#000" class="ds" target="_blank">55+ Homes</a><br>
                                             <a href="{{ route('list-search',['location'=>'Brandon', 'property_subtypes' => 'Townhouse', 'property_type' => 'Condo']) }}" style="color:#000" class="ds" target="_blank">Condos & Townhomes</a><br>
                                         </p>
                                    </div> 
                                 </div>
                                 <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 p-2"> 
                                     <div class="mdc-card h-100 w-100 text-center middle-xs p-3">     
                                         <img src="assets/images/props/slide-6.jpg" style="width: 100%;height: 200px;">
                                        <a href="{{ route('list-search',['location'=>'Dunedin']) }}" style="color:#000" class="ds" target="_blank"><h2 class="capitalize fw-600 my-3 mp ds1" style="margin-bottom: 0px !important">Dunedin</h2></a>
                                         <p class="text-muted fw-500">
                                             <a href="{{ route('list-search',['location'=>'Dunedin', 'min_price' => '600000']) }}" style="color:#000" class="ds" target="_blank">Luxury Homes</a><br>
                                             <a href="{{ route('list-search',['location'=>'Dunedin', 'waterfront' => '1']) }}" style="color:#000" class="ds" target="_blank">Waterfront Homes</a><br>
                                             <a href="{{ route('list-search',['location'=>'Dunedin', 'adult_community_bool' => '1']) }}" style="color:#000" class="ds" target="_blank">55+ Homes</a><br>
                                             <a href="{{ route('list-search',['location'=>'Dunedin', 'property_subtypes' => 'Townhouse', 'property_type' => 'Condo']) }}" style="color:#000" class="ds" target="_blank">Condos & Townhomes</a><br>
                                         </p>
                                    </div> 
                                 </div>
                                 <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 p-2"> 
                                     <div class="mdc-card h-100 w-100 text-center middle-xs p-3">     
                                         <img src="assets/images/props/slide-6.jpg" style="width: 100%;height: 200px;">
                                        <a href="{{ route('list-search',['location'=>'Tampa', 'postalCode' => '33647']) }}" style="color:#000" class="ds" target="_blank"><h2 class="capitalize fw-600 my-3 mp ds1" style="margin-bottom: 0px !important">(New Tampa) 33647</h2></a>
                                         <p class="text-muted fw-500">
                                             <a href="{{ route('list-search',['location'=>'Tampa', 'min_price' => '600000', 'postalCode' => '33647']) }}" style="color:#000" class="ds" target="_blank">Luxury Homes</a><br>
                                             <a href="{{ route('list-search',['location'=>'Tampa', 'waterfront' => '1', 'postalCode' => '33647']) }}" style="color:#000" class="ds" target="_blank">Waterfront Homes</a><br>
                                             <a href="{{ route('list-search',['location'=>'Tampa', 'adult_community_bool' => '1', 'postalCode' => '33647']) }}" style="color:#000" class="ds" target="_blank">55+ Homes</a><br>
                                             <a href="{{ route('list-search',['location'=>'Tampa', 'property_subtypes' => 'Townhouse', 'property_type' => 'Condo', 'postalCode' => '33647']) }}" style="color:#000" class="ds" target="_blank">Condos & Townhomes</a><br>
                                         </p>
                                    </div> 
                                 </div>
                                 <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 p-2"> 
                                     <div class="mdc-card h-100 w-100 text-center middle-xs p-3">     
                                         <img src="assets/images/props/slide-6.jpg" style="width: 100%;height: 200px;">
                                        <a href="{{ route('list-search',['direction'=>'south','location'=>'Tampa', 'postalCode' => '33611']) }}" style="color:#000" class="ds" target="_blank"><h2 class="capitalize fw-600 my-3 mp ds1" style="margin-bottom: 0px !important">(South Tampa) 33611</h2></a>
                                         <p class="text-muted fw-500">
                                             <a href="{{ route('list-search',['direction'=>'south','location'=>'Tampa', 'min_price' => '600000', 'postalCode' => '33611']) }}" style="color:#000" class="ds" target="_blank">Luxury Homes</a><br>
                                             <a href="{{ route('list-search',['direction'=>'south','location'=>'Tampa', 'waterfront' => '1', 'postalCode' => '33611']) }}" style="color:#000" class="ds" target="_blank">Waterfront Homes</a><br>
                                             <a href="{{ route('list-search',['direction'=>'south','location'=>'Tampa', 'adult_community_bool' => '1', 'postalCode' => '33611']) }}" style="color:#000" class="ds" target="_blank">55+ Homes</a><br>
                                             <a href="{{ route('list-search',['direction'=>'south','location'=>'Tampa', 'property_subtypes' => 'Townhouse', 'property_type' => 'Condo', 'postalCode' => '33611']) }}" style="color:#000" class="ds" target="_blank">Condos & Townhomes</a><br>
                                         </p>
                                    </div> 
                                 </div>
                                 <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 p-2"> 
                                     <div class="mdc-card h-100 w-100 text-center middle-xs p-3">     
                                         <img src="assets/images/props/slide-6.jpg" style="width: 100%;height: 200px;">
                                        <a href="{{ route('list-search',['direction'=>'south','location'=>'Tampa', 'postalCode' => '33616']) }}" style="color:#000" class="ds" target="_blank"><h2 class="capitalize fw-600 my-3 mp ds1" style="margin-bottom: 0px !important">(South Tampa) 33616</h2></a>
                                         <p class="text-muted fw-500">
                                             <a href="{{ route('list-search',['direction'=>'south','location'=>'Tampa', 'min_price' => '600000', 'postalCode' => '33616']) }}" style="color:#000" class="ds" target="_blank">Luxury Homes</a><br>
                                             <a href="{{ route('list-search',['direction'=>'south','location'=>'Tampa', 'waterfront' => '1', 'postalCode' => '33616']) }}" style="color:#000" class="ds" target="_blank">Waterfront Homes</a><br>
                                             <a href="{{ route('list-search',['direction'=>'south','location'=>'Tampa', 'adult_community_bool' => '1', 'postalCode' => '33616']) }}" style="color:#000" class="ds" target="_blank">55+ Homes</a><br>
                                             <a href="{{ route('list-search',['direction'=>'south','location'=>'Tampa', 'property_subtypes' => 'Townhouse', 'property_type' => 'Condo', 'postalCode' => '33616']) }}" style="color:#000" class="ds" target="_blank">Condos & Townhomes</a><br>
                                         </p>
                                    </div> 
                                 </div>
                                 <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 p-2"> 
                                     <div class="mdc-card h-100 w-100 text-center middle-xs p-3">     
                                         <img src="assets/images/props/slide-6.jpg" style="width: 100%;height: 200px;">
                                        <a href="{{ route('list-search',['direction'=>'south','location'=>'Tampa', 'postalCode' => '33609']) }}" style="color:#000" class="ds" target="_blank"><h2 class="capitalize fw-600 my-3 mp ds1" style="margin-bottom: 0px !important">(South Tampa) 33609</h2></a>
                                         <p class="text-muted fw-500">
                                             <a href="{{ route('list-search',['direction'=>'south','location'=>'Tampa', 'min_price' => '600000', 'postalCode' => '33609']) }}" style="color:#000" class="ds" target="_blank">Luxury Homes</a><br>
                                             <a href="{{ route('list-search',['direction'=>'south','location'=>'Tampa', 'waterfront' => '1', 'postalCode' => '33609']) }}" style="color:#000" class="ds" target="_blank">Waterfront Homes</a><br>
                                             <a href="{{ route('list-search',['direction'=>'south','location'=>'Tampa', 'adult_community_bool' => '1', 'postalCode' => '33609']) }}" style="color:#000" class="ds" target="_blank">55+ Homes</a><br>
                                             <a href="{{ route('list-search',['direction'=>'south','location'=>'Tampa', 'property_subtypes' => 'Townhouse', 'property_type' => 'Condo', 'postalCode' => '33609']) }}" style="color:#000" class="ds" target="_blank">Condos & Townhomes</a><br>
                                         </p>
                                    </div> 
                                 </div>
                                 <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 p-2"> 
                                     <div class="mdc-card h-100 w-100 text-center middle-xs p-3">     
                                         <img src="assets/images/props/slide-6.jpg" style="width: 100%;height: 200px;">
                                        <a href="{{ route('list-search',['direction'=>'south','location'=>'Tampa', 'postalCode' => '33629']) }}" style="color:#000" class="ds" target="_blank"><h2 class="capitalize fw-600 my-3 mp ds1" style="margin-bottom: 0px !important">(South Tampa) 33629</h2></a>
                                         <p class="text-muted fw-500">
                                             <a href="{{ route('list-search',['direction'=>'south','location'=>'Tampa', 'min_price' => '600000', 'postalCode' => '33629']) }}" style="color:#000" class="ds" target="_blank">Luxury Homes</a><br>
                                             <a href="{{ route('list-search',['direction'=>'south','location'=>'Tampa', 'waterfront' => '1', 'postalCode' => '33629']) }}" style="color:#000" class="ds" target="_blank">Waterfront Homes</a><br>
                                             <a href="{{ route('list-search',['direction'=>'south','location'=>'Tampa', 'adult_community_bool' => '1', 'postalCode' => '33629']) }}" style="color:#000" class="ds" target="_blank">55+ Homes</a><br>
                                             <a href="{{ route('list-search',['direction'=>'south','location'=>'Tampa', 'property_subtypes' => 'Townhouse', 'property_type' => 'Condo', 'postalCode' => '33629']) }}" style="color:#000" class="ds" target="_blank">Condos & Townhomes</a><br>
                                         </p>
                                    </div> 
                                 </div>
                                 <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 p-2"> 
                                     <div class="mdc-card h-100 w-100 text-center middle-xs p-3">     
                                         <img src="assets/images/props/slide-6.jpg" style="width: 100%;height: 200px;">
                                        <a href="{{ route('list-search',['location'=>'Tampa', 'postalCode' => '33606']) }}" style="color:#000" class="ds" target="_blank"><h2 class="capitalize fw-600 my-3 mp ds1" style="margin-bottom: 0px !important">(Davis Island) 33606</h2></a>
                                         <p class="text-muted fw-500">
                                             <a href="{{ route('list-search',['location'=>'Tampa', 'min_price' => '600000', 'postalCode' => '33606']) }}" style="color:#000" class="ds" target="_blank">Luxury Homes</a><br>
                                             <a href="{{ route('list-search',['location'=>'Tampa', 'waterfront' => '1', 'postalCode' => '33606']) }}" style="color:#000" class="ds" target="_blank">Waterfront Homes</a><br>
                                             <a href="{{ route('list-search',['location'=>'Tampa', 'adult_community_bool' => '1', 'postalCode' => '33606']) }}" style="color:#000" class="ds" target="_blank">55+ Homes</a><br>
                                             <a href="{{ route('list-search',['location'=>'Tampa', 'property_subtypes' => 'Townhouse', 'property_type' => 'Condo', 'postalCode' => '33606']) }}" style="color:#000" class="ds" target="_blank">Condos & Townhomes</a><br>
                                         </p>
                                    </div> 
                                 </div>
                                 <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 p-2"> 
                                     <div class="mdc-card h-100 w-100 text-center middle-xs p-3">     
                                         <img src="assets/images/props/slide-6.jpg" style="width: 100%;height: 200px;">
                                        <a href="{{ route('list-search',['location'=>'Tampa', 'postalCode' => '33626']) }}" style="color:#000" class="ds" target="_blank"><h2 class="capitalize fw-600 my-3 mp ds1" style="margin-bottom: 0px !important">(West Chase) 33626</h2></a>
                                         <p class="text-muted fw-500">
                                             <a href="{{ route('list-search',['location'=>'Tampa', 'min_price' => '600000', 'postalCode' => '33626']) }}" style="color:#000" class="ds" target="_blank">Luxury Homes</a><br>
                                             <a href="{{ route('list-search',['location'=>'Tampa', 'waterfront' => '1', 'postalCode' => '33626']) }}" style="color:#000" class="ds" target="_blank">Waterfront Homes</a><br>
                                             <a href="{{ route('list-search',['location'=>'Tampa', 'adult_community_bool' => '1', 'postalCode' => '33626']) }}" style="color:#000" class="ds" target="_blank">55+ Homes</a><br>
                                             <a href="{{ route('list-search',['location'=>'Tampa', 'property_subtypes' => 'Townhouse', 'property_type' => 'Condo', 'postalCode' => '33626']) }}" style="color:#000" class="ds" target="_blank">Condos & Townhomes</a><br>
                                         </p>
                                    </div> 
                                 </div>
                    </div>
                </div>
               
            </div>
        </section>
         <!-- START SECTION PROPERTIES LISTING -->

         <section class="single-proper blog details d-none">
            <div class="container">
               <div class="row">
                  <aside class="col-lg-4 col-md-12 car">
                     <div class="single widget">
                        <!-- end author-verified-badge -->
                        <div class="sidebar">
                           <div class="widget-boxed mt-33 mt-5">
                              <div class="widget-boxed-header">
                                 <h4>Agent Information</h4>
                              </div>
                              <div class="widget-boxed-body">
                                 <div class="sidebar-widget author-widget2">
                                    <div class="author-box clearfix">
                                       <img src="{{asset('frontend/images/testimonials/ts-1.jpg')}}" alt="author-image" class="author__img">
                                       <h4 class="author__title">Lisa Clark</h4>
                                       <p class="author__meta">Agent of Property</p>
                                    </div>
                                    <ul class="author__contact">
                                       <li><span class="la la-map-marker"><i class="fa fa-map-marker"></i></span>302 Av Park, New York</li>
                                       <li><span class="la la-phone"><i class="fa fa-phone" aria-hidden="true"></i></span><a href="#">(234) 0200 17813</a></li>
                                       <li><span class="la la-envelope-o"><i class="fa fa-envelope" aria-hidden="true"></i></span><a href="#">lisa@gmail.com</a></li>
                                    </ul>
                                    <div class="agent-contact-form-sidebar">
                                       <h4>Request Inquiry</h4>
                                       <form name="contact_form" method="post" action="https://code-theme.com/html/findhouses/functions.php">
                                          <input type="text" id="fname" name="full_name" placeholder="Full Name" required />
                                          <input type="number" id="pnumber" name="phone_number" placeholder="Phone Number" required />
                                          <input type="email" id="emailid" name="email_address" placeholder="Email Address" required />
                                          <textarea placeholder="Message" name="message" required></textarea>
                                          <input type="submit" name="sendmessage" class="multiple-send-message" value="Submit Request" />
                                       </form>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="main-search-field-2">
                              <div class="widget-boxed mt-5">
                                 <div class="widget-boxed-header">
                                    <h4>Recent Properties</h4>
                                 </div>
                                 <div class="widget-boxed-body">
                                    <div class="recent-post">
                                       <div class="recent-main">
                                          <div class="recent-img">
                                             <a href="blog-details.html"><img src="{{asset('frontend/images/feature-properties/fp-1.jpg')}}" alt=""></a>
                                          </div>
                                          <div class="info-img">
                                             <a href="blog-details.html">
                                                <h6>Family Home</h6>
                                             </a>
                                             <p>$230,000</p>
                                          </div>
                                       </div>
                                       <div class="recent-main my-4">
                                          <div class="recent-img">
                                             <a href="blog-details.html"><img src="{{asset('frontend/images/feature-properties/fp-2.jpg')}}" alt=""></a>
                                          </div>
                                          <div class="info-img">
                                             <a href="blog-details.html">
                                                <h6>Family Home</h6>
                                             </a>
                                             <p>$230,000</p>
                                          </div>
                                       </div>
                                       <div class="recent-main">
                                          <div class="recent-img">
                                             <a href="blog-details.html"><img src="{{asset('frontend/images/feature-properties/fp-3.jpg')}}" alt=""></a>
                                          </div>
                                          <div class="info-img">
                                             <a href="blog-details.html">
                                                <h6>Family Home</h6>
                                             </a>
                                             <p>$230,000</p>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="widget-boxed mt-5">
                                 <div class="widget-boxed-header mb-5">
                                    <h4>Feature Properties</h4>
                                 </div>
                                 <div class="widget-boxed-body">
                                    <div class="slick-lancers">
                                       <div class="agents-grid mr-0">
                                          <div class="listing-item compact">
                                             <a href="properties-details.html" class="listing-img-container">
                                                <div class="listing-badges">
                                                   <span class="featured">$ 230,000</span>
                                                   <span>For Sale</span>
                                                </div>
                                                <div class="listing-img-content">
                                                   <span class="listing-compact-title">House Luxury <i>New York</i></span>
                                                   <ul class="listing-hidden-content">
                                                      <li>Area <span>720 sq ft</span></li>
                                                      <li>Rooms <span>6</span></li>
                                                      <li>Beds <span>2</span></li>
                                                      <li>Baths <span>3</span></li>
                                                   </ul>
                                                </div>
                                                <img src="{{asset('frontend/images/feature-properties/fp-1.jpg')}}" alt="">
                                             </a>
                                          </div>
                                       </div>
                                       <div class="agents-grid mr-0">
                                          <div class="listing-item compact">
                                             <a href="properties-details.html" class="listing-img-container">
                                                <div class="listing-badges">
                                                   <span class="featured">$ 6,500</span>
                                                   <span class="rent">For Rent</span>
                                                </div>
                                                <div class="listing-img-content">
                                                   <span class="listing-compact-title">House Luxury <i>Los Angles</i></span>
                                                   <ul class="listing-hidden-content">
                                                      <li>Area <span>720 sq ft</span></li>
                                                      <li>Rooms <span>6</span></li>
                                                      <li>Beds <span>2</span></li>
                                                      <li>Baths <span>3</span></li>
                                                   </ul>
                                                </div>
                                                <img src="{{asset('frontend/images/feature-properties/fp-2.jpg')}}" alt="">
                                             </a>
                                          </div>
                                       </div>
                                       <div class="agents-grid mr-0">
                                          <div class="listing-item compact">
                                             <a href="properties-details.html" class="listing-img-container">
                                                <div class="listing-badges">
                                                   <span class="featured">$ 230,000</span>
                                                   <span>For Sale</span>
                                                </div>
                                                <div class="listing-img-content">
                                                   <span class="listing-compact-title">House Luxury <i>San Francisco</i></span>
                                                   <ul class="listing-hidden-content">
                                                      <li>Area <span>720 sq ft</span></li>
                                                      <li>Rooms <span>6</span></li>
                                                      <li>Beds <span>2</span></li>
                                                      <li>Baths <span>3</span></li>
                                                   </ul>
                                                </div>
                                                <img src="{{asset('frontend/images/feature-properties/fp-3.jpg')}}" alt="">
                                             </a>
                                          </div>
                                       </div>
                                       <div class="agents-grid mr-0">
                                          <div class="listing-item compact">
                                             <a href="properties-details.html" class="listing-img-container">
                                                <div class="listing-badges">
                                                   <span class="featured">$ 6,500</span>
                                                   <span class="rent">For Rent</span>
                                                </div>
                                                <div class="listing-img-content">
                                                   <span class="listing-compact-title">House Luxury <i>Miami FL</i></span>
                                                   <ul class="listing-hidden-content">
                                                      <li>Area <span>720 sq ft</span></li>
                                                      <li>Rooms <span>6</span></li>
                                                      <li>Beds <span>2</span></li>
                                                      <li>Baths <span>3</span></li>
                                                   </ul>
                                                </div>
                                                <img src="{{asset('frontend/images/feature-properties/fp-4.jpg')}}" alt="">
                                             </a>
                                          </div>
                                       </div>
                                       <div class="agents-grid mr-0">
                                          <div class="listing-item compact">
                                             <a href="properties-details.html" class="listing-img-container">
                                                <div class="listing-badges">
                                                   <span class="featured">$ 230,000</span>
                                                   <span>For Sale</span>
                                                </div>
                                                <div class="listing-img-content">
                                                   <span class="listing-compact-title">House Luxury <i>Chicago IL</i></span>
                                                   <ul class="listing-hidden-content">
                                                      <li>Area <span>720 sq ft</span></li>
                                                      <li>Rooms <span>6</span></li>
                                                      <li>Beds <span>2</span></li>
                                                      <li>Baths <span>3</span></li>
                                                   </ul>
                                                </div>
                                                <img src="{{asset('frontend/images/feature-properties/fp-5.jpg')}}" alt="">
                                             </a>
                                          </div>
                                       </div>
                                       <div class="agents-grid mr-0">
                                          <div class="listing-item compact">
                                             <a href="properties-details.html" class="listing-img-container">
                                                <div class="listing-badges">
                                                   <span class="featured">$ 6,500</span>
                                                   <span class="rent">For Rent</span>
                                                </div>
                                                <div class="listing-img-content">
                                                   <span class="listing-compact-title">House Luxury <i>Toronto CA</i></span>
                                                   <ul class="listing-hidden-content">
                                                      <li>Area <span>720 sq ft</span></li>
                                                      <li>Rooms <span>6</span></li>
                                                      <li>Beds <span>2</span></li>
                                                      <li>Baths <span>3</span></li>
                                                   </ul>
                                                </div>
                                                <img src="{{asset('frontend/images/feature-properties/fp-6.jpg')}}" alt="">
                                             </a>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <!-- Start: Specials offer -->
                              <div class="widget-boxed popular mt-5">
                                 <div class="widget-boxed-header">
                                    <h4>Specials of the day</h4>
                                 </div>
                                 <div class="widget-boxed-body">
                                    <div class="banner"><img src="{{asset('frontend/images/single-property/banner.jpg')}}" alt=""></div>
                                 </div>
                              </div>
                              <!-- End: Specials offer -->
                              <div class="widget-boxed popular mt-5">
                                 <div class="widget-boxed-header">
                                    <h4>Popular Tags</h4>
                                 </div>
                                 <div class="widget-boxed-body">
                                    <div class="recent-post">
                                       <div class="tags">
                                          <span><a href="#" class="btn btn-outline-primary">Houses</a></span>
                                          <span><a href="#" class="btn btn-outline-primary">Real Home</a></span>
                                       </div>
                                       <div class="tags">
                                          <span><a href="#" class="btn btn-outline-primary">Baths</a></span>
                                          <span><a href="#" class="btn btn-outline-primary">Beds</a></span>
                                       </div>
                                       <div class="tags">
                                          <span><a href="#" class="btn btn-outline-primary">Garages</a></span>
                                          <span><a href="#" class="btn btn-outline-primary">Family</a></span>
                                       </div>
                                       <div class="tags">
                                          <span><a href="#" class="btn btn-outline-primary">Real Estates</a></span>
                                          <span><a href="#" class="btn btn-outline-primary">Properties</a></span>
                                       </div>
                                       <div class="tags no-mb">
                                          <span><a href="#" class="btn btn-outline-primary">Location</a></span>
                                          <span><a href="#" class="btn btn-outline-primary">Price</a></span>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </aside>
                  <div class="col-lg-8 col-md-12 blog-pots">
                     <div class="row">
                        <div class="col-md-12">
                           <section class="headings-2 pt-0">
                              <div class="pro-wrapper">
                                 <div class="detail-wrapper-body">
                                    <div class="listing-title-bar">
                                       <h3>Property Listing </h3>
                                       <div class="mt-0">
                                          <a href="#listing-location" class="listing-address">
                                          
                                            There are currently 164,814 properties.
                                          </a>
                                       </div>
                                    </div>
                                 </div>
                                
                              </div>
                           </section>
                           <!-- Star Description -->
                           
                           <!-- End Description -->
                        </div>
                     </div>
                     
                  </div>
               </div>
            </div>
         </section>
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
         <script>
             var APP_URL = {!! json_encode(url('/')) !!}
               $(function() {
                $('#btn_filter').on('click', function () {
                    var location = $('#location_search').val();
                    var min_price = $('#search_min_price').val();
                    var max_price = $('#search_max_price').val();
                    var bathrooms = $('#search_bathrooms :selected').val();
                    var bedrooms = $('#search_bedrooms :selected').val();
                    var foreclosure_type = $("input[name='foreclosure_type']:checked").map(function() {
                        return this.value;
                    }).get();
                    //console.log(min_price+", "+max_price+", "+brands);
                    var url = APP_URL+"/list-search?min_price="+min_price+"&max_price="+max_price+"&location="+location+"&bathrooms="+bathrooms+"&bedrooms="+bedrooms+"&foreclosure_type="+foreclosure_type;
                    if (url) {
                        window.location = url;
                    }
                    return false;
                });
               });
         </script>
@endsection

