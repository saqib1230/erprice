<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\HeavymetalModel;
use App\Models\Contract;
use App\Models\ProformaModel;
use App\Models\ProformaDetails;
use App\Models\SignatoryModel;
use App\Models\BuyerModel;
use App\Models\ItemModel;
use App\Models\Hmparameter;

use App\Models\Hmdetails;


class heavymetalController extends Controller

{
public function index()
{
    
    function calculateFiscalYearForDate($month)
{
if($month > 6)
{
  $y = date('y', strtotime('+1 year'));
  $pt = date('y');
  $fy = $pt.""."-".$y."";
}
else
{
$y = date('y', strtotime('-1 year'));
$pt = date('y');
$fy = $y.""."-".$pt."";
}
return $fy;
}

$curr_date_month = date(now());
 $calculate_fiscal_year_for_date = calculateFiscalYearForDate($curr_date_month);

   $contracts=Contract::all();
    $proformas =ProformaModel::all();
     $signatorys =SignatoryModel::all();



 
$res["signatorys"]=$signatorys;
 $res["contracts"]=$contracts;
  $res["proformas"]=$proformas;
 $res["fiscalyear"] =$calculate_fiscal_year_for_date;
 $res["fiscalyear"]; 
 
   return view('heavymetal',$res);
   

}
 public function getconsingee($id = 0)
{
    $condata = Contract::where('id',$id)->first();
   $condataa = $condata['buyer_id'];
       $dataconsignee1 = BuyerModel::where('id',$condataa)->first();
 $proformadata  = ProformaModel::where('contract_number',$id)->first();
        $prodetail = ProformaDetails::select('item_id')->where('proforma_id', $proformadata->id)->get(); 
    $items =array();
    $itemsname = array();
    $countprof = count($prodetail);
    
 for($i=0; $i<$countprof; $i++){
     
      $items[]  = $prodetail[$i]['item_id'];
     
     
 }
     

    $itemname = ItemModel::select("name")
                    ->whereIn('id', $items)
                    ->get();
                    
        $countitem = count($itemname);
            
    for($i=0; $i<$countitem; $i++){
     
      $itemsname[]  = $itemname[$i]['name'];
     
     
 }
   $itemconcat = implode(',',$itemsname);


    $dataconsignee = collect($dataconsignee1);
  
    $dataconsignee->put('items', $itemconcat);
      
$dataconsignee->all();
//dd($dataconsignee);
    return response()->json($dataconsignee);
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

 $userid = Auth::id();

   //dd($request);

     HeavymetalModel::create($request->all());
        function calculateFiscalYearForDate($month)
{
if($month > 6)
{
  $y = date('y', strtotime('+1 year'));
  $pt = date('y');
  $fy = $pt.""."-".$y."";
}
else
{
$y = date('y', strtotime('-1 year'));
$pt = date('y');
$fy = $y.""."-".$pt."";
}
return $fy;
}

$curr_date_month = date(now());
 $calculate_fiscal_year_for_date = calculateFiscalYearForDate($curr_date_month);


   $hmid = HeavymetalModel::max('id');
$heavyid = "HVM/".$calculate_fiscal_year_for_date."/".$hmid;

     $page = HeavymetalModel::find($hmid);
     
      $contractid= $request->contract_id;
       $condata = Contract::where('id',$contractid)->first();
   $condataa = $condata['buyer_id'];
   
   //$buyerid =  Contract::select('buyer_id')->where('id', $contractid)->get();
// Make sure you've got the Page model

    $page->heavy_id = $heavyid;
    $page->buyer_id = $condataa;
    $page->user_id = $userid;
    $page->save();



       for($i=0;$i<count($request->name);$i++){
        $hmdetails = new Hmdetails; 
        
     
            $name= $request->name[$i];
            $value= $request->value[$i];

$hmdetails->name = $name;
$hmdetails->value = $value;
$hmdetails->company_id = 1;
$hmdetails->user_id = 1;
$hmdetails->hm_id = $hmid;


$hmdetails->save();
}

      for($i=0;$i<count($request->namep);$i++){
        $hmdetails = new Hmparameter; 
        
     
            $name= $request->namep[$i];
            $value= $request->value2[$i];

$hmdetails->name = $name;
$hmdetails->value = $value;
$hmdetails->company_id = 1;
$hmdetails->user_id = 1;
$hmdetails->hm_id = $hmid;


$hmdetails->save();
}







     return redirect()->back()->with('message', 'IT WORKS!');




                
}
 
/**
 * Display the specified resource.
 *
 * @param  \App\HeavymetalModel  $heavymetal
 * @return \Illuminate\Http\Response
 */
public function show(HeavymetalModel $heavymetal)
{
    return view('user.show',compact('user'));
} 
 

public function viewheavymetal(HeavymetalModel $heavymetal)
{

  //  $gmdata = HeavymetalModel::all()->toArray();
    

$gmdata = HeavymetalModel::join('buyer', 'buyer.id', '=', 'heavy_models.buyer_id')->join('contract', 'contract.id', '=', 'heavy_models.contract_id')->join('proforma', 'proforma.id', '=', 'heavy_models.pfi_no')->join('signatory', 'signatory.id', '=', 'heavy_models.signatory')->join('users', 'users.id', '=', 'heavy_models.user_id')->get(['buyer.name as bname', 'contract.contract_number', 'proforma.contract_no','heavy_models.*','signatory.name as signame','users.name as uname']);

    return view('viewheavymetal',compact('gmdata'));
} 
/**
 * Show the form for editing the specified resource.
 *
 * @param  \App\HeavymetalModel  $id
 * @return \Illuminate\Http\Response
 */


