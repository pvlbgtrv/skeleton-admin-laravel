<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserController;

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
    return view('skeleton');
})->middleware(['auth'])->name('dashboard');

Route::group(['prefix' => 'auth'], function () {
    Route::get('login', [LoginController::class, 'index'])->middleware(['guest'])->name('auth.index');
    Route::post('login', [LoginController::class, 'login'])->middleware(['guest'])->name('auth.login');
    Route::get('logout', [LoginController::class, 'logout'])->middleware(['auth'])->name('auth.logout');
});

Route::group(['prefix' => 'users', 'middleware' => 'auth'], function () {
    Route::get('/create', [UserController::class, 'create'])->name('users.create');
    Route::get('/branch_admins', [UserController::class, 'branch_admins'])->name('users.branch_admins');
});

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function () {
    Route::get('/private', function () {
        dd(auth()->user());
        return 'private';
    })->name('private');
});

Route::get('/create_admin', function () {
    User::create([
        'username' => 'admin',
        'password' => 'password',
    ]);
});