<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\V1\ProfileController;

/*
|--------------------------------------------------------------------------
| API Routes (Versioned)
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::prefix('v1')->group(function () {
    // Base info route to avoid 404 on `/api/v1`
    Route::get('/', function () {
        return response()->json([
            'message' => 'Portfolio API — v1',
            'endpoints' => [
                'GET /api/v1/profile'
            ]
        ]);
    });

    Route::get('profile', [ProfileController::class, 'index']);
});