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


      <div class="container">
        <div class="row">
          <div class="col-lg-3"></div>
          <div class="col-lg-6">
            <p class="text-left p_why">Choose your preferred <br>way to pay online</p>
            <p>We'll use this when you shop online or send money for good or services. You can always choose the different way to pay to checkout. <br>
              <a class="not-now" href="#">More about payment preferences</a><br></p>
            <button class="btn btn-primary btn-block">Confirm</button>
            <p class="text-center">
              
            </p>           
          </div>
          <div class="col-lg-3"></div>
        </div>
      </div>
    </div>
    <div class="col-lg-2"></div>
  </div>
</div>