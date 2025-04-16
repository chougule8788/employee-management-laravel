<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});

Route::view('add','add-emp');
//add employee
Route::post('add-table',[UserController::class,'add']);
//list of employees
Route::get('get-data',[UserController::class,'list']);
//delete employee
Route::get('delete/{id}',[UserController::class,'delete']);
//update employee
Route::get('update/{id}',[UserController::class,'update']);

Route::put('update-emp/{id}',[UserController::class,'updateEmp']);

//search employee
Route::get('search',[UserController::class,'search']);
