<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::namespace("Welcome")->prefix("/")->name("welcome.")->group(function (){
    Route::get("/", "HomeController@index")->name("index");

    Route::get("/politica-de-privacidade", "HomeController@privacyPolicy")->name("privacy-policy");
});


Route::get('/home', 'HomeController@index')->name('home');

Route::post('/logout', 'Auth\LoginController@logout')->name('logout');


/**
 * TenantFront Routes.
 *
 */
Route::namespace('TenantFront')->prefix('estabelecimentos')->name('tenant-front.')->group(function () {
    Route::prefix('/{tenant_url_prefix}')->middleware("tenant")->group(function () {
        Route::get('/', 'TenantFrontController@choosefranchise')->name('choose-franchise');

        /**
         * Tenant Franchise Routes.
         *
         */
        Route::middleware("franchise")->prefix('/{franchise_url_prefix}')->name('franchise.')->group(function () {
            Route::get("/", "TenantFrontController@index")->name("index");

            Route::get("/localizacao", "TenantFrontController@location")->name("location");

            /**
             * Cart Routes **consumed by ajax
             *
             */
            Route::prefix("/meu-carrinho")->name("cart.")->group(function () {
                Route::post("/", "CartController@getCartModalView")->name("index");
                Route::post("/deletar", "CartController@destroy")->name("destroy");

                /**
                 * Pizzas
                 *
                 */
                Route::prefix("/pizzas")->name("pizza.")->group(function () {
                    Route::post("/adicionar", "CartController@addPizzaToCart")->name("add");
                    Route::post("/deletar", "CartController@removePizzaFromCart")->name("delete");
                });

            });

            /**
             * Pizza Routes
             *
             */
            Route::prefix("/pizza")->name("pizza.")->group(function () {
                Route::post("/view/sabores-e-bordas", "PizzaController@getFlavorsAndBorders")->name("get-flavors-and-borders");
            });

            /**
             * Pedido
             */
            Route::prefix('/pedido')->name("order.")->group(function () {
                Route::prefix("/pedir/etapa")->name("make.step-")->group(function() {

                    Route::get("/1", "OrderController@viewAddBillingData")->name('get-1');

                    Route::post("/1", "OrderController@storeBillingData")->name("store-1");

                    //Route::get("/2/{order}", "OrderController@someMethod")->name("get-2");

                });
                Route::get('/detalhes-do-remetente', "TenantFrontController@viewAddBillingData")->name('view.add-billing-data');

                Route::post("/", "TenantFrontController@addBillingDataAndMakeOrder")->name("add-billing-data-and-make-order");
            });

        });
    });
});

/**
 * Tenant Management Routes.
 *
 */
Route::group(['guard' => 'franchise'], function () {
    Route::name('tenant.')->prefix('cliente')->group(function() {
        Route::get('/login', 'Auth\LoginController@showTenantUserLoginForm')->name('login');
        //Route::get('/cadastro', 'Auth\RegisterController@showTenantUserRegisterForm')->name('register');

        Route::post('/login', 'Auth\LoginController@TenantUserLogin');
        //Route::post('/cadastro', 'Auth\RegisterController@createTenantUser');

        Route::namespace('Tenant')->middleware(['auth:tenant'])->prefix('dash')->group(function () {
            Route::get('/', 'HomeController@index');

            /**RESTAURANTS MANAGEMENT */
            Route::resource('restaurantes', 'RestaurantController', [
                'except' => [
                    "store", "update"
                ],

                'parameters' => "teste",

                "prefix" => "cadastrar",

                "as" => "restaurants"
            ]);

            Route::post('/restaurantes', 'RestaurantController@storeRequest')->name('restaurants');
        });
    });
});



/**
 * Alloom Routes.
 *
 */
Route::group(['guard' => 'web'], function () {
    Route::name('alloom.')->prefix('alloom')->group(function () {
        Route::get('/login', 'Auth\LoginController@showUserLoginForm')->name('login');
        //Route::get('/cadastro', 'Auth\RegisterController@showUserRegisterForm')->name('register');

        Route::post('/login', 'Auth\LoginController@userLogin');
        //Route::post('/cadastro', 'Auth\RegisterController@createUser');

        Route::namespace('Alloom')->middleware(['auth:web'])->prefix('dash')->group(function () {
            Route::get('/', 'HomeController@index');
        });
    });
});
