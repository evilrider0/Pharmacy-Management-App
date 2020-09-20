<?php
class Upload extends Admin_Controller
{

	public function __construct ()
	{
		parent::__construct();
		// $this->load->model('course_m');
	}

	public function index ()
	{
	header('content-type: application/javascript');
	
	$allowed = ['mp4', 'png', 'jpg'];
	$processed = [];
	// $up_dir = site_url('images');

	// print_r($_FILES['files']);
	// die();


	foreach ($_FILES['files']['name'] as $key => $name) {
		if ($_FILES['files']['error'][$key] === 0) {
			$temp = $_FILES['files']['tmp_name'][$key];
			$ext = explode('.', $name);
			$ext = strtolower(end($ext));

			$file = uniqid('',true) . time() . '.' . $ext;

			if (in_array($ext, $allowed)) {
				move_uploaded_file($temp, 'upload/'.$file);
				$processed[] = array(
					'name' => $name,
					'file' => $file,
					'uploaded' => true
				); 
			}else{
				$processed[] = array(
					'name' => $name,
					'uploaded' => false
				); 
			}
			
		}


	}
		echo json_encode($processed);	
	}

}
