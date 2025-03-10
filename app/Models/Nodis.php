<?php

namespace App\Models;

use App\Models\Status;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class nodis extends Model
{
    use HasFactory;

    protected $fillable= [
        'id',
        'pejabat_id',
        'nodis',
        'tanggal',
        'yth',
        'dari',
        'tanggal_1',
        'status',
        'lampiran',
        'isi',
        'isi_perihal',
        'tembusan_1',
        'tembusan_2',
    ];

    public function pejabats(): BelongsToMany
    {
        return $this->belongsToMany(Status::class, 'status_id', 'input_kasus_id');
    }
}
