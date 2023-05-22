<!DOCTYPE html>
<html lang="en">
    
	<head>
	    <meta charset="utf-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
	    <title>Carding Empire - @yield('tittle')</title>
		
		<!-- Favicon -->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,500;0,600;0,700;1,400&amp;display=swap">
		
		<!-- Bootstrap CSS -->
	    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
		
		<!-- Fontawesome CSS -->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/fontawesome.min.css" integrity="sha512-shT5e46zNSD6lt4dlJHb+7LoUko9QZXTGlmWWx0qjI9UhQrElRb+Q5DM7SVte9G9ZNmovz2qIaV7IWv0xQkBkw==" crossorigin="anonymous" />
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />
		
		<!-- Main CSS -->
	    
	    <link rel="stylesheet" type="text/css" href="{{  asset('css/custom-buy-button-styling.css')  }}">
	    <link rel="stylesheet" type="text/css" href="{{  asset('css/custom-modal-styling.css')  }}">
   	</head>
    <body onload="myFunction()">
	
		<!-- Main Wrapper -->
        <div class="main-wrapper">
		
			<!-- Header -->
            <div class="header">
			
				<!-- Logo -->
                <div class="header-left" style="background-color: rgba(0,0,0,.7);">
                    <a href="#" class="logo">
						<img src="https://i.ibb.co/RYnFPnv/icon.png" alt="Logo">
					</a>
					<a href="#" class="logo logo-small">
						<img src="https://i.ibb.co/RYnFPnv/icon.png" alt="Logo" width="30" height="30">
					</a>
                </div>
				<!-- /Logo -->
				
				<a href="javascript:void(0);" id="toggle_btn">
					<i class="fas fa-align-left"></i>
				</a>
				
				<!-- Search Bar -->
				<div class="top-nav-search">
					<form>
						<input type="text" class="form-control" placeholder="Search here">
						<button class="btn" type="submit"><i class="fas fa-search"></i></button>
					</form>
				</div>
				<!-- /Search Bar -->
				
				<!-- Mobile Menu Toggle -->
				<a class="mobile_btn" id="mobile_btn">
					<i class="fas fa-bars"></i>
				</a>
				<!-- /Mobile Menu Toggle -->
				
				<!-- Header Right Menu -->
				<ul class="nav user-menu">
					<p class="nav-link username" style="font-size: 14px; margin-top: 4%;margin-right: -10%;">{{ session('customer_username') }}</p>
					<!-- User Menu -->
					<li class="nav-item dropdown">
						<a href="/profile" class="dropdown-toggle nav-link" data-toggle="dropdown">
							<span class="user-img"><img class="rounded-circle" src="{{ asset('icon/customer_avatar.png') }}" width="31" alt="Ryan Taylor"></span>
						</a>
						
					</li>
					<!-- /User Menu -->
					
				</ul>
				<!-- /Header Right Menu -->
				
            </div>
			<!-- /Header -->
			
			<!-- Sidebar -->
            <div class="sidebar" id="sidebar">
                <div class="sidebar-inner slimscroll">
					<div id="sidebar-menu" class="sidebar-menu">
						<ul>
							<li class="menu-title"> 
								<span>Main Menu</span>
							</li>
							<li class="active"> 
								<a href="/dash"><i class="fas fa-th-large"></i> <span>Dashboard</span></a>
							</li>
							<li>
								<a href="/profile"><i class="fas fa-id-card"></i> <span>My Profile</span></a>
							</li>
							<li>
								<a href="/card-check"><i class="fas fa-tasks"></i> <span>Card Checker</span></a>
							</li>

							<li class="menu-title"> 
								<span>Marketplace</span>
							</li>

							<li>
								<a href="/card-shop"><i class="fas fa-credit-card"></i> <span> Card Shop</span></a>
							</li>
							<li> 
								<a href="/bank-shop"><i class="fas fa-holly-berry"></i> <span>Bank Account Shop</span></a>
							</li>
							<li> 
								<a href="/exploit-shop"><i class="fas fa-viruses"></i> <span>Exploit Shop</span></a>
							</li>
							<li> 
								<a href="/paypal-shop"><i class="fab fa-cc-paypal"></i> <span>Paypal Shop</span></a>
							</li>
				

							<li class="menu-title"> 
								<span>Others</span>
							</li>

							<li> 
								<a href="/support"><i class="fas fa-info-circle"></i> <span>Support</span></a>
							</li>
							<li> 
								<a href="/get-api"><i class="fas fa-hotel"></i> <span>Api access</span></a>
							</li>
							<li> 
								<a href="/logout"><i class="fas fa-sign-out-alt"></i> <span>Log Out</span></a>
							</li>
							
						</ul>
					</div>
                </div>
            </div>
			<!-- /Sidebar -->
			
			<!-- Page Wrapper -->
            <div class="page-wrapper">
			
                @yield('body')
				
				<!-- Footer -->
				<footer>
					<p style="color: red;text-align: center;">Copyright © 2017-2020 CardingEmpires.</p>					
				</footer>
				<!-- /Footer -->

			</div>
			<!-- /Page Wrapper -->

			
		
        </div>
		<!-- /Main Wrapper -->
		
		<!-- jQuery -->
        <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
		
		<!-- Bootstrap Core JS -->
        <script src="{{ asset('js/popper.min.js') }}"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
		
		<!-- Slimscroll JS -->
		<script src="{{ asset('js/jquery.slimscroll.min.js') }}"></script>
		
		<!-- Datatables -->
		<script  src="{{ asset ('js/datatables.min.js') }}"></script>

		<!-- Custom JS -->
		<script  src="{{ asset ('js/script.js') }}"></script>
		<script  src="{{ asset ('js/custom.js') }}"></script>
		
    </body>
</html>