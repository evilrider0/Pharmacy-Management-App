<div  class="nav-main">
  <div id="accordion" role="tablist" aria-multiselectable="true">
    <div class="card">
      <div class="card-header <?php echo $this->uri->segment(2)=='dashboard'? 'active': ''?>" role="tab" id="headingOne">
        <h5 class="mb-0">
          <a class="s_nav" href="<?php echo base_url('admin/dashboard');?>" >
            <i class="la la-dashboard"></i> Dashboard
          </a>
        </h5>
      </div>
    </div>
     <!-- Payments -->
    <div class="card">
      <div class="card-header <?php echo $this->uri->segment(2)=='job'? 'active': ''?>" role="tab" id="headingThree">
        <h5 class="mb-0">
          <a class="collapsed " data-toggle="collapse" data-parent="#accordion" href="#pay" aria-expanded="true" aria-controls="pay">
            <i class="la la-paypal"></i> Product
          </a>
        </h5>
      </div>
      <div id="pay" class="collapse <?php echo $this->uri->segment(2)=='product' ||  $this->uri->segment(2)=='category' ||  $this->uri->segment(2)=='brand' ||  $this->uri->segment(2)=='type'  ||  $this->uri->segment(2)=='unit' ||  $this->uri->segment(2)=='stock' ? 'show': ''?>" role="tabpanel" aria-labelledby="headingThree">
        <div class="card-block">
          <ul class="dw-nav">
            <li class="<?php echo $this->uri->segment(2)=='product' && ($this->uri->segment(3)=='edit' || $this->uri->segment(3)=='')? 'active': ''?>">
              <a href="<?php echo base_url('admin/product');?>"><i class="la la-paypal"></i> Products</a>
            </li>
            <li class="<?php echo $this->uri->segment(2)=='category' && ($this->uri->segment(3)=='edit' || $this->uri->segment(3)=='')? 'active': ''?>">
                <a href="<?php echo base_url('admin/category');?>"><i class="la la-plus"></i> Product Category</a>
            </li>
            <li class="<?php echo $this->uri->segment(2)=='brand' && ($this->uri->segment(3)=='edit' || $this->uri->segment(3)=='')? 'active': ''?>">
                <a href="<?php echo base_url('admin/brand');?>"><i class="la la-check-square"></i> Product Brand</a>
            </li>
            <li class="<?php echo $this->uri->segment(2)=='type' && ($this->uri->segment(3)=='edit' || $this->uri->segment(3)=='')? 'active': ''?>">
                <a href="<?php echo base_url('admin/type');?>"><i class="la la-times-circle"></i> Product Type</a>
            </li>
            <li class="<?php echo $this->uri->segment(2)=='unit' &&  ($this->uri->segment(3)=='edit' ||$this->uri->segment(3)=='')? 'active': ''?>">
                <a href="<?php echo base_url('admin/unit');?>"><i class="la la-times-circle"></i> Product Unit</a>
            </li>
            <li class="<?php echo $this->uri->segment(2)=='stock' && ($this->uri->segment(3)=='edit' || $this->uri->segment(3)=='')? 'active': ''?>">
                <a href="<?php echo base_url('admin/stock');?>"><i class="la la-times-circle"></i> Product Stock</a>
            </li>

          </ul>
        </div>
      </div>
    </div>
     <!-- JOBS -->
    <div class="card">
      <div class="card-header <?php echo $this->uri->segment(2)=='order_r'? 'active': ''?>" role="tab" id="headingThree">
        <h5 class="mb-0">
          <a class="collapsed " data-toggle="collapse" data-parent="#accordion" href="#job" aria-expanded="true" aria-controls="job">
            <i class="la la-shopping-cart"></i> Orders
          </a>
        </h5>
      </div>
      <div id="job" class="collapse <?php echo $this->uri->segment(2)=='order_r'? 'show': ''?>" role="tabpanel" aria-labelledby="headingThree">
        <div class="card-block">
          <ul class="dw-nav">

            <li class="<?php echo $this->uri->segment(2)=='order_r' && $this->uri->segment(3)=='' || $this->uri->segment(3)=='process'? 'active': ''?>">
                <a href="<?php echo base_url('admin/order_r');?>"><i class="la la-briefcase"></i> All Orders</a>
            </li>
            <li class="<?php echo $this->uri->segment(2)=='order_r' && $this->uri->segment(3)=='new_order'? 'active': ''?>">
                <a href="<?php echo base_url('admin/order_r/new_order');?>"><i class="la la-check-circle"></i> New Orders</a>
            </li>
            <li class="<?php echo $this->uri->segment(2)=='order_r' && $this->uri->segment(3)=='processed'? 'active': ''?>">
                <a href="<?php echo base_url('admin/order_r/processed');?>"><i class="la la-times-circle"></i> Processed Orders</a>
            </li>
            <li class="<?php echo $this->uri->segment(2)=='order_r' && $this->uri->segment(3)=='on_delivery'? 'active': ''?>">
                <a href="<?php echo base_url('admin/order_r/on_delivery');?>"><i class="la la-times-circle"></i> On Delivery Orders</a>
            </li>
            <li class="<?php echo $this->uri->segment(2)=='order_r' && $this->uri->segment(3)=='complete'? 'active': ''?>">
                <a href="<?php echo base_url('admin/order_r/complete');?>"><i class="la la-plus"></i> Complete Orders</a>
            </li>
            <li class="<?php echo $this->uri->segment(2)=='order_r' && $this->uri->segment(3)=='cancle'? 'active': ''?>">
                <a href="<?php echo base_url('admin/order_r/cancle');?>"><i class="la la-times-circle"></i> Cancle Orders</a>
            </li>

          </ul>
        </div>
      </div>
    </div>

    <!-- CATEGORIES -->
    <!-- <div class="card">
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
            <li class="<?php echo $this->uri->segment(2)=='category' && $this->uri->segment(3)=='sub_cat'? 'active': ''?>">
                <a href="<?php echo base_url('admin/category/sub_cat');?>"><i class="la la-cube"></i> Sub Category List</a>
            </li>
            <li class="<?php echo $this->uri->segment(2)=='category' && $this->uri->segment(3)=='edit'? 'active': ''?>">
                <a href="<?php echo base_url('admin/category/edit');?>"><i class="la la-plus"></i> Add Category</a>
            </li>

          </ul>
        </div>
      </div>
    </div> -->

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
            <li class="<?php echo $this->uri->segment(2)=='user' && $this->uri->segment(3)==''? 'active': ''?>">
                <a href="<?php echo base_url('admin/user');?>"><i class="la la-user-secret"></i> Admin Users</a>
            </li>
            <!-- <li class="<?php echo $this->uri->segment(2)=='user' && $this->uri->segment(3)=='edit'? 'active': ''?>">
                <a href="<?php echo base_url('admin/user/edit');?>"><i class="la la-user-plus"></i> Add Admin</a>
            </li> -->

            <li class="<?php echo $this->uri->segment(2)=='user' && $this->uri->segment(3)=='customer'? 'active': ''?>"><a href="<?php echo base_url('admin/user/customer');?>"><i class="la la-list-alt"></i> Customers</a></li>
            <!-- <li class="<?php echo $this->uri->segment(2)=='user' && $this->uri->segment(3)=='customer_edit'? 'active': ''?>"><a href="<?php echo base_url('admin/user/employer_edit');?>"><i class="la la-user-plus"></i> Add Employer</a></li> -->

            <!-- <li class="<?php echo $this->uri->segment(2)=='user' && $this->uri->segment(3)=='employer'? 'active': ''?>"><a href="<?php echo base_url('admin/user/employer');?>"><i class="la la-list-alt"></i> Employer List</a></li>
            <li class="<?php echo $this->uri->segment(2)=='user' && $this->uri->segment(3)=='employer_edit'? 'active': ''?>"><a href="<?php echo base_url('admin/user/employer_edit');?>"><i class="la la-user-plus"></i> Add Employer</a></li> -->
          </ul>
        </div>
      </div>
    </div>


  </div>
  <ul class="ul_copy">
    <li class="nav-item" style="list-style: none; padding-top: 50px;">
      <p class="text-center"><small>&copy; 2020 auroratec.net</small></p>
    </li>
  </ul>
</div>
