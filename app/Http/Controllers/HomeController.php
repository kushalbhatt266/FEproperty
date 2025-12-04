<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\FeelGreatApi;
use App\Models\FeelGreatOpenHouse;
use App\Models\RealEstateEnquiry;
// use Illuminate\Http\Client\Response;
use Illuminate\Support\Facades\Http;
use DB;
use App\Models\Tag;
use App\Models\Blogtagmapping;
use App\Models\Blog;
use App\Models\Review;
use App\Traits\MailTrait;
use Cookie;
use Illuminate\Http\Response;
use App\Http\Requests;
use App\Models\AdminAddItionanDetail;
use App\Models\AdminAmenities;
use App\Models\AdminAmenityMap;
use App\Models\AdminProperty;
use App\Models\AdminPropertyCategory;
use App\Models\AdminPropertyImage;
use App\Models\AdminPropertySubcategory;
use App\Models\AdminPropertyType;
use App\Models\{AdminPropertyVideo,Contenttype};

class HomeController extends Controller
{
    use MailTrait;

    public function index(Request $request){

        $data['for_sale'] = FeelGreatApi::where(['PropertyType' => 'Residential'])->where('is_sold',0)->latest()->take(5)->get();
        $data['for_rent'] = FeelGreatApi::where(['PropertyType' => 'Residential Lease'])->where('is_sold',0)->latest()->take(5)->get();
        $data['featured'] = FeelGreatApi::orderBy('OriginalEntryTimestamp', 'DESC')->where
        ('is_featured',1)->where('is_sold',0)->latest()->take(5)->get();
        $data['offMarketData'] = AdminProperty::where('property_type_id',2)->paginate(9);
        $data['total'] = count($data['offMarketData']);
        return view('template.home')->with($data);
    }

