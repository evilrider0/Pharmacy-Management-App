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
    	      <label for="inputEmail3" class="col-sm-2 col-form-label">Payment To</label>
    	      <div class="col-sm-10">
    		      <?php
                	echo form_input('name', set_value('name', $pay->name), 'class="form-control" placeholder="Payment to" id="name"');
    		      ?>
    	      </div>
    	    </div>
          <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">P_Type</label>
            <div class="col-sm-10">
               <?php
                  echo form_input('p_type', set_value('p_type', $pay->p_type), 'class="form-control" placeholder="Like Personal Payment" id="p_type"');
              ?>
              <!-- <?php
                  echo form_textarea( array('name'=>'des','value'=>set_value('des', $pay->des),'rows'=> '3', 'cols'=> '10', 'style' => 'width:100%', 'class'=>'form-control', 'id'=>'des'));

              ?> -->
            </div>
          </div>
          <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Payment Date</label>
            <div class="col-sm-10">
              <?php
                  echo form_input('date', set_value('date', $pay->date), 'class="form-control" placeholder="July 18, 2018 at 1:54:09 PM EDT" id="date"');
              ?>
            </div>
          </div>
          <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Transction ID</label>
            <div class="col-sm-10">
              <?php
                  echo form_input('transction', set_value('transction', $pay->transction), 'class="form-control" placeholder="Transction ID" id="transction"');
              ?>
            </div>
          </div>
          <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Amount </label>
            <div class="col-sm-10">
              <?php
                  echo form_input('gamount', set_value('gamount', $pay->gamount), 'class="form-control" placeholder="$" id="gamount"');
              ?>
            </div>
          </div>
          <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Status</label>
            <div class="col-sm-10">
              <?php

                  echo form_dropdown('status', $this->status_m->status_dw(),$pay->status,'aria-describedby="status" class="form-control" id="status"' );

              ?>

            </div>
          </div>


          <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Type</label>
            <div class="col-sm-10">

              <?php
                  echo form_dropdown('type', array('Recived'=>'recive', 'Send'=>'send'),$pay->type,'aria-describedby="sub-cat" class="form-control lineAwsome" placeholder="pay Sub-pay" id="type"' );
              ?>
            </div>
          </div>

          <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">T_fee</label>
            <div class="col-sm-10">

              <?php
                  echo form_input('t_fee', set_value('t_fee', $pay->t_fee), 'class="form-control" placeholder="$" id="t_fee"');
              ?>
            </div>
          </div>


          <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Client Name</label>
            <div class="col-sm-10">

              <?php
                  echo form_input('c_name', set_value('c_name', $pay->c_name), 'class="form-control" placeholder="Client Name" id="c_name"');
              ?>
            </div>
          </div>

          <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Client email</label>
            <div class="col-sm-10">

              <?php
                  echo form_input('c_email', set_value('c_email', $pay->c_email), 'class="form-control" placeholder="Client email" id="c_email"');
              ?>
            </div>
          </div>

          <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Client</label>
            <div class="col-sm-10">

              <?php
                  echo form_input('client', set_value('client', $pay->client), 'class="form-control" placeholder="Client * email" id="client"');
              ?>
            </div>
          </div>

          <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">payment_type</label>
            <div class="col-sm-10">

              <?php
                  echo form_input('payment_type', set_value('payment_type', $pay->payment_type), 'class="form-control" placeholder="Paypal Balance" id="payment_type"');
              ?>
            </div>
          </div>

          <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">p_method</label>
            <div class="col-sm-10">

              <?php
                  echo form_input('p_method', set_value('p_method', $pay->p_method), 'class="form-control" placeholder="Paypal Account" id="p_method"');
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
