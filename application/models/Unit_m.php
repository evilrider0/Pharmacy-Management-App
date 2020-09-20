<?php
/**
 *unit Model
 */
class Unit_M extends MY_Model
{
  //Basic Variables
  protected $_table_name = 'unit';
  protected $_order_by = 'id';
  public $rules = array(
      'title' => array(
                'field' => 'title',
                'label' => 'unit Name',
                'rules' => 'trim|required'
        ),
    'type' => array(
                'field' => 'type',
                'label' => 'unit type',
                'rules' => 'trim|required',

        ),
      );


  function __construct()
  {
    parent::__construct();
  }


public function unit(){

  $query = $this->db->get('unit');

  return $query->result();

}

  public function get_new(){
    $unit = new stdClass();
    $unit->title = '';
    $unit->details = '';
    $unit->status = '';
    return $unit;
  }



}
