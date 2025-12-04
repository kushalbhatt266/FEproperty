<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Wishlist;
use Auth;

class WishlistController extends Controller
{
    public function index(Request $request)
    {
        $userId = Auth::user()->id;
        $data['wishlists'] = Wishlist::with('listing')->where('user_id', $userId)->get();
        $data['total'] = count($data['wishlists']);
        return view('templates.wishlist')
            ->with($data);
    }

    public function addToWishlistJs(Request $request)
    {
        $input = $request->all();
        $userId = Auth::user()->id;
        $wishlistData = Wishlist::where(['listing_id' => $input['listing_id'], 'user_id' => $userId])->first();
        $data['user_id'] = $userId;
        $data['listing_id'] = $input['listing_id'];
        if($wishlistData != null){
            $wishlist = Wishlist::where('id',$wishlistData['id'])->update($data);
        }else{                
            $wishlist = Wishlist::create($data);            
        }
        if($wishlist){
            echo "success";
        }
    }

    public function removeToWishlistJs(Request $request)
    {
        $wishlist = Wishlist::find($request->wishlist_id);
        if (empty($wishlist)) {
            echo "empty";
        }
       $delete = $wishlist->delete();
        if($delete){
            echo "success";
        }
    }
}
