<?php

use Illuminate\Support\Facades\Route;

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
/////////////////////////tên group///////tên trong route//////
Route::group(['prefix'=> 'admin','as' => 'admin.'],function(){
    Route::get('/', 'AdminController@index')->name('quantri');
///////GET-POST: URL - ACTION//////

    Route::resource('category', 'CategoriesController');
    Route::resource('news','NewsController');
    Route::resource('trademark', 'TrademarkController');
    Route::resource('introduce', 'IntroduceController');
    Route::resource('user', 'UserAdminController');
    Route::resource('artist', 'ArtistController');

    Route::resource('mass', 'MassController');
    Route::resource('contentBanner', 'ContentBannerController');
    Route::resource('product', 'ProductController');
    Route::post('/user/{id}', 'UserAdminController@update');
    //Route::get('/contact/{id?}', 'ContactController@index')->name('contact.index');
    Route::get('/contact/home/{id?}', 'ContactController@home')->name('contact.home');
    Route::resource('contact', 'ContactController');
    //Route::post('admin/user/{id}','AController@sanphamdel');
///  resource: name - controller  ///
//Route::get('/', function () {

});
Route::group(['prefix'=> '','as' => ''],function(){
    Route::get('/', 'FrontendController@index')->name('web');
    Route::get('news/{id?}', 'FrontendController@news')->name('news');
    //Route::get('news/{id}', 'FrontendController@showNews')->name('showNews');
    Route::get('contact', 'FrontendController@contact')->name('contact');
    Route::get('product', 'FrontendController@product')->name('product');
    Route::get('introduce', 'FrontendController@introduce')->name('introduce');
    Route::get('detailproduct/{id}', 'FrontendController@detailproduct')->name('detailproduct');
///////GET-POST: URL - ACTION//////
    Route::get('demo', 'FrontendController@demo')->name('demo');
    //Route::resource('category', 'CategoriesController');
});
