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
//課題３「http://XXXXXX.jp/XXX というアクセスが来たときに、 AAAControllerのbbbというAction に渡すRoutingの設定です
Route::group(["prefix"=>"xxx"],function(){
    Route::get('/','AAAController@bbb');
});

Route::get('/', function () {
    return view('welcome');
});


//課題４
Route::group(['prefix' => 'admin'],function(){
     Route::get('plofile/create','Admin/ProfileController@add');
     Route::get('plofile/edit','Admin/ ProfileController@edit');
     
} );