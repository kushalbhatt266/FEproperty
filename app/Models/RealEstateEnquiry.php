<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RealEstateEnquiry extends Model
{
    use HasFactory;
    protected $table='fgrs_real_estate_enquiries';
    protected $guarded = [];
}
