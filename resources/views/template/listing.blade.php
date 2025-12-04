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
                                    <p class="pb-2"><a href="index.html">Home </a> &nbsp;/&nbsp; <span>Off Market Properties</span></p>
                                </div>
                               
                            </div>
                        </div>
                        
                    </div>
                    <hr>
                </section>
                
                <div class="row">
                @include('template.search')
                    <div class="col-lg-8 col-md-12 blog-pots">
                        <h4 class="listing-head">Off Market Properties</h4>
                        <div class="row">
                             @if(count($offMarketData)>0)
                            @foreach($offMarketData as $search_data)
                            <div class="item col-lg-6 col-md-6 col-xs-12 landscapes sale">
                                <div class="project-single" data-aos="fade-up">
                                    <div class="project-inner project-head">
                                        <div class="project-bottom">
                                            <h4><a href="single-property-1.html">View Property</a><span class="category">Real Estate</span></h4>
                                        </div>
                                        <div class="homes">
                                            <!-- homes img -->
                                            <a href="single-property-1.html" class="homes-img">
                                                <div class="homes-tag button alt featured">Featured</div>
                                                <div class="homes-tag button alt sale">For Sale</div>
                                                <div class="homes-price">Family Home</div>
                                                <img src="{{asset('frontend/images/feature-properties/fp-1.jpg')}}" alt="home-1" class="img-responsive">
                                            </a>
                                        </div>
                                        <!-- <div class="button-effect">
                                            <a href="single-property-1.html" class="btn"><i class="fa fa-link"></i></a>
                                            <a href="https://www.youtube.com/watch?v=2xHQqYRcrx4" class="btn popup-video popup-youtube"><i class="fas fa-video"></i></a>
                                            <a href="single-property-2.html" class="img-poppu btn"><i class="fa fa-photo"></i></a>
                                        </div> -->
                                    </div>
                                    <!-- homes content -->
                                    <div class="homes-content">
                                        <!-- homes address -->
                                        <h3><a href="single-property-1.html">Real House Luxury Villa</a></h3>
                                        <p class="homes-address mb-3">
                                            <a href="single-property-1.html">
                                                <i class="fa fa-map-marker"></i><span>Est St, 77 - Central Park South, NYC</span>
                                            </a>
                                        </p>
                                        <!-- homes List -->
                                        <ul class="homes-list clearfix pb-3">
                                            <li class="the-icons">
                                                <i class="flaticon-bed mr-2" aria-hidden="true"></i>
                                                <span>6 Bedrooms</span>
                                            </li>
                                            <li class="the-icons">
                                                <i class="flaticon-bathtub mr-2" aria-hidden="true"></i>
                                                <span>3 Bathrooms</span>
                                            </li>
                                            <li class="the-icons">
                                                <i class="flaticon-square mr-2" aria-hidden="true"></i>
                                                <span>720 sq ft</span>
                                            </li>
                                            <li class="the-icons">
                                                <i class="flaticon-car mr-2" aria-hidden="true"></i>
                                                <span>2 Garages</span>
                                            </li>
                                        </ul>
                                        <!-- Price -->
                                        <div class="price-properties">
                                            <h3 class="title mt-3">
                                <a href="single-property-1.html">$ 230,000</a>
                                </h3>
                                            <div class="compare">
                                                <a href="#" title="Compare">
                                                    <i class="fas fa-exchange-alt"></i>
                                                </a>
                                                <a href="#" title="Share">
                                                    <i class="fas fa-share-alt"></i>
                                                </a>
                                                <a href="#" title="Favorites">
                                                    <i class="fa fa-heart-o"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="footer">
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
                           
                        </div>
                    </div>
                </div>
                <nav aria-label="..." class="agents pt-55">
                    <ul class="pagination disabled">
                        <li class="page-item disabled">
                            <a class="page-link" href="#" tabindex="-1">Previous</a>
                        </li>
                        <li class="page-item active">
                            <a class="page-link" href="#">1 <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">5</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#">Next</a>
                        </li>
                    </ul>
                </nav>
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
@endsection