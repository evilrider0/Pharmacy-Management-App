<?php
/**
 *type Model
 */
class type_M extends MY_Model
{
  //Basic Variables
  protected $_table_name = 'type';
  protected $_order_by = 'id';
  public $rules = array(
      'type' => array(
                'field' => 'type',
                'label' => 'type Name',
                'rules' => 'trim|required'
        ),
    'details' => array(
                'field' => 'details',
                'label' => 'type Description',
                'rules' => 'trim|required',

        ),
      );


  function __construct()
  {
    parent::__construct();
  }


public function type(){

  $query = $this->db->get('type');

  return $query->result();

}

  public function get_new(){
    $type = new stdClass();
    $type->type = '';
    $type->details = '';
    $type->status = '';
    return $type;
  }



}
