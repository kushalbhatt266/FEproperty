<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blogtagmapping extends Model
{
    use HasFactory;
    protected $table='blog_tag_mapping';
    protected $guarded = [];
}
