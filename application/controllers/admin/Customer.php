<?php

/**
 * Admin Panel Dashboard Controller
 */
class Customer extends Admin_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('user_m');
    $this->user_m->access_permission('3');
  }

  public function index(){
    $this->data['subview'] = 'admin/customer/dashboard';
    $this->load->view('admin/_customer_layout_main', $this->data);
  }


  public function delivery_request(){
    $this->data['subview'] = 'admin/customer/delivery_request';
    $this->load->view('admin/_customer_layout_main', $this->data);
  }

  // SETTING
  public function setting(){
    $this->load->model('user_m');
    $this->data['users'] = $this->user_m->get($this->session->userdata('id'));
    $this->data['subview'] = 'admin/customer/setting';
    $this->load->view('admin/_customer_layout_main', $this->data);
  }

  // SETTING
  //
  // // SETTING
  // public function notification(){
  //   $this->load->model('notification_m');
  //   $this->data['notifications'] = $this->notification_m->notification_by_customer();
  //   $this->data['subview'] = 'admin/customer/notification';
  //   $this->load->view('admin/_customer_layout_main', $this->data);
  // }
  //
  // // SETTING


  // Personal info
  public function personal_info(){
    $this->load->model('user_m');
    $data = array(
        'name'=> $_POST['name'],
        'user_info'=> serialize(array('sex'=> $_POST['sex'],'dob'=> $_POST['dob'])),
      );
      if($this->user_m->save($data, $this->session->userdata('id')))
       {
         echo 'true';
       }else{
         echo 'false';
       }

  }


  // User Photo
  public function user_photo(){
    $this->load->model('user_m');
    $data = array(
        'photo'=> $_POST['photo'],
      );
      if($this->user_m->save($data, $this->session->userdata('id')))
       {
         echo 'true';
       }else{
         echo 'false';
       }
  }

  // User Contact info
  public function contact_info(){
    $this->load->model('user_m');
    $data = array(
        'email'=> $_POST['email'],
        'phone'=> $_POST['phone']
      );
      if($this->user_m->save($data, $this->session->userdata('id')))
       {
         echo 'true';
       }else{
         dump($data);
       }
  }

  // User Password
  public function password(){
    $this->load->model('user_m');
    $data = array(
        'password'=> $this->user_m->hash($_POST['password'])
      );
      if($this->user_m->save($data, $this->session->userdata('id')))
       {
         echo 'true';
       }else{
         dump($data);
       }
  }


    // Adddress info
  public function address_info(){
    $this->load->model('user_m');
    dump(array('bulding'=> $_POST['bulding'], 'flat'=> $_POST['flat'],'floor'=> $_POST['floor']));
      $data = array(
          'address' => serialize(array('bulding'=> $_POST['bulding'], 'flat'=> $_POST['flat'],'floor'=> $_POST['floor']))
        );
        if($this->user_m->save($data, $this->session->userdata('id')))
         {
           echo 'true';
         }else{
           dump($data);
         }
  }


// add_review
public function add_review(){
  $this->load->model('review_m');
    $data = array(
        'review'=> $_POST['review'],
        'r_des'=> $_POST['r_des'],
        'token'=> $_POST['token'],
        'service_id'=> $_POST['service_id']
      );
      if($this->review_m->save($data))
       {
         echo 'true';
       }else{
         dump($data);
       }
}

// note_sts_update
  public function note_sts_update(){
    $id = $_POST['id'];
    $data = array(
        'status'=> '1'
      );
    $this->db->where('id', $id);
    $update = $this->db->update('notifications', $data);
    if($update)
     {
       echo 'true';
     }else{
       dump($data);
     }
  }

}
