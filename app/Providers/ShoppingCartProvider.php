<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\ShoppingCart;
use Illuminate\Support\Facades\Session;

class ShoppingCartProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer("*",function($view){
            $shopping_cart_id=\Session::get('shopping_cart_id');


            $shopping_cart =ShoppingCart::findOrCreateBySessionID($shopping_cart_id);

            
            \Session(['shopping_cart_id'=>$shopping_cart->id]);


            $view->with("productCount",$shopping_cart->productsSize());
        });
    }
}
