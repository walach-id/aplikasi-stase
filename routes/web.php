<?php

use Illuminate\Support\Facades\Route;
use App\Models\mahasiswa;
use App\Models\dosen;
use App\Http\Controllers\DosenProfilController;
use App\Http\Controllers\MahasiswaProfilController;


Route::get('/', function () {
    return view('index.welcome', ['mahasiswa' => Mahasiswa::with('dosen')->where('nim', '=', '03')->get()]);
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';

// PROFIL DOSEN
Route::get('dosen/{nip}', fn ($nip) =>  redirect("dosen/{$nip}/profil/"))->whereNumber('nip');
Route::get('dosen/{nip}/profil/', [DosenProfilController::class, 'index']);
Route::get('dosen/profil/add', [DosenProfilController::class, 'create']);
Route::post('dosen/profil/store', [DosenProfilController::class, 'store']);

// PROFIL MAHASISWA
Route::get('mahasiswa/{nim}', fn ($nim) =>  redirect("mahasiswa/{$nim}/profil/"))->whereNumber('nim');
Route::get('mahasiswa/{nim}/profil/', [MahasiswaProfilController::class, 'index']);
Route::get('mahasiswa/profil/add', [MahasiswaProfilController::class, 'create']);
Route::post('mahasiswa/profil/store', [MahasiswaProfilController::class, 'store']);
