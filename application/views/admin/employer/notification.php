
<!-- services body -->
<div class="row services-header">
	<div class="container">
		<div class="row">
			<div class="col-lg-2 col-md-3"></div>
			<div class="col-lg-8 col-md-6 col-sm-12 col-xs-12" style="">
				<h1 class="s_header text-center" style="margin-top:20px;"><i class="la la-bell  la-2x" style="color:#14d963;"></i> MY Notification</h1>				
			</div>
			<div class="col-lg-2 col-md-3 "></div>
		</div>		
	</div>
</div>

<div class="row services-tab-body">
	<div class="container">
		<div class="row">
			<div class="col-lg-2"></div>
			<div class="col-lg-8 col-md-12 col-12 col-sm-12" style="">
				<!-- tab -->
					<div class="card" style="width: 100%;">
					  <?php //dump($notifications); ?>
					  <ul class="list-group list-group-flush note">
					    <?php if($notifications):
					  		foreach ($notifications as $notification):
					  			if($notification->status == 0):
					  	?>					    
					    <li class="list-group-item row unseen notify" style="">
					    <?php else: ?>
					    <li class="list-group-item row notify">
					    <?php endif; ?>
							<div class="col-lg-3 col-md-3 col-sm-4 col-5" style="margin-left:-15px;">
								<i class="fa fa-bookmark" style="color:#ffba28"></i>-| <span style="color:#14d963" class="token" > <?php echo $notification->token; ?></span>
							</div>
							<div class="col-lg-7 col-md-7 col-sm-6 col-7">
								<i class="status-color" style="color:#14d963">
									<?php echo $notification->n_des; ?>	
									</i>
									<br>
									<small>
										<b>Service : </b>
									<span class="service"><?php echo $this->service_m->service_by_token($notification->token); ?>	</span>
									<span class="type" style="position: absolute;left: -2000px"><?php echo $notification->type;  ?>	</span>
									<span class="status" style="position: absolute;left: -2000px"><?php echo $notification->status;  ?>	</span>
									<span class="id" style="position: absolute;left: -2000px"><?php echo $notification->id;  ?>	</span>
										
									</small>							
							</div>
							<!-- <div class="col-lg-3 col-md-3 col-sm-2 hidden-sm-down">
									<?php echo $notification->n_des; ?>	
							</div> -->
							<div class="col-lg-2 col-md-2 col-sm-2 hidden-xs-down">	
								<span class="date"><?php echo substr($notification->date, 0, 10); ?></span>

							</div>
					    </li>
					<?php
						endforeach; else: 
					?>
						<li class="list-group-item row">
							<div class="token-wrapper" style="max-width:400px; margin: 3em auto">
								<div class="token">

									<p class="text-center" style="color:#14d963"><i class="la la-warning la-4x"></i></p>
									<h4 > <b style="color:#14d963">OPS!</b></h4>
									<p class="text-center" style="color:#14d963">You do not have any Active Notification</p>
									<a href="<?php echo site_url(); ?>" class="btn btn-customer btn-block btn-warning"> GOTO HOME</a>
								</div>
							</div>
					    </li>
					<?php endif; ?>
				    </ul>
				</div>								
			</div>
			<div class="col-lg-2"></div>
		</div>		
	</div>
</div>

<script>
	// $(function(){
	// 	$('#notificationModal').modal('show');
	// });

	$('.notify').click(function(){
		$('#token').html($(this).find('.token').html());
		$('#service').html($(this).find('.service').html());
		$('#date').html($(this).find('.date').html());
		var id = $(this).find('.id').html();
		var type = parseInt($(this).find('.type').html());
		var status = parseInt($(this).find('.status').html());

		switch (type) { 
			case 0: 
				types = "SERVICES TOKEN";
				break;
			case 1: 
				types = "SERVICES ORDER";
				break;
			case 2: 
				types = "SERVICES ORDER COMPLETE";
				break;		
			case 3: 
				types = "SERVICES REVIEW";
				break;
			default:
				types = 'JUNK NOTIFICATION';
		}

		$('#type').html(types);
		if(status == '0'){
	   			  console.log(id);
		  var url = "<?php echo site_url('admin/customer/note_sts_update'); ?>"
		  $.post(url, {id:id}, function(result){
	   			  if(result=='true'){
	   			  }   			
	    	});
		}else{
			console.log('Seen');

		}

		$('#notificationModal').modal('show');
	   	$(this).removeClass('unseen');

	});
</script>

<!-- Modal -->
<div class="modal fade" id="notificationModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title"><i class="la la-bell"></i> Notification</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p class="text-center"  style="color:#14d963">  <span id="type"></span> SUCCESSFULL !</p>
        <p class="text-center">TOKEN : <span id="token" style="color:#14d963"></span> UNDER <span id="service" style="color:#14d963"></span></p>
        <p class="text-center" id="note"></p>
        <p class="text-center"><span id="date" style="color:#14d963"></span></p>
         
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>