<div class="left-sidebar">
						<h2>Category</h2>
						<div class="panel-group category-products" id="accordian"><!--category-productsr-->
							<?php
							$str = "select ca_id,ca_name from pr_category";
							// echo $str;
							$result = mysqli_query($conn , $str ) or die(mysqli_error($conn));
							// print_r($result);
							if( $result->num_rows  > 0):
								while( $ans = $result->fetch_array(MYSQLI_ASSOC)):
									// print_r($ans);
							?>
							
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a href="category_wise_product.php?record=<?php echo $ans['ca_id']; ?>">
										<?php
										echo $ans['ca_name'];
										?>
									</a></h4>
								</div>
							</div>
							<?php
										endwhile;
									endif;
									?>
						</div><!--/category-products-->
					
						<div class="brands_products"><!--brands_products-->
							<h2>Brands</h2>
							<div class="brands-name">
								<ul class="nav nav-pills nav-stacked">
									<?php
									$str = "select br_id,br_name from pr_brand";
									// echo $str;
									$result = mysqli_query($conn , $str ) or die(mysqli_error($conn));
									// print_r($result);
									if( $result->num_rows  > 0):
										while( $ans = $result->fetch_array(MYSQLI_ASSOC)):
											// print_r($ans);
									?>
									<li><a href="brand_wise_product.php?record=<?php echo $ans['br_id']; ?>"> <span class="pull-right">(4)</span>
										<?php echo $ans['br_name'];?>
									</a></li>
									<?php
										endwhile;
									endif;
									?>	
								</ul>
							</div>
						</div><!--/brands_products-->
						
						<div class="price-range"><!--price-range-->
							<h2>Price Range</h2>
							<div class="well text-center">
								 <input type="text" class="span2" value="" data-slider-min="0" data-slider-max="600" data-slider-step="5" data-slider-value="[250,450]" id="sl2" ><br />
								 <b class="pull-left">$ 0</b> <b class="pull-right">$ 600</b>
							</div>
						</div><!--/price-range-->
						
						<div class="shipping text-center"><!--shipping-->
							<img src="images/home/shipping.jpg" alt="" />
						</div><!--/shipping-->
					
					</div>