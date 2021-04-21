<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\ItemRoleController;

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

Route::get("/", [PagesController::class, "table"])->name('table');
Route::get("/create", [PagesController::class, "create"])->name('create');
Route::get("/create-role", [PagesController::class,"make_role"])->name('make_role');
Route::post("/create", [\App\Http\Controllers\CreateController::class, "item"])->name('create-item');
Route::post("/create-role", [ItemRoleController::class, "roleItem"])->name('item-role');

