@extends('layouts.app')
@section('title', 'Advance Search')
@section('page-heading','Advance Search')
@push('styles')
@endpush
@section('content')
<main>
   <div class="header-image-wrapper">
      <div class="bg" style="background-image: url('assets/images/carousel/slide-3.jpg');"></div>
      <div class="mask"></div>
      <div class="header-image-content mh-200">
         <p class="desc">Advance Search</p>
      </div>
   </div>
   <div class="px-3">
      <div class="theme-container">
         <div class="page-drawer-container mt-3">
            @include('templates.components.search')
            <div class="mdc-drawer-scrim page-sidenav-scrim"></div>
            <div class="page-sidenav-content">
               <div class="properties-wrapper row mt-0" style="display: block;">
                  <form action="javascript:void(0);" id="filters" class="search-wrapper">
                     <div class="section mt-3" style="padding-top: 0px;">
                        <h1 class="section-title" style="text-align: center;">Advance Search</h1>
                        <div class="row">
                           <div class="col-xs-12">
                              <div class="search">
                                 <label for="search_by" style="font-size: 22px;">Search By:</label>
                                 <select name="search_by" id="search_by" class="lc" onchange="searchBy(this)">
                                    <option value="city" selected="selected">City</option>
                                    <option value="area">Area</option>
                                    <option value="zip">Zip</option>
                                    <option value="county">County</option>
                                    <option value="subdivision">Subdivision</option>
                                    <option value="address">Address</option>
                                    <option value="mls_no">MLS Number</option>
                                 </select>
                              </div>
                              <p style="margin-top: 4%;" id="search_by_text">Check the cities to include in your search.<br>
                                 *Note: Begin by checking which counties you want - the available cities within those counties will appear.
                              </p>
                           </div>
                        </div>
                        <div class="row">
                           <div class="col-md-6 col-xs-12" id="counties_div">
                              <div class="card_go">
                                 <p>Counties</p>
                                 <ul class="ulc" id="append_counties">
                                 </ul>
                              </div>
                           </div>
                           <div class="col-md-6 col-xs-12" id="city_div">
                              <div class="col-xs-12 p-2" id="address_div" style="display: none;">
                                 <div class="mdc-text-field mdc-text-field--outlined">
                                    <input class="mdc-text-field__input" name="address" id="address_search" value="{{app('request')->input('address')}}" placeholder="Type street address">
                                    <div class="mdc-notched-outline">
                                       <div class="mdc-notched-outline__leading"></div>
                                       <div class="mdc-notched-outline__notch">
                                          <label class="mdc-floating-label">Street Address</label>
                                       </div>
                                       <div class="mdc-notched-outline__trailing"></div>
                                    </div>
                                 </div>
                              </div>
                              <div class="card_go">
                                 <p>City</p>
                                 <ul class="ulc" id="append_cities">
                                    << Select a counties to view cities
                                 </ul>
                              </div>
                           </div>
                           <div class="col-md-6 col-xs-12" id="zipcodes_div" style="display: none;">
                              <div class="card_go">
                                 <p>Zip Codes</p>
                                 <ul class="ulc" id="append_zip_codes">
                                 </ul>
                              </div>
                           </div>
                           <div class="col-md-6 col-xs-12" id="subdivisions_div" style="display: none;">
                              <div class="card_go">
                                 <p>Subdivision Name</p>
                                 <ul class="ulc" id="append_subdivisions">
                                 </ul>
                              </div>
                           </div>
                           <div class="col-md-6 col-xs-12" id="mlsnumber_div" style="display: none;">
                              <div class="mdc-text-field mdc-text-field--outlined">
                                 <input class="mdc-text-field__input" name="mlsnumber" id="mlsnumber_search" placeholder="Type Mls Number">
                                 <div class="mdc-notched-outline">
                                    <div class="mdc-notched-outline__leading"></div>
                                    <div class="mdc-notched-outline__notch">
                                       <label class="mdc-floating-label">MLS Number</label>
                                    </div>
                                    <div class="mdc-notched-outline__trailing"></div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <!--  <div class="row">
                           <div class="col-md-6 col-xs-12">
                              <div class="card_go info_no">
                                 <p>Counties</p>
                                 <ul class="hide_info">
                                    <li>« Select a state to view counties</li>
                                 </ul>
                              </div>
                           </div>
                           
                           </div> -->
                        <div class="row">
                           <div class="col-md-12 col-xs-12">
                              <div class="card_go">
                                 <p>Status</p>
                                 <ul class="ulc">
                                    <li><label for="status1"><input type="checkbox" name="status" id="status1" class="chk1" value="Active">Active</label></li>
                                    <li><label for="status2"><input type="checkbox" name="status" id="status2" class="chk1" value="Pending">Pending</label></li>
                                    <li><label for="status3"><input type="checkbox" name="status" id="status3" class="chk1" value="Sold">Sold</label></li>
                                 </ul>
                              </div>
                           </div>
                        </div>
                        <div class="row">
                           <div class="col-md-6 col-xs-12">
                              <div class="card_go">
                                 <p>Property Type</p>
                                 <ul class="ulc" id="append_property_type">
                                 </ul>
                              </div>
                           </div>
                           <div class="col-md-6 col-xs-12" >
                              <div class="card_go">
                                 <p>Property Subtype</p>
                                 <ul class="ulc" id="append_property_subtype">
                                 </ul>
                              </div>
                           </div>
                        </div>
                        <div class="row">
                           <div class="col-md-6 col-xs-12">
                              <div class="card_go">
                                 <div class="row">
                                    <div class="col-md-6 col-xs-12" >
                                       <p>Bedrooms</p>
                                          <form>
                                          <select name="bedrooms" id="search_bedrooms" class="lc">
                                          <option value="any" selected="selected">Any</option>
                                          <option value="1">1 or More</option>
                                          <option value="2">2 or More</option>
                                          <option value="3">3 or More</option>
                                          <option value="4">4 or More</option>
                                          <option value="5">5 or More</option>
                                          <option value="6">6 or More</option>
                                          </select>
                                          </form>
                                          <p>Lot Size</p>
                                          <form>
                                          <select name="lot_size" id="search_lot_size" class="lc">
                                          <option value="any" selected="selected">Any</option>
                                          <option value="0.5">Half Acre or more</option>
                                          <option value="1">1 Acre or more</option>
                                          <option value="2">2 Acres or more</option>
                                          <option value="3">3 Acres or more</option>
                                          <option value="5">5 Acres or more</option>
                                          <option value="10">10 Acres or more</option>
                                          <option value="20">20 Acres or more</option>
                                          <option value="25">25 Acres or more</option>
                                          <option value="35">35 Acres or more</option>
                                          <option value="60">60 Acres or more</option>
                                          <option value="100">100 Acres or more</option>
                                          </select>
                                          </form>
                                          <p>Total Rooms</p>
                                          <form>
                                          <select name="rooms" id="search_rooms" class="lc">
                                          <option value="any">Any</option>
                                          <option value="3">3 or more</option>
                                          <option value="5">5 or more</option>
                                          <option value="7">7 or more</option>
                                          <option value="10">10 or more</option>
                                          <option value="15">15 or more</option>
                                          </select>
                                          </form>
                                          <p>Sq.ft.</p>
                                          <form>
                                          <select name="sqft" id="search_sqft" class="lc">
                                          <option value="any">Any</option>
                                          <option value="1000">1,000 or more</option>
                                          <option value="1500">1,500 or more</option>
                                          <option value="2000">2,000 or more</option>
                                          <option value="2500">2,500 or more</option>
                                          <option value="3000">3,000 or more</option>
                                          <option value="3500">3,500 or more</option>
                                          <option value="4000">4,000 or more</option>
                                          </select>
                                          </form>
                                          <p>Units</p>
                                          <form>
                                          <select name="units" id="search_units" class="lc">
                                          <option value="any">Any</option>
                                          <option value="2,4">2-4</option>
                                          <option value="5,10">5-10</option>
                                          <option value="11">11 or more</option>
                                          </select>
                                          </form>
                                          <p>Built Before</p>
                                          <form>
                                          <select name="built_before" id="search_built_before" class="lc">
                                          <option value="any">Any Year</option>
                                          <option value="2021">2021</option>
                                          <option value="2020">2020</option>
                                          <option value="2019">2019</option>
                                          <option value="2018">2018</option>
                                          <option value="2017">2017</option>
                                          <option value="2016">2016</option>
                                          <option value="2015">2015</option>
                                          <option value="2014">2014</option>
                                          <option value="2013">2013</option>
                                          <option value="2012">2012</option>
                                          <option value="2011">2011</option>
                                          <option value="2010">2010</option>
                                          <option value="2009">2009</option>
                                          <option value="2008">2008</option>
                                          <option value="2007">2007</option>
                                          <option value="2006">2006</option>
                                          <option value="2005">2005</option>
                                          <option value="2004">2004</option>
                                          <option value="2003">2003</option>
                                          <option value="2002">2002</option>
                                          <option value="2001">2001</option>
                                          <option value="2000">2000</option>
                                          <option value="1999">1999</option>
                                          <option value="1995">1995</option>
                                          <option value="1990">1990</option>
                                          <option value="1985">1985</option>
                                          <option value="1980">1980</option>
                                          <option value="1970">1970</option>
                                          <option value="1960">1960</option>
                                          <option value="1950">1950</option>
                                          <option value="1940">1940</option>
                                          <option value="1930">1930</option>
                                          <option value="1900">1900</option>
                                          <option value="1850">1850</option>
                                          <option value="1800">1800</option>
                                          <option value="1700">1700</option>
                                          </select>
                                          </form>
                                          <p>Built After</p>
                                          <form>
                                          <select name="built_after" id="search_built_after" class="lc">
                                          <option value="any">Any Year</option>
                                          <option value="2021">2021</option>
                                          <option value="2020">2020</option>
                                          <option value="2019">2019</option>
                                          <option value="2018">2018</option>
                                          <option value="2017">2017</option>
                                          <option value="2016">2016</option>
                                          <option value="2015">2015</option>
                                          <option value="2014">2014</option>
                                          <option value="2013">2013</option>
                                          <option value="2012">2012</option>
                                          <option value="2011">2011</option>
                                          <option value="2010">2010</option>
                                          <option value="2009">2009</option>
                                          <option value="2008">2008</option>
                                          <option value="2007">2007</option>
                                          <option value="2006">2006</option>
                                          <option value="2005">2005</option>
                                          <option value="2004">2004</option>
                                          <option value="2003">2003</option>
                                          <option value="2002">2002</option>
                                          <option value="2001">2001</option>
                                          <option value="2000">2000</option>
                                          <option value="1999">1999</option>
                                          <option value="1995">1995</option>
                                          <option value="1990">1990</option>
                                          <option value="1985">1985</option>
                                          <option value="1980">1980</option>
                                          <option value="1970">1970</option>
                                          <option value="1960">1960</option>
                                          <option value="1950">1950</option>
                                          <option value="1940">1940</option>
                                          <option value="1930">1930</option>
                                          <option value="1900">1900</option>
                                          <option value="1850">1850</option>
                                          <option value="1800">1800</option>
                                          <option value="1700">1700</option>
                                          </select>
                                          </form>
                                    </div>
                                    <div class="col-md-6 col-xs-12" >
                                       <p>Bathrooms</p>
                                       <form>
                                       <select name="bathrooms" id="search_bathrooms" class="lc">
                                       <option value="any" selected="selected">Any</option>
                                       <option value="1">1 or More</option>
                                       <option value="2">2 or More</option>
                                       <option value="3">3 or More</option>
                                       <option value="4">4 or More</option>
                                       </select>
                                       </form>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-md-6 col-xs-12">
                              <div class="card_go">
                                 <div class="row">
                                    <div class="col-md-6 col-xs-12" >
                                       <p>Min Price</p>
                                       <form>
                                       <select name="min_price" id="search_min_price" class="lc">
                                       <option value="0">No Min.</option>
                                       <option value="250">$250</option>
                                       <option value="500">$500</option>
                                       <option value="750">$750</option>
                                       <option value="1000">$1,000</option>
                                       <option value="1250">$1,250</option>
                                       <option value="1500">$1,500</option>
                                       <option value="1750">$1,750</option>
                                       <option value="2000">$2,000</option>
                                       <option value="2500">$2,500</option>
                                       <option value="3000">$3,000</option>
                                       <option value="4000">$4,000</option>
                                       <option value="5000">$5,000</option>
                                       <option value="7500">$7,500</option>
                                       <option value="10000">$10,000</option>
                                       <option value="15000">$15,000</option>
                                       <option value="25000">$25,000</option>
                                       <option value="50000">$50,000</option>
                                       <option value="75000">$75,000</option>
                                       <option value="100000">$100,000</option>
                                       <option value="125000">$125,000</option>
                                       <option value="150000">$150,000</option>
                                       <option value="175000">$175,000</option>
                                       <option value="200000">$200,000</option>
                                       <option value="225000">$225,000</option>
                                       <option value="250000">$250,000</option>
                                       <option value="275000">$275,000</option>
                                       <option value="300000">$300,000</option>
                                       <option value="325000">$325,000</option>
                                       <option value="350000">$350,000</option>
                                       <option value="375000">$375,000</option>
                                       <option value="400000">$400,000</option>
                                       <option value="425000">$425,000</option>
                                       <option value="450000">$450,000</option>
                                       <option value="475000">$475,000</option>
                                       <option value="500000">$500,000</option>
                                       <option value="525000">$525,000</option>
                                       <option value="550000">$550,000</option>
                                       <option value="575000">$575,000</option>
                                       <option value="600000">$600,000</option>
                                       <option value="625000">$625,000</option>
                                       <option value="650000">$650,000</option>
                                       <option value="675000">$675,000</option>
                                       <option value="700000">$700,000</option>
                                       <option value="725000">$725,000</option>
                                       <option value="750000">$750,000</option>
                                       <option value="775000">$775,000</option>
                                       <option value="800000">$800,000</option>
                                       <option value="825000">$825,000</option>
                                       <option value="850000">$850,000</option>
                                       <option value="875000">$875,000</option>
                                       <option value="900000">$900,000</option>
                                       <option value="925000">$925,000</option>
                                       <option value="950000">$950,000</option>
                                       <option value="975000">$975,000</option>
                                       <option value="1000000">$1,000,000</option>
                                       <option value="1100000">$1,100,000</option>
                                       <option value="1200000">$1,200,000</option>
                                       <option value="1300000">$1,300,000</option>
                                       <option value="1400000">$1,400,000</option>
                                       <option value="1500000">$1,500,000</option>
                                       <option value="1600000">$1,600,000</option>
                                       <option value="1700000">$1,700,000</option>
                                       <option value="1800000">$1,800,000</option>
                                       <option value="1900000">$1,900,000</option>
                                       <option value="2000000">$2,000,000</option>
                                       <option value="2500000">$2,500,000</option>
                                       <option value="3000000">$3,000,000</option>
                                       <option value="3500000">$3,500,000</option>
                                       <option value="4000000">$4,000,000</option>
                                       <option value="4500000">$4,500,000</option>
                                       <option value="5000000">$5,000,000</option>
                                       <option value="7500000">$7,500,000</option>
                                       <option value="10000000">$10,000,000</option>
                                       <option value="15000000">$15,000,000</option>
                                       <option value="20000000">$20,000,000</option>
                                       </select>
                                       </form>
                                       <ul class="ulc maxmin">
                 
                                          <li><label for="SEARCH_fireplace"><input type="checkbox" name="SEARCH_fireplace" id="SEARCH_fireplace" class="chk1" value="1">With a Fireplace</label></li>
                                          <li><label for="SEARCH_garage"><input type="checkbox" name="SEARCH_garage" id="SEARCH_garage" class="chk1" value="1">With a Garage</label></li>
                                          <li><label for="SEARCH_golf_course"><input type="checkbox" name="SEARCH_golf_course" id="SEARCH_golf_course" class="chk1" value="1">Golf Property</label></li>
                                          <li><label for="SEARCH_new_construction"><input type="checkbox" name="SEARCH_new_construction" id="SEARCH_new_construction" class="chk1" value="1">New Construction</label></li>
                                          <li><label for="SEARCH_open_house"><input type="checkbox" name="SEARCH_open_house" id="SEARCH_open_house" class="chk1" value="1">Open Houses Scheduled</label></li>
                                          <li><label for="SEARCH_pool"><input type="checkbox" name="SEARCH_pool" id="SEARCH_pool" class="chk1" value="1">With a Pool or Spa</label></li>
                                          <li><label for="SEARCH_view"><input type="checkbox" name="SEARCH_view" id="SEARCH_view" class="chk1" value="1">With a View</label></li>
                                          <li><label for="SEARCH_waterfront"><input type="checkbox" name="SEARCH_waterfront" id="SEARCH_waterfront" class="chk1" value="1">On a Waterfront</label></li>
                                          <li><label for="SEARCH_new_listings_only"><input type="checkbox" name="SEARCH_new_listings_only" id="SEARCH_new_listings_only" class="chk1" value="1">New Listings Only</label></li>
                                          <li><label for="SEARCH_adult_community_bool"><input type="checkbox" name="SEARCH_adult_community_bool" id="SEARCH_adult_community_bool" class="chk1" value="1">Over 55 Community</label></li>
                                          <li><label for="SEARCH_aircraft_hanger_bool"><input type="checkbox" name="SEARCH_aircraft_hanger_bool" id="SEARCH_aircraft_hanger_bool" class="chk1" value="1">Near Airport</label></li>
                                          <li><label for="SEARCH_beach_access_bool"><input type="checkbox" name="SEARCH_beach_access_bool" id="SEARCH_beach_access_bool" class="chk1" value="1">Beachfront</label></li>
                                          <li><label for="SEARCH_chain_of_lakes_bool"><input type="checkbox" name="SEARCH_chain_of_lakes_bool" id="SEARCH_chain_of_lakes_bool" class="chk1" value="1">Chain of Lakes</label></li>
                                          <li><label for="SEARCH_elevator_bool"><input type="checkbox" name="SEARCH_elevator_bool" id="SEARCH_elevator_bool" class="chk1" value="1">Furnished</label></li>
                                          <li><label for="SEARCH_gated_community_bool"><input type="checkbox" name="SEARCH_gated_community_bool" id="SEARCH_gated_community_bool" class="chk1" value="1">Gated Community</label></li>
                                          <li><label for="SEARCH_government_owned_bool"><input type="checkbox" name="SEARCH_government_owned_bool" id="SEARCH_government_owned_bool" class="chk1" value="1">Community Pool</label></li>
                                          <li><label for="SEARCH_horse_facilities_bool"><input type="checkbox" name="SEARCH_horse_facilities_bool" id="SEARCH_horse_facilities_bool" class="chk1" value="1">Horse Barn</label></li>
                                          <li><label for="SEARCH_horse_permitted_bool"><input type="checkbox" name="SEARCH_horse_permitted_bool" id="SEARCH_horse_permitted_bool" class="chk1" value="1">Horses Permitted </label></li>
                                          <li><label for="SEARCH_on_an_intra_front_bool"><input type="checkbox" name="SEARCH_on_an_intra_front_bool" id="SEARCH_on_an_intra_front_bool" class="chk1" value="1">Canal - Saltwater</label></li>
                                          <li><label for="SEARCH_on_a_river_bool"><input type="checkbox" name="SEARCH_on_a_river_bool" id="SEARCH_on_a_river_bool" class="chk1" value="1">Canal - Freshwater</label></li>
                                          <li><label for="SEARCH_pets_allowed_bool"><input type="checkbox" name="SEARCH_pets_allowed_bool" id="SEARCH_pets_allowed_bool" class="chk1" value="1">Pets Allowed</label></li>
                                          <li><label for="SEARCH_probate_sale_bool"><input type="checkbox" name="SEARCH_probate_sale_bool" id="SEARCH_probate_sale_bool" class="chk1" value="1">Short Term Rental</label></li>
                                          <li><label for="SEARCH_third_party_approval_bool"><input type="checkbox" name="SEARCH_third_party_approval_bool" id="SEARCH_third_party_approval_bool" class="chk1" value="1">Has HOA</label></li>
                                          <li><label for="SEARCH_variable_pricing_bool"><input type="checkbox" name="SEARCH_variable_pricing_bool" id="SEARCH_variable_pricing_bool" class="chk1" value="1">Income Property</label></li>
                                          <li><label for="SEARCH_walkout_basement_bool"><input type="checkbox" name="SEARCH_walkout_basement_bool" id="SEARCH_walkout_basement_bool" class="chk1" value="1">Patio</label></li>
                                          <li><label for="SEARCH_water_access_bool"><input type="checkbox" name="SEARCH_water_access_bool" id="SEARCH_water_access_bool" class="chk1" value="1">Private Pool</label></li>
                                          <li><label for="SEARCH_water_front_bool"><input type="checkbox" name="SEARCH_water_front_bool" id="SEARCH_water_front_bool" class="chk1" value="1">Waterfront Access</label></li>
                                       </ul>
                                    </div>
                                    <div class="col-md-6 col-xs-12" >
                                       <p>Max Price</p>
                                       <form>
                                       <select name="max_price" id="search_max_price" class="lc">   
                                       <option value="0">No Max.</option>
                                       <option value="250">$250</option>
                                       <option value="500">$500</option>
                                       <option value="750">$750</option>
                                       <option value="1000">$1,000</option>
                                       <option value="1250">$1,250</option>
                                       <option value="1500">$1,500</option>
                                       <option value="1750">$1,750</option>
                                       <option value="2000">$2,000</option>
                                       <option value="2500">$2,500</option>
                                       <option value="3000">$3,000</option>
                                       <option value="4000">$4,000</option>
                                       <option value="5000">$5,000</option>
                                       <option value="7500">$7,500</option>
                                       <option value="10000">$10,000</option>
                                       <option value="15000">$15,000</option>
                                       <option value="25000">$25,000</option>
                                       <option value="50000">$50,000</option>
                                       <option value="75000">$75,000</option>
                                       <option value="100000">$100,000</option>
                                       <option value="125000">$125,000</option>
                                       <option value="150000">$150,000</option>
                                       <option value="175000">$175,000</option>
                                       <option value="200000">$200,000</option>
                                       <option value="225000">$225,000</option>
                                       <option value="250000">$250,000</option>
                                       <option value="275000">$275,000</option>
                                       <option value="300000">$300,000</option>
                                       <option value="325000">$325,000</option>
                                       <option value="350000">$350,000</option>
                                       <option value="375000">$375,000</option>
                                       <option value="400000">$400,000</option>
                                       <option value="425000">$425,000</option>
                                       <option value="450000">$450,000</option>
                                       <option value="475000">$475,000</option>
                                       <option value="500000">$500,000</option>
                                       <option value="525000">$525,000</option>
                                       <option value="550000">$550,000</option>
                                       <option value="575000">$575,000</option>
                                       <option value="600000">$600,000</option>
                                       <option value="625000">$625,000</option>
                                       <option value="650000">$650,000</option>
                                       <option value="675000">$675,000</option>
                                       <option value="700000">$700,000</option>
                                       <option value="725000">$725,000</option>
                                       <option value="750000">$750,000</option>
                                       <option value="775000">$775,000</option>
                                       <option value="800000">$800,000</option>
                                       <option value="825000">$825,000</option>
                                       <option value="850000">$850,000</option>
                                       <option value="875000">$875,000</option>
                                       <option value="900000">$900,000</option>
                                       <option value="925000">$925,000</option>
                                       <option value="950000">$950,000</option>
                                       <option value="975000">$975,000</option>
                                       <option value="1000000">$1,000,000</option>
                                       <option value="1100000">$1,100,000</option>
                                       <option value="1200000">$1,200,000</option>
                                       <option value="1300000">$1,300,000</option>
                                       <option value="1400000">$1,400,000</option>
                                       <option value="1500000">$1,500,000</option>
                                       <option value="1600000">$1,600,000</option>
                                       <option value="1700000">$1,700,000</option>
                                       <option value="1800000">$1,800,000</option>
                                       <option value="1900000">$1,900,000</option>
                                       <option value="2000000">$2,000,000</option>
                                       <option value="2500000">$2,500,000</option>
                                       <option value="3000000">$3,000,000</option>
                                       <option value="3500000">$3,500,000</option>
                                       <option value="4000000">$4,000,000</option>
                                       <option value="4500000">$4,500,000</option>
                                       <option value="5000000">$5,000,000</option>
                                       <option value="7500000">$7,500,000</option>
                                       <option value="10000000">$10,000,000</option>
                                       <option value="15000000">$15,000,000</option>
                                       <option value="20000000">$20,000,000</option>
                                       </select>
                                       </form>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>


                  <div class="row">
                     <div class="col-md-6 col-xs-12">
                        <div class="card_go info_no">
                           <p>Elementary School</p>
                              <ul class="hide_info" id="append_elementary_school">
                                 <li><a href="javascript:;" onclick="getElementrySchool();">Show More Options</a></li>
                              </ul>
                        </div>
                     </div>
                     <div class="col-md-6 col-xs-12">
                        <div class="card_go info_no">
                           <p>Middle School</p>
                              <ul class="hide_info" id="append_middle_school">
                                 <li><a href="javascript:;" onclick="getMiddleSchool();">Show More Options</a></li>
                              </ul>
                           </div>
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-md-6 col-xs-12">
                           <div class="card_go info_no">
                              <p>High School</p>
                                 <ul class="hide_info" id="append_high_school">
                                    <li><a href="javascript:;" onclick="getHighSchool();">Show More Options</a></li>
                                 </ul>
                           </div>
                        </div>
                        <div class="col-md-6 col-xs-12" >
                           <div class="card_go">
                              <p>Listing Status</p>
                                 <ul class="ulc">
                                    <li><label for="list_status1"><input type="checkbox" name="list_status" id="list_status1" class="chk1" value="Active">Active</label></li>
                                    <li><label for="list_status2"><input type="checkbox" name="list_status" id="list_status2" class="chk1" value="Pending">Pending</label></li>
                                 </ul>
                           </div>
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-md-6 col-xs-12">
                           <div class="card_go">
                              <p>Special Conditions</p>
                                 <ul class="ulc" id="append_conditions">
                                 </ul>
                           </div>
                        </div>
                        <div class="col-md-6 col-xs-12" >
                           <div class="card_go">
                              <p>Stories</p>
                                 <ul class="ulc">
                                    <li><label for="story1"><input type="checkbox" name="stories" id="story1" class="chk1" value="1">1 Story</label></li>
                                    <li><label for="story2"><input type="checkbox" name="stories" id="story2" class="chk1" value="2">2 Story</label></li>
                                    <li><label for="story3"><input type="checkbox" name="stories" id="story3" class="chk1" value="3">3+ Story</label></li>
                                 </ul>
                           </div>
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-md-6 col-xs-12">
                           <div class="card_go">
                              <p>Style</p>
                                 <ul class="ulc" id="append_style">
                                 </ul>
                           </div>
                        </div>
                        <div class="col-md-6 col-xs-12" >
                           <div class="card_go">
                              <p>Construction Materials</p>
                              <ul class="ulc" id="append_material">
                              </ul>
                           </div>
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-md-6 col-xs-12">
                           <div class="card_go info_no">
                              <p>Builder Name</p>
                                 <ul class="hide_info" id="append_builder">
                                    <li><a href="javascript:;" onclick="getBuilder();">Show More Options</a></li>
                                 </ul>
                           </div>
                        </div>
                        <div class="col-md-6 col-xs-12">
                           <div class="card_go info_no">
                              <p>Complex Community Name NCCB</p>
                                 <ul class="hide_info" id="append_community">
                                    <li><a href="javascript:;" onclick="getComplexCommunity();">Show More Options</a></li>
                                 </ul>
                           </div>
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-md-6 col-xs-12">
                           <div class="card_go">
                              <p>Minimum Lease</p>
                                 <ul class="ulc" id="append_min_lease">
                                 </ul>
                           </div>
                        </div>
                        <div class="col-md-6 col-xs-12" >
                           <div class="card_go">
                               <p>Property Condition</p>
                                 <ul class="ulc" id="append_property_condition">
                                 </ul>
                           </div>
                        </div>
                     </div>
                 
                     <div class="row mt-4">
                        <div class="col-md-12 col-xs-12">
                           <button class="mdc-button mdc-button--raised" type="button" id="btn_filter">
                              <span class="mdc-button__ripple"></span>
                                 <i class="material-icons mdc-button__icon">search</i>
                                 <span class="mdc-button__label">Search</span> 
                           </button>
                        </div>
                     </div>
                  </div>
                  </form>
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
   getCounties();
   getPropertyType();
   getPropertySubtype();
   getListingCondition();
   getStyle();
   getConstructionMaterials();
   getMinLease();
   getPropertyCondition();
   
   function removeChecked(){
      $("input[name='counties']:checked").removeAttr('checked');
      $("input[name='cities']:checked").removeAttr('checked');
      $("input[name='zip_codes']:checked").removeAttr('checked');
      $("input[name='subdivisions']:checked").removeAttr('checked');
      $('#address_search').val('');
      $('#mlsnumber_div').val('');
   }
   
   function searchBy(invoker){
      var val = $(invoker).val();
      if(val == 'city'){
         removeChecked();
         getCounties();
         getCities();
         $('#counties_div, #city_div').show();
         $('#zipcodes_div, #subdivisions_div, #address_div, #mlsnumber_div').hide();
         $('#search_by_text').html("Check the cities to include in your search.<br>*Note: Check which counties you want - the available cities within those counties will appear.");
         
      }
      if(val == 'area'){
         removeChecked();
         $('#counties_div').show();
         $('#city_div, #zipcodes_div, #subdivisions_div, #address_div, #mlsnumber_div').hide();
         $('#search_by_text').html("Check the cities (or areas) to include in your search.<br>*Note: Check which counties you want - the available cities (or areas) within those counties will appear all property. ");
      }
      if(val == 'zip'){
         removeChecked();
         getZipCode();
         $('#zipcodes_div').show();
         $('#counties_div, #city_div, #subdivisions_div, #address_div, #mlsnumber_div').hide();
         $('#search_by_text').html("Check the zip codes to include in your search.");
      }
   
      if(val == 'county'){
         removeChecked();
         $('#counties_div').show();
         $('#city_div, #zipcodes_div, #subdivisions_div, #address_div, #mlsnumber_div').hide();
         $('#search_by_text').html("Check the counties to include in your search.");
      }
      if(val == 'subdivision'){
         removeChecked();
         getSubdivision();
         $('#subdivisions_div').show();
         $('#city_div, #zipcodes_div, #counties_div, #address_div, #mlsnumber_div').hide();
         $('#search_by_text').html("To search in subdivisions, narrow down your search by selecting one or more Cities.");
      }
      if(val == 'address'){
         removeChecked();
         getCities('all_city');
         $('#address_div, #city_div').show();
         $('#zipcodes_div, #counties_div, #subdivisions_div, #mlsnumber_div').hide();
         $('#search_by_text').html("Please enter a street address. Do not type in a city or zip code.<br>Instead, use the checkboxes to select which city/area to search in.");
      }
      if(val == 'mls_no'){
         $('#mlsnumber_div').show();
         $('#zipcodes_div, #counties_div, #subdivisions_div, #address_div, #city_div').hide();
         $('#search_by_text').html("Please enter an mls number, (or multiple numbers separated by commas) ");
      }
   }
   
   function getCounties(){
      $.ajax({
             url: '/get-counties',
             type: 'GET',
             data: {
                 
             },
             success: function (response) {
                 if(response.status == true){
                    $('#append_counties').html(response.counties);
                }
                 else{
                     toastr.info("Error");
                 }
             },
             error: function (error) {
                 console.log(error)
             },
      });
   }
   
   function getCities(all_city = ''){
      var counties = $("input[name='counties']:checked").map(function() {
            return this.value;
        }).get();
      $.ajax({
             url: '/get-cities',
             type: 'GET',
             data: {
                 'counties' : counties,
                 'all_city' : all_city
             },
             success: function (response) {
                 if(response.status == true){
                     $('#append_cities').html(response.cities);
                }
                 else{
                     toastr.info("Error");
                 }
             },
             error: function (error) {
                 console.log(error)
             },
      });
   }
   
   function getPropertyType(){
      $.ajax({
             url: '/get-property-type',
             type: 'GET',
             data: {
                 
             },
             success: function (response) {
                 if(response.status == true){
                    $('#append_property_type').html(response.propertyTyps);
                }
                 else{
                     toastr.info("Error");
                 }
             },
             error: function (error) {
                 console.log(error)
             },
      });
   }
   
   function getPropertySubtype(){
      $.ajax({
             url: '/get-property-subtype',
             type: 'GET',
             data: {
                 
             },
            success: function (response) {
               if(response.status == true){
                  $('#append_property_subtype').html(response.property_subtypes);
               }
               else{
                  toastr.info("Error");
               }
            },
            error: function (error) {
               console.log(error)
            },
      });
   }
   
   function getElementrySchool(){
      $.ajax({
             url: '/get-elementry-school',
             type: 'GET',
             data: {
                 
             },
            success: function (response) {
               if(response.status == true){
                  $('#append_elementary_school').removeClass('hide_info');
                  $('#append_elementary_school').addClass('ulc');
                  $('#append_elementary_school').html(response.elementry_schools);
               }
               else{
                  toastr.info("Error");
               }
            },
            error: function (error) {
               console.log(error)
            },
      });
   }
   
   function getMiddleSchool(){
      $.ajax({
             url: '/get-middle-school',
             type: 'GET',
             data: {
                 
             },
            success: function (response) {
               if(response.status == true){
                  $('#append_middle_school').removeClass('hide_info');
                  $('#append_middle_school').addClass('ulc');
                  $('#append_middle_school').html(response.middle_schools);
               }
               else{
                  toastr.info("Error");
               }
            },
            error: function (error) {
               console.log(error)
            },
      });
   }
   
   function getHighSchool(){
      $.ajax({
             url: '/get-high-school',
             type: 'GET',
             data: {
                 
             },
            success: function (response) {
               if(response.status == true){
                  $('#append_high_school').removeClass('hide_info');
                  $('#append_high_school').addClass('ulc');
                  $('#append_high_school').html(response.high_schools);
               }
               else{
                  toastr.info("Error");
               }
            },
            error: function (error) {
               console.log(error)
            },
      });
   }
   
   function getListingCondition(){
      $.ajax({
             url: '/get-conditions',
             type: 'GET',
             data: {
                 
             },
            success: function (response) {
               if(response.status == true){
                  
                  $('#append_conditions').html(response.conditions);
               }
               else{
                  toastr.info("Error");
               }
            },
            error: function (error) {
               console.log(error)
            },
      });
   }
   
   function getStyle(){
      $.ajax({
             url: '/get-style',
             type: 'GET',
             data: {
                 
             },
            success: function (response) {
               if(response.status == true){
                  
                  $('#append_style').html(response.styles);
               }
               else{
                  toastr.info("Error");
               }
            },
            error: function (error) {
               console.log(error)
            },
      });
   }
   
   function getConstructionMaterials(){
      $.ajax({
             url: '/get-construction-materials',
             type: 'GET',
             data: {
                 
             },
            success: function (response) {
               if(response.status == true){
                  
                  $('#append_material').html(response.materials);
               }
               else{
                  toastr.info("Error");
               }
            },
            error: function (error) {
               console.log(error)
            },
      });
   }
   
   function getBuilder(){
      $.ajax({
             url: '/get-builder',
             type: 'GET',
             data: {
                 
             },
            success: function (response) {
               if(response.status == true){
                  $('#append_builder').removeClass('hide_info');
                  $('#append_builder').addClass('ulc');
                  $('#append_builder').html(response.builders);
               }
               else{
                  toastr.info("Error");
               }
            },
            error: function (error) {
               console.log(error)
            },
      });
   }
   
   function getComplexCommunity(){
      $.ajax({
             url: '/get-complex-community',
             type: 'GET',
             data: {
                 
             },
            success: function (response) {
               if(response.status == true){
                  $('#append_community').removeClass('hide_info');
                  $('#append_community').addClass('ulc');
                  $('#append_community').html(response.complex_communities);
               }
               else{
                  toastr.info("Error");
               }
            },
            error: function (error) {
               console.log(error)
            },
      });
   }
   
   function getMinLease(){
      $.ajax({
             url: '/get-min-lease',
             type: 'GET',
             data: {
                 
             },
            success: function (response) {
               if(response.status == true){
                  
                  $('#append_min_lease').html(response.min_leases);
               }
               else{
                  toastr.info("Error");
               }
            },
            error: function (error) {
               console.log(error)
            },
      });
   }
   
   function getPropertyCondition(){
      $.ajax({
             url: '/get-property-condition',
             type: 'GET',
             data: {
                 
             },
            success: function (response) {
               if(response.status == true){
                  
                  $('#append_property_condition').html(response.property_conditions);
               }
               else{
                  toastr.info("Error");
               }
            },
            error: function (error) {
               console.log(error)
            },
      });
   }
   
   function getZipCode(){
      $.ajax({
             url: '/get-zip-code',
             type: 'GET',
             data: {
                 
             },
            success: function (response) {
               if(response.status == true){
                  
                  $('#append_zip_codes').html(response.zip_codes);
               }
               else{
                  toastr.info("Error");
               }
            },
            error: function (error) {
               console.log(error)
            },
      });
   }
   
   function getSubdivision(){
      $.ajax({
             url: '/get-subdivision',
             type: 'GET',
             data: {
                 
             },
            success: function (response) {
               if(response.status == true){
                  
                  $('#append_subdivisions').html(response.subdivisions);
               }
               else{
                  toastr.info("Error");
               }
            },
            error: function (error) {
               console.log(error)
            },
      });
   }
   
   $(function() {
      $('#btn_filter').on('click', function () {
         var address = $('#address_search').val();
         var mlsnumber = $('#mlsnumber_search').val();
         var counties = $("input[name='counties']:checked").map(function() {
                           return this.value;
                        }).get();
         var cities = $("input[name='cities']:checked").map(function() {
                           return this.value;
                        }).get();
         var zip_codes = $("input[name='zip_codes']:checked").map(function() {
                           return this.value;
                        }).get();
         var zip_codes = $("input[name='zip_codes']:checked").map(function() {
                           return this.value;
                        }).get();
         var subdivisions = $("input[name='subdivisions']:checked").map(function() {
                           return this.value;
                        }).get();
         var status = $("input[name='status']:checked").map(function() {
                           return this.value;
                        }).get();
         var propertyTyps = $("input[name='propertyTyps']:checked").map(function() {
                           return this.value;
                        }).get();
         var property_subtypes = $("input[name='property_subtypes']:checked").map(function() {
                           return this.value;
                        }).get();
         var bathrooms = $('#search_bathrooms :selected').val();
         var bedrooms = $('#search_bedrooms :selected').val();
         var lot_size = $('#search_lot_size :selected').val();
         var rooms = $('#search_rooms :selected').val();
         var sqft = $('#search_sqft :selected').val();
         var units = $('#search_units :selected').val();
         var built_before = $('#search_built_before :selected').val();
         var built_after = $('#search_built_after :selected').val();
         var min_price = $('#search_min_price :selected').val();
         var max_price = $('#search_max_price :selected').val();
   
         var elementry_schools = $("input[name='elementry_schools']:checked").map(function() {
                           return this.value;
                        }).get();
         var middle_schools = $("input[name='middle_schools']:checked").map(function() {
                           return this.value;
                        }).get();
         var high_schools = $("input[name='high_schools']:checked").map(function() {
                           return this.value;
                        }).get();
         var list_status = $("input[name='list_status']:checked").map(function() {
                           return this.value;
                        }).get();
         var conditions = $("input[name='conditions']:checked").map(function() {
                           return this.value;
                        }).get();
         var stories = $("input[name='stories']:checked").map(function() {
                           return this.value;
                        }).get();
         var styles = $("input[name='styles']:checked").map(function() {
                           return this.value;
                        }).get();
         var materials = $("input[name='materials']:checked").map(function() {
                           return this.value;
                        }).get();
         var builders = $("input[name='builders']:checked").map(function() {
                           return this.value;
                        }).get();
         var complex_communities = $("input[name='complex_communities']:checked").map(function() {
                           return this.value;
                        }).get();
         var min_leases = $("input[name='min_leases']:checked").map(function() {
                           return this.value;
                        }).get();
         var property_conditions = $("input[name='property_conditions']:checked").map(function() {
                           return this.value;
                        }).get();
         var accessibility = $("input[name='SEARCH_accessibility']:checked").val();
         var fireplace = $("input[name='SEARCH_fireplace']:checked").val();
         var garage = $("input[name='SEARCH_garage']:checked").val();
         var golf_course = $("input[name='SEARCH_golf_course']:checked").val();
         var new_construction = $("input[name='SEARCH_new_construction']:checked").val();
         var open_house = $("input[name='SEARCH_open_house']:checked").val();
         var pool = $("input[name='SEARCH_pool']:checked").val();
         var view = $("input[name='SEARCH_view']:checked").val();
         var waterfront = $("input[name='SEARCH_waterfront']:checked").val();
         var listings_only = $("input[name='SEARCH_new_listings_only']:checked").val();
         var adult_community_bool = $("input[name='SEARCH_adult_community_bool']:checked").val();
         var aircraft_hanger_bool = $("input[name='SEARCH_aircraft_hanger_bool']:checked").val();
         var beach_access_bool = $("input[name='SEARCH_beach_access_bool']:checked").val();
         var chain_of_lakes_bool = $("input[name='SEARCH_chain_of_lakes_bool']:checked").val();
         var elevator_bool = $("input[name='SEARCH_elevator_bool']:checked").val();
         var gated_community_bool = $("input[name='SEARCH_gated_community_bool']:checked").val();
         var government_owned_bool = $("input[name='SEARCH_government_owned_bool']:checked").val();
         var horse_facilities_bool = $("input[name='SEARCH_horse_facilities_bool']:checked").val();
         var horse_permitted_bool = $("input[name='SEARCH_horse_permitted_bool']:checked").val();
         var on_an_intra_front_bool = $("input[name='SEARCH_on_an_intra_front_bool']:checked").val();
         var on_a_river_bool = $("input[name='SEARCH_on_a_river_bool']:checked").val();
         var pets_allowed_bool = $("input[name='SEARCH_pets_allowed_bool']:checked").val();
         var probate_sale_bool = $("input[name='SEARCH_probate_sale_bool']:checked").val();
         var third_party_approval_bool = $("input[name='SEARCH_third_party_approval_bool']:checked").val();
         var variable_pricing_bool = $("input[name='SEARCH_variable_pricing_bool']:checked").val();
         var walkout_basement_bool = $("input[name='SEARCH_walkout_basement_bool']:checked").val();
         var water_access_bool = $("input[name='SEARCH_water_access_bool']:checked").val();
         var water_front_bool = $("input[name='SEARCH_water_front_bool']:checked").val();
   
   
         var url = APP_URL+"/list-search?counties="+counties+"&cities="+cities+"&address="+address+"&zip_codes="+zip_codes+"&subdivisions="+subdivisions+"&mlsnumber="+mlsnumber+"&status="+status+"&propertyTyps="+propertyTyps+"&property_subtypes="+property_subtypes+"&bedrooms="+bedrooms+"&bathrooms="+bathrooms+"&lot_size="+lot_size+"&rooms="+rooms+"&sqft="+sqft+"&units="+units+"&built_before="+built_before+"&built_after="+built_after+"&min_price="+min_price+"&max_price="+max_price+"&elementry_schools="+elementry_schools+"&middle_schools="+middle_schools+"&high_schools="+high_schools+"&list_status="+list_status+"&conditions="+conditions+"&stories="+stories+"&styles="+styles+"&materials="+materials+"&builders="+builders+"&complex_communities="+complex_communities+"&min_leases="+min_leases+"&property_conditions="+property_conditions+"&accessibility="+accessibility+"&fireplace="+fireplace+"&garage="+garage+"&golf_course="+golf_course+"&new_construction="+new_construction+"&open_house="+open_house+"&pool="+pool+"&view="+view+"&waterfront="+waterfront+"&listings_only="+listings_only+"&adult_community_bool="+adult_community_bool+"&aircraft_hanger_bool="+aircraft_hanger_bool+"&beach_access_bool="+beach_access_bool+"&chain_of_lakes_bool="+chain_of_lakes_bool+"&elevator_bool="+elevator_bool+"&gated_community_bool="+gated_community_bool+"&government_owned_bool="+government_owned_bool+"&horse_facilities_bool="+horse_facilities_bool+"&horse_permitted_bool="+horse_permitted_bool+"&on_an_intra_front_bool="+on_an_intra_front_bool+"&on_a_river_bool="+on_a_river_bool+"&pets_allowed_bool="+pets_allowed_bool+"&probate_sale_bool="+probate_sale_bool+"&third_party_approval_bool="+third_party_approval_bool+"&variable_pricing_bool="+variable_pricing_bool+"&walkout_basement_bool="+walkout_basement_bool+"&water_access_bool="+water_access_bool+"&water_front_bool="+water_front_bool;
         if (url) {
            window.location = url;
         }
         return false;
      });
   });
   
</script>
@endpush