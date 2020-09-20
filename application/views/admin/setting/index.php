

<div class="container">
  <div class="row">
    <div class="content-header col-12">
      <h2 class="content-title"><i class="fa fa-cogs fa-2x">  </i> Site Setting</h2>
    </div>
    <div class="col-lg-2"></div>
    <div class="col-lg-7">

    <?php  echo $message = (validation_errors()) ? '<div class="alert alert-danger" role="alert">'.validation_errors().'</div>' : '' ; ?>
        <?php echo form_open(); ?>
          <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Logo</label>
            <div class="col-sm-10">
              <input type="file" name="s_logo" class="form-control">
            </div>
          </div>
          <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Site Title</label>
            <div class="col-sm-10">
              <?php
                  echo form_input('site_title', set_value('text', $setting->site_title), 'class="form-control" placeholder="Site Title" id="site_title"');
              ?>
            </div>
          </div><div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Phone</label>
            <div class="col-sm-10">
              <?php
                  echo form_input('phone', set_value('phone', $setting->phone), 'class="form-control" placeholder="Phone" id="Phone"');
              ?>
            </div>
          </div>
          <div class="form-group row">
            <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
            <div class="col-sm-10">
              <?php
                echo form_password('password', '', 'class="form-control" placeholder="Password" id="passwpord"');
               ?>
            </div>
          </div>
          <div class="form-group row">
            <label for="inputPassword3" class="col-sm-2 col-form-label">Confirm Password</label>
            <div class="col-sm-10">
              <?php
                echo form_password('password_confirm', '', 'class="form-control" placeholder="Confirm Password" id="password_confirm"');
               ?>
            </div>
          </div>
          <hr>
          <div class="form-group row">
            <div class="offset-sm-2 col-sm-10">
              <?php echo empty($setting->id) ? form_submit('submit', 'Save', 'class="btn btn-warning pull-right"') : form_submit('submit', 'Update', 'class="btn btn-warning pull-right"');?>
            </div>
          </div>
       <?php form_close(); ?>
    </div>
  </div>
</div>
