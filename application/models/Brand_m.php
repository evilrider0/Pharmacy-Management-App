<?php
/**
 *brand Model
 */
class brand_M extends MY_Model
{
  //Basic Variables
  protected $_table_name = 'brand';
  protected $_order_by = 'id';
  public $rules = array(
      'name' => array(
                'field' => 'name',
                'label' => 'brand Name',
                'rules' => 'trim|required'
        ),
    'details' => array(
                'field' => 'details',
                'label' => 'brand Description',
                'rules' => 'trim|required',

        ),
      );


  function __construct()
  {
    parent::__construct();
  }


public function brand(){

  $query = $this->db->get('brand');

  return $query->result();

}

  public function get_new(){
    $brand = new stdClass();
    $brand->name = '';
    $brand->details = '';
    $brand->status = '';
    return $brand;
  }



}
