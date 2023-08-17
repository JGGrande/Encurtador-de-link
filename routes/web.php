<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

$link = '';
$linkEncurtado = '';

Route::get('/', function () {
    return view('welcome');
});
Route::get('/encurta', function(){
    return view('encurta');
});
Route::post('/encurta', function(Request $request){
    $link = $request->input('input');
    
    $linkEncurtado = '/link';
    
    dd($linkEncurtado);
    // return view('welcome');
});
