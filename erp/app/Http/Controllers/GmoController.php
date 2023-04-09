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
use App\Models\Gmodetails;
use App\Models\GmoModel;

class GmoController extends Controller

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
 
 
 return view('gmoform',$res);
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

    // dd($request);

     GmoModel::create($request->all());
       

     return redirect()->back()->with('message', 'IT WORKS!');




                
}
 
/**
 * Display the specified resource.
 *
 * @param  \App\GmoModel  $gmo
 * @return \Illuminate\Http\Response
 */
public function show(GmoModel $gmo)
{
    return view('user.show',compact('user'));
} 
 

public function viewgmo(GmoModel $gmo)
{

    $gmdata = GmoModel::all()->toArray();
  
  
    return view('view-gmo',compact('gmdata'));
} 
/**
 * Show the form for editing the specified resource.
 *
 * @param  \App\GmoModel  $gmoedit
 * @return \Illuminate\Http\Response
 */


 public function editgmo($id)
 {

    $gmo = GmoModel::find($id);

    return view('editgmo', compact('gmo'));

 }


 

/**
 * Update the specified resource in storage.
 *
* @param  \Illuminate\Http\Request  $request
     * @param  \App\GmoModel  $gmo
     * @return \Illuminate\Http\Response
 */
public function gmoupdate(Request $request,  $id)
{
   $gmo = GmoModel::find($id);  
    $gmo->gmo_note =  $request->get('gmo_note');  
    $gmo->gmo_special_id =  $request->get('gmo_special_id');  
    $gmo->ref_no =  $request->get('ref_no');  
    $gmo->gmo_date =  $request->get('gmo_date');  
    $gmo->consignee =  $request->get('consignee');  
    $gmo->consign_address =  $request->get('consign_address');  
    $gmo->commodity =  $request->get('commodity');  
    $gmo->net_qty =  $request->get('net_qty');  
    $gmo->gross_qty =  $request->get('gross_qty');  
    $gmo->no_bag =  $request->get('no_bag');  
    $gmo->port_loading =  $request->get('port_loading');  
    $gmo->port_discharge =  $request->get('port_discharge');  
    $gmo->gmo_id =  $request->get('gmo_id');  
    $gmo->gmo_note =  $request->get('gmo_note');  
 
    
    
    $gmo->save();  
    

    return redirect()->back()->with('message', 'uPDATE!');
}

/**
 * Remove the specified resource from storage.
 *
 *   @param  \App\GmoModel  $gmo
 * @return \Illuminate\Http\Response
 */
public function destroy(User $user)
{
    $user->delete();

    return redirect()->route('user.index')
                    ->with('success','User deleted successfully');
}
}
