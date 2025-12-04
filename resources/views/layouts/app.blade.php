<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="@yield('meta-description',__('Nancy EHLEN'))">
    <meta name="keywords" content="@yield('meta-keyword',__('Nancy EHLEN'))">

    <title>@yield('title',__('Nancy EHLEN'))</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/favicon.ico') }}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,500,600,700">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.css" />
    <link rel="stylesheet" href="{{ asset('css/libs/swiper.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/libs/material-components-web.min.css') }}">  
    <link rel="stylesheet" href="{{ asset('css/style.css') }}"> 
    <link rel="stylesheet" href="{{ asset('css/skins/blue.css') }}"> 
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">  
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/duotone.css" integrity="sha384-R3QzTxyukP03CMqKFe0ssp5wUvBPEyy9ZspCB+Y01fEjhMwcXixTyeot+S40+AjZ" crossorigin="anonymous"/>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"> 


    
    @yield('style')
    @stack('styles')

<style>
    .ds{
        padding: 2px 30px;
        text-decoration: auto;
    }
    .ds1{
        margin-bottom: 0px !important;
        background-color: #047c2a;
        width: 263px;
        color: #ffff;
        font-family: monospace;
    }
    .ui-autocomplete-category {
        font-weight: bold;
        padding: .2em .4em;
        margin: .8em 0 .2em;
        line-height: 1.5;
    }
    .ui-autocomplete-category {
        background-color: #dfdfdf;
    }

    /*the container must be positioned relative:*/
.autocomplete {
  position: relative;
  display: inline-block;
}

.autocomplete-items {
  position: absolute;
  border: 1px solid #d4d4d4;
  border-bottom: none;
  border-top: none;
  z-index: 99;
  /*position the autocomplete items to be the same width as the container:*/
  top: 100%;
  left: 0;
  right: 0;
}

.autocomplete-items div {
  padding: 10px;
  cursor: pointer;
  background-color: #fff; 
  border-bottom: 1px solid #d4d4d4; 
}

/*when hovering an item:*/
.autocomplete-items div:hover {
  background-color: #e9e9e9; 
}

/*when navigating through the items using the arrow keys:*/
.autocomplete-active {
  background-color: DodgerBlue !important; 
  color: #ffffff; 
}
.ui-autocomplete {
    max-height: 200px;
    overflow-y: auto;
    /* prevent horizontal scrollbar */
    overflow-x: hidden;
    /* add padding to account for vertical scrollbar */
    padding-right: 20px;
    z-index: 111111 !important;
}

.blocker{
    z-index: 99999 !important;
  }
</style>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-FXFBHE0GV9"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-FXFBHE0GV9');
</script>



