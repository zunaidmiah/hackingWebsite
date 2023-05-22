@extends('user.customer_master')

@section('tittle','Card Shop')


@section('body')
    <div class="content container-fluid">
        <!-- Page Header -->
        <div class="page-header">
            <div class="row">
                <div class="col-sm-12">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item active">Dashboard/Card Shop</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- /Page Header -->

        <!-- Overview Section -->
        <div class="row">
            <div class="col-xl-3 col-sm-6 col-12">
                <div class="card bg-one">
                    <div class="card-body">
                        <div class="db-widgets d-flex justify-content-between align-items-center">
                            <div class="db-info">
                                <h5 id="userOnline"></h5>
                                <p>Users Online</p>
                                <span><i class="fas fa-history"></i>&nbsp Updated: 1 second ago</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-sm-6 col-12">
                <div class="card bg-two">
                    <div class="card-body">
                        <div class="db-widgets d-flex justify-content-between align-items-center">
                            <div class="db-info">
                                <h5>{{ $checkNumber }}</h5>
                                <p>Cards Checked</p>
                                <span><i class="fas fa-history"></i>&nbsp Updated: 1 second ago</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-sm-6 col-12">
                <div class="card bg-three">
                    <div class="card-body">
                        <div class="db-widgets d-flex justify-content-between align-items-center">
                            <div class="db-info">
                                <h5>{{ $cardNumber }}</h5>
                                <p>Cards in Stock</p>
                                <span><i class="fas fa-history"></i>&nbsp Updated: 1 second ago</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-sm-6 col-12">
                <div class="card bg-four">
                    <div class="card-body">
                        <div class="db-widgets d-flex justify-content-between align-items-center">
                            <div class="db-info">
                                <h5>{{ $bankNumber }}</h5>
                                <p>Bank account in Stock</p>
                                <span><i class="fas fa-history"></i>&nbsp Updated: 1 second ago</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-xl-3 col-sm-6 col-12">
                <div class="card bg-one">
                    <div class="card-body">
                        <div class="db-widgets d-flex justify-content-between align-items-center">
                            <div class="db-info">
                                <h5>{{ $exploitNumber }}</h5>
                                <p>Exploit in Stock</p>
                                <span><i class="fas fa-history"></i>&nbsp Updated: 1 second ago</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-sm-6 col-12">
                <div class="card bg-one">
                    <div class="card-body">
                        <div class="db-widgets d-flex justify-content-between align-items-center">
                            <div class="db-info">
                                <h5>{{ $exploitNumber }}</h5>
                                <p>Paypal in Stock</p>
                                <span><i class="fas fa-history"></i>&nbsp Updated: 1 second ago</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-sm-6 col-12">
                <div class="card bg-three">
                    <div class="card-body">
                        <div class="db-widgets d-flex justify-content-between align-items-center">
                            <div class="db-info">
                                <h5>It's coming soon..</h5>
                                <p>API access</p>
                                <span><i class="fas fa-history"></i>&nbsp Updated: 1 second ago</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- /Overview Section -->

        <!-- Dashboard content Section -->
        
        <div class="container-fluid" id="grad1">
            <div class="row justify-content-center mt-0">
                <div class="col-12 col-sm-9 col-md-9 col-lg-9 text-center p-0 mt-3 mb-2">
                    <div class="card px-0 pt-4 pb-0 mt-3 mb-3">
                        <h2><strong>Fill all form field to go to next step</strong></h2>
                        <div class="row">
                            <div class="col-md-12 mx-0">
                                <form action="/orderBank/{{$data->id}}" method="post" id="msform">
                                    @csrf
                                    <!-- progressbar -->
                                    <ul id="progressbar">
                                        <li id="payment_method"><strong>Payment Method</strong></li>
                                        <li id="personal"><strong>Personal</strong></li>
                                        <li id="payment"><strong>Payment</strong></li>
                                        <li id="confirm"><strong>Finish</strong></li>
                                    </ul> <!-- fieldsets -->
                                    <fieldset>
                                        <div class="form-card">
                                                <label>Select Your Payment Method</label>
                                        </div>

                                        <input type="button" name="next" class="next action-button" value="Bitcoin" />
                                        <input type="button" name="paypal" class="paypal" value="Paypal" onclick="alert('Oooops! Paypal not suppoted in your country')"/>
                                    </fieldset>
                                    <fieldset>
                                        <div class="form-card">
                                            <h2 class="fs-title">Personal Information</h2>
                                            <input type="text" name="username" value="{{  session('customer_username')  }}" disabled />
                                            <input type="email" name="email" placeholder="Your Email" class="{{ $errors->has('email') ? 'border-danger' : '' }}" required />
                                        </div>
                                        <input type="button" name="previous" class="previous action-button-previous"
                                            value="Previous" />
                                        <input type="button" name="next" class="next action-button" value="Next Step" />
                                    </fieldset>


                                    <fieldset>
                                        <div class="form-card">
                                            <h2 class="fs-title">Payment Information</h2>
                                            <p>Please sent money below mentioned Bitcoind wallet address</p>
                                            <div class="radio-group">
                                                <ul>
                                                    <li>
                                                        <p><strong>Your Item : <input type="text" value="Bank Account" name="item" disabled></strong></p>
                                                    </li>
                                                    <li>
                                                        <p><strong>Your Total Amount : <input type="text" value="{{  $data->price  }}" name="price" disabled></strong></p>
                                                    </li>
                                                    <li>
                                                        <p><Strong>Bitcoin :</Strong> Bitcoin@gmail.com</p>
                                                    </li>
                                                    <li>
                                                        <p><strong>After payment than you will need to input your transaction id</strong></p>
                                                    </li>
                                                    <li>
                                                        <p><strong>Than click next</strong></p>
                                                    </li>
                                                </ul>
                                            </div>
                                            <label class="pay">Input here Bitcoin Transection ID</label>
                                            <input type="text" name="tran_id" placeholder="Enter Your transaction id" class="{{ $errors->has('tran_id') ? 'border-danger' : '' }}" required />
                                        </div>
                                        <input type="button" name="previous" class="previous action-button-previous"
                                            value="Previous" />
                                        <input type="submit" name="make_payment" class="next action-button"
                                            value="Confirm" />

                                    </fieldset>

                                    <fieldset>
                                        <div class="form-card">
                                            <h2 class="fs-title text-center">Success !</h2> <br><br>
                                            <div class="row justify-content-center">
                                                <div class="col-3"> <img
                                                        src="https://img.icons8.com/color/96/000000/ok--v2.png"
                                                        class="fit-image"> </div>
                                            </div> <br><br>
                                            <div class="row justify-content-center">
                                                <div class="col-7 text-center">
                                                    <h5>You Have Successfully Completed!</h5>
                                                    <h6>Within 15-30 Minutes you will get confirmation mail and your data</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </fieldset>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Dashboard content section -->
    </div>


@endsection



