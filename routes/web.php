<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\peopleController;
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

Route::get('/127.0.0.1/Grzeda/50555/people', [peopleController::class, 'getAll'] );
Route::post('/127.0.0.1/Grzeda/50555/people', [peopleController::class, 'createPerson'] );
Route::put('/127.0.0.1/Grzeda/50555/people/{id}', [peopleController::class, 'updatePerson'] );
Route::get('/127.0.0.1/Grzeda/50555/people/{id}', [peopleController::class, 'getPerson'] );
Route::delete('/127.0.0.1/Grzeda/50555/people/{id}', [peopleController::class, 'deletePerson'] );