    public function search(Request $request){
        $input = $request->all();
        
        $mlsData = FeelGreatApi::query();
        if(isset($input['point']) && $input['point'] == 'open_house'){
            $mlsData = FeelGreatApi::select('feel_great_apis.*', 'fgoh.OpenHouseDate as OpenHouseDate, fgoh.OpenHouseStartTime as startTime, fgoh.OpenHouseType as OpenHouseType, fgoh.OpenHouseEndTime as endTime, fgoh.OpenHouseStatus as OpenHouseStatus')->join('feel_great_open_houses as fgoh','feel_great_apis.ListingId','=','fgoh.ListingId')->where('is_sold',0);
        }

        if(isset($input['featured']) && $input['featured'] == 1){
            $mlsData->where('is_featured', 1);
        }

        if(isset($input['sold']) && $input['sold'] == 1){
            $mlsData->where('is_sold', 1);
        }else{
            $mlsData->where('is_sold',0);
        }

        if(isset($input['location']) && $input['location'] != ''){
            $city = FeelGreatApi::where('City',$input['location'])->first();
            if(is_numeric($input['location'])){
                $mlsData->where('PostalCode',$input['location']);    
            }
            else if($city != null){
                $mlsData->where('City',$input['location']);
                if(isset($input['direction']) && $input['direction'] != ''){
                    $mlsData->where(function ($q) {
                        $q->where('DirectionFaces', 'South')->orWhere('DirectionFaces', 'Southeast');
                    });
                }
            }
            else{
                $mlsData->where("UnparsedAddress","like","%{$input['location']}%");
            }
        }

        if(isset($input['bedrooms']) && $input['bedrooms'] != ''){
            if($input['bedrooms'] == 'any'){
                $mlsData->where('BedroomsTotal','!=',null)->orWhere('BedroomsTotal','!=',0);    
            }else{
                $mlsData->where('BedroomsTotal','>=',$input['bedrooms']);
            }
        }

        if(isset($input['postalCode']) && $input['postalCode'] != ''){
            $mlsData->where('PostalCode', $input['postalCode']);
        }

        if(isset($input['bathrooms']) && $input['bathrooms'] != ''){
            if($input['bathrooms'] == 'any'){
                $mlsData->where('BathroomsTotalInteger','!=',null)->orWhere('BathroomsTotalInteger','!=',0);    
            }else{
                $mlsData->where('BathroomsTotalInteger','>=',$input['bathrooms']);
            }
        }
        if(isset($input['min_price']) && $input['min_price'] != ''){
            $mlsData->where('ListPrice','>=',$input['min_price']);
        }

        if(isset($input['max_price']) && $input['max_price'] != ''){
            $mlsData->where('ListPrice','<=',$input['max_price']);
        }
        if(isset($request->property_type) && ($request->property_type!='' || $request->property_type!='any')){
            $property_type = explode(',', $request->property_type);
            $mlsData->whereIn('PropertyType', $property_type);
        }

        if(isset($request->foreclosure_type) && ($request->foreclosure_type!='' || $request->foreclosure_type!='any')){
            $foreclosure_type = explode(',', $request->foreclosure_type);
            $mlsData->whereIn('Disclosures', $foreclosure_type);
        }

        if(isset($request->counties) && $request->counties!=''){
            $counties = explode(',', $request->counties);
            $mlsData->whereIn('CountyOrParish', $counties);
        }

        if(isset($request->cities) && $request->cities!=''){
            $cities = explode(',', $request->cities);
            $mlsData->whereIn('City', $cities);
        }

        if(isset($request->address) && $request->address!=''){
            $mlsData->where("UnparsedAddress","like","%{$request->address}%");
        }

        if(isset($request->zip_codes) && $request->zip_codes!=''){
            $zip_codes = explode(',', $request->zip_codes);
            $mlsData->whereIn('PostalCode', $zip_codes);
        }

        if(isset($request->subdivisions) && $request->subdivisions!=''){
            $subdivisions = explode(',', $request->subdivisions);
            $mlsData->whereIn('SubdivisionName', $subdivisions);
        }

        if(isset($request->mlsnumber) && $request->mlsnumber!=''){
            $mlsnumber = explode(',', $request->mlsnumber);
            $mlsData->whereIn('ListingId', $mlsnumber);
        }

        if(isset($request->status) && $request->status!=''){
            $status = explode(',', $request->status);
            $mlsData->whereIn('MlsStatus', $status);
        }

        if(isset($request->list_status) && $request->list_status!=''){
            $status = explode(',', $request->list_status);
            $mlsData->whereIn('MlsStatus', $status);
        }

        if(isset($request->property_subtypes) && $request->property_subtypes!=''){
            $property_subtypes = explode(',', $request->property_subtypes);
            $mlsData->whereIn('PropertySubType', $property_subtypes);
        }

        if(isset($input['lot_size']) && $input['lot_size'] != ''){
            if($input['lot_size'] == 'any'){
                $mlsData->where('LotSizeAcres','!=',null)->orWhere('LotSizeAcres','!=',0);    
            }else{
                $mlsData->where('LotSizeAcres','>=',$input['lot_size']);
            }
        }

        if(isset($input['rooms']) && $input['rooms'] != ''){
            if($input['rooms'] == 'any'){
                $mlsData->where('BedroomsTotal','!=',null)->orWhere('BedroomsTotal','!=',0);    
            }else{
                $mlsData->where('BedroomsTotal','>=',$input['rooms']);
            }
        }

        if(isset($input['sqft']) && $input['sqft'] != ''){
            if($input['sqft'] == 'any'){
                $mlsData->where('LotSizeSquareFeet','!=',null)->orWhere('LotSizeSquareFeet','!=',0);    
            }else{
                $mlsData->where('LotSizeSquareFeet','>=',$input['sqft']);
            }
        }

        if(isset($input['units']) && $input['units'] != ''){
            if($input['units'] == 'any'){
                $mlsData->where('NumberOfUnitsTotal','!=',null)->orWhere('NumberOfUnitsTotal','!=',0);    
            }else{
                if($input['units'] == '11'){
                    $mlsData->where('NumberOfUnitsTotal','>=',$input['sqft']);
                }else{
                    $units = explode(',', $input['units']);
                    $mlsData->whereBetween('NumberOfUnitsTotal',$units);
                }
            }
        }

        if(isset($input['built_before']) && $input['built_before'] != ''){
            if($input['built_before'] == 'any'){
                $mlsData->where('YearBuilt','!=',null)->orWhere('YearBuilt','!=',0);    
            }else{
                $mlsData->where('YearBuilt','<=',$input['built_before']);
            }
        }

        if(isset($input['built_after']) && $input['built_after'] != ''){
            if($input['built_after'] == 'any'){
                $mlsData->where('YearBuilt','!=',null)->orWhere('YearBuilt','!=',0);    
            }else{
                $mlsData->where('YearBuilt','>=',$input['built_after']);
            }
        }

        if(isset($request->elementry_schools) && $request->elementry_schools!=''){
            $elementry_schools = explode(',', $request->elementry_schools);
            $mlsData->whereIn('ElementarySchool', $elementry_schools);
        }

        if(isset($request->middle_schools) && $request->middle_schools!=''){
            $middle_schools = explode(',', $request->middle_schools);
            $mlsData->whereIn('MiddleOrJuniorSchool', $middle_schools);
        }

        if(isset($request->high_schools) && $request->high_schools!=''){
            $high_schools = explode(',', $request->high_schools);
            $mlsData->whereIn('HighSchool', $high_schools);
        }

        if(isset($request->conditions) && $request->conditions!=''){
            $conditions = explode(',', $request->conditions);
            $mlsData->whereIn('SpecialListingConditions', $conditions);
        }

        if(isset($request->stories) && $request->stories!=''){
            $stories = explode(',', $request->stories);
            $mlsData->whereIn('StoriesTotal', $stories);
            if(in_array('3', $stories)){
                $mlsData->orWhere('StoriesTotal', '>=','3');    
            }
        }

        if(isset($request->styles) && $request->styles!=''){
            $styles = explode(',', $request->styles);
            $mlsData->whereIn('ArchitecturalStyle', $styles);
        }

        if(isset($request->materials) && $request->materials!=''){
            $materials = explode(',', $request->materials);
            $mlsData->whereIn('ConstructionMaterials', $materials);
        }

        if(isset($request->builders) && $request->builders!=''){
            $builders = explode(',', $request->builders);
            $mlsData->whereIn('ListOfficeName', $builders);
        }

        if(isset($request->complex_communities) && $request->complex_communities!=''){
            $complex_communities = explode(',', $request->complex_communities);
            $mlsData->whereIn('MFR_ComplexCommunityNameNCCB', $complex_communities);
        }

        if(isset($request->min_leases) && $request->min_leases!=''){
            $min_leases = explode(',', $request->min_leases);
            $mlsData->whereIn('MFR_MinimumLease', $min_leases);
        }

        if(isset($request->property_conditions) && $request->property_conditions!=''){
            $property_conditions = explode(',', $request->property_conditions);
            $mlsData->whereIn('PropertyCondition', $property_conditions);
        }

        if(isset($request->fireplace) && $request->fireplace!=''){
            $mlsData->where('FireplaceYN', $request->fireplace);
        }

        if(isset($request->garage) && $request->garage!=''){
            $mlsData->where('GarageYN', $request->garage);
        }

        if(isset($request->golf_course) && $request->golf_course!=''){
            $lotf = 'Golf Course';
            $mlsData->where("LotFeatures","like","%{$lotf}%");
            $mlsData->orWhere("View","like","%{$lotf}%");
        }

        if(isset($request->new_construction) && $request->new_construction!=''){
            $mlsData->where('NewConstructionYN', $request->new_construction);
        }

        if(isset($request->open_house) && $request->open_house!=''){
            $mlsData->where('OpenHouseKey', '!=', null);
        }

        if(isset($request->pool) && $request->pool!=''){
            $mlsData->where('SpaYN', $request->pool);
        }

        if(isset($request->view) && $request->view!=''){
            $mlsData->where('View', '!=', null);
        }

        if(isset($request->waterfront) && $request->waterfront!=''){
            $mlsData->where('WaterfrontYN', $request->waterfront);
        }

        if(isset($request->adult_community_bool) && $request->adult_community_bool!=''){
            $comm = '55+ COMMUNITY';
            $mlsData->where("PublicRemarks","like","%{$comm}%");
        }
        if(isset($request->elevator_bool) && $request->elevator_bool!=''){
            $mlsData->where("Furnished","Furnished");
        }

        if(isset($request->gated_community_bool) && $request->gated_community_bool!=''){
            $gated = 'Gated';
            $mlsData->where("CommunityFeatures","like","%{$gated}%");
        }

        if(isset($request->government_owned_bool) && $request->government_owned_bool!=''){
            $cpool = 'pool';
            $mlsData->where("CommunityFeatures","like","%{$cpool}%");
        }

        if(isset($request->on_an_intra_front_bool) && $request->on_an_intra_front_bool!=''){
            $c_saltwater = 'Canal - Saltwater';
            $mlsData->where("WaterfrontFeatures","like","%{$c_saltwater}%");
        }

        if(isset($request->on_a_river_bool) && $request->on_a_river_bool!=''){
            $c_freshwater = 'Canal - Freshwater';
            $mlsData->where("WaterfrontFeatures","like","%{$c_freshwater}%");
        }

        if(isset($request->pets_allowed_bool) && $request->pets_allowed_bool!=''){
            $pet_allow = 'Yes';
            $mlsData->where("PetsAllowed","like","%{$pet_allow}%");
        }

        if(isset($request->probate_sale_bool) && $request->probate_sale_bool!=''){
            $short_rental = 'Short Term Rental Allowed';
            $mlsData->where("MFR_RealtorInfo","like","%{$short_rental}%");
        }

        if(isset($request->third_party_approval_bool) && $request->third_party_approval_bool!=''){
            $hoa = 'HOA';
            $mlsData->where("Disclosures","like","%{$hoa}%");
        }

        if(isset($request->variable_pricing_bool) && $request->variable_pricing_bool!=''){
            $mlsData->where('PropertyType','Residential Income');
        }

        if(isset($request->walkout_basement_bool) && $request->walkout_basement_bool!=''){
            $patio = 'Patio';
            $mlsData->where("PatioAndPorchFeatures","like","%{$patio}%");
        }

        if(isset($request->water_access_bool) && $request->water_access_bool!=''){
            $mlsData->where('PoolPrivateYN', $request->water_access_bool);
        }

        if(isset($request->water_front_bool) && $request->water_front_bool!=''){
            $mlsData->where('WaterfrontYN', $request->water_front_bool);
        }

        $data['total'] = $mlsData->count();
        $data['searchData'] = $mlsData->paginate(6);
        
        return view('template.property_list')->with($data);
    }

