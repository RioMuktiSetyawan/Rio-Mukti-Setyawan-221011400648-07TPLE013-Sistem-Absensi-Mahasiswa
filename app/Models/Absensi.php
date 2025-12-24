<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Absensi extends Model
{
    use HasFactory;

    // Tambahkan baris ini agar kolom bisa diisi
    protected $fillable = ['mahasiswa_id', 'tanggal', 'status'];

    // Relasi ke model Mahasiswa (opsional tapi sangat berguna untuk laporan nanti)
    public function mahasiswa()
    {
        return $this->belongsTo(Mahasiswa::class);
    }
}