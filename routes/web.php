<?php

use App\Http\Controllers\AlbumController;
use App\Http\Controllers\ShiftController;
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
    return view('welcome', [
        "title" => "GD | Welcome Page"
    ]);
});

Route::get('/login', function () {
    return view('auth.login');
});

Route::middleware('guest')->group(function () {

    Route::get('/login', function () {
        return view('auth.login', [
            "title" => "GD | Login"
        ]);
    })->name("login.display");


    Route::get('/register', function () {
        return view('auth.register', [
            "title" => "GD | Registration"
        ]);
    })->name("register.display");
});


Route::middleware('auth')->group(function()
{
    Route::get('/home/album', [AlbumController::class, 'show'])->name("album.display");
    Route::get('/admin/home', [AlbumController::class, 'show'])->name("album.display");
    Route::get("/home", [ShiftController::class, "index"])->name("home.display");
});