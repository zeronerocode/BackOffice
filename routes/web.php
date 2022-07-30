<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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

// Route::get('/user', [UserController::class, 'index'])
// ->name('user');

// Route::get('/user/create', [UserController::class, 'create'])
// ->name('createuser');

// Route::post('createuser', [UserController::class, 'store']);

// Route::get('/user/{user}/edit',[UserController::class,'edit'])
// ->name('edituser');

// Route::post('edituser',[UserController::class,'update']);


require __DIR__.'/auth.php';
