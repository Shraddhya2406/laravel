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
    return view('homePage');
});

Route::get('/NextPage', function () {
    return view('about');
});

Route::get('/form', function () {
    return view('form');
});

Route::get('/fetch', 'userscontrollers@show'); 

Route::post('/submit','userscontrollers@store');


Route::get('/example/{id}', function ($id) {
    echo "Welcome $id to our site";
});


Route::get('/{id}', function ($id) {
    echo "This is not correct Url";
});
