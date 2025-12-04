<aside class="mdc-drawer mdc-drawer--modal sidenav">
   <div class="row end-xs middle-xs py-1 px-3">
      <button id="sidenav-close" class="mdc-icon-button material-icons warn-color">close</button> 
   </div>
   <hr class="mdc-list-divider m-0">
   <div class="mdc-drawer__content">
      <div class="vertical-menu">
         <div class="mdc-menu-surface--anchor"> 
            <a href="{{route('home')}}" class="mdc-button"> 
            <span class="mdc-button__ripple"></span> 
            <span class="mdc-button__label">Home</span>
            </a>                   
         </div>
         <div class="mdc-menu-surface--anchor">
            <a href="javascript:void(0);" class="mdc-button menu-item-has-children">
            <span class="mdc-button__ripple"></span>
            <span class="mdc-button__label">Listings</span> 
            </a> 
            <div class="mdc-menu mdc-menu-surface">
               <div class="mdc-list">
                  <div> 
                     <a href="{{ route('list-search',['featured' => true]) }}" class="mdc-button"> 
                     <span class="mdc-button__ripple"></span>
                     <span class="mdc-button__label">Featured Listing</span> 
                     </a>  
                  </div>
                  <div> 
                     <a href="{{ route('list-search',['sold' => true]) }}" class="mdc-button"> 
                     <span class="mdc-button__ripple"></span>
                     <span class="mdc-button__label">Sold Listing</span> 
                     </a>  
                  </div>
                  <div> 
                     <a href="{{ route('off-market-properties') }}" class="mdc-button"> 
                     <span class="mdc-button__ripple"></span>
                     <span class="mdc-button__label">Off Market Properties</span> 
                     </a>  
                  </div>
               </div>
            </div>
         </div>
         <div class="mdc-menu-surface--anchor">
            <a href="javascript:void(0);" class="mdc-button menu-item-has-children">
            <span class="mdc-button__ripple"></span>
            <span class="mdc-button__label">Search</span> 
            </a> 
            <div class="mdc-menu mdc-menu-surface">
               <div class="mdc-list">
                  <div> 
                     <a href="{{ route('quick-search') }}" class="mdc-button"> 
                     <span class="mdc-button__ripple"></span>
                     <span class="mdc-button__label">Quick Search</span> 
                     </a>  
                  </div>
                  <div> 
                     <a href="{{ route('advance-search') }}" class="mdc-button"> 
                     <span class="mdc-button__ripple"></span>
                     <span class="mdc-button__label">Advance Search</span> 
                     </a>  
                  </div>
                  <div> 
                     <a href="{{ route('map-search') }}" class="mdc-button"> 
                     <span class="mdc-button__ripple"></span>
                     <span class="mdc-button__label">Map Search</span> 
                     </a>  
                  </div>
                  <div> 
                     <a href="{{ route('foreclosure-search') }}" class="mdc-button"> 
                     <span class="mdc-button__ripple"></span>
                     <span class="mdc-button__label">Foreclosures</span> 
                     </a>  
                  </div>
                  <div> 
                     <a href="{{ route('search-by-area') }}" class="mdc-button">
                     <span class="mdc-button__ripple"></span>
                     <span class="mdc-button__label">Search by Area</span> 
                     </a>  
                  </div>
                  <div> 
                     <a href="{{ route('search-by-property-type') }}" class="mdc-button">
                     <span class="mdc-button__ripple"></span>
                     <span class="mdc-button__label">Search by Property Type</span> 
                     </a>  
                  </div>
                  <div> 
                     <a href="{{ route('search-by-zip') }}" class="mdc-button">
                     <span class="mdc-button__ripple"></span>
                     <span class="mdc-button__label">Search by Zip</span> 
                     </a>  
                  </div>
                  <div> 
                     <a href="{{ route('list-search',['location'=>'ST PETERSBURG']) }}" class="mdc-button"> 
                     <span class="mdc-button__ripple"></span>
                     <span class="mdc-button__label">St Petersburg Homes </span> 
                     </a>  
                  </div>
                  <div> 
                     <a href="{{ route('list-search',['location'=>'Palm Harbor']) }}" class="mdc-button">
                     <span class="mdc-button__ripple"></span>
                     <span class="mdc-button__label">Palm Harbor Homes</span> 
                     </a>  
                  </div>
                  <div> 
                     <a href="{{ route('list-search',['location'=>'TAMPA']) }}" class="mdc-button">
                     <span class="mdc-button__ripple"></span>
                     <span class="mdc-button__label">Tampa Homes </span> 
                     </a>  
                  </div>
                  <div> 
                     <a href="{{ route('list-search',['location'=>'CLEARWATER']) }}" class="mdc-button"> 
                     <span class="mdc-button__ripple"></span>
                     <span class="mdc-button__label">Clearwater Homes</span> 
                     </a>  
                  </div>
                  <div> 
                     <a href="{{ route('list-search',['location'=>'St Pete Beach']) }}" class="mdc-button">
                     <span class="mdc-button__ripple"></span>
                     <span class="mdc-button__label">St Pete Beach Homes</span> 
                     </a>  
                  </div>
                  <div> 
                     <a href="{{ route('list-search',['location'=>'Treasure Island']) }}" class="mdc-button">
                     <span class="mdc-button__ripple"></span>
                     <span class="mdc-button__label">Treasure Island Homes</span> 
                     </a>  
                  </div>
                  <div> 
                     <a href="{{ route('list-search',['location'=>'Clearwater Beach']) }}" class="mdc-button">
                     <span class="mdc-button__ripple"></span>
                     <span class="mdc-button__label">Clearwater Beach Homes</span> 
                     </a>  
                  </div>
                  <div> 
                     <a href="{{ route('list-search',['location'=>'Riverview']) }}" class="mdc-button">
                     <span class="mdc-button__ripple"></span>
                     <span class="mdc-button__label">Riverview Homes</span> 
                     </a>  
                  </div>
                  <div> 
                     <a href="{{ route('list-search',['location'=>'Brandon']) }}" class="mdc-button">
                     <span class="mdc-button__ripple"></span>
                     <span class="mdc-button__label">Brandon Homes</span> 
                     </a>  
                  </div>
                  <div> 
                     <a href="{{ route('list-search',['location'=>'Dunedin']) }}" class="mdc-button">
                     <span class="mdc-button__ripple"></span>
                     <span class="mdc-button__label">Dunedin Homes</span> 
                     </a>  
                  </div>
                  <div> 
                     <a href="{{ route('list-search',['location'=>'Tampa', 'postalCode' => '33647']) }}" class="mdc-button">
                     <span class="mdc-button__ripple"></span>
                     <span class="mdc-button__label">New Tampa Homes (33647)</span> 
                     </a>  
                  </div>
                  <div> 
                     <a href="{{ route('list-search',['direction'=>'south','location'=>'Tampa', 'postalCode' => '33611']) }}" class="mdc-button">
                     <span class="mdc-button__ripple"></span>
                     <span class="mdc-button__label">South Tampa Homes (33611)</span> 
                     </a>  
                  </div>
                  <div> 
                     <a href="{{ route('list-search',['direction'=>'south','location'=>'Tampa', 'postalCode' => '33616']) }}" class="mdc-button">
                     <span class="mdc-button__ripple"></span>
                     <span class="mdc-button__label">South Tampa Homes (33616)</span> 
                     </a>  
                  </div>
                  <div> 
                     <a href="{{ route('list-search',['direction'=>'south','location'=>'Tampa', 'postalCode' => '33609']) }}" class="mdc-button">
                     <span class="mdc-button__ripple"></span>
                     <span class="mdc-button__label">South Tampa Homes (33609)</span> 
                     </a>  
                  </div>
                  <div> 
                     <a href="{{ route('list-search',['direction'=>'south','location'=>'Tampa', 'postalCode' => '33629']) }}" class="mdc-button">
                     <span class="mdc-button__ripple"></span>
                     <span class="mdc-button__label">South Tampa Homes (33629)</span> 
                     </a>  
                  </div>
                  <div> 
                     <a href="{{ route('list-search',['location'=>'Tampa', 'postalCode' => '33606']) }}" class="mdc-button">
                     <span class="mdc-button__ripple"></span>
                     <span class="mdc-button__label">Davis Island Homes (33606)</span> 
                     </a>  
                  </div>
                  <div> 
                     <a href="{{ route('list-search',['location'=>'Tampa', 'postalCode' => '33626']) }}" class="mdc-button">
                     <span class="mdc-button__ripple"></span>
                     <span class="mdc-button__label">West Chase Homes (33626)</span> 
                     </a>  
                  </div>
                  <div> 
                     <a href="{{ route('list-search',['direction'=>'south','location'=>'Tampa']) }}" class="mdc-button">
                     <span class="mdc-button__ripple"></span>
                     <span class="mdc-button__label">South Tampa Homes</span> 
                     </a>  
                  </div>
               </div>
            </div>
         </div>
         <div class="mdc-menu-surface--anchor">
            <a href="javascript:void(0);" class="mdc-button menu-item-has-children"> 
            <span class="mdc-button__ripple"></span> 
            <span class="mdc-button__label">Open Houses</span> 
            </a>  
            <div class="mdc-menu mdc-menu-surface mt-3">
               <div class="mdc-list">
                  <div> 
                     <a href="{{ route('list-search', ['direction' => 'south','location'=>'TAMPA', 'point' => 'open_house']) }}" class="mdc-button">
                     <span class="mdc-button__ripple"></span>
                     <span class="mdc-button__label">South Tampa Open Houses</span> 
                     </a>  
                  </div>
                  <div> 
                     <a href="{{ route('list-search', ['location'=>'ST PETE BEACH', 'point' => 'open_house']) }}" class="mdc-button">
                     <span class="mdc-button__ripple"></span>
                     <span class="mdc-button__label">St Pete Beach Open Houses</span> 
                     </a>  
                  </div>
                  <div> 
                     <a href="{{ route('list-search', ['location'=>'CLEARWATER', 'point' => 'open_house']) }}" class="mdc-button">
                     <span class="mdc-button__ripple"></span>
                     <span class="mdc-button__label">Clearwater Open Houses</span> 
                     </a>  
                  </div>
                  <div> 
                     <a href="{{ route('list-search', ['location'=>'TAMPA', 'point' => 'open_house']) }}" class="mdc-button">
                     <span class="mdc-button__ripple"></span>
                     <span class="mdc-button__label">Tampa Open Houses</span> 
                     </a>  
                  </div>
                  <div> 
                     <a href="{{ route('list-search', ['location'=>'PALM HARBOR', 'point' => 'open_house']) }}" class="mdc-button">
                     <span class="mdc-button__ripple"></span>
                     <span class="mdc-button__label">Palm Harbor Open Houses</span> 
                     </a>  
                  </div>
                  <div> 
                     <a href="{{ route('list-search', ['direction' => 'south','location'=>'SAFETY HARBOR', 'point' => 'open_house']) }}" class="mdc-button">
                     <span class="mdc-button__ripple"></span>
                     <span class="mdc-button__label">Safety Harbor Open Houses</span> 
                     </a>  
                  </div>
                  <div> 
                     <a href="{{ route('list-search', ['location'=>'Dunedin', 'point' => 'open_house']) }}" class="mdc-button">
                     <span class="mdc-button__ripple"></span>
                     <span class="mdc-button__label">Dunedin Open Houses</span> 
                     </a>  
                  </div>
                  <div>     <a href="{{ route('list-search', ['location'=>'Brandon', 'point' => 'open_house']) }}" class="mdc-button">
                     <span class="mdc-button__ripple"></span>
                     <span class="mdc-button__label">Brandon Open Houses</span> 
                     </a>  
                  </div>
                  <div> 
                     <a href="{{ route('list-search', ['location'=>'Riverview', 'point' => 'open_house']) }}" class="mdc-button">
                     <span class="mdc-button__ripple"></span>
                     <span class="mdc-button__label">Riverview Open Houses</span> 
                     </a>  
                  </div>
                  <div> 
                     <a href="{{ route('list-search', ['location'=>'New Tampa', 'point' => 'open_house']) }}" class="mdc-button">
                     <span class="mdc-button__ripple"></span>
                     <span class="mdc-button__label">New Tampa Open Houses</span> 
                     </a>  
                  </div>
                  <div> 
                     <a href="{{ route('list-search', ['location'=>'Wesley Chapel', 'point' => 'open_house']) }}" class="mdc-button">
                     <span class="mdc-button__ripple"></span>
                     <span class="mdc-button__label">Wesley Chapel Open Houses</span> 
                     </a>  
                  </div>
               </div>
            </div>
         </div>
         <!-- 
            <div class="mdc-menu-surface--anchor"> 
                <a href="javascript:void(0);" class="mdc-button menu-item-has-children"> 
                    <span class="mdc-button__ripple"></span> 
                    <span class="mdc-button__label">Communities</span> 
                </a>  
                <div class="mdc-menu mdc-menu-surface">
                    <div class="mdc-list"> 
                       
                    </div>
                </div>  
            </div> --> 
         @if(count(get_tags())>0)
         <div class="mdc-menu-surface--anchor">
            <a href="javascript:void(0);" class="mdc-button menu-item-has-children">
            <span class="mdc-button__ripple"></span>
            <span class="mdc-button__label">Resources</span> 
            </a>
            <div class="mdc-menu mdc-menu-surface">
               <div class="mdc-list">
                  <div> 
                     <a href="{{ route('buyers') }}" class="mdc-button"> 
                     <span class="mdc-button__ripple"></span>
                     <span class="mdc-button__label">Buyers</span> 
                     </a>  
                  </div>
                  <div> 
                     <a href="{{ route('sellers') }}" class="mdc-button"> 
                     <span class="mdc-button__ripple"></span>
                     <span class="mdc-button__label">Sellers</span> 
                     </a>  
                  </div>
                  @foreach(get_tags() as $tag_data)
                  <div> 
                     <a href="{{route('-.blog.tags',[$tag_data->id, 'tag' => str_replace(' ', '-', $tag_data->name)])}}" class="mdc-button">
                     <span class="mdc-button__ripple"></span>
                     <span class="mdc-button__label">{{$tag_data->name}}</span> 
                     </a>  
                  </div>
                  @endforeach
                  <div> 
                     <a href="{{ route('mortgage-rates') }}" class="mdc-button"> 
                     <span class="mdc-button__ripple"></span>
                     <span class="mdc-button__label">Mortgage Rates</span> 
                     </a>  
                  </div>
                  <div> 
                     <a href="https://www.greatschools.org/" class="mdc-button" target="_blank"> 
                     <span class="mdc-button__ripple"></span>
                     <span class="mdc-button__label">Schools</span> 
                     </a>  
                  </div>
                  <div> 
                     <a href="https://weather.com/?Goto=Redirected" class="mdc-button" target="_blank"> 
                     <span class="mdc-button__ripple"></span>
                     <span class="mdc-button__label">Weather</span> 
                     </a>  
                  </div>
                  <div> 
                     <a href="http://www.moving.com/" class="mdc-button" target="_blank">
                     <span class="mdc-button__ripple"></span>
                     <span class="mdc-button__label">Relocation</span> 
                     </a>  
                  </div>
                  <div> 
                     <a href="{{ route('real-estate-glossary') }}" class="mdc-button"> 
                     <span class="mdc-button__ripple"></span>
                     <span class="mdc-button__label">Real Estate Glossary</span> 
                     </a>  
                  </div>
                  <div> 
                     <a href="{{ route('dream-home-finder') }}" class="mdc-button"> 
                     <span class="mdc-button__ripple"></span>
                     <span class="mdc-button__label">Dream Home Finder</span> 
                     </a>  
                  </div>
                  <div> 
                     <a href="{{ route('free-market-analysis') }}" class="mdc-button"> 
                     <span class="mdc-button__ripple"></span>
                     <span class="mdc-button__label">Free Market Analysis</span> 
                     </a>  
                  </div>
               </div>
            </div>
         </div>
         @endif
         <div class="mdc-menu-surface--anchor">
            <a href="javascript:void(0);" class="mdc-button menu-item-has-children">
            <span class="mdc-button__ripple"></span>
            <span class="mdc-button__label">About</span> 
            </a> 
            <div class="mdc-menu mdc-menu-surface">
               <div class="mdc-list">
                  <div> 
                     <a href="{{route('about-us')}}" class="mdc-button"> 
                     <span class="mdc-button__ripple"></span>
                     <span class="mdc-button__label">About Us</span> 
                     </a>  
                  </div>
                  <div> 
                     <a href="{{url('blogs')}}" class="mdc-button"> 
                     <span class="mdc-button__ripple"></span>
                     <span class="mdc-button__label">Industry News</span> 
                     </a>  
                  </div>
                  <div> 
                     <a href="{{route('testimonials')}}" class="mdc-button"> 
                     <span class="mdc-button__ripple"></span>
                     <span class="mdc-button__label">Testimonials</span> 
                     </a>  
                  </div>
               </div>
            </div>
         </div>
         <div>
            <a href="{{route('contact-us')}}" class="mdc-button">
            <span class="mdc-button__ripple"></span>
            <span class="mdc-button__label">Contact us</span> 
            </a> 
         </div>
         <div>
            <a href="{{ route('quick-search') }}" class="mdc-button mdc-button--raised mdc-ripple-upgraded blink mt-3" type="submit" style="--mdc-ripple-fg-size:61px; --mdc-ripple-fg-scale:1.94392; --mdc-ripple-fg-translate-start:32.2031px, -1.5px; --mdc-ripple-fg-translate-end:20.7188px, -12.5px;">
            <span class="mdc-button__ripple"></span>
            <span class="mdc-button__label" style="color: white;">Buyers</span> 
            </a>
            <a href="{{ route('free-market-analysis') }}" class="mdc-button mdc-button--raised mdc-ripple-upgraded blink2 mt-3" type="submit" style="--mdc-ripple-fg-size:61px; --mdc-ripple-fg-scale:1.94392; --mdc-ripple-fg-translate-start:32.2031px, -1.5px; --mdc-ripple-fg-translate-end:20.7188px, -12.5px;">
            <span class="mdc-button__ripple"></span>
            <span class="mdc-button__label" style="color: white;">Seller</span> 
            </a>
         </div>
      </div>
   </div>
   <hr class="mdc-list-divider m-0">
   <div class="row center-xs middle-xs py-3">
      <a href="https://www.facebook.com/" target="blank" class="social-icon">
         <svg class="material-icons mat-icon-xlg primary-color" viewBox="0 0 24 24">
            <path d="M5,3H19A2,2 0 0,1 21,5V19A2,2 0 0,1 19,21H5A2,2 0 0,1 3,19V5A2,2 0 0,1 5,3M18,5H15.5A3.5,3.5 0 0,0 12,8.5V11H10V14H12V21H15V14H18V11H15V9A1,1 0 0,1 16,8H18V5Z" />
         </svg>
      </a>
      <a href="https://twitter.com/" target="blank" class="social-icon">
         <svg class="material-icons mat-icon-xlg primary-color" viewBox="0 0 24 24">
            <path d="M5,3H19A2,2 0 0,1 21,5V19A2,2 0 0,1 19,21H5A2,2 0 0,1 3,19V5A2,2 0 0,1 5,3M17.71,9.33C18.19,8.93 18.75,8.45 19,7.92C18.59,8.13 18.1,8.26 17.56,8.33C18.06,7.97 18.47,7.5 18.68,6.86C18.16,7.14 17.63,7.38 16.97,7.5C15.42,5.63 11.71,7.15 12.37,9.95C9.76,9.79 8.17,8.61 6.85,7.16C6.1,8.38 6.75,10.23 7.64,10.74C7.18,10.71 6.83,10.57 6.5,10.41C6.54,11.95 7.39,12.69 8.58,13.09C8.22,13.16 7.82,13.18 7.44,13.12C7.81,14.19 8.58,14.86 9.9,15C9,15.76 7.34,16.29 6,16.08C7.15,16.81 8.46,17.39 10.28,17.31C14.69,17.11 17.64,13.95 17.71,9.33Z" />
         </svg>
      </a>
      <a href="https://www.linkedin.com/" target="blank" class="social-icon">
         <svg class="material-icons mat-icon-xlg primary-color" viewBox="0 0 24 24">
            <path d="M19,3A2,2 0 0,1 21,5V19A2,2 0 0,1 19,21H5A2,2 0 0,1 3,19V5A2,2 0 0,1 5,3H19M18.5,18.5V13.2A3.26,3.26 0 0,0 15.24,9.94C14.39,9.94 13.4,10.46 12.92,11.24V10.13H10.13V18.5H12.92V13.57C12.92,12.8 13.54,12.17 14.31,12.17A1.4,1.4 0 0,1 15.71,13.57V18.5H18.5M6.88,8.56A1.68,1.68 0 0,0 8.56,6.88C8.56,5.95 7.81,5.19 6.88,5.19A1.69,1.69 0 0,0 5.19,6.88C5.19,7.81 5.95,8.56 6.88,8.56M8.27,18.5V10.13H5.5V18.5H8.27Z" />
         </svg>
      </a>
      <a href="https://plus.google.com/" target="blank" class="social-icon">
         <svg class="material-icons mat-icon-xlg primary-color" viewBox="0 0 24 24">
            <path d="M5,3H19A2,2 0 0,1 21,5V19A2,2 0 0,1 19,21H5A2,2 0 0,1 3,19V5A2,2 0 0,1 5,3M19.5,12H18V10.5H17V12H15.5V13H17V14.5H18V13H19.5V12M9.65,11.36V12.9H12.22C12.09,13.54 11.45,14.83 9.65,14.83C8.11,14.83 6.89,13.54 6.89,12C6.89,10.46 8.11,9.17 9.65,9.17C10.55,9.17 11.13,9.56 11.45,9.88L12.67,8.72C11.9,7.95 10.87,7.5 9.65,7.5C7.14,7.5 5.15,9.5 5.15,12C5.15,14.5 7.14,16.5 9.65,16.5C12.22,16.5 13.96,14.7 13.96,12.13C13.96,11.81 13.96,11.61 13.89,11.36H9.65Z" />
         </svg>
      </a>
   </div>
</aside>