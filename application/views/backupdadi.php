 <!--END ONE SECTION BEGIN ANOTHER-->
  <div id="content'.$value['id'].'" class="w3-container" style="display: block;">
   <h3 class=" w3-small w2-t-black" style="position:relative; top:20px;"><b>SET PRICE</b></h3>
    <div id="holder_call'.$value['id'].'" class=" w3-center w3-green  " style="position: relative; top:10px;display:none; height: 20vh; text-align: left; width:100%; ">
          <div id="call'.$value['id'].'" class="w3-container w3-center w3-light-grey w3-animate-left" style="position:relative; display: block; height: 100%;">
            <div class="w3-card-5 w3-center w3-small w3-hover-purple w3-text-black w3-round-large" style="height:40px; width:150px;position: absolute; top:43%; left:50%; margin:0 0 0 -75px;padding:12px 0 0 0;">Call Worker <i class="fa fa-phone" style="position:relative; left:10px; font-size:17px;"></i>
            </div>
            <div class="w3-card-5 w3-center w3-small w3-hover-purple w2-t-black w3-white w3-round-large" style="height:40px; width:150px;position: absolute; top:43%; left:50%; margin:0 0 0 -75px;padding:12px 0 0 0;">Chat on whatsapp <i class="fa fa-phone" style="position:relative; left:10px; font-size:17px;"></i>
            </div>
         </div>
    </div>
      <div id="holder_wait'.$value['id'].'" class="w3-container" style="display: none;">
        <h3 class=" w3-large" style="position:relative; top:20px;"><b>Set Price</b></h3>
        <p>'.$value['name'].' is deciding how he wants to pay you.</p>
      </div>
  </div>
    


    <!--END ONE SECTION BEGIN ANOTHER-->
  <div id="content'.$value['id'].'" class="w3-container" style="display: block;">
    <h3 class=" w3-small w2-t-black" style="position:relative; top:20px;"><b>SET PRICE</b></h3>
    <br>
    <!--****************call holder********************************-->
    <div id="holder_call'.$value['id'].'" class=" w3-center w3-white  " style="position: relative; w3-border- w3-border-purple top:10px;display:none; height: 24vh; text-align: left; width:100%; ">
         <div id="call'.$value['id'].'" class="w3-container w3-center w3-light-grey w3-animate-left" style="position:relative; display: block; height: 100%;">
            <div class="w3-card-5 w3-center w3-small w3-hover-purple w2-t-black w3-white w3-round-large" style="height:40px; width:150px;position: absolute; top:43%; left:50%; margin:0 0 0 -75px;padding:12px 0 0 0;">Call Worker <i class="fa fa-phone" style="position:relative; left:10px; font-size:17px;"></i>
            </div>
            
          <div id="whatsapp'.$value['id'].'" class="w3-container w3-center w3-light-grey w3-animate-left" style="position:relative; display: block; height: 100%;">
              <div class="w3-card-5 w3-center w3-small w3-hover-purple w2-t-black w3-white w3-round-large" style="height:40px; width:150px;position: absolute; top:43%; left:50%; margin:0 0 0 -75px;padding:12px 0 0 0;">Chat on whatsapp <i class="fa fa-phone" style="position:relative; left:10px; font-size:17px;"></i>
          </div>

    </div>
        <!--****************call holder********************************-->
    <div id="holder_wait'.$value['id'].'" class=" w3-center w3-green w3-container " style="position: relative; w3-border- w3-border-purple top:10px;display:none; height: 24vh; text-align: left; width:100%; ">
        <p>'.$value['name'].' is chosing how he wants to pay you</p>
    </div>
