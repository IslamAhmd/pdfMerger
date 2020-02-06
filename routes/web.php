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

Route::get('/test', function(){
	return view('test');
});

Route::get('/', 'PagesController@index')->name('pages.index');
Route::get('/contact', 'PagesController@contact')->name('pages.contact');

// Route::post('/carts', 'PagesController@cart')->name('pages.cart');


Route::get('orders', 'OrdersController@index')->name('orders.index');
Route::get('levels', 'LevelController@index')->name('levels.index');
Route::get('years', 'YearsController@index')->name('years.index');
Route::get('subjects', 'SubjectsController@index')->name('subjects.index');

Route::post('materials/merge', 'MaterialController@merge')->name('materials.merge');



Auth::routes();


Route::group(['middleware' => ['super_admin']], function(){


	Route::get('/dashboard', 'HomeController@index')->name('dashboard');

	Route::resource('users', 'UserController')->except(['edit', 'create', 'update', 'store']);


	Route::resource('orders', 'OrdersController')->except(['edit', 'create', 'index', 'update']);
	Route::post('orders/update', 'OrdersController@update')->name('orders.update');
	Route::resource('levels', 'LevelController')->except(['edit', 'create', 'index']);
	Route::post('levels/update', 'LevelController@update')->name('levels.update');
	// Route::post('levels/detach', 'LevelController@detach')->name('levels.detach');
	Route::resource('years', 'YearsController')->except(['edit', 'create', 'index', 'update']);
	Route::post('years/update', 'YearsController@update')->name('years.update');
	Route::post('years/getYear', 'YearsController@getYear')->name('getYear');
	Route::resource('subjects', 'SubjectsController')->except(['edit', 'create', 'index', 'update']);
	Route::post('subjects/update', 'SubjectsController@update')->name('subjects.update');

	Route::resource('materials', 'MaterialController')->except(['create', 'edit', 'update', 'show']);




});
