<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ChampionController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|


Route::get('/', function () {
    return view('welcome');
});
*/

Route::get("/", [ChampionController::class, "index"])->name("champion.index");

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get("/champion", [ChampionController::class, "index"])->name("champion.index");
Route::get("/champion/{champion}", [ChampionController::class, "show"])->name("champion.show");
