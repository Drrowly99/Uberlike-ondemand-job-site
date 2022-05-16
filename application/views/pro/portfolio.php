<?php //phpinfo(); ?>
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
<body class="w3-white"  style="">
      <!--summary-->
<?php 
      foreach ($data as $value) { }
?>

<?php 
  $value->work_id; 
  $this->session->set_userdata('id_work', $value->work_id);
?>
<div class="w3-white" id="main" style="position: relative;max-width: 700px; margin: auto; z-index:1;height:auto;">
  
    <div class="w3-white w3-container w3-border-bottom" style="position: fixed;display: flex;top:0; width: 100%;height:50px;z-index:10;max-width:700px; margin:auto;">
      <h4 id="back" class=" w3-medium" style="font-weight:50;flex: 2;position: relative;top:4px;"><i class="fa fa-chevron-left"></i></h4>
      <h4 class="w3-left" style="font-weight: 750;flex:14;">Your Portfolio </h4>
    </div>

  <div class="w3-purple " style="position: relative; height:140px;z-index:2;">
    <div class="w3-white w3-circle w3-center" style="position: relative; top:100px;left:-30%;height:98px; width:98px;margin:auto auto;">
        <img id="pro" src="<?php  echo base_url();?>asset/profile/<?php if($value->profile != ''){echo $value->profile;}else{ echo 'ace.jpg';} ?>" class="w3-white w3-circle" style="position: relative;top:4px; height:90px; width:90px;object-fit:cover;/*transform:rotate(90deg);*/">
        <div id="profile" class="w3-text-white w3-center w3-circle w3-card" style="background-color: rgba(0, 0, 0, 0.7); position: absolute;top:65%;left:70%;width:30px;height:30px;padding-top:4px;"> <i class=" fa fa-plus"></i></div><!---add image--> 
        <input id="profilez" type="file" name="image" style="display: none;" >
    </div>
  </div>



<div class=" w3-container" style="position: relative;top:70px;">
  <div class="w3- w3- w3-bord w3-small" style="position: relative;top:5px;">
    Every client wants to be sure of whom they hire, its important for yu to build their trust level by including convincing photos of the service you render, photos of yourself working, or with your tools, or of jobs youve done already with a watermark, screenshots of jobs you sent to other clients, a link to external portfolio (developers), etc..
  </div>
</div>
<hr style="position: relative;top:70px;">

<div class=" w3-container" style="position: relative;top:70px;">
  <div class="w3- w3- w3-bord w3-small" style="position: relative;top:5px;">
    <b>Add Link to your portfolio / facebook profile</b>
  </div>
  <div style="display: flex;">
    <input id="link" type="text" name="link" style="outline: none; flex: 12;" class="w3-border-bottom w3-round w3-input w3-border-purple" placeholder="Link to external portfolio">
    <div id="add" class="w3-purple w3-round-xlarge w3-small w3-hover-grey w3-center" style="flex: 2; height: 25px;position: relative;padding:3px 2px 0 0;top:7px;margin: 0 0 0 4px;">Add</div>
    <div id="err_url " class="w3-text-red w3-small"></div>
  </div>
</div>
<hr style="position: relative;top:70px;">



<?php if($value->job == 'Web Developer'){ ?>
<div class=" w3-container" style="position: relative;top:70px;">
  <div class="w3- w3- w3-bord w3-small" style="position: relative;top:5px;">
    <b> Add Link a job/mobile,website, or software youve built before (can include as many as possible)</b>
  </div>
  <div style="display: block;">
    <input id="link_web" type="text" name="link" style="outline: none; flex: 12;" class="w3-border-bottom w3-round w3-input w3-border-purple" placeholder="Link to jobs done">
    <div id="err_web" class="w3-text-red w3-small"></div>
  <label class="w3-small">Add a short description of the afore mentioned job done</label>
   <textarea id="short" type="text" name="short" style="outline: none; flex: 12; height:100px;" class="w3-border-bottom w3-round w3-light-grey w3-input w3-border-purple" placeholder="short description"></textarea>
       <div id="add_web" class="w3-purple w3-round-xlarge w3-small w3-hover-grey w3-center" style="flex: 2; height: 32px;position: relative;padding:6px 2px 0 0;top:7px;margin: 0 0 0 4px;">Add</div>
 </div>
</div>
<hr style="position: relative;top:70px;">
<?php } ?>



