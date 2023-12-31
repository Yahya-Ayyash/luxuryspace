<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class products_gallery extends Model
{
    use HasFactory;

    protected $fillable = [ 
        'product_id','url','is_featured'
    ];
}
