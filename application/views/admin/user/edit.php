

<div class="container-fluid admin-area">
  <div class="row">
    <div class="content-header col-12">
      <?php


        switch ($this->uri->segment(3)) {
        case 'edit':
          $users = "Admin";
          break;
        case 'employer_edit':
          $users = "Employer";
          break;
        case 'customer_edit':
          $users = "Customer";
          break;


        default:
          'Customer';
      }


      switch ($this->uri->segment(3)) {
      case 'edit':
        $type = 1;
        break;
      case 'employer_edit':
        $type = 2;
        break;
      case 'customer_edit':
        $type = 3;
        break;


      default:
        0;
    }

      ?>

      <h2 class="content-title"> <?php echo empty($user->id) ? 'Add a <i class="la la-user-plus la-2x">  </i> New '.$users : 'Edit '.$users.' <i class="la la-user-plus la-2x">  </i> '.$user->name; ?></h2>
    </div>
    <div class="col-lg-3"></div>
    <div class="col-lg-6">
      <!-- <h2> </h2> -->
     <!--  <?php  echo $message = ($_SESSION['error'] ) ? '<div class="alert alert-danger" role="alert">'.$_SESSION['error'].'</div>' : '' ; ?> -->
    <?php  echo $message = (validation_errors()) ? '<div class="alert alert-danger" role="alert">'.validation_errors().'</div>' : '' ; ?>
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
                  echo form_input('email', set_value('email', $user->email), 'class="form-control" placeholder="Email" id="email"');
              ?>
            </div>
          </div><div class="form-group row">
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
          <!-- User type -->
          <input type="hidden" name="type" value="<?php echo $type;?> ">
            <!--
            <label for="inputEmail3" class="col-sm-2 col-form-label">Type</label>
            <div class="col-sm-10">
              <?php
                  echo form_dropdown('type', array('0'=>'Please Select', '1'=>'Admin','2'=>'Employer'),$user->type,'aria-describedby="sub-cat" class="form-control lineAwsome" placeholder="" id="type" value="1"' );
              ?>
            </div>
          </div> -->
          <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Status</label>
            <div class="col-sm-10">
              <?php
                  echo form_dropdown('status', array('active', 'syspend'),$user->status,'aria-describedby="sub-cat" class="form-control lineAwsome" placeholder="" id="status"' );
              ?>
            </div>
          </div>
          <hr>
    	    <div class="form-group row">
    	      <div class="offset-sm-2 col-sm-10">
              <?php echo empty($user->id) ? form_submit('submit', 'Save', 'class="btn btn-success pull-right"') : form_submit('submit', 'Update', 'class="btn btn-success pull-right"');?>
    	      </div>
    	    </div>
    	 <?php form_close(); ?>
    </div>
  </div>
</div>
