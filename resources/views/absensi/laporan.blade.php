<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Laporan Rekapitulasi Absensi') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
                
                <div class="flex flex-col md:flex-row justify-between items-center mb-6 gap-4">
                    <div>
                        <h3 class="text-lg font-bold text-gray-700">Rekap Kehadiran Mahasiswa</h3>
                        <p class="text-sm text-gray-500">Seluruh data absensi yang tercatat di sistem.</p>
                    </div>
                    
                    <div class="flex gap-2">
                        <a href="{{ route('absensi.pdf') }}" class="inline-flex items-center px-4 py-2 bg-red-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-red-700 transition">
                            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21h10a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 3H7a2 2 0 00-2 2v14a2 2 0 002 2z"></path>
                            </svg>
                            Cetak PDF
                        </a>
                        
                        <a href="{{ route('absensi.excel') }}" class="inline-flex items-center px-4 py-2 bg-blue-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-blue-700 transition">
                            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 17v-2m3 2v-4m3 4v-6m2 10H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                            </svg>
                            Ekspor Excel
                        </a>
                        
                    </div>
                </div>
                @if(session('success_reset'))
<div class="max-w-md mx-auto mb-6">
    <div class="bg-red-100 border-l-4 border-red-600 p-4 shadow-md rounded-r-lg animate-pulse">
        <div class="flex items-center">
            <div class="flex-shrink-0">
                <svg class="h-6 w-6 text-red-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                </svg>
            </div>
            <div class="ml-3">
                <p class="text-sm font-black text-red-800 uppercase tracking-wider">
                    {{ session('success_reset') }}
                </p>
            </div>
        </div>
    </div>
</div>
@endif

                <hr class="mb-6 border-gray-200">

                <div class="overflow-x-auto border rounded-lg">
                    <table class="w-full text-sm text-left text-gray-500">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 border-b">
                            <tr>
                                <th class="px-6 py-4 font-bold">NIM</th>
                                <th class="px-6 py-4 font-bold">Nama Mahasiswa</th>
                                <th class="px-6 py-4 text-center font-bold text-green-600 bg-green-50">Hadir</th>
                                <th class="px-6 py-4 text-center font-bold text-blue-600 bg-blue-50">Izin</th>
                                <th class="px-6 py-4 text-center font-bold text-yellow-600 bg-yellow-50">Sakit</th>
                                <th class="px-6 py-4 text-center font-bold text-red-600 bg-red-50">Alpa</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-200">
                            @forelse($mahasiswas as $m)
                            <tr class="bg-white hover:bg-gray-50">
                                <td class="px-6 py-4 font-medium text-gray-900">{{ $m->nim }}</td>
                                <td class="px-6 py-4">{{ $m->nama }}</td>
                                <td class="px-6 py-4 text-center font-semibold text-green-700 bg-green-50/30">
                                    {{ $m->absensis->where('status', 'Hadir')->count() }}
                                </td>
                                <td class="px-6 py-4 text-center font-semibold text-blue-700 bg-blue-50/30">
                                    {{ $m->absensis->where('status', 'Izin')->count() }}
                                </td>
                                <td class="px-6 py-4 text-center font-semibold text-yellow-700 bg-yellow-50/30">
                                    {{ $m->absensis->where('status', 'Sakit')->count() }}
                                </td>
                                <td class="px-6 py-4 text-center font-semibold text-red-700 bg-red-50/30">
                                    {{ $m->absensis->where('status', 'Alpa')->count() }}
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="6" class="px-6 py-10 text-center text-gray-400 italic">
                                    Belum ada data absensi yang tercatat.
                                </td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
                <div class="mt-12 flex flex-col items-center justify-center p-8 bg-gray-50 border-2 border-dashed border-gray-300 rounded-2xl">
    <div class="text-center mb-4">
           </div>
</div>

                <div class="mt-4 text-xs text-gray-400 italic">
            * Data laporan ini dihasilkan secara otomatis oleh sistem pada {{ \Carbon\Carbon::now('Asia/Jakarta')->format('d M Y, H:i') }}
                </div>
            </div>
        </div>
    </div>
    <script>
    setTimeout(function() {
        let alert = document.querySelector('.animate-pulse');
        if(alert) {
            alert.style.display = 'none';
        }
    }, 5000); // Pesan hilang setelah 5 detik
</script>
    
</x-app-layout>