@extends('user.customer_master')
@section('tittle','Your Profile')
@section('body')
	<div class="content container-fluid">
					
		<!-- Page Header -->
		<div class="page-header">
			<div class="row">
				<div class="col">
					<h3 class="page-title">Profile</h3>
					<ul class="breadcrumb">
						<li class="breadcrumb-item"><a href="dash">Dashboard</a></li>
						<li class="breadcrumb-item active">Profile</li>
					</ul>
				</div>
			</div>
		</div>
		<!-- /Page Header -->
					
		<div class="row">
			<div class="col-md-12">
				<div class="profile-header">
					<div class="row align-items-center">
						<div class="col-auto profile-image">
							<a href="#">
								<img class="rounded-circle" alt="User Image" src="{{ asset('icon/customer_avatar.png') }}">
							</a>
						</div>
						<div class="col ml-md-n2 profile-user-info">
							<h4 class="user-name mb-0">{{  session('customer_username')  }}</h4>
							<div class="user-Location"><p style="color: green;">Online <i class="fas fa-eye"></i></p></div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="profile-menu nav-item">
			<p>My All Orders</p>
			<hr>
			<div class="row">
				<div class="col-sm-12">
				
					<div class="card card-table">
						<div class="card-body">
							<div class="table-responsive">
								<table class="table table-hover table-center mb-0 datatable">
									<thead>
										<tr>
											<th>Order ID</th>
											<th>Email</th>
											<th>Product</th>
											<th>Item ID</th>
											<th>Total Amount</th>
											<th>Transaction ID</th>
											<th>Order Status</th>
										</tr>
									</thead>
									@foreach($data as $order)
										<tbody>
											<tr>
												<td>{{  $order->order_id  }}</td>
												<td>{{  $order->email  }}</td>
												<td>{{  $order->product  }}</td>
												<td>{{  $order->item_id  }}</td>
												<td>{{  $order->amount  }}</td>
												<td>{{  $order->tran_id  }}</td>
												<td>{{  $order->status  }}</td>
											</tr>
										</tbody>
									@endforeach
								</table>
							</div>
						</div>
					</div>							
				</div>					
			</div>
		</div>
	</div>
@endsection