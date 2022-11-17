<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;
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





Route::get('/',[FormController::class,'home']);

// Route::get('countries',[FormController::class,'countries']);


        Route::get('ectn-{name}',[FormController::class,'country'])->name('ectn.country');





Route::post('submit-form',[FormController::class,'submit_form']);

Route::get('definition',[FormController::class,'definition']);

Route::get('contact',[FormController::class,'contact']);

Route::get('about',[FormController::class,'about']);

Route::get('container-booking',[FormController::class,'container_booking']);

Route::get('ectnbooking',[FormController::class,'ectn_booking']);