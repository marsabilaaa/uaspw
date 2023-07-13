<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tamu extends Model
{
    protected $fillable = ['nama_tamu', 'alamat', 'telepon'];
    
    public function reservasis()
    {
        return $this->hasMany(Reservasi::class);
    }
}