    public function autocomplete(Request $request){
        $input = $request->all();
        $query = FeelGreatApi::select('City','PostalCode',DB::raw('CONCAT(UnparsedAddress, ", ", City, ", ", PostalCode) AS location'))->where("UnparsedAddress", "LIKE", "%{$input['terms']['term']}%")->orWhere("City", "LIKE", "%{$input['terms']['term']}%")->orWhere("PostalCode", "LIKE", "%{$input['terms']['term']}%")->get();
        $address = array();
        $city = array();
        $zip = array();
        foreach($query as $data){
            $address[] = array("label"=>$data->location,"category"=>'Address');
            $city[] = array("label"=>$data->City,"category"=>'City');
            $zip[] = array("label"=>$data->PostalCode,"category"=>'Zip');
        }

        $unique_city = [];
        foreach($city as $element) {
            $hash = $element['label'];
            $unique_city[$hash] = $element;
        }
        $resultCity = array_values($unique_city);

        $unique_zip = [];
        foreach($zip as $zip_element) {
            $zip_hash = $zip_element['label'];
            $unique_zip[$zip_hash] = $zip_element;
        }
        $resultZip = array_values($unique_zip);

        $merged_array = array_merge($address, $resultCity, $resultZip);

        return response()->json($merged_array);
    }

