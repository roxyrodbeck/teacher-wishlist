<?php

use App\Http\Controllers\TeacherController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('teachers.create');
});

Route::get('/create', [TeacherController::class, 'create'])->name('teachers.create');
Route::post('/teachers', [TeacherController::class, 'store'])->name('teachers.store');

Route::get('/teacher/{slug}', [TeacherController::class, 'show'])->name('teachers.show');


