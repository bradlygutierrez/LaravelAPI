<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\V1\PostController as PostV1;
use App\Http\Controllers\Api\V2\PostController as PostV2;


//V1
Route::apiResource('v1/posts', PostV1::class)
->only(['index','show','destroy'])
->middleware('auth:santum');


//V2 This is going to be the space for version 2 of the API
Route::apiResource('v2/posts', PostV2::class)
->only(['index','show','destroy'])
->middleware('auth:sanctum');

Route::post('/login', [App\Http\Controllers\Api\LoginController::class, 'login']);

