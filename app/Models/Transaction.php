<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    protected $table = 'transactions';

    protected $fillable = [
        'user_id',
        'shop_id',
        'item_id',
        'amount',
        'type',
        'status',
        'description'

    ];

}
