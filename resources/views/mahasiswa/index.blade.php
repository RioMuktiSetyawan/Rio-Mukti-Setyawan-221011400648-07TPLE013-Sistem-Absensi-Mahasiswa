<x-app-layout>
    <x-slot name="header">
        <div class="flex flex-col md:flex-row justify-between items-center gap-4">
            <div>
                <h2 class="font-black text-2xl text-slate-800 leading-tight uppercase tracking-tight">
                    {{ __('Manajemen Mahasiswa') }}
                </h2>
                <p class="text-sm text-slate-500 font-medium">Kelola data induk mahasiswa Anda di sini.</p>
            </div>
            
            @can('admin-only')
            <a href="{{ route('mahasiswa.create') }}" class="inline-flex items-center px-6 py-3 bg-blue-600 border border-transparent rounded-2xl font-bold text-xs text-white uppercase tracking-widest hover:bg-blue-700 shadow-lg shadow-blue-200 transition duration-150">
                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M12 4v16m8-8H4"></path></svg>
                Tambah Mahasiswa
            </a>
            @endcan
        </div>
    </x-slot>

    <div class="py-12 bg-slate-50 min-h-screen">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            
            @if(session('success'))
                <div class="mb-6 p-4 bg-green-100 border-l-4 border-green-500 text-green-800 rounded-xl shadow-sm flex items-center">
                    <svg class="w-5 h-5 mr-3" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>
                    <span class="font-bold">{{ session('success') }}</span>
                </div>
            @endif

            <div class="bg-white overflow-hidden shadow-sm rounded-[2.5rem] border border-slate-200">
                <div class="overflow-x-auto">
                    <table class="w-full text-left border-separate border-spacing-0">
                        <thead>
                            <tr class="bg-slate-50">
                                <th class="px-6 py-5 text-xs font-black text-slate-400 uppercase tracking-[0.2em] border-b border-slate-100">NIM</th>
                                <th class="px-6 py-5 text-xs font-black text-slate-400 uppercase tracking-[0.2em] border-b border-slate-100">Nama Lengkap</th>
                                <th class="px-6 py-5 text-xs font-black text-slate-400 uppercase tracking-[0.2em] border-b border-slate-100">Jurusan</th>
                                
                                @can('admin-only')
                                <th class="px-6 py-5 text-xs font-black text-slate-400 uppercase tracking-[0.2em] border-b border-slate-100 text-center">Aksi</th>
                                @endcan
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-slate-50">
                            @forelse($mahasiswas as $m)
                            <tr class="hover:bg-blue-50/50 transition duration-200 group">
                                <td class="px-6 py-5">
                                    <span class="font-mono font-bold text-blue-600 bg-blue-50 px-3 py-1 rounded-lg text-sm">
                                        {{ $m->nim }}
                                    </span>
                                </td>
                                <td class="px-6 py-5 font-bold text-slate-700">
                                    {{ $m->nama }}
                                </td>
                                <td class="px-6 py-5">
                                    <div class="flex items-center text-slate-500">
                                        <svg class="w-4 h-4 mr-2 text-slate-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path></svg>
                                        {{ $m->jurusan }}
                                    </div>
                                </td>
                                
                                @can('admin-only')
                            <td class="px-6 py-5 text-center">
                                <div class="flex justify-center gap-3">
                                    <a href="{{ route('mahasiswa.edit', $m->id) }}" 
                                    class="flex items-center justify-center w-10 h-10 bg-white-50 text-indigo-600 rounded-xl hover:bg-indigo-600 hover:text-white transition-all duration-300 shadow-sm group/btn">
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path>
                                        </svg>
                                        Edit
                                    </a>
                                    
                                    <form action="{{ route('mahasiswa.destroy', $m->id) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus mahasiswa ini?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" 
                                                class="flex items-center justify-center w-10 h-10 bg-red-50 text-red-600 rounded-xl hover:bg-red-600 hover:text-white transition-all duration-300 shadow-sm group/btn">
                                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                                            </svg>
                                            Delete
                                        </button>
                                    </form>
                                </div>
                            </td>
                            @endcan
                            </tr>
                            @empty
                            <tr>
                                <td colspan="4" class="px-6 py-20 text-center">
                                    <div class="flex flex-col items-center">
                                        <svg class="w-16 h-16 text-slate-200 mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path></svg>
                                        <p class="text-slate-400 font-medium italic">Belum ada data mahasiswa yang terdaftar.</p>
                                    </div>
                                </td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>