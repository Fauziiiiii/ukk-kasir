<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Outlet extends Model
{
    use HasFactory;

    protected $table = 'tb_outlet';
    protected $fillable = ['nama' ,'alamat', 'tlp'];

    // public function transaksi()
    // {
    //     return $this->hasMany(transa::class, 'id_outlet');
    // }
    
    
}
