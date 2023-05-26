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
Route::get('/login',[FormController::class,'login_page']);
Route::post('/login',[FormController::class,'login']);
Route::get('/dashboard',[FormController::class,'dashboard']);
Route::get('/admindashboard',[FormController::class,'admindashboard']);
Route::post('/admindashboard',[FormController::class,'product']);
Route::get('/userdelete/{id}',[FormController::class,'userdelete']);
Route::get('/useredit/{id}',[FormController::class,'useredit']);
Route::post('/edit/{id}',[FormController::class,'edit']);
Route::get('/adminlogin',[FormController::class,'adminlogin_page']);
Route::post('/adminlogin',[FormController::class,'adminlogin']);




