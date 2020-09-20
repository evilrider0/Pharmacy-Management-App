  <div class="container body">
    <div class="row">
      <div class="col-4">

        <div class="card">
          <div class="card-body">
            <p>
              <b>Money</b>
              <a href="<?php echo site_url('admin/employer/view_all') ?>"><span class="pull-right more" style="">More ></span></a>
            </p>
            <p>Available</p>
            <h1 class="money">$<?php $this->pay_m->available(); ?> USD*</h1>
            <ul>
              <li>USD <span class="pull-right more" style="">$<?php $this->pay_m->available(); ?> USD</span></li>
              
            </ul>
            <small>*This is an estimate based ob the most recent conversion rate.</small>
            <hr>
            <a href="#">Withdraw money</a>
            <a href="#">Currencies</a>
          </div>
        </div>
        <br>
        <div class="card">
          <div class="card-body">
            <p>
              <b>Invoicing</b>
              <a href="<?php echo site_url('admin/employer/view_all') ?>"><span class="pull-right more" style="">More ></span></a>
            </p>
            <p>Create and send custom invoices. Your Customers can pay you online using their credit card, Visa Debit card, pr PayPal balance.</p>
            
            <hr>
            <p class="text-center"><button class="btn btn-round btn-outline-primary">Create an Invoice</button></p>
          </div>
        </div>
        <br>
        <div class="card">
          <div class="card-body">
            <p>
              <b>Get the app designed for businesses</b>
            </p>
            <p class="text-center">
              <img src="<?php echo site_url('img/app.png'); ?>" alt="" class="img-fulid">
            </p>
            <p class="text-center">Stay on top of your money, invoices, <br> transactions, customers and sales insights, all <br> in the PayPal Business App.</p>            
            <hr>
            <div class="row">
              <p class="col-6">
                <img src="<?php echo site_url('img/ios.png'); ?>" height="35px" class="rounded float-right" alt="...">
              </p>
              <p class="col-6">
                <img src="<?php echo site_url('img/apps.png'); ?>" height="35px" class="rounded float-left" alt="...">
              </p>
                
            </div>
          </div>
        </div>
      </div>
      <div class="col-8">

        <div class="card">
          <div class="card-body">
            <p>
              <b>Recent activity</b>
              <a href="<?php echo site_url('admin/employer/view_all') ?>"><span class="pull-right more" style="">More ></span></a>
            </p>
            <p>
              <a href="#" id="pending">Ready to ship</a>
              <a href="#" id="recived">Payments recived</a>
              <a href="#" id="sent">Payments sent</a>
              <a href="#" id="">Activity (including balance and fees)</a>
            </p>
            <div class="table-responsive-lg">
              <table class="table table-striped">
                
                <tbody class="pay_list">
                  <?php 

                  $tr = '';
                  foreach ($pays as $pay) {
                  	# code...
                  $tr .= '<tr class="align-middle">';
                  $tr .= '<td class="align-middle"><span class="date">'.substr($pay->date, 0, 13).'</span></td>';
                  $tr .= '<td><a href="'.site_url('admin/employer/dashboard/'.$pay->id).'">';

                  if($pay->type == 'Send'){
                  	$tr .= 'Payment to '.$pay->name;
                  }else{
                  	$tr .= 'Payment from '.$pay->name;
                  }
                  $tr .= '</a><small>'.$this->pay_m->status_by_id($pay->status).'</small></td>';
                  $tr .= '<td class="align-middle"><p class="text-right">';
                  if($pay->type == 'Send'){
                        $tr .= '- $'.$pay->gamount; 
                      }else{
                        $tr .= '$'.$pay->gamount;                        
                      } 	
                  
                  $tr .= '</p></td>';
                  $tr .= '</tr>';
                  }

                  $tr .= '';

                  echo $tr;


                  ?>
                  
                  <!-- loop end -->
                  <tr>
                    <td colspan="3" style="background: #fff">
                      <p class="text-center">
                        <a href="<?php echo site_url('admin/employer/view_all') ?>" class="text-center">View all</a>
                      </p>
                    </td>
                  </tr>
                </tbody>
              </table>
              
            </div>
          </div>
        </div>
        
      </div>
    </div>
  </div>

  <script>
    $(document).ready(function(){
      // pay_send
      var sent_url = '<?php echo site_url("admin/employer/pay_send"); ?>';
      
      $('#sent').click(function(){
        $.get( sent_url, function( data ) {
          $('.pay_list').html(data);
        });
      });

      // pay_recive
      var recive_url = '<?php echo site_url("admin/employer/pay_recived"); ?>';
      
      $('#recived').click(function(){
        $.get( recive_url, function( data ) {
          $('.pay_list').html(data);
        });
      });


      // pay_pending
      var pending_url = '<?php echo site_url("admin/employer/pay_pending"); ?>';
      
      $('#pending').click(function(){
        $.get( pending_url, function( data ) {
          $('.pay_list').html(data);
        });
      });

    });
  </script>