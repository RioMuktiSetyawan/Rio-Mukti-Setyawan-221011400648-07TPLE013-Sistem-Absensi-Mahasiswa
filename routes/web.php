<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\AbsensiController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});


Route::get('/dashboard', function () {
    $totalMahasiswa = \App\Models\Mahasiswa::count();
    
    // Informasi tambahan (Opsional)
    $tanggalHariIni = date('Y-m-d');
$totalHadir = \App\Models\Absensi::whereDate('tanggal', $tanggalHariIni)->where('status', 'Hadir')->count();
$totalIzin  = \App\Models\Absensi::whereDate('tanggal', $tanggalHariIni)->where('status', 'Izin')->count();
$totalSakit = \App\Models\Absensi::whereDate('tanggal', $tanggalHariIni)->where('status', 'Sakit')->count();
$totalAlpa  = \App\Models\Absensi::whereDate('tanggal', $tanggalHariIni)->where('status', 'Alpa')->count();

return view('dashboard', compact('totalMahasiswa', 'totalHadir', 'totalIzin', 'totalSakit', 'totalAlpa'));
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::resource('mahasiswa', MahasiswaController::class);
    Route::get('/absensi', [AbsensiController::class, 'index'])->name('absensi.index');
    Route::post('/absensi', [AbsensiController::class, 'store'])->name('absensi.store');
    Route::get('/laporan', [AbsensiController::class, 'laporan'])->name('absensi.laporan');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::get('/laporan/pdf', [AbsensiController::class, 'cetakPdf'])->name('absensi.pdf');
    Route::get('/laporan/excel', [AbsensiController::class, 'cetakExcel'])->name('absensi.excel');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::post('/laporan/reset', [AbsensiController::class, 'resetAbsensi'])->name('absensi.reset');
    Route::delete('/absensi/delete-by-date', [AbsensiController::class, 'destroyByDate'])->name('absensi.destroyByDate');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
