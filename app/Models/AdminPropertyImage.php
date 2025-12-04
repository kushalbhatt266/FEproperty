<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdminPropertyImage extends Model
{
    use HasFactory;
    protected $table='upload_images';
    protected $guarded = [];
}
