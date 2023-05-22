@extends('layouts.master')

@section('content')

<!-- Page Header -->
    <div class="page-header">
        <div class="row align-items-center">
            <div class="col">
                <h3 class="page-title">All Spam Card List</h3>
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
                                    <th>Card Number</th>
                                    <th>CCV</th>
                                    <th>Expire Date</th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($allspamscard as $item)
                                <tr>
                                    <td>{{ $loop -> index + 1 }}</td>
                                    <td>{{ $item->cardNumber }}</td>
                                    <td>{{ $item->ccv }}</td>
                                    <td>{{ $item->exDate }}</td>
                                    
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