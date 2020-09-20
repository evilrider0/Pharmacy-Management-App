<?php
/**
 *
 */
class MY_Model extends CI_Model
{
  //Basic Variables
  protected $_table_name = '';
  protected $_primary_key = 'id';
  protected $_primary_filter = 'intval';
  protected $_order_by = '';
  public $rules = array();
  protected $_timestamps = FALSE;

  function __construct()
  {
    parent::__construct();
  }

  //array form post
  public function array_from_post($fields)
  {
    $data = array();
    foreach ($fields as $field) {
      $data[$field] = $this->input->post($field);
    }
    return $data;
  }

  //Get Method
  public function get($id = NULL, $single = FALSE)
  {
    if ($id !== NULL) {
      $filter = $this->_primary_filter;
      $id = $filter($id);

      $this->db->where($this->_primary_key, $id);
      $method = 'row';
    }elseif($single == TRUE){
      $method = 'row';
    }else{
      $method = 'result';
    }


    // if (!count($this->db->ar_orderby)) {
    //   $this->db->order_by($this->_order_by);
    // }
    if(@!count($this->db->order_by($this->_order_by))) {
        $this->db->order_by($this->_order_by);
    }
    return $this->db->get($this->_table_name)->$method();
  }
// if(!count($this->db->order_by($this->_order_by))) { $this->db->order_by($this->_order_by); }

  //Get_By Method
  public function get_by($where, $single = FALSE)
  {
    $this->db->where($where);
    return $this->get(NULL, $single);

  }

  //Save Method
  public function save($data, $id = NULL)
  {
    // Set timestamps
    if ($this->_timestamps == TRUE) {
      $now = date('Y-m-d H:i:s');
      $id || $data['created'] = $now;
      $data['modified'] = $now;
    }
    //Insert
    if ($id === NULL) {
      !isset($data[$this->_primary_key]) || $data[$this->_primary_key] = NULL;
      $this->db->set($data);
      $this->db->insert($this->_table_name);
      $id = $this->db->insert_id();
    }
    //Update
    else{
      $filter = $this->_primary_filter;
      $id = $filter($id);
      $this->db->set($data);
      $this->db->where($this->_primary_key, $id);
      $this->db->update($this->_table_name);
    }

    return $id;
  }

  //Delete Method
  public function delete($id)
  {
    $filter = $this->_primary_filter;
    $id = $filter($id);

    if (!$id) {
      return FALSE;
    }else {
      $this->db->where($this->_primary_key, $id);
      $this->db->limit(1);
      $this->db->delete($this->_table_name);

    }
  }


  // Hashing Password
  public function hash($string)
  {
    return md5($string.$this->config->item('encryption_key'));
  }


  public function status($int){
    switch ($int) {
      case '0':
        $usertype = 'active';
        break;
      case '1':
        $usertype = 'Suspend';
        break;
      case '2':
        $usertype = 'Damaged';
        break;

      default:
        $usertype = 'No Status Found';
        break;
    }
    return $usertype;
  }


// USER ACCESS for admin area
  public function access_permission($type){
    if ($type != $this->session->userdata('type')) {
      switch ($this->session->userdata('type')) {
        case '1':
          $dashboard = 'admin/dashboard';
          break;
        case '2':
          $dashboard = 'admin/employer';
          break;
        case '3':
          $dashboard = 'admin/customer';
          break;

        default:
          $dashboard = 'admin/dashboard';
          break;
      }
        redirect($dashboard);
    }
  }

// user redirect
public function admin_access(){
  if($this->session->userdata('type') !='1'){
    redirect('admin/dashboard');
  }
}

// S category dW
  public function category_by_id($id = NULL){
    $this->db->where('id', $id);

    $parent = $this->db->get('category');

    foreach ($parent->result() as $row)
    {
        echo $row->cat_name;
    }
  }



// s category dW
  public function categories(){
    // $this->db->where('cat_parent', '!= 0');

    $parent = $this->db->get('category');

    $array = array(
      0 => 'Select Category'
    );
    if (count($parent->result())) {
      foreach ($parent->result() as $loc) {
        $array[$loc->id] = $loc->cat_name;
      }
    }
    return $array;

  }

