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
  <div class=" w3-border w3-side" style="min-height: 100vh;max-height:auto;color:white; position: relative; margin:auto auto auto auto; width:100%; max-width: 700px; background-image: linear-gradient(to bottom,#6b0d7b, #b838ce)">
    <div class="w3-white" style="height:9vh;position: fixed; max-width: 700px; width:100%;top:0; z-index:1100;">
      <img src="http://localhost/webapp/image/dadipurple.png" style="position: relative;width:70px; height:26px;top:11px;left:10px;">
    </div><!--header-->

    <div class="" id="holder" style="position: relative;top:50px;">

    <!--LOGIN-->
    <div id="login" style="margin:-10px 0 0 0; display: bold;position: relative;">
              <p class="w3-center" style="font-weight: bold; font-size: 24px;">Login <?php echo $this->session->tempdata('ref') ?> <?php echo $this->session->userdata('register') ?></p>
              <div class="w3-white holder w3-card-4 w3-round-xlarge" style="position: relative; border-bottom-left:200px;top:-25px; height:40vh; margin:10VH auto auto auto;width:90%; max-width:400px;">
                <div id="email_exist" class="w3-text-red w3-center w3-small w3-margin-top "></div>
                <!--arrow top-->
                <div id="to_main2" class="w3-circle w3-card-6 w3-center w3-white" style="position:absolute; left:-12px; top:-13px;width:60px; height: 60px;padding:5px; "><div class="w3-circle " style="padding:11px; height: 50px; width:50px; background-image: linear-gradient(to left, #c24fd6, #9c27b0)"><img id="spin" class="w3-spin" src="http://localhost/dadibeta/asset/newimg/spinner.svg" style="height:20px;display:none; width: 20px;"></div></div>

                <div id="submit2" class="w3-circle w3-center w3-purple" style="position:absolute; bottom:-13px; right:-12px;width:60px;z-index: 6; height: 60px;padding:5px; "><div class="w3-circle" style="padding: 16px 0 0 0; height: 50px; font-weight: 650; width:50px; background-image: linear-gradient(to left, #9c27b0, #c24fd6)"><img src="http://localhost/dadibeta/asset/newimg/send_but.png" style="height:25px; font-size:; width: px;margin:-8px 0 0 5px;"></div></div>

                <!--work form-->
                <form id="work" class="w3- w3-container" style="display: block;position: relative;top:20%; ">
                    <div><input id="l_email" class="w3-input w3-border w3-border-purple w3-hover-purple  w3-round-xxlarge" placeholder="Email" style="height:40px;margin:10px 0 5px 0;outline: none;"  type="email" name=""><p id="l_email_err" class="w3-text-red w3-small"></p></div>
                    <div>
                    <div class="w3-border w3-border-purple w3-row w3-hover-purple w3-round-xxlarge" style="height:40px;margin:10px 0 5px 0;"><input id="l_password" class="w3-input w3-border-0 w3-white w3-col w3-hover-purple w3-round-xxlarge" placeholder="password" style="outline: none; height:38px; margin:; width: 88%;"  type="password" name="">
                      <span toggle="password_field" class="w3-col fa fa-fw fa-eye field_icon toggle-password" style="width: 7%;margin:8px 0 0 0;"></span></div>
                    <p id="l_password_err" class="w3-text-red w3-small"></p> 
                  </div>
                </form>
              
                
              </div>  
                  <div class="w3-center w3-bottom " style="position: absolute;bottom:-160px; left: 50%; width:250px; z-index: 5; margin:0 auto 0 -125px ;">dont have an account ? <span id="dont_have" class="w3-border-bottom w3-border-white">Sign Up</span></div>
            </div>

  </div>
</div>
<div id="result">
  
</div>
</body>
</html>

<script>   
  $('#dont_have').click(function(){
      window.location.href = '<?php echo base_url() ?>Form/tosignup';
    })
    $(document).on('click', '.toggle-password', function(){
      $(this).toggleClass("fa-eye fa-eye-slash");
      var input = $("#l_password");
      input.attr("type") === 'password' ? input.attr('type', 'text') : input.attr('type', 'password')
    }); 
    
  function mouseoutPass(obj) {
    var obj = document.getElementById('l_password');
    obj.type = "password";
  }
  $('#submit2').click(function(){
    //show eye
     
    var email = $('#l_email').val();
    var password = $('#l_password').val();

 
                $.ajax({
                    url:  '<?php echo base_url() ?>Form/login',
                    method: 'POST',
                    data: {email:email, password:password},
                    dataType: 'json',
                    beforeSend: function()
                    {
                      $('#spin').show();
                    },
                    success: function(data)
                    { 
                      if (data.error)
                        {
                            if (data.l_email_err != '') 
                            {
                              $('#l_email_err').html(data.l_email_err);
                            }
                            else
                            {
                              $('#l_email_err').html(''); 
                            }
                            //stop
                            if (data.l_password_err != '') 
                            {
                              $('#l_password_err').html(data.l_password_err);
                            }
                            else
                            {
                              $('#l_password_err').html(''); 
                            }
                          $('#spin').hide();
                        }

                        if (data.no_email)
                        {
                          $('#spin').hide();
                          $('#l_email_err').html(data.no_email);
                        }
                        else{
                          $('#l_email_err').html('');
                        }
                        if (data.pass_false)
                        {
                          $('#spin').hide();
                          $('#l_password_err').html(data.pass_false);
                        }
                        else{
                          $('#l_password_err').html('');
                        }
                        if (data.success) 
                           {
                            $('#l_password_err').html('');
                            $('#l_email_err').html('');
                              $('#spin').hide();
                             <?php if($this->session->tempdata('spec_form')){ ?> 
                              $.ajax({
                                url:  '<?php echo base_url() ?>Form/<?php if($this->session->tempdata('spec_form')){ echo $this->session->tempdata('spec_form'); }else{ echo 'second_login'; } ?>',
                                method: 'POST',
                                beforeSend: function(){
                                  
                                },
                                success: function(data)
                                {
                                  $('#spin').hide();
                                  $('#login').hide();
                                  $('#holder').html(data);
                                
                                }
                              })
                              <?php }else{ ?>
                                window.location.href = "<?php  echo base_url()?>Form/tologin";
                              <?php } ?>
                       
                           } 
                    }

                });
  })
  </script>    

<?php




