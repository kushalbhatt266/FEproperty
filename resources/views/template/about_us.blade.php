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
                                    <p class="pb-2"><a href="{{asset('/')}}">Home </a> &nbsp;/&nbsp; <span>ABOUT US</span></p>
                                </div>
                               
                            </div>
                        </div>
                        
                    </div>
                    <hr>
                </section>
                
                <div class="row">
                @include('template.search')
                    <div class="col-lg-8 col-md-12 blog-pots">
                        <h4 class="listing-head">ABOUT US</h4>
                        <div class="row search_by_row">
                              
                        <div class="col-sm-12">
                            <div class="section pt-0">
                                <div class="px-0">
                                    <div class="theme-container">
                                    
                                    <p class="px-3">Nancy EHLEN is the Premier Real Estate Company in Tampa Bay. Our agents are expertly trained in every aspect of Real Estate Transactions, Mortgages, HUD, Property Management and Financing.</p>
                                    <p class="px-3">Our Approach is Simple…Our Passion is Real Estate and Our Clients.</p>
                                    <p class="px-3">We are a local owned boutique Real Estate brokerage, founded in 2014, with a straightforward approach to real estate and an old fashioned South Tampa work ethic. Our goal is to represent, market and sell the best properties in the Tampa Bay and surrounding areas. We are an experienced, progressive and trusted company with extensive knowledge of the local market and trends.</p>
                                    <p class="px-3">We believe in simply providing our clients with a fresh, professional and straightforward approach with the benefit of 20+ years combined experience. We have acquired some of the most popular investment properties in our market and enjoy helping our buyers find (and sometimes, rescue) those classic and timeless Tampa Bay area homes. We are devoted to all aspects of our profession.</p>
                                    <p class="px-3">We look forward to meeting in person one day, having a conversation, and ultimately earning your business.</p>
                                    <p class="px-3">Thank you again and please feel free to contact us anytime!</p>
                                    <p class="px-3"><b>Noah B. Bressack</b></p>
                                    <p class="px-3"><b>Broker/Partner</b></p>
                                    <p class="px-3">401 E Jackson St Suite 2340 Tampa, FL 33602</p>
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-12 col-md-12 p-3">
                                            <div class="row start-xs middle-xs">
                                               
                                            <h2 class="capitalize mkp fw-600 mx-2">Making Property Dealing Easy & Happier</h2>
                                            </div>
                                            <p class="mt-2">Let Nancy EHLEN help you find your dream home!</p>
                                            <p class="mt-2">We are passionate about delivering exceptional consumer experiences. By offering a complete suite of real estate services, we ensure that we meet our consumers’ every need. From sales and rentals, to mortgage, new developments and title insurance, we have experts in every field to guide you skillfully from beginning to the end of your real estate journey.
                                                Our outstanding track record, unique brand promise, and exceptional agent support system attract top talent, ensuring that our team of experts represents the very best in the industry.
                                            </p>
                                            <div class="text-center mt-5 btnsearch">                
                                                <a href="{{ route('list-search',['featured' => true]) }}" class="text-white" >
                                               
                                                View Properties
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    </div>
                                </div>
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

