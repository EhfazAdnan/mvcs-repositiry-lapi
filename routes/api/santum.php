<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SactumController;

Route::group(
    ['middleware' => []],
    function () {
    Route::post('/sanctum/token', [SactumController::class, 'issueToken']);
});
