<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarsController;
/*
|2-8-22 Add the Cars Controllers path--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
Add the route to the CarsController
*/

Route::resource('/cars', CarsController::class);
