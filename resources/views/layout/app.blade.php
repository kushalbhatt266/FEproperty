<!DOCTYPE html>
<html lang="zxx">



<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="@yield('meta-description',__('Nancy EHLEN'))">
    <meta name="keywords" content="@yield('meta-keyword',__('Nancy EHLEN'))">
    <meta name="author" content="">
    <title>Nancy EHLEN</title>
    <!-- FAVICON -->
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
    
    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,300i,400,400i%7CMontserrat:600,800" rel="stylesheet">
    <!-- FONT AWESOME -->
    <!-- <link rel="stylesheet" href="{{asset('frontend/css/jquery-ui.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/font/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/fontawesome-all.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/fontawesome-5-all.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/font-awesome.min.css')}}"> -->
    <!-- ARCHIVES CSS -->
    <!-- <link rel="stylesheet" href="{{asset('frontend/css/search.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/animate.css')}}">
   
    <link rel="stylesheet" href="{{asset('frontend/css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/lightcase.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/menu.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/slick.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/styles.css')}}"> -->


    <link rel="stylesheet" href="{{asset('frontend/css/jquery-ui.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/font/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/fontawesome-all.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/fontawesome-5-all.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/animate.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/lightcase.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/menu.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/slick.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/styles.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/search.css')}}">


    @yield('head')
    



   
</head>

