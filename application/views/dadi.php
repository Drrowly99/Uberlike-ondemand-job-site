<?php //$this->session->sess_destroy(); ?>
<?php /*
  $user_ip =getenv('REMOTE_ADDR');
  $geo = unserialize(file_get_contents("http://www.geoplugin.net/php.gp?ip$user_ip"));
  $city = $geo["geoplugin_city"];
  $long = $geo["geoplugin_longitude"];
  $lat = $geo["geoplugin_latitude"];
echo $city;
echo $long;
echo $lat;
$_SESSION['long'] = $long;
$_SESSION['lat'] = $lat;
?>
<?php
/*
  $this->db->where('LENGTH(contact)=','11'); 
  $this->db->limit(1);
  $query = $this->db->get('workforce'); 
  foreach($query->result() as $row)
  {
    $lenght = strlen($row->contact);

    $num = $row->contact;
    $cut = substr($num, 1);
    echo $num, "<br>";
    $added = "+234" . $cut;
    echo $added;
    echo '<br>';
    $data = array(
            'contact ' => $added
    );

    $this->db->where('id', $row->id);
    $this->db->update('workforce', $data);
  }; 
  # code...

?>
<?php
  $query = $this->db->get('userdata', 1);
    foreach($query->result() as $row)
  {
        echo $row->phone, "<br>";
    $data = array(
            'contact' => $row->phone
    );

    $this->db->where('email', $row->email);
    $this->db->update('workforce', $data);
    echo $row->email, "<br>";
  } */ 
?>
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
.comm_spinner {
  width: 40px;
  height: 40px;
  margin: 150px auto;
  background-color: #333;

  border-radius: 100%;  
  -webkit-animation: sk-scaleout 1.0s infinite ease-in-out;
  animation: sk-scaleout 1.0s infinite ease-in-out;
}

@-webkit-keyframes sk-scaleout {
  0% { -webkit-transform: scale(0) }
  100% {
    -webkit-transform: scale(1.0);
    opacity: 0;
  }
}

