<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wishlist extends Model
{
    use HasFactory;

    protected $table='fgrs_wishlists';
    protected $guarded = [];

    public function listing()
    {
        return $this->belongsTo(FeelGreatApi::class, 'listing_id', 'id');
    }
}
