<nav x-data="{ open: false }" class="bg-white border-b border-slate-100 sticky top-0 z-50 shadow-sm">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-20 items-center">
            
            <div class="flex-shrink-0 flex items-center">
                <a href="{{ route('dashboard') }}" class="flex items-center gap-3 group">
                    <div class="w-10 h-10 bg-blue-600 rounded-xl flex items-center justify-center shadow-lg shadow-blue-200 group-hover:scale-105 transition-transform">
                        <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                        </svg>
                    </div>
                    <div class="flex flex-col">
                        <span class="font-black text-lg leading-none tracking-tighter text-slate-800 uppercase italic">Absensi</span>
                        <span class="font-bold text-[10px] leading-none tracking-[0.2em] text-blue-600 uppercase">Mahasiswa</span>
                    </div>
                </a>
            </div>

        <div class="hidden sm:flex sm:items-center sm:justify-center flex-1">
    <div class="flex items-center">
        <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')" 
            class="mx-14 font-black text-[11px] uppercase tracking-[0.2em] transition-all duration-300">
            {{ __('Dashboard') }}
        </x-nav-link>
        
        <x-nav-link :href="route('mahasiswa.index')" :active="request()->routeIs('mahasiswa.index')" 
            class="mx-14 font-black text-[11px] uppercase tracking-[0.2em] transition-all duration-300">
            {{ __('Data Mahasiswa') }}
        </x-nav-link>
        
        <x-nav-link :href="route('absensi.index')" :active="request()->routeIs('absensi.index')" 
            class="mx-14 font-black text-[11px] uppercase tracking-[0.2em] transition-all duration-300">
            {{ __('Input Absensi') }}
        </x-nav-link>
        
        <x-nav-link :href="route('absensi.laporan')" :active="request()->routeIs('absensi.laporan')" 
            class="mx-14 font-black text-[11px] uppercase tracking-[0.2em] transition-all duration-300">
            {{ __('Laporan') }}
        </x-nav-link>
    </div>
</div>

            <div class="hidden sm:flex sm:items-center">
                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <button class="inline-flex items-center px-5 py-2.5 bg-slate-50 border border-slate-100 rounded-2xl text-xs font-black uppercase tracking-widest text-slate-600 hover:text-blue-600 hover:bg-blue-50 transition-all duration-200">
                            {{ Auth::user()->name }}
                            <svg class="ms-2 h-4 w-4 opacity-40" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                            </svg>
                        </button>
                    </x-slot>

                    <x-slot name="content">
                    <x-dropdown-link :href="route('profile.edit')" class="text-[11px] font-bold text-slate-600 py-2 hover:bg-slate-50 transition-colors">
                        {{ __('Akun Profil') }}
                    </x-dropdown-link>

                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <x-dropdown-link :href="route('logout')" 
                            class="text-[11px] font-bold text-red-500 py-2 hover:bg-red-50 transition-colors"
                            onclick="event.preventDefault(); 
                                    if(confirm('Apakah Anda yakin ingin keluar dari sistem?')) { 
                                        this.closest('form').submit(); 
                                    }">
                            {{ __('Log Out') }}
                        </x-dropdown-link>
                    </form>
                </x-slot>
                </x-dropdown>
            </div>

            <div class="-me-2 flex items-center sm:hidden">
                <button @click="open = ! open" class="p-2 rounded-xl text-slate-400 hover:bg-slate-100 transition">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>
    
    </nav>