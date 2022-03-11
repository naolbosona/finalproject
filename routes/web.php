<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
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

Route ::get("/",[HomeController::class,"index"]);
Route ::get("/users",[AdminController::class,"users"]);

Route ::get("/housesell",[AdminController::class,"housesell"]);
Route ::get("/renthouse",[AdminController::class,"renthouse"]);
Route ::get("/deleteuser/{id}",[AdminController::class,"deleteuser"]);
Route ::get("/deletehousesell/{id}",[AdminController::class,"deletehousesell"]);

Route ::get("/updatehousesell/{id}",[AdminController::class,"updatehousesell"]);
Route ::get("/updaterenthouse/{id}",[AdminController::class,"updaterenthouse"]);
Route ::get("/housesell",[AdminController::class,"housesell"]);
Route ::get("/redirects",[HomeController::class,"redirects"]);
Route ::post("/uploadsellhouse",[AdminController::class,"uploadsellhouse"]);
Route ::post("/comment",[AdminController::class,"comment"]);
Route ::get("/viewcomment",[AdminController::class,"viewcomment"]);


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
