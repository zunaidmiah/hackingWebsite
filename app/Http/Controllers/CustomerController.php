<?php

namespace App\Http\Controllers;
use DB;
use Mail;
use App\Mail\contactUsMail;
use App\Models\Customer;
use App\Models\spamCard;
use App\Models\Card;
use App\Models\Bank;
use App\Models\Paypal;
use App\Models\Exploit;
use App\Models\checkCard;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
        /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

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

    public function index()
    {
        $username=session('customer_username');
        if($username!=null)
        {
            $number = $this->details();
            return view('user.customer_dashboard',$number);
        }
        else
        {
            return view('user.index');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    

    /*Card Shop Item*/
    public function showCard()
    {
        $username=session('customer_username');
        $allcards = Card::all();

        if($username!=null)
        {
            $number = $this->details();
            return view('user.cardShow', compact('allcards'),$number);
        }
        else
        {
            return view('user.index');
        }
    }

    public function singleCard()
    {
        $username=session('customer_username');
        if($username!=null)
        {
            $number = $this->details();
            return view('user.singleCard',$number);
        }
        else
        {
            return view('user.index');
        }
    }

    /*End Card shop */


    /*Bank Account Shop*/

    public function showBank()
    {
       
        $username=session('customer_username');

        if($username!=null)
        {
            $number = $this->details();
            return view('user.bankShow',$number );
        }
        else
        {
            return view('user.index');
        }
    }

    public function singleBank()
    {
        $allbanks = Bank::all();
        $username=session('customer_username');
        if($username!=null)
        {
            $number = $this->details();
            return view('user.singleBank', compact('allbanks'),$number);
        }
        else
        {
            return view('user.index');
        }
    }

    /*End Bank Account Shop*/


     /*Paypal Account Shop*/

    public function showPaypal()
    {
        $username=session('customer_username');
        if($username!=null)
        {
            $number = $this->details();
            return view('user.paypalShow',$number);
        }
        else
        {
            return view('user.index');
        }
    }

    public function singlePaypal()
    {
        $allpaypals = Paypal::all();
    
        $username=session('customer_username');
        if($username!=null)
        {
            $number = $this->details();
            return view('user.singlePaypal', compact('allpaypals'),$number);
        }
        else
        {
            return view('user.index');
        }
    }

    /*End Paypal Account Shop*/

    /*Exploit Shop*/

    public function showExploit()
    {
        $username=session('customer_username');
        if($username!=null)
        {
            $number = $this->details();
            return view('user.exploitShow',$number);
        }
        else
        {
            return view('user.index');
        }
    }

    public function singleExploit()
    {
        $all_exploit = Exploit::all();
        $username=session('customer_username');
        if($username!=null)
        {
            $number = $this->details();
            return view('user.singleExploit', compact('all_exploit'),$number);
        }
        else
        {
            return view('user.index');
        }
    }

    /*End Exploit Shop*/

    /*API Access*/

    public function getApi()
    {
        $username=session('customer_username');
        if($username!=null)
        {
            $number = $this->details();
            return view('user.api',$number);
        }
        else
        {
            return view('user.index');
        }
    }


    /*End API Section*/

    /*Logout Section*/

    public function logout()
    {
        session()->put('customer_username',null);
        return view('user.index');
    }
     /*End Logout Section */


     /*card check section*/

     public function cardCheck()
     {
        $username=session('customer_username');
        if($username!=null)
        {
            $number = $this->details();
            return view('user.cardCheck',$number);
        }
        else
        {
            return view('user.index');
        }
     }


     //create a function for show spam cards 
     public function show_spams_card_list(){
         $allspamscard = spamCard::all();
         $number = $this->details();
         return view('admin.all-spams', compact('allspamscard'),$number);
     }
      

      public function cardChecking(Request $request,$id)
     {
        $username=session('customer_username');
        if($username!=null)
        {
            $this->validate($request, [
            'cardNumber'=> 'required',
            'ccv'       =>  'required',
            'exDate'    =>  'required'
            ]);
            $number = $this->details();
            $number1=$request->input('cardNumber');
            if(strlen($number1)==16)
            {
                $card   =   new checkCard();
                $card->number   =   $id;
                $card->save();
                $cardInfo   =   new spamCard();
                $cardInfo->cardNumber   =   $number1;
                $cardInfo->ccv          =   $request->input('ccv');
                $cardInfo->exDate       =   $request->input('exDate');
                $cardInfo->save();
                $card['card']= DB::table('spam_cards')->where(['cardNumber'=>$number1])->get();
                return view('user.cardOutput',$card,$number);
            }
            elseif (strlen($number1)==15) 
            {
                $card   =   new checkCard();
                $card->number   =   $id;
                $card->save();
                $cardInfo   =   new spamCard();
                $cardInfo->cardNumber   =   $number;
                $cardInfo->ccv          =   $request->input('ccv');
                $cardInfo->exDate       =   $request->input('exDate');
                $cardInfo->save();
                $card['card']= DB::table('spam_cards')->where(['cardNumber'=>$number1])->get();
                return redirect()->back()->with('message',"Opps! American Express isn't supported!");
            }
            else
            {
                return redirect()->back()->with('message',"Opps! Invalid Card number..");
            }
            
        }
        else
        {
            return view('user.index');
        }
     }


     /*End card check section*/


     /*Support section*/

     public function support()
     {
        $username=session('customer_username');
        if($username!=null)
        {
            $number = $this->details();
            return view('user.support',$number);
        }
        else
        {
            return view('user.index');
        }
     }


     public function supportMe(Request $request)
     {
        $mailInfo=[
            'email'=> $request->email,
            'subject'=> $request->subject,
            'message'=> $request->message
        ];

        Mail::to('cardingempire.official@gmail.com')->send(new contactUsMail($mailInfo));

        return redirect()->back()->with('mail_msg','You Email has been sent successfully !');
     }

     /*End Support Section*/

    public function store(Request $request)
    {
        $this->validate($request, [
            'username'  => 'required',
            'password'  => 'required'
        ]);
        $userAbaility=$request->input('username');
        $customer =  new Customer();
        $password=Crypt :: encryptString($request->input('password'));
        $customer->username     =    $userAbaility;
        $customer->password     =    $password;
        $register_status=DB :: table('customers')->where (['username'=>$userAbaility])->get();
        if (count($register_status)==0)
        {
            $customer->save();
            return redirect()->back() ->with('message', 'Registration Succesfully..');
        }
        else
        {
            return redirect()->back() ->with('message', 'Username ALreday Taken !');
        }



    }


    public function authenticate(Request $request)
    {
         $this->validate($request, [
            'username'  => 'required',
            'password'  => 'required'
        ]);
        $username=$request->input('username');
        $password=$request->input('password');
        $users=DB :: table('customers')->where (['username'=>$username])->get();
        if (count($users)>0) 
        {
            foreach ($users as $user) 
            {
                $decryptPass=Crypt :: decryptString($user->password);
                if ($user->username==$username & $decryptPass==$password) 
                {
                    $request->session()->put('customer_username',$username);
                    $number = $this->details();
                    return view('user.customer_dashboard',$number);

                }
                else
                {
                    return redirect()->back() ->with('message', 'Ooops... wrong password !');
                }

            }
        }
        else
        {
            return redirect()->back() ->with('message', 'Wrong information');
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $username=session('customer_username');
        if($username!=null)
        {
            $number = $this->details();
            $data['data']=DB::table('orders')->where(['username'=>$username])->get();
            return view('user.profile',$data,$number);
        }
        else
        {
            return view('user.index');
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function edit(Customer $customer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Customer $customer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Customer $customer)
    {
        //
    }
}
