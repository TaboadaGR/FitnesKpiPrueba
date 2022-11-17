<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\http\Controller\table_secretos_controller;


Route::get ('/Secretos',[App\Http\Controllers\table_secretos_controller::class, 'index']);
Route::get('/save',[App\Http\Controllers\table_secretos_controller::class, 'store']);



Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
