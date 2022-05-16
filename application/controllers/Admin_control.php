<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_control extends CI_Controller {

public function __construct()
{
    parent::__construct();
    $this->load->database();
    $this->load->helper('text');
    $this->load->helper(array('form'));
    $this->load->library('session');
    $this->load->library('user_agent');
    $this->load->helper('url');
    $this->load->model('Main_model');
    $this->load->model('Admin_model');
    date_default_timezone_set('Africa/Lagos');
    $this->session->unset_userdata('key');
    //$this->session->unset_userdata('key');
    /*if (!$this->session->userdata('LOGIN')) 
    {
        redirect('login');
    }*/
}
	public function start()
{
	 $this->load->model('Main_model');
	 $u = $this->session->userdata('email');
	   $query['user'] = $this->Main_model->call_userdata($u);
	   $query['work'] = $this->Main_model->call_workforce($u);
	   $query['net'] = $this->Main_model->call_networkers($u);

	   $this->load->view('pro/admin', $query);
}
    public function panel()
{
       $this->load->view('pro/admin_c');
}



    public function call_functions()
{
        $this->load->model('Admin_model');
       $s_n_h = $this->Admin_model->see_new_hires();
       $no_success = $this->Admin_model->unsuccessful();
       $owing = $this->Admin_model->owing_dadi();
       $count_workers = $this->Admin_model->count_workers();
       $all_workers = $this->Admin_model->all_workers();
        foreach ($all_workers  as $value) { ?>
      
          <div class="w3-transparent" style="position: relative;top:5px;">

            <div class="w3-round-large w3-small w3-white w3-text-grey w3-container w3-row" style="position: relative;height: 70px; width:100%;top:5px; margin:10px 0;padding:5px 5px;">
              <div class="w3-col s3 w3-text-black" style="font-weight: 500">Divine</div>
              <div class="w3-col s9" style="font-weight: 500"><?php echo $value->work_id ?></div>
              <div class="w3-col s3" style="font-weight: 500">electrician</div>
              <div class="w3-col s9" style="font-weight: 500">500 <b class="w3-text-black">NGN</b></div>
              <div class="w3-col s4" style="font-weight: 500">element493@gmail.com</div>
              <div class="w3-light-grey w3-round-xlarge w3" style="position: absolute;right:0;bottom: -10px;padding:2px 4px 2px 4px;"><div class="w3-blue w3-round-xlarge w3" style="position: relative;right:0;bottom: -1px;padding:5px 18px;">BAN</div></div>
            </div>
    

     
           
     <?php }
     
}



	public function epage()
{

			$this->load->view('pro/email_page');
}
	public function mail()
{
$this->load->library('email');
$config['protocol'] = 'sendmail';
$config['mailpath'] = '/usr/sbin/sendmail';
$config['charset'] = 'iso-8859-1';
$config['wordwrap'] = TRUE;
$config['priority'] = 1;
$config['mailtype'] = 'html';

$this->email->initialize($config);
		$body = $this->load->view('pro/email_page');
		$d_base = $this->input->post('database');
      	$query = $this->db->query("SELECT * FROM `$networkers`");
   
      foreach ($query->result() as $row)
      {
       $email = $row->email;
       $name = $row->name;
    $this->email->clear();
    $this->email->from('dadi@dadi.com.ng', 'DADI');
    $this->email->to($email);
    $this->email->subject('DADI AGENTS SECRET' );
    $this->email->message($body);

    #$this->email->send();

    if ( $this->email->send()) {
     
        echo 'mail sent';
    }else{
      	echo $this->email->print_debugger();
    
        echo 'sorry';
    }
       
    }
}


}

	
    