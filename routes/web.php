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
    return view('admin.home_page.listings', [
        'heading' => 'latest Listings',
        'listings' => Listing::all()
    ]);
});

    // single listing
    //Cách 1 
    // Route::get('/listings/{id}', function($id){
    //     return view('admin.home_page.listing', [
    //         'listing' => Listing::find($id)
    //     ]);
    // });

    //Cách 2 nếu ra trường hợp lỗi
    // Route::get('/listings/{listing}', function(Listing $listing){
    //     return view('admin.home_page.listing', [
    //         'listing' => $listing
    //     ]);
    // });
    //Cách 3 nếu ra trường hợp lỗi
    Route::get('/listings/{id}', function($id){
        $listing = Listing::find($id);
        if($listing){
            return view('admin.home_page.listing',[
                'listing' => $listing
            ]);
        }else{
            return view('html.err');
        }

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