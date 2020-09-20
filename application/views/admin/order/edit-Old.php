
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
      <h2 class="content-title"> <?php echo empty($order->id) ? 'Add a <i class="la la-cart-plus  la-2x">  </i> New Order' : 'Edit Order <i class="la la-cart-plus  la-2x">  </i> '.$order->order; ?></h2>
    </div>
    <div class="col-lg-3"></div>
    <div class="col-lg-6">
    <?php  echo $message = (validation_errors()) ? '<div class="alert alert-danger" role="alert">'.validation_errors().'</div>' : '' ; ?>
        <?php echo form_open(); ?>
    	    <div class="form-group row">
    	      <label for="inputEmail3" class="col-sm-2 col-form-label">Order Token</label>
    	      <div class="col-sm-10">
    		      <?php
              // if($order->id):
              //     //echo form_dropdown('token', $this->order_m->get_token_dw(),$order->token,' class="form-control"  required="required" placeholder="" readonly id="token"' );
              //     echo form_input('token', set_value('token', $order->token), 'class="form-control" placeholder="Product Item" id="token" readonly');
              //   else:
              //
              //     echo form_dropdown('token', $this->order_m->get_token_dw(),$order->token,' class="form-control"  required="required" id="token" ');
              //   endif;
    		      ?>
    	      </div>
    	    </div>
          <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Order Description</label>
            <div class="col-sm-10">
             <?php
                  echo form_textarea( array('name'=>'order_des','value'=>set_value('order_des', $order->order_des),'rows'=> '3', 'cols'=> '10', 'style' => 'width:100%', 'class'=>'form-control'));

              ?>
            </div>
          </div>

          <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Editional Products</label>
            <div class="col-sm-10">
            <span id="products">
                <?php
                  if(!empty($order->o_product)):
                  // $i = 0;
                  $o_product = unserialize($order->o_product);
                  foreach($o_product[0] as $key => $value):
                ?>
              <div class="row pro" id="<?php echo $key; ?>">
                <?php if($key !=0): ?>
                  <button onclick="delete_row(<?php echo $key; ?>);" type="button" class="btn-remove badge badge-pill badge-danger btn-hover">X</button>
                <?php endif; ?>
                <div class="col-8">
                  <?php
                    echo form_input('p_name[]', set_value('p_name', $value), 'class="form-control" placeholder="Product Item" id="p_name"');
                  ?>
                </div>
                <div class="col-4">
                  <?php
                    echo form_input('p_price[]', set_value('p_price', $o_product[1][$key]), 'class="form-control" placeholder="Price" id="p_price"');
                  ?>
                </div>
              </div>
                <?php endforeach;  else: ?>
              <div class="row pro" id="1">
                    <div class="col-8">
                      <?php
                        echo form_input('p_name[]', set_value('p_name', $order->p_name), 'class="form-control" placeholder="Product Item" id="p_name"');
                      ?>
                    </div>
                    <div class="col-4">
                      <?php
                        echo form_input('p_price[]', set_value('p_price', $order->p_price), 'class="form-control" placeholder="Price" id="p_price"');
                      ?>
                    </div>
              </div>
                <?php endif; ?>
            </span>
            <br>
              <div class="row">
                <div class="col-12">
                <button type="button" class="btn btn-outline-warning btn-hover pull-right" onclick="add_product();" name="button">Add Another Product <span class="la la-plus"> </span></button>
              </div>
              </div>

            </div>
          </div>

          <script type="text/javascript">

              function add_product()
                {
                  console.log('add_product');

                  var rowno= parseInt($(".pro").last().attr('id'));
                  rowno = rowno+1;

                    var products = '';
                    products += '<div class="row pro" id="'+rowno+'"><br>';
                    products += '<button onclick="delete_row('+rowno+');" type="button" class="btn-remove badge badge-pill badge-danger btn-hover">X</button>';
                    products += '<div class="col-8">';
                    products += '<input type="text" name="p_name[]" class="form-control" placeholder="Product Item '+rowno+'">';
                    products += '</div>';
                    products += '<div class="col-4">';
                    products += '<input type="text" name="p_price[]" class="form-control" placeholder="Price">';
                    products += '</div></div>';



                  // console.log(rowno);
                  $("#products").append(products);
                }

              function delete_row(id)
                {
                  $('#'+id).remove();
                  console.log($(id));
                }
          </script>


          <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Services Provider</label>
            <div class="col-sm-10">

              <?php
                  echo form_dropdown('supplier_id', $this->order_m->get_supplier_dw(),$order->supplier_id,'aria-describedby="sub-cat" class="form-control"  required="required" placeholder="" id="supplier_id"' );
              ?>
            </div>
          </div>

          <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Service Charge</label>
            <div class="col-sm-10">

              <?php
                  echo form_input('s_charge', set_value('s_charge', $order->s_charge), 'class="form-control" placeholder="Services Charge" id="s_charge"');
              ?>
            </div>
          </div>
          <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Status</label>
            <div class="col-sm-10">

              <?php
                  echo form_dropdown('status', array('Pending', 'Process', 'complete'),$order->status,'aria-describedby="sub-cat" class="form-control lineAwsome" placeholder="order Sub-order" id="status"' );
              ?>
            </div>
          </div>

          <hr>
    	    <div class="form-group row">
    	      <div class="offset-sm-2 col-sm-10">
              <?php echo empty($order->id) ? form_submit('submit', 'Save', 'class="btn btn-warning pull-right"') : form_submit('submit', 'Update', 'class="btn btn-warning pull-right"');?>
    	      </div>
    	    </div>

    	 <?php form_close(); ?>
    </div>
  </div>
</div>
