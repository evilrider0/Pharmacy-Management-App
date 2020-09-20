<?php

/**
 * User Controller
 */
class OAuth extends Frontend_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model('user_m');
    $this->config->load('oAuth');
    
  }

  public function index()
  {
    // redirect('admin/user/login');
    echo 'oAuth 2 Social Login With Google / Fcebook';
  }

  public function Facebook()
  {

      redirect($loginURL);
  }


// Facebook CallBack
  public function fbCallback(){
    require_once(APPPATH.'third_party/vendor/Facebook/autoload.php');
    
    try{
      $accessToken = $helper->getAccessToken();

    } catch(Facebook\Exceptions\FacebookResponseException $e){
      echo "Response Excptions: " . $e->getMessage();  
      exit();
    }catch(Facebook\Exceptions\FacebookSDKException $e){
      echo "SDK Excptions: " . $e->getMessage();  
      exit();
    }

    if(!$accessToken){
      header('Location: login.php');
      exit();
    }

    $oAuth2Client = $FB->getOAuth2Client();
    if(!$accessToken->isLongLived()){
      $accessToken = $oAuth2Client->getLongLivedAccessToken($accessToken);
    }

    $response = $FB->get("/me?fields=id, first_name, last_name, email, picture.type(large)", $accessToken);
    $userData = $response->getGraphNode()->asArray();
    $_SESSION['userData'] = $userData;
    $_SESSION['access_token'] = (string) $accessToken;
    // header('Location: index.php');
    dump($userData);
    exit();
  }



  public function Google()
  {

   //Autoload Google SDK 
    // require_once 'vendor/autoload.php';
    require_once(APPPATH.'third_party/vendor/autoload.php');

  // Create New GP Instance
    $gClient = new Google_Client();

    $gClient->setClientId($this->config->item('ClientId'));//
    $gClient->setClientSecret($this->config->item('ClientSecret'));//

    $gClient->setApplicationName("Google Login With PHP");
    $gClient->setRedirectUri($this->config->item('RedirectUri'));
    $gClient->addScope("https://www.googleapis.com/auth/plus.login https://www.googleapis.com/auth/userinfo.email");
    $loginURL = $gClient->createAuthUrl();

    redirect($loginURL);
  }


// Google CallBack
  public function gpCallback(){
      // require_once "config.php";

    if(isset($_GET['code'])){
      $token = $gClient->fetchAccessTokenWithAuthCode($_GET['code']);
      $_SESSION['access_token'] = $token;
    }

    $oAuth = new Google_Service_Oauth2($gClient);

    $userData = $oAuth->userinfo_v2_me->get();

    $_SESSION['id'] = $userData['id'];
    $_SESSION['email'] = $userData['email'];
    $_SESSION['gender'] = $userData['gender'];
    $_SESSION['familyName'] = $userData['familyName'];
    $_SESSION['givenName'] = $userData['givenName'];
    $_SESSION['picture'] = $userData['picture'];

    header('Location: index.php');
  }
 

}
