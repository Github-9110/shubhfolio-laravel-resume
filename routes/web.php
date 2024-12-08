<?php
use App\Http\Controllers\Admin;
use App\Http\Controllers\Login;
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
    return view('app');
});

/* ========= admin ============== */
Route::get('/admin', [Admin::class, 'index']);
Route::get('/login', [Admin::class, 'create']);
Route::post('/saveData', [Login::class, 'store']);