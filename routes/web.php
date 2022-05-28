<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;

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
    return view('index');
});
// Route::post('/login1', function () {
//     return view('LoginPage.login');
// });
Route::get('/homepage', function () {
    return view('HomePage.index');
});
Route::post('', function ($id) {
    
});

Route::post('/LoginPost', [LoginController::class,'login'] );
Route::get('/login', [LoginController::class,'index']);
Route::get('/register', [RegisterController::class,'index']);
Route::post('/RegisterPost', [RegisterController::class,'store'] );
Route::get('/logout', [LoginController::class,'logout']);
Route::group(['middleware' => ['auth']], function () {
    Route::group(['middleware' => ['cek_login:admin']], function () {
        Route::resource('admin', AdminController::class);
    });
    Route::group(['middleware' => ['cek_login:penyewa']], function () {
        Route::resource('penyewa', AdminController::class);
    });
});