<div class="w3--bottom w3-container" style="position: relative;top:70px;">
  <div class="w3- w3- w3-bord w3-small" style="position: relative;top:5px;">
    <b>Add images to your gallery</b>
  </div>

<div id="galz" class="w3-center w3-btn w3-white w3-round-xlarge w3-text-purple w3-border w3-border-purple" style="position: relative;top:10px;left:0;width:130px;height:30px;padding-top:4px;margin-bottom: 16px;"><span> Add Image <span>  <i style="color: rgba(156, 39, 176, 0.7);" class="fa fa-camera "></i></div>
      <input id="filez" type="file" name="image" style="display: none;" >
      <div id="gallery" class="w3-btn w3-purple w3-border w3-border-purple w3-small w3-round-xxlarge" style="display: none;"><i class="fa fa-spinner fa-spin s" style="margin-right: 2px;display: none;"></i> Upload</div>
    <div class="err w3-text-red"></div>
</div>



<div class=" w3-light-grey " style="position: relative;top:70px;min-height:80px;height: auto;padding: 0 0 5px 0;">
<div class="w3-white w3-container" style="height:100%;position: relative;top:5px;margin-bottom:5px;"><!--LINK DISPLAY-->
  <p class="w3-large"><b>portfolio Link</b></p>
  <?php if($value->external_link != '')
  {echo '<div class="w3-margin-bottom"><a href="'.$value->external_link.'" id="link_dis">'.$value->external_link.'</a></div>';}
  else{echo '<div class="w3-margin-bottom"><a href="" id="link_dis"></a></div>';} ?>
</div>


<?php if($value->job == 'Web Developer'){ ?>
<div class="w3-white w3-container" style="height:100%;position: relative;top:5px;margin-bottom:5px;"><!--WEBSITE DISPLAY-->
  <p class="w3-large"><b>Job Links</b></p>
</div>
<?php } ?>

<div class="w3-white w3-container" style="min-height:100px;height:100%;position: relative;top:5px;">
    <p class="w3-large"><b>Image Gallery</b></p>


  <div id="im" style="display:block; position: relative;height:; width:100%;margin:auto;top:5px;" class="w3-row"><!--IMAGE DISPLAY-->
    <?php
        $this->db->where('worker_id', $this->session->userdata('id_work'));
        $query = $this->db->get('gallery');
        if ($query->num_rows() > 0){
            foreach ($query->result() as $row)
            {?>
              <div id="job_card<?php echo $row->image_id;?>" class=" w3-col w3-round-large w3-border" style="border-color:#F5F8FA; position:relative; flex:;margin:5px 2% ;width:46%;display:block;">
                     <div class="w3-white w3-circle w3-tiny w3-center " style="position: absolute;z-index:5; top:-7px; right:-7px;width:35px; height:35px;"><i style="position: absolute;top:10px;right:12px;" id="show_delete<?php echo $row->image_id;?>" class="w3-text-red w3-large fa fa-trash-o"></i></div>
                        <img src="<?php echo base_url();?>asset/gallery/<?php echo $row->image;?>" class="w3-white w3-round-large" style="position: relative;top:0px; height:120px; width:100%;object-fit:cover;">
                        <div id="del<?php echo $row->image_id;?>" class="w3-btn w3-text-red w3-tiny" style="display: none;height:30px;">Delete</div>
                        <input id="im_id<?php echo $row->image_id;?>" type="text" name="del" value="<?php echo $row->image_id;?>" style="display: none;">
                      </div>
                        <script>
                            
                            $('#show_delete<?php echo $row->image_id;?>').click(function(){
                                
                                $('#del<?php echo $row->image_id;?>').show();
                            })

                            $('#del<?php echo $row->image_id;?>').click(function(){
                                var im = $('#im_id<?php echo $row->image_id;?>').val();
                                $.ajax({
                                    url:  '<?php echo base_url();?>Portfolio/delete_image',
                                    method: 'POST',
                                    data: {im:im},
                                    success: function(data)
                                    {
                                     
                                     $('#job_card<?php echo $row->image_id;?>').hide();
                                    }
                                })
                            })
                        </script>
            <?php 
 
          }


        } 
