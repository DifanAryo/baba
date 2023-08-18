<?php

use App\Http\Controllers\AssetController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\InputController;
use App\Http\Controllers\VerifController;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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
    return view('welcome');
})->middleware(['auth'])->name('dashboard');



Route:: middleware('auth')->group(function(){
    route::get('input', [InputController::class,'index'])->name('input');
});


Route:: middleware('auth')->group(function(){
    route::get('asset', [AssetController::class,'index'])->name('asset');
});

Route:: middleware('auth')->group(function(){
    route::get('perif', [VerifController::class,'index'])->name('verif');
});

require __DIR__.'/auth.php';