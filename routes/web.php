<?php

use Illuminate\Routing\RouteAction;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Symfony\Component\Routing\Annotation\Route as AnnotationRoute;

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

Route::get('/', 'WelcomeController@index')->name('welcome');

Auth::routes();
Route::group(['middleware' => 'auth'], function () {

    Route::post('/contactSave', 'ContactController@save')->name('contactSave');
    Route::post('/bookSave', 'BookTableController@store')->name('bookSave');
    Route::get('/contact', 'ContactController@index')->name('contact');
    Route::get('/about', 'AboutController@index')->name('about');
    Route::get('/blogindex', 'BlogController@index')->name('blog');
    Route::get('/menue', 'FoodController@index')->name('menue');
    Route::get('/reservation', 'BookTableController@index')->name('reservation');
});




Route::group(['middleware' => 'CheckAdmin'], function () {

    Route::get('/home', 'HomeController@index')->name('home');

    // -----------------------------Book Table Card operation-----------------------------
    Route::get('/allBook', 'BookTableController@all')->name('allBook');
    Route::get('/deletBook{id}', 'BookTableController@delet')->name('deletBook');
    Route::get('/showBook{id}','BookTableController@show')->name('showBook');
    Route::get('/lookingBook{id}','BookTableController@looking')->name('lookingBook');
    // -----------------------------BookTable Card operation-----------------------------

    // -----------------------------Contact Card operation-----------------------------
    Route::get('/allbook', 'BookTableController@all')->name('allbook');
    Route::get('/allcontact', 'ContactController@all')->name('allcontact');
    Route::get('/deletContact{id}', 'ContactController@delete')->name('deletContact');
    Route::get('/showContact{id}', 'ContactController@show')->name('showContact');
    // -----------------------------Contact Card operation-----------------------------

    // -----------------------------food Card operation-----------------------------
    Route::get('/createfood', 'FoodController@create')->name('createfood');
    Route::get('/showfood{id}', 'FoodController@show')->name('showfood');
    Route::get('/allfood', 'FoodController@all')->name('allfood');
    Route::get('/deletfood{id}', 'FoodController@delete')->name('deletfood');
    Route::post('/foodStore', 'FoodController@store')->name('foodStore');
    Route::post('/savefood', 'FoodController@save')->name('savefood');
    Route::get('/updatefood{id}', 'FoodController@edit')->name('updatefood');
    // -----------------------------food Card operation-----------------------------

    //  ------------------- Start Events opretion ----------------------
    Route::get('EventsCreate', "EventController@create")->name('events.create');
    Route::post('EventsStore', "EventController@store")->name('events.store');
    Route::get('EventsDelete{id}', "EventController@delete")->name('eventsDelete');
    Route::get('EventsEdit{id}', "EventController@edit")->name('eventsEdit');
    Route::get('EventsShow{id}', "EventController@show")->name('eventsShow');
    Route::get('Events', "EventController@all")->name('Eventall');
    Route::post('EventsSave', "EventController@save")->name('events.save');
    //  ------------------- End Events opretion ----------------------

    // -----------------------------users Card operation-----------------------------
    Route::post('/saveUser', 'UserController@save')->name('saveUser');
    Route::get('/createUser', 'UserController@create')->name('createUser');
    Route::get('/editUser{id}', 'UserController@edit')->name('editUser');
    Route::get('/showUser{id}', 'UserController@show')->name('showUser');
    Route::get('/deletuser{id}', 'UserController@deletuser')->name('deletuser');
    Route::get('/allUser', 'UserController@index')->name('allUser');
    Route::post('/storeUser', 'StoreUserController@store')->name('storeUser');
    // -----------------------------users Card operation-----------------------------

    // -----------------------------blog Card operation-----------------------------
    Route::get('/createblog', 'BlogController@create')->name('createblog');
    Route::get('/showblog{id}', 'BlogController@show')->name('showblog');
    Route::get('/allblog', 'BlogController@all')->name('allblog');
    Route::get('/deletblog{id}', 'BlogController@delete')->name('deletblog');
    Route::post('/storeblog', 'BlogController@store')->name('storeblog');
    Route::post('/saveblog', 'BlogController@save')->name('saveblog');
    Route::get('/updateblog{id}', 'BlogController@edit')->name('updateblog');
    // -----------------------------blog Card operation-----------------------------
});



