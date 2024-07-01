<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kendaraan extends Model
{
    use HasFactory;

    protected $fillable = ['id', 'merk', 'pemilik', 'nopol', 'thn_beli', 'deskripsi', 'jenis_kendaraan', 'kapasitas_kursi', 'rating'];

    public function jenisKendaraan()
    {
        return $this->belongsTo(Kendaraan::class, 'jenis_kendaraan_id');
    }
}

