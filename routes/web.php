<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\MasterdataController;

Route::get('/', [DashboardController::class, 'index']);

Route::get('/dashboard', [DashboardController::class, 'index']);

Route::get('/masterdata/{method?}', function ($method = 'index') {
    $controller = app(MasterdataController::class);

    if (method_exists($controller, $method)) {
        return $controller->$method();
    }

    abort(404);
});
