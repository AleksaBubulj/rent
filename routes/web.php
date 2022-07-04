<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\rentACarController;
use App\Http\Controllers\categoryController;


Route::get('/',[rentACarController::class,'index']);
Route::post('/saveCarRoute',[rentACarController::class,'saveCar'])->name('saveCar');
Route::get('/deletesaveCar/{id}',[rentACarController::class,'delete']);
Route::get('/updatesaveCar/{id}',[rentACarController::class,'showData']);
Route::post('/updatesaveCar',[rentACarController::class,'updateCar'])->name('updateCar');


Route::get('/',[categoryController::class,'index']);
Route::post('/saveCategoryRoute',[categoryController::class,'saveCategory'])->name('saveCategory');
