<?php

use App\Http\Livewire\Usuarios;
use App\Http\Livewire\PageController;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\FileUpload;
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



Route::middleware(['auth:sanctum', config('jetstream.auth_session'),'verified'])->group(function () {
    Route::get('usuarios', Usuarios::class)->name('usuarios');
    Route::get('proyectos', PageController::class)->name('proyectos');
    Route::get('/dashboard', function () { return view('dashboard'); })->name('dashboard');
    // Route::get('/archivos', function () { return view('archivos');  })->name('archivos');

    Route::get('/file-upload', FileUpload::class)->name('file.upload');

    // Route::get('/uploadpage',[PageController::class,'uploadpage'])->name('uploadpage');
     Route::get('/uploadArchivo', [PageController::class ,'index' ])->name('uploadArchivo');
     Route::post('/uploadArchivo', [PageController::class ,'store' ]);

    Route::get('/mostrarArchivo',[PageController::class,'show'])->name('mostrarArchivo');

    Route::get('/download{file}',[PageController::class,'download']);

    Route::get('/view{id}',[PageController::class,'view']);


});





