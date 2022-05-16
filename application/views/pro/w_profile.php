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
<meta property="og:image"         content="https://www.dadi.com.ng/asset/image/dadi128.png" />
<link rel="manifest" href="<?php  echo base_url();?>manifest.json">
<link rel="shortcut icon" type="image/png" href="<?php echo base_url();?>asset/image/dadi128.png">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
<link rel="stylesheet" href="<?php  echo base_url();?>asset/css/w3.css"/>
<link rel="stylesheet" href="<?php  echo base_url();?>asset/css/st.css"/>
<link rel="stylesheet" href="css1/bootstrap.css"/>
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

</head>
<style>
.switch {
  position: relative;
  display: inline-block;
  width: 60px;
  height: 28px;
  margin: 2px 3px 0 0;
  
}

.switch input { 
  opacity: 0;
  width: 0;
  height: 0;
}

.slider {
  position: absolute;
  cursor: pointer;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: #ccc;
  -webkit-transition: .4s;
  transition: .4s;
}

.slider:before {
  position: absolute;
  content: "";
  height: 20px;
  width: 20px;
  left: 4px;
  bottom: 4px;
  background-color: white;
  -webkit-transition: .4s;
  transition: .4s;
}

input:checked + .slider {
  background-color: #6d29a4;
}

input:focus + .slider {
  box-shadow: 0 0 1px #2196F3;
}

input:checked + .slider:before {
  -webkit-transform: translateX(26px);
  -ms-transform: translateX(26px);
  transform: translateX(26px);
}

/* Rounded sliders */
.slider.round {
  border:1px solid white;
  border-radius: 34px;
}

.slider.round:before {
  border-radius: 50%;
}
.w3-card-top{box-shadow: -1px -3px 5px 0 rgb(0 0 0 / 16%), -1px -6px 10px 0 rgb(0 0 0 / 12%)}
.w3-card-1{box-shadow:0px 0px 0px 0 rgba(33, 31, 31, 0.13), 0px 3px 3px 0 rgba(0,0,0,0.12)}
  .w3-card-5{box-shadow:5px 13px 14px 0px rgba(202, 202, 202, 0.46), 14px -1px 20px 0 rgba(210, 202, 202, 0.19)}
  .shadow1{box-shadow: -1px 1px 7px 0 rgba(222, 222, 222, 0.16), -1px 15px 20px 0 rgba(234, 234, 234, 0.22)};
  .shadow2{box-shadow: 5px 13px 14px 0px rgba(230, 230, 230, 0.46), 5px 3px 20px 0 rgba(220, 220, 220, 0.19)};
   .w3-card-6{box-shadow:5px 13px 14px 0px rgba(202, 202, 202, 0.46), 14px -1px 20px 0 rgba(210, 202, 202, 0.19)}
     .w2-modal{z-index:3;display:none;padding-top:100px;position:fixed;left:0;top:0;width:100%;height:100%;overflow:auto;background-color:rgba(255, 255, 255, 0.95)}
</style>
<body class="w3-animate-right"  style="">
      <!--summary-->
      <?php 
      foreach ($data as $value) { ?>
        <?php } ?>

  <div class="w3-side w3-white" style="height: 100vh; position: relative;background-attachment: fixed; /*background-image:  linear-gradient(to bottom,#902f90,#902f90 );*/color:white; margin:auto auto auto auto; width:100%; max-width: 700px;">

<div class="w3-sidebar w3-bar-block w3-collapse w3-card w3-animate-left" style="width:70%; z-index:100;" id="mySidebar">
  <button class="w3-bar-item w3-button w3-large w3-hide-large" onclick="w3_close()" style="position: relative; left:80%;" > &times;</button>
  <img src="<?php echo base_url()?>asset/image/dadi 2.png " style="height:40px; width:100px; margin:0 0 5px 25px;">
  <a href="" class="w3-bar-item w3-button" id="home" style="padding:20px 20px;">Home</a>
  <a href="#" class="w3-bar-item w3-button" class="edit" style="padding:20px 20px;">Edit Work</a>
  <a href="#" class="w3-bar-item w3-button" id="how" style="padding:20px 20px;">How It Works</a>
  <a href="#" class="w3-bar-item w3-button" id="netw" style="padding:20px 20px;">Agent</a>
  <a href="#" class="w3-bar-item w3-button w3-text-red" id="signout" style="padding:20px 20px;">Signout</a>
