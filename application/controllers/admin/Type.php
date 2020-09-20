<?php

/**
 * Admin Panel type Controller
 */
class type extends Admin_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('type_m');
    $this->type_m->access_permission('1');

  }

  //type List
  public function index(){
    // get type
    $this->load->helper('aurora');
    $this->data['types'] = $this->type_m->get();

    // var_dump(sizeof($this->data['types']));
    //load view
    $this->data['subview'] = 'admin/type/index';
    $this->load->view('admin/_layout_main', $this->data);
  }

  //Edit type
   public function edit($id = NULL)
   {

    if($id){
      $this->data['type'] = $this->type_m->get($id);
      @count($this->data['type']) || $this->data['errors'][] = 'type Could not be found';
    }else{
      $this->data['type'] = $this->type_m->get_new();

    }


    // Set up the form
    $rules = $this->type_m->rules;
    $this->form_validation->set_rules($rules);

    // Process the form
    if ($this->form_validation->run() == TRUE) {
        $data = $this->type_m->array_from_post(array('type', 'details', 'status'));
      // echo "<pre>";
      //   var_dump($data);
      //   echo "</pre>";
      //   die();

        $this->type_m->save($data, $id);
        redirect('admin/type');
    }


  // load view
    $this->data['subview'] = 'admin/type/edit';
    $this->load->view('admin/_layout_main', $this->data);
  }

  //delete type
   public function delete($id){
    //Delete types
    $this->type_m->delete($id);
    redirect('admin/type','refresh');
  }



}
