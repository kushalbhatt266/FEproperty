<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Auth;

class FeelGreatApi extends Model
{
    use HasFactory;
    protected $table='feel_great_apis';
    protected $guarded = [];

    public function media(){
        
        return $this->hasMany(FeelGreatMedia::class,'feel_great_apis_id','id');
    }

    public function properties(){
        
        return $this->hasMany(FeelGreatPropertyRoom::class,'feel_great_apis_id','id');
    }
}
