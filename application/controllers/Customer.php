<?php

/**
 * User Controller
 */
class Customer extends Frontend_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('user_m');
  }

  public function index()
  {
    $users = $this->user_m->get();
    // var_dump($users);
  }



  // employer REGISTRATION
  public function registration(){
    $this->load->model('user_m');
    $this->load->library('session');
    $this->load->helper('form');
    $this->load->library('form_validation');
    $this->load->library('email');

      // Set up the form
    $rules = $this->user_m->rules_admin;
    $id || $rules['password']['rules'] .= '|required';
      $this->form_validation->set_rules($rules);

    // Process the form
    if ($this->form_validation->run() == TRUE) {
        $data = $this->user_m->array_from_post(array('name', 'email', 'phone','type','status', 'password'));
        $data['password'] = $this->user_m->hash($data['password']);
        $data['address'] = '';
        $data['type'] = '3';
        $data['status'] = '1';
        $this->user_m->save($data, $id);

        // Confirmation Email
        $this->email->from('no-reply@auroratec.net', 'System Response');
        $this->email->to($data['email']);
        // $this->email->cc('another@another-example.com');
        // $this->email->bcc('them@their-example.com');

        $this->email->subject('Aurora Technologies Acount Registration Confirmation');
        $this->email->message('Dear '.$data['name'].', <br> Your Account Registration successfull. <br>Your User ID: '.$data['email'].'<br>Password: '.$this->input->post('email').'<br><br>Please Do not Replay to this email.');

        $this->email->send();

        // redirect
        redirect('employer/success');


    }


    //load view
    $this->data['subview'] = 'admin/user/registration';
    $this->load->view('admin/_layout_modal', $this->data);
  }


    public function _unique_email($str)
    {
      // Do NOT validate if email already exists
      // UNLESS it's the email for the current user

      // $id =  $this->uri->segment(4);
      $this->db->where('email', $this->input->post('email'));
      // if($id )
      //   {
      //     $this->db->where('id !=', $id);
      //   }
      $user = $this->user_m->get();

      if (count($user)) {
        $this->form_validation->set_message('_unique_email', '%s has been already used');
        return FALSE;
      }

      return TRUE;
    }

    public function success(){
      $this->data['subview'] = 'admin/user/success';
          $this->load->view('admin/_layout_modal', $this->data);

    }

   public function mail(){
      $this->load->library('email');
      $config = array(
        'protocol'  => 'smtp',
        'smtp_host' => '',
        'smtp_port' => 465,
        'smtp_user' => 'auroratecbd@gmail.com',
        'smtp_pass' => 'Iloveumaa1',
        'mailtype' => 'html',
        'charset' => 'iso-8859-1',
        'wordwrap' => TRUE
      );
      // ['protocol'] = 'smtp';
      // $config['mailpath'] = '/usr/sbin/sendmail';
      // $config['charset'] = 'iso-8859-1';
      // $config['wordwrap'] = TRUE;

      $this->email->initialize($config);

      $this->email->from('auroratecbd@gmail.com', 'Aurora Technologies');
      $this->email->to('evilrider555@gmail.com');
      // $this->email->cc('another@another-example.com');
      // $this->email->bcc('them@their-example.com');

      $this->email->subject('Email Test');
      $this->email->message('Testing the email class.');

      $result = $this->email->send();

      if ($result) {
        echo 'success';
      } else {
        echo 'error';
        $this->email->print_debugger();
      }

       }

}
