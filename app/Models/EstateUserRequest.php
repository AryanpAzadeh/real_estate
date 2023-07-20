<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EstateUserRequest extends Model
{
    use HasFactory;

    protected $fillable = ['estate_id', 'user_id', 'description', 'status' , 'consultant_message'];


    public function estate()
    {
        return $this->belongsTo(Estate::class , 'estate_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class , 'user_id');

    }
}
