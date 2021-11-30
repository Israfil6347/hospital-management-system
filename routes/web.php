<?php

use Illuminate\Support\Facades\Route;

use App\Http\controllers\HomeController;

use App\Http\controllers\AdminController;

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
Route::get('/about',[HomeController::class,'about']);

Route::get('/doctor',[HomeController::class,'doctor']);

Route::get('/add_news',[HomeController::class,'newsadd']);


Route::get('/news',[HomeController::class,'news']);

Route::get('/contact',[HomeController::class,'contact']);

Route::get('/',[HomeController::class,'index']);

Route::get('/home',[HomeController::class,'redirect']);

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::post('/app',[HomeController::class,'upload']);

Route::get('/appoi',[HomeController::class,'app_cancel']);

Route::get('/cancel_appo/{id}',[HomeController::class,'cancel_appo']);

Route::post('/massage',[HomeController::class,'massage']);





Route::get('/add_doctors_view',[AdminController::class,'addview']);

Route::post('/upload_doctor',[AdminController::class,'upload']);

Route::get('/add_dis_appoi',[AdminController::class,'display_app']);

Route::get('/approved/{id}',[AdminController::class,'approved']);

Route::get('/cancel/{id}',[AdminController::class,'cancel']);

Route::get('/alldoctor',[AdminController::class,'alldoctor']);

Route::get('/update_doc/{id}',[AdminController::class,'update']);

Route::get('/delete_doc/{id}',[AdminController::class,'delete']);

Route::post('/editdoctor/{id}',[AdminController::class,'editdoctor']);

Route::get('/show_massage',[AdminController::class,'massage']);

Route::get('/newsall',[AdminController::class,'newsall']);

Route::get('/add_news',[AdminController::class,'addnews_2']);

Route::post('/newsadd',[AdminController::class,'newsadd']);














