@extends('layouts.app')
@section('title', 'Contact  Us')
@section('page-heading','Contact  Us')
@push('styles')
@endpush
@section('content')
<main class="content-offset-to-top mb-5"> 
    <div class="header-image-wrapper">
        <div class="bg" style="background-image: url('assets/images/others/contact.jpg');"></div>
        <div class="mask"></div>            
        <div class="header-image-content offset-bottom">
            <h1 class="title">Contact Us</h1>
            <p class="desc">Have Questions? We Have Answers!</p> 
        </div>
    </div> 
    <div class="px-3">
      <div class="theme-container">
         <div class="mdc-card main-content-header pt-0">
            <div class="row">
               <div class="col-sm-3 mt-5">
                  @include('templates.components.search')
               </div>
               <div class="col-sm-9 mt-5">
                   <div class="row around-xs">
                    <div class="col-xs-12 col-sm-4">
                        <div class="column center-xs middle-xs text-center">
                            <i class="material-icons mat-icon-lg primary-color">home</i>
                            <h3 class="primary-color py-1">ADDRESS :</h3>
                            <span class="text-muted fw-500">401 E. Jackson St Suite 2340 Tampa, FL 33602</span>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-4">
                        <div class="column center-xs middle-xs text-center">
                            <i class="material-icons mat-icon-lg primary-color">call</i>
                            <h3 class="primary-color py-1">PHONES :</h3>
                            <span class="text-muted fw-500"><a href="tel:813-494-2595" style="color:#0000008a;">813-494-2595</a></span>
                            <span class="text-muted fw-500"><a href="tel:727-641-2686" style="color:#0000008a;">727-641-2686</a></span>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-4">
                        <div class="column center-xs middle-xs text-center">
                            <i class="material-icons mat-icon-lg primary-color">mail_outline</i>
                            <h3 class="primary-color py-1">E-MAIL :</h3>
                            <span class="text-muted fw-500"><a href="mailto:sales@feelgreatrealestate.com" style="color:#0000008a;">sales@feelgreatrealestate.com</a></span>
                             
                        </div>
                    </div> 
                    <div class="col-xs-12 mt-3 px-3 p-relative">
                        <div class="divider w-100"></div>
                    </div> 
                    <h3 class="w-100 text-center py-3">CONTACT US</h3> 
                    <!-- <form id="contact" action="{{ route('add-contact') }}" method="POST" class="contact-form row"> -->
                        
                    <form id="contact" action="" method="POST" class="contact-form row">
                    <caption>
                    <div class="leas" style="margin-left:10px;">
                            <ul>
                                <li>Complete this short survey to be entered to win our monthly Raffle!</li>
                                <li>Do you 
                                <input type="radio" name="rent" value="rent" checked> Rent
                                or
                                <input type="radio" name="rent" value="own"> Own ?
                                </li>
                                <li>Are you looking to move within:
                                <input type="radio" name="looking" value="3" checked> 3 months
                                <input type="radio" name="looking" value="6"> 6 months
                                <input type="radio" name="looking" value="1"> 1 year ?
                                </li>
                                <li>Are you open to speaking with a Realtor to discuss your goals and options with no obligations?
                                <input type="radio" name="obligations" value="1" checked> Yes
                                    <input type="radio" name="obligations" value="2"> No
                                </li>
                            </ul>
                        </div>
                    </caption>
                    @csrf
                    <input type="hidden" name="route_name" value="contact_us">
                    <input type="hidden" name="route_url" value="{{\Request::url()}}">
                        <div class="col-xs-12 col-sm-12 col-md-4 p-2">  
                            <div class="mdc-text-field mdc-text-field--outlined w-100">
                                <input type="text" name="name" class="mdc-text-field__input" placeholder="Name is required" required>
                                <div class="mdc-notched-outline">
                                    <div class="mdc-notched-outline__leading"></div>
                                    <div class="mdc-notched-outline__notch">
                                        <label class="mdc-floating-label">Name</label>
                                    </div>
                                    <div class="mdc-notched-outline__trailing"></div>
                                </div>
                            </div> 
                        </div>  
                        <div class="col-xs-12 col-sm-12 col-md-4 p-2">  
                            <div class="mdc-text-field mdc-text-field--outlined w-100">
                                <input type="email" name="email" class="mdc-text-field__input" placeholder="Email is required" required>
                                <div class="mdc-notched-outline">
                                    <div class="mdc-notched-outline__leading"></div>
                                    <div class="mdc-notched-outline__notch">
                                        <label class="mdc-floating-label">Email</label>
                                    </div>
                                    <div class="mdc-notched-outline__trailing"></div>
                                </div>
                            </div> 
                        </div>  
                        <div class="col-xs-12 col-sm-12 col-md-4 p-2">  
                            <div class="mdc-text-field mdc-text-field--outlined w-100">
                                <input type="tel" name="phone" class="mdc-text-field__input" placeholder="Phone is required" required>
                                <div class="mdc-notched-outline">
                                    <div class="mdc-notched-outline__leading"></div>
                                    <div class="mdc-notched-outline__notch">
                                        <label class="mdc-floating-label">Phone</label>
                                    </div>
                                    <div class="mdc-notched-outline__trailing"></div>
                                </div>
                            </div> 
                        </div>  
                        <div class="col-xs-12 p-2">  
                            <div class="mdc-text-field mdc-text-field--outlined mdc-text-field--textarea w-100">
                                <textarea name="message" class="mdc-text-field__input" rows="5" placeholder="Message is required" required></textarea>
                                <div class="mdc-notched-outline mdc-notched-outline--upgraded">
                                    <div class="mdc-notched-outline__leading"></div>
                                    <div class="mdc-notched-outline__notch">
                                        <label class="mdc-floating-label">Message</label>
                                    </div>
                                    <div class="mdc-notched-outline__trailing"></div>
                                </div>
                            </div>
                        </div> 
                        <div class="col-xs-8 col-sm-12 col-md-8 p-2">
                            <span class="text-danger" style="color:red; position: relative;top: -10px;" id="capp"></span>  
                            <div class="mdc-text-field mdc-text-field--outlined w-100">
                                <input type="tel"  class="mdc-text-field__input" id="captchap" placeholder="Enter Captcha Here.." required>
                                <div class="mdc-notched-outline">
                                    <div class="mdc-notched-outline__leading"></div>
                                    <div class="mdc-notched-outline__notch">
                                        <label class="mdc-floating-label">Enter Captcha Here..</label>
                                    </div>
                                    <div class="mdc-notched-outline__trailing"></div>
                                </div>
                            </div> 
                        </div>  
                        <div class="col-xs-4 col-sm-12 col-md-4 p-2">
                        <small class="captcha"
                            style="
                            text-align: center;
                            display: inline-block;
                            font-size: 15px;
                            background: #ededed;
                            padding: 12px 20px;
                            margin-left: 10px;
                            "
                            >     
                               <?php 
                                     $str_result = '0123456789ABCDEFGHJKLMNOPQRSTUVWXYZabcdefghijk@#$mnopqrstuvwxyz';
                                    $cap = substr(str_shuffle($str_result),
                                     0, 6);
                                echo $cap;
                            ?>                  
                        </small>
                        </div>  
     
                      
					    <div class="row">
							<div class="col-sm-12 col-md-12 col-12 col-lg-12 col-xl-12">
								<input type="hidden"  class="form-control captcha1" placeholder="Captcha" id="captchap1" 
								value="{{$cap}}">
							</div>
                        </div>      
                        <div class="col-xs-12 w-100 py-3 text-center">
                            <button class="mdc-button mdc-button--raised" type="submit">
                                <span class="mdc-button__ripple"></span> 
                                <span class="mdc-button__label">Submit</span> 
                            </button>   
                        </div> 
                    </form>  
                </div> 
                <div class="mt-5">
                    <div id="contact-map"></div>
                </div>  
               </div>
            </div>
         </div>
      </div>
   </div>  
</main> 
@endsection
@push('scripts')
    <script>
    
       $('#contact').on("submit",function(e){ 
        e.preventDefault();
       $c= $('#captchap').val();
       $c1= $('#captchap1').val();
       if($c==$c1)
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
         $('#capp').html("Captcha Not Matched!");
       }
       
    });
    </script>
@endpush