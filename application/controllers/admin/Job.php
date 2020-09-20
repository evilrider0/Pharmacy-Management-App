<?php

/**
 * Admin Panel job Controller
 */
class Job extends Admin_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('job_m');
    $this->job_m->access_permission('1');

  }

  //job List
  public function index(){
    // get job
    $this->load->helper('aurora');
    $this->data['jobs'] = $this->job_m->get();

    // var_dump(sizeof($this->data['jobs']));
    //load view
    $this->data['subview'] = 'admin/job/index';
    $this->load->view('admin/_layout_main', $this->data);
  }

  //Edit job
   public function edit($id = NULL)
   {

    if($id){
      $this->data['job'] = $this->job_m->get($id);
      @count($this->data['job']) || $this->data['errors'][] = 'job Could not be found';
    }else{
      $this->data['job'] = $this->job_m->get_new();

    }


    // Set up the form
    $rules = $this->job_m->rules;
    $this->form_validation->set_rules($rules);

    // Process the form
    if ($this->form_validation->run() == TRUE) {
        $data = $this->job_m->array_from_post(array('title', 'des', 'cat','sub_cat','employer_id', 'c_date', 's_date', 'status'));

        $this->job_m->save($data, $id);
        redirect('admin/job');
    }


  // load view
    $this->data['subview'] = 'admin/job/edit';
    $this->load->view('admin/_layout_main', $this->data);
  }

  //delete job
   public function delete($id){
    //Delete jobs
    $this->job_m->delete($id);
    redirect('admin/job','refresh');
  }



public function active(){
      $this->load->helper('aurora');
    $this->data['jobs'] = $this->job_m->active_job();

    // var_dump(sizeof($this->data['jobs']));
    //load view
    $this->data['subview'] = 'admin/job/index';
    $this->load->view('admin/_layout_main', $this->data);
}

public function syspend(){
      $this->load->helper('aurora');
    $this->data['jobs'] = $this->job_m->syspend_job();

    // var_dump(sizeof($this->data['jobs']));
    //load view
    $this->data['subview'] = 'admin/job/index';
    $this->load->view('admin/_layout_main', $this->data);
}

  // STATUS TOGGLE
  public function status_toggle(){
      if($_POST['status'] == '0'){
        $status = '1';
      }else{
        $status = '0';
      }
      $data = array(
          'status' => $status,   
        );
        if($this->job_m->save($data, $_POST['job_id']))
         { 
           echo 'true';
         }else{
           dump($data);
         }
  }

}
