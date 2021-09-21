<?php

use App\Http\Controllers\API\v1\TaskController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;



Route::group(['prefix' => 'v1'], function () {

    Route::get('tasks', [TaskController::class, 'index']);
    Route::post('tasks', [TaskController::class, 'store']);
    Route::get('tasks/{taskId}', [TaskController::class, 'show']);
    Route::delete('tasks/{taskId}', [TaskController::class, 'destroy']);

});
