<?php

/**
 * Admin Panel pay Controller
 */
class Pay extends Admin_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('pay_m');
    $this->load->model('status_m');
    $this->pay_m->access_permission('1');

  }

  //pay List
  public function index(){
    // get pay
    $this->load->helper('aurora');
    $this->data['pays'] = $this->pay_m->get();

    // var_dump(sizeof($this->data['pays']));
    //load view
    $this->data['subview'] = 'admin/pay/index';
    $this->load->view('admin/_layout_main', $this->data);
  }

  //Edit pay
   public function edit($id = NULL)
   {

    if($id){
      $this->data['pay'] = $this->pay_m->get($id);
      @count($this->data['pay']) || $this->data['errors'][] = 'pay Could not be found';
    }else{
      $this->data['pay'] = $this->pay_m->get_new();

    }


    // Set up the form
    $rules = $this->pay_m->rules;
    $this->form_validation->set_rules($rules);

    // Process the form
    if ($this->form_validation->run() == TRUE) {
        $data = $this->pay_m->array_from_post(array('name', 'p_type', 'date','transction','gamount', 'status', 'type', 't_fee','c_name', 'c_email', 'client', 'payment_type','p_method'));

        $this->pay_m->save($data, $id);
        redirect('admin/pay');
    }


  // load view
    $this->data['subview'] = 'admin/pay/edit';
    $this->load->view('admin/_layout_main', $this->data);
  }

  //delete pay
   public function delete($id){
    //Delete pays
    $this->pay_m->delete($id);
    redirect('admin/pay','refresh');
  }



  //payment Status
   public function status()
   {
    $this->data['status'] = $this->status_m->get();
    $this->data['subview'] = 'admin/pay/status';
    $this->load->view('admin/_layout_main', $this->data);

    }

  //payment Status
   public function status_edit($id = NULL)
   {

      if($id){
        $this->data['pay'] = $this->status_m->get($id);
        @count($this->data['pay']) || $this->data['errors'][] = 'pay Could not be found';
      }else{
        $this->data['pay'] = $this->status_m->get_new();
      }

      // Set up the form
    $rules = $this->status_m->rules;
    $this->form_validation->set_rules($rules);

    // Process the form
    if ($this->form_validation->run() == TRUE) {
        $data = $this->status_m->array_from_post(array('title', 'des'));

        $this->status_m->save($data, $id);
        redirect('admin/pay/status');
    }

        // load view
    $this->data['subview'] = 'admin/pay/status_edit';
    $this->load->view('admin/_layout_main', $this->data);

    }

 //Status pay
   public function status_delete($id){
    //Delete pays
    $this->pay_m->delete($id);
    redirect('admin/pay/status','refresh');
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
        if($this->pay_m->save($data, $_POST['pay_id']))
         { 
           echo 'true';
         }else{
           dump($data);
         }
  }





}