</div>

  <img src="<?php echo base_url();?>asset/newimg/back1.png" class="w3-ide" style="position: absolute; top:0; width:100%; height:38%;z-index:;">
   <div class="w3-" style="position: absolute;height:100vh;width: inherit;">   
    <div class="w3-text-white " style="position: absolute;top:0px; height: 25vh;z-index:5; width: inherit;max-width: 700px; ">
      <div class="w3-right " style="margin:46px 20px; font-weight: bold;">Welcome <?php echo $value->firstname, ' ', $value->lastname?></div>
      <div class="w3-button w3-transparent w3-text-white w3-xlarge w3-hide-large" style="width: 40px; height:48px;margin:30px 15px;" onclick="w3_open()">&#9776;</div>

    </div>
       
        <div class="w3-white w3-card-1 w3-padding w3-round-large" style="position: relative; z-index:10;top:;height: 180px; width: 85%;margin: 130px 9% 0 8% ;">

            <div class="w3-text-purple w3-large" style="font-weight: 800; margin:10px 0 0 0;">Job Category</div>
             <span class="w3-text-grey w3-medium"> <?php echo $value->job;?></span>
            <div class="w3-text-purple w3-large" style="font-weight: 800; margin:10px 0 0;">Workmanship Range</div>
             <span class="w3-text-grey w3-medium">&#8358 <?php echo $value->w_from, ' - '; echo $value->w_to; ?></span>
            <div class="w3-btn w3-text-green edit" style="position: absolute;bottom:0px;right:0;">EDIT</div>
            <div class="w3-small w3-circle w3-" style="position: absolute; top:-5px;right:-2px;background-color:#7334ac;height:24px;width:24px; padding:4px;">
              <div id="status" class="w3-small w3-circle w3- " style="position: relative; top:0;right:0;background-color:#f44336;height:16px;width:16px; "></div></div>
                  <label class="switch w3-right" style="position: absolute;bottom: 8px;left:10px;">
                      <input type="checkbox" id="togBtn" > fa
                      <span class="slider round"></span>
                    </label>
                 </div>
    <!--MODAL OPEN-->                 
    <!--MODAL OPEN-->                 
     <div id="modal" class="w2-modal " style="display: none!important;padding:3px;z-index:1000;height:100vh;">
    <div class="w3-display-topright closemodal w3-text-red w3-hover-text-black" style="font-size: 25px;font-weight:700;padding:5px;">&times</div>
  <div class="w3-center w3-modal-content w3-card-5 w3-animate-zoom w3-white w3-round-large " style="margin-top:20%;padding:2px;height:600px;">
    <div class=" w3-display-container w3-white " style="position: relative;height:400px; width:100%;">
      
      <div class="" style="text-align: left;padding:2px 5px;">
        <h3 class="w3-center">How DADI Works (for workers)</h3>
        <li class="w3-medium" style="margin:5px 0 0 0;">Welcome to DADI's workforce <?php echo $this->session->userdata('firstname'),' ',$this->session->userdata('lastname') ; ?></li>
        <li class="w3-medium" style="margin:5px 0 0 0;">DADI wants to connect you with people who need your services.</li>
        <li class="w3-medium" style="margin:5px 0 0 0;">As a worker on DADI, DADI is entitled to 10% off your workmanship fee, whenever you get a job on the platform. This will take effect after the launch</li>
        <li class="w3-medium" style="margin:5px 0 0 0;">Also as a worker, you can earn extra cash by becoming an AGENT, where DADI will split its profits with you</li>
        <li class="w3-mediuml w3-text-purple" style="margin:5px 0 0 0;">click on the floating link button on bottom right section of your page to become an Agent</li>
        <p class="w3-medium w3-margin-top" style="margin:5px 0 0 0;font-weight:800;">Please Note: you only earn when your worker gets hired, and has completed his job</p>
        
      </div>
    </div>
  </div>
   </div>

           <!-- floating button -->

      <!--options-->
    <div class="w3-white shadow2" style="position: relative; margin-top:5%; z-index:10; height: 15vh; width: inherit">
      <div id="options" class="w3-row w3-small w3-center " style="position: relative; top: 20px;">
        <div class="w3-col s3 m3 l3 w3-center w3-round-xxlarge w3- w3-center" style="height: 60px; "><div id="hire" class="w3-light-grey w3-round-xxlarge" style="position: relative; margin-left:50%;right:20px; height:40px; width:40px;padding: 11px 0 0 0;">0</div><span style="">Hire</span> </div>
        <div class="w3-col s3 m3 l3 w3-center w3-round-xxlarge w3- w3-center" style="height: 60px; "> <div id="decline" class="w3-light-grey w3-round-xxlarge" style="position: relative; margin-left:50%;right:20px; height:40px; width:40px;padding: 11px 0 0 0;">0</div><span>Decline</span>  </div>
        <div class="w3-col s3 m3 l3 w3-center w3-round-xxlarge w3- w3-center" style="height: 60px; "> <div id="completed" class="w3-light-grey w3-round-xxlarge" style="position: relative; margin-left:50%;right:20px; height:40px; width:40px;padding: 11px 0 0 0;">0</div><span>Completed</span>  </div>
        <div class="w3-col s3 m3 l3 w3-center w3-round-xxlarge w3- w3-center" style="height: 60px; "> <div id="rating" class="w3-light-grey w3-round-xxlarge" style="position: relative; margin-left:50%;right:20px; height:40px; width:40px;padding: 11px 0 0 0;">0</div><span>Avg Rating</span>  </div>
      </div>
    </div>
      <!--job notification-->
    <div class="w3-container w3-white w3-margin-top w3-border-top w3-border-purple w3-card w3-round-large"  style="z-index:10;margin:auto 5% 20px 5%;width:90%;height:auto;">
      <div><b>Build your portfolio</b></div>
      <div class="w3-text-grey w3-small">To gain trust, you need to build a portfolio or add a link to an external portfolio</div>
  
    <div id="port" class="w3-margin-top w3-margin-bottom w3-btn w3-purple w3-round-xxlarge w3-small">Build your Portfolio <i class="fa fa-send" style="margin-left: 5px;"></i></div>
    </div>
