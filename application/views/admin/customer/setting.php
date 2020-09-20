<!-- DASHBOARD-->
		<div class="row">
			<div class="col-lg-3 col-md-3 col-0 col-sm-1"></div>
			<div class="col-lg-6 col-md-6 col-12 col-sm-10">
				<h3 class="s_header" style="margin-top: 20px;"><i class="la la-cogs la-2x" style="color:#14d963"></i> Profile Setting</h3>
				<hr>
			</div>
			<div class="col-lg-3 col-md-3 col-0 col-sm-1"></div>
		</div>
<!-- end header -->


<div class="row category-type">
	<div class="container">
		<div class="row">
			<!-- <div class="col-12">
			</div> -->
			<div class="col-lg-3 col-md-3 col-0 col-sm-1"></div>
			<div class="col-lg-6 col-md-6 col-12 col-sm-10">

				<!-- Personal info card -->
				<div class="setting-form container">
					<h5>Personal Info</h5>
					<form class="form row">
					  <div class="form-group col-12">
					    <input type="text" name="name" class="form-control is-valid" id="name" aria-describedby="nameHelp" value="<?php echo $users->name; ?>" placeholder="Full Name">
					    <small id="nameHelp" class="form-text text-muted valid-feedback">What is your full name ?</small>
					  </div>
					  <?php $user_info = unserialize($users->user_info); ?>
					  <div class="form-group col-7">
					    <input type="date" name="dob" class="form-control " id="dob" aria-describedby="nameHelp" placeholder="dob" value="<?php echo $user_info['dob']; ?>">
					    <small id="nameHelp" class="form-text text-muted">Date of Birth</small>
					  </div>
					  <div class="form-group col-5">
					    <?php
					        $sex = array(
					        	'' => 'Select Sex',
					        	'male' => 'Male',
						        'female'=>'Female',
						        'other'=>'Other'
						    );
					    	echo form_dropdown('sex', $sex, $user_info['sex'],'class="form-control " aria-describedby="nameHelp" id="sex"');
					     ?>

					    <small id="nameHelp" class="form-text text-muted">Are you a female ?</small>
					  </div>
					  <div class="col-8"></div>
					  <div class="col-4">
					  	<button class="btn btn-warning btn-block pull-right" type="button" id="personal_info">	Save</button>
					  </div>
					</form>
				</div>
				<!-- Personal info card -->

				<!-- PHOTO info card -->
					<div class="setting-form container">
						<h5>Profile Photo</h5>
						<div class="form-group row">
				            <div class='col-8'>
				            	<!-- $photo = ($service->photo !== "") ? site_url('upload/'.$service->photo) : -->
				              <div class="img-preview"><img height="242px" src="<?php echo  $photo = ($users->photo != "") ? site_url('upload/'.$users->photo) :site_url('images/profile.jpg') ;
				               ?>" id="preview" class="img-fluid"></div>
				            </div>
				            <div class='col-4'>
				              <input type="hidden" id="img_photo" name="photo" value="<?php echo $users->photo ?>">
				              <br>
				              <br>
				              <br>
				              <button id="profile" onclick="openUploadModal('profile')" data-field="photo" data-preview="preview" type="button"  class="btn btn-outline-info profile"><i class="la la-user"></i>  Photo</button>
				            </div>
				            <div class="col-8"></div>
							  <div class="col-4">
							  	<button class="btn btn-warning btn-block pull-right" type="button" id="user_photo">	Save</button>
							  </div>
				          </div>
					</div>

				<!-- PHOTO info card -->

				<!-- Contact info card -->

					<div class="setting-form container">
						<h5>Contact Info</h5>
						<form class="form row">
						  <div class="form-group col-12">
						    <input type="email" class="form-control" id="email" aria-describedby="nameHelp" placeholder="Email" required="required" value="<?php echo $users->email; ?>">
						    <small id="nameHelp" class="form-text text-muted">Email (You must Login with this email)</small>
						  </div>
						  <div class="form-group col-12">
						    <input type="text" class="form-control" id="phone" aria-describedby="nameHelp" placeholder="Phone" required="required" value="<?php echo $users->phone; ?>">
						    <small id="nameHelp" class="form-text text-muted">Phone</small>
						  </div>

						  <div class="col-8"></div>
						  <div class="col-4">
						  	<button class="btn btn-warning btn-block pull-right" type="button" id="contact_info">	Save</button>
						  </div>
						</form>
					</div>
				<!-- Contact info card -->

				<!-- SECURITY CARD	 -->
					<div class="setting-form container">
						<h5>Security Info</h5>
						<form class="form row">
						  <div class="form-group col-12">
						    <!-- <label for="name">Full Name</label> -->
						    <input type="password" class="form-control" id="password" aria-describedby="nameHelp" placeholder="Password"  required="required" >
						    <small id="nameHelp" class="form-text text-muted">Password</small>
						  </div>
						  <div class="form-group col-12">
						    <!-- <label for="name">Password</label> -->
						    <input type="password" class="form-control" id="re_password" aria-describedby="nameHelp" placeholder="Re-Password"  required="required">
						    <small id="nameHelp" class="form-text text-muted">Confirm Password</small>
						  </div>

						  <div class="col-8"></div>
						  <div class="col-4">
						  	<button class="btn btn-warning btn-block pull-right" type="button" id="password_btn">	Save</button>
						  </div>
						</form>
					</div>
				<!-- SECURITY CARD	 -->

				<!-- Address info card -->
					  <?php $address = unserialize($users->address);?>

					<div class="setting-form container" id="address">
						<h5>Address</h5>
						<form class="form row">
						  <div class="form-group col-12">
						   <?php
						   $bulding = array(
						   				'' => 'Select Bulding',
						   				'basanti' => 'Basinti (বাসন্তি)',
						   				'madhobi' => 'Madhobi (মাধবী)',
						   				'baishaki' => 'Baishaki (বৈশাখী)',
						   				'korobi' => 'Korobi (করবী)',
						   				'bhoirobi' => 'Bhoirobi (বৈরবী)',
						   				'shraboni' => 'Shraboni (শ্রাবণী)',
						   				'surovi' => 'Surovi (সুরভী)',
						   				'barnali' => 'Barnali (বর্নালী)',
						   				'baikaly' => 'Baikaly (বৈকালী)',
						   				'laboni' => 'Laboni (লাবনী)',
						   				'rupali' => 'Rupali (রূপালী)'
						   				);
					    	echo form_dropdown('bulding', $bulding,$address['bulding'],'class="form-control " aria-describedby="nameHelp"  required="required" id="bulding"');
					     	?>
						    <small id="nameHelp" class="form-text text-muted">Building</small>
						  </div>
						  <div class="form-group col-6">
						    <input type="text" class="form-control" id="flat" aria-describedby="nameHelp" placeholder="Flat" required="required" value="<?php echo $address['flat']; ?>">
						    <small id="nameHelp" class="form-text text-muted">Flat</small>
						  </div>
						   <div class="form-group col-6">
						    <input type="text" class="form-control" id="floor" aria-describedby="nameHelp" placeholder="Floor" required="required"  value="<?php echo $address['floor']; ?>">
						    <small id="nameHelp" class="form-text text-muted">Floor</small>
						  </div>

						  <div class="col-8"></div>
						  <div class="col-4">
						  	<button class="btn btn-warning btn-block pull-right" type="button" id="address_info">	Save</button>
						  </div>
						</form>
					</div>

				<!-- Address info card -->


			</div>
			<div class="col-lg-3 col-md-3 col-0 col-sm-1"></div>
		</div>
	</div>
