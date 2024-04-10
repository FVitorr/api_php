<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PublicationController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::get("/user",[UserController::class,"index"]);
Route::get("/user/{id}",[UserController::class,"show"]);
Route::put("/user/{id}",[UserController::class,"update"]);
Route::post("/user",[UserController::class,"store"]);
Route::delete("/user/{id}",[UserController::class,"destroy"]);

Route::get("/profile",[ProfileController::class,"index"]);
Route::get("/profile/{id}",[ProfileController::class,"show"]);
Route::put("/profile/{id}",[ProfileController::class,"update"]);
Route::post("/profile",[ProfileController::class,"store"]);
Route::delete("/profile/{id}",[ProfileController::class,"destroy"]);


Route::get("/post",[PublicationController::class,"index"]);
Route::get("/post/{id}",[PublicationController::class,"show"]);
Route::put("/post/{id}",[PublicationController::class,"update"]);
Route::post("/post",[PublicationController::class,"store"]);
Route::delete("/post/{id}",[PublicationController::class,"destroy"]);

Route::get("/friend",[PublicationController::class,"index"]);
Route::get("/friend/{id}",[PublicationController::class,"show"]);
Route::put("/friend/{id}",[PublicationController::class,"update"]);
Route::post("/friend",[PublicationController::class,"store"]);
Route::delete("/friend/{id}",[PublicationController::class,"destroy"]);
