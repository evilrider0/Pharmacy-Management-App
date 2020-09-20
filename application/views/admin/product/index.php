<script>
$(document).ready(function() {
  $('#table').DataTable();
} );
</script>
<div class="container-fluid admin-area">
  <div class="row">
       <div class="content-header col-12">
      <h2 class="content-title"><i class="la la-cogs la-2x">  </i> Products List</h2>
    </div>
    <?php echo anchor('admin/product/edit', '<i class="la la-cogs"></i> Add a product', 'class="btn btn-success btn-md"'); ?>
  <!-- <h2>product List</h2> -->
<div class="col-12">
  <br>
    <table class="table table-striped table-bordered" id="table">
      <thead class="thead-inverse">
        <tr>
          <th>#</th>
          <th class="">Photo</th>
          <th>Name</th>
          <th class="hidden-md-down">Details</th>
          <th class="hidden-md-down">BP</th>
          <th class="hidden-sm-down">Category</th>
          <th class="hidden-sm-down">Brand</th>
          <th class="hidden-sm-down">Last Update</th>
          <th>Edit</th>
          <th>Delete</th>
        </tr>
      </thead>
      <tbody>
      <?php
        $no = 1;
        if(sizeof($products)):foreach($products as $product):  ?>
        <tr>
          <th scope="row"><?php echo $no++; ?></th>
          <th scope="row"><img src="<?php echo $photo = ($product->photo !== "") ? site_url('upload/'.$product->photo) : site_url('img/product.jpg') ; ?>" height="40" alt=""></th>
          <td><?php echo anchor('admin/product/edit/'.$product->id, $product->name); ?></td>
          <td class="hidden-md-down"><?php echo substr($product->details,0,20).'...'; ?></td>
          <td class="hidden-sm-down">
            <?php  echo $product->bp." mg";    ?>
           </td>
          <td class="hidden-sm-down">
            <?php
            if ($product->category == '0') {
              echo 'No Type';
            }else{
              $this->product_m->category_by_id($product->category);
            }
           ?>

           </td>
           <td class="hidden-sm-down">
             <?php  $this->product_m->brand_by_id($product->brand);   ?>
            </td>
           <td class="hidden-md-down"><?php echo $product->date; ?></td>
          <td><?php echo bt_edit('admin/product/edit/'.$product->id); ?></td>
          <td><?php echo bt_delete('admin/product/delete/'.$product->id); ?></td>
        </tr>
      <?php endforeach; ?> <?php else: ?>
      <tr>
        <th>We Could Not Find any product !</th>
      </tr>
    <?php endif; ?>

      </tbody>
    </table>
    </div>
  </div>
</div>
