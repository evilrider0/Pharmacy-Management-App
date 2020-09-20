<?php

/**
 * Admin Panel Dashboard Controller
 */
class Employer extends Admin_Controller
{

  public function __construct()
  {
    parent::__construct();
    // $this->load->model('category_m');
    $this->load->model('pay_m');
    $this->load->model('user_m');
    $this->load->helper('aurora_helper');
    
    // $this->service_m->access_permission('2');
  }

  public function index(){
    $this->data['pays'] = $this->pay_m->pay_summary(20);
    $this->data['subview'] = 'admin/employer/index';
    $this->load->view('admin/_employer_layout_main', $this->data);
  }

  public function view_all(){
    $this->data['pays'] = $this->pay_m->get();
    $this->data['subview'] = 'admin/employer/view_all';
    $this->load->view('admin/_employer_layout_main', $this->data);
  }



   // PROFILE?DASHBOARD
  public function dashboard($id=NULL){
    $this->data['pays'] = $this->pay_m->get($id);      
    $this->data['subview'] = 'admin/employer/s_pay';
    $this->load->view('admin/_employer_layout_main', $this->data);
  }

  // SETTING
  public function setting(){
    $this->load->model('user_m');
    $this->data['users'] = $this->user_m->get($this->session->userdata('id'));
    $this->data['subview'] = 'admin/employer/setting';
    $this->load->view('admin/_employer_layout_main', $this->data);
  }

 



   public function delete_job($id){
    $this->load->model('job_m');
    //Delete jobs
    $this->job_m->delete($id);
    redirect('admin/employer/job_all','refresh');
  }

  // SORTING

  public function pay_send(){
    echo $this->pay_m->display_loop($this->pay_m->pay_send());
  }

  public function pay_recived(){
    echo $this->pay_m->display_loop($this->pay_m->pay_recived());
  }

  public function pay_pending(){
    echo $this->pay_m->display_loop($this->pay_m->pay_pending());
  }

}
