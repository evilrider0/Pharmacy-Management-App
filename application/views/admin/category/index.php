<script>
$(document).ready(function() {
  $('#table').DataTable();
} );
</script>
<div class="container-fluid admin-area">
  <div class="row">
       <div class="content-header col-12">
      <h2 class="content-title"><i class="fa fa-cubes fa-2x">  </i> Categories List</h2>
    </div>
    <?php echo anchor('admin/category/edit', '<i class="la la-cube"></i> Add a category', 'class="btn btn-success btn-md"'); ?>
  <?php //dump($categorys); ?>
  <div class="col-12">
    <br>

    <table class="table table-striped table-bordered"  id="table">
      <thead class="thead-inverse">
        <tr>
          <th>#</th>
          <!-- <th class="">Photo</th> -->
          <th>Name</th>
          <th class="hidden-md-down">Details</th>
          <!-- <th class="hidden-sm-down">Parent</th> -->
          <th>Edit</th>
          <th>Delete</th>
        </tr>
      </thead>
      <tbody>
      <?php

        $no = 1;
        if(sizeof($categorys)):foreach($categorys as $category):  ?>
        <tr>
          <th scope="row"><?php echo $no++; ?></th>
          <!-- <th scope="row"><img src="<?php echo $photo = ($category->photo !== "") ? site_url('upload/'.$category->photo) : site_url('images/services.png') ; ?>" height="40" alt=""></th> -->
          <td><?php echo anchor('admin/category/edit/'.$category->id, $category->cat_name); ?></td>
          <td class="hidden-md-down"><?php echo $category->cat_des; ?></td>
          <!-- <td class="hidden-sm-down">
            <?php
            if ($category->cat_parent == '0') {
              echo 'No Parent';
            }else{
              $this->category_m->category_by_id($category->cat_parent);
            }
           ?> -->

           </td>
          <td><?php echo bt_edit('admin/category/edit/'.$category->id); ?></td>
          <td><?php echo bt_delete('admin/category/delete/'.$category->id); ?></td>
        </tr>
      <?php endforeach; ?> <?php else: ?>
      <tr>
        <th>We Could Not Find any category !</th>
      </tr>
    <?php endif; ?>

      </tbody>
    </table>

    </div>

  </div>
</div>
