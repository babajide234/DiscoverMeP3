<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagentsController;
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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

// Route::get('/contestants', function () {
//     $pagents = [PagentsController::class , 'index'];
//     return view('contestants',['pagents' => $pagents]);
// })->middleware(['auth'])->name('contestants');

Route::get('/pagents/register', 'App\Http\Controllers\PagentsController@register');
Route::post('/pagents/register', 'App\Http\Controllers\PagentsController@registerPagents')->name('pagents.registerPagents');
Route::get('/pagents/pay', 'App\Http\Controllers\PagentsController@pay');
Route::post('/pagents/pay', 'App\Http\Controllers\PagentsController@paySubmit')->name('pagents.paySubmit');
Route::get('/pagents/vote/{id}', 'App\Http\Controllers\PagentsController@vote')->name('pagents.vote');
Route::post('/pagents/vote', 'App\Http\Controllers\PagentsController@votePost')->name('pagents.vote');

// Route::get('/pagents', 'App\Http\Controllers\PagentsController@index' );

Route::resource('pagents', PagentsController::class)->middleware(['auth'])->name('*','pagents');

// Route::group(['middleware'=>['auth']], function () {
// });

require __DIR__.'/auth.php';
