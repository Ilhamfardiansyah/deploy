<?php

namespace App\Models;

use App\Models\Nodis;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Pejabat extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'nama',
        'pangkat',
        'jabatan',
        'nip',
    ];

    public function nodis()
    {
        return $this->belongsToMany(Nodis::class, 'nodis_id');
    }

}
