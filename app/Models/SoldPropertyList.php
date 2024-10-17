<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SoldPropertyList extends Model
{
    use HasFactory;

    protected $fillable=['property_id', 'property_title', 'property_address', 'client_name',  'client_id', 'email', 'phone', 'total_installments', 'remaining_installments', 'total_amount', 'paid_amount', 'remaining_amount'];
}
