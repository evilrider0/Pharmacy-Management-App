

<div class="container-fluid admin-area">
  <div class="row">
    <div class="content-header col-12">
      <h2 class="content-title"> <?php echo empty($category->id) ? 'Add a <i class="la la-cube la-2x">  </i> New category' : 'Edit category <i class="la la-cube la-2x">  </i> '.$category->cat_name; ?></h2>
    </div>
    <div class="col-lg-3"></div>
    <div class="col-lg-6">
    <?php  echo $message = (validation_errors()) ? '<div class="alert alert-danger" role="alert">'.validation_errors().'</div>' : '' ; ?>
        <?php echo form_open(); ?>
    	    <div class="form-group row">
    	      <label for="inputEmail3" class="col-sm-2 col-form-label">Category Name</label>
    	      <div class="col-sm-10">
    		      <?php
                	echo form_input('cat_name', set_value('cat_name', $category->cat_name), 'class="form-control" placeholder="Category Name" id="name"');
    		      ?>
    	      </div>
    	    </div>
          <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Details</label>
            <div class="col-sm-10">
                  <!-- <textarea name="cat_des" id="" class="form-control" rows="3"></textarea>     -->
              <?php
                  echo form_textarea( array('name'=>'cat_des','value'=>set_value('cat_des', $category->cat_des),'rows'=> '3', 'cols'=> '10', 'style' => 'width:100%', 'class'=>'form-control'));

              ?>
            </div>
          </div>

          <!-- photo upload -->
          <!-- <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Photo</label>
            <div class='col-sm-10'>
              <div class="img-preview"><img height="242px" src="<?php echo $photo = ($category->photo !== "") ? site_url('upload/'.$category->photo) : site_url('images/services.png') ; ?>" id="preview" class="img img-responsive"></div>
            </div>
            <div class='col-sm-2'></div>
            <div class='col-sm-10'>
              <input type="hidden" id="img_photo" name="photo" value="<?php echo $category->photo ?>">
              <br>
              <button id="profile" onclick="openUploadModal('profile')" data-field="photo" data-preview="preview" type="button"  class="btn btn-outline-info profile"><i class="la la-user"></i>  Photo</button>
            </div>
          </div> -->
          <!-- photo upload -->

          <!-- <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Parent</label>
            <div class="col-sm-10">

              <?php
                  echo form_dropdown('cat_parent', $this->category_m->categories(),$category->cat_parent,'aria-describedby="sub-cat" class="form-control" placeholder="Category Sub-Category" id="cat_parent"' );
              ?>
            </div>
          </div> -->
          <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Status</label>
            <div class="col-sm-10">

              <?php
                  echo form_dropdown('status', array('active', 'syspend'),$category->status,'aria-describedby="sub-cat" class="form-control lineAwsome" placeholder="Category Sub-Category" id="status"' );
              ?>
            </div>
          </div>

          <hr>
    	    <div class="form-group row">
    	      <div class="offset-sm-2 col-sm-10">
              <?php echo empty($category->id) ? form_submit('submit', 'Save', 'class="btn btn-warning pull-right"') : form_submit('submit', 'Update', 'class="btn btn-warning pull-right"');?>
    	      </div>
    	    </div>

    	 <?php form_close(); ?>
    </div>
  </div>
</div>

<!-- UPLOAD MODAL -->

  <!-- Modal -->
  <!-- <div class="modal fade" id="photoUploader" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title" id="myModalLabel">Upload Photo</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        </div>
        <div class="modal-body"> -->

          <!-- Upload Contant -->
          <!-- <div class="upload-console">
            <div class="upload-console-body">
              <form action="<?php site_url('admin/upload') ?>" method="post" class="row" enctype="multipart/form-data">
                <div class="row">
                  <div class="col-lg-9">
                    <div class="form-group row">
                      <input type="file" class="col-sm-12" multiple="multiple" id="upload_file" name="files[]" >
                    </div>
                  </div>
                  <div class="col-lg-3">
                    <input type="submit" value="Upload" class="btn btn-outline-info" id="upload_button">
                  </div>
                </div>
              </form>
            </div>
            <span id="upload-info"></span> -->
            <!-- Drag and Drowp -->
            <!-- <div class="upload-console-drop" id="drop-zone">
              Just Drag and Drop <i style="color:#5bc0de" class="la la-download"> </i>  File Here
            </div>
            <div class="bar">
              <div class="bar-fill" id="bar-fill">
                <div class="bar-fill-text" id="bar-fill-text"> </div>
              </div>
            </div> -->
            <!--   -->
            <!-- class="hidden" -->
            <!-- <div id="upload-finished" class="hidden">
              <h5>Processed File</h5> -->
              <!-- <div class="upload-console-upload">
              <a href="#">FileName.jpg</a>
              <span>Success</span>
            </div> -->
          <!-- </div>
        </div> -->
        <!-- Upload Contant -->
      <!-- </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-outline-info" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
</div>

     <script type="text/javascript">
        function openUploadModal(id){
          var button = $('#'+id);
          var upInfo =  $('#upload-info');

            var up = button.data("field");
            var view = button.data("preview");
            upInfo.attr('data-info', up);
            upInfo.attr('data-view', view);
            $('#photoUploader').modal('show');
            // console.log(up+' || '+view);
        }
     </script> -->
