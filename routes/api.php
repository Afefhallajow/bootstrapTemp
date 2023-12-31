<?php

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

Route::get('/',[\App\Http\Controllers\api\usercontroller::class,'index']);
Route::get('/l',[\App\Http\Controllers\api\usercontroller::class,'index1']);
Route::put('/l',[\App\Http\Controllers\api\usercontroller::class,'index1']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
