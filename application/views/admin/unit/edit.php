

<div class="container-fluid admin-area">
  <div class="row">
    <div class="content-header col-12">
      <h2 class="content-title"> <?php echo empty($unit->id) ? 'Add a <i class="la la-cube la-2x">  </i> New Unit' : 'Edit Unit <i class="la la-cube la-2x">  </i> '.$unit->name; ?></h2>
    </div>
    <div class="col-lg-3"></div>
    <div class="col-lg-6">
    <?php  echo $message = (validation_errors()) ? '<div class="alert alert-danger" role="alert">'.validation_errors().'</div>' : '' ; ?>
        <?php echo form_open(); ?>
    	    <div class="form-group row">
    	      <label for="inputEmail3" class="col-sm-2 col-form-label">Unit Name</label>
    	      <div class="col-sm-10">
    		      <?php
                	echo form_input('title', set_value('title', $unit->title), 'class="form-control" placeholder="unit Name" id="title"');
    		      ?>
    	      </div>
    	    </div>
          <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Unit Type</label>
            <div class="col-sm-10">
              <?php
                  echo form_dropdown('type', $this->unit_m->type_dw(),$unit->type,'aria-describedby="sub-cat" class="form-control lineAwsome" placeholder="unit Sub-unit" id="type"' );
              ?>
            </div>
          </div>

          <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Status</label>
            <div class="col-sm-10">

              <?php
                  echo form_dropdown('status', array('active', 'syspend'),$unit->status,'aria-describedby="sub-cat" class="form-control lineAwsome" placeholder="unit Sub-unit" id="status"' );
              ?>
            </div>
          </div>

          <hr>
    	    <div class="form-group row">
    	      <div class="offset-sm-2 col-sm-10">
              <?php echo empty($unit->id) ? form_submit('submit', 'Save', 'class="btn btn-warning pull-right"') : form_submit('submit', 'Update', 'class="btn btn-warning pull-right"');?>
    	      </div>
    	    </div>

    	 <?php form_close(); ?>
    </div>
  </div>
</div>
