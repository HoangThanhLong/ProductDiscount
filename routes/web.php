<?php

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



Route::get('/', function () {
    return view('welcome');
});
Route::get('/calculator', function (){
    return view('discountCalculator');
});
Route::get('/result', function (){
    return view('result');
});
Route::post('/calculator', function (Illuminate\Http\Request $request){
    $name = $request->Description;
    $Price = $request->Price;
    $Discount = $request->Discount;
    $result = ($Price * $Discount * 0.1 * 0.01);
    echo "Product Description:" . $name . "<br>";
    echo "Price:" . $Price . "<br>";
    echo "Discount Percent:" . $Discount . "<br>";
    echo "Discount Amount:" . $result;
//    return view('result');
});
