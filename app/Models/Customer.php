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
        'id_user',
        'ktp',
        'email',
        'alamat',
        'nama_orang_terdekat',
        'email_darurat',
        'no_telp_darurat',
    ];

    
    public function user()
    {
        return $this->belongsTo(User::class, 'id_user','id_user');
    }
    
    public function sewa()
    {
        return $this->hasMany(Sewa::class, 'id_customer');
    }
}
