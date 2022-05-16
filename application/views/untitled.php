<script>
var x = document.getElementById("demo");
function getLocation() {
  if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(showPosition);
  } else {
    x.innerHTML = "Geolocation is not supported by this browser.";
  }
}

function showPosition(position) {
  x.innerHTML = "Latitude: " + position.coords.latitude +
  "<br>Longitude: " + position.coords.longitude;
}
</script>




function showError(error) {
  switch(error.code) {
    case error.PERMISSION_DENIED:
      x.innerHTML = "User denied the request for Geolocation."
      break;
    case error.POSITION_UNAVAILABLE:
      x.innerHTML = "Location information is unavailable."
      break;
    case error.TIMEOUT:
      x.innerHTML = "The request to get user location timed out."
      break;
    case error.UNKNOWN_ERROR:
      x.innerHTML = "An unknown error occurred."
      break;
  }
}


function showPosition(position) {
  var latlon = position.coords.latitude + "," + position.coords.longitude;

  var img_url = "https://maps.googleapis.com/maps/api/staticmap?center=
  "+latlon+"&zoom=14&size=400x300&sensor=false&key=YOUR_KEY";

  document.getElementById("mapholder").innerHTML = "<img src='"+img_url+"'>";
}


      $.ajax({
                url:  'http://localhost/dadibeta/Welcome/response_display',
                method: 'POST',
                data: {track:track},
                success: function(data)
                {
                  alert('going');
                  if(data == 'rejected')
                  {
                    $('.wait').hide(); 
                    $('.rejected').show(); 
                  }
                  if(data == 'accepted')
                  {
                    $('.wait').hide();
                    $('.accepted').show();
                  }else{
                    $('.wait').show();
                  }
                }
          })


<script>
var x = document.getElementById("demo");
function getLocation() {
  if (navigator.geolocation) {
    navigator.geolocation.watchPosition(showPosition);
  } else {
    x.innerHTML = "Geolocation is not supported by this browser.";
  }
}
function showPosition(position) {
  x.innerHTML = "Latitude: " + position.coords.latitude +
  "<br>Longitude: " + position.coords.longitude;
}
</script>




      $geo = unserialize(file_get_contents("http://www.geoplugin.net/php.gp?ip=$ip"));
      $country = $geo["geoplugin_countryName"];
      $region = $geo["geoplugin_regionName"];
      $city = $geo["geoplugin_city"];
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
<link rel="stylesheet"
href="<?php  echo base_url();?>asset/css/w3.css"/>
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
<style >
body{
      font-family:'Titillium Web', sans-serif;
      background-color: white;
   
}

.cate{
  font-weight:bold;
  color:black;
  font-size:1.8em;
  margin-left:15px;
}
.cate-cont{
  font-weight:bold;
  color:black;
  font-size:1.2em;
}
#layout{
  position:relative;
  margin-top:;

}
/* ON HOLD FOR REFERENCE
#right{
  border-top-right-radius: 25px;
  border-top-left-radius: 25px;
} 
 */
 #right{
  height:98vh;
  padding:0 5px;
}
 #center{
  height:98vh;
  padding:0 5px;
}
.button1 {
  width:100%;
}
#secondhalf{
  display: ;
  overflow: hidden;
  border-top-right-radius: 25px;
  border-top-left-radius: 25px;
  height: 68.2vh;
  width:100%;
  background-color: #03213a;
}
#first{
  width:inherit;
  height: 30vh;
}
</style>

    $('#send').click(function(){ 
        event.preventDefault();
        var money = $('#cowbell').val();
        var name = $('#name').val();
        var contact = $('#phone').val();
        var con = $('#contents').text();
          $.ajax({
            url: '<?php echo base_url();?>Welcome/hiredescription ?>', 
            method: 'POST',
            data: {money:money, con:con, name:name, contact:contact},
            beforeSend: function(){ 
                      alert(name);
                      alert(money);
                      alert(contact);
                      alert(con);
            },
            success: function(data)
            {

                alert(data);
                $('#contact-layout').hide();
                $('#response-layout').css('display', 'block');
              

            }
          })
        });
  


public function insert_user($bro, $ip, $name, $contact)
    {
        //insert into User if user id does not already exist
      $userid = bin2hex(openssl_random_pseudo_bytes(5));
      $this->db->where('user_id', $userid);
      $query = $this->db->get('users');
      if($query->num_rows() < 0)
      {
        $user = array(
              'name' => $name,
              'contact' => $contact,
              'user_id' => $userid,
          'ip'  => $ip,
          'browser' => $bro
          );
        $ins = $this->db->insert('users', $user);
      }
  
        
    }