    public function propertyDetails($id, Request $request){
      
    //  return   $data['property_details'] = FeelGreatApi::where('id',$id)->where('is_sold',0)->first();
        $data['property_details'] = FeelGreatApi::where('id',$id)->first();
        if(!$data['property_details']){
            return abort('404');
        }
        $data['openHouse'] = FeelGreatOpenHouse::where('ListingId',$data['property_details']['ListingId'])->first();
        return view('template.property_details')->with($data);
    }

    public function addContact(Request $request){
        $request->validate([
            'name'=>'required',
            'email'=>'required|email',
            'phone'=>'required|numeric',
            'message'=>'required'
        ]);
        $input = $request->all();
          $input['looking']=!empty($request->input('looking'))?$request->input('looking'):null;
        $input['obligations']=!empty($request->input('obligations'))?$request->input('obligations'):null;
        $input['rent']=!empty($request->input('rent'))?$request->input('rent'):null;
        if($request->property_type){
            $input['property_type'] = json_encode($request->property_type);
        }
        if($request->additional_preference){
            $input['additional_preference'] = json_encode($request->additional_preference);
        }
        
        $success = RealEstateEnquiry::create($input);
        if($success){
            if($input['route_name'] == 'popup'){
                Cookie::queue('intentform',1, 60);
            }
            // $this->customerQueryMail($input);
            // return back()->with(['success' => 'You request has been sent successfully, one of our executive will contact you shortly.']);
            return response()->json(['success'=>'You request has been sent successfully, one of our executive will contact you shortly.']);
        }
        return back()->with(['error' => 'Something went wrong.']);
    }

    public function news_data(){
        $data['blog'] = Blog::orderby('id','DESC')->paginate(15);
        $data['tag_mapping'] = Blogtagmapping::get();
        $data['tag']=Tag::latest()->limit(10)->get();
        $data['tags']=Tag::all();
        return view('template.news_listing')->with($data);
    }
    public function news_detail_show($name, $id)
    {
       // dd($id);
        $data['blog'] =Blog::find($id);
       
        $data['tags']=Tag::all();
        $data['review']=Review::where('blog_id',$id)->latest()->get();
       
        $data['tag_mapping'] = Blogtagmapping::get();
        $data['tag']=Tag::latest()->limit(10)->get();
        return view('template.news_details')->with($data);
       
    }
    public function news_tag_detail($id)
    {
        $data['tagsss']=tag::find($id);
        $data['tags']=Tag::all();
        $data['tagss']=tag::where('name',$data['tagsss']->name)->get();
        $data['tag_mapping'] = Blogtagmapping::all();
        $data['blog'] = Blog::paginate(15);
       
        $data['tag']=Tag::latest()->limit(10)->get();
        return view('template.news_tag_listing')->with($data);
       
    }

    public function blogs_data($id='',$slug=''){
        $data['blog'] = Blog::where('content',$id)->orderby('id','DESC')->paginate(15);
        foreach($data['blog'] as $bg)
        {
            $success = $bg;
            $success->content_name = Contenttype::where('id',$bg->content)->pluck('name')->first();
        }
     
        $data['tag_mapping'] = Blogtagmapping::get();
        $data['tag']=Tag::latest()->limit(10)->get();
        $data['tags']=Tag::all();
        return view('template.blog_listing')->with($data);
    }
    public function blogs_detail_show($name, $id)
    {
       // dd($id);
        $data['blog'] =Blog::find($id);
       
        $data['tags']=Tag::all();
        $data['review']=Review::where('blog_id',$id)->latest()->get();
       
        $data['tag_mapping'] = Blogtagmapping::get();
        $data['tag']=Tag::latest()->limit(10)->get();
        return view('template.blog_details')->with($data);
       
    }
    public function blogs_tag_detail($id)
    {
        $data['tagsss']=tag::find($id);
        $data['tags']=Tag::all();
        $data['tagss']=tag::where('name',$data['tagsss']->name)->get();
        $data['tag_mapping'] = Blogtagmapping::all();
        $data['blog'] = Blog::paginate(15);
       
        $data['tag']=Tag::latest()->limit(10)->get();
        return view('template.news_tag_listing')->with($data);
       
    }

