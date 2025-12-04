<header id="header-container" class="header head-tr">
    <!-- Header -->
    <div id="header" class="head-tr bottom">
        <div class="container container-header">
            <!-- Left Side Content -->
            <div class="left-side">
                <!-- Logo -->
                <div id="logo">
                    <a href="{{route('home')}}"><img src="{{asset('frontend/images/custom-img/h-logo.png')}}"
                            data-sticky-logo="{{asset('frontend/images/custom-img/h-logo.png')}}" alt=""></a>
                </div>
                <!-- Mobile Navigation -->
                <div class="mmenu-trigger">
                    <button class="hamburger hamburger--collapse" type="button">
                        <span class="hamburger-box">
                            <span class="hamburger-inner"></span>
                        </span>
                    </button>
                </div>
                <!-- Main Navigation -->
                <nav id="navigation" class="style-1 head-tr">
                    <ul id="responsive">
                        <li><a href="{{route('home')}}">Home</a>

                        </li>
                        <li><a href="{{route('about-us')}}">About Us</a></li>
                        <li><a href="javascript:void(0);">Listings</a>
                            <ul>
                                <li><a href="{{ route('list-search',['featured' => true]) }}">Featured Listing</a>

                                </li>
                                <li><a href="{{ route('list-search',['sold' => true]) }}">Sold Listing</a>

                                </li>
                                <li><a href="{{ route('off-market-properties') }}">Off Market Properties</a>

                                </li>

                            </ul>
                        </li>
                        <li class="d-none"><a href="#">Properties</a>
                            <ul>
                                <li><a href="single-property-1.html">Marco Island MLS Listings</a></li>
                                <li><a href="single-property-2.html">Naples MLS Listings</a></li>

                            </ul>
                        </li>
                        <li class="d-none"><a href="javascript:void(0);">Search</a>
                            <ul class="child_menu">
                                <li><a href="{{ route('quick-search') }}">Quick Search</a></li>
                                <li><a href="{{ route('advance-search') }}">Advance Search</a></li>
                                <li><a href="{{ route('map-search') }}">Map Search</a></li>
                                <li><a href="{{ route('foreclosure-search') }}">Foreclosures</a></li>
                                <li><a href="{{ route('search-by-area') }}">Search by Area</a></li>
                                <li><a href="{{ route('search-by-property-type') }}">Search by Property Type</a></li>
                                <li><a href="{{ route('search-by-zip') }}">Search by Zip</a></li>
                                <li><a href="{{ route('list-search',['location'=>'ST PETERSBURG']) }}">St Petersburg
                                        Homes</a></li>
                                <li><a href="{{ route('list-search',['location'=>'Palm Harbor']) }}">Palm Harbor
                                        Homes</a></li>
                                <li><a href="{{ route('list-search',['location'=>'TAMPA']) }}">Tampa Homes</a></li>
                                <li><a href="{{ route('list-search',['location'=>'CLEARWATER']) }}">Clearwater Homes</a>
                                </li>
                                <li><a href="{{ route('list-search',['location'=>'St Pete Beach']) }}">St Pete Beach
                                        Homes</a></li>
                                <li><a href="{{ route('list-search',['location'=>'Treasure Island']) }}">Treasure Island
                                        Homes</a></li>
                                <li><a href="{{ route('list-search',['location'=>'Clearwater Beach']) }}">Clearwater
                                        Beach Homes</a></li>

                                <li><a href="{{ route('list-search',['location'=>'Riverview']) }}">Riverview Homes</a>
                                </li>
                                <li><a href="{{ route('list-search',['location'=>'Brandon']) }}">Brandon Homes</a></li>
                                <li><a href="{{ route('list-search',['location'=>'Dunedin']) }}">Dunedin Homes</a></li>
                                <li><a href="{{ route('list-search',['location'=>'Tampa', 'postalCode' => '33647']) }}">New
                                        Tampa Homes (33647)</a></li>
                                <li><a
                                        href="{{ route('list-search',['direction'=>'south','location'=>'Tampa', 'postalCode' => '33611']) }}">South
                                        Tampa Homes (33611)</a></li>
                                <li><a
                                        href="{{ route('list-search',['direction'=>'south','location'=>'Tampa', 'postalCode' => '33616']) }}">South
                                        Tampa Homes (33616)</a></li>
                                <li><a
                                        href="{{ route('list-search',['direction'=>'south','location'=>'Tampa', 'postalCode' => '33609']) }}">South
                                        Tampa Homes (33609)</a></li>
                                <li><a
                                        href="{{ route('list-search',['direction'=>'south','location'=>'Tampa', 'postalCode' => '33629']) }}">South
                                        Tampa Homes (33629)</a></li>
                                <li><a href="{{ route('list-search',['location'=>'Tampa', 'postalCode' => '33606']) }}">Davis
                                        Island Homes (33606)</a></li>
                                <li><a href="{{ route('list-search',['location'=>'Tampa', 'postalCode' => '33626']) }}">West
                                        Chase Homes (33626)</a></li>
                                <li><a href="{{ route('list-search',['direction'=>'south','location'=>'Tampa']) }}">South
                                        Tampa Homes</a></li>



                            </ul>
                        </li>
                        <li class="d-none"><a href="javascript:void(0);">Open Houses</a>
                            <ul class="child_menu">
                                <li><a
                                        href="{{ route('list-search', ['direction' => 'south','location'=>'TAMPA', 'point' => 'open_house']) }}">South
                                        Tampa Open Houses</a></li>
                                <li><a
                                        href="{{ route('list-search', ['location'=>'ST PETE BEACH', 'point' => 'open_house']) }}">St
                                        Pete Beach Open Houses</a></li>
                                <li><a
                                        href="{{ route('list-search', ['location'=>'CLEARWATER', 'point' => 'open_house']) }}">Clearwater
                                        Open Houses</a></li>
                                <li><a
                                        href="{{ route('list-search', ['location'=>'TAMPA', 'point' => 'open_house']) }}">Tampa
                                        Open Houses</a></li>

                                <li><a
                                        href="{{ route('list-search', ['location'=>'PALM HARBOR', 'point' => 'open_house']) }}">Palm
                                        Harbor Open Houses</a></li>
                                <li><a
                                        href="{{ route('list-search', ['direction' => 'south','location'=>'SAFETY HARBOR', 'point' => 'open_house']) }}">Safety
                                        Harbor Open Houses</a></li>
                                <li><a
                                        href="{{ route('list-search', ['location'=>'Dunedin', 'point' => 'open_house']) }}">Dunedin
                                        Open Houses</a></li>
                                <li><a
                                        href="{{ route('list-search', ['location'=>'Brandon', 'point' => 'open_house']) }}">Brandon
                                        Open Houses</a></li>
                                <li><a
                                        href="{{ route('list-search', ['location'=>'Riverview', 'point' => 'open_house']) }}">Riverview
                                        Open Houses</a></li>
                                <li><a
                                        href="{{ route('list-search', ['location'=>'New Tampa', 'point' => 'open_house']) }}">New
                                        Tampa Open Houses</a></li>
                                <li><a
                                        href="{{ route('list-search', ['location'=>'Wesley Chapel', 'point' => 'open_house']) }}">Wesley
                                        Chapel Open Houses</a></li>


                            </ul>
                        </li>

                        <li><a href="javascript:void(0);">Resources</a>
                            <ul class="child_menu">
                                <li><a href="{{ route('buyers') }}">Buyers</a></li>
                                <li><a href="{{ route('sellers') }}">Sellers</a></li>
                                @foreach(get_tags() as $tag_data)
                                <li><a
                                        href="{{route('-.blog.tags',[$tag_data->id, 'tag' => str_replace(' ', '-', $tag_data->name)])}}">{{$tag_data->name}}</a>
                                </li>
                                @endforeach
                                <li><a href="{{ route('mortgage-rates') }}">Mortgage Rates</a></li>
                                <li><a href="https://www.greatschools.org/">Schools</a></li>
                                <li><a href="https://weather.com/?Goto=Redirected">Weather</a></li>
                                <li><a href="http://www.moving.com/">Relocation</a></li>
                                <li><a href="{{ route('real-estate-glossary') }}">Real Estate Glossary</a></li>
                                <li><a href="{{ route('dream-home-finder') }}">Dream Home Finder</a></li>
                                <li><a href="{{ route('free-market-analysis') }}">Free Market Analysis</a></li>



                            </ul>
                        </li>
                        <li><a href="javascript:void(0);">More</a>
                            <ul class="">
                                @if(get_contentType())

                                @foreach(get_contentType() as $cont)

                                <li><a href="{{url($cont->id).'/'.strtolower($cont->name)}}">{{$cont->name}}</a></li>
                                @endforeach
                                @endif

                                <li><a href="{{url('our-agent-list')}}">Agent</a></li>
                            </ul>
                        </li>
                        <li><a href="{{route('contact-us')}}">Contact</a></li>
                        <li class="d-none d-xl-none d-block d-lg-block"><a href="login.html">Login</a></li>
                        <li class="d-none d-xl-none d-block d-lg-block"><a href="register.html">Register</a></li>
                        <li class="d-none d-xl-none d-block d-lg-block mt-5 pb-4 ml-5 border-bottom-0"><a
                                href="add-property.html" class="button border btn-lg btn-block text-center">Add
                                Listing<i class="fas fa-laptop-house ml-2"></i></a></li>
                    </ul>
                </nav>
                <!-- Main Navigation / End -->
            </div>
            <!-- Left Side Content / End -->

            <!-- Right Side Content / End -->
            <div class="right-side d-none d-none d-lg-none d-xl-flex">
                <!-- Header Widget -->
                <div class="header-widget">
                    <a href="tel:239-494-0455" class="button border"><i class="fa fa-phone" aria-hidden="true"></i>
                        &nbsp; 239-494-0455</a>
                </div>
                <!-- Header Widget / End -->
            </div>
            <!-- Right Side Content / End -->

            <!-- Right Side Content / End -->
            <div class="header-user-menu user-menu add d-none">
                <div class="header-user-name">
                    <span><img src="{{asset('frontend/images/testimonials/ts-1.jpg')}}" alt=""></span>Hi, Mary!
                </div>
                <ul>
                    <li><a href="user-profile.html"> Edit profile</a></li>
                    <li><a href="add-property.html"> Add Property</a></li>
                    <li><a href="payment-method.html"> Payments</a></li>
                    <li><a href="change-password.html"> Change Password</a></li>
                    <li><a href="#">Log Out</a></li>
                </ul>
            </div>
            <!-- Right Side Content / End -->


            <!-- Right Side Content / End -->


        </div>
    </div>
    <!-- Header / End -->

</header>