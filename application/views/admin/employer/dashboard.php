<!-- SETTING-->
<div class="row services-header">
	<div class="container">
		<div class="row">
			<div class="col-lg-2 col-md-3"></div>
			<div class="col-lg-2 col-md-3 col-4 col-sm-4 col-xs-6" style="">
				<!-- <img height="100px !important" src="<?php echo  $photo = ($users->photo !== "") ? site_url('upload/'.$users->photo) :site_url('images/profile.jpg') ; ?>" id="preview" class=" rounded-circle"> -->
			</div>
			<div class="col-lg-6 col-md-3 col-8 col-sm-8 col-xs-6" style="">
				<div class="profile  pull-left"></div>
				<style>
					.profile{
						height: 90px;
						width: 90px;
						background: url("<?php echo  $photo = ($users->photo != "") ? site_url('upload/'.$users->photo) :site_url('images/profile.jpg') ; ?>");
						border-radius: 50%;
						background-size: cover;
						position: center center;
						background-repeat: no-repeat;
						margin:10px;	 
						border:2px solid #ffba1f;
					}
				</style>
					
				<h1 class="s_header pull-left" style="margin-top: 20px;color: #22313f;"><?php echo $users->name; ?>
				</h1>
					<p class=" pull-left" style="text-transform: uppercase;font-size: .79em;font-weight: 700;color: #14d963; width: 60%	">
						<?php
							$address = unserialize($users->address);
						 	if($address){
						 		echo $address['flat'].' , Floor: ',$address['floor'].' , Bulding:  ',$address['bulding'];
						 	}else{
						 		echo '<a href="'.site_url('admin/customer/setting/#address').'" class=" pull-left" style="text-transform: uppercase;font-size: .79em;font-weight: 700;color: #14d963;""> Please  provide  your  Address</a>';
						 	}
						?>
					</p>				
			</div>
			<div class="col-lg-2 col-md-3 "></div>
		</div>		
	</div>
</div>
<!-- end header -->
<div class="row my-token">
	<div class="container">
		<div class="row">
			<!-- <div class="col-12">
			</div> -->
			<div class="col-lg-3 col-md-3 col-0 col-sm-1"></div>
			<div class="col-lg-6 col-md-6 col-12 col-sm-10">
				<!-- TOKEN info card -->
				<div class="setting-form container">
					<h2><i class="la la-bookmark"></i> My Tokens</h2>
					<ul class="nav row">
							<li class=" col-4 nav-item text-center">
								<a href="<?php echo site_url('admin/customer/tokens'); ?>" class="nav-link ">
									<p class="text-center"><i class="la la-bookmark la-2x"></i>
									<b>0 </b>
									<br>
									<small>Active</small></p>
								</a>
							</li>
							<li class=" col-4 nav-item text-center">
								<a href="<?php echo site_url('admin/customer/tokens'); ?>" class="nav-link ">
									<p class="text-center">
									<i class="la la-bookmark la-2x"></i>
									<b>0 </b>
									<br>
									<small>Complete</small></p>
								</a>
							</li>
							<li class=" col-4 nav-item text-center">
								<a href="<?php echo site_url('admin/customer/tokens'); ?>" class="nav-link ">
									<p class="text-center">
									<i class="la la-bookmark la-2x"></i>
									<b>0 </b>
									<br>
									<small>Cancle</small></p>
								</a>
							</li>
						</ul>	
				</div>
				<!-- TOKEN info card -->

				<!-- TOKEN info card -->
				<div class="setting-form container">
					<h2><i class="la la-bookmark"></i> My Order</h2>
					<ul class="nav row">
							<li class=" col-4 nav-item text-center">
								<a href="<?php echo site_url('admin/customer/orders'); ?>" class="nav-link ">
									<p class="text-center"><i class="la la-bookmark la-2x"></i>
									<b>0 </b>
									<br>
									<small>Active</small></p>
								</a>
							</li>
							<li class=" col-4 nav-item text-center">
								<a href="<?php echo site_url('admin/customer/orders'); ?>" class="nav-link ">
									<p class="text-center">
									<i class="la la-bookmark la-2x"></i>
									<b>0 </b>
									<br>
									<small>Complete</small></p>
								</a>
							</li>
							<li class=" col-4 nav-item text-center">
								<a href="<?php echo site_url('admin/customer/orders'); ?>" class="nav-link ">
									<p class="text-center">
									<i class="la la-bookmark la-2x"></i>
									<b>0 </b>
									<br>
									<small>Cancle</small></p>
								</a>
							</li>
						</ul>	
				</div>
				<!-- TOKEN info card -->
				
			</div>
			<div class="col-lg-3 col-md-3 col-0 col-sm-1"></div>
		</div>
	</div>
</div>

