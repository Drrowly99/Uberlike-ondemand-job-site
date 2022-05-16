
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
<?php 
	$ref = $this->uri->segment(3, 10);
	if ($this->session->tempdata('recover')){
		if($ref == $this->session->tempdata('recover')){ ?>
			<script>
				$('#password_first').show();
				$('#email_first').hide();
			</script>
		<?php }else{ ?>
			<script>
				$('#email_first').show();
				$('#password_first').hide();
			</script>
		<?php }
	}else{}
	
?>
<body>
  <div class=" w3-border w3-side" style="min-height: 100vh;max-height:auto;color:white; position: relative; margin:auto auto auto auto; width:100%; max-width: 700px; background-image: linear-gradient(to bottom,#6b0d7b, #b838ce)">
   <div class=" w3-xlarge w3-margin" style="letter-spacing: 10px;"> DADI</div>
    <div class="" id="holder" style="">

    <!--EMAIL-->
    <div id="email_first" style="margin:-10px 0 0 0; display: none;position: relative;">
              <p class="w3-center" style="font-weight: bold; font-size: 24px;">Forgot Password</p>
        <div class="w3-white holder w3-card-4 w3-round-xlarge" style="position: relative; border-bottom-left:200px;top:-25px; height:35vh; margin:10VH auto auto auto;width:90%; max-width:400px;">
                <div id="email_exist" class="w3-text-red w3-center w3-small w3-margin-top "></div>
                <!--arrow top-->
                <div id="to_main2" class="w3-circle w3-card-6 w3-center w3-white" style="position:absolute; left:-12px; top:-13px;width:60px; height: 60px;padding:5px; "><div class="w3-circle " style="padding:11px; height: 50px; width:50px; background-image: linear-gradient(to left, #c24fd6, #9c27b0)"><img id="spin_f" class="w3-spin" src="http://localhost/dadibeta/asset/newimg/spinner.svg" style="height:20px;display:none; width: 20px;"></div></div>

                <div id="send_f" class="w3-circle w3-center w3-purple" style="position:absolute; bottom:-13px; right:-12px;width:60px;z-index: 6; height: 60px;padding:5px; "><div class="w3-circle" style="padding: 16px 0 0 0; height: 50px; font-weight: 650; width:50px; background-image: linear-gradient(to left, #9c27b0, #c24fd6)"><img src="http://localhost/dadibeta/asset/newimg/send_but.png" style="height:25px; font-size:; width:23px;margin:-8px 0 0 5px;"></div></div>

                <!--work form-->
                <form id="work" class="w3- w3-container" style="display: block;position: relative;top:20%; ">
                    <div><input id="email" class="w3-input w3-border w3-border-purple w3-hover-purple  w3-round-xxlarge" placeholder="Input your email" style="height:40px;margin:10px 0 5px 0;outline: none;"  type="email" name="email"><p id="email_err" class="w3-text-red w3-small"></p></div>
                </form>
                 
            </div>  
                  
        </div>


                <!--EMAIL-->
    <div id="password_first" style="margin:-10px 0 0 0; display: block;position: relative;">
              <p class="w3-center" style="font-weight: bold; font-size: 24px;">Reset Password</p>
              <div class="w3-white holder w3-card-4 w3-round-xlarge" style="position: relative; border-bottom-left:200px;top:-25px; height:35vh; margin:10VH auto auto auto;width:90%; max-width:400px;">
                <div id="email_exist" class="w3-text-red w3-center w3-small w3-margin-top "></div>
                <!--arrow top-->
                <div id="to_main2" class="w3-circle w3-card-6 w3-center w3-white" style="position:absolute; left:-12px; top:-13px;width:60px; height: 60px;padding:5px; "><div class="w3-circle " style="padding:11px; height: 50px; width:50px; background-image: linear-gradient(to left, #c24fd6, #9c27b0)"><img id="spin" class="w3-spin" src="http://localhost/dadibeta/asset/newimg/spinner.svg" style="height:20px;display:none; width: 20px;"></div></div>

                <div id="send_p" class="w3-circle w3-center w3-purple" style="position:absolute; bottom:-13px; right:-12px;width:60px;z-index: 6; height: 60px;padding:5px; "><div class="w3-circle" style="padding: 16px 0 0 0; height: 50px; font-weight: 650; width:50px; background-image: linear-gradient(to left, #9c27b0, #c24fd6)"><img src="http://localhost/dadibeta/asset/newimg/send_but.png" style="height:25px; font-size:; width:23px;margin:-8px 0 0 5px;"></div></div>

                <!--work form-->
                <form id="work" class="w3- w3-container" style="display: block;position: relative;top:20%; ">
                    <div><input id="password1" class="w3-input w3-border w3-border-purple w3-hover-purple  w3-round-xxlarge" placeholder="New Password" style="height:40px;margin:10px 0 5px 0;outline: none;"  type="text" name="password"><p id="pass1_err" class="w3-text-red w3-small"></p></div>
                    <div>
                    <div><input id="password2" class="w3-input w3-border w3-border-purple w3-hover-purple  w3-round-xxlarge" placeholder="Retype Password" style="height:40px;margin:10px 0 5px 0;outline: none;"  type="password" name="pass"><p id="pass2_err" class="w3-text-red w3-small"></p></div>

                </form>
              
                
              </div>  
                  
            </div>





  </div>
</div>
<div id="result">
  
</div>
</body>
</html>

<?php
?>

<script>   
  $('#send_p').click(function(){
    //show eye
     alert('cl');
    var password1 = $('#password1').val();
    var password2 = $('#password2').val();


 		if(password1 == ''){
 			$('#pass1_err').text('A new password is required');
 		}else if(password2 == ''){
 			$('#pass2_err').text('Retype the first password');
 		}
  		else{
  		if(password1 === password2){

    $('#pass2_err').text('');
                $.ajax({
                    url:  '<?php echo base_url()?>Form/passconfirm',
                    method: 'POST',
                    data: {password1:password1, password2:password2},
                    beforeSend: function()
                    {
                      $('#spin').show();
                    },
                    success: function(data)
                    { 
                    	
                    	alert(data);
                       $('#spin').hide();
          

                    }

                });
            }else{
            	$('#pass2_err').html('<div class="w3-text-green">Password does not match</div>');
            }
        }
  })
  </script>    
<script>   

  $('#send_f').click(function(){
    //show eye
     
    var email = $('#email').val();
 		if(email == ''){
	$('#email_err').html('Email is required');
 		}else{
                $.ajax({
                    url:  '<?php echo base_url() ?>Form/sendforgot',
                    method: 'POST',
                    data: {email:email},
                    beforeSend: function()
                    {
                      $('#spin_f').show();
                    },
                    success: function(data)
                    { 
                    	alert(data);
                    	$('#email_err').html('<div class="w3-text-green">A mail has been sent to the above provided email, please check it to recover your password. expires in 20 minutes</div> ');
                       $('#spin_f').hide();
                       $('#email_first').show();
                       $('#password_first').hide();

                    }

                });
            }
  })
  </script> 