
<!-- css -->
<style>
  .btn-remove{
     z-index: 1000;
    height: 20px;
    width: 20px;
    margin-left: 0px;
  }
  .pro{
    margin-top: 15px;
  }
  .btn-hover{
    cursor: pointer;
  }
  .badge-danger{
    border:0px;
  }
</style>
<div class="container-fluid admin-area">
  <div class="row">
    <div class="content-header col-12">
      <h2 class="content-title"> <?php echo '<i class="la la-cart-plus  la-2x">  </i> Order No : ' .$order->order_no; ?></h2>
    </div>
    <div class="col-lg-5">
      <div class="img-preview"><img height="242px" src="<?php echo  $prescription = ($order->prescription != "") ? site_url('upload/'.$order->prescription) :site_url('images/profile.jpg') ;
       ?>" id="preview" class="img-fluid"></div>
    </div>
    <div class="col-lg-7" id="invoicePrint">
      <div class="container-fluid" >
        <div class="row">
          <div class="col-4"><p><b>Customer</b><br><?php echo $this->order_m->customer_by_id($order->user_id); ?></p></div>
          <div class="col-4"><p><b>Order Date</b><br><?php echo $order->date; ?></p></div>
          <div class="col-4"><p><b>Order Note</b><br><?php echo $order->note; ?></p></div>
        </div>
      </div>



      <p><b>Generate Invoice</b><br><?php //echo $order->note; ?></p>
      <div class="row">
        <div class="col-12 form-group">
          <input type="text" class="form-control product_name" placeholder="Type Product Name">
          <small id="1" class="form-text">
           <ul class="p_list">

           </ul>
          </small>
          <style>
            small.form-text{
              background: #F9F9F9;
              border: 1px solid #E6E6E6;
              position:absolute;
              width: 90%;
              z-index: 1010;
              display:none;
            }
            small.form-text li{
              border-bottom: .5px solid #E6E6E6;
              padding: 5px 10px;
              cursor: pointer;
            }
            /* small.form-text li a{

            } */
          </style>
        </div>
        <!-- <div class="col-4">
          <button type="button" class="btn btn-outline-warning btn-hover pull-right" onclick="add_product();" name="button">Add Another Product <span class="la la-plus"> </span></button>
        </div> -->
      </div>
    <?php echo form_open(); ?>
    <div class="form-group row">
      <!-- <label for="inputEmail3" class="col-sm-2 col-form-label">Editional Products</label> -->
      <div class="col-sm-12">
      <span >
        <table class="table table-striped" id="invoiceTable">
          <thead class="">
            <tr class="">
              <th>x</th>
              <th>Product Name</th>
              <th>Unit Price</th>
              <th>Unit</th>
              <th>Sub Total</th>
            </tr>
          </thead>
          <tbody>
          <?php
            // $i = 0;
            $invoices = $this->order_m->get_invoice_by_order($order->order_no);
            if(!empty($invoices)):
              // dump($invoices);
              foreach ($invoices as $invoice):
              $pro = json_decode($invoice->product);
                //   $item = $val->item;
                //
                //     // echo '<tr>';
                //       $product = '';
                //
                //       dump($item);
                for($i = 0; $i<sizeof($pro);$i++) {
                  // dump($pro[$i]->item);
                  // $pro = ;
                        $product .= '<tr class="pro pro_'.$pro[$i]->item->product_id.'" id="'.$pro[$i]->item->product_id.'">';
                        // dump($pro[$i]->item->unit_price);
                        // foreach($pro[$i]->item as $p){
                        $product .= '<td>';
                        $product .= '<button onclick="delete_row(\''.$pro[$i]->item->product_id.'\')" type="button" class="btn-remove badge badge-pill badge-danger btn-hover">X</button>';
                        $product .= '</td><td>';
                        $product .= '<input type="text" name="p_name[]" onclick="" class="form-control  pro_name" data-id="'.$pro[$i]->item->product_id.'" value="'.$pro[$i]->item->product_name.'" disabled>';
                        $product .= '</td><td>';
                        $product .= '<input type="number" name="p_price[]" class="form-control p_price p_price_'.$pro[$i]->item->product_id.'" value="'.$pro[$i]->item->unit_price.'" disabled>';
                        $product .= '</td><td>';
                        $product .= '<input type="number" name="p_unit[]" class="form-control p_unit p_unit_'.$pro[$i]->item->product_id.'" onchange="unitByPrice('.$pro[$i]->item->product_id.')" value="1">';
                        $product .= '</td><td>';
                        $product .= '<input type="text" name="p_sub_total[]" class="form-control p_sub_total p_sub_total_'.$pro[$i]->item->product_id.'" value="'.$pro[$i]->item->unit_price.'">';
                        $product .= '</td>';
                        $product .='</tr>';
                }
                echo   $product;
            ?>

          <tr id="products">
            <td></td>
            <td></td>
            <td></td>
            <td>
              <p class="text-right"><b>Sub-Total :</b></p>
            </td>
            <td>
              <div class="row">
                <div class="col-8">
                  <input class="form-control Sub-Total" type="text" value="<?php echo $invoice->sub_total; ?>" id="Sub-Total" disabled>
                </div>
                <label for="example-number-input" class="col-2 col-form-label"> BDT</label>
              </div>
            </td>
          </tr>
          <tr>
            <td></td>
            <td></td>
            <td></td>
            <td>
              <p class="text-right Vat/Tax"><b>Vat/Tax :</b></p>
            </td>
            <td>
              <div class=" row">
                <div class="col-8">
                  <input class="form-control Tax" name="Vat-Tax" type="number" value="<?php echo $invoice->vat; ?>">
                </div>
                <label for="example-number-input" class="col-2 col-form-label"> BDT</label>
              </div>
            </td>
          </tr>
          <tr>
            <td></td>
            <td></td>
            <td colspan="2">
              <p class="text-right"><b>Delivery Charge :</b></p>
            </td>
            <td>
              <div class=" row">
                <div class="col-8">
                  <input class="form-control delivery_charge" name="delivery_charge" type="number" value="<?php echo $invoice->d_charge; ?>">
                </div>
                <label for="example-number-input" class="col-2 col-form-label"> BDT</label>
              </div>
              <!-- <p class="form-group">
                <input type="number" class="form-control delivery_charge" width="50%" name="delivery_charge"> <b> BDT</b>
              </p> -->
            </td>
          </tr>
          <tr>
            <td></td>
            <td></td>
            <td></td>
            <td>
              <p class="text-right"><b>Total :</b></p>
            </td>
            <td>
              <div class="row">
                <div class="col-8">
                  <input class="form-control Total" type="text" value="<?php echo $invoice->total; ?>"  disabled>
                </div>
                <label for="example-number-input" class="col-2 col-form-label"> BDT</label>
              </div>
            </td>
          </tr>
        <?php endforeach; ?>
        <?php else: ?>
        <tr id="products">
          <td></td>
          <td></td>
          <td></td>
          <td>
            <p class="text-right"><b>Sub-Total :</b></p>
          </td>
          <td>
            <div class="row">
              <div class="col-8">
                <input class="form-control Sub-Total" type="text" value="0" id="Sub-Total" disabled>
              </div>
              <label for="example-number-input" class="col-2 col-form-label"> BDT</label>
            </div>
          </td>
        </tr>
        <tr>
          <td></td>
          <td></td>
          <td></td>
          <td>
            <p class="text-right Vat/Tax"><b>Vat/Tax :</b></p>
          </td>
          <td>
            <div class=" row">
              <div class="col-8">
                <input class="form-control Tax" name="Vat-Tax" type="number" value="0">
              </div>
              <label for="example-number-input" class="col-2 col-form-label"> BDT</label>
            </div>
          </td>
        </tr>
        <tr>
          <td></td>
          <td></td>
          <td colspan="2">
            <p class="text-right"><b>Delivery Charge :</b></p>
          </td>
          <td>
            <div class=" row">
              <div class="col-8">
                <input class="form-control delivery_charge" name="delivery_charge" type="number" value="0">
              </div>
              <label for="example-number-input" class="col-2 col-form-label"> BDT</label>
            </div>
            <!-- <p class="form-group">
              <input type="number" class="form-control delivery_charge" width="50%" name="delivery_charge"> <b> BDT</b>
            </p> -->
          </td>
        </tr>
        <tr>
          <td></td>
          <td></td>
          <td></td>
          <td>
            <p class="text-right"><b>Total :</b></p>
          </td>
          <td>
            <div class="row">
              <div class="col-8">
                <input class="form-control Total" type="text" value="0"  disabled>
              </div>
              <label for="example-number-input" class="col-2 col-form-label"> BDT</label>
            </div>
          </td>
        </tr>
        <?php endif; ?>

          </tbody>
        </table>
        <?php if(empty($invoices)): ?>
          <p class="text-right"><button id="g_invoice" class="btn btn-primary"  style="cursor:pointer" type="button">Generate Invoice</button></p>
        <?php else:?>
          <p class="text-right"><button id="Print" class="btn btn-primary" onClick="printDiv('printInvoice')" style="cursor:pointer" type="button"><i class="fa fa-print"> </i> Print Invoice</button></p>
        <?php endif;?>
      </span>



      </div>
    </div>

    <script type="text/javascript">

        // SUBMIT
        $('#g_invoice').click(function(){
          // event.preventDefault();
          var tax = $('.Tax').val();
          var delivery_charge = $('.delivery_charge').val();
          var total = $('.Total').val();
          var sub_total = $('.Sub-Total').val();
          var order_id = '<?php echo $order->order_no; ?>';
          var product = [];

          // get product data
          var p_row = $('tr.pro');

          $.each(p_row, function(){
            product.push({
              "item": {
                "product_id": $(this).find('.pro_name').data('id'),
                "product_name": $(this).find('.pro_name').val(),
                "unit_price": $(this).find('.p_price').val(),
                "unit": $(this).find('.p_unit').val(),
                "sub_total": $(this).find('.p_sub_total').val()
              }
            })
          });
          var url= '<?php echo site_url("admin/order_r/generate_invoice/"); ?>';
          var data = {
            'product' : JSON.stringify(product),
            'delivery_charge' : delivery_charge,
            'total' : total,
            'sub_total' : sub_total,
            'order_id' : order_id,
            'vat' : tax
          };


          $.post(url, data, function(result){
            if(result == 1){
              var status = '1';
              var order_id = "<?php echo $order->order_no; ?>";
              var url = "<?php echo site_url('admin/order_r/order_status_update/'); ?>"+order_id+"/"+status;

              $.get(url,function(result){
                if(result == 1){
                  alertify.success('Invoice Genata Successful!');
                  setTimeout(function(){
                      window.location.reload(); // you can pass true to reload function to ignore the client cache and reload from the server
                  },2000);
                }else{
                  alertify.error('Status Update Failed!');
                }
              });

          }else{
            alertify.error('Status Update Failed!');

          }
          });


          console.log(data);


          // loop through my product
          // $.each(product, function(key, val){
          //   // console.log(key, val);
          //   $.each(val, function(index, nam){
          //     console.log('name:'+ nam.product_id);
          //   });
          // });
           // console.log(product);
        });



        // add Tax
        $('.Tax').keyup(function(){
          var tax = parseFloat($('.Tax').val());
          var delivery_charge =  parseFloat($('.delivery_charge').val());
          var total = parseFloat($('.Sub-Total').val());

          $('.Total').val(parseFloat(tax + total +delivery_charge));

        });

        // add delivery charge
        $('.delivery_charge').keyup(function(){
          var tax = parseFloat($('.Tax').val());
          var delivery_charge =  parseFloat($('.delivery_charge').val());
          var total = parseFloat($('.Sub-Total').val());

          $('.Total').val(parseFloat(delivery_charge + total + tax));

        });

          // subtotal
          function sub_total(){
            var sub_total_final = '0';
            $('.p_sub_total').each(function() {
                if(!isNaN($(this).val())) {
                    sub_total_final = parseFloat(sub_total_final) + parseFloat($(this).val());
                }
            });
            return parseFloat(sub_total_final);
          }



            // add_product
            function add_product(id)
              {
                var url = '<?php echo site_url('admin/order_r/product_memo'); ?>'
                var data = {
                  product : id,
                };
                // console.log(data);
                // // AJAX
                $.post(url, data, function(result){
                    if(result){

                      $(result).insertBefore( "#products" );

                      // place amounts on fields
                      $('.Sub-Total').val(parseFloat(sub_total()));

                      var tax = parseFloat($('.Tax').val());
                      var delivery_charge = parseFloat($('.delivery_charge').val());
                      var final = tax + delivery_charge + parseFloat(sub_total());
                      $('.Total').val(parseFloat(final));
                    }else{

                    }
                });

                // console.log(a);
                $('.form-text').css('display','none');
                $('.product_name').val('');

              }

              function delete_row(id)
              {
                $('.pro_'+id).remove();
                // console.log($('.pro_'+id));
              }


              function unitByPrice(id){
                  var unit = $('.p_unit_'+id);
                  var price = $('.p_price_'+id).val();
                  var sub = $('.p_sub_total_'+id);
                  // console.log(unit.val());
                  
                  // unit.keyup(function(){
                    var sub_total = parseFloat(unit.val()*price);
                    sub.val(sub_total);
                    // place amounts on fields
                    var sub_total_final = '0';
                    $('.p_sub_total').each(function() {
                        if(!isNaN($(this).val())) {
                            sub_total_final = parseFloat(sub_total_final) + parseFloat($(this).val());
                        }
                    });
                    $('.Sub-Total').val(parseFloat(sub_total_final));

                    var tax = parseFloat($('.Tax').val());
                    var delivery_charge = parseFloat($('.delivery_charge').val());
                    var final = tax + delivery_charge + sub_total_final;

                    $('.Total').val(parseFloat(final));

                    // console.log(parseFloat(sub_t)+parseFloat(sub_total));

                  // });
                // unit
              }




          // Select Product
          $('.product_name').keyup(function(){
            // console.log($(this).val());
            var url = '<?php echo site_url('admin/order_r/product_ajax'); ?>'
            var data = {
              product : $(this).val(),
            };
            // // AJAX
            $.post(url, data, function(result){
                if(result){
                  // console.log(result);
                   $('.form-text').css('display','block');
                   $('.form-text').find('.p_list').html(result);
                }else{

                }
            });
          });

    </script>
    <?php form_close(); ?>
      <p><b>Order Status</b><br></p>
      <form class="form row">
        <!-- <input type="number" class="form-control"> -->
        <select class="status form-control col-3 status"  name="status">
          <option value="0" <?php echo $status = $order->status == 0? 'selected':'' ?>>Pending</option>
          <option value="1" <?php echo $status = $order->status == 1? 'selected':'' ?>>Processing</option>
          <option value="2" <?php echo $status = $order->status == 2? 'selected':'' ?>>On Delivery</option>
          <option value="3" <?php echo $status = $order->status == 3? 'selected':'' ?>>Deliverd</option>
          <option value="4" <?php echo $status = $order->status == 4? 'selected':'' ?>>Cancled</option>
        </select>
        <br>
        <button class="btn btn-success" type="button" id="update_status">Update Status</button>
      </form>
      <br><br>
      <script type="text/javascript">
          $('#update_status').click(function(){
              var status = $('.status').val();
              var order_id = "<?php echo $order->order_no; ?>";
              var url = "<?php echo site_url('admin/order_r/order_status_update/'); ?>"+order_id+"/"+status;

              $.get(url,function(result){
                if(result == 1){
                  alertify.success('Status Update Successful!');
                  
                }else{
                  alertify.error('Status Update Failed!');

                }
              });
              // console.log(url);
          })
      </script>
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


