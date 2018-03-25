<?php 
	session_start();
	
	if(isset($_SESSION['pro_username'])){
		header("location:index.php");
	}
	require_once 'header.php';
 ?>
<section id="form"><!--form-->
		<div class="container">
			<div class="row">
				<div class="col-sm-4 col-sm-offset-1">
					<div class="login-form"><!--login form-->
						<h2>Login to your account</h2>
						<form action="login-action.php" method="post">
							<input type="text" placeholder="Email Address" name="useremail"  />
							<input type="password" placeholder="Your Password" name="userpass"  />							
							<button type="submit" class="btn btn-default">Login</button>
						</form>
					</div><!--/login form-->
				</div>
				<div class="col-sm-1">
					<h2 class="or">OR</h2>
				</div>
				<div class="col-sm-4">
					<div class="signup-form"><!--sign up form-->
						<h2>New User Signup!</h2>
						<form id="register_form">
							<input type="text" placeholder="Name" name="username" />
							<input type="text" placeholder="Your Mobile" name="usermobile" />
							<input type="text" placeholder="Email Address"  name="useremail" />
							<input type="password" placeholder="Password" name="userpass" />
							<input type="password" placeholder="Confirm Password" name="usercpass" />
							<button type="button" class="btn btn-default btn-register">Signup</button>
						</form>
						<div class="msg"></div>
					</div><!--/sign up form-->
				</div>
			</div>
		</div>
	</section><!--/form-->
	

 <?php 
	require_once 'footer.php';
 ?>