</head>
<body class="mdc-theme--background">
    <div class="spinner-wrapper" id="preloader">
        <div class="spinner-container">
            <div class="spinner-outer">
                <div class="spinner">
                    <div class="left mask">
                        <div class="plane"></div>  
                    </div>            
                    <div class="top mask">
                        <div class="plane"></div>
                    </div>
                    <div class="right mask">
                        <div class="plane"></div>  
                    </div>            
                    <div class="triangle">
                        <div class="triangle-plane"></div> 
                    </div>
                    <div class="top-left mask">
                        <div class="plane"></div>
                    </div>
                    <div class="top-right mask">
                        <div class="plane"></div>
                    </div>            
                </div>
                <p class="spinner-text">Nancy EHLEN</p> 
            </div>
        </div>
    </div>
    @include('layouts.aside')
    @include('layouts.header')

    @yield('content')

    <footer>  
        <div class="px-3">
            <div class="theme-container"> 
                <!-- <div class="row center-xs middle-xs content py-5">
                    <div class="column center-xs middle-xs col-xs-12 col-lg-4 col-md-5"> 
                        <h2 class="uppercase">Subscribe our Newsletter</h2>
                        <p class="desc mb-1">Stay up to date with our latest news and properties</p>
                    </div>
                    <form action="javascript:void(0);" class="subscribe-form row col-xs-12 col-md-5">
                        <input type="text" placeholder="Your email address..." class="subscribe-input"> 
                        <button type="submit" class="mdc-button mdc-button--raised subscribe-btn">
                            <span class="mdc-button__ripple"></span>
                            <span class="mdc-button__label">Subscribe</span> 
                        </button>
                    </form>
                </div>  -->
                <div class="py-5 content"> 
                    <div class="row between-xs"> 
                        <div class="col-xs-12 col-sm-5 col-md-4 p-0"> 
                            <a class="logo" href="index.php"> 
                              <img src="{{ asset('assets/images/main_logo-textchanges-foot.png') }}" style="width: 150px;height: 150px;">
                            </a>  
                            <p class="mt-5 mb-3 desc">Nancy EHLEN is the Premier Boutique Real Estate in Tampa Bay. Our agents are expertly trained in every aspect of Real Estate Transactions including, Buying, Selling, Renting, Lease - Purchase, Foreclosures, Short Sales, Wholesale Properties, Off - Market, Assignments, Residential, Commercial, Multi Family.</p>
                            <p class="row middle-xs mt-2">
                                <i class="material-icons primary-color">location_on</i>
                                <span class="mx-2">401 E. Jackson St Suite 2340 Tampa, FL 33602</span>
                            </p>
                            <p class="row middle-xs mt-1" style="margin-bottom:0px;">     <i class="material-icons primary-color">call</i><span class="mx-2">Noah Bressack, Licensed Real Estate Broker</span>
                            </p>
                            <p class="row middle-xs mt-1">       
                               <i class="material-icons primary-color d-icon-n" style="visibility: hidden;">call</i> <span class="mx-2">LIC # BK3406339 , REC # CQ1055270 <a href="tel:813-494-2595" style="color:#fff;">813-494-2595</a></span>
                            </p>
                            <p class="row middle-xs mt-1">
                                <i class="material-icons primary-color">call</i> 
                                <span class="mx-2"> Maxwell <a href="tel:727-641-2686" style="color:#fff;">727-641-2686</a></span>
                            </p>
                            <p class="row middle-xs mt-1"> 
                                <i class="material-icons primary-color">mail_outline</i> 
                                <span class="mx-2"><a href="mailto:sales@feelgreatrealestate.com" style="color:#fff;">sales@feelgreatrealestate.com</a></span>
                            </p>
                            <p class="row middle-xs mt-1"> 
                                <i class="material-icons primary-color">schedule</i> 
                                <span class="mx-2">Mon - Sun : 9:00AM - 9:00PM</span>
                            </p> 
                            <div class="row start-xs middle-xs desc">
                                <a href="https://www.facebook.com/FeelGreatRealEstate/" target="blank" class="social-icon">
                                    <svg class="material-icons mat-icon-lg" viewBox="0 0 24 24">
                                        <path d="M5,3H19A2,2 0 0,1 21,5V19A2,2 0 0,1 19,21H5A2,2 0 0,1 3,19V5A2,2 0 0,1 5,3M18,5H15.5A3.5,3.5 0 0,0 12,8.5V11H10V14H12V21H15V14H18V11H15V9A1,1 0 0,1 16,8H18V5Z" />
                                    </svg>
                                </a>
                                <!-- <a href="https://twitter.com/" target="blank" class="social-icon">
                                    <svg class="material-icons mat-icon-lg" viewBox="0 0 24 24">
                                        <path d="M5,3H19A2,2 0 0,1 21,5V19A2,2 0 0,1 19,21H5A2,2 0 0,1 3,19V5A2,2 0 0,1 5,3M17.71,9.33C18.19,8.93 18.75,8.45 19,7.92C18.59,8.13 18.1,8.26 17.56,8.33C18.06,7.97 18.47,7.5 18.68,6.86C18.16,7.14 17.63,7.38 16.97,7.5C15.42,5.63 11.71,7.15 12.37,9.95C9.76,9.79 8.17,8.61 6.85,7.16C6.1,8.38 6.75,10.23 7.64,10.74C7.18,10.71 6.83,10.57 6.5,10.41C6.54,11.95 7.39,12.69 8.58,13.09C8.22,13.16 7.82,13.18 7.44,13.12C7.81,14.19 8.58,14.86 9.9,15C9,15.76 7.34,16.29 6,16.08C7.15,16.81 8.46,17.39 10.28,17.31C14.69,17.11 17.64,13.95 17.71,9.33Z" />
                                    </svg> 
                                </a>
                                <a href="https://www.linkedin.com/" target="blank" class="social-icon"> 
                                    <svg class="material-icons mat-icon-lg" viewBox="0 0 24 24">
                                        <path d="M19,3A2,2 0 0,1 21,5V19A2,2 0 0,1 19,21H5A2,2 0 0,1 3,19V5A2,2 0 0,1 5,3H19M18.5,18.5V13.2A3.26,3.26 0 0,0 15.24,9.94C14.39,9.94 13.4,10.46 12.92,11.24V10.13H10.13V18.5H12.92V13.57C12.92,12.8 13.54,12.17 14.31,12.17A1.4,1.4 0 0,1 15.71,13.57V18.5H18.5M6.88,8.56A1.68,1.68 0 0,0 8.56,6.88C8.56,5.95 7.81,5.19 6.88,5.19A1.69,1.69 0 0,0 5.19,6.88C5.19,7.81 5.95,8.56 6.88,8.56M8.27,18.5V10.13H5.5V18.5H8.27Z" />
                                    </svg>
                                </a>
                                <a href="https://plus.google.com/" target="blank" class="social-icon"> 
                                    <svg class="material-icons mat-icon-lg" viewBox="0 0 24 24">
                                        <path d="M5,3H19A2,2 0 0,1 21,5V19A2,2 0 0,1 19,21H5A2,2 0 0,1 3,19V5A2,2 0 0,1 5,3M19.5,12H18V10.5H17V12H15.5V13H17V14.5H18V13H19.5V12M9.65,11.36V12.9H12.22C12.09,13.54 11.45,14.83 9.65,14.83C8.11,14.83 6.89,13.54 6.89,12C6.89,10.46 8.11,9.17 9.65,9.17C10.55,9.17 11.13,9.56 11.45,9.88L12.67,8.72C11.9,7.95 10.87,7.5 9.65,7.5C7.14,7.5 5.15,9.5 5.15,12C5.15,14.5 7.14,16.5 9.65,16.5C12.22,16.5 13.96,14.7 13.96,12.13C13.96,11.81 13.96,11.61 13.89,11.36H9.65Z" />
                                    </svg>
                                </a> -->
                            </div>  
                        </div> 
                        <div class="col-xs-12 col-sm-5 col-md-3 p-0 feedback"> 
                            <h2 class="uppercase">Feedback</h2>
                            <p class="desc">We want your feedback.</p>
                            <form id="fot"  method="POST" class="feedback-form pt-2"> 
                            @csrf
                            <input type="hidden" name="route_name" value="feedback">
                            <input type="hidden" name="route_url" value="{{\Request::url()}}">
                                <div class="mb-3 mdc-text-field mdc-text-field--outlined w-100">
                                    <input type="text" name="name" class="mdc-text-field__input" placeholder="Name is required" required>
                                    <div class="mdc-notched-outline">
                                        <div class="mdc-notched-outline__leading"></div>
                                        <div class="mdc-notched-outline__notch">
                                            <label class="mdc-floating-label">Name</label>
                                        </div>
                                        <div class="mdc-notched-outline__trailing"></div>
                                    </div>
                                </div> 
                              
                                <div class=" mb-3 mdc-text-field mdc-text-field--outlined w-100 mt-1">
                                  <input type="email" name="email" class="mdc-text-field__input" placeholder="Email is required" required>
                                  <div class="mdc-notched-outline">
                                      <div class="mdc-notched-outline__leading"></div>
                                      <div class="mdc-notched-outline__notch">
                                          <label class="mdc-floating-label">Email</label>
                                      </div>
                                      <div class="mdc-notched-outline__trailing"></div>
                                  </div>
                              </div>
                               <div class="mdc-text-field mdc-text-field--outlined w-100 mt-1">
                                  <input type="tel" name="phone" class="mdc-text-field__input" placeholder="Phone is required" required>
                                  <div class="mdc-notched-outline">
                                      <div class="mdc-notched-outline__leading"></div>
                                      <div class="mdc-notched-outline__notch">
                                          <label class="mdc-floating-label">Phone</label>
                                      </div>
                                      <div class="mdc-notched-outline__trailing"></div>
                                  </div>
                              </div>  
                                <div class="mdc-text-field mdc-text-field--outlined mdc-text-field--textarea w-100 mt-4">
                                    <textarea name="message" id="feedback-message" class="mdc-text-field__input" rows="3" placeholder="Message type here..."></textarea>
                                    <div class="mdc-notched-outline mdc-notched-outline--upgraded">
                                        <div class="mdc-notched-outline__leading"></div>
                                        <div class="mdc-notched-outline__notch">
                                            <label for="feedback-message" class="mdc-floating-label">Message us</label>
                                        </div>
                                        <div class="mdc-notched-outline__trailing"></div>
                                    </div>
                                </div> 
                                <span class="text-danger" style="color:red; position: relative;top:6px;" id="capp5"></span>  
                                <div class="mdc-text-field mdc-text-field--outlined w-100 mt-4">
                                  <input type="text" id="captchap4" class="mdc-text-field__input" placeholder="" required>
                                  <div class="mdc-notched-outline">
                                      <div class="mdc-notched-outline__leading"></div>
                                      <div class="mdc-notched-outline__notch">
                                          <label class="mdc-floating-label">Enter Captcha Here..</label>
                                      </div>
                                      <div class="mdc-notched-outline__trailing"></div>
                                  </div>
                              </div>
                              <small class="captcha mt-2"
                                style="
                                text-align: center;
                                display: inline-block;
                                font-size: 16px;
                                background: #ffffff;
                                padding: 8px;
                                color: #000!important;
                                font-weight: 600;
                                "
                                >     
                                 <?php 
                                    $str_result = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijk@#$mnopqrstuvwxyz';
                                    $cap = substr(str_shuffle($str_result),
                                    0, 6);
                                    echo $cap
                                 ?>                   
                            </small>
                            <div class="row">
                                <div class="col-sm-12 col-md-12 col-12 col-lg-12 col-xl-12">
                                    <input type="hidden"  class="form-control captcha1" 
                                    placeholder="Captcha" id="captchap5" value="{{$cap}}">
                                </div>
                            </div>     
                                <div class="w-100 text-center mt-4">
                                    <button type="submit" class="mdc-button mdc-button--raised">
                                        <span class="mdc-button__ripple"></span>
                                        <span class="mdc-button__label">Submit</span> 
                                    </button> 
                                </div> 
                            </form> 
                        </div> 
                        <div class="col-xs-12 col-md-4 p-0 location"> 
                            <h2 class="uppercase mb-3">Our location</h2>
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d881.1297031122645!2d-82.45618275492484!3d27.94739317030869!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88c2c566249ce3fd%3A0xc4f7fde5939af081!2sFeel%20Great%20Real%20Estate%20LLC!5e0!3m2!1sen!2sin!4v1623323253804!5m2!1sen!2sin" width="100%" height="310" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                        </div>
                    </div>  
                </div> 
                <div class="row between-xs middle-xs copyright">
                    <p>Copyright © 2023 Nancy EHLEN - All Rights Reserved</p>
                    <p>Designed & Developed by 
                        <a class="mdc-button" href="https://wamexs.com/" target="_blank"> 
                            <span class="mdc-button__ripple"></span>
                            <span class="mdc-button__label">WEB & MARKETING EXPERTS LLC</span> 
                        </a>
                    </p>
                </div> 
            </div>
        </div>      
    </footer> 

    <div id="favorites-snackbar" class="mdc-snackbar">
        <div class="mdc-snackbar__surface">
            <div class="mdc-snackbar__label">The property has been added to favorites.</div>
            <div class="mdc-snackbar__actions">
                <!-- <button type="button" class="mdc-button mdc-snackbar__action">
                <div class="mdc-button__ripple"></div>
                <span class="mdc-button__label">
                    <i class="material-icons warn-color">close</i>
                </span>
                </button> -->
            </div>
        </div>
    </div> 
    @if (Session::get('success') || Session::get('error'))
        @php $message = Session::get('success')?Session::get('success'):Session::get('error'); @endphp
        <div id="server-snackbar" class="mdc-snackbar">
            <div class="mdc-snackbar__surface">
                <div class="mdc-snackbar__label">{{ $message }}</div>
                <!-- <div class="mdc-snackbar__actions">
                    <button type="button" class="mdc-button mdc-snackbar__action">
                    <div class="mdc-button__ripple"></div>
                    <span class="mdc-button__label">
                        <i class="material-icons warn-color">close</i>
                    </span>
                    </button>
                </div> -->
            </div>
        </div> 
    @endif

    @include('layouts.promotion_modal')
    @include('templates.modal.modal')
    <div id="back-to-top"><i class="material-icons">arrow_upward</i></div>
    <script src="{{ asset('js/libs/jquery.min.js') }}"></script> 
    <script src="{{ asset('js/libs/material-components-web.min.js') }}"></script> 
    <script src="{{ asset('js/libs/swiper.min.js') }}"></script> 
    <script src="{{ asset('js/scripts.js') }}"></script>  
    <!-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA1rF9bttCxRmsNdZYjW7FzIoyrul5jb-s&amp;callback=initMap" async defer></script> -->

    <!-- Toaster -->
    <link href="https://codeseven.github.io/toastr/build/toastr.min.css" rel="stylesheet" type="text/css" />
    <script src="https://www.jqueryscript.net/demo/Highly-Customizable-jQuery-Toast-Message-Plugin-Toastr/toastr.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/crypto-js/3.1.2/rollups/aes.js"></script>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script>
    toastr.options = {
          "closeButton": false,
          "debug": false,
          "newestOnTop": false,
          "progressBar": false,
          "positionClass": "toast-bottom-right",
          "preventDuplicates": false,
          "onclick": null,
          "showDuration": "300",
          "hideDuration": "1000",
          "timeOut": "5000",
          "extendedTimeOut": "1000",
          "showEasing": "swing",
          "hideEasing": "linear",
          "showMethod": "fadeIn",
          "hideMethod": "fadeOut"
        }
    </script>
    <!-- jQuery Modal -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js"></script>
    <script src="{{ asset('js/custom.js') }}"></script> 
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
       // window.addEventListener("beforeunload", function (e) {        
       //  alert('ss');
       //    // $.ajax({
       //    //     type: "POST",
       //    //     url: startTimerUrl,
       //    //     async: false           
       //    // });
       //    return;
       //  });

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
    <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
    <!-- Leaflet -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A==" crossorigin=""/>
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js" integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA==" crossorigin=""></script>
    <link rel="stylesheet" href="{{ asset('map/screen.css') }}" />

    <link rel="stylesheet" href="{{ asset('map/dist/MarkerCluster.css') }}" />
    <link rel="stylesheet" href="{{ asset('map/dist/MarkerCluster.Default.css') }}" />
    <script src="{{ asset('map/dist/leaflet.markercluster-src.js') }}"></script>
    <script src="{{ asset('map/realworld.388.js') }}"></script>
    <script src="{{ asset('map/map.js') }}" /></script>
    <script>
    
       $('#fot').on("submit",function(e){ 
        e.preventDefault();
       $c4= $('#captchap4').val();
       $c5= $('#captchap5').val();
       if($c4==$c5)
       {
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
       }
       else
       {
         $('#capp5').html("Captcha Not Matched!");
       }
       
    });
    </script>
    @stack('scripts')
    @yield('script')
    @include('chat-bot.chat-bot')
</body>
 </html>