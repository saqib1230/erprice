<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GmoModel extends Model
{
    protected $table = 'gmo_models';

    protected $fillable = [
        'net_qty',

       
      "gmo_id" ,
      "gmo_special_id" ,
      "ref_no" ,
      "gmo_date" ,
      "consignee" ,
      "consign_address" ,
      "commodity",
      "net_qty" ,
      "gross_qty" ,
      "no_bag",
      "port_loading" ,
      "port_discharge" ,
      "gmo_note"
        
    ];
}
