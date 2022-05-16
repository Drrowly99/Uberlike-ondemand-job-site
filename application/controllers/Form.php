<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Form extends CI_Controller {

public function __construct()
{
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
    $this->session->unset_userdata('key');
    //$this->session->sess_destroy();
    //$this->session->unset_userdata('key');
}

    public function forgot($recover = NULL)
    {
      if($recover){
        $this->load->view('form/forgot', $recover);
      }else{
        $recover = 'nodata';
        $this->load->view('form/forgot', $recover);
      }
      
    }
    public function reset($recover = NULL)
    {
      $data = $recover;
      $this->load->view('form/forgot');
    }
    public function passconfirm()
    {
      $this->load->library('form_validation');
      $this->form_validation->set_rules('password1', 'password', 'required');
      $this->form_validation->set_rules('password2', 'confirm password', 'required|matches[password1]');
        if ($this->form_validation->run() == TRUE)
          {
            $password1    = $this->security->xss_clean($this->security->sanitize_filename($this->input->post('password1')));
            $password2  = $this->security->xss_clean($this->security->sanitize_filename($this->input->post('password2')));

           echo $password2;
            $data = array(
            'password' => $new
            );

                $this->db->where('job_id', $track);
                $this->db->set('u_type', 'u_type+1', FALSE);
                $this->db->update('hire', $data);
                echo "string";
          }
    }
    public function sendforgot()
    {
      $email_r  = $this->security->xss_clean($this->security->sanitize_filename($this->input->post('email')));
      $recover = bin2hex(openssl_random_pseudo_bytes(5));
      $this->session->set_tempdata('recover', $recover, 1200);
      $config = Array(
            'protocol' => 'smtp',
            'smtp_host' => 'smtp.googlemail.com',
            'smtp_port' => 587,
            'smtp_user' => 'xxxxxxxxxxxxx',
            'smtp_pass' => 'xxxxxxxxxxxxxx',
            'wordwrap' => TRUE,
            'priority' => 1,
            'mailtype'  => 'html',
            'charset'   => 'iso-8859-1'
            );
            $this->load->library('email', $config);
            $this->email->set_newline("\r\n");
            $this->email->set_mailtype("html");
            $data = 'its ok';
  $body='
<div style="position: relative; background-color: #f7f2f9;max-width:500px;margin:auto; height:750px;min-height: 650px; font-family:"Titillium Web", sans-serif;">
    <div style="position:relative;background-color:#9c27b0;height:60px;max-width:500px;margin:auto;text-align: center;">
      <img src="'.base_url().'asset/image/dadi5.png" style="position: relative;margin-top:13px; width:80px;height:30px;">
    </div>
<!--COVER THIS SECTON-->

    <div style="position: relative;top:5px; padding:5px;height:auto;margin:0 0 auto 0;">
      <h3>Hello </h3>
      <div style="background-color: white;height: auto; min-height:80px;border-radius: 10px;padding: 5px;">
        <p style="overflow-wrap: break-word;">You initiated password recovery, click this link to reset your password. <b style="color:#9c27b0;">https://dadi.com.ng/form/reset/'.$_SESSION['recover'].'</b></p>
      </div>
    </div>

    <div style="position: absolute;bottom:0px;height:80px;text-align:center; font-size:12px; color:white; width:100%;padding:10px 0 0 0; background-color: #343035;border-top-right-radius:20px; border-top-left-radius:20px;padding: 8px 2px;">
      <!--<div>Developed by DADI team, Portharcourt, Nigeria.</div>-->
      <div>Copywrite © 2020 DADI Technologies, All rights reserved</div>
      <div>Contact us <a href="https://wa.me/08032366154?text=Hello, i want to know more about your service">@whatsapp_dadi</a></div>
      <div>Call us <a href="tel:2348363276347">+2348363276347</a></div>
    </div>
</div>
';
    $net = 'users';

            $this->email->from('dadi@dadi.com.ng', 'Password Recovery');
            $this->email->to('drrowly99@gmail.com'); 
            $this->email->subject('Recover Your Password');
            $this->email->message($body);           
             if ( $this->email->send()) {
                         echo 'kk', '<br>';
            }else{
                echo $this->email->print_debugger();
            
                echo 'sorry', '<br>';;
            }
    }
















    public function start()
    {

            $u_session = $this->security->xss_clean($this->security->sanitize_filename($this->uri->segment(2, 10)));
            //$spec_form = $this->security->xss_clean($this->security->sanitize_filename($this->uri->segment(4, 10)));
            $this->session->set_tempdata('spec_form', $u_session, 1800);

            // IF NETWORK CHECK IF SESSION IS SET
            if ($u_session == 'network') {
              if($this->session->userdata('network_id')){
                redirect('Main/network');
              }else{
                redirect('Form/tologin');
                }
            }
            // IF WORKER CHECK IF SESSION IS SET
            if ($u_session == 'work_form') {
              if($this->session->userdata('worker_id')){
               //redirect('Main/work_profile');
              }else{
                redirect('Form/tologin');
                }
            }else{
             if (!$this->session->userdata('register')) {
               redirect('Form/tologin');
            }else{
              $this->load->view('form/form'); 
            }
            }

            //$this->load->view('form/form');
            //redirect home
            //redirect('welcome');
    }
    public function tologin()
    {
      $this->load->view('form/login'); 
    }
    public function second_login()
    {
       
    }
    public function tosignup()
    {
      if ($this->session->userdata('user_key')) {
        $this->load->view('form/login');
      }else{
        $this->load->view('form/form');
      }
       
    }
    public function valid_main()
    {
    /*  if (!$this->session->userdata('user_key')) 
    {
        redirect('welcome');
    }*/
            $this->load->library('encryption'); 
            $this->load->library('form_validation');
            $this->form_validation->set_rules('firstname', 'firstname', 'trim|required');
            $this->form_validation->set_rules('lastname', 'lastname', 'trim|required');
            $this->form_validation->set_rules('email', 'email', 'trim|required');
            $this->form_validation->set_rules('phone', 'phone', 'trim|required');
            $this->form_validation->set_rules('password', 'password', 'required');
            $this->form_validation->set_rules('gender', 'gender', 'trim|required');
            if ($this->form_validation->run() == TRUE)
            {
                  //check if email or phone number has already been used

          
                  $this->db->where('email', $this->security->sanitize_filename($this->input->post('email')));
                  $this->db->or_where('phone', $this->security->sanitize_filename($this->input->post('phone')));
                  $query = $this->db->get('userdata');
                  if ($query->num_rows() > 0)
                  {
                    $array = array(
                    'no_mail'          => 'true',
                    'email_exist'   =>'email or phone number already exists;'
                    ); 
                  }else{

                
                     $unique = bin2hex(openssl_random_pseudo_bytes(5));
                     $firstname = $this->security->xss_clean($this->security->sanitize_filename($this->input->post('firstname')));
                     $lastname = $this->security->xss_clean($this->security->sanitize_filename($this->input->post('lastname')));
                     $email = $this->security->xss_clean($this->security->sanitize_filename($this->input->post('email')));
                     $phone = $this->security->xss_clean($this->security->sanitize_filename($this->input->post('phone')));
                     $pass = password_hash($this->input->post('password'), PASSWORD_BCRYPT);
                     $gender = $this->security->xss_clean($this->security->sanitize_filename($this->input->post('gender')));
                     $data = array(
                        'firstname' => $firstname,
                        'lastname' => $lastname,
                        'email'   => $email,
                        'phone'    => $phone,
                        'password'   => $pass,
                        'gender'    => $gender,
                        'user_key'  => $unique,
                        'browser' => $this->agent->browser(),
                        'os' => $this->agent->platform(),
                        'ip' => $this->input->ip_address()
                     );
                     $this->session->set_userdata('register', true);
                //insert into database
                $insert = $this->db->insert('userdata', $data);

                    $array = array(
                    'success'          => 'true'
                    ); 
                  }

                    //STORE ALL VARIABLES IN A TEMPORARY SESSION TO BE USED IN THE NEXT FORM VALIDATION SECTION

            }
            
            if ($this->form_validation->run() == FALSE)
            {
                $array = array(
                'error'           => true,
                'fn_x'            => form_error('firstname'),
                'ln_x'            => form_error('lastname'),
                'email_x'         => form_error('email'),
                'phone_x'         => form_error('phone'),
                'password_x'      => form_error('password'),
                'gender_x'        => form_error('gender'),
                'holder_err'      => form_error('holder')
                ); 
               
            }
           echo json_encode($array);
    }
    public function o_valid()
    {

                $firstname = $this->security->xss_clean($this->sanitize_filename($this->input->post('firstname')));
                $lastname = $this->security->xss_clean($this->security->sanitize_filename($this->input->post('lastname')));
                $email  = $this->security->xss_clean($this->security->sanitize_filename($this->input->post('email')));
                $phone    = $this->security->xss_clean($this->security->sanitize_filename($this->input->post('phone')));
                $password  = $this->security->xss_clean($this->security->sanitize_filename($this->input->post('password')));
                $gender    = $this->security->xss_clean($this->security->sanitize_filename($this->input->post('gender')));
              
                $this->load->library('encryption'); 
     
        
              $msg = 'My secret waited';

            $encrypted_string = $this->encryption->encrypt($msg);
            echo $encrypted_string;
            echo "<br>";
            echo $this->encryption->decrypt('503c08310259f95f4992780ef56e9ff67102d7c04cd78dcf3563fc4395f4a81beba2067baceebc4e703bed362c36ba12f10eba18b20c075337030b0e34283cc1y/vJMzi2uBfcFvZGa5CB4C1CSbR60Zibk3fp0+3f542lUurRNvkEFK1qEmwAPeOX');
            echo $this->encryption->encode($msg);
    }
    public function work_form()
    {
        $this->db->where('user_id', $this->session->userdata('user_key'));
        $query = $this->db->get('workforce'); 
        if($query->num_rows() < 0){
        foreach($query->result() as $row)
        {
            echo"
        <script>
            window.location.href = '".base_url()."Main/work_profile/';  
        </script>
        ";
        }
    
        }else{
        if($this->session->userdata('worker_id')){
          redirect('Main/work_profile');
        }
        if($this->session->tempdata('spec_form') == 'work_form'){ 
          echo'
        <div id="work_form" class="w3-animate-zoom" style="margin:auto auto; display: block;position: relative;top:5px;max-width:700px;width: 100%;">
            <p class="w3-center" style="font-weight: bold; font-size: 24px;">Work Form</p>
            <div class="w3-white holder w3-card-5 w3-round-xlarge" style="position: relative; border-bottom-left:200px;top:-29px; height:auto; max-height:150vh; margin:10vh auto auto auto;width:90%; max-width: 400px;">
            <p id="acc_err" class="w3-text-red w3-center w3-margin-top w3-small"></p>
              <!--arrow top-->
              <div id="to_main2" class="w3-circle w3-card-6 w3-center w3-white" style="position:absolute; left:-12px; top:-13px;width:60px; height: 60px;padding:5px; "><div class="w3-circle " style="padding:11px; height: 50px; width:50px; background-image: linear-gradient(to left, #c24fd6, #9c27b0)"><img id="spin" class="w3-spin" src="'.base_url().'asset/newimg/spinner.svg" style="height:20px;display:none; width: 20px;"></div></div>
             

              <!--work form-->
              <form id="work" class="w3-white w3-container" style="display: block; margin:0 0 50px 0;">
                  <div>
                      
                        <select id="location"  name="location" class="w3-select w3-round-xxlarge w3-border w3-border-purple w3-hover-purple " style="font-size: 12px; width:100%;height:40px;margin:45px 0 5px 0; outline:none;  padding: 10px; -webkit-appearance:none;" name="location">
                              <option value="" disabled selected>--Choose Your Location --</option>        
                              
                              <option value="Rivers State">Rivers State</option>
                              <option value="Abuja">Abuja</option>
                              <option value="Lagos">Lagos</option>
                             
                        
                        </select>
                            <p id="location_err" class="w3-text-red w3-small  margin_error"></p>
                          
                      </div>

                  <div>

                        <select id="skill" name="skill" class="w3-select w3-round-xxlarge w3-border w3-border-purple w3-hover-purple" style="font-size: 12px; height:40px;
                          margin:10px 0 5px 0; width:100%; outline:none; -webkit-appearance:none; padding: 10px;" name="skill" value="">
                              <option value="" disabled selected > --Choose Your Service -- </option>
                              <option value="Animated Explainers">Animated Explainers</option>
                              <option value="AC Installation">AC Installation & Repairs</option>
                              <option value="Branding & Packag Designer">Branding & Packag Design</option>      
                              <option value="Baking">Baking (snacks, making cakes)</option>
                              <option value="Copywriting">Copywriting</option>
                              <option value="Content Writter">Content Writing</option>
                              <option value="CCTV Installer">CCTV Installation</option>
                              <option value="Digital Marketer">Digital Marketing</option>
                              <option value="Event Planning">Event Planning</option>
                              <option value="Electrician">Electrical Install/Wiring</option>
                              <option value="Graphic Designer">Graphic Design</option>
                              <option value="Generator Repairer">Generator Repairs</option>       
                              <option value="Hair Stylist">Hair Styling</option>
                              <option value="Private Barber">Private Barber</option>
                              <option value="Social Media Influencers">Social Media Influencing</option>
                              <option value="Laptop Repairer">Laptop Repairs</option>          
                              <option value="Mobile Developers">Mobile Development</option>        
                              <option value="Phone Repairer">Mobile phone Repair</option>              
                             <option value="Makeup Artist">Makeup Aritst</option>                             
                             <option value="Plumber">Plumbing</option>
                             <option value="Painter">Painting</option>
                             <option value="Python/Excell Programmer">Python/Excell Programming</option>
                             <option value="Photographer">Photography</option>
                             <option value="Pitch Deck Writers">Pitch Deck Writing</option>
                             <option value="Resume and CV writter">Resume and CV writing</option> 
                             <option value="Software development">Software development</option>
                             <option value="UI/UX designer">UI/UX Design </option>
                             <option value="Web Developer">Web Development</option>
                          </select>
                      </div>
                           <p id="skill_err" class="w3-text-red w3-small  margin_error" style:margin-bottom:-10px;></p>


                    <div>                          
                      <textarea id="describe" name="describe" class="w3- w3-small w3-hover-purple w3-round-large w3-border w3-border-purple "  style="outline:none;height:150px;width:100%; " type="text" value="" placeholder="describe your job, the skills you use"></textarea> 
                       <p id="decsribe_err" class="w3-text-red w3-small  margin_error"></p>
                    </div>



                    <div style="margin:5px 0 0 0;">
                            <label class="w3-text-black w3-small">Workmanship Charge</label>
                            <div class="w3-margin-top w3-row">
                                <div class="w3-border-purple w3-round-xxlarge w3-border w3-col" style="width:48%; margin:0 2% 0 0;"><naira class="w3-medium" style="width: 10%;padding:0 0 0 15px;">&#8358 </naira><input  type="number" placeholder="from" id="from" name="from" step="20" style="outline:none; height:32px; padding:0 0 0 15px; width: 70%;" class="w3-hover-plight-grey w3-small w3-white w3-round-xxlarge w3-border-0" placeholder="800" ></div>
  
                                <div class="w3-border-purple w3-round-xxlarge w3-border w3-col" style="width:48%; margin:0 0 0 2%;"><naira class="w3-medium" style="width: 10%;padding:0 0 0 15px;">&#8358 </naira><input type="number" placeholder="to" id="to" name="to" step="50" style="outline:none; height:34px; padding:0 0 0 15px; width: 70%;" class="w3-hover-white  w3-small w3-white w3-round-xxlarge w3-border-0"  placeholder="10000"></div> 
                            </div>
                            <p id="from_err" class="w3-text-red w3-small  margin_error"></p>
                            <p id="to_err" class="w3-text-red w3-small  margin_error"></p>
                    </div>

<!--********************************************************LOCATION COLLECTION*********************************************************************-->
                    <div style="margin:5px 0 0 0;">
                            <label class="w3-text-black w3-small">DADI displays your job on a map, allow DADI get your current location <div id="allow" class="w3-btn w3-blue w3-round-xlarge">Allow</div></label>
                            <div class="w3-margin-top w3-row">
                                <div class="w3-border-purple w3-round-xxlarge w3-border w3-col" style="width:48%; margin:0 2% 0 0;padding: 5px;"><div id="long" class="w3-medium" style="width: 10%;padding:0 0 0 15px;">Longitude</div></div>
  
                                <div class="w3-border-purple w3-round-xxlarge w3-border w3-col" style="width:48%; margin:0 0 0 2%;padding:5px;"><div id="lat" class="w3-medium" style="width: 10%;padding:0 0 0 15px;">Latitude</div></div> 
                            </div>
                            <p id="from_err" class="w3-text-red w3-small  margin_error"></p>
                            <p id="to_err" class="w3-text-red w3-small  margin_error"></p>
                    </div>


                     <div id="send" class="w3-circle w3-center " style="position:relative;bottom:-13px; left:90%;width:60px;z-index: 6; height: 60px;padding:5px; "><div class="w3-circle" style="padding: 16px 0 0 0; height: 50px; font-weight: 650; width:50px; background-image: linear-gradient(to left, #9c27b0, #c24fd6)"><img src="'.base_url().'asset/newimg/send_but.png" style="height:25px; font-size:; width: 25px;margin:-8px 0 0 5px;"></div></div>
              </form>
            
              
            </div>  
          </div>


</body>
</html>';
echo"
<script>


 $('#allow').click(function(){
  if (navigator.geolocation) 
  {
    navigator.geolocation.watchPosition(showPosition);
  } 
  else
  {
    alert('Geolocation is not supported by this browser.');
  }

function showPosition(position) {
  var lat = position.coords.latitude; 
  var long = position.coords.longitude;
$('#lat').text(lat.toPrecision(7));
$('#long').text(long.toPrecision(7));
alert(lat);


}
  });

/*
function report(state) {
  console.log('Permission ' + state);
}

handlePermission();
          
 var revokeBtn = document.querySelector('.revoke');

  ...

revokeBtn.onclick = function() {
  revokePermission();
}

  ...

function revokePermission() {
  navigator.permissions.revoke({name:'geolocation'}).then(function(result) {
    report(result.state);
  });
}             
*/
</script>
<script>
            $('#send').click(function(){
          
              var location = $('#location').val();
              var skill = $('#skill').val();
              var describe = $('#describe').val();
              var from = $('#from').val();
              var to = $('#to').val();
              var lat = $('#lat').text();
                //alert(location);
                //alert(skill);
                //alert(describe);
                //alert(from);
                //alert(to);
                if(lat != 'Latitude'){
                  alert('lat is null');
                }

                          $.ajax({
                               url:  '".base_url()."Form/valid_worker',
                              method: 'POST',
                              data: {location:location, skill:skill, describe:describe, from:from, to:to},
                              dataType: 'json',
                              beforeSend: function(){
                                  $('#spin').show();
                              },
                              success: function(data)
                              { 
                                if (data.error)
                                  {
                                      if (data.location_err != '') 
                                      {
                                        $('#location_err').html(data.location_err);
                                      }
                                      else
                                      {
                                        $('#location_err').html(''); 
                                      }
                                      //stop
                                      if (data.describe_err != '') 
                                      {
                                        $('#describe_err').html(data.describe_err);
                                      }
                                      else
                                      {
                                        $('#describe_err').html(''); 
                                      }
                                      //stop
                                  
                                      //stop
                                      if (data.skill_err != '') 
                                      {
                                        $('#skill_err').html(data.skill_err);
                                      }
                                      else
                                      {
                                        $('#skill_err').html(''); 
                                      }
                                      //stop
                                       if (data.from_err != '') 
                                      {
                                        $('#from_err').html(data.from_err);
                                      }
                                      else
                                      {
                                        $('#from_err').html(''); 
                                      }
                                       if (data.to_err != '') 
                                      {
                                        $('#to_err').html(data.to_err);
                                      }
                                      else
                                      {
                                        $('#to_err').html(''); 
                                      }
                                      $('#spin').hide();
                                  }
                                  if (data.account_false) 
                                     {
                                      $('#spin').hide();
                                      $('#to_err').html(''); 
                                      $('#from_err').html(''); 
                                      $('#describe_err').html(''); 
                                      $('#location_err').html(''); 
                                      $('#acc_err').html(data.account_false); 
                                     }
                                      else
                                      {
                                        $('#acc_err').html(''); 
                                      }
                                   if (data.success) 
                                     {
                                      $('#spin').hide();
                                      
                                         window.location.href = '".base_url()."Main/work_profile/';   
                                     } 
                                }
                          });
                        
            })
</script>

";

        }else{
           echo "string";;
        }
        }
        #end else for query
    }

    public function network(){
        $this->db->where('user_key', $this->session->userdata('user_key'));
        $query = $this->db->get('networkers'); 
        if($query->num_rows() > 0){
     foreach($query->result() as $row)
        {
              echo"
        <script>
             var ref_id = '".$row->net_id."';
             window.location.href = '".base_url()."Main/network/'+ref_id; 
        </script>
        ";
      }
        }else{
      if($this->session->userdata('network_id')){
        redirect('Main/network');
      }
      if($this->session->tempdata('spec_form') == 'network'){
          echo 
          '
          <div id="login"  class="w3-animate-zoom" style="margin:-10px 0 0 0; display: block;position: relative;">
              <p class="w3-center" style="font-weight: bold; font-size: 24px;">Agent Details</p>
              <div class="w3-white holder w3-card-4 w3-round-xlarge" style="position: relative; border-bottom-left:200px;top:-25px; height:55vh; margin:10VH auto auto auto;width:90%; max-width:400px;">
                <div id="acc_x" class="w3-text-red w3-center w3-small w3-margin-top "></div>
                <!--arrow top-->
                <div id="to_main2" class="w3-circle w3-card-6 w3-center w3-white" style="position:absolute; left:-12px; top:-13px;width:60px; height: 60px;padding:5px; "><div class="w3-circle " style="padding: 11px; height: 50px; width:50px; background-image: linear-gradient(to left, #c24fd6, #9c27b0)"><img id="spin" class="w3-spin" src="'.base_url().'asset/newimg/spinner.svg" style="height:20px;display:none; width: 20px;"></div></div>
                <div id="submit3" class="w3-circle w3-center w3-purple" style=" crusor:pointer;position:absolute; bottom:-13px; right:-12px;width:60px;z-index: 6; height: 60px;padding:5px; "><div class="w3-circle" style="padding: 16px 0 0 0; height: 50px; font-weight: 650; width:50px; background-image: linear-gradient(to left, #9c27b0, #c24fd6)"><img src="'.base_url().'asset/newimg/send_but.png" style="height:25px; font-size:; width: 25px;margin:-8px 0 0 5px;"></div></div>
              <p class="w3-small w3-text-grey w3-margin-top w3-center" style="position:relative;top:13%;">You will be paid using the the account details you provide below.</p>
              
                <!--work form-->
                <form id="work" class="w3- w3-container" style="display: block;position: relative;top:15%; ">
                    <div><input id="account" class="w3-input w3-border w3-border-purple w3-hover-purple  w3-round-xxlarge" placeholder="account number" style="height:40px;margin:10px 0 5px 0;outline: none;"  type="tel" name=""><p id="account_err" class="w3-text-red w3-small"></p></div>
                    <div>
                    <div><input id="acc_name" class="w3-input w3-border w3-border-purple w3-hover-purple  w3-round-xxlarge" placeholder="account name" style="height:40px;margin:10px 0 5px 0;outline: none;"  type="text" name=""><p id="acc_name_err" class="w3-text-red w3-small"></p></div>
                    <div>
                    <div>
                        <select id="bank"  name="bank" class="w3-select w3-round-xxlarge w3-border w3-border-purple w3-hover-purple " style="font-size: 12px; width:100%;height:40px;margin:10px 0 5px 0; outline:none;  padding: 10px; -webkit-appearance:none;" >
                              <option value="" disabled selected>--Choose Your Bank --</option>        
                              <option value="GUARANTY TRUST BANK ">GUARANTY TRUST BANK PLC</option>
                              <option value="ACCESS BANK">ACCESS BANK PLC</option>
                              <option value="ECOBANK NIGERIA">ECOBANK NIGERIA PLC</option>
                              <option value="ZENITH BANK">ZENITH BANK PLC</option>
                              <option value="FIRST BANK">FIRST BANK PLC</option>
                              <option value="FIRST CITY MONUMENT BANK">FIRST CITY MONUMENT BANK PLC</option>
                              <option value="POLARIS BANK">POLARIS BANK</option>
                              <option value="UNION BANK">UNION BANK OF NIGERIA</option>
                              <option value="DIAMOND BANK">DIAMOND BANK PLC (Access Bank)</option>
                              <option value="UNITED BANK FOR AFRICA">UNITED BANK FOR AFRICA (UBA)</option>
                              <option value="FIDELITY BANK">FIDELITY BANK NIGERIA PLC</option>
                              <option value="FSDH MERCHANT BANK"> FSDH MERCHANT BANK PLC</option>
                              <option value="HERITAGE BANK PLC">HERITAGE BANK PLC</option>
                              <option value="KEYSTONE BANK LIMITED">KEYSTONE BANK LIMITED</option>
                              <option value="RAND MERCHANT BANK">RAND MERCHANT BANK</option>
                              <option value="SKYE BANK">SKYE BANK</option>
                              <option value="STANBIC IBTC BANK">STANBIC IBTC BANK NIGERIA LIMITED</option>
                              <option value="STANDARD CHARTERED BANK">STANDARD CHARTERED BANK</option>
                              <option value="STERLING BANK">STERLING BANK</option>
                              <option value="UNITY BANK">UNITY BANK PLC</option>
                              <option value="WEMA BANK">WEMA BANK</option>
                              <option value="PROVIDUS BANK"> PROVIDUS BANK PLC</option>
                              <option value="CITIBANK">CITIBANK</option>
                          
                        </select>
                            <p id="bank_err" class="w3-text-red w3-small  margin_error"></p>
                          
                      </div>
                </form>
              
                
              </div>  
            </div>

          ';
          echo 
          "
           <script>   
            $('#submit3').click(function(){
            
              var account = $('#account').val();
              var acc_name = $('#acc_name').val();
              var bank = $('#bank').val();
             
                          $.ajax({
                               url:  '".base_url()."Form/valid_network',
                              method: 'POST',
                              data: {account:account, acc_name:acc_name, bank:bank},
                              dataType: 'json',
                              beforeSend: function(){
                                  $('#spin').show();
                              },
                              success: function(data)
                              { 
                                if (data.error)
                                  {

                                      if (data.account_err != '') 
                                      {
                                        $('#account_err').html(data.account_err);
                                      }
                                      else
                                      {
                                        $('#account_err').html(''); 
                                      }
                                      //stop
                                      if (data.acc_name_err != '') 
                                      {
                                        $('#acc_name_err').html(data.acc_name_err);
                                      }
                                      else
                                      {
                                        $('#acc_name_err').html(''); 
                                      }
                                      //stop
                                      if (data.bank_err != '') 
                                      {
                                        $('#bank_err').html(data.bank_err);
                                      }
                                      else
                                      {
                                        $('#bank_err').html(''); 
                                      }
                                     $('#spin').hide(); 
                                  }
                                if (data.account_false) 
                                 {
                                  $('#spin').hide();
                                  $('#acc_x').html(data.account_false); 
                                 }
                                  else
                                  {
                                    $('#acc_x').html(''); 
                                  }
                  
                                  if (data.success) 
                                     {
                                      $('#spin').hide();
                                      window.location.href = '".base_url()."Main/network/'+data.ref_id; 
                                     } 
                              }


                          });
                        
            })
        </script>
          ";
            }else{
           echo "string";;
        }
        }
    }
    public function valid_network()
    {
    /*  if (!$this->session->userdata('user_key')) 
    {
        redirect('welcome');
    }*/
            $this->load->library('encryption'); 
            $this->load->library('form_validation');
            $this->form_validation->set_rules('account', 'account number', 'numeric|trim|required');
            $this->form_validation->set_rules('acc_name', 'account name', 'trim|required');
            $this->form_validation->set_rules('bank', 'Your bank name', 'trim|required');

            if ($this->form_validation->run() == TRUE)
            {
                  $this->db->where('account_no', $this->input->post('account'));
                  $query = $this->db->get('networkers');
                  if ($query->num_rows() > 0)
                  {
                    $array = array(
                    'account_false'          => 'This account already exists'
                    ); 
                  }else{                  
                    $network_id = bin2hex(openssl_random_pseudo_bytes(5));
                    $this->session->set_userdata('network_id', $network_id);
                    $data = array(
                        'firstname' => $this->session->userdata('firstname'),
                        'lastname' => $this->session->userdata('lastname'),
                        'email'   => $this->session->userdata('email'),
                        'phone'    => $this->session->userdata('phone'),
                        'account_no'    => $this->encryption->encrypt($this->security->xss_clean($this->security->sanitize_filename($this->input->post('account')))),
                        'acc_name'    => $this->encryption->encrypt($this->security->xss_clean($this->security->sanitize_filename($this->input->post('acc_name')))),
                        'referrer'    => $this->session->tempdata('ref'),
                        'net_id'    => $network_id,
                        'user_key'  => $this->session->userdata('user_key'),
                        'referrer'  => $this->session->tempdata('ref'),
                        'bank'    => $this->encryption->encrypt($this->security->xss_clean($this->security->sanitize_filename($this->input->post('bank')))),
                     );
                    $insert = $this->db->insert('networkers', $data);

                    $array = array(
                    'success'          => 'true',
                    'ref_id'            => $network_id
                    ); 
                  }
            }
            
            if ($this->form_validation->run() == FALSE)
            {
                $array = array(
                'error'           => 'true',
                'account_err'     => form_error('account'),
                'acc_name_err'    => form_error('acc_name'),
                'bank_err'            => form_error('bank')
                ); 
               
            }
           echo json_encode($array);
    }

public function valid_worker()
    {
    /*  if (!$this->session->userdata('user_key')) 
    {
        redirect('welcome');
    }*/
            $this->load->library('encryption'); 
            $this->load->library('form_validation');
            $this->form_validation->set_rules('location', 'location', 'trim|required');
            $this->form_validation->set_rules('describe', 'description', 'required');
            //$this->form_validation->set_rules('expert', 'expertise', 'trim|required');
            $this->form_validation->set_rules('skill', 'skill category', 'trim|required');
            $this->form_validation->set_rules('from', 'workmanship range', 'trim|required');
            $this->form_validation->set_rules('to', 'workmanshi range', 'trim|required');
           
            

            if ($this->form_validation->run() == TRUE)
            {
                  
                  $this->db->where('facebook_page', $this->input->post('facebook'));
                  $query = $this->db->get('workforce');
                  if ($query->num_rows() > 0)
                  {
                    $array = array(
                    'account_false'          => 'This account already exists'
                    ); 
                  }else{
                    $array = array(
                    'success'          => 'true'
                    ); 

                  
                    $worker_id = bin2hex(openssl_random_pseudo_bytes(5));
                    $this->session->set_userdata('worker_id', $worker_id);
                    $data = array(
                        'firstname' => $this->session->userdata('firstname'),
                        'lastname' => $this->session->userdata('lastname'),
                        'email'   => $this->session->userdata('email'),
                        'contact'    => $this->session->userdata('phone'),
                        'gender'   =>$this->session->userdata('gender'),
                        'referrer'   =>$this->session->tempdata('ref'),
                        'state'    => $this->input->post('location'),
                        'job'    => $this->input->post('skill'),
                        'w_from'    => $this->input->post('from'),
                        'w_to'    => $this->input->post('to'),
                        'description'    => $this->input->post('describe'),
                        'work_id'    => $worker_id,
                        'user_id'     => $this->session->userdata('user_key'),
                        'ip'      =>     $this->input->ip_address()

                     );
                    $insert = $this->db->insert('workforce', $data);
                  }
            }
            
            if ($this->form_validation->run() == FALSE)
            {
                $array = array(
                'error'           => 'true',
                'describe_err'    => form_error('describe'),
                'location_err'    => form_error('location'),
                'skill_err'       => form_error('skill'),
                'from_err'        => form_error('from'),
                'to_err'          => form_error('to')
                ); 
               
            }
           echo json_encode($array);
    }


    public function login()
    {

            $this->load->library('encryption'); 
            $this->load->library('form_validation');
            $this->form_validation->set_rules('email', 'email', 'trim|required');
            $this->form_validation->set_rules('password', 'password', 'required');
          
            if ($this->form_validation->run() == TRUE)
            {
                  $this->db->where('email', $this->input->post('email')); 
                  $query = $this->db->get('userdata');
                  if ($query->num_rows() > 0)
                  {
                    foreach ($query->result_array() as $user)
                    {
                            $pass = $user['password']; // access attributes
                            $password = $this->input->post('password'); 
                        if (!password_verify($password, $pass)) 
                        {
                          $array = array(
                          'pass_false'          => 'password is not correct'
                          );                  
                        }
                        else
                        {
                            //set sessions
                            $this->session->set_userdata('user_key', $user['user_key']);
                            $this->session->set_tempdata('user_key', $user['user_key'], 604800);
                            $this->session->set_userdata('email', $user['email']);
                            $this->session->set_userdata('firstname', $user['firstname']);
                            $this->session->set_userdata('lastname', $user['lastname']);
                            $this->session->set_userdata('referrer', $user['referrer']);
                            $this->session->set_userdata('phone', $user['phone']);
                            $this->session->set_userdata('login', TRUE);
                          $array = array(
                          'success'          => $pass
                          ); 
                        }
                    }
                         
                  }else{
                    $array = array(
                    'email_false'          => 'email does not exist'
                    ); 
                  }

                    //STORE ALL VARIABLES IN A TEMPORARY SESSION TO BE USED IN THE NEXT FORM VALIDATION SECTION

            }
            
            if ($this->form_validation->run() == FALSE)
            {
                $array = array(
                'error'           => 'true',
                'l_email_err'        => form_error('email'),
                'l_password_err'        => form_error('password')
                ); 
               
            }
           echo json_encode($array);
  }

    public function load_login()
    {
       $this->load->view('form/login'); 
            
    }

      public function bridge()
    {
        
            
    }
   
}

?>
