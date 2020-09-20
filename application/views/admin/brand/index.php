<script>
$(document).ready(function() {
  $('#table').DataTable();
} );
</script>
<div class="container-fluid admin-area">
  <div class="row">
       <div class="content-header col-12">
      <h2 class="content-title"><i class="fa fa-cubes fa-2x">  </i> Brand List</h2>
    </div>
    <?php echo anchor('admin/brand/edit', '<i class="la la-cube"></i> Add a brand', 'class="btn btn-success btn-md"'); ?>
  <?php //dump($brands); ?>
<div class="col-12">
  <br>
    <table class="table table-striped table-bordered" id="table">
      <thead class="thead-inverse">
        <tr>
          <th>#</th>
          <!-- <th class="">Photo</th> -->
          <th>Name</th>
          <th class="hidden-md-down">Details</th>
          <th>Edit</th>
          <th>Delete</th>
        </tr>
      </thead>
      <tbody>
      <?php

        $no = 1;
        if(sizeof($brands)):foreach($brands as $brand):  ?>
        <tr>
          <th scope="row"><?php echo $no++; ?></th>
          <!-- <th scope="row"><img src="<?php echo $photo = ($brand->photo !== "") ? site_url('upload/'.$brand->photo) : site_url('images/services.png') ; ?>" height="40" alt=""></th> -->
          <td><?php echo anchor('admin/brand/edit/'.$brand->id, $brand->name); ?></td>
          <td class="hidden-md-down"><?php echo substr($brand->details,0,30).'...'; ?></td>

          <td><?php echo bt_edit('admin/brand/edit/'.$brand->id); ?></td>
          <td><?php echo bt_delete('admin/brand/delete/'.$brand->id); ?></td>
        </tr>
      <?php endforeach; ?> <?php else: ?>
      <tr>
        <th>We Could Not Find any brand !</th>
      </tr>
    <?php endif; ?>

      </tbody>
    </table>
    </div>
  </div>
</div>
