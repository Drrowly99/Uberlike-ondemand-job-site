<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>DADI| Find and Hire Artisans around you</title>
<meta name="viewport"  content="width=device-width, initial-scale=1">
<meta name="description" content="DADI| Find and Hire Artisans around you">
<meta name="keywords" content=" Connecting Artisans and frelancers to potential consumers">
<meta name="robots"  content="index, follow">
<meta property="og:url"           content="https://www.dadi.com.ng" />
<meta property="og:type"          content="website" />
<meta property="og:title"         content="DADI| Find and Hire Artisans around you" />
<meta property="og:description"   content="Connecting Artisans and frelancers to potential consumers" />
<meta property="og:image"         content="https://www.your-domain.com/image/advert.jpg" />
<link rel="shortcut icon" type="image/png" href="<?php echo base_url();?>asset/image/weblogo.png">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <!-- Link Swiper's CSS -->
<link rel="stylesheet" href="<?php echo base_url();?>asset/css/w3.css"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="<?php echo base_url();?>asset/script/jquery-3.3.1.js">
</script>
<style >
 body{
      font-family: 'Candara body copy';
      font-family:'Inria Serif', serif;
      font-family:'Titillium Web', sans-serif;
    }
    .margin_error{
      position: relative;
      top: -10px;
      left: 2px;
      margin-bottom: -5px;
    }
</style>
</head>

<body>
 
<div class=" w3-border w3-side" style="height: 100vh;color:white; position: relative; margin:auto auto auto auto; width:100%; max-width: 700px; background-image: linear-gradient(to bottom,#6b0d7b, #b838ce)">
    <div class="w3-white" style="height:9vh;position: fixed; max-width: 700px; width:100%;top:0; z-index:1100;">
      <img src="http://localhost/webapp/image/dadipurple.png" style="position: relative;width:80px; height:30px;top:9px;left:10px;">
    </div><!--header-->
    <div class="" id="holder" style="">
      <div id="main_form" style="margin:-10px 0 0 0; display: block;">
        <p class="w3-center" style="font-weight: bold; font-size: 24px;">Create Account <?php echo $this->session->userdata('user_key') ?></p>
        <div class="w3-white holder w3-card-4 w3-round-xlarge" style="position: relative; border-bottom-left:200px;top:-25px; height:70vh; margin:10VH auto auto auto;width:90%; max-width: 400px;">
          <div id="email_exist" class="w3-text-red w3-center w3-small w3-margin-top "></div>
          <!--arrow top-->
          <div class="w3-circle w3-card-6 w3-center w3-white" style="position:absolute; left:-12px; top:-13px;width:60px;z-index: 5; height: 60px;padding:5px; "><div class="w3-circle to_home" style="padding: 11px; height: 50px; width:50px; background-image: linear-gradient(to left, #c24fd6, #9c27b0)"><img id="spin" class="w3-spin" src="http://localhost/dadibeta/asset/newimg/spinner.svg" style="height:20px; width: 20px;display:none; "></div></div>

            <!--main form-->
            <form id="m" class="w3- w3-container" style="position: relative; ">
              <div><input id="fn" class="w3-input w3-border w3-border-purple w3-hover-purple w3-round-xxlarge" value="" placeholder="Firstname" style=" padding:0 0 0 15px;height:40px;margin:45px 0 5px 0;outline: none;" type="text" name=""><p id="fn_x" class="w3-text-red w3-tiny margin_error"></p></div>
              <div><input id="ln" class="w3-input w3-border w3-border-purple w3-hover-purple  w3-round-xxlarge" placeholder="Lastname" style=" padding:0 0 0 15px;height:40px;margin:10px 0 5px 0;outline: none;" type="text" name=""><p id="ln_x" class="w3-text-red w3-tiny margin_error"></p></div>
              <div><input id="email" class="w3-input w3-border w3-border-purple w3-hover-purple  w3-round-xxlarge" placeholder="Email" style=" padding:0 0 0 15px;height:40px;margin:10px 0 5px 0;outline: none;"  type="email" name=""><p id="email_x" class="w3-text-red w3-tiny margin_error"></p></div>
              <div><input id="phone" class="w3-input w3-border w3-border-purple w3-hover-purple  w3-round-xxlarge " placeholder="Phone" style=" padding:0 0 0 15px;height:40px;margin:10px 0 5px 0;outline: none;"  type="tel" name=""><p id="phone_x" class="w3-text-red w3-tiny margin_error"></p></div>
              <div><input id="password" class="w3-input w3-border w3-border-purple w3-hover-purple  w3-round-xxlarge " placeholder="password" style=" padding:0 0 0 15px;height:40px;margin:10px 0 5px 0;outline: none;"  type="password" name=""><p id="password_x" class="w3-text-red w3-tiny margin_error"></p></div>
              <div>
                      <label style="font-size: 15px; font-weight: 100;color:black;">Gender</label>
                      <div style="display:flex;margin-top: 10px;">
                      <label for="male" class="w3-text-grey">Male</label>
                        <input type="radio" class="w3-radio w3-border w3-border-purple w3-text-purple" id="male" name="gender" style="flex:3;" value="male">
                      <label for="female"  class="w3-text-grey">Female</label>
                        <input type="radio"  class="w3-radio w3-border w3-border-purple" id="female" name="gender" style="flex:3;" value="female">
                      <label for="other"  class="w3-text-grey">Other</label>
                        <input type="radio"  class="w3-radio w3-border w3-border-purple" id="other" name="gender" style="flex:3;" value="other"> 
                     
                     </div>
                     <p id="gender_x" class="w3-text-red w3-small  margin_error"></p>
                  </div>
                 <div class="w3-small">By creating an account, you agree to our <p class="w3-text-blue terms">terms and conditions</p></div>
            </form>
            <!--work form-->
          <!--arrow bottom-->
          <div id="to_work" class="w3-circle w3-center w3-purple" style="position:absolute; bottom:-13px; right:-12px;width:60px;z-index: 6; height: 60px;padding:5px; "><div class="w3-circle" style="padding: 16px 0 0 0; height: 50px; font-weight: 650; width:50px; background-image: linear-gradient(to left, #9c27b0, #c24fd6)"><img src="http://localhost/dadibeta/asset/newimg/send_but.png" style="height:25px; font-size:; width: 25px;margin:-8px 0 0 5px;"></div></div>
        </div>  

        <div  class="w3-center" style="position: relative;bottom:10px;z-index: 5;">Already have an account ? <span id="go_login" class="w3-border-bottom w3-border-white">Login</span></div>
      </div>



