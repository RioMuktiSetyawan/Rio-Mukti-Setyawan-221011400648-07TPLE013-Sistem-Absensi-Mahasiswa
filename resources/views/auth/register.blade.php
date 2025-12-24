<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Daftar Akun - AbsenMhs</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;600;700;800&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Plus Jakarta Sans', sans-serif; }
    </style>
</head>
<body class="bg-slate-50">
    <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 pb-10">
        
        <div class="mb-8 flex flex-col items-center">
            <a href="/" class="flex items-center gap-3">
                <div class="w-12 h-12 bg-blue-600 rounded-2xl flex items-center justify-center shadow-lg shadow-blue-200">
                    <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z"></path>
                    </svg>
                </div>
            </a>
            <h1 class="mt-4 text-2xl font-black text-gray-900 tracking-tight uppercase">Daftar Akun <span class="text-blue-600">AbsenMhs</span></h1>
            <p class="text-gray-500 text-sm">Buat akun untuk mulai mengelola absensi mahasiswa.</p>
        </div>

        <div class="w-full sm:max-w-md px-8 py-10 bg-white shadow-[0_20px_50px_rgba(8,_112,_184,_0.1)] overflow-hidden sm:rounded-3xl border border-gray-100">
            
            <form method="POST" action="{{ route('register') }}">
                @csrf

                <div class="mb-5">
                    <label for="name" class="block text-sm font-bold text-gray-700 mb-2">Nama Lengkap</label>
                    <input id="name" type="text" name="name" :value="old('name')" required autofocus 
                        class="w-full px-4 py-3 bg-gray-50 border border-gray-200 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none transition duration-200"
                        placeholder="Contoh: Budi Santoso">
                    @if($errors->has('name'))
                        <p class="mt-2 text-xs text-red-600 font-semibold">{{ $errors->first('name') }}</p>
                    @endif
                </div>

                <div class="mb-5">
                    <label for="email" class="block text-sm font-bold text-gray-700 mb-2">Alamat Email</label>
                    <input id="email" type="email" name="email" :value="old('email')" required 
                        class="w-full px-4 py-3 bg-gray-50 border border-gray-200 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none transition duration-200"
                        placeholder="nama@email.com">
                    @if($errors->has('email'))
                        <p class="mt-2 text-xs text-red-600 font-semibold">{{ $errors->first('email') }}</p>
                    @endif
                </div>

                <div class="mb-5">
                    <label for="password" class="block text-sm font-bold text-gray-700 mb-2">Kata Sandi</label>
                    <input id="password" type="password" name="password" required autocomplete="new-password"
                        class="w-full px-4 py-3 bg-gray-50 border border-gray-200 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none transition duration-200"
                        placeholder="Minimal 8 karakter">
                    @if($errors->has('password'))
                        <p class="mt-2 text-xs text-red-600 font-semibold">{{ $errors->first('password') }}</p>
                    @endif
                </div>

                <div class="mb-8">
                    <label for="password_confirmation" class="block text-sm font-bold text-gray-700 mb-2">Konfirmasi Kata Sandi</label>
                    <input id="password_confirmation" type="password" name="password_confirmation" required
                        class="w-full px-4 py-3 bg-gray-50 border border-gray-200 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none transition duration-200"
                        placeholder="Ulangi kata sandi">
                </div>

                <div class="flex flex-col gap-4">
                    <button type="submit" class="w-full py-4 bg-blue-600 hover:bg-blue-700 text-white rounded-2xl font-bold text-lg shadow-lg shadow-blue-200 transition duration-300 transform hover:-translate-y-1">
                        Daftar Sekarang
                    </button>
                    
                    <p class="text-center text-sm text-gray-500 font-medium mt-4">
                        Sudah punya akun? 
                        <a href="{{ route('login') }}" class="text-blue-600 font-bold hover:underline">Masuk di sini</a>
                    </p>
                </div>
            </form>
        </div>

        <a href="/" class="mt-8 mb-10 text-sm font-bold text-gray-400 hover:text-blue-600 transition flex items-center gap-2">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path></svg>
            Kembali ke Beranda
        </a>
    </div>
</body>
</html>