    public function feedback(Request $request)
    {
        //dd($request);
        $data=new Review;
        $data->blog_id=$request->input('hid');
        $data->description=$request->input('description');
        $data->name=$request->input('name');
        $data->email=$request->input('email');
        $data->save();
        return response()->json(['success'=>'Submitted Successfully.']);

        // return redirect()->back()->with('success','Submitted Successfully');
       
    }

    public function getCounties(Request $request){
        $county = FeelGreatApi::select('CountyOrParish')->distinct()->get();
        $html = '';
        if(count($county)>0){
            foreach($county as $counties){
                $html .= '<li><label for="'.$counties->CountyOrParish.'"><input type="checkbox" name="counties" id="'.$counties->CountyOrParish.'" value="'.$counties->CountyOrParish.'" class="chk1" onclick="getCities()">'.$counties->CountyOrParish.'</label></li>';
            }
        }
        $this->return['status']    = true;
        $this->return['counties'] = $html;
        $this->return['message'] = 'successfully';
        return response()->json($this->return);
    }

    public function getCities(Request $request){
        if(isset($request->all_city) && $request->all_city == 'all_city'){
            $city = FeelGreatApi::select('City')->distinct()->get();
        }else{
            $counties = $request->counties?$request->counties:[];
            $city = FeelGreatApi::select('City')->whereIn('CountyOrParish',$counties)->distinct()->get();
        }
        $html = '';
        if(count($city)>0){
            foreach($city as $cities){
                $html .= '<li><label for="'.$cities->City.'"><input type="checkbox" name="cities" id="'.$cities->City.'" value="'.$cities->City.'" class="chk1">'.$cities->City.'</label></li>';
            }
        }else{
            $html .= '<< Select a counties to view cities';
        }
        $this->return['status']    = true;
        $this->return['cities'] = $html;
        $this->return['message'] = 'successfully';
        return response()->json($this->return);   
    }

    public function getZipCode(Request $request){
        $zip_code = FeelGreatApi::select('PostalCode')->distinct()->whereNotNull('PostalCode')->get();
        $html = '';
        if(count($zip_code)>0){
            foreach($zip_code as $zip_codes){
                $html .= '<li><label for="'.$zip_codes->PostalCode.'"><input type="checkbox" name="zip_codes" id="'.$zip_codes->PostalCode.'" value="'.$zip_codes->PostalCode.'" class="chk1">'.$zip_codes->PostalCode.'</label></li>';
            }
        }
        $this->return['status']    = true;
        $this->return['zip_codes'] = $html;
        $this->return['message'] = 'successfully';
        return response()->json($this->return);
    }

    public function getSubdivision(Request $request){
        $subdivision = FeelGreatApi::select('SubdivisionName')->distinct()->whereNotNull('SubdivisionName')->get();
        $html = '';
        if(count($subdivision)>0){
            foreach($subdivision as $subdivisions){
                $html .= '<li><label for="'.$subdivisions->SubdivisionName.'"><input type="checkbox" name="subdivisions" id="'.$subdivisions->SubdivisionName.'" value="'.$subdivisions->SubdivisionName.'" class="chk1">'.$subdivisions->SubdivisionName.'</label></li>';
            }
        }
        $this->return['status']    = true;
        $this->return['subdivisions'] = $html;
        $this->return['message'] = 'successfully';
        return response()->json($this->return);
    }

    public function addressAutocomplete(Request $request){
        $input = $request->all();
        $query = FeelGreatApi::select(DB::raw('CONCAT(UnparsedAddress, ", ", City, ", ", PostalCode) AS location'))->where("UnparsedAddress", "LIKE", "%{$input['terms']['term']}%");
            if(isset($request->cities) && !empty($request->cities)){
                $query->whereIn('City', $request->cities);
                
            }
                $addreses = $query->get();

            
        $address = array();
        if(count($addreses)>0){
            foreach($addreses as $data){
                $address[] = array("label"=>$data->location,"category"=>'Address');
            }
        }
        return response()->json($address);
    }

    public function getPropertyType(Request $request){
        $propertyType = FeelGreatApi::select('PropertyType')->distinct()->whereNotNull('PropertyType')->get();
        $html = '';
        if(count($propertyType)>0){
            foreach($propertyType as $propertyTyps){
                $html .= '<li><label for="'.$propertyTyps->PropertyType.'"><input type="checkbox" name="propertyTyps" id="'.$propertyTyps->PropertyType.'" value="'.$propertyTyps->PropertyType.'" class="chk1">'.$propertyTyps->PropertyType.'</label></li>';
            }
        }
        $this->return['status']    = true;
        $this->return['propertyTyps'] = $html;
        $this->return['message'] = 'successfully';
        return response()->json($this->return);  
    }

