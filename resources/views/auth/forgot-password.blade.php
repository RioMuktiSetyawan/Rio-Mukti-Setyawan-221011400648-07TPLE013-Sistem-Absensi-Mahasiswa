<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Lupa Kata Sandi - AbsenMhs</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;600;700;800&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Plus Jakarta Sans', sans-serif; }
    </style>
</head>
<body class="bg-slate-50">
    <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 pb-10">
        
        <div class="mb-8 flex flex-col items-center px-4">
            <a href="/" class="flex items-center gap-3">
                <div class="w-12 h-12 bg-blue-600 rounded-2xl flex items-center justify-center shadow-lg shadow-blue-200">
                    <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path>
                    </svg>
                </div>
            </a>
            <h1 class="mt-4 text-2xl font-black text-gray-900 tracking-tight uppercase text-center">Lupa <span class="text-blue-600">Kata Sandi?</span></h1>
        </div>

        <div class="w-full sm:max-w-md px-8 py-10 bg-white shadow-[0_20px_50px_rgba(8,_112,_184,_0.1)] overflow-hidden sm:rounded-3xl border border-gray-100 mx-4">
            
            <div class="mb-6 text-sm text-gray-500 leading-relaxed text-center">
                Jangan khawatir! Masukkan alamat email Anda di bawah ini, dan kami akan mengirimkan tautan untuk menyetel ulang kata sandi Anda.
            </div>

            @if (session('status'))
                <div class="mb-6 font-bold text-sm text-green-700 bg-green-50 p-4 rounded-xl border border-green-100 text-center animate-bounce">
                    {{ session('status') }}
                </div>
            @endif

            <form method="POST" action="{{ route('password.email') }}">
                @csrf

                <div class="mb-8">
                    <label for="email" class="block text-sm font-bold text-gray-700 mb-2">Alamat Email Terdaftar</label>
                    <input id="email" type="email" name="email" :value="old('email')" required autofocus 
                        class="w-full px-4 py-3 bg-gray-50 border border-gray-200 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none transition duration-200"
                        placeholder="nama@email.com">
                    @if($errors->has('email'))
                        <p class="mt-2 text-xs text-red-600 font-semibold">{{ $errors->first('email') }}</p>
                    @endif
                </div>

                <div class="flex flex-col gap-4">
                    <button type="submit" class="w-full py-4 bg-blue-600 hover:bg-blue-700 text-white rounded-2xl font-bold text-lg shadow-lg shadow-blue-200 transition duration-300 transform hover:-translate-y-1">
                        Kirim Tautan Reset
                    </button>
                    
                    <a href="{{ route('login') }}" class="text-center text-sm text-gray-500 font-bold hover:text-blue-600 transition mt-2">
                        Kembali ke Halaman Login
                    </a>
                </div>
            </form>
        </div>

        <a href="/" class="mt-8 mb-10 text-sm font-bold text-gray-400 hover:text-blue-600 transition flex items-center gap-2">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path></svg>
            Ke Beranda Utama
        </a>
    </div>
</body>
</html>