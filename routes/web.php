<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\TaskController;



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

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard',[DashboardController::class,'index'])->name('dashboard');
    Route::get('/add-task',[TaskController::class,'addTask'])->name('add.task');
    Route::get('/manage-task',[TaskController::class,'manageTask'])->name('manage.task');
    Route::post('/new-task',[TaskController::class,'saveTask'])->name('new.task');
    Route::get('/edit-task/{id}',[TaskController::class,'taskEdit'])->name('edit.task');
    Route::post('/delete-task',[TaskController::class,'taskDelete'])->name('delete.task');
    Route::post('/update-task',[TaskController::class,'taskUpdate'])->name('update.task');


});
