<script>
  tinymce.init({
    selector: '#des'
  });
  </script>


<div class="row my-token">
  <div class="container">
    <div class="row">
      <!-- <div class="col-12">
      </div> -->
      <div class="col-lg-3 col-md-3 d-none d-sm-block" id="employer-navbar">
        <br><br><br>
        <ul class="list-group">
          <li class="list-group-item">
          <a href="<?php echo site_url('admin/employer/job_post'); ?>"><i class="la la-plus"></i> Post a New Job</a>
          </li>
          <li class="list-group-item">
          <a href="<?php echo site_url('admin/employer/job_all'); ?>"><i class="la la-briefcase"></i> All Jobs</a>
          </li>
          <li class="list-group-item">
          <a href="<?php echo site_url('admin/employer/job_active'); ?>"><i class="la la-check-circle"></i> Active Jobs</a>
          </li>
          <li class="list-group-item">
          <a href="<?php echo site_url('admin/employer/job_syspend'); ?>"><i class="la la-times-circle"></i> Syspend Jobs</a>
          </li>
        </ul>
      </div>
      <div class="col-lg-7 col-md-7 col-12 col-12">
        <!-- TOKEN info card -->
        <br><br><br>
        <div class="setting-form container">
          <div class="row">
            <div class="col-12">
              <?php  echo $message = (validation_errors()) ? '<div class="alert alert-danger" role="alert">'.validation_errors().'</div>' : '' ; ?>
              <?php echo form_open(); ?>
                <div class="form-group row">
                  <label for="inputEmail3" class="col-sm-4 col-form-label">Job Title</label>
                  <div class="col-sm-8">
                    <?php
                        echo form_input('title', set_value('title', $job->title), 'class="form-control" placeholder="Job Title" id="name"');
                    ?>
                  </div>
                </div>
                <div class="form-group row">
                  <label for="inputEmail3" class="col-sm-4 col-form-label">Details</label>
                  <div class="col-sm-8">
                        <!-- <textarea name="cat_des" id="" class="form-control" rows="3"></textarea>     -->
                    <?php
                        echo form_textarea( array('name'=>'des','value'=>set_value('des', $job->des),'rows'=> '3', 'cols'=> '10', 'style' => 'width:100%', 'class'=>'form-control', 'id'=>'des'));

                    ?>
                  </div>
                </div>
                <div class="form-group row">
                  <label for="inputEmail3" class="col-sm-4 col-form-label">Closing Date</label>
                  <div class="col-sm-8">             
                    <!-- <?php 
                        echo form_dropdown('c_date', $this->job_m->get_employer_dw(),$job->c_date,'aria-describedby="c_date" class="form-control" id="c_date"' );
                    ?> -->
                    <input type="date" class="form-control" id="c_date" name="c_date" value="<?php echo $job->c_date; ?>">
                  </div>
                </div>                
                <div class="form-group row">
                  <label for="inputEmail3" class="col-sm-4 col-form-label">Jobs Category</label>
                  <div class="col-sm-8">             
                    <?php 
                        echo form_dropdown('cat', $this->job_m->categories(),$job->cat,'aria-describedby="sub-cat" class="form-control" id="cat"' );
                    ?>
                  </div>
                </div>
                <div class="form-group row">
                  <label for="inputEmail3" class="col-sm-4 col-form-label">Jobs Sub-category</label>
                  <div class="col-sm-8">
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
                        var url = "<?php echo site_url('admin/employer/sub_cat_dw/'); ?>"+cat.val();
                        $.get(url, function(data){
                            $('#sub_cat').html(data);
                        });
                      });
                    </script>
                  </div>
                </div>
                <div class="form-group row">
                  <label for="inputEmail3" class="col-sm-4 col-form-label">Salary Estimate</label>
                  <div class="col-sm-8">
                    <?php
                        echo form_input('selary', set_value('selary', $job->selary), 'class="form-control" placeholder="10,000" id="selary"');
                    ?>
                  </div>
                </div>
                <div class="form-group row">
                  <label for="inputEmail3" class="col-sm-4 col-form-label">Job Types</label>
                  <div class="col-sm-8">             
                    <?php 
                        echo form_dropdown('type', array('Full Time', 'Part Time', 'Remote'),$job->type,'aria-describedby="sub-type" class="form-control" id="type"' );
                    ?>
                  </div>
                </div>
                <div class="form-group row">
                  <label for="inputEmail3" class="col-sm-4 col-form-label">Job Location</label>
                  <div class="col-sm-8">
                    <?php
                        echo form_input('location', set_value('location', $job->location), 'class="form-control" placeholder="city, state, zipcode" id="location"');
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
        <!-- TOKEN info card -->

        
      </div>
      <div class="col-lg-3 col-md-3 col-0 col-sm-1"></div>
    </div>
  </div>
</div>

<script>
  $('#employer-nav').click(function(){
    var navbar = $('#employer-navbar');
    if (navbar.hasClass('d-none')) {
      navbar.removeClass('d-none');
      navbar.removeClass('d-sm-block');
      navbar.addClass('col-12');
    }else{
      navbar.addClass('d-none');
      navbar.addClass('d-sm-block');
      navbar.removeClass('col-12');
    }
    
  });
</script>