<?php $this->load->model('user_m'); ?>
<?php $this->load->view('admin/common/_customer-header'); ?>


<!-- <div class="container-fluid main-content-area customer" style=""> -->
<?php $this->load->view($subview); ?>
<!-- </div> -->


<?php $this->load->view('admin/common/_customer-footer'); ?>
