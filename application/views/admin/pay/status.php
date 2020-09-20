<div class="container-fluid admin-area">
  <div class="row">
       <div class="content-header col-12">
      <h2 class="content-title"><i class="la la-check-square la-2x">  </i> Transction Status List</h2>
    </div>
  </div>
    <?php echo anchor('admin/pay/status_edit', '<i class="la la-briefcase"></i> Add a Transction Status', 'class="btn btn-danger btn-md"'); ?>
  <!-- <h2>job List</h2> -->

    <table class="table table-striped table-bordered">
      <thead class="thead-inverse">
        <tr>
         <th>#</th>
         <th class="">Status</th>
         <th class="">Details</th>
         <th>Action</th>
       </tr>
      </thead>
      <tbody>
      <?php
        $no = 1;
        if(sizeof($status)):foreach($status as $job):  ?>
        <tr>
          <th scope="row"><?php echo $no++; ?></th>
          <th scope="row"><?php echo anchor('admin/pay/status_edit/'.$job->id, $job->title); ?></th>
          <td class="hidden-md-down"><?php echo $job->des; ?></td>
          <td><?php echo bt_edit('admin/pay/status_edit/'.$job->id); ?> &nbsp; <?php echo bt_delete('admin/pay/status_delete/'.$job->id); ?></td>
        </tr>
      <?php endforeach; ?> <?php else: ?>
      <tr>
        <th>We Could Not Find any Status !</th>
      </tr>
    <?php endif; ?>

      </tbody>
    </table>
  </div>
</div>


<script>
      // STATUS TOGGLE
    $('.status').click(function(){
      var icon = $(this);
      var status = $(this).siblings('.job_status');
      var job_id = $(this).siblings('.job_id');
        var url = '<?php echo site_url("admin/job/status_toggle"); ?>';
      if(status.val()){
        var data = {
          status : status.val(),
          job_id : job_id.val(),
        };
        // AJAX
        $.post(url, data, function(result){
            if(result){
              console.log(icon.hasClass('la-toggle-off'));
               alertify.success('<p class="text-center" style="color:#fff;margin:0px">Status Updated</p>');
               if(icon.hasClass('la-toggle-off')){
                // console.log(status);
                icon.removeClass('la-toggle-off');
                icon.addClass('la-toggle-on');
                icon.css('color','#14d963');
               }else{
                icon.removeClass('la-toggle-on');
                icon.addClass('la-toggle-off');
                icon.css('color','#bcb4b4');
               }
            }else{
              console.log(result);
               alertify.error('<p class="text-center" style="color:#fff;margin:0px">Data Error</p>');
            }
        });

      }else{
        console.log('data error');
      }
    });
</script>
