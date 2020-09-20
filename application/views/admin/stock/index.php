<script>
$(document).ready(function() {
  $('#table').DataTable();
} );
</script>
<div class="container-fluid admin-area">
  <div class="row">
       <div class="content-header col-12">
      <h2 class="content-title"><i class="fa fa-cubes fa-2x">  </i> stock List</h2>
    </div>
    <?php echo anchor('admin/stock/edit', '<i class="la la-cube"></i> Add a stock', 'class="btn btn-success btn-md"'); ?>
  <?php //dump($stocks); ?>

<div class="col-12">
    <br>
    <table class="table table-striped table-bordered" id="table">
      <thead class="thead-inverse">
        <tr>
          <th>#</th>
          <!-- <th class="">Photo</th> -->
          <th>Date</th>
          <th>Product</th>
          <th class="hidden-md-down">Stock</th>
          <th class="hidden-md-down">Unit</th>
          <th class="hidden-md-down">Buy Price</th>
          <th class="hidden-md-down">Sell Price</th>
          <th class="hidden-md-down">Expire Date</th>
          <th>Edit</th>
          <th>Delete</th>
        </tr>
      </thead>
      <tbody>
      <?php

        $no = 1;
        if(sizeof($stocks)):foreach($stocks as $stock):  ?>
        <tr>
          <th scope="row"><?php echo $no++; ?></th>
          <td class="hidden-md-down"><?php echo $stock->date; ?></td>
          <td><?php echo anchor('admin/stock/edit/'.$stock->id, $this->stock_m->product_by_id($stock->product)); ?></td>
          <td class="hidden-md-down"><?php echo $stock->stock; ?></td>
          <td class="hidden-md-down"><?php echo $this->stock_m->unit_by_id($stock->s_unit); ?></td>
          <td class="hidden-md-down"><?php echo $stock->b_price.' BDT'; ?></td>
          <td class="hidden-md-down"><?php echo $stock->s_price.' BDT'; ?></td>
          <td class="hidden-md-down"><?php echo $stock->e_date; ?></td>

          <td><?php echo bt_edit('admin/stock/edit/'.$stock->id); ?></td>
          <td><?php echo bt_delete('admin/stock/delete/'.$stock->id); ?></td>
        </tr>
      <?php endforeach; ?> <?php else: ?>
      <tr>
        <th>We Could Not Find any stock !</th>
      </tr>
    <?php endif; ?>

      </tbody>
    </table>

    </div>
  </div>
</div>
