<?php

use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/all/student',[StudentController::class,'loadStudents']);

Route::get('/export/students',[StudentController::class,'exportStudent']);
Route::get('/go/import',[StudentController::class,'loadImportForm']);
Route::post('/import/students',[StudentController::class,'ImportStudent'])->name('ImportStudent');
