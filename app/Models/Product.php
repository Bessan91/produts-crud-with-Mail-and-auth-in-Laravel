<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;	

    protected $fillable = [ 'equipment_type','manufacturer','model','serial_number','expected_life_time'];

    

    public function maintenances()
    {
        return $this->hasMany(Maintenance::class);
    }

    public function youtube()
    {
        return $this->hasMany(Youtube::class);
    }
    

}


