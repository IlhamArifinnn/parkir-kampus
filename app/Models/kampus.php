<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kampus extends Model
{
    use HasFactory;

    protected $fillable = ['id', 'nama', 'alamat'];

    public function areaParkirs()
    {
        return $this->hasMany(AreaParkir::class);
    }
}
