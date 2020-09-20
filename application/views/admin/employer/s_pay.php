  <div class="container body">
    <div class="row">
      <div class="col-2"> </div>
      <div class="col-8">
        <div class="card">
          <div class="card-header">
            <h1 class="card-title">
              Transction details
              <span class="pull-right"><i class="fa fa-print"></i> Print</span>
            </h1>
          </div>
         
          <div class="card-body">
            <div class="container" style="padding:0 40px">
            	<div class="row">
            		<div class="col-9">
            			<p class="trans">
	                <?php 
	                  if($pay->type == 'Send'){
	                  	echo '<span class="type"><b>Payment sent </b> to  </span><span class="name">'.$pays->name.'</span>';
	                  }else{
	                  	echo '<span class="type"><b>Payment recived </b> form </span><span class="name">'.$pays->name.'</span>';
	                  }
	                   ?>                  	
                  </p>
            		</div>
            		<div class="col-3">
            			<p class="trans id text-right">Gross amount</p>
            		</div>
            	</div>
              <div class="row">
                <div class="col-4">                  
                  <p class="trans date"><?php echo $pays->date ?></p>
					<?php 
						if($pays->status == "2"){
							$style = 'style="border-color:red; color:red"';
						}
					 ?>

                  <p class="trans">Payment status: <?php echo '<span class="complete" data-toggle="tooltip" data-placement="top" title="'.$this->pay_m->status_tooltip($pays->status).'"'.$style.'>'.$this->pay_m->status_by_id($pays->status).'</span>'; ?>

                  		
                  	</p>
                    
                  <p class="trans">Payment type: <span class="p_type"></span></p>
                </div>
                <div class="col-5">
                  <p class="trans id" style="padding-top: 20px">| Transction ID: <span class="tran_id"><?php echo $pays->transction ?></span></p>                  
                </div>
                <div class="col-3">                  
                  <p class="amount text-right">$ <?php echo $pays->gamount ?> USD</p>                  
                  
                </div>
              </div>
            </div>
            <hr>
            <p class="u_p">Your payment</p>
            <span style="margin-top: 10px; display: block;"></span>
            <div class="container" style="padding:0 40px">
              <div class="row">
                <div class="col-5">
                  <p class="trans"><b>Gross amount</b> <span class="pull-right amount gamount">$ <?php echo $pays->gamount ?> USD</span></p>
                  <p class="trans"><b>PayPal transction fee</b> <span class="pull-right amount fees">$ <?php echo $pays->t_fee ?> USD</span></p>
                  <hr class="amount">
                  <p class="trans"><b>Net amount</b> <span class="pull-right amount net">$ <?php echo $pays->gamount+$pays->t_fee; ?> USD</span></p>
                  
                </div>
                <div class="col-7"> </div>
              </div>
            </div>
            <hr>
            <div class="container" style="padding:0 40px">
              <div class="row">
                <div class="col-3">
                  <p class="trans"><b>Contact information</b></p>                  
                </div>
                <div class="col-8">
                  <p class="info name"><?php echo $pays->name; ?></p>
                  <p class="info"><small>The recipent of the payment is <b>Verified</b></small></p>
                  <p class="info c_email"><?php echo $pays->c_email; ?></p>
                </div>
              </div>
              <br>
              <div class="row">
                <div class="col-3">
                  <p class="trans"><b>Payment send to</b></p>                  
                </div>
                <div class="col-8">
                  <p class="info client"><?php echo $pays->client; ?></p>
                </div>
              </div>
            </div>
            <hr>
            <div class="container" style="padding:0 40px">
              <div class="row">
                <div class="col-3">
                  <p class="trans"><b>Funding details</b></p>                  
                </div>
                <div class="col-8">
                  <p class="info ">Payment type: <span class="payment_type"><?php echo $pays->payment_type; ?></span></p>
                  <p class="info">Payment method: <span class="net">$ <?php echo $pays->gamount+$pays->t_fee; ?> USD </span> - <span class="payment_method"><?php echo $pays->p_method; ?></span></p>
                </div>
              </div> 
            </div>             
            <hr>
             <div class="container" style="padding:0 40px">
              <div class="row">
                <div class="col-12">
                  <p class="trans"><b>Need help?</b></p> 
                  <p class="info">Go to the <span>Resulation Center</span> for help with this transction, for settle a dispute or to open a claim.</p>
                </div>
              </div> 
            </div>
          </div>
        </div>
        
      </div>
      <div class="col-2"> </div>

    </div>
  </div>
  <script>
      var getUrlParameter = function getUrlParameter(sParam) {
      var sPageURL = decodeURIComponent(window.location.search.substring(1)),
              sURLVariables = sPageURL.split('&'),
              sParameterName,
              i;

          for (i = 0; i < sURLVariables.length; i++) {
              sParameterName = sURLVariables[i].split('=');

              if (sParameterName[0] === sParam) {
                  return sParameterName[1] === undefined ? true : sParameterName[1];
              }
          }
      };
      var i = getUrlParameter('id');
      var data = [];
      var jqxhr = $.get( "data.js", function(result) {
        data = jQuery.parseJSON(result);
      })
        .done(function() {
          
      // console.log(data[i].type);
           
     // SET TYPE
      // if (data[i].type == 'send') {
      //   $('span.type').html('<b>Payment sent </b> to '); 
      //   console.log(data[i].type);             
      // }else{
      //   $('span.type').html('<b>Payment recived </b> form ');
      //   console.log(data[i].type);
      // }
      // // set name
      // $('span.name').html(data[i].name);
      // // set tranction id
      // $('span.tran_id').html(data[i].transction.toUpperCase());
      // // set date
      // $('p.date').html(data[i].date);
      // // set amount
      // $('p.amount').html('$'+data[i].gamount+' USD');
      // // set status
      // if(data[i].status == "complete"){
      //   $('span.complete').html(data[i].status);
      // }else{
      //   $('span.complete').html(data[i].status);
      //   $('span.complete').css('border-color','red');
      //   $('span.complete').css('color','red');
      // }
      // // set payment type
      // $('span.p_type').html(data[i].p_type);
      // // Gross Amount
      // $('span.gamount').html('$'+data[i].gamount+' USD');
      // // Gross Fees
      // $('span.fees').html('$'+data[i].t_fee+' USD');
      // // NET amount
      // var net = parseFloat(data[i].t_fee)+parseFloat(data[i].gamount);
      // // console.log(parseFloat(data[i].gamount));
      // $('span.net').html('$'+net +' USD');

      // // payment type
      // $('span.payment_type').html(data[i].payment_type);
      // // payment method
      // $('span.payment_method').html(data[i].p_method);
      // // c_email
      // $('p.c_email').html(data[i].c_email);
      // // Client
      // $('p.client').html(data[i].client);
      // // name
      // $('p.name').html(data[i].name);
      // });
  </script>