</head>
<body class="r" style="height:100vh;">
<!--header-->
<header class="w3-black w3-bar" style="">
  <div>

  </div>
</header>

<!--Body Layout-->
<div id="layout" class="w3-row">
  <!--side layoit-->
  <div id="right" class="w3-col  s12 m4 l3  w3-hide-small  " style="">
  <div class="w3-white">
    <h3 class="cate">Category</h3>
    <hr>
    <!--main categories-->
    <div>
      <div class="w3-row w3-margin" style="height:40px;">
        <div class="w3-col  " style="width: 15%;"><div class=" w3-black w3-round-xxlarge" style="height: 35px; width: 35px;"></div></div>
        <div class="cate-cont w3-col  w3-large" style="width: 74%; margin-top: 4px;padding:0 0 0 8px;">Electrician</div>
        <div class="w3-center w3-col w3-black w3-round-large w3-tiny" style="width: 10%; margin-top: 6px;height: 23px; padding :3px 0 0 0;"><span class="" style="margin:2px;">17</span></div>
      </div>
      <div class="w3-row w3-margin" style="height:40px;">
        <div class="w3-col  " style="width: 15%;"><div class=" w3-black w3-round-xxlarge" style="height: 35px; width: 35px;"></div></div>
        <div class="cate-cont w3-col  w3-large" style="width: 74%; margin-top: 4px;padding:0 0 0 8px;">Plumber</div>
        <div class="w3-center w3-col w3-black w3-round-large w3-tiny" style="width: 10%; margin-top: 6px;height: 23px; padding :3px 0 0 0;"><span class="" style="margin:2px;">17</span></div>
      </div>
      <div id="gd" class="w3-row w3-margin w3-hover-light-grey" style="height:40px;">
        <div class="w3-col  " style="width: 15%;"><div class=" w3-black w3-round-xxlarge" style="height: 35px; width: 35px;"></div></div>
        <div id="gds"  class="cate-cont w3-col  w3-large" style="width: 74%; margin-top: 4px;padding:0 0 0 8px;">Graphic Designer</div>
        <div class="w3-center w3-col w3-black w3-round-large w3-tiny" style="width: 10%; margin-top: 6px;height: 23px; padding :3px 0 0 0;"><span class="" style="margin:2px;">1734</span></div>
      </div>

    </div>
  </div>
  </div>
  <!--center layout ||||||||||||| BARGAIN INTRO-->
    <div id="center" class="w3-col w3-hide s12 m7 l6 w3-" style="width:">
      <div class="w3-container w3-card w3-display-container" style="height:100%;">
        <div class="head">
          <h2 class="cate">Network</h2>
        </div>
        <hr>
        <div class="body w3-white w3-small" style="height:60%;padding: 5px;">
          <ul>
            <p><i class="fa fa-rocket w3-margin-right" aria-hidden="true"></i>Earn extra cah daily be referrign a worker to DADI.</p>
            <p><i class="fa fa-rocket w3-margin-right" aria-hidden="true"></i>DADI charger them a 10% comission, and pays you 20% of it, on every hire for the next 1 year</p>
            <p><i class="fa fa-rocket w3-margin-right" aria-hidden="true"></i>download our slide or watch the video below to understand better</p>
          </ul>
        </div>
        <div class="button1 w3-center w3-small w3-container w3-margin-bottom w3-display-bottommiddle ">
          <p class="" style="font-weight: bold; ">Are you sure you want to network with DADI?</p>
          <div class="yes w3-btn w3-black w3-round">YES</div>
          <div class="no w3-btn w3-border w3-border-black w3-round-large">NO</div>
        </div>
      </div>
    </div>
   <!--center layout-->

     <!--center layout 2 ||||||| BARGAIN MAIN PAGE-->
    <div id="center" class="w3-col s12 m7 l6 w3-border w3-hide" style="width:">
      <div class="  " style="height:98vh;">
        <div id="first" class=" " style="height:%;">
          <p class="cate">Network</p>
          <div class="w3-center" style="color: #03213a; margin-top: -5px;">
            <span class="w3-xxlarge" style="height: 60px; width:160px; font-weight: bold;">NGN 1200</span>
          <div><span class="w3-light-grey w3-padding w3-round-large" style="height:50px; width:130px;">Withdraw<i class="w3-margin-left fa fa-pencil-square-o"></i></span></div>
          </div>
        </div>
        <!--second half-->
        <div id="secondhalf" class="w3-container w3-center">
          <div class="w3-text-white" style="text-align: left;">
            <h2>Your Network</h2>
          </div>
          <div class="" style="overflow: scroll; overflow-x: hidden; height: 350px;">
            <div class="w3-border w3-card-4 w3-white w3-small w3-round-large w3-margin-top" style="height: 50px">
              <div class="w3-row" style="font-weight: bolder;margin: 3px 0 0 0">
                <div class="w3-col s5 ">PHONE</div>
                <div class="w3-col s2 ">HIRE</div>
                <div class="w3-col s2">cut</div>
                <div class="w3-col s3 ">CLAIM</div>
              </div>
              <div class="w3-row" style="margin: 5px 0 0 0">
                <div class="w3-col s5">o8o32366154</div>
                <div class="w3-col s2 "><span class="w3-light-grey  w3-round-xxlarge" style="padding: 3px 7px;">6</span></div>
                <div class="w3-col s2"><span class=" w3-small w3-round-xxlarge" style="padding: 3px 4px; background-color: #e3ffdf;">40</span></div>
                <div class="w3-col s3 "><span class="w3-black w3-small w3-round-large" style="padding: 3px 4px;">claim</span></div>
              </div>
              
            </div>


            <div class="w3-border w3-card-4 w3-white w3-small w3-round-large w3-margin-top" style="height: 50px">
              <div class="w3-row" style="font-weight: bolder;margin: 3px 0 0 0">
                <div class="w3-col s5 ">PHONE</div>
                <div class="w3-col s2 ">HIRE</div>
                <div class="w3-col s2">cut</div>
                <div class="w3-col s3 ">CLAIM</div>
              </div>
              <div class="w3-row" style="margin: 5px 0 0 0">
                <div class="w3-col s5">o8o32366154</div>
                <div class="w3-col s2 "><span class="w3-light-grey  w3-round-xxlarge" style="padding: 3px 7px;">6</span></div>
                <div class="w3-col s2"><span class="w3-light-grey w3-small w3-round-xxlarge" style="padding: 3px 4px;">40</span></div>
                <div class="w3-col s3 "><span class="w3-black w3-small w3-round-large" style="padding: 3px 4px;">claim</span></div>
              </div>
              
            </div>

                <div class="w3-border w3-card-4 w3-white w3-small w3-round-large w3-margin-top" style="height: 50px">
              <div class="w3-row" style="font-weight: bolder;margin: 3px 0 0 0">
                <div class="w3-col s5 ">PHONE</div>
                <div class="w3-col s2 ">HIRE</div>
                <div class="w3-col s2">cut</div>
                <div class="w3-col s3 ">CLAIM</div>
              </div>
              <div class="w3-row" style="margin: 5px 0 0 0">
                <div class="w3-col s5">o8o32366154</div>
                <div class="w3-col s2 "><span class="w3-light-grey  w3-round-xxlarge" style="padding: 3px 7px;">6</span></div>
                <div class="w3-col s2"><span class="w3-light-grey w3-small w3-round-xxlarge" style="padding: 3px 4px;">40</span></div>
                <div class="w3-col s3 "><span class="w3-black w3-small w3-round-large" style="padding: 3px 4px;">claim</span></div>
              </div>
              
            </div>

    

            
          </div>
        </div>
      </div>
    </div>
   <!--center layout ||||||||HOVER ON MAP-->

   <div id="center" class="w3-col s12 m7 l6 w3-hide" style="width:">
      <div style="height: 120px; width: 80%;" class="w3-card w3-center w3-display-container">
        <span style="font-weight: bold;">name iso everest</span>
        <div class="w3-text-blue" style="color: ;"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i> 4.8</div>
        <p style="line-height: 0.9" class="w3-tiny w3-text-grey">i can handle jobs for you at low prices and at anytime you wish to have it done</p>
  
        <div class="w3-small" style="margin-top: -15px">
          <div class="w3-display-bottomleft w3-margin">
            <i class="fa fa-facebook-square w3-medium w3-text-blue" style="" aria-hidden="true" ></i><span class="w3-light-grey  w3-round-large w3-text-blue " style="padding: 5px 9px; margin-left: 5px;"> view Profile </span>
          </div>
          <span class="w3-blue w3-display-bottomright  w3-round" style="padding: 5px 9px 5px 10px; margin: 6px 6px 12px 6px; ">BARGAIN</span>
        </div>
      </div>
    </div>
   <!--center layout ||||||| CONTACT DETAILS-->
   <div id="center" class="w3-col w3-hide s12 m7 l6 w3-" style="width:">
      
    </div>





   <!--center layout |||||||||||||||||| MAIN MAPPAGE-->
   <div id="center" class="w3-col  s12 m7 l6 w3-" style="width:">
      <div id="mapid" style="height:100vh;width:100%;" class="w3-card ">
        <script type="text/javascript">
      //set user location
  var mymap = L.map('mapid').setView([4.902534, 6.907085], 18);
 
  L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token={accessToken}', {
    attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, <a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
    maxZoom: 20,
    id: 'mapbox/outdoors-v11',
    tileSize: 512,
    zoomOffset: -1,
    accessToken: 'pk.eyJ1IjoiZGl2aW5lMTUwIiwiYSI6ImNrYTI0eGxkZjA2d2YzZW8xczc4am90YjcifQ.-qu_8HxRK4xyfI_wVZktLg'
}).addTo(mymap);


  </script>
   
  <div id="point" class="">
    <script >
            // ADD MARKERS WITH CONTENT
    <?php 

    foreach ($data as $row) {?>
        var content = '<div style="height: 120px; width: 200px;" class="w3 w3-center w3-display-container"><span style="font-weight: bold;"><?php echo $row->firstname ?></span><div class="w3-text-blue" style="color: ;"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i> 4.8</div><p style="line-height: 0.9" class="w3-tiny w3-text-grey">i can handle jobs for you at low prices and at anytime you wish to have it done</p><div class="w3-small" style="margin-top: -15px"><div class="w3-display-bottomleft w3-margin"><i class="fa fa-facebook-square w3-medium w3-text-blue" style="" aria-hidden="true" ></i><span class="w3-light-grey  w3-round-large w3-text-blue " style="padding: 5px 9px; margin-left: 5px;"> view Profile </span></div><span class="w3-blue w3-display-bottomright  w3-round" style="padding: 5px 9px 5px 10px; margin: 6px 6px 12px 6px; ">BARGAIN</span></div></div>'
        var content_option =
          {
          'maxWidth': '500',
          'className' : 'custom'
          }
        var lon = '<?php echo $row->longi ?>';
        var lat = '<?php echo $row->lat ?>';
       
        var marker = new L.marker([lat,  lon]).bindPopup(content,content_option).addTo(mymap);


        <?php

          } 
         echo 'var markers = new L.marker([4.903534, 6.907285]).addTo(mymap)'; 

         ?>
        </script>
      </div>
    </div>
    </div>
   <!--center layout-->
  <div class="w3-col s12 l2 w3-red w3-border w3-hide-small w3-hide-medium" style="width:"><p>

 
   
 </p></div>
