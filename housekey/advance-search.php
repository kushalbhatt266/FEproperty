<?php include("header.php"); ?> 
<main>
   <div class="header-image-wrapper">
      <div class="bg" style="background-image: url('assets/images/carousel/slide-3.jpg');"></div>
      <div class="mask"></div>
      <div class="header-image-content mh-200">
         <p class="desc">Featured Listings</p>
      </div>
   </div>
   <div class="px-3">
   <div class="theme-container">
   <div class="page-drawer-container mt-3">
      <aside class="mdc-drawer mdc-drawer--modal page-sidenav">
         <a href="#" class="h-0"></a>
         <div class="mdc-card">
            <p style="text-align: center;"><img src="assets/images/main_logo-textchanges.png" style="width:100%;margin-top: 15px;"></p>
            <div class="card adc">
               <div class="container">
                  <h4 class="tac"><b>Noah Bressack, Broker</b></h4>
                  <p class="tac" style="margin-bottom: 5px;"><a href="tel:813-494-2595" class="tac2">813-494-2595</a></p>
                  <p class="tac"><a href="mailto:broker@feelgreatrealestate.com" class="tac2">broker@feelgreatrealestate.com</a></p>
               </div>
            </div>
            <div class="card adc">
               <div class="container">
                  <h4 class="tac"><b>Maxwell Loveland, Sales Manager</b></h4>
                  <p class="tac" style="margin-bottom: 5px;"><a href="tel:727-641-2686" class="tac2">727-641-2686</a></p>
                  <p class="tac"><a href="mailto:loveland@feelgreatrealestate.com" class="tac2">loveland@feelgreatrealestate.com</a></p>
               </div>
            </div>
            <div class="card adc">
               <div class="container">
                  <h4 class="tac"><b>Ori Marte, Sales Associate (Habla Español)</b></h4>
                  <p class="tac" style="margin-bottom: 5px;"><a href="tel:978-429-6420" class="tac2">978-429-6420</a></p>
                  <p class="tac"><a href="mailto:O.marte@feelgreatrealestate.com" class="tac2">O.marte@feelgreatrealestate.com</a></p>
               </div>
            </div>
            <div class="card adc">
               <div class="container">
                  <h4 class="tac"><b>Marsha Bressack, Sales Associate</b></h4>
                  <p class="tac" style="margin-bottom: 5px;"><a href="tel:303-875-8224" class="tac2">303-875-8224</a></p>
                  <p class="tac"><a href="mailto:Marsha@feelgreatrealestate.com" class="tac2">Marsha@feelgreatrealestate.com</a></p>
               </div>
            </div>
            <div class="card adc">
               <div class="container">
                  <h4 class="tac"><b>Stacey Brooks, Sales Associate</b></h4>
                  <p class="tac" style="margin-bottom: 5px;"><a href="tel:727-647-8415" class="tac2">727-647-8415</a></p>
                  <p class="tac"><a href="mailto:sbrooks424@gmail.com" class="tac2">sbrooks424@gmail.com</a></p>
               </div>
            </div>
            <div class="card adc">
               <div class="container">
                  <p class="tac1"><a href="#" class="tac3">FEATURED LISTINGS</a></p>
                  <p class="tac1"><a href="#" class="tac3">DREAM HOME FINDER</a></p>
                  <p class="tac1"><a href="#" class="tac3">FREE MARKET ANALYSIS</a></p>
                  <p class="tac1"><a href="#" class="tac3">ABOUT US</a></p>
                  <p class="tac1"><a href="#" class="tac3">TESTIMONIALS</a></p>
                  <p class="tac1"><a href="#" class="tac3">CONTACT US</a></p>
               </div>
            </div>
         </div>
      </aside>
      <div class="mdc-drawer-scrim page-sidenav-scrim"></div>
      <div class="page-sidenav-content">
         <div class="properties-wrapper row mt-0" style="display: block;">
            <form action="javascript:void(0);" id="filters" class="search-wrapper">
               <div class="section mt-3" style="padding-top: 0px;">
                  <h1 class="section-title" style="text-align: center;">Advance Search</h1>
                  <div class="row">
                     <div class="col-xs-12">
                        <div class="search">
                           <label for="cars" style="font-size: 22px;">Choose a car:</label>
                           <select name="cars" id="cars" class="lc">
                              <option value="city" selected="selected">City</option>
                              <option value="area">Area</option>
                              <option value="zip">Zip</option>
                              <option value="county">County</option>
                              <option value="subdivision">Subdivision</option>
                              <option value="address">Address</option>
                              <option value="mls_no">MLS Number</option>
                           </select>
                        </div>
                        <p  style="margin-top: 4%;">Check the cities to include in your search.
                           *Note: Begin by checking which states you want - the available counties will appear.
                           Then check which counties you want - the available cities within those counties will appear.
                        </p>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-md-12 col-xs-12">
                        <div class="card_go">
                           <p>States</p>
                           <ul class="ulc">
                              <li><label for="chk1"><input type="checkbox" name="chk1" id="chk1" class="chk1">First</label></li>
                              <li><label for="chk2"><input type="checkbox" name="chk2" id="chk2" class="chk1">Second</label></li>
                              <li><label for="chk3"><input type="checkbox" name="chk3" id="chk3" class="chk1">Third</label></li>
                              <li><label for="chk4"><input type="checkbox" name="chk4" id="chk4" class="chk1">Fourth</label></li>
                              <li><label for="chk5"><input type="checkbox" name="chk5" id="chk5" class="chk1">Fifth</label></li>
                              <li><label for="chk6"><input type="checkbox" name="chk6" id="chk6" class="chk1">Sixth</label></li>
                              <li><label for="chk7"><input type="checkbox" name="chk7" id="chk7" class="chk1">Seventh</label></li>
                              <li><label for="chk1"><input type="checkbox" name="chk1" id="chk1" class="chk1">First</label></li>
                              <li><label for="chk2"><input type="checkbox" name="chk2" id="chk2" class="chk1">Second</label></li>
                              <li><label for="chk3"><input type="checkbox" name="chk3" id="chk3" class="chk1">Third</label></li>
                              <li><label for="chk4"><input type="checkbox" name="chk4" id="chk4" class="chk1">Fourth</label></li>
                              <li><label for="chk5"><input type="checkbox" name="chk5" id="chk5" class="chk1">Fifth</label></li>
                              <li><label for="chk6"><input type="checkbox" name="chk6" id="chk6" class="chk1">Sixth</label></li>
                              <li><label for="chk7"><input type="checkbox" name="chk7" id="chk7" class="chk1">Seventh</label></li>
                              <li><label for="chk1"><input type="checkbox" name="chk1" id="chk1" class="chk1">First</label></li>
                              <li><label for="chk2"><input type="checkbox" name="chk2" id="chk2" class="chk1">Second</label></li>
                              <li><label for="chk3"><input type="checkbox" name="chk3" id="chk3" class="chk1">Third</label></li>
                              <li><label for="chk4"><input type="checkbox" name="chk4" id="chk4" class="chk1">Fourth</label></li>
                              <li><label for="chk5"><input type="checkbox" name="chk5" id="chk5" class="chk1">Fifth</label></li>
                              <li><label for="chk6"><input type="checkbox" name="chk6" id="chk6" class="chk1">Sixth</label></li>
                              <li><label for="chk7"><input type="checkbox" name="chk7" id="chk7" class="chk1">Seventh</label></li>
                           </ul>
                        </div>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-md-6 col-xs-12">
                        <div class="card_go info_no">
                           <p>Counties</p>
                           <ul class="hide_info">
                              <li>« Select a state to view counties</li>
                           </ul>
                        </div>
                     </div>
                     <div class="col-md-6 col-xs-12" >
                        <div class="card_go">
                           <p>City</p>
                           <ul class="ulc">
                              <li><label for="chk1"><input type="checkbox" name="chk1" id="chk1" class="chk1">First</label></li>
                              <li><label for="chk2"><input type="checkbox" name="chk2" id="chk2" class="chk1">Second</label></li>
                              <li><label for="chk3"><input type="checkbox" name="chk3" id="chk3" class="chk1">Third</label></li>
                              <li><label for="chk4"><input type="checkbox" name="chk4" id="chk4" class="chk1">Fourth</label></li>
                              <li><label for="chk5"><input type="checkbox" name="chk5" id="chk5" class="chk1">Fifth</label></li>
                              <li><label for="chk6"><input type="checkbox" name="chk6" id="chk6" class="chk1">Sixth</label></li>
                              <li><label for="chk7"><input type="checkbox" name="chk7" id="chk7" class="chk1">Seventh</label></li>
                              <li><label for="chk1"><input type="checkbox" name="chk1" id="chk1" class="chk1">First</label></li>
                              <li><label for="chk2"><input type="checkbox" name="chk2" id="chk2" class="chk1">Second</label></li>
                              <li><label for="chk3"><input type="checkbox" name="chk3" id="chk3" class="chk1">Third</label></li>
                              <li><label for="chk4"><input type="checkbox" name="chk4" id="chk4" class="chk1">Fourth</label></li>
                              <li><label for="chk5"><input type="checkbox" name="chk5" id="chk5" class="chk1">Fifth</label></li>
                              <li><label for="chk6"><input type="checkbox" name="chk6" id="chk6" class="chk1">Sixth</label></li>
                              <li><label for="chk7"><input type="checkbox" name="chk7" id="chk7" class="chk1">Seventh</label></li>
                              <li><label for="chk1"><input type="checkbox" name="chk1" id="chk1" class="chk1">First</label></li>
                              <li><label for="chk2"><input type="checkbox" name="chk2" id="chk2" class="chk1">Second</label></li>
                              <li><label for="chk3"><input type="checkbox" name="chk3" id="chk3" class="chk1">Third</label></li>
                              <li><label for="chk4"><input type="checkbox" name="chk4" id="chk4" class="chk1">Fourth</label></li>
                              <li><label for="chk5"><input type="checkbox" name="chk5" id="chk5" class="chk1">Fifth</label></li>
                              <li><label for="chk6"><input type="checkbox" name="chk6" id="chk6" class="chk1">Sixth</label></li>
                              <li><label for="chk7"><input type="checkbox" name="chk7" id="chk7" class="chk1">Seventh</label></li>
                           </ul>
                        </div>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-md-12 col-xs-12">
                        <div class="card_go">
                           <p>Status</p>
                           <ul class="ulc">
                              <li><label for="chk1"><input type="checkbox" name="chk1" id="chk1" class="chk1">First</label></li>
                              <li><label for="chk2"><input type="checkbox" name="chk2" id="chk2" class="chk1">Second</label></li>
                              <li><label for="chk3"><input type="checkbox" name="chk3" id="chk3" class="chk1">Third</label></li>
                              <li><label for="chk4"><input type="checkbox" name="chk4" id="chk4" class="chk1">Fourth</label></li>
                              <li><label for="chk5"><input type="checkbox" name="chk5" id="chk5" class="chk1">Fifth</label></li>
                              <li><label for="chk6"><input type="checkbox" name="chk6" id="chk6" class="chk1">Sixth</label></li>
                              <li><label for="chk7"><input type="checkbox" name="chk7" id="chk7" class="chk1">Seventh</label></li>
                              <li><label for="chk1"><input type="checkbox" name="chk1" id="chk1" class="chk1">First</label></li>
                              <li><label for="chk2"><input type="checkbox" name="chk2" id="chk2" class="chk1">Second</label></li>
                              <li><label for="chk3"><input type="checkbox" name="chk3" id="chk3" class="chk1">Third</label></li>
                              <li><label for="chk4"><input type="checkbox" name="chk4" id="chk4" class="chk1">Fourth</label></li>
                              <li><label for="chk5"><input type="checkbox" name="chk5" id="chk5" class="chk1">Fifth</label></li>
                              <li><label for="chk6"><input type="checkbox" name="chk6" id="chk6" class="chk1">Sixth</label></li>
                              <li><label for="chk7"><input type="checkbox" name="chk7" id="chk7" class="chk1">Seventh</label></li>
                              <li><label for="chk1"><input type="checkbox" name="chk1" id="chk1" class="chk1">First</label></li>
                              <li><label for="chk2"><input type="checkbox" name="chk2" id="chk2" class="chk1">Second</label></li>
                              <li><label for="chk3"><input type="checkbox" name="chk3" id="chk3" class="chk1">Third</label></li>
                              <li><label for="chk4"><input type="checkbox" name="chk4" id="chk4" class="chk1">Fourth</label></li>
                              <li><label for="chk5"><input type="checkbox" name="chk5" id="chk5" class="chk1">Fifth</label></li>
                              <li><label for="chk6"><input type="checkbox" name="chk6" id="chk6" class="chk1">Sixth</label></li>
                              <li><label for="chk7"><input type="checkbox" name="chk7" id="chk7" class="chk1">Seventh</label></li>
                           </ul>
                        </div>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-md-6 col-xs-12">
                        <div class="card_go">
                           <p>Property Type</p>
                           <ul class="ulc">
                              <li><label for="chk1"><input type="checkbox" name="chk1" id="chk1" class="chk1">First</label></li>
                              <li><label for="chk2"><input type="checkbox" name="chk2" id="chk2" class="chk1">Second</label></li>
                              <li><label for="chk3"><input type="checkbox" name="chk3" id="chk3" class="chk1">Third</label></li>
                              <li><label for="chk4"><input type="checkbox" name="chk4" id="chk4" class="chk1">Fourth</label></li>
                              <li><label for="chk5"><input type="checkbox" name="chk5" id="chk5" class="chk1">Fifth</label></li>
                              <li><label for="chk6"><input type="checkbox" name="chk6" id="chk6" class="chk1">Sixth</label></li>
                              <li><label for="chk7"><input type="checkbox" name="chk7" id="chk7" class="chk1">Seventh</label></li>
                              <li><label for="chk1"><input type="checkbox" name="chk1" id="chk1" class="chk1">First</label></li>
                              <li><label for="chk2"><input type="checkbox" name="chk2" id="chk2" class="chk1">Second</label></li>
                              <li><label for="chk3"><input type="checkbox" name="chk3" id="chk3" class="chk1">Third</label></li>
                              <li><label for="chk4"><input type="checkbox" name="chk4" id="chk4" class="chk1">Fourth</label></li>
                              <li><label for="chk5"><input type="checkbox" name="chk5" id="chk5" class="chk1">Fifth</label></li>
                              <li><label for="chk6"><input type="checkbox" name="chk6" id="chk6" class="chk1">Sixth</label></li>
                              <li><label for="chk7"><input type="checkbox" name="chk7" id="chk7" class="chk1">Seventh</label></li>
                              <li><label for="chk1"><input type="checkbox" name="chk1" id="chk1" class="chk1">First</label></li>
                              <li><label for="chk2"><input type="checkbox" name="chk2" id="chk2" class="chk1">Second</label></li>
                              <li><label for="chk3"><input type="checkbox" name="chk3" id="chk3" class="chk1">Third</label></li>
                              <li><label for="chk4"><input type="checkbox" name="chk4" id="chk4" class="chk1">Fourth</label></li>
                              <li><label for="chk5"><input type="checkbox" name="chk5" id="chk5" class="chk1">Fifth</label></li>
                              <li><label for="chk6"><input type="checkbox" name="chk6" id="chk6" class="chk1">Sixth</label></li>
                              <li><label for="chk7"><input type="checkbox" name="chk7" id="chk7" class="chk1">Seventh</label></li>
                           </ul>
                        </div>
                     </div>
                     <div class="col-md-6 col-xs-12" >
                        <div class="card_go">
                           <p>Property Subtype</p>
                           <ul class="ulc">
                              <li><label for="chk1"><input type="checkbox" name="chk1" id="chk1" class="chk1">First</label></li>
                              <li><label for="chk2"><input type="checkbox" name="chk2" id="chk2" class="chk1">Second</label></li>
                              <li><label for="chk3"><input type="checkbox" name="chk3" id="chk3" class="chk1">Third</label></li>
                              <li><label for="chk4"><input type="checkbox" name="chk4" id="chk4" class="chk1">Fourth</label></li>
                              <li><label for="chk5"><input type="checkbox" name="chk5" id="chk5" class="chk1">Fifth</label></li>
                              <li><label for="chk6"><input type="checkbox" name="chk6" id="chk6" class="chk1">Sixth</label></li>
                              <li><label for="chk7"><input type="checkbox" name="chk7" id="chk7" class="chk1">Seventh</label></li>
                              <li><label for="chk1"><input type="checkbox" name="chk1" id="chk1" class="chk1">First</label></li>
                              <li><label for="chk2"><input type="checkbox" name="chk2" id="chk2" class="chk1">Second</label></li>
                              <li><label for="chk3"><input type="checkbox" name="chk3" id="chk3" class="chk1">Third</label></li>
                              <li><label for="chk4"><input type="checkbox" name="chk4" id="chk4" class="chk1">Fourth</label></li>
                              <li><label for="chk5"><input type="checkbox" name="chk5" id="chk5" class="chk1">Fifth</label></li>
                              <li><label for="chk6"><input type="checkbox" name="chk6" id="chk6" class="chk1">Sixth</label></li>
                              <li><label for="chk7"><input type="checkbox" name="chk7" id="chk7" class="chk1">Seventh</label></li>
                              <li><label for="chk1"><input type="checkbox" name="chk1" id="chk1" class="chk1">First</label></li>
                              <li><label for="chk2"><input type="checkbox" name="chk2" id="chk2" class="chk1">Second</label></li>
                              <li><label for="chk3"><input type="checkbox" name="chk3" id="chk3" class="chk1">Third</label></li>
                              <li><label for="chk4"><input type="checkbox" name="chk4" id="chk4" class="chk1">Fourth</label></li>
                              <li><label for="chk5"><input type="checkbox" name="chk5" id="chk5" class="chk1">Fifth</label></li>
                              <li><label for="chk6"><input type="checkbox" name="chk6" id="chk6" class="chk1">Sixth</label></li>
                              <li><label for="chk7"><input type="checkbox" name="chk7" id="chk7" class="chk1">Seventh</label></li>
                           </ul>
                        </div>
                     </div>
                  </div>
                  <div class="row">
                       <div class="col-md-6 col-xs-12">
                          <div class="card_go">
                             <div class="row">
                                <div class="col-md-6 col-xs-12" >
                                   <p>Bedrooms</p>
                                   <form>
                                      <select name="cars" id="cars" class="lc">
                                         <option value="city" selected="selected">Any</option>
                                         <option value="area">1 or More</option>
                                         <option value="zip">2 or More</option>
                                         <option value="county">3 or More</option>
                                         <option value="subdivision">4 or More</option>
                                         <option value="address">5 or More</option>
                                         <option value="mls_no">6 or More</option>
                                      </select>
                                   </form>
                                   <p>Lot Size</p>
                                   <form>
                                      <select name="cars" id="cars" class="lc">
                                         <option value="city" selected="selected">Any</option>
                                         <option value="area">1 or More</option>
                                         <option value="zip">2 or More</option>
                                         <option value="county">3 or More</option>
                                         <option value="subdivision">4 or More</option>
                                         <option value="address">5 or More</option>
                                         <option value="mls_no">6 or More</option>
                                      </select>
                                   </form>
                                   <p>Total Rooms</p>
                                   <form>
                                      <select name="cars" id="cars" class="lc">
                                         <option value="city" selected="selected">Any</option>
                                         <option value="area">1 or More</option>
                                         <option value="zip">2 or More</option>
                                         <option value="county">3 or More</option>
                                         <option value="subdivision">4 or More</option>
                                         <option value="address">5 or More</option>
                                         <option value="mls_no">6 or More</option>
                                      </select>
                                   </form>
                                   <p>Sq.ft.</p>
                                   <form>
                                      <select name="cars" id="cars" class="lc">
                                         <option value="city" selected="selected">Any</option>
                                         <option value="area">1 or More</option>
                                         <option value="zip">2 or More</option>
                                         <option value="county">3 or More</option>
                                         <option value="subdivision">4 or More</option>
                                         <option value="address">5 or More</option>
                                         <option value="mls_no">6 or More</option>
                                      </select>
                                   </form>
                                   <p>Units</p>
                                   <form>
                                      <select name="cars" id="cars" class="lc">
                                         <option value="city" selected="selected">Any</option>
                                         <option value="area">1 or More</option>
                                         <option value="zip">2 or More</option>
                                         <option value="county">3 or More</option>
                                         <option value="subdivision">4 or More</option>
                                         <option value="address">5 or More</option>
                                         <option value="mls_no">6 or More</option>
                                      </select>
                                   </form>
                                   <p>Built Before</p>
                                   <form>
                                      <select name="cars" id="cars" class="lc">
                                         <option value="city" selected="selected">Any</option>
                                         <option value="area">1 or More</option>
                                         <option value="zip">2 or More</option>
                                         <option value="county">3 or More</option>
                                         <option value="subdivision">4 or More</option>
                                         <option value="address">5 or More</option>
                                         <option value="mls_no">6 or More</option>
                                      </select>
                                   </form>
                                   <p>Built After</p>
                                   <form>
                                      <select name="cars" id="cars" class="lc">
                                         <option value="city" selected="selected">Any</option>
                                         <option value="area">1 or More</option>
                                         <option value="zip">2 or More</option>
                                         <option value="county">3 or More</option>
                                         <option value="subdivision">4 or More</option>
                                         <option value="address">5 or More</option>
                                         <option value="mls_no">6 or More</option>
                                      </select>
                                   </form>
                                </div>
                                <div class="col-md-6 col-xs-12" >
                                   <p>Bathrooms</p>
                                   <form>
                                      <select name="cars" id="cars" class="lc">
                                         <option value="city" selected="selected">Any</option>
                                         <option value="area">1 or More</option>
                                         <option value="zip">2 or More</option>
                                         <option value="county">3 or More</option>
                                         <option value="subdivision">4 or More</option>
                                         <option value="address">5 or More</option>
                                         <option value="mls_no">6 or More</option>
                                      </select>
                                   </form>
                                </div>
                             </div>
                          </div>
                       </div>
                       <div class="col-md-6 col-xs-12">
                          <div class="card_go">
                             <div class="row">
                                <div class="col-md-6 col-xs-12" >
                                   <p>Min Price</p>
                                   <form>
                                      <select name="cars" id="cars" class="lc">
                                         <option value="city" selected="selected">Any</option>
                                         <option value="area">1 or More</option>
                                         <option value="zip">2 or More</option>
                                         <option value="county">3 or More</option>
                                         <option value="subdivision">4 or More</option>
                                         <option value="address">5 or More</option>
                                         <option value="mls_no">6 or More</option>
                                      </select>
                                   </form>
                                   <ul class="ulc maxmin">
                                      <li><label for="chk1"><input type="checkbox" name="chk1" id="chk1" class="chk1">First</label></li>
                                      <li><label for="chk2"><input type="checkbox" name="chk2" id="chk2" class="chk1">Second</label></li>
                                      <li><label for="chk3"><input type="checkbox" name="chk3" id="chk3" class="chk1">Third</label></li>
                                      <li><label for="chk4"><input type="checkbox" name="chk4" id="chk4" class="chk1">Fourth</label></li>
                                      <li><label for="chk5"><input type="checkbox" name="chk5" id="chk5" class="chk1">Fifth</label></li>
                                      <li><label for="chk6"><input type="checkbox" name="chk6" id="chk6" class="chk1">Sixth</label></li>
                                      <li><label for="chk7"><input type="checkbox" name="chk7" id="chk7" class="chk1">Seventh</label></li>
                                      <li><label for="chk1"><input type="checkbox" name="chk1" id="chk1" class="chk1">First</label></li>
                                      <li><label for="chk2"><input type="checkbox" name="chk2" id="chk2" class="chk1">Second</label></li>
                                      <li><label for="chk3"><input type="checkbox" name="chk3" id="chk3" class="chk1">Third</label></li>
                                      <li><label for="chk4"><input type="checkbox" name="chk4" id="chk4" class="chk1">Fourth</label></li>
                                      <li><label for="chk5"><input type="checkbox" name="chk5" id="chk5" class="chk1">Fifth</label></li>
                                      <li><label for="chk6"><input type="checkbox" name="chk6" id="chk6" class="chk1">Sixth</label></li>
                                      <li><label for="chk7"><input type="checkbox" name="chk7" id="chk7" class="chk1">Seventh</label></li>
                                      <li><label for="chk1"><input type="checkbox" name="chk1" id="chk1" class="chk1">First</label></li>
                                      <li><label for="chk2"><input type="checkbox" name="chk2" id="chk2" class="chk1">Second</label></li>
                                      <li><label for="chk3"><input type="checkbox" name="chk3" id="chk3" class="chk1">Third</label></li>
                                      <li><label for="chk4"><input type="checkbox" name="chk4" id="chk4" class="chk1">Fourth</label></li>
                                      <li><label for="chk5"><input type="checkbox" name="chk5" id="chk5" class="chk1">Fifth</label></li>
                                      <li><label for="chk6"><input type="checkbox" name="chk6" id="chk6" class="chk1">Sixth</label></li>
                                      <li><label for="chk7"><input type="checkbox" name="chk7" id="chk7" class="chk1">Seventh</label></li>
                                   </ul>
                                </div>
                                <div class="col-md-6 col-xs-12" >
                                   <p>Max Price</p>
                                   <form>
                                      <select name="cars" id="cars" class="lc">
                                         <option value="city" selected="selected">Any</option>
                                         <option value="area">1 or More</option>
                                         <option value="zip">2 or More</option>
                                         <option value="county">3 or More</option>
                                         <option value="subdivision">4 or More</option>
                                         <option value="address">5 or More</option>
                                         <option value="mls_no">6 or More</option>
                                      </select>
                                   </form>
                                </div>
                             </div>
                          </div>
                       </div>
                  </div>
                  <div class="row">
                     <div class="col-md-6 col-xs-12">
                        <div class="card_go info_no">
                           <p>Middle School</p>
                           <ul class="hide_info">
                              <li>Show More Options</li>
                           </ul>
                        </div>
                     </div>
                     <div class="col-md-6 col-xs-12">
                        <div class="card_go info_no">
                           <p>Middle School</p>
                           <ul class="hide_info">
                              <li>Show More Options</li>
                           </ul>
                        </div>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-md-6 col-xs-12">
                        <div class="card_go info_no">
                           <p>High School</p>
                           <ul class="hide_info">
                              <li>Show More Options</li>
                           </ul>
                        </div>
                     </div>
                     <div class="col-md-6 col-xs-12" >
                        <div class="card_go">
                           <p>Listing Status</p>
                           <ul class="ulc">
                              <li><label for="chk1"><input type="checkbox" name="chk1" id="chk1" class="chk1">First</label></li>
                              <li><label for="chk2"><input type="checkbox" name="chk2" id="chk2" class="chk1">Second</label></li>
                              <li><label for="chk3"><input type="checkbox" name="chk3" id="chk3" class="chk1">Third</label></li>
                              <li><label for="chk4"><input type="checkbox" name="chk4" id="chk4" class="chk1">Fourth</label></li>
                              <li><label for="chk5"><input type="checkbox" name="chk5" id="chk5" class="chk1">Fifth</label></li>
                              <li><label for="chk6"><input type="checkbox" name="chk6" id="chk6" class="chk1">Sixth</label></li>
                              <li><label for="chk7"><input type="checkbox" name="chk7" id="chk7" class="chk1">Seventh</label></li>
                              <li><label for="chk1"><input type="checkbox" name="chk1" id="chk1" class="chk1">First</label></li>
                              <li><label for="chk2"><input type="checkbox" name="chk2" id="chk2" class="chk1">Second</label></li>
                              <li><label for="chk3"><input type="checkbox" name="chk3" id="chk3" class="chk1">Third</label></li>
                              <li><label for="chk4"><input type="checkbox" name="chk4" id="chk4" class="chk1">Fourth</label></li>
                              <li><label for="chk5"><input type="checkbox" name="chk5" id="chk5" class="chk1">Fifth</label></li>
                              <li><label for="chk6"><input type="checkbox" name="chk6" id="chk6" class="chk1">Sixth</label></li>
                              <li><label for="chk7"><input type="checkbox" name="chk7" id="chk7" class="chk1">Seventh</label></li>
                              <li><label for="chk1"><input type="checkbox" name="chk1" id="chk1" class="chk1">First</label></li>
                              <li><label for="chk2"><input type="checkbox" name="chk2" id="chk2" class="chk1">Second</label></li>
                              <li><label for="chk3"><input type="checkbox" name="chk3" id="chk3" class="chk1">Third</label></li>
                              <li><label for="chk4"><input type="checkbox" name="chk4" id="chk4" class="chk1">Fourth</label></li>
                              <li><label for="chk5"><input type="checkbox" name="chk5" id="chk5" class="chk1">Fifth</label></li>
                              <li><label for="chk6"><input type="checkbox" name="chk6" id="chk6" class="chk1">Sixth</label></li>
                              <li><label for="chk7"><input type="checkbox" name="chk7" id="chk7" class="chk1">Seventh</label></li>
                           </ul>
                        </div>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-md-6 col-xs-12">
                        <div class="card_go">
                           <p>Special Conditions</p>
                           <ul class="ulc">
                              <li><label for="chk1"><input type="checkbox" name="chk1" id="chk1" class="chk1">First</label></li>
                              <li><label for="chk2"><input type="checkbox" name="chk2" id="chk2" class="chk1">Second</label></li>
                              <li><label for="chk3"><input type="checkbox" name="chk3" id="chk3" class="chk1">Third</label></li>
                              <li><label for="chk4"><input type="checkbox" name="chk4" id="chk4" class="chk1">Fourth</label></li>
                              <li><label for="chk5"><input type="checkbox" name="chk5" id="chk5" class="chk1">Fifth</label></li>
                              <li><label for="chk6"><input type="checkbox" name="chk6" id="chk6" class="chk1">Sixth</label></li>
                              <li><label for="chk7"><input type="checkbox" name="chk7" id="chk7" class="chk1">Seventh</label></li>
                              <li><label for="chk1"><input type="checkbox" name="chk1" id="chk1" class="chk1">First</label></li>
                              <li><label for="chk2"><input type="checkbox" name="chk2" id="chk2" class="chk1">Second</label></li>
                              <li><label for="chk3"><input type="checkbox" name="chk3" id="chk3" class="chk1">Third</label></li>
                              <li><label for="chk4"><input type="checkbox" name="chk4" id="chk4" class="chk1">Fourth</label></li>
                              <li><label for="chk5"><input type="checkbox" name="chk5" id="chk5" class="chk1">Fifth</label></li>
                              <li><label for="chk6"><input type="checkbox" name="chk6" id="chk6" class="chk1">Sixth</label></li>
                              <li><label for="chk7"><input type="checkbox" name="chk7" id="chk7" class="chk1">Seventh</label></li>
                              <li><label for="chk1"><input type="checkbox" name="chk1" id="chk1" class="chk1">First</label></li>
                              <li><label for="chk2"><input type="checkbox" name="chk2" id="chk2" class="chk1">Second</label></li>
                              <li><label for="chk3"><input type="checkbox" name="chk3" id="chk3" class="chk1">Third</label></li>
                              <li><label for="chk4"><input type="checkbox" name="chk4" id="chk4" class="chk1">Fourth</label></li>
                              <li><label for="chk5"><input type="checkbox" name="chk5" id="chk5" class="chk1">Fifth</label></li>
                              <li><label for="chk6"><input type="checkbox" name="chk6" id="chk6" class="chk1">Sixth</label></li>
                              <li><label for="chk7"><input type="checkbox" name="chk7" id="chk7" class="chk1">Seventh</label></li>
                           </ul>
                        </div>
                     </div>
                     <div class="col-md-6 col-xs-12" >
                        <div class="card_go">
                           <p>Stories</p>
                           <ul class="ulc">
                              <li><label for="chk1"><input type="checkbox" name="chk1" id="chk1" class="chk1">First</label></li>
                              <li><label for="chk2"><input type="checkbox" name="chk2" id="chk2" class="chk1">Second</label></li>
                              <li><label for="chk3"><input type="checkbox" name="chk3" id="chk3" class="chk1">Third</label></li>
                              <li><label for="chk4"><input type="checkbox" name="chk4" id="chk4" class="chk1">Fourth</label></li>
                              <li><label for="chk5"><input type="checkbox" name="chk5" id="chk5" class="chk1">Fifth</label></li>
                              <li><label for="chk6"><input type="checkbox" name="chk6" id="chk6" class="chk1">Sixth</label></li>
                              <li><label for="chk7"><input type="checkbox" name="chk7" id="chk7" class="chk1">Seventh</label></li>
                              <li><label for="chk1"><input type="checkbox" name="chk1" id="chk1" class="chk1">First</label></li>
                              <li><label for="chk2"><input type="checkbox" name="chk2" id="chk2" class="chk1">Second</label></li>
                              <li><label for="chk3"><input type="checkbox" name="chk3" id="chk3" class="chk1">Third</label></li>
                              <li><label for="chk4"><input type="checkbox" name="chk4" id="chk4" class="chk1">Fourth</label></li>
                              <li><label for="chk5"><input type="checkbox" name="chk5" id="chk5" class="chk1">Fifth</label></li>
                              <li><label for="chk6"><input type="checkbox" name="chk6" id="chk6" class="chk1">Sixth</label></li>
                              <li><label for="chk7"><input type="checkbox" name="chk7" id="chk7" class="chk1">Seventh</label></li>
                              <li><label for="chk1"><input type="checkbox" name="chk1" id="chk1" class="chk1">First</label></li>
                              <li><label for="chk2"><input type="checkbox" name="chk2" id="chk2" class="chk1">Second</label></li>
                              <li><label for="chk3"><input type="checkbox" name="chk3" id="chk3" class="chk1">Third</label></li>
                              <li><label for="chk4"><input type="checkbox" name="chk4" id="chk4" class="chk1">Fourth</label></li>
                              <li><label for="chk5"><input type="checkbox" name="chk5" id="chk5" class="chk1">Fifth</label></li>
                              <li><label for="chk6"><input type="checkbox" name="chk6" id="chk6" class="chk1">Sixth</label></li>
                              <li><label for="chk7"><input type="checkbox" name="chk7" id="chk7" class="chk1">Seventh</label></li>
                           </ul>
                        </div>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-md-6 col-xs-12">
                        <div class="card_go">
                           <p>Style</p>
                           <ul class="ulc">
                              <li><label for="chk1"><input type="checkbox" name="chk1" id="chk1" class="chk1">First</label></li>
                              <li><label for="chk2"><input type="checkbox" name="chk2" id="chk2" class="chk1">Second</label></li>
                              <li><label for="chk3"><input type="checkbox" name="chk3" id="chk3" class="chk1">Third</label></li>
                              <li><label for="chk4"><input type="checkbox" name="chk4" id="chk4" class="chk1">Fourth</label></li>
                              <li><label for="chk5"><input type="checkbox" name="chk5" id="chk5" class="chk1">Fifth</label></li>
                              <li><label for="chk6"><input type="checkbox" name="chk6" id="chk6" class="chk1">Sixth</label></li>
                              <li><label for="chk7"><input type="checkbox" name="chk7" id="chk7" class="chk1">Seventh</label></li>
                              <li><label for="chk1"><input type="checkbox" name="chk1" id="chk1" class="chk1">First</label></li>
                              <li><label for="chk2"><input type="checkbox" name="chk2" id="chk2" class="chk1">Second</label></li>
                              <li><label for="chk3"><input type="checkbox" name="chk3" id="chk3" class="chk1">Third</label></li>
                              <li><label for="chk4"><input type="checkbox" name="chk4" id="chk4" class="chk1">Fourth</label></li>
                              <li><label for="chk5"><input type="checkbox" name="chk5" id="chk5" class="chk1">Fifth</label></li>
                              <li><label for="chk6"><input type="checkbox" name="chk6" id="chk6" class="chk1">Sixth</label></li>
                              <li><label for="chk7"><input type="checkbox" name="chk7" id="chk7" class="chk1">Seventh</label></li>
                              <li><label for="chk1"><input type="checkbox" name="chk1" id="chk1" class="chk1">First</label></li>
                              <li><label for="chk2"><input type="checkbox" name="chk2" id="chk2" class="chk1">Second</label></li>
                              <li><label for="chk3"><input type="checkbox" name="chk3" id="chk3" class="chk1">Third</label></li>
                              <li><label for="chk4"><input type="checkbox" name="chk4" id="chk4" class="chk1">Fourth</label></li>
                              <li><label for="chk5"><input type="checkbox" name="chk5" id="chk5" class="chk1">Fifth</label></li>
                              <li><label for="chk6"><input type="checkbox" name="chk6" id="chk6" class="chk1">Sixth</label></li>
                              <li><label for="chk7"><input type="checkbox" name="chk7" id="chk7" class="chk1">Seventh</label></li>
                           </ul>
                        </div>
                     </div>
                     <div class="col-md-6 col-xs-12" >
                        <div class="card_go">
                           <p>Construction Materials</p>
                           <ul class="ulc">
                              <li><label for="chk1"><input type="checkbox" name="chk1" id="chk1" class="chk1">First</label></li>
                              <li><label for="chk2"><input type="checkbox" name="chk2" id="chk2" class="chk1">Second</label></li>
                              <li><label for="chk3"><input type="checkbox" name="chk3" id="chk3" class="chk1">Third</label></li>
                              <li><label for="chk4"><input type="checkbox" name="chk4" id="chk4" class="chk1">Fourth</label></li>
                              <li><label for="chk5"><input type="checkbox" name="chk5" id="chk5" class="chk1">Fifth</label></li>
                              <li><label for="chk6"><input type="checkbox" name="chk6" id="chk6" class="chk1">Sixth</label></li>
                              <li><label for="chk7"><input type="checkbox" name="chk7" id="chk7" class="chk1">Seventh</label></li>
                              <li><label for="chk1"><input type="checkbox" name="chk1" id="chk1" class="chk1">First</label></li>
                              <li><label for="chk2"><input type="checkbox" name="chk2" id="chk2" class="chk1">Second</label></li>
                              <li><label for="chk3"><input type="checkbox" name="chk3" id="chk3" class="chk1">Third</label></li>
                              <li><label for="chk4"><input type="checkbox" name="chk4" id="chk4" class="chk1">Fourth</label></li>
                              <li><label for="chk5"><input type="checkbox" name="chk5" id="chk5" class="chk1">Fifth</label></li>
                              <li><label for="chk6"><input type="checkbox" name="chk6" id="chk6" class="chk1">Sixth</label></li>
                              <li><label for="chk7"><input type="checkbox" name="chk7" id="chk7" class="chk1">Seventh</label></li>
                              <li><label for="chk1"><input type="checkbox" name="chk1" id="chk1" class="chk1">First</label></li>
                              <li><label for="chk2"><input type="checkbox" name="chk2" id="chk2" class="chk1">Second</label></li>
                              <li><label for="chk3"><input type="checkbox" name="chk3" id="chk3" class="chk1">Third</label></li>
                              <li><label for="chk4"><input type="checkbox" name="chk4" id="chk4" class="chk1">Fourth</label></li>
                              <li><label for="chk5"><input type="checkbox" name="chk5" id="chk5" class="chk1">Fifth</label></li>
                              <li><label for="chk6"><input type="checkbox" name="chk6" id="chk6" class="chk1">Sixth</label></li>
                              <li><label for="chk7"><input type="checkbox" name="chk7" id="chk7" class="chk1">Seventh</label></li>
                           </ul>
                        </div>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-md-6 col-xs-12">
                        <div class="card_go info_no">
                           <p>Builder Name</p>
                           <ul class="hide_info">
                              <li>Show More Options</li>
                           </ul>
                        </div>
                     </div>
                     <div class="col-md-6 col-xs-12">
                        <div class="card_go info_no">
                           <p>Complex Community Name NCCB</p>
                           <ul class="hide_info">
                              <li>Show More Options</li>
                           </ul>
                        </div>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-md-6 col-xs-12">
                        <div class="card_go">
                           <p>Minimum Lease</p>
                           <ul class="ulc">
                              <li><label for="chk1"><input type="checkbox" name="chk1" id="chk1" class="chk1">First</label></li>
                              <li><label for="chk2"><input type="checkbox" name="chk2" id="chk2" class="chk1">Second</label></li>
                              <li><label for="chk3"><input type="checkbox" name="chk3" id="chk3" class="chk1">Third</label></li>
                              <li><label for="chk4"><input type="checkbox" name="chk4" id="chk4" class="chk1">Fourth</label></li>
                              <li><label for="chk5"><input type="checkbox" name="chk5" id="chk5" class="chk1">Fifth</label></li>
                              <li><label for="chk6"><input type="checkbox" name="chk6" id="chk6" class="chk1">Sixth</label></li>
                              <li><label for="chk7"><input type="checkbox" name="chk7" id="chk7" class="chk1">Seventh</label></li>
                              <li><label for="chk1"><input type="checkbox" name="chk1" id="chk1" class="chk1">First</label></li>
                              <li><label for="chk2"><input type="checkbox" name="chk2" id="chk2" class="chk1">Second</label></li>
                              <li><label for="chk3"><input type="checkbox" name="chk3" id="chk3" class="chk1">Third</label></li>
                              <li><label for="chk4"><input type="checkbox" name="chk4" id="chk4" class="chk1">Fourth</label></li>
                              <li><label for="chk5"><input type="checkbox" name="chk5" id="chk5" class="chk1">Fifth</label></li>
                              <li><label for="chk6"><input type="checkbox" name="chk6" id="chk6" class="chk1">Sixth</label></li>
                              <li><label for="chk7"><input type="checkbox" name="chk7" id="chk7" class="chk1">Seventh</label></li>
                              <li><label for="chk1"><input type="checkbox" name="chk1" id="chk1" class="chk1">First</label></li>
                              <li><label for="chk2"><input type="checkbox" name="chk2" id="chk2" class="chk1">Second</label></li>
                              <li><label for="chk3"><input type="checkbox" name="chk3" id="chk3" class="chk1">Third</label></li>
                              <li><label for="chk4"><input type="checkbox" name="chk4" id="chk4" class="chk1">Fourth</label></li>
                              <li><label for="chk5"><input type="checkbox" name="chk5" id="chk5" class="chk1">Fifth</label></li>
                              <li><label for="chk6"><input type="checkbox" name="chk6" id="chk6" class="chk1">Sixth</label></li>
                              <li><label for="chk7"><input type="checkbox" name="chk7" id="chk7" class="chk1">Seventh</label></li>
                           </ul>
                        </div>
                     </div>
                     <div class="col-md-6 col-xs-12" >
                        <div class="card_go">
                           <p>Property Condition</p>
                           <ul class="ulc">
                              <li><label for="chk1"><input type="checkbox" name="chk1" id="chk1" class="chk1">First</label></li>
                              <li><label for="chk2"><input type="checkbox" name="chk2" id="chk2" class="chk1">Second</label></li>
                              <li><label for="chk3"><input type="checkbox" name="chk3" id="chk3" class="chk1">Third</label></li>
                              <li><label for="chk4"><input type="checkbox" name="chk4" id="chk4" class="chk1">Fourth</label></li>
                              <li><label for="chk5"><input type="checkbox" name="chk5" id="chk5" class="chk1">Fifth</label></li>
                              <li><label for="chk6"><input type="checkbox" name="chk6" id="chk6" class="chk1">Sixth</label></li>
                              <li><label for="chk7"><input type="checkbox" name="chk7" id="chk7" class="chk1">Seventh</label></li>
                              <li><label for="chk1"><input type="checkbox" name="chk1" id="chk1" class="chk1">First</label></li>
                              <li><label for="chk2"><input type="checkbox" name="chk2" id="chk2" class="chk1">Second</label></li>
                              <li><label for="chk3"><input type="checkbox" name="chk3" id="chk3" class="chk1">Third</label></li>
                              <li><label for="chk4"><input type="checkbox" name="chk4" id="chk4" class="chk1">Fourth</label></li>
                              <li><label for="chk5"><input type="checkbox" name="chk5" id="chk5" class="chk1">Fifth</label></li>
                              <li><label for="chk6"><input type="checkbox" name="chk6" id="chk6" class="chk1">Sixth</label></li>
                              <li><label for="chk7"><input type="checkbox" name="chk7" id="chk7" class="chk1">Seventh</label></li>
                              <li><label for="chk1"><input type="checkbox" name="chk1" id="chk1" class="chk1">First</label></li>
                              <li><label for="chk2"><input type="checkbox" name="chk2" id="chk2" class="chk1">Second</label></li>
                              <li><label for="chk3"><input type="checkbox" name="chk3" id="chk3" class="chk1">Third</label></li>
                              <li><label for="chk4"><input type="checkbox" name="chk4" id="chk4" class="chk1">Fourth</label></li>
                              <li><label for="chk5"><input type="checkbox" name="chk5" id="chk5" class="chk1">Fifth</label></li>
                              <li><label for="chk6"><input type="checkbox" name="chk6" id="chk6" class="chk1">Sixth</label></li>
                              <li><label for="chk7"><input type="checkbox" name="chk7" id="chk7" class="chk1">Seventh</label></li>
                           </ul>
                        </div>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-md-6 col-xs-12">
                        <div class="card_go">
                           <p>Business Type</p>
                           <ul class="ulc">
                              <li><label for="chk1"><input type="checkbox" name="chk1" id="chk1" class="chk1">First</label></li>
                              <li><label for="chk2"><input type="checkbox" name="chk2" id="chk2" class="chk1">Second</label></li>
                              <li><label for="chk3"><input type="checkbox" name="chk3" id="chk3" class="chk1">Third</label></li>
                              <li><label for="chk4"><input type="checkbox" name="chk4" id="chk4" class="chk1">Fourth</label></li>
                              <li><label for="chk5"><input type="checkbox" name="chk5" id="chk5" class="chk1">Fifth</label></li>
                              <li><label for="chk6"><input type="checkbox" name="chk6" id="chk6" class="chk1">Sixth</label></li>
                              <li><label for="chk7"><input type="checkbox" name="chk7" id="chk7" class="chk1">Seventh</label></li>
                              <li><label for="chk1"><input type="checkbox" name="chk1" id="chk1" class="chk1">First</label></li>
                              <li><label for="chk2"><input type="checkbox" name="chk2" id="chk2" class="chk1">Second</label></li>
                              <li><label for="chk3"><input type="checkbox" name="chk3" id="chk3" class="chk1">Third</label></li>
                              <li><label for="chk4"><input type="checkbox" name="chk4" id="chk4" class="chk1">Fourth</label></li>
                              <li><label for="chk5"><input type="checkbox" name="chk5" id="chk5" class="chk1">Fifth</label></li>
                              <li><label for="chk6"><input type="checkbox" name="chk6" id="chk6" class="chk1">Sixth</label></li>
                              <li><label for="chk7"><input type="checkbox" name="chk7" id="chk7" class="chk1">Seventh</label></li>
                              <li><label for="chk1"><input type="checkbox" name="chk1" id="chk1" class="chk1">First</label></li>
                              <li><label for="chk2"><input type="checkbox" name="chk2" id="chk2" class="chk1">Second</label></li>
                              <li><label for="chk3"><input type="checkbox" name="chk3" id="chk3" class="chk1">Third</label></li>
                              <li><label for="chk4"><input type="checkbox" name="chk4" id="chk4" class="chk1">Fourth</label></li>
                              <li><label for="chk5"><input type="checkbox" name="chk5" id="chk5" class="chk1">Fifth</label></li>
                              <li><label for="chk6"><input type="checkbox" name="chk6" id="chk6" class="chk1">Sixth</label></li>
                              <li><label for="chk7"><input type="checkbox" name="chk7" id="chk7" class="chk1">Seventh</label></li>
                           </ul>
                        </div>
                     </div>
                  </div>
                  <div class="row mt-4">
                      <div class="col-md-12 col-xs-12">
                          <div class="ad_srch">
                              <button class="mdc-button mdc-button--raised mx-2 mdc-ripple-upgraded" type="button" id="show-more-filters" style="--mdc-ripple-fg-size:61px; --mdc-ripple-fg-scale:1.95673; --mdc-ripple-fg-translate-start:11.1094px, -9.29688px; --mdc-ripple-fg-translate-end:21.1328px, -12.5px;">
                                <span class="mdc-button__ripple"></span>
                                <span class="mdc-button__label">Search</span> 
                            </button>
                          </div>
                      </div>
                  </div>
            </div>
            </form>
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
                  <p class="mb-0">Lorem ipsum dolor sit, amet consectetur adipisicing elit.</p>
               </div>
               <div class="row start-xs middle-xs p-3">
                  <i class="material-icons mat-icon-xlg mx-2">call</i>
                  <div class="column">
                     <p class="mb-0">CALL US NOW</p>
                     <h2 class="ws-nowrap">813-494-2595</h2>
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
<?php include("footer.php"); ?>