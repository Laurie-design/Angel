<?php

use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


//Students
Route::get('/students/create',[StudentController::class, 'create'])->name('students.create');

Route::get('/students/show/{id}',[StudentController::class, 'show'])->name('students.show');

Route::post('/students',[StudentController::class, 'store'])->name('students.store');

Route::get('/students/list',[StudentController::class, 'indexStudent'])->name('students.list');

Route::get('/students/edit/{id}',[StudentController::class, 'edit'])->name('students.edit');

Route::put('/students/update/{id}',[StudentController::class, 'update'])->name('students.update');

Route::delete('/students/destroy/{id}',[StudentController::class, 'destroy'])->name('students.destroy');

Route::get('/index',[StudentController::class, 'index'])->name('students.index');