</div>
</body>
</html>

 
<script >
  $(document).ready(function(){
 
      $('#gd').click(function(){
        var session = 'graphic designer' ;
        $('#point').load('Welcome/callworker', {session:session});

      });
         setTimeout(function () {
       window.location.reload();
    }, 30000);
  });

</script>
 
 <script>
   var theMarker = {};

  map.on('click',function(e){
    lat = e.latlng.lat;
    lon = e.latlng.lng;

    console.log("You clicked the map at LAT: "+ lat+" and LONG: "+lon );
        //Clear existing marker, 

        if (theMarker != undefined) {
              map.removeLayer(theMarker);
        };

    //Add a marker to show where you clicked.
     theMarker = L.marker([lat,lon]).addTo(map);  
});
 </script>

 //////////////////////////////

 html
 <label for="name">Name (4 to 8 characters):</label>

<input type="text" id="name" name="name" required
       minlength="4" maxlength="8" size="10">


<label for="tentacles">Number of tentacles (10-100):</label>

<input type="number" id="tentacles" name="tentacles"
       min="10" max="100">
<input type="number" placeholder="multiple of 10" step="10">
<input type="number" placeholder="multiple of 10" step="10" min="0" max="100">
<input type="number" placeholder="1.0" step="0.01" min="0" max="10">
<input type="number" placeholder="x10" step="10" min="0" max="100" id="number">
#number {
  width: 3em;
}
//////////////validity
<form>
  <div>
    <label for="balloons">Number of balloons to order (multiples of 10):</label>
    <input id="balloons" type="number" name="balloons" step="10" min="0" max="100" required>
    <span class="validity"></span>
  </div>
  <div>
    <input type="submit">
  </div>
