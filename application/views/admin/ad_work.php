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

</head>
<body class="w3-white" style="   margin: auto;">
<div>
  <table class="w3-small attributecolor w3-table w3-bordered w3-striped" style="color:red"> 
    <tr class="tagcolor" style="color:mediumblue">
      <th>ID </th>
      <th>NAME </th>
      <th>SKILL</th>
      <th>PHONE</th>
      <th>LOCATION</th>
      <th>DATE</th>
    </tr>
      <?php foreach($work as $all) :?>
    <tr class="tagcolor" style="color:black">
       <?php echo '<td>'.$all['id'].'</td>'; ?>
       <?php echo '<td>'.$all['name'].'</td>'; ?>
       <?php echo '<td>'.$all['skill'].'</td>'; ?>
       <?php echo '<td>'.$all['phone'].'</td>'; ?>
       <?php echo '<td>'.$all['location'].'</td>'; ?>
       <?php
           date_default_timezone_set('Africa/Lagos');
           $date = strtotime($all['create_date']);

        echo '<td >'.date('m/d/Y h:i:sa', $date), '  ', date('l', $date); 


        '</td>'; 
       
        ?>
    </tr>
     <?php endforeach;?>
  </table>
 <h2>total number of WORKS: <?php echo $workcount ?></h2>
</div>




<div>
  <h2>SIGNUP DATA</h2>
<table class=" w3-small attributecolor w3-table w3-bordered w3-striped" style="color:red"> 
    <tr class=" tagcolor" style="color:black">
      <th>ID </th>
      <th>NAME </th>
      <th>EMAIL</th>
      <th>DATE</th>
      <th>DELETE</th>
    </tr>
      <?php foreach($signup as $dadi) :?>
    <tr class="tagcolor" style="color:mediumblue">
       <?php echo '<td>'.$dadi['id'].'</td>'; ?>
       <?php echo '<td>'.$dadi['name'].'</td>'; ?>
       <?php echo '<td>'.$dadi['email'].'</td>'; ?>
        <?php
           date_default_timezone_set('Africa/Lagos');
           $date = strtotime($dadi['date']);

        echo '<td >'.date('m/d/Y h:i:sa', $date), '  ', date('l', $date); 


        '</td>'; 
       
        ?>
       <td><button id='<?php echo $dadi['id']?>' value="<?php echo $dadi['id']?>">DELETE</button></td>
    </tr>

     <?php endforeach;?>
  </table>
  <h2>total number of WORKS: <?php echo $signupcount ?></h2>
  </div>



<div class="w3-panel w3-container w w3-margin-32" style="margin-top:50px;">
    <div>
    <form id="upload" method="POST"  >
<input id="id" type="text" class="w3-input w3-border w3-border-black" style="width:50%;" placeholder=" input phone number to confirm paid" >
<button id="cp">confirm pay</button>
<button  id="sus">suspend</button>
<p id="perform">hh</p>
<p id="perf">hh</p>
</form>
    </div>
</div>
<div id="delete">delete ID : </div>
</body>
</html>
<script>
 $('#cp').click(function(){
     var id = $('#id').val();
 
     $('#perform').load("<?php echo base_url() . 'Admin_c/confirm'?>", { id: id});

 })

 $('#sus').click(function(){
     var id = $('#id').val();
    ('#perf').load("<?php echo base_url() . 'Admin_c/suspend'?>", {
            id: id
           });
 })
</script>
 <?php foreach($signup as $dadi) :?>
       <script>
       $('#<?php echo $dadi['id']?>').click(function(){
        var data = $('#<?php echo $dadi['id']?>').val();
          alert('Are you sure you want to delete this user');
          $('#delete').load("<?php echo base_url() . 'Admin_c/deleteuser'?>", { data: data});
          var refresh = setInterval(function(){
            window.location.href = "<?php echo base_url() . 'admin_c'?>";
          }, 500);
      })
    </script>

     <?php endforeach;?>