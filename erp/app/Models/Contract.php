<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\ProformaModel;
class Contract extends Model
{
    protected $table = 'contract';
    
    protected $fillable = [
           'contract_type',
           'company_id',
           'contract_number',
           'contract_date',
           'buyer_category',
           'buyer_id',
           'buyer_country',
           'trading_currency',
           'exhange_rate',
           'sps_status',
           'buyer_address'
     ];
 
    use HasFactory;
    
    
    
    
    
public function proforma()
{
return $this->hasMany(ProformaModel::class);
}
    
    
}


