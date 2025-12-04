<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdminAmenities extends Model
{
    use HasFactory;
    protected $table='amenities_table';
    protected $guarded = [];
}
