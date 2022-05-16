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
<body class=" w3-red w3-border-red" style="  height: 100vh;max-width:700px; margin:auto;">

<div class="w3-modal" style="display: block; background-color: black;" id="permit">
  <div class="w3-modal-content w3-red w3-round-large">
    <div class="w3-white w3-round-large" style="height: 40vh; width: 100%;">
        <div class="w3-container w3-border-bottom " style="background-image: linear-gradient(to right bottom, #ff25ac, #941c89);">
          <h4 class="w3-text-white">Important note</h4>
        </div>
        <div class="w3-container">
          <p style="font-weight: 700;">DADI only works with your location data, Please grant DADI acess to your location</p>
          <div id="ok" class=" w3-center w3-round-xxlarge w3-text-white" style="position: absolute;right:10px;bottom:5px; background-color:#ff25ac; width:170px; padding: 10px;">OK</div>
        </div>
    </div>
  </div>
</div>


<div class="w3-animate-bottom w3-blue" style="position:fixed; bottom: 0;height: 500px; ">
<div id="detail" class="w3-white " style="display: block; height:500px;"> 
    <div class="w3-red w3-circle w3-center" style="position: absolute; top:-20px;left:-20px;height:78px; width:78px;margin:auto auto;">
        <img id="pro" src="asset/profile/ace.jpg" class="w3-white w3-circle" style="position: relative;top:4px; height:70px; width:70px;object-fit:cover;">
    </div>
  <div class="shadow1" style="position: relative;top:0; height:450px;overflow: scroll;"><!--START SCROLL-->
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
          <p class="w3-small" style="font-weight: 600;">Location  <i class="fa fa-check-circle w3-text-blue" aria-hidden="true"></i></p>
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

      <div class=" w3-border-light-grey"  style="height: 52px; width:100%; padding: 1px 5px;margin-top:5px; display: flex;">
        <div class=" "  style="flex: 2;">
          <p class="w3-small" style="font-weight: 600;">Email Verified</p>
          <div class="w3-small w3-tex" style="margin-top: -10px;color:#8d8b9c;">Verified <i class="fa fa-check-circle w3-text-blue" style="margin-left:2px;" aria-hidden="true"></i></div>
        </div>

        <div class=" "  style="flex:2;">
          <p class="w3-small" style="font-weight: 600;">Id Vreified</p>
           <div class="w3-small w3-tex" style="margin-top: -10px;color:#8d8b9c;">Not Verified <i class="fa fa-check-circle w3-text-blue" style="margin-left:2px;" aria-hidden="true"></i></div>
        </div>
      </div>

      <div class="w3-light-grey w3-border-light-grey "  style="height: auto;min-height: 150px; width:100%; padding: 0 0;margin-top:0px"><!--hold grey-->

       <div class="w3-white w3-container"  style="width: 100%;min-height: 110px; height: auto;position: relative;top: 5px;">
          <h5><b>Link to external Portfolio</b></h5>
            <div class="w3-margin-bottom"><a href="'.$value->external_link.'" id="link_dis">$row->external_link</a></div>
            
        </div>

        <div class="w3-white w3-container"  style="width: 100%;min-height: 150px; height: auto;position: relative;top: 10px;">
          <h5><b>Image proof Jobs Done</b></h5>
            <div id="reveal" class="w3-row w3-center w3-transparent">
              <div id="show" class="w3-light-grey w3-center w3- w3-hover-white w3-round-xlarge w3-small" style="display:inline-block;width:120px;padding:8px 5px;">Show Image</div>            </div>
        </div>
        
      </div>

      <!--END ALL SCROLL-->
    </div>
        <div id="proceed"  class="w3-purple w3-btn w3-round-xlarge" style="position: absolute;bottom:10px;width:250px; left:50%;margin-left: -125px; max-width: 280px;">Proceed</div>
    </div>
</div>
</body>
</html>
<script type="text/javascript">
  $('#show').click(function(){
    var id = '3695cba6d9';
    alert(id);
      $.ajax({
        url:  '<?php echo base_url();?>Portfolio/reveal',
        method: 'POST',
        data: {id:id},
        beforeSend: function()
        {
          alert('sending');
        },
        success: function(data)
        {
          $('#reveal').html(data);
        }
      })
  })
</script>