

<div class="container-fluid admin-area">
  <div class="row">
    <div class="content-header col-12">
      <h2 class="content-title"> <?php echo empty($type->id) ? 'Add a <i class="la la-cube la-2x">  </i> New Product Type' : 'Edit Product Type <i class="la la-cube la-2x">  </i> '.$type->name; ?></h2>
    </div>
    <div class="col-lg-3"></div>
    <div class="col-lg-6">
    <?php  echo $message = (validation_errors()) ? '<div class="alert alert-danger" role="alert">'.validation_errors().'</div>' : '' ; ?>
        <?php echo form_open(); ?>
    	    <div class="form-group row">
    	      <label for="inputEmail3" class="col-sm-2 col-form-label">Product Type Name</label>
    	      <div class="col-sm-10">
    		      <?php
                	echo form_input('type', set_value('type', $type->type), 'class="form-control" placeholder="type Name" id="type"');
    		      ?>
    	      </div>
    	    </div>
          <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Details</label>
            <div class="col-sm-10">
              <?php
                  echo form_textarea( array('name'=>'details','value'=>set_value('details', $type->details),'rows'=> '3', 'cols'=> '10', 'style' => 'width:100%', 'class'=>'form-control'));

              ?>
            </div>
          </div>

          <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Status</label>
            <div class="col-sm-10">

              <?php
                  echo form_dropdown('status', array('active', 'syspend'),$type->status,'aria-describedby="sub-cat" class="form-control lineAwsome" placeholder="type Sub-type" id="status"' );
              ?>
            </div>
          </div>

          <hr>
    	    <div class="form-group row">
    	      <div class="offset-sm-2 col-sm-10">
              <?php echo empty($type->id) ? form_submit('submit', 'Save', 'class="btn btn-warning pull-right"') : form_submit('submit', 'Update', 'class="btn btn-warning pull-right"');?>
    	      </div>
    	    </div>

    	 <?php form_close(); ?>
    </div>
  </div>
</div>
