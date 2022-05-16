
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
<body class="r" style="height:100vh;">


  <div id="networker-login" class="center " style="width:; display: block;">
    <div class="  " style="height:98vh;">
    <div class="w3-border w3-white " style="position: relative;z-index: 10; height: 10vh; max-width: inherit;display: flex;padding: 0px 0 0 0;">
          <div class=" w3-center"> <i class="fa fa-chevron-left fa fa-1x" style="margin:21px;"></i></div>
          <div class="" style="font-weight: bold; font-size: 1.6rem; margin:10px 10px;"> Network Account</div>
    </div>
      <div>
         <form class="w3-container w3- w3-margin " style="outline:none;" style=" height: 200px; overflow: scroll;">
  
          <p class="w3-small w3-margin-left w3-center" style="text-align: left; font-weight:600;">Your details are required to join the network</p>
          <div>
            <label class="w3-text-black"><b>First Name</b></label>
            <input id="fn" class="w3-input w3-hover-white w3-light-grey w3-border-0" name="fn" style="outline:none; " type="text" required>
            <span id="fn_err" class="w3-text-red w3-small"></span>
          </div>

          <div>
            <label class="w3-text-black"><b>Last Name</b></label>
            <input id="ln" class="w3-input w3-hover-white w3-light-grey w3-border-0" name="ln" style="outline:none; " type="text" required>
            <span id="ln_err" class="w3-text-red w3-small"></span>
          </div>

          <div>
            <label class="w3-text-black"><b>Email Address</b></label>
            <input id="email" class="w3-input w3-hover-white w3-light-grey w3-border-0" " name="email" style="outline:none; " type="email" required>
            <span id="email_err" class="w3-text-red w3-small"></span>
          </div>

          <div>
            <label class="w3-text-black"><b>Phone No</b></label>
            <input id="phone"  name="phone" class="w3-input w3-hover-white w3-light-grey w3-border-0" style="outline:none; " type="tel" required>
            <span id="phone_err" class="w3-text-red w3-small"></span>
          </div>

          <div>
            <label class="w3-text-black"><b>Account Number</b></label>
            <input id="acc"  name="acc" class="w3-input w3-hover-white w3-light-grey w3-border-0" style="outline:none; " type="tel" placeholder="acc number" required>
            <span id="acc_err" class="w3-text-red w3-small"></span>
          </div>

          <div>
            <label class="w3-text-black"><b>Bank Name</b></label>
            <input id="bank" name="bank" class="w3-input w3-hover-white w3-light-grey w3-border-0"  style="outline:none; " type="text" placeholder="your bank name?" required>
            <span id="bank_err" class="w3-text-red w3-small"></span>
          </div>

          <div>
            <label class="w3-text-black"><b>Account Holders Name</b></label>
            <input id="holder" name="holder" class="w3-input w3-hover-white w3-light-grey w3-border-0"  style="outline:none; " type="text" placeholder="Your account name" required>
            <span id="holder_err" class="w3-text-red w3-small"></span>
          </div>

        
          <button id="join" class="w3-btn w3-text-white  w3-round w3-margin-top" style="background-color: #03213a; outline: none;" type="submit" name="submit"  value="submit">Join</button>
          <div id="success_message2"></div>
        </form>
      </div>      

    </div>
  </div>
</body>
</html>
<script>
    $(document).ready(function() {
      $('#join').click(function(){ 
        event.preventDefault();
        var fn = $('#fn').val();
        var ln = $('#ln').val();
        var email = $('#email').val();
        var phone = $('#phone').val();
        var acc = $('#acc').val();
        var bank = $('#bank').val();
        var holder = $('#holder').val();
        
        $.ajax({
          url: "<?php echo base_url() . 'Main/join'?>",  
          method: "POST",
          data: {fn:fn, ln:ln, email:email, phone:phone, acc:acc, bank:bank, holder:holder},
          dataType: "json",
        
          beforeSend: function(){
            alert('gfh');
          },
          success: function(data)
          {
            if (data.err)
           {
            
            alert('err');
          
            if (data.fn_err != '') 
            {
              $('#fn_err').html(data.fn_err);
            }
            else
            {
              $('#fn_err').html(''); 
            }


            if (data.ln_err != '')
            {
              $('#ln_err').html(data.ln_err);
            }
             else
            {
              $('#ln_err').html(''); 
            }

              if (data.email_err != '')
            {
              $('#email_err').html(data.email_err);
            }
             else
            {
              $('#email_err').html(''); 
            }


              if (data.phone_err != '')
            {
              $('#phone_err').html(data.phone_err);
            }
             else
            {
              $('#phone_err').html(''); 
            }


              if (data.acc_err != '')
            {
              $('#acc_err').html(data.acc_err);
            }
             else
            {
              $('#acc_err').html(''); 
            }

              if (data.bank_err != '')
            {
              $('#bank_err').html(data.bank_err);
            }
             else
            {
              $('#bank_err').html(''); 
            }


              if (data.holder_err != '')
            {
              $('#holder_err').html(data.holder_err);
            }
             else
            {
              $('#holder_err').html(''); 
            }

        
        }    
          
        if (data.suc) 
           {
            alert('suc');
            window.location.href = "<?php  echo base_url()?>Main/network/"+data.ref_id; 
             $('#success_message2').html(data.suc);
              $('#fn_err').html('');
              $('#ln_err').html('');
              $('#email_err').html('');
              $('#phone_err').html('');
              $('#acc_err').html('');
              $('#bank_err').html('');
              $('#holder_err').html('');
              $('#join')[0].reset();
  
          
           } 
 
          
          }
         
        });
      });
    });
 </script>