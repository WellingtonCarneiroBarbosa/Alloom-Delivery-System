
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

Route::namespace('Home')->name('home.')->group(function () {
    Route::get('/', function () {
        return view('home');
    })->name('index');
});

Auth::routes();

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
        Route::namespace('AlloomCustomers')->prefix('dash')->middleware('auth:alloom_customer_user')->group(function () {
            Route::get('/', 'HomeController@index')->name('home');

            Route::get('/produtos', function () {
                //dd(auth()->id());
                return \App\Models\AlloomCustomers\Products\Product::all()->toJson();
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
        });
    });
});



