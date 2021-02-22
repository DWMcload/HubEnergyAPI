<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/v1/commission/{partner}', 'App\Http\Controllers\Api\MeterController@getSumCommissions');
Route::get('/v1/commission/{partner}/{meter_point}', 'App\Http\Controllers\Api\MeterController@getMeterPointCommission');

