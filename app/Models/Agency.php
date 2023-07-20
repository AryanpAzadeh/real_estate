<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agency extends Model
{
    use HasFactory,Sluggable;

    protected $fillable = ['user_id', 'name', 'person_name', 'slug', 'phone', 'local_phone', 'email', 'fax', 'code' , 'description', 'country_id', 'zone_id', 'city_id', 'plaque', 'postal_code', 'address', 'latlng', 'instagram', 'telegram', 'facebook', 'active_date', 'password'];

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }

    public function zone()
    {
        return $this->belongsTo(Zone::class);
    }

    public function city()
    {
        return $this->belongsTo(City::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function consultants()
    {
        return $this->hasMany(Consultant::class);
    }

    public function estates()
    {
        return $this->hasMany(Estate::class);

    }

}
