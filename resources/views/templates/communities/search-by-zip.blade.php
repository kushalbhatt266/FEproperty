@extends('layouts.app')
@section('title', 'Search by Property Type')
@section('page-heading','Search by Property Type')
@push('styles')

@endpush
@section('content')
    <main> 
        <div class="header-image-wrapper">
            <div class="bg" style="background-image: url('assets/images/carousel/slide-3.jpg');"></div>
            <div class="mask"></div>            
            <div class="header-image-content mh-200"> 
                <p class="desc">Search by Property Type</p> 
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
                             <h1 class="section-title">Search By Property Type</h1>  
                             <div class="services-wrapper row">
                                 <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 p-2"> 
                                     <div class="mdc-card h-100 w-100 text-center middle-xs p-3">     
                                         <img src="assets/images/props/slide-6.jpg" style="width: 100%;height: 200px;">
                                        <a href="{{ route('list-search',['location'=>'Tampa', 'postalCode' => '33647']) }}" style="color:#000" class="ds" target="_blank"><h2 class="capitalize fw-600 my-3 mp ds1" style="margin-bottom: 0px !important">(New Tampa) 33647</h2></a>
                                         <p class="text-muted fw-500">
                                            <a href="{{ route('list-search',['location'=>'Tampa', 'min_price' => '200000', 'postalCode' => '33647']) }}" style="color:#000" class="ds" target="_blank">Under $200,000</a><br>
                                             <a href="{{ route('list-search',['location'=>'Tampa', 'min_price' => '200000', 'max_price' => '300000', 'postalCode' => '33647']) }}" style="color:#000" class="ds" target="_blank">$200,000 to $300,000</a><br>
                                             <a href="{{ route('list-search',['location'=>'Tampa', 'min_price' => '300000', 'max_price' => '400000', 'postalCode' => '33647']) }}" style="color:#000" class="ds" target="_blank">$300,000 to $400,000</a><br>
                                             <a href="{{ route('list-search',['location'=>'Tampa', 'min_price' => '400000', 'max_price' => '600000', 'postalCode' => '33647']) }}" style="color:#000" class="ds" target="_blank">$400,000 to $600,000</a><br>
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
                                            <a href="{{ route('list-search',['direction'=>'south','location'=>'Tampa', 'min_price' => '200000', 'postalCode' => '33611']) }}" style="color:#000" class="ds" target="_blank">Under $200,000</a><br>
                                             <a href="{{ route('list-search',['direction'=>'south','location'=>'Tampa', 'min_price' => '200000', 'max_price' => '300000', 'postalCode' => '33611']) }}" style="color:#000" class="ds" target="_blank">$200,000 to $300,000</a><br>
                                             <a href="{{ route('list-search',['direction'=>'south','location'=>'Tampa', 'min_price' => '300000', 'max_price' => '400000', 'postalCode' => '33611']) }}" style="color:#000" class="ds" target="_blank">$300,000 to $400,000</a><br>
                                             <a href="{{ route('list-search',['direction'=>'south','location'=>'Tampa', 'min_price' => '400000', 'max_price' => '600000', 'postalCode' => '33611']) }}" style="color:#000" class="ds" target="_blank">$400,000 to $600,000</a><br>
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
                                            <a href="{{ route('list-search',['direction'=>'south','location'=>'Tampa', 'min_price' => '200000', 'postalCode' => '33616']) }}" style="color:#000" class="ds" target="_blank">Under $200,000</a><br>
                                             <a href="{{ route('list-search',['direction'=>'south','location'=>'Tampa', 'min_price' => '200000', 'max_price' => '300000', 'postalCode' => '33616']) }}" style="color:#000" class="ds" target="_blank">$200,000 to $300,000</a><br>
                                             <a href="{{ route('list-search',['direction'=>'south','location'=>'Tampa', 'min_price' => '300000', 'max_price' => '400000', 'postalCode' => '33616']) }}" style="color:#000" class="ds" target="_blank">$300,000 to $400,000</a><br>
                                             <a href="{{ route('list-search',['direction'=>'south','location'=>'Tampa', 'min_price' => '400000', 'max_price' => '600000', 'postalCode' => '33616']) }}" style="color:#000" class="ds" target="_blank">$400,000 to $600,000</a><br>
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
                                            <a href="{{ route('list-search',['direction'=>'south','location'=>'Tampa', 'min_price' => '200000', 'postalCode' => '33609']) }}" style="color:#000" class="ds" target="_blank">Under $200,000</a><br>
                                             <a href="{{ route('list-search',['direction'=>'south','location'=>'Tampa', 'min_price' => '200000', 'max_price' => '300000', 'postalCode' => '33609']) }}" style="color:#000" class="ds" target="_blank">$200,000 to $300,000</a><br>
                                             <a href="{{ route('list-search',['direction'=>'south','location'=>'Tampa', 'min_price' => '300000', 'max_price' => '400000', 'postalCode' => '33609']) }}" style="color:#000" class="ds" target="_blank">$300,000 to $400,000</a><br>
                                             <a href="{{ route('list-search',['direction'=>'south','location'=>'Tampa', 'min_price' => '400000', 'max_price' => '600000', 'postalCode' => '33609']) }}" style="color:#000" class="ds" target="_blank">$400,000 to $600,000</a><br>
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
                                            <a href="{{ route('list-search',['direction'=>'south','location'=>'Tampa', 'min_price' => '200000', 'postalCode' => '33629']) }}" style="color:#000" class="ds" target="_blank">Under $200,000</a><br>
                                             <a href="{{ route('list-search',['direction'=>'south','location'=>'Tampa', 'min_price' => '200000', 'max_price' => '300000', 'postalCode' => '33629']) }}" style="color:#000" class="ds" target="_blank">$200,000 to $300,000</a><br>
                                             <a href="{{ route('list-search',['direction'=>'south','location'=>'Tampa', 'min_price' => '300000', 'max_price' => '400000', 'postalCode' => '33629']) }}" style="color:#000" class="ds" target="_blank">$300,000 to $400,000</a><br>
                                             <a href="{{ route('list-search',['direction'=>'south','location'=>'Tampa', 'min_price' => '400000', 'max_price' => '600000', 'postalCode' => '33629']) }}" style="color:#000" class="ds" target="_blank">$400,000 to $600,000</a><br>
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
                                            <a href="{{ route('list-search',['location'=>'Tampa', 'min_price' => '200000', 'postalCode' => '33606']) }}" style="color:#000" class="ds" target="_blank">Under $200,000</a><br>
                                             <a href="{{ route('list-search',['location'=>'Tampa', 'min_price' => '200000', 'max_price' => '300000', 'postalCode' => '33606']) }}" style="color:#000" class="ds" target="_blank">$200,000 to $300,000</a><br>
                                             <a href="{{ route('list-search',['location'=>'Tampa', 'min_price' => '300000', 'max_price' => '400000', 'postalCode' => '33606']) }}" style="color:#000" class="ds" target="_blank">$300,000 to $400,000</a><br>
                                             <a href="{{ route('list-search',['location'=>'Tampa', 'min_price' => '400000', 'max_price' => '600000', 'postalCode' => '33606']) }}" style="color:#000" class="ds" target="_blank">$400,000 to $600,000</a><br>
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
                                            <a href="{{ route('list-search',['location'=>'Tampa', 'min_price' => '200000', 'postalCode' => '33606']) }}" style="color:#000" class="ds" target="_blank">Under $200,000</a><br>
                                             <a href="{{ route('list-search',['location'=>'Tampa', 'min_price' => '200000', 'max_price' => '300000', 'postalCode' => '33606']) }}" style="color:#000" class="ds" target="_blank">$200,000 to $300,000</a><br>
                                             <a href="{{ route('list-search',['location'=>'Tampa', 'min_price' => '300000', 'max_price' => '400000', 'postalCode' => '33606']) }}" style="color:#000" class="ds" target="_blank">$300,000 to $400,000</a><br>
                                             <a href="{{ route('list-search',['location'=>'Tampa', 'min_price' => '400000', 'max_price' => '600000', 'postalCode' => '33606']) }}" style="color:#000" class="ds" target="_blank">$400,000 to $600,000</a><br>
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
                    </div>
                </div>
            </div>
        </div>  
        @include('templates.components.call_us')
    </main> 
@endsection
@push('scripts')
@endpush