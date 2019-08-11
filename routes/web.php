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

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/search', function () {
    return view('partials/search');
});

Route::get('/choose', function () {
    return view('partials/choose');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');



Route::group(['middleware' => 'auth'], function () {

    Route::get('/admin','UserController@dashboard')->name('dashboard');

    // Add property
    Route::get('/admin/add-property','PropertyController@addproperty')->name('addProperty');
    Route::post('/admin/add-property/store','PropertyController@store')->name('storeProperty');

    //edit Property
    Route::get('/admin/edit-property/{id}','PropertyController@edit')->name('editProperty');

    //update Property
    Route::post('/admin/update-property/{id}','PropertyController@update')->name('updateProperty');

    //delete Property
    Route::get('/admin/delete-property/{id}','PropertyController@delete')->name('deleteProperty');

    //View Property
    Route::get('/admin/view-property','PropertyController@view')->name('viewProperty');

    //Add Location
    Route::get('/admin/add-location','LocationController@show')->name('addLocation');
    Route::post('/admin/add-location/store','LocationController@store')->name('storeLocation');
});
