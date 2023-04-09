<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DnModel;
class DnController extends Controller

{
public function index()
{
  
 return view('dnform');
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

     DnModel::create($request->all());
       

     return redirect()->back()->with('message', 'IT WORKS!');




                
}
 
/**
 * Display the specified resource.
 *
 * @param  \App\DnModel  $dn
 * @return \Illuminate\Http\Response
 */
public function show(DnModel $dn)
{
    return view('user.show',compact('user'));
} 
 

public function viewdn(DnModel $dn)
{

    $gmdata = DnModel::all()->toArray();
  
    return view('view-dn',compact('gmdata'));
} 
/**
 * Show the form for editing the specified resource.
 *
 * @param  \App\DnModel  $dnedit
 * @return \Illuminate\Http\Response
 */


 public function editdn($id)
 {

    $dn = DnModel::find($id);

    return view('editdn', compact('dn'));

 }


 

/**
 * Update the specified resource in storage.
 *
* @param  \Illuminate\Http\Request  $request
     * @param  \App\DnModel  $dn
     * @return \Illuminate\Http\Response
 */
public function dnupdate(Request $request,  $id)
{
   $dn = DnModel::find($id);  
    $dn->dn_note =  $request->get('dn_note');  
    $dn->dn_special_id =  $request->get('dn_special_id');  
    $dn->ref_no =  $request->get('ref_no');  
    $dn->dn_date =  $request->get('dn_date');  
    $dn->consignee =  $request->get('consignee');  
    $dn->consign_address =  $request->get('consign_address');  
    $dn->commodity =  $request->get('commodity');  
    $dn->net_qty =  $request->get('net_qty');  
    $dn->gross_qty =  $request->get('gross_qty');  
    $dn->no_bag =  $request->get('no_bag');  
    $dn->port_loading =  $request->get('port_loading');  
    $dn->port_discharge =  $request->get('port_discharge');  
    $dn->dn_id =  $request->get('dn_id');  
    $dn->dn_note =  $request->get('dn_note');  
 
    
    
    $dn->save();  
    

    return redirect()->back()->with('message', 'uPDATE!');
}

/**
 * Remove the specified resource from storage.
 *
 *   @param  \App\DnModel  $dn
 * @return \Illuminate\Http\Response
 */
public function destroy(User $user)
{
    $user->delete();

    return redirect()->route('user.index')
                    ->with('success','User deleted successfully');
}
}
