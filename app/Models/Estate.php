<?php

namespace App\Models;

use App\Http\Requests\EstateRequest;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estate extends Model
{
    use HasFactory,Sluggable;

    protected $fillable = ['title' , 'price_pay' , 'slug' , 'code' , 'agency_id', 'consultant_id', 'category', 'type_id', 'country_id', 'zone_id', 'city_id', 'plaque', 'postal_code', 'address', 'latlng', 'area', 'wc', 'parking', 'features', 'pet', 'description', 'price', 'price_type', 'is_paid', 'tracking_number', 'pay_id', 'status' , 'bedrooms'];

    protected $casts = [
        'features' => 'array',
    ];
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }
    public function agency()
    {
        return $this->belongsTo(Agency::class);
    }

    public function consultant()
    {
        return $this->belongsTo(Consultant::class);
    }

    public function zone()
    {
        return $this->belongsTo(Zone::class);
    }

    public function city()
    {
        return $this->belongsTo(City::class);
    }

    public function images()
    {
        return $this->hasMany(EstateImage::class);
    }

    public function requests()
    {
        return $this->hasMany(EstateUserRequest::class);
    }

    public function type()
    {
        return $this->belongsTo(Type::class , 'type_id');
    }
}
