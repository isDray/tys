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

/*
Route::get('/', function () {
    return view('welcome');
});
*/

// 首頁路由
Route::get('/', 'WebController@index')->name('web');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


/*
 * 後台區塊route
 * -----------------------------------------------------------------------
 *
 */

Route::get('/manager_blog', function () {
    
  echo '成功進入';
})->middleware('auth');
