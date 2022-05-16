<?php
defined('BASEPATH') OR exit('No direct scrip t access allowed');

class Diaspora extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	public function __construct()
{
     header('Access-Control-Allow-Origin: *');
    header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
    parent::__construct();
      $this->load->database();
       $this->load->helper('text');
       $this->load->helper(array('form'));
       $this->load->library('session');
       $this->load->library('user_agent');
       $this->load->helper('url');
       $this->load->helper('security');
       $this->load->model('Main_model');
       $this->load->helper(array('email'));
       $this->load->library(array('email'));
       date_default_timezone_set('Africa/Lagos');

    //$this->session->unset_userdata('key');
    //$this->session->sess_destroy();
    //$this->session->unset_userdata('key');
    if (!$this->session->tempdata('country'))
    {
        $this->session->set_userdata('country', 'NGN');
        $this->session->set_tempdata('country', 'NGN', 900);

        $this->db->where('c_to_currency', $this->session->userdata('country'));
        $query = $this->db->get('rates');
        $row = $query->row();
        $this->session->set_userdata('rate', $row->convert_to);

    }
}


/*___________________________________
|
|   USER PRICE DASHBOARD FOR DIASPORA
|
|_____________________________________
*/
    public function dash_diaspora($ref = NULL)
{
    if($this->session->userdata('currency') == 'NGN' || $this->session->userdata('currency') == 'GHS'){
        $this->dash();
    }else{
            $id = $this->session->userdata('user_id');
            $this->db->where('user_id', $id);
            $query = $this->db->get('user');
            if($query->num_rows() > 0){
                $row['data'] = $query->result();
                
                $this->load->view('price_foreign', $row);
                
            }else{
                $this->load->view('home');
                $this->load->view('login/login');
                $this->load->view('login/register');
               
            }
    }
}
		public function index($ref = NULL)
	{
    
        $this->load->view('home');
        $this->load->view('login/login');
     	$this->load->view('login/register');
	}
        public function forgot($ref = NULL)
    {
    
        $this->load->view('login/forgot');
    }
       
        public function crazy_rate($ref = NULL)
    {
    
        $this->db->where('c_from_currency', $this->session->userdata('country'));
        $this->db->where('c_to_currency', $this->session->userdata('currency'));
        $query = $this->db->get('rates');
        $row = $query->row();
        $this->session->set_userdata('rate', $row->convert_to);
            $array = array(
                'status'             => 'success',
                'new_rate'            => $row->convert_to,         
                ); 
                        
        echo json_encode($array);
    }

        public function set_country($ref = NULL)
    { 
        $new_country = $this->input->post('new_country');
        $this->session->set_userdata('country', $new_country);
        $this->db->where('c_from_currency', $this->session->userdata('country'));
        $this->db->where('c_to_currency', $this->session->userdata('currency'));
        $query = $this->db->get('rates');
        $row = $query->row();
        $this->session->set_userdata('rate', $row->convert_to);
                    $array = array(
                'status'             => 'success',
                'new_rate'            => $row->convert_to,         
                ); 
                        
        echo json_encode($array);
    }


		public function dash($ref = NULL)
	{
        $id = $this->session->userdata('user_id');
        $this->db->where('user_id', $id);
        $query = $this->db->get('user');
        if($query->num_rows() > 0){
            $row['data'] = $query->result();
            
            $this->load->view('price', $row);
            
        }else{
            $this->load->view('home');
            $this->load->view('login/login');
            $this->load->view('login/register');
           
        }
	}

    // on call of link remit, run this code 
    // this code goes to the specific page based on completed pending etc
    
    
		public function code($ref = NULL)
	{
            
            $dash = '-';
            $num = substr(str_shuffle("0123456789"), 0, 3);
            $alpha = substr(str_shuffle("ABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, 4);
            $s_alpha = substr(str_shuffle("abcdefghijklmnopqrstvwxyz"), 0, 1);
            $first = "{$num}{$dash}{$alpha}{$s_alpha}";
            echo $first;      
                
                       
	}

    public function receive($ref = NULL)
  {
        $rate = $this->Main_model->get_rate();
        $fee = $this->get_fee($this->input->post('amount'));
        $fee = $this->get_fee($this->input->post('amount'));
            $dash = '-';
            $num = substr(str_shuffle("0123456789"), 0, 3);
            $alpha = substr(str_shuffle("ABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, 4);
            $s_alpha = substr(str_shuffle("abcdefghijklmnopqrstvwxyz"), 0, 1);
            $pay_code = "{$num}{$dash}{$alpha}{$s_alpha}";
            
                $req = bin2hex(openssl_random_pseudo_bytes(5));
                $data = array(
                    'request_date'            => date("Y-m-d H:i:s"),
                    'amount'                  => $this->input->post('amount'),
                    'user_id'                 => $_SESSION['user_id'],
                    'pay_code'                => $pay_code,
                    'request_id'              => $req,
                    'fee'                     => $fee,
                    'foreign_country'         => $this->session->userdata('country'),
                    'local_country'           => $this->session->userdata('local_currency'),
                    'amount_ngn'              => $rate * $this->input->post('amount'),
                    'rate'                    => $rate,
                    'link_code'               => 'http://localhost/cashout/zelleo/'.$req.''
          
                );
                $this->session->set_userdata('request_pending', TRUE);
                $insert = $this->db->insert('request', $data);
               $array = array(
                'data'             => true,
                'amount'            => $this->input->post('amount'),
                'amount_ngn'            => $rate * $this->input->post('amount'),
                'request_id'            => $req,
                'link_code'            => 'http://localhost/cashout/zelleo/'.$req.'',
                
                ); 
                        
        echo json_encode($array);
         
         
  }

        public function get_fee($amount_)
    {

         $amount = $amount_;
        //     if($amount <= 50){
        //         $fee = 2;
        //     }
        //     if($amount <= 200 AND $amount >= 50 ){
        //         $fee = 3;
        //     }
        //     if($amount <= 600 AND $amount >= 200 ){
        //         $fee = 6;
        //     }
        //     if($amount <= 1000 AND $amount >= 600 ){
        //         $fee = 10;
        //     }
            $fee = $amount * 0.015;
         return $fee;
    }




    public function cancel_link()
    {
        $id = $this->input->post('request_id');
        $this->db->where('request_id', $id);
        $this->db->set('status', 'canceled');
        $cancel = $this->db->update('request');    
        if($cancel){
            echo 'Link Disabled';
        }else{
            echo 'Canceled';
        }
       
    }
      public function check_cancel()
    {
        $id = $this->input->post('request_id');
        $this->db->where('request_id', $id);
        $query = $this->db->get('request');    
        $rows = $query->row();
          
       
          if($rows->status == "pending"){
            echo 'Disable Link';
        }else{
            echo 'Link Deactivated';
        }
       
    }
    
        public function refresh_complete()
    {
        $id = $this->input->post('request_id');
        $user_id = $this->input->post('user');
        $this->db->where('request_id', $id);
        $this->db->where('user_id', $user_id);
        $query = $this->db->get('request');
        $row = $query->row();
        if (isset($row))
        {
                        
    
            if($row->status === "completed" ){
                $array = array(
                    'status'          => 'completed'
                    ); 
                }
            else{
                $array = array(
                    'status'          => 'no_complete'
                    ); 
            }
                echo json_encode($array);
        }
    }

       public function fetch_balance()
    {

        $user_id = $this->input->post('user');
        $this->db->where('user_id', $user_id);
        $query = $this->db->get('user');
        $row = $query->row();
        if (isset($row))
        {
            $json = array(
                'status' => 'success',
                'data' => $row
            );
            echo json_encode($json);
        }
    }

        public function history()
    {
       
        // $this->db->join('stripe', 'stripe.receiver_id = request.user_id');
        // $this->db->order_by("request_date", "ASC");
        // $this->db->limit("5");

        // $this->db->join('transactions', 'transactions.user_id = request.user_id');
        // $query = $this->db->get();
            $this->load->library('table');
            $this->db->select('stripe_id, amount, amount_ngn, table_type, stripe_date, rate, sender_name, foreign_country, local_country');
            $this->db->from('stripe');
            $this->db->where('receiver_id', $this->session->userdata('user_id'));
            
        $sub2 = $this->db->get_compiled_select();

            $this->db->select('request_id, amount, amount_ngn, table_type, request_date, rate, status, foreign_country, local_country');
            $this->db->from('request');
            $this->db->where('user_id', $this->session->userdata('user_id'));
    
        $sub1 = $this->db->get_compiled_select();

            $this->db->select('trans_id, trans_acc_no, trans_amount, table_type, trans_date, fee, trans_bank_name, status, local_country');
            $this->db->from('transactions');
            $this->db->where('user_id', $this->session->userdata('user_id'));
            $this->db->order_by("request_date", "desc");
        $sub3 = $this->db->get_compiled_select();

        $final = $this->db->query("$sub1 UNION $sub2 UNION $sub3" );
        $query = $final->result_array();
        if (isset($query))
        {
            $json = array(
                'status' => 'success',
                'data' => $query
            );
            echo json_encode($json);
        }
  
    }


       public function stripe()
    {
        $id = $this->input->post('req_id');
       
        $this->db->where('request_id', $id);
        $query = $this->db->get('request');
        $row = $query->row();
        if (isset($row))
        {
                $data = array(
                    'receiver_id' => $row->user_id,
                    'pay_code' => $row->pay_code,
                    'sender_id'   => bin2hex(openssl_random_pseudo_bytes(5)),
                    'amount'    => $row->amount,
                    'rate'    => $row->rate,
                    'status'    => 'paid',
                    'stripe_date'    => date('Y-m-d H:s:i'),
                    'fee'    => $row->fee,
                    'stripe_id'    => $row->request_id //STRIPE ID IS SAME AS REQUEST ID


                );
            $insert = $this->db->insert('stripe', $data);
            if($insert){
             
                $this->db->where('request_id', $id);
                $this->db->set('status', 'paid');
                $this->db->update('request');  
            }
            echo 'success';
            
              
        }
       
    }



}
