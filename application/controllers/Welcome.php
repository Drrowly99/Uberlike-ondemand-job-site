<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

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
    parent::__construct();
    $this->load->database();
    $this->load->library('session');
	$this->load->library('user_agent');
    $this->load->helper('url');
    $this->load->model('Main_model');
    date_default_timezone_set('Africa/Lagos');
	//$this->session->sess_destroy();
    /*if (!$this->session->userdata('LOGIN')) 
    {
        redirect('login');
    }*/
}
	public function index($data = null)
	{ 
 //$this->session->set_userdata('user', '3a418fd91d');

		//GET THE USE REFERRAL id
		//sttore it so as to determine the time the user who isnt registered, logged in
		//store the user load browser data into database

		// result goes with an object style [$row->name]
		// result_array goes with an array style [$row['name']

		$ref = $this->uri->segment(1, 10);
	
		$this->session->set_tempdata('ref', $ref, 259200);
		
		//referrer has been set
		/* NOW we will set add user to database once everyday. first we check his date,
		 * subtract it from tomorrow date, set a session (tempdata),
		 * so he cant be inserted into database so far as that tempdata is set .
		 */
		    $dat = date("Y-m-d 00:00:00");
	        $date = date('Y-m-d H:i:s', strtotime('+1 day', strtotime($dat)));
	        $c_u_t = $this->Main_model->check_unknownuser_today();
	        if ($c_u_t < 0) 
	        {
	        	$ip = $this->input->ip_address();
				if (isset($_SESSION['unknown'])) 
				{
					$unknown_id = $_SESSION['unknown'];
				}else
				{
					$unknown_id = bin2hex(openssl_random_pseudo_bytes(5));
				}
				$this->session->set_userdata('unknown', $unknown_id);
	            $bro = $this->agent->browser();
	            $os = $this->agent->platform();
	            $this->Main_model->store_unknownuser($ip, $unknown_id, $bro, $os);		
	        }
	        else
	        {
		       
	        }
	        //Unknown users have been tracked
       
		if(isset($_SESSION['worker']))
		{
			$worker_job = $_SESSION['worker'];
		}
		else
		{
			$worker_job = 'painter';
		}
		
			$job = 'painter';
		    $this->db->where('job', $job);
		    $query = $this->db->get('workforce'); 
		    $row['data'] = $query->result();
		    
		  	$this->load->view('dadi', $row);

    
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
public function join()
    { 

		if ($this->input->post('fn') == null) {
		 $ayey = array(
		    'err'             => true,
		    'fsn_err'         => form_error('fsn')
		    ); 
		}
		else
		{
		$ayey = array(
		    'suc'             => true
		    );
		$data = array(
	        'firstname' => $this->input->post('fn'),
	        'lastname' => $this->input->post('ln'),
	        'email'   => $this->input->post('email'),
	        'phone'    => $this->input->post('phone'),
	        'account_no'   => $this->input->post('account'),
	        'bank'    => $this->input->post('bank'),
	        'acc_name'  => $this->input->post('acc_name')
    	);
    	$insert = $this->db->insert('networkers', $data);
		}

        
                      
        echo json_encode($ayey);
    }


	public function json()
	{
		$query = $this->db->get('workforce'); 
	

		echo json_encode($query->result_array());
	}

	public function directwork()
	{
		$ref = $this->uri->segment(2, 10);

		$this->load->view('pro/workform', $ref);
/* further work ||||||||||||||||||||| first check if the tempdata for referral is set */
	}
//|||||||||||||||||||||||||||||||||||||||||||||||||||||SIDE BAR CODES|||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||
	public function callworker()
	{
			$worker_job = $this->input->post('session');
			$image = $this->input->post('image');
		    $this->db->where('job', $worker_job);
		    
		    $query = $this->db->get('workforce'); 
		    if(!$query->num_rows() > 0){
				echo "no result found";
		    }else{
		    $this->session->set_userdata('worker_ses', 'response');

		    foreach($query->result() as $row)
		    {
		    echo 
		    	"<script>
		    	var iconOptions".$row->id." = {
					  iconUrl: '".base_url()."asset/marker/".$image."',
					  iconSize: [30, 40]
					}
					var customIcon".$row->id." = L.icon(iconOptions".$row->id.");
					var markerOptions".$row->id." = {
					  title: 'ima',
					  clickable: true,
					  draggable: false,
					  icon: customIcon".$row->id."
					}
		    	mymap.removeLayer(marker".$row->id.");
		    	var lat = ".$row->lat.";

		    	var marker".$row->id." = new L.marker([".$row->lat.", ".$row->longi."], markerOptions".$row->id.").addTo(mymap);

		    	</script> ";
	    	echo 
	    	"
	   		 <script>
		       function onMapClick".$row->id."(e) {
		         alert('sss');
		         $('#job_detail".$row->id."').hide();
		        setTimeout(function(){
		         $('#job_detail".$row->id."').show();
		     	},200)
		      }
		      marker".$row->id.".on('click', onMapClick".$row->id.");
		      </script> 
	    	";
		    	
		    }
		}

	}
public function call()
	{
		// CREATE A REFRESH ID THAT WILL BE USE TO DELETE THE PREVIOUS MARKERS, ITS LIKE  A MEMORY THAT TEMPORARILY SAVES THE FORMER WORKER TYPE.
		//* set session to hold the particular button that got clicked, so it dosent get clikde again
		$this->session->set_userdata('clicked', $this->input->post('session'));

		$worker_job = $this->input->post('session');
		$image = $this->input->post('image');
	    $this->db->where('job', $worker_job);
	    	$query = $this->db->get('workforce'); 

			foreach($query->result() as $row)
		    {
		    	$this->session->set_userdata('previous',$row->id);
		    	echo 
		    	"<script>
		    	var iconOptions".$row->id." = {
					  iconUrl: '".base_url()."asset/marker/".$image."',
					  iconSize: [30, 40]
					}
					var customIcon".$row->id." = L.icon(iconOptions".$row->id.");
					var markerOptions".$row->id." = {
					  title: 'imagine',
					  clickable: true,
					  draggable: false,
					  icon: customIcon".$row->id."
					}
		    	var marker".$row->id." = new L.marker([".$row->lat.", ".$row->longi."], markerOptions".$row->id.").addTo(mymap);
		       	function onMapClick".$row->id."(e) {
		         alert('fff');
		         $('#job_detail".$row->id."').hide();
		           setTimeout(function(){
		         $('#job_detail".$row->id."').show();
		     }, 200)
		      }
		      marker".$row->id.".on('click', onMapClick".$row->id.");
		      </script> 
		    	 ";
		    }  		
	}

public function refreshmap()
	{
		//* set session to hold the particular button that got clicked, so it dosent get clikde again
		$worker_job = $this->session->userdata('clicked');
	    $this->db->where('job', $worker_job);
	    	$query = $this->db->get('workforce'); 

			foreach($query->result() as $row)
		    {
		    	$this->session->set_userdata('previous',$row->id);
		    	echo 
		    	"<script>
		    	mymap.removeLayer(marker".$row->id.");
		    	</script> ";
		    }  		
	}

	public function call_bottom()
	{
		
		$worker_job = $this->input->post('session');
	    $this->db->where('job', $worker_job);
	    	$query = $this->db->get('workforce'); 

			foreach($query->result() as $row)
		    {
		    	$job_id = bin2hex(openssl_random_pseudo_bytes(5));
		    	echo 
		    	'
<div id="job_detail'.$row->id.'" class="w3-white w3-border" style="height: 70vh;z-index: 1000; width:100%; display: none; position: absolute;top: 10%; margin:auto auto auto auto; ">
 <div id=""  class="w3-bottom " style="position: relative;  height: 50vh; width:100%; ">
    <div class="w2-card w3-purple purple'.$row->id.' " style="height: 52px; width: inherit;display: flex;">
        <div class="first'.$row->id.'" style="font-weight: 100; font-size: 1.3rem; margin:10px 10px;">Hire '.$row->firstname.'</div>
        <div class="response'.$row->id.'" style="font-weight: 100; font-size: 1.3rem; margin:10px 10px;"></div>
        <div id="times'.$row->id.'" class="w3-hover-text-black w3-text-white" style="position: absolute; right:0; display: block; font-weight: 50; font-size: 1.3rem; margin:10px 10px;cursor:pointer;">&times</div>
        <div id="back'.$row->id.'" onclick="back()" class="w3-hover-text-black w3-text-white w3-small" style="position: absolute; display: none; right:0;padding:18px 10px; font-weight: 50; font-size:  margin:10px 10px;">Back</div>
    </div>
<!--COVER BEGINS--> <div id="w_cover'.$row->id.'" class="" style="display: block;">
    <div class="w3-white w3-container">
      <p class="w3-text-black w3-tiny">Before Proceeding, please view the facebook profile of the worker</p>
      
      <div class="shadow1 "  style="height: 52px;display: flex; width:100%; padding: 1px 5px;">
        <div class="" style="flex:2;">
          <p class="w3-small" style="font-weight: 600;">Worker Rating</p>
          <div class=" w3-small" style="color: #c8d415;margin-top:-10px;"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><strong class="w3-text-grey" style="margin:0 0 0 10px;">4.8</strong> </div>
        </div>
          <div class="" style="flex:2;">
          <p class="w3-small" style="font-weight: 600;">+ / - comments</p>
          <div class=" w3-small w3-text-grey" style="color: ;margin-top:-10px;"><i class="fa fa-comments-o w3-text-purple" aria-hidden="true"></i> <strong style="margin-left: 5px;">50</strong> <span id="view_comment" class="w3-text-purple   w3-round-xxlarge w3-hover-light-grey" style="margin-left:15%;padding:3px 5px;">View</span></div>
        </div>
      </div>

      <div class=" w3-border-bottom w3-border-light-grey"  style="height: 52px; width:100%; padding: 1px 5px;margin-top:5px;">
          <div class="" style="flex:2;">
        <p class="w3-small" style="font-weight: 600;">Workmanship Range  <i class="fa fa-check-circle w3-text-blue w3-margin-left" aria-hidden="true"></i></p>
        <div class=" w3-small w3-text-green" style="margin-top: -10px;">&#8358<span class=" w3-text-grey " style="padding: 5px 9px; margin: -15px 0 0 -5px;">  '.$row->w_from.' - '.$row->w_to.' </span></div>
          </div>
          <div class="" style="flex:2;">
        <p class="w3-small" style="font-weight: 600;">Job Type <i class="fa fa-check-circle w3-text-blue w3-margin-left" aria-hidden="true"></i></p>
        <div class=" w3-small w3-text-green" style="margin-top: -10px;">&#8358<span class=" w3-text-grey " style="padding: 5px 9px; margin: -15px 0 0 -5px;">4.3 </span></div>
          </div>
      
      </div>

      <div class=" w3-border-bottom w3-border-light-grey"  style="height: 52px; width:100%; padding: 1px 5px;margin-top:5px; display: flex;">
        <div class=" "  style="flex: 2;">
          <p class="w3-small" style="font-weight: 600;">Facebook Profile</p>
          <div class=" w3-small w3-text-blue" style="margin-top: -10px;"><i class="fa fa-facebook-square w3-round-large"></i> <strong class="w3-text-grey" style="margin-left: 5px;"> Profile</strong>  <span id="view_facebook" class="w3-text-purple  w3-round-xxlarge w3-hover-light-grey" style="margin-left:10%;padding:3px 5px;">View</span></div>
        </div>

        <div class=" "  style="flex:2;">
          <p class="w3-small" style="font-weight: 600;">Jobs Completed</p>
          <P class="w3-small w3-text-grey" style="margin-top: -10px;">0</P>
        </div>
      </div>

   
    </div>
     <div id="proceed'.$row->id.'"  class="w3-purple w3-btn w3-bottom w3-round-xlarge" style="bottom:5px; max-width: 280px;left:50%; margin:auto 0 auto -140px;">Proceed</div>
<!--COVER ENDS--> </div>


<!--h_COVER BEGINS--> <div id="h_cover'.$row->id.'" style="display: none;" class="w3-container contact">
   <p class="w3-text-black w3-small" style="font-weight: 600;">Job Details</p>
   <p class="w3-text-grey w3-tiny">please note, workmanship does not include cost of material or total job, its simply the worker`s own commision</p>

   <div class="shadow1 w3-display-container"  style="height: 135px;width:100%; padding: 1px 5px; overflow: scroll;">
    <div class="" style="position: relative; height: 20vh;">
      <div style="display: flex;margin:2px 0 0 0;">
          <div class="w3-margin w3-transparent" style="flex: 1;"><i class="fa fa-envelope w3-transparent w3-text-purple " aria-hidden="true"></i></div>
          <input id="name'.$row->id.'" name="name" class="w3-input w3-small w3-round-large w3-border-bottom" placeholder="Your First and Last name" style="outline:none;flex: 16" type="text">
      </div>

      <div style="display: flex;margin:2px 0 0 0;">
      <div class=" w3-margin w3-transparent" style="flex: 1;"><i class="fa fa-phone w3-text-purple w3-transparent " aria-hidden="true"></i></div>
      <input id="phone'.$row->id.'" name="phone" class="w3-input w3-small w3-round-large w3-border-bottom" placeholder="Active Phone Number" style="outline:none;flex: 16;" type="tel">
      </div>
      <input id="worker_D'.$row->id.'" name="worker_D" class="w3-input w3-hide w3-white w3-border-bottom" style="outline:none; " value="'.$row->work_id.'" type="text">
      <input id="job_id'.$row->id.'" name="job_id" class="w3-input w3-hide w3-white w3-border-bottom" style="outline:none; " value="'.$job_id.'" type="text">

 	  <input id="skill'.$row->id.'" name="skill" class="w3-input w3-hide w3-white w3-border-bottom" style="outline:none; " value="'.$row->job.'" type="text">
     
    </div>

    <div style="height: 10vh;margin-top: 40px;">
    <label class="w3-small" style="font-weight: 600;">Describe your job in detail</label>
     <span id="contents'.$row->id.'" contenteditable="true" class="w3-white w3-round-large w3-border-bottom w3-border" style="display: inline-block;outline: none; margin:0 0 5px 0 ;font-size:14px; width: 100%;max-height:250px; padding: 5px 3px"></span>

     </div>

    </div>
      
    <div id="hire'.$row->id.'"  class="w3-purple w3-btn  w3-round-xlarge" style="position:relative; top:5px; width: 280px;left:50%; margin:auto 0 auto -140px;">Hire</div>
 
<!--COVER ENDS--> </div>
<div id="r_res'.$row->id.'" class="r_cover">

</div>



 </div>
 </div>';


 echo
   		"
   		 <script>

		  $('#proceed".$row->id."').click(function(){
		  
		    $('#w_cover".$row->id."').hide();
		    $('#h_cover".$row->id."').show();
		    $('#times".$row->id."').hide();
		    $('#back".$row->id."').show();
		  });
		    $('#back".$row->id."').click(function(){
		  
		    $('#w_cover".$row->id."').show();
		    $('#h_cover".$row->id."').hide();
		    $('#times".$row->id."').show();
		    $('#back".$row->id."').hide();
		  });
		    $('#times".$row->id."').click(function(){
		    $('#job_detail".$row->id."').hide();
		  });
		</script>
   		";


   	   		echo 
   		"<script>
        $('#hire".$row->id."').click(function(){alert('dd');
        var name = $('#name".$row->id."').val();
        var contact = $('#phone".$row->id."').val();
        var con = $('#contents".$row->id."').text();
        var worker = $('#worker_D".$row->id."').val();
        var job = $('#job_id".$row->id."').val();
        var skill = $('#skill".$row->id."').val();

    $.ajax({
            url: '".base_url()."Welcome/hiredescription', 
            method: 'POST',
            data: {con:con, name:name, contact:contact, worker:worker, job:job, skill:skill},
            beforeSend: function(){ 
                
            },
            success: function(data)
            {
             if (data)
              {
                alert('true');

                $('#w_cover".$row->id."').hide();
                $('#h_cover".$row->id."').hide();
                $('.purple".$row->id."').hide();
                var wor = $('#worker_D".$row->id."').val();
        		var jor = $('#job_id".$row->id."').val();
                $('#r_res".$row->id."').load('Welcome/response', {wor:wor, jor:jor});
              
              }else{
                alert('There is an error in you form input');
              }
            }
          })
        });
    </script>
   		";
   		}

		    
	}
	public function hiredescription()
	{
		//This takes hire details as description, phone number, and name and creates an account for the user.
		if (!$this->session->userdata('user')) {
	      $userid = bin2hex(openssl_random_pseudo_bytes(5));
	      $this->session->set_userdata('user', $userid);
		}

		$name = $this->input->post('name');
		$contact = $this->input->post('contact');
		$con = $this->input->post('con');
		$worker = $this->input->post('worker');
		$job = $this->input->post('job');
		$skill = $this->input->post('skill');
		$ip = $this->input->ip_address();
		$bro = $this->agent->browser();
		$dat = date("Y-m-d H:i:s");
	    $end_time = date('Y-m-d H:i:s', strtotime('+10 minute', strtotime($dat)));

	    $this->db->where('user_id', $this->session->userdata('user'));
	      $query = $this->db->get('users');
	      if($query->num_rows() < 1){
			$data = $this->Main_model->insert_user($name, $contact, $ip, $bro);	
		   }
		$data = $this->Main_model->insert_description($name, $contact, $con, $ip, $bro, $worker, $job, $end_time, $skill);
		if ($data) {
			$this->session->set_tempdata('lastpage', 'response-layout', 50000);
			echo 'true';
		}
	}

	public function home_bell_icon()
	{
		$user_id = $this->input->post('user');
	    $this->db->where('user_id', $user_id);
	    $query = $this->db->get('hire'); 
	    if($query->num_rows() > 0){
	    	echo '
	    	<div id="clicks" class="w3-card-5 w3-circle w3-white w-center w3-hover-purple" style="position: absolute;z-index:1000; margin:5px 10px 0 10px;width:50px;height:50px;">
            <i class="fa fa-bell" style="position: relative;top:30%;left:30%;font-size: 20px;"></i>
            <div class="w3-white w3-hover-purle w3-hover-purple w3-circle" style="position: absolute;top:18%;left:50%; width:15px; height: 15px;"><div class="w3-red  w3-circle" style="position: relative; width:10px;top:14%;left:19%; height: 10px;"></div></div>
          	</div>

			<div id="id02" class="w3-modal " style="display:none;z-index:1000;">
			<div class="w3-modal-content w3-round-large w3-card-4  w3-white w3-animate-left" style="max-width:600px;top:43%;overflow:scroll; height:50vh;">
			<div class="w3-text-red closex" style="position: absolute;top: 5px;font-size: 20px; right: 10px; margin: 5px 0 10px 0;">x</div>
			<h3 class="" style="font-weight:bold; padding:0 0 0 10px;">Your Pending Jobs</h3>
				 <div id="modal_con" style="position: absolute;top: 25px;width:100%;height:auto;padding:15px 0 0 0;">
				 </div>
			</div>
			</div>
			';

			echo "
			<script>
			$('#clicks').click(function(){
				$('#id02').show();
			});
			$('.closex').click(function(){
				$('#id02').hide();
			});
			</script>
			<script>
			var user = '".$this->session->userdata('user')."';
			
				 $.ajax({
                    url:  '".base_url()."Welcome/call_pending_works',
                    method: 'POST',
                    data: {user:user},
                    success: function(data)
                    {
                    
                    	$('#modal_con').html(data);
                    }
                })
			</script>"	;

		  }
	}
	public function call_pending_works()
	{
		// note im sing the user_id session here instead of post
		$user_id = $this->input->post('user');
	    $this->db->where('user_id', $user_id);
	    $this->db->where('completed', '0');
	    $query = $this->db->get('hire'); 
	    foreach ($query->result_array() as $value){
	    	echo'
	    		
			 <div class="  w3-container w3-margin-top" style="position: relative;border:0.5px solid light-grey; height: 45px; width:100%;">
				    <span style="position: absolute;left:15px;font-weight: bold;">You Hired an '.$value['skill'].'</span>
				    <span id="go'.$value['id'].'" class="w3-white w3-hover-light-grey w3-circle w3-center" style="position: absolute;right:10px;top:20%; height: 30px;padding:4px 0 0 2px; width:30px;"><i class="fa fa-chevron-right w3-small w3-text-purple"></i></span>
				    <div class="w3-small w3-text-grey" style="position: absolute; bottom: 0px;">STATUE: completed</div>
			</div>
			<hr>
			 ';
			echo "
			<script>
			$('#clicks').click(function(){
				$('#id02').show();
			});
			$('.closex').click(function(){
				$('#id02').hide();
			});
			$('#go".$value['id']."').click(function(){
				var wor = '".$value['work_id']."';
				var jor = '".$value['job_id']."';
				alert('success');
				$('.response-layout').load('Welcome/response', {wor:wor, jor:jor});
				window.location.href = '".base_url()."';
			});
			</script>
			";
			}
	}
	
	public function response()
	{
		 //call data from hire
		$worker = $this->input->post('wor');
		$job = $this->input->post('jor');
        $this->session->set_tempdata('workker', $worker, 1500);
        $this->session->set_tempdata('jobber', $job, 1500);
			$this->db->where('work_id', $this->session->tempdata('workker'));
		    $result = $this->db->get('workforce'); 
		    $name = $result->row();
			$this->db->where('job_id', $this->session->tempdata('jobber'));
		    $query = $this->db->get('hire'); 
 			$row = $query->row();
		echo'
 <div id="closeme'.$row->id.'" class="w3-bottom " style="position: relative;  height: 50vh; width:100%; ">
    <div class="w2-card w3-purple  " style="height: 52px; width: inherit;display: flex;">
		<div id="ur'.$row->id.'" class="w3-medium w3-text-white" style="font-weight: bold;margin:10px 5px ; display:block;">Your Price: &#8358 <strong  class="worker_price'.$row->id.'" style="">'.$row->amount.' </strong></div>
				<div id="rate'.$row->id.'" class="w3-medium w3-text-white w3-center" style="font-weight: bold;margin:10px 5px ; display:block;">Rate this Worker</div>
	    </div>
    <div id="load'.$row->id.'" class="w3-display-container" style="position:absolute;height:50vh;width:100%;z-index:1010;background-color:rgba(255, 255, 255, 0.64)!important;display:none;">
    <span class="fa fa-star fa fa-3x w3-spin w3-display-middle" style="margin:0 0 0 -20px;color:#c474d2; "></span>
    </div>

<!--r_COVER BEGINS--> 

<div class="w3-light-grey w3-white" style="position: relative;height: 45vh;">
<!--***********************************************HANDLETYPICALLY REPLIES AND COUNTDOWN************************************************-->
  <div id="typically'.$row->id.'" class="w3-container w3-white w3-animate-left" style="border-left:2px solid pink; display: none; height: auto;">
    <p id="" style="text-align:left;">Typically replies within 10 minutes</p>
    <!--<h2 id="dem'.$row->id.'" style="text-align:center;font-weight: ;">5000:3982</h2>-->
  </div>


<!--}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}} HANDLE PAYMENT PAGE TO LOAD {{{{{{{{{{{{{{{{{{{{{{{{{{{{{{{{{{{{{{{{{{{{{{{{{{{{{{{{{{{{{{{-->
  <div id="call'.$row->id.'" class="w3-container w3-center w3-white w3-animate-left" style="position:relative; display: none; height: 100%;">
    <div class=" w3-card-6 w3-center w3-small w3-hover-purple w3-text-black w3-round-large" style="height:40px; width:150px;position: absolute; top:40%; left:50%; margin:0 0 0 -75px;padding:12px 0 0 0;">Call Worker <i class="fa fa-phone" style="position:relative; left:10px; font-size:17px;"></i></div>
    	<div id="complete'.$row->id.'"  class="w3-btn w3-bottom w3-round-xlarge w3-purple" style="position:relative;color:white; display:none; top:240px; max-width: 280px;  ">Job Completed</div>
  </div>


<!--}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}HANDLE CALL AND WHATSAPP BUTTONS{{{{{{{{{{{{{{{{{{{{{{{{{{{{{{{{{{{{{{{{{{{{{{{{{{{{{{{{{{{{{{{{{-->
  <div id="call'.$row->id.'" class="w3-container w3-center w3-white w3-animate-left" style="position:relative; display: none; height: 100%;">
    <div class=" w3-card-6 w3-center w3-small w3-hover-purple w3-text-black w3-round-large" style="height:40px; width:150px;position: absolute; top:40%; left:50%; margin:0 0 0 -75px;padding:12px 0 0 0;">Call Worker <i class="fa fa-phone" style="position:relative; left:10px; font-size:17px;"></i></div>
    	<div id="complete'.$row->id.'"  class="w3-btn w3-bottom w3-round-xlarge w3-purple" style="position:relative;color:white; display:none; top:240px; max-width: 280px;  ">Job Completed</div>
  </div>

<!--}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}STAR RATING SYSTEM{{{{{{{{{{{{{{{{{{{{{{{{{{{{{{{{{{{{{{{{{{{{{{{{{{{{{{{{{{{{{-->
  <div id="star'.$row->id.'" class="w3-container w3-center w3-white w3-animate-left" style="position:relative; display: none; height: 100%;">
    <div class="  w3-center w3-small  w3-text-black w3-round-large" style="height:40px; width:280px;position: absolute; top:3%; left:50%; margin:0 0 0 -140px;padding:12px 0 0 0;">
    	<div class=" w3-white w3-round-large" style="position:relative; height: 30vh; width: 90%; margin: 20px auto;">
         <div class=" w3-border-red" style="position: relative; margin: auto auto auto -60px; left:50%; display: flex; top:0%;height: 50px; width: 120px;">
        <p class=" star1 w3-hover-text-purple fa fa-star " onmouseover="star_1()" onmouseout="star_11()" style="color:lightgrey; position:relative;font-size: 22px;  height: 18px; width: 19px; flex: 2;margin:2px;"></p>
        <p class=" star2 w3-hover-text-purple fa fa-star " onmouseover="star_2()" onmouseout="star_22()" style="color:lightgrey; position:relative; font-size: 22px; height: 18px; width: 19px; flex: 2;margin:2px;"></p>
        <p class=" star3 w3-hover-text-purple fa fa-star " onmouseover="star_3()" onmouseout="star_33()" style="color:lightgrey; position:relative; font-size: 22px;  height: 18px; width: 19px; flex: 2;margin:2px;"></p>
        <p class=" star4 w3-hover-text-purple fa fa-star " onmouseover="star_4()" onmouseout="star_44()" style="color:lightgrey; position:relative; font-size: 22px;  height: 18px; width: 19px; flex: 2;margin:2px;"></p>
        <p class=" star5 w3-hover-text-purple fa fa-star " onmouseover="star_5()" onmouseout="star_55()" style="color:lightgrey; position:relative; font-size: 22px;  height: 18px; width: 19px; flex: 2;margin:2px;"></p>
       </div>
       
        <p class="w3-center" style="position: relative; padding:0 15px 0 25px; margin: auto auto auto -50px; top:px; left:50%; display: flex;height: 20px; width: 100px;"><span class="star_count'.$row->id.'" style="margin:0 5px 0 0;">0</span> Star</p>

  		<input class="w3-input comment'.$row->id.' w3-margin-bottom"  style="position: relative; top:48px; margin:auto 5%; width:90%; outline: none; " type="text" name="comment" placeholder="comment on this job">
        <div class="w3-btn w3-bar w3-round-large w3-purple w3-display-bottommiddle finish'.$row->id.'" style="position:relative;margin:auto;top:50px;width:100%;">Finish</div>
  		</div>
    </div>
  </div>

<!--}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}WHEN WORKER DOSENT REPLY, SHOW THISMESSAGE{{{{{{{{{{{{{{{{{{{{{{{{{{{{{{{{{{{{{{{{{{{{{{{{{{{-->
  <div id="no_reply'.$row->id.'" class="w3-container w3-white w3-margin-top w3-animate-left" style="border-left:2px solid pink; display: none; height: auto;">
    <p id="" style="text-align:left;">'.$name->firstname.' hasent replied you yet, feel free to cancel this hire, or give him a little more time</p>
  </div>

<!--SAY HE IS REVIEWING YOUR JOB AND GIVE HIM THE QUOTED AMOUNT-->
  <div id="review'.$row->id.'" class="w3-container w3-center w3-white w3-animate-left" style="position:relative; display: none; height: 100%;">
  <div class="sk-chase">
	  <div class="sk-chase-dot"></div>
	  <div class="sk-chase-dot"></div>
	  <div class="sk-chase-dot"></div>
	  <div class="sk-chase-dot"></div>
	  <div class="sk-chase-dot"></div>
	  <div class="sk-chase-dot"></div>
  </div>
    <p style="position:relative;top:45%;color:grey;">'.$name->firstname.' is reviewing your job</p>
    <p id="" style="text-align:left;">Typically replies within 10 minutes</p>
    <h2 id="dem'.$row->id.'" style="text-align:center;font-weight: ;">5000:3982</h2>
  </div>

  <div id="wait'.$row->id.'" class="w3-container w3-center w3-white w3-animate-left" style="position:relative; display: none; height: 100%;">
    <p style="position:relative;top:45%;color:grey;">Wait for '.$name->firstname.'`s  reply</p>
  </div>


  <div id="quote'.$row->id.'" class="w3-container  w3-white w3-animate-left" style="border-left:2px solid blue;margin:0 0 0 0;  display: none; height: auto;">
    <p class="w3-center">'.$name->firstname.' wants you to pay </p>
    <h2 class="w3-center"> &#8358 <span class="worker_price'.$row->id.'">00</span></h2>
  </div>

  <div id="input'.$row->id.'" class="w3-container w3-left w3-margin-top w3-white w3-animate-left" style="border-left:2px solid white; display: none; height: 60px; width: 100%;">
    <div style="display: flex;">
    <input id="amount'.$row->id.'" type="tel" name="amount" class="w3-input w3-round-xlarge w3-border" placeholder="input your Price" style="height: 40px; width:50%; margin: 10px 2px 0 0;outline: none; text-decoration: none; flex:10;">
    <span style="flex: 2;margin:18px 0 0 0;" class=""><img id="send'.$row->id.'" src="'.base_url().'asset/image/send_blue.png" class="w3-left w3-animate-zoom" style="margin: 0 0 0 15px; height:20px; width: 20px; display:block;"></span>
  </div>
  </div>

<!-- CANCEL AND COMPLETE-->

	<div id="cancel_hire'.$row->id.'"  class="w3-btn missed w3-bottom w3-round-xlarge w3-red" style="position:relative;color:white; bottom:-40px; max-width: 280px;left:50%; margin:auto 0 auto -140px;display:none;"> <b>&times</b> Cancel Hire</div>

<!-- 2 BUTTONS-->
  <div id="two_but'.$row->id.'" class="w3-container w3-white w3-margin-top w3-animate-left" style="position:relative; top:100px; display: none; height: 100%;">
    <div class="w3-card  w3-white" style="display:flex;margin:5px 2px 0 2px; padding:5px; ">
	  <div id="accept'.$row->id.'" style="flex:5;margin:0 2px 0 0;" class="w3-btn w3-hover-greyscale w3-purple">Accept</div>
	  <div id="decline'.$row->id.'" style="flex:4;margin:0 0 0 2px;" class="w3-btn w3-hover-red w3-border w3-border-red w3-text-grey">Decline</div>
	  <div id="negotiate'.$row->id.'" style="flex:5;margin:0 0 0 2px;display:none;" class="w3-btn w3-hover-greyscale w3-border">Negotiate</div>
	</div>
  </div>
<!--r_COVER ENDS--> 
';

echo "
<script>
	$('.finish".$row->id."').click(function(){
	 	var comment = $('.comment".$row->id."').val();
        var count = $('.star_count".$row->id."').text();
        var track = '".$row->job_id."';
        alert(track);
        if(comment == ''){
        	alert('please comment shortly on this job');
        }else{
        	$.ajax({
                url:  '".base_url()."Welcome/finish',
                method:'POST',
                data: {comment:comment, count:count, track:track},
                beforeSend: function(){
                },
                success: function(data)
                {
               		('#closeme".$row->id."').hide();	  			
                }
            })
        }
	})
</script>
<script>
var countDownDate".$row->id." = new Date('".$row->end_time."').getTime();
var track= '".$row->job_id."';
                  var x".$row->id." = setInterval(function() {
                  var now".$row->id." = new Date().getTime();
                  var distance".$row->id." = countDownDate".$row->id." - now".$row->id.";
                  var days = Math.floor(distance".$row->id." / (1000 * 60 * 60 * 24));
                  var hours = Math.floor((distance".$row->id." % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                  var minutes = Math.floor((distance".$row->id." % (1000 * 60 * 60)) / (1000 * 60));
                  var seconds = Math.floor((distance".$row->id." % (1000 * 60)) / 1000);
                     $.ajax({
			            url:  '".base_url()."Welcome/check_nego',
			            method: 'POST',
			            dataType: 'json',
			            data: {track:track},
			            success: function(data)
			            {  
			            	if(data.worker_t > 0 || data.user_t > 0){

			            	}else{
			            		document.getElementById('dem".$row->id."').innerHTML =   minutes + ' Min ' + seconds + 'Sec ' + 'time';
			                    $('.if_nego".$row->id."').show(); //show typicall reply
			                    var track= '".$row->job_id."';

			                    if (distance".$row->id." > 0) {
			                       $('#typically".$row->id."').show();
			                    }
			                   
				                  if (distance".$row->id." < 0) {
				                        clearInterval(x".$row->id.");
				                        $('#dem".$row->id."').hide();
				                        $('#no_reply".$row->id."').show();
				                        return;
				                  }
			            	}
			            }

                    
                }, 1000);

		var negotiating = setInterval(function() {
        var track= '".$row->job_id."';

        $.ajax({
            url:  '".base_url()."Welcome/check_nego',
            method: 'POST',
            dataType: 'json',
            data: {track:track},
            success: function(data)
            {  
//HANDLE ACCEPT AND DECLINE BEFORE ANYOTHER THING
            	if(data.accept == 1 && data.complete == 1)
                {
                  $('#call".$row->id."').hide();
                  $('#star".$row->id."').show();
                  $('#wait".$row->id."').hide();
               	  $('#review".$row->id."').hide();
                  $('#wait".$row->id."').hide();
                  $('#quote".$row->id."').hide();
                  $('#two_but".$row->id."').hide();
                  $('#negotiate".$row->id."').hide();           
                  $('#complete".$row->id."').show();          
				  $('#no_reply".$row->id."').hide();
				  $('#ur".$row->id."').hide();
                }
            	else if(data.accept == 1 && data.complete == 0)
                {
                  $('#call".$row->id."').show();
                  $('#wait".$row->id."').hide();
               	  $('#review".$row->id."').hide();
                  $('#wait".$row->id."').hide();
                  $('#quote".$row->id."').hide();
                  $('#two_but".$row->id."').hide();
                  $('#negotiate".$row->id."').hide();           
                  $('#complete".$row->id."').show();          
				  $('#no_reply".$row->id."').hide();
                }else if(data.decline == 1 && data.complete == 0){
                	$('#closeme".$row->id."').hide(); 
                }else{
 

              	$('.worker_price".$row->id."').text(data.worker_price) ; 
           
                 if(data.worker_t == 0 && data.user_t == 0)
                {            
                  $('#review".$row->id."').show();
                  $('#call".$row->id."').hide();
                }
               
                 if(data.worker_t == 1 && data.user_t == 1 && data.nego == 1 && data.decline == 1)
                {
               	 $('#review".$row->id."').hide(); 
                  $('#wait".$row->id."').hide();           

                }
                 if(data.worker_t == 1 && data.user_t == 0 && data.nego == 1)
                {
               	 $('#review".$row->id."').hide(); 
                  $('#wait".$row->id."').hide();           
                  $('#quote".$row->id."').show();
                  $('#two_but".$row->id."').hide();
                  $('#negotiate".$row->id."').hide();
                }  
                 if(data.worker_t == 1 && data.user_t == 0 && data.nego == 0)
                {
               	 $('#review".$row->id."').hide(); 
                  $('#wait".$row->id."').hide();           
                  $('#quote".$row->id."').show();
                  $('#two_but".$row->id."').show();
                  $('#negotiate".$row->id."').show();
                } 
                 if(data.worker_t == 0 && data.user_t == 1)
                {            
                  $('#wait".$row->id."').show();
                  $('#quote".$row->id."').hide();
                  $('#input".$row->id."').hide();
                }                     
                 if(data.worker_t == 1 && data.user_t == 1)
                {
                $('#review".$row->id."').hide();
                $('#wait".$row->id."').show(); 
                  $('#quote".$row->id."').hide(); 
                  $('#two_but".$row->id."').hide();
                  $('#negotiate".$row->id."').hide();
                } 

            }
            }
            
            
        });
    }, 1000);

		$('#negotiate".$row->id."').click(function(){
			var track= '".$row->job_id."';
			 $.ajax({
                url:  '".base_url()."Welcome/add_negotiate',
                method: 'POST',
                data: {track:track},
                beforeSend: function(){
                },
                success: function(data)
                {
                 			$('#input".$row->id."').show();
							$('#two_but".$row->id."').hide();
                }
            })
		})
        $('#send".$row->id."').click(function(){
              var amount = $('#amount".$row->id."').val();
              var track= '".$row->job_id."';
              alert(amount);
              $.ajax({
                url:  '".base_url()."Welcome/send_amount',
                method: 'POST',
                data: {track:track, amount:amount},
                beforeSend: function(){
                  $('#quote".$row->id."').hide();
                },
                success: function(data)
                {
                      alert('result');
				  $('#quote".$row->id."').hide();
                  $('#input".$row->id."').hide();
                }
             });
        });
        $('#accept".$row->id."').click(function(){
              var amount = '".$row->amount."';
              var track= '".$row->job_id."';
              alert(amount);
             $.ajax({
                url:  '".base_url()."Welcome/accept',
                method: 'POST',
                data: {track:track, amount:amount},
                beforeSend: function(){
                  
                },
                success: function(data)
                {
                alert('amount');
                  $('#call".$row->id."').hide();
               	  $('#review".$row->id."').hide(); 
                  $('#wait".$row->id."').hide();           
                  $('#quote".$row->id."').hide();
                  $('#two_but".$row->id."').hide();
                  $('#negotiate".$row->id."').hide();
                }
            });
        });

  		$('#decline".$row->id."').click(function(){
              var track= '".$row->job_id."';
              alert(amount);
             $.ajax({
                url:  '".base_url()."Welcome/decline',
                method: 'POST',
                data: {track:track},
                beforeSend: function(){
                  
                },
                success: function(data)
                {
                   $('#closeme".$row->id."').hide();
                }
            });
        });
    $('#cancel".$row->id."').click(function(){

    })
    $('#complete".$row->id."').click(function(){
    	var track= '".$row->job_id."';
    	 $.ajax({
                url:  '".base_url()."Welcome/complete',
                method: 'POST',
                data: {track:track},
                beforeSend: function(){
                  
                },
                success: function(data)
                {
                  $('#star".$row->id."').show();
                  $('#call".$row->id."').hide();
                  $('#wait".$row->id."').hide();
               	  $('#review".$row->id."').hide(); 
                  $('#wait".$row->id."').hide();           
                  $('#quote".$row->id."').hide();
                  $('#two_but".$row->id."').hide();
                  $('#negotiate".$row->id."').hide();           
                  $('#complete".$row->id."').hide(); 
                  $('#ur".$row->id."').hide();
                }
            });
  
    })
</script>

<script>


  $('.star1').click(function(){
     $('.star1').css('color', '#9c27b0');
         $('.star2').css('color', 'lightgrey');
             $('.star3').css('color', 'lightgrey');
                 $('.star4').css('color', 'lightgrey');
                     $('.star5').css('color', 'lightgrey');
                      $('.star_count".$row->id."').text('1');
  });
  $('.star2').click(function(){
     $('.star1').css('color', '#9c27b0');
      $('.star2').css('color', '#9c27b0');
          $('.star3').css('color', 'lightgrey');
              $('.star4').css('color', 'lightgrey');
                  $('.star5').css('color', 'lightgrey');
                    $('.star_count".$row->id."').text('2');
  });
  $('.star3').click(function(){
    $('.star1').css('color', '#9c27b0');
      $('.star2').css('color', '#9c27b0');
        $('.star3').css('color', '#9c27b0');
            $('.star4').css('color', 'lightgrey');
                $('.star5').css('color', 'lightgrey');
                    $('.star_count".$row->id."').text('3');
  });
  $('.star4').click(function(){
    $('.star1').css('color', '#9c27b0');
      $('.star2').css('color', '#9c27b0');
        $('.star3').css('color', '#9c27b0');
          $('.star4').css('color', '#9c27b0');
              $('.star5').css('color', 'lightgrey');
                  $('.star_count".$row->id."').text('4');

  });
  $('.star5').click(function(){
    $('.star1').css('color', '#9c27b0');
      $('.star2').css('color', '#9c27b0');
        $('.star3').css('color', '#9c27b0');
          $('.star4').css('color', '#9c27b0');
            $('.star5').css('color', '#9c27b0');
                $('.star_count".$row->id."').text('5');
  });



</script>
";


	}
		
    public function accept()
    {
		$job = $this->input->post('track');
        $amount = $this->input->post('amount');
        $cut = $amount * 0.10;
        $this->db->where('job_id', $job);
        $this->db->set('accept', 'accept+1', FALSE);
        $this->db->set('decline', '0', FALSE);
        $this->db->set('cancel', '0', FALSE);
        $this->db->set('cut', $cut, FALSE);
        $this->db->update('hire');  
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
        'worker_price'           => $c_n->amount,
        'decline'           => $c_n->decline ,
        'accept'           => $c_n->accept ,
        'complete'           => $c_n->completed ,
        ); 

        echo json_encode($array);
         
		
	}
	public function send_amount()
	{
		$new = $this->input->post('amount');
		$track = $this->input->post('track');
		//$this->session->unset_userdata('lastpage');
		$data = array(
		        'amount' => $new
		);

		$this->db->where('job_id', $track);
		$this->db->set('u_type', 'u_type+1', FALSE);
		$this->db->update('hire', $data);
		echo "string";
		
	}


    public function add_negotiate()
    {
        $track = $this->input->post('track');
    	$this->db->where('job_id', $track);
		$this->db->set('negotiate', 'negotiate+1', FALSE);
		$this->db->update('hire');

        echo json_encode($array);

    }
	public function track($job = null)
	{
		
		 $tom['tom'] = '$job';
		 $tom['job'] = $job;
		$this->load->view('pro/track', $tom);
	}
	public function complete()
	{
		$complete = $this->input->post('track');
		//$this->session->unset_userdata('lastpage');
		$this->db->where('job_id', $complete);
		$this->db->set('completed', 'completed+1', FALSE);
		$this->db->update('hire');
		
	}
	public function finish()
	{
		$this->session->unset_tempdata('workker');
        $this->session->unset_tempdata('jobber');
		$comment = $this->input->post('comment');
		$count = $this->input->post('count');
		$job = $this->input->post('track');
		echo $job;
		$data = array(
		        'w_rating' => $count,
		        'coment' => $comment
		);
		$this->db->where('job_id', $job);
		$this->db->update('hire', $data);
		
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




}

	
    