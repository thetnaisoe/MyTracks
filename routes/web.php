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

Route::get('/', function () {
    $noProjects = 46;
    return view('main', [
        'numberOfProjects' => $noProjects,
    ]); // it will look for main.blade.php file in resources/views folder
});

Route::get('/projects', [ProjectController::class, 'list']);

Route::get('/create', [ProjectController::class, 'create']);
