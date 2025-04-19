<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });


route::get('/', [UserController::class, 'index'])->name('user.index');
route::post('users-import', [UserController::class, 'import'])->name('user.import');