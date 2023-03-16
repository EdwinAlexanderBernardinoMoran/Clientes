<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::apiResource('v1/cliente', App\Http\Controllers\API\ClienteController::class);
