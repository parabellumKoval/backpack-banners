<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use Backpack\Banners\app\Http\Controllers\Api\BannerController;

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

Route::prefix('api/banners')->controller(BannerController::class)->group(function () {
  
  Route::get('', 'index');
  Route::get('{id_or_slug}', 'show');

});
