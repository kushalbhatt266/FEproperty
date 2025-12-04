<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SavedSearche extends Model
{
    use HasFactory;
    protected $table='fgrs_saved_searches';
    protected $guarded = [];
}
