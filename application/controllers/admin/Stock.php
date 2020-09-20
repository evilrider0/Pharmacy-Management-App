<?php

/**
 * Admin Panel stock Controller
 */
class Stock extends Admin_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('stock_m');
    $this->stock_m->access_permission('1');

  }

  //stock List
  public function index(){
    // get stock
    $this->load->helper('aurora');
    $this->data['stocks'] = $this->stock_m->get();

    // var_dump(sizeof($this->data['stocks']));
    //load view
    $this->data['subview'] = 'admin/stock/index';
    $this->load->view('admin/_layout_main', $this->data);
  }

  //Edit stock
   public function edit($id = NULL)
   {

    if($id){
      $this->data['stock'] = $this->stock_m->get($id);
      @count($this->data['stock']) || $this->data['errors'][] = 'stock Could not be found';
    }else{
      $this->data['stock'] = $this->stock_m->get_new();

    }


    // Set up the form
    $rules = $this->stock_m->rules;
    $this->form_validation->set_rules($rules);

    // Process the form
    if ($this->form_validation->run() == TRUE) {
        $data = $this->stock_m->array_from_post(array('product', 'stock',  'b_price',  's_price',  'e_date',  'supplier',  's_unit',  'bp', 'status'));

        $data['date'] = date("Y/m/d");

        $this->stock_m->save($data, $id);
        redirect('admin/stock');
    }


  // load view
    $this->data['subview'] = 'admin/stock/edit';
    $this->load->view('admin/_layout_main', $this->data);
  }

  //delete stock
   public function delete($id){
    //Delete stocks
    $this->stock_m->delete($id);
    redirect('admin/stock','refresh');
  }



}