</div>

<!-- UPLOAD MODAL -->

  <!-- Modal -->
  <div class="modal fade" id="photoUploader" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title" id="myModalLabel">Upload Photo</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        </div>
        <div class="modal-body">

          <!-- Upload Contant -->
          <div class="upload-console">
            <div class="upload-console-body">
              <form action="<?php site_url('admin/upload') ?>" method="post" class="row" enctype="multipart/form-data">
                <div class="row">
                  <div class="col-lg-9">
                    <div class="form-group row">
                      <input type="file" class="col-sm-12" multiple="multiple" id="upload_file" name="files[]" >
                    </div>
                  </div>
                  <div class="col-lg-3">
                    <input type="submit" value="Upload" class="btn btn-outline-info" id="upload_button">
                  </div>
                </div>
              </form>
            </div>
            <span id="upload-info"></span>
            <!-- Drag and Drowp -->
            <div class="upload-console-drop" id="drop-zone">
              Just Drag and Drop <i style="color:#5bc0de" class="la la-download"> </i>  File Here
            </div>
            <div class="bar">
              <div class="bar-fill" id="bar-fill">
                <div class="bar-fill-text" id="bar-fill-text"> </div>
              </div>
            </div>
            <!--   -->
            <!-- class="hidden" -->
            <div id="upload-finished" class="hidden">
              <h5>Processed File</h5>
              <!-- <div class="upload-console-upload">
              <a href="#">FileName.jpg</a>
              <span>Success</span>
            </div> -->
          </div>
        </div>
        <!-- Upload Contant -->
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-outline-info" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
</div>

 <script type="text/javascript">
 	// PHOTO Upload
    function openUploadModal(id){
      var button = $('#'+id);
      var upInfo =  $('#upload-info');

        var up = button.data("field");
        var view = button.data("preview");
        upInfo.attr('data-info', up);
        upInfo.attr('data-view', view);
        $('#photoUploader').modal('show');
        // console.log(up+' || '+view);
    }


    // SAVE Personal Info
    $('#personal_info').click(function(){
    	var name = $('#name');
    	var dob = $('#dob');
    	var sex = $('#sex');
        var url = '<?php echo site_url("admin/customer/personal_info"); ?>';
    	if(name.val()){
    		var data = {
    			name : name.val(),
    			dob : dob.val(),
    			sex : sex.val(),
    		};
    		// AJAX
		    $.post(url, data, function(result){
		   			if(result){
		   				 alertify.success('<p class="text-center" style="color:#fff;margin:0px">Personal Info Saved</p>');
		   			}else{

		   				 alertify.error('<p class="text-center" style="color:#fff;margin:0px">Data Error</p>');
		   			}
		    });

    	}else{
		   	console.log('data error');
    	}
    });

     // SAVE Photo
    $('#user_photo').click(function(){
    	var photo = $('#img_photo');
        var url = '<?php echo site_url("admin/customer/user_photo"); ?>';
    	if(photo.val()){
    		var data = {
    			photo : photo.val()
    		};
    		// AJAX
		    $.post(url, data, function(result){
		   			if(result){
		   				 alertify.success('<p class="text-center" style="color:#fff;margin:0px">Photo Saved</p>');
		   			}else{

		   				 alertify.error('<p class="text-center" style="color:#fff;margin:0px">Data Error</p>');
		   			}
		    });

    	}else{
		   	console.log('data error');
    	}
    });

    // SAVE Contact info
    $('#contact_info').click(function(){
    	var phone = $('#phone');
    	var email = $('#email');
        var url = '<?php echo site_url("admin/customer/contact_info"); ?>';
    	if(email.val()){
    		var data = {
    			email : email.val(),
    			phone : phone.val()
    		};
    		// AJAX
		    $.post(url, data, function(result){
		   			if(result){
		   				 alertify.success('<p class="text-center" style="color:#fff;margin:0px">Contact Info Saved</p>');
		   			}else{

		   				 alertify.error('<p class="text-center" style="color:#fff;margin:0px">Data Error</p>');
		   			}
		    });

    	}else{
		   	console.log('data error');
    	}
    });

    // SAVE Password
    $('#password_btn').click(function(){
    	var password = $('#password');
    	var r_password = $('#re_password');
        var url = '<?php echo site_url("admin/customer/password"); ?>';
    	if(password.val()){
    		if(password.val() == r_password.val()){
	    		var data = {
	    			password : password.val()
	    		};
	    		// AJAX
			    $.post(url, data, function(result){
			   			if(result){
		   				 alertify.success('<p class="text-center" style="color:#fff;margin:0px">Password Saved</p>');
		   			}else{

		   				 alertify.error('<p class="text-center" style="color:#fff;margin:0px">Data Error</p>');
		   			}
			    });
			}
    	}else{
		   				 alertify.error('<p class="text-center" style="color:#fff;margin:0px">Data Error</p>');
    	}
    });

        // SAVE ADDRESS info
    $('#address_info').click(function(){
    	var bulding = $('#bulding');
    	var flat = $('#flat');
    	var floor = $('#floor');
        var url = '<?php echo site_url("admin/customer/address_info"); ?>';

		if($('#bulding').val()){
			var data = {
				bulding : bulding.val(),
				flat : flat.val(),
				floor : floor.val()
			};
		}else{
			console.log('data error')
		}
		// AJAX
	    $.post(url, data, function(result){
   			if(result){
	   				 alertify.success('<p class="text-center" style="color:#fff;margin:0px">Address Saved</p>');
	   			}else{

	   				 alertify.error('<p class="text-center" style="color:#fff;margin:0px">Data Error</p>');
	   			}
	    });

    });
 </script>