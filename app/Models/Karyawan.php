<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Karyawan extends Model
{
    protected $fillable = ['nama', 'jabatan_id'];

    public function jabatan()
    {
        return $this->belongsTo(Jabatan::class);
    }
}
