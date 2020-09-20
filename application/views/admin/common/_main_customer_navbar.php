<div  class="nav-main">
  <div id="accordion" role="tablist" aria-multiselectable="true">
    <div class="card">
      <div class="card-header <?php echo $this->uri->segment(2)=='customer'? 'active': ''?>" role="tab" id="headingOne">
        <h5 class="mb-0">
          <a class="s_nav" href="<?php echo base_url('admin/customer');?>" >
            <i class="la la-dashboard"></i> Dashboard
          </a>
        </h5>
      </div>
    </div>
     <!-- Payments -->
    <div class="card">
      <div class="card-header <?php echo $this->uri->segment(2)=='order' ||  $this->uri->segment(3)=='viewA'? 'active': ''?>" role="tab" id="headingThree">
        <h5 class="mb-0">
          <a class="collapsed " data-toggle="collapse" data-parent="#accordion" href="#order" aria-expanded="true" aria-controls="order">
            <i class="la la-shopping-cart"></i> My Orders
          </a>
        </h5>
      </div>
      <div id="order" class="collapse <?php echo $this->uri->segment(2)=='order' ||  $this->uri->segment(2)=='' ? 'show': ''?>" role="tabpanel" aria-labelledby="headingThree">
        <div class="card-block">
          <ul class="dw-nav">
            <li class="<?php echo $this->uri->segment(2)=='order' && $this->uri->segment(3)=='edit'? 'active': ''?>">
              <a href="<?php echo base_url('admin/order/edit');?>"><i class="la la-shopping-cart  "></i> New Order</a>
            </li>
            <li class="<?php echo $this->uri->segment(2)=='order' && $this->uri->segment(3)==''  ? 'active': ''?>">
              <a href="<?php echo base_url('admin/order');?>"><i class="la la-shopping-cart  "></i> Orders</a>
            </li>

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
