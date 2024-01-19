<?php

use App\Http\Controllers\Api\GitlabController;
use App\Http\Controllers\Api\JiraController;
use App\Http\Controllers\Api\N8NController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return response()->json([
        'success' => true
    ]);
});

Route::get('/n8n', [N8NController::class, 'index']);
Route::get('/jira', [JiraController::class, 'index']);
Route::get('/gitlab', [GitlabController::class, 'index']);
