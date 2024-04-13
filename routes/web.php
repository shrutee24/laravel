<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\crud;
use App\Http\Controllers\emailController;
use App\Http\Controllers\SubscribeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/index', [crud::class, 'index']);

Route::post('/create', [crud::class, 'create']);
Route::post('/update/{id}', [crud::class, 'update']);
Route::get('/show', [crud::class, 'show']);
Route::get('/new', [crud::class, 'new']);
Route::get('/edit/{id}', [crud::class, 'edit']);
Route::delete('/delete/{id}', [crud::class, 'delete']);





//gmail sending
Route::get('/sendEmail', [emailController::class, 'index']);


//events

Route::get('/subscribed', [SubscribeController::class, 'subscribed']);
Route::get('/getEmail', [SubscribeController::class, 'getEmail']);


