<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kamar extends Model
{
    protected $fillable = ['hotel_id', 'nomor_kamar', 'jenis_kamar', 'harga'];

    public function hotel()
    {
        return $this->belongsTo(Hotel::class);
    }
    
    public function reservasis()
    {
        return $this->hasMany(Reservasi::class);
    }
}
