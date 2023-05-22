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
    <div style="overflow-x:auto;">
        <table class="table table-dark table-hover">
            <thead>
                <tr>
                    <th>SPackage</th>
                    <th>Price</th>
                    <th>Card Type</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>10 Cards</td>
                    <td>130$</td>
                    <td>Credit Card</td>
                    <td>
                        <a href="/buy/10/130">Buy</a>&nbsp
                        <a href="/cardChecked/10">Check Card</a>
                    </td>
                </tr>
                <tr>
                    <td>15 Cards (3% off)</td>
                    <td>189$</td>
                    <td>Credit Card</td>
                    <td>
                        <a href="/buy/15/189">Buy</a>&nbsp
                        <a href="/cardChecked/15">Check Card</a>
                    </td>
                </tr>
                <tr>
                    <td>20 Cards (5% off)</td>
                    <td>247$</td>
                    <td>Credit Card</td>
                    <td>
                        <a href="/buy/20/247">Buy</a>&nbsp
                        <a href="/cardChecked/20">Check Card</a>
                    </td>
                </tr>
            </tbody>
        </table>

    </div>

    <!-- /Dashboard content section -->
</div>

@endsection
