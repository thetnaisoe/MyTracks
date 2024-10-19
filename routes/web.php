<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController; // add this line to import the ProjectController class **important**

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

Route::get('/', [ProjectController::class, 'show']);

Route::get('/projects', [ProjectController::class, 'list']);

Route::get('/projects/create', [ProjectController::class, 'create']); // getting data from database
Route::post('/projects/create', [ProjectController::class, 'store']); // sending data to database

Route::get('/projects/{id}', [ProjectController::class, 'detail']);

//be sure not to write like this {$id}
Route::get('/projects/{id}/edit', [ProjectController::class, 'edit']); // getting data from database
Route::post('/projects/{id}/edit', [ProjectController::class, 'update']); // sending data to database

Route::post('/projects/{id}/delete', [ProjectController::class, 'delete']); // getting data from database

