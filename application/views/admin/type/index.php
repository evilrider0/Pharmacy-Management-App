<script>
$(document).ready(function() {
  $('#table').DataTable();
} );
</script>
<div class="container-fluid admin-area">
  <div class="row">
       <div class="content-header col-12">
      <h2 class="content-title"><i class="fa fa-cubes fa-2x">  </i> Product Type List</h2>
    </div>
    <?php echo anchor('admin/type/edit', '<i class="la la-cube"></i> Add a type', 'class="btn btn-success btn-md"'); ?>
  <?php //dump($types); ?>
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
        if(sizeof($types)):foreach($types as $type):  ?>
        <tr>
          <th scope="row"><?php echo $no++; ?></th>
          <td><?php echo anchor('admin/type/edit/'.$type->id, $type->type); ?></td>
          <td class="hidden-md-down"><?php echo substr($type->details,0,30).'...'; ?></td>

          <td><?php echo bt_edit('admin/type/edit/'.$type->id); ?></td>
          <td><?php echo bt_delete('admin/type/delete/'.$type->id); ?></td>
        </tr>
      <?php endforeach; ?> <?php else: ?>
      <tr>
        <th>We Could Not Find any type !</th>
      </tr>
    <?php endif; ?>

      </tbody>
    </table>
    </div>
  </div>
</div>
