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

Route::get('/', 'IndexController@index')->name('index');
Route::post('index/store', 'IndexController@store')->name('index.store');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::middleware(['auth'])->group(function(){
	Route::get('admin/frontup', 'Admin\FrontupController@index')->name('admin.frontup');
	Route::get('admin/frontup/create', 'Admin\FrontupController@create')->name('admin.frontup.create');
	Route::post('admin/frontup/store', 'Admin\FrontupController@store')->name('admin.frontup.store');
	Route::get('admin/frontup/{id}/edit', 'Admin\FrontupController@edit')->name('admin.frontup.edit');
	Route::put('admin/frontup/{id}/update', 'Admin\FrontupController@update')->name('admin.frontup.update');
	Route::get('admin/frontup/{id}/delete', 'Admin\FrontupController@delete')->name('admin.frontup.delete');
	Route::get('admin/video', 'Admin\VideoController@index')->name('admin.video');
	Route::get('admin/video/create', 'Admin\VideoController@create')->name('admin.video.create');
	Route::post('admin/video/store', 'Admin\VideoController@store')->name('admin.video.store');
	Route::get('admin/video/{id}/delete', 'Admin\VideoController@delete')->name('admin.video.delete');
	Route::get('admin/chef', 'Admin\ChefController@index')->name('admin.chef');
	Route::get('admin/chef/create', 'Admin\ChefController@create')->name('admin.chef.create');
	Route::post('admin/chef/store', 'Admin\ChefController@store')->name('admin.chef.store');
	Route::get('admin/chef/{id}/edit', 'Admin\ChefController@edit')->name('admin.chef.edit');
	Route::put('admin/chef/{id}/update', 'Admin\ChefController@update')->name('admin.chef.update');
	Route::get('admin/chef/{id}/delete', 'Admin\ChefController@delete')->name('admin.chef.delete');
	Route::get('admin/message', 'Admin\MessageController@index')->name('admin.message');
	Route::get('admin/message/{id}/delete', 'Admin\MessageController@delete')->name('admin.message.delete');
	Route::get('admin/detail-info', 'Admin\DetailController@index')->name('admin.detail');
	Route::get('admin/detail-info/create', 'Admin\DetailController@create')->name('admin.detail.create');
	Route::post('admin/detail-info/store', 'Admin\DetailController@store')->name('admin.detail.store');
	Route::get('admin/detail-info/{id}/edit', 'Admin\DetailController@edit')->name('admin.detail.edit');
	Route::put('admin/detail-info/{id}/update', 'Admin\DetailController@update')->name('admin.detail.update');
	Route::get('admin/detail-info/{id}/delete', 'Admin\DetailController@delete')->name('admin.detail.delete');
	Route::get('admin/breakfast', 'Admin\BreakController@index')->name('admin.break');
	Route::get('admin/breakfast/create', 'Admin\BreakController@create')->name('admin.break.create');
	Route::post('admin/breakfast/store', 'Admin\BreakController@store')->name('admin.break.store');
	Route::get('admin/breakfast/{id}/edit', 'Admin\BreakController@edit')->name('admin.break.edit');
	Route::put('admin/breakfast/{id}/update', 'Admin\BreakController@update')->name('admin.break.update');
	Route::get('admin/breakfast/{id}/delete', 'Admin\BreakController@delete')->name('admin.break.delete');
	Route::get('admin/breakfast/getJsonData', 'Admin\BreakController@getJsonData')->name('admin.break.getJsonData');

	Route::get('admin/main-course', 'Admin\MainController@index')->name('admin.main');
	Route::get('admin/main-course/create', 'Admin\MainController@create')->name('admin.main.create');
	Route::post('admin/main-course/store', 'Admin\MainController@store')->name('admin.main.store');
	Route::get('admin/main-course/{id}/edit', 'Admin\MainController@edit')->name('admin.main.edit');
	Route::put('admin/main-course/{id}/update', 'Admin\MainController@update')->name('admin.main.update');
	Route::get('admin/main-course/{id}/delete', 'Admin\MainController@delete')->name('admin.main.delete');

	Route::get('admin/dinner', 'Admin\DinnerController@index')->name('admin.dinner');
	Route::get('admin/dinner/create', 'Admin\DinnerController@create')->name('admin.dinner.create');
	Route::post('admin/dinner/store', 'Admin\DinnerController@store')->name('admin.dinner.store');
	Route::get('admin/dinner/{id}/edit', 'Admin\DinnerController@edit')->name('admin.dinner.edit');
	Route::put('admin/dinner/{id}/update', 'Admin\DinnerController@update')->name('admin.dinner.update');
	Route::get('admin/dinner/{id}/delete', 'Admin\DinnerController@delete')->name('admin.dinner.delete');

	Route::get('admin/desserts', 'Admin\DessertsController@index')->name('admin.desserts');
	Route::get('admin/desserts/create', 'Admin\DessertsController@create')->name('admin.desserts.create');
	Route::post('admin/desserts/store','Admin\DessertsController@store')->name('admin.desserts.store');
	Route::get('admin/desserts/{id}/edit', 'Admin\DessertsController@edit')->name('admin.desserts.edit');
	Route::put('admin/desserts/{id}/update', 'Admin\DessertsController@update')->name('admin.desserts.update');
	Route::get('admin/desserts/{id}/delete', 'Admin\DessertsController@delete')->name('admin.desserts.delete');

	Route::get('admin/special', 'Admin\SpecialController@index')->name('admin.special');
	Route::get('admin/special/create', 'Admin\SpecialController@create')->name('admin.special.create');
	Route::post('admin/special/store', 'Admin\SpecialController@store')->name('admin.special.store');
	Route::get('admin/special/{id}/edit', 'Admin\SpecialController@edit')->name('admin.special.edit');
	Route::put('admin/special/{id}/update', 'Admin\SpecialController@update')->name('admin.special.update');
	Route::get('admin/special/{id}/delete', 'Admin\SpecialController@delete')->name('admin.special.delete');

	Route::get('admin/address', 'Admin\AddressController@index')->name('admin.address');
	Route::get('admin/address/create', 'Admin\AddressController@create')->name('admin.address.create');
	Route::post('admin/address/store','Admin\AddressController@store')->name('admin.address.store');
});
