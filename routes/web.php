<?php

Route::get('/category', 'CategoriesController@category');

//Pages
Route::get('/learn', function () {
    return view('pages/learn-more');
});

Route::get('/contract', function () {
    return view('pages/contract');
});

Route::get('/insurance', function () {
    return view('pages/insurance');
});

Route::get('/contact', function () {
    return view('pages/contact');
});

Route::get('/promotion', function () {
    return view('pages/promotion');
});



Route::get('/', 'HomeController@index')->name('home');

Route::get('/register', 'RegisterController@index');

Route::post('/register', 'RegisterController@store');

//Route::get('/login', 'LoginController@index');

Route::get('login', [ 'as' => 'login', 'uses' => 'LoginController@index']);

Route::post('/login', 'LoginController@store');

Route::get('/logout', 'LoginController@destroy');

Route::get('/search', 'AnnouncesController@index')->name('search');

Route::get('/create', 'AnnouncesController@create');



//test

Route::get('/become-a-owner', 'AnnouncesController@create');

Route::post('/become-a-owner', 'AnnouncesController@store');



Route::post('/become-a-owner/{id}/vehicle' , 'AnnouncesController@update');

Route::post('/become-a-owner/{id}/details' , 'AnnouncesController@update');

Route::post('/become-a-owner/{id}/colors' , 'AnnouncesController@update');

Route::post('/become-a-owner/{id}/features' , 'AnnouncesController@update');

Route::post('/become-a-owner/{id}/description' , 'AnnouncesController@update');

Route::post('/become-a-owner/{id}/photos' , 'AnnouncesController@update');

Route::post('/become-a-owner/{id}/vehicle-rules' , 'AnnouncesController@update');

Route::post('/become-a-owner/{id}/availability-settings' , 'AnnouncesController@update');

Route::post('/become-a-owner/{id}/calendar' , 'AnnouncesController@update');

Route::post('/become-a-owner/{id}/price' , 'AnnouncesController@update');

Route::post('/become-a-owner/{id}/local-laws' , 'AnnouncesController@update');

Route::post('/become-a-owner/{id}/publish' , 'AnnouncesController@update');

Route::get('/become-a-owner/{id}/location' , function () {
    return view('new.location');
})->name('location');

Route::get('/become-a-owner/{id}/vehicle', 'AnnouncesController@selectBrands')->name('vehicle');

Route::get('myform/ajax/{id}',array('as'=>'myform.ajax','uses'=>'AnnouncesController@selectGenes'));

Route::get('category/ajax/{id}',array('as'=>'category.ajax','uses'=>'AnnouncesController@selectCategories'));

Route::get('/become-a-owner/{id}/details' , function () {
    return view('new.details');
})->name('details');

Route::get('/become-a-owner/{id}/colors' , function () {
    return view('new.colors');
})->name('colors');

Route::get('/become-a-owner/{id}/features' , function () {
    return view('new.features');
})->name('features');

Route::get('/become-a-owner/{id}/description' , function () {
    return view('new.description');
})->name('description');

Route::get('/become-a-owner/{id}/photos' , function () {
    return view('new.photos');
})->name('photos');

Route::get('/become-a-owner/{id}/vehicle-rules' , function () {
    return view('new.vehicle-rules');
})->name('vehicle-rules');

Route::get('/become-a-owner/{id}/availability-settings' , function () {
    return view('new.availability-settings');
})->name('availability-settings');

Route::get('/become-a-owner/{id}/calendar' , function () {
    return view('new.calendar');
})->name('calendar');

Route::get('/become-a-owner/{id}/price' , function () {
    return view('new.price');
})->name('price');

Route::get('/become-a-owner/{id}/local-laws' , function () {
    return view('new.local-laws');
})->name('local-laws');

Route::get('/become-a-owner/{id}/publish' , function () {
    return view('new.publish');
})->name('publish');

//endtest

Route::get('/cars/{announce}', 'AnnouncesController@show');

Route::post('/create', 'AnnouncesController@store');

Route::get('/users/show/{user}', 'UsersController@show');

//Admin
Route::get('/admin/brands', 'BrandsController@index');

Route::post('/admin/brands', 'BrandsController@store');

Route::get('/admin/categories', 'CategoriesController@index');

Route::post('/admin/categories', 'CategoriesController@store');

Route::get('/admin/genes', 'GenesController@index');

Route::post('/admin/genes', 'GenesController@store');
