<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExportOrder extends Model
{
    use HasFactory;
    public $table = "export_orders";
    protected $fillable = [
        'user_id',
        'requestDate',
        'requireDate',
        'cus_name',
        'tel',
        'transportId',
        'shippedAddress',
        'shippedDate'
    ];

}
