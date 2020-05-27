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
Route::get('/', function () {
    return view('welcome');
});
Route::get('tinhtoan', 'CongController@index');
Route::post('tinhtoan', 'CongController@Sum');


Route::get('Tinh dien tich', 'dientichController@index');
Route::post('Tinh dien tich', 'dientichController@kiemtra');
// Route::get('Tinh dien tich',function () {
//     return view('Dientich');
// });

Route::get('xinchao', function () {
    return view('xinchao');
});
Route::get('call-controller', 'DemoController@xinchao');
Route::get('Ketqua/{a}/{b}','CongController@Cong');

Route::get('hello', function () {
    echo "Hello everyone";
});

Route::get('Hoten/{ten}', function ($ten) {
    echo "Hello everyone : ".$ten;
});
//http://localhost/TrangLavarel/Demo/Route1; Định danh cho một Routes
Route::get('Route1',[
'as'=>'MyRoute',
function(){
	echo "Xin chao cac ban";
}]);

Route::group(['prefix'=>'MyGroup'],function(){
	Route::get('User1', function () {
    	echo "User1";
	});	

	Route::get('User2', function () {
    	echo "User2";
	});

	Route::get('User3', function () {
    	echo "User3";
	});
});