 public function editheavymetal($id)
 {


   $contracts=Contract::all();
    $proformas =ProformaModel::all();
     $signatorys =SignatoryModel::all();

 $hmparameters =  Hmparameter::where('hm_id',$id)->get(); 
 $hmdetails =  Hmdetails::where('hm_id',$id)->get();
 
    $heavymetal = HeavymetalModel::find($id);
         $contractid= $heavymetal->contract_id;
       $condata = Contract::where('id',$contractid)->first();
   $condataa = $condata['buyer_id'];
$buyerdata = BuyerModel::where('id',$condataa)->first();
 
$res["signatorys"]=$signatorys;
 $res["contracts"]=$contracts;
  $res["proformas"]=$proformas;
   $res["heavymetal"]=$heavymetal;
  $res["hmparticulars"]=$hmdetails;
 $res["hmparameters"]=$hmparameters;
$res["buyerdata"]=$buyerdata;

 
 //dd($hmparameters);
   return view('.editheavymetal',$res)->with('no', 1);
   
   

    

 }


 

/**
 * Update the specified resource in storage.
 *
* @param  \Illuminate\Http\Request  $request
     * @param  \App\HeavymetalModel  $heavymetal
     * @return \Illuminate\Http\Response
 */
public function heavymetalupdate(Request $request,  $id)
{
   $heavymetal = HeavymetalModel::find($id);  
    $heavymetal->heavymetal_note =  $request->get('heavymetal_note');  
    $heavymetal->heavymetal_special_id =  $request->get('heavymetal_special_id');  
    $heavymetal->ref_no =  $request->get('ref_no');  
    $heavymetal->heavymetal_date =  $request->get('heavymetal_date');  
    $heavymetal->consignee =  $request->get('consignee');  
    $heavymetal->consign_address =  $request->get('consign_address');  
    $heavymetal->commodity =  $request->get('commodity');  
    $heavymetal->net_qty =  $request->get('net_qty');  
    $heavymetal->gross_qty =  $request->get('gross_qty');  
    $heavymetal->no_bag =  $request->get('no_bag');  
    $heavymetal->port_loading =  $request->get('port_loading');  
    $heavymetal->port_discharge =  $request->get('port_discharge');  
    $heavymetal->heavymetal_id =  $request->get('heavymetal_id');  
        $heavymetal->heavy_id =  $request->get('heavy_id');  
    $heavymetal->heavymetal_note =  $request->get('heavymetal_note');  
 
    
    
    $heavymetal->save();  
    

    return redirect()->back()->with('message', 'uPDATE!');
}

/**
 * Remove the specified resource from storage.
 *
 *   @param  \App\HeavymetalModel  $heavymetal
 * @return \Illuminate\Http\Response
 */
public function destroy(User $user)
{
    $user->delete();

    return redirect()->route('user.index')
                    ->with('success','User deleted successfully');
}
}
