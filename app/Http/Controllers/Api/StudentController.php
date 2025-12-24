<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Menampilkan data akademik satu mahasiswa berdasarkan NIM.
     * Endpoint ini dilindungi oleh middleware 'auth:sanctum'.
     */
    public function show($nim)
    {
        // Temukan mahasiswa berdasarkan NIM
        // Menggunakan firstOrFail() akan otomatis melempar 404 jika tidak ditemukan
        $student = Student::where('nim', $nim)->first();

        if (!$student) {
            return response()->json(['message' => 'Data mahasiswa tidak ditemukan'], 404);
        }

        // Jika ditemukan, kembalikan data sebagai JSON
        return response()->json([
            'message' => 'Data mahasiswa berhasil diambil',
            'data' => $student
        ]);
    }

    /**
     * (Contoh) Menyimpan data mahasiswa baru.
     * Anda bisa mengembangkan ini nanti.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'nim' => 'required|string|unique:students|max:20',
            'study_program' => 'required|string|max:100',
            'gpa' => 'required|numeric|min:0|max:4.00',
            'courses' => 'sometimes|array' // 'courses' adalah opsional dan harus berupa array
        ]);

        $student = Student::create($validatedData);

        return response()->json([
            'message' => 'Data mahasiswa berhasil ditambahkan',
            'data' => $student
        ], 201); // 201 Created
    }
}