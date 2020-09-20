<script>
  // tinymce.init({
  //   selector: '#des'
  // });
  </script>

<div class="container-fluid admin-area">
  <div class="row">
    <div class="content-header col-12">
      <h2 class="content-title"> <?php echo empty($pay->id) ? 'Add a <i class="la la-cogs la-2x">  </i> New pay' : 'Edit pay <i class="la la-cogs la-2x">  </i> '.$pay->title; ?></h2>
    </div>
    <div class="col-lg-2"></div>
    <div class="col-lg-8">
    <?php  echo $message = (validation_errors()) ? '<div class="alert alert-danger" role="alert">'.validation_errors().'</div>' : '' ; ?>
        <?php echo form_open(); ?>
    	    <div class="form-group row">
    	      <label for="inputEmail3" class="col-sm-2 col-form-label">Status Title</label>
    	      <div class="col-sm-10">
    		      <?php
                	echo form_input('title', set_value('title', $pay->title), 'class="form-control" placeholder="Status Title" id="title"');
    		      ?>
    	      </div>
    	    </div>
          <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Details</label>
            <div class="col-sm-10">
              <?php
                  echo form_textarea( array('name'=>'des','value'=>set_value('des', $pay->des),'rows'=> '3', 'cols'=> '10', 'style' => 'width:100%', 'class'=>'form-control', 'id'=>'des'));

              ?>
            </div>
          </div>




          <hr>
    	    <div class="form-group row">
    	      <div class="offset-sm-2 col-sm-10">
              <?php echo empty($pay->id) ? form_submit('submit', 'Save', 'class="btn btn-warning pull-right"') : form_submit('submit', 'Update', 'class="btn btn-warning pull-right"');?>
    	      </div>
    	    </div>

    	 <?php form_close(); ?>
    </div>
  </div>
</div>
