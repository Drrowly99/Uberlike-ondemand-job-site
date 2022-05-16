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
<body class="w3-white" style="height:100vh;">
<div id="demo"></div>
   <!--|||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||| MAIN MAPPAGE||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||-->
  <div id="map-layout" class="center " style="position: relative; max-width: 700px;margin:auto; display: block; z-index: 1;">
      <div id="mapid" style=" height:100vh;width:100%;" class="w3-card "></div>
           <!--HEADER-->
     <!-- <div class="" style="position: absolute;top:0; height: 10vh; width: 100%; z-index: 1000;">
        <div class="w3-round-xxlarge w2-card w3-white w3-text-grey  " style="padding:5px 15px; background-color: rgba(255, 255, 255, 0.97); display: flex;max-width: 95%;margin:5px auto auto auto;">
          <div style="margin:1px 2px 0 2px;font-size: 1.2rem; ">Tracking Worker <?php echo $job; ?> <span onclick="w3_open()" class="fa fa-chevron-down w3-hover-text-blue w3-margin-left w3-text-black w3-light-grey w3-round-xxlarge" style="padding: 5px;"></span></div>
        </div>
      </div>

     <div class="w3-" style="position: absolute;bottom:0; height: 10vh; width: 100%; z-index: 1000;">
        <div class="w3-round w3-display-container w3-text-grey " style="padding:5px 15px; display: flex;max-width: 95%;margin:5px auto auto auto;height: 30px;">
          <div class="w3-white w3-display-middle w3-round-xxlarge" style="margin: 15px -0.5px 0 0; ">
            <img id="work" class="w2-card" src="<?php /* echo base_url()*/;?>asset/image/cross_but.png?>" style="height:45px; width:45px; ">
          </div>
        </div> -->
  </div>
<script type="text/javascript">
      // Map get user loaction    

    var mymap = L.map('mapid').setView([4.902534, 6.907085], 16);
 
    L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token={accessToken}', {
    attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, <a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
    maxZoom: 20,
    id: 'mapbox/streets-v11',
    tileSize: 512,
    zoomOffset: -1,
    accessToken: 'pk.eyJ1IjoiZGl2aW5lMTUwIiwiYSI6ImNrYTI0eGxkZjA2d2YzZW8xczc4am90YjcifQ.-qu_8HxRK4xyfI_wVZktLg'
}).addTo(mymap);
 var popup = L.popup();


               
//bing to zoom


  </script>

  <div id="new"></div>
</body>
</html>

<script>

 var refresh = setInterval(function() { 
  x = navigator.geolocation;
  x.getCurrentPosition(success);
  function success(position)
    {
    var long =  position.coords.longitude;
    var lat =  position.coords.latitude;
    //get marker location
   var job_id = '<?php echo $job; ?>';


 $('#new').load('<?php echo base_url()?>Main/track_user', {job_id:job_id, long:long, lat:lat})
  }
  
}, 5020)
</script>
    