</div>
<div id="result">
  
</div>
</body>
</html>
<script>
  $(document).ready(function() {
   $('.terms').click(function(){
      $('#terms').show();
   })
    $('#dont_have').click(function(){
      $('#main_form').show();
      $('#login').hide();
      $('#work_form').hide();
    })
    $('#to_main').click(function(){
      $('#main_form').show();
      $('#login').hide();
      $('#work_form').hide();
    })
    $('#to_main2').click(function(){
      $('#main_form').show();
      $('#login').hide();
      $('#work_form').hide();
    })
    $('#to_work').click(function(){
      //we have to check if it is actually supposed to go to work or to network
      //* first validate the input into the form first section.
         // set variables
          // set variables

      var firstname = $('#fn').val();
      var lastname = $('#ln').val();
      var phone = $('#phone').val();
      var email = $('#email').val();
      var password = $('#password').val();
      var gender = $("input[name='gender']:checked").val();
      alert(gender);
      if (firstname == '') {
        alert('fill the form');
      }else{
                          $.ajax({
                              url: "<?php echo base_url() . 'Form/valid_main'?>", 
                              method: 'POST',
                              data: {email:email, firstname:firstname, lastname:lastname, phone:phone, gender:gender, password:password},
                              dataType: 'json',
                              beforeSend: function(){
                                  $('#spin').show();
                                },
                              success: function(data)
                              { 
                                if (data.error)
                                  {
                                    $('#email_exist').html('');
                                      if (data.fn_x != '') 
                                      {
                                        $('#fn_x').html(data.fn_x);
                                      }
                                      else
                                      {
                                        $('#fn_x').html(''); 
                                      }
                                      //stop
                                      if (data.ln_x != '') 
                                      {
                                        $('#ln_x').html(data.ln_x);
                                      }
                                      else
                                      {
                                        $('#ln_x').html(''); 
                                      }
                                      //stop
                                      if (data.email_x != '') 
                                      {
                                        $('#email_x').html(data.email_x);
                                      }
                                      else
                                      {
                                        $('#email_x').html(''); 
                                      }
                                      //stop
                                      if (data.phone_x != '') 
                                      {
                                        $('#phone_x').html(data.phone_x);
                                      }
                                      else
                                      {
                                        $('#phone_x').html(''); 
                                      }
                                      //stop
                                      if (data.password_x != '') 
                                      {
                                        $('#password_x').html(data.password_x);
                                      }
                                      else
                                      {
                                        $('#password_x').html(''); 
                                      }
                                      //stop
                                      if (data.gender_x != '') 
                                      {
                                        $('#gender_x').html(data.gender_x);
                                      }
                                      else
                                      {
                                        $('#gender_x').html(''); 
                                      }
                                      $('#spin').hide();
                                  }
                                  if (data.no_mail) 
                                     {
                                       if (data.email_exist != '') 
                                      {
                                        $('#spin').hide();
                                        $('#ln_x').html('');
                                        $('#email_x').html('');
                                        $('#fn_x').html('');
                                        $('#phone_x').html('');
                                        $('#gender_x').html('');
                                        $('#password_x').html('');
                                        $('#email_exist').html(data.email_exist);
                                      }
                                     }
                                  if (data.success) 
                                     {
                                      $('#email_exist').html('');
                                        $('#spin').hide();
                                        $('#fn_x').html('');
                                        $('#ln_x').html('');
                                        $('#email_x').html('');
                                        $('#phone_x').html('');
                                        $('#password_x').html('');
                                        $('#gender_x').html('');

                                        window.location.href = "<?php  echo base_url()?>Form/tologin";

                                     } 
                              }


                          });
                        }
    })


    $('#go_login').click(function(){
      window.location.href = '<?php echo base_url() ?>Form/tologin';
    })
    
  })
        
</script>


cd C:\project\mongodb\bin
mongod.exe " --dbpath=C:\project\mongodb\data\db"