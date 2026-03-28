<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/test', function () {
    return response()->json([
        'message' => 'Successful Connection! :)'
    ]);
});

Route::get('/test-python', function () {
    $response = Http::get('http://127.0.0.1:5560/test');

    if ($response->successful()) {
        return response()->json([
            'message' => 'Successful Connection! :)',
            'random' => $response->json()
        ]);
    }

    return response()->json([
        'error' => 'Python service unavailable'
    ], 500);
});

