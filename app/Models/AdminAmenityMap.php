<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdminAmenityMap extends Model
{
    use HasFactory;
    protected $table='amenities_mapping';
    protected $guarded = [];

    public function amenity(){
        return $this->belongsTo(AdminAmenities::class, 'amenities_id', 'id');
    }
}
