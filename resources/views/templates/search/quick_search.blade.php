@extends('layouts.app')
@section('title', 'Quick Search')
@section('page-heading','Quick Search')
@push('styles')

@endpush
@section('content')
<main> 
    <div class="header-image-wrapper">
        <div class="bg" style="background-image: url('assets/images/carousel/slide-3.jpg');"></div>
        <div class="mask"></div>            
        <div class="header-image-content mh-200"> 
            <p class="desc">Quick Search</p> 
        </div>
    </div>  
    <div class="px-3">  
        <div class="theme-container">  
            <div class="page-drawer-container mt-3">
                @include('templates.components.search')
                <div class="mdc-drawer-scrim page-sidenav-scrim"></div>
                 <div class="page-sidenav-content">
                     <div class="properties-wrapper row mt-0" style="display: block;">
                        <!-- <form action="javascript:void(0);" id="filters" class="search-wrapper"> -->
                           <div class="section mt-3" style="padding-top: 0px;">
                              <h1 class="section-title" style="text-align: center;">Quick Search</h1>
                              <div class="row">
                                 <div class="col-md-12 col-xs-12">
                                    <div class="card_go">  
                                        <form action="javascript:void(0);" id="filters" class="search-wrapper m-0 o-hidden"> 
                                            <div class="column p-2">  
                                                <div class="row">
                                                    <div class="col-xs-12 p-2">
                                                        <div class="mdc-text-field mdc-text-field--outlined">
                                                            <input class="mdc-text-field__input" name="location" id="location_search" value="{{app('request')->input('location')}}" placeholder="Type address, City or Zipcode">
                                                            <div class="mdc-notched-outline">
                                                            <div class="mdc-notched-outline__leading"></div>
                                                            <div class="mdc-notched-outline__notch">
                                                                <label class="mdc-floating-label">Location</label>
                                                            </div>
                                                            <div class="mdc-notched-outline__trailing"></div>
                                                            </div>
                                                        </div>
                                                    </div>   
                                                </div>
                                            
                                                <div class="row">
                                                    <div class="col-xs-6 p-2">
                                                        <div class="mdc-text-field mdc-text-field--outlined">
                                                            <input class="mdc-text-field__input" name="min_price" id="search_min_price" value="{{app('request')->input('min_price')}}">
                                                            <div class="mdc-notched-outline">
                                                            <div class="mdc-notched-outline__leading"></div>
                                                            <div class="mdc-notched-outline__notch">
                                                                <label class="mdc-floating-label">Price From</label>
                                                            </div>
                                                            <div class="mdc-notched-outline__trailing"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-6 p-2 to">
                                                        <div class="mdc-text-field mdc-text-field--outlined">
                                                            <input class="mdc-text-field__input" name="max_price" id="search_max_price" value="{{app('request')->input('max_price')}}">
                                                            <div class="mdc-notched-outline">
                                                            <div class="mdc-notched-outline__leading"></div>
                                                            <div class="mdc-notched-outline__notch">
                                                                <label class="mdc-floating-label">Price To</label>
                                                            </div>
                                                            <div class="mdc-notched-outline__trailing"></div>
                                                            </div>
                                                        </div>
                                                    </div> 
                                                </div> 
                                               
                                                <div class="row">
                                                    <div class="col-xs-6 p-2 form-group"> 
                                                        <select class="mdc-list-item" name="bathrooms" id="search_bathrooms" style="width: 100%;height: 50px; margin: 0px;">
                                                            <option value="">Bathrooms</option>
                                                            <option value="any" @if(app('request')->input('bathrooms') == 'any') selected @endif>Any</option>
                                                            <option value="1" @if(app('request')->input('bathrooms') == '1') selected @endif>1 Or More</option>
                                                            <option value="2" @if(app('request')->input('bathrooms') == '2') selected @endif>2 Or More</option>
                                                            <option value="3" @if(app('request')->input('bathrooms') == '3') selected @endif>3 Or More</option>
                                                            <option value="4" @if(app('request')->input('bathrooms') == '4') selected @endif>4 Or More</option>
                                                        </select> 
                                                    </div>
                                                    <div class="col-xs-6 p-2 form-group">
                                                        <select class="mdc-list-item" name="bedrooms" id="search_bedrooms" style="width: 100%;height: 50px; margin: 0px;">
                                                            <option value="">Bedrooms</option>
                                                            <option value="any" @if(app('request')->input('bedrooms') == 'any') selected @endif>Any</option>
                                                            <option value="1" @if(app('request')->input('bedrooms') == '1') selected @endif>1 Or More</option>
                                                            <option value="2" @if(app('request')->input('bedrooms') == '2') selected @endif>2 Or More</option>
                                                            <option value="3" @if(app('request')->input('bedrooms') == '3') selected @endif>3 Or More</option>
                                                            <option value="4" @if(app('request')->input('bedrooms') == '4') selected @endif>4 Or More</option>
                                                        </select> 
                                                    </div> 
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12 col-xs-12">
                                                       <p>Property Type</p>
                                                       <ul class="ulc">
                                                            <li>
                                                                <label for="business_opportunity">
                                                                    <input type="checkbox" name="property_type" id="business_opportunity" class="chk1" value="Business Opportunity">Business Opportunity
                                                                </label>
                                                            </li>
                                                            <li>
                                                                <label for="commercial_lease">
                                                                    <input type="checkbox" name="property_type" id="commercial_lease" class="chk1" value="Commercial Lease">Commercial Lease
                                                                </label>
                                                            </li>
                                                            <li>
                                                                <label for="commercial_sale">
                                                                    <input type="checkbox" name="property_type" id="commercial_sale" class="chk1" value="Commercial Sale">Commercial Sale
                                                                </label>
                                                            </li>
                                                            <li>
                                                                <label for="farm">
                                                                    <input type="checkbox" name="property_type" id="farm" class="chk1" value="Farm">Farm
                                                                </label>
                                                            </li>
                                                            <li>
                                                                <label for="land">
                                                                    <input type="checkbox" name="property_type" id="land" class="chk1" value="Land">Land
                                                                </label>
                                                            </li>
                                                            <li>
                                                                <label for="manufactured_in_park">
                                                                    <input type="checkbox" name="property_type" id="manufactured_in_park" class="chk1" value="Manufactured In Park">Manufactured In Park
                                                                </label>
                                                            </li>
                                                            <li>
                                                                <label for="residential">
                                                                    <input type="checkbox" name="property_type" id="residential" class="chk1" value="Residential">Residential
                                                                </label>
                                                            </li>
                                                            <li>
                                                                <label for="residential_income">
                                                                    <input type="checkbox" name="property_type" id="residential_income" class="chk1" value="Residential Income">Residential Income
                                                                </label>
                                                            </li>
                                                            <li>
                                                                <label for="residential_lease">
                                                                    <input type="checkbox" name="property_type" id="residential_lease" class="chk1" value="Residential Lease">Residential Lease
                                                                </label>
                                                            </li>
                                                            <li>
                                                                <label for="any">
                                                                    <input type="checkbox" name="property_type" id="any" class="chk1" value="any">Any
                                                                </label>
                                                            </li>
                                                       </ul>
                                                    </div>
                                                </div>
                                            </div>   
                                            <div class="row around-xs middle-xs p-2 mb-3"> 
                                               <!--  <button class="mdc-button mdc-button--raised bg-warn" type="button" id="clear-filter">
                                                    <span class="mdc-button__ripple"></span>
                                                    <span class="mdc-button__label">Clear</span> 
                                                </button> -->
                                                <button class="mdc-button mdc-button--raised" type="button" id="btn_filter">
                                                    <span class="mdc-button__ripple"></span>
                                                    <i class="material-icons mdc-button__icon">search</i>
                                                    <span class="mdc-button__label">Search</span> 
                                                </button>  
                                            </div>
                                        </form>   
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- </form> -->
                    </div>
                </div>
            </div>
        </div>
    </div>  
    @include('templates.components.call_us')
</main> 
@endsection
@push('scripts')
<script>
    
    $(function() {
    $('#btn_filter').on('click', function () {
        var location = $('#location_search').val();
        var min_price = $('#search_min_price').val();
        var max_price = $('#search_max_price').val();
        var bathrooms = $('#search_bathrooms :selected').val();
        var bedrooms = $('#search_bedrooms :selected').val();
        var property_type = $("input[name='property_type']:checked").map(function() {
            return this.value;
        }).get();
       
        //console.log(min_price+", "+max_price+", "+brands);
        var url = APP_URL+"/list-search?min_price="+min_price+"&max_price="+max_price+"&location="+location+"&bathrooms="+bathrooms+"&bedrooms="+bedrooms+"&property_type="+property_type;
        if (url) {
            window.location = url;
        }
        return false;
    });
});
</script>
@endpush