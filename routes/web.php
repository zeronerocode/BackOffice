<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\GroupController;

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

Route::resource('user', UserController::class);
Route::resource('group', GroupController::class);

// Route::get('/group',[GroupController::class,'index'])
//     ->name('group');

// Route::get('/group/{group}',[GroupController::class,'edit'])
//     ->name('group.edit');

// Route::post('/group/{group}',[GroupController::class,'update'])
//     ->name('group.update');

// Route::delete('/group/{group}',[GroupController::class,'destroy'])
//     ->name('group.destroy');

require __DIR__.'/auth.php';
