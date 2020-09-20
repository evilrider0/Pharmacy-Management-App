<script>
$(document).ready(function() {
  $('#table').DataTable();
} );
</script>
<div class="container-fluid admin-area">
  <div class="row">
       <div class="content-header col-12">
      <h2 class="content-title"><i class="fa fa-cubes fa-2x">  </i> unit List</h2>
    </div>
    <?php echo anchor('admin/unit/edit', '<i class="la la-cube"></i> Add a unit', 'class="btn btn-success btn-md"'); ?>
  <?php //dump($units); ?>
<div class="col-12">
  <br>
    <table class="table table-striped table-bordered" id="table">
      <thead class="thead-inverse">
        <tr>
          <th>#</th>
          <!-- <th class="">Photo</th> -->
          <th>Unit Title</th>
          <th class="hidden-md-down">Type</th>
          <th>Edit</th>
          <th>Delete</th>
        </tr>
      </thead>
      <tbody>
      <?php

        $no = 1;
        if(sizeof($units)):foreach($units as $unit):  ?>
        <tr>
          <th scope="row"><?php echo $no++; ?></th>
          <td><?php echo anchor('admin/unit/edit/'.$unit->id, $unit->title); ?></td>
          <td class="hidden-md-down"><?php $this->unit_m->type_by_id($unit->type); ?></td>

          <td><?php echo bt_edit('admin/unit/edit/'.$unit->id); ?></td>
          <td><?php echo bt_delete('admin/unit/delete/'.$unit->id); ?></td>
        </tr>
      <?php endforeach; ?> <?php else: ?>
      <tr>
        <th>We Could Not Find any unit !</th>
      </tr>
    <?php endif; ?>

      </tbody>
    </table>
    </div>
  </div>
</div>
