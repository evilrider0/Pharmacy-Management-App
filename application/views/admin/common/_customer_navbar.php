<nav class="navbar navbar-expand-lg fixed-top navbar-inverse bg-inverse container-fluid">
  <div class="row">
    <div class="col-3 col-md-3 col-sm-3 col-lg-1 hidden-sm-up nav_button">
      <button class="btn btn-default"><i class="la la-navicon "> </i></button>
    </div>
    <div class="col-6 col-md-6 col-sm-6 col-lg-8 ">
       <a class="navbar-brand" href="<?php echo base_url(''); ?>"><img src="<?php echo site_url('img/logo.png'); ?>" alt="" class="logo"> </a>
    </div>
    <div class="col-3 col-md-3 col-sm-3 col-lg-1 hidden-sm-down">
      <!-- <button class="btn btn-default"><i class="la la-navicon"> </i></button> -->
    </div>
    <div class="col-3 col-md-3 col-sm-3 col-lg-3">
      <ul class="navbar-nav  ml-auto main-nav">

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle pull-right" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="la la-user"> </i> <b class="hidden-md-down"><?php echo $this->session->userdata('name'); ?></b>
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <a class="dropdown-item" href="<?php echo base_url("admin/customer/setting/".$this->session->userdata('id')); ?>"> <i class="fa fa-dashboard "></i> My Profile</a>
            <!-- <a class="dropdown-item" href="<?php echo base_url('admin/setting'); ?>"> <i class="fa fa-cog"></i> Setting</a> -->
            <a class="dropdown-item" href="<?php echo base_url('admin/user/logout'); ?>"> <i class="fa fa-power-off "></i> Log Out</a>
            <?php //dump($this->session->userdata('type')); ?>
          </div>
        </li>
      </ul>
    </div>

  </div>

</nav>
