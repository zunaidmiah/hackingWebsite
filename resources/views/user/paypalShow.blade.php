@extends('user.customer_master')
@section('tittle','Paypal Account Shop')
@section('body')
	<div class="content container-fluid">
					<!-- Page Header -->
					<div class="page-header">
						<div class="row">
							<div class="col-sm-12">
								<ul class="breadcrumb">
									<li class="breadcrumb-item active" style="color: white;">Dashboard/Paypal Shop</li>
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
											<h5>{{  $checkNumber  }}</h5>
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
											<h5>{{  $cardNumber  }}</h5>
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
											<h5>{{  $bankNumber  }}</h5>
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
											<h5>{{  $exploitNumber  }}</h5>
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
											<h5>{{  $exploitNumber  }}</h5>
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
							      <th scope="col">Package</th>
							      <th scope="col">Country</th>
							      <th scope="col">Ex Date</th>
							      <th scope="col">Price</th>
							      <th scope="col">Action</th>
							    </tr>
							  </thead>
							  <tbody>
							    <tr>
							      <td>10 Paypal</td>
							      <td>United States</td>
							      <td>11/2025</td>
							      <td>$130</td>
							      <td>
							      	<a href="">Buy</a>
							      </td>
							    </tr>
							    <tr>
							      <td>15 Paypal-3% off</td>
							      <td>United States</td>
							      <td>11/2023</td>
							      <td>$175</td>
							      <td>
							      	<a href="">Buy</a>
							      </td>
							    </tr>
							    <tr>
							      <td>20 Paypal-5% off</td>
							      <td>United States</td>
							      <td>9/2028</td>
							      <td>$200</td>
							      <td>
							      	<a href="">Buy</a>
							      </td>
							    </tr>
							    <tr>
							      <td  colspan="3" style="text-align: center;">1 Paypal</td>
							      <td>$13</td>
							      <td>
							      	<a href="/singlePaypal">Buy</a>
							      </td>
							    </tr>
							  </tbody>
						</table>
					</div>

					<!-- /Dashboard content section -->
							

				</div>
@endsection