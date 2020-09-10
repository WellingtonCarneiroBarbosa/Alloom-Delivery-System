
<?php

use Illuminate\Support\Facades\Auth;
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

Route::get('/politica-de-cookies', 'Tenant\HomeController@cookies')->name('cookies');

Route::namespace('Home')->name('home.')->group(function () {
    Route::get('/', function () {
        return view('welcome.home');
    })->name('index');

    Route::post('/solicitar-teste', 'TestRequestController@request')->name('test.request');
});

Auth::routes();

/**
 * Alloom Customer Front Routes.
 *
 */
Route::prefix('{tenant_company}')->name('tenant_company.')->group(function() {
    Route::get('/', 'Tenant\HomeController@index')->name('index');

    Route::get('/carrinho', 'Tenant\HomeController@cart')->name('cart');

    Route::get('/localizacao', 'Tenant\HomeController@location')->name('location');

    Route::get('{tenant_restaurant}', 'Tenant\RestaurantController@index')->name('index.restaurant');

});



/**
 * Alloom Customer Routes.
 *
 */
Route::group(['guard' => 'alloom_customer_user'], function () {
    Route::prefix('cliente')->name('alloom_customer.')->group(function () {
        /**
         * Auth Routes.
         */
        Route::get('/login', 'Auth\LoginController@showAlloomCustomerUserLoginForm')->name('login');
        Route::get('/cadastro', 'Auth\RegisterController@showAlloomCustomerUserRegisterForm')->name('register');

        Route::post('/login', 'Auth\LoginController@alloomCustomerUserLogin');
        Route::post('/cadastro', 'Auth\RegisterController@createAlloomCustomerUser');

        /**
         * Dashboard Routes.
         */
        Route::namespace('AlloomCustomers')->prefix('dash')->middleware(['auth:alloom_customer_user'])->group(function () {
            Route::get('/', 'HomeController@index')->name('home');

            Route::get('/clientes', function () {
                return view('alloom_customer.customers.create');
            });

            Route::get('/me', function () {
                return auth()->user();
            });

            /**
             * Restaurant Routes.
             *
             */
            Route::namespace('Restaurants')->prefix('restaurantes')->name('restaurants.')->group(function () {
                Route::get('/cadastrar', 'RestaurantController@create')->name('create');
                Route::post('/cadastrar', 'RestaurantController@store')->name('store');
            });

            /**
             * Products routes.
             *
             */
            Route::namespace('Products')->prefix('produtos')->name('products.')->group(function () {
                Route::get('/', 'ProductController@index')->name('index');
                Route::get('/cadastrar', 'ProductController@create')->name('create');
                Route::post('/cadastrar', 'ProductController@store')->name('store');
            });
        });
    });
});


/**
 * Alloom Delivery Routes.
 *
 */
Route::group(['guard' => 'alloom_user'], function () {
    Route::prefix('alloom')->name('alloom_user.')->group(function () {
        /**
         * Auth Routes.
         */
        Route::get('/login', 'Auth\LoginController@showAlloomUserLoginForm')->name('login');
        Route::get('/cadastro', 'Auth\RegisterController@showAlloomUserRegisterForm')->name('register');

        Route::post('/login', 'Auth\LoginController@alloomUserLogin');
        Route::post('/cadastro', 'Auth\RegisterController@createAlloomUser');


        /**
         * Dashboard Routes.
         */
        Route::namespace('AlloomDelivery')->prefix('dash')->middleware('auth:alloom_user')->group(function () {
            Route::get('/', 'HomeController@index')->name('home');

            /**
             * Customers Routes.
             *
             */
            Route::namespace('Customers')->prefix('clientes')->name('customers.')->group(function (){
                Route::get('/cadastrar', 'AlloomCustomerController@create')->name('create');

                Route::prefix('master')->name('master.')->group(function () {
                    Route::get('/', 'MasterCustomerController@index')->name('index');
                    Route::get('/cadastrar/{customer}', 'MasterCustomerController@create')->name('create');

                    Route::post('/cadastrar/{customer}', 'MasterCustomerController@store')->name('store');
                });
            });

            /**
             * Test Routes.
             *
             */
            Route::namespace('Tests')->prefix('testes')->name('test.')->group(function () {
                Route::get('/em-prospeccao', 'TestController@inProspectionTests')->name('inProspection');

                Route::name('changeStatus.')->prefix('status')->group(function () {
                    Route::put('/em-prospeccao/{testRequest}', 'TestController@changeStatusToInProspection')->name('inProspection');
                });
            });
        });
    });
});



