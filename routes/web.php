<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\CardController;
use App\Http\Controllers\BankController;
use App\Http\Controllers\PaypalController;
use App\Http\Controllers\ExploitController;
use App\Http\Controllers\AdminHomeController;
use App\Http\Controllers\CheckCardController;
use App\Http\Controllers\OrdersListController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('user.index');
});

Route::get('/register', function () {
    return view('user.register');
});
Route::post('/registration',[CustomerController:: class, 'store']);

Route::post('/authentication',[CustomerController:: class, 'authenticate']);

Route::get('/dash',[CustomerController:: class, 'index']);

Route::get('/profile',[CustomerController:: class, 'show']);

Route::get('/card-shop',[CustomerController:: class,'showCard']);

Route::get('/singleCard',[CustomerController:: class,'singleCard']);

Route::get('/bank-shop',[CustomerController:: class,'singleBank']);

//Route::get('/singleBank',[CustomerController:: class,'singleBank']);

Route::get('/paypal-shop',[CustomerController:: class,'singlePaypal']);

//Route::get('singlePaypal',[CustomerController:: class,'singlePaypal']);

Route::get('/exploit-shop',[CustomerController:: class,'singleExploit']);

//Route::get('singleExploit',[CustomerController:: class,'singleExploit']);

Route::get('/get-api',[CustomerController:: class,'getApi']);

Route::get('/logout',[CustomerController:: class,'logout']);

Route::get('/card-check',[CustomerController:: class, 'cardCheck']);

Route::post('/cardChecking/{id}',[CustomerController:: class,'cardChecking']);

Route::get('/cardChecked/{id}',[CheckCardController:: class,'cardCheck']);

Route::get('/support',[CustomerController:: class,'support']);

Route::post('/supportMe',[CustomerController:: class,'supportMe']);

Route::get('/buy/{item}/{price}',[OrdersListController:: class,'buyStep1']);

Route::post('/orderRequest/{item}/{price}',[OrdersListController:: class,'orderRequest']);

Route::get('/paypalBuy/{id}',[OrdersListController:: class,'buyStepPaypal']);

Route::post('/orderPaypal/{id}',[OrdersListController:: class,'orderRequestPaypal']);

Route::get('/bankBuy/{id}',[OrdersListController:: class,'buyStepBank']);

Route::post('/orderBank/{id}',[OrdersListController:: class,'orderRequestBank']);

Route::get('/exploitBuy/{id}',[OrdersListController:: class,'buyStepExploit']);

Route::post('/orderExploit/{id}',[OrdersListController:: class,'orderRequestExploit']);




//--------------------------------------

//admin part start from there

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Auth::routes();

// Route for admin
//Route::get('adminCreateAccount',[AdminHomeController:: class,'createAccount']);
Route::get('/hacker', [AdminHomeController::class, 'adminIndex']);
Route::post('adminAuthentication',[AdminHomeController:: class, 'adminAuthentication']);
Route::get('/adminLogout',[AdminHomeController:: class,'adminLogout']);

// admin accessories add all route list 
Route::get('/addcards',[CardController::class, 'index'])->name('addcardsinformation');
Route::post('/storecards',[CardController::class, 'cards_store'])->name('storecards');
Route::get('/card-list',[CardController::class, 'showallcards']);

//Route::get('card_edit/{id}',[CardController::class, 'Card_data_edit'])->name('card.data.edit');
//Route::post('card_edit_update/{id}',[CardController::class, 'Card_data_Update']);
Route::get('card_delete/{id}',[CardController::class, 'dataRemove'])->name('card_single_item_remove');

//bank route list 
Route::get('/add-bank-details',[BankController::class, 'index'])->name('addbanksinformation');
Route::post('/store-bank-info',[BankController::class, 'bank_account_store'])->name('store.bank.info');
Route::get('adminUser',[AdminHomeController:: class,'adminUser']);
Route::get('/bank-list',[BankController::class, 'showall_bank_list']);
Route::get('bank_delete/{id}',[BankController::class, 'bank_data_Remove'])->name('bank_single_item_remove');

//Paypal route list 
Route::get('/add-paypal-details',[PaypalController::class, 'index'])->name('add.paypal.card');
Route::post('/store-paypal-info',[PaypalController::class, 'paypal_account_store'])->name('store.paypal.info');
Route::get('/paypal-list',[PaypalController::class, 'showall_payapl_list']);
Route::get('/paypal_delete/{id}',[PaypalController::class, 'paypal_data_Remove'])->name('paypal_single_item_remove');

//Exploit route list 
Route::get('/add-exploit-details',[ExploitController::class, 'index'])->name('add.exploit.info');
Route::post('/store-exploit-info',[ExploitController::class, 'exploit_account_store'])->name('store.exploit.info');
Route::get('/exploit-list',[ExploitController::class, 'showall_exploit_list']);
Route::get('/exploit_delete/{id}',[ExploitController::class, 'exploit_data_Remove'])->name('exploit_single_item_remove');

// spam card show route 
Route::get('/show-spam-card-list',[CustomerController:: class,'show_spams_card_list']);

// Orders table route here 
Route::get('/show-orders-list',[OrdersListController:: class,'index']);

Route::get('/show-orders',[OrdersListController:: class,'index1']);

//Route::resource('/addcard', 'CardController');
Route::get('/editcard', function(){
    return view('admin.card.edit-card');
});

Route::get('/orderUpdate/{id}',[OrdersListController:: class,'orderUpdate']);

Route::get('/orderDeliver/{id}',[OrdersListController:: class,'orderDeliver']);