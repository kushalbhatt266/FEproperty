<?php
use Illuminate\Support\Facades\Auth;
use App\Models\Banner;
use App\Models\Tag;
use App\Models\Testimonial;
function get_promotionData(){
	return Banner::where(['type' => 'promotion_banner'])->latest()->first();
}

function get_tags(){
	return Tag::distinct()->latest()->limit(10)->get();
}
function get_testimonial(){
	return Testimonial::latest()->get();
}
function get_contentType(){
	return DB::table('content_type')->orderby('id','asc')->get();
}
?>