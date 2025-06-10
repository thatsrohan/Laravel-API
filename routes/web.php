<?php
use app\Http\Controllers\CourseController;
use Illuminate\Support\Facades\Route;

Route::get('/courses',[CourseController::class,'index'])->name('course.index');
Route::get('/course/create',[CourseController::class,'create'])->name('course.create');
Route::post(/'courses',[CourseController::class,'store'])->name('course.store');
//Get the edit page
Route::get('/course/{course}/edit',[CourseController::class,'edit'])->name('course.edit');
Route::put('/course/{course}',[CourseController::class,'update'])->name('course.update');
//Show course details
Route::put('/course/{course}/show',[CourseController::class,'show'])->name('course.edit');
//Delete course
Route::delete('/courses/{course}',[CourseController::class,'destroy'])->name('course.destroy');