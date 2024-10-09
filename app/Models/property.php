<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class property extends Model
{
    use HasFactory;

    protected $fillable=['image', 'property_title', 'bedrooms', 'bathrooms', 'parking', 'area', 'description', 'location', 'price', 'type', 'listing_type' ];
}
