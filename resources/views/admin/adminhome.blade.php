@extends('layouts.master')

@section('content')
   

<div class="content container-fluid">
    <!-- Page Header -->
    <div class="page-header">
        <div class="row">
            <div class="col-sm-12">
                <h3 class="page-title">Welcome Admin!</h3>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item active">Dashboard</li>
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
                        <div class="db-icon">
                            <i class="fas fa-user-graduate"></i>
                        </div>
                        <div class="db-info">
                            <h3>55</h3>
                            <h6>Active User</h6>
                        </div>										
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-sm-6 col-12">
            <div class="card bg-two">
                <div class="card-body">
                    <div class="db-widgets d-flex justify-content-between align-items-center">
                        <div class="db-icon">
                            <i class="fas fa-crown"></i>
                        </div>
                        <div class="db-info">
                            <h3>50+</h3>
                            <h6>All Checked</h6>
                        </div>										
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-sm-6 col-12">
            <div class="card bg-three">
                <div class="card-body">
                    <div class="db-widgets d-flex justify-content-between align-items-center">
                        <div class="db-icon">
                            <i class="fas fa-building"></i>
                        </div>
                        <div class="db-info">
                            <h3>30+</h3>
                            <h6>Stock card</h6>
                        </div>										
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-sm-6 col-12">
            <div class="card bg-four">
                <div class="card-body">
                    <div class="db-widgets d-flex justify-content-between align-items-center">
                        <div class="db-icon">
                            <i class="fas fa-file-invoice-dollar"></i>
                        </div>
                        <div class="db-info">
                            <h3>$505</h3>
                            <h6>User Balance</h6>
                        </div>										
                    </div>
                </div>
            </div>
        </div>


    </div>
    <!-- /Overview Section -->				
</div>


@endsection