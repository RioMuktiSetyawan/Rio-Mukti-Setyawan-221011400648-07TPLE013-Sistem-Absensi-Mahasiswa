<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{
    /**
     * Handle user login and token generation.
     */
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $user = User::where('email', $request->email)->first();

        // Cek jika user ada dan password benar
        if (! $user || ! Hash::check($request->password, $user->password)) {
            // Jika gagal, kirim respons error
            return response()->json([
                'message' => 'Kredensial tidak valid'
            ], 401); // 401 Unauthorized
        }

        // Hapus token lama jika ada (opsional, tapi praktik yang baik)
        $user->tokens()->delete();

        // Buat token baru
        $token = $user->createToken('api-token-'.$user->name)->plainTextToken;

        // Kirim token sebagai respons
        return response()->json([
            'message' => 'Login berhasil',
            'token' => $token,
            'user' => $user->only('id', 'name', 'email')
        ]);
    }
}