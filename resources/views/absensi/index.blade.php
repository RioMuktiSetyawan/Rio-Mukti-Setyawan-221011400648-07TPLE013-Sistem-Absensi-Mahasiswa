<x-app-layout>
    <x-slot name="header">
        <h2 class="font-bold text-xl text-gray-800 leading-tight">
            {{ __('Input & Update Absensi Terintegrasi') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white p-8 shadow-xl rounded-lg border-2 border-gray-100">
                
                @if(session('success'))
                    <div class="mb-6 p-4 bg-blue-600 text-white font-bold rounded shadow-lg text-center">
                        {{ session('success') }}
                    </div>
                @endif

                <div class="mb-8 p-6 bg-slate-50 rounded-2xl border border-slate-200 flex flex-col md:flex-row items-center justify-between gap-6">
    <form id="filterForm" action="{{ route('absensi.index') }}" method="GET" class="flex items-center gap-4">
        <label class="font-black text-slate-700 uppercase text-xs tracking-widest">Pilih Tanggal:</label>
        <input type="date" name="tanggal" value="{{ $tanggal }}" 
               onchange="document.getElementById('filterForm').submit()"
               class="border-2 border-blue-100 rounded-xl font-bold text-blue-700 focus:ring-blue-500 focus:border-blue-500 shadow-sm px-4 py-2">
    </form>

    @can('admin-only')
    <form action="{{ route('absensi.destroyByDate') }}" method="POST" 
          onsubmit="return confirm('PERINGATAN! Semua data absensi pada tanggal {{ $tanggal }} akan dihapus permanen. Lanjutkan?')">
        @csrf
        @method('DELETE')
        <input type="hidden" name="tanggal" value="{{ $tanggal }}">
        <button type="submit" class="inline-flex items-center px-6 py-3 bg-red-50 text-red-600 border border-red-100 rounded-xl font-black text-[10px] uppercase tracking-[0.2em] hover:bg-red-600 hover:text-white transition-all duration-300 shadow-sm">
            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
            </svg>
            Hapus Absensi {{ $tanggal }}
        </button>
    </form>
    @endcan
</div>

                <form action="{{ route('absensi.store') }}" method="POST">
                    @csrf
                    <input type="hidden" name="tanggal" value="{{ $tanggal }}">

                    <div class="overflow-x-auto rounded-lg border border-gray-300">
                        <table class="w-full text-left">
                            <thead class="bg-indigo-600 text-black uppercase text-sm">
                                <tr>
                                    <th class="px-6 py-4 border">NIM</th>
                                    <th class="px-6 py-4 border">Nama Mahasiswa</th>
                                    <th class="px-6 py-4 border text-center">Status Kehadiran (Tanggal: {{ $tanggal }})</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($mahasiswas as $m)
                                <tr class="hover:bg-gray-50 border-b">
                                    <td class="px-6 py-4 border font-bold">{{ $m->nim }}</td>
                                    <td class="px-6 py-4 border">{{ $m->nama }}</td>
                                    <td class="px-6 py-4 border">
                                        <div class="flex justify-center gap-4">
                                            @foreach(['Hadir', 'Izin', 'Sakit', 'Alpa'] as $st)
                                            <label class="flex items-center cursor-pointer p-2 rounded hover:bg-indigo-100 transition">
                                                <input type="radio" name="absensi[{{ $m->id }}]" value="{{ $st }}"
                                                    {{ (isset($dataAbsen[$m->id]) && $dataAbsen[$m->id] == $st) ? 'checked' : '' }}
                                                    class="w-4 h-4 text-indigo-600" required>
                                                <span class="ml-2 text-sm font-semibold">{{ $st }}</span>
                                            </label>
                                            @endforeach
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                    <div class="mt-2 flex justify-center">
                        <button type="submit" class="inline-flex items-center px-4 py-2 bg-blue-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-blue-700 transition">
                            SIMPAN / UPDATE DATA TANGGAL {{ $tanggal }}
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>