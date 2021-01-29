<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AuthController;
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
/*
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
*/
Route::group([
    'middleware' => 'api',
    'prefix' => 'auth'

], function ($router) {

    Route::post('/connexion', [AuthController::class, 'connexion']);
    //Route::post('/inscription', [AuthController::class, 'inscription']);
    Route::middleware('auth')->post('/deconnexion', [AuthController::class, 'deconnexion']);
    Route::middleware('auth')->post('/actualisation', [AuthController::class, 'actualisation']);
    Route::middleware('auth')->get('/user-profil', [AuthController::class, 'userProfil']);

});
