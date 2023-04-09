<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SignatoryModel extends Model
{
    protected $table = 'signatory';

    protected $fillable = [
     

       
      "id" ,
      "name" ,
      "designation" ,
      "image" ,
      "company_id" 
        
    ];
}