  // type_dw
  public function type_dw(){
  // $this->db->where('cat_parent', $id);

  $parent = $this->db->get('type');
  $array = array(
    "" => 'Select Type'
  );
  if (count($parent->result())) {
    foreach ($parent->result() as $loc) {
      $array[$loc->id] = $loc->type;
    }
  }
  return $array;

}

// type_by_id
public function type_by_id($id = NULL){
  $this->db->where('id', $id);

  $parent = $this->db->get('type');

  foreach ($parent->result() as $row)
  {
      return $row->type;
  }
}


// type_by_id
public function type_by_product_id($id = NULL){
  $this->db->where('id', $id);

  $parent = $this->db->get('product');

  foreach ($parent->result() as $row)
  {
      return $row->type;
  }
}


// brand_dw
public function brand_dw(){
// $this->db->where('cat_parent', $id);

$parent = $this->db->get('brand');
$array = array(
  "" => 'Select Brand'
);
if (count($parent->result())) {
  foreach ($parent->result() as $loc) {
    $array[$loc->id] = $loc->name;
  }
}
return $array;

}

// brand_by_id
public function brand_by_id($id = NULL){
$this->db->where('id', $id);

$parent = $this->db->get('brand');

  foreach ($parent->result() as $row)
  {
      echo $row->name;
  }
}


// brand_dw
public function product_dw(){
// $this->db->where('cat_parent', $id);

$parent = $this->db->get('product');
$array = array(
  "" => 'Select Product'
);
if (count($parent->result())) {
  foreach ($parent->result() as $loc) {
    $array[$loc->id] = $loc->name;
  }
}
return $array;

}

// product_by_id
public function product_by_id($id = NULL){
$this->db->where('id', $id);

$parent = $this->db->get('product');

  foreach ($parent->result() as $row)
  {
      return $row->name;
  }
}



// product search AJAX
public function product_by_ajax($str){
  $this->db->like('name', $str);
  $parent = $this->db->get('product');
  return $parent->result();

}

// product details AJAX
public function product_by_details($str){
  $this->db->where('id', $str);
  $parent = $this->db->get('product');
  return $parent->result();

}


// unit_dw
public function unit_dw($type=NULL){
$this->db->where('type', $type);

$parent = $this->db->get('unit');
$array = array(
  "" => 'Select Unit'
);
if (count($parent->result())) {
  foreach ($parent->result() as $loc) {
    $array[$loc->id] = $loc->title;
  }
}
return $array;

}

// unit_by_id
public function unit_by_id($id = NULL){
$this->db->where('id', $id);

$parent = $this->db->get('unit');

  foreach ($parent->result() as $row)
  {
      return $row->title;
  }
}

// unit_by_type_id
public function unit_by_type_id($id = NULL){
  $this->db->where('type', $id);

  $parent = $this->db->get('unit');

  $array = array(
    "0" => 'Select Unit'
  );
  if (count($parent->result())) {
    foreach ($parent->result() as $loc) {
      $array[$loc->id] = $loc->title;
    }
  }
  return $array;
}





// Admin User Type
public function user_type($int){
  switch ($int) {
    case '0':
      $usertype = 'New User';
      break;
    case '1':
      $usertype = 'Admin';
      break;
    case '2':
      $usertype = 'Employer';
      break;

    case '3':
      $usertype = 'Customer';
      break;

    default:
      $usertype = 'No User';
      break;
  }
  return $usertype;
}


// Load Admin header
public function load_header($type){
  switch ($type) {
    case '0': //new user
      $header = 'admin/common/_header';
      break;
    case '1': //admin
      $header = 'admin/common/_header';
      break;
    case '2': //services provicer
      $header = 'admin/common/_customer-header';
      break;


    default: //default header
      $header = 'admin/common/_header';
      break;
  }
  return $header;
}


// User type registration
// admin
public function get_admin(){
   $this->db->where('type', '1');

    $parent = $this->db->get('users');

   return $parent->result();
}


// get_customer
public function get_customer(){
   $this->db->where('type', '3');

    $parent = $this->db->get('users');

   return $parent->result();
}

// customer DW
    public function get_customer_dw(){
      $this->db->where('type', '3');

    $parent = $this->db->get('users');
    $array = array(
      "" => 'Select Employer'
    );
    if (count($parent->result())) {
      foreach ($parent->result() as $loc) {
        $array[$loc->id] = $loc->name;
      }
    }
    return $array;

  }
  // customer_by_id
      public function customer_by_id($id=NULL){
        $this->db->where('id', $id);
        $this->db->where('type', '3');

      $query = $this->db->get('users');
      $customer = $query->row();

      return $customer->name;

    }


// Employer
public function get_employer(){
   $this->db->where('type', '2');

    $parent = $this->db->get('users');

   return $parent->result();
}




// Employer DW
    public function get_employer_dw(){
      $this->db->where('type', '2');

    $parent = $this->db->get('users');
    $array = array(
      "" => 'Select Employer'
    );
    if (count($parent->result())) {
      foreach ($parent->result() as $loc) {
        $array[$loc->id] = $loc->name;
      }
    }
    return $array;

  }