</form>
<form>
  <div>
    <label for="balloons">Number of balloons to order (multiples of 10):</label>
    <input id="balloons" type="number" name="balloons" step="10" min="0" max="100" required>
    <span class="validity"></span>
  </div>
  <div>
    <input type="submit">
  </div>
</form>

<input id="myURL" name="myURL" type="url"
       placeholder="http://www.example.com">
       <input id="myURL" name="myURL" type="url"
       size="30">

       <input id="myURL" name="myURL" type="url"
       size="30" minlength="10" maxlength="80">

       <input id="myURL" name="myURL" type="url"
       value="http://www.example.com">
////////////rnaGE

       <p>Audio settings:</p>

<div>
  <input type="range" id="volume" name="volume"
         min="0" max="11">
  <label for="volume">Volume</label>
</div>

<div>
  <input type="range" id="cowbell" name="cowbell" 
         min="0" max="100" value="90" step="10">
  <label for="cowbell">Cowbell</label>
</div>

<input type="range" min="5" max="10" step="0.01">
<input type="range" min="0" max="3.14" step="any">

<input type="range" list="tickmarks">

<datalist id="tickmarks">
  <option value="0"></option>
  <option value="10"></option>
  <option value="20"></option>
  <option value="30"></option>
  <option value="40"></option>
  <option value="50"></option>
  <option value="60"></option>
  <option value="70"></option>
  <option value="80"></option>
  <option value="90"></option>
  <option value="100"></option>
