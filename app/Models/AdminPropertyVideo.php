<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdminPropertyVideo extends Model
{
    use HasFactory;
    protected $table='upload_videos';
    protected $guarded = [];
}
