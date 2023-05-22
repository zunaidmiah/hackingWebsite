<!DOCTYPE html>
<html>
	<head>
		<title>CardingEmpire</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="Author" content="CardingEmpire">
		<meta name="copyright" content="CardingEmpire">
		<meta name="description" content="Seized by CardingEmpire">
		<meta property="og:image" content="https://i.ibb.co/HGp1mmD/image.jpg">
		<meta property="og:title" content="Seized by CardingEmpire">
		<link href='http://fonts.googleapis.com/css?family=Iceberg:400,700' rel='stylesheet' type='text/css'>
		<!-- CSS only -->
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

		<link rel="stylesheet" type="text/css" href="{{  asset('css/user_login.css')  }}">

	</head>
	<body>
		<center>
			<div id="outPopUp">
				<br><br>
				<form action="adminAuthentication" method="post" name="sign in">
					{{ csrf_field() }}
					<div class="container">
						<div class="mb-3 heading">
					    <a href="/"><img src="https://i.ibb.co/RYnFPnv/icon.png" height="60" width="80" alt="Garuda Security Hacker" class="image"></a>
						<h1 style="color: white;">Admin Login Portal </h1>

					  </div>
					  @if(session('message'))
					  <div class="alert alert-success"><span class="glyphicon glyphicon-ok"></span><em> {!! session('message') !!}</em></div>
					  @endif
					  <div class="mb-3">
					    <label for="Username" class="form-label">Admin</label>
					    <input type="text" class="form-control" name="username" id="username" placeholder="Enter your username" required>
					  </div>
					  <div class="mb-3">
					    <label for="Password" class="form-label">Password</label>
					    <input type="password" class="form-control" name="password" id="password" placeholder="Enter your password" required>
					  </div>
					  <button type="submit" class="btn btn-primary">Sign in</button>
					  <h6 class="h6">Don't have any account?</h6><div class="register"><a href="register" ><p>Register</p></a></div>
				  </div>
				</form>
				<footer id="fot" style="position:fixed; left:0px; right:0px; bottom:0px; border-top:0px solid #00bb00; border-bottom:0px solid #00bb00;">
					<span style="color:red;" id="12">&copy; 2017-2021</span> | All Rights reserved <span style="color:red;" id="12"> CardingEmpire
				</footer>
			</div>
		<style>
		html, body, center {
			cursor: url('../icon/cursor.png'),auto;
		}
		#fot  {
			color: white;
			text-shadow: green 5px 1px 10px;
			font-family: Iceberg, sans-serif;
			text-align: center;
			background-color: rgba(0, 0, 0, 0.7);
			font-size: 14px;
		}
		#mtxt {
			color: white;
			font-weight: bold;
			font-style: italic;
			font-family: Courier;
			text-shadow: green 5px 3px 10px;
			background-color: rgba(0, 0, 0, 0.7);
			margin-top: 2%;
		}
		#outPopUp {
		  position: absolute;
		  left: 1%;
		  right: 1%;
		  background: transparent;
		}
		p {
			color: yellow;
			font-family: Courier;
			font-size: 21px;
		}
		#df{
			animation-name: rotate ;
			animation-duration: 5s;
			animation-play-state: running;
			animation-timing-function: linear;
			animation-iteration-count: infinite;
		}
		@keyframes rotate{
			10% {transform:rotateY(36deg)}
			20% {transform:rotateY(72deg)}
			30% {transform:rotateY(108deg)}
			40% {transform:rotateY(144deg)}
			50% {transform:rotateY(180deg)}
			60% {transform:rotateY(216deg)}
			70% {transform:rotateY(252deg)}
			80% {transform:rotateY(288deg)}
			90% {transform:rotateY(324deg)}
			100% {transform:rotateY(360deg)}
		}
		</style>
		<style>
			* {margin: 0; padding: 0; overflow: hidden;}
			body {background: black; overflow: hidden;}
			canvas {display: block;}
		</style>
		<canvas id="c"></canvas>
		<script>var c = document.getElementById("c");
		var ctx = c.getContext("2d");

		c.height = window.innerHeight;
		c.width = window.innerWidth;


		var binary = "QWERTYUIOPqwertyuiopASDFGHJKLasdfghjklZXCVBNMzxcvbnm";
		binary = binary.split("");

		var font_size = 10;
		var columns = c.width/font_size;
		var drops = [];
		for(var x = 0; x < columns; x++)
			drops[x] = 1; 

		function draw()
		{
			ctx.fillStyle = "rgba(0, 0, 0, 0.05)";
			ctx.fillRect(0, 0, c.width, c.height);
			
			ctx.fillStyle = "#00ff00"; 
			ctx.font = font_size + "px arial";
			for(var i = 0; i < drops.length; i++)
			{
				var text = binary[Math.floor(Math.random()*binary.length)];
				ctx.fillText(text, i*font_size, drops[i]*font_size);
				if(drops[i]*font_size > c.height && Math.random() > 0.975)
					drops[i] = 0;
				drops[i]++;
			}
		}

		setInterval(draw, 35);
		</script>
		</center>
	<!-- JavaScript Bundle with Popper -->
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
	</body>
</html>