</datalist>

input type="range" list="tickmarks">

<datalist id="tickmarks">
  <option value="0" label="0%"></option>
  <option value="10"></option>
  <option value="20"></option>
  <option value="30"></option>
  <option value="40"></option>
  <option value="50" label="50%"></option>
  <option value="60"></option>
  <option value="70"></option>
  <option value="80"></option>
  <option value="90"></option>
  <option value="100" label="100%"></option>
</datalist>

ORIENTATION CHANGE
<input type="range" id="volume" min="0" max="11" value="7" step="1">
#volume {
  height: 150px;
  width: 50px;
}

$this->db->where('id', $post['identifier']);
$this->db->set('votes', 'votes+1', FALSE);
$this->db->update('users');

$this->db->set('received_qty', 'received_qty + 1', FALSE);
$this->db->set('received_date', date("Y-m-d"));
$this->db->where($where);
$this->db->update('vrs_distribution');



<script>

    //  create map object, tell it to live in 'map' div and give initial latitude, longitude, zoom values 
    var map = L.map('map', {scrollWheelZoom:false}).setView([43.64701, -79.39425], 15);

    //  add base map tiles from OpenStreetMap and attribution info to 'map' div
    L.tileLayer('http://{s}.tile.osm.org/{z}/{x}/{y}.png', {
    attribution: '&copy; <a href="http://osm.org/copyright">OpenStreetMap</a> contributors'
    }).addTo(map);

    // create custom icon
    var firefoxIcon = L.icon({
        iconUrl: 'http://joshuafrazier.info/images/firefox.svg',
        iconSize: [38, 95], // size of the icon
        });

    // create marker object, pass custom icon as option, add to map         
    var marker = L.marker([43.64701, -79.39425], {icon: firefoxIcon}).addTo(map);

</script>


<!-- Rectangular switch -->
<label class="switch">
  <input type="checkbox">
  <span class="slider"></span>
</label>

<!-- Rounded switch -->
<label class="switch">
  <input type="checkbox">
  <span class="slider round"></span>
</label>


/* The switch - the box around the slider */
.switch {
  position: relative;
  display: inline-block;
  width: 60px;
  height: 34px;
}

/* Hide default HTML checkbox */
.switch input {
  opacity: 0;
  width: 0;
  height: 0;
}

/* The slider */
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
  height: 26px;
  width: 26px;
  left: 4px;
  bottom: 4px;
  background-color: white;
  -webkit-transition: .4s;
  transition: .4s;
}

input:checked + .slider {
  background-color: #2196F3;
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
  border-radius: 34px;
}

.slider.round:before {
  border-radius: 50%;
}



var switchStatus = false;
$("#togBtn").on('change', function() {
    if ($(this).is(':checked')) {
        switchStatus = $(this).is(':checked');
        alert(switchStatus);// To verify
    }
    else {
       switchStatus = $(this).is(':checked');
       alert(switchStatus);// To verify
    }
});
 <label class="switch">
 <input type="checkbox" id="togBtn" value="false" name="disableYXLogo">
 <div class="slider round"></div>
 </label>
 <?php
