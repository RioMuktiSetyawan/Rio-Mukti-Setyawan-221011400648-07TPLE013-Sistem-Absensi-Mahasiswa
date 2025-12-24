<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sistem Absensi Mahasiswa</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Plus Jakarta Sans', sans-serif; }
    </style>
</head>
<body class="bg-gray-50 text-gray-900 antialiased">

    <nav class="flex items-center justify-between px-8 py-6 bg-white shadow-sm">
        <div class="flex items-center gap-2">
            <div class="w-10 h-10 bg-indigo-600 rounded-xl flex items-center justify-center shadow-lg shadow-indigo-200">
                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4"></path></svg>
            </div>
            <span class="text-xl font-extrabold tracking-tight text-gray-800 uppercase">Absen<span class="text-indigo-600">Mhs</span></span>
        </div>
        <div>
            @if (Route::has('login'))
                <div class="space-x-4">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="font-bold text-indigo-600 hover:text-indigo-800">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="font-bold text-gray-600 hover:text-gray-900">Masuk</a>
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="bg-indigo-600 text-white px-6 py-3 rounded-xl font-bold hover:bg-indigo-700 transition shadow-lg shadow-indigo-200">Daftar Sekarang</a>
                        @endif
                    @endauth
                </div>
            @endif
        </div>
    </nav>

    <main class="max-w-7xl mx-auto px-8 py-20 flex flex-col md:flex-row items-center justify-between">
        <div class="md:w-1/2 space-y-8">
            <div class="inline-block px-4 py-2 bg-indigo-100 text-indigo-700 rounded-full font-bold text-xs uppercase tracking-widest">
                🚀 Sistem Absensi Digital v1.0
            </div>
            <h1 class="text-6xl font-extrabold leading-tight text-gray-900">
                Kelola Absensi Mahasiswa <span class="text-indigo-600">Lebih Mudah & Cepat.</span>
            </h1>
            <p class="text-lg text-gray-500 leading-relaxed max-w-lg">
                Sistem manajemen absensi berbasis web yang membantu dosen dalam mencatat, mengolah, dan mencetak laporan absensi dalam hitungan detik.
            </p>
            <div class="flex gap-4">
                <a href="{{ route('login') }}" class="bg-indigo-600 text-white px-8 py-4 rounded-2xl font-bold text-lg hover:bg-indigo-700 transition shadow-xl shadow-indigo-200 flex items-center gap-2">
                    Mulai Sekarang
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path></svg>
                </a>
                <a href="#fitur" class="bg-white text-gray-700 border-2 border-gray-200 px-8 py-4 rounded-2xl font-bold text-lg hover:bg-gray-50 transition">
                    Lihat Fitur
                </a>
            </div>
        </div>

        <div class="md:w-1/2 mt-12 md:mt-0 relative flex justify-center">
            <div class="w-80 h-80 bg-indigo-600 rounded-full absolute filter blur-3xl opacity-10 animate-pulse"></div>
            <img src="https://img.freepik.com/free-vector/modern-check-list-concept-with-flat-design_23-2148265089.jpg" alt="Attendance Illustration" class="relative z-10 w-full max-w-md drop-shadow-2xl rounded-3xl">
        </div>
    </main>

    <section id="fitur" class="bg-white py-24">
        <div class="max-w-7xl mx-auto px-8 text-center">
            <h2 class="text-3xl font-black text-gray-900 mb-16 uppercase tracking-tight">Kenapa Memilih <span class="text-indigo-600 font-black">AbsenMhs?</span></h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-12 text-left">
                <div class="space-y-4 p-8 rounded-3xl border border-gray-100 hover:shadow-xl transition duration-300">
                    <div class="w-14 h-14 bg-blue-100 rounded-2xl flex items-center justify-center text-blue-600">
                        <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                    </div>
                    <h3 class="text-xl font-bold">Input Cepat</h3>
                    <p class="text-gray-500">Input absensi secara massal dalam hitungan detik. Tanpa perlu pilih mahasiswa satu-satu.</p>
                </div>
                <div class="space-y-4 p-8 rounded-3xl border border-gray-100 hover:shadow-xl transition duration-300">
                    <div class="w-14 h-14 bg-green-100 rounded-2xl flex items-center justify-center text-green-600">
                        <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 17v-2m3 2v-4m3 4v-6m2 10H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path></svg>
                    </div>
                    <h3 class="text-xl font-bold">Laporan Instan</h3>
                    <p class="text-gray-500">Cetak laporan kehadiran mahasiswa dalam format PDF dan Excel yang rapi dan terorganisir.</p>
                </div>
                <div class="space-y-4 p-8 rounded-3xl border border-gray-100 hover:shadow-xl transition duration-300">
                    <div class="w-14 h-14 bg-indigo-100 rounded-2xl flex items-center justify-center text-indigo-600">
                        <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path></svg>
                    </div>
                    <h3 class="text-xl font-bold">Koreksi Data</h3>
                    <p class="text-gray-500">Salah input? Tenang, sistem kami memungkinkan update data absensi secara fleksibel.</p>
                </div>
            </div>
        </div>
    </section>

    <footer class="py-12 border-t border-gray-100 text-center text-gray-400 text-sm">
        <p>&copy; {{ date('Y') }} Sistem Absensi Mahasiswa. Build with ❤️ and Laravel.</p>
    </footer>

</body>
</html>