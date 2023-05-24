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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['middleware' => 'api', 'prefix' => 'auth'], function ($router) {

    Route::post('login', [\App\Http\Controllers\api\AuthController::class, 'login']);
    Route::post('/register', [\App\Http\Controllers\api\AuthController::class, 'register']);
    Route::post('logout', [\App\Http\Controllers\api\AuthController::class, 'logout']);
    Route::post('refresh', [\App\Http\Controllers\api\AuthController::class, 'refresh']);
    Route::post('userProfile', [\App\Http\Controllers\api\AuthController::class, 'userProfile']);
    Route::apiResource('carts', \App\Http\Controllers\api\User\UserCartController::class);
    Route::apiResource('payment', \App\Http\Controllers\api\User\UserOrderController::class);
    Route::apiResource('addresses', \App\Http\Controllers\api\User\AddressController::class);
    Route::get('nearbyRestaurants', [\App\Http\Controllers\api\User\nearbyRestaurants::class, 'index']);
    //    Route::post('nearbyRestaurants', [\App\Http\Controllers\api\User\nearbyRestaurants::class, 'store']);
    Route::apiResource('comments', \App\Http\Controllers\api\User\CommentsController::class);
});


Route::get('restaurants/{restaurant_id}/foods', [\App\Http\Controllers\api\User\FoodController::class, 'show']);
Route::apiResource('restaurants', \App\Http\Controllers\api\User\RestaurantInformation::class);
