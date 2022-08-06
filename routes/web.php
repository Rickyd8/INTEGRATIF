<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Route definition...
Route::get('/aggregrate/{rss_id}', [NewsController::class, 'aggregrate']);
Route::get('/', [App\Http\Controllers\FeedController::class, 'index']);

Route::get('/football', function () {
    return view('football');
});
Route::get('/football', [App\Http\Controllers\FootballController::class, 'index']);

Route::get('/korea', function () {
    return view('korea');
});
Route::get('/korea', [App\Http\Controllers\KoreaController::class, 'index']);

Route::get('/motor', function () {
    return view('motor');
});
Route::get('/motor', [App\Http\Controllers\MotorController::class, 'index']);


Route::get('/pokemon', function () {
    return view('pokemon');
});
Route::get('/show/{pokemon_name}', [NewsController::class, 'show']);


Route::get('/rsskevin', function () {
    return view('rsskevin');
});

