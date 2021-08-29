<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shelf extends Model
{
    use HasFactory;
    protected $table = 'shelves';

    protected $fillable = [
        'shelf_id',
    ];

    public static function getId($id){
        return self::where('id',$id)->get();
        
    }
}
