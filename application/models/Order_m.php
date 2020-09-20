<?php
/**
 *order Model
 */
class Order_M extends MY_Model
{
  //Basic Variables
  protected $_table_name = 'order_request';
  protected $_order_by = 'id';
  public $rules = array(
    'user_id' => array(
                'field' => 'user_id',
                'label' => 'user_id',
                'rules' => 'trim|required',

        ),
      );


  function __construct()
  {
    parent::__construct();
  }



  public function get_new(){
    $order = new stdClass();
    $order->prescription = '';
    $order->note = '';
    $order->order_no = '';
    $order->user_id = '';
    $order->date = '';
    $order->status = '';
    return $order;
  }


  //parent order array_from_post
  //

}
