
<!-- services body -->
<div class="row services-header">
	<div class="container">
		<div class="row">
			<div class="col-lg-2 col-md-3"></div>
			<div class="col-lg-8 col-md-6 col-sm-12 col-xs-12" style="">
				<h1 class="s_header text-center" style="margin-top:20px;"><i class="fa fa-bookmark  fa-2x" style="color:#14d963;"></i> MY Tokens</h1>				
			</div>
			<div class="col-lg-2 col-md-3 "></div>
		</div>		
	</div>
</div>


<div class="row services-tab-body">
	<div class="container">
		<div class="row">
			<div class="col-lg-2"></div>
			<div class="col-lg-8 col-md-12 col-12 col-sm-12" style="">
				<!-- tab -->
					<div class="card" style="width: 100%;">
					  
					  <ul class="list-group list-group-flush">
					  	<?php if($tokens):
					  		foreach ($tokens as $token):
					  	?>
					    
					    <li class="list-group-item row">
							<div class="col-lg-3 col-md-3 col-sm-4 col-5" style="margin-left:-15px;">
								<i class="fa fa-bookmark" style="color:#ffba28"></i>-| <span style="color:#14d963"><?php echo $token->token; ?> </span>
							</div>
							<div class="col-lg-5 col-md-5 col-sm-6 col-7">
								<?php $this->service_m->service_by_id($token->service_id); ?>								
							</div>
							<div class="col-lg-3 col-md-3 col-sm-2 hidden-sm-down">
								<?php echo substr($token->t_date, 0, 10); ?>
							</div>
							<div class="col-lg-1 col-md-1 col-sm-1 hidden-xs-down">								
								<small><i class="status-color" style="color:#14d963"><?php echo $this->service_m->token_status($token->status); ?></i></small>
							</div>
					    </li>
					<?php
						endforeach; else: 
					?>
						<li class="list-group-item row">
							<div class="token-wrapper" style="max-width:400px; margin: 3em auto">
								<div class="token">

									<p class="text-center" style="color:#14d963"><i class="la la-warning la-4x"></i></p>
									<h4 > <b style="color:#14d963">OPS!</b></h4>
									<p class="text-center" style="color:#14d963">You do not have any Active Token</p>
									<a href="<?php echo site_url(); ?>" class="btn btn-customer btn-block btn-warning"> GOTO HOME</a>
								</div>
							</div>
					    </li>
					<?php endif; ?>
				    </ul>
				</div>								
			</div>
			<div class="col-lg-2"></div>
		</div>		
	</div>
</div>

<script>
	// $(function(){
	// 	var jsLang = $('.status-color').html();
	// 	switch (jsLang) { 
	// 		case 'Panding': 
	// 			alert('jQuery Wins!');
	// 			break;
	// 		case 'prototype': 
	// 			alert('prototype Wins!');
	// 			break;
	// 		case 'mootools': 
	// 			alert('mootools Wins!');
	// 			break;		
	// 		case 'dojo': 
	// 			alert('dojo Wins!');
	// 			break;
	// 		default:
	// 			alert('Nobody Wins!');
	// 	}
		
	// });
</script>