<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use App\Models\Absensi;
use App\Exports\AbsensiExport;
use Rap2hpoutre\FastExcel\FastExcel;
use Barryvdh\DomPDF\Facade\Pdf; // Jika belum ada untuk PDF
use Illuminate\Http\Request;

class AbsensiController extends Controller
{
    public function index(Request $request)
        {
            $mahasiswas = Mahasiswa::all();
            
            // Ambil tanggal dari filter, defaultnya hari ini
            $tanggal = $request->get('tanggal', date('Y-m-d'));

            // Ambil data absensi yang sudah ada di tanggal tersebut
            $dataAbsen = Absensi::where('tanggal', $tanggal)
                        ->get()
                        ->pluck('status', 'mahasiswa_id'); // Format: [mahasiswa_id => status]

            return view('absensi.index', compact('mahasiswas', 'dataAbsen', 'tanggal'));
        }
    public function laporan(Request $request)
{
    // Ambil semua mahasiswa beserta histori absensinya
    $mahasiswas = Mahasiswa::with(['absensis' => function($query) use ($request) {
        if ($request->start_date && $request->end_date) {
            $query->whereBetween('tanggal', [$request->start_date, $request->end_date]);
        }
    }])->get();

    return view('absensi.laporan', compact('mahasiswas'));
}
public function cetakExcel()
{
    $mahasiswas = \App\Models\Mahasiswa::with('absensis')->get();
    $fileName = 'Laporan-Absensi-' . date('Y-m-d') . '.csv';

    $headers = [
        "Content-type"        => "text/csv; charset=utf-8",
        "Content-Disposition" => "attachment; filename=$fileName",
        "Pragma"              => "no-cache",
        "Cache-Control"       => "must-revalidate, post-check=0, pre-check=0",
        "Expires"             => "0"
    ];

    $callback = function() use($mahasiswas) {
        $file = fopen('php://output', 'w');
        
        // Tambahkan BOM untuk UTF-8
        fprintf($file, chr(0xEF).chr(0xBB).chr(0xBF));

        // Tulis Header
        fputcsv($file, ['NIM', 'Nama Mahasiswa', 'Hadir', 'Izin', 'Sakit', 'Alpa'], ';');

        // Tulis Data
        foreach ($mahasiswas as $m) {
            fputcsv($file, [
                // Tambahkan tanda tab (\t) di depan NIM agar dianggap teks murni oleh Excel
                "\t" . $m->nim, 
                $m->nama,
                $m->absensis->where('status', 'Hadir')->count(),
                $m->absensis->where('status', 'Izin')->count(),
                $m->absensis->where('status', 'Sakit')->count(),
                $m->absensis->where('status', 'Alpa')->count(),
            ], ';');
        }
        
        fclose($file);
    };

    return response()->stream($callback, 200, $headers);
}
public function destroyByDate(Request $request)
{
    $request->validate([
        'tanggal' => 'required|date'
    ]);

    // Menghapus semua record absensi yang memiliki tanggal sesuai input
    \App\Models\Absensi::where('tanggal', $request->tanggal)->delete();

    return redirect()->back()->with('success', 'Seluruh data absensi pada tanggal ' . $request->tanggal . ' berhasil dihapus.');
}
public function cetakPdf()
{
    $mahasiswas = Mahasiswa::with('absensis')->get();
    
    // Pastikan nama view sesuai: absensi/cetak_pdf.blade.php
    $pdf = Pdf::loadView('absensi.cetak_pdf', compact('mahasiswas'));
    
    return $pdf->download('Laporan-Absensi-Mahasiswa.pdf');
}
   public function store(Request $request)
        {
            $request->validate([
                'tanggal' => 'required|date',
                'absensi' => 'required|array',
            ]);

            foreach ($request->absensi as $mahasiswa_id => $status) {
                if ($status) {
                    Absensi::updateOrCreate(
                        ['mahasiswa_id' => $mahasiswa_id, 'tanggal' => $request->tanggal],
                        ['status' => $status]
                    );
                }
            }

            return redirect()->back()->with('success', 'Data absensi tanggal ' . $request->tanggal . ' berhasil diperbarui.');
        }
            public function resetAbsensi()
            {
                \App\Models\Absensi::truncate();
                
                // Pesan ini yang akan ditangkap oleh Blade
                return redirect()->back()->with('success_reset', 'SELURUH DATA ABSENSI TELAH DIHAPUS DAN KEMBALI KE NOL!');
            }
}