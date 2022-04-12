<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SampleController;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/team', function () {
    return view('team');
})->middleware(['auth'])->name('team');

Route::get('/weekplayer', function () {
    return view('weekplayer');
})->middleware(['auth'])->name('weekplayer');

Route::get('fff',function (){
    return view('ffg');
});

Route::middleware('auth')->group(function(){
    Route::get('sample',[SampleController::class, 'index'])->name('sample.index');
});


require __DIR__.'/auth.php';
