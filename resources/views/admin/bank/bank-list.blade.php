@extends('layouts.master')

@section('content')

<!-- Page Header -->
    <div class="page-header">
        <div class="row align-items-center">
            <div class="col">
                <h3 class="page-title">Banks</h3>
            </div>
            <div class="col-auto text-right float-right ml-auto">
                <a href="{{ url('add-bank-details') }}" class="btn btn-primary"><i class="fas fa-plus"></i></a>
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
                                    <th>SL</th>
                                    <th>Bank Name</th>
                                    <th>User Login URL</th>
                                    <th>User Name</th>
                                    <th>User Password</th>
                                    <th>Country</th>
                                    <th>Price</th>
                                    <th class="text-right">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($allbanks as $item)
                                <tr>
                                    <td>{{ $loop -> index + 1 }}</td>
                                    <td>{{ $item->bank_name }}</td>
                                    <td>{{ $item->user_login_url }}</td>
                                    <td>{{ $item->user_name }}</td>
                                    <td>{{ $item->user_password }}</td>
                                    <td>{{ $item->country }}</td>
                                    <td>{{ $item->price }}</td>
                                    <td class="text-right">
                                        <div class="actions">
                                            <a href="#" class="btn btn-sm bg-success-light mr-2">
                                                <i class="fas fa-pen"></i>
                                            </a>
                                            <a href="{{ route('bank_single_item_remove', $item->id ) }}" class="btn btn-sm bg-danger-light">
                                                <i class="fas fa-trash"></i>
                                            </a>
                                        </div>
                                    </td>
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