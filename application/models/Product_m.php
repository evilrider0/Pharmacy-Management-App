<?php
/**
 *product Model
 */
class Product_M extends MY_Model
{
  //Basic Variables
  protected $_table_name = 'product';
  protected $_order_by = 'id';
  public $rules = array(
      'name' => array(
                'field' => 'name',
                'label' => 'product Name',
                'rules' => 'trim|required'
        ),
    'details' => array(
                'field' => 'details',
                'label' => 'product Description',
                'rules' => 'trim|required',

        ),
      );


  function __construct()
  {
    parent::__construct();
  }

// public function sub_product(){
//     // $this->db->select('cat_name','parent', 'cat_des','status');
//     $this->db->where('parent !=' , '0');
//     $query = $this->db->get('products');
//     return $query->result();
// }

public function product(){

  // $this->db->where('parent', '0');
  $query = $this->db->get('products');

  return $query->result();

}

  public function get_new(){
    $product = new stdClass();
    $product->name = '';
    $product->details = '';
    $product->category = '';
    $product->bp = '';
    $product->price = '';
    $product->brand = '';
    $product->type = '';
    $product->photo = '';
    $product->date = '';
    $product->status = '';
    return $product;
  }

}
