<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::namespace('API\TenantFront')->prefix('estabelecimentos')->name('api.tenant-front.')->group(function () {
    Route::prefix('/{tenant_url_prefix}')->group(function () {
        Route::prefix('/{franchise_url_prefix}')->name('franchise.')->group(function () {
            Route::prefix("pizzas")->name("pizzas.")->group(function () {
                Route::post("/sabor-e-tamanho", "PizzaController@getPizzaFlavorsAndBorderFromPizzaSize")->name("get-pizza-flavors-and-borders-from-pizza-size");
            });
        });
    });
});
