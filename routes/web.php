<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ComponentTestController;
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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::get('/component-test1',[ComponentTestController::class,'showComponent1']);
Route::get('/component-test2',[ComponentTestController::class,'showComponent2']);


require __DIR__.'/auth.php';