<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
        <title>CardingEmpire - Dashboard</title>
		
		<!-- Favicon -->
        <link rel="shortcut icon" href="assets/img/favicon.png">
	
		<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,500;0,600;0,700;1,400&amp;display=swap">
		
		<!-- Bootstrap CSS -->
        <link rel="stylesheet" href="{{ asset ('assets/plugins/bootstrap/css/bootstrap.min.css') }}">
		
		<!-- Fontawesome CSS -->
		<link rel="stylesheet" href="{{ asset ('assets/plugins/fontawesome/css/fontawesome.min.css') }}">
		<link rel="stylesheet" href="{{ asset ('assets/plugins/fontawesome/css/all.min.css') }}">
		
		<!-- Main CSS -->
        <link rel="stylesheet" href="{{ asset ('assets/css/style.css') }}">
    </head>
    <body>
	
		<!-- Main Wrapper -->
        <div class="main-wrapper">
		
			<!-- Header -->
            <div class="header">
			
				<!-- Logo -->
                <div class="header-left">
                    <a href="#" class="logo">
						<img src="{{ asset('images/logo/logo.png') }}" alt="">
					</a>
					
                </div>
				<!-- /Logo -->
				
				<!-- Header Right Menu -->
				<ul class="nav user-menu">
					
					<!-- User Menu -->
					<li class="nav-item dropdown has-arrow">
						<a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
							<span class="user-img"><img class="rounded-circle" src="{{ asset('icon/customer_avatar.png') }}" width="31" alt="Ryan Taylor"></span>
						</a>
						<div class="dropdown-menu">
							<div class="user-header">
								<div class="avatar avatar-sm">
									<img src="{{ asset('icon/customer_avatar.png') }}" alt="User Image" class="avatar-img rounded-circle">
								</div>
								<div class="user-text">
									<h6></h6>
									<p class="text-muted mb-0">Administrator</p>
								</div>
							</div>
							<a class="dropdown-item" href="/adminLogout">Logout</a>
						</div>
					</li>
					<!-- /User Menu -->
					
				</ul>
				<!-- /Header Right Menu -->
				
            </div>
			<!-- /Header -->
          @include('components.right-sidebar')

          <!-- Page Wrapper -->
          <div class="page-wrapper">


            @yield('content')


            <!-- Footer -->
				<footer>
					<p>Copyright © 2020 CardingEmpire.</p>					
				</footer>
				<!-- /Footer -->

			</div>
			<!-- /Page Wrapper -->
        </div>
		<!-- /Main Wrapper -->
		
		<!-- jQuery -->
        <script src="{{ asset ('assets/js/jquery-3.5.1.min.js') }}"></script>
		
		<!-- Bootstrap Core JS -->
        <script src="{{ asset ('assets/js/popper.min.js') }}"></script>
        <script src="{{ asset ('assets/plugins/bootstrap/js/bootstrap.min.js') }}"></script>
		
		<!-- Slimscroll JS -->
		<script src="{{ asset ('assets/plugins/slimscroll/jquery.slimscroll.min.js') }}"></script>
		
		<!-- Chart JS -->
		<script src="{{ asset ('assets/plugins/apexchart/apexcharts.min.js') }}"></script>
		<script src="{{ asset ('assets/plugins/apexchart/chart-data.js') }}"></script>
		
		<!-- Custom JS -->
		<script  src="{{ asset ('assets/js/script.js') }}"></script>
		
    </body>
</html>