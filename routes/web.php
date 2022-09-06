<?php

use App\Http\Controllers\ProfileController;
use GuzzleHttp\Middleware;
use Illuminate\Routing\RouteGroup;
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

Route::get('/thankyou', function () {
    return view('thankyou');
});

Route::group(['middleware' => 'auth'], function () {
    Route::get('/users/dashboard', function () {
        return view('users.dashboard');
    })->name('dashboard');

    // Profile routes  
    Route::get('/profile', [ProfileController::class, 'index'])->name('profile.index');
    Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::put('/profile/update', [ProfileController::class, 'update'])->name('profile.update');


    // password update routes
    Route::get('/security', function () {
        return view('users.security');
    })->name('security');

    Route::put('/security', [ProfileController::class, 'security'])->name('profile.security');

    //Delete my profile
    Route::delete('/profile/delete', [ProfileController::class, 'delete'])->name('profile.destroy');
});



require __DIR__ . '/auth.php';
