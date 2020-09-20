
<div class="row my-token">
	<div class="container">
		<div class="row">
			<div class="col-lg-3 col-md-3 d-none d-sm-block" id="employer-navbar">
				<br><br><br>
				<ul class="list-group">
				  <li class="list-group-item">
					<a href="<?php echo site_url('admin/employer/job_post'); ?>"><i class="la la-plus"></i> Post a New Job</a>
				  </li>
				  <li class="list-group-item">
					<a href="<?php echo site_url('admin/employer/job_all'); ?>"><i class="la la-briefcase"></i> All Jobs</a>
				  </li>
				  <li class="list-group-item">
					<a href="<?php echo site_url('admin/employer/job_active'); ?>"><i class="la la-check-circle"></i> Active Jobs</a>
				  </li>
				  <li class="list-group-item">
					<a href="<?php echo site_url('admin/employer/job_syspend'); ?>"><i class="la la-times-circle"></i> Syspend Jobs</a>
				  </li>
				</ul>
			</div>
			<div class="col-lg-9 col-md-9 col-12 col-12">
				<!-- TOKEN info card -->
				<br><br><br>
				<div class="setting-form container">
					<div class="row">
						<div class="col-12">
							<table class="table table-striped table-bordered">
							  <thead class="thead-inverse">
								<tr>
									<th>Job Title</th>
									<th class="hidden-md-down">Dead Line</th>
									<th class="hidden-md-down">Category</th>
									<th>Status</th>
									<th>Actions</th>
								</tr>
							  </thead>
							  <tbody>
								<?php 
								// dump($jobs);
									if($jobs):
										foreach ($jobs as $job):
											
								 ?>
									<tr>
										<td><?php echo anchor(site_url('admin/employer/job_post/'.$job->id),$job->title); ?></td>
										<td><?php echo $job->c_date; ?></td>
										<td class="hidden-md-down"><?php echo $this->job_m->category_by_id($job->cat); ?></td>
										<td class="hidden-md-down"><?php echo $this->job_m->status($job->status); ?></td>
										<td> 
											<?php echo bt_delete('admin/employer/delete_job/'.$job->id); ?></td>
									</tr>
								<?php 
									endforeach;
								else:
										echo " NO JObs Found";
									endif;
								 ?>
								</tbody>
							</table>
						</div>
					</div>
				</div>
				<!-- TOKEN info card -->

				
			</div>
			<div class="col-lg-3 col-md-3 col-0 col-sm-1"></div>
		</div>
	</div>
</div>
<script>
	$('#employer-nav').click(function(){
		var navbar = $('#employer-navbar');
		if (navbar.hasClass('d-none')) {
			navbar.removeClass('d-none');
			navbar.removeClass('d-sm-block');
			navbar.addClass('col-12');
		}else{
			navbar.addClass('d-none');
			navbar.addClass('d-sm-block');
			navbar.removeClass('col-12');
		}
		
	});
</script>
