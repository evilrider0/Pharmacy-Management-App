<div class="container">
  <div class="row">
       <div class="content-header col-12">
      <h2 class="content-title"><i class="la la-bell  la-2x">  </i> Notifications List</h2>
    </div>
    <?php echo anchor('admin/notification/edit', '<i class="la la-plus "></i> Add a notification', 'class="btn btn-danger btn-md"'); ?>
  <!-- <h2>notification List</h2> -->

    <table class="table table-striped table-bnotificationed">
      <thead class="thead-inverse">
        <tr>
          <th>#</th>
          <th>Token</th>
          <th class="hidden-md-down">Customer</th>
          <th class="hidden-sm-down">Type</th>
          <th class="hidden-sm-down">Description</th>
          <th class="hidden-md-down">Date</th>
          <th class="hidden-sm-down">status</th>
          <th>Edit</th>
          <th>Delete</th>
        </tr>
      </thead>
      <tbody>
      <?php
        $no = 1;
        if(sizeof($notifications)):foreach($notifications as $notification):  ?>
        <tr>
          <th scope="row"><?php echo $no++; ?></th>
          <td><?php echo anchor('admin/notification/edit/'.$notification->id, $notification->token); ?></td>
          <td class="hidden-md-down"><?php  $this->notification_m->customer_by_id($notification->customer_id); ?></td>
          <td class="hidden-sm-down text-right"><?php  echo $this->notification_m->n_type($notification->type); ?></td>
          <td class="hidden-sm-down"><?php echo $notification->n_des;  ?></td>
          <td class="hidden-md-down"> <?php echo substr($notification->date, 0, 10); ?>
          <td class="hidden-sm-down"> <?php echo $this->notification_m->n_status($notification->status);  ?>
          </td>

          <td><?php echo bt_edit('admin/notification/edit/'.$notification->id); ?></td>
          <td><?php echo bt_delete('admin/notification/delete/'.$notification->id); ?></td>
        </tr>
      <?php endforeach; ?> <?php else: ?>
      <tr>
        <th>We Could Not Find any notification !</th>
      </tr>
    <?php endif; ?>

      </tbody>
    </table>
  </div>
</div>
