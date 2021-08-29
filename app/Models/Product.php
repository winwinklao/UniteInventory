<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    
    use HasFactory;

    protected $table = 'products';
    protected $fillable = [
        'id_product',
        'id',
        'name',
        'type',
        'user_image',
        
        'use_area',
        'company',
        
    ];
    
    public static function getAll(){
        return self::get();
    }

    public static function getItem($id){
        //return self::where('id',$id)->get();
        return self::findOrFail($id);
    }
    public static function storeItem($item){
        return self::create($item); 
    }
    
    public static function updateItem($id, $item){
        self::findOrFail($id)->update($item); 	
    }

    public static function destroyItem($id){
        self::findOrFail($id)->delete();
    }
}
