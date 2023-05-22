@extends('user.customer_master')
@section('tittle','Check your card status')
@section('body')
	<div class="content container-fluid">
		<div class="page-header">
			<div class="row">
				<div class="col-sm-12">
					<ul class="breadcrumb">
						<li class="breadcrumb-item active" style="color: white;">Dashboard/Card Checker</li>
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

		<!-- Card Checker section  -->
		<div class="row">
				<div class="col-sm-12">
				
					<div class="card cardCheck">
						<div class="card-body">
							@if(session('message'))
							  <div class="alert alert-danger"><span class="glyphicon glyphicon-ok"></span><em> {!! session('message') !!}</em></div>
							@endif
							<form action="/cardChecking/1" method="post" name="card_info">
								{{  csrf_field() }}
								<div class="row">
									<div class="col-12">
										<h5 class="form-title"><span>Card Details</span></h5><br>
									</div>
									<div class="col-12">  
										<div class="form-group">
											<input type="text" class="form-control {{ $errors->has('cardNumber') ? 'border-danger' : '' }}" name="cardNumber" placeholder="Enter Card number here" required>
										</div>
									</div>
									<div class="col-12">
										<div class="form-group">
											<input type="text" class="form-control {{ $errors->has('ccv') ? 'border-danger' : '' }}" name="ccv" placeholder="Card CCV" required>
										</div>
									</div>
									<div class="col-12">
										<div class="form-group">
											<input type="text" class="form-control {{ $errors->has('exDate') ? 'border-danger' : '' }}" name="exDate" placeholder="Card Ex Date" required>
										</div>
									</div>
									<div class="col-12">
										<button type="submit" class="cardBtn">Check</button>
									</div>
								</div>
							</form>
						</div>
					</div>
					
				</div>					
			</div>
		<!-- End Card Checker section  -->

@endsection