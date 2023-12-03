<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Youtube extends Model
{
    use HasFactory;
    protected $table = 'youtube';

    protected $fillable = [
        'product_id',
        'video_id',
       
    ];
    public function product()
    {
        return $this->belongsTo(Product::class);
    }


}
