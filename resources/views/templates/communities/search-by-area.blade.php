@extends('layouts.app')
@section('title', 'Search By Area')
@section('page-heading','Search By Area')
@push('styles')

@endpush
@section('content')
    <main> 
        <div class="header-image-wrapper">
            <div class="bg" style="background-image: url('assets/images/carousel/slide-3.jpg');"></div>
            <div class="mask"></div>            
            <div class="header-image-content mh-200"> 
                <p class="desc">Search By Area</p> 
            </div>
        </div>  
        <div class="px-3">  
            <div class="theme-container">  
                <div class="page-drawer-container mt-3">
                    @include('templates.components.search')
                    <div class="mdc-drawer-scrim page-sidenav-scrim"></div>
                     <div class="page-sidenav-content">
                        <div class="properties-wrapper row mt-0" style="display: block;">
                         <div class="theme-container">
                             <h1 class="section-title">Search By Area</h1>  
                             <div class="services-wrapper row">
                                 <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4 p-2"> 
                                     <div class="mdc-card h-100 w-100 text-center middle-xs p-3">
                                         <img src="{{ asset('assets/images/props/slide-3.jpg') }}" style="width: 100%;height: 200px;">
                                         <a href="{{ route('list-search',['location'=>'ST PETERSBURG']) }}" style="color:#000" class="ds" target="_blank"><h2 class="capitalize fw-600 my-3 mp ds1" style="margin-bottom: 0px !important">ST PETERSBURG</h2></a>
                                         <p class="text-muted fw-500">
                                             <a href="{{ route('list-search',['location'=>'ST PETERSBURG', 'min_price' => '200000']) }}" style="color:#000" class="ds" target="_blank">Under $200,000</a><br>
                                             <a href="{{ route('list-search',['location'=>'ST PETERSBURG', 'min_price' => '200000', 'max_price' => '300000']) }}" style="color:#000" class="ds" target="_blank">$200,000 to $300,000</a><br>
                                             <a href="{{ route('list-search',['location'=>'ST PETERSBURG', 'min_price' => '300000', 'max_price' => '400000']) }}" style="color:#000" class="ds" target="_blank">$300,000 to $400,000</a><br>
                                             <a href="{{ route('list-search',['location'=>'ST PETERSBURG', 'min_price' => '400000', 'max_price' => '600000']) }}" style="color:#000" class="ds" target="_blank">$400,000 to $600,000</a><br>
                                             <!-- <a href="#" style="color:#000" class="ds" target="_blank">Luxury Homes</a><br>
                                             <a href="#" style="color:#000" class="ds" target="_blank">Open Houses</a> -->
                                         </p>           
                                     </div> 
                                 </div>
                                 <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4 p-2"> 
                                     <div class="mdc-card h-100 w-100 text-center middle-xs p-3">     
                                         <img src="assets/images/props/slide-6.jpg" style="width: 100%;height: 200px;">
                                        <a href="{{ route('list-search',['location'=>'Palm Harbor']) }}" style="color:#000" class="ds" target="_blank"><h2 class="capitalize fw-600 my-3 mp ds1" style="margin-bottom: 0px !important">Palm Harbor</h2></a>
                                         <p class="text-muted fw-500">
                                             <a href="{{ route('list-search',['location'=>'Palm Harbor', 'min_price' => '200000']) }}" style="color:#000" class="ds" target="_blank">Under $200,000</a><br>
                                             <a href="{{ route('list-search',['location'=>'Palm Harbor', 'min_price' => '200000', 'max_price' => '300000']) }}" style="color:#000" class="ds" target="_blank">$200,000 to $300,000</a><br>
                                             <a href="{{ route('list-search',['location'=>'Palm Harbor', 'min_price' => '300000', 'max_price' => '400000']) }}" style="color:#000" class="ds" target="_blank">$300,000 to $400,000</a><br>
                                             <a href="{{ route('list-search',['location'=>'Palm Harbor', 'min_price' => '400000', 'max_price' => '600000']) }}" style="color:#000" class="ds" target="_blank">$400,000 to $600,000</a><br>
                                             <!-- <a href="#" style="color:#000" class="ds" target="_blank">Luxury Homes</a><br>
                                             <a href="#" style="color:#000" class="ds" target="_blank">Open Houses</a></p> -->
                                    </div> 
                                 </div>
                                 <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4 p-2"> 
                                     <div class="mdc-card h-100 w-100 text-center middle-xs p-3">     
                                         <img src="{{asset('assets/images/props/slide-4.jpg') }}" style="width: 100%;height: 200px;">
                                         <a href="{{ route('list-search',['direction'=>'south','location'=>'TAMPA']) }}" style="color:#000" class="ds" target="_blank"><h2 class="capitalize fw-600 my-3 mp ds1" style="margin-bottom: 0px !important">SOUTH TAMPA</h2></a>
                                         <p class="text-muted fw-500">
                                             <a href="{{ route('list-search',['direction'=>'south','location'=>'TAMPA', 'min_price' => '200000']) }}" style="color:#000" class="ds" target="_blank">Under $200,000</a><br>
                                             <a href="{{ route('list-search',['direction'=>'south','location'=>'TAMPA', 'min_price' => '200000', 'max_price' => '300000']) }}" style="color:#000" class="ds" target="_blank">$200,000 to $300,000</a><br>
                                             <a href="{{ route('list-search',['direction'=>'south','location'=>'TAMPA', 'min_price' => '300000', 'max_price' => '400000']) }}" style="color:#000" class="ds" target="_blank">$300,000 to $400,000</a><br>
                                             <a href="{{ route('list-search',['direction'=>'south','location'=>'TAMPA', 'min_price' => '400000', 'max_price' => '600000']) }}" style="color:#000" class="ds" target="_blank">$400,000 to $600,000</a><br>
                                             <!-- <a href="#" style="color:#000" class="ds" target="_blank">Luxury Homes</a><br>
                                             <a href="#" style="color:#000" class="ds" target="_blank">Open Houses</a></p> -->             
                                     </div> 
                                 </div> 
                                 <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4 p-2">  
                                     <div class="mdc-card h-100 w-100 text-center middle-xs p-3">  
                                         <img src="{{ asset('assets/images/props/slide-5.jpg') }}" style="width: 100%;height: 200px;">
                                         <a href="{{ route('list-search',['location'=>'TAMPA']) }}" style="color:#000" class="ds" target="_blank"><h2 class="capitalize fw-600 my-3 mp ds1" style="margin-bottom: 0px !important">TAMPA</h2></a>
                                         <p class="text-muted fw-500">
                                             <a href="{{ route('list-search',['location'=>'TAMPA', 'min_price' => '200000']) }}" style="color:#000" class="ds" target="_blank">Under $200,000</a><br>
                                             <a href="{{ route('list-search',['location'=>'TAMPA', 'min_price' => '200000', 'max_price' => '300000']) }}" style="color:#000" class="ds" target="_blank">$200,000 to $300,000</a><br>
                                             <a href="{{ route('list-search',['location'=>'TAMPA', 'min_price' => '300000', 'max_price' => '400000']) }}" style="color:#000" class="ds" target="_blank">$300,000 to $400,000</a><br>
                                             <a href="{{ route('list-search',['location'=>'TAMPA', 'min_price' => '400000', 'max_price' => '600000']) }}" style="color:#000" class="ds" target="_blank">$400,000 to $600,000</a><br>
                                             <!-- <a href="#" style="color:#000" class="ds" target="_blank">Luxury Homes</a><br>
                                             <a href="#" style="color:#000" class="ds" target="_blank">Open Houses</a></p> -->             
                                     </div> 
                                 </div>  
                                 <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4 p-2"> 
                                     <div class="mdc-card h-100 w-100 text-center middle-xs p-3">     
                                         <img src="assets/images/props/slide-6.jpg" style="width: 100%;height: 200px;">
                                        <a href="{{ route('list-search',['location'=>'St Pete Beach']) }}" style="color:#000" class="ds" target="_blank"><h2 class="capitalize fw-600 my-3 mp ds1" style="margin-bottom: 0px !important">St Pete Beach</h2></a>
                                         <p class="text-muted fw-500">
                                             <a href="{{ route('list-search',['location'=>'St Pete Beach', 'min_price' => '200000']) }}" style="color:#000" class="ds" target="_blank">Under $200,000</a><br>
                                             <a href="{{ route('list-search',['location'=>'St Pete Beach', 'min_price' => '200000', 'max_price' => '300000']) }}" style="color:#000" class="ds" target="_blank">$200,000 to $300,000</a><br>
                                             <a href="{{ route('list-search',['location'=>'St Pete Beach', 'min_price' => '300000', 'max_price' => '400000']) }}" style="color:#000" class="ds" target="_blank">$300,000 to $400,000</a><br>
                                             <a href="{{ route('list-search',['location'=>'St Pete Beach', 'min_price' => '400000', 'max_price' => '600000']) }}" style="color:#000" class="ds" target="_blank">$400,000 to $600,000</a><br>
                                             <!-- <a href="#" style="color:#000" class="ds" target="_blank">Luxury Homes</a><br>
                                             <a href="#" style="color:#000" class="ds" target="_blank">Open Houses</a></p> -->
                                    </div> 
                                 </div>
                                 
                                 <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4 p-2"> 
                                     <div class="mdc-card h-100 w-100 text-center middle-xs p-3">     
                                         <img src="assets/images/props/slide-6.jpg" style="width: 100%;height: 200px;">
                                        <a href="{{ route('list-search',['location'=>'Treasure Island']) }}" style="color:#000" class="ds" target="_blank"><h2 class="capitalize fw-600 my-3 mp ds1" style="margin-bottom: 0px !important">Treasure Island</h2></a>
                                         <p class="text-muted fw-500">
                                             <a href="{{ route('list-search',['location'=>'Treasure Island', 'min_price' => '200000']) }}" style="color:#000" class="ds" target="_blank">Under $200,000</a><br>
                                             <a href="{{ route('list-search',['location'=>'Treasure Island', 'min_price' => '200000', 'max_price' => '300000']) }}" style="color:#000" class="ds" target="_blank">$200,000 to $300,000</a><br>
                                             <a href="{{ route('list-search',['location'=>'Treasure Island', 'min_price' => '300000', 'max_price' => '400000']) }}" style="color:#000" class="ds" target="_blank">$300,000 to $400,000</a><br>
                                             <a href="{{ route('list-search',['location'=>'Treasure Island', 'min_price' => '400000', 'max_price' => '600000']) }}" style="color:#000" class="ds" target="_blank">$400,000 to $600,000</a><br>
                                             <!-- <a href="#" style="color:#000" class="ds" target="_blank">Luxury Homes</a><br>
                                             <a href="#" style="color:#000" class="ds" target="_blank">Open Houses</a></p> -->
                                    </div> 
                                 </div>
                                 <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4 p-2"> 
                                     <div class="mdc-card h-100 w-100 text-center middle-xs p-3">     
                                         <img src="assets/images/props/slide-6.jpg" style="width: 100%;height: 200px;">
                                        <a href="{{ route('list-search',['location'=>'Clearwater Beach']) }}" style="color:#000" class="ds" target="_blank"><h2 class="capitalize fw-600 my-3 mp ds1" style="margin-bottom: 0px !important">Clearwater Beach</h2></a>
                                         <p class="text-muted fw-500">
                                             <a href="{{ route('list-search',['location'=>'Clearwater Beach', 'min_price' => '200000']) }}" style="color:#000" class="ds" target="_blank">Under $200,000</a><br>
                                             <a href="{{ route('list-search',['location'=>'Clearwater Beach', 'min_price' => '200000', 'max_price' => '300000']) }}" style="color:#000" class="ds" target="_blank">$200,000 to $300,000</a><br>
                                             <a href="{{ route('list-search',['location'=>'Clearwater Beach', 'min_price' => '300000', 'max_price' => '400000']) }}" style="color:#000" class="ds" target="_blank">$300,000 to $400,000</a><br>
                                             <a href="{{ route('list-search',['location'=>'Clearwater Beach', 'min_price' => '400000', 'max_price' => '600000']) }}" style="color:#000" class="ds" target="_blank">$400,000 to $600,000</a><br>
                                             <!-- <a href="#" style="color:#000" class="ds" target="_blank">Luxury Homes</a><br>
                                             <a href="#" style="color:#000" class="ds" target="_blank">Open Houses</a></p> -->
                                    </div> 
                                 </div>
                                 <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4 p-2"> 
                                     <div class="mdc-card h-100 w-100 text-center middle-xs p-3">     
                                         <img src="assets/images/props/slide-6.jpg" style="width: 100%;height: 200px;">
                                        <a href="{{ route('list-search',['location'=>'Riverview']) }}" style="color:#000" class="ds" target="_blank"><h2 class="capitalize fw-600 my-3 mp ds1" style="margin-bottom: 0px !important">Riverview</h2></a>
                                         <p class="text-muted fw-500">
                                             <a href="{{ route('list-search',['location'=>'Riverview', 'min_price' => '200000']) }}" style="color:#000" class="ds" target="_blank">Under $200,000</a><br>
                                             <a href="{{ route('list-search',['location'=>'Riverview', 'min_price' => '200000', 'max_price' => '300000']) }}" style="color:#000" class="ds" target="_blank">$200,000 to $300,000</a><br>
                                             <a href="{{ route('list-search',['location'=>'Riverview', 'min_price' => '300000', 'max_price' => '400000']) }}" style="color:#000" class="ds" target="_blank">$300,000 to $400,000</a><br>
                                             <a href="{{ route('list-search',['location'=>'Riverview', 'min_price' => '400000', 'max_price' => '600000']) }}" style="color:#000" class="ds" target="_blank">$400,000 to $600,000</a><br>
                                             <!-- <a href="#" style="color:#000" class="ds" target="_blank">Luxury Homes</a><br>
                                             <a href="#" style="color:#000" class="ds" target="_blank">Open Houses</a></p> -->
                                    </div> 
                                 </div>
                                 <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4 p-2"> 
                                     <div class="mdc-card h-100 w-100 text-center middle-xs p-3">     
                                         <img src="assets/images/props/slide-6.jpg" style="width: 100%;height: 200px;">
                                        <a href="{{ route('list-search',['location'=>'Brandon']) }}" style="color:#000" class="ds" target="_blank"><h2 class="capitalize fw-600 my-3 mp ds1" style="margin-bottom: 0px !important">Brandon</h2></a>
                                         <p class="text-muted fw-500">
                                             <a href="{{ route('list-search',['location'=>'Brandon', 'min_price' => '200000']) }}" style="color:#000" class="ds" target="_blank">Under $200,000</a><br>
                                             <a href="{{ route('list-search',['location'=>'Brandon', 'min_price' => '200000', 'max_price' => '300000']) }}" style="color:#000" class="ds" target="_blank">$200,000 to $300,000</a><br>
                                             <a href="{{ route('list-search',['location'=>'Brandon', 'min_price' => '300000', 'max_price' => '400000']) }}" style="color:#000" class="ds" target="_blank">$300,000 to $400,000</a><br>
                                             <a href="{{ route('list-search',['location'=>'Brandon', 'min_price' => '400000', 'max_price' => '600000']) }}" style="color:#000" class="ds" target="_blank">$400,000 to $600,000</a><br>
                                             <!-- <a href="#" style="color:#000" class="ds" target="_blank">Luxury Homes</a><br>
                                             <a href="#" style="color:#000" class="ds" target="_blank">Open Houses</a></p> -->
                                    </div> 
                                 </div>
                                 <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4 p-2"> 
                                     <div class="mdc-card h-100 w-100 text-center middle-xs p-3">     
                                         <img src="assets/images/props/slide-6.jpg" style="width: 100%;height: 200px;">
                                        <a href="{{ route('list-search',['location'=>'Dunedin']) }}" style="color:#000" class="ds" target="_blank"><h2 class="capitalize fw-600 my-3 mp ds1" style="margin-bottom: 0px !important">Dunedin</h2></a>
                                         <p class="text-muted fw-500">
                                             <a href="{{ route('list-search',['location'=>'Dunedin', 'min_price' => '200000']) }}" style="color:#000" class="ds" target="_blank">Under $200,000</a><br>
                                             <a href="{{ route('list-search',['location'=>'Dunedin', 'min_price' => '200000', 'max_price' => '300000']) }}" style="color:#000" class="ds" target="_blank">$200,000 to $300,000</a><br>
                                             <a href="{{ route('list-search',['location'=>'Dunedin', 'min_price' => '300000', 'max_price' => '400000']) }}" style="color:#000" class="ds" target="_blank">$300,000 to $400,000</a><br>
                                             <a href="{{ route('list-search',['location'=>'Dunedin', 'min_price' => '400000', 'max_price' => '600000']) }}" style="color:#000" class="ds" target="_blank">$400,000 to $600,000</a><br>
                                             <!-- <a href="#" style="color:#000" class="ds" target="_blank">Luxury Homes</a><br>
                                             <a href="#" style="color:#000" class="ds" target="_blank">Open Houses</a></p> -->
                                    </div> 
                                 </div>
                                 <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4 p-2"> 
                                     <div class="mdc-card h-100 w-100 text-center middle-xs p-3">     
                                         <img src="assets/images/props/slide-6.jpg" style="width: 100%;height: 200px;">
                                        <a href="{{ route('list-search',['location'=>'Tampa', 'postalCode' => '33647']) }}" style="color:#000" class="ds" target="_blank"><h2 class="capitalize fw-600 my-3 mp ds1" style="margin-bottom: 0px !important">(New Tampa) 33647</h2></a>
                                         <p class="text-muted fw-500">
                                             <a href="{{ route('list-search',['location'=>'Tampa', 'min_price' => '200000', 'postalCode' => '33647']) }}" style="color:#000" class="ds" target="_blank">Under $200,000</a><br>
                                             <a href="{{ route('list-search',['location'=>'Tampa', 'min_price' => '200000', 'max_price' => '300000', 'postalCode' => '33647']) }}" style="color:#000" class="ds" target="_blank">$200,000 to $300,000</a><br>
                                             <a href="{{ route('list-search',['location'=>'Tampa', 'min_price' => '300000', 'max_price' => '400000', 'postalCode' => '33647']) }}" style="color:#000" class="ds" target="_blank">$300,000 to $400,000</a><br>
                                             <a href="{{ route('list-search',['location'=>'Tampa', 'min_price' => '400000', 'max_price' => '600000', 'postalCode' => '33647']) }}" style="color:#000" class="ds" target="_blank">$400,000 to $600,000</a><br>
                                             <!-- <a href="#" style="color:#000" class="ds" target="_blank">Luxury Homes</a><br>
                                             <a href="#" style="color:#000" class="ds" target="_blank">Open Houses</a></p> -->
                                    </div> 
                                 </div>
                                 <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4 p-2"> 
                                     <div class="mdc-card h-100 w-100 text-center middle-xs p-3">     
                                         <img src="assets/images/props/slide-6.jpg" style="width: 100%;height: 200px;">
                                        <a href="{{ route('list-search',['direction'=>'south','location'=>'Tampa', 'postalCode' => '33611']) }}" style="color:#000" class="ds" target="_blank"><h2 class="capitalize fw-600 my-3 mp ds1" style="margin-bottom: 0px !important">(South Tampa) 33611</h2></a>
                                         <p class="text-muted fw-500">
                                             <a href="{{ route('list-search',['direction'=>'south','location'=>'Tampa', 'min_price' => '200000', 'postalCode' => '33611']) }}" style="color:#000" class="ds" target="_blank">Under $200,000</a><br>
                                             <a href="{{ route('list-search',['direction'=>'south','location'=>'Tampa', 'min_price' => '200000', 'max_price' => '300000', 'postalCode' => '33611']) }}" style="color:#000" class="ds" target="_blank">$200,000 to $300,000</a><br>
                                             <a href="{{ route('list-search',['direction'=>'south','location'=>'Tampa', 'min_price' => '300000', 'max_price' => '400000', 'postalCode' => '33611']) }}" style="color:#000" class="ds" target="_blank">$300,000 to $400,000</a><br>
                                             <a href="{{ route('list-search',['direction'=>'south','location'=>'Tampa', 'min_price' => '400000', 'max_price' => '600000', 'postalCode' => '33611']) }}" style="color:#000" class="ds" target="_blank">$400,000 to $600,000</a><br>
                                             <!-- <a href="#" style="color:#000" class="ds" target="_blank">Luxury Homes</a><br>
                                             <a href="#" style="color:#000" class="ds" target="_blank">Open Houses</a></p> -->
                                    </div> 
                                 </div>
                                 <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4 p-2"> 
                                     <div class="mdc-card h-100 w-100 text-center middle-xs p-3">     
                                         <img src="assets/images/props/slide-6.jpg" style="width: 100%;height: 200px;">
                                        <a href="{{ route('list-search',['direction'=>'south','location'=>'Tampa', 'postalCode' => '33616']) }}" style="color:#000" class="ds" target="_blank"><h2 class="capitalize fw-600 my-3 mp ds1" style="margin-bottom: 0px !important">(South Tampa) 33616</h2></a>
                                         <p class="text-muted fw-500">
                                             <a href="{{ route('list-search',['direction'=>'south','location'=>'Tampa', 'min_price' => '200000', 'postalCode' => '33616']) }}" style="color:#000" class="ds" target="_blank">Under $200,000</a><br>
                                             <a href="{{ route('list-search',['direction'=>'south','location'=>'Tampa', 'min_price' => '200000', 'max_price' => '300000', 'postalCode' => '33616']) }}" style="color:#000" class="ds" target="_blank">$200,000 to $300,000</a><br>
                                             <a href="{{ route('list-search',['direction'=>'south','location'=>'Tampa', 'min_price' => '300000', 'max_price' => '400000', 'postalCode' => '33616']) }}" style="color:#000" class="ds" target="_blank">$300,000 to $400,000</a><br>
                                             <a href="{{ route('list-search',['direction'=>'south','location'=>'Tampa', 'min_price' => '400000', 'max_price' => '600000', 'postalCode' => '33616']) }}" style="color:#000" class="ds" target="_blank">$400,000 to $600,000</a><br>
                                             <!-- <a href="#" style="color:#000" class="ds" target="_blank">Luxury Homes</a><br>
                                             <a href="#" style="color:#000" class="ds" target="_blank">Open Houses</a></p> -->
                                    </div> 
                                 </div>
                                 <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4 p-2"> 
                                     <div class="mdc-card h-100 w-100 text-center middle-xs p-3">     
                                         <img src="assets/images/props/slide-6.jpg" style="width: 100%;height: 200px;">
                                        <a href="{{ route('list-search',['direction'=>'south','location'=>'Tampa', 'postalCode' => '33609']) }}" style="color:#000" class="ds" target="_blank"><h2 class="capitalize fw-600 my-3 mp ds1" style="margin-bottom: 0px !important">(South Tampa) 33609</h2></a>
                                         <p class="text-muted fw-500">
                                             <a href="{{ route('list-search',['direction'=>'south','location'=>'Tampa', 'min_price' => '200000', 'postalCode' => '33609']) }}" style="color:#000" class="ds" target="_blank">Under $200,000</a><br>
                                             <a href="{{ route('list-search',['direction'=>'south','location'=>'Tampa', 'min_price' => '200000', 'max_price' => '300000', 'postalCode' => '33609']) }}" style="color:#000" class="ds" target="_blank">$200,000 to $300,000</a><br>
                                             <a href="{{ route('list-search',['direction'=>'south','location'=>'Tampa', 'min_price' => '300000', 'max_price' => '400000', 'postalCode' => '33609']) }}" style="color:#000" class="ds" target="_blank">$300,000 to $400,000</a><br>
                                             <a href="{{ route('list-search',['direction'=>'south','location'=>'Tampa', 'min_price' => '400000', 'max_price' => '600000', 'postalCode' => '33609']) }}" style="color:#000" class="ds" target="_blank">$400,000 to $600,000</a><br>
                                             <!-- <a href="#" style="color:#000" class="ds" target="_blank">Luxury Homes</a><br>
                                             <a href="#" style="color:#000" class="ds" target="_blank">Open Houses</a></p> -->
                                    </div> 
                                 </div>
                                 <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4 p-2"> 
                                     <div class="mdc-card h-100 w-100 text-center middle-xs p-3">     
                                         <img src="assets/images/props/slide-6.jpg" style="width: 100%;height: 200px;">
                                        <a href="{{ route('list-search',['direction'=>'south','location'=>'Tampa', 'min_price' => '200000', 'postalCode' => '33629']) }}" style="color:#000" class="ds" target="_blank"><h2 class="capitalize fw-600 my-3 mp ds1" style="margin-bottom: 0px !important">(South Tampa) 33629</h2></a>
                                         <p class="text-muted fw-500">
                                             <a href="{{ route('list-search',['direction'=>'south','location'=>'Tampa', 'min_price' => '200000', 'postalCode' => '33629']) }}" style="color:#000" class="ds" target="_blank">Under $200,000</a><br>
                                             <a href="{{ route('list-search',['direction'=>'south','location'=>'Tampa', 'min_price' => '200000', 'max_price' => '300000', 'postalCode' => '33629']) }}" style="color:#000" class="ds" target="_blank">$200,000 to $300,000</a><br>
                                             <a href="{{ route('list-search',['direction'=>'south','location'=>'Tampa', 'min_price' => '300000', 'max_price' => '400000', 'postalCode' => '33629']) }}" style="color:#000" class="ds" target="_blank">$300,000 to $400,000</a><br>
                                             <a href="{{ route('list-search',['direction'=>'south','location'=>'Tampa', 'min_price' => '400000', 'max_price' => '600000', 'postalCode' => '33629']) }}" style="color:#000" class="ds" target="_blank">$400,000 to $600,000</a><br>
                                             <!-- <a href="#" style="color:#000" class="ds" target="_blank">Luxury Homes</a><br>
                                             <a href="#" style="color:#000" class="ds" target="_blank">Open Houses</a></p> -->
                                    </div> 
                                 </div>
                                 <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4 p-2"> 
                                     <div class="mdc-card h-100 w-100 text-center middle-xs p-3">     
                                         <img src="assets/images/props/slide-6.jpg" style="width: 100%;height: 200px;">
                                        <a href="{{ route('list-search',['location'=>'Tampa', 'postalCode' => '33606']) }}" style="color:#000" class="ds" target="_blank"><h2 class="capitalize fw-600 my-3 mp ds1" style="margin-bottom: 0px !important">(Davis Island) 33606</h2></a>
                                         <p class="text-muted fw-500">
                                             <a href="{{ route('list-search',['location'=>'Tampa', 'min_price' => '200000', 'postalCode' => '33606']) }}" style="color:#000" class="ds" target="_blank">Under $200,000</a><br>
                                             <a href="{{ route('list-search',['location'=>'Tampa', 'min_price' => '200000', 'max_price' => '300000', 'postalCode' => '33606']) }}" style="color:#000" class="ds" target="_blank">$200,000 to $300,000</a><br>
                                             <a href="{{ route('list-search',['location'=>'Tampa', 'min_price' => '300000', 'max_price' => '400000', 'postalCode' => '33606']) }}" style="color:#000" class="ds" target="_blank">$300,000 to $400,000</a><br>
                                             <a href="{{ route('list-search',['location'=>'Tampa', 'min_price' => '400000', 'max_price' => '600000', 'postalCode' => '33606']) }}" style="color:#000" class="ds" target="_blank">$400,000 to $600,000</a><br>
                                             <!-- <a href="#" style="color:#000" class="ds" target="_blank">Luxury Homes</a><br>
                                             <a href="#" style="color:#000" class="ds" target="_blank">Open Houses</a></p> -->
                                    </div> 
                                 </div>
                                 <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4 p-2"> 
                                     <div class="mdc-card h-100 w-100 text-center middle-xs p-3">     
                                         <img src="assets/images/props/slide-6.jpg" style="width: 100%;height: 200px;">
                                        <a href="{{ route('list-search',['location'=>'Tampa', 'postalCode' => '33626']) }}" style="color:#000" class="ds" target="_blank"><h2 class="capitalize fw-600 my-3 mp ds1" style="margin-bottom: 0px !important">(West Chase) 33626</h2></a>
                                         <p class="text-muted fw-500">
                                             <a href="{{ route('list-search',['location'=>'Tampa', 'min_price' => '200000', 'postalCode' => '33626']) }}" style="color:#000" class="ds" target="_blank">Under $200,000</a><br>
                                             <a href="{{ route('list-search',['location'=>'Tampa', 'min_price' => '200000', 'max_price' => '300000', 'postalCode' => '33626']) }}" style="color:#000" class="ds" target="_blank">$200,000 to $300,000</a><br>
                                             <a href="{{ route('list-search',['location'=>'Tampa', 'min_price' => '300000', 'max_price' => '400000', 'postalCode' => '33626']) }}" style="color:#000" class="ds" target="_blank">$300,000 to $400,000</a><br>
                                             <a href="{{ route('list-search',['location'=>'Tampa', 'min_price' => '400000', 'max_price' => '600000', 'postalCode' => '33626']) }}" style="color:#000" class="ds" target="_blank">$400,000 to $600,000</a><br>
                                             <!-- <a href="#" style="color:#000" class="ds" target="_blank">Luxury Homes</a><br>
                                             <a href="#" style="color:#000" class="ds" target="_blank">Open Houses</a></p> -->
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
@endpush