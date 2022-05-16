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
<body class="w3-light-grey" style="height:100vh;">
<div id="worker-layout" class="w3-border-left w3-white w3-border-right " style="position: relative; margin:auto; max-width: 700px; display: block; height: 100vh;">
      <div id="" class="w3-white">
        <div class="w2-card" style="height: 60px; width: 100%;display: flex;">
          <div class=" w3-center"> <i class="fa fa-chevron-left fa fa-1x" style="margin:24px;"></i></div>
          <div class="" style="font-weight: bold; font-size: 1.8rem; margin:10px 10px;">Access Key</div>
        </div>
      </div>
      <div class="w3-containerw3-white w3-center" style="">
        <h5>Logn with your Access Key</h5>

      </div>
   <form id="form" class="w3-container w3-card w3-white w3-text-grey" style="position:relative;top:5%; height: 300px;background-color:rgb(255, 255, 255); margin:auto; max-width:500px" method="POST" action="accesskey" >
    <div class="w3-white " style="position: relative;top: 20px;">
      <div>
        <label class="w3-medium" style="font-weight: 600;"> Email </label> 
        <input id= "email" class="w3-input w3-light-grey w3-border-0" name="email" type="text" onkeyup="restrict('email')" value="<?php echo set_value('email'); ?>"  style="width:100%;outline: none; border-bottom:2px solid #040319;" >
        <?php echo form_error('email', "<div class='w3-text-red '>" ,"</div>"); ?>
         <?= (isset($error))?$error:'' ?>
      
      </div>
      <div>
        <label class="w3-medium" style="font-weight: 600;"> Key </label> 
        <input id= "key" class="w3-input w3-light-grey w3-border-0" name="key" type="password" value="<?php echo set_value('key'); ?>" style="width:100%;outline: none; border-bottom:2px solid #040319;" >
       <?php echo form_error('key', "<div class='w3-text-red '>" ,"</div>"); ?>
        <?= (isset($key))?$key:'' ?>

      </div>
       <button id= "det-submit" onclick="signup()" class=" w3-button w3-bar w3-section w3-text-white w3-hover-text-white w3-round"  style=" outline: none; width:100%; background-color:#040319;" type="submit" name="submit">
         Login
        </button>
      </div>

      <P id="mesg"></P>
      </form>
</div>    
</body>
</html>

<script>
  $(document).ready(function() {
    alert('To avoid inputing your access key, Make Dadi your home screen icon')
  });
</script>