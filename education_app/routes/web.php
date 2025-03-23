<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CollegeController;
use App\Http\Controllers\StudentController;

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

// College routes
Route::resource('colleges', CollegeController::class)->only([
    'index', 'create', 'edit', 'store', 'update', 'destroy'
]);

// Student routes
Route::resource('students', StudentController::class)->only([
    'index', 'create', 'edit', 'store', 'update', 'destroy'
]);