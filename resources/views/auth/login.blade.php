<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Masuk - AbsenMhs</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;600;700;800&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Plus Jakarta Sans', sans-serif; }
    </style>
</head>
<body class="bg-slate-50">
    <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0">
        
        <div class="mb-8 flex flex-col items-center">
            <a href="/" class="flex items-center gap-3">
                <div class="w-12 h-12 bg-blue-600 rounded-2xl flex items-center justify-center shadow-lg shadow-blue-200">
                    <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4"></path>
                    </svg>
                </div>
            </a>
            <h1 class="mt-4 text-2xl font-black text-gray-900 tracking-tight uppercase">Masuk ke <span class="text-blue-600">AbsenMhs</span></h1>
            <p class="text-gray-500 text-sm">Silakan masukkan akun Anda untuk mengelola absensi.</p>
        </div>

        <div class="w-full sm:max-w-md px-8 py-10 bg-white shadow-[0_20px_50px_rgba(8,_112,_184,_0.1)] overflow-hidden sm:rounded-3xl border border-gray-100">
            
            @if (session('status'))
                <div class="mb-4 font-medium text-sm text-green-600 bg-green-50 p-3 rounded-lg text-center">
                    {{ session('status') }}
                </div>
            @endif

            <form method="POST" action="{{ route('login') }}">
                @csrf

                <div class="mb-6">
                    <label for="email" class="block text-sm font-bold text-gray-700 mb-2">Alamat Email</label>
                    <input id="email" type="email" name="email" :value="old('email')" required autofocus 
                        class="w-full px-4 py-3 bg-gray-50 border border-gray-200 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none transition duration-200"
                        placeholder="nama@email.com">
                    @if($errors->has('email'))
                        <p class="mt-2 text-xs text-red-600 font-semibold">{{ $errors->first('email') }}</p>
                    @endif
                </div>

                <div class="mb-4">
                    <label for="password" class="block text-sm font-bold text-gray-700 mb-2">Kata Sandi</label>
                    <input id="password" type="password" name="password" required autocomplete="current-password"
                        class="w-full px-4 py-3 bg-gray-50 border border-gray-200 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none transition duration-200"
                        placeholder="••••••••">
                    @if($errors->has('password'))
                        <p class="mt-2 text-xs text-red-600 font-semibold">{{ $errors->first('password') }}</p>
                    @endif
                </div>

                <div class="flex items-center justify-between mb-8">
                    <label for="remember_me" class="inline-flex items-center">
                        <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-blue-600 shadow-sm focus:ring-blue-500" name="remember">
                        <span class="ml-2 text-sm text-gray-600 font-medium">Ingat saya</span>
                    </label>

                    @if (Route::has('password.request'))
                        <a class="text-sm text-blue-600 hover:text-blue-800 font-bold transition" href="{{ route('password.request') }}">
                            Lupa sandi?
                        </a>
                    @endif
                </div>
                <div class="mt-4">
                <label class="block font-black text-[10px] text-slate-400 uppercase tracking-widest mb-2">
                    Keamanan: Berapa {{ $captcha_question }}
                </label>
                <input type="number" name="captcha_answer" 
                    class="block mt-1 w-full border-slate-200 rounded-xl shadow-sm focus:ring-blue-500 focus:border-blue-500 font-bold text-slate-700" 
                    placeholder="Masukkan jawaban..." required>
                
                @if ($errors->has('captcha_answer'))
                    <p class="text-[10px] text-red-600 font-black uppercase mt-1">{{ $errors->first('captcha_answer') }}</p>
                @endif
            </div>
                <div class="flex flex-col gap-2 mt-4">
                    <button type="submit" class="w-full py-4 bg-blue-600 hover:bg-blue-700 text-white rounded-2xl font-bold text-lg shadow-lg shadow-blue-200 transition duration-300 transform hover:-translate-y-1">
                        Masuk Sekarang
                    </button>
                    
                    <p class="text-center text-sm text-gray-500 font-medium mt-4">
                        Belum punya akun? 
                        <a href="{{ route('register') }}" class="text-blue-600 font-bold hover:underline">Daftar Akun</a>
                    </p>
                </div>
            </form>
        </div>

        <a href="/" class="mt-8 text-sm font-bold text-gray-400 hover:text-blue-600 transition flex items-center gap-2">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path></svg>
            Kembali ke Beranda
        </a>
    </div>
</body>
</html>