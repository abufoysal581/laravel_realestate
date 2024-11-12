<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class allocations extends Model
{
    use HasFactory;

    protected $fillable=['property_id', 'client_id', 'property_title', 'allocation_date', 'allocation_type', 'price', 'leave_date', 'property_docs' ];
}
