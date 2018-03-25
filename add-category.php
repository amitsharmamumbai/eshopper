<?php
	require_once 'header.php';
?>
	<div class="container">
		
		<section id="form"><!--form-->
		<div class="container">
			<div class="row">
				<div class="col-sm-4 col-sm-offset-1">
					<div class="login-form"><!--login form-->
						<h2>Category Form</h2>
						<form id="categoey_form">
							<input placeholder="Mens Wear" type="text" name="catname">
							<button type="button" class="btn btn-default btn-cat">Add</button>
						</form>
						<div class="msg"></div>
					</div><!--/login form-->
				</div>
				<div class="col-sm-1">
					<h2 class="or">OR</h2>
				</div>
				<div class="col-sm-4">
					<div class="signup-form"><!--sign up form-->
						<h2>Brand Form</h2>
						<form action="brand-action.php" method="post">
							<input placeholder="Puma" type="text" name="brname">		
							<button type="submit" class="btn btn-default">Add</button>
						</form>
					</div><!--/sign up form-->
				</div>
			</div>
		</div>
	</section>
	</div>
<?php
	require_once 'footer.php';
?>