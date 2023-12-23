<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sewa extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_address';

    protected  $fillable = [
      'tanggal_sewa',
      'tanggal_pengembalian'
    ];
}
