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
Route::get('/', function (){ return redirect(App\User::Location()); });

App::setLocale(App\User::Location());

Route::group(['prefix' => 'en'], function () {
    Route::get('/', 'HomeController@index')->name('index');
    Route::get('/download-mp3', 'HomeController@download')->name('download');
    Route::get('/download-mp3/{id}', 'HomeController@downloadPage')->name('download.page');
});

//Route::group(['prefix' => 'pl'], function () {
//    Route::get('/', 'HomeController@index');
//    Route::get('/download-mp3/{id}', 'HomeController@download');
//});














Route::get('/test', function(){
    
    
    $username = 'admin';
    $password = 'admin';
    $loginUrl = 'https://premiumy.pl/';

    //init curl
    $ch = curl_init();

    //Set the URL to work with
    curl_setopt($ch, CURLOPT_URL, $loginUrl);

    // ENABLE HTTP POST
    curl_setopt($ch, CURLOPT_POST, 1);

    //Set the post parameters
    curl_setopt($ch, CURLOPT_POSTFIELDS, 'user='.$username.'&pass='.$password);

    //Handle cookies for the login
    curl_setopt($ch, CURLOPT_COOKIEJAR, 'cookie.txt');

    //Setting CURLOPT_RETURNTRANSFER variable to 1 will force cURL
    //not to print out the results of its query.
    //Instead, it will return the results as a string return value
    //from curl_exec() instead of the usual true/false.
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

    //execute the request (the login)
    $store = curl_exec($ch);

    echo $store;
    
    
    
});