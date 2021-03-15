<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ComputerController;
use App\Http\Controllers\AttributionController;
use App\Http\Controllers\HomeController;

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

Route::get('/', [HomeController::class, 'index'])
->middleware(['auth'])
->name('dashboard');

Route::get('/dashboard', [HomeController::class, 'index'])
->middleware(['auth'])
->name('dashboard');

require __DIR__.'/auth.php';

Route::group(['middleware' => ['auth', 'isAdmin']], function() {

 
    Route::resource('users', UserController::class);
    Route::resource('computers', ComputerController::class)->except([
        'create', 'show', 'edit'
    ]);

    Route::get('/attributions', [AttributionController::class, 'index']);
    Route::post('/attributions',[AttributionController::class, 'store']);
    Route::delete('/attributions/{id}',[AttributionController::class, 'destroy']);
});