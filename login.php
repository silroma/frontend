<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
   <!--Made with love by Mutiullah Samim -->
   
	<!--Bootsrap 4 CDN-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
    <!--Fontawesome CDN-->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

	<!--Custom styles-->
	<link href="https://fonts.googleapis.com/css?family=Acme|Courgette|Pacifico&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="css/login.css">

</head>
<body>



<div class="container">
	<div class="d-flex justify-content-center h-100">
		<div class="card">
			<div class="card-header">
				<h3>Please Sign In</h3>
			</div>
			<div class="card-body">
			<form action="validation.php" method="post">
					<div class="field-group">
						<span class="fas fa-user" aria-hidden="true"></span>
						<div class="wthree-field">
							<input name="username" id="text1" type="text" value="" placeholder="Username" required>
						</div>
					</div>
					<div class="field-group">
						<span class="fas fa-key" aria-hidden="true"></span>
						<div class="wthree-field">
							<input name="pass" id="myInput" type="password" placeholder="Password" required>

						</div>
					</div>
					<div class="wthree-field">
						<button type="submit" class="btn">Get Started</button>
					</div>
					<ul class="list-login">
						<li class="switch-agileits">
							<label class="switch">
								<input type="checkbox">
								<span class="slider round"></span>
								keep Logged in
							</label>
						</li>
						<li>
							<a href="#" class="text-right">forgot password?</a>
						</li>
						<li class="clearfix"></li>
					</ul>
				</form>
			
			
			
			
			<!--
			
				<form action="login_action.php" method="post">
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text" style="background-color: #fff; color:#0408c6;" ><i class="fas fa-user"></i></span>
						</div>
						<input type="text" class="form-control"  placeholder="Email address" name="email" required>
						
					</div>
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text" style="background-color: #fff; color:#0408c6;"><i class="fas fa-key"></i></span>
						</div>
						<input type="password" class="form-control" placeholder="Password" name="pass" required>
					</div>

					<div class="form-group">
            <input type="submit" value="Submit" class="block">
					</div>
				</form>
				
				
			-->
			</div>
		</div>
	</div>
</div>


<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


</body>
</html>