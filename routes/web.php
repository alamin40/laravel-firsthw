<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ViewController;
use App\Http\Controllers\UserController;

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

Route::get('/', [ViewController::class, 'index'])->name('home');
Route::get('/series', [ViewController::class, 'series'])->name('series');
Route::get('/calculator', [ViewController::class, 'calculator'])->name('calculator');
Route::get('/passgenerator', [ViewController::class, 'passgenerator'])->name('passgenerator');
Route::get('/blog', [ViewController::class, 'blog'])->name('blog');
Route::get('/details/{id}', [ViewController::class, 'detail'])->name('detail');


Route::post('/calculator-result', [UserController::class, 'calculator'])->name('calculator-result');
Route::post('/passgenerator-result', [UserController::class, 'passgenerator'])->name('passgenerator-result');
Route::post('/series-result', [UserController::class, 'series'])->name('series-result');
Route::post('/prime-number', [UserController::class, 'primenumber'])->name('prime-number');
