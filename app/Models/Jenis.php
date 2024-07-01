<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jenis extends Model
{
    use HasFactory;

    protected $fillable = ['id', 'nama'];

    public function kendaraans()
    {
        return $this->hasMany(Kendaraan::class, 'jenis_kendaraan_id');
    }
}
