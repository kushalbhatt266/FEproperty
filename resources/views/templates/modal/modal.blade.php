<!-- Save search -->
<div id="saved_search_modal" class="modal">
  <div class="row around-xs">
      <h3 class="w-100 text-center py-3">Saved Search Name</h3> 
          <div class="col-xs-12 col-sm-12 col-md-12 p-2">  
              <div class="mdc-text-field mdc-text-field--outlined w-100">
                  <input type="text" id="save_name" class="mdc-text-field__input" placeholder="Name is required" required>
                  <div class="mdc-notched-outline">
                      <div class="mdc-notched-outline__leading"></div>
                      <div class="mdc-notched-outline__notch">
                          <!-- <label class="mdc-floating-label">:</label> -->
                      </div>
                      <div class="mdc-notched-outline__trailing"></div>
                  </div>
              </div> 
          </div>   
          <div class="col-xs-12 w-100 py-3 text-center">
              <button class="mdc-button mdc-button--raised" type="button" onclick="saveSearch();" id="saved_search">
                  <span class="mdc-button__ripple"></span> 
                  <span class="mdc-button__label">Save</span> 
              </button>   
          </div>  
  </div> 
</div>
<p><a href="#saved_search_modal" rel="modal:close" id="close_saved_search_modal" style="display:none;">Open Modal</a></p>

<!-- Map Search -->
<p><a href="#map_filter_modal" rel="modal:close" id="close_map_filter_modal" style="display:none;">Open Modal</a></p>
<div id="map_filter_modal" class="modal">
  <div class="row around-xs">
      <h3 class="w-100 text-center py-3">Search Filter</h3> 
          <form id="map_search" action="javascript:void(0);" id="filters" class="search-wrapper m-0 o-hidden"> 
            <div class="column p-2">  
                <div class="row">
                    <div class="col-xs-12 p-2">
                        <div class="mdc-text-field mdc-text-field--outlined">
                            <input class="mdc-text-field__input" name="location" id="location_search" value="{{app('request')->input('location')}}" placeholder="Type address, City or Zipcode">
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
                            <input class="mdc-text-field__input" name="min_price" id="search_min_price" value="{{app('request')->input('min_price')}}">
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
                            <input class="mdc-text-field__input" name="max_price" id="search_max_price" value="{{app('request')->input('max_price')}}">
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
                        <select class="mdc-list-item" name="bathrooms" id="search_bathrooms" style="width: 100%;height: 50px; margin: 0px;">
                            <option value="">Bathrooms</option>
                            <option value="any" @if(app('request')->input('bathrooms') == 'any') selected @endif>Any</option>
                            <option value="1" @if(app('request')->input('bathrooms') == '1') selected @endif>1 Or More</option>
                            <option value="2" @if(app('request')->input('bathrooms') == '2') selected @endif>2 Or More</option>
                            <option value="3" @if(app('request')->input('bathrooms') == '3') selected @endif>3 Or More</option>
                            <option value="4" @if(app('request')->input('bathrooms') == '4') selected @endif>4 Or More</option>
                        </select> 
                    </div>
                    <div class="col-xs-6 p-2 form-group">
                        <select class="mdc-list-item" name="bedrooms" id="search_bedrooms" style="width: 100%;height: 50px; margin: 0px;">
                            <option value="">Bedrooms</option>
                            <option value="any" @if(app('request')->input('bedrooms') == 'any') selected @endif>Any</option>
                            <option value="1" @if(app('request')->input('bedrooms') == '1') selected @endif>1 Or More</option>
                            <option value="2" @if(app('request')->input('bedrooms') == '2') selected @endif>2 Or More</option>
                            <option value="3" @if(app('request')->input('bedrooms') == '3') selected @endif>3 Or More</option>
                            <option value="4" @if(app('request')->input('bedrooms') == '4') selected @endif>4 Or More</option>
                        </select> 
                    </div> 
                </div>
                <div class="row">
                    <div class="col-md-12 col-xs-12">
                       <p>Property Type</p>
                       <ul class="ulc">
                            <li>
                                <label for="business_opportunity">
                                    <input type="checkbox" name="property_type[]" id="business_opportunity" class="chk1" value="Business Opportunity">Business Opportunity
                                </label>
                            </li>
                            <li>
                                <label for="commercial_lease">
                                    <input type="checkbox" name="property_type[]" id="commercial_lease" class="chk1" value="Commercial Lease">Commercial Lease
                                </label>
                            </li>
                            <li>
                                <label for="commercial_sale">
                                    <input type="checkbox" name="property_type[]" id="commercial_sale" class="chk1" value="Commercial Sale">Commercial Sale
                                </label>
                            </li>
                            <li>
                                <label for="farm">
                                    <input type="checkbox" name="property_type[]" id="farm" class="chk1" value="Farm">Farm
                                </label>
                            </li>
                            <li>
                                <label for="land">
                                    <input type="checkbox" name="property_type[]" id="land" class="chk1" value="Land">Land
                                </label>
                            </li>
                            <li>
                                <label for="manufactured_in_park">
                                    <input type="checkbox" name="property_type[]" id="manufactured_in_park" class="chk1" value="Manufactured In Park">Manufactured In Park
                                </label>
                            </li>
                            <li>
                                <label for="residential">
                                    <input type="checkbox" name="property_type[]" id="residential" class="chk1" value="Residential">Residential
                                </label>
                            </li>
                            <li>
                                <label for="residential_income">
                                    <input type="checkbox" name="property_type[]" id="residential_income" class="chk1" value="Residential Income">Residential Income
                                </label>
                            </li>
                            <li>
                                <label for="residential_lease">
                                    <input type="checkbox" name="property_type[]" id="residential_lease" class="chk1" value="Residential Lease">Residential Lease
                                </label>
                            </li>
                            <li>
                                <label for="any">
                                    <input type="checkbox" name="property_type[]" id="any" class="chk1" value="any">Any
                                </label>
                            </li>
                       </ul>
                    </div>
                </div>
            </div>   
            <div class="row around-xs middle-xs p-2 mb-3"> 
               <!--  <button class="mdc-button mdc-button--raised bg-warn" type="button" id="clear-filter">
                    <span class="mdc-button__ripple"></span>
                    <span class="mdc-button__label">Clear</span> 
                </button> -->
                <button class="mdc-button mdc-button--raised" type="button" id="btn_filter">
                    <span class="mdc-button__ripple"></span>
                    <i class="material-icons mdc-button__icon">search</i>
                    <span class="mdc-button__label">Search</span> 
                </button>  
                
            </div>
        </form>  
  </div> 
