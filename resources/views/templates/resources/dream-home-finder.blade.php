@extends('layouts.app')
@section('title', 'Dream Home Finder')
@section('page-heading','Dream Home Finder')
@push('styles')

@endpush
@section('content')
<main> 
    <div class="header-image-wrapper">
        <div class="bg" style="background-image: url('assets/images/carousel/slide-3.jpg');"></div>
        <div class="mask"></div>            
        <div class="header-image-content mh-200"> 
            <p class="desc">Dream Home Finder</p> 
        </div>
    </div>  
    <div class="px-3">  
        <div class="theme-container">  
            <div class="page-drawer-container mt-3">
                @include('templates.components.search')
                <div class="mdc-drawer-scrim page-sidenav-scrim"></div>
                <div class="page-sidenav-content">
                    <div class="properties-wrapper row mt-0" style="display: block;">
                       <div class="section mt-3" style="padding-top: 0px;">
                            <h1 class="section-title" style="text-align: center;">dream-home-finder</h1>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 col-xs-12">
                            <h3>For detailed information on buying a home or property, please complete the form below describing the type of home or property you are looking for. Someone will get back to you as quickly as possible with your results!</h3><br>
                            <div class="card_go">  
                                <form action="{{ route('add-contact') }}" method="POST" class="contact-form row mt-3">
                                    @csrf                   
                                    <input type="hidden" name="route_name" value="dream-home-finder">
                                    <input type="hidden" name="route_url" value="{{\Request::url()}}">
                                    <div class="col-xs-12 col-sm-12 col-md-6 p-2">  
                                        <div class="mdc-text-field mdc-text-field--outlined w-100">
                                            <input type="text" name="name" class="mdc-text-field__input" placeholder="Full Name is required" required="">
                                            <div class="mdc-notched-outline mdc-notched-outline--upgraded">
                                                <div class="mdc-notched-outline__leading"></div>
                                                <div class="mdc-notched-outline__notch">
                                                    <label class="mdc-floating-label" style="">Name</label>
                                                </div>
                                                <div class="mdc-notched-outline__trailing"></div>
                                            </div>
                                        </div> 
                                    </div>  
                                    
                                      
                                    <div class="col-xs-12 col-sm-12 col-md-6 p-2">  
                                        <div class="mdc-text-field mdc-text-field--outlined w-100">
                                            <input type="tel" name="phone" class="mdc-text-field__input" placeholder="Phone number is required" required="">
                                            <div class="mdc-notched-outline mdc-notched-outline--upgraded">
                                                <div class="mdc-notched-outline__leading"></div>
                                                <div class="mdc-notched-outline__notch">
                                                    <label class="mdc-floating-label" style="">Phone Number</label>
                                                </div>
                                                <div class="mdc-notched-outline__trailing"></div>
                                            </div>
                                        </div> 
                                    </div> 
                                    <div class="col-xs-12 col-sm-12 col-md-6 p-2">  
                                        <div class="mdc-text-field mdc-text-field--outlined w-100">
                                            <input type="text" name="fax" class="mdc-text-field__input" placeholder="Fax number is required">
                                            <div class="mdc-notched-outline mdc-notched-outline--upgraded">
                                                <div class="mdc-notched-outline__leading"></div>
                                                <div class="mdc-notched-outline__notch">
                                                    <label class="mdc-floating-label" style="">Fax Number</label>
                                                </div>
                                                <div class="mdc-notched-outline__trailing"></div>
                                            </div>
                                        </div> 
                                    </div>  
                                    <div class="col-xs-12 col-sm-12 col-md-6 p-2">  
                                        <div class="mdc-text-field mdc-text-field--outlined w-100">
                                            <input type="email" name="email" class="mdc-text-field__input" placeholder="Email is required" required="">
                                            <div class="mdc-notched-outline mdc-notched-outline--upgraded">
                                                <div class="mdc-notched-outline__leading"></div>
                                                <div class="mdc-notched-outline__notch">
                                                    <label class="mdc-floating-label" style="">Email</label>
                                                </div>
                                                <div class="mdc-notched-outline__trailing"></div>
                                            </div>
                                        </div> 
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-6 p-2">  
                                        <div class="mdc-text-field mdc-text-field--outlined w-100">
                                            <input type="datetime-local" name="time_for_call" class="mdc-text-field__input" placeholder="Best time to contact you required">
                                            <div class="mdc-notched-outline mdc-notched-outline--upgraded">
                                                <div class="mdc-notched-outline__leading"></div>
                                                <div class="mdc-notched-outline__notch">
                                                    <label class="mdc-floating-label" style="">Best time to contact you</label>
                                                </div>
                                                <div class="mdc-notched-outline__trailing"></div>
                                            </div>
                                        </div> 
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-6 p-2">  
                                        <div class="mdc-text-field mdc-text-field--outlined w-100">
                                            <input type="text" name="location" class="mdc-text-field__input" placeholder="Where are you searching? (City, State, Zip)">
                                            <div class="mdc-notched-outline mdc-notched-outline--upgraded">
                                                <div class="mdc-notched-outline__leading"></div>
                                                <div class="mdc-notched-outline__notch">
                                                    <label class="mdc-floating-label" style="">Where are you searching? (City, State, Zip)</label>
                                                </div>
                                                <div class="mdc-notched-outline__trailing"></div>
                                            </div>
                                        </div> 
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-6 p-2">  
                                        <div class="mdc-text-field mdc-text-field--outlined w-100">
                                            <input type="text" name="price" class="mdc-text-field__input" placeholder="What is your price range?">
                                            <div class="mdc-notched-outline mdc-notched-outline--upgraded">
                                                <div class="mdc-notched-outline__leading"></div>
                                                <div class="mdc-notched-outline__notch">
                                                    <label class="mdc-floating-label" style="">What is your price range? </label>
                                                </div>
                                                <div class="mdc-notched-outline__trailing"></div>
                                            </div>
                                        </div> 
                                    </div>
                                    <div class="col-md-12 col-xs-12 mt-3 p-2">
                                       <p>What type(s) of property are you looking for?</p>
                                       <ul class="ulc">
                                            <li>
                                                <label for="business_opportunity">
                                                    <input type="checkbox" name="property_type[]" id="business_opportunity" class="chk1" value="Business Opportunity">Single Family Home
                                                </label>
                                            </li>
                                            <li>
                                                <label for="commercial_lease">
                                                    <input type="checkbox" name="property_type[]" id="commercial_lease" class="chk1" value="Commercial Lease">Condominium
                                                </label>
                                            </li>
                                            <li>
                                                <label for="commercial_sale">
                                                    <input type="checkbox" name="property_type[]" id="commercial_sale" class="chk1" value="Commercial Sale">Townhouse
                                                </label>
                                            </li>
                                            <li>
                                                <label for="farm">
                                                    <input type="checkbox" name="property_type[]" id="farm" class="chk1" value="Farm">Income Property 
                                                </label>
                                            </li>
                                            <li>
                                                <label for="land">
                                                    <input type="checkbox" name="property_type[]" id="land" class="chk1" value="Land">Cooperative
                                                </label>
                                            </li>
                                            <li>
                                                <label for="manufactured_in_park">
                                                    <input type="checkbox" name="property_type[]" id="manufactured_in_park" class="chk1" value="Manufactured In Park">Ranch
                                                </label>
                                            </li>
                                            <li>
                                                <label for="residential">
                                                    <input type="checkbox" name="property_type[]" id="residential" class="chk1" value="Residential">Lots & Land
                                                </label>
                                            </li>
                                            <li>
                                                <label for="residential_income">
                                                    <input type="checkbox" name="property_type[]" id="residential_income" class="chk1" value="Residential Income">Retirement
                                                </label>
                                            </li>
                                            <li>
                                                <label for="residential_lease">
                                                    <input type="checkbox" name="property_type[]" id="residential_lease" class="chk1" value="Residential Lease">Vacation
                                                </label>
                                            </li>
                                            <li>
                                                <label for="any">
                                                    <input type="checkbox" name="property_type[]" id="any" class="chk1" value="any">Other
                                                </label>
                                            </li>
                                       </ul>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-4 mt-3 p-2">  
                                        <div class="mdc-text-field mdc-text-field--outlined w-100">
                                            <input type="text" name="sqft_area" class="mdc-text-field__input" placeholder="What size? (sq ft/acres) ">
                                            <div class="mdc-notched-outline mdc-notched-outline--upgraded">
                                                <div class="mdc-notched-outline__leading"></div>
                                                <div class="mdc-notched-outline__notch">
                                                    <label class="mdc-floating-label" style="">What size? (sq ft/acres) </label>
                                                </div>
                                                <div class="mdc-notched-outline__trailing"></div>
                                            </div>
                                        </div> 
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-4 mt-3 p-2 form-group"> 
                                        <select class="mdc-list-item" name="bathrooms" id="search_bathrooms" style="width: 100%;height: 50px; margin: 0px;">
                                            <option value="">Bathrooms</option>
                                            <option value="any">Any</option>
                                            <option value="1">1 Or More</option>
                                            <option value="2">2 Or More</option>
                                            <option value="3">3 Or More</option>
                                            <option value="4">4 Or More</option>
                                        </select> 
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-4 mt-3 p-2 form-group">
                                        <select class="mdc-list-item" name="bedrooms" id="search_bedrooms" style="width: 100%;height: 50px; margin: 0px;">
                                            <option value="">Bedrooms</option>
                                            <option value="any">Any</option>
                                            <option value="1">1 Or More</option>
                                            <option value="2">2 Or More</option>
                                            <option value="3">3 Or More</option>
                                            <option value="4">4 Or More</option>
                                        </select> 
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-4 mt-3 p-2">  
                                        <div class="mdc-text-field mdc-text-field--outlined w-100">
                                            <input type="text" name="near_school" class="mdc-text-field__input" placeholder="What size? (sq ft/acres) ">
                                            <div class="mdc-notched-outline mdc-notched-outline--upgraded">
                                                <div class="mdc-notched-outline__leading"></div>
                                                <div class="mdc-notched-outline__notch">
                                                    <label class="mdc-floating-label" style="">Nearby school(s) desired:</label>
                                                </div>
                                                <div class="mdc-notched-outline__trailing"></div>
                                            </div>
                                        </div> 
                                    </div>
                                    <div class="col-md-12 col-xs-12 mt-3 p-2">
                                       <p>Additional Preferences:</p>
                                       <ul class="ulc">
                                            <li>
                                                <label for="new_house">
                                                    <input type="checkbox" name="additional_preference[]" id="new_house" class="chk1" value="New House (0-5 yrs.)">New House (0-5 yrs.)
                                                </label>
                                            </li>
                                            <li>
                                                <label for="newer_house">
                                                    <input type="checkbox" name="additional_preference[]" id="newer_house" class="chk1" value="Newer House (5-15 yrs.)">Newer House (5-15 yrs.)
                                                </label>
                                            </li>
                                            <li>
                                                <label for="garage">
                                                    <input type="checkbox" name="additional_preference[]" id="garage" class="chk1" value="Garage">Garage
                                                </label>
                                            </li>
                                            <li>
                                                <label for="pool">
                                                    <input type="checkbox" name="additional_preference[]" id="pool" class="chk1" value="Pool">Pool 
                                                </label>
                                            </li>
                                            <li>
                                                <label for="large_lot">
                                                    <input type="checkbox" name="additional_preference[]" id="large_lot" class="chk1" value="Large Lot">Large Lot
                                                </label>
                                            </li>
                                            <li>
                                                <label for="manufactured_in_park">
                                                    <input type="checkbox" name="additional_preference[]" id="manufactured_in_park" class="chk1" value="New Park">Near Park
                                                </label>
                                            </li>
                                       </ul>
                                    </div>
                                                               
                                    <div class="col-xs-12 mt-3 p-2"> 
                                    <p>Other Preferences (Please Specify...)</p> 
                                        <div class="mdc-text-field mdc-text-field--outlined mdc-text-field--textarea w-100">
                                            <textarea name="other_preference" class="mdc-text-field__input" rows="5" placeholder="Other Preferences (Please Specify...)"></textarea>
                                            <div class="mdc-notched-outline mdc-notched-outline--upgraded">
                                                <div class="mdc-notched-outline__leading"></div>
                                                <div class="mdc-notched-outline__notch">
                                                    <label class="mdc-floating-label" style="">Other Preferences (Please Specify...)</label>
                                                </div>
                                                <div class="mdc-notched-outline__trailing"></div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="col-md-12 col-xs-12 mt-3 p-2">
                                       <p>How soon are you looking to purchase?</p>
                                       <ul class="ulc">
                                            <li>
                                                <label for="immediately">
                                                    <input type="radio" name="soon_looking" id="immediately" class="chk1" value="Immediately"> Immediately
                                                </label>
                                            </li>
                                            <li>
                                                <label for="withintwo">
                                                    <input type="radio" name="soon_looking" id="withintwo" class="chk1" value="Within 2 Months">Within 2 Months 
                                                </label>
                                            </li>
                                            <li>
                                                <label for="withinsix">
                                                    <input type="radio" name="soon_looking" id="withinsix" class="chk1" value="Within 6 Months ">Within 6 Months 
                                                </label>
                                            </li>
                                            <li>
                                                <label for="withinone">
                                                    <input type="radio" name="soon_looking" id="withinone" class="chk1" value="Within 1 Year">Within 1 Year 
                                                </label>
                                            </li>
                                            <li>
                                                <label for="undecided">
                                                    <input type="radio" name="soon_looking" id="undecided" class="chk1" value="Undecided">Undecided
                                                </label>
                                            </li>
                                       </ul>
                                    </div>
                                    <div class="col-md-12  col-xs-12 mt-3 p-2">
                                       <p>Will you need to sell your present home?</p>
                                       <ul class="ulc">
                                            <li>
                                                <label for="sell_your_home1">
                                                    <input type="radio" name="sell_your_home" id="sell_your_home1" class="chk1" value="Yes">Yes
                                                </label>
                                            </li>
                                            <li>
                                                <label for="sell_your_home">
                                                    <input type="radio" name="sell_your_home" id="sell_your_home" class="chk1" value="No">No
                                                </label>
                                            </li>
                                       </ul>
                                    </div>
                                    <div class="col-md-12  col-xs-12 mt-3 p-2">
                                       <p>Are you pre-qualified for a loan?</p>
                                       <ul class="ulc">
                                            <li>
                                                <label for="pre_qualified_for_loan1">
                                                    <input type="radio" name="pre_qualified_for_loan" id="pre_qualified_for_loan1" class="chk1" value="Yes">Yes
                                                </label>
                                            </li>
                                            <li>
                                                <label for="pre_qualified_for_loan">
                                                    <input type="radio" name="pre_qualified_for_loan" id="pre_qualified_for_loan" class="chk1" value="No">No
                                                </label>
                                            </li>
                                            
                                       </ul>
                                    </div>
                                    <div class="col-md-12  col-xs-12 mt-3 p-2">
                                       <p>Would you like more information about financing?</p>
                                       <ul class="ulc">
                                            <li>
                                                <label for="financing_info1">
                                                    <input type="radio" name="financing_info" id="financing_info1" class="chk1" value="Yes">Yes
                                                </label>
                                            </li>
                                            <li>
                                                <label for="financing_info">
                                                    <input type="radio" name="financing_info" id="financing_info" class="chk1" value="No">No
                                                </label>
                                            </li>
                                            
                                       </ul>
                                    </div>
                                    <div class="col-xs-12 mt-3 p-2">  
                                        <p>Enter your complete mailing address if you would like me to mail you a personalized list of homes or properties that meet your criteria: *</p> 
                                        <div class="mdc-text-field mdc-text-field--outlined mdc-text-field--textarea w-100">
                                            <textarea name="message" class="mdc-text-field__input" rows="5" placeholder="Message" required></textarea>
                                            <div class="mdc-notched-outline mdc-notched-outline--upgraded">
                                                <div class="mdc-notched-outline__leading"></div>
                                                <div class="mdc-notched-outline__notch">
                                                    <label class="mdc-floating-label" style="">Message</label>
                                                </div>
                                                <div class="mdc-notched-outline__trailing"></div>
                                            </div>
                                        </div>
                                    </div>   
                                    <div class="col-xs-12 w-100 py-3 text-center">
                                        <button class="mdc-button mdc-button--raised mdc-ripple-upgraded" type="submit">
                                            <span class="mdc-button__ripple"></span> 
                                            <span class="mdc-button__label">Submit</span> 
                                        </button>   
                                    </div> 
                                </form> 
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
<script>

</script>
@endpush