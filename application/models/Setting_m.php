<?php
/**
 *setting Model
 */
class Setting_M extends MY_Model
{
  //Basic Variables
  protected $_table_name = 'setting';
  protected $_order_by = 'id';
  public $rules = array(
      's_logo' => array(
                'field' => 'p_code',
                'label' => 'setting Code',
                'rules' => 'trim|required'
        ),


      );


  function __construct()
  {
    parent::__construct();
  }


  public function get_new(){
    $setting = new stdClass();
    $setting->s_logo = '';
    $setting->s_title = '';
    $setting->s_copy = '';
    $setting->s_address = '';
    return $setting;
  }




}
