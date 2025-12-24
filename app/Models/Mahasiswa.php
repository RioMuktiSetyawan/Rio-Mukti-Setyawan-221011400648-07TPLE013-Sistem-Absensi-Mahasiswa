<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    public function absensis()
{
    return $this->hasMany(Absensi::class);
}
    use HasFactory;

    protected $fillable = ['nim', 'nama', 'jurusan'];
    
}