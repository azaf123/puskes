<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $table = 'categories';
    protected $fillable = ['id','nama_kategori', 'ruangan', 'created_at', 'updated_at'];

    public function antrean()
    {
        return $this->hasMany(Antrean::class);
    }

    public function patient()
    {
        return $this->hasMany(Patient::class);
    }

    public function reservation()
    {
        return $this->hasMany(Reservation::class);
    }
}

