<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Laravel\Passport\Http\Controllers\AccessTokenController;

Route::post('login',[AccessTokenController::class,'issueToken'])->middleware(['api-login','throttle']);