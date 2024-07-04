<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kendaraan extends Model
{
    use HasFactory;
    protected $table = 'kendaraans';

    protected $fillable = [
        'merk',
        'pemilik',
        'nopol',
        'thn_beli',
        'deskripsi',
        'jenis_kendaraan_id',
        'kapasitas_kursi',
        'rating'
    ];

    public function jenisKendaraan()
    {
        return $this->belongsTo(Jenis::class, 'jenis_kendaraan_id');
    }
    
    public function transaksi()
    {
        return $this->hasMany(Transaksi::class);
    }
}
