<?php
/**
 * Database Migration
 */
class Migration extends Admin_Controller
{

  public function __construct()
  {
    parent::__construct();
  }

  public function index()
  {
    $this->load->library('migration');
    if ($this->migration->version(2) === FALSE)
      {
        show_error($this->migration->error_string());
      }else{
        echo "Migration Work";
      }

  }


}


// pn: 01823 216935, khayer
