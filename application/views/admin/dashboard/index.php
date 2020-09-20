<div class="container-fluid admin-area">
	<div class="row">
		<div class="content-header col-12">
	      <h2 class="content-title"><i class="la la-dashboard la-2x">  </i> Dashboard</h2>
	    </div>
	</div>
	<div class="row dashboard">

		<div class="col-md-3">
			<div class="card mb-3 dash">
			  <div class="row no-gutters">
					<div class="col-md-8">
						<div class="card-body">
							<h5 class="card-title"><?php echo count($this->user_m->total_sell()); ?></h5>
							<p class="card-text sub-title">Total Sales</p>
							<p class="card-text"><small class="text-muted"><b>Today: </b> <span class="num"><?php echo count($this->user_m->today_sell()); ?></span></small></p>
						</div>
					</div>
			    <div class="col-md-4 icon">
			      <i class="fa fa-shopping-cart fa-3x"></i>
			    </div>
			  </div>
			</div>
		</div>

		<div class="col-md-3">
			<div class="card mb-3 dash">
				<div class="row no-gutters">
					<div class="col-md-8">
						<div class="card-body">
							<h5 class="card-title"><?php echo count($this->user_m->total_product()); ?></h5>
							<p class="card-text sub-title">Total Medicine</p>
							<p class="card-text">
								<small class="text-muted"><b>Out of Stock:</b> <span class="num"><?php echo $this->user_m->outofstock_product(); ?></span></small>
								<small class="text-muted right"><b>Expired:</b> <span class="num"><?php echo count($this->user_m->expired_product()); ?></span></small>
							</p>
						</div>
					</div>
					<div class="col-md-4 icon">
						<i class="	fa fa-medkit fa-3x"></i>
					</div>
				</div>
			</div>
		</div>

		<div class="col-md-3">
			<div class="card mb-3 dash">
				<div class="row no-gutters">
					<div class="col-md-8">
						<div class="card-body">
							<h5 class="card-title"><?php echo count($this->user_m->all_order()); ?></h5>
							<p class="card-text sub-title">Delivery Request</p>
							<p class="card-text"><small class="text-muted"><b>Today: </b> <span class="num"><?php echo count($this->user_m->today_order()); ?></span></small></p>
						</div>
					</div>
					<div class="col-md-4 icon">
						<i class="fa fa-truck fa-3x"></i>
					</div>
				</div>
			</div>
		</div>

		<div class="col-md-3">
			<div class="card mb-3 dash">
				<div class="row no-gutters">
					<div class="col-md-8">
						<div class="card-body">
							<h5 class="card-title"><?php echo $this->user_m->total_customer(); ?></h5>
							<p class="card-text sub-title">Total Customer</p>
							<p class="card-text"><small class="text-muted"><b>Today: </b> <span class="num"><?php echo $this->user_m->today_customer(); ?></span></small></p>
						</div>
					</div>
					<div class="col-md-4 icon">
						<i class="fa fa-user fa-3x"></i>
					</div>
				</div>
			</div>
		</div>

	</div>


<br><br>
	<div class="row">
		<div class="content-header col-12">
				<h2 class="content-title"><i class="la la-hourglass-half la-2x">  </i> Quick Action</h2>
			</div>
	</div>

	<div class="row dashboard">

		<div class="col-md-3">
			<div class="card mb-3 dash">
			  <div class="row no-gutters">
					<div class="col-md-8">
						<div class="card-body">
							<h5 class="card-title">
								<i class="fa fa-plus"></i>
							</h5>
							<p class="card-text sub-title">Add Sell</p>
							<p class="card-text"><small>Add New Sales</small>
								<!-- <small class="text-muted"><b>Today: </b> <span class="num">04</span></small> -->
							</p>
						</div>
					</div>
			    <div class="col-md-4 icon">
			      <i class="fa fa-cart-plus fa-3x"></i>
			    </div>
			  </div>
			</div>
		</div>

		<div class="col-md-3">
			<a href="<?php echo site_url('admin/product/edit'); ?>">
				<div class="card mb-3 dash">
					<div class="row no-gutters">
						<div class="col-md-8">
							<div class="card-body">
								<h5 class="card-title"><i class="fa fa-plus"></i></h5>
								<p class="card-text sub-title">Add Medicine</p>
								<p class="card-text">
									<small>Add new product</small>
								</p>
							</div>
						</div>
						<div class="col-md-4 icon">
							<i class="	fa fa-medkit fa-3x"></i>
						</div>
					</div>
				</div>
			</a>
		</div>

		<div class="col-md-3">
			<div class="card mb-3 dash">
				<div class="row no-gutters">
					<div class="col-md-8">
						<div class="card-body">
							<h5 class="card-title"><i class="fa fa-hourglass-half"></i></h5>
							<p class="card-text sub-title">Pending Delivery</p>
							<p class="card-text"><small class="text-muted"><b>Today: </b> <span class="num"><?php echo count($this->user_m->processed()); ?></span></small></p>
						</div>
					</div>
					<div class="col-md-4 icon">
						<i class="fa fa-truck fa-3x"></i>
					</div>
				</div>
			</div>
		</div>

		<!-- <div class="col-md-3">
			<a href="#" class="card mb-3 dash">
				<div class="row no-gutters">
					<div class="col-md-8">
						<div class="card-body">
							<h5 class="card-title"><i class="fa fa-eye"></i></h5>
							<p class="card-text sub-title">View Reports</p>
							<p class="card-text"><small class="text-muted"><b>Today: </b> <span class="num">04</span></small></p>
						</div>
					</div>
					<div class="col-md-4 icon">
						<i class="fa fa-pie-chart fa-3x"></i>
					</div>
				</div>
			</a>
		</div> -->

	</div>

</div>
