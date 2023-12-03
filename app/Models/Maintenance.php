<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Maintenance extends Model
{
    use HasFactory;

    protected $fillable = ['product_id', 'maintenance_period', 'maintenance_type', 'maintenance_attachment'];

    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id');
    }
}

