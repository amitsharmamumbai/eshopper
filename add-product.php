<?php
	require_once 'header.php';
?>
	<div class="container">
		
		<section id="form"><!--form-->
		<div class="container">
			<div class="row">
				<div class="col-sm-4 col-sm-offset-1">
					<div class="login-form"><!--login form-->
						<h2>Product Form</h2>
						<form method="post" action="product-action.php" enctype="multipart/form-data">
							<input placeholder="Mens Wear" type="text" name="proname">
							<input placeholder="2300" type="text" name="proprice">
							<input placeholder="20%" type="text" name="prodiscount">
							<select name="procat">
								<option value="">Please select category</option>
								
								<?php
								$q = "select * from pr_category";
								$re = $conn->query($q) or die($conn->error);
								if($re->num_rows>0):
								while($ans= $re->fetch_array(MYSQLI_ASSOC)):	
								?>
								<option value="<?php echo $ans['ca_id'];?>"><?php echo $ans['ca_name'];?></option>
								<?php
								endwhile;
								endif;
								?>
							</select>
							<br />
							<br />
							<select name="probr">
								<option value="">Please select Brand</option>
								<?php
								$q = "select * from pr_brand";
								$re = $conn->query($q) or die($conn->error);
								if($re->num_rows>0):
								while($ans= $re->fetch_array(MYSQLI_ASSOC)):	
								?>
								<option value="<?php echo $ans['br_id'];?>"><?php echo $ans['br_name'];?></option>
								<?php
								endwhile;
								endif;
								?>
							</select>
							<br />
							<br />

							<input type="file" name="propath">
							<textarea placeholder="Product Description" name="prodesc"></textarea>
							<button type="submit" class="btn btn-default btn-cat">Add</button>
						</form>
						
					</div><!--/login form-->
				</div>
				
			</div>
		</div>
	</section>
	</div>
<?php
	require_once 'footer.php';
?>