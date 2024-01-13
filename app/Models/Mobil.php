<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mobil extends Model
{
    use HasFactory;

    protected $table = 'cars';

    protected $primaryKey = 'id_mobil';

    protected $fillable = [
        'merek_mobil',
        'tahun',
        'warna',
        'kapasitas_penumpang',
        'gambar',
        'harga',
        'stok',
    ];

    public function sewa()
    {
        return $this->hasMany(Sewa::class, 'id_mobil');
    }
}
