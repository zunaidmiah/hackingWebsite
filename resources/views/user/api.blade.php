@extends('user.customer_master')
@section('tittle','API access')
@section('body')
	<div class="content container-fluid">
					<!-- Page Header -->
					<div class="page-header">
						<div class="row">
							<div class="col-sm-12">
								<ul class="breadcrumb">
									<li class="breadcrumb-item active" style="color: white;">Customer Dashboard</li>
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

					<div class="alert alert-success">
						<h2 style="text-align: center;color: green;">API acess functionality coming soon.....</h2>
					</div>
					<br>

					<!-- Dashboard content Section -->
					<div class="row">
						<div class="col-xl-4 col-sm-6 col-12">
							<div class="card card-one">
								<div class="card-body">
									<div class="db-widgets d-flex justify-content-between align-items-center">
										<div class="card-info">
											<h4>Cards Checked</h4>
											<img src="{{ asset('images/dash_card-checker.png') }}">
											<ul>
												<li>100% Authenticated</li>
												<li>Moneyback Gurantee</li>
												<li>Live card</li>
											</ul>
											<a href="#"><i class="fas fa-shopping-cart"></i>&nbsp Check Now</a>
										</div>										
									</div>
								</div>
							</div>
						</div>
						
						<div class="col-xl-4 col-sm-6 col-12">
							<div class="card card-one">
								<div class="card-body">
									<div class="db-widgets d-flex justify-content-between align-items-center">
										<div class="card-info">
											<h4>Card Shop</h4>
											<img src="{{ asset('images/dash_credit_card.jpg') }}">
											<ul>
												<li>100% Authenticated</li>
												<li>Moneyback Gurantee</li>
												<li>Live card</li>
											</ul>
											<a href="/card-shop"><i class="fas fa-shopping-cart"></i>&nbsp Buy Now</a>
										</div>										
									</div>
								</div>
							</div>
						</div>
						<div class="col-xl-4 col-sm-6 col-12">
							<div class="card card-one">
								<div class="card-body">
									<div class="db-widgets d-flex justify-content-between align-items-center">
										<div class="card-info">
											<h4>Exploit Shop</h4>
											<img src="{{ asset('images/dash_exploit.jpg') }}">
											<ul>
												<li>100% Authenticated</li>
												<li>Moneyback Gurantee</li>
												<li>Live card</li>
											</ul>
											<a href="/exploit-shop"><i class="fas fa-shopping-cart"></i>&nbsp Buy Now</a>
										</div>										
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-xl-4 col-sm-6 col-12">
							<div class="card card-one">
								<div class="card-body">
									<div class="db-widgets d-flex justify-content-between align-items-center">
										<div class="card-info">
											<h4>Bank Account</h4>
											<img src="{{ asset('images/dash_bank.jpg') }}">
											<ul>
												<li>100% Authenticated</li>
												<li>Moneyback Gurantee</li>
												<li>Live card</li>
											</ul>
											<a href="/bank-shop"><i class="fas fa-shopping-cart"></i>&nbsp Buy Now</a>
										</div>										
									</div>
								</div>
							</div>
						</div>
						
						<div class="col-xl-4 col-sm-6 col-12">
							<div class="card card-one">
								<div class="card-body">
									<div class="db-widgets d-flex justify-content-between align-items-center">
										<div class="card-info">
											<h4>Paypal Account</h4>
											<img src="{{ asset('images/dash_paypal.png') }}">
											<ul>
												<li>100% Authenticated</li>
												<li>Moneyback Gurantee</li>
												<li>Live card</li>
											</ul>
											<a href="/paypal-shop"><i class="fas fa-shopping-cart"></i>&nbsp Buy Now</a>
										</div>										
									</div>
								</div>
							</div>
						</div>
						<div class="col-xl-4 col-sm-6 col-12">
							<div class="card card-one">
								<div class="card-body">
									<div class="db-widgets d-flex justify-content-between align-items-center">
										<div class="card-info">
											<h4>API Access</h4>
											<img src="{{ asset('images/dash_api.png') }}">
											<ul>
												<li>100% Authenticated</li>
												<li>Moneyback Gurantee</li>
												<li>Live card</li>
											</ul>
											<a href="/get-api"><i class="fas fa-shopping-cart"></i>&nbsp Get API</a>
										</div>										
									</div>
								</div>
							</div>
						</div>
					</div>

					<!-- /Dashboard content section -->
							

				</div>
@endsection