  // Employer_by_id
  public function employer_by_id($id){
    // $this->db->order_by("s_name", "asc");
    $this->db->where('id', $id);

    $query = $this->db->get('users');
    $s = $query->row();
    echo $s->name;

  }




  // COUNTING


  // total_product
  public function total_product(){
    $this->db->where('status', '0');
    $query = $this->db->get('product');
    return $query->result();
  }

  // outofstock_product
  public function outofstock_product(){
    // get product
    $this->db->where('status', '0');
    $query = $this->db->get('product');
    $product = $query->result();

    $o_f_s='0';

    $tp='0';
    foreach ($product as $p) {
      $this->db->where('product', $p->id);
      $q = $this->db->get('stock');
      $s = $q->result();
      foreach($s as $s){
        $tp = (int)$tp + (int)$s->stock;
      }
      if($tp <= 0){
        $o_f_s=(int)$o_f_s+1;
      }
    }
    return $o_f_s;
  }


  // expired_product
  public function expired_product(){
    $this->db->where('e_date', '<'.curdate());
    $query = $this->db->get('stock');
    return $query->result();
  }


  // total_sell
  public function total_sell(){
    $this->db->where('status', '3');
     $parent = $this->db->get('order_request');
    return $parent->result();
  }


  // today_sell
  public function today_sell(){
    $this->db->where('status', '3');
    $this->db->like('date', date('Y/m/d'));
     $parent = $this->db->get('order_request');
    return $parent->result();
  }

  // total customer
  public function total_customer(){
     $this->db->where('type', '3');
      $parent = $this->db->get('users');
     return count($parent->result());
  }