<!--end scroll-->
  </div> 
        
    
 
<div id="demo"></div>   

<!--ADD TO HOMESCREEN-->
<div class="w3-round-large home w3-animate-bottom w3-white w3-card-top" style="position: absolute; bottom:0; padding:5px;height: 155px; width:100%;display: none; border-top-left-radius:20px; border-top-right-radius: 20px; background-color: rgba(31, 30, 30, 0.96);z-index:100; color:white;">
 <div class="w3-display-topright closehome w3-text-red w3-hover-text-black" style="margin:0 0 5px 0; font-size: 35px;font-weight:700;padding:5px 8px;margin:-15px 0 0 0;">&times</div> 
  <div style="display: flex; width: inherit; height: 130px;margin-top:10px;">
    <div class="w3-" style="flex: 3;"> <img src="<?php echo base_url();?>asset/image/dadi128.png" style="height:80px; width:80px; margin:18px 0 0 10px;"> </div>
    <div class="w3- w3-white" style="flex: 6;padding: 3px 10px;">
      <p>Install DADI on your mobile device for free no data required, click Install</p>
      <div class="w3-btn w3-blue homes w3-center" style="margin:-10px 0 0 0 ;width:70px;">Install</div>
    </div>
  </div>
</div>





</body>
</html>

<script>
$('#port').click(function(){

    window.location.href = "<?php  echo base_url()?>main/port"; 

})
//close home
$('.edit').click(function(){
  $('.home').hide();
})
//close home
$('.closehome').click(function(){
  $('.home').hide();
})
//show modal
$('#how').click(function(){
      $('#modal').show();
    })

//close modal
$('.closemodal').click(function(){
 
  $('#modal').hide();
})
// A session will control if this javascript will be loaded.
// this script will hold the worker work availability status, that is availble or unavailable.
// if available, it performs the javascript codes below, if not available, it asks the user to comeonline or not.
// the session lasts for 2 hours.

    var my_id = '<?php echo $value->work_id;?>'; 

      $.ajax({
        url:  '<?php echo base_url();?>Main/hire_get',
        method: 'POST',
        data: {my_id:my_id},
        dataType: 'json',
        beforeSend: function()
        {
         
        },
        success: function(data)
        {
   
          $('#hire').text(data.job);
          $('#decline').text(data.decline);
          $('#completed').text(data.complete);
          $('#rating').text(data.rating);
        }
    })

// GET THE WORKERS DETAILS IN ROUND
 $('#refresh').click(function(){ 

    var my_id = '<?php echo $value->work_id;?>';  
      $.ajax({
        url:  '<?php echo base_url();?>Main/job_not',
        method: 'POST',
        data: {my_id:my_id},
        beforeSend: function()
        {
              var element = document.getElementById("refresh");
              element.classList.add("fa-spin");
        },
        success: function(data)
        {
              var element = document.getElementById("refresh");
              element.classList.remove("fa-spin");
          $('.det').html(data);
        }
      })
 })

</script>


<script>
$(document).ready(function(){
  $('#netw').click(function(){
      var page = 'network';
      window.location.href = "<?php  echo base_url()?>form/network"; 
 
})

  toogle();
  time_online();


var my_id = '<?php echo $value->work_id;?>'; 
var refresh = setInterval(function() {

var x = document.getElementById("demo");
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
  var my_id = '<?php echo $value->work_id;?>';

  $.ajax({
        url:  'http://localhost/dadibeta/Main/track_worker',
        method: 'POST',
        data: {lat:lat, long:long, my_id:my_id},
        beforeSend: function()
        {
//alert(lat);
        },
        success: function(data)
        {
         
        }
  })
}
  }, 5000);
})
//|||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||online/offline codes ||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||
  function time_online(){
    var time_him = setInterval(function() { 

    $.ajax({
        url:  "<?php echo base_url() . 'Main/time_him'?>",
        method: 'POST',
        dataType: 'json',
        success: function(data)
        {

          if(data.offline){
            $('#status').css('background-color','#f44336')
            $('#togBtn').removeAttr('checked');
            //$('#status').text('offline');
          }else{
            $('#status').css('background-color','#26ad26');
            //$('#status').text('online');
            $('#togBtn').attr('checked', 'checked');
          }
          
        }
        })
    }, 1000)
  }
  function toogle(){
    $.ajax({
        url:  "<?php echo base_url().'Main/online'?>",
        method: 'POST',
        success: function(data)
        {
          $('#togBtn').attr('checked', 'checked');
          //$('#status').text('online');
          $('#status').css('background-color','#26ad26')
        }
        })
  }
