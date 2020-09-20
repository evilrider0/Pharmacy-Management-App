<?php
/**
 *invoice Model
 */
class Invoice_M extends MY_Model
{
  //Basic Variables
  protected $_table_name = 'invoice';
  protected $_invoice_by = 'id';
  public $rules = array(
    'order_id' => array(
                'field' => 'order_id',
                'label' => 'user_id',
                'rules' => 'trim|required',

        ),
  );

  function __construct()
  {
    parent::__construct();
  }



  public function get_new(){
    $invoice = new stdClass();
    $invoice->product = '';
    $invoice->order_id = '';
    $invoice->d_charge = '';
    $invoice->total = '';
    $invoice->date = '';
    $invoice->sub_total = '';
    $invoice->vat = '';
    return $invoice;
  }


  //parent invoice array_from_post
  //

}
