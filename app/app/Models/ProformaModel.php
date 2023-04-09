<?php

namespace App\Models;
use App\Models\Contract;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProformaModel extends Model
{
    protected $table = 'proforma';

    protected $fillable = [
        "proforma_date",
        "buyer_country",
        "invoice_number",
        "contract_number",
        "buyer_name",
        "buyer_address",
        "exhchange_rate",
        "other",
        "terms",
        "delivery_condition",
        "means_of_transport",
        "shipment_period",
        "discharge_port",
        "trading_currency"
    ];
    
    
    
    
public function contract()
{
return $this->belongsTo(Contract::class);
}

    
    
}
