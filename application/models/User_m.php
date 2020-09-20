<?php
/**
 *User Model
 */
class User_M extends MY_Model
{
  //Basic Variables
  protected $_table_name = 'users';
  protected $_order_by = 'name';
  public $rules = array(
      'email' => array(
                'field' => 'email',
                'label' => 'Email',
                'rules' => 'trim|required|valid_email'
        ),
    'password' => array(
                'field' => 'password',
                'label' => 'Password',
                'rules' => 'trim|required',

        ),
      );
  public $rules_admin = array(
        'name' => array(
                'field' => 'name',
                'label' => 'Name',
                'rules' => 'trim|required'
        ),
        'phone' => array(
                'field' => 'phone',
                'label' => 'phone',
                'rules' => 'trim'
        ),
        'email' => array(
                'field' => 'email',
                'label' => 'Email',
                'rules' => 'trim|required|valid_email|callback__unique_email'
        ),
    'password' => array(
                'field' => 'password',
                'label' => 'Password',
                'rules' => 'trim|matches[password_confirm]',

        ),
    'password_confirm' => array(
                'field' => 'password_confirm',
                'label' => 'Confirm Password',
                'rules' => 'trim|matches[password]',

        ),
      );

  function __construct()
  {
    parent::__construct();
  }

  //Login Function
  public function login()
  {
    // Login function
    $user = $this->get_by(array(
      'email'=> $this->input->post('email'),
      'password'=> $this->hash($this->input->post('password')),
    ),TRUE);

    if (@count($user)) {
      // Log in user
      $data = array(
        'name' => $user->name,
        'email' => $user->email,
        'id' => $user->id,
        'type' => $user->type,
        'loggedin' => TRUE,
      );
      $this->session->set_userdata($data);
    }
  }

  //Logout function
  public function logout()
  {
    $this->session->sess_destroy();
  }

  // Check User Logged in ?
  public function loggedin()
  {
    return (bool) $this->session->userdata('loggedin');
  }

  public function get_new(){
    $user = new stdClass();
    $user->name = '';
    $user->email = '';
    $user->phone = '';
    $user->password = '';
    $user->type = '';
    $user->status = '';
    return $user;
  }





}
