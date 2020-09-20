<div class="container money">
  <div class="row money-wrapper">
       <div class="col-lg-12">
         <h1>Money</h1>
         <hr>

       </div>
       <div class="col-lg-3 m-nav">
         <ul class="list">
          <li class="list-item"><a href="<?php echo site_url('admin/money/trensfer_money'); ?>">Trensfer money </i></a></li>
          <li class="list-item"><a href="<?php echo site_url('admin/money/add_money'); ?>">Add money </i></a></li>
          <li class="list-item"><a href="<?php echo site_url('admin/money/trensfer_money'); ?>">Send or request money</i></a></li>
          <li class="list-item"><a href="<?php echo site_url('admin/money/payment_preferences'); ?>">Payment Preferences </i></a></li>
          <li class="list-item"><a href="<?php echo site_url('admin/money/trensfer_money'); ?>">Marchant fees </i></a></li>
        </ul>
       </div>
       <div class="col-lg-9 m-body">
         <div class="container-fluid">
           <div class="row">
             <div class="col-lg-6">
               <h3>Available</h3>
             </div>
             <div class="col-lg-6">
               <h2 class="text-right">$<?php $this->pay_m->available(); ?> USD</h2>
               <p class="text-right e-value"><small>(estimated usd value)</small></p>
             </div>
             <div class="col-lg-12">
             <hr>
               <h5 class="text-right">
                <a href="#"><i class="fa fa-calculator"> </i> Currency calculator</a>
                <a href="#"><i class="fa fa-plus-circle"> </i> Add a currency</a>
              </h5>
             </div>
           </div>
         </div>
       </div>
  </div> <!-- row -->

  <div class="row bank">
    <div class="col-lg-12">
      <h4>Bank</h4>
      <hr>
    </div>
    <div class="col-lg-3">
      <div class="m-card">
        <img src="<?php echo site_url('img/m-bank.png') ?>" class="rounded mx-auto d-block" alt="...">
        <small><b>****8609</b></small>        
      </div>
      <p class="text-center">Silicon valley bank</p>
    </div>
    <div class="col-lg-3 ">
      <div class="m-card m-img">
        <div class="add-box">
          <p><i class="fa fa-plus-circle fa-2x"> </i></p>
          <p><a href="#">Link a new bank</a></p>
        </div>
      </div>
    </div>
      
  </div>

    <div class="row bank">
    <div class="col-lg-12">
      <h4>Credit and debit card </h4>
      <hr>
    </div>
    <div class="col-lg-3">
      <div class="m-card">
        <img src="<?php echo site_url('img/m-card.png') ?>" class="rounded mx-auto d-block" alt="...">
        <small><b>****3251</b></small>
      </div>
      <!-- <p>Silicon valley bank</p> -->
    </div>
    <div class="col-lg-3">
      <div class="m-card m-img">
        <div class="add-box">
          <p><i class="fa fa-plus-circle fa-2x"> </i></p>
          <p><a href="#">Link a new card</a></p>
        </div>
      </div>
    </div>
      
  </div>

</div> <!-- container -->