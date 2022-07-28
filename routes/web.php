<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DatabaseController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;


Route::get('/', function(){
    return view('welcome');
});

//crud
Route::get('/member', [DatabaseController::class, 'member']);

Route::get('/database-1', [DatabaseController::class, 'database_1']);
Route::get('/database-2', [DatabaseController::class, 'database_2']);
Route::get('/database-3', [DatabaseController::class, 'database_3']);
Route::get('/database-4', [DatabaseController::class, 'database_4']);
Route::get('/database-5', [DatabaseController::class, 'database_5']);
Route::get('/database-6', [DatabaseController::class, 'database_6']);
Route::get('/database-7', [DatabaseController::class, 'database_7']);
Route::get('/database-8', [DatabaseController::class, 'database_8']);

Route::get('/database/tambah-data', [DatabaseController::class, 'add']);
Route::post('/database/store', [DatabaseController::class, 'store']);
Route::get('/database/edit-data/{id}', [DatabaseController::class, 'edit']);
Route::post('/database/update', [DatabaseController::class, 'update']);
Route::get('/database/hapus-data/{id}', [DatabaseController::class, 'delete']);

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
