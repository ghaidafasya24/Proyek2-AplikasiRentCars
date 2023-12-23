<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    protected $table = 'customer';

    protected $primaryKey = 'id_customer';

    protected $fillable = [
        'nama_customer',
        'no_telp',
        'ktp',
        'email',
        'alamat',
        'nama_orang_terdekat',
        'email_darurat',
        'no_telp_darurat',
    ];
}