?>
  </div>
</div>


</div>














</div>
</body>
</html>

<script>
$('#add_web').click(function(){
  alert('add');
  var link_web = $('#link_web').val();
  var desc = $('#short').val();
  if(link != ""){
      $.ajax({
        url:  '<?php echo base_url();?>Portfolio/website',
        method: 'POST',
        data: {link_web:link_web, desc:desc},
        beforeSend: function()
        {
          $('#add_web').hide();
        },
        success: function(data)
        {
        
          $('#add_web').show();
        }
      })
    }
});


$('#add').click(function(){
  alert('hey');
  var link = $('#link').val();
  if(link != ""){
      $.ajax({
        url:  '<?php echo base_url();?>Portfolio/link',
        method: 'POST',
        data: {link:link},
        beforeSend: function()
        {
          $('#add').hide();
        },
        success: function(data)
        {
          $('#link_dis').text(data);
          $('#link_dis').attr('href', data);
          $('#add').show();
        }
      })
    }
});
$('#galz').click(function(){
  $('#filez').trigger('click');
});
$('#profile').click(function(){
  $('#profilez').trigger('click');
});
$('#cover').click(function(){
  $('#coverz').trigger('click');
});



$('#filez').change(function(){
  $('#gallery').show();
});
$(document).ready(function() {

    $("#gallery").click(function(){
          alert('f');
         var filename = $('#filez').val();
         var formData = new FormData();
         formData.append("filez", document.getElementById('filez').files[0]);
         var n = document.getElementById('filez').files[0].name;

            $.ajax({
              url:'<?php echo base_url();?>Portfolio/port',
              method:"POST",
              data:formData,
              contentType:false,
              cache:false,
              processData:false,
              beforeSend: function(){
                $('.s').show();
              },
              success: function(data){
                alert(data);
                $('.s').hide();
                $('#gallery').hide();
                $('#im').prepend(data);
              }
            })
        
      })


$('#profilez').change(function(){
            alert('p');
         var filename = $('#profilez').val();
         var formData = new FormData();
         formData.append("profile", document.getElementById('profilez').files[0]);
         var n = document.getElementById('profilez').files[0].name;
         //alert(n);
            $.ajax({
              url:'<?php echo base_url();?>Portfolio/profile',
              method:"POST",
              data:formData,
              contentType:false,
              cache:false,
              processData:false,
              beforeSend: function(){
           
              },
              success: function(data){
          alert(data);
                $('#pro').attr('src', '<?php echo base_url();?>asset/profile/'+data);
              }
            })
        
      })

$('#coverz').change(function(){
            alert('c');
         var filename = $('#coverz').val();
         var formData = new FormData();
         formData.append("cover", document.getElementById('coverz').files[0]);


            $.ajax({
              url:'<?php echo base_url();?>Portfolio/cover',
              method:"POST",
              data:formData,
              contentType:false,
              cache:false,
              processData:false,
              beforeSend: function(){
                $('.s').show();
              },
              success: function(data){
                $('#gallery').hide();
                $('#im').append(data);
              }
            })
        
      })


})
          
         
</script>