<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;

    protected $fillable = [
        'tanggal', 'mulai', 'akhir', 'keterangan', 'biaya', 'kendaraan_id', 'area_parkir_id'
    ];

    protected $casts = [
        'tanggal' => 'date',
        'mulai' => 'datetime',
        'akhir' => 'datetime',
        'biaya' => 'double',
    ];

    public function kendaraan()
    {
        return $this->belongsTo(Kendaraan::class);
    }

    public function areaParkir()
    {
        return $this->belongsTo(AreaParkir::class);
    }
}