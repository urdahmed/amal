<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::name('courses.')->prefix('courses')->group(function () {
    Route::get('/{id}', [App\Http\Controllers\CourseController::class, 'show'])->where('id', '[0-9]+')->name('show');
    Route::get('/{phase?}/{level?}', [App\Http\Controllers\CourseController::class, 'index'])->name('index');
});
Route::name('trainings.')->prefix('trainings')->group(function () {
    Route::get('/{id}', [App\Http\Controllers\TrainingController::class, 'show'])->where('id', '[0-9]+')->name('show');
    Route::get('/{phase?}/{level?}', [App\Http\Controllers\TrainingController::class, 'index'])->name('index');
});
Route::name('teachers.')->prefix('teachers')->group(function () {
    Route::get('/', [App\Http\Controllers\TeacherController::class, 'index'])->name('index');
    Route::get('/{id}/courses', [App\Http\Controllers\TeacherController::class, 'courses'])->where('id', '[0-9]+')->name('courses');
    Route::get('/{id}/downloads', [App\Http\Controllers\TeacherController::class, 'downloads'])->where('id', '[0-9]+')->name('downloads');
});

Route::middleware('guest')->group(function () {
    //  User
    Route::name('user.')->prefix('user')->group(function () {
        Route::get('login', [App\Http\Controllers\Auth\LoginController::class, 'showLoginForm'])->name('login');
        Route::post('login', [App\Http\Controllers\Auth\LoginController::class, 'login']);
    });
});

Route::middleware('auth')->group(function () {
    //  User
    Route::name('user.')->prefix('user')->group(function () {
        Route::post('logout', [App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('logout');
    });
});


//Auth::routes();




Route::any('{any}', [App\Http\Controllers\Controller::class, 'error'])->where('any', '.*');