  // total customer
  public function today_customer(){
     $this->db->where('type', '3');
      $parent = $this->db->get('users');
     return count($parent->result());
  }




// CUSTOMER COUNTING
// get_customer_order / total order
public function get_customer_order(){
  $this->db->where('user_id', $this->session->userdata('id'));
  // $this->db->where('type', '3');

  $query = $this->db->get('order_request');
  return $query->result();

}



//  customer complete order
public function customer_complete_order(){
  $this->db->where('user_id', $this->session->userdata('id'));
  $this->db->where('status', '3');

  $query = $this->db->get('order_request');
  return $query->result();

}


//  customer pending order
public function customer_pending_order(){
  $this->db->where('user_id', $this->session->userdata('id'));
  $this->db->where('status', '0');

  $query = $this->db->get('order_request');
  return $query->result();

}


//  customer processing order
public function customer_processing_order(){
  $this->db->where('user_id', $this->session->userdata('id'));
  $this->db->where('status', '1');

  $query = $this->db->get('order_request');
  return $query->result();

}


//  customer delivery order
public function customer_delivery_order(){
  $this->db->where('user_id', $this->session->userdata('id'));
  $this->db->where('status', '2');

  $query = $this->db->get('order_request');
  return $query->result();

}


//  customer cancle order
public function customer_cancle_order(){
  $this->db->where('user_id', $this->session->userdata('id'));
  $this->db->where('status', '4');

  $query = $this->db->get('order_request');
  return $query->result();

}

