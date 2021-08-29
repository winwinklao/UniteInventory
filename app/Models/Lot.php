<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lot extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_stock_id','product_import_date','product_expire_date','product_value','product_cost_price','note',
    ];
}
