<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QuotationForm extends Model
{
    use HasFactory;

    protected $fillable = [
        'start_date',
        'end_date',
        'customer_name',
        'customer_company',
        'customer_address',
        'customer_mail',
        'customer_phone',
        'product',
        'tax',
    ];

    protected $casts = [
        'product' => 'array',
    ];
}
