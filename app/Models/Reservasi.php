<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Reservasi extends Model
{
    protected $fillable = ['tamu_id', 'kamar_id', 'tanggal_checkin', 'tanggal_checkout'];

    public function tamu()
    {
        return $this->belongsTo(Tamu::class);
    }
    
    public function kamar()
    {
        return $this->belongsTo(Kamar::class);
    }
}