</div>

@push('scripts')
<script>
  $('#saved_search').click(function(){
    $('#open_saved_search_modal').trigger('click');  
  })
  
    function saveSearch(){
        var location = "{{Request::input('location')}}";
        var bedrooms = "{{Request::input('bedrooms')}}";
        var bathrooms = "{{Request::input('bathrooms')}}";
        var min_price = "{{Request::input('min_price')}}";
        var max_price = "{{Request::input('max_price')}}";

        var name = $('#save_name').val();
        if(name == ''){
          toastr.warning("Search name is required.");
          return false;
        }
        $.ajax({
            url: '/save-search',
            type: 'POST',
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            data: {
                'location': location, 'bedrooms': bedrooms, 'bathrooms': bathrooms, 'min_price': min_price, 'max_price': max_price, 'name': name
            },
            beforeSend: function() {
                $("#saved_search").html('<i class="fas fa-spinner fa-spin"></i>');
            },
            success: function (response) {
                if(response=='success'){                    
                    toastr.success("The search has been saved successfully.");
                }
                if(response == 'error'){
                    toastr.error('Something went wrong');
                }
                $('#save_name').val('');
                setTimeout(function(){
                  $("#saved_search").text('Save Search');
                  $('#close_saved_search_modal').trigger('click');
                    // location.reload();
                }, 3000);
            },
            error: function (error) {
                toastr.error('Failed');
                setTimeout(function(){
                    window.location.replace('/login')
                }, 2000);
                console.log(error)
            },
        });
    }
</script>
@endpush