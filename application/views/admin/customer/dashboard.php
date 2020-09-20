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
							<h5 class="card-title"><?php echo count($this->user_m->get_customer_order()); ?></h5>
							<p class="card-text sub-title">Total Order</p>
							<p class="card-text"></p>
							<!-- <p class="card-text"><small class="text-muted"><b>Today: </b> <span class="num"><?php echo $this->user_m->today_sell(); ?></span></small></p> -->
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
							<h5 class="card-title"><?php echo count($this->user_m->customer_complete_order()); ?></h5>
							<p class="card-text sub-title">Complete Order</p>
							<p class="card-text">
								<p class="card-text"></p>
								<!-- <small class="text-muted"><b>Out of Stock:</b> <span class="num"><?php echo $this->user_m->outofstock_product(); ?></span></small>
								<small class="text-muted right"><b>Expired:</b> <span class="num"><?php echo $this->user_m->expired_product(); ?></span></small> -->
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
							<h5 class="card-title"><?php echo count($this->user_m->customer_delivery_order()); ?></h5>
							<p class="card-text sub-title">On Delivery Order</p>
							<p class="card-text"></p>
							<!-- <p class="card-text"><small class="text-muted"><b>Today: </b> <span class="num">04</span></small></p> -->
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
							<h5 class="card-title"><?php echo count($this->user_m->customer_pending_order()); ?></h5>
							<p class="card-text sub-title">Pending Order</p>
							<p class="card-text"></p>
							<!-- <p class="card-text"><small class="text-muted"><b>Today: </b> <span class="num"><?php echo $this->user_m->today_customer(); ?></span></small></p> -->
						</div>
					</div>
					<div class="col-md-4 icon">
						<i class="fa fa-user fa-3x"></i>
					</div>
				</div>
			</div>
		</div>

	</div>



</div>
