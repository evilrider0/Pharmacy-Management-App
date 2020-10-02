<div class="jumbotron">
  <div class="container home">
    <div class="row">
      <div class="col-md-6">
        <p class="lead">Simple Online Pharmacy | Online Medicine Order</p>
        <h1 class="display-4">Pharmacy Management System </h1>
        <hr class="my-4">
        <p>Our online pharmacy service can organise everything, from requesting your prescription from your GP, to arranging free delivery direct to your door.</p>
        <a class="btn btn-primary btn-lg" href="<?php echo site_url('customer/registration'); ?>" role="button">Register Now</a>
      </div>
      <div class="col-md-6">
        <img src="<?php echo site_url('img/pc.png');?>" class="img-fluid" alt="">
      </div>
    </div>
  </div>
</div>

<div class="container home">
  <div class="row">
    <div class="col-12">
      <h2 class="text-center">Our Services</h2>
      <p class="text-center">Simple Online Pharmacy also offers a number of additional services alongside Pharmacy Management System.</p>
    </div>
    <div class="col-4">
      <p class="text-center s_img"><img src="<?php echo site_url('img/service1.png'); ?>" class="img-fluid mx-auto d-block"></p>
      <h4 class="text-center">Online Medicine</h4>
      <p class="text-center">Our Online Doctor service allows customers to complete consultations online to assess suitability for medication.</p>
      <!-- <p class="text-center"><button class="btn btn-primary">Learn More</button></p> -->
    </div>
    <div class="col-4">
      <p class="text-center s_img"><img src="<?php echo site_url('img/service2.webp'); ?>" class="img-fluid mx-auto d-block"></p>
      <h4 class="text-center">Shop</h4>
      <p class="text-center">We stock a wide range of everyday pharmacy products. Why not pick up the essentials while you use our other services?</p>
      <!-- <p class="text-center"><button class="btn btn-primary">Learn More</button></p> -->
    </div>
    <div class="col-4">
      <p class="text-center s_img"><img src="<?php echo site_url('img/service3.png'); ?>" class="img-fluid mx-auto d-block"></p>
      <h4 class="text-center">Delivery Request</h4>
      <p class="text-center">Already have a private prescription? Send it in to us, and we can save you money on the high street price of expensive treatments.</p>
      <!-- <p class="text-center"><button class="btn btn-primary">Learn More</button></p> -->
    </div>
  </div>

</div>
<hr>

<style>
* {
	margin: 0;
	padding: 0;
	box-sizing: border-box;
}

img {
	max-width: 100%;
}

body {
	font-family: 'Roboto Slab', serif;
	font-size: 15px;
	line-height: 1.67;
	color: #444;
	/* padding: 60px 0; */
}

.section-title {
	font-size: 28px;
	margin-bottom: 20px;
	padding-bottom: 20px;
	font-weight: 400;
	display: inline-block;
	position: relative;
}
.section-title:after,
.section-title:before {
	content: '';
	position: absolute;
	bottom: 0;
}
.section-title:after {
	height: 2px;
	background-color: rgba(252, 92, 15, 0.46);
	left: 25%;
	right: 25%;
}

.section-title:before {
	width: 15px;
	height: 15px;
	border: 3px solid #fff;
	background-color: #fc5c0f;
	left: 50%;
	transform: translatex(-50%);
	bottom: -6px;
	z-index: 9;
	border-radius: 50%;
}

/* CAROUSEL STARTS */
.customer-feedback .owl-item img {
	width: 85px;
	height: 85px;
}

.feedback-slider-item {
	position: relative;
	padding: 60px;
	margin-top: -40px;
}

.customer-name {
	margin-top: 15px;
	margin-bottom: 25px;
	font-size: 20px;
	font-weight: 500;
}

.feedback-slider-item p {
	line-height: 1.875;
}

.customer-rating {
	background-color: #eee;
	border: 3px solid #fff;
	color: rgba(1, 1, 1, 0.702);
	font-weight: 700;
	border-radius: 50%;
	position: absolute;
	width: 47px;
	height: 47px;
	line-height: 44px;
	font-size: 15px;
	right: 0;
	top: 77px;
	text-indent: -3px;
}

.thumb-prev .customer-rating {
	top: -20px;
	left: 0;
	right: auto;
}

