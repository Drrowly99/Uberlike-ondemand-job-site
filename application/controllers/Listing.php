<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Listing extends CI_Controller {

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
 
		
	}
	public function join()
    { 

    }



	public function directwork()
	{
		
	}
//|||||||||||||||||||||||||||||||||||||||||||||||||||||SIDE BAR CODES|||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||
	public function callworker()
	{
		$worker_job = $this->input->post('session');
        $this->db->where('job', $worker_job);
        
        $query = $this->db->get('workforce'); 
        if(!$query->num_rows() > 0){
        echo '<div class="w3-small w3-center" style="position:relative;top:40%;">No result found</div>';
        }else{
        $this->session->set_userdata('worker_sess', 'responses');

        foreach($query->result() as $row)
        {
        echo 
          '
        <div class="w3-white w3-bar-item" style="padding: 0 0 0 0;position: relative; width:46%;height:auto;margin:2% 2%;float:;border-top-left-radius: 5px;border-top-right-radius: 5px; border-bottom-right-radius: 5px;border-bottom-left-radius: 5px;">
              <img src="http://localhost/webapp/image/rob.jpg" class="" style="position: relative;top:0;width:100%;height:140px;object-fit: cover;float:left;border-top-left-radius: 5px;border-top-right-radius: 5px;"><!--image-->
                    <div class="w3-white w3-small" style="border-bottom-right-radius: 5px;border-bottom-left-radius: 5px;height: auto;position: relative;margin-top:140px;width: 100%;padding:4px 5px;">
                        <div style="color: #681077;font-weight: 800;">'.$row->job.'</div>
                        <div style="font-weight: 400;">Hire '.$row->firstname.'</div>
                        <div style="color:#681077;font-weight: 600;font-size:10px;margin-top: 5px;">NGN <b class=" w3-round-large" style="background-color:#fef6ff; padding: 5px;font-weight: 600;">'.$row->w_from.' - '.$row->w_to.'</b></div>
                        <div style="display: flex;margin-top: 5px;"> 
                          <div style="color:  #18072d;font-weight: 400;font-size:10px;flex:2;margin-top: 5px;"><i style="color: #d81952;" class="fa fa-map-marker"></i> Rivers state</div>
                          <div id="contact'.$row->id.'" class="w3-round w3-hover-red" style="background-color:#fff; border:1px solid #d81952; color: #d81952;font-weight: 700;font-size:10px; flex:2;padding:5px;margin-left:1px;">Contact Now</div>
                        </div>
                               
              </div><!--content-->
        </div> 
          ';
        echo 
        "
         <script>

            $('#contact".$row->id."').click(function()
            { 
            	alert('sjsj');
            	$('#show_detail_3').show();
            	$('#job_detail".$row->id."').show();
            })
           
          </script> 
        ";
          
        }
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
<div id="job_detail'.$row->id.'" class="w3-white w3-border" style="height: 70vh;z-index: 1000; width:100%; display: none; position: absolute;bottom:0; margin:auto auto auto auto; ">
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


}

	
    