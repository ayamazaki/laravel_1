<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HelloController;

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

Route::get('helloo',[HelloController::class,'index']);
Route::get('hello/requ',[HelloController::class,'requ']);
Route::get('hello/index',[HelloController::class,'index']);
Route::get('hello/index3/{chapter?}/{section?}/{number?}/{myanswer?}',[HelloController::class,'index3']);
Route::get('hello/index4/{chapter?}/{section?}/{number?}/{myanswer?}',[HelloController::class,'index4']);
Route::post('helloo/index3/{chapter?}/{section?}/{number?}',[HelloController::class,'post']);

// Route::get('hello/{msg?}',function($msg=''){
// $html=<<<EOF
// <html>
// <body>
// <h1>{$msg}</h1>
// <p>This is sample page.</p>
// </body>
// </html>'
// EOF;
// return $html;
// });

Route::get('hello2/{chapter?}/{section?}/{number?}',[HelloController::class,'index']);

