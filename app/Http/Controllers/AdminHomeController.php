<?php

namespace App\Http\Controllers;
use DB;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

class AdminHomeController extends Controller
{
    //admin index page
    public function adminIndex(){
        return view('admin.loginPanel'); 
    }

    //admin create account

    public function createAccount()
    {
    	$username	=	"adminIsHacker";
    	$password	=	Crypt :: encryptString("HackingIsMine");
    	$admin 	=	new Admin();
    	$admin->username 	=	$username;
    	$admin->password 	=	$password;
    	$admin->save();
    	return view('admin.loginPanel');
    }



    //admin login 

    public function adminAuthentication(Request $request)
    {
         $this->validate($request, [
            'username'  => 'required',
            'password'  => 'required'
        ]);
        $username=$request->input('username');
        $password=$request->input('password');
        $users=DB :: table('admin')->where (['username'=>$username])->get();
        if (count($users)>0) 
        {
            foreach ($users as $user) 
            {
                $decryptPass=Crypt :: decryptString($user->password);
                if ($user->username==$username & $decryptPass==$password) 
                {
                    $request->session()->put('admin_username',$username);
                    return view('admin.adminhome');

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

    public function adminUser()
    {
        $username   =   "adminIsHacker";
        $password   =   Crypt :: encryptString("HackingIsMine");
        $admin  =   new Admin();
        $admin->username    =   $username;
        $admin->password    =   $password;
        $admin->save();
        return view('admin.loginPanel');
    }

    
    //admin logout part

    public function adminLogout()
    {
        session()->put('admin_username',null);
        return view('admin.loginPanel');
    }
}
