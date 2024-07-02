<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jenis extends Model
{
    protected $fillable = ['nama'];

    public function kendaraan()
    {
        return $this->hasMany(Kendaraan::class, 'jenis_kendaraan_id');
    }
}
