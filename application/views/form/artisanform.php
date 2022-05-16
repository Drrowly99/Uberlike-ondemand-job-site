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
<style>
body{

}
.w2-green{background-color:#05D09A;color:white;}
.w2-hover-green:hover{background-color:#05D09A;color:white;}
.w2-text-green{color:#05D09A;}
.w2-blackgrey{background-color:#464646;color:white;}
.w2-blackgreen{background-color:#262526;color:white;}
.w2-t-blackgrey{color:#464646;}
.w2-t-blackgreen{color:#262526;}
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
  margin: 100px auto 0;
  width: 70px;
  text-align: center;
}

.spinners > div {
  width: 8px;
  height: 8px;
  background-color: #333;

  border-radius: 100%;
  display: inline-block;
  -webkit-animation: sk-bouncedelay 1.4s infinite ease-in-out both;
  animation: sk-bouncedelay 1.4s infinite ease-in-out both;
}

.spinners .bounce1 {
  -webkit-animation-delay: -0.32s;
  animation-delay: -0.32s;
}

.spinners .bounce2 {
  -webkit-animation-delay: -0.16s;
  animation-delay: -0.16s;
}

@-webkit-keyframes sk-bouncedelay {
  0%, 80%, 100% { -webkit-transform: scale(0) }
  40% { -webkit-transform: scale(1.0) }
}

@keyframes sk-bouncedelay {
  0%, 80%, 100% { 
    -webkit-transform: scale(0);
    transform: scale(0);
  } 40% { 
    -webkit-transform: scale(1.0);
    transform: scale(1.0);
  }
}



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

</head>


<body class=" w3-border-red" style="position: relative;  height: 100vh;max-width:700px; margin:auto;">
 <div id="work_form" class="w3-animate-zoom" style="margin:auto auto; display: block;position: relative;top:20px;max-width:700px;width: 100%;">
            <p class="w3-center" style="font-weight: bold; font-size: 24px;">Work Form</p>
            <div class="w3-white holder w3-card-5 w3-round-xlarge" style="position: relative; border-bottom-left:200px;top:-29px; height:auto; max-height:150vh; margin:10vh auto auto auto;width:90%; max-width: 400px;">
            <p id="acc_err" class="w3-text-red w3-center w3-margin-top w3-small"></p>
              <!--arrow top-->
              <div id="to_main2" class="w3-circle w3-card-6 w3-center w3-white" style="position:absolute; left:-12px; top:-13px;width:60px; height: 60px;padding:5px; "><div class="w3-circle " style="padding:11px; height: 50px; width:50px; background-image: linear-gradient(to left, #c24fd6, #9c27b0)"><img id="spin" class="w3-spin" src="'.base_url().'asset/newimg/spinner.svg" style="height:20px;display:none; width: 20px;"></div></div>
             

              <!--work form-->
              <form id="work" class="w3-white w3-container" style="display: block; margin:0 0 50px 0;">
                  <div>
                      
                        <select id="location"  name="location" class="w3-select w3-round-xxlarge w3-border w3-border-purple w3-hover-purple " style="font-size: 12px; width:100%;height:40px;margin:45px 0 5px 0; outline:none;  padding: 10px; -webkit-appearance:none;" name="location">
                              <option value="" disabled selected>--Choose Your Location --</option>        
                              
                              <option value="Rivers State">Rivers State</option>
                              <option value="Abuja">Abuja</option>
                              <option value="Lagos">Lagos</option>
                             
                        
                        </select>
                            <p id="location_err" class="w3-text-red w3-small  margin_error"></p>
                          
                      </div>

                  <div>

                        <select id="skill" name="skill" class="w3-select w3-round-xxlarge w3-border w3-border-purple w3-hover-purple" style="font-size: 12px; height:40px;
                          margin:10px 0 5px 0; width:100%; outline:none; -webkit-appearance:none; padding: 10px;" name="skill" value="">
                              <option value="" disabled selected > --Choose Your Service -- </option>
                              <option value="Animated Explainers">Animated Explainers</option>
                              <option value="AC Installation">AC Installation & Repairs</option>
                              <option value="Branding & Packag Designer">Branding & Packag Design</option>      
                              <option value="Baking">Baking (snacks, making cakes)</option>
                              <option value="Copywriting">Copywriting</option>
                              <option value="Content Writter">Content Writing</option>
                              <option value="CCTV Installer">CCTV Installation</option>
                              <option value="Digital Marketer">Digital Marketing</option>
                              <option value="Event Planning">Event Planning</option>
                              <option value="Electrician">Electrical Install/Wiring</option>
                              <option value="Graphic Designer">Graphic Design</option>
                              <option value="Generator Repairer">Generator Repairs</option>       
                              <option value="Hair Stylist">Hair Styling</option>
                              <option value="Private Barber">Private Barber</option>
                              <option value="Social Media Influencers">Social Media Influencing</option>
                              <option value="Laptop Repairer">Laptop Repairs</option>          
                              <option value="Mobile Developers">Mobile Development</option>        
                              <option value="Phone Repairer">Mobile phone Repair</option>              
                             <option value="Makeup Artist">Makeup Aritst</option>                             
                             <option value="Plumber">Plumbing</option>
                             <option value="Painter">Painting</option>
                             <option value="Python/Excell Programmer">Python/Excell Programming</option>
                             <option value="Photographer">Photography</option>
                             <option value="Pitch Deck Writers">Pitch Deck Writing</option>
                             <option value="Resume and CV writter">Resume and CV writing</option> 
                             <option value="Software development">Software development</option>
                             <option value="UI/UX designer">UI/UX Design </option>
                             <option value="Web Developer">Web Development</option>
                          </select>
                      </div>
                           <p id="skill_err" class="w3-text-red w3-small  margin_error" style:margin-bottom:-10px;></p>


                    <div>                          
                      <textarea id="describe" name="describe" class="w3- w3-small w3-hover-purple w3-round-large w3-border w3-border-purple "  style="outline:none;height:150px;width:100%; " type="text" value="" placeholder="describe your job, the skills you use"></textarea> 
                       <p id="decsribe_err" class="w3-text-red w3-small  margin_error"></p>
                    </div>



                    <div style="margin:5px 0 0 0;">
                            <label class="w3-text-black w3-small">Workmanship Charge</label>
                            <div class="w3-margin-top w3-row">
                                <div class="w3-border-purple w3-round-xxlarge w3-border w3-col" style="width:48%; margin:0 2% 0 0;"><naira class="w3-medium" style="width: 10%;padding:0 0 0 15px;">&#8358 </naira><input  type="number" placeholder="from" id="from" name="from" step="20" style="outline:none; height:32px; padding:0 0 0 15px; width: 70%;" class="w3-hover-plight-grey w3-small w3-white w3-round-xxlarge w3-border-0" placeholder="800" ></div>
  
                                <div class="w3-border-purple w3-round-xxlarge w3-border w3-col" style="width:48%; margin:0 0 0 2%;"><naira class="w3-medium" style="width: 10%;padding:0 0 0 15px;">&#8358 </naira><input type="number" placeholder="to" id="to" name="to" step="50" style="outline:none; height:34px; padding:0 0 0 15px; width: 70%;" class="w3-hover-white  w3-small w3-white w3-round-xxlarge w3-border-0"  placeholder="10000"></div> 
                            </div>
                            <p id="from_err" class="w3-text-red w3-small  margin_error"></p>
                            <p id="to_err" class="w3-text-red w3-small  margin_error"></p>
                    </div>

<!--********************************************************LOCATION COLLECTION*********************************************************************-->
                    <div style="margin:5px 0 0 0;">
                            <label class="w3-text-black w3-small">DADI displays your job on a map, allow DADI get your current location <div id="allow" class="w3-btn w3-blue w3-round-xlarge">Allow</div></label>
                            <div class="w3-margin-top w3-row">
                                <div class="w3-border-purple w3-round-xxlarge w3-border w3-col" style="width:48%; margin:0 2% 0 0;padding: 5px;"><div id="long" class="w3-medium" style="width: 10%;padding:0 0 0 15px;">Longitude</div></div>
  
                                <div class="w3-border-purple w3-round-xxlarge w3-border w3-col" style="width:48%; margin:0 0 0 2%;padding:5px;"><div id="lat" class="w3-medium" style="width: 10%;padding:0 0 0 15px;">Latitude</div></div> 
                            </div>
                            <p id="from_err" class="w3-text-red w3-small  margin_error"></p>
                            <p id="to_err" class="w3-text-red w3-small  margin_error"></p>
                    </div>
 <div id="send" class="w3-circle w3-center w3-purple" style="position:absolute; bottom:-13px; right:-12px;width:60px;z-index: 6; height: 60px;padding:5px; "><div class="w3-circle" style="padding: 16px 0 0 0; height: 50px; font-weight: 650; width:50px; background-image: linear-gradient(to left, #9c27b0, #c24fd6)"><img src="<?php echo base_url();?>asset/newimg/send_but.png" style="height:25px; font-size:; width: 25px;margin:-8px 0 0 5px;"></div></div>

                     <div id="send" class="w3-circle w3-center w3-white" style="position:relative;bottom:-13px; left:90%;width:60px;z-index: 6; height: 60px;padding:5px; "><div class="w3-circle" style="padding: 16px 0 0 0; height: 50px; font-weight: 650; width:50px; background-image: linear-gradient(to left, #9c27b0, #c24fd6)"><img src="'.base_url().'asset/newimg/send_but.png" style="height:25px; font-size:; width: 25px;margin:-8px 0 0 5px;"></div></div>
              </form>
            
              
            </div>  
          </div>


</body>
</html>

<script>


 $('#allow').click(function(){
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
$('#lat').text(lat.toPrecision(7));
$('#long').text(long.toPrecision(7));
alert(lat);


}
  });

/*
function report(state) {
  console.log('Permission ' + state);
}

handlePermission();
          
 var revokeBtn = document.querySelector('.revoke');

  ...

revokeBtn.onclick = function() {
  revokePermission();
}

  ...

function revokePermission() {
  navigator.permissions.revoke({name:'geolocation'}).then(function(result) {
    report(result.state);
  });
}             
*/
</script>
<script>
            $('#send').click(function(){
          
              var location = $('#location').val();
              var skill = $('#skill').val();
              var describe = $('#describe').val();
              var from = $('#from').val();
              var to = $('#to').val();
              var lat = $('#lat').text();
                alert(location);
                alert(skill);
                alert(describe);
                alert(from);
                alert(to);
                if(lat != 'Latitude'){
                  alert('lat is null');
                }else{

                          $.ajax({
                               url:  '".base_url()."Form/valid_worker',
                              method: 'POST',
                              data: {location:location, skill:skill, describe:describe, from:from, to:to},
                              dataType: 'json',
                              beforeSend: function(){
                                  $('#spin').show();
                              },
                              success: function(data)
                              { 
                                if (data.error)
                                  {
                                      if (data.location_err != '') 
                                      {
                                        $('#location_err').html(data.location_err);
                                      }
                                      else
                                      {
                                        $('#location_err').html(''); 
                                      }
                                      //stop
                                      if (data.describe_err != '') 
                                      {
                                        $('#describe_err').html(data.describe_err);
                                      }
                                      else
                                      {
                                        $('#describe_err').html(''); 
                                      }
                                      //stop
                                  
                                      //stop
                                      if (data.skill_err != '') 
                                      {
                                        $('#skill_err').html(data.skill_err);
                                      }
                                      else
                                      {
                                        $('#skill_err').html(''); 
                                      }
                                      //stop
                                       if (data.from_err != '') 
                                      {
                                        $('#from_err').html(data.from_err);
                                      }
                                      else
                                      {
                                        $('#from_err').html(''); 
                                      }
                                       if (data.to_err != '') 
                                      {
                                        $('#to_err').html(data.to_err);
                                      }
                                      else
                                      {
                                        $('#to_err').html(''); 
                                      }
                                      $('#spin').hide();
                                  }
                                  if (data.account_false) 
                                     {
                                      $('#spin').hide();
                                      $('#to_err').html(''); 
                                      $('#from_err').html(''); 
                                      $('#describe_err').html(''); 
                                      $('#location_err').html(''); 
                                      $('#acc_err').html(data.account_false); 
                                     }
                                      else
                                      {
                                        $('#acc_err').html(''); 
                                      }
                                   if (data.success) 
                                     {
                                      $('#spin').hide();
                                      
                                         window.location.href = '".base_url()."Main/work_profile/';   
                                     } 
                                }
                          });
                      }  
            })
</script>

