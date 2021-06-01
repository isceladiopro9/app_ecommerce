<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ShoppingCart;
use App\Models\ProductShoppingCart;

class ProductShoppingCartsController extends Controller
{
    
    public function store(Request $request)
    {
        $shopping_cart_id=\Session::get('shopping_cart_id');


        $shopping_cart =ShoppingCart::findOrCreateBySessionID($shopping_cart_id);

        $response = ProductShoppingCart::create([
            'shopping_cart_id'=> $shopping_cart->id,
            'product_id' => $request->product_id
        ]);

        if($response){
            return redirect('/carrito');
        }else{
            return back();
        }

    }

    
    public function destroy($id)
    {
        //
    }
}
