<?php

use App\Http\Controllers\ToDoController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [ToDoController::class, 'index']);
Route::post('/', [ToDoController::class, 'store']);
Route::patch('/{todo}', [ToDoController::class, 'update']);
Route::delete('/{todo}', [ToDoController::class, 'destroy']);
