<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Call_manifest extends CI_Controller {

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
    date_default_timezone_set('Africa/Lagos');
    $this->session->unset_userdata('key');
    //$this->session->unset_userdata('key');
    /*if (!$this->session->userdata('LOGIN')) 
    {
        redirect('login');
    }*/
}

    public function manifest()
    {
    $this->load->view('manifest.json');
    }

    
// END
}

?>