<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/dictionary',function (){
   return view('dictionary') ;
});
Route::post('/dictionary',function (\Illuminate\Http\Request $request){
    $arr = ['dog' => 'chó','cat' => 'mèo','rabbit' => 'thỏ'];
    $string = $request->search;
    foreach ($arr as $key => $value){
        if ($string === $key){
            $output = $value;
            return view('done',compact(['output','string']));
        }else{
            return view('done','khong co du lieu');
        }
    }

});
