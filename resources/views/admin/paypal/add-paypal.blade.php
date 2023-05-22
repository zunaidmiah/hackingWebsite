@extends('layouts.master')

@section('content')

<div class="content container-fluid">
				
    <!-- Page Header -->
    <div class="page-header">
        <div class="row align-items-center">
            <div class="col">
                <h3 class="page-title">Add Paypal Details</h3>
            </div>
        </div>
    </div>
    <!-- /Page Header -->

    <div class="row">
        <div class="col-sm-12">
        
            <div class="card">
                <div class="card-body">

                    @include ('admin.validation')

                    <form action="{{ route('store.paypal.info') }}" method="POST">
                        @csrf                        
                        <div class="row">
                            <div class="col-12">
                                <h5 class="form-title"><span>Paypal Information</span></h5>
                            </div>
                            <div class="col-12 col-sm-6">  
                                <div class="form-group">
                                    <label>Paypal User Name</label>
                                    <input type="text" name="paypal_user_name" class="form-control">
                                </div>
                            </div>
                            <div class="col-12 col-sm-6">  
                                <div class="form-group">
                                    <label>Paypal Password</label>
                                    <input type="password" name="paypal_password" class="form-control">
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
                                    <label>Price</label>
                                    <input type="text" class="form-control" name="price">
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