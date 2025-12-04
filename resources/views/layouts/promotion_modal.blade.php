@push('styles')
<style>
  .blocker{
    z-index: 99999 !important;
  }
</style>
@endpush
<?php $data = get_promotionData(); ?>
<div id="ex1" class="modal">
  <p>{{!empty($data['title'])?$data['title']:''}}</p>
  <img src="{{config('constant.media_site').(!empty($data['image_path'])?$data['image_path']:'')}}">
  <!-- <a href="#" rel="modal:close">Close</a> -->
</div>
@if($data)
<!-- Link to open the modal -->
<p><a href="#ex1" rel="modal:open" id="open_promotion_modal" style="display:none;">Open Modal</a></p>
@endif


<div id="ex2" class="modal">
  <div class="row around-xs">
      <h3 class="w-100 text-center py-3">Contact US for Free Consultation</h3> 
      <form id="gett" method="POST" class="contact-form row">
      @csrf 
      <div class="leas" style="margin-left: 10px;">
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
           <li>Are you open to speaking with a Realtor to discuss your goals and options witobligations?
           <input type="radio" name="obligations" value="1" checked> Yes
                                    <input type="radio" name="obligations" value="2"> No
           </li>
        </ul>
      </div>
    
          <input type="hidden" name="route_name" value="popup">
          <input type="hidden" name="route_url" value="{{\Request::url()}}">
          <div class="col-xs-12 col-sm-12 col-md-12 p-2">  
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
          <div class="col-xs-12 col-sm-12 col-md-12 p-2">  
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
          <div class="col-xs-12 col-sm-12 col-md-12 p-2">  
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
                  <textarea name="message" class="mdc-text-field__input" rows="2" placeholder="Message type here..." required></textarea>
                  <div class="mdc-notched-outline mdc-notched-outline--upgraded">
                      <div class="mdc-notched-outline__leading"></div>
                      <div class="mdc-notched-outline__notch">
                          <label class="mdc-floating-label">Message</label>
                      </div>
                      <div class="mdc-notched-outline__trailing"></div>
                  </div>
              </div>
          </div>
          <span class="text-danger" style="color:red; position: relative;top: -10px;" id="capp8"></span>   
          <div class="col-xs-8 col-sm-12 col-md-8 p-2">  
              <div class="mdc-text-field mdc-text-field--outlined w-100">
                  <input type="tel" id="captchap8" class="mdc-text-field__input" placeholder="Enter Captcha Here.." required>
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
                                                                            echo $cap
                                                            ?>                
                        </small>
          </div>  
                     
					    <div class="row">
							<div class="col-sm-12 col-md-12 col-12 col-lg-12 col-xl-12">
								<input type="hidden"  class="form-control captcha1" 
								placeholder="Captcha" id="captchap9" value="{{$cap}}">
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
</div>
@if (Cookie::get('intentform') == null)
<p><a href="#ex2" rel="modal:open" class="exit" id="open_intent_modal" style="display:none;">Open Modal</a></p>
@endif

@push('scripts')
<script>
    
       $('#gett').on("submit",function(e){ 
        e.preventDefault();
       $cc8= $('#captchap8').val();
       $cc9= $('#captchap9').val();
       if($cc8==$cc9)
       {
        var formData=new FormData(this);
        $.ajax({
            url:"{{route('add-contact') }}",
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
         $('#capp8').html("Captcha Not Matched!");
       }
       
    });
    </script>
<script>
    
  setTimeout( function() {$('#open_promotion_modal').trigger('click'); },5000);
  // var popit = true;
  //  window.onbeforeunload = function() { 
  //       if(popit == true) {
  //            popit = false;
  //            $('#open_intent_modal').trigger('click');
  //            return "Are you sure you want to leave?"; 
  //       }
  //  }
  // $(window).bind('beforeunload', function(e) {
  //     $('#open_intent_modal').trigger('click');
  //     e.preventDefault();
  //     return false; // just in case.. 
  // });

  // setTimeout( function() {$('#open_intent_modal').trigger('click'); },10000);
  const show = () => {
    const element = document.querySelector("#ex2")
    // element.style.visibility = "visible"
    // element.style.opacity = "1"
    // element.style.transform = "scale(1)"
    // element.style.transition = "0.4s, opacity 0.4s"
  }
  function showIntentModal(){
    document.addEventListener("DOMContentLoaded", () => {
      document.addEventListener("mouseout", (event) => {
        if (!event.toElement && !event.relatedTarget) {
          setTimeout(() => {
            // $('#open_intent_modal').trigger('click');
          }, 500)
        }
      })
    })
  }

  let timerOn = true;
  timer(120);
    function timer(remaining) {
        var m = Math.floor(remaining / 60);
        var s = remaining % 60;
      
        m = m < 10 ? '0' + m : m;
        s = s < 10 ? '0' + s : s;
        remaining -= 1;
      
        if(remaining >= 0 && timerOn) {
          showIntentModal();
          setTimeout(function() {
              timer(remaining);
          }, 1000);
          return;
        }
        // delete window.showIntentModal;
        $('a#open_intent_modal').remove();
    }
</script>
@endpush