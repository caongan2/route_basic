<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great*/

Route::get('hello/{name?}', function ($name = 'khai'){
    echo "Hello " . $name;
});

Route::get('ww', function (){
   return 'xinchao';
});

Route::get('test', [\App\Http\Controllers\testController::class, 'test']);

Route::prefix('tester')->group(function (){
    Route::get('vn', function (){
       return '1+1=3';
    });
    Route::get('vm', function (){
        return '1+2=4';
    });
    Route::get('vb', function (){
        return '你好!';
    });
});
Route::get('/', function(){
echo "<h2>This is Home page</h2>";
});

Route::get('/about', function(){
echo "<h2>This is About page</h2>";
});

Route::get('/user', function(){
return view('user', ['name'=>'ngan']);
});

Route::get('/', 'App\Http\Controllers\HomeController@index');
