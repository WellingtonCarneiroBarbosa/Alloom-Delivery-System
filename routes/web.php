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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', 'HomeController@index')->name('home');

Route::post('/logout', 'Auth\LoginController@logout')->name('logout');

/**
 * TenantFront Routes.
 *
 */
Route::namespace('TenantFront')->prefix('estabelecimentos')->name('tenant-front.')->group(function () {
    Route::prefix('/{tenant_url_prefix}')->group(function () {
        Route::get('/', 'TenantFrontController@chooseUnit')->name('choose-unit');

        /**
         * Tenant Unit Routes.
         *
         */
        Route::prefix('/{unit_url_prefix}')->name('unit.')->group(function () {
            Route::get('/', 'TenantFrontController@index')->name('index');

            Route::get('/visualizar-carrinho-de-pizzas', "TenantFrontController@viewPizzaCart")->name('view-pizza-cart');

            Route::get('/deletar-carrinho-de-pizza', "TenantFrontController@deletePizzaCart")->name('delete-pizza-cart');

            Route::post("/adicionar-pizza-ao-carrinho", "TenantFrontController@addPizzaToCart")->name('add-pizza-to-cart');

            Route::prefix('/pedir')->name("order.")->group(function () {
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
Route::group(['guard' => 'tenant'], function () {
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
