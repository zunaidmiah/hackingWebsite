<?php

namespace App\Http\Controllers;
use DB;
use App\Models\Card;
use App\Models\Bank;
use App\Models\Paypal;
use App\Models\Exploit;
use App\Models\checkCard;
use Illuminate\Http\Request;

class CheckCardController extends Controller
{
	public function details()
    {
        $totalCheck=null;
        $allCards = Card::all();
        $allbanks  =    Bank::all();
        $allPaypal =    Paypal::all();
        $allExploit = Exploit::all();
        $totalCheck = DB :: table('check_cards')->sum('number');
        $totalCard=count($allCards);
        $totalBank=count($allbanks);
        $totalPaypal=count($allPaypal);
        $totalExploit=count($allExploit);
        $total=[
            'cardNumber'    =>  $totalCard,
            'bankNumber'    =>  $totalBank,
            'paypalNumber'  =>  $totalPaypal,
            'exploitNumber' =>  $totalExploit,
            'checkNumber'   =>  $totalCheck
        ];
        return $total;

    }

    public function cardCheck($id)
    {	
    	$number = $this->details();
    	$card   =   new checkCard();
        $card->number   =   $id;
        $card->save();
        $item['item'] = $id ;
        return view('user.cardCheckOutput',$item,$number);
    }
}
