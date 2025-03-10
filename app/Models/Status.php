<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    use HasFactory;


    protected $fillable = [
        'name',
        // 'input_kasus_id',
        ];

    public function input_kasuses()
    {
        return $this->hasMany(inputKasus::class, 'input_kasus_id', 'status_id');
    }
}

