<?php

namespace App\Models;

use App\Models\Status;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class inputKasus extends Model
{
    use HasFactory;

    protected $fillable = [
        'nomor_administrasi',
        'surat_permohonan',
        'sptug',
        'spops',
        'permohonan_laporan',
        'nodis_laporan',
        'penunjuk_ahli',
        'sp_penunjuk_ahli',
        'ahli_p9',
        'sp_panggilan',
	    'panggilan_sidang',
        'sp_ahli',
        'ahli_ditunjuk',
        'status',
        'status_id',
    ];

    public function statuses()
    {
        return $this->belongsTo(Status::class, 'status_id');
    }
}
