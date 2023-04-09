<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ItemModel extends Model
{
    protected $table = 'inventory';

    protected $fillable = [
        "id",
        "name"
    ];
    
    
    
}