
<!-- services body -->
<div class="row services-header">
	<div class="container">
		<div class="row">
			<div class="col-lg-2 col-md-3"></div>
			<div class="col-lg-2 col-md-3 col-4 col-sm-4 col-xs-6" style="">
				<img src="<?php echo $photo = ($services->photo !== "") ? site_url('upload/'.$services->photo) : site_url('images/services.png') ;
               ?>" id="preview" class="img-fluid">
    
			</div>
			<div class="col-lg-6 col-md-3 col-8 col-sm-8 col-xs-6" style="">
				<h1 class="s_header"><?php echo $services->s_name;?></h1>
				
			</div>
			<div class="col-lg-2 col-md-3 "></div>
		</div>		
	</div>
</div>

<div class="row services-tab-nav">
	<div class="container">
		<div class="row">
			<div class="col-lg-2 col-md-3"></div>
			<div class="col-lg-8 col-md-6 col-12 col-sm-12 col-xs-12" style="">
				<!-- tab -->
				<ul class="nav nav-tabs" id="myTab" role="tablist">
				  <li class="nav-item">
				    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true"><i class="la la-comment "></i> Services Info</a>
				  </li>
				  <li class="nav-item">
				    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false"><i class="la la-certificate "></i> Reviews</a>
				  </li>
				</ul>		

				<!-- tab -->
								
			</div>
			<div class="col-lg-2 col-md-3 "></div>
		</div>	
	</div>
</div>
<div class="row services-tab-body">
	<div class="container">
		<div class="row">
			<div class="col-lg-2 col-md-3"></div>
			<div class="col-lg-8 col-md-6 col-12 col-sm-12 col-xs-12" style="">
				<!-- tab -->
		
				<div class="tab-content" id="myTabContent">
				  <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
				  	<p><?php echo $services->s_des;?></p>
						</div>
				  <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
					<div class="card" style="width: 100%;">
						<?php
							$review = $this->service_m->review_by_service($services->id); 
						?>
					  <div class="card-header">
					    <p class="text-center">
					    	<i class="la la-star la-2x" style="color: #ffba1f !important;"></i>
							<i class="la la-star la-2x" style="color: #ffba1f !important;"></i>
							<i class="la la-star la-2x" style="color: #ffba1f !important;"></i>
							<i class="la la-star la-2x" style="color: #ffba1f !important;"></i>
							<i class="la la-star la-2x" style="color: #ffba1f !important;"></i>
					    </p>
					    <p class="text-center"><b>TOTAL <span style="color: #14d963 !important;"><?php echo count($review); ?></span> POSITIVE REVIEW</b></p>
					  </div>
					  <ul class="list-group list-group-flush">
					    <?php
					     if($review): foreach($review as $r): 
							$customer = $this->service_m->client_by_token($r->token);
					    ?>
					    <li class="list-group-item row">
							<div class="col-3">
								
								<div class="profile  pull-left"></div>
								<style>
									.profile{
										height: 70px;
										width: 70px;
										background: url("<?php echo  $photo = ($customer->photo !== "") ? site_url('upload/'.$customer->photo) :site_url('images/profile.jpg') ; ?>");
										border-radius: 50%;
										background-size: cover;
										position: center center;
										background-repeat: no-repeat;
										margin:10px;	 
										/*border:2px solid #ffba1f;*/
									}
								</style>
							</div> 	
							<div class="col-9">
								<span class="row">
									<span class="col-7">
										<b class="c_name"><?php echo $customer->name; ?></b>
									</span>
									<span class="col-5">
										<?php 
							    			for($i = 1; $i <= $r->review; $i++): 
							    		?>
							    		<i class="la la-star"  style="color:#ffba28"></i>
							    		<?php endfor; ?>
							    		<?php 
							    			for($i = 1; $i <= (5-$r->review); $i++): 
							    		?>
							    		<i class="la la-star-o"  style="color:#ffba28"></i>
							    		<?php endfor; ?>
									</span>
								</span>
								<span class="row">
									<span class="col-12">
										<p><?php echo $r->r_des; ?></p>
									</span>
								</span>
							</div>
					    </li>
					    <?php endforeach; else: ?>
					    	<p class="text-center"><b>NO REVIEW YET</b></p>
					    <?php endif; ?>
					  </ul>
					</div>
				  </div>
				</div>

								
			</div>
			<div class="col-lg-2 col-md-3 "></div>
		</div>		
	</div>
</div>
<br>
<div class="row services-order">
	<div class="container">
		<div class="row">
			<div class="col-lg-2 col-md-3"></div>
			<div class="col-lg-8 col-md-6 col-12 col-sm-12 col-xs-12" style="">
				<a href="<?php echo site_url('admin/customer/token/'.$services->id); ?>" class="btn btn-warning btn-block btn-customer">
					GET TOKEN FOR THIS SERVICES
				</a>
			</div>
			<div class="col-lg-2 col-md-3 "></div>
		</div>		
	</div>
</div>