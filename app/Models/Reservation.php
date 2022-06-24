<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;
    protected $table = 'reservations';
    protected $fillable = [
        'patient_id',
        'category_id',
        'antrean_id',
        'created_at',
        'updated_at',
        'treatment_id',
        'keluhan',
    ];

    public function patient()
    {
        return $this->belongsTo(Patient::class);
    }

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