@yield('body')
    <!-- Wrapper -->
    <div id="wrapper">
        <!-- START SECTION HEADINGS -->
        <!-- Header Container
        ================================================== -->
       @include('layout.header')
        <div class="clearfix"></div>
        <!-- Header Container / End -->

        <!-- STAR HEADER SEARCH -->
       
        <!-- END HEADER SEARCH -->
        
        @yield('content')

        <section class="last-foot">
            <div class="container container1">
                <div class="row">
                    <div class="col-md-12 footer-top">
                        <div class="row">
                            <div class="col-md-2 footer-im">
                                <img src="{{asset('frontend/images/custom-img/footer-img.png')}}" alt="">
                            </div>
                            <div class="col-md-6  text-white">
                                    <h4 class="texts">LOOKING TO SELL YOUR HOME?</h4>
                            </div>
                            <div class="col-md-4 text-center texts1">
                                <p class="mb-0">CALL US NOW</p>
                                <i class="fa fa-phone" aria-hidden="true"></i>
                                <a href="tel:239-494-0455" style="color:#fff;"><a href="tel:239-494-0455" style="color:#fff;">239-494-0455</a></a>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- START FOOTER -->
        <footer class="first-footer rec-pro">
            <div class="top-footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-3 col-md-6">
                            <div class="netabout">
                                <a href="index.html" class="logo">
                                    <img src="{{asset('frontend/images/custom-img/h-logo.png')}}" alt="netcom">
                                </a>
                                <p>Ehlen Properties, LLC
                                To buy sell or invest call me, your Island Realtor.</p>
                            </div>
                            <div class="contactus">
                                <ul>
                                    <li>
                                        <div class="info">
                                            <i class="fa fa-map-marker" aria-hidden="true"></i>
                                            <p class="in-p">959 Periwinkle Way</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="info">
                                            <i class="fa fa-phone" aria-hidden="true"></i>
                                            <p class="in-p"><a href="tel:239-494-0455" style="color:rgba(245, 255, 255, 0.8);">239-494-0455</a></p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="info">
                                            <i class="fa fa-envelope" aria-hidden="true"></i>
                                            <p class="in-p ti"><a href="mailto:hello@nancyehlen.com" style="color:rgba(245, 255, 255, 0.8);">hello@nancyehlen.com</a></p>
                                        </div>
                                    </li>
                                </ul>
                                <ul class="netsocials mt-4">
                                    <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                    <li><a href="#"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                        </div>
                      
                        <div class="col-lg-3 col-md-6">
                            <div class="navigation">
                                <h3>Support</h3>
                                <div class="row support-1">
                                    <ul>
                                        <li><a href="{{route('terms-of-use')}}">Terms of Use</a></li>
                                        <li><a href="{{route('dmca-notice')}}">DMCA Notice</a></li>
                                        <li><a href="{{route('terms-conditions')}}">Terms</a></li>
                                        <li><a href="{{route('privacy-policy')}}">Privacy Policy</a></li>
                                        <li><a href="{{route('faqs')}}">FAQs</a></li>
                                      
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="navigation">
                                <h3>Feedback</h3>
                                <div class="row">
                                    <div class="col-md-10">
                                          <form id="fot"  method="POST" class="form"> 
                                            @csrf
                                            <input type="hidden" name="route_name" value="feedback">
                                            <input type="hidden" name="route_url" value="{{\Request::url()}}">
                                            <input type="text" name="name" placeholder="Enter Name" class="form-control" required>
                                            <br>
                                            <input type="email" name="email" placeholder="Enter Email" class="form-control">
                                            <br>
                                            <input type="tel" name="phone" placeholder="Enter Phone" class="form-control">
                                            <br>
                                            <textarea name="message" placeholder="Message Here" class="form-control" id="" cols="30" rows="4"></textarea>
                                            <br>
                                            <button type="submit" class="btn btn-success featured">Submit</button>
                                       </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="widget">
                                <h3>Location</h3>
                                <div class="twitter-widget contuct">
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3572.2780486393635!2d-82.04172502560948!3d26.44676487996108!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88db3a77bfd49891%3A0xb9ebe2f93c56aef1!2s959%20Periwinkle%20Way%2C%20Sanibel%2C%20FL%2033957%2C%20USA!5e0!3m2!1sen!2sin!4v1700474897954!5m2!1sen!2sin" width="300" height="200" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                </div>
                            </div>
                        </div>
                       
                    </div>
                </div>
            </div>
            <div class="second-footer rec-pro">
                <div class="container-fluid sd-f">
                    <p>Copyright © 2025 Nancy Ehlen - All Rights Reserved</p>
                    <p>Designed &amp; Developed by 
                        <a class="mdc-button mdc-ripple-upgraded footer-link" href="https://progmattic.com" target="_blank"> 
                            <span class="mdc-button__ripple"></span>
                            <span class="mdc-button__label p-2">Progmattic AI</span> 
                        </a>
                    </p>
                   
                </div>
            </div>
        </footer>

        <a data-scroll href="#wrapper" class="go-up"><i class="fa fa-angle-double-up" aria-hidden="true"></i></a>
        <!-- END FOOTER -->

        <!--register form -->
        <div class="login-and-register-form modal">
            <div class="main-overlay"></div>
            <div class="main-register-holder">
                <div class="main-register fl-wrap">
                    <div class="close-reg"><i class="fa fa-times"></i></div>
                    <h3>Welcome to <span>Find<strong>Houses</strong></span></h3>
                    <div class="soc-log fl-wrap">
                        <p>Login</p>
                        <a href="#" class="facebook-log"><i class="fa fa-facebook-official"></i>Log in with Facebook</a>
                        <a href="#" class="twitter-log"><i class="fa fa-twitter"></i> Log in with Twitter</a>
                    </div>
                    <div class="log-separator fl-wrap"><span>Or</span></div>
                    <div id="tabs-container">
                        <ul class="tabs-menu">
                            <li class="current"><a href="#tab-1">Login</a></li>
                            <li><a href="#tab-2">Register</a></li>
                        </ul>
                        <div class="tab">
                            <div id="tab-1" class="tab-contents">
                                <div class="custom-form">
                                    <form method="post" name="registerform">
                                        <label>Username or Email Address * </label>
                                        <input name="email" type="text" onClick="this.select()" value="">
                                        <label>Password * </label>
                                        <input name="password" type="password" onClick="this.select()" value="">
                                        <button type="submit" class="log-submit-btn"><span>Log In</span></button>
                                        <div class="clearfix"></div>
                                        <div class="filter-tags">
                                            <input id="check-a" type="checkbox" name="check">
                                            <label for="check-a">Remember me</label>
                                        </div>
                                    </form>
                                    <div class="lost_password">
                                        <a href="#">Lost Your Password?</a>
                                    </div>
                                </div>
                            </div>
                            <div class="tab">
                                <div id="tab-2" class="tab-contents">
                                    <div class="custom-form">
                                        <form method="post" name="registerform" class="main-register-form" id="main-register-form2">
                                            <label>First Name * </label>
                                            <input name="name" type="text" onClick="this.select()" value="">
                                            <label>Second Name *</label>
                                            <input name="name2" type="text" onClick="this.select()" value="">
                                            <label>Email Address *</label>
                                            <input name="email" type="text" onClick="this.select()" value="">
                                            <label>Password *</label>
                                            <input name="password" type="password" onClick="this.select()" value="">
                                            <button type="submit" class="log-submit-btn"><span>Register</span></button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--register form end -->

        <!-- START PRELOADER -->
        <!-- <div id="preloader">
            <div id="status">
                <div class="status-mes"></div>
            </div>
        </div> -->
        <!-- END PRELOADER -->

        <!-- ARCHIVES JS -->
        <script src="{{asset('frontend/js/jquery-3.5.1.min.js')}}"></script>
        <script src="{{asset('frontend/js/tether.min.js')}}"></script>
        <script src="{{asset('frontend/js/bootstrap.min.js')}}"></script>
        <script src="{{asset('frontend/js/mmenu.min.js')}}"></script>
        <script src="{{asset('frontend/js/mmenu.js')}}"></script>
        <script src="{{asset('frontend/js/slick.min.js')}}"></script>
        <script src="{{asset('frontend/js/fitvids.js')}}"></script>
        <script src="{{asset('frontend/js/smooth-scroll.min.js')}}"></script>
        <script src="{{asset('frontend/js/jquery.magnific-popup.min.js')}}"></script>
        <script src="{{asset('frontend/js/ajaxchimp.min.js')}}"></script>
        <script src="{{asset('frontend/js/newsletter.js')}}"></script>
        <script src="{{asset('frontend/js/color-switcher.js')}}"></script>
        <script src="{{asset('frontend/js/rangeSlider.js')}}"></script>
        <script src="{{asset('frontend/js/search.js')}}"></script>
        <script src="{{asset('frontend/js/searched.js')}}"></script>


        

       @yield('scripts')
       
        <!-- // Map  -->
        <link rel="stylesheet" href="{{ asset('map/screen.css') }}" />
        <script src="{{ asset('map/map.js') }}" /></script>
        <!-- // Map  -->

      


        
       @if ($message = Session::get('success'))
        <script>
            var server_snackbar = document.getElementById('server-snackbar');
            if(server_snackbar){
                const add_server_snackbar = mdc.snackbar.MDCSnackbar.attachTo(server_snackbar);
                setTimeout(() => {   
                    add_server_snackbar.open();
                }, 3000)
            }; 
        </script>
    @endif
    @if ($message = Session::get('error'))
        <script>
            var server_snackbar = document.getElementById('server-snackbar');
            if(server_snackbar){
                const add_server_snackbar = mdc.snackbar.MDCSnackbar.attachTo(server_snackbar);     
                setTimeout(() => {   
                    add_server_snackbar.open();
                }, 3000)
            }; 
        </script>
    @endif
    <script>
      var APP_URL = {!! json_encode(url('/')) !!}
       

       var MAP_API_KEY = {!! json_encode(Config::get('constant.map_api_key')) !!}

       // Property Link for Bot chat
       var houseUrl1 = "{{ route('list-search', ['direction' => 'south','location'=>'TAMPA', 'point' => 'open_house']) }}";
       var houseUrl2 = "{{ route('list-search', ['location'=>'ST PETE BEACH', 'point' => 'open_house']) }}";
       var houseUrl3 = "{{ route('list-search', ['location'=>'CLEARWATER', 'point' => 'open_house']) }}";
       var houseUrl4 = "{{ route('list-search', ['location'=>'TAMPA', 'point' => 'open_house']) }}";
       var houseUrl5 = "{{ route('list-search', ['location'=>'PALM HARBOR', 'point' => 'open_house']) }}";

       var residence1 = "{{ route('list-search', ['direction' => 'south','location'=>'TAMPA']) }}";
       var residence2 = "{{ route('list-search', ['location'=>'ST PETE BEACH']) }}";
       var residence3 = "{{ route('list-search', ['location'=>'CLEARWATER']) }}";
       var residence4 = "{{ route('list-search', ['location'=>'TAMPA']) }}";
       var residence5 = "{{ route('list-search', ['location'=>'PALM HARBOR']) }}";
    </script>
<script>
    
    $('#fot').on("submit",function(e){ 
     e.preventDefault();
     var formData=new FormData(this);
     $.ajax({
         url:"{{route('add-contact')}}",
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
   
    
 });
 </script>
    </div>
    <!-- Wrapper / End -->
</body>


<!-- Mirrored from code-theme.com/html/findhouses/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 16 Nov 2023 12:17:30 GMT -->
</html>
