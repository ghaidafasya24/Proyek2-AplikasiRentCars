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
      'lokasi_pengambilan',
      'id_customer',
      'id_mobil',
    ];

    public function customer()
    {
        return $this->belongsTo(Customer::class, 'id_customer');
    }
}
