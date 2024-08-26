<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OpenAIController;

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

Route::get('/openai-form', function () {
    return view('openai-form');
});

Route::post('/generate-response', [OpenAIController::class, 'generateResponse']);
use App\Http\Controllers\AIController;

Route::get('/generate', [AIController::class, 'showForm'])->name('generate.form');
Route::post('/generate', [AIController::class, 'generate'])->name('generate');
