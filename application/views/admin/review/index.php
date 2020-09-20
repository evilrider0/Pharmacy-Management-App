<div class="container">
  <div class="row">
       <div class="content-header col-12">
      <h2 class="content-title"><i class="la la-certificate  la-2x">  </i> Reviews List</h2>
    </div>
    <?php echo anchor('admin/review/edit', '<i class="la la-certificate"></i> Add a Review', 'class="btn btn-danger btn-md"'); ?>
  <!-- <h2>review List</h2> -->

    <table class="table table-striped table-breviewed">
      <thead class="thead-inverse">
        <tr>
          <th>#</th>
          <th>Service</th>
          <th class="hidden-sm-down">Review</th>
          <th class="hidden-sm-down">Review Description</th>
          <th class="hidden-sm-down">Status</th>
          <th>Edit</th>
          <th>Delete</th>
        </tr>
      </thead>
      <tbody>
      <?php
        $no = 1;
        if(sizeof($reviews)):foreach($reviews as $review):  ?>
        <tr>
          <th scope="row"><?php echo $no++; ?></th>
          <td><?php echo anchor('admin/review/edit/'.$review->id, $review->token); ?></td>
          <td class="hidden-sm-down"><?php  echo $review->review; ?> Star</td>
          <td class="hidden-sm-down"><?php echo $review->r_des;  ?></td>
          <td class="hidden-sm-down"> <?php echo $this->review_m->order_status($review->status);  ?>
          </td>

          <td><?php echo bt_edit('admin/review/edit/'.$review->id); ?></td>
          <td><?php echo bt_delete('admin/review/delete/'.$review->id); ?></td>
        </tr>
      <?php endforeach; ?> <?php else: ?>
      <tr>
        <th>We Could Not Find any review !</th>
      </tr>
    <?php endif; ?>

      </tbody>
    </table>
  </div>
</div>
