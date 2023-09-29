<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\Http\Controllers\LoginController;

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

Route::prefix('auth')->group(function () {
    Route::get('login', [LoginController::class, 'index'])->middleware(['guest'])->name('auth.index');
    Route::post('login', [LoginController::class, 'login'])->middleware(['guest'])->name('auth.login');
    Route::get('logout', [LoginController::class, 'logout'])->middleware(['auth'])->name('auth.logout');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/private', function () {
        return 'private';
    })->name('private');
});

Route::get('/create_admin', function () {
    User::create([
        'username' => 'admin',
        'password' => 'password',
    ]);
});