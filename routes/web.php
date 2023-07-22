<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\CourseController;

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

Route::get('/', [AboutController::class,'welcome']);
Route::get('/about', [AboutController::class,'about']);
Route::get('/news/{newsid}', [NewsController::class, 'news']);




Route::get('department/create', [DepartmentController::class, 'create']);
Route::post('department/store', [DepartmentController::class, 'store']);
Route::get('department/all', [DepartmentController::class, 'all']);
Route::get('department/edit/{id}', [DepartmentController::class, 'edit']);
Route::post('department/update/{id}', [DepartmentController::class, 'update']);
Route::get('department/delete/{id}', [DepartmentController::class, 'delete']);



Route::get('employee/create', [EmployeeController::class, 'create']);
Route::post('employee/store', [EmployeeController::class, 'store']);
Route::get('employee/all',[EmployeeController::class, 'all']);
Route::get('employee/edit/{id}',[EmployeeController::class, 'edit']);
Route::get('employee/update/{id}',[EmployeeController::class, 'update']);


Route::get('course/create', [CourseController::class, 'create']);
Route::post('course/store', [CourseController::class, 'store']);
Route::get('course/all', [CourseController::class, 'all']);
Route::get('course/edit/{id}', [CourseController::class, 'edit']);
Route::post('course/update/{id}', [CourseController::class, 'update']);
Route::get('course/delete/{id}', [CourseController::class, 'delete']);


