<?php
/**
 *category Model
 */
class Category_M extends MY_Model
{
  //Basic Variables
  protected $_table_name = 'category';
  protected $_order_by = 'id';
  public $rules = array(
      'cat_name' => array(
                'field' => 'cat_name',
                'label' => 'category Name',
                'rules' => 'trim|required'
        ),
    'cat_des' => array(
                'field' => 'cat_des',
                'label' => 'category Description',
                'rules' => 'trim|required',

        ),
      );


  function __construct()
  {
    parent::__construct();
  }

public function sub_category(){
    // $this->db->select('cat_name','parent', 'cat_des','status');
    $this->db->where('parent !=' , '0');
    $query = $this->db->get('category');
    return $query->result();
}

public function category(){

  $this->db->where('parent', '0');
  $query = $this->db->get('category');

  return $query->result();

}

  public function get_new(){
    $category = new stdClass();
    $category->cat_name = '';
    $category->cat_des = '';
    $category->parent = '';
    $category->photo = '';
    $category->status = '';
    return $category;
  }


  //parent category array_from_post
  public function parent(){
    $this->db->select('id, cat_name');
    $this->db->where('parent','0');
    $this->db->order_by("cat_name", "asc");
    $team = $this->db->get('category');



    $array = array(
      0 => 'Please Select'
    );
    if (count($team->result())) {
      foreach ($team->result() as $loc) {
        $array[$loc->id] = $loc->cat_name;
      }
    }
    return $array;
  }

  public function parent_by_id($id = NULL){
 		$this->db->where('parent', $id);

 		$parent = $this->db->get('category');

		foreach ($parent->result() as $row)
		{
		    echo $row->parent;
		}
  }

}
