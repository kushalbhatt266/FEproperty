@extends('layouts.app')
@section('title', 'Testimonials')
@section('page-heading','Testimonials')
@push('styles')
@endpush
@section('content')
<main class="content-offset-to-top"> 
        <div class="header-image-wrapper">
            <div class="bg" style="background-image: url('assets/images/others/about.jpg');"></div>
            <div class="mask"></div>            
            <div class="header-image-content offset-bottom">
                <h1 class="title">Testimonials</h1>
                <!-- <p class="desc">We help you for find your house key</p>  -->
            </div>
        </div> 
         <div class="theme-container">
         <div class="mdc-card main-content-header pt-0">
            <div class="row">
               <div class="col-sm-3 mt-5">
                    @include('templates.components.search')
               </div>
               <div class="col-sm-9 mt-5">
                    <div class="theme-container borber-bottom">
                        <header class="mb-1"><h2>James65</h2></header>
                        <p>Excellent professionalism, negotiation skills, and communication. He has helped me with few deals and gives unbiased opinion. I will definitely recommend him for any buying and selling needs.</p> 
                    </div>
                    <div class="theme-container borber-bottom">
                        <header class="mb-1"><h2>Jaime Allen</h2></header>
                        <p>I highly recommend Nancy EHLEN. We own a small portfolio of properties in which they helped. They continually impress me with their service. I cannot be more happier with their service; I highly advise you use them!</p> 
                    </div>
                    <div class="theme-container borber-bottom mt-3">
                        <header class="mb-1"><h2>Alecia Coleman</h2></header>
                        <p>Noah was awesome! The process was very smooth. We are very happy with his services. His knowledge and expertise exceeded our expectation. Communication was better than any other company we have dealt with. We definitely recommend to all of our family and friends. We will be using him again in the future if we ever need his services.</p> 
                    </div>
                    <div class="theme-container borber-bottom mt-3">
                        <header class="mb-1"><h2>Jeff Baker</h2></header>
                        <p>From the application process to the move in, it was all made simple. The process was quicker than we thought and any questions we had were quickly answered along the way.</p> 
                    </div>
                    <div class="theme-container borber-bottom mt-3">
                        <header class="mb-1"><h2>Teresa Diaz</h2></header>
                        <p>It has been a pleasure working with Nancy EHLEN from the start. Their communication is timely and professional. From the Lease Purchase application process to moving in, our experience was extremely smooth.</p> 
                    </div>
                    <div class="theme-container borber-bottom mt-3">
                        <header class="mb-1"><h2>Walter Greenplat</h2></header>
                        <p>I have known Noah who is the owner/broker of Nancy EHLEN for around 10 years and he has always been very attentive to my needs as an owner / investor of several homes in the Tampa/St pete area . I have also had the experience of dealing with other companies all around Florida and I would have to say that Nancy EHLEN really does a better job than all of them by always putting their customer needs first no matter how small.</p> 
                    </div>
                    <div class="theme-container borber-bottom mt-3">
                        <header class="mb-1"><h2>James Conley </h2></header>
                        <p>I recommend Nancy EHLEN as my first choice whenever I need to buy or sell any property. Noah has been a great help.</p> 
                    </div>
               </div>
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
@endpush