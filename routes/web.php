<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\{WishlistController,AgentController};
use App\Http\Controllers\SavedSearcheController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/listing', function(){return view('template.listing');})->name('listing');
Route::get('/autocomplete', [HomeController::class, 'autocomplete'])->name('autocomplete');
Route::get('/list-search', [HomeController::class, 'search'])->name('list-search');
Route::get('/off-market-properties', [HomeController::class, 'offMarketProperties'])->name('off-market-properties');
Route::get('/property/off-market-property-details/{id}', [HomeController::class, 'offMarketPropertyDetails'])->name('property.off-market-property-details');
Route::get('/property/property-details/{id}', [HomeController::class, 'propertyDetails'])->name('property.property-details');
Route::post('add-contact', [HomeController::class, 'addContact'])->name('add-contact');

Route::get('/news', [HomeController::class, 'news_data'])->name('news');
Route::get('/news/{name}/{id}', [HomeController::class, 'news_detail_show'])->name('news');
Route::get('-/news/tags/{id}', [HomeController::class, 'news_tag_detail'])->name('-.news.tags');

Route::get('/blogs', [HomeController::class, 'blogs_data'])->name('blog');
Route::get('/blogs/{name}/{id}', [HomeController::class, 'blogs_detail_show'])->name('blog');
Route::get('-/blogs/tags/{id}', [HomeController::class, 'blogs_tag_detail'])->name('-.blog.tags');

Route::get('/{id}/{slug}', [HomeController::class, 'blogs_data'])->name('blog');


Route::post('comment', [HomeController::class, 'feedback'])->name('comment');
Route::get('/property/property-details/{id}', [HomeController::class, 'propertyDetails'])->name('property.property-details');
Route::get('contact-us', function () {
    return view('template/contact_us');
})->name('contact-us');
Route::get('testimonials', function () {
    return view('template/testimonials');
})->name('testimonials');
Route::get('about-us', function () {
    return view('template/about_us');
})->name('about-us');

Route::get('quick-search', function () {
    return view('template/search/quick_search');
})->name('quick-search');
Route::get('foreclosure-search', function () {
    return view('template/search/foreclosure_search');
})->name('foreclosure-search');
Route::get('map-search', function () {
    return view('template/search/map_search');
})->name('map-search');
Route::post('/ajax-search/map-marker', [HomeController::class, 'ajaxMapSearch'])->name('ajax-search.map-marker');
Route::post('/ajax-search/map-result', [HomeController::class, 'ajaxMapResult'])->name('ajax-search.map-result');

Route::get('buyers', function () {
    return view('template/resources/buyers');
})->name('buyers');
Route::get('sellers', function () {
    return view('template/resources/sellers');
})->name('sellers');
Route::get('mortgage-rates', function () {
    return view('template/resources/mortgage-rates');
})->name('mortgage-rates');
Route::get('real-estate-glossary', function () {
    return view('template/resources/real-estate-glossary');
})->name('real-estate-glossary');
Route::get('dream-home-finder', function () {
    return view('template/resources/dream-home-finder');
})->name('dream-home-finder');
Route::get('free-market-analysis', function () {
    return view('template/resources/free-market-analysis');
})->name('free-market-analysis');

// Advance Search
Route::get('advance-search', function () {
    return view('template/search/advance_search');
})->name('advance-search');
Route::get('/get-counties', [HomeController::class, 'getCounties'])->name('get-counties');
Route::get('/get-cities', [HomeController::class, 'getCities'])->name('get-cities');
Route::get('/get-property-type', [HomeController::class, 'getPropertyType'])->name('get-property-type');
Route::get('/get-property-subtype', [HomeController::class, 'getPropertySubtype'])->name('get-property-subtype');
Route::get('/get-elementry-school', [HomeController::class, 'getElementrySchool'])->name('get-elementry-school');
Route::get('/get-middle-school', [HomeController::class, 'getMiddleSchool'])->name('get-middle-school');
Route::get('/get-high-school', [HomeController::class, 'getHighSchool'])->name('get-high-school');
Route::get('/get-conditions', [HomeController::class, 'getCondition'])->name('get-conditions');
Route::get('/get-style', [HomeController::class, 'getStyle'])->name('get-style');
Route::get('/get-construction-materials', [HomeController::class, 'getConstructionMaterials'])->name('get-construction-materials');
Route::get('/get-builder', [HomeController::class, 'getBuilder'])->name('get-builder');
Route::get('/get-complex-community', [HomeController::class, 'getComplexCommunity'])->name('get-complex-community');
Route::get('/get-min-lease', [HomeController::class, 'getMinLease'])->name('get-min-lease');
Route::get('/get-property-condition', [HomeController::class, 'getPropertyCondition'])->name('get-property-condition');
Route::get('/get-zip-code', [HomeController::class, 'getZipCode'])->name('get-zip-code');
Route::get('/get-subdivision', [HomeController::class, 'getSubdivision'])->name('get-subdivision');
Route::get('/address-autocomplete', [HomeController::class, 'addressAutocomplete'])->name('address-autocomplete');
// 

// Communities
Route::get('search-by-area', function () {
    return view('template/communities/search-by-area'); })->name('search-by-area');
Route::get('search-by-property-type', function () {
    return view('template/communities/search-by-property-type'); })->name('search-by-property-type');
Route::get('search-by-zip', function () {
    return view('template/communities/search-by-zip'); })->name('search-by-zip');

// Support Pages 
Route::get('terms-of-use/', function () {
    return view('template/support/terms-of-use'); })->name('terms-of-use');
Route::get('dmca-notice/', function () {
    return view('template/support/dmca-notice'); })->name('dmca-notice');
Route::get('terms-conditions/', function () {
    return view('template/support/terms-conditions'); })->name('terms-conditions');
Route::get('privacy-policy/', function () {
    return view('template/support/privacy-policy'); })->name('privacy-policy');
Route::get('faqs/', function () {
    return view('template/support/faqs'); })->name('faqs');
Route::get('our-agents/{id}/{slug}',[AgentController::class,'index']);
Route::get('our-agent-list',[AgentController::class,'list']);

// require __DIR__.'/auth.php';


Route::group(['middleware' => 'auth'], function(){
	Route::post('/add-to-wishlist-js', [WishlistController::class, 'addToWishlistJs'])->name('add-to-wishlist-js');
	Route::post('/remove-to-wishlist-js', [WishlistController::class, 'removeToWishlistJs'])->name('remove-to-wishlist-js');
	Route::get('/saved-list', [WishlistController::class, 'index'])->name('saved-list');
	Route::post('/save-search', [SavedSearcheController::class, 'store'])->name('save-search');
	Route::get('/saved-search', [SavedSearcheController::class, 'index'])->name('saved-search');
	Route::post('/remove-saved-search', [SavedSearcheController::class, 'destroy'])->name('remove-saved-search');
});
