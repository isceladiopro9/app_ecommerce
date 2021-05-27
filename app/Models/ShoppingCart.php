<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ShoppingCart extends Model
{
    //use HasFactory;
    protected $fillable = ['status'];

    public function productsSize(){
    	return $this->id;
    }

    public static function findOrCreateBySessionID($shopping_cart_id){
    	if($shopping_cart_id){
    		//Buscar el carito de compras con el ID
    		return ShoppingCart::findBySession($shopping_cart_id);

    	}else{
    		//Crear un carrito de compras
    		return ShoppingCart::createWithoutSssion();
    	}
    }

    public static function findBySession($shoppin_cart_id){
    	return ShoppingCart::find($shopping_cart_id);
    }

    public static function createWithoutSssion(){
    	return ShoppingCart::create([
    		'status'=>'incompleted'
    	]);
    }
}
