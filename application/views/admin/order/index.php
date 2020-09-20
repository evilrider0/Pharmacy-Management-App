<script>
$(document).ready(function() {
  $('#table').DataTable();
} );
</script>
<div class="container-fluid admin-area">
  <div class="row">
       <div class="content-header col-12">
      <h2 class="content-title"><i class="la la-shopping-cart  la-2x">  </i> Orders List</h2>
    </div>
  <!-- <h2>order List</h2> -->
  <br><br>
  <?php echo anchor('admin/order/edit', '<i class="la la-cart-plus "></i> Add a Order', 'class="btn btn-danger btn-md"'); ?>
</div>
<div class='row'>
  <div class="content-header col-12">

    <table class="table table-striped table-bordered" id="table">
      <thead class="thead-inverse">
        <tr>
          <th>#</th>
          <th>Order No</th>
          <th class="hidden-md-down">Order Note</th>
          <th class="hidden-sm-down">Prescription</th>
          <th class="hidden-md-down">Date</th>
          <th class="hidden-sm-down">Order Status</th>
          <th>View</th>
          <th>Delete</th>
        </tr>
      </thead>
      <tbody>
      <?php
        $no = 1;
        if(sizeof($orders)):foreach($orders as $order):  ?>
        <tr>
          <th scope="row"><?php echo $no++; ?></th>
          <td><?php echo anchor('admin/order/edit/'.$order->id, $order->order_no); ?></td>
          <td class="hidden-sm-down"><?php echo $order->note;  ?></td>
          <td class="hidden-md-down"><img src="<?php echo  site_url('upload/'.$order->prescription); ?>" width="40px" alt=""></td>
          <td class="hidden-md-down"> <?php echo $order->date; ?>
          <td class="hidden-sm-down"> <?php echo $this->order_m->order_status($order->status);  ?>
          </td>

          <td><?php echo bt_view('admin/order/view/'.$order->id); ?></td>
          <td><?php echo bt_delete('admin/order/delete/'.$order->id); ?></td>
        </tr>
      <?php endforeach; ?> <?php else: ?>
      <tr>
        <th>We Could Not Find any order !</th>
      </tr>
    <?php endif; ?>

      </tbody>
    </table>
  </div>
</div>