    public function getPropertySubtype(Request $request){
        $property_subtype = FeelGreatApi::select('PropertySubType')->distinct()->whereNotNull('PropertySubType')->get();
        $html = '';
        if(count($property_subtype)>0){
            foreach($property_subtype as $property_subtypes){
                $html .= '<li><label for="'.$property_subtypes->PropertySubType.'"><input type="checkbox" name="property_subtypes" id="'.$property_subtypes->PropertySubType.'" value="'.$property_subtypes->PropertySubType.'" class="chk1">'.$property_subtypes->PropertySubType.'</label></li>';
            }
        }
        $this->return['status']    = true;
        $this->return['property_subtypes'] = $html;
        $this->return['message'] = 'successfully';
        return response()->json($this->return);
    }

    public function getElementrySchool(Request $request){
        $elementry_school = FeelGreatApi::select('ElementarySchool')->distinct()->whereNotNull('ElementarySchool')->get();
        $html = '';
        if(count($elementry_school)>0){
            foreach($elementry_school as $elementry_schools){
                $html .= '<li><label for="'.$elementry_schools->ElementarySchool.'"><input type="checkbox" name="elementry_schools" id="'.$elementry_schools->ElementarySchool.'" value="'.$elementry_schools->ElementarySchool.'" class="chk1">'.$elementry_schools->ElementarySchool.'</label></li>';
            }
        }
        $this->return['status']    = true;
        $this->return['elementry_schools'] = $html;
        $this->return['message'] = 'successfully';
        return response()->json($this->return);   
    }

    public function getMiddleSchool(Request $request){
        $middle_school = FeelGreatApi::select('MiddleOrJuniorSchool')->distinct()->whereNotNull('MiddleOrJuniorSchool')->get();
        $html = '';
        if(count($middle_school)>0){
            foreach($middle_school as $middle_schools){
                $html .= '<li><label for="'.$middle_schools->MiddleOrJuniorSchool.'"><input type="checkbox" name="middle_schools" id="'.$middle_schools->MiddleOrJuniorSchool.'" value="'.$middle_schools->MiddleOrJuniorSchool.'" class="chk1">'.$middle_schools->MiddleOrJuniorSchool.'</label></li>';
            }
        }
        $this->return['status']    = true;
        $this->return['middle_schools'] = $html;
        $this->return['message'] = 'successfully';
        return response()->json($this->return);   
    }

    public function getHighSchool(Request $request){
        $high_school = FeelGreatApi::select('HighSchool')->distinct()->whereNotNull('HighSchool')->get();
        $html = '';
        if(count($high_school)>0){
            foreach($high_school as $high_schools){
                $html .= '<li><label for="'.$high_schools->HighSchool.'"><input type="checkbox" name="high_schools" id="'.$high_schools->HighSchool.'" value="'.$high_schools->HighSchool.'" class="chk1">'.$high_schools->HighSchool.'</label></li>';
            }
        }
        $this->return['status']    = true;
        $this->return['high_schools'] = $html;
        $this->return['message'] = 'successfully';
        return response()->json($this->return);   
    }

    public function getCondition(Request $request){
        $condition = FeelGreatApi::select('SpecialListingConditions')->distinct()->whereNotNull('SpecialListingConditions')->get();
        $html = '';
        if(count($condition)>0){
            foreach($condition as $conditions){
                $html .= '<li><label for="'.$conditions->SpecialListingConditions.'"><input type="checkbox" name="conditions" id="'.$conditions->SpecialListingConditions.'" value="'.$conditions->SpecialListingConditions.'" class="chk1">'.$conditions->SpecialListingConditions.'</label></li>';
            }
        }
        $this->return['status']    = true;
        $this->return['conditions'] = $html;
        $this->return['message'] = 'successfully';
        return response()->json($this->return);   
    }

    public function getStyle(Request $request){
        $style = FeelGreatApi::select('ArchitecturalStyle')->distinct()->whereNotNull('ArchitecturalStyle')->get();
        $html = '';
        if(count($style)>0){
            foreach($style as $styles){
                $html .= '<li><label for="'.$styles->ArchitecturalStyle.'"><input type="checkbox" name="styles" id="'.$styles->ArchitecturalStyle.'" value="'.$styles->ArchitecturalStyle.'" class="chk1">'.$styles->ArchitecturalStyle.'</label></li>';
            }
        }
        $this->return['status']    = true;
        $this->return['styles'] = $html;
        $this->return['message'] = 'successfully';
        return response()->json($this->return);
    }