<!DOCTYPE html><?php
/*if( $this->session->userdata('user')){
    echo"string";
}else{
    echo"my my";
}*/
?>
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
<link rel="stylesheet" href="<?php  echo base_url();?>asset/css/grid.css"/>
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
<!--PUSH NOTIFICATION-->
<script charset="UTF-8" src="//web.webpushs.com/js/push/8f79041844bcb764c5411146aa86d1f7_1.js" async></script>
</head>
<style type="text/css">
body{
    font-family:"Arial, Helvetica, sans-serif";
}
@media only screen and (min-width:700px){ 
  #laptop_screen{
    display:block;
  }



}
@media only screen and (max-width:700px){  

  #laptop_screen{
    display:none;
  }



}
  .w3-disabled,.w3-btn:disabled,.w3-button:disabled{cursor:not-allowed;opacity:0.3}.w3-disabled *,:disabled *{pointer-events:none}
 .w3-card-5{box-shadow:5px 13px 14px 0px rgba(202, 202, 202, 0.46), 14px -1px 20px 0 rgba(210, 202, 202, 0.19)}
  .w2-sidebar{height:100vh;width:252px;background-color:#fff;position:fixed!important;z-index:1;overflow:auto}
  .w3-card-6{box-shadow:5px 13px 14px 0px rgba(202, 202, 202, 0.46), 14px -1px 20px 0 rgba(210, 202, 202, 0.19)}
  .w2-modal{z-index:3;display:none;padding-top:100px;position:fixed;left:0;top:0;width:100%;height:100%;overflow:auto;background-color:rgb(255 255 255 / 76%);}
</style>
<body class=""  style="">


<!--|||||||||||||||||||||||||||||||||||||||||||||||||DEFAULT page when you open site on laptop|||||||||||||||||||||||||||||||||||||||||||||-->
  <div id="laptop_screen" class="w3-white w3-center" style="position: relative;max-width:700px;margin:auto;z-index:20000; height:100vh; width:100%;">
        <div class="w3-center w3-white" style="position: absolute;top:40%;left:17%;">
          <img src="<?php echo base_url();?>asset/image/dadi5.png" style="position: relative;margin:5px 0 0 0;top:5px; width: 100px;height:35px;z-index:1000;">
          <p class="w3-text-purple w3-xlarge w3-center"> DADI uses GPS technology, you cann only access this site on your mobile device, please switch to a mobile phone</p>
          w
        </div>
  </div> 

 <!--||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||map section|||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||-->
      <div id="mapid" onclick="w3_close()" style=" height:100vh;width:100%;display:block;" class="w3-card w3-"></div>
           <!--HEADER-->

           <!--HEADER-->
      <div class=" w3-container" style="position: absolute; width:100%;top:0;background-color:transparent; height: 10vh; border-bottom-left-radius: 15px; border-bottom-right-radius: 15px; z-index: 1000;">

        <div style="">
            <span id="lati" class="" style="font-size:5px;color:transparent;"></span>
            <span id="long" class=" " style="font-size:5px;color:transparent;;"></span>
        </div>
                         <script>
                            var x = document.getElementById("demo");
                            
                                navigator.geolocation.watchPosition(showPosition);
                            function showPosition(position) {
                                      
                                          $('#lati').text(position.coords.latitude);
                                          $('#long').text(position.coords.longitude);
                              
                            }
                            </script>
        <div class="w3-white w3-card-6 w3-center w3-circle but w3-show" style="position: relative; top:5px; height: 45px; width:45px;">
           <div class="w3-medium w3-left w3_opens " onclick="w3_open()" style=" padding: 11px 0 0 13px;"><img src="<?php echo base_url()?>asset/newimg/dash.svg" style="height:18px; width: 18px;"></div>
        </div>
        <!--close header-->

      </div>
      <!--|||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||SHOW FLOATING BELL FOR INCOMPLETED JOBS ||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||-->
  
       <div id="bell" style="position: absolute;bottom:25%;">
        </div>
        <div id="mapscript">
         
        </div>
       <div id="new"></div>  
       <div id="new2"></div> 
     <!--close map-->
    </div>
     <div class="response-layout w3-border w3-white" style="position:absolute;bottom:0;height:50vh; border-top-left-radius:15px;border-top-right-radius:15px; z-index: 1000;max-width: 700px;display: none;width:100%; margin: auto;">
      
    </div>
<!--||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||SIDE BAR||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||-->
  <div class="w2-sidebar w3-animate-top w3-white w3-bar-block w3-border-right" style="position: relative;top:0; display:block; z-index: 1000;" id="mySidebar">
    <div class="w2-card  w3-white w3-top" style="height: 10vh; width: inherit;display: flex;">
        <h4 class="w3-medium" style="font-weight: bold; ; margin:20px 10px 0 10px;">Who Do You Want To Hire .. ?</h4>
        <div onclick="w3_close()" class="w3-hover-text-black w3-text-grey w3_closes" style="position: absolute; right:0; font-weight: 50; font-size: 1.6rem; margin:10px 10px;">&times</div>
    </div>

    <div class="w3-container" style="position:relative;height: 5vh; top:12vh;display: flex; width: 260px;">
      <div id="artisan" class="w3-center " style="flex:2; margin:0 5px 0 0;cursor:pointer;">Artisans</div>
      <div id="freelancer" class="w3-center " style="flex:2; margin:0 0 0 5px;;cursor:pointer;">Freelancers</div>
    </div>

      <div id="for_freelancer" class="w3-container w3-row w" style="position:relative; top:13vh; width:250px; height: 60vh;overflow: scroll; display:block;">
       <?php 
      $count = array('p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z', 'ab', 'cd', 'ef', 'gh');
   $freelancer = array('Animated Explainers', 'Social Media Influencers', 'Copywriting', 'Content Writter', 'Digital Marketer', 'Web Developer', 'Graphic Designer', 'UI/UX designer', 'Mobile Developers', 'Resume and CV writter', 'Python/Excell Programmer', 'Branding & Packag Designer', 'Pitch Deck Writers', 'Photographer');
   $image_a = array('animation.png', 'influencer.png', 'copywrite.png', 'content.png', 'marketer.png', 'webdev.png', 'graphic.png', 'ui.png', 'mobile.png', 'cv.png', 'python.png', 'branding.png', 'project.png', 'photo.png');
   foreach ($freelancer as $index => $freelancers): ?>
   

          <div id="<?php echo $count[$index] ?>" class=" w3-white w3-col w3-card-6 w3-center w3-round-large" style="position:relative;height:110px; width:44%; margin:15px 3% 0 3%;">
            <img class="blur" id="image" src='<?php echo base_url();?>asset/marker/<?php echo $image_a[$index]; ?>'  style=" object-fit: ; height: 40px; width: 30px; margin-top: 15px;">
            <div class="w3-small" style="margin-top:8px;color:; "><?php echo $freelancers  ?></div>
          </div>

    <script>
    $(document).ready(function(){
        $('#<?php echo $count[$index] ?>').click(function(){ 
          var session = '<?php echo $freelancers ?>';
          var image = '<?php echo $image_a[$index] ?>';
          document.getElementById("mySidebar").style.display = "none";
alert('dhd');

        $.ajax({
                url:  '<?php echo base_url();?>Welcome/refreshmap',
                method: 'POST',
                success: function(data)
                {
                    alert('refresh');
                     $('#new').html(data);
                }
                      //first reload
                   
                });
         setTimeout(function(){
             
                          
              $.ajax({
                url:  'Welcome/call',
                method: 'POST',
                data: {session:session, image:image},
                success: function(data)
                {
                   alert('refresh2');
                     $('#new').html(data);
  
                }
                      //first reload
                   
                });
              $.ajax({
                url:  'Welcome/call_bottom',
                method: 'POST',
                data: {session:session, image:image},
                success: function(data)
                {
                
                     $('#new2').html(data);
                }
                      //first reload
                   
                });

         }, 1000)
                setInterval(function(){
                  $('#new').load('Welcome/callworker', {session:session, image:image});
             }, 5000)
            
              
      });
      });
          

    </script>
  <?php
   endforeach;
   ?>
      </div>
<!--ARTISANS-->
      <div id="for_artisan" class="w3-container w3-row w" style="position:relative; top:13vh; width:260px; height: 60vh;overflow: scroll; display:none;">
  <?php 
   $count = array('a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', '0');
   $artisan = array('Painter', 'Plumber', 'Electrician', 'Tv/Cable Installer', 'CCTV Installer', 'Laptop Repairer', 'Phone Repairer', 'Generator Repairer', 'Fashion Designer', 'Bakers', 'Furniture Maker', 'Hair Stylist', 'Private Barber', 'Event Planner', 'MakeUp Artist');
   $image_a = array('paint.svg', 'plumber.svg', 'electric.svg', 'television.svg', 'cctv.svg', 'laptop.svg', 'phone.svg', 'gen.svg', 'fashion.svg', 'baker.svg', 'furniture.svg', 'hair.svg', 'barber.svg', 'event.svg', 'makeup.svg');
   foreach ($artisan as $index => $artisans): ?>
   

          <div id="<?php echo $count[$index] ?>" class=" w3-white w3-col w3-card-6 w3-center w3-round-large" style="position:relative;height:110px; width:44%; margin:15px 3% 0 3%;">
            <img class="blur" id="image" src='<?php echo base_url();?>asset/marker/<?php echo $image_a[$index]; ?>'  style=" object-fit: ; height: 40px; width: 40px; margin-top: 15px;">
            <div class="w3-small" style="margin-top:8px;color:; "><?php echo $artisans  ?></div>
          </div>

    <script>
      $(document).ready(function(){
        $('#<?php echo $count[$index] ?>').click(function(){ 

          var session = '<?php echo $artisans ?>';
          var image = '<?php echo $image_a[$index] ?>';
          //alert(image);
          document.getElementById("mySidebar").style.display = "none";
            $.ajax({
                url:  'Welcome/refreshmap',
                method: 'POST',
                success: function(data)
                {
                    alert('refresh');
                     $('#new').html(data);
                }
                      //first reload
                   
                });
         setTimeout(function(){
             
                          
              $.ajax({
                url:  'Welcome/call',
                method: 'POST',
                data: {session:session, image:image},
                success: function(data)
                {
                  
                     $('#new').html(data);
  
                }
                      //first reload
                   
                });
              $.ajax({
                url:  'Welcome/call_bottom',
                method: 'POST',
                data: {session:session, image:image},
                success: function(data)
                {
                
                     $('#new2').html(data);
                }
                      //first reload
                   
                });

         }, 1000)
                setInterval(function(){
                  $('#new').load('Welcome/callworker', {session:session, image:image});
             }, 5000)
            
              
      });
      });

    </script>
  <?php
   endforeach;
   ?>
      </div>

    <div class="w3-container w3-row w3- " style="margin-top:14.5vh;height: 20vh;width: 250px;">
      <div id="netws" class="w3-btn w3-medium w3-col s12 m12 l12 w3-center w3-border w3-mobile w3-round-xlarge  w3-border-purple" style="margin:10px 0 0 0;">Join As Agent</div>
      <div id="works" class="w3-btn w3-medium w3-col s12 m12 l12 w3-center w3-purple w3-mobile w3-round-xlarge " style="margin:5px 0 0 0;">Work With Dadi</div>
    </div>

  </div>


</body>
</html>

<script>

//set user location
 if (navigator.geolocation) 
  {
    
setTimeout(function(){
var latitude = $('#lati').text();
var longitude = $('#long').text();
//alert('longitude');
var you =  L.marker([latitude, longitude]).addTo(mymap);

      }, 8000)
  }

</script>
<script >

//|||||||||||||||||||||||||||||||||||||||||||||||||||||||||SIDE BAR CONTROL SRCIPT||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||
  $(document).ready(function(){
    $('#artisan').click(function(){
      $('#for_artisan').show();
      $('#for_freelancer').hide();
          $('#freelancer').css('border-bottom','2px solid white');
                $('#artisan').css('border-bottom','2px solid #9c27b0');

    })
    $('#freelancer').click(function(){
      $('#for_freelancer').show();
      $('#for_artisan').hide();
            $('#artisan').css('border-bottom','2px solid white');
                  $('#freelancer').css('border-bottom','2px solid #9c27b0');
    })



    //|||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||for |||||||SIDEBAR CATEGORY||||||||||buttons|||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||




      
  });

</script>
<script>
$(document).ready(function(){

    navigator.permissions.query({name:'geolocation'}).then(function(result){
        if(result.state == 'granted'){
          $.ajax({
            url:  'main/lol',
            method: 'POST',
            success: function(data)
            {
                $('#mapscript').html(data);
            }
          });
         }else if(result.state == 'denied'){
            navigator.permissions.query({name:'geolocation'});
             alert('Grant dadi permission to get your location, inorder to continue click on the lock above page');
            }
    })

  
// OPEN NETWORK FORM
$('#netw').click(function(){
      var page = 'network';
      window.location.href = "form/"+page; 
 
})

// OPEN WORK FORM
$('#work').click(function(){
      var page = 'work_form';
      window.location.href = "form/"+page; 
  });
//CLOSE
$('.w3_closes').click(function(){
  document.getElementById("mySidebar").style.display = "none";
})
$('.w3_opens').click(function(){
  //alert('opening');
  document.getElementById("mySidebar").style.display = "block";
})

  
  var user = '<?php echo $this->session->userdata('user'); ?>';
  //check if user has a job he hasnt finished yet
         $('#bell').load('Welcome/home_bell_icon', {user:user});
             
             
<?php
/* CONTROLS: THIS CONTROLS WHICH PAGE TO LOAD INCASE HE USER GOES OFFLINE AND HAS TO RELOAD THE PAGE AGAIN hE WILL BEGIN FROM THE LAST PAGE */
  if ($this->session->tempdata('jobber') AND $this->session->tempdata('workker') )
   {
?>             
  $('#response').show();
      var jor = '<?php echo  $this->session->tempdata('jobber') ?>';
      var wor = '<?php echo $this->session->tempdata('workker') ?>';
      $('.response-layout').show();
       $('.response-layout').load('Welcome/response', {wor:wor, jor:jor});
<?php
  }
 ?>
});
</script>
