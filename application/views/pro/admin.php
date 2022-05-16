<!DOCTYPE html>

<html lang="en">
<head>
<title> dadi</title>
<meta name="viewport"
  content="width=device-width,
  initial-scale=1">

<link rel="stylesheet"
href="<?php echo base_url();?>asset/css/w3.css"/>
<link rel="stylesheet"
href="css1/bootstrap.css"/>
<script src="<?php echo base_url();?>asset/script/jquery-3.3.1.js">
</script>

<script src="js/bootstrap.min.js">
</script><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

 <script src="http://cdn.ckeditor.com/4.5.11/standard/ckeditor.js"></script>
<style >
  #maindiv{
  
    margin: auto;
    height: auto;

  }
  #header{
    height:50px;
    max-width: 800px;
    position:;
    top:0;

  }
  #footer{
    height:40px;
    max-width: 800px;
    margin: auto;
  
  }
  #bottom{

  }
  #mainform{
    height: auto;
    margin-top: 50px;
  }

 .w3-special-2{box-shadow: 0 2px 10px 0 rgba(224, 218, 218, 0.16), 0 2px 10px 0 rgba(165, 182, 220, 0.12);}
  .w3-card-1{box-shadow:0px 0px 0px 0 rgba(33, 31, 31, 0.13), 0px 3px 3px 0 rgba(0,0,0,0.12)}
</style>
 <script type="text/javascript">
   $(document).ready(function() {

        $('#images').show();
        $('#image').hide();
    setTimeout(function(){
       $('#image').show();
       $('#images').hide();
    }, 3000)
  })

</script>
</head>
<?php //phpinfo() ?>
<body class="w3-white" style="max-width:600px;   margin: auto;">
<div class="w3-container " style="width:90%;height:300px;display:flex;margin:auto 5%;">
    <div class="w3-container w3-center w3-margin w3-card" style="width:100px;height:120px;flex:2;">
        <p>USER</p>
        <p> <?php echo $user ?></p>
    </div>
        <div class="w3-container w3-center w3-margin w3-card" style="width:auto;height:120px;flex:2;">
        <p>NETWORKER</p>
        <p> <?php echo $net ?></p>
    </div>
        <div class="w3-container w3-center w3-margin w3-card" style="width:100px;height:120px;flex:2;">
        <p>WORKERS</p>
        <p> <?php echo $work ?></p>
    </div>
 
</div>
<!--PAGE MAIL-->
<div style="position: absolute;left:35%; top:170px;">

    <div>
    <select id="database"  name="database"  class="w3-input w3-border w3-margin">
        <option value="networkers">Networkers</option>
        <option value="workforce">workforce</option>
        <option value="userdata">userdata</option>      
    </select>
    </div>

    <div>
  <input id="heading" type="text" style="width:100%;" class="w3-input w3-margin w3-border" name="heading" ><br>
    </div>

    <div>
  <textarea id="body" type="text" style="width:100%;" class="w3-input w3-margin w3-border" name="body" ></textarea><br>
    </div>
  <div class="w3-margin">
     <button class="w3-red w3-btn w3-center" id="pagemail">PAGE MAIL</button>
     <div class="send" style="display: none;">sending.....</div>
     <div class="reply" id="reply" style="">hmm</div>
   </div>


</div>






</body>
</html>

<script>
$(document).ready(function(){
  $('#pagemail').click(function(){
    var database = $('#database').val();
        var body = $('#body').val();
            var heading = $('#heading').val();
    alert(database);
      $.ajax({
         url:  "<?php echo base_url() . 'admin_control/mail'?>", 
        method: 'POST',
        data: {database:database, heading:heading, body:body},
        beforeSend: function(){
            $('.send').show();
        },
        success: function(data)
        {  
           
          $('#reply').html(data);
        }   
        
    })
  })
});
</script>