.thumb-next .customer-rating {
	top: -20px;
	right: 0;
}

.customer-rating i {
	color: rgb(251, 90, 13);
	position: absolute;
	top: 10px;
	right: 5px;
	font-weight: 600;
	font-size: 12px;
}

/* GREY BACKGROUND COLOR OF THE ACTIVE SLIDER */
.feedback-slider-item:after {
	content: '';
	position: absolute;
	left: 20px;
	right: 20px;
	bottom: 0;
	top: 103px;
	background-color: #f6f6f6;
	border: 1px solid rgba(251, 90, 13, .1);
	border-radius: 10px;
	z-index: -1;
}
.feedback-slider-item img{
	border-radius:50px;	
}

.thumb-prev,
.thumb-next {
	position: absolute;
	z-index: 99;
	top: 45%;
	width: 98px;
	height: 98px;
	left: -90px;
	cursor: pointer;
	-webkit-transition: all .3s;
	transition: all .3s;
}

.thumb-next {
	left: auto;
	right: -90px;
}

.feedback-slider-thumb img {
	width: 100%;
	height: 100%;
	border-radius: 50%;
	overflow: hidden;
}

.feedback-slider-thumb:hover {
	opacity: .8;
	-ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=80)";
}

.customer-feedback .owl-nav [class*="owl-"] {
	position: relative;
	display: inline-block;
	bottom: 45px;
	transition: all .2s ease-in;
}

.customer-feedback .owl-nav i {
	background-color: transparent;
	color: rgb(251, 90, 13);
	font-size: 25px;
}

.customer-feedback .owl-prev {
	left: -15px;
}

.customer-feedback .owl-prev:hover {
	left: -20px;
}

.customer-feedback .owl-next {
	right: -15px;
}

.customer-feedback .owl-next:hover {
	right: -20px;
}

/* DOTS */
.customer-feedback .owl-dots {
	position: absolute;
	left: 50%;
	transform: translateX(-50%);
	bottom: 35px;
}
.customer-feedback .owl-dot {
	display: inline-block;
}

.customer-feedback .owl-dots .owl-dot span {
	width: 11px;
	height: 11px;
	margin: 0 5px;
	background: #fff;
	border: 1px solid rgb(251, 90, 13);
	display: block;
	-webkit-backface-visibility: visible;
	-webkit-transition: all 200ms ease;
	transition: all 200ms ease;
	border-radius: 50%;
}

.customer-feedback .owl-dots .owl-dot.active span {
	background-color: rgb(251, 90, 13);
}

/* RESPONSIVE */
@media screen and (max-width: 767px) {
	.feedback-slider-item:after {
		left: 30px;
		right: 30px;
	}
	.customer-feedback .owl-nav [class*="owl-"] {
		position: absolute;
		top: 50%;
		transform: translateY(-50%);
		margin-top: 45px;
		bottom: auto;
	}
	.customer-feedback .owl-prev {
		left: 0;
	}
	.customer-feedback .owl-next {
		right: 0;
	}
	

  .owl-wrapper{
    width:0px !important;
  }
}

