<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\PostsByUserController;
use App\Http\Controllers\SongByUserController;
use App\Http\Controllers\SongController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\YoutubeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post('register', [AuthController::class, 'register']);
Route::post('login', [AuthController::class, 'login']);

Route::middleware('auth:sanctum')->group(function () {
    Route::post("logout", [AuthController::class, 'logout']);

    Route::get("/user/{id}", [UserController::class, "show"]);
    Route::put("/user/{id}", [UserController::class, "update"]);

    Route::post("songs", [SongController::class, "store"]);
    Route::delete("songs/{id}/{user_id}/", [SongController::class, "destroy"]);

    Route::get("user/{user_id}/songs", [SongByUserController::class, "index"]);

    Route::get('youtube/{user_id}', [YoutubeController::class, 'show']);
    Route::post('youtube', [YoutubeController::class, 'store']);
    Route::delete('youtube/{id}', [YoutubeController::class, 'destroy']);

    Route::get('posts', [PostController::class, 'index']);
    Route::get('posts/{id}', [PostController::class, 'show']);
    Route::post('posts', [PostController::class, 'store']);
    Route::put('posts/{id}', [PostController::class, 'update']);
    Route::delete('posts/{id}', [PostController::class, 'destroy']);

    Route::get('user/{user_id}/posts', [PostsByUserController::class, 'show']);

});
