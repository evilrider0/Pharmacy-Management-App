<?php
/**
 *review Model
 */
class Review_M extends MY_Model
{
  //Basic Variables
  protected $_table_name = 'reviews';
  protected $_order_by = 'id';
  public $rules = array(
      'r_des' => array(
                'field' => 'r_des',
                'label' => 'Review Description',
                'rules' => 'trim|required'
        )
      );


  function __construct()
  {
    parent::__construct();
  }



  public function get_new(){
    $review = new stdClass();
    $review->review = '';
    $review->r_des = '';
    $review->token = '';
    $review->service_id = '';
    $review->status = '';
    return $review;
  }

}
