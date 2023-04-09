<?php

namespace App\Http\Controllers;



use Illuminate\Http\Request;
use App\Models\Contract;
class ContactController extends Controller

{
public function index_contact()
{
        return view('contact');
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

    

   Contract::create($request->all());
       
 
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