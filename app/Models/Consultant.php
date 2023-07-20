<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Consultant extends Model
{
    use HasFactory;
    protected $fillable = ['agency_id', 'first_name', 'last_name', 'phone', 'email', 'country_id', 'zone_id', 'city_id', 'national_code', 'code', 'image' , 'password' , 'user_id'];

    public function agency()
    {
        return $this->belongsTo(Agency::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function estates()
    {
        return $this->hasMany(Estate::class);
    }
}
