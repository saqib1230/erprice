<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProformaDetails extends Model
{
  
    protected $table = 'proforma_details';

    protected $fillable = [
        "proforma_id",
        "item_id",
        "origin",
        "packing",
        "quantity",
        "unit_price",
        "actual_price",
        "total_amount"
    ];
}
