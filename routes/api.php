<?php

use App\Http\Controllers\ArtisteController;
use App\Http\Controllers\MatchController;
use App\Http\Controllers\TrackController;
use App\Http\Controllers\UserController;
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

Route::middleware('auth:sanctum')->get('/me', function (Request $request) {
    return $request->user();
});

Route::post('/users', [UserController::class, 'create']);
Route::post('/users/authenticate', [UserController::class, 'authenticate']);

Route::middleware(['throttle:api', 'auth:sanctum'])->group(function () {
    Route::post('/match/upload', [MatchController::class, 'matchFromAudioUpload']);

    Route::get('/tracks/top', [TrackController::class, 'getTopTracks']);
    Route::get('/tracks/{id}', [TrackController::class, 'getTrack']);

    Route::get('/artistes/top', [ArtisteController::class, 'getTopArtistes']);
    Route::get('/artistes/{id}', [ArtisteController::class, 'getArtiste']);
});