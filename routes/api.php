<?php

use App\Http\Controllers\PrescriptionController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/prescriptions', [PrescriptionController::class, 'index']);
