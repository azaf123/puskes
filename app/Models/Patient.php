<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    use HasFactory;
    protected $table = 'patients';
    protected $fillable = [
        'no_rm',
        'nama_pasien',
        'nik',
        'jenis_kelamin',
        'tempatlahirr',
        'ttl',
        'pendidikan',
        'pekerjaan',
        'ibu_istri',
        'ayah_suami',
        'suku_bangsa',
        'agama',
        'alamat',
        'no_hp',
        'goldar',
        'bahasa',
        'keluhan',
        'category_id',
        'antrean_id',
        'treatment_id',

        'created_at',
        'updated_at',
    ];
    
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function antrean()
    {
        return $this->belongsTo(Antrean::class);
    }

    public function treatment()
    {
        return $this->belongsTo(Treatment::class);
    }

    


    

    
        
}
