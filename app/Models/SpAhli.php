<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SpAhli extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'petugas_id',
        'no_perintah',
        'tanggal',
        'menimbang_point',
        'dasar',
        'untuk',
        'tahun',
        'tanggal_1',
        'jabatan',
        'pejabat',
        'tembusan_1',
        'tembusan_2',
        'tembusan_3',
        'tembusan_4',
        'tembusan_5',
        'tembusan_6',
        'tembusan_7',
    ];

    public function petugas()
    {
        return $this->belongsTo(Petugas::class, 'petugas_id');
    }
}
