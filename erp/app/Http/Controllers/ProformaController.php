<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProformaModel;
use App\Models\ProformaDetails;
use App\Models\Contract;

class ProformaController  extends Controller

{
public function index()
{
    $users = ProformaModel::latest()->paginate(5);
    $contracts=Contract::all();
   return view('proforma', compact('users','contracts'));
}
 
/**
 * Show the form for creating a new resource.
 *
 * @return \Illuminate\Http\Response
 */



 public function create()
{
    return view('user.create');
}

/**
 * Store a newly created resource in storage.
 *
 * @param  \Illuminate\Http\Request  $request
 * @return \Illuminate\Http\Response
 */
public function store(Request $request)
{
    $contract_id=$request->contract_number;

      $contract = Contract::find($contract_id);
      $contract_number =$contract->contract_number;
      

      $no_of_proforma=$request->no_of_proforma;
      $alphas = range('A', 'Z');
      if($no_of_proforma!='' && $no_of_proforma!=0){
     
     for($k=0;$k<$no_of_proforma;$k++){
      $invoice_number = $request->invoice_number;
      $invoice_no =$invoice_number;
      $contract_no=$contract_number."-".$alphas[$k];
      $proforma = new ProformaModel; 
      
       $proforma->proforma_date = $request->proforma_date;
        $proforma->contract_number = $request->contract_number;
        $proforma->invoice_number = $invoice_no;
          $proforma->contract_no = $contract_no;
        $proforma->buyer_name = $request->buyer_name;
        $proforma->buyer_country = $request->buyer_country;
        
        $proforma->buyer_address = $request->buyer_address;
        $proforma->exhchange_rate = $request->exhchange_rate;
        $proforma->other = $request->other;
        $proforma->terms_of_payment = $request->terms_of_payment;
        $proforma->delivery_condition = $request->delivery_condition;
        
        $proforma->means_of_transport = $request->means_of_transport;
        $proforma->shipment_period = $request->shipment_period;
        $proforma->dischange_port = $request->dischange_port;
        $proforma->trading_currency = $request->trading_currency;
    
        
        
        
        $proforma->save();
        
        


    //   ProformaModel::create($request->all());
     
       for($i=0;$i<count($request->item_id_b);$i++){
        $pdetails = new ProformaDetails; 
        $proforma_id = ProformaModel::max('id');
            $item_id= $request->item_id_b[$i];
            $origin= $request->origin_b[$i];
            $packing= $request->packing_b[$i];
            $qty= $request->quantity_b[$i];
            $unit_cost= $request->unit_cost_b[$i];
            $total= $request->total_b[$i];
if($request->buyer_country=='1'){
    $actual_cost= '0';
}else{

    $actual_cost= $request->unit_cost_b[$i];
}
$pdetails->proforma_id=$proforma_id;
$pdetails->item_id = $item_id;
$pdetails->quantity = $qty;
$pdetails->unit_price = $unit_cost;
$pdetails->actual_price = $actual_cost;
$pdetails->total_amount = $total;
$pdetails->origin = $origin;
$pdetails->packing = $packing;

$pdetails->save();
}
     }    
    
}


else{
    
     $invoice_number = $request->invoice_number;
   
      $proforma = new ProformaModel; 
      
       $proforma->proforma_date = $request->proforma_date;
        $proforma->contract_number = $request->contract_number;
        $proforma->invoice_number = $invoice_number;
        $proforma->buyer_name = $request->buyer_name;
        $proforma->buyer_country = $request->buyer_country;
        
        $proforma->buyer_address = $request->buyer_address;
        $proforma->exhchange_rate = $request->exhchange_rate;
        $proforma->other = $request->other;
        $proforma->terms_of_payment = $request->terms_of_payment;
        $proforma->delivery_condition = $request->delivery_condition;
        
        $proforma->means_of_transport = $request->means_of_transport;
        $proforma->shipment_period = $request->shipment_period;
        $proforma->dischange_port = $request->dischange_port;
        $proforma->trading_currency = $request->trading_currency;
    
        
        
        
        $proforma->save();
        
        


    //   ProformaModel::create($request->all());
     
       for($i=0;$i<count($request->item_id_b);$i++){
        $pdetails = new ProformaDetails; 
        $proforma_id = ProformaModel::max('id');
            $item_id= $request->item_id_b[$i];
            $origin= $request->origin_b[$i];
            $packing= $request->packing_b[$i];
            $qty= $request->quantity_b[$i];
            $unit_cost= $request->unit_cost_b[$i];
            $total= $request->total_b[$i];
if($request->buyer_country=='1'){
    $actual_cost= '0';
}else{

    $actual_cost= $request->unit_cost[$i];
}
$pdetails->proforma_id=$proforma_id;
$pdetails->item_id = $item_id;
$pdetails->quantity = $qty;
$pdetails->unit_price = $unit_cost;
$pdetails->actual_price = $actual_cost;
$pdetails->total_amount = $total;
$pdetails->origin = $origin;
$pdetails->packing = $packing;

$pdetails->save();
}
    
}

     return redirect()->back()->with('message', 'IT WORKS!');




                
}
 
/**
 * Display the specified resource.
 *
 * @param  \App\ProformaModel  $Proforma
 * @return \Illuminate\Http\Response
 */
public function show(ProformaModel $Proforma)
{
    return view('user.show',compact('user'));
} 
 

public function viewproforma(ProformaModel $Proforma)
{


// $result = ProformaModel::with('contract')->get();
// dd($result);
//   exit;
    $gmdata = ProformaModel::all()->toArray();
    
    
  
    return view('view-proforma',compact('gmdata'));
} 
/**
 * Show the form for editing the specified resource.
 *
 * @param  \App\ProformaModel  $Proformaedit
 * @return \Illuminate\Http\Response
 */


 public function editProforma($id)
 {

    $Proforma = ProformaModel::find($id);

    return view('editProforma', compact('Proforma'));

 }


 

/**
 * Update the specified resource in storage.
 *
* @param  \Illuminate\Http\Request  $request
     * @param  \App\ProformaModel  $Proforma
     * @return \Illuminate\Http\Response
 */
public function Proformaupdate(Request $request,  $id)
{
   $Proforma = ProformaModel::find($id);  
    $Proforma->pro_special_code =  $request->get('pro_special_code');  
    $Proforma->debitnote_date =  $request->get('debitnote_date');  
    $Proforma->contact =  $request->get('contact');  
    $Proforma->buyer =  $request->get('buyer');  
    $Proforma->buyer_address =  $request->get('buyer_address');  
    $Proforma->subject =  $request->get('subject');  
    $Proforma->contact_ref_no =  $request->get('contact_ref_no');  
    $Proforma->adv_amount =  $request->get('adv_amount');  
    $Proforma->currency =  $request->get('currency');  
    $Proforma->amount_in_word =  $request->get('amount_in_word');  
    $Proforma->note =  $request->get('note');  
      
 
    
    
    $Proforma->save();  
    

    return redirect()->back()->with('message', 'uPDATE!');
}

/**
 * Remove the specified resource from storage.
 *
 *   @param  \App\ProformaModel  $Proforma
 * @return \Illuminate\Http\Response
 */
public function destroy(User $user)
{
    $user->delete();

    return redirect()->route('user.index')
                    ->with('success','User deleted successfully');
}
}