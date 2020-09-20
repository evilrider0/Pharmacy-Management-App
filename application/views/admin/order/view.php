
<!-- css -->
<style>
  .btn-remove{
     z-index: 1000;
    height: 25px;
    width: 25px;
    margin-left: -25px;
  }
  .pro{
    margin-top: 15px;
  }
  .btn-hover{
    cursor: pointer;
  }
</style>
<div class="container-fluid admin-area">
  <div class="row">
    <div class="content-header col-12">
      <h2 class="content-title"> <?php echo '<i class="la la-cart-plus  la-2x">  </i> Order No : ' .$order->order_no; ?></h2>
    </div>
    <div class="col-lg-6">
      <div class="img-preview"><img height="242px" src="<?php echo  $prescription = ($order->prescription != "") ? site_url('upload/'.$order->prescription) :site_url('images/profile.jpg') ;
       ?>" id="preview" class="img-fluid"></div>
    </div>
    <div class="col-lg-3">

      <p><b>Order Date</b><br><?php echo $order->date; ?></p>
      <p><b>Order Note</b><br><?php echo $order->note; ?></p>
      <p><b>Order Details</b><br><?php //echo $order->note; ?></p>
      <p><b>Order Status</b><br><?php echo $this->order_m->order_status($order->note); ?></p>
      <a href="<?php echo site_url('admin/order'); ?>" class="btn btn-success">Close</a>
    </div>
  </div>
</div>




<!-- UPLOAD MODAL -->

  <!-- Modal -->
  <div class="modal fade" id="photoUploader" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title" id="myModalLabel">Upload Photo</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        </div>
        <div class="modal-body">

          <!-- Upload Contant -->
          <div class="upload-console">
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
            <span id="upload-info"></span>
            <!-- Drag and Drowp -->
            <div class="upload-console-drop" id="drop-zone">
              Just Drag and Drop <i style="color:#5bc0de" class="la la-download"> </i>  File Here
            </div>
            <div class="bar">
              <div class="bar-fill" id="bar-fill">
                <div class="bar-fill-text" id="bar-fill-text"> </div>
              </div>
            </div>
            <!--   -->
            <!-- class="hidden" -->
            <div id="upload-finished" class="hidden">
              <h5>Processed File</h5>

          </div>
        </div>
        <!-- Upload Contant -->
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-outline-info" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
</div>


<script type="text/javascript">
 // PHOTO Upload
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

</script>
