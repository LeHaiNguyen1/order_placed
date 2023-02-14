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


/* This is a route that returns a json response. */
// liên kết api fake
// Route::get('/postAPi', function(){
//     return response()->json([
//         'posts' => [
//             'title' => 'Post one'
//         ] 
//         ]);
// });

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
