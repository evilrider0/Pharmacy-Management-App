
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
<div class="container">
  <div class="row">
    <div class="content-header col-12">
      <h2 class="content-title"> <?php echo empty($review->id) ? 'Add a <i class="la la-cart-plus  la-2x">  </i> New review' : 'Edit review <i class="la la-cart-plus  la-2x">  </i> '.$review->review; ?></h2>
    </div>
    <div class="col-lg-3"></div>
    <div class="col-lg-6">
    <?php  echo $message = (validation_errors()) ? '<div class="alert alert-danger" role="alert">'.validation_errors().'</div>' : '' ; ?>
        <?php echo form_open(); ?>
          <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Token</label>
            <div class="col-sm-10">
              <?php
              if($review->id):
                 echo form_input('token', set_value('token', $review->token), 'class="form-control" placeholder="Product Item" id="token" readonly');
                else:                   
                    
                  echo form_dropdown('token', $this->review_m->get_order_dw(),$review->token,' class="form-control"  required="required" id="token" ');
                endif;
              ?>
            </div>
          </div>
          <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Services</label>
            <div class="col-sm-10">
              <?php
            
                  echo form_dropdown('service_id', $this->review_m->services_dw(),$review->service_id,' class="form-control"  required="required" id="service_id" ');
               
              ?>
            </div>
          </div>
          <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Review</label>
            <div class="col-sm-10">
             
              <?php
                  echo form_dropdown('review', array('0'=>'1 star','1'=>'2 star','2'=>'3 star','3'=>'4 star','4'=>'5 star'),$review->review,'aria-describedby="sub-cat" class="form-control"  required="required" placeholder="" id="review"' );
              ?>
            </div>
          </div>
          <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Review Description</label>
            <div class="col-sm-10">
             <?php
                  echo form_textarea( array('name'=>'r_des','value'=>set_value('r_des', $review->r_des),'rows'=> '3', 'cols'=> '10', 'style' => 'width:100%', 'class'=>'form-control'));

              ?>
            </div>
          </div> 



          <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Status</label>
            <div class="col-sm-10">
             
              <?php
                  echo form_dropdown('status', array('Pending', 'Process', 'complete'),$review->status,'aria-describedby="sub-cat" class="form-control lineAwsome" placeholder="review Sub-review" id="status"' );
              ?>
            </div>
          </div>
    	    
          <hr>
    	    <div class="form-group row">
    	      <div class="offset-sm-2 col-sm-10">
              <?php echo empty($review->id) ? form_submit('submit', 'Save', 'class="btn btn-warning pull-right"') : form_submit('submit', 'Update', 'class="btn btn-warning pull-right"');?>
    	      </div>
    	    </div>

    	 <?php form_close(); ?>
    </div>
  </div>
</div>

