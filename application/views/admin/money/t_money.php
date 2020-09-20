<style>
  body{
    background:#f5f7fa;
  }
.main{
  background: #fff;
  min-height: 800px;
}
.btn-primary{
  border-radius: 25px;
  cursor: pointer;
}
.p_why{
      margin-top: 50px;
    font-size: 1.8em;
    font-weight: 300;
        margin-bottom: 50px;
}
h5{
  margin-top: 20px;
      font-size: 1.2em;
}
span.times a{
  position: absolute;
  top: 20px;
  right: 20px;
  color: #999;
  font-weight: 100;
  cursor: pointer;
}
span.times a:hover{
  color: #999;
  text-decoration: none;
}
</style>
<div class="container">
  <div class="row">
    <div class="col-lg-2"></div>
    <div class="col-lg-8 main" style="padding-top:15px;">
      <img src="<?php echo site_url('img/ppl-logo.png') ?>" height="30px;"  class="rounded mx-auto d-block">
      <span class="times">  <a href="<?php echo site_url('admin/money'); ?>"><i class="la la-times la-2x"> </i></a></span>
      <p class="text-center p_why">When do you want your money?</p>

      <div class="container">
        <div class="row">
          <div class="col-lg-2"></div>
          <div class="col-lg-4">
            <img src="<?php echo site_url('img/m-rocket.png') ?>" class="rounded mx-auto d-block">
            <h5 class="text-center">Right now</h5>
            <p class="text-center"><small>Transfer you money in a minutes <br/> for a 1% fee (max $10.oo)</small></p>
            <p class="text-center">
            <button class="btn btn-primary btn-lg">Instant</button>              
            </p>  
          </div>
          <div class="col-lg-4">
            <img src="<?php echo site_url('img/m-baloon.png') ?>" class="rounded mx-auto d-block">
            <h5 class="text-center">In a few days</h5>
            <p class="text-center"><small>Transfer you money in 1 business <br/> day for free</small></p>
            <p class="text-center">
            <button class="btn btn-primary btn-lg">Standard</button>              
            </p>  
          </div>
          <div class="col-lg-2"></div>
        </div>
      </div>
    </div>
    <div class="col-lg-2"></div>
  </div>
</div>