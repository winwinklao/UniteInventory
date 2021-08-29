<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inshelf extends Model
{
    use HasFactory;

    protected $table = 'inshelves';

    protected $fillable = [
        'product_id', 'product_name','product_type' , 'product_import_date','product_value','product_cost_price',
    ];
}
