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
@section('body') 
<body class="inner-pages sin-1 homepage-4 hd-white">
   @endsection
   @php
   $actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
   @endphp
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
                        <p class="pb-2"><a href="{{asset('/')}}">Home </a> &nbsp;/&nbsp; <span>{{$blog->title}}</span></p>
                     </div>
                  </div>
               </div>
            </div>
            <hr>
         </section>
         <div class="row">
            @include('template.search')
            <div class="col-lg-8 col-md-12 blog-pots">
               <h4 class="listing-head">{{$blog->title}}</h4>
               <div class="row search_by_row">
                  <div class="col-md-12">
                   
                     <article class="blog-post">
                        <a  class="tdh"><img src="{{config('constant.media_site')}}storage/blog-image/{{$blog->image}}" class="img-b1"></a>
                        <header class="mt-4">
                           <a  class="tdh">
                              <h2>{{$blog->title}}</h2>
                           </a>
                        </header>
                        <figure class="meta">
                           <!-- <a  class="link-icon tdh"><i class="fa fa-user"></i>&nbsp;&nbsp;{{$blog->publish}}</a> -->
                           <!-- <a  class="link-icon tdh"><i class="fa fa-calendar"></i>Posted On : {{date('d F Y - H:i', strtotime($blog->created_at))}}</a> --><br>
                           <!-- <div class="tags">
                              @foreach($blog->mapping as $data1)
                              @foreach($tags as $tag_data)
                              @if($data1->tag_id==$tag_data->id)
                              <a href="{{route('-.blog.tags',[$tag_data->id, 'tag' => str_replace(' ', '-', $tag_data->name)])}}" class="tag article tdh">{{$tag_data->name}}</a>
                              @endif
                              @endforeach
                              @endforeach
                           </div> -->
                        </figure>
                        <p class="ta1">{!! $blog->description !!}</p>
                     </article>
                     <div class="mdc-card p-3 mt-3">
                        <div class="row details">
                           <ul style="display: inline-flex;list-style: none; margin-top: 24px;">
                              <li style="margin-right:35px">
                                 <h2 class="uppercase text-center fw-500 mb-2" style="font-size: 20px;font-weight: bolder;">Share This Blog:</h2>
                              </li>
                              <li style="margin-right: 25px;"><a href="https://www.facebook.com/sharer/sharer.php?u=@php echo $actual_link; @endphp"><i class="fab fa-facebook-square fac" style="color: #ff385c;padding: 0px;font-size: 30px;"></i></a></li>
                              <li style="margin-right: 25px;"><a href="https://twitter.com/intent/tweet?url=@php echo $actual_link; @endphp"><i class="fab fa-twitter fac" style="color: #ff385c;padding: 0px;font-size: 30px;"></i></a></li>
                              <li style="margin-right: 25px;"><a href="https://www.linkedin.com/sharing/share-offsite/?url=@php echo $actual_link; @endphp"><i class="fab fa-linkedin fac" style="color: #ff385c;padding: 0px;font-size: 30px;"></i></a></li>
                           </ul>
                        </div>
                     </div>
                     <div class="mdc-card p-3 mt-3 middle-xs"> 
                        <span>ID:<span class="fw-500 mx-2">{{$blog->id}}</span></span>
                        <span>Published:<span class="fw-500 mx-2">{{date('d F Y', strtotime($blog->created_at))}}</span></span>
                        <span>Last Update:<span class="fw-500 mx-2">{{date('d F Y ', strtotime($blog->updated_at))}}</span></span> 
                     </div>
                     <div class="mdc-card p-5 mt-5">
                        <h2 class="uppercase text-center fw-500 mb-2">Leave a Comment</h2>
                        <div class="row pb-3 p-relative">
                           <div class="divider"></div>
                        </div>
                        @foreach($review as $data)
                        <div class="reviews mt-3">
                           <div class="review-item">
                              <!--img src="assets/images/avatars/avatar-1.png" alt="avatar-1" class="author-img"-->
                              <div class="review-content">
                                 <p class="d-flex mb-0">
                                    <span class="author-name">{{$data->name}}</span> 
                                 </p>
                                 <p class="text-muted fw-500 mb-2"><small>{{date('d F Y - H:i', strtotime($data->created_at))}}</small></p>
                                 <p class="text">{{$data->description}}</p>
                              </div>
                           </div>
                           @endforeach
                        </div>
                        <h3 class="uppercase mt-3">Leave your review</h3>
                        <div class="row pb-2 p-relative">
                           <div class="divider"></div>
                        </div>
                        <p class="mt-3 text-muted">Your email address will not be published. Required fields are marked *</p>
                     </div>
                     
                   
                    <div class="col-md-12">
                        <form action="" id="form1" method="post" class=" comment-form">
                            @csrf
                            <input type="hidden" name="hid" value="{{$blog->id}}">
                             <div class="row">
                                <div class="col-md-12">
                                <textarea class="mdc-text-field__input" name="description" rows="5" required placeholder="Your Review"></textarea>
                                </div>
                                <div class="col-md-6">
                                <input class="mdc-text-field__input" name="name" required placeholder="Your Name">
                                </div>
                                <div class="col-md-6">
                                <input class="mdc-text-field__input" name="email" required placeholder="Your Email">
                                </div>
                                <div class="col-md-6">
                                <input class="mdc-text-field__input" name="" id="captchap6" placeholder="Enter Captcha Here.." required>
                               
                                </div>
                                <div class="col-md-6">
                                <small class="captcha"
                                            style="
                                            text-align: center;
                                            display: inline-block;
                                            font-size: 15px;
                                            background: #ededed;
                                            padding: 8px;
                                            margin-top: 26px;pointer-events: none;user-select: none;"
                                            >     
                                        <?php $a=rand(00,99);
                                            $b=rand(0,9);
                                            $c=rand(0,9);
                                            echo $a."+".$b."-".$c;
                                            ?>                   
                                        </small>
                                </div>
                                <input type="hidden"  class="form-control captcha1" placeholder="Captcha" id="captchap7" value="<?php  echo $c=$a+$b-$c;?>">
                                <div class="col-md-12 text-center mt-4">
                                <button class="btnsearch" type="submit">
                                    Submit review
                                    </button> 
                                </div>
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
   $('#form1').on("submit",function(e){ 
    e.preventDefault();
   $cc6= $('#captchap6').val();
   $cc7= $('#captchap7').val();
   if($cc6==$cc7)
   {
    var formData=new FormData(this);
    $.ajax({
        url:"{{url('comment')}}",
        type:"POST",
        data:formData,
        dataType: 'json',
        contentType:false,
        processData:false,
        success: function(data) {
         if(data.success)
         {
           alert(data.success);
           location.reload();    
         }
        }
    });
   }
   else
   {
     $('#capp6').html("Captcha Not Matched!");
   }
   
   });
</script>
   @endsection