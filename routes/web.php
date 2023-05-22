<?php

use App\Http\Controllers\AssignmentController;
use Illuminate\Support\Facades\Route;

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



// Assignment_14_Route/ Question 01
Route::post('/userName', [AssignmentController::class, 'userName']);



// Assignment_14_Route/ Question 02
Route::post('/userAgent', [AssignmentController::class, 'userAgent']);


// Assignment_14_Route/ Question 03
Route::get('/pageQuery', [AssignmentController::class, 'pageQuery']);


// Assignment_14_Route/ Question 04
Route::get('/jsonReturn', [AssignmentController::class, 'jsonReturn']);


// Assignment_14_Route/ Question 05
Route::post('/fileUpload', [AssignmentController::class, 'fileUpload']);


// Assignment_14_Route/ Question 06
Route::post('/remToken', [AssignmentController::class, 'remToken']);


// Assignment_14_Route/ Question 07
Route::post('/submit', [AssignmentController::class, 'submit']);
