<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;

    protected $table = 'items';

    protected $fillable = [
        'shop_id',
        'name',
        'description',
        'price',
        'catergory_id',
        'discount',
        'quantity',
        'review',
        'status',
        'brand'
    ];

}
