<?php $this->load->model('user_m'); ?>
<?php $this->load->view('admin/common/_header'); ?>

<?php $this->load->view('admin/common/_customer_navbar'); ?>

<div class="container-fluid main-content-area" style="">
  <div class="row">
    <div class="col-md-2 nav-wrap col-12 animated fadeIn">
      <?php $this->load->view('admin/common/_main_customer_navbar'); ?>
      <!--  hidden-sm-down -->
    </div>
      <div class="col-md-10"><br>
        <?php $this->load->view($subview); ?>
    </div>

  </div>
</div>


<?php $this->load->view('admin/common/_footer'); ?>
