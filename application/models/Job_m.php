<?php
/**
 *job Model
 */
class Job_M extends MY_Model
{
  //Basic Variables
  protected $_table_name = 'jobs';
  protected $_order_by = 'id';
  public $rules = array(
      'title' => array(
                'field' => 'title',
                'label' => 'job title',
                'rules' => 'trim|required'
        ),
    'des' => array(
                'field' => 'des',
                'label' => 'job Description',
                'rules' => 'trim|required',

        ),
      );


  function __construct()
  {
    parent::__construct();
  }

// public function sub_job(){
//     // $this->db->select('cat_name','parent', 'cat_des','status');
//     $this->db->where('parent !=' , '0');
//     $query = $this->db->get('jobs');
//     return $query->result();
// }

public function job(){

  $query = $this->db->get('jobs');

  return $query->result();

}


public function active_job(){
   $this->db->where('status', '0');
  $query = $this->db->get('jobs');

  return $query->result();
}

public function syspend_job(){
   $this->db->where('status', '1');
  $query = $this->db->get('jobs');

  return $query->result();
}


 public function get_new(){
    $job = new stdClass();
    $job->title = '';
    $job->des = '';
    $job->employer_id = '';
    $job->c_date = '';
    $job->s_date = '';
    $job->status = '';
    $job->cat = '';
    $job->sub_cat = '';
    $job->selary = '';
    $job->location = '';
    $job->type = '';
    $job->review = '';
    $job->view = '';
    return $job;
  }

}
