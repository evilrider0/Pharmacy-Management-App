<?php

/**
 * Admin Panel unit Controller
 */
class Unit extends Admin_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('unit_m');
    $this->unit_m->access_permission('1');

  }

  //unit List
  public function index(){
    // get unit
    $this->load->helper('aurora');
    $this->data['units'] = $this->unit_m->get();

    // var_dump(sizeof($this->data['units']));
    //load view
    $this->data['subview'] = 'admin/unit/index';
    $this->load->view('admin/_layout_main', $this->data);
  }

  //Edit unit
   public function edit($id = NULL)
   {

    if($id){
      $this->data['unit'] = $this->unit_m->get($id);
      @count($this->data['unit']) || $this->data['errors'][] = 'unit Could not be found';
    }else{
      $this->data['unit'] = $this->unit_m->get_new();

    }


    // Set up the form
    $rules = $this->unit_m->rules;
    $this->form_validation->set_rules($rules);

    // Process the form
    if ($this->form_validation->run() == TRUE) {
        $data = $this->unit_m->array_from_post(array('title', 'type', 'status'));
      // echo "<pre>";
      //   var_dump($data);
      //   echo "</pre>";
      //   die();

        $this->unit_m->save($data, $id);
        redirect('admin/unit');
    }


  // load view
    $this->data['subview'] = 'admin/unit/edit';
    $this->load->view('admin/_layout_main', $this->data);
  }

  //delete unit
   public function delete($id){
    //Delete units
    $this->unit_m->delete($id);
    redirect('admin/unit','refresh');
  }

  //unit by type
   public function unit_by_type_id($id=""){
    //unit products
    echo json_encode($this->unit_m->unit_by_type_id($id));
  }

}