<!-- Print Invoice -->
<!-- <div id="print-content">
 <form>

  <input type="button" onclick="printDiv('print-content')" value="print a div!"/>
</form>
</div> -->










<script type="text/javascript">
    function printDiv(divName) {
		
        var originalContents = document.body.innerHTML;
        // get table info
        var inTab = document.getElementById('invoiceTable').innerHTML;
        // document.getElementsByClassName('invoiceTable').innerHTML = inTab;

        var printContents = "<div id='printInvoice'> ";
            printContents += '<div class="container"><div class="row">';
            printContents += ' <div class="3"><img src="<?php echo site_url('img/logo.png');?>" alt=""><br></div> ';
            printContents += '<div class="col-9"></div></div><div class="row">';
            printContents += '<div class="col-4"><p><b>Customer</b><br><?php echo $this->order_m->customer_by_id($order->user_id); ?></p></div>';
            printContents += '<div class="col-4"><p><b>Order Note</b><br><?php echo $order->note; ?></p></div>';
            printContents += '<div class="col-4"><p><b>Order Date</b><br><?php echo $order->date; ?></p></div>';
            printContents += '</div><div class="row"><div class="col-12"><table class="invoiceTable">';
            printContents += inTab;
            printContents += "</table></div></div></div></div>";

        document.body.innerHTML = printContents;

        window.print();

        document.body.innerHTML = originalContents;


    }

    </script>
