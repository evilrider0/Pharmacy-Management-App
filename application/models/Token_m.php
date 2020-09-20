<?php
/**
 *token Model
 */
class Token_M extends MY_Model
{
  //Basic Variables
  protected $_table_name = 'tokens';
  protected $_order_by = 'id';
  public $rules = array(
      'token' => array(
                'field' => 'token',
                'label' => 'Token',
                'rules' => 'trim|required'
        ),
    'customer_id' => array(
                'field' => 'customer_id',
                'label' => 'Customer ID',
                'rules' => 'trim|required',

        ),
    'service_id' => array(
                'field' => 'service_id',
                'label' => 'Service ID',
                'rules' => 'trim|required',

        )
      );


  function __construct()
  {
    parent::__construct();
  }

public function token(){

  $this->db->where('parent', '0');
  $query = $this->db->get('tokens');

  return $query->result();

}

  public function get_new(){
    $token = new stdClass();
    $token->token = '';
    $token->customer_id = '';
    $token->service_id = '';
    $token->t_date = '';
    $token->note = '';
    $token->status = '';
    return $token;
  }


  //parent token array_from_post
  // 

}
