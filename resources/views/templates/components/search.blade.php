<aside class="mdc-drawer mdc-drawer--modal page-sidenav">
    <a href="#" class="h-0"></a>
     <div class="mdc-card">
        <p style="text-align: center;"><img src="{{asset('assets/images/main_logo-textchanges.png') }}" style="width:60%;margin-top: 10px;"></p>
        <div class="card adc">
           <div class="container">
              <h4 class="tac"><b>Noah Bressack,</b></h4>
              <h4 class="tac"><b>Licensed Real Estate Broker</b></h4>
              <h4 class="tac"><b> LIC # BK3406339,</b></h4>
              <h4 class="tac"><b>REC # CQ1055270</b></h4>
              <p class="tac" style="margin-bottom: 5px;"><a href="tel:813-494-2595" class="tac2">813-494-2595</a></p>
              <p class="tac" style="margin-bottom: 6px;"><a href="mailto:broker@feelgreatrealestate.com" class="tac2">broker@feelgreatrealestate.com</a></p>
           </div>
        </div>
        <div class="card adc">
           <div class="container">
              <h4 class="tac"><b>Maxwell Loveland, Sales Manager</b></h4>
              <p class="tac" style="margin-bottom: 5px;"><a href="tel:727-641-2686" class="tac2">727-641-2686</a></p>
              <p class="tac" style="margin-bottom: 6px;"><a href="mailto:loveland@feelgreatrealestate.com" class="tac2">loveland@feelgreatrealestate.com</a></p>
           </div>
        </div>
        
        <div class="card adc">
           <div class="container">
              <h4 class="tac"><b>Ori Marte, Sales Associate (Habla Español)</b></h4>
              <p class="tac" style="margin-bottom: 5px;"><a href="tel:978-429-6420" class="tac2">978-429-6420</a></p>
              <p class="tac" style="margin-bottom: 6px;"><a href="mailto:O.marte@feelgreatrealestate.com" class="tac2">o.marte@feelgreatrealestate.com</a></p>
           </div>
        </div>
        <div class="card adc">
           <div class="container">
              <h4 class="tac"><b>Marsha Bressack, Sales Associate</b></h4>
              <p class="tac" style="margin-bottom: 5px;"><a href="tel:303-875-8224" class="tac2">303-875-8224</a></p>
              <p class="tac" style="margin-bottom: 6px;"><a href="mailto:Marsha@feelgreatrealestate.com" class="tac2">marsha@feelgreatrealestate.com</a></p>
           </div>
        </div>
        <div class="card adc">
           <div class="container">
              <h4 class="tac"><b>Stacey Brooks, Sales Associate</b></h4>
              <p class="tac" style="margin-bottom: 5px;"><a href="tel:727-647-8415" class="tac2">727-647-8415</a></p>
              <p class="tac" style="margin-bottom: 6px;"><a href="mailto:sbrooks424@gmail.com" class="tac2">sbrooks424@gmail.com</a></p>
           </div>
        </div>
        <div class="card adc">
           <div class="container">
              <h4 class="tac"><b>Ben Holmes, Sales Associate</b></h4>
              <p class="tac" style="margin-bottom: 5px;"><a href="tel:813-841-7119" class="tac2">813-841-7119</a></p>
              <p class="tac" style="margin-bottom: 6px;"><a href="mailto:bhmx6@aol.com" class="tac2">bhmx6@aol.com</a></p>
           </div>
        </div>
        
        <div class="card adc">
           <div class="container">
              <p class="tac1"><a href="{{ route('list-search',['featured' => true]) }}" class="tac3">FEATURED LISTINGS</a></p>
              <p class="tac1"><a href="{{ route('dream-home-finder') }}" class="tac3">DREAM HOME FINDER</a></p>
              <p class="tac1"><a href="{{ route('free-market-analysis') }}" class="tac3">FREE MARKET ANALYSIS</a></p>
              <p class="tac1"><a href="{{route('about-us')}}" class="tac3">ABOUT US</a></p>
              <p class="tac1"><a href="{{route('testimonials')}}" class="tac3">TESTIMONIALS</a></p>
              <p class="tac1"><a href="{{route('contact-us')}}" class="tac3">CONTACT US</a></p>
           </div>
        </div>
         
        <form action="{{ url('list-search') }}" id="filters" class="search-wrapper m-0 o-hidden"> 
            <!-- <div class="column p-2">   -->
                <div class="row">
                    <div class="col-xs-12 p-2">
                        <div class="mdc-text-field mdc-text-field--outlined">
                            <input class="mdc-text-field__input" name="location" id="location" value="{{app('request')->input('location')}}" placeholder="Type address, City or Zipcode">
                            <div class="mdc-notched-outline">
                            <div class="mdc-notched-outline__leading"></div>
                            <div class="mdc-notched-outline__notch">
                                <label class="mdc-floating-label">Location</label>
                            </div>
                            <div class="mdc-notched-outline__trailing"></div>
                            </div>
                        </div>
                    </div>   
                </div>
                <div class="row">
                    <div class="col-xs-6 p-2">
                        <div class="mdc-text-field mdc-text-field--outlined">
                            <input class="mdc-text-field__input" name="min_price" id="min_price" value="{{app('request')->input('min_price')}}">
                            <div class="mdc-notched-outline">
                            <div class="mdc-notched-outline__leading"></div>
                            <div class="mdc-notched-outline__notch">
                                <label class="mdc-floating-label">Price From</label>
                            </div>
                            <div class="mdc-notched-outline__trailing"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6 p-2 to">
                        <div class="mdc-text-field mdc-text-field--outlined">
                            <input class="mdc-text-field__input" name="max_price" id="max_price" value="{{app('request')->input('max_price')}}">
                            <div class="mdc-notched-outline">
                            <div class="mdc-notched-outline__leading"></div>
                            <div class="mdc-notched-outline__notch">
                                <label class="mdc-floating-label">Price To</label>
                            </div>
                            <div class="mdc-notched-outline__trailing"></div>
                            </div>
                        </div>
                    </div> 
                </div>
                <div class="row">
                    <div class="col-xs-6 p-2 form-group"> 
                        <select class="mdc-list-item" name="bathrooms" id="bathrooms" style="width: 100%;height: 50px; margin: 0px;">
                            <option value="">Bathrooms</option>
                            <option value="any" @if(app('request')->input('bathrooms') == 'any') selected @endif>Any</option>
                            <option value="1" @if(app('request')->input('bathrooms') == '1') selected @endif>1 Or More</option>
                            <option value="2" @if(app('request')->input('bathrooms') == '2') selected @endif>2 Or More</option>
                            <option value="3" @if(app('request')->input('bathrooms') == '3') selected @endif>3 Or More</option>
                            <option value="4" @if(app('request')->input('bathrooms') == '4') selected @endif>4 Or More</option>
                        </select> 
                    </div>
                    <div class="col-xs-6 p-2 form-group">
                        <select class="mdc-list-item" name="bedrooms" id="bedrooms" style="width: 100%;height: 50px; margin: 0px;">
                            <option value="">Bedrooms</option>
                            <option value="any" @if(app('request')->input('bedrooms') == 'any') selected @endif>Any</option>
                            <option value="1" @if(app('request')->input('bedrooms') == '1') selected @endif>1 Or More</option>
                            <option value="2" @if(app('request')->input('bedrooms') == '2') selected @endif>2 Or More</option>
                            <option value="3" @if(app('request')->input('bedrooms') == '3') selected @endif>3 Or More</option>
                            <option value="4" @if(app('request')->input('bedrooms') == '4') selected @endif>4 Or More</option>
                        </select> 
                    </div> 
                </div>
            <!-- </div>    -->
            <div class="row around-xs middle-xs p-2 mb-3"> 
                <button class="mdc-button mdc-button--raised bg-warn" type="button" id="clear-filter">
                    <span class="mdc-button__ripple"></span>
                    <span class="mdc-button__label">Clear</span> 
                </button>
                <button class="mdc-button mdc-button--raised" type="submit">
                    <span class="mdc-button__ripple"></span>
                    <i class="material-icons mdc-button__icon">search</i>
                    <span class="mdc-button__label">Search</span> 
                </button>  
            </div>
        </form>
     </div>
</aside>