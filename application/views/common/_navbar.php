<!-- navbar -->
<nav class="navbar navbar-toggleable-md home-nav">
  <div class="container">
  <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <a class="navbar-brand" href="<?php echo site_url();?>"><img src="img/logo.png" height="80px" alt=""></a>

  <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
    <!-- <ul class="navbar-nav ">
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          PERSONAL
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          BUSINESS
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#how">SEND</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">REQUEST</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">HELP</a>
      </li>
    </ul> -->

  </div>
  <?php
    if($this->session->userdata('id')):
   ?>
   <ul class="navbar-nav  ml-auto main-nav">

     <li class="nav-item dropdown">
       <a class="nav-link dropdown-toggle pull-right" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
         <i class="la la-user"> </i> <b class="hidden-md-down"><?php echo $this->session->userdata('name'); ?></b>
       </a>
       <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
         <a class="dropdown-item" href="<?php echo base_url("admin/user/edit/".$this->session->userdata('id')); ?>"> <i class="fa fa-dashboard "></i> My Profile</a>
         <!-- <a class="dropdown-item" href="<?php echo base_url('admin/setting'); ?>"> <i class="fa fa-cog"></i> Setting</a> -->
         <a class="dropdown-item" href="<?php echo base_url('admin/user/logout'); ?>"> <i class="fa fa-power-off "></i> Log Out</a>
       </div>
     </li>
   </ul>

  <?php else: ?>
        <ul class="nav sign-button justify-content-end">
          <li>
          <a href="<?php echo site_url('admin/user/login') ?>" class="btn btn-outline-success btn-sign" id="ul-btn">Log In</a>
          </li>
          <li>
          <a href="<?php echo site_url('customer/registration'); ?>" class="btn btn-outline-success btn-sign" >Sign Up</a>

          </li>
        </ul>

      <?php endif; ?>
 </div>
</nav>

<!-- HEADER END -->
