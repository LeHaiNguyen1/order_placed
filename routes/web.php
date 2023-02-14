<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
// use đến models
use App\Models\listing;

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

//mặt định
// Route::get('/', function () {
//     return view('welcome');
// });

//Chèn value vào view Lấy toàn bộ danh sách
Route::get('/', function () {
    return view('listings', [
        'heading' => 'latest Listings',
        'listings' => Listing::all()
    ]);
});

    // single listing
    Route::get('/listings/{id}', function($id){
        return view('listing', [
            'listing' => Listing::find($id)
        ]);
    });

//dán giá trị content vào network để kiểm tra 
// Route::get('/page_01',function(){
//     return response('<h1>Hello</h1>',200)
//         ->header('Content-Type', 'text/plain')
//         ->header('foo','bar');
// });

// //lấy giá trị ID cho từng page có thể lấy giá trị id trong arr
// Route::get('page_{id}', function($id){
//     return response('page' .  $id);
// })->where('id', '[0-9]+');

// //lấy ra ký tự chuỗi trong array
// Route::get('/search', function(Request $request){
//     // dd($request);
//     //Lấy giá trị đường dẫn dán vào màn hình 
//     return $request->name. ' '  . $request->cty;
// });