<?php
/**
 *status Model
 */
class Status_M extends MY_Model
{
  //Basic Variables
  protected $_table_name = 'status';
  protected $_order_by = 'id';
  public $rules = array(
      'title' => array(
                'field' => 'title',
                'label' => 'status title',
                'rules' => 'trim|required'
        ),
      );


  function __construct()
  {
    parent::__construct();
  }



// public function get(){

//   $query = $this->db->get('status');

//   return $query->result();

// }
 
 public function get_new(){
    $status = new stdClass();
    $status->title = '';
    $status->des = '';
    return $status;
  }

}