    public function getConstructionMaterials(Request $request){
        $material = FeelGreatApi::select('ConstructionMaterials')->distinct()->whereNotNull('ConstructionMaterials')->get();
        $html = '';
        if(count($material)>0){
            foreach($material as $materials){
                $html .= '<li><label for="'.$materials->ConstructionMaterials.'"><input type="checkbox" name="materials" id="'.$materials->ConstructionMaterials.'" value="'.$materials->ConstructionMaterials.'" class="chk1">'.$materials->ConstructionMaterials.'</label></li>';
            }
        }
        $this->return['status']    = true;
        $this->return['materials'] = $html;
        $this->return['message'] = 'successfully';
        return response()->json($this->return);
    }

    public function getBuilder(Request $request){
        $builder = FeelGreatApi::select('ListOfficeName')->distinct()->whereNotNull('ListOfficeName')->get();
        $html = '';
        if(count($builder)>0){
            foreach($builder as $builders){
                $html .= '<li><label for="'.$builders->ListOfficeName.'"><input type="checkbox" name="builders" id="'.$builders->ListOfficeName.'" value="'.$builders->ListOfficeName.'" class="chk1">'.$builders->ListOfficeName.'</label></li>';
            }
        }
        $this->return['status']    = true;
        $this->return['builders'] = $html;
        $this->return['message'] = 'successfully';
        return response()->json($this->return);
    }

    public function getComplexCommunity(Request $request){
        $complex_community = FeelGreatApi::select('MFR_ComplexCommunityNameNCCB')->distinct()->whereNotNull('MFR_ComplexCommunityNameNCCB')->get();
        $html = '';
        if(count($complex_community)>0){
            foreach($complex_community as $complex_communities){
                $html .= '<li><label for="'.$complex_communities->MFR_ComplexCommunityNameNCCB.'"><input type="checkbox" name="complex_communities" id="'.$complex_communities->MFR_ComplexCommunityNameNCCB.'" value="'.$complex_communities->MFR_ComplexCommunityNameNCCB.'" class="chk1">'.$complex_communities->MFR_ComplexCommunityNameNCCB.'</label></li>';
            }
        }
        $this->return['status']    = true;
        $this->return['complex_communities'] = $html;
        $this->return['message'] = 'successfully';
        return response()->json($this->return);
    }

    public function getMinLease(Request $request){
        $min_lease = FeelGreatApi::select('MFR_MinimumLease')->distinct()->whereNotNull('MFR_MinimumLease')->get();
        $html = '';
        if(count($min_lease)>0){
            foreach($min_lease as $min_leases){
                $html .= '<li><label for="'.$min_leases->MFR_MinimumLease.'"><input type="checkbox" name="min_leases" id="'.$min_leases->MFR_MinimumLease.'" value="'.$min_leases->MFR_MinimumLease.'" class="chk1">'.$min_leases->MFR_MinimumLease.'</label></li>';
            }
        }
        $this->return['status']    = true;
        $this->return['min_leases'] = $html;
        $this->return['message'] = 'successfully';
        return response()->json($this->return);
    }

    public function getPropertyCondition(Request $request){
        $property_condition = FeelGreatApi::select('PropertyCondition')->distinct()->whereNotNull('PropertyCondition')->get();
        $html = '';
        if(count($property_condition)>0){
            foreach($property_condition as $property_conditions){
                $html .= '<li><label for="'.$property_conditions->PropertyCondition.'"><input type="checkbox" name="property_conditions" id="'.$property_conditions->PropertyCondition.'" value="'.$property_conditions->PropertyCondition.'" class="chk1">'.$property_conditions->PropertyCondition.'</label></li>';
            }
        }
        $this->return['status']    = true;
        $this->return['property_conditions'] = $html;
        $this->return['message'] = 'successfully';
        return response()->json($this->return);
    }

    public function ajaxMapSearch(Request $request){
        $input = $request->all();
        $mlsData = FeelGreatApi::select('ListingId','ListingKey','Latitude','Longitude','ListPrice');
        if($input){
            $mlsData = $this->mapFilter($mlsData, $input);
        }
        $mlsData1 = $mlsData->get();
        $array = [];
        foreach($mlsData1 as $data){
            $array[] = [$data->ListingId,$data->ListingKey,$data->Latitude,$data->Longitude,$data->ListPrice];
        }
        return response()->json($array);
    }

