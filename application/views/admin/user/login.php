  <div class="container">
    <div class="row">
      <div class="col-4"></div>
      <div class="col-4">
        <div class="login-wrapper">
          <?php echo form_open(); ?>
          <p class="text-center">
            <img src="<?php echo site_url('img/login.png'); ?>" height="200" alt="">
            <?php  echo $message = ($_SESSION['error'] ) ? '<div class="alert alert-danger" role="alert">'.$_SESSION['error'].'</div>' : '' ; ?>
            <?php  echo $message = (validation_errors()) ? '<div class="alert alert-danger" role="alert">'.validation_errors().'</div>' : '' ; ?>
          </p>
          <div class="form-group">
            <?php
                  echo form_input('email', '', 'class="form-control" placeholder="Email" id="email"');
              ?>
          </div>
          <div class="form-group">
            <?php
                echo form_password('password', '', 'class="form-control" placeholder="Password" id="passwpord"');
               ?>
          </div>
          <?php echo form_submit('submit', 'Log in', 'class="btn btn-primary btn-block"') ?>
          <p class="text-center">
            <br>
            <!-- <a href="#">Having trouble logging in?</a> -->
            <!-- <img src="<?php echo site_url('img/login-div.png') ?>" alt="" class="img-fluid"> -->
          </p>
          <!-- <button type="submit" class="btn btn-light btn-block"><b>Sign Up</b></button> -->
          <p class="text-right">
            <a style="color: #14d963" href="<?php echo site_url(''); ?>" class="link ">Back to Home</a> | New User? 
            <a style="color: #14d963" href="<?php echo site_url('customer/registration'); ?>" class="link "> Registration</a>
          </p>
         <?php form_close(); ?>
        </div>
      </div>
      <div class="col-4"></div>
    </div>
  </div>
