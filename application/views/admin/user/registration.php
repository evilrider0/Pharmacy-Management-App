<div class="container">
  <div class="row">
    <div class="col-md-3"></div>
    <div class="col-md-6">

            <br><br>
            <p class="text-center"><img src="<?php echo site_url('img/login.png'); ?>" height="100px"></p>
            <p class="text-center card-text" style="padding: 10px 0"><b>Please Fill All Fields & Register</b></p>
            <?php  echo $message = ($_SESSION['error'] ) ? '<div class="alert alert-danger" role="alert">'.$_SESSION['error'].'</div>' : '' ; ?>
            <?php  echo $message = (validation_errors()) ? '<div class="alert alert-danger" role="alert">'.validation_errors().'</div>' : '' ; ?>

            <div class="container-fluid">

            <?php echo form_open(); ?>
            <div class="form-group row">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Name</label>
                <div class="col-sm-10">
                  <?php
                      echo form_input('name', set_value('name', $user->name), 'class="form-control" placeholder="Name" id="name"');
                  ?>
                </div>
              </div>
        	    <div class="form-group row">

        	      <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
        	      <div class="col-sm-10">
        		      <?php
                    	echo form_input('email', '', 'class="form-control" placeholder="Email" id="email"');
        		      ?>
        	      </div>
        	    </div>
              <div class="form-group row">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Phone</label>
                <div class="col-sm-10">
                  <?php
                      echo form_input('phone', set_value('phone', $user->phone), 'class="form-control" placeholder="Phone" id="Phone"');
                  ?>
                </div>
              </div>
              <div class="form-group row">
                <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
                <div class="col-sm-10">
                  <?php
                    echo form_password('password', '', 'class="form-control" placeholder="Password" id="passwpord"');
                   ?>
                </div>
              </div>
              <div class="form-group row">
                <label for="inputPassword3" class="col-sm-2 col-form-label">Confirm Password</label>
                <div class="col-sm-10">
                  <?php
                    echo form_password('password_confirm', '', 'class="form-control" placeholder="Confirm Password" id="password_confirm"');
                   ?>
                </div>
              </div>
        	    <div class="form-group row">
                <div class="col-3"></div>
                <div class=" col-6">
                  <p class="text-right">
                    <a style="color: #14d963" href="<?php echo site_url(''); ?>" class="link ">Back to Home</a> | Registered ?
                    <a style="color: #14d963" href="<?php echo site_url('admin/user/login'); ?>" class="link "> Login </a>
                  </p>
                </div>
        	      <div class="col-3">
                  <?php echo form_submit('submit', 'Register', 'class="btn btn-warning pull-right"') ?>
        	      </div>
        	    </div>
        	  <?php form_close(); ?>
        	</div>



    </div>
    <div class=" col-md-3"></div>
  </div>
</div>
