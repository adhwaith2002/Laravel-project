<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;

use App\Models\Form;

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
    return view('welcome');
});

Route::get('/form',[FormController::class,'index']);

Route::post('/form', [FormController::class, 'register']);
Route::get('/crud', [FormController::class, 'showall']);
Route::get('/delete/{id}',[FormController::class,'delete']);
Route::get('/update_view/{id}',[FormController::class,'update_view']);
Route::post('/update/{id}',[FormController::class,'update']);