public function call()
  {
    $job = 'painter';
        $this->db->where('job', $job);
        $querys = $this->db->get('workforce'); 
          $paint = $querys->num_rows();

        $i = 0;
        while ( $i <= $paint) {
        echo "<script>mymap.removeLayer(marker".$i.")</script>";
        $i++;
        }
    if(!$this->input->post('session'))
    {
      $worker_job = $_SESSION['worker'];
    }
    else
    {
      $worker_job = $this->input->post('session');
    }
    
      $job = $worker_job;
        $this->db->where('job', $job);
        $_SESSION['worker'] = $job;
        $query = $this->db->get('workforce'); 
        $i = 0;
        foreach($query->result() as $row)
        {

  
        $cont ='<div style="height: 100px; width: 200px;" class=" w3-center w3-display-container"><span style="font-weight: bold;">'.$row->firstname .' musembe roland</span><div class="w3-text-blue" style="color: ;"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i> 4.8</div><p style="line-height: 0.9; margin-top:-1px;" class="w3-tiny w3-text-grey"> '.$row->hireme.'</p><div class="w3-small" style="margin-top: -15px"><div class="w3-display-bottomleft w3-margin">&#8358<span class="w3-light-grey  w3-round-large w3-text-blue w3-tiny" style="padding: 5px 9px; margin-left: 5px;">  50000 - 100000 </span></div><p id="" class="w3-blue w3-btn w3-small hired'.$row->work_id.' w3-display-bottomright w3-center w3-round" style="padding:5px 11px; margin: 6px 12px 12px 6px; ">hire</p></div></div>';

        echo 
        "
        <script>
          function flyToNorway".$i."(){
                ".$this->session->unset_tempdata('worker_ses')."
              var worker".$i." = '".$row->work_id."';
              alert(worker".$i.");
              $('.contact-layout').load('Welcome/display_job_detail', {worker:worker".$i."});
              $('#map-layout').hide();
              document.getElementById('contact-layout').style.display = 'block';
            }
            mymap.on('popupopen', function(){

                const link = document.querySelector('.hired".$row->work_id."')
                if (link) {
                  link.addEventListener('click', flyToNorway".$i.")
                }
              })
        </script>
        ";
          
          echo 
          "<script>
            marker".$row->id." = L.marker([".$row->lat.", ".$row->longi."]).bindPopup('.$cont.').addTo(mymap);
            mymap.addLayer(marker".$row->id.");
          </script> ";
        
        }     
  }
 ?>
 throw new Error("Something went badly wrong!");
 // This will never exit!
setInterval((function() {  
    return;
}), 5000);

// This will exit after 5 seconds, with signal 1
setTimeout((function() {  
    return process.exit(1);
}), 5000);

// This will also exit after 5 seconds, and print its (killed) PID
setTimeout((function() {  
    return process.kill(process.pid);
}), 5000);

// This will also exit after 5 seconds and create a core dump.
setTimeout((function() {  
    return process.abort();
}), 5000);
function showMessage() {
  alert( 'Hello everyone!' );
}

showMessage();
showMessage();

function showMessage(from, text) { // arguments: from, text
  alert(from + ': ' + text);
}

showMessage('Ann', 'Hello!'); // Ann: Hello! (*)
showMessage('Ann', "What's up?"); // Ann: What's up? (**)
function showMessage(from, text = "no text given") {
  alert( from + ": " + text );
}

showMessage("Ann"); // Ann: no text given
function checkAge(age) {
  if (age >= 18) {
    return true;
  } else {
    return confirm('Do you have permission from your parents?');
  }
}

let age = prompt('How old are you?', 18);

if ( checkAge(age) ) {
  alert( 'Access granted' );
} else {
  alert( 'Access denied' );
}
function sum(a, b) {
  return a + b;
}

let result = sum(1, 2);
alert( result ); // 3

function showMovie(age) {
  if ( !checkAge(age) ) {
    return;
  }

  alert( "Showing you the movie" ); // (*)
  // ...
}









  echo 
