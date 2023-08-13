<?php

use App\Http\Controllers\CategorieController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get("/listcategory",[CategorieController::class,"index"]);
Route::post("/addcategory",[CategorieController::class,"store"]);
Route::put("/updatecategory/{id}",[CategorieController::class,"update"]);
Route::delete("/supprimer",[CategorieController::class,"supprimer"]);
Route::get("/searchCategory",[CategorieController::class,"searchCategory"]);
