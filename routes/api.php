<?php

use App\Http\Controllers\SportController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*Route::middleware(['auth:sanctum'])->get('/user', function (Request $request) {
    return $request->user();
});*/

Route::get('/info', function () {
    return 'Gustavo Braga Vilela Chamek 2644';
});


Route::apiResource('/sports', SportController::class);