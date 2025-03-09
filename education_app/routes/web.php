<?php

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

//College routes
Route::get('/colleges', [CollegeController::class, 'index'])->name('colleges.index'); //display all colleges
Route::get('/colleges/create', [CollegeController::class, 'create'])->name('colleges.create'); //display form to create a new college
Route::get('/colleges/{id}/edit', [CollegeController::class, 'edit'])->name('colleges.edit'); //display form to edit a college

//Student routes
Route::get('/students', [StudentController::class, 'index'])->name('students.index'); //display all students
Route::get('/students/create', [StudentController::class, 'create'])->name('students.create'); //display form to create a new student
Route::get('/students/{id}/edit', [StudentController::class, 'edit'])->name('students.edit'); //display form to edit a student
Route::delete('/students/{id}', [StudentController::class, 'destroy'])->name('students.destroy'); //delete a student

