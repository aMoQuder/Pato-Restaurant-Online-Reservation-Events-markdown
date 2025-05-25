<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});



//--------------------------- Food Api  route ------------------------------'
Route::get('/AllFoods', 'API\FoodController@index');
Route::post('/StoreFood', 'API\FoodController@Store');
Route::get('/ShowFood/id={id}', 'API\FoodController@show');
Route::put('/updateFood/id={id}', 'API\FoodController@update');
Route::get('/deleteFood/id={id}', 'API\FoodController@delete');

//-------------------------------------------------------------------

//--------------------------- TypeFood Api  route ------------------------------'
Route::get('/AllTypeFoods', 'API\TypeFoodsController@index');
Route::post('/StoreTypeFood', 'API\TypeFoodsController@Store');
Route::get('/ShowTypeFood/id={id}', 'API\TypeFoodsController@show');
Route::put('/updateTypeFood/id={id}', 'API\TypeFoodsController@update');
Route::delete('/deleteTypeFood/id={id}', 'API\TypeFoodsController@delete');
//--------------------------- TypeFood Api  route ------------------------------

//--------------------------- Blog Api  route ------------------------------'
Route::get('/AllBlogs', 'API\BlogController@index');
Route::post('/StoreBlog', 'API\BlogController@Store');
Route::get('/ShowBlog/id={id}', 'API\BlogController@show');
Route::put('/updateBlog/id={id}', 'API\BlogController@update');
Route::get('/deleteBlog/id={id}', 'API\BlogController@delete');
//--------------------------- Blog Api  route ------------------------------

//--------------------------- Event Api  route ------------------------------'
Route::get('/AllEvents', 'API\EventController@index');
Route::post('/StoreEvent', 'API\EventController@Store');
Route::get('/ShowEvent/id={id}', 'API\EventController@show');
Route::put('/updateEvent/id={id}', 'API\EventController@update');
Route::get('/deleteEvent/id={id}', 'API\EventController@delete');
//--------------------------- Event Api  route ------------------------------

//--------------------------- Contact Api  route ------------------------------'
Route::get('/AllContacts', 'API\ContactController@index');
Route::post('/StoreContact', 'API\ContactController@Store');
Route::get('/ShowContact/id={id}', 'API\ContactController@show');
Route::put('/updateContact/id={id}', 'API\ContactController@update');
Route::get('/deleteContact/id={id}', 'API\ContactController@delete');
//--------------------------- Contact Api  route ------------------------------

//--------------------------- User Api  route ------------------------------'
Route::get('/AllUsers', 'API\UsersController@index');
Route::post('/StoreUser', 'API\UsersController@Store');
Route::get('/ShowUser/id={id}', 'API\UsersController@show');
Route::put('/updateUser/id={id}', 'API\UsersController@update');
Route::get('/deleteUser/id={id}', 'API\UsersController@delete');
//--------------------------- User Api  route ------------------------------



//--------------------------- Booking Api  route ------------------------------'
Route::get('/AllBookings', 'API\BookingController@index');
Route::get('/ShowBooking/id={id}', 'API\BookingController@show');
Route::post('/StoreBooking', 'API\BookingController@booking');
Route::get('/SentBooking/id={id}', 'API\BookingController@sent');
Route::get('/deleteBooking/id={id}', 'API\BookingController@delete');
//--------------------------- Booking Api  route ------------------------------

