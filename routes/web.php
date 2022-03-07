<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DocumentationController;

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

/* --------------------- PROJECTS -------------------------------------------------------- */
Route::get('/', [DocumentationController::class, 'index'])->name('home');

Route::group(['prefix' => 'documentation'], function(){
    Route::get('{parent}/{template}', [DocumentationController::class, 'components'])->name('documentation');
});