'
  <!--r_COVER BEGINS--> <div id="r_cover" style="display: block;" class="w3-container resposne">
    <div class="w3-small w3-text-black" style="font-weight: lighter;margin:10px 0 ; font-size: 1.2rem; display:none;">'.$row->firstname.' is reviewing your job </div>
    <div class="w3-medium w3-text-black if_reply" style="font-weight: lighter;margin:10px 0 ; display:none;">Your Price: &#8358 <strong id="change_amount" class="" style="">0</strong></div>
    <div class="w3-medium w3-text-black if_reply" style="font-weight: lighter;margin:10px 0 ; display:block;">'.$row->firstname.' has accepted your Job</div>

    <div class="w3-container default">
      <div class="shadow1 w3-center" style="height: 20vh; width:inherit;margin:25px 0 0 0 ; display: none;">
        <div class="" style="padding:10px 0 0 0;">
          <p class="w3-medium">Typically replies within </p>
          <p class="w3-small w3-text-grey">10MINS : 15 SECHOND</p>
          <p class="w3-small w3-text-grey missed">Divine hasent replied you yet, Click cancel to hire someone else or wait a bit</p>
        </div>
      </div>
      </div>

    <div class="w3-container if_reply">
      <div class="w3-card-5 w3-center " style="height: 22vh; width:inherit;margin:25px 0 0 0 ; display: none;">
        <div class="" style="padding:10px 0 0 0;">
          <p class="w3-medium">'.$row->firstname.' wants you to pay</p>
          <p class="w3-small w3-text-green"> &#8358 <strong>'.$row->amount.'</strong></p>
          <div style="display: flex;">
            <span class="w3-medium w3-" style="flex: 2;margin:8px 0 0 0;">&#8358</span>
            <div style="flex: 5; " class="w3-"><input type="number" placeholder="set amount" step="10" min="0" max="100" style="outline:none; width:200px;" class="w3-input w3-round-large w3-border-bottom" id="number2"></div>
            <span style="flex: 5;margin:8px 0 0 0;" class="w3-"><img src="image/send_blue.png" class="w3-left" style="margin: 0 0 0 15px; height:20px; width: 20px;"></div><p class="w3-small" style="margin-top: -2px;"></span>
          </div>
        </div>
      </div>
      </div>

    <div class="w3-container if_accept">
      <div class="w3-card-5 w3-center " style="height: 20vh; width:inherit;margin:15px 0 0 0 ; display: none;">
        <div class="" style="padding:10px 0 0 0; ">
          <div class=" w3-" style="width:210px; position: relative; left:50%; margin-left: -105px; height: 80px;display: flex;">
            <div class="w3-green w3-card-4 w3-circle" style="flex: 2;height:80px; -ms-transform: rotate(20deg); /* IE 9 */transform: rotate(90deg); width: 80px;padding:25px 5px 25px 5px;margin: 0 28px 0 0;"><span class="fa fa-phone w3-text-white fa" style="font-size: 24px; margin:0 0 0 0; "></span></div>
          <div class=" w3-card-4 w3-center w3-circle w3-medium" style="flex: 2; background-image: linear-gradient(to bottom right, #e275f5, #2f0635); color:white;height:80px; width: 80px;padding:15px 5px; margin: 0 0 0 25px;"><p>Track</p></div>
          </div>
        </div>
      </div>
      </div>


      <div id="cancel_hire"  class="w3-btn missed w3-bottom w3-round-xlarge w3-red" style="color:white; display:none; bottom:10px; max-width: 280px;left:50%; margin:auto 0 auto -140px;">Cancel Hire</div>
      <div id="complete"  class="w3-btn w3-bottom w3-round-xlarge w3-blue" style="color:white; bottom:10px;display:none; max-width: 280px;left:50%; margin:auto 0 auto -140px;">Job Completed</div>
  <!--COVER ENDS--> </div>




   </div>
   </div>'; 
        echo"
        <script>
          $('.nego').click(function(){
        $('#slider').show();
        $('.nego').hide();
        $('.decl').hide();
        $('.acep').hide();
      });


          var track = '".$row->job_id."';   
          var track_user = '".$row->user_id."';

// check if he is negotiating
              var negotiating = setInterval(function() {
            $.ajax({
                    url:  '".base_url()."Welcome/check_nego',
                    method: 'POST',
                     dataType: 'json',
                    data: {track:track},
                    success: function(data)
                    {
                      
                        if(data.nego == 1 && data.worker_t == 0){
                       
                            $('.N').show();
                            $('.A').hide();
                            $('.negotiating').hide();
                            $('.evaluate').show();
                            $('.loader').show();
                          $('.typically').hide();
                        }else if(data.worker_t > 0 && data.nego == 1){
                          $('.evaluate').hide();
                            $('.loader').hide();
                          $('.typically').hide();
                           $('.N').show();
                            $('.A').hide();
                            $('.negotiating').show();
                        }
                        else if(data.nego == 2 && data.nego == 1){
                    $('.negotiating').hide();
                            $('.finish').show();
                        }
                        else{
                            $('.loader').show();
                          $('.typically').show();
               $('.N').hide();
               $('.A').show();
              
                        }
                    }
                });
            }, 1000);

// always check if ofa has negotiated

         var always = setInterval(function() {
            $.ajax({
                    url:  '".base_url()."Welcome/always',
                    method: 'POST',
                    data: {track:track},
                    dataType: 'json',
                    success: function(data)
                    {
  
                        if(data.al_t > 0){
                       
                           $('.hold').show();
                           $('#cover').show();
                           $('.W').hide();
                           $('.howmuch').show();
                           $('.after').show();
                           $('.amount').show();
                           $('.amount').text(data.amount);
                           $('.acep').show();
                     $('.decl').show();
                          
                        }
                        
                    }
                });
            }, 1000);
   
