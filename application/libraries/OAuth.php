
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class OAuth {
	  public function __construct()
		  {
		    parent::__construct();
		    // $this->load->model('user_m');
		    $this->config->load('oAuth');
		    
		  }

        public function FB()
        {
    		require_once(APPPATH.'third_party/vendor/Facebook/autoload.php');

		  // Create New FB Instance
		    $FB = new \Facebook\Facebook([
		      'app_id' => $this->config->item('app_id'),
		      'app_secret' => $this->config->item('app_secret'),
		      'default_graph_version' => $this->config->item('default_graph_version')
		    ]);
		    
		      $helper = $FB->getRedirectLoginHelper();
		      $redirectURL = $this->config->item('redirectURL');
		      $permissions = ['email'];
		      $loginURL = $helper->getLoginUrl($redirectURL, $permissions);
        }
}

 
 ?>