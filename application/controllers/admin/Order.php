<?php

/**
 * Admin Panel order Controller
 */
class Order extends Admin_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('order_m');
    $this->order_m->access_permission('3');

  }

  //order List
  public function index(){
    // get order
    $this->load->helper('aurora');
    $this->data['orders'] = $this->order_m->get_customer_order();

    // var_dump(sizeof($this->data['orders']));
    //load view
    $this->data['subview'] = 'admin/order/index';
    $this->load->view('admin/_customer_layout_main', $this->data);
  }

  //Edit order
   public function edit($id = NULL)
   {

    if($id){
      $this->data['order'] = $this->order_m->get($id);
      @count($this->data['order']) || $this->data['errors'][] = 'order Could not be found';
    }else{
      $this->data['order'] = $this->order_m->get_new();

    }


    // Set up the form
    $rules = $this->order_m->rules;
    $this->form_validation->set_rules($rules);

    // Process the form
    if ($this->form_validation->run() == TRUE) {
        $data = $this->order_m->array_from_post(array('prescription', 'note', 'user_id','order_no','status'));

        $data['date'] =  date("Y/m/d - h:i:s a");
        // $data['status'] = '0';


        $this->order_m->save($data, $id);
        redirect('admin/order');
    }


  // load view
    $this->data['subview'] = 'admin/order/edit';
    $this->load->view('admin/_customer_layout_main', $this->data);
  }


  //Edit order
   public function view($id = NULL)
   {

    if($id){
      $this->data['order'] = $this->order_m->get($id);
      @count($this->data['order']) || $this->data['errors'][] = 'order Could not be found';
    }else{
      redirect('admin/order');
    }


  // load view
    $this->data['subview'] = 'admin/order/view';
    $this->load->view('admin/_customer_layout_main', $this->data);
  }


  //delete order
public function delete($id){
    //Delete orders
    $this->order_m->delete($id);
    redirect('admin/order','refresh');
  }



}
