<?php

use App\Http\Controllers\ApiUsersController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PollsApiController;
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
Route::get("/polls",[PollsApiController::class,"getpolls"]);
Route::post("/polls",[PollsApiController::class,"postpolls"]);
Route::delete("/polls/{p}",[PollsApiController::class,"deletepolls"]);

Route::post("/user",[ApiUsersController::class,"login"]);


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
