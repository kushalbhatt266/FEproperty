@extends('layouts.app')
@section('title', 'Home')
@section('page-heading','Home')
@section('content')
@php
$actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
@endphp
<main>
   <div class="header-image-wrapper">
      <div class="bg" style="background-image: url('assets/images/carousel/slide-3.jpg');"></div>
      <div class="mask"></div>
      <div class="header-image-content mh-200">
         <p class="desc">{{$blog->title}}</p>
      </div>
   </div>
   <div class="px-3">
   <div class="theme-container">
   <div class="page-drawer-container mt-3">
      @include('templates.components.search')
      <div class="mdc-drawer-scrim page-sidenav-scrim"></div>
      <div class="page-sidenav-content">
         <div class="properties-wrapper row mt-0">
            <div class="page-sidenav-content">
               <div class="mdc-card middle-xs p-3">
                  <div>
                     <h2 class="uppercase" style="text-align:center">{{$blog->title}}</h2>
                  </div>
               </div>
               <article class="blog-post">
                  <a  class="tdh"><img src="{{config('constant.media_site')}}storage/blog-image/{{$blog->image}}" class="img-b1"></a>
                  <header>
                     <a  class="tdh">
                        <h2>{{$blog->title}}</h2>
                     </a>
                  </header>
                  <figure class="meta">
                     <a  class="link-icon tdh"><i class="fa fa-user"></i>{{$blog->publish}}</a>
                     <!-- <a  class="link-icon tdh"><i class="fa fa-calendar"></i>Posted On : {{date('d F Y - H:i', strtotime($blog->created_at))}}</a> --><br>
                     <div class="tags">
                        @foreach($blog->mapping as $data1)
                        @foreach($tags as $tag_data)
                        @if($data1->tag_id==$tag_data->id)
                        <a href="{{route('-.blog.tags',[$tag_data->id, 'tag' => str_replace(' ', '-', $tag_data->name)])}}" class="tag article tdh">{{$tag_data->name}}</a>
                        @endif
                        @endforeach
                        @endforeach
                     </div>
                  </figure>
                  <p class="ta1">{!! $blog->description !!}</p>
               </article>
               <div class="mdc-card p-3 mt-3">
                  <div class="row details">
                     <ul style="display: inline-flex;list-style: none;">
                        <li style="margin-right:35px">
                           <h2 class="uppercase text-center fw-500 mb-2">Share This Blog:</h2>
                        </li>
                        <li style="margin-right: 25px;"><a href="https://www.facebook.com/sharer/sharer.php?u=@php echo $actual_link; @endphp"><i class="fab fa-facebook-square fac"></i></a></li>
                        <li style="margin-right: 25px;"><a href="https://twitter.com/intent/tweet?url=@php echo $actual_link; @endphp"><i class="fab fa-twitter fac"></i></a></li>
                        <li style="margin-right: 25px;"><a href="https://www.linkedin.com/sharing/share-offsite/?url=@php echo $actual_link; @endphp"><i class="fab fa-linkedin fac"></i></a></li>
                     </ul>
                  </div>
               </div>
               <div class="mdc-card p-3 mt-3 row between-xs middle-xs"> 
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
                  <form action="" id="form1" method="post" class="row comment-form">
                     @csrf
                     <input type="hidden" name="hid" value="{{$blog->id}}">
                     <div class="col-xs-12">
                        <div class="mdc-text-field mdc-text-field--outlined mdc-text-field--textarea w-100 custom-field my-2">
                           <textarea class="mdc-text-field__input" name="description" rows="5" required></textarea>
                           <div class="mdc-notched-outline mdc-notched-outline--upgraded">
                              <div class="mdc-notched-outline__leading"></div>
                              <div class="mdc-notched-outline__notch">
                                 <label for="feedback-message" class="mdc-floating-label">Your review</label>
                              </div>
                              <div class="mdc-notched-outline__trailing"></div>
                           </div>
                        </div>
                     </div>
                     <div class="col-xs-12 col-sm-6">
                        <div class="mdc-text-field mdc-text-field--outlined w-100 custom-field my-2">
                           <input class="mdc-text-field__input" name="name" required>
                           <div class="mdc-notched-outline">
                              <div class="mdc-notched-outline__leading"></div>
                              <div class="mdc-notched-outline__notch">
                                 <label class="mdc-floating-label">Your name</label>
                              </div>
                              <div class="mdc-notched-outline__trailing"></div>
                           </div>
                        </div>
                     </div>
                     <div class="col-xs-12 col-sm-6">
                        <div class="mdc-text-field mdc-text-field--outlined w-100 custom-field my-2">
                           <input class="mdc-text-field__input" name="email" required>
                           <div class="mdc-notched-outline">
                              <div class="mdc-notched-outline__leading"></div>
                              <div class="mdc-notched-outline__notch">
                                 <label class="mdc-floating-label">Your email</label>
                              </div>
                              <div class="mdc-notched-outline__trailing"></div>
                           </div>
                        </div>
                     </div>
                     <span class="text-danger" style="color:red; position: relative;top: -5px;left:8px;" id="capp6"></span>  
                     <div class="col-xs-12 col-sm-12">
                        <div class="mdc-text-field mdc-text-field--outlined w-100 custom-field my-2">
                           <input class="mdc-text-field__input" name="" id="captchap6" placeholder="Enter Captcha Here.." required>
                           <div class="mdc-notched-outline">
                              <div class="mdc-notched-outline__leading"></div>
                              <div class="mdc-notched-outline__notch">
                                 <label class="mdc-floating-label">Enter Captcha Here..</label>
                              </div>
                              <div class="mdc-notched-outline__trailing"></div>
                           </div>
                        </div>
                     </div>
                     <small class="captcha"
                        style="
                        text-align: center;
                        display: inline-block;
                        font-size: 15px;
                        background: #ededed;
                        padding: 8px;
                        "
                        >     
                     <?php $a=rand(00,99);
                        $b=rand(0,9);
                        $c=rand(0,9);
                        echo $a."+".$b."-".$c;
                        ?>                   
                     </small>
                     <div class="row">
                        <div class="col-sm-12 col-md-12 col-12 col-lg-12 col-xl-12">
                           <input type="hidden"  class="form-control captcha1" placeholder="Captcha" id="captchap7" value="<?php  echo $c=$a+$b-$c;?>">
                        </div>
                     </div>
                     <div class="col-xs-12 text-center mt-3">
                        <button class="mdc-button mdc-button--raised" type="submit">
                        <span class="mdc-button__ripple"></span>
                        <span class="mdc-button__label">Submit review</span> 
                        </button> 
                     </div>
                  </form>
               </div>
            </div>
            <div class="mdc-drawer-scrim page-sidenav-scrim"></div>
         </div>
      </div>
   </div>
   <div class="px-3">
      <div class="theme-container">
         <div class="get-in-touch bg-primary">
            <img src="assets/images/others/operator.png" alt="operator" class="d-none d-sm-flex d-md-flex d-lg-flex d-xl-flex">        
            <div class="row between-xs middle-xs content">
               <div class="column p-3">
                  <h2>LOOKING TO SELL YOUR HOME?</h2>
                  <!-- <p class="mb-0">Lorem ipsum dolor sit, amet consectetur adipisicing elit.</p> -->
               </div>
               <div class="row start-xs middle-xs p-3">
                  <i class="material-icons mat-icon-xlg mx-2">call</i>
                  <div class="column">
                     <p class="mb-0">CALL US NOW</p>
                     <h2 class="ws-nowrap"><a href="tel:813-494-2595" style="color:#fff;">813-494-2595</a></h2>
                  </div>
               </div>
               <div class="p-3">
                  <a href="javascript:void(0);" class="mdc-button mdc-button--raised mx-3">
                  <span class="mdc-button__ripple"></span>
                  <span class="mdc-button__label">get in touch</span> 
                  </a>  
               </div>
            </div>
         </div>
      </div>
   </div>
</main>
@endsection 
@push('scripts')
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
@endpush
{{-- @if ($message = Session::get('success'))
<div class="modal fade" id="myModal">
   <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
      <div class="modal-content">
         <div class="modal-header">
            <h4 class="modal-title">Thank You</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
            </button>
         </div>
         <div class="modal-body">
            Thank you for submitting your request we will get in touch with you shortly.
         </div>
         <div class="modal-footer">
            <button type="button" class="btn btn-secondary mx-auto" data-dismiss="modal">Close</button>
         </div>
      </div>
   </div>
</div>
@endif --}}