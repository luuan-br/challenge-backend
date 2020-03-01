<?php

use Illuminate\Http\Request;
use App\Utils\ApiError;

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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::prefix('/locales')->group(function() {
    Route::get('/', 'LocaleController@index');

    Route::post('/search', 'LocaleController@show');
});


Route::fallback(function () {
    return response()->json(ApiError::errorMessage('route not found', 404), 404);
});
