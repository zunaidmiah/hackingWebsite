@extends('layouts.master')

@section('content')

<div class="content container-fluid">
				
    <!-- Page Header -->
    <div class="page-header">
        <div class="row align-items-center">
            <div class="col">
                <h3 class="page-title">Add Bank Details</h3>
            </div>
        </div>
    </div>
    <!-- /Page Header -->

    <div class="row">
        <div class="col-sm-12">
        
            <div class="card">
                <div class="card-body">

                    @include ('admin.validation')

                    <form action="{{ route('store.bank.info') }}" method="POST">
                        @csrf                        
                        <div class="row">
                            <div class="col-12">
                                <h5 class="form-title"><span>Bank Information</span></h5>
                            </div>
                            <div class="col-12 col-sm-6">  
                                <div class="form-group">
                                    <label>Bank Name</label>
                                    <input type="text" name="bank_name" class="form-control">
                                </div>
                            </div>
                            <div class="col-12 col-sm-6">  
                                <div class="form-group">
                                    <label>User Login URL</label>
                                    <input type="text" name="user_login_url" class="form-control">
                                </div>
                            </div>
                            
                            <div class="col-12 col-sm-6">
                                <div class="form-group">
                                    <label>User Name</label>
                                    <input type="text" class="form-control" name="user_name">
                                </div>
                            </div>
                            <div class="col-12 col-sm-6">  
                                <div class="form-group">
                                    <label>Password</label>
                                    <input type="password" class="form-control" name="password">
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