<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

//Route::get('/', function () {
//    return view('welcome');
//});

//Route::get('/', 'WelcomeController@index');

Route::get('/', function () {
    return view('index');
})->name('index');

Route::get('/kyujin/', function () {
   return view('kyujin');
})->name('kyujin');

Route::get('/kyujin_shousai/', function () {
   return view('kyujin_shousai');
})->name('kyujin_shousai');

Route::get('/company/', function () {
   return view('company');
})->name('company');

Route::get('/profile/', function () {
   return view('profile');
})->name('profile');

Route::get('/profile_shousai/', function () {
   return view('profile_shousai');
})->name('profile_shousai');

//Route::get('/moushikomi/', function () {
  // return view('moushikomi');
//})->name('moushikomi');

Route::get('/welcome/', function () {
    return view('welcome');
})->name('welcome');



// ユーザ登録
Route::get('signup', 'Auth\AuthController@getRegister')->name('signup.get');
Route::post('signup', 'Auth\AuthController@postRegister')->name('signup.post');

// ログイン認証
Route::get('login', 'Auth\AuthController@getLogin')->name('login.get');
Route::post('login', 'Auth\AuthController@postLogin')->name('login.post');
Route::get('logout', 'Auth\AuthController@getLogout')->name('logout.get');

Route::group(['middleware' => 'auth'], function () {
    Route::resource('users', 'UsersController', ['only' => ['index', 'show']]);
    Route::group(['prefix' => 'users/{id}'], function () { 
        Route::post('follow', 'UserFollowController@store')->name('user.follow');
        Route::delete('unfollow', 'UserFollowController@destroy')->name('user.unfollow');
        Route::get('followings', 'UsersController@followings')->name('users.followings');
        Route::get('followers', 'UsersController@followers')->name('users.followers');
    });
    
    Route::resource('microposts', 'MicropostsController', ['only' => ['store', 'destroy']]);
});
