<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\opravilo;
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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('test', 'ApiCrud@test');

Route::group(['prefix' => 'v1'], function () {
  	Route::get('opravilo', 'ApiCrud@index');
	Route::get('opravilo/{opravilo}', 'ApiCrud@show');
	Route::post('opravilo', 'ApiCrud@store');
	Route::put('opravilo/{opravilo}', 'ApiCrud@update');
	Route::delete('opravilo/{opravilo}', 'ApiCrud@delete');
});




Route::fallback(function(){
    return response()->json([
        'message' => 'Page Not Found. If error persists, contact WebWhatMarko@gmail.com'], 404);
});

