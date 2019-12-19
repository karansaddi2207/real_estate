<?php

//for Admin
Route::group(['namespace' => 'Admin'], function(){

	Route::group(['middleware' => 'admin'], function(){

		Route::get('admin/home', 'AdminController@index');
		Route::resource('admin/state', 'StateController');
		Route::resource('admin/properties', 'PropertiesController');
		Route::resource('admin/cities', 'CitiesController');

	});

	Route::group(['prefix' => 'admin'], function(){

		/*Route::get('login','LoginController@showLoginForm')->name('admin.login');
		Route::post('login', 'LoginController@login');*/
		Route::get('login','AuthController@login')->name('admin.login');
		Route::post('login', 'AuthController@loginUser');
		Route::get('logout', 'AuthController@logout')->name('admin.logout');

	});

});


//For User
Route::group(['prefix' => 'user', 'namespace' => 'User'], function(){

	Route::get('/listing/featured', 'listingController@index')->name('user.featured');
	Route::get('/listing/details/{id}', 'listingController@listing_details')->name('listing.details');
	Route::match(['get','post'],'/listing/search', 'listingController@search')->name('user.search');
	Route::get('/listing/search/autocomplete', 'listingController@search_autocomplete')->name('listing.saearch.autocomplete');
	Route::get('/listing/booking/{id}', 'listingController@booking')->name('user.booking')->middleware('auth');
	Route::post('/listing/booking/{id}', 'UserController@booking')->name('booking');
	Route::get('listings/for_sale', 'listingController@for_sale_listings');
	Route::get('listings/for_rent', 'listingController@for_rent_listings');

});

Route::group(['prefix' => 'user'], function(){

	Route::get('/contact', 'HomeController@contact')->name('user.contact');
	Route::get('/about', 'HomeController@about')->name('user.about');
	Route::post('/feedback', 'HomeController@feedback')->name('user.feedback');
	
});

Route::get('/','HomeController@index');
Route::get('/home','HomeController@index');
Route::get('logout', 'Auth\LoginController@logout')->name('logout');
Auth::routes();

Route::get('login/facebook', 'Auth\LoginController@redirectToProvider');
Route::get('login/facebook/callback', 'Auth\LoginController@handleProviderCallback');