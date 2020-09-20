<div class="container">
  <div class="row">
       <div class="content-header col-12">
      <h2 class="content-title"><i class="fa fa-bookmark  fa-2x">  </i> Tokens List</h2>
    </div>
    <?php echo anchor('admin/token/edit', '<i class="fa fa-bookmark "></i> Add a token', 'class="btn btn-danger btn-md"'); ?>

    <table class="table table-striped table-bordered">
      <thead class="thead-inverse">
        <tr>
          <th>#</th>
          <th>Token</th>
          <th class="hidden-md-down">Customer</th>
          <th class="hidden-sm-down">Service</th>
          <th class="hidden-md-down">Date</th>
          <th class="hidden-sm-down">status</th>
          <th>Edit</th>
          <th>Delete</th>
        </tr>
      </thead>
      <tbody>
      <?php
        $no = 1;
        if(sizeof($tokens)):foreach($tokens as $token):  ?>
        <tr>
          <th scope="row"><?php echo $no++; ?></th>
          <td><?php echo anchor('admin/token/edit/'.$token->id, $token->token); ?></td>
          <td class="hidden-md-down"><?php  $this->token_m->customer_by_id($token->customer_id); ?></td>
          <td class="hidden-sm-down"><?php $this->token_m->service_by_id($token->service_id);  ?></td>
          <td class="hidden-md-down"> <?php echo $token->t_date; ?>
          <td class="hidden-sm-down"> <?php echo $this->token_m->token_status($token->status); ?>
          </td>
          <td><?php echo bt_edit('admin/token/edit/'.$token->id); ?></td>
          <td><?php echo bt_delete('admin/token/delete/'.$token->id); ?></td>
        </tr>
      <?php endforeach; ?> <?php else: ?>
      <tr>
        <th>We Could Not Find any Token !</th>
      </tr>
    <?php endif; ?>

      </tbody>
    </table>
  </div>
</div>
