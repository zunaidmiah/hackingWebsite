@extends('layouts.master')

@section('content')

<div class="content container-fluid">
				
    <!-- Page Header -->
    <div class="page-header">
        <div class="row align-items-center">
            <div class="col">
                <h3 class="page-title">Add Card</h3>
            </div>
        </div>
    </div>
    <!-- /Page Header -->

    <div class="row">
        <div class="col-sm-12">
        
            <div class="card">
                <div class="card-body">

                    @include ('admin.validation')

                    <form action="{{ route('storecards') }}" method="POST">
                        @csrf                        
                        <div class="row">
                            <div class="col-12">
                                <h5 class="form-title"><span>Card Information</span></h5>
                            </div>
                            <div class="col-12 col-sm-6">  
                                <div class="form-group">
                                    <label>Card Holder Name</label>
                                    <input type="text" name="card_id" class="form-control">
                                </div>
                            </div>
                            <div class="col-12 col-sm-6">
                                <div class="form-group">
                                    <label>Card Type</label>
                                    <input type="text" class="form-control" name="card_type" placeholder="Enter card type">
                                </div>
                            </div>
                            <div class="col-12 col-sm-6">
                                <div class="form-group">
                                    <label>Country</label>
                                    <input type="text" class="form-control" name="country">
                                </div>
                            </div>
                            <div class="col-12 col-sm-6">  
                                <div class="form-group">
                                    <label>Ex-Date</label>
                                    <input type="date" class="form-control" name="ex_date">
                                </div>
                            </div>
                            <div class="col-12 col-sm-6">
                                <div class="form-group">
                                    <label>Bank</label>
                                    <input type="text" class="form-control" name="bank_name">
                                </div>
                            </div>
                            <div class="col-12 col-sm-6">
                                <div class="form-group">
                                    <label>Card Number</label>
                                    <input type="text" class="form-control" name="card_number">
                                </div>
                            </div>
                            <div class="col-12 col-sm-6">
                                <div class="form-group">
                                    <label>CCV</label>
                                    <input type="text" class="form-control" name="ccv">
                                </div>
                            </div>
                            
                            <div class="col-12">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>							
        </div>					
    </div>					
</div>

@endsection