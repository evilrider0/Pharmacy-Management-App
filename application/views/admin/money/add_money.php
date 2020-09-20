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
a.not-now{
  padding-top: 15px;
  color: #0275d8;
}
</style>
<div class="container">
  <div class="row">
    <div class="col-lg-2"></div>
    <div class="col-lg-8 main" style="padding-top:15px;">
      <img src="<?php echo site_url('img/ppl-logo.png') ?>" height="30px;"  class="rounded mx-auto d-block">
      <span class="times">  <a href="<?php echo site_url('admin/money'); ?>"><i class="la la-times la-2x"> </i></a></span>
      <p class="text-center p_why">Confirm your information</p>


      <div class="container">
        <div class="row">
          <div class="col-lg-3"></div>
          <div class="col-lg-6">
            <p>We need to confirm some information. You can do this later, but you won't able to add money to your PayPal balance until then. <br><br></p>
            <button class="btn btn-primary btn-block">Confirm info</button>
            <p class="text-center">
            <a class="not-now" href="<?php echo site_url('admin/money'); ?>">Not now</a> 
              
            </p>           
          </div>
          <div class="col-lg-3"></div>
        </div>
      </div>
    </div>
    <div class="col-lg-2"></div>
  </div>
</div>