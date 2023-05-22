<?php

namespace App\Http\Controllers;
use App\Models\Paypal;
use Illuminate\Http\Request;

class PaypalController extends Controller
{
    // show card main page 
    public function index(){
        $username=session('admin_username');
        if($username!=null)
        {
            return view('admin.paypal.add-paypal');
        }
        else
        {
            return view('admin.loginPanel');
        }
        
    }

    // add card 
    public function paypal_account_store( Request $request){
        // feiled validation 
        $this ->validate( $request, [
            'paypal_user_name' => 'required',
            'paypal_password' => 'required',
            'country' => 'required',
            'price'   => 'required'
         ]);
 
        Paypal::create([
             'paypal_user_name' => $request -> paypal_user_name,
             'paypal_password' => $request -> paypal_password,
             'country' => $request -> country,
             'price' => $request -> price
         ]);   
 
      // Added successfully masagge
      return redirect ()-> back() -> with('success', 'Data Added Successful'); 
    }

    /**
     * show all card page
     */
    public function showall_payapl_list(){
        $username=session('admin_username');
        if($username!=null)
        {
            $allpaypals = Paypal::all();
            return view('admin.paypal.list-paypal', compact('allpaypals'));
        }
        else
        {
            return view('admin.loginPanel');
        }
        
    }



    /**
     * Single card value update 
     * 
     */
    /**public function bank_data_edit( $id ){
        $update_single_bank_data = Bank::find ( $id );
        
        return view ('admin.bank.bank-list', compact('update_single_bank_data'));
    }*/
    /**
     * Single Data Update 
     */
    /**public function bank_data_Update( Request $request, $id ) {
        
     $update_single_card_data = Bank::find( $id );
 
     $update_single_card_data ->card_id = $request->card_id;
     $update_single_card_data ->card_type = $request->card_type;
     $update_single_card_data ->country = $request->country;
     $update_single_card_data ->ex_date = $request->ex_date;
     $update_single_card_data ->bank_name = $request->bank_name;
     $update_single_card_data ->update();
 
      // Update successfully masagge
      return redirect ()-> back() -> with('success', 'Data Update Successful'); 
 
     }*/

    /**
     * Single card Data Remove from crud table
     */

    public function paypal_data_Remove( $id ){
        $username=session('admin_username');
        if($username!=null)
        {
            $single_data_remove = Paypal::find( $id );
            $single_data_remove-> delete();
            return redirect ()-> back() -> with('Data Delete Successful');
        }
        else
        {
            return view('admin.loginPanel');
        }
         
    }

}
