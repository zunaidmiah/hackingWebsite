<?php

namespace App\Http\Controllers;
use DB;
use Mail;
use App\Mail\orderInfoUser;
use App\Mail\orderMailAdmin;
use App\Mail\orderDelivery;
use App\Mail\orderUpdate;
use App\Mail\paypalDelivery;
use App\Mail\cardDelivery;
use App\Mail\exploitDelivery;
use App\Models\Card;
use App\Models\Bank;
use App\Models\Paypal;
use App\Models\Exploit;
use Illuminate\Http\Request;
use App\Models\order;

class OrdersListController extends Controller
{
    //

    
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
        $admin=session('admin_username');
        if($admin!=null)
        {
            $order['order']=DB::table('orders')->where(['status'=>"pending"])->get();
            return view('admin.orders.orders-list',$order);
        }
        else
        {
            return view('admin.loginPanel');
        }
    }


    public function index1()
    {
        $admin=session('admin_username');
        if($admin!=null)
        {
            $order['order']=DB::table('orders')->where(['status'=>"Delivered"])->get();
            return view('admin.orders.orders',$order);
        }
        else
        {
            return view('admin.loginPanel');
        }
    }

    //card ordering process
    public function buyStep1($item,$price)
    {
    	$username=session('customer_username');
        if($username!=null)
        {
            $data=[
                'item' => $item,
                'price' => $price
            ];
            $number = $this->details();
            return view('user.modal-popup',$number,$data);
        }
        else
        {
            return view('user.index');
        }
    	
    }

    


   
    public function orderRequest(Request $request,$item,$price)
    {
        $username=session('customer_username');
        if($username!=null)
        {
            $this->validate($request, [
                'email'  => 'required',
                'tran_id'  => 'required'
            ]);
            $orderInfo  =   new order();
            $orderInfo->order_id = uniqid();
            $orderInfo->username =  $username;
            $orderInfo->email =  $request->email;
            $orderInfo->product = "Card";
            $orderInfo->amount =  $price.'$';
            $orderInfo->item_id  =  $item.' Cards';
            $orderInfo->tran_id = $request->tran_id;
            $orderInfo->status  =  "pending";
            $orderInfo->save();

            Mail::to($request->email)->send(new orderInfoUser($orderInfo));
            Mail::to('cardingempire.official@gmail.com')->send(new orderMailAdmin());
            return redirect()->to('/dash')->with('message','Please check Your email. We will provide you Everything within 10 to 20 minutes. Thanks');
        }
        else
        {
            return view('user.index');
        }
    }

    //end card orpering process


     // PAypal ordering process
    public function buyStepPaypal($id)
    {
        $username=session('customer_username');
        if($username!=null)
        {
            $data['data']=Paypal::find( $id );
            $number = $this->details();
            return view('user.buyModal',$number,$data);
        }
        else
        {
            return view('user.index');
        }
        
    }

    public function orderRequestPaypal(Request $request,$id)
    {
        $username=session('customer_username');
        if($username!=null)
        {
            $this->validate($request, [
                'email'  => 'required',
                'tran_id'  => 'required'
            ]);
            $data=Paypal::find( $id );
            $orderInfo  =   new order();
            $orderInfo->order_id = uniqid();
            $orderInfo->username =  $username;
            $orderInfo->email =  $request->email;
            $orderInfo->product = "Paypal";
            $orderInfo->amount =  $data->price;
            $orderInfo->item_id  =  $data->id;
            $orderInfo->tran_id = $request->tran_id;
            $orderInfo->status  =  "pending";
            $orderInfo->save();

            Mail::to($request->email)->send(new orderInfoUser($orderInfo));
            Mail::to('cardingempire.official@gmail.com')->send(new orderMailAdmin());
            return redirect()->to('/dash')->with('message','Please check Your email. We will provide you Everything within 10 to 20 minutes. Thanks');
        }
        else
        {
            return view('user.index');
        }
    }

    //End paypal ordering process


    // bank account ordering process
    public function buyStepBank($id)
    {
        $username=session('customer_username');
        if($username!=null)
        {
            $data['data']=Bank::find( $id );
            $number = $this->details();
            return view('user.bankBuy',$number,$data);
        }
        else
        {
            return view('user.index');
        }
        
    }

    public function orderRequestBank(Request $request,$id)
    {
        $username=session('customer_username');
        if($username!=null)
        {
            $this->validate($request, [
                'email'  => 'required',
                'tran_id'  => 'required'
            ]);
            $data=Bank::find( $id );
            $orderInfo  =   new order();
            $orderInfo->order_id = uniqid();
            $orderInfo->username =  $username;
            $orderInfo->email =  $request->email;
            $orderInfo->product = "Bank Account";
            $orderInfo->amount =  $data->price;
            $orderInfo->item_id  =  $data->id;
            $orderInfo->tran_id = $request->tran_id;
            $orderInfo->status  =  "pending";
            $orderInfo->save();

            Mail::to($request->email)->send(new orderInfoUser($orderInfo));
            Mail::to('cardingempire.official@gmail.com')->send(new orderMailAdmin());
            return redirect()->to('/dash')->with('message','Please check Your email. We will provide you Everything within 10 to 20 minutes. Thanks');
        }
        else
        {
            return view('user.index');
        }
    }

    //End bank account ordering process


    // Exploit ordering process
    public function buyStepExploit($id)
    {
        $username=session('customer_username');
        if($username!=null)
        {
            $data['data']=Exploit::find( $id );
            $number = $this->details();
            return view('user.exploitBuy',$number,$data);
        }
        else
        {
            return view('user.index');
        }
        
    }

    public function orderRequestExploit(Request $request,$id)
    {
        $username=session('customer_username');
        if($username!=null)
        {
            $this->validate($request, [
                'email'  => 'required',
                'tran_id'  => 'required'
            ]);
            $data=Exploit::find( $id );
            $orderInfo  =   new order();
            $orderInfo->order_id = uniqid();
            $orderInfo->username =  $username;
            $orderInfo->email =  $request->email;
            $orderInfo->product = "Exploit";
            $orderInfo->amount =  $data->price;
            $orderInfo->item_id  =  $data->id;
            $orderInfo->tran_id = $request->tran_id;
            $orderInfo->status  =  "pending";
            $orderInfo->save();

            Mail::to($request->email)->send(new orderInfoUser($orderInfo));
            Mail::to('cardingempire.official@gmail.com')->send(new orderMailAdmin());
            return redirect()->to('/dash')->with('message','Please check Your email. We will provide you Everything within 10 to 20 minutes. Thanks');
        }
        else
        {
            return view('user.index');
        }
    }

    //End Exploit ordering process

    //Order Update Mail to user
    public function orderUpdate($id)
    {
        $username=session('admin_username');
        if($username!=null)
        {
            $data=DB::table('orders')->where(['order_id'=>$id])->value('email');
            Mail::to($data)->send(new orderUpdate($id));
            return redirect()->back()->with('message','Mail has been sent successfully to customer.');
        }
        else
        {
            return view('admin.loginPanel');
        }
    }
    
    //End order update


    //Orderdelivery code

    public function orderDeliver($id)
    {
        $username=session('admin_username');
        if($username!=null)
        {
            $type=DB::table('orders')->where(['id'=>$id])->value('product');
            if($type=="Card")
            {
                $card_id=DB::table('cards')->min('id');
                
                $card_item=DB::table('orders')->where(['id'=>$id])->value('item_id');
                if($card_item=="10 Cards")
                {
                    $card_num=10;
                    $cardinfo=DB::table('cards')->orderBy('id')->limit($card_num)->get();
                    //DB::table('cards')->orderBy('id')->limit($card_num)->delete();

                }
                else if($card_item=="15 Cards")
                {
                    $card_num=15;
                    $cardinfo=DB::table('cards')->orderBy('id')->limit($card_num)->get();
                    //DB::table('cards')->orderBy('id')->limit($card_num)->delete();
                }
                else
                {
                    $card_num=20;
                    $cardinfo=DB::table('cards')->orderBy('id')->limit($card_num)->get();
                    //DB::table('cards')->orderBy('id')->limit($card_num)->delete();
                }
                $mail=DB::table('orders')->where(['id'=>$id])->value('email');
                Mail::to($mail)->send(new cardDelivery($cardinfo));
                DB::table('orders')->where(['id'=>$id])->update(['status' => 'Delivered']);
                return redirect()->back()->with('message','Card data has been sent to customer via mail successfully.');
            }
            else if($type=="Bank Account")
            {
                $b_id=DB::table('orders')->where(['id'=>$id])->value('item_id');
                $bank_name=DB::table('banks')->where(['id'=>$b_id])->value('bank_name');
                $user_name=DB::table('banks')->where(['id'=>$b_id])->value('user_name');
                $user_login_url=DB::table('banks')->where(['id'=>$b_id])->value('user_login_url');
                $user_password=DB::table('banks')->where(['id'=>$b_id])->value('user_password');
                $bankInfo=[
                    'bank_name' => $bank_name,
                    'user_name' => $user_name,
                    'user_login_url' => $user_login_url,
                    'user_password' => $user_password
                ];
                $mail=DB::table('orders')->where(['id'=>$id])->value('email');
                Mail::to($mail)->send(new orderDelivery($bankInfo));
                
                DB::table('banks')->where(['id'=>$b_id])->delete();
                DB::table('orders')->where(['id'=>$id])->update(['status' => 'Delivered']);
                return redirect()->back()->with('message','This Bank Account data has been sent to customer via mail successfully.');
            }
            else if($type=="Paypal")
            {
                $p_id=DB::table('orders')->where(['id'=>$id])->value('item_id');
                $user_name=DB::table('paypals')->where(['id'=>$p_id])->value('paypal_user_name');
                $password=DB::table('paypals')->where(['id'=>$p_id])->value('paypal_password');
                $country=DB::table('paypals')->where(['id'=>$p_id])->value('country');
                $paypalInfo=[
                    'user_name' => $user_name,
                    'password' => $password,
                    'country' => $country
                ];
                $mail=DB::table('orders')->where(['id'=>$id])->value('email');
                Mail::to($mail)->send(new paypalDelivery($paypalInfo));
                
                DB::table('paypals')->where(['id'=>$p_id])->delete();
                DB::table('orders')->where(['id'=>$id])->update(['status' => 'Delivered']);
                return redirect()->back()->with('message','This Paypal Account data has been sent to customer via mail successfully.');
            }
            else
            {
                $e_id=DB::table('orders')->where(['id'=>$id])->value('item_id');
                $exploit_name=DB::table('exploits')->where(['id'=>$e_id])->value('exploit_name');
                $exploit_platform=DB::table('exploits')->where(['id'=>$e_id])->value('platform');
                $exploit_file=DB::table('exploits')->where(['id'=>$e_id])->value('script');
                $exploitInfo=[
                    'exploit_name' => $exploit_name,
                    'exploit_platform' => $exploit_platform,
                    'exploit_file' => $exploit_file
                ];
                $mail=DB::table('orders')->where(['id'=>$id])->value('email');
                Mail::to($mail)->send(new exploitDelivery($exploitInfo));
                
               // DB::table('exploits')->where(['id'=>$e_id])->delete();
                DB::table('orders')->where(['id'=>$id])->update(['status' => 'Delivered']);
                return redirect()->back()->with('message','This Paypal Account data has been sent to customer via mail successfully.');
            }
        }
        else
        {
            return view('admin.loginPanel');
        }
    }

    //End Order Delivery code

}

