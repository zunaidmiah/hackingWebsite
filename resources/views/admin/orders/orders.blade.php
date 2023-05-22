@extends('layouts.master')

@section('content')

<!-- Page Header -->
    <div class="page-header">
        <div class="row align-items-center">
            <div class="col">
                <h3 class="page-title" style="text-align: center;">New Orders List</h3>
            </div>
            
        </div>
    </div>
    <!-- /Page Header -->

    <div class="row">
        <div class="col-sm-12">
        
            <div class="card card-table">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover table-center mb-0 datatable">
                            <thead>
                                <tr>
                                    <th>Order ID</th>
                                    <th>User Name</th>
                                    <th>Email</th>
                                    <th>Product</th>
                                    <th>Item ID</th>
                                    <th>Amount</th>
                                    <th>Transection ID</th>
                                    <th>status</th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                              @foreach($order as $data)
                                <tr>
                                    <td>{{ $data->order_id }}</td>
                                    <td>{{ $data->username }}</td>
                                    <td>{{ $data->email }}</td>
                                    <td>{{ $data->product }}</td>
                                    <td>{{ $data->item_id }}</td>
                                    <td>{{ $data->amount }}</td>
                                    <td>{{ $data->tran_id }}</td>
                                    <td>{{ $data->status }}</td>
                                    
                                </tr>
                               @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>							
        </div>					
    </div>

@endsection