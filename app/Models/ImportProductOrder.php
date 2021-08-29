<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class ImportProductOrder extends Model
{
    use HasFactory;
    // use SoftDeletes;
    protected $table = "import_product_orders";
    protected $fillable = [
        'id_product',
        'quantity',
        'cost',
        'date_EXP'
    ];

    public function product(){
        return $this->hasOne(Product::class,'id_product','id_product');
    }
    
    
}
