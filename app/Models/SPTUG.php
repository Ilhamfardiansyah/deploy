<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class SPTUG extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'petugas_id',
        'NoSp_tug',
        'tanggal',
        'menimbang_point',
        'untuk_1',
        'tanggal_1',
        'tanggal_2',
        'bulan',
        'tahun',
        'kepala_kejaksaan',
    ];

    public function petugas(): BelongsToMany
    {
        return $this->belongsToMany(Petugas::class, 'tug_petugas', 'tug_id', 'petugas_id');
    }
}
