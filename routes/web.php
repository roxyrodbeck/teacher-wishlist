<?php

use App\Http\Controllers\TeacherController;
use App\Models\Teacher;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('teachers.create');
})->name('teachers.create');

Route::post('teachers/store', [TeacherController::class, 'store'])->name('teachers.store');

Route::get('teacher/{slug}', [TeacherController::class, 'show'])->name('teachers.show');

Route::get('teachers/{teacher}/success', function (Teacher $teacher) {
    return view('teachers.success', compact('teacher'));
})->name('teachers.success');

Route::fallback(fn() => abort(404));
