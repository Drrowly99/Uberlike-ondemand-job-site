<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

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
    //$this->session->sess_destroy();
    //$this->session->unset_userdata('key');
    /*if (!$this->session->userdata('LOGIN')) 
    {
        redirect('login');
    }*/
}
    public function port()
    {
        $this->db->where('user_id', $this->session->userdata('user_key'));
        $query = $this->db->get('workforce');
        if ($query->num_rows() > 0){
            $call_work['data'] = $query->result();
            $this->load->view('pro/portfolio', $call_work);
        }
    }
    public function artisan()
    {
        $this->load->view('pro/w_profile');
    }
        public function artisans()
    {
         $this->load->view('form/artisanform');
    }
    public function track_worker()
    {

        $lat = $this->input->post('lat');
        $long = $this->input->post('long');
        $my_id = $this->input->post('my_id');

        $this->db->where('work_id', $my_id);
        $this->db->set('longi', $long);
        $this->db->set('lat', $lat);
        $this->db->update('workforce');
    }

    public function track_user()
    {
        $lat = $this->input->post('lat');
        $long = $this->input->post('long');
        $my_id = $this->input->post('job_id');
        // update user location
        $this->db->where('job_id', $my_id);
        $this->db->set('u_long', $long);
        $this->db->set('u_lat', $lat);
        $this->db->update('hire');
       echo $lat, ' ';
       echo $long, ' ';
       echo $my_id, ' ';
        
    }

    public function index()
    { 
        if ($this->session->userdata('key')) 
        {
            $this->db->where('w_key', $this->session->userdata('key'));
            $query = $this->db->get('workforce');
            $row = $query->row();
            if (isset($row))
            {
                $worker_p = $row->work_id;
                $rows['data'] = $this->Main_model->get_worker_details($worker_p);
            }
        }
        else
        {
            $this->load->view('workform');
        }
    }


    public function join()
    { 
            $this->load->library('form_validation');
            $this->form_validation->set_rules('fn', 'firstname', 'required');
            $this->form_validation->set_rules('ln', 'lastname', 'required');
            $this->form_validation->set_rules('email', 'email', 'required');
            $this->form_validation->set_rules('phone', 'phone', 'required');
            $this->form_validation->set_rules('acc', 'account number', 'required');
            $this->form_validation->set_rules('bank', 'bank', 'required');
            $this->form_validation->set_rules('holder', ' account name', 'required');
          if ($this->form_validation->run() == TRUE)
            {
                $net_id = bin2hex(openssl_random_pseudo_bytes(5));
                $array = array(
                    'suc'          => true,
                    'ref_id'       => $net_id
                    );
                $data = array(
                    'firstname' => $this->input->post('fn'),
                    'lastname' => $this->input->post('ln'),
                    'email'   => $this->input->post('email'),
                    'phone'    => $this->input->post('phone'),
                    'account_no'   => $this->input->post('acc'),
                    'bank'    => $this->input->post('bank'),
                    'acc_name'  => $this->input->post('holder'),
                    'net_id'   => $net_id
                );
                $this->session->set_userdata('net_id', $net_id);
                $insert = $this->db->insert('networkers', $data);
            }
            else
            {
                $array = array(
                'err'             => true,
                'fn_err'            => form_error('fn'),
                'ln_err'            => form_error('ln'),
                'email_err'         => form_error('email'),
                'phone_err'         => form_error('phone'),
                'acc_err'          => form_error('acc'),
                'bank_err'         => form_error('bank'),
                'holder_err'          => form_error('holder')
                ); 
            }
                        
        echo json_encode($array);
    }



    public function job_not()
    {
        $my_id = $this->input->post('my_id');
        $one = 1;
        $zero = 0;
        $array = array('work_id =' => $my_id, 'cancel <' => $one, 'completed <' => $one, 'decline <' => $one);
        $this->db->where($array);
        $query = $this->db->get('hire');

        foreach ($query->result_array() as $value)
        {
                    $this->db->where('work_id', $value['work_id']);
                    $result = $this->db->get('workforce'); 
                    $name = $result->row();
            echo 
            '
<div id="id01'.$value['id'].'" class="w3-modal  " style="display:none;z-index:100;">
<div class="w3-modal-content w3-round-large w3-card-4 w3-animate-zoom w3-purple w3-round-xlarge" style="max-width:600px; height:70vh;top:0;">
    <div class="w3-white w3-round-xlarge" style="position: relative;height: 50vh;">
  <div class="w3-text-red closex'.$value['id'].'" style="position: absolute;top: 5px;font-size: 20px; right: 10px; margin: 0 0 10px 0;">x</div>
  <!--END ONE SECTION BEGIN ANOTHER-->
  <div class="w3-container " style="position: relative;top:25px;">
    <div class=" w3-large">EVALUATE JOB</div>
    <div class="w3-white w3-small w3-card-5  w3-border-orange" style="height: 20vh; text-align: left; width:100%;border-left:3px solid purple;padding:4px 0 0 8px;">'.$value['description'].'</div>
  </div>
    <br><br>
  <!--END ONE SECTION BEGIN ANOTHER-->
  <div id="content'.$value['id'].'" class="w3-container" style="display: block;">
    <div class=" w3-large" style="position:relative; top:25px;">SET PRICE</div>
    <div id="holder_call'.$value['id'].'" class=" w3-center w3-white  w3-border-purple" style="position: relative;top:30px;display:none; height: 20vh; text-align: left; width:100%; border-left:1px solid ;border-top:1px solid ;">
          <div id="call'.$value['id'].'" class="w3-container w3-center w3-white w3-animate-left" style="position:relative; display: block; height: 100%;">
            <div class="w3-card-5 w3-center w3-small w3-hover-purple w3-text-black w3-round-large" style="height:40px; width:150px;position: absolute; top:43%; left:50%; margin:0 0 0 -75px;padding:12px 0 0 0;">Call Worker <i class="fa fa-phone" style="position:relative; left:10px; font-size:17px;"></i>
            </div>
          </div>
    </div>
    <div id="holder'.$value['id'].'" class=" w3-center w3-white  w3-border-white" style="position: relative;top:30px;display:block; height: 20vh; text-align: left; width:100%; border-left:1px solid ;border-top:1px solid ;">
    <div id="wait'.$value['id'].'" class="" style="display:none;position: relative;top:30%;">wait for '.$value['name'].'`s reply</div>
    <div id="" class="wants'.$value['id'].'" style="display:none;position: relative;top:30%;">'.$value['name'].' wants to pay you </div>
    <div id="" class="wants'.$value['id'].'" style="display:none;position: relative;top:30%;"> &#8358 <span  class="worker_price'.$value['id'].'"></span></div>
    <div id="price'.$value['id'].'" style="display:none;">
        
          <div id="" style="position: absolute; bottom:33px;left:7px; width:300px;height:0px;display:block;" class="w3-transparent" ><input type="tel" name="amount" class="w3-input w3-round-xlarge w3-border amount'.$value['id'].'" placeholder="input your Price" style="height: 40px; width:80%; margin: -15px 2px 0 0;outline: none; text-decoration: none; flex:10;"></div>
           <span style="position:absolute;bottom:19px; right:15px; margin:18px 0 0 0;" class=""><img id="send'.$value['id'].'" src="'.base_url().'asset/image/send_blue.png" class="w3-left w3-animate-zoom" style="margin: 0 0 0 15px; height:20px; width: 20px; display:block;"></span>
    </div>
  </div>
  </div>
  <!--END ONE SECTION BEGIN ANOTHER-->
  <div id="button'.$value['id'].'" class="w3-container " style="position:relative;top:-8px; display: none;z-index:1200;">
    <div class="w3-card w3-white" style="display:flex;margin:5px 10px 0 10px; padding:5px;z-index:1200;">
      <div id="accept'.$value['id'].'" style="flex:2;margin:0 2px 0 0;z-index:1200;" class="w3-btn w3-hover-greyscale w3-purple">Accept</div>
      <div id="decline'.$value['id'].'" style="flex:2;margin:0 0 0 2px;z-index:1200;" class="w3-btn w3-hover-red w3-white w3-border w3-border-red w3-text-grey">Decline</div>
    </div>
  </div>
  <!--END ONE SECTION BEGIN ANOTHER-->
</div>
</div>
</div>

      <div id="someone_hired'.$value['id'].'" class="w3-white w3-card w3-container w3-text-black" style="position: relative; height:100px; width:100%; margin:30px 0 5% 0;">
      <div>
        <p class="w3-small w3-" style="font-weight: 600;margin:5px 0 0 0;">'.$value['name'].' wants to hire you</p>
        <p class="w3-small  w3-text-grey" style="margin:2px 0 0 0;">Intends to pay &#8358 <strong class="w3-text-purple intentions'.$value['id'].'""> '.$value['amount'].'</strong></p>
      </div>
        <span style="margin:0 0 0 4px;" class="w3-small w3-text-grey">youll loose clients in : <b id="dem'.$value['id'].'"></b></span>
        <div id="content'.$value['id'].'" class="w3-text-black w3-white" style="height: 0px;width:100%;;margin:5px 0 5px 0 ; word-break: break-all; overflow-y: scroll;overflow-x:auto;">
              <p>'.$value['description'].'</p>
        </div>
        <div class="w3-card-2 w3-small w3-white w3-center " style="width:auto;padding: 5px 2px;z-index:10; height:44px; margin: 2px 25% 0 25%;">
          <span id="more'.$value['id'].'" class="w3-btn " style=" color:white;display: block; background-image: linear-gradient(to right, #9c27b0, #bf99c5);margin: 0 2px;">More</span>
        </div>
      </div>
';

echo 
            "
<script>
      var countDownDate".$value['id']." = new Date('".$value['end_time']."').getTime();
      var x".$value['id']." = setInterval(function() {
      var now".$value['id']." = new Date().getTime();                
      var distance".$value['id']." = countDownDate".$value['id']." - now".$value['id'].";
      var days = Math.floor(distance".$value['id']." / (1000 * 60 * 60 * 24));
      var hours = Math.floor((distance".$value['id']." % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
      var minutes = Math.floor((distance".$value['id']." % (1000 * 60 * 60)) / (1000 * 60));
      var seconds = Math.floor((distance".$value['id']." % (1000 * 60)) / 1000);
      document.getElementById('dem".$value['id']."').innerHTML =   minutes + ' Min ' + seconds + 'Sec ' + 'time';
     // If the count down is over, write some text 
      if (distance".$value['id']." < 0) {
        //alert(distance".$value['id'].");
            clearInterval(x".$value['id'].");
            document.getElementById('dem".$value['id']."').innerHTML = '00:00;
            //return confirm('divine did not accept your bid, do you want to give him more time ?') ;
            return;
      }
  }, 1000)
</script>


<script>
    $('.closex".$value['id']."').click(function(){
        $('#id01".$value['id']."').hide();
    });
 $('#more".$value['id']."').click(function(){
    $('#id01".$value['id']."').show();
 })

//HANDLE SCROLL BAR input
$('#negotiate".$value['id']."').click(function(){
    $('#content".$value['id']."".$value['id']."').show();
})


//WHEN YOU CLICK SEN WHAT HAPPENS
$('#send".$value['id']."').click(function(){
var inp = $('.amount".$value['id']."').val();
var job = '".$value['job_id']."';
    $.ajax({
        url:  '".base_url()."Main/send',
        method: 'POST',
        data: {inp:inp, job:job},
            success: function(data)
            {
                //HIDE PRICE SHOW WAIT
              $('#wait".$value['id']."').show();
              $('#price".$value['id']."').hide();


            }
    });
})
</script>


<script>
// SECOND NEGOTIATION
// check if he is negotiating
var negotiating = setInterval(function() {
var track= '".$value['job_id']."';
$.ajax({

    url:  '".base_url()."Welcome/check_nego',
    method: 'POST',
    dataType: 'json',
    data: {track:track},
    success: function(data)
    {
    $('.worker_price".$value['id']."').text(data.worker_price) ;  

    if(data.worker_t == 1 && data.user_t == 1 && data.accept == 0 && data.decline == 0)
    {
        $('#wait".$value['id']."').hide();
        $('.wants".$value['id']."').show();
        $('#button".$value['id']."').show();
               $('#holder_call".$value['id']."').hide();

    } 
//ACCEPT
    if(data.accept == 1)
    {
       $('#holder".$value['id']."').hide();
       $('#holder_call".$value['id']."').show();
       $('#button".$value['id']."').hide();
    } 
//DECLINE
    else if( data.decline == 1)
    {
       $('#holder".$value['id']."').hide();
       $('#button".$value['id']."').hide();
       alert('you choose to loose this job, you will be redirected back');
       setTimeout(function(){
            location.reload();
       }, 5000)
    }
    else{

        if(data.worker_t == 1 && data.user_t == 0)
    {
        $('#price".$value['id']."').hide();
        $('#wait".$value['id']."').show();
  
    } 

        if(data.worker_t == 0 && data.user_t == 1)
    {
        $('#wait".$value['id']."').hide();
        $('#price".$value['id']."').show();
        $('.wants".$value['id']."').show();
    }

        if(data.worker_t == 0 && data.user_t == 0)
    {

        $('#price".$value['id']."').show();
        
    } 
    //END ELSE
  }

    }
});
}, 1000);
        $('#accept".$value['id']."').click(function(){
              var amount = '".$value['amount']."';
              var track= '".$value['job_id']."';
              alert(amount);
             $.ajax({
                url:  '".base_url()."Main/accept',
                method: 'POST',
                data: {track:track, amount:amount},
                beforeSend: function(){
                  alert('accept');
                },
                success: function(data)
                {
                  alert('accept');
                }
            });
        });
        $('#decline".$value['id']."').click(function(){
              var track= '".$value['job_id']."';
              alert(amount);
             $.ajax({
                url:  '".base_url()."Main/decline',
                method: 'POST',
                data: {track:track},
                beforeSend: function(){
                  alert('decline');
                },
                success: function(data)
                {
                  
                }
            });
        });
</script>
            ";
        }

    }


    public function accept()
    {
        $job = $this->input->post('track');
        $amount = $this->input->post('amount');
        $cut = $amount * 0.10;
        $data = array(
            'cut' => $cut
        );
        $this->db->where('job_id', $job);
        $this->db->set('accept', 'accept+1', FALSE);
        $this->db->set('decline', '0', FALSE);
        $this->db->set('cancel', '0', FALSE);
        $this->db->update('hire', $data);  
    
        
        
    }
    public function decline()
    {
        $job = $this->input->post('track');
        //$this->session->unset_userdata('lastpage');
        $this->db->where('job_id', $job);
        $this->db->set('accept', '0', FALSE);
        $this->db->set('decline', 'decline+1', FALSE);
        $this->db->set('cancel', '0', FALSE);
        $this->session->unset_tempdata('workker');
        $this->session->unset_tempdata('jobber');
        $this->db->update('hire'); 
          
    }
    public function send()
    {
        //the tempdata here is going yo be unset anytime a job is canceled orthe job is completed
        $one = '1';
        $job_id = $this->input->post('job');
        $amount = $this->input->post('inp');
        $this->session->set_tempdata('new_amount_worker', $amount, 3600);
        $data = array(
            'amount' => $amount
        );
        $this->db->where('job_id', $job_id);
        $this->db->set('w_type', 'w_type+1', FALSE);
        $this->db->update('hire', $data);        
        echo "string";   
    }

    public function check_nego()
    {
        $track = $this->input->post('track');
        $this->db->where('job_id', $track);
        $query = $this->db->get('hire');
        $c_n = $query->row();
        if ( $c_n->negotiate == 1) {
            $this->session->unset_userdata('small_ace', $track);
        }
    $array = array(
        'nego'       => $c_n->negotiate,
        'worker_t'           => $c_n->w_type ,
        'user_t'           => $c_n->u_type ,
        'worker_price'           => $c_n->amount ,
        'decline'           => $c_n->decline ,
        'accept'           => $c_n->accept  
        ); 

        echo json_encode($array);
         
        
    }
    public function bargain()
    {
        /*
        $decline = $this->input->post('job');
        $this->db->where('job_id', $decline);
        $this->db->set('decline', 'decline+1', FALSE);
        $this->db->update('hire');   */
    }
    public function response_display()
    {
    
        $track = $this->input->post('track');
        $this->db->where('job_id', $track);
        $query = $this->db->get('hire');
        $row = $query->row();
        if (isset($row))
        {
            if (!$this->session->userdata('small_ace')) {
               
            
                $accept = $row->accept;
                $decline = $row->decline;
                $amount = $row->amount;
                if ($accept > 0 AND $decline < 1) {
                    echo "accepted";
                    $this->session->set_userdata('small_ace', $track);
                }
                if ($accept < 1 AND $decline > 0 ) {
                    echo "rejected";
                }
                if ($accept < 1 AND $decline < 1 ) {
                    echo "wait";
                }
            }
        }     
    }

    // ||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||MOSTLY WORK CODES||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||

    public function work_profile()
    {
        $this->db->where('user_id', $this->session->userdata('user_key'));
        $query = $this->db->get('workforce');
        if ($query->num_rows() > 0){
            $cal_work['data'] = $query->result();
         $this->load->view('pro/w_profile', $cal_work);

        }else{
            show_404();
            echo 'MADESTO GOMEZ'
        }

    }

    public function online()
    {
        $this->db->where('user_id', $this->session->userdata('user_key'));
        $this->db->set('status', '1');
        $this->db->update('workforce');
        $this->session->set_tempdata('status', 'online', 5400);
    }
    public function offline()
    {   
        $this->db->where('user_id', $this->session->userdata('user_key'));
        $this->db->set('status', '0');
        $this->db->update('workforce');        
        $this->session->unset_tempdata('status');
        
    }
    public function time_him()
    {
        if(!$this->session->tempdata('status'))
        {
            $this->db->where('user_id', $this->session->userdata('user_key'));
            $this->db->set('status', '0');
            $this->db->update('workforce');        
            $this->session->unset_tempdata('status');
                $data = array(
                    'offline' => true
                );
        }
        else
        {
            $data = array(
                    'online' => true
                );
        }
        echo json_encode($data);
        
    }
    public function hire_get()
    { 
        $worker = $this->input->post('my_id');  
        $job = $this->Main_model->get_job($worker);
        $decline = $this->Main_model->get_decline($worker);
        $complete = $this->Main_model->get_completed($worker);
        $rate = $this->Main_model->get_rating($worker);
        foreach ($rate->result_array() as $row) 
            {
                $rating = number_format((float)$row['w_rating'], 2, '.', '');
            }
        
        $array = array(
            'job'           => $job ,
            'decline'           => $decline,
            'complete'           => $complete,
            'rating'           => $rating
            
            ); 

            echo json_encode($array);
    }
            
       
    // ||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||MOSTLY NETWORK CODES|||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||





// MOSTLY NETWORK CODES
    public function network_log()
    {

        $this->load->view('pro/network_log');
    }
// redirect to network
    public function network($net = NULL)
    { 
        $ref['refferal'] = $net; 
        $this->load->view('pro/network', $ref);
    }
// END   
    public function total_hire()
    {
        $ref = $this->input->post('ref_id');
        $data = $this->Main_model->total_hire($ref);
        if($data == ''){
            echo "0";
        }else{
            echo $data;
        }

    }
    public function get_amount()
    {
        $ref = $this->input->post('ref_id');
        $data = $this->Main_model->get_amount($ref);
        if($data == ''){
            echo "0";
        }else{
            echo $data;
        }
       
    }
    public function get_hire()
    {
        $ref = $this->input->post('ref_id');
        $data = $this->Main_model->get_hire($ref);
        if($data == ''){
            echo "0";
        }else{
            echo $data;
        }  
    }
    public function referral()
    {
        $this->db->where('referrer', $this->input->post('ref_id'));
        $query = $this->db->get('workforce');

            foreach ($query->result() as $value)
            {
                echo'

             <div class="w3-white  w3-center w3-text-purple w3-small w3-card-1 w3-round-xlarge" style="height: 36px; width:400px ; margin:10px auto auto auto; display: flex;padding: 7px;">
          <div style="flex:2;" class="">'.$value->firstname.'</div>
          <div style="flex:2;" class="">'.$value->lastname.'</div>
          <div class="w3-text-grey" style="flex:2;" class="">'.$value->job.'</div>
          <div style="flex:2;" class="">'.$value->contact.'</div>
        </div>
            ';
                    
                   
            }
        
    }
// END
}

?>