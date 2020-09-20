<div class="row c_search">
	<div class="container">
		<div class="row">
			<div class="col-0 col-lg-2 col-md-2 col-sm-1"></div>
			<div class="content-header col-12 col-lg-8 col-md-8 col-sm-10">
		      <h2 class="text-center hidden-xs-down">
		      	<span>Simple way to buy and schedule</span> Home Services
		 	 </h2>
	      	<form action="" method="GET">
	      		<input type="search" class="form-control c_search_input" data-action="<?php echo site_url('admin/customer/search_str');?>" id="s_search" placeholder="Search">
	      		<div class="search_sug"></div>
	      	</form>
	      	<p class="">Such as repair, plumbing, home shifting, car services, car rental & more ...</p>

		    </div>
			<div class="col-0 col-lg-2 col-md-2 col-sm-1"></div>
		</div>
	</div>
</div>


<!-- Desktop SERVICES category-->


<div class="row services-tabs hidden-md-down">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<ul class="nav nav-tabs" id="myTab" role="tablist">
				<?php 
					foreach ($category as $cat):
						
				?>
				  <li class="nav-item">
				    <a class="nav-link" id="<?php echo str_replace(" ","_",$cat->cat_name); ?>-tab" data-toggle="tab" href="#<?php echo str_replace(" ","_",$cat->cat_name); ?>" role="tab" aria-controls="<?php echo str_replace(" ","_",$cat->cat_name); ?>" aria-selected="true">
				    	<img class="cat-icon" src="<?php echo $photo = ($cat->photo == "" ? site_url('images/services.png') : site_url('upload/'.$cat->photo)); ?>" alt=""> 
				    	<p><?php echo $cat->cat_name ?></p>
				    </a>
				  </li>
				<?php   //harsh!
					endforeach;
				 ?>
				</ul>

				

				<script>
				  $(function () {
				    $('#myTab li:first-child a').tab('show')
				  })
				</script>
			</div>
		</div>
	</div>
</div>
<div class="row services-tabs-details hidden-md-down">
	<div class="container">
		<div class="row">
			<div class="col-12">
				
				<div class="tab-content">
				<?php 
					foreach ($category as $cat):
					?>
				  <div class="tab-pane " id="<?php echo str_replace(" ","_",$cat->cat_name); ?>" role="tabpanel" aria-labelledby="<?php echo str_replace(" ","_",$cat->cat_name); ?>-tab">
					<ul class="row">
						<?php $services = $this->category_m->services_by_category($cat->id);
							foreach ($services as $service):
						?>						
						<li class="col-4">
							<a href="<?php echo site_url('admin/customer/services/'.$service->id) ?>" class="s-link">
								<img height="30" src="<?php echo $photo = ($service->photo !== "") ? site_url('upload/'.$service->photo) : site_url('images/services.png') ; ?>" id="preview" class="img img-responsive">
							 <?php echo $service->s_name; ?>
							</a>
						</li>
					<?php endforeach; ?>
					</ul>
				  </div>
				<?php endforeach; ?>
	
				</div> 
				<!-- tab-content -->

				<script>
				
				</script>
			</div>
		</div>
	</div>
</div>

<!-- desktop SERVICES category-->

<!-- tab Mobile SERVICES category-->

<div class="row services-nav hidden-md-up">
	<div class="container">
		<ul class="row nav">
		<?php 
			foreach ($category as $cat):
				
		?>
		  <li class="nav-item col-6 col-sm-4">
		    <a class="nav-link" id="<?php echo str_replace(" ","_",$cat->cat_name); ?>-tab" href="<?php echo site_url('admin/customer/category/'.$cat->id); ?>" role="tab" aria-controls="<?php echo str_replace(" ","_",$cat->cat_name); ?>" aria-selected="true">
		    	<img class="cat-icon" src="<?php echo $photo = ($cat->photo == "" ? site_url('images/services.png') : site_url('upload/'.$cat->photo)); ?>" alt=""> 
		    	<p><?php echo $cat->cat_name ?></p>
		    </a>
		  </li>
		<?php   
			endforeach;
		 ?>
		</ul>
		
	</div>
</div>

<!-- tab Mobile SERVICES category-->