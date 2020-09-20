<!-- Desktop SERVICES category services-tabs hidden-md-down-->
<div class="row category-type">
	<div class="container">
		<div class="row">
			<!-- <div class="col-12">
			</div> -->
			<div class="col-lg-3 col-md-3 col-0 col-sm-1"></div>
			<div class="col-lg-6 col-md-6 col-12 col-sm-10">
			<h2><?php echo $category->cat_name; ?> </h2>
			<?php 
			    $this->load->model('category_m');
			    $types = $this->category_m->services_by_type($category->id);
			    if(@count($types)):
			    foreach ($types as $type): ?>
			    	<a href="<?php echo site_url('admin/customer/services/'.$type->id); ?>"><i class="la la-cog"> </i> <?php echo $type->s_name; ?></a><br>
			 	<?php   endforeach; else: echo "No Services Under this types"; endif; ?>
				
			</div>
			<div class="col-lg-3 col-md-3 col-0 col-sm-1"></div>
		</div>
	</div>
</div>











