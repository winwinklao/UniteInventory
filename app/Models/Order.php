<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    public $table = "orders";
    protected $fillable = [
        'user_id',
        'Total_price',
        'company_id',
        'date_EXP'
    ];
}
