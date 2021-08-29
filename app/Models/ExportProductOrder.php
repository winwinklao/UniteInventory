<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class ExportProductOrder extends Model
{
    use HasFactory;
    protected $table = "export_product_orders";
    protected $fillable = [
        'product_id',
        'user_id',
        'order_id',
        'lot_id',
        'quantity',
        'cost',
        'test',
        's'
    ];

    public function product(){
        return $this->hasOne(Product::class,'id_product','product_id');
    }
}
