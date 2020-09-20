<div  class="nav-main hidden-sm-up">
  <div id="accordion" role="tablist" aria-multiselectable="true">
    <div class="card">
      <div class="card-header <?php echo $this->uri->segment(2)=='dashboard'? 'active': ''?>" role="tab" id="headingOne">
        <h5 class="mb-0">
          <a class="s_nav" href="<?php echo base_url('admin/dashboard');?>" >
            <i class="la la-diamond"></i> Dashboard  
          </a>
        </h5>
      </div>
    </div>

     <!-- SERVICES -->
    <div class="card">
      <div class="card-header <?php echo $this->uri->segment(2)=='service'? 'active': ''?>" role="tab" id="headingThree">
        <h5 class="mb-0">
          <a class="collapsed " data-toggle="collapse" data-parent="#accordion" href="#service" aria-expanded="true" aria-controls="service">
            <i class="la la-cubes"></i> Services
          </a>
        </h5>
      </div>
      <div id="service" class="collapse <?php echo $this->uri->segment(2)=='service'? 'show': ''?>" role="tabpanel" aria-labelledby="headingThree">
        <div class="card-block">
          <ul class="dw-nav">
            
            <li class="<?php echo $this->uri->segment(2)=='service' && $this->uri->segment(3)==''? 'active': ''?>">
                <a href="<?php echo base_url('admin/service');?>"><i class="la la-cubes"></i> Services List</a>
            </li>
            <!-- <li class="<?php echo $this->uri->segment(2)=='service' && $this->uri->segment(3)==''? 'active': ''?>">
                <a href="<?php echo base_url('admin/service/sub');?>"><i class="la la-cube"></i> Sub service List</a>
            </li> -->
            <li class="<?php echo $this->uri->segment(2)=='service' && $this->uri->segment(3)=='edit'? 'active': ''?>">
                <a href="<?php echo base_url('admin/service/edit');?>"><i class="la la-plus"></i> Add Service</a>
            </li>
            
          </ul>
        </div>
      </div>
    </div>


    <!-- CATEGORIES -->
    <div class="card">
      <div class="card-header <?php echo $this->uri->segment(2)=='category'? 'active': ''?>" role="tab" id="headingThree">
        <h5 class="mb-0">
          <a class="collapsed " data-toggle="collapse" data-parent="#accordion" href="#category" aria-expanded="true" aria-controls="category">
            <i class="la la-cubes"></i> Categories
          </a>
        </h5>
      </div>
      <div id="category" class="collapse <?php echo $this->uri->segment(2)=='category'? 'show': ''?>" role="tabpanel" aria-labelledby="headingThree">
        <div class="card-block">
          <ul class="dw-nav">
            
            <li class="<?php echo $this->uri->segment(2)=='category' && $this->uri->segment(3)==''? 'active': ''?>">
                <a href="<?php echo base_url('admin/category');?>"><i class="la la-cubes"></i> Categoris List</a>
            </li>
            <!-- <li class="<?php echo $this->uri->segment(2)=='category' && $this->uri->segment(3)==''? 'active': ''?>">
                <a href="<?php echo base_url('admin/category/sub');?>"><i class="la la-cube"></i> Sub Category List</a>
            </li> -->
            <li class="<?php echo $this->uri->segment(2)=='category' && $this->uri->segment(3)=='edit'? 'active': ''?>">
                <a href="<?php echo base_url('admin/category/edit');?>"><i class="la la-plus"></i> Add Category</a>
            </li>
            
          </ul>
        </div>
      </div>
    </div>

    <!-- USER -->
   
    <div class="card">
      <div class="card-header <?php echo $this->uri->segment(2)=='user'? 'active': ''?>" role="tab" id="headingThree">
        <h5 class="mb-0">
          <a class="collapsed " data-toggle="collapse" data-parent="#accordion" href="#Users" aria-expanded="true" aria-controls="Users">
            <i class="la la-users"></i> Users
          </a>
        </h5>
      </div>
      <div id="Users" class="collapse <?php echo $this->uri->segment(2)=='user'? 'show': ''?>" role="tabpanel" aria-labelledby="headingThree">
        <div class="card-block">
          <ul class="dw-nav">
            <!-- <li class=""><a href="<?php echo base_url('admin/user/owner');?>"><i class="la la-user"></i> Owner List</a></li>
            <li><a href="<?php echo base_url('admin/user/owner_edit');?>"><i class="la la-user-plus"></i> Add Owner</a></li> -->
            <li class="<?php echo $this->uri->segment(2)=='user' && $this->uri->segment(3)==''? 'active': ''?>">
                <a href="<?php echo base_url('admin/user');?>"><i class="la la-user-secret"></i> Admin List</a>
            </li>
            <li class="<?php echo $this->uri->segment(2)=='user' && $this->uri->segment(3)=='edit'? 'active': ''?>">
                <a href="<?php echo base_url('admin/user/edit');?>"><i class="la la-user-plus"></i> Add Admin</a>
            </li>
            <!-- <li><a href="<?php echo base_url('admin/user/customer');?>"><i class="la la-list-alt"></i> Customers List</a></li>
            <li><a href="<?php echo base_url('admin/user/customer_edit');?>"><i class="la la-user-plus"></i> Add Customers</a></li>
            <li><a href="<?php echo base_url('admin/user/supplier');?>"><i class="la la-list-alt"></i> Supplier List</a></li>
            <li><a href="<?php echo base_url('admin/user/supplier_edit');?>"><i class="la la-user-plus"></i> Add Supplier</a></li>
            <li><a href="<?php echo base_url('admin/user/employee');?>"><i class="la la-list-alt"></i> Employee List</a></li>
            <li><a href="<?php echo base_url('admin/user/employee_edit');?>"><i class="la la-user-plus"></i> Add Employee</a></li>
            <li><a href="<?php echo base_url('admin/user/group');?>"><i class="la la-sitemap"></i> Employee Group</a></li> -->
          </ul>
        </div>
      </div>
    </div>
    <div class="card">
      <div class="card-header <?php echo $this->uri->segment(2)=='setting'? 'active': ''?>" role="tab" id="headingThree">
        <h5 class="mb-0">
          <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#Setting" aria-expanded="false" aria-controls="Setting">
            <i class="la la-cog"></i> Setting
          </a>
        </h5>
      </div>
      <div id="Setting" class="collapse <?php echo $this->uri->segment(2)=='setting'? 'show': ''?>" role="tabpanel" aria-labelledby="headingThree">
        <div class="card-block">
          <ul class="dw-nav">
            <li class="<?php echo $this->uri->segment(2)=='setting' && $this->uri->segment(3)=='index'? 'active': ''?>"><a href="<?php echo base_url('admin/setting/index');?>"><i class="la la-paw"></i> Site setting</a></li>
            <!-- <li><a href="#"><i class="la la-sliders"></i> POS Setting</a></li> -->
            <!-- <li><a href="#"><i class="la la-language"></i> Site Title</a></li> -->
            <!-- <li><a href="#"><i class="la la-dollar"></i> Currencies</a></li> -->
            <!-- <li><a href="#"><i class="la la-area-chart"></i> Tax Rate</a></li> -->
            <!-- <li><a href="#"><i class="la la-university"></i> Warehouse</a></li> -->
            <!-- <li><a href="#"><i class="la la-envelope"></i> Email Template</a></li> -->
            <!-- <li><a href="#"><i class="la la-balance-scale"></i> Units</a></li> -->
            <!-- <li><a href="#"><i class="la la-cloud-upload"></i> Backup</a></li> -->
            <!-- <li><a href="#"><i class="la la-warning"></i> Help</a></li> -->
            <!-- <li><a href="#"><i class="la la-cloud-download"></i> Update</a></li> -->
          </ul>
        </div>
      </div>
    </div>
    <!-- <div class="card">
      <div class="card-header" role="tab" id="headingThree">
        <h5 class="mb-0">
          <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#Reports" aria-expanded="false" aria-controls="Reports">
            <i class="la la-pie-chart"></i> Reports
          </a>
        </h5>
      </div>
      <div id="Reports" class="collapse" role="tabpanel" aria-labelledby="headingThree">
        <div class="card-block">
          <ul class="dw-nav">
            <li><a href="#"><i class="la la-bar-chart"></i> Sales Report</a></li>
            <li><a href="#"><i class="la la-bar-chart"></i> Purchases Report</a></li>
            <li><a href="#"><i class="la la-bar-chart"></i> Language</a></li>
            <li><a href="#"><i class="la la-bar-chart"></i> Currencies</a></li>
            <li><a href="#"><i class="la la-bar-chart"></i> Tax Rate</a></li>
            <li><a href="#"><i class="la la-bar-chart"></i> Warehouse</a></li>
            <li><a href="#"><i class="la la-bar-chart"></i> Email Template</a></li>
            <li><a href="#"><i class="la la-bar-chart"></i> Units</a></li>
            <li><a href="#"><i class="la la-bar-chart"></i> Backup</a></li>
            <li><a href="#"><i class="la la-bar-chart"></i> Help</a></li>
            <li><a href="#"><i class="la la-bar-chart"></i> Update</a></li>
          </ul>
        </div>
      </div>
    </div> -->
  </div>
  <ul class="ul_copy">
    <li class="nav-item" style="list-style: none; padding-top: 50px;">
      <small>&copy; 2018 auroratec</small>
    </li>
  </ul>
</div>
