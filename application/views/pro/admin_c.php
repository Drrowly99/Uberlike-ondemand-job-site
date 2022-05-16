<?php //$this->session->sess_destroy(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>DADI| Find and Hire Artisans around you</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
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
.text-purple{color:#d5afdc;}
.w2-hover-yellow:hover{color:#000!important;background-color:#f1f028!important}
.w2-yellow:hover{background-color:#f1f028!important}
.w1-yellow{color:#f1f028!important}
.w3-card-1{box-shadow:0px 0px 0px 0 rgba(33, 31, 31, 0.13), 0px 3px 3px 0 rgba(0,0,0,0.12)}
.w3-card-5{box-shadow:5px 13px 14px 0px rgba(202, 202, 202, 0.46), 14px -1px 20px 0 rgba(210, 202, 202, 0.19)}
.shadow1{box-shadow: -1px 1px 7px 0 rgba(222, 222, 222, 0.16), -1px 15px 20px 0 rgba(234, 234, 234, 0.22)};
.shadow2{box-shadow: 5px 13px 14px 0px rgba(230, 230, 230, 0.46), 5px 3px 20px 0 rgba(220, 220, 220, 0.19)};
.w3-card-6{box-shadow:5px 13px 14px 0px rgba(202, 202, 202, 0.46), 14px -1px 20px 0 rgba(210, 202, 202, 0.19)}

.spinner {
  width: 40px;
  height: 40px;

  position: relative;
  margin: 100px auto;
}

.double-bounce1, .double-bounce2 {
  width: 100%;
  height: 100%;
  border-radius: 50%;
  background-color: #333;
  opacity: 0.6;
  position: absolute;
  top: 0;
  left: 0;
  
  -webkit-animation: sk-bounce 2.0s infinite ease-in-out;
  animation: sk-bounce 2.0s infinite ease-in-out;
}

.double-bounce2 {
  -webkit-animation-delay: -1.0s;
  animation-delay: -1.0s;
}

@-webkit-keyframes sk-bounce {
  0%, 100% { -webkit-transform: scale(0.0) }
  50% { -webkit-transform: scale(1.0) }
}

@keyframes sk-bounce {
  0%, 100% { 
    transform: scale(0.0);
    -webkit-transform: scale(0.0);
  } 50% { 
    transform: scale(1.0);
    -webkit-transform: scale(1.0);
  }
}



</style>
<body class="w3-light-grey w3-border-red" style="position: relative;">

 <!-- FIRST LAYER-->   
    <div class="w3-border w3-blue w3-container" style="position: fixed;top:0;margin:auto;width:100%;height:10vh;z-index:10;">
      <h4 id="open"  class="w3-left" style="font-weight: 750;">open</h4>
      <h4 class="w3-left" style="font-weight: 750;">DADI Admin</h4>
    </div>

 <!--MAIN LAYOUT-->   
<div id="main" class="w3-light-grey" style="position: relative;top:40px; width:100%; height:auto;display: none;">
  <div class="w3-transparent" style="position: relative;top:15px;">
    <div class="w3-round-large w3-white w3-container" style="position: relative;height: 140px; width:80%;top:5px; margin:20px 10%;">
      <h5 style="font-weight: bold">Total Users</h5>
      <h3 class="w3-center" style="position: relative;top:10px;">5000</h3>
    </div>
    <div class="w3-round-large w3-white w3-container" style="position: relative;height: 140px; width:80%; margin:20px 10%;">
      <h5 style="font-weight: bold">Total Agents</h5>
      <h3 class="w3-center w3-text-red" style="position: relative;top:10px;">5000</h3>
    </div>
    <div class="w3-round-large w3-white w3-container" style="position: relative;height: 140px; width:80%; margin:20px 10%;">
       <h5 style="font-weight: bold">Total Workers</h5>
      <h3 class="w3-center w3-text-green" style="position: relative;top:10px;">5000</h3>
    </div>

    <div class="w3-round-large w3-white w3-container" style="position: relative;height: 140px; width:80%; margin:20px 10%;">
       <h5 style="font-weight: bold">Total Hires</h5>
      <h3 class="w3-center w3-text-green" style="position: relative;top:10px;">5000</h3>
    </div>
    <div class="w3-round-large w3-white w3-container" style="position: relative;height: 140px; width:80%; margin:20px 10%;">
       <h5 style="font-weight: bold">Total Completed jobs</h5>
      <h3 class="w3-center w3-text-green" style="position: relative;top:10px;">5000</h3>
    </div>
  </div>
</div>


 <!--SECOND LAYOUT [SHOW WORKERS]--> 
<div id="main" class="" style="position: relative;top:40px; width:100%; height:auto;display: block;">
  <div class="w3-white " style="height:60px;padding:10px 10px;"><h5 style="font-weight: bold;">TOTAL WORKERS</h5></div>
  <div id="total">

  </div>
</div>


 <!--SECOND LAYOUT [SHOW WORKERS]--> 
<div id="new_s" class="" style="position: relative;top:40px; width:100%; height:auto;display: none;">
  <div class="w3-white " style="height:60px;padding:10px 10px;"><h5 style="font-weight: bold;">New Hires</h5></div>
  <div id="total">

  </div>
</div>

 <!--SECOND LAYOUT [SHOW WORKERS]--> 
<div id="not_s" class="" style="position: relative;top:40px; width:100%; height:auto;display: none;">
  <div class="w3-white " style="height:60px;padding:10px 10px;"><h5 style="font-weight: bold;">Not Satisfies</h5></div>
  <div id="total">

  </div>
</div>

 <!--SECOND LAYOUT [SHOW WORKERS]--> 
<div id="sus_s" class="" style="position: relative;top:40px; width:100%; height:auto;display: none;">
  <div class="w3-white " style="height:60px;padding:10px 10px;"><h5 style="font-weight: bold;">Suspend</h5></div>
  <div id="total">

  </div>
</div>

 <!--SECOND LAYOUT [SHOW WORKERS]--> 
<div id="owe_s" class="" style="position: relative;top:40px; width:100%; height:auto;display: none;">
  <div class="w3-white " style="height:60px;padding:10px 10px;"><h5 style="font-weight: bold;">Owing</h5></div>
  <div id="total">

  </div>
</div>

 <!--SECOND LAYOUT [SHOW WORKERS]--> 
<div id="pay_s" class="" style="position: relative;top:40px; width:100%; height:auto;display: none;">
  <div class="w3-white " style="height:60px;padding:10px 10px;"><h5 style="font-weight: bold;">Pay Workers</h5></div>
  <div id="total">

  </div>
</div>

 <!--SECOND LAYOUT [SHOW WORKERS]--> 
<div id="email_s" class="" style="position: relative;top:40px; width:100%; height:auto;display: none;">
  <div class="w3-white " style="height:60px;padding:10px 10px;"><h5 style="font-weight: bold;">Send Email</h5></div>
  <div id="total">

  </div>
</div>


<!--SIDE BAR-->
<div>
  <!--|||||||||||||||||||||||||||||||||||||||||||||||||||||||START SIDEBAR||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||-->

<div class="w3-sidebar w3-black w3-bar-block w3-collapse w3-card w3-animate-left" style="position: absolute;top:0; width:150px; z-index:100; display:none;" id="mySidebar">
  <button class="w3-bar-item w3-button w3-large w3-hide-large" id="close" style="position: relative; left:80%;" > &times;</button>
  <div class="w3-center w3-border-bottom " style="width: 100%;">
    <div class="w3-center w3-circle " style="width: 100%;">
      <img src="http://localhost/webapp/image/rob.jpg" class="w3-circle" style="height:40px; width:60px;height: 60px; margin:0 0 0 0">
    </div>
    <p style="font-weight: bold;">Iso Divine Edet</p>
  </div>
  <div class="w3-border-bottom" style="height:350px;">
    <div class="w3-bar-item w3-left w3-hover-red" id="new" style="padding:8px 15px;"><i class="material-icons w3-text-green" style="font-size: 24px;position: relative;top:5px;margin-right:15px;left:5px;"></i> New Hires</div>
    <div class="w3-bar-item w3-left w3-hover-red" id="not" style="padding:8px 15px;"><i class="material-icons w3-text-green" style="font-size: 24px;position: relative;top:5px;margin-right:15px;left:5px;"></i> Not satisfied</div>
    <div class="w3-bar-item w3-left w3-hover-red" id="sus" style="padding:8px 15px;"><i class="material-icons w3-text-green" style="font-size: 24px;position: relative;top:5px;margin-right:15px;left:5px;"></i> Suspend</div>
    <div class="w3-bar-item w3-left w3-hover-red" id="owe" style="padding:8px 15px;"><i class="material-icons w3-text-green" style="font-size: 24px;position: relative;top:5px;margin-right:15px;left:5px;"></i> Owing</div>
    <div class="w3-bar-item w3-left w3-hover-red" id="pay" style="padding:8px 15px;"><i class="material-icons w3-text-green" style="font-size: 24px;position: relative;top:5px;margin-right:15px;left:5px;"></i> Pay Worker</div>
    <div class="w3-bar-item w3-left w3-hover-red" id="email" style="padding:8px 15px;"><i class="material-icons w3-text-green" style="font-size: 24px;position: relative;top:5px;margin-right:15px;left:5px;"></i> Send Email</div>
  </div>

</div>
<!--END SIDEBAR-->

</div>
<!--END EVERYTHING-->
</body>
</html>
<script type="text/javascript">
  $('#new').click(function(){
    document.getElementById("new_s").style.display = "block";
    document.getElementById("not_s").style.display = "none";
    document.getElementById("sus_s").style.display = "none";
    document.getElementById("owe_s").style.display = "none";
    document.getElementById("email").style.display = "none";
    document.getElementById("pay_s").style.display = "none";

    document.getElementById("mySidebar").style.display = "none";

  });
  $('#not').click(function(){
    document.getElementById("new_s").style.display = "none";
    document.getElementById("not_s").style.display = "block";
    document.getElementById("sus_s").style.display = "none";
    document.getElementById("owe_s").style.display = "none";
    document.getElementById("pay_s").style.display = "none";
    document.getElementById("email").style.display = "none";

    document.getElementById("mySidebar").style.display = "none";

  });
  $('#sus').click(function(){
    document.getElementById("new_s").style.display = "none";
    document.getElementById("not_s").style.display = "none";
    document.getElementById("sus_s").style.display = "block";
    document.getElementById("owe_s").style.display = "none";
    document.getElementById("pay_s").style.display = "none";
    document.getElementById("email").style.display = "none";

    document.getElementById("mySidebar").style.display = "none";  

  });
  $('#owe').click(function(){
    document.getElementById("new_s").style.display = "none";
    document.getElementById("not_s").style.display = "none";
    document.getElementById("sus_s").style.display = "none";
    document.getElementById("owe_s").style.display = "block";
    document.getElementById("pay_s").style.display = "none";
    document.getElementById("email").style.display = "none";

    document.getElementById("mySidebar").style.display = "none";
  });
  $('#pay').click(function(){
    document.getElementById("new_s").style.display = "none";
    document.getElementById("not_s").style.display = "none";
    document.getElementById("sus_s").style.display = "none";
    document.getElementById("owe_s").style.display = "none";
    document.getElementById("pay_s").style.display = "block";
    document.getElementById("email").style.display = "none";

    document.getElementById("mySidebar").style.display = "none";

  });
  $('#email').click(function(){
    document.getElementById("new_s").style.display = "none";
    document.getElementById("not_s").style.display = "none";
    document.getElementById("sus_s").style.display = "none";
    document.getElementById("owe_s").style.display = "none";
    document.getElementById("pay_s").style.display = "none";
    document.getElementById("email").style.display = "block";

    document.getElementById("mySidebar").style.display = "none";
  });
  $('#open').click(function(){
    document.getElementById("mySidebar").style.display = "block";
  });
  $('#main').click(function(){
    document.getElementById("mySidebar").style.display = "none";
  });
  $('#close').click(function(){
  document.getElementById("mySidebar").style.display = "none";
  });


setTimeout(function(){
    var fid = "ff";
    //alert(fid);
            $.ajax({
                      url: '<?php echo base_url();?>Admin_control/call_functions',
                      method: 'POST',
                      data: {fid:fid},
                      beforeSend: function(){ 
                        $('#spin').show();
                        //alert('sending');
                      },
                      success: function(call)
                      { 
                          
                          //alert(call);
                        $('#total').html(call);
                        //$('#display_comment').load('back/showcomment', {fid:fid});
                       
                      }
            });
}, 2000)
</script>