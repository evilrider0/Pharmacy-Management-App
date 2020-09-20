<script>
$(document).ready(function() {
  $('#table').DataTable();
} );
</script>
<div class="container-fluid admin-area">
  <div class="row">
       <div class="content-header col-12">
      <h2 class="content-title"><i class="fa fa-users fa-2x">  </i> Employer List</h2>
    </div>
    <?php echo anchor('admin/user/employer_edit', '<i class="la la-user-plus"></i> Add a Employer', 'class="btn btn-success btn-md"'); ?>
  <!-- <h2>User List</h2> -->

  <div class="col-12">
    <br>
      <table class="table table-striped table-bordered" id="table">
      <thead class="thead-inverse">
        <tr>
          <th>#</th>
          <th>Name</th>
          <th class="hidden-sm-down">Email</th>
          <th class="hidden-md-down">Phone</th>
          <th class="hidden-md-down">Type</th>
          <th>Edit</th>
          <th>Delete</th>
        </tr>
      </thead>
      <tbody>
      <?php
        $no = 1;
        if(sizeof($users)):foreach($users as $user):  ?>
        <tr>
          <th scope="row"><?php echo $no++; ?></th>
          <td><?php echo anchor('admin/user/employer_edit/'.$user->id, $user->name); ?></td>
          <td class="hidden-sm-down"><?php echo $user->email; ?></td>
          <td class="hidden-md-down"><?php echo $user->phone; ?></td>
          <td class="hidden-md-down"><?php echo $this->user_m->user_type($user->type); ?></td>
          <td><?php echo bt_edit('admin/user/employer_edit/'.$user->id); ?></td>
          <td><?php echo bt_delete('admin/user/delete/'.$user->id); ?></td>
        </tr>
      <?php endforeach; ?> <?php else: ?>
      <tr>
        <th>We Could Not Find any user !</th>
      </tr>
    <?php endif; ?>

      </tbody>
    </table>
  </div>
  </div>
</div>
