<!-- Desktop SERVICES category services-tabs hidden-md-down-->
<div class="row services-header">
	<div class="container">
		<div class="row">
			<div class="col-lg-2 col-md-3"></div>
			<div class="col-lg-2 col-md-3 col-4 col-sm-4 col-xs-6" style="">
				<img src="<?php echo $photo = ($category->photo !== "") ? site_url('upload/'.$category->photo) : site_url('images/services.png') ;
               ?>" id="preview" class="img-fluid">
    
			</div>
			<div class="col-lg-6 col-md-3 col-8 col-sm-8 col-xs-6" style="">
				<h1 class="s_header"><?php echo $category->cat_name;?></h1>
				<p><?php echo $category->cat_des;?></p>
				
			</div>
			<div class="col-lg-2 col-md-3 "></div>
		</div>		
	</div>
</div>
<!-- end header -->
<div class="row category-type">
	<div class="container">
		<div class="row">
			<!-- <div class="col-12">
			</div> -->
			<div class="col-lg-3 col-md-3 col-0 col-sm-1"></div>
			<div class="col-lg-6 col-md-6 col-12 col-sm-10">
				<ul class="list-group list-group-flush">
				<?php 
				    $this->load->model('category_m');
				    $services = $this->category_m->services_by_category($category->id);

				    foreach ($services as $service): ?>
					    <a href="<?php echo site_url('admin/customer/services/'.$service->id); ?>">
					      <li class="list-group-item row">
							<div class="col-2">
								<img src="<?php echo $photo = ($service->photo !== "") ? site_url('upload/'.$service->photo) : site_url('images/services.png') ; ?>" id="preview" class="img-fluid">
							</div> 	
							<div class="col-10">
								<b class="c_name">
									<?php echo $service->s_name; ?>
								</b>
							</div>
					      </li>
				      	</a>
				 	<?php   endforeach; ?>
				</ul>
				
			</div>
			<div class="col-lg-3 col-md-3 col-0 col-sm-1"></div>
		</div>
	</div>
</div>

