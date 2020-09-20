

<div class="container-fluid admin-area">
  <div class="row">
    <div class="content-header col-12">
      <h2 class="content-title"> <?php echo empty($stock->id) ? 'Add a <i class="la la-cube la-2x">  </i> New stock' : 'Edit stock <i class="la la-cube la-2x">  </i> '.$stock->name; ?></h2>
    </div>
    <div class="col-lg-3"></div>
    <div class="col-lg-6">
    <?php  echo $message = (validation_errors()) ? '<div class="alert alert-danger" role="alert">'.validation_errors().'</div>' : '' ; ?>
        <?php echo form_open(); ?>
    	    <div class="form-group row">
    	      <label for="inputEmail3" class="col-sm-2 col-form-label">Product Name</label>
    	      <div class="col-sm-10">
              <?php
                  echo form_dropdown('product', $this->stock_m->product_dw(),$stock->product,'aria-describedby="sub-cat" class="form-control lineAwsome" placeholder="stock Sub-stock" id="product"' );
              ?>
    	      </div>
    	    </div>

          <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Stock</label>
            <div class="col-sm-10">
              <?php
              echo form_input('stock', set_value('stock', $stock->stock), 'class="form-control" placeholder="Stock" id="stock"');
              ?>
            </div>
          </div>
          <div class="form-group row">
           <label for="inputEmail3" class="col-sm-2 col-form-label">Stock Unit</label>
           <div class="col-sm-10">
             <select class="select form-control" name="s_unit" id="s_unit">
                <option value="0">Select Unit</option>
             </select>
              <?php
                  // echo form_dropdown('s_unit', $this->stock_m->unit_dw(),$stock->s_unit,'aria-describedby="sub-cat" class="form-control lineAwsome" placeholder="stock Sub-stock" id="s_unit"' );
              ?>
           </div>
         </div>
          <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Buy Price</label>
            <div class="col-sm-10">
              <?php
              echo form_input('b_price', set_value('b_price', $stock->b_price), 'class="form-control" placeholder="Buy Price" id="b_price"');
              ?>
            </div>
          </div>
          <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Sell Price</label>
            <div class="col-sm-10">
              <?php
              echo form_input('s_price', set_value('s_price', $stock->s_price), 'class="form-control" placeholder="Sell Price" id="s_price"');
              ?>
            </div>
          </div>

          <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Expire Date</label>
            <div class="col-sm-10">
              <input type="date" class="form-control" name="e_date" value="<?php echo isset($stock->e_date) ? set_value('e_date', date('Y-m-d', strtotime($stock->e_date))) : set_value('e_date'); ?>">

            </div>
          </div>

          <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Supplier Name</label>
            <div class="col-sm-10">
              <?php
              echo form_input('supplier', set_value('supplier', $stock->supplier), 'class="form-control" placeholder="Supplier Name" id="supplier"');
              ?>
            </div>
          </div>
          <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Status</label>
            <div class="col-sm-10">

              <?php
                  echo form_dropdown('status', array('active', 'syspend'),$stock->status,'aria-describedby="sub-cat" class="form-control lineAwsome" placeholder="stock Sub-stock" id="status"' );
              ?>
            </div>
          </div>

          <hr>
    	    <div class="form-group row">
    	      <div class="offset-sm-2 col-sm-10">
              <?php echo empty($stock->id) ? form_submit('submit', 'Save', 'class="btn btn-warning pull-right"') : form_submit('submit', 'Update', 'class="btn btn-warning pull-right"');?>
    	      </div>
    	    </div>

    	 <?php form_close(); ?>
    </div>
  </div>
</div>


<script>
  $(document).ready(function(){
    $('#product').change(function(){
      var product = $(this).val();
      var product_by_id_url = '<?php echo site_url("admin/product/type_by_product_id/"); ?>'+product;
      var unit_by_id_url;

      $.get(product_by_id_url, function(result){
        unit_by_id_url = '<?php echo site_url("admin/unit/unit_by_type_id/"); ?>'+result;

          $.get(unit_by_id_url, function(unit){
            var unit = $.parseJSON(unit);
            var unit_dw;
            $.each(unit, function(index, value) {
              unit_dw += '<option value="'+index+'">' +value+'</option>';
              $('#s_unit').html(unit_dw);
              // console.log(unit_dw);
            });
          });
      });



    });
  });
</script>
