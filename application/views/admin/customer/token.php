<!-- Desktop SERVICES category services-tabs hidden-md-down-->
<?php  ?>
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
				<p><?php echo $services->cat_des;?></p>
				
			</div>
			<div class="col-lg-2 col-md-3 "></div>
		</div>		
	</div>
</div>

<!-- end header -->
<div class="row category-type">
	<div class="container">
		<div class="row">
			<div class="col-lg-3 col-md-3 col-0 col-sm-0"></div>
			<div class="col-lg-6 col-md-6 col-12 col-sm-12 col-xs-12">
				<br>
				<p>
					By pressing GET TOKEN button you will get a token number for get our services.
				</p>
				<p>
				  <small>Please add some note with this token</small>
				</p>
				<form class="form" action="">
				 <div class="form-group row">
		            <div class="col-sm-12">		              
						<textarea name="note" id="note" rows="4" class="form-control token_note" placeholder="Note"></textarea>
						<input type="hidden" id="token" name="token" value="<?php echo $token; ?>">
						<input type="hidden" id="customer_id" name="customer_id" value="<?php echo $this->session->userdata('id'); ?>">
						<input type="hidden" id="service_id" name="service_id" value="<?php echo $services->id; ?>">
		            </div>
		          </div>
				</form>
				<br>
				<!-- <hr> -->
				<br>
				<a href="#" class="btn btn-warning btn-block btn-customer">
					GET TOKEN
				</a>
			</div>
			<div class="col-lg-3 col-md-3 col-0 col-sm-0"></div>
		</div>
	</div>
</div>

<script>
	$('.btn-customer').click(function(event){
		event.preventDefault();
		// var note = $('#note').val();
		// var token = $('#token').val();
		// var customer_id = $('#customer_id').val();
		// var service_id = $('#service_id').val();
		var url = '<?php echo site_url("admin/customer/get_token");?>';
		var redirect = '<?php echo site_url('admin/customer/token_success/'); ?>'+$('#token').val();
		var data = {
			note: $('#note').val(),
			token: $('#token').val(),
			customer_id: $('#customer_id').val(),
			service_id: $('#service_id').val(),
		}
		// console.log(note+' '+token+' '+customer_id+' '+service_id+' '+url);

		// AJAX
		 $.post(url, data, function(result){
	        if(result == 'true'){
	        	// similar behavior as an HTTP redirect
				window.location.replace(redirect);
	        }
	    });
	});
</script>
