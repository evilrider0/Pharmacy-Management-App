<?php

/**
 * Admin Panel report Controller
 */
class Report extends Admin_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('pay_m');
    $this->load->model('status_m');
    // $this->report_m->access_permission('1');

  }

  //report List
  public function index(){
    // get report
    $this->load->helper('aurora');
    // $this->data['reports'] = $this->report_m->get();

    // var_dump(sizeof($this->data['reports']));
    //load view
    $this->data['subview'] = 'admin/report/index';
    $this->load->view('admin/_employer_layout_main', $this->data);
  }

  



}
