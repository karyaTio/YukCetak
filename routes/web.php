<?php

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


Auth::routes();

Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');

Route::get('/', 'PagesController@index');

Route::get('/landing-page', 'PagesController@designerLandingPage');
Route::get('/home-percetakan', 'PagesController@homePercetakan' )->name('home.percetakan');
Route::get('/job-desain', 'DesignJobController@showAvailable');
Route::get('/job-desain/{id}', 'DesignJobController@showDetail');
Route::get('/job-desain/{id}/apply', 'DesignJobController@showApply');

Route::prefix('/desainer')->group(function () {
    Route::get('/profil/{id}', 'DesignerController@show');
    Route::get('/pesanan-saya', 'DesignerController@pesananSaya');
    Route::get('/percetakan/{id}', 'PercetakanController@show');
    Route::get('/percetakan/services/{id}', 'ServicesController@show');
    Route::post('/percetakan/services/{id}/orders', 'OrdersDesignerController@store');
});



Route::prefix('/percetakan')->group(function () {
    Route::get('/register', 'AuthPercetakan\PercetakanRegisterController@showRegistrationForm')->name('percetakan.register');
    Route::post('/register', 'AuthPercetakan\PercetakanRegisterController@register')->name('percetakan.register.submit');
    Route::get('/login', 'AuthPercetakan\PercetakanLoginController@showLoginForm')->name('percetakan.login');
    Route::post('/login', 'AuthPercetakan\PercetakanLoginController@login')->name('percetakan.login.submit');
    Route::get('/dashboard', 'PercetakanController@dashboard')->name('percetakan.home');
    Route::get('/logout', 'AuthPercetakan\PercetakanLoginController@logout');
    Route::get('/profil/{id}', 'PercetakanController@profil')->name('percetakan.profil');

    Route::get('/services', 'ServicesController@index');
    Route::get('/services/create', 'ServicesController@create');
    Route::post('/services', 'ServicesController@store');
    Route::post('/services/update', 'ServicesController@update');
    Route::post('/services/delete', 'ServicesController@destroy');
    Route::post('/services/{id}', 'ServicesController@show');
    Route::get('/services/{id}/edit', 'ServicesController@edit');
    Route::get('/services/{id}/packets', 'PacketController@index');
    Route::get('/services/{id}/packets/create', 'PacketController@create');
    Route::post('/services/{id}/packets', 'PacketController@store');
    Route::post('/services/packets/delete', 'PacketController@destroy');

    Route::get('/design', 'DesignJobController@index')->name('percetakan.design');
    Route::get('/design/create', 'DesignJobController@create')->name('percetakan.design.create');
    Route::post('/design', 'DesignJobController@store')->name('percetakan.design.store');
    Route::get('/design/info/{id}', 'DesignJobController@info');

    Route::get('/orders/{id}', 'OrdersController@index');
});
