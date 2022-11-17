<?php

use App\Http\Controllers\VideoController;
use App\Models\Video;
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
    return view('home');
});

Route::get('/videos',[VideoController::class, 'index']);
Route::post('/videos',[VideoController::class,'store']);
Route::get('/videos/{video}',[VideoController::class, 'view']);
Route::get('/videos/edit/{video}',[VideoController::class,'edit']);
Route::put('/videos/{video}',[VideoController::class, 'update']);
Route::delete('/videos/{video}', [VideoController::class, 'destroy']);
Route::get('/videos/confirm-delete/{video}',[VideoController::class, 'delete']);

