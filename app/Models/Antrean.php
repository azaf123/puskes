<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Antrean extends Model
{
    use HasFactory;
    protected $table = 'antreans';
    protected $fillable = [
        'no_antrean',
        'category_id',
        'status',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
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
