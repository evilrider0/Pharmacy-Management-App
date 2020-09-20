<?php
/**
 *stock Model
 */
class stock_M extends MY_Model
{
  //Basic Variables
  protected $_table_name = 'stock';
  protected $_order_by = 'id';
  public $rules = array(
      'product' => array(
                'field' => 'product',
                'label' => 'stock Name',
                'rules' => 'trim|required'
        ),
    'stock' => array(
                'field' => 'stock',
                'label' => 'stock ',
                'rules' => 'trim|required',

        ),
      );


  function __construct()
  {
    parent::__construct();
  }


public function stock(){

  $query = $this->db->get('stock');

  return $query->result();

}

  public function get_new(){
    $stock = new stdClass();
    $stock->product= '';
    $stock->stock= '';
    $stock->b_price= '';
    $stock->s_price= '';
    $stock->e_date= '';
    $stock->supplier= '';
    $stock->s_unit= '';
    $stock->bp= '';
    $stock->date = '';
    $stock->status = '';
    return $stock;
  }



}
