<aside class="col-lg-4 col-md-12 car">
                        <div class="widget">
                            <!-- Search Fields -->
                            <div class="widget-boxed main-search-field">
                                <div class="widget-boxed-header">
                                    <h4>Find Your House</h4>
                                </div>
                                <!-- Search Form -->
                                <div class="trip-search">
                                    <form action="{{ url('list-search') }}" id="filters">
                                        <!-- Form Lookin for -->
                                       
                                        <!--/ End Form Lookin for -->
                                        <!-- Form Location -->
                                        <div class="location list-location">
                                            
                                            <input type="text" class="form-control" name="location" id="location" value="{{app('request')->input('location')}}" placeholder="Type address, City or Zipcode">
                                        </div>
                                       
                                        <!-- Form Bedrooms -->
                                        <div class="form-group beds">
                                                <select class="select single-select mr-0" name="bathrooms" id="bathrooms">
                                                                <option value="any">Bathrooms</option>
                                                                <option value="any" @if(app('request')->input('bathrooms') == 'any') selected @endif>Any</option>
                                                                <option value="1" @if(app('request')->input('bathrooms') == '1') selected @endif>1 Or More</option>
                                                                <option value="2" @if(app('request')->input('bathrooms') == '2') selected @endif>2 Or More</option>
                                                                <option value="3" @if(app('request')->input('bathrooms') == '3') selected @endif>3 Or More</option>
                                                                <option value="4" @if(app('request')->input('bathrooms') == '4') selected @endif>4 Or More</option>
                                                               
                                                            </select>                  
                                        </div>
                                        <!--/ End Form Bedrooms -->
                                        <!-- Form Bathrooms -->
                                        <div class="form-group bath mt-4" style="margin-top:20px!important;">
                                           
                                                             <select class="select single-select " name="bedrooms" id="bedrooms">
                                                                <option value="any">Bedrooms</option>
                                                                <option value="any" @if(app('request')->input('bedrooms') == 'any') selected @endif>Any</option>
                            <option value="1" @if(app('request')->input('bedrooms') == '1') selected @endif>1 Or More</option>
                            <option value="2" @if(app('request')->input('bedrooms') == '2') selected @endif>2 Or More</option>
                            <option value="3" @if(app('request')->input('bedrooms') == '3') selected @endif>3 Or More</option>
                            <option value="4" @if(app('request')->input('bedrooms') == '4') selected @endif>4 Or More</option>
                                                            </select>
                                               
                                           
                                        </div>
                                        <div class="location list-location minprice">
                                            
                                            <input type="text" class="form-control" name="min_price" id="min_price" value="{{app('request')->input('min_price')}}" placeholder="Price From">
                                        </div>
                                        <div class="location list-location minprice">
                                            
                                            <input type="text" class="form-control" name="max_price" id="max_price" value="{{app('request')->input('max_price')}}" placeholder="Price To">
                                        </div>
                                        <!--/ End Form Bathrooms -->
                                        <div class="col-lg-12 no-pds">
                                    <div class="at-col-default-mar">
                                        <button class="btn btn-default hvr-bounce-to-right" type="submit">Search</button>
                                    </div>
                                </div>
                                    </form>
                                </div>
                               
                                <!-- More Search Options / End -->
                               
                            </div>
                            <div class="widget-boxed mt-5 d-none">
                                <div class="widget-boxed-header mb-5">
                                    <h4>Feature Properties</h4>
                                </div>
                                <div class="widget-boxed-body">
                                    <div class="slick-lancers">
                                        <div class="agents-grid mr-0">
                                            <div class="listing-item compact">
                                                <a href="properties-details.html" class="listing-img-container">
                                                    <div class="listing-badges">
                                                        <span class="featured">$ 230,000</span>
                                                        <span>For Sale</span>
                                                    </div>
                                                    <div class="listing-img-content">
                                                        <span class="listing-compact-title">House Luxury <i>New York</i></span>
                                                        <ul class="listing-hidden-content">
                                                            <li>Area <span>720 sq ft</span></li>
                                                            <li>Rooms <span>6</span></li>
                                                            <li>Beds <span>2</span></li>
                                                            <li>Baths <span>3</span></li>
                                                        </ul>
                                                    </div>
                                                    <img src="{{asset('frontend/images/feature-properties/fp-1.jpg')}}" alt="">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="agents-grid mr-0">
                                            <div class="listing-item compact">
                                                <a href="properties-details.html" class="listing-img-container">
                                                    <div class="listing-badges">
                                                        <span class="featured">$ 6,500</span>
                                                        <span class="rent">For Rent</span>
                                                    </div>
                                                    <div class="listing-img-content">
                                                        <span class="listing-compact-title">House Luxury <i>Los Angles</i></span>
                                                        <ul class="listing-hidden-content">
                                                            <li>Area <span>720 sq ft</span></li>
                                                            <li>Rooms <span>6</span></li>
                                                            <li>Beds <span>2</span></li>
                                                            <li>Baths <span>3</span></li>
                                                        </ul>
                                                    </div>
                                                    <img src="{{asset('frontend/images/feature-properties/fp-2.jpg')}}" alt="">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="agents-grid mr-0">
                                            <div class="listing-item compact">
                                                <a href="properties-details.html" class="listing-img-container">
                                                    <div class="listing-badges">
                                                        <span class="featured">$ 230,000</span>
                                                        <span>For Sale</span>
                                                    </div>
                                                    <div class="listing-img-content">
                                                        <span class="listing-compact-title">House Luxury <i>San Francisco</i></span>
                                                        <ul class="listing-hidden-content">
                                                            <li>Area <span>720 sq ft</span></li>
                                                            <li>Rooms <span>6</span></li>
                                                            <li>Beds <span>2</span></li>
                                                            <li>Baths <span>3</span></li>
                                                        </ul>
                                                    </div>
                                                    <img src="{{asset('frontend/images/feature-properties/fp-3.jpg')}}" alt="">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="agents-grid mr-0">
                                            <div class="listing-item compact">
                                                <a href="properties-details.html" class="listing-img-container">
                                                    <div class="listing-badges">
                                                        <span class="featured">$ 6,500</span>
                                                        <span class="rent">For Rent</span>
                                                    </div>
                                                    <div class="listing-img-content">
                                                        <span class="listing-compact-title">House Luxury <i>Miami FL</i></span>
                                                        <ul class="listing-hidden-content">
                                                            <li>Area <span>720 sq ft</span></li>
                                                            <li>Rooms <span>6</span></li>
                                                            <li>Beds <span>2</span></li>
                                                            <li>Baths <span>3</span></li>
                                                        </ul>
                                                    </div>
                                                    <img src="{{asset('frontend/images/feature-properties/fp-4.jpg')}}" alt="">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="agents-grid mr-0">
                                            <div class="listing-item compact">
                                                <a href="properties-details.html" class="listing-img-container">
                                                    <div class="listing-badges">
                                                        <span class="featured">$ 230,000</span>
                                                        <span>For Sale</span>
                                                    </div>
                                                    <div class="listing-img-content">
                                                        <span class="listing-compact-title">House Luxury <i>Chicago IL</i></span>
                                                        <ul class="listing-hidden-content">
                                                            <li>Area <span>720 sq ft</span></li>
                                                            <li>Rooms <span>6</span></li>
                                                            <li>Beds <span>2</span></li>
                                                            <li>Baths <span>3</span></li>
                                                        </ul>
                                                    </div>
                                                    <img src="{{asset('frontend/images/feature-properties/fp-5.jpg')}}" alt="">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="agents-grid mr-0">
                                            <div class="listing-item compact">
                                                <a href="properties-details.html" class="listing-img-container">
                                                    <div class="listing-badges">
                                                        <span class="featured">$ 6,500</span>
                                                        <span class="rent">For Rent</span>
                                                    </div>
                                                    <div class="listing-img-content">
                                                        <span class="listing-compact-title">House Luxury <i>Toronto CA</i></span>
                                                        <ul class="listing-hidden-content">
                                                            <li>Area <span>720 sq ft</span></li>
                                                            <li>Rooms <span>6</span></li>
                                                            <li>Beds <span>2</span></li>
                                                            <li>Baths <span>3</span></li>
                                                        </ul>
                                                    </div>
                                                    <img src="{{asset('frontend/images/feature-properties/fp-6.jpg')}}" alt="">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="widget-boxed mt-5 d-none">
                                <div class="widget-boxed-header">
                                    <h4>Recent Properties</h4>
                                </div>
                                <div class="widget-boxed-body">
                                    <div class="recent-post">
                                        <div class="recent-main">
                                            <div class="recent-img">
                                                <a href="blog-details.html"><img src="{{asset('frontend/images/feature-properties/fp-1.jpg')}}" alt=""></a>
                                            </div>
                                            <div class="info-img">
                                                <a href="blog-details.html"><h6>Family Modern Home</h6></a>
                                                <p>$230,000</p>
                                            </div>
                                        </div>
                                        <div class="recent-main my-4">
                                            <div class="recent-img">
                                                <a href="blog-details.html"><img src="{{asset('frontend/images/feature-properties/fp-2.jpg')}}" alt=""></a>
                                            </div>
                                            <div class="info-img">
                                                <a href="blog-details.html"><h6>Luxury Villa House</h6></a>
                                                <p>$120,000</p>
                                            </div>
                                        </div>
                                        <div class="recent-main">
                                            <div class="recent-img">
                                                <a href="blog-details.html"><img src="{{asset('frontend/images/feature-properties/fp-3.jpg')}}" alt=""></a>
                                            </div>
                                            <div class="info-img">
                                                <a href="blog-details.html"><h6>Luxury Family Home</h6></a>
                                                <p>$150,000</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="widget-boxed popular mt-5 mb-0">
                                <div class="widget-boxed-header">
                                    <h4>Popular Tags</h4>
                                </div>
                                <div class="widget-boxed-body">
                                    <div class="recent-post">
                                        <div class="tags">
                                            <span><a href="{{ route('list-search',['featured' => true]) }}" class="btn btn-outline-primary">FEATURED LISTINGS</a></span>
                                            <span><a href="{{ route('dream-home-finder') }}" class="btn btn-outline-primary">DREAM HOME FINDER</a></span>
                                        </div>
                                        <div class="tags">
                                            <span><a href="{{ route('free-market-analysis') }}" class="btn btn-outline-primary">FREE MARKET ANALYSIS</a></span>
                                            <span><a href="{{route('about-us')}}" class="btn btn-outline-primary">ABOUT US</a></span>
                                        </div>
                                        <div class="tags">
                                            <span><a href="{{route('testimonials')}}" class="btn btn-outline-primary">TESTIMONIALS</a></span>
                                            <span><a href="{{route('contact-us')}}" class="btn btn-outline-primary">CONTACT US</a></span>
                                        </div>
                                       
                                    </div>
                                </div>
                            </div>
                        </div>
                    </aside>