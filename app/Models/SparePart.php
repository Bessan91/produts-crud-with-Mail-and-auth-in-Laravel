<?php

// app/Models/SparePart.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SparePart extends Model
{
    use HasFactory;

    protected $table = 'spare_parts';

    protected $fillable = [
        'product_id',
        'part_name',
        'pieces_count',
    ];

    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id');
    }
}
