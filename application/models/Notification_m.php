<?php
/**
 *notification Model
 */
class Notification_M extends MY_Model
{
  //Basic Variables
  protected $_table_name = 'notifications';
  protected $_notification_by = 'id';
  public $rules = array(
      'token' => array(
                'field' => 'token',
                'label' => 'token',
                'rules' => 'trim|required'
        ),
    'customer_id' => array(
                'field' => 'customer_id',
                'label' => 'customer_id',
                'rules' => 'trim|required',

        ),
    'type' => array(
                'field' => 'type',
                'label' => 'Type',
                'rules' => 'trim|required',

        )
      );


  function __construct()
  {
    parent::__construct();
  }



  public function get_new(){
    $notification = new stdClass();
    $notification->token = '';
    $notification->customer_id = '';
    $notification->n_des = '';
    $notification->type = '';
    $notification->date = '';
    $notification->status = '';
    return $notification;
  }


  //parent notification array_from_post
  // 

}
