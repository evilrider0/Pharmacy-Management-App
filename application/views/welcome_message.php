<br><br><br><br><br>
<br><div class="card text-center">
  <div class="card-header">
    <h4 class="card-title">Login</h4>
  </div>
  <div class="card-block">
    <p class="card-text">Please Login Using Your Credentials</p>
    <?php  echo $message = ($_SESSION['error'] ) ? '<div class="alert alert-danger" role="alert">'.$_SESSION['error'].'</div>' : '' ; ?>
    <?php  echo $message = (validation_errors()) ? '<div class="alert alert-danger" role="alert">'.validation_errors().'</div>' : '' ; ?>
      <?php // echo ; ?>
      <?php //echo '<div class="alert alert-danger" role="alert">'..'</div>'; ?>

    <div class="container">

    <?php echo form_open(); ?>
	    <div class="form-group row">
	      <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
	      <div class="col-sm-10">
		      <?php
            	echo form_input('email', '', 'class="form-control" placeholder="Email" id="email"');
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
      <hr>
	    <div class="form-group row">
	      <div class="offset-sm-2 col-sm-10">
          <?php echo form_submit('submit', 'Log in', 'class="btn btn-primary pull-right"') ?>
	      </div>
	    </div>
	  <?php form_close(); ?>
	</div>
  </div>
  <div class="card-footer text-muted">
    &copy; Aurora Technologies
  </div>
</div>
