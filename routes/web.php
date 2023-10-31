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
    return redirect(route('home'));
});

Auth::routes(['register' => false]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('users', App\Http\Controllers\UserController::class)->middleware('auth');
Route::get('/list_users', [App\Http\Controllers\UserController::class, 'list_users'])->name('list_users')->middleware('auth');
Route::resource('questions', App\Http\Controllers\QuestionController::class)->middleware('auth');
Route::get('/list_questions', [App\Http\Controllers\QuestionController::class, 'list_questions'])->name('list_questions')->middleware('auth');
Route::get('/get_position/{id}', [App\Http\Controllers\UserController::class, 'get_position'])->middleware('auth');

Route::group(['prefix' => 'ratings', 'as' => 'ratings.'], function (){
    Route::get('/', [App\Http\Controllers\UserController::class, 'ratings_index'])->name('index')->middleware('auth');
    Route::post('/', [App\Http\Controllers\UserController::class, 'ratings_list'])->name('list')->middleware('auth');
    Route::get('/create', [App\Http\Controllers\UserController::class, 'ratings_create'])->name('create')->middleware('auth');
    Route::post('/store', [App\Http\Controllers\UserController::class, 'ratings_store'])->name('store')->middleware('auth');
    Route::get('/delete/{id}', [App\Http\Controllers\UserController::class, 'ratings_delete'])->name('delete')->middleware('auth');
    Route::get('/show/{id}', [App\Http\Controllers\UserController::class, 'ratings_details'])->middleware('auth');
});