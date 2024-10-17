<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RequestsForBuying extends Model
{
    use HasFactory;

    protected $fillable=['client_name', 'client_id', 'email', 'phone', 'property_title', 'property_id', 'request_date'];

}