@keyframes sk-scaleout {
  0% { 
    -webkit-transform: scale(0);
    transform: scale(0);
  } 100% {
    -webkit-transform: scale(1.0);
    transform: scale(1.0);
    opacity: 0;
  }
}
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
}.new-purple{background-color: #681077;color:white;}
.new-purpletext{color: #681077!important;}
.w2-light-grey{background-color: #f3f3f3;}
.w2-twit-grey{background-color: #F5F8FA;}
.text-purple{color:#d5afdc;}
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
    <!--Launch page when you open site on on phone after a set timeout-->
<div id="decline" class="w3-white w3-center" style="position: absolute;top:0; z-index:10000; height:100vh; width:100%;display:none;">
  <img src="<?php echo base_url();?>asset/image/decline.png" style="height:auto;width:100%;">
</div>

<div id="grant" class="w3-white w3-center" style="position: absolute;top:0; z-index:10000; height:100vh; width:100%;display:none;">
  <img src="<?php echo base_url();?>asset/image/grant.png" style="height:auto;width:100%;">
<div class="w3-btn w3-purple w3-round-xxlarge" style="position: absolute;bottom: 10px; right: 5px;" id="allowss">allow</div>
</div>

    <!--DEFAULT page when you open site on laptop-->
  <div id="laptop_screen" class="w3-white w3-center" style="position: absolute;top:0; z-index:20000; height:100vh; width:100%;">
    <div class="w3-center w3-white" style="position: absolute;top:40%;left:17%;">
      <img src="<?php echo base_url();?>asset/image/dadi5.png" style="position: relative;margin:5px 0 0 0;top:5px; width: 100px;height:35px;z-index:1000;">
      <p class="w3-text-purple w3-center">We humbly apologise, you cannot visit this website from this device. Please Use a mobile phone.</p>
            <input type="" name="" class="text w3-card-5 w3-padding w3-display-bottommiddle w3-small w3-border-0" style="text-decoration: none; bottom:40px; width:170px;outline: none; " value="<?php echo base_url(),$this->session->userdata('network_id') ?>">
    </div>
  </div>
  <!--||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||map section|||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||-->
      <div id="mapid" onclick="w3_close()" style=" height:100vh;width:100%;display:block;" class="w3-card"></div>


  
    <div class="w3-white" style="height:9vh;position: fixed; max-width: 700px; width:100%;top:0; z-index:1100;">
      <img src="http://localhost/webapp/image/dadipurple.png" style="position: relative;width:80px; height:30px;top:9px;left:5px;">
          <div class="w3-white" style="position: relative;top:7px;width: 120px;float:right; height: auto">
            <span class="w3-small w3-right w3-button" style="width:auto;color:#f5366b;font-weight: 600;border:1px solid #fff; background-color: #fef6ff;margin:auto 6px auto auto;">Rent Appartments</span> 
          </div><!--Apartment-->
    </div><!--header-->

          <div class="w3-white w3-center" style="height:9vh;position: fixed; max-width: 700px; width:100%;bottom:0; z-index:1100;display: block;">
             <div id="listview" class="w3-round-large" style="position: relative;top:7px;width: 200px; height: auto;left:50%; margin-left: -100px;color:#fff;font-weight: 600; background-color: #f5366b;padding: 5px;">
                Show List View
              </div><!--show list-->
          </div>  <!--FOOTER-->
      <div class="w3-purple w3-container w3-hide" style="position: absolute; width:100%;top:0; height: 10vh; border-bottom-left-radius: 15px; border-bottom-right-radius: 15px; z-index: 1000;">

        <div style="" class="w3-hide">
          <span style="position: relative; top:5px;left:-10px; "><img src="<?php echo base_url();?>asset/newimg/di_logo3.png" class="" style="height:38px; width: 40px;"></span>
          <span style="letter-spacing: 10px;font-weight: 600; font-size:1.3em; position: relative;flex:10; top:10px; left:px;">DADI <?php echo $this->session->tempdata('ref') ?></span>
        </div>

        <div class="w3-white w3-hide w3-card-6 w3-round-xxlarge " style="position: relative; top:8px; height: 35px; display: flex; width: inherit;">
           <p class="w3-medium w3-center w3-" style="font-weight: 50; margin:0 0% 0 0; padding: 6px 10px; flex: 2;">painters<?php echo $this->session->tempdata('jobber'); echo $this->session->tempdata('jobber'); ?></p>
           <p class="w3-medium w3-left w3-" onclick="w3_open()" style="font-weight: 50; margin:0 0% 0 0; padding: 6px 5px; flex: 8;"><img src="http://localhost/dadibeta/asset/newimg/dash.svg" style="height:18px; width: 18px;"></p>
        </div>
        <!--close header-->


      </div>








      <!--|||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||SHOW FLOATING BELL FOR INCOMPLETED JOBS ||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||-->
  
       <div id="bell" style="position: absolute;bottom:25%;">
        </div>
 
       <div id="new">
         <script>
           var marker =  L.marker([4.902534,  6.907050], markerOptions).addTo(mymap);
         </script>
       </div>  
       <div id="new2"></div> 


     <!--*************************************close map-->
    </div>

    <div class="response-layout w3-border w3-white w3-round-left" style="position:absolute;bottom:0;height:53vh; z-index: 1000;max-width: 700px;display: none;width:100%; margin: auto;">
    </div>




 <!--||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||POP UP ON PAGE|||||||||||||||||||NOTE IF USER HAS NOTIFICATION ICON DISPLAYED, HE WILL NOT SEE THIS BY DEFAULT, BUT RATHER A BUTTON WILL BE DISPLAYED|||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||-->
<div class="w2-modal popup1" style="display:block;z-index:1100;">
  <div class="w3-white" style="position: relative;top:0px; max-width: 400px; margin:auto;height:100%;margin:auto;border-top-left-radius: 20px; border-top-right-radius: 20px;">
    <div class="" style="width:100px;position: absolute;margin: auto auto auto -50px;height:5px;left:50%;background-color: #ff57cb; "></div><!--Top line-->
      <div class="w3-container " style="display: flex;">
        <span id="close" class="w3-text-grey" style="flex:2; position: relative;left:97%;top:10px; font-weight: 400;font-size: 22px; ">&times</span>
        <h4 style="position:relative;left:-20px;flex:26;">Welcome To DADI </h4>
      </div><hr style="margin:0;">
      <div class="w3-purple w3-center" style="position: absolute;bottom:0;width:40%;margin:auto 30%;height:30px;z-index:1003;">
        20 results found
      </div>
      <div class="w3-container w3-" style="height:80px;">
          <h3 class="w3-center myslides" style="margin:5px 0 0 0;padding:3px;font-weight: 300;">Find And Hire Artisans And Freelancers</h3>
          <h3 class="w3-center myslides" style="margin:5px 0 0 0;padding:3px;font-weight: 300;">Find And Rent Appartments</h3>
      </div>

<div id="json">
  json
</div>

      <div class="w3-container w3-center w3-medium w3-row" style="padding-top:10%;">
        <div id="hiresomeone" class="w3-col s12 " style="margin:5px 0;font-weight:610;"> <span class="w3-large w3-border w3-border-purple new-purple w3-btn w3-round-large" style="width:220px;">Hire Freelancer</span> </div>
        <div id="work" class=" w3-col s12 " style="margin:5px 0;font-weight:610;"><span class="w3-large  w3-button w3-round-large " style="width:220px;color:#681077;background-color: #fef6ff;">Work As A freelancer</span> </div>
        <div class="w3-col s12 " style="margin:5px 0;font-weight:610;"><span class="w3-large  w3-button w3-round-large" style="width:220px;color:#f5366b; background-color: #fff2fb;">Rent An Appartment</span> </div>
      </div>
  </div>
</div>
<script>
  $(document).ready(function(){

    $.ajax({
            dataType: 'json',
            url: 'Welcome/json',
            method: 'POST',
            beforeSend: function(){
              alert('sending');
            },
            success: function(data)
            {
              //alert(data);
              //alert(data[0]);
               $.each(data, function(index, element){
                alert(element.lat)
               })
              
            }
               
    });
  });
            
  var slideIndex = 0;
  carousel();

  function carousel(){
    var i;
    var x = document.getElementsByClassName("myslides");
    for (i = 0; i < x.length; i++){
      x[i].style.display = "none";
    }
    slideIndex++;
    if (slideIndex > x.length) {slideIndex = 1}
      x[slideIndex-1].style.display = "block";
    setTimeout(carousel, 2000);
  }
</script>

<!--||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||SHOW LIST VIEw|||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||-->

<div id="main_list" class="w2-twit-grey" style="height: auto;max-width:700px;position: absolute;top:0;margin:auto;z-index:1200;display: none;">

  <div class="w3-white" style="height:9vh;position: fixed; max-width: 700px; width:100%;top:0; z-index:2;">
    <img src="http://localhost/webapp/image/dadipurple.png" style="position: relative;width:80px; height:30px;top:9px;left:5px;">
        <div class="w3-white" style="position: relative;top:7px;width: 120px;float:right; height: auto">
          <span class="w3-small  w3-right w3-button" style="width:auto;color:#f5366b;font-weight: 600;border:1px solid #fff; background-color: #fef6ff;;margin:auto 6px auto auto;">Rent Appartments</span> 
        </div><!--Apartment-->
  </div><!--header-->

          <div  class="w3-white w3-center" style="height:9vh;position: fixed; max-width: 700px; width:100%;bottom:0; z-index:1100;">
             <div id="mapview" class="w3-round-large" style="position: relative;top:7px;width: 200px; height: auto;left:50%; margin-left: -100px;color:#fff;font-weight: 600; background-color: #f5366b;padding: 5px;">
                Map View
              </div><!--Apartment-->
          </div>  <!--footer-->


          <div id="show_detail_3" class="" style=""></div>  <!--show worker details-->


<div id="loader_list" class="w3-white w3-border-top" style="position: absolute;padding-top:60;top:50px; height: 100vh; width: 100%;z-index: 10;display: none;">

    <div class="w3-center">
       <div class="comm_spinner" style="background-color: #f5366b;display:block;position: relative;top:;z-index: 11;">
       </div> 
      <div class="w3-small" style="margin-top: -120px;z-index: 11;color:#657786;">fetching thousands of artisans data...</div>
    </div>
</div><!--loader-->

<div> <!--DIV HOLDS AFTER APARTMENT-->
  <div class="w3-white" style="height:9vh;position: relative;margin-top:50px; max-width: 700px; width:100%;top:0; z-index:1;">
        <div class="w3-small w3-center w3-round w3-dropdown-hover" style=" background-color:white;color:#f5366b;margin-top:7px;width: 100px;margin-left:5px; height:; outline:none;">

              <button class=" w3-center w3-button w3-round" style="padding-top:7px;flex:6;background-color:#fff2fb;outline:none; outline-color: none; text-decoration: none;height: 30px; width:100px;"> State<span style="margin-left: 3px;font-weight: 800;" class="fa fa-angle-down"></span> </button>
              <div class="w3-dropdown-content w3-bar-block w3-card-4"><!--DROPDOCN CONTENT-->
                <a  id="state0" class="w3-bar-item w3-button">Lagos</a>
                <a  id="state1" class="w3-bar-item w3-button">Abuja</a>
                <a  id="state2" class="w3-bar-item w3-button">Rivers</a>
                <a  id="state3" class="w3-bar-item w3-button">Cross River</a>
                <a  id="state4" class="w3-bar-item w3-button">Ondo</a>
              </div>
        </div><!--country-->

        <div class="w3-small w3-center w3-bar w3-border w3-round" style="position: relative;display: flex; background-color:#fff;color:#681077;margin-top:18px;width: 100px;float:right;right:5px; height: auto; outline:none;">
              <div class="w3-medium fa fa-filter w3-border " style="flex:6;margin-top:;"> Filter </div>
        </div><!--country-->
  </div><!--filter-->

              <div class=" w2-twit-grey" style="height: 5px;">

              </div>

  <div style="position: relative;top:0px; height: 150px; width:100%;padding-top:8px;" class="w3- w3-small w3-white">
      <div class="w3-white w3-bar" style="display: ;margin-top:5px;">
        <div id="list0" class="w3-light-grey w3-bar-item w3-center" style="position: relative;padding:5px;margin:2px 4px;flex:2;">Electrician</div>
        <div id="list1" class="w3-light-grey w3-bar-item w3-center" style="position: relative;padding:5px;margin:2px 4px;flex:4;">Graphic Designer</div>
        <div id="list2" class="w3-light-grey w3-bar-item w3-center" style="position: relative;padding:5px;margin:2px 4px;flex:2;">Plumber</div>

        <div id="list3" class="w3-light-grey w3-bar-item w3-center" style="position: relative;padding:5px;margin:2px 4px;flex:6;">Mobile Developer</div>
        <div id="list4" class="w3-light-grey w3-bar-item w3-center" style="position: relative;padding:5px;margin:2px 4px;flex:2;">Painter</div>
        <div id="list5" class="w3-light-grey w3-bar-item w3-center" style="padding:5px;margin:2px 4px;flex:6;">Web Developer</div>

        <div id="list6" class="w3-light-grey w3-bar-item w3-center" style="padding:5px;margin:2px 4px;flex:2;">Baker</div>
        <div id="list7" class="w3-light-grey w3-bar-item w3-center" style="padding:5px;margin:2px 4px;flex:4;">Video Editor</div>
        <div id="list8" class="w3-light-grey w3-bar-item w3-center" style="padding:5px;margin:2px 4px;flex:5;">Furniture Maker</div>

        <div id="list9" class="w3-light-grey w3-bar-item w3-center" style="padding:5px;margin:2px 4px;flex:6;">Content Writter</div>
      </div>
  </div><!--Category-->

  <div class=" w2-twit-grey " style="height: 400px;" >
<div  class="w3-bar w2-twit-grey" style="height: auto;margin-bottom: 50px;"><!--start- bar and list hold-->
    <div class=" " style="height:160px;position: relative;background-image: linear-gradient(white,white,#F5F8FA,#F5F8FA)">
      <div id="list_hold"><!-- list hold-->



        <div id="search" class="w3-small w3-center" style="color:#657786;position:relative;top:100px;">click to find whoever you want to hire</div>
       

        
      </div><!--end listhold -->
    </div><!--end bar-->
  </div>
  </div><!--List-->




  <!--||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||END LIST VIEW|||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||-->

 <!--||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||POP UP ON PAGE|||||||||||||||||||NOTE IF USER HAS NOTIFICATION ICON DISPLAYED, HE WILL NOT SEE THIS BY DEFAULT, BUT RATHER A BUTTON WILL BE DISPLAYED|||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||-->
<div class="w2-modal3 popup3" style="display:none;z-index:1100;">
  <div class="w3-white" style="position: relative;top:0px; max-width: 400px; margin:auto;height:100%;margin:auto;border-top-left-radius: 20px; border-top-right-radius: 20px;">
      <div class="w3-container " style="display: flex;">
        <span id="close3" class="w3-text-grey" style="flex:2; position: relative;left:97%;top:10px; font-weight: 400;font-size: 22px; ">&times</span>
        <h4 style="position:relative;left:-20px;flex:26;">Hire Divine</h4>
      </div><hr style="margin:0;">

<!--********************************************CALL COVER-->
<div id="call" class="w3-container w3-margin-top" style="display:none;">
          <div id="holder_call" class=" w3-center w3-white w3-container " style="position: relative;top:20px;display:block; height: 56vh; text-align: left; width:100%;z-index:110;">
            <a href="tel:09032366154">
          <div id="" class="w3-container w3-center w3-white w3-animate-left" style="position:relative; display: block; height: 100%;">
            <div class="w3-center w3-card-6 w3-medium w3-hover-purple w3-text-black w3-round-large" style="height:40px; width:150px;position: absolute; top:43%; left:50%; margin:0 0 0 -75px;padding:11px 0 0 0;">Call Client <i class="fa fa-phone" style="position:relative; left:10px; font-size:17px;"></i>
            </div>
            </a>

            <a href="https://wa.me/08032366154?text=Hello, i saw you on DADI. I want to hire your service">
            <div class="w3-center w3-medium w3-green w3-hover-white w3-text-white w3-hover-text-green w3-round-large w3-border w3-border-green" style="height:40px; width:150px;position: absolute; top:26%; left:50%; margin:0 0 0 -75px;padding:11px 0 0 0;">Chat<i class="fa fa-whatsapp" style="position:relative; left:10px; font-size:17px;"></i>
            </div>
          </div>
        </a>
           <div class="w3-small" style="position: relative;bottom:25%;left:-1px;">Please ensure you deliver a quality job, else youll be rated low and wont receive your payments</div>
    </div>
</div>

<!--*************************************************USER INPUT COVER-->
<div id="user" class="w3-container w3-margin-top " style="display:block;">
    <div id="holder_call'.$value['id'].'" class=" w3-center w3-white w3-container " style="position: relative;top:20px;display:block; height: 56vh; text-align: left; width:100%;z-index:110;">
            <div class="w3-small" style="margin:-5px 0 0 0; font-size:14px;">Kindly give us a few details about you, it will help us contact you in any case of eventuality</div>
          <div><input id="name" type="text" name="name" class="w3-input w3-white w3-border w3-round-large" style="margin:5px 0 2px 0;outline: none; text-decoration: none;" placeholder="Name"> </div>
          <div><input id="contact" type="tel" name="contact" class="w3-input w3-white w3-border w3-round-large" style="margin:5px 0 0 0;outline: none; text-decoration: none;" placeholder="Phone Number"> </div>
          <div onclick="showcall()" class="w3-btn w3-purple w3-margin-top w3-round-large">continue to hire</div>
    </div>
</div>

<!--COVER BEGINS-->
  <div id="detail" class="w3-container w3-margin-top" style="display: block;"> 
    <div>

      <div class="shadow1 "  style="height: 52px;display: flex; width:100%; padding: 1px 5px;">
        <div class="" style="flex:2;">
          <p class="w3-small" style="font-weight: 600;">Worker Rating</p>
          <div class=" w3-small" style="color: #c8d415;margin-top:-10px;"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><strong class="w3-text-grey" style="margin:0 0 0 10px;">4.8</strong> </div>
        </div>
        <div class="" style="flex:2;">
          <p class="w3-small" style="font-weight: 600;">Job Type <i class="fa fa-check-circle w3-text-blue w3-margin-left" aria-hidden="true"></i></p>
          <div class=" w3-small " style="margin-top: -10px;color:#8d8b9c;">Electrician</div>
        </div>
      </div>

      <div class=" "  style="height: 52px;display:flex; width:100%; padding: 1px 5px;margin-top:5px;">
        <div class="" style="flex:4;">
          <p class="w3-small" style="font-weight: 600;">Workmanship Range  <i class="fa fa-check-circle w3-text-blue w3-margin-left" aria-hidden="true"></i></p>
          <div class=" w3-small " style="margin-top: -10px;color:#8d8b9c;">&#8358<span class=" w3-text-grey " style="padding: 5px 9px; margin: -15px 0 0 -5px;">  '.$row->w_from.' - '.$row->w_to.' </span></div>
        </div>
        <div class="" style="flex:2;">
          <p class="w3-small" style="font-weight: 600;">Location  <i class="fa fa-check-circle w3-text-blue w3-margin-left" aria-hidden="true"></i></p>
          <div class=" w3-small " style="margin-top: -10px;color:#8d8b9c;">Cross River</div>
        </div>
      </div><hr>

      <div class="shadow1"  style="height: 52px; width:100%; padding: 1px 5px;margin-top:5px;height:auto;">
        <div class="" style="flex:2;">
          <p class="w3-small" style="font-weight: 600;">Job Description <i class="fa fa-check-circle w3-text-blue w3-margin-left" aria-hidden="true"></i></p>
          <div class=" w3-small" style="margin-top: -10px;color:#8d8b9c;height:auto;">Get children to study with our biscuit vending app
            Reward them with biscuits We build a learning platform that rewards kids with a variety of biscuits and gets the parents paying a weekly subscription for biscuit supplies.</div>
        </div>
      </div>

      <div class=" w3-border-bottom w3-border-light-grey"  style="height: 52px; width:100%; padding: 1px 5px;margin-top:5px; display: flex;">
        <div class=" "  style="flex: 2;">
          <p class="w3-small" style="font-weight: 600;">Expertise</p>
          <div class=" w3-small" style="margin-top: -10px;color:#8d8b9c;"> Web development </div>
        </div>

        <div class=" "  style="flex:2;">
          <p class="w3-small" style="font-weight: 600;">Jobs Completed</p>
          <P class="w3-small w3-text-grey" style="margin-top: -10px;">0</P>
        </div>
      </div>

    </div>
        <div id="proceed"  class="w3-purple w3-btn w3-round-xlarge" style="position: relative;top:10px;width:250px; left:50%;margin-left: -125px; max-width: 280px;">Proceed</div>
  </div>
</div>

 <!--||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||POP UP ON PAGE|||||||||||||||||||NOTE IF USER HAS NOTIFICATION ICON DISPLAYED, HE WILL NOT SEE THIS BY DEFAULT, BUT RATHER A BUTTON WILL BE DISPLAYED|||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||-->

<div class="w2-modal2 popup2" style="display:block;z-index:1100;">
  <div class="w3-white ]" style="position: relative;top:0px; max-width: 400px; margin:auto;height:100%;margin:auto;border-top-left-radius: 20px; border-top-right-radius: 20px;">
      <div class="w3-container" style="display: flex;">
          <h5 id="back" class=" w3-medium" style="font-weight:50;flex: 2;position: relative;top:3px;"><i class="fa fa-chevron-left"></i></h5>
        <h5 style="flex: 16;position: relative;">Choose who you want to hire </h5>
      </div><hr style="margin:0;">

      <div class="w3-container w3-center w3-medium w3-white" style="position: relative;left:50%;margin-left:-150px; padding-top:10%;height: 390px;width:300px;overflow: scroll;">

        <div style="display: flex;">
          <div id="main0" class="w3-card-6 w3-col s6 m6" style="margin:4px 18px;flex:2;">
          <img class="blur" id="image" src='<?php echo base_url();?>asset/marker/electric.svg'  style=" object-fit: ; height: 40px; width: 30px; margin-top: 15px;">
            <p class="w3-small">Electrician</p>
          </div>

          <div id="main1" class="w3-card-6 w3-col s6 m6" style="margin:4px 18px;flex:2;">
          <img class="blur" id="image" src='<?php echo base_url();?>asset/freelancer/graphic.png'  style=" object-fit: ; height: 40px; width: 30px; margin-top: 15px;">
            <p class="w3-small">Graphic Designer</p>
          </div>
        </div>
<!--section1-->
        <div style="display: flex;">
          <div id="main2" class="w3-card-6 w3-col s6 m6" style="margin:4px 18px;flex:2;">
          <img class="blur" id="image" src='<?php echo base_url();?>asset/marker/plumber.svg'  style=" object-fit: ; height: 40px; width: 30px; margin-top: 15px;">
            <p class="w3-small">Plumber</p>
          </div>

          <div id="main3" class="w3-card-6 w3-col s6 m6" style="margin:4px 18px;flex:2;">
          <img class="blur" id="image" src='<?php echo base_url();?>asset/freelancer/mobile.png'  style=" object-fit: ; height: 40px; width: 30px; margin-top: 15px;">
            <p class="w3-small">Mobile Developer</p>
          </div>
        </div>
<!--section2-->
        <div style="display: flex;">
          <div id="main4" class="w3-card-6 w3-col s6 m6" style="margin:4px 18px;flex:2;">
          <img class="blur" id="image" src='<?php echo base_url();?>asset/marker/paint.svg'  style=" object-fit: ; height: 40px; width: 30px; margin-top: 15px;">
            <p class="w3-small">Painter</p>
          </div>

          <div id="main5" class="w3-card-6 w3-col s6 m6" style="margin:4px 18px;flex:2;">
          <img class="blur" id="image" src='<?php echo base_url();?>asset/freelancer/webdev.png'  style=" object-fit: ; height: 40px; width: 30px; margin-top: 15px;">
            <p class="w3-small">Web Developer</p>
          </div>
        </div>
<!--section3-->
        <div style="display: flex;">
          <div id="main6" class="w3-card-6 w3-col s6 m6" style="margin:4px 18px;flex:2;">
           <img class="blur" id="image" src='<?php echo base_url();?>asset/marker/baker.svg'  style=" object-fit: ; height: 40px; width: 30px; margin-top: 15px;">
            <p class="w3-small">Baker</p>
          </div>

          <div id="main7" class="w3-card-6 w3-col s6 m6" style="margin:4px 18px;flex:2;">
          <img class="blur" id="image" src='<?php echo base_url();?>asset/freelancer/animation.png'  style=" object-fit: ; height: 40px; width: 30px; margin-top: 15px;">
            <p class="w3-small">Video Editor</p>
          </div>
        </div>
<!--section4-->
        <div style="display: flex;">
          <div id="main8" class="w3-card-6  w3-col s6 m6" style="margin:4px 18px;flex:2;">
          <img class="blur" id="image" src='<?php echo base_url();?>asset/marker/furniture.svg'  style=" object-fit: ; height: 40px; width: 30px; margin-top: 15px;">
            <p class="w3-small">Furniture Maker</p>
          </div>

          <div id="main9" class="w3-card-6 w3-col s6 m6" style="margin:4px 18px;flex:2;">
          <img class="blur" id="image" src='<?php echo base_url();?>asset/freelancer/content.png'  style=" object-fit: ; height: 40px; width: 30px; margin-top: 15px;">
            <p class="w3-small">Content Writter</p>
          </div>
        </div>

      </div>
  </div>
</div>




</body>
</html>

<script>
$(document).ready(function(){
  $('#allowss').click(function(){

        navigator.permissions.query({name:'geolocation'}).then(function(result){
                navigator.geolocation.watchPosition(showPosition);
                            function showPosition(position) {       
                                
                              window.location.href = "<?php  echo base_url()?>";
                                
                            }
                      if(result.state == 'granted'){
                       window.location.href = "<?php echo base_url()?>";

                      }else if(result.state == 'denied'){
                         
                         window.location.href = "<?php echo base_url()?>";
                      }else{
                          
                      }
                  })
        setTimeout(function(){
           window.location.href = "<?php  echo base_url()?>";
        }, 6000)
  })

<?php 
$i = 0;
  while ($i < 10) { ?>

     $('#main<?php echo $i ?>').click(function(){ 
 var service = ['Electrician', 'Graphic Designer', 'Plumber', 'Mobile Developer', 'Painter', 'Web Developer', 'Bakers', 'Video Editor', 'Furniture Maker', 'Content Writter'];
 var image = ['electric.svg', 'graphic.png', 'plumber.svg', 'mobile.png', 'paint.svg', 'webdev.png', 'baker.svg', 'animation.png', 'furniture.svg', 'content.png'];
          var session = service[<?php echo $i ?>];
          var image = image[<?php echo $i ?>];
          alert(image);
          alert(i);
          //alert(image);

          })


  <?php  $i++;
  }
?>
})
</script>


































<script type="text/javascript">
      //set user location
      var lat = "<?php echo $_SESSION['lat'];?>";
      var long = "<?php echo $_SESSION['long'];?>";
  var mymap = L.map('mapid').setView([lat, long], 16);
/*
    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors',*/
L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token={accessToken}', {
    maxZoom: 20,
    id: 'mapbox/outdoors-v11', 
    tileSize: 512,
    zoomOffset: -1,
    accessToken: 'pk.eyJ1IjoiZGl2aW5lMTUwIiwiYSI6ImNrYTI0eGxkZjA2d2YzZW8xczc4am90YjcifQ.-qu_8HxRK4xyfI_wVZktLg'
}).addTo(mymap);
  var popups = L.popup({
autoClose: false,
closeOnClick: false
  }).setContent('<div style="min-width:100px; max-width:200px;display:block;" class="w3-tiny"><b>Click</b> i charge <b class="w3-text-blue">1000NGN - 10000NGN</b> </div>')

  // FOR ICON
  /*var firefoxIcon = L.icon({
        iconUrl: 'http://joshuafrazier.info/images/firefox.svg',
        iconSize: [38, 95], // size of the icon
        popupAnchor: [0,-15]
        });*/
var iconOptions = {
  iconUrl: '<?php echo base_url();?>asset/marker/u_mark2.png',
  iconSize: [35, 35]
}
var customIcon = L.icon(iconOptions);
var markerOptions = {
  title: "MyLocation",
  clickable: true,
  draggable: false,
  icon: customIcon
}
var you =  L.marker([lat, long], markerOptions).addTo(mymap).bindPopup(popups).openPopup(); 


var pointA = new L.LatLng(4.902534,  6.907050);
var pointB = new L.LatLng(4.802534,  6.907050);
var pointList = [pointA, pointB];

var firstpolyline = new L.polyline(pointList, {
  color: 'red',
  weight: 1,
  opacity: 0.5,
  smoothFactor: 1
});
firstpolyline.addTo(mymap);

  var circle = L.circle([4.902534,  6.907050],{
    color: 'red',
    fillColor: 'rgb(199 187 187 / 18%)',
    fillOpacity: 0.5,
    radius: 100,
  }).addTo(mymap);
 /*   
mymap.removeControl(mymap.zoomControl);
mymap.zoomControl.disable();*/
</script>

<script >
//|||||||||||||||||||||||||||||||||||||||||||||||||||||||||SIDE BAR CONTROL SRCIPT||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||





    //|||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||for |||||||SIDEBAR CATEGORY||||||||||buttons||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||| 

</script>
<script>
  //|||||||||||||||||||||||||||||||||||||||||||||||||||||||||SMALL BUTTONS CONTROL MOSTYLE FOR SIDEBAR ||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||
$('#back').click(function(){
  $('.popup2').hide();
  $('.popup1').show();

})
$('#close').click(function(){
  $('.popup1').hide();

})
$('#close3').click(function(){
  $('.popup3').hide();

})
$('#proceed').click(function(){
  $.ajax({
      url:  '<?php echo base_url();?>artisan/check',
      method: 'POST',
      success: function(data)
      {
        if(data == 'user_set'){
          alert('wo');
            $('#call').show();
            $('#detail').hide();
        }else{
          alert('else');
            $('#user').show();
            $('#detail').hide();
        }
      }
            //first reload  
  });
})

function showcall() {
  var name = $('#name').val();
  var phone = $('#contact').val();
          $.ajax({
            url:  '<?php echo base_url();?>Welcome/userz',
            method: 'POST',
            data: {name:name, phone:phone},
            success: function(data)
            {
                $('#user').hide();
                $('#call').show();
            }
                  //first reload
               
            });
}


function w3_open() {
  document.getElementById("mySidebar").style.display = "block";
}
// OPEN NETWORK FORM
$('#netw').click(function(){
      var page = 'network';
      window.location.href = "<?php  echo base_url()?>form/"+page; 
 
})
// OPEN hiresomeone FORM
$('#hiresomeone').click(function(){
      $('.popup1').hide();
      $('.popup2').show();
  });
//CLO
// OPEN WORK FORM
$('#work').click(function(){
      var page = 'work_form';
      window.location.href = "<?php  echo base_url()?>form/"+page; 
  });
//CLOSE
function w3_close() {
  document.getElementById("mySidebar").style.display = "none";
}

</script>

<?php
/* CONTROLS: THIS CONTROLS WHICH PAGE TO LOAD INCASE HE USER GOES OFFLINE AND HAS TO RELOAD THE PAGE AGAIN hE WILL BEGIN FROM THE LAST PAGE */
  if ($this->session->tempdata('jobber') AND $this->session->tempdata('workker') )
   {
?>
    <script>
      $('#response').show();
      var jor = '<?php echo  $this->session->tempdata('jobber') ?>';
      var wor = '<?php echo $this->session->tempdata('workker') ?>';
      $('.response-layout').show();
       $('.response-layout').load('Welcome/response', {wor:wor, jor:jor});
    </script>

<?php
  }
 ?>

<script >
  $(document).ready(function(){
    
  var user = '<?php echo $this->session->userdata('user'); ?>';
  //check if user has a job he hasnt finished yet
         $('#bell').load('Welcome/home_bell_icon', {user:user});
             
   }) 
</script>


  <?php if($this->session->userdata('pay_set')):?>
      <script >
        //*********************************CHECK FOR ONCLICK OF hire to display payment option
        $(document).ready(function(){
          setInterval(function(){
            $.ajax({
                url:  '<?php echo base_url();?>Welcome/check_ifpayment',
                method: 'POST',

                success: function(data)
                {
                     $()
                }
                      //first reload
                   
                });
          }, 1000)
        });
      </script>
  <?php endif ?>


<?php 
        if($this->session->tempdata('not_complete')){ ?>
          <script>
          $('#c_w_d').hide();//chat with dadi
          setTimeout(function(){
            //$('#c_w_d').hide();
          }, 60000)
          </script>
       <?php }
        if($this->session->tempdata('cancel')){ ?>
          <script>
          $('#cancel_job').hide();// cancel jobmodal
          setTimeout(function(){
            //$('#cancel_job').hide();
          }, 15000)
          </script>
       <?php }
?>



<script>
  <?php 
$i = 0;
  while ($i < 10) { ?>

  $('#list<?php echo $i ?>').click(function(){ 
 var service = ['Electrician', 'Graphic Designer', 'Plumber', 'Mobile Developer', 'Painter', 'Web Developer', 'Bakers', 'Video Editor', 'Furniture Maker', 'Content Writter'];
          var session = service[<?php echo $i ?>];
          alert(session);
          $('#loader_list').show();
            $.ajax({
                url:  'Listing/callworker',
                method: 'POST',
                data: {session:session},
                beforeSend: function()
                {
                    
                    $('#loader_list').show();
                    //$('#list_hold').html('');
                },
                success: function(data)
                {
                    
                      $('#loader_list').hide();
                      
                      $('#list_hold').html(data);
                }
                      //first reload  
            });


            $.ajax({
                url:  'Listing/call_bottom',
                method: 'POST',
                data: {session:session},
                beforeSend: function()
                {
                    
                    //$('#loader_list').show();
                    //$('#list_hold').html('');
                    //$('#show_detail_3').show();
                },
                success: function(data)
                {
                    alert(data);
                      //$('#loader_list').hide();
                        $('#show_detail_3').html(data);
                        
                      //$('#list_hold').html(data);
                }
                      //first reload  
            });
    })


 $('#state<?php echo $i ?>').click(function(){ 
 var state = ['Lagos', 'Abuja', 'Rivers', 'Cross River', 'Ondo'];
          var state = state[<?php echo $i ?>];
          alert(state);
          //alert(image);

          })


  <?php  $i++;
  }
?>
 $('#mapview').click(function(){ 
    $('#mapid').show();
    $('#w2-modal').hide();
    $('#main_list').hide();
 })
 $('#listview').click(function(){ 
    $('#mapid').hide();
    $('#w2-modal').hide();
    $('#main_list').show();
 })
</script>