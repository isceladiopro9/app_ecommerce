<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ShoppingCart;

class MainController extends Controller
{
    public function home(Request $request){
    	$shopping_cart_id=$request->session()->get('shopping_cart_id');

    	echo ">".$shopping_cart_id;

    	$shopping_cart =ShoppingCart::findOrCreateBySessionID($shopping_cart_id);

    	$request->session()->put('shopping_cart_id',$shopping_cart_id);


        return view("main.home",["shopping_cart"=>$shopping_cart]);
    }
}
