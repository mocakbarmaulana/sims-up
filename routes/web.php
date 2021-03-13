<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Admin Route
// Route::get('/skill', [App\Http\Controllers\Admin\SkillController::class, 'index'])->name('admin.skill');

Route::group(['prefix' => 'administrator', 'middleware' => 'auth'], function(){
    Route::resource('skill', 'App\Http\Controllers\Admin\SkillController');
    Route::resource('teacher', 'App\Http\Controllers\Admin\TeacherController');
});


// Expert Route Login
Route::group(['prefix' => 'expert', 'namespace' => 'expert'], function(){
    Route::get('/login', [App\Http\Controllers\Expert\LoginExpertController::class, 'index'])->name('expert.login');
    Route::post('/login', [App\Http\Controllers\Expert\LoginExpertController::class, 'authenticate'])->name('expert.login_proses');
});

// Expert Route
Route::group(['prefix' => 'expert', 'middleware' => 'expert'], function(){
    Route::get('/class', [App\Http\Controllers\Expert\ClassController::class, 'index'])->name('expert.class');
    Route::get('/class/create', [App\Http\Controllers\Expert\ClassController::class, 'create'])->name('expert.class.create');
    Route::get('/class/edit/{id}', [App\Http\Controllers\Expert\ClassController::class, 'edit'])->name('expert.class.edit');
    Route::put('/class/update/{id}', [App\Http\Controllers\Expert\ClassController::class, 'update'])->name('expert.class.update');
    Route::delete('/class/delete/{id}', [App\Http\Controllers\Expert\ClassController::class, 'destroy'])->name('expert.class.delete');
    Route::post('/class/store', [App\Http\Controllers\Expert\ClassController::class, 'store'])->name('expert.class.store');

    Route::get('/logout', [App\Http\Controllers\Expert\LoginExpertController::class, 'logout'])->name('expert.logout');
});

// Logout
Route::get('logout', function(){
    Auth::logout();
    return redirect('/');
})->name('logoutAll');