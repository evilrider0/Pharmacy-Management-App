<?php

/**
 * Admin Panel brand Controller
 */
class Brand extends Admin_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('brand_m');
    $this->brand_m->access_permission('1');

  }

  //brand List
  public function index(){
    // get brand
    $this->load->helper('aurora');
    $this->data['brands'] = $this->brand_m->get();

    // var_dump(sizeof($this->data['brands']));
    //load view
    $this->data['subview'] = 'admin/brand/index';
    $this->load->view('admin/_layout_main', $this->data);
  }

  //Edit brand
   public function edit($id = NULL)
   {

    if($id){
      $this->data['brand'] = $this->brand_m->get($id);
      @count($this->data['brand']) || $this->data['errors'][] = 'brand Could not be found';
    }else{
      $this->data['brand'] = $this->brand_m->get_new();

    }


    // Set up the form
    $rules = $this->brand_m->rules;
    $this->form_validation->set_rules($rules);

    // Process the form
    if ($this->form_validation->run() == TRUE) {
        $data = $this->brand_m->array_from_post(array('name', 'details', 'status'));
      // echo "<pre>";
      //   var_dump($data);
      //   echo "</pre>";
      //   die();

        $this->brand_m->save($data, $id);
        redirect('admin/brand');
    }


  // load view
    $this->data['subview'] = 'admin/brand/edit';
    $this->load->view('admin/_layout_main', $this->data);
  }

  //delete brand
   public function delete($id){
    //Delete brands
    $this->brand_m->delete($id);
    redirect('admin/brand','refresh');
  }



}
