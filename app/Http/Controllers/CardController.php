<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Card;

class CardController extends Controller
{
    // show card main page 
    public function index(){
        $username=session('admin_username');
        if($username!=null)
        {
            return view('admin.card.add-card');
        }
        else
        {
            return view('admin.loginPanel');
        }
    }

    // add card 
    public function cards_store( Request $request){
        // feiled validation 
        $this ->validate( $request, [
            'card_id' => 'required',
            'card_type' => 'required',
            'country' => 'required',
            'ex_date' => 'required',
            'bank_name'=> 'required',
            'card_number' => 'required',
            'ccv' => 'required'
         ]);
 
        Card::create([
             'card_id' => $request -> card_id,
             'card_type' => $request -> card_type,
             'country' => $request -> country,
             'ex_date' => $request -> ex_date,
             'bank_name' => $request -> bank_name,
             'card_number' =>$request-> card_number,
             'ccv' =>$request-> ccv
         ]);   
 
      // Added successfully masagge
      return redirect ()-> back() -> with('success', 'Data Added Successful'); 
    }

    /**
     * show all card page
     */
    public function showallcards(){
        $username=session('admin_username');
        if($username!=null)
        {
            $allcards = Card::all();
            return view('admin.card.card-list', compact('allcards'));
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
    /**public function Card_data_edit( $id ){
        $update_single_card_data = Card::find ( $id );
        
        return view ('admin.card.edit-card', compact('update_single_card_data'));
    }*/
    /**
     * Single Data Update 
     */
    /*public function Card_data_Update( Request $request, $id ) {
        
     $update_single_card_data = Card::find( $id );
 
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

    public function dataRemove( $id ){
        $username=session('admin_username');
        if($username!=null)
        {
            $single_data_remove = Card::find( $id );
            $single_data_remove-> delete();
            return redirect ()-> back() -> with('Data Delete Successful');
        }
        else
        {
            return view('admin.loginPanel');
        }
         
    }



}
