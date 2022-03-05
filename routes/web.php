<?php

use App\Http\Controllers\CountryController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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

Route::get('/users', function () {
    \App\Models\User::factory()->count(5)->create();
});

Route::get('/add-country/{id}', [CountryController::class, 'create']);

Route::get('show-users', [UserController::class, 'show']);
Route::get('show-countries', [CountryController::class, 'show']);


