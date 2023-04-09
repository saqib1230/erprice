<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BuyerModel extends Model
{
    protected $table = 'buyer';

    protected $fillable = [
     

       
      "id" ,
      "name" ,
      "contact_no" ,
      "address" ,
      "company_id" 
        
    ];
}
