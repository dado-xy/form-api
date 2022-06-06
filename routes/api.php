<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post("/form", function (Request $request) {
    dd($request->all());
});

Route::get('/test', function () {

    response = HttpResponse(json . dumps('{"status" : "success"}'))
    response . __setitem__("Content-type", "application/json")
    response . __setitem__("Access-Control-Allow-Origin", "*")

    return response;
});
