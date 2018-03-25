<?php
	session_start();
	if(!isset($_SESSION['pro_username'])){
		header("location:logout.php");
	}
	require_once 'header.php';
?>
	<section id="form"><!--form-->
		<div class="container">
			<div class="row">
				<div class="col-sm-4 col-sm-offset-1">
					<div class="login-form"><!--login form-->
						<h2>Update Password</h2>
						<form action="password-action.php" method="post">
							
							<input type="password" placeholder="Current Password" name="cpass"  />							
							<input type="password" placeholder="New Password" name="npass"  />							
							<input type="password" placeholder="Confirm New Password" name="cnpass"  />							
							<button type="submit" class="btn btn-default">Update</button>
						</form>
					</div><!--/login form-->
				</div>
				
			</div>
		</div>
	</section><!--/form-->
	
<?php
	require_once 'footer.php';
?>