<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AlbumController;
use App\Http\Controllers\FotoController;
use App\Http\Controllers\ShiftController;
use App\Models\Foto;
use Illuminate\Support\Facades\Route;
use PhpParser\Node\Expr\AssignOp\ShiftLeft;

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




Route::middleware('guest')->group(function () {

Route::get('/', function () {
    return view('welcome', [
        "title" => "GD | Welcome Page"
    ]);
});
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
    Route::get('/home/album', [AlbumController::class, 'index'])->name("user.album");
    Route::get('/admin/home', [AdminController::class, 'index'])->name("admin.home");
    Route::get("/home", [FotoController::class, "index"])->name("user.home");

    Route::get('/admin/album', [AdminController::class, "displayAlbum"])->name("admin.album");
});

Route::post('user.register', [ShiftController::class, "store"])->name("user.register");

Route::post('foto.create', [FotoController::class, "store"])->name("foto.create");

Route::post('album.create', [AlbumController::class, "store"])->name("album.create");

Route::post('logout', [ShiftController::class, 'logout'])->name('logout');

Route::post('user.login', [ShiftController::class, "login"])->name('user.login');