$("#togBtn").on('change', function() {
    if ($(this).is(':checked')) {
        switchStatus = $(this).is(':checked');
      $.ajax({
        url:  "<?php echo base_url().'Main/online'?>",
        method: 'POST',
        success: function(data)
        {
         //$('#status').text('online');
         $('#status').css('background-color','#26ad26');
        }
      })// To verify
    }
    else {
       switchStatus = $(this).is(':checked');
       $.ajax({
        url:  "<?php echo base_url() . 'Main/offline'?>",
        method: 'POST',
        success: function(data)
        {
         //$('#status').text('offline');
         $('#status').css('background-color','#f44336')
        }
        })// To verify
    }
});
</script>

<script>
$(document).ready(function() {

  $('.home').click(function(){

});

      let deferredPrompt;
      var butt = document.querySelector('.homes');
    window.addEventListener('beforeinstallprompt', (e) => {
      // Prevent the mini-infobar from appearing on mobile
      e.preventDefault();
      // Stash the event so it can be triggered later.
      deferredPrompt = e;
      $('.home').how();
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
               $.ajax({
                  url:  "<?php echo base_url() . 'Main/addhome'?>",
                  method: 'POST',
                  success: function(data)
                  {
                    alert('Congrats..! you can now access DADI easily from your homescreen');
                  }
               
                });
          } else {
            console.log('User dismissed the install prompt');
          }
        });
      });
          });
});
</script>
<script>
function w3_open() {
  document.getElementById("mySidebar").style.display = "block";
}

function w3_close() {
  document.getElementById("mySidebar").style.display = "none";
}
</script>
<!--
            <div id="someone_hired'.$value['id'].'" class="w2-card w3-border-black w3-padding-small w3-round-large w3-margin-top" style="height:auto;">
            <h5 style="font-weight: 600;margin:0 0 0 4px;">'.$value['name'].' wants to hire you with </h5>
            <div class="w3-small" style="margin:0 0 0 4px;">Intends to pay &#8358 <b class="w3-text-blue intentions'.$value['id'].'">'.$value['amount'].' </b></div>
            <span style="margin:0 0 0 4px;" class="w3-small w3-text-grey">youll loose clients in : <b id="dem'.$value['id'].'"></b></span>
            <div id="content'.$value['id'].'" class="w3-text-black" style="height: 0px;margin:5px 0 5px 0 ; word-break: break-all; overflow-y: scroll;overflow-x:auto;">
              <p>'.$value['description'].'</p>
            </div>
            <div class="cover'.$value['id'].'" style="display:none;">
            
            </div>
              <hr>
            <div class="" style="display: inline-flex;margin:0 0 0 0;">
              <div id="show_d'.$value['id'].'" style="height: 30px; display: block; cursor:pointer;"><span class="w3-small w3-light-grey w3-round-large w3-padding-small" style="margin:2px 5px;">More</span></div>
              <div id="show_l'.$value['id'].'" style="height: 30px; display: none; cursor:pointer;"><span class=" w3-small w3-text-red w3-round-large w3-hover-text-red w3-padding-small w3-hover-light-grey w3-round" style="margin:2px 5px;">Less</span></div>
              <div id="accept'.$value['id'].'"  style="height: 30px; cursor:pointer;"><span class=" w3-black w3-small w3-padding-small w3-round" style="margin:2px 5px;">Accept</span></div>
              <div id="track'.$value['id'].'"  style="height: 30px; cursor:pointer;display:none;"><span class=" w3-border w3-small w3-border-black w3-padding-small w3-round" style="margin:2px 5px;">Track</span></div>
              <div id="nego'.$value['id'].'"  style="height: 30px; cursor:pointer;display:none;"><span class="w3-text-green w3-border w3-small w3-border-green w3-padding-small w3-round" style="margin:2px 5px;">Negotiate</span></div>
              <div id="decline'.$value['id'].'"  style="height: 30px; cursor:pointer;"><span class=" w3-border w3-small w3-border-red w3-text-red w3-hover-red w3-padding-small w3-round" style="margin:2px 5px;">Decline</span></div>
             
              
            </div>
          </div>-->