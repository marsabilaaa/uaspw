<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    protected $primaryKey = 'hotel_id';  
    protected $fillable = ['nama_hotel', 'alamat', 'telepon'];
    
    public function kamars()
    {
        return $this->hasMany(Kamar::class);
    }
}
