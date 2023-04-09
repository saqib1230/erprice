<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hmdetails extends Model
{
    protected $table = 'hm_details';

    protected $fillable = [
        

       
      "id" ,
      "name" ,
      "value" ,
      "company_id" ,
      "user_id" ,
      "hm_id" 
    ];
}
