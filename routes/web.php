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
    return view('pages.index');
});
// Route::get('/admin/dashboard', function () {
//     return view('pages.dashboard');
// });
// Route::get('/admin/main', function () {
//     return view('pages.main');
// });


// Route::get('/home', 'PagesController@index')->name('home');
Route::get('/admin/dashboard', 'PagesController@dashboard')->name('admin.dashboard');
Route::get('/admin/main', 'MainPagesController@index')->name('admin.main');
Route::put('/admin/main', 'MainPagesController@update')->name('admin.main.update');





Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
