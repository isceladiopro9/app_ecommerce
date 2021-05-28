<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ShoppingCart extends Model
{
    //use HasFactory;
    protected $fillable = ['status'];

    public function ProductShoppingCarts(){
    	return $this->hasMay('App\Models\ProductShoppingCart');
    }

    public function products(){
    	return $this->belongsToMany('App\Models\Product','product_shopping_carts');
    }

    public function productsSize(){
    	return $this->products()->count();
    }

    public static function findOrCreateBySessionID($shopping_cart_id){
    	if($shopping_cart_id){
    		//Buscar el carito de compras con el ID
    		return ShoppingCart::findBySession($shopping_cart_id);

    	}else{
    		//Crear un carrito de compras
    		return ShoppingCart::createWithoutSession();
    	}
    }

    public static function findBySession($shopping_cart_id){
    	return ShoppingCart::find($shopping_cart_id);
    }

    public static function createWithoutSession(){
    	return ShoppingCart::create([
    		'status'=>'incompleted'
    	]);


    }
}
