<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [PagesController::class, 'index']);
Route::get('/readmore', [PagesController::class, 'readmore']);

Route::get('/contact', [App\Http\Controllers\EmailController::class, 'index']);
Route::post('/sendemail/send', [App\Http\Controllers\EmailController::class, 'send']);