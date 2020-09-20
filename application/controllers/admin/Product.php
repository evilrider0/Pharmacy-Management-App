<?php

/**
 * Admin Panel product Controller
 */
class Product extends Admin_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('product_m');
    $this->product_m->access_permission('1');

  }

  //product List
  public function index(){
    // get product
    $this->load->helper('aurora');
    $this->data['products'] = $this->product_m->get();

    // var_dump(sizeof($this->data['products']));
    //load view
    $this->data['subview'] = 'admin/product/index';
    $this->load->view('admin/_layout_main', $this->data);
  }

  //Edit product
   public function edit($id = NULL)
   {

    if($id){
      $this->data['product'] = $this->product_m->get($id);
      @count($this->data['product']) || $this->data['errors'][] = 'product Could not be found';
    }else{
      $this->data['product'] = $this->product_m->get_new();

    }


    // Set up the form
    $rules = $this->product_m->rules;
    $this->form_validation->set_rules($rules);

    // Process the form
    if ($this->form_validation->run() == TRUE) {
        $data = $this->product_m->array_from_post(array('name', 'details', 'category','brand','bp','type','photo','price', 'status'));
      // echo "<pre>";
      //   var_dump($data);
      //   echo "</pre>";
      //   die();
      $data['date'] = date("Y/m/d - h:i:s a");

        $this->product_m->save($data, $id);
        redirect('admin/product');
    }


  // load view
    $this->data['subview'] = 'admin/product/edit';
    $this->load->view('admin/_layout_main', $this->data);
  }

  //delete product
   public function delete($id){
    //Delete products
    $this->product_m->delete($id);
    redirect('admin/product','refresh');
  }

  //delete product
   public function type_by_product_id($id=""){
    //Delete products
    echo $this->product_m->type_by_product_id($id);
  }

}
