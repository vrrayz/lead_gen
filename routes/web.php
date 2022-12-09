<?php

use App\Http\Controllers\LeadController;
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
Route::get('/lead',[LeadController::class,'index']);
Route::get('/register',[LeadController::class,'register']);
Route::post('/register',[LeadController::class,'storeAccount']);
Route::get('/users',[LeadController::class,'viewAccounts']);
