<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdminProperty extends Model
{
    use HasFactory;
    protected $table='admin_property_info';
    protected $guarded = [];

    public function images(){
        return $this->hasMany(AdminPropertyImage::class,'property_id','id');
    }

    public function videos(){
        return $this->hasMany(AdminPropertyVideo::class,'property_id','id');
    }

    public function amenities(){
        return $this->hasMany(AdminAmenityMap::class,'property_id','id');
    }

    public function additionalDetails(){
        return $this->belongsTo(AdminAddItionanDetail::class, 'id', 'property_id');
    }

    public function category(){
        return $this->belongsTo(AdminPropertyCategory::class, 'category_id', 'id');
    }

    public function subcategory(){
        return $this->belongsTo(AdminPropertySubcategory::class, 'subcategory_id', 'id');
    }

    public function property_type(){
        return $this->belongsTo(AdminPropertyType::class, 'property_type_id', 'id');
    }
}
