@extends('user.customer_master')
@section('tittle','Contact with us')
@section('body')
	<div class="content container-fluid">
		<div class="page-header">
			<div class="row">
				<div class="col-sm-12">
					<ul class="breadcrumb">
						<li class="breadcrumb-item active" style="color: white;">Dashboard/Support Form</li>
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

		<!-- Support form section  -->
		<div class="container">
		  <form action="/supportMe" method="post">
		  	@csrf
		  	@if(Session::has('mail_msg'))
	        	<div class="alert alert-success" role="alert">
	        		{{ Session::get('mail_msg') }}
	        	</div>
        	@endif
		    <label for="email">Email*</label>
		    <input type="text" id="email" name="email" placeholder="Your email..">

		    <label for="subject">Subject*</label>
		    <input type="text" id="subject" name="subject" placeholder="Subject tittle..">


		    <label for="message">Message*</label>
		    <textarea id="message" name="message" placeholder="Write something.." style="height:200px"></textarea>

		    <input type="submit" value="Send">

		  </form>
		</div>
		<!-- End Support form section  -->

		<style type="text/css">
			/* Style inputs with type="text", select elements and textareas */
			input[type=text], select, textarea {
			  width: 100%; /* Full width */
			  padding: 12px; /* Some padding */ 
			  border: 1px solid #ccc; /* Gray border */
			  border-radius: 4px; /* Rounded borders */
			  box-sizing: border-box; /* Make sure that padding and width stays in place */
			  margin-top: 6px; /* Add a top margin */
			  margin-bottom: 16px; /* Bottom margin */
			  resize: vertical; /* Allow the user to vertically resize the textarea (not horizontally) */
			  border-radius: 20px;
			  background-color: #4C4E57;
			}

			/* Style the submit button with a specific background color etc */
			input[type=submit] {
			  font-size: 16px;
			  color: white;
			  background-color: green;
			  width: 15%;
			  height: 15%;
			  margin: 2% 0;
			  padding: 8px 12px;
			  border-radius: 10px;
			  border: .5px solid red;
			}

			/* When moving the mouse over the submit button, add a darker green color */
			input[type=submit]:hover {
			  background-color: red;
    		  border: .5px solid green;
    		  font-size: 17px;
			}

			/* Add a background color and some padding around the form */
			.container {
			  border-radius: 5px;
			  background-color: #4C4E57;
			  padding: 20px;
			  color: #969AA2;
			}
		</style>

@endsection