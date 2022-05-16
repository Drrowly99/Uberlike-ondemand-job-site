<!DOCTYPE html>
<html lang="en">
<head>
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
<!--Manifest Ios-->
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<meta name="apple-mobile-web-app-title" content="E-Commerce Demo">
<link rel="apple-touch-icon" href="images/touch/apple-touch-icon.png">
<!-- Maniferst icon for window-->
<meta name="msapplication-TileImage" content="images/touch/ms-touch-icon-144x144-precomposed.png">
<meta name="msapplication-TileColor" content="#2F3BA2">
<!-- end manifest-->
<link rel="shortcut icon" type="image/png" href="<?php echo base_url();?>asset/image/weblogo.png">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
<link rel="stylesheet" href="<?php  echo base_url();?>asset/css/w3.css"/>
<link rel="stylesheet" href="<?php  echo base_url();?>asset/css/st.css"/>
<!-- call to manifest-->
<link rel="manifest" href="<?php  echo base_url();?>manifest.json">
<script src="<?php echo base_url();?>asset/script/jquery-3.3.1.js">
</script>

<script src="js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/css?family=Inria+Serif|Open+Sans+Condensed:300|Playfair+Display|Quicksand|Titillium+Web&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.6.0/dist/leaflet.css"
integrity="sha512-xwE/Az9zrjBIphAcBb3F6JVqxf46+CDLwfLMHloNu6KEQCAWi6HcDUbeOfBIptF7tcCzusKFjFw2yuvEpDL9wQ=="
crossorigin=""/>
<script src="https://unpkg.com/leaflet@1.6.0/dist/leaflet.js"
integrity="sha512-gZwIG9x3wUXg2hdXF6+rVkLF/0Vi9U8D2Ntg4Ga5I5BZpVkVxlJWbSQtXPSiUTtC0TjtGOmxa1AJPuV0CPthew=="
crossorigin=""></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!--TESTING SERVICE WORKER CODE FOR NETWORK-->
<script type="text/javascript">
  if ('serviceWorker' in navigator) {
  navigator.serviceWorker.register('<?php  echo base_url();?>service-worker.js')
  .then(function(registration) {
    console.log('Registration successful, scope is:', registration.scope);
  })
  .catch(function(error) {
    console.log('Service worker registration failed, error:', error);
  });
}
</script>
<style type="text/css">
  
  .text-purple{color:#d5afdc;}
.w2-hover-yellow:hover{color:#000!important;background-color:#f1f028!important}
.w2-yellow:hover{background-color:#f1f028!important}
.w1-yellow{color:#f1f028!important}
 .w3-card-1{box-shadow:0px 0px 0px 0 rgba(33, 31, 31, 0.13), 0px 3px 3px 0 rgba(0,0,0,0.12)}
  .w3-card-5{box-shadow:5px 13px 14px 0px rgba(202, 202, 202, 0.46), 14px -1px 20px 0 rgba(210, 202, 202, 0.19)}
  .shadow1{box-shadow: -1px 1px 7px 0 rgba(222, 222, 222, 0.16), -1px 15px 20px 0 rgba(234, 234, 234, 0.22)};
  .shadow2{box-shadow: 5px 13px 14px 0px rgba(230, 230, 230, 0.46), 5px 3px 20px 0 rgba(220, 220, 220, 0.19)};
   .w3-card-6{box-shadow:5px 13px 14px 0px rgba(202, 202, 202, 0.46), 14px -1px 20px 0 rgba(210, 202, 202, 0.19)}
   .w2-modal{z-index:3;display:none;padding-top:100px;position:fixed;left:0;top:0;width:100%;height:100%;overflow:auto;background-color:rgba(255, 255, 255, 0.95)}
</style>
</head>
<body class="w3-card w3- w3-border-red" style="position: relative; height: 100vh;max-width:700px; margin:auto;">
  <!-- zoom link modal -->
  <div id="modal" class="w2-modal" style="display: none!important;">
  <div class="w3-center w3-modal-content w3-card-5 w3-animate-zoom w3-white w3-round-large " style="">
    <div class=" w3-display-container w3-white " style="position: relative;height:150px; width:100%;">
      <div class="w3-display-topright closelink w3-text-red w3-hover-text-black" style="font-size: 25px;font-weight:700;padding:5px;">&times</div>
      <p class="w3-display-middle" style="font-weight: 50;">Your referral link, <l class="w3-text-blue">copy and share</l></p>

      <input type="" name="" class="text w3-card-5 w3-padding w3-display-bottommiddle w3-small w3-border-0" style="text-decoration: none; bottom:40px; width:170px;outline: none; " value="<?php echo base_url(),'form/',$this->session->userdata('network_id') ?>">
      <p class="w3-white w3-card copied w3-center w3-animate-zoom w3-input " style="display:none;height: 30px; padding: 5px 10px; width:100px;position: absolute; bottom: 40px; right: 20px; border-radius: 5px 0 0 10px;">Copied</p>
      <span class="w3-padding copy  fa fa-copy w3-display-bottomright w3-margin-bottom w3-text-purple" style="font-size:24px;"></span>
    </div>
  </div>
  </div>


   <div class="  w3- w3-side" style="height: 100vh; margin:auto auto auto auto; width:100%; max-width: 700px;">
    <img src="<?php echo base_url();?>asset/newimg/back1.png" class="w3-ide" style="position: absolute; top:0; width:100%; height:50%;z-index:;">
      <div class="w3-text-white w3-xlarge w3-margin-left w3-center" style="position:relative;letter-spacing: 10px;top:20px;">DADI</div>
      <div class="" style="position: relative;font-weight: 600; top:30px;">
  <h4 class="w3-text-white w3-margin-left w3-left" style="">AGENT DIVINE <?php //echo $this->session->userdara('firstname'); ?></h4>
  <h4 id="link" class="w3-right w3-margin-right w3-text-white" style="margin:13px 0 0 0;"><i class="fa fa-link"></i></h4>
</div>
    <div class="w3-white w3-row w3-card-1 w3-round-large w3-small" style="position: relative;top:90px; height:245px; max-width:500px; width:78%; margin:auto auto;">
      <div class="w3-container" style="position:relative; top:-26px;margin:0 0 10px;">
        <div class="w3-card-5 w3-col w3-center w3-round-large w3-text-purple" style="position:relative; width: 42%; height:80px;margin:4px 8px;"><span class="w3-text-black w3- w3-large" style="position: absolute;top:25%;width:90px;left:50%;margin-left: -45px;"><b id="am"> 0</b></span><span style="position: relative;bottom: -65px;">Total Amount</span></div>
        <div class="w3-card-5 w3-col w3-center w3-round-large w3-text-purple" style="position:relative; width: 42%; height:80px;margin:4px 8px;"><span id="ref" class="w3-text-black w3- w3-large" style="position: absolute;top:25%;width:90px;left:50%;margin-left: -45px;">0</span><span style="position: relative;bottom: -65px;">Total Referrals</span></div>
        <div class="w3-card-5 w3-col w3-center w3-round-large w3-text-purple" style="position:relative; width: 42%; height:80px;margin:4px 8px;"><span class="w3-text-black w3- w3-large hire" style="position: absolute;top:25%;width:90px;left:50%;margin-left: -45px;">0</span><span style="position: relative;bottom: -65px;">Total Hire</span></div>
        <div class="w3-card-5 w3-col w3-center w3-round-large w3-text-purple" style="position:relative; width: 42%; height:80px;margin:4px 8px;"><span class="w3-text-black w3- w3-large" style="position: absolute;top:25%;width:90px;left:50%;margin-left: -45px;"><b> 100000</b></span><span style="position: relative;bottom: -65px;">Payable Amount</span></div>
        <div class="w3-btn w3-purple w3-center w3-round-large with" style="position: relative;top:10px;left:50%;margin:0 0 0 -60px ; width: 120px;">Withdraw</div>
      </div>
    </div>
      <!--ADD TO HOMESCREEN-->
 <div class=" w3-round-large w3-display-container home" style="position:absolute; bottom:-70%; padding:5px;top:20px;height: 90px; width:90;display: none; margin:auto 5%;background-color: rgba(31, 30, 30, 0.86);z-index:100; color:white;">
  <p class="w3-small">To stay updated with DADI's services and enjoy our this platforms benefits, <b class="w3-text-blue">simply add DADI to home screen</b></p>
  <div class="w3-blue w3-small w3-display-right" style="width:130px;margin: 30px 0 0 0; padding: 5px;">Add to HomeScreen</div>
</div>
    <!-- floating button -->
    <div id="work" class="" style=" height: 50px;width:50px;position: absolute;right:2px;bottom:15px;z-index:5;">
      <img src="http://localhost/dadibeta/asset/newimg/work2.png" style=" height: 50px;width:50px;">
      
    </div>
<!--echo referrals from MAIN controller-->
    <div class=" w3- w3-" style="position: absolute; margin:auto auto auto auto; width:100%; max-width: 700px;bottom: 2px;height:210px;">
      <div class="w3-center " style="display: flex;margin: auto; max-width:80%;">
        <p class="w3-text-grey" style="flex:2;border-bottom:3px solid #9c27b0;margin:0 5px 0 5px;padding: 0 0 3px 0;">Referrals</p>
        <p class="w3-text-grey w3-hover-light-grey" style="flex:2;;margin:0 5px 0 5px">Hires</p>
      </div>
      <div class="w3-container table" style="height:180px;position: relative;margin:auto;top:5px; overflow: scroll;">
       
      </div>
    </div>
  </div>
</body>
</html>

<script>
  $(document).ready(function() {
   // totlal amount
    var ref_id = '<?php echo $this->session->userdata('network_id') ?>';
    $.ajax({
      url:  "<?php echo base_url() . 'Main/get_amount'?>",
      method: 'POST',
      data: {ref_id:ref_id},
      success: function(data)
      {
        $('#am').text(data)
      }
   
    });
    // total referrals
    $.ajax({
      url:  "<?php echo base_url() . 'Main/get_hire'?>",
      method: 'POST',
      data: {ref_id:ref_id},
      success: function(data)
      {
        $('#ref').text(data)
      }
   
    });

    // total hire
    $.ajax({
      url:  "<?php echo base_url() . 'Main/total_hire'?>",
      method: 'POST',
      data: {ref_id:ref_id},
      success: function(data)
      {
        $('.hire').text(data)
      }
   
    });


    // GET referrals
    var refresh = setInterval(function() { 
      $.ajax({
        url:  "<?php echo base_url() . 'Main/referral'?>",
        method: 'POST',
        data: {ref_id:ref_id},
        success: function(data)
        {
         //alert(data);
          $('.table').html(data);
        }
     
      });
    }, 2000);


    // withdraw
    $('.withdraw').click(function(){ 
      var amount = $('#am').text();
      if (amount < '2000')
      {
        alert('you can only withdraw from NGN 2000 and above');
      }
      else
      {
        confirm('are you sure you want to withdraw click cancel, if you`re not?');
      }
    });


//work click
$('#work').click(function(){
      var page = 'work_form';
      window.location.href = "<?php  echo base_url()?>form/"+page; 
  });
//withdraw
$('.with').click(function(){
      alert('dje');
  });
  
  });
// copy link
$('.copy').click(function(){
  alert('working');
$('.text').select();
  if(document.execCommand("copy")){
    $('.copied').show();
    setTimeout(function(){
      $('.copied').hide();
    }, 2000)
  };
  
})
//close link
$('.closelink').click(function(){
  $('#modal').hide();
})
//open link
$('#link').click(function(){
  $('#modal').show();
})
</script>
<script>
$(document).ready(function() {
  $('.home').click(function(){

});

      let deferredPrompt;
      var butt = document.querySelector('.home');
    window.addEventListener('beforeinstallprompt', (e) => {
      // Prevent the mini-infobar from appearing on mobile
      e.preventDefault();
      // Stash the event so it can be triggered later.
      deferredPrompt = e;
      $('.home').show();
      // Update UI notify the user they can install the PWA
        //showInstallPromotion();
    
          butt.addEventListener('click', (e) => {

        $('.home').hide();
        // Hide the app provided install promotion
        //hideMyInstallPromotion();
        // Show the install prompt
        deferredPrompt.prompt();
        // Wait for the user to respond to the prompt
        deferredPrompt.userChoice.then((choiceResult) => {
          if (choiceResult.outcome === 'accepted') {
            console.log('User accepted the install prompt');
          } else {
            console.log('User dismissed the install prompt');
          }
        });
      });
          });
});
</script>
