<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Petugas extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'nama',
        'pangkat',
        'NIP',
        'jabatan',
    ];

    public function ops(): BelongsToMany
    {
        return $this->belongsToMany(OPS::class, 'ops_petugas', 'petugas_id', 'ops_id', 'tug_petugas', 'tug_id');
    }
}
