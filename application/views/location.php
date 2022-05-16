
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
<script>
$(document).ready(function(){
  navigator.permissions.query({name:'geolocation'}).then(function(result){
                      if(result.state == 'granted'){
                           $('#grant').hide();
                           $('#decline').hide();
                      }else if(result.state == 'prompt'){
                         
                          $('#grant').show();
                      }else if(result.state == 'denied'){
                         $('#grant').hide();
                         $('#decline').show();

                      }else{
                          
                      }
                  })
})

 
</script>
<style type="text/css">

@media only screen and (min-width:600px){ 
  #laptop_screen{
    display:block;
  }
  #launch{
    display:none;
  }
  #mapid{
    display:none;
  }
}
@media only screen and (max-width:600px){  
  #mapid{
    display:block;
  }
  #laptop_screen{
    display:none;
  }
    #launch{
    display:none;
  }
}
  .w3-disabled,.w3-btn:disabled,.w3-button:disabled{cursor:not-allowed;opacity:0.3}.w3-disabled *,:disabled *{pointer-events:none}
  .w2-sidebar{height:100vh;width:252px;background-color:#fff;position:fixed!important;z-index:1;overflow:auto}
  .w3-card-6{box-shadow:5px 13px 14px 0px rgba(202, 202, 202, 0.46), 14px -1px 20px 0 rgba(210, 202, 202, 0.19)}
  .w2-modal{z-index:3;display:none;padding:60% 0 0 0 ;position:fixed;left:0;bottom:0;width:100%;height:100%;overflow:auto;background-color:rgba(255, 255, 255, 0.15)}
  .w2-modal2{z-index:3;display:none;padding:30% 0 0 0 ;position:fixed;left:0;bottom:0;width:100%;height:100%;overflow:auto;background-color:rgba(255, 255, 255, 0.15)}
  .w2-modal3{z-index:3;display:none;padding:20% 0 0 0 ;position:fixed;left:0;bottom:0;width:100%;height:100%;overflow:auto;background-color:rgba(255, 255, 255, 0.15)}
  .w3-card-mod{box-shadow: 0 4px 10px 0 rgb(255 255 255 / 20%), 1px 3px 20px 0 rgb(162 162 162 / 12%)}
  .shadow1{box-shadow: -1px 1px 7px 0 rgba(222, 222, 222, 0.16), -1px 15px 20px 0 rgba(234, 234, 234, 0.22)};
  .shadow2{box-shadow: 5px 13px 14px 0px rgba(230, 230, 230, 0.46), 5px 3px 20px 0 rgba(220, 220, 220, 0.19)};
</style>
<body class="w3-border" style="position:relative;height:100vh; max-width: 700px; margin: auto;">
  

</body>
</html>