</style>
<section>
	<div class="customer-feedback">
		<div class="container text-center">
			<div class="row">
        <div class="col-sm-2"></div>
				<div class="col-sm-8">
					<div>
						<h2 class="section-title">What Clients Say</h2>
					</div>
				</div><!-- /End col -->
			</div><!-- /End row -->

			<div class="row">
        <div class="col-sm-2 col-md-3"></div>
				<div class=" col-md-6 col-sm-8">
					<div class="owl-carousel feedback-slider">

						<!-- slider item -->
						<div class="feedback-slider-item">
							<img src="//c2.staticflickr.com/8/7310/buddyicons/24846422@N06_r.jpg" class=" mx-auto d-block img-circle" alt="Customer Feedback">
							<h3 class="customer-name">Lisa Redfern</h3>
							<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. It is a long established fact that a reader will be distracted by the readable its layout.</p>
							<span class="light-bg customer-rating" data-rating="5">
								5
								<i class="fa fa-star"></i>
							</span>
						</div>
						<!-- /slider item -->

						<!-- slider item -->
						<div class="feedback-slider-item">
							<img src="https://res.cloudinary.com/hnmqik4yn/image/upload/c_fill,fl_force_strip,h_128,q_100,w_128/v1493982718/ah57hnfnwxkmsciwivve.jpg" class=" mx-auto d-block img-circle" alt="Customer Feedback">
							<h3 class="customer-name">Cassi</h3>
							<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. It is a long established fact that a reader will be distracted by the readable its layout.</p>
							<span class="light-bg customer-rating" data-rating="4">
								4
								<i class="fa fa-star"></i>
							</span>
						</div>
						<!-- /slider item -->

						<!-- slider item -->
						<div class="feedback-slider-item">
							<img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/451270/profile/profile-80.jpg" class=" mx-auto d-block img-circle" alt="Customer Feedback">
							<h3 class="customer-name">Md Nahidul</h3>
							<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. It is a long established fact that a reader will be distracted by the readable its layout.</p>
							<span class="light-bg customer-rating" data-rating="5">
								5
								<i class="fa fa-star"></i>
							</span>
						</div>
						<!-- /slider item -->
						
					</div><!-- /End feedback-slider -->

					<!-- side thumbnail -->
					<div class="feedback-slider-thumb hidden-xs">
						<div class="thumb-prev">
							<span>
								<img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/451270/profile/profile-80.jpg" alt="Customer Feedback">
							</span>
							<span class="light-bg customer-rating">
								5
								<i class="fa fa-star"></i>
							</span>
						</div>

						<div class="thumb-next">
							<span>
								<img src="https://res.cloudinary.com/hnmqik4yn/image/upload/c_fill,fl_force_strip,h_128,q_100,w_128/v1493982718/ah57hnfnwxkmsciwivve.jpg" alt="Customer Feedback">
							</span>
							<span class="light-bg customer-rating">
								4
								<i class="fa fa-star"></i>
							</span>
						</div>
					</div>
					<!-- /side thumbnail -->

				</div><!-- /End col -->
			</div><!-- /End row -->
		</div><!-- /End container -->
	</div><!-- /End customer-feedback -->
</section>


<script>
jQuery(document).ready(function($) {

var feedbackSlider = $('.feedback-slider');
feedbackSlider.owlCarousel({
  items: 1,
  nav: true,
  dots: true,
  autoplay: true,
  loop: true,
  mouseDrag: true,
  touchDrag: true,
  navText: ["<i class='fa fa-long-arrow-left'></i>", "<i class='fa fa-long-arrow-right'></i>"],
  responsive:{

    // breakpoint from 767 up
    767:{
      nav: true,
      dots: false
    }
  }
});

feedbackSlider.on("translate.owl.carousel", function(){
  $(".feedback-slider-item h3").removeClass("animated fadeIn").css("opacity", "0");
  $(".feedback-slider-item img, .feedback-slider-thumb img, .customer-rating").removeClass("animated zoomIn").css("opacity", "0");
});

feedbackSlider.on("translated.owl.carousel", function(){
  $(".feedback-slider-item h3").addClass("animated fadeIn").css("opacity", "1");
  $(".feedback-slider-item img, .feedback-slider-thumb img, .customer-rating").addClass("animated zoomIn").css("opacity", "1");
});
feedbackSlider.on('changed.owl.carousel', function(property) {
  var current = property.item.index;
  var prevThumb = $(property.target).find(".owl-item").eq(current).prev().find("img").attr('src');
  var nextThumb = $(property.target).find(".owl-item").eq(current).next().find("img").attr('src');
  var prevRating = $(property.target).find(".owl-item").eq(current).prev().find('span').attr('data-rating');
  var nextRating = $(property.target).find(".owl-item").eq(current).next().find('span').attr('data-rating');
  $('.thumb-prev').find('img').attr('src', prevThumb);
  $('.thumb-next').find('img').attr('src', nextThumb);
  $('.thumb-prev').find('span').next().html(prevRating + '<i class="fa fa-star"></i>');
  $('.thumb-next').find('span').next().html(nextRating + '<i class="fa fa-star"></i>');
});
$('.thumb-next').on('click', function() {
  feedbackSlider.trigger('next.owl.carousel', [300]);
  return false;
});
$('.thumb-prev').on('click', function() {
  feedbackSlider.trigger('prev.owl.carousel', [300]);
  return false;
});

}); //end ready
</script>