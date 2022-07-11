<?php

use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;


// Route::get('/','TaskController@index');
Route::get('/',[TaskController::class,'index']);
Route::post('/task/create',[TaskController::class,'store'])->name('task.create');
Route::delete('/task/delete/{task}',[TaskController::class,'destroy'])->name('task.destroy');


