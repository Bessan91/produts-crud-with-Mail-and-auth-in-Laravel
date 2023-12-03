<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Spare_part extends Model
{
    use HasFactory;
    protected $fillable = [ 'product_id','part_name','pieces_count'];
   		
}
