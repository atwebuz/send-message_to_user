<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


use App\Http\Controllers\WorkController;



Route::get('/works', [WorkController::class, 'index'])->name('works.index');
Route::post('/works/send-alert/{user_id}/{work}', [WorkController::class, 'sendAlert'])->name('works.sendAlert');
