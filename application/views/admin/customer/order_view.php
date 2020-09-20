
<!-- services body -->
<div class="row services-header">
	<div class="container">
		<div class="row">
			<div class="col-lg-2 col-md-3"></div>
			<div class="col-lg-8 col-md-6 col-sm-12 col-xs-12" style="">
				<h1 class="s_header text-center" style="margin-top:20px;"><i class="la la-shopping-cart  la-2x" style="color:#14d963;"></i> MY Order <span style="font-weight: 300;color:#14d963;font-size: .8em">(
					<?php 
						echo $token = ($orders->token != "")? $orders->token: "Invalid Order";
					 ?>
				)</span></h1>				
			</div>
			<div class="col-lg-2 col-md-3 "></div>
		</div>		
	</div>
</div>

<div class="order-bill">
	<div class="container-fulid">
		<div class="row">
			<div class="col-lg-2  col-md-1 col-12 col-sm-12"></div>
			<div class="col-lg-8 col-md-10 col-12 col-sm-12" style="">
				<br>
				<div class="card">
					<?php if($orders):
						$this->load->model('user_m');  
						$this->load->model('service_m');  
						$customer = $this->user_m->get($orders->customer_id);
						// $supplier = $this->user_m->get($orders->supplier_id);
						$service = $this->service_m->service_by_id_icon($orders->service_id);
					?>
					<div class="card-header">
						<div class="row">
							<div class="col-lg-6 col-md-8 col-7 col-sm-12">
								<p><a href="<?php echo site_url('admin/customer/services/'.$service->id) ?>" class="s-link">
								<img height="30" src="<?php echo $photo = ($service->photo !== "") ? site_url('upload/'.$service->photo) : site_url('images/services.png') ; ?>" id="preview" class="img img-responsive">
							 <?php echo $service->s_name; ?>
							</a></p>
							</div>
							<div class="col-lg-6 col-md-4 col-5 col-sm-12">
								<p class="text-right" style="color:#14d963"><i class="fa fa-bookmark" style="color:#ffba28"> </i> <?php echo $orders->token; ?></p>
							</div>
						</div>
						<div class="row">
							<div class="col-12">
								<p><b>Services Details:</b> <span><?php echo $orders->order_des; ?></span></p>
							</div>
						</div>
						<div class="row">
							<div class="col-lg-6 col-md-6 col-7 col-sm-12">
								<p>Client: <?php echo $customer->name; ?></p>
							</div>
							<div class="col-lg-6 col-md-6 col-5 col-sm-12">
								<p class="text-right"><i class="la la-calendar"  style="color:#ffba28"> </i> <?php echo substr($orders->date, 0, 10); ?></p>
							</div>
						</div>
					</div>
					<div class="card-body ">
					    <h5 class="card-title text-center">Bill Statement</h5>
					   <table class="table table-striped">
						  <thead>
						    <tr>
						      <th scope="col">#</th>
						      <th class="text-left" scope="col">Title</th>
						      <th class="text-right" scope="col">Price</th>
						    </tr>
						  </thead>
						  <tbody>
						    <?php 
						    $i = 1;
						    $products = unserialize($orders->o_product);
						    if($products[0][0]):
						    foreach($products[0] as $key => $value):
						    // foreach($products as $product => $value):
						     ?>
						    <tr>
						      <th scope="row"><?php echo $i++; ?></th>
						      <td class="text-left"><?php echo $value; ?> </td>
						      <td class="text-right"><span class="price"><?php echo $products[1][$key]; ?></span> ৳</td>
						    </tr>
						<?php endforeach; endif; ?>
						    <tr>
						      <th scope="row"></th>
						      <td class="text-left">Services Charge</td>
						      <td class="text-right"><span class="price"><?php echo $orders->s_charge; ?></span> ৳</td>
						    </tr>
						    <tr>
						      <th scope="row"></th>
						      <td class="text-left">Visiting Charge</td>
						      <td class="text-right"><span class="price">100</span> ৳</td>
						    </tr>
						    <tr>
						      <!-- <th scope="row">4</th> -->
						      <td class="text-right" colspan="2">Total</td>
						      <td class="text-right "><span class="total-price"></span> ৳</td>
						    </tr>
						  </tbody>
						</table>
						<!-- <p style="padding: 15px;margin: 15px;background: #e6e6e6"> <b></p> -->
						<div class="alert alert-success" role="alert" style="margin: 15px;">
						  <b>Note: </b><?php echo $orders->note;?>
						</div>
				  	</div>
				  	<div class="card-footer text-center">
				  		<?php
				  		 $review = $this->order_m->review_by_token($orders->token); 
				  		 if($review):
				  		?>
				    	<h6>REVIEW</h6>
				    	<p>
				    		<?php 
				    			for($i = 1; $i <= $review->review; $i++): 
				    		?>
				    		<i class="la la-star la-2x"  style="color:#ffba28"></i>
				    		<?php endfor; ?>
				    		<?php 
				    			for($i = 1; $i <= (5-$review->review); $i++): 
				    		?>
				    		<i class="la la-star-o la-2x"  style="color:#ffba28"></i>
				    		<?php endfor; ?>
				    		
				    	</p>
				    	<p>
				    		<?php echo $review->r_des; ?>
				    	</p>
				    	<?php 
				    		else:
				    	 ?>
						<h6>PLEASE REVIEW THIS SERVICE</h6>
				    	<p>
				    	</p>
				    	<p>
				    		<form action="">
					    		<div class="form-check">
								  <input class="form-check-input" type="radio" name="review" id="review1" value="1" checked>
								  <label class="form-check-label" for="review1">
								    <i class="la la-star"  style="color:#ffba28"></i>
								  </label>
								</div>
								<div class="form-check">
								  <input class="form-check-input" type="radio" name="review" id="review2" value="2">
								  <label class="form-check-label" for="review2">
								    <i class="la la-star"  style="color:#ffba28"></i>
								    <i class="la la-star"  style="color:#ffba28"></i>
								  </label>
								</div>
								<div class="form-check">
								  <input class="form-check-input" type="radio" name="review" id="review3" value="3">
								  <label class="form-check-label" for="review3">
								    <i class="la la-star"  style="color:#ffba28"></i>
								    <i class="la la-star"  style="color:#ffba28"></i>
								    <i class="la la-star"  style="color:#ffba28"></i>
								  </label>
								</div>
								<div class="form-check">
								  <input class="form-check-input" type="radio" name="review" id="review4" value="4">
								  <label class="form-check-label" for="review4">
								    <i class="la la-star"  style="color:#ffba28"></i>
								    <i class="la la-star"  style="color:#ffba28"></i>
								    <i class="la la-star"  style="color:#ffba28"></i>
								    <i class="la la-star"  style="color:#ffba28"></i>
								  </label>
								</div>
								<div class="form-check">
								  <input class="form-check-input" type="radio" name="review" id="review5" value="5">
								  <label class="form-check-label" for="review5">
								    <i class="la la-star"  style="color:#ffba28"></i>
								    <i class="la la-star"  style="color:#ffba28"></i>
								    <i class="la la-star"  style="color:#ffba28"></i>
								    <i class="la la-star"  style="color:#ffba28"></i>
								    <i class="la la-star"  style="color:#ffba28"></i>
								  </label>
								</div>							
				    			<div class="form-group">
				    				<textarea name="r_des" id="r_des" cols="20" rows="3" class="form-control"></textarea>
				    			</div>	
				    			<br>
				    			<button class="btn btn-warning" type="button" id="add_review">SUBMIT</button>
				    		</form>
				    	</p>
				    	<script>
				    		$('#add_review').click(function(){
				    			var review = $( "input:checked" ).val();
				    			var r_des = $("#r_des").val();
				    			var token = '<?php echo $orders->token; ?>';
				    			var service_id = '<?php echo $orders->service_id; ?>';
				    			var url = '<?php echo site_url("admin/customer/add_review"); ?>';
				    			if(review){
						    		var data = {
						    			review : review,
						    			r_des : r_des,
						    			token : token,
						    			service_id : service_id,
						    		};

						    		// console.log(data);
						    		// AJAX
								    $.post(url, data, function(result){
								   			if(result){
								   				 alertify.success('<p class="text-center" style="color:#fff;margin:0px">Thank YOU FOR REVIEW</p>');
								   				 location.reload();
								   			}else{
								   				
								   				 alertify.error('<p class="text-center" style="color:#fff;margin:0px">Data Error</p>');
								   			}
								   			// console.log(result);
								    });

						    	}else{
								   	console.log('data error');    		
						    	}    	
				    		});


				    	</script>
				    	 <?php 
				    	 	endif;
				    	  ?>
				  	</div>
				  	<?php
						else: 
					?>
							<div class="token-wrapper" style="max-width:400px; margin: 3em auto">
								<div class="token">

									<p class="text-center" style="color:#14d963"><i class="la la-warning la-4x"></i></p>
									<h4 > <b style="color:#4d4d4d">OPS!</b></h4>
									<p class="text-center" style="color:#14d963">This is not a Valid Order</p>
									<a href="<?php echo site_url(); ?>" class="btn btn-customer btn-block btn-warning"> GOTO HOME</a>
								</div>
							</div>
					<?php endif; ?>
				</div>								
			</div>
			<div class="col-lg-2  col-md-1 col-12 col-sm-12"></div>
		</div>		
	</div>
</div>


<script>
	var p = $('.price');
	var t_p = 0;
	p.each(function(){
		console.log($( this ).text());
		t_p = t_p + parseInt($( this ).text());
	});
	console.log(t_p);
	$('.total-price').html(t_p);
</script>