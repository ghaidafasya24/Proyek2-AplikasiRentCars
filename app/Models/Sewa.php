<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sewa extends Model
{
  use HasFactory;
  protected $table = 'sewa';

  protected $primaryKey = 'id_sewa';

  protected  $fillable = [
    'tanggal_sewa',
    'tanggal_pengembalian',
    'waktu_pengembalian',
    'lokasi_pengambilan',
    'id_mobil',
    'id_customer',
  ];

  public function customer()
  {
    return $this->belongsTo(Customer::class, 'id_customer');
  }

  public function mobil()
  {
    return $this->belongsTo(Mobil::class, 'id_mobil');
  }

  public function transaksi()
  {
    return $this->hasOne(Transaksi::class, 'id_sewa');
  }
}
