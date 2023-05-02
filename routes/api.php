<?php

use App\Http\Controllers\ApiDivisionsController;
use App\Http\Controllers\ApiUsersController;
use App\Http\Controllers\ApiVotesController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PollsApiController;


// handle polls
Route::get("/polls",[PollsApiController::class,"getpolls"]);
Route::post("/polls",[PollsApiController::class,"postpolls"]);
Route::delete("/polls/{p}",[PollsApiController::class,"deletepolls"]);


// handle division
Route::get("/divisions",[ApiDivisionsController::class,"getdivisions"]);
Route::post("/division",[ApiDivisionsController::class,"postdivision"]);
Route::delete("/division/{p}",[ApiDivisionsController::class,"deletedivison"]);

// handle vote
Route::get("/vote",[ApiVotesController::class,"GetVotes"]);
Route::post("/vote",[ApiVotesController::class,"PostVotes"]);
Route::delete("/vote/{p}",[ApiVotesController::class,"deleteVotes"]);


// handle user
Route::post("/user",[ApiUsersController::class,"regis"]);
Route::middleware("auth:api")->get("/user");

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
