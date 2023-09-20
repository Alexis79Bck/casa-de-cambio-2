<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\Pages\Users\UserController;
use Illuminate\Support\Facades\Route;

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
    return redirect('login');
});

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home'); 


/**
 * Users Routes
 */

Route::get('', [UserController::class, 'index'])->name('user.index');
Route::get('/new-user', [UserController::class, 'create'])->name('user.create');
Route::post('/new-user', [UserController::class, 'store'])->name('user.store');
Route::get('/user/{id}', [UserController::class, 'show'])->name('user.show');
Route::patch('/user/{id}', [UserController::class, 'update'])->name('user.update');
Route::delete('/user/{id}', [UserController::class, 'destroy'])->name('user.delete');
// Route::get('/home', function() {
//     return view('home');
// })->name('home')->middleware('auth');
