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
                                    <p class="pb-2"><a href="{{asset('/')}}">Home </a> &nbsp;/&nbsp; <span>DREAM-HOME-FINDER</span></p>
                                </div>
                               
                            </div>
                        </div>
                        
                    </div>
                    <hr>
                </section>
                
                <div class="row">
                @include('template.search')
                    <div class="col-lg-8 col-md-12 blog-pots">
                        <!-- <h4 class="listing-head ">SELLERS</h4> -->
                        <h4 class="listing-head list-header-seller">DREAM-HOME-FINDER</h4>
                        <div class="row search_by_row">
                        <div class="col-md-12 col-xs-12">
                            <h3 class='dream-home-h2'>For detailed information on buying a home or property, please complete the form below describing the type of home or property you are looking for. Someone will get back to you as quickly as possible with your results!</h3><br>
                           
                            <div class="card_go">  
                                <form action="{{ route('add-contact') }}" method="POST" class="contact-form row mt-3">
                                    @csrf                   
                                    <input type="hidden" name="route_name" value="dream-home-finder">
                                    <input type="hidden" name="route_url" value="{{\Request::url()}}">
                                    <div class="col-xs-12 col-sm-12 col-md-6 ">  
                                        <div class="mdc-text-field mdc-text-field--outlined w-100">
                                            <input type="text" name="name" class="mdc-text-field__input " placeholder="Full Name is required" required="">
                                            <div class="mdc-notched-outline mdc-notched-outline--upgraded">
                                                <div class="mdc-notched-outline__leading"></div>
                                                <div class="mdc-notched-outline__notch">
                                                    <label class="mdc-floating-label" style="">Name</label>
                                                </div>
                                                <div class="mdc-notched-outline__trailing"></div>
                                            </div>
                                        </div> 
                                    </div>  
                                    
                                      
                                    <div class="col-xs-12 col-sm-12 col-md-6 ">  
                                        <div class="mdc-text-field mdc-text-field--outlined w-100">
                                            <input type="tel" name="phone" class="mdc-text-field__input " placeholder="Phone number is required" required="">
                                            <div class="mdc-notched-outline mdc-notched-outline--upgraded">
                                                <div class="mdc-notched-outline__leading"></div>
                                                <div class="mdc-notched-outline__notch">
                                                    <label class="mdc-floating-label" style="">Phone Number</label>
                                                </div>
                                                <div class="mdc-notched-outline__trailing"></div>
                                            </div>
                                        </div> 
                                    </div> 
                                    <div class="col-xs-12 col-sm-12 col-md-6 ">  
                                        <div class="mdc-text-field mdc-text-field--outlined w-100">
                                            <input type="text" name="fax" class="mdc-text-field__input " placeholder="Fax number is required">
                                            <div class="mdc-notched-outline mdc-notched-outline--upgraded">
                                                <div class="mdc-notched-outline__leading"></div>
                                                <div class="mdc-notched-outline__notch">
                                                    <label class="mdc-floating-label" style="">Fax Number</label>
                                                </div>
                                                <div class="mdc-notched-outline__trailing"></div>
                                            </div>
                                        </div> 
                                    </div>  
                                    <div class="col-xs-12 col-sm-12 col-md-6 ">  
                                        <div class="mdc-text-field mdc-text-field--outlined w-100">
                                            <input type="email" name="email" class="mdc-text-field__input " placeholder="Email is required" required="">
                                            <div class="mdc-notched-outline mdc-notched-outline--upgraded">
                                                <div class="mdc-notched-outline__leading"></div>
                                                <div class="mdc-notched-outline__notch">
                                                    <label class="mdc-floating-label" style="">Email</label>
                                                </div>
                                                <div class="mdc-notched-outline__trailing"></div>
                                            </div>
                                        </div> 
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-6 ">  
                                        <div class="mdc-text-field mdc-text-field--outlined w-100">
                                            <input type="datetime-local" name="time_for_call" class="mdc-text-field__input " placeholder="Best time to contact you required">
                                            <div class="mdc-notched-outline mdc-notched-outline--upgraded">
                                                <div class="mdc-notched-outline__leading"></div>
                                                <div class="mdc-notched-outline__notch">
                                                    <label class="mdc-floating-label" style="">Best time to contact you</label>
                                                </div>
                                                <div class="mdc-notched-outline__trailing"></div>
                                            </div>
                                        </div> 
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-6 ">  
                                        <div class="mdc-text-field mdc-text-field--outlined w-100">
                                            <input type="text" name="location" class="mdc-text-field__input " placeholder="Where are you searching? (City, State, Zip)">
                                            <div class="mdc-notched-outline mdc-notched-outline--upgraded">
                                                <div class="mdc-notched-outline__leading"></div>
                                                <div class="mdc-notched-outline__notch">
                                                    <label class="mdc-floating-label" style="">Where are you searching? (City, State, Zip)</label>
                                                </div>
                                                <div class="mdc-notched-outline__trailing"></div>
                                            </div>
                                        </div> 
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-6 ">  
                                        <div class="mdc-text-field mdc-text-field--outlined w-100">
                                            <input type="text" name="price" class="mdc-text-field__input " placeholder="What is your price range?">
                                            <div class="mdc-notched-outline mdc-notched-outline--upgraded">
                                                <div class="mdc-notched-outline__leading"></div>
                                                <div class="mdc-notched-outline__notch">
                                                    <label class="mdc-floating-label" style="">What is your price range? </label>
                                                </div>
                                                <div class="mdc-notched-outline__trailing"></div>
                                            </div>
                                        </div> 
                                    </div>
                                    <div class="col-md-12 col-xs-12 mt-3 ">
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
                                    <div class="col-xs-12 col-sm-12 col-md-4 mt-3 ">  
                                        <div class="mdc-text-field mdc-text-field--outlined w-100 ">
                                            <input type="text" name="sqft_area" class="mdc-text-field__input " placeholder="What size? (sq ft/acres) ">
                                            <div class="mdc-notched-outline mdc-notched-outline--upgraded">
                                                <div class="mdc-notched-outline__leading"></div>
                                                <div class="mdc-notched-outline__notch">
                                                    <label class="mdc-floating-label" style="">What size? (sq ft/acres) </label>
                                                </div>
                                                <div class="mdc-notched-outline__trailing"></div>
                                            </div>
                                        </div> 
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-4 mt-3  form-group"> 
                                        <select class="mdc-list-item " name="bathrooms" id="search_bathrooms" style="width: 100%;height: 50px; margin: 0px;">
                                            <option value="">Bathrooms</option>
                                            <option value="any">Any</option>
                                            <option value="1">1 Or More</option>
                                            <option value="2">2 Or More</option>
                                            <option value="3">3 Or More</option>
                                            <option value="4">4 Or More</option>
                                        </select> 
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-4 mt-3  form-group">
                                        <select class="mdc-list-item" name="bedrooms" id="search_bedrooms" style="width: 100%;height: 50px; margin: 0px;">
                                            <option value="">Bedrooms</option>
                                            <option value="any">Any</option>
                                            <option value="1">1 Or More</option>
                                            <option value="2">2 Or More</option>
                                            <option value="3">3 Or More</option>
                                            <option value="4">4 Or More</option>
                                        </select> 
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-4 mt-3 ">  
                                        <div class="mdc-text-field mdc-text-field--outlined w-100">
                                            <input type="text" name="near_school" class="mdc-text-field__input " placeholder="What size? (sq ft/acres) ">
                                            <div class="mdc-notched-outline mdc-notched-outline--upgraded">
                                                <div class="mdc-notched-outline__leading"></div>
                                                <div class="mdc-notched-outline__notch">
                                                    <label class="mdc-floating-label" style="">Nearby school(s) desired:</label>
                                                </div>
                                                <div class="mdc-notched-outline__trailing"></div>
                                            </div>
                                        </div> 
                                    </div>
                                    <div class="col-md-12 col-xs-12 mt-3 ">
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
                                                               
                                    <div class="col-xs-12 mt-3 p-3"> 
                                    <p>Other Preferences (Please Specify...)</p> 
                                        <div class="mdc-text-field mdc-text-field--outlined mdc-text-field--textarea w-100">
                                            <textarea name="other_preference" class="mdc-text-field__input " rows="5" placeholder="Other Preferences (Please Specify...)"></textarea>
                                            <div class="mdc-notched-outline mdc-notched-outline--upgraded">
                                                <div class="mdc-notched-outline__leading"></div>
                                                <div class="mdc-notched-outline__notch">
                                                    <label class="mdc-floating-label" style="">Other Preferences (Please Specify...)</label>
                                                </div>
                                                <div class="mdc-notched-outline__trailing"></div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="col-md-12 col-xs-12 mt-3 ">
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
                                    <div class="col-md-12  col-xs-12 mt-3 ">
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
                                    <div class="col-md-12  col-xs-12 mt-3 ">
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
                                    <div class="col-md-12  col-xs-12 mt-3">
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
                                    <div class="col-xs-12 mt-3 p-3">  
                                        <p>Enter your complete mailing address if you would like me to mail you a personalized list of homes or properties that meet your criteria: *</p> 
                                        <div class="mdc-text-field mdc-text-field--outlined mdc-text-field--textarea w-100">
                                            <textarea name="message" class="mdc-text-field__input " rows="5" placeholder="Message" required></textarea>
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

