<script>
  // tinymce.init({
  //   selector: '#des'
  // });
  </script>

<div class="container">
  <div class="row">
    <div class="content-header col-12">
      <h2 class="content-title"> <?php echo empty($job->id) ? 'Add a <i class="la la-cogs la-2x">  </i> New job' : 'Edit job <i class="la la-cogs la-2x">  </i> '.$job->title; ?></h2>
    </div>
    <div class="col-lg-2"></div>
    <div class="col-lg-8">
    <?php  echo $message = (validation_errors()) ? '<div class="alert alert-danger" role="alert">'.validation_errors().'</div>' : '' ; ?>
        <?php echo form_open(); ?>
    	    <div class="form-group row">
    	      <label for="inputEmail3" class="col-sm-2 col-form-label">Job Title</label>
    	      <div class="col-sm-10">
    		      <?php
                	echo form_input('title', set_value('title', $job->title), 'class="form-control" placeholder="Job Title" id="name"');
    		      ?>
    	      </div>
    	    </div>
          <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Details</label>
            <div class="col-sm-10">
                  <!-- <textarea name="cat_des" id="" class="form-control" rows="3"></textarea>     -->
              <?php
                  echo form_textarea( array('name'=>'des','value'=>set_value('des', $job->des),'rows'=> '3', 'cols'=> '10', 'style' => 'width:100%', 'class'=>'form-control', 'id'=>'des'));

              ?>
            </div>
          </div>
          <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Closing Date</label>
            <div class="col-sm-10">             
              <!-- <?php 
                  echo form_dropdown('c_date', $this->job_m->get_employer_dw(),$job->c_date,'aria-describedby="c_date" class="form-control" id="c_date"' );
              ?> -->
              <input type="date" class="form-control" id="c_date" name="c_date" value="<?php echo $job->c_date; ?>">
            </div>
          </div>
          <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Employer</label>
            <div class="col-sm-10">             
              <?php 
                  echo form_dropdown('employer_id', $this->job_m->get_employer_dw(),$job->employer_id,'aria-describedby="employer_id" class="form-control" id="employer_id"' );
              ?>
            </div>
          </div>
          <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Jobs Category</label>
            <div class="col-sm-10">             
              <?php 
                  echo form_dropdown('cat', $this->job_m->categories(),$job->cat,'aria-describedby="sub-cat" class="form-control" id="cat"' );
              ?>
            </div>
          </div>
          <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Jobs Sub-category</label>
            <div class="col-sm-10">
              <?php
              if ($job->cat){
                  echo form_dropdown('sub_cat', $this->job_m->sub_categories_dw($job->cat),$job->sub_cat,'aria-describedby="sub-cat" class="form-control" id="sub_cat"' );
              }else{
                  echo form_dropdown('sub_cat', 'Select Category First',$job->sub_cat,'aria-describedby="sub-cat" class="form-control" id="sub_cat"' );
              }
                
              ?>
              <script>
                var cat = $('#cat');
                cat.change(function(){
                  var url = "<?php echo site_url('admin/category/sub_cat_dw/'); ?>"+cat.val();
                  $.get(url, function(data){
                      $('#sub_cat').html(data);
                  });
                });
              </script>
            </div>
          </div>
       

          <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Status</label>
            <div class="col-sm-10">
             
              <?php
                  echo form_dropdown('status', array('active', 'syspend'),$job->status,'aria-describedby="sub-cat" class="form-control lineAwsome" placeholder="job Sub-job" id="status"' );
              ?>
            </div>
          </div>
    	    
          <hr>
    	    <div class="form-group row">
    	      <div class="offset-sm-2 col-sm-10">
              <?php echo empty($job->id) ? form_submit('submit', 'Save', 'class="btn btn-warning pull-right"') : form_submit('submit', 'Update', 'class="btn btn-warning pull-right"');?>
    	      </div>
    	    </div>

    	 <?php form_close(); ?>
    </div>
  </div>
</div>


