<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Treatment extends Model
{
    use HasFactory;
    protected $table = 'treatments';
    protected $fillable = [
        'id',
        'no_berobat',
        'created_at',
        'updated_at',
        
    ];

    public function patient()
    {

      return $this->hasMany(Patient::class);
   
    }

    public function reservation()
    {

      return $this->hasMany(Reservation::class);
   
    }
    



    

   


    
}   
