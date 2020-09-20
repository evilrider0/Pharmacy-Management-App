<?php
/**
 *pay Model
 */
class Pay_M extends MY_Model
{
  //Basic Variables
  protected $_table_name = 'pays';
  protected $_order_by = 'id';
  public $rules = array(
      'name' => array(
                'field' => 'name',
                'label' => 'pay name',
                'rules' => 'trim|required'
        ),
    // 'des' => array(
    //             'field' => 'des',
    //             'label' => 'pay Description',
    //             'rules' => 'trim|required',

    //     ),
      );


  function __construct()
  {
    parent::__construct();
  }

// public function sub_pay(){
//     // $this->db->select('cat_name','parent', 'cat_des','status');
//     $this->db->where('parent !=' , '0');
//     $query = $this->db->get('pays');
//     return $query->result();
// }

public function pay(){

  $query = $this->db->get('pays');

  return $query->result();

}


public function active_pay(){
   $this->db->where('status', '0');
  $query = $this->db->get('pays');

  return $query->result();
}

public function syspend_pay(){
   $this->db->where('status', '1');
  $query = $this->db->get('pays');

  return $query->result();
}


 public function get_new(){
    $pay = new stdClass();
    $pay->name = '';
    $pay->p_type = '';
    $pay->date = '';
    $pay->transction = '';
    $pay->gamount = '';
    $pay->status = '';
    $pay->type = '';
    $pay->t_fee = '';
    $pay->c_name = '';
    $pay->c_email = '';
    $pay->client = '';
    $pay->payment_type = '';
    $pay->p_method = '';
    return $pay;
  }

}
