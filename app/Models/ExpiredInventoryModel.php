<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExpiredInventoryModel extends Model
{
    use HasFactory;
    protected $table = "import_product_orders";
}
