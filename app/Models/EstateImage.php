<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EstateImage extends Model
{
    use HasFactory;

    protected $fillable = ['image' , 'estate_id'];
}
