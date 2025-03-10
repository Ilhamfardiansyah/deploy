<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class OPS extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'petugas_id',
        'noSPOps',
        'tanggal',
        'menimbang_point',
        'untuk_1',
        'tanggal_2',
        'tanggal_3',
        'tahun',
        'bulan',
        'tahun2',
        'kepala_kejaksaan',
    ];

    public function petugas(): BelongsToMany
    {
        return $this
            ->belongsToMany(Petugas::class, 'ops_petugas', 'ops_id', 'petugas_id');
    }
}
