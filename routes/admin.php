<?php

use App\Http\Controllers\Pages\Admin\AdminController;
use App\Http\Controllers\Pages\Users\UserController;
use Illuminate\Support\Facades\Route;

Route::get('', [AdminController::class, 'index'])->name('admin.index');
