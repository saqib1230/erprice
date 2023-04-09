<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HeavymetalModel extends Model
{
    protected $table = 'heavy_models';

    protected $fillable = [
        

       
      "id" ,
      "heavy_note1" ,
      "heavy_special_id" ,
      "ref_no" ,
      "heavy_date" ,
      "contract_id" ,
      "pfi_no",
       "closingline" ,
       "conventional" ,
         "signatory",
         "company_id" ,
         "user_id" ,
         "heavy_id",
     
     
         "buyer_id",
      
      "heavy_note2"
        
    ];
}
