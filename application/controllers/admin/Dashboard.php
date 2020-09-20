<?php

/**
 * Admin Panel Dashboard Controller
 */
class Dashboard extends Admin_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('user_m');
    $this->load->model('job_m');
  }

  public function index(){

  	// dashboard_by_usertype
    if ($this->session->userdata('type') == '1') {
      $this->data['subview'] = 'admin/dashboard/index';
      $this->load->view('admin/_layout_main', $this->data);
  	}elseif($this->session->userdata('type') == '2'){
      redirect('admin/employer');
  	}else{
      redirect('admin/customer');
    }

  }


}
