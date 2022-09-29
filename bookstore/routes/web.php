<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\CopyController;
use App\Http\Controllers\UserController;
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

//GET  /api/copies
Route::get('/api/copies', [CopyController::class, 'index']);
//GET -1 /api/task/1
Route::get('/api/copies/{id}', [CopyController::class, 'show']);
//POST    /api/task/1
Route::post('/api/copies/', [CopyController::class, 'store']);
Route::put('/api/copies/{id}', [CopyController::class, 'update']);
Route::delete('/api/copies/{id}', [CopyController::class, 'destroy']);

/* VIEW – ahol megjeleníthetem az adatokat */
/* copies listázása      */
Route::get('/copy/new', [CopyController::class, 'newView']);
/* Task módosítása      /task/edit/1 */
Route::get('/copy/edit/{id}', [CopyController::class, 'editView']);
/* Új Task létrehozása      /task/create */
Route::get('/copy/list', [CopyController::class, 'listView']);

//Book routes
Route::get('/api/books', [BookController::class, 'index']);
Route::get('/api/books/{id}', [BookController::class, 'show']);
Route::post('/api/books/', [BookController::class, 'store']);
Route::put('/api/books/{id}', [BookController::class, 'update']);
Route::delete('/api/books/{id}', [BookController::class, 'destroy']);
Route::get('/book/new', [BookController::class, 'newView']);
Route::get('/book/edit/{id}', [BookController::class, 'editView']);
Route::get('/book/list', [BookController::class, 'listView']);


//User routes
Route::get('/api/users', [UserController::class, 'index']);
Route::get('/api/users/{id}', [UserController::class, 'show']);
Route::post('/api/users/', [UserController::class, 'store']);
Route::put('/api/users/{id}', [UserController::class, 'update']);
Route::delete('/api/users/{id}', [UserController::class, 'destroy']);
Route::get('/user/new', [UserController::class, 'newView']);
Route::get('/user/edit/{id}', [UserController::class, 'editView']);
Route::get('/user/list', [UserController::class, 'listView']);

