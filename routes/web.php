<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\ExamMarkController;


Route::get('/', function () {
    return view('home');
});


Route::get('/home', function () {
    return view('home');
})->name('home');


Route::get('/student', [StudentController::class, 'index'])->name('student.index');
Route::get('/course', [CourseController::class, 'index'])->name('course.index');
Route::get('/exam', [ExamMarkController::class, 'index'])->name('exam.index');


