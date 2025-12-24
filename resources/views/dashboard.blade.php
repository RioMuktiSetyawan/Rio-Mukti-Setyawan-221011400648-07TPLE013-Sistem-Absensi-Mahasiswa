<x-app-layout>
    <div class="py-6 bg-slate-50 min-h-screen">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            
            <div class="mb-6 flex items-center justify-between">
                <div>
                    <div class="inline-block bg-blue-600 px-4 py-1 rounded-lg mb-1 shadow-sm shadow-blue-200">
                        <h2 class="text-sm font-black text-white tracking-[0.2em] uppercase leading-tight">
                            Dashboard
                        </h2>
                    </div>
                    <p class="text-[10px] text-slate-500 font-bold uppercase tracking-widest ml-1">User: {{ Auth::user()->name }}</p>
                </div>
                <div class="px-3 py-1.5 bg-white rounded-lg shadow-sm border border-slate-200 text-[10px] font-black text-slate-500 uppercase">
                    {{ date('d M Y') }}
                </div>
            </div>

            <div class="grid grid-cols-2 md:grid-cols-6 gap-3 mb-6">
                <div class="bg-white p-3 rounded-xl border border-slate-200 shadow-sm flex items-center gap-3">
                    <div class="w-8 h-8 bg-blue-50 text-blue-600 rounded-lg flex items-center justify-center flex-shrink-0">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path></svg>
                    </div>
                    <div>
                        <p class="text-[8px] font-black text-slate-400 uppercase tracking-tighter">Total Mahasiswa</p>
                        <h3 class="text-sm font-black text-slate-800 leading-none">{{ $totalMahasiswa }}</h3>
                    </div>
                </div>
                 <div class="grid grid-cols-2 md:grid-cols-6 gap-3 mb-6">
                <div class="bg-white p-3 rounded-xl border border-slate-200 shadow-sm flex items-center gap-3">
                    <div class="w-8 h-8 bg-blue-50 text-blue-600 rounded-lg flex items-center justify-center flex-shrink-0">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path></svg>
                    </div>
                    <div>
                        <p class="text-[8px] font-black text-slate-400 uppercase tracking-tighter">Hadir</p>
                        <h3 class="text-sm font-black text-slate-800 leading-none">{{ $totalHadir }}</h3>
                    </div>
                </div>
                 <div class="grid grid-cols-2 md:grid-cols-6 gap-3 mb-6">
                <div class="bg-white p-3 rounded-xl border border-slate-200 shadow-sm flex items-center gap-3">
                    <div class="w-8 h-8 bg-blue-50 text-blue-600 rounded-lg flex items-center justify-center flex-shrink-0">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path></svg>
                    </div>
                    <div>
                        <p class="text-[8px] font-black text-slate-400 uppercase tracking-tighter">Izin</p>
                        <h3 class="text-sm font-black text-slate-800 leading-none">{{ $totalIzin }}</h3>
                    </div>
                </div>
                 <div class="grid grid-cols-2 md:grid-cols-6 gap-3 mb-6">
                <div class="bg-white p-3 rounded-xl border border-slate-200 shadow-sm flex items-center gap-3">
                    <div class="w-8 h-8 bg-blue-50 text-blue-600 rounded-lg flex items-center justify-center flex-shrink-0">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path></svg>
                    </div>
                    <div>
                        <p class="text-[8px] font-black text-slate-400 uppercase tracking-tighter">Sakit</p>
                        <h3 class="text-sm font-black text-slate-800 leading-none">{{ $totalSakit }}</h3>
                    </div>
                </div>
                <div class="bg-rose-600 p-3 rounded-xl shadow-sm flex items-center gap-3 text-white">
                    <div class="w-8 h-8 bg-white/20 rounded-lg flex items-center justify-center flex-shrink-0">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                    </div>
                    <div>
                        <p class="text-rose-100 text-[8px] font-black uppercase tracking-tighter">Alpa</p>
                        <h3 class="text-sm font-black leading-none">{{ $totalAlpa }}</h3>
                    </div>
                </div>

                <div class="bg-white p-3 rounded-xl border border-slate-200 shadow-sm flex items-center gap-3">
                    <div class="w-2 h-2 bg-green-500 rounded-full animate-pulse ml-2"></div>
                    <div>
                        <p class="text-[8px] font-black text-slate-400 uppercase tracking-tighter">Sistem</p>
                        <h3 class="text-[9px] font-black text-green-600 uppercase">Aktif</h3>
                    </div>
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                <a href="{{ route('mahasiswa.index') }}" class="group bg-white p-4 rounded-xl border border-slate-200 hover:border-blue-500 transition-all duration-300">
                    <div class="flex items-center gap-3">
                        <div class="w-8 h-8 bg-blue-50 text-blue-600 rounded-lg flex items-center justify-center group-hover:bg-blue-600 group-hover:text-white transition-colors">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path></svg>
                        </div>
                        <h4 class="text-xs font-black text-slate-800 uppercase tracking-wider">Data Mahasiswa</h4>
                    </div>
                </a>

                <a href="{{ route('absensi.index') }}" class="group bg-white p-4 rounded-xl border border-slate-200 hover:border-blue-500 transition-all duration-300">
                    <div class="flex items-center gap-3">
                        <div class="w-8 h-8 bg-blue-50 text-blue-600 rounded-lg flex items-center justify-center group-hover:bg-blue-600 group-hover:text-white transition-colors">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path></svg>
                        </div>
                        <h4 class="text-xs font-black text-slate-800 uppercase tracking-wider">Input Absensi</h4>
                    </div>
                </a>

                <a href="{{ route('absensi.laporan') }}" class="group bg-white p-4 rounded-xl border border-slate-200 hover:border-blue-500 transition-all duration-300">
                    <div class="flex items-center gap-3">
                        <div class="w-8 h-8 bg-blue-50 text-blue-600 rounded-lg flex items-center justify-center group-hover:bg-blue-600 group-hover:text-white transition-colors">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 17h2a2 2 0 002-2v-4a2 2 0 00-2-2H5a2 2 0 00-2 2v4a2 2 0 002 2h2m2 4h6a2 2 0 002-2v-4a2 2 0 00-2-2H9a2 2 0 00-2 2v4a2 2 0 002 2zm8-12V5a2 2 0 00-2-2H9a2 2 0 00-2 2v4h10z"></path>
                            </svg>
                        </div>
                        <h4 class="text-xs font-black text-slate-800 uppercase tracking-wider">Cetak Laporan</h4>
                    </div>
                </a>
            </div>
            
        </div>
    </div>
</x-app-layout>