  // COUNTING

// ORDER

// order_status
public function order_status($int){
  switch ($int) {
    case '0':
      $usertype = 'Pending';
      break;
    case '1':
      $usertype = 'Processing';
      break;
    case '2':
      $usertype = 'On Delivery';
      break;
    case '3':
      $usertype = 'Complete';
      break;
    case '4':
      $usertype = 'Cancelled';
      break;

    default:
      $usertype = 'Pending';
      break;
  }
  return $usertype;
}


// generate opder //

public function order_no($length){
  $token = "";
  $codeAlphabet = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
  $codeAlphabet.= "abcdefghijklmnopqrstuvwxyz";
  $codeAlphabet.= "0123456789";
  $max = strlen($codeAlphabet); // edited

 for ($i=0; $i < $length; $i++) {
     $token .= $codeAlphabet[random_int(0, $max-1)];
 }

 return strtoupper($token);
}



// get_invoice_by_order
public function get_invoice_by_order($order_no = NULL){
  $this->db->where('order_id', $order_no);
  $invoice =  $this->db->get('invoice');

  return $invoice->result();
}


// new_order

public function all_order(){
  // $this->db->where('status', '0');
  $order = $this->db->get('order_request');

  return $order->result();
}

// new_order

public function today_order(){
  $this->db->like('date', date('Y/m/d'));
  $order = $this->db->get('order_request');

  return $order->result();
}



// new_order

public function new_order(){
  $this->db->where('status', '0');
  $order = $this->db->get('order_request');

  return $order->result();
}



// processed

public function processed(){
  $this->db->where('status', '1');
  $order = $this->db->get('order_request');

  return $order->result();
}

// on_delivery

public function on_delivery(){
  $this->db->where('status', '2');
  $order = $this->db->get('order_request');

  return $order->result();
}

// complete

public function complete(){
  $this->db->where('status', '3');
  $order = $this->db->get('order_request');

  return $order->result();
}


// Cancle

public function cancle(){
  $this->db->where('status', '4');
  $order = $this->db->get('order_request');

  return $order->result();
}















//================================================
// Unused

// // Payment status DW
//
//   // status_dw DW
//     public function status_dw(){
//     // $this->db->where('cat_parent', $id);
//
//     $parent = $this->db->get('status');
//     $array = array(
//       "" => 'Select Status'
//     );
//     if (count($parent->result())) {
//       foreach ($parent->result() as $loc) {
//         $array[$loc->id] = $loc->title;
//       }
//     }
//     return $array;
//
//   }
//
//
//
//
// // Transactions
// // =======================================
// // latest 20
// public function pay_summary($limlt){
//   $this->db->limit($limlt);
//   $this->db->order_by('id', 'DESC');
//
//   $query = $this->db->get('pays');
//   $r = $query->result();
//
//   return $r;
// }
//
//
// // latest 5
//
//
//
//
//
// // AbailAvle Amount
//   // ==================================================
//
//   public function available()
//   {
//     // Current
//     $current = $this->recived() - $this->sent();
//     echo $current;
//
//   }
//
//     // Total recived
//   public function recived()
//   {
//     $amount = "";
//     $t_fee = "";
//
//     $this->db->where('status', '1');
//     $this->db->where('type', 'Recived');
//
//     $query = $this->db->get('pays');
//     $r = $query->result();
//
//     // net amount
//     foreach ($r as $r) {
//       $amount = (int)$amount + (int) $r->gamount;
//     }
//
//     // t_fee
//     // foreach ($r as $r) {
//     //   $t_fee = (int)$t_fee + (int) $r->t_fee;
//     // }
//
//     // $net_amount = (int) $amount - (int)$t_fee;
//     return $amount;
//
//   }
//
//     // total sent
//   public function sent()
//     {
//       $amount = "";
//       $t_fee = "";
//
//       $this->db->where('status', '1');
//       $this->db->where('type', 'send');
//
//       $query = $this->db->get('pays');
//       $r = $query->result();
//
//
//       foreach ($r as $r) {
//         $amount = (int)$amount + (int) $r->gamount;
//       }
//
//     //  // t_fee
//     // foreach ($r as $r) {
//     //   $t_fee = (int)$t_fee + (int) $r->t_fee;
//     // }
//
//     // $net_amount = (int) $amount + (int)$t_fee;
//     return $amount;
//     }
//
//
//
// // tranction sorting AJAX
// // ==================================================
//
//     // Payment Sent
//     public function pay_send(){
//       $this->db->where('type', 'Send');
//
//       $query = $this->db->get('pays');
//       $r = $query->result();
//
//       return $r;
//
//     }
//
//     // Payment Recived
//     public function pay_recived(){
//       $this->db->where('type', 'Recived');
//
//       $query = $this->db->get('pays');
//       $r = $query->result();
//
//       return $r;
//
//     }
//
//     // Payment Pending
//     public function pay_pending(){
//       $this->db->where('status', '2');
//
//       $query = $this->db->get('pays');
//       $r = $query->result();
//
//       return $r;
//
//     }
//
//
//     public function display_loop($r =NULL){
//       $tr = '';
//       foreach ($r as $pay) {
//         # code...
//       $tr .= '<tr class="align-middle">';
//       $tr .= '<td class="align-middle"><span class="date">'.substr($pay->date, 0, 13).'</span></td>';
//       $tr .= '<td><a href="'.site_url('admin/employer/dashboard/'.$pay->id).'">';
//
//       if($pay->type == 'Send'){
//         $tr .= 'Payment to '.$pay->name;
//       }else{
//         $tr .= 'Payment from '.$pay->name;
//       }
//       $tr .= '</a><small>'.$this->pay_m->status_by_id($pay->status).'</small></td>';
//       $tr .= '<td class="align-middle"><p class="text-right">';
//       if($pay->type == 'Send'){
//             $tr .= '- $'.$pay->gamount;
//           }else{
//             $tr .= '$'.$pay->gamount;
//           }
//
//       $tr .= '</p></td>';
//       $tr .= '</tr>';
//       }
//
//       $tr .= '';
//
//       return $tr;
//     }
//
//
// // =====================================================
//
//   // status_by_id
//   public function status_by_id($id=NULL){
//     $this->db->where('id', $id);
//
//     $query = $this->db->get('status');
//     $s = $query->row();
//     return $s->title;
//
//   }
//
//
// public function status_tooltip($id=NULL){
//    $this->db->where('id', $id);
//
//     $query = $this->db->get('status');
//     $s = $query->row();
//     return $s->des;
// }
//
//
// // category DW
//     public function sub_categories_dw($id){
//     $this->db->where('cat_parent', $id);
//
//     $parent = $this->db->get('category');
//     $array = array(
//       "" => 'Select Sub-category'
//     );
//     if (count($parent->result())) {
//       foreach ($parent->result() as $loc) {
//         $array[$loc->id] = $loc->cat_name;
//       }
//     }
//     return $array;
//
//   }
//




}
