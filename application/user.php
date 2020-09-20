<?php

/**
 * User Controller
 */
class User extends Frontend_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('user_m');
  }

  public function index()
  {
    $users = $this->user_m->get();
    var_dump($users);
  }

  public function add()
  {
    $data = array(
        'email'=> 'add@aurora.com',
        'password'=> '321',
        'name'=> 'Aditional',
        'phone'=> '012458963'
      );
      $id = $this->user_m->save($data);
      var_dump($id);
  }

  public function delete(){
    $this->user_m->delete(3);
  }

}
