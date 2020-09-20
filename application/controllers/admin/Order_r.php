<?php

/**
 * Admin Panel order Controller
 */
class Order_r extends Admin_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('order_m');
    $this->order_m->access_permission('1');

  }

  //All order List
  public function index(){
    // get order
    $this->load->helper('aurora');
    $this->data['orders'] = $this->order_m->get();

    // var_dump(sizeof($this->data['orders']));
    //load view
    $this->data['subview'] = 'admin/order/order_r';
    $this->load->view('admin/_layout_main', $this->data);
  }

  //new order List
  public function new_order(){
    // get order
    $this->load->helper('aurora');
    $this->data['orders'] = $this->order_m->new_order();

    // var_dump(sizeof($this->data['orders']));
    //load view
    $this->data['subview'] = 'admin/order/order_r';
    $this->load->view('admin/_layout_main', $this->data);
  }

  //processed List
  public function processed(){
    // get order
    $this->load->helper('aurora');
    $this->data['orders'] = $this->order_m->processed();

    // var_dump(sizeof($this->data['orders']));
    //load view
    $this->data['subview'] = 'admin/order/order_r';
    $this->load->view('admin/_layout_main', $this->data);
  }



  //on_delivery List
  public function on_delivery(){
    // get order
    $this->load->helper('aurora');
    $this->data['orders'] = $this->order_m->on_delivery();

    // var_dump(sizeof($this->data['orders']));
    //load view
    $this->data['subview'] = 'admin/order/order_r';
    $this->load->view('admin/_layout_main', $this->data);
  }



    //on_delivery List
    public function complete(){
      // get order
      $this->load->helper('aurora');
      $this->data['orders'] = $this->order_m->complete();

      // var_dump(sizeof($this->data['orders']));
      //load view
      $this->data['subview'] = 'admin/order/order_r';
      $this->load->view('admin/_layout_main', $this->data);
    }





      //on_delivery List
      public function cancle(){
        // get order
        $this->load->helper('aurora');
        $this->data['orders'] = $this->order_m->cancle();

        // var_dump(sizeof($this->data['orders']));
        //load view
        $this->data['subview'] = 'admin/order/order_r';
        $this->load->view('admin/_layout_main', $this->data);
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
    $this->data['subview'] = 'admin/order_r/edit';
    $this->load->view('admin/_layout_main', $this->data);
  }


  //Edit order
   public function process($id = NULL)
   {

    if($id){
      $this->data['order'] = $this->order_m->get($id);
      @count($this->data['order']) || $this->data['errors'][] = 'order Could not be found';
    }else{
      redirect('admin/order');
    }


  // load view
    $this->data['subview'] = 'admin/order/process';
    $this->load->view('admin/_layout_main', $this->data);
  }


  //delete order
public function delete($id){
    //Delete orders
    $this->order_m->delete($id);
    redirect('admin/order','refresh');
  }

public function product_ajax(){
  $str = $this->input->post('product');
  $pro = $this->order_m->product_by_ajax($str);


  foreach ($pro as $key => $value) {
    echo   '<li id="'.$value->id.'" onclick="add_product('.$value->id.')">'.$value->name." - ( ".$this->order_m->type_by_id($value->type)." - ".$value->bp."mg )</li>";
  }
  // dump($pro);
}

// product_memo
  public function product_memo(){
    $str = $this->input->post('product');
    $pro = $this->order_m->product_by_details($str);

  $product = '';
  foreach ($pro as $p) {
    $product .= '<tr class="pro pro_'.$p->id.'" id="'.$p->id.'">';
    $product .= '<td>';
    $product .= '<button onclick="delete_row(\''.$p->id.'\')" type="button" class="btn-remove badge badge-pill badge-danger btn-hover">X</button>';
    $product .= '</td><td>';
    $product .= '<input type="text" name="p_name[]" onclick="" class="form-control  pro_name" data-id="'.$p->id.'" value="'.$p->name.'" disabled>';
    $product .= '</td><td>';
    $product .= '<input type="number" name="p_price[]" class="form-control p_price p_price_'.$p->id.'" value="'.$p->price.'" disabled>';
    $product .= '</td><td>';
    $product .= '<input type="number" name="p_unit[]" class="form-control p_unit p_unit_'.$p->id.'" onclick="unitByPrice('.$p->id.')" value="1">';
    $product .= '</td><td>';
    $product .= '<input type="text" name="p_sub_total[]" class="form-control p_sub_total p_sub_total_'.$p->id.'" value="'.$p->price.'">';
    $product .= '</td></tr>';
      echo   $product;
    }
  }


  public function generate_invoice($id=NULL){
    // load invoice model
    $this->load->model('invoice_m');

    // get post data via jquery
    $data['product'] = $this->input->post('product');
    $data['d_charge'] = $this->input->post('delivery_charge');
    $data['total'] = $this->input->post('total');
    $data['sub_total'] = $this->input->post('sub_total');
    $data['order_id'] = $this->input->post('order_id');
    $data['vat'] =   $this->input->post('vat');
    $data['date'] =  date("Y/m/d - h:i:s a");

    // check exist entry
    $this->db->where('order_id', $data['order_id']);
    $exist = $this->db->get('invoice')->num_rows();
    // var_dump($exist);
    if($exist != 0){
      $save = $this->db->update('invoice',$data);

    }else{
      $save = $this->db->insert('invoice',$data);
    }

    // if($save){
    //
    // }
    // $this->db->update('', array('status', '1'));

    if($save){
      echo "1";
    }else{
      echo "0";
    }
  }

  public function order_status_update($order_id, $status){
    $status = [
            'status' => $status,
        ];
    $this->db->where('order_no', $order_id);
    $status = $this->db->update('order_request', $status);
    if($status){
      echo "1";
    }else{
      echo "0";
    }
  }


}