// checks who typed last to display cover
    var xy = setInterval(function() {
            $.ajax({
                    url:  '".base_url()."Welcome/check_who_typed',
                    method: 'POST',
                    data: {track:track},
                    dataType: 'json',
                    success: function(data)
                    {
              
                        if(data.worker_t > 0){
                            $('#cover').show();
                            $('.negotiating').hide();
                            $('#slider').show();
                        }
                        if(data.user_t > 0){
                        $('#cover').show();
                        }
                    }
                });
            }, 3000);


          var inp = document.querySelector('#slider');
        var value = document.querySelector('#rangev');
        inp.oninput = function(){

                $.ajax({
                    url:  '".base_url()."Welcome/check_who_typed',
                    method: 'POST',
                    data: {track:track},
                    dataType: 'json',
                    success: function(data)
                    {

                        if(data.worker_t > 0){
                            $('.hold').show();
                        }else{
                          $('.hold').hide();
                        }
                    }
                });
            value.textContent = inp.value;
        }



          $('#send').click(function(){
              var amount = $('#slider').val();
                $.ajax({
                url:  'http://localhost/dadibeta/Welcome/send_amount',
                method: 'POST',
                data: {track:track, amount:amount},
                success: function(data)
                {
                 $('.hold').hide();
                 $('.howmuch').hide();
                 $('.after').hide();
                 $('.W').show();
                 $('.amount').hide();
                 $('.acep').hide();
                 $('.decl').hide();



                }
        })
       });
      // runs a code that checks if the worker accepted or declined the job every 2 seconds.
      // if accepted is true, send show call and track button
      //* if false perform same code as decline
        var x = setInterval(function() {  
            $.ajax({
                url:  'http://localhost/dadibeta/Welcome/response_display',
                method: 'POST',
                data: {track:track},
                success: function(data)
                {
                  //alert(data);
                  if(data == 'wait')
                  {
                    $('.wait').show();
                  }
                  if(data == 'accepted')
                  {
                     alert('Your Price has been accepted, you can now proceed to call your client');
                  }
                  if(data == 'rejected')
                  {
                    
                  }
                  if(data == 'negotiate')
                  {
                    
                  }
                 
                }
        })
                 
         }, 2000)

             $('#track_h').click(function(){
                window.location.href = 'http://localhost/dadibeta/Welcome/track/'+track ;
        })
        $('#complete').click(function(){
        alert(track); 
                $.ajax({
                url:  'http://localhost/dadibeta/Welcome/completed',
                method: 'POST',
                data: {track:track},
                success: function(data)
                {
                 alert('success');
                }
          })
        });
        $('#cancel').click(function(){ 
                $.ajax({
                url:  'http://localhost/dadibeta/Welcome/cancel',
                method: 'POST',
                data: {track:track},
                success: function(data)
                {
                  alert('job canceled, you will be redirected to home screen');
                }
          })
        })
        $('.acep').click(function(){ 
            var message = 'You are about to accept this offer, click <b> ok </b> to accept';
            var r = confirm(message);
            if (r == true) {
              
          var status = 'accept';
                $.ajax({
                url:  'http://localhost/dadibeta/Welcome/ace',
                method: 'POST',
                data: {track:track, status:status},
                success: function(data)
                {
                  alert(data);
                  $('.decl').hide();
                  $('.acep').hide();
                  $('.complete').show();
                  //show call and completed  buttons
                  // lets prompt him first to see if he really wants to cancel
                  //show message prompting user to call and or track the worker
                }
          })
          } else {
              
            }
        })

        $('.decl').click(function(){ 
            var message = 'You are about to decline this offer, youll be redirected to the home page again';
            var r = confirm(message);
            if (r == true) {
          var status = 'decline';
                $.ajax({
                url:  'http://localhost/dadibeta/Welcome/dec',
                method: 'POST',
                data: {track:track, status:status},
                success: function(data)
                {
                  alert('job declined');
                  $('.acep').hide();
                  //show message telling user that he has declined the offer and that he will be redirected to hire someone else
                  // lets prompt him first to see if he really wants to cancel
                  //he will be redirected after 5 sec
                }
          })
          } else {
              
            }
        })
        setInterval(function(){
          setTimeout(function(){
            $('.point6').hide();
           }, 50)
          setTimeout(function(){
            $('.point5').hide();
           }, 200)
          setTimeout(function(){
            $('.point4').hide();
           }, 400)
          setTimeout(function(){
            $('.point3').hide();
           }, 600)
          setTimeout(function(){
            $('.point2').hide();
           }, 800)
          setTimeout(function(){
            $('.point1').show();
           }, 1000)
          
            setTimeout(function(){
                $('.point1').show();
             }, 1200)
             setTimeout(function(){
                $('.point2').show();
             }, 1500) 
             setTimeout(function(){
                $('.point3').show();
             }, 2000) 
             setTimeout(function(){
                $('.point4').show();
             }, 2500) 
             setTimeout(function(){
                $('.point5').show();
             }, 3000) 
              setTimeout(function(){
                $('.point6').show();
             }, 3500) 
             //close interval 5secs
        }, 4000) 
    </script>
          ";
           ".$this->session->set_tempdata('jobber', $job_id, 180);."
         ".$this->session->set_tempdata('jobber', $job_id, 180);."