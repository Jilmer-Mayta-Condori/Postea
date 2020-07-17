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

/*
Route::get('/',function(){
    return view('postUnico');
});

Auth::routes();
Route::get('/home', 'UserController@index')->name('home');
*/

//Route::get('/home', 'HomeController@index')->name('home');

//Route::get('/', 'PostController@index');
//Route::get('/post/{id}', 'PostController@show');
//Route::get('/home', 'PostController@index')->name('home');
//Route::get('/logeo', 'HomeController@index')->name('logeo');

Route::redirect('/', '/posts');
Route::redirect('/home', '/posts');
Route::get('/posts', 'PostController@index');
Route::get('/posts/create', 'PostController@create');
Route::post('/posts', 'PostController@store');
Route::get('/posts/myPosts', 'PostController@userPost');
Route::get('/post/{id}', 'PostController@show')->name('post');
Route::post('/comments', 'CommentController@store');
Route::get('/publicaciones/{id}', 'PostController@destroy');
Route::get('/MyAccount', 'UserController@MyAccount');
Route::get('/Editar/{id}', 'UserController@editar');
Route::post('/user/update', 'UserController@GuardarCambios');
Route::get('/UserDestroy', 'UserController@delete');

Route::get('/casa', 'PostController@index')->name('home');

//ruta Notificaciones

Route::get('/Notificaciones',function(){
    return view("posts.Notificaciones");
});


// Ruta login con facebook

Route::get('auth/{provider}', 'Auth\SocialAuthController@redirectToProvider')->name('social.auth');
Route::get('auth/{provider}/callback', 'Auth\SocialAuthController@handleProviderCallback');


Auth::routes();