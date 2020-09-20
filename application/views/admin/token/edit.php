

<div class="container">
  <div class="row">
    <div class="content-header col-12">
      <h2 class="content-title"> <?php echo empty($token->id) ? 'Add a <i class="fa fa-bookmark  fa-2x">  </i> New Token' : 'Edit Token <i cfass="fa fa-bookmark  fa-2x">  </i> '.$token->token; ?></h2>
    </div>
    <div class="col-lg-3"></div>
    <div class="col-lg-6">
    <?php  echo $message = (validation_errors()) ? '<div class="alert alert-danger" role="alert">'.validation_errors().'</div>' : '' ; ?>
        <?php echo form_open(); ?>
    	    <div class="form-group row">
    	      <label for="inputEmail3" class="col-sm-2 col-form-label">Token</label>
    	      <div class="col-sm-10">
    		      <?php
                  echo form_input('token', set_value('token', $tokens = ($token->id != "") ? $token->token : $this->token_m->getToken('8')), 'class="form-control" placeholder="token" id="name" readonly'); //$token->token
    		      ?>
    	      </div>
    	    </div>

          <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Customer ID</label>
            <div class="col-sm-10">
             
              <?php
                  echo form_dropdown('customer_id', $this->token_m->get_customer_dw(),$token->customer_id,'aria-describedby="sub-cat" class="form-control"  required="required" placeholder="" id="customer_id"' );
              ?>
            </div>
          </div>

          <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Service</label>
            <div class="col-sm-10">
             
              <?php
                  echo form_dropdown('service_id', $this->token_m->services_dw(),$token->service_id,'aria-describedby="sub-cat" class="form-control"  required="required" placeholder="token Sub-token" id="service_id"' );
              ?>
            </div>
          </div>
          <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Token Note</label>
            <div class="col-sm-10">
                  <!-- <textarea name="cat_des" id="" class="form-control" rows="3"></textarea>     -->
              <?php
                  echo form_textarea( array('name'=>'note','value'=>set_value('note', $token->note),'rows'=> '3', 'cols'=> '10', 'style' => 'width:100%', 'class'=>'form-control'));

              ?>
            </div>
          </div>
          <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Status</label>
            <div class="col-sm-10">
             
              <?php
                  echo form_dropdown('status', array('Pending', 'Order', 'Cancle'),$token->status,'aria-describedby="sub-cat" class="form-control lineAwsome" placeholder="token Sub-token" id="status"' );
              ?>
            </div>
          </div>
    	    
          <hr>
    	    <div class="form-group row">
    	      <div class="offset-sm-2 col-sm-10">
              <?php echo empty($token->id) ? form_submit('submit', 'Save', 'class="btn btn-warning pull-right"') : form_submit('submit', 'Update', 'class="btn btn-warning pull-right"');?>
    	      </div>
    	    </div>

    	 <?php form_close(); ?>
    </div>
  </div>
</div>

