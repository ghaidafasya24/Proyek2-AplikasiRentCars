<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengembalian extends Model
{
    use HasFactory;
    protected $table = 'pengembalian';

    protected $primaryKey = 'id_pengembalian';

    protected $fillable = [
        'id_transaksi',
        'jumlah'
    ];

    public function sewa()
    {
        return $this->hasOne(Sewa::class, 'id_sewa');
    }
    
    public function transaksi()
    {
        return $this->belongsTo(Transaksi::class, 'id_transaksi');
    }
}
