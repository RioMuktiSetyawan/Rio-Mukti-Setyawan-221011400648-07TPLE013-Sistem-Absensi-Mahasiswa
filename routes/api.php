<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\StudentController;
use App\Http\Controllers\Api\AuthController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Enjoy building your API!
|
*/

// === RUTE PUBLIK ===
// Rute ini tidak memerlukan autentikasi
Route::post('/login', [AuthController::class, 'login']);


// === RUTE AMAN (SECURE) ===
// Rute di dalam grup ini WAJIB menggunakan token (auth:sanctum)
// Klien harus mengirimkan Header "Authorization: Bearer <token>"

Route::middleware('auth:sanctum')->group(function () {
    
    // Rute untuk mendapatkan data user yang sedang login
    Route::get('/user', function (Request $request) {
        return $request->user();
    });

    // Rute untuk mendapatkan data akademik mahasiswa
    Route::get('/students/{nim}', [StudentController::class, 'show']);

    // Anda juga bisa menambahkan rute lain di sini
    // Contoh:
    // Route::post('/students', [StudentController::class, 'store']);
    // Route::put('/students/{nim}', [StudentController::class, 'update']);
    // Route::delete('/students/{nim}', [StudentController::class, 'destroy']);
});