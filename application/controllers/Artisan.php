<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Artisan extends CI_Controller {

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

    public function start()
    {
        $this->load->view('form/artisanform');
    }
    public function artisan()
    {
        $this->load->view('pro/w_profile');
    }
    public function check()
    {
        if($this->session->userdata('user')){
            echo "user_set";
        }else{
            echo "user_notset";
        }
    }

    public function userz()
    {
        //This takes hire details as description, phone number, and name and creates an account for the user.
        if (!$this->session->userdata('user')) {
          $userid = bin2hex(openssl_random_pseudo_bytes(5));
          $this->session->set_userdata('user', $userid);
        }
        $name = $this->input->post('name');
        $contact = $this->input->post('phone');
        $ip = $this->input->ip_address();
        $bro = $this->agent->browser();
        $this->db->where('user_id', $this->session->userdata('user'));
          $query = $this->db->get('users');
          if($query->num_rows() < 1){
            $data = $this->Main_model->insert_user($name, $contact, $ip, $bro); 
           }
        
    }
   
}

?>