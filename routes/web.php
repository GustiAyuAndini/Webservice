<?php
use App\Http\Controllers\MahasiswaC;
use App\Http\Controllers\ProfileC;
use App\Http\Controllers\SoalController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('soal/index');
})->name('utama');

Route::get('/about', function(){
    return view('about');
})->name('tentang-saya');

Route::get('/profile',[ProfileC::class,'index']);

Route::get('/nama', function(){
    return 'Andini';
});

Route::get('/dari-view', function(){
    return view('home');
});

Route::view('master', 'template/master');

//route untuk mahasiswa
Route::get('data-mahasiswa', [MahasiswaController::class, 'index']);
Route::get('add-mahasiswa', [MahasiswaController::class, 'create']);

//CRUD Data
Route::get('data-soal', [SoalController::class, 'index']);
Route::get('add-soal', [SoalController::class, 'create']);
Route::post('save-soal', [SoalController::class, 'store']);
Route::delete('delete-soal/{id}', [SoalController::class, 'destroy'])->name('delete.soal');
