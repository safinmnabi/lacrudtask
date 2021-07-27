<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\crud;
use App\Http\Controllers\task;

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

Route::match(['get', 'post'], '/', [UserController::class , 'login']);
Route::match(['get', 'post'], '/register', [UserController::class , 'register']);
Route::get('/logout', [UserController::class , 'logout']);


Route::get('/index', [crud::class , 'index']);
Route::match(['get', 'post'], '/create' , [crud::class , 'create']);
Route::get( '/delete/{id}' , [crud::class , 'delete']);
Route::match(['get', 'post'], '/edit/{id}' , [crud::class , 'edit']);

Route::get('/task/{pid}', [task::class , 'index']);
Route::match(['get', 'post'], '/taskcreate/{pid}' , [task::class , 'taskcreate']);
Route::match(['get', 'post'], '/taskedit/{pid}/{id}' , [task::class , 'taskedit']);
Route::get( '/taskdelete/{pid}/{id}' , [task::class , 'taskdelete']);
Route::get( '/detail/{id}' , [task::class , 'detail']);