    public function ajaxMapResult(Request $request){
        $input = $request->all();
        $mlsData = FeelGreatApi::query();
        if($input){
            $mlsData = $this->mapFilter($mlsData, $input);
        }
        $total = $mlsData->limit(100)->count();
        $searchData = $mlsData->limit(100)->get();
        $html = '';
        if(count($searchData)>0){
            foreach($searchData as $search_data){
               
                $html .=   '<div class="item col-lg-6 col-md-6 col-xs-12 landscapes sale">
                            <div class="project-single" data-aos="fade-up">
                        <div class="project-inner project-head">
                            <div class="project-bottom">
                                <h4><a href="'.route('property.property-details',[$search_data->id]).'">View Property</a></h4>
                            </div>
                            <div class="homes">';
                               
                                if(count($search_data->media)>0){
                                    foreach($search_data->media as $key => $media){
                                        if($key == 0){
                                            $html .= '  <a href="javascript:void(0)" class="homes-img">
                                   
                                                <img src="'.config('constant.media_site').$media->MediaURL.'" alt="home-1" class="img-responsive">
                                            </a>';
                                     }
                                }
                               
                             }
                             else
                             {
                                $html .= '  <a href="javascript:void(0)" class="homes-img">
                                   
                                <img src="'.config('constant.no_property_image').'" alt="home-1" class="img-responsive">
                                </a>';
                             }
                        $html .=  '</div>
                           
                        </div>
                        <!-- homes content -->
                        <div class="homes-content">
                            <!-- homes address -->
                            <h3><a href="'.route('property.property-details',[$search_data->id]).'">'.$search_data->ListOfficeName.'</a></h3>
                            <p class="homes-address mb-3">
                                <a href="javascript:void(0);">
                                    <i class="fa fa-map-marker"></i><span>'.$search_data->UnparsedAddress.'</span>
                                </a>
                            </p>
                            <!-- homes List -->
                            <ul class="homes-list clearfix pb-3">
                                <li class="the-icons">
                                    <i class="flaticon-bed mr-2" aria-hidden="true"></i>
                                    <span>'.$search_data->BedroomsTotal.' Bedrooms</span>
                                </li>
                                <li class="the-icons">
                                    <i class="flaticon-bathtub mr-2" aria-hidden="true"></i>
                                    <span>'.$search_data->BathroomsTotalInteger.' Bathrooms</span>
                                </li>
                                <li class="the-icons">
                                    <i class="flaticon-square mr-2" aria-hidden="true"></i>
                                    <span>'.$search_data->LotSizeSquareFeet.' sq ft</span>
                                </li>
                                <li class="the-icons">
                                    <i class="flaticon-car mr-2" aria-hidden="true"></i>
                                    <span>'.$search_data->GarageSpaces.' Garages</span>
                                </li>
                            </ul>
                            <!-- Price -->
                            <div class="price-properties">
                                <h3 class="title mt-3">
                    <a >$ '.$search_data->ListPrice.'</a>
                    </h3>
                                <div class="compare">
                                <a href="'.route('property.property-details',[$search_data->id]).'" class="listing_btn">View Details</a>
                                </div>
                            </div>
                          
                        </div>
                    </div>
                </div>';

            
                }
        }
        $this->return['status']    = true;
        $this->return['html'] = $html;
        $this->return['count'] = $total;
        return response()->json($this->return);
    }

    public function mapFilter($mlsData, $input){
        if(isset($input['location']) && $input['location'] != ''){
            $city = FeelGreatApi::where('City',$input['location'])->first();
            if(is_numeric($input['location'])){
                $mlsData->where('PostalCode',$input['location']);    
            }
            else if($city != null){
                $mlsData->where('City',$input['location']);
                if(isset($input['direction']) && $input['direction'] != ''){
                    $mlsData->where(function ($q) {
                        $q->where('DirectionFaces', 'South')->orWhere('DirectionFaces', 'Southeast');
                    });
                }
            }
            else{
                $mlsData->where("UnparsedAddress","like","%{$input['location']}%");
            }
        }

        if(isset($input['bedrooms']) && $input['bedrooms'] != ''){
            if($input['bedrooms'] == 'any'){
                $mlsData->where('BedroomsTotal','!=',null)->orWhere('BedroomsTotal','!=',0);    
            }else{
                $mlsData->where('BedroomsTotal','>=',$input['bedrooms']);
            }
        }

        if(isset($input['postalCode']) && $input['postalCode'] != ''){
            $mlsData->where('PostalCode', $input['postalCode']);
        }

        if(isset($input['bathrooms']) && $input['bathrooms'] != ''){
            if($input['bathrooms'] == 'any'){
                $mlsData->where('BathroomsTotalInteger','!=',null)->orWhere('BathroomsTotalInteger','!=',0);    
            }else{
                $mlsData->where('BathroomsTotalInteger','>=',$input['bathrooms']);
            }
        }
        if(isset($input['min_price']) && $input['min_price'] != ''){
            $mlsData->where('ListPrice','>=',$input['min_price']);
        }

        if(isset($input['max_price']) && $input['max_price'] != ''){
            $mlsData->where('ListPrice','<=',$input['max_price']);
        }
        if(isset($request->property_type) && ($request->property_type!='' || $request->property_type!='any')){
            $mlsData->whereIn('PropertyType', $request->property_type);
        }

        return $mlsData;
    }

    public function offMarketProperties(Request $request){
         $data['offMarketData'] = AdminProperty::where('property_type_id',2)->paginate(9);
         $data['total'] = count($data['offMarketData']);
         return view('template.off_market_properties')->with($data);
    }

    public function offMarketPropertyDetails($id){
        $data['property_details'] = AdminProperty::find($id);
        return view('template.off_market_property_details')->with($data);   
    }
}
