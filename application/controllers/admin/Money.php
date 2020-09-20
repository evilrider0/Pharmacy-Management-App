<?php

/**
 * Admin Panel money Controller
 */
class Money extends Admin_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('pay_m');
    $this->load->model('status_m');
    // $this->money_m->access_permission('1');

  }

  //money List
  public function index(){
    // get money
    $this->load->helper('aurora');
    //load view
    $this->data['subview'] = 'admin/money/index';
    $this->load->view('admin/_employer_layout_main', $this->data);
  }


  //money List
  public function trensfer_money(){
    // get money
    $this->load->helper('aurora');
    //load view
    $this->data['subview'] = 'admin/money/t_money';
    $this->load->view('admin/_blank_layout_main', $this->data);
  }
  
  //money add_money
  public function add_money(){
    // get money
    $this->load->helper('aurora');
    //load view
    $this->data['subview'] = 'admin/money/add_money';
    $this->load->view('admin/_blank_layout_main', $this->data);
  }


// payment_preferences
  public function payment_preferences(){
    // get money
    $this->load->helper('aurora');
    //load view
    $this->data['subview'] = 'admin/money/payment_preferences';
    $this->load->view('admin/_blank_layout_main', $this->data);
  }


}
