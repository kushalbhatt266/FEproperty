@extends('layouts.app')
@section('title', 'Free Market Analysis')
@section('page-heading','Free Market Analysis')
@push('styles')

@endpush
@section('content')
<main> 
    <div class="header-image-wrapper">
        <div class="bg" style="background-image: url('assets/images/carousel/slide-3.jpg');"></div>
        <div class="mask"></div>            
        <div class="header-image-content mh-200"> 
            <p class="desc">Free Market Analysis</p> 
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
                           <h1 class="section-title" style="text-align: center;">Free Market Analysis</h1>
                        </div>
                    </div>
                    <form id="sell" method="POST" class="contact-form row mt-3">
                        @csrf
                    <div class="leas">
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
                            <li>Are you open to speaking with a Realtor to
                                 discuss your goals and options with no obligations?
                                 <input type="radio" name="obligations" value="1" checked> Yes
                                    <input type="radio" name="obligations" value="2"> No
                                </li>
                        </ul>
                    </div>
                    <div class="card_go">
                        <div class="row">
                        <!-- <form action="{{ route('add-contact') }}" method="POST" class="contact-form row mt-3"> -->
                       
                        <input type="hidden" name="route_name" value="free_market_analysis">
                        <input type="hidden" name="route_url" value="{{\Request::url()}}">
                        <div class="col-xs-12 col-sm-12 col-md-4 p-2">  
                            <div class="mdc-text-field mdc-text-field--outlined w-100">
                                <input type="text" name="name" class="mdc-text-field__input" placeholder="Name is required" required="">
                                <div class="mdc-notched-outline mdc-notched-outline--upgraded">
                                    <div class="mdc-notched-outline__leading"></div>
                                    <div class="mdc-notched-outline__notch">
                                        <label class="mdc-floating-label" style="">Name</label>
                                    </div>
                                    <div class="mdc-notched-outline__trailing"></div>
                                </div>
                            </div> 
                        </div>  
                        <div class="col-xs-12 col-sm-12 col-md-4 p-2">  
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
                        <div class="col-xs-12 col-sm-12 col-md-4 p-2">  
                            <div class="mdc-text-field mdc-text-field--outlined w-100">
                                <input type="tel" name="phone" class="mdc-text-field__input" placeholder="Phone is required" required="">
                                <div class="mdc-notched-outline mdc-notched-outline--upgraded">
                                    <div class="mdc-notched-outline__leading"></div>
                                    <div class="mdc-notched-outline__notch">
                                        <label class="mdc-floating-label" style="">Phone</label>
                                    </div>
                                    <div class="mdc-notched-outline__trailing"></div>
                                </div>
                            </div> 
                        </div>  
                        <div class="col-xs-12 p-2">  
                            <div class="mdc-text-field mdc-text-field--outlined mdc-text-field--textarea w-100">
                                <textarea name="message" class="mdc-text-field__input" rows="5" placeholder="Property Address: (Street Address, City, State, Zip) *" required=""></textarea>
                                <div class="mdc-notched-outline mdc-notched-outline--upgraded">
                                    <div class="mdc-notched-outline__leading"></div>
                                    <div class="mdc-notched-outline__notch">
                                        <label class="mdc-floating-label" style="">Property Address: (Street Address, City, State, Zip) *</label>
                                    </div>
                                    <div class="mdc-notched-outline__trailing"></div>
                                </div>
                            </div>
                        </div>  
                        <div class="col-xs-8 col-sm-12 col-md-8 p-2">
                            <span class="text-danger" style="color:red; position: relative;top: -10px;" id="capp2"></span>  
                            <div class="mdc-text-field mdc-text-field--outlined w-100">
                                <input type="text"  class="mdc-text-field__input captchap16" id="" placeholder="Captcha is required" required>
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
                                                                $str_result = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijk@#$mnopqrstuvwxyz';
                                                                $cap = substr(str_shuffle($str_result),
                                                                            0, 6);
                                                                            echo $cap
                                                            ?>                  
                        </small>
                        </div>  
     
                       
					    <div class="row">
							<div class="col-sm-12 col-md-12 col-12 col-lg-12 col-xl-12">
								<input type="hidden"  class="form-control captchap15"
								placeholder="Captcha"  value="{{$cap}}">
							</div>
                        </div>       
                        <div class="col-xs-12 w-100 py-3 text-center">
                            <button class="mdc-button mdc-button--raised mdc-ripple-upgraded" type="submit">
                                <span class="mdc-button__ripple"></span> 
                                <span class="mdc-button__label">Submit</span> 
                            </button>   
                        </div> 
                   
                     </div>
                  </div>
                  </form>
                    </div>
            </div>
        </div>
    </div>  
    @include('templates.components.call_us')
</main> 
@endsection
@push('scripts')
<script>
       $('#sell').on("submit",function(e){ 
        e.preventDefault();
       $cc16= $('.captchap16').val();
       
       $cc15= $('.captchap15').val();
       if($cc16==$cc15)
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
         $('#capp2').html("Captcha Not Matched!");
       }
       
    });
    </script>
@endpush