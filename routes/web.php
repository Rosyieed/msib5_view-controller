<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KampusController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\ProfileController;

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
    return redirect('landing');
});

route::get('/landing', [LandingController::class, 'index'])->name('landing');
route::get('/profile', [ProfileController::class, 'index'])->name('profile');
route::get('/kampus', [KampusController::class, 'index', ])->name('kampus');
