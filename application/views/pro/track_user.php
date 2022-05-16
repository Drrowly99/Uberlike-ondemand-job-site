<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
<link rel="stylesheet"
href="css/w3.css"/>
<link rel="stylesheet"
href="css/bootstrap.css"/>
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<script src="script/jquery-3.3.1.js">
</script>
<script src="js/bootstrap.min.js">
</script>
 <link rel="stylesheet" href="https://unpkg.com/leaflet@1.6.0/dist/leaflet.css"
   integrity="sha512-xwE/Az9zrjBIphAcBb3F6JVqxf46+CDLwfLMHloNu6KEQCAWi6HcDUbeOfBIptF7tcCzusKFjFw2yuvEpDL9wQ=="
   crossorigin=""/>
   <script src="https://unpkg.com/leaflet@1.6.0/dist/leaflet.js"
   integrity="sha512-gZwIG9x3wUXg2hdXF6+rVkLF/0Vi9U8D2Ntg4Ga5I5BZpVkVxlJWbSQtXPSiUTtC0TjtGOmxa1AJPuV0CPthew=="
   crossorigin=""></script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDe0DW4n935ombD-Jj41OSHZNzRGinE_2o&callback=initMap">
    </script>
  <title>My Google Map</title>
  <style>
.w2-card{
  box-shadow: 0 2px 7px 0 rgba(183, 183, 183, 0.16), 1px 14px 20px 0 rgba(193, 193, 193, 0.22);
}
.text-purple{color:#d5afdc;}
.w2-hover-yellow:hover{color:#000!important;background-color:#f1f028!important}
.w2-yellow:hover{background-color:#f1f028!important}
.w1-yellow{color:#f1f028!important}
 .w3-card-1{box-shadow:0px 0px 0px 0 rgba(33, 31, 31, 0.13), 0px 3px 3px 0 rgba(0,0,0,0.12)}
  .w3-card-5{box-shadow:5px 13px 14px 0px rgba(202, 202, 202, 0.46), 14px -1px 20px 0 rgba(210, 202, 202, 0.19)}
  .shadow1{box-shadow: -1px 1px 7px 0 rgba(222, 222, 222, 0.16), -1px 15px 20px 0 rgba(234, 234, 234, 0.22)};
  .shadow2{box-shadow: 5px 13px 14px 0px rgba(230, 230, 230, 0.46), 5px 3px 20px 0 rgba(220, 220, 220, 0.19)};
   .w3-card-6{box-shadow:5px 13px 14px 0px rgba(202, 202, 202, 0.46), 14px -1px 20px 0 rgba(210, 202, 202, 0.19)}
.holder{
transform:skewY(0deg);
}
$form{
transform:skewY(0deg);
}




  </style>
</head>
<body>
<div class=" w3-border w3-side" style="height: 100vh;color:white; position: relative; margin:auto auto auto auto; width:100%; max-width: 700px; background-image: linear-gradient(to bottom,#6b0d7b, #b838ce)">
	<div class=" w3-xlarge w3-margin"> DADI</div>
	
	<div id="main_form" style="margin:-10px 0 0 0; display: none;">
		<p class="w3-center" style="font-weight: bold; font-size: 24px;">Sign Up</p>
		<div class="w3-white holder w3-card-4 w3-round-xlarge" style="position: relative; border-bottom-left:200px;top:-25px; height:65vh; margin:10VH auto auto auto;width:90%; max-width: 400px;">
			<!--arrow top-->
			<div class="w3-circle w3-card-6 w3-center w3-white" style="position:absolute; left:-12px; top:-13px;width:60px; height: 60px;padding:5px; "><div class="w3-circle" style=" height: 50px; width:50px; background-image: linear-gradient(to left, #c24fd6, #9c27b0)"><span class="fa fa-arrow-back"></span></div></div>

				<!--main form-->
				<form id="m" class="w3- w3-container" style="position: relative; ">
					<div><input id="fn" class="w3-input w3-border w3-border-grey w3-hover-purple w3-round-xxlarge" placeholder="Fr=irstname" style="height:40px;margin:45px 0 5px 0;outline: none;" type="" name=""><span id="fn_err" class="w3-text-red w3-small"></span></div>
					<div><input id="ln" class="w3-input w3-border w3-border-grey w3-hover-purple  w3-round-xxlarge" placeholder="Lastname" style="height:40px;margin:10px 0 5px 0;outline: none;" type="" name=""><span id="ln_err" class="w3-text-red w3-small"></span></div>
					<div><input id="email" class="w3-input w3-border w3-border-grey w3-hover-purple  w3-round-xxlarge" placeholder="Email" style="height:40px;margin:10px 0 5px 0;outline: none;"  type="" name=""><span id="email_err" class="w3-text-red w3-small"></span></div>
					<div><input id="phone" class="w3-input w3-border w3-border-grey w3-hover-purple  w3-round-xxlarge" placeholder="Active Contact" style="height:40px;margin:10px 0 5px 0;outline: none;"  type="" name=""><span id="phone_err" class="w3-text-red w3-small"></span></div>
					<div>
			            <label style="font-size: 15px; font-weight: 600;">Gender</label>
			            <div style="display:flex;margin-top: 10px;">
			            <label for="male">Male</label>
			            	<input type="radio" class="w3-radio" id="male" name="gender" style="flex:3;" value="male">
			            <label for="female">Female</label>
			            	<input type="radio"  class="w3-radio" id="female" name="gender" style="flex:3;" value="female">
			            <label for="other">Other</label>
			            	<input type="radio"  class="w3-radio" id="other" name="gender" style="flex:3;" value="other"> 
			           <span id="gender_err" class="w3-text-red w3-small"></span>
			           </div>
			        </div>
				</form>
				<!--work form-->
			<!--arrow bottom-->
			<div class="w3-circle w3-center w3-purple" style="position:absolute;bottom:-13px; right:-12px;width:60px; height: 60px;padding:5px; ;"><div class="w3-circle" style=" height: 50px; width:50px; background-image: linear-gradient(to left, #9c27b0, #c24fd6)"><span class="fa fa-arrow-back"></span></div></div>
			
		</div>	
	</div>

	<div id="network_form" style="margin:-10px 0 0 0; display: block;">
		<p class="w3-center" style="font-weight: bold; font-size: 24px;">Sign Up</p>
		<div class="w3-white holder w3-card-4 w3-round-xlarge" style="position: relative; border-bottom-left:200px;top:-25px; height:65vh; margin:10VH auto auto auto;width:90%; max-width: 400px;">
			<!--arrow top-->
			<div class="w3-circle w3-card-6 w3-center w3-white" style="position:absolute; left:-12px; top:-13px;width:60px; height: 60px;padding:5px; "><div class="w3-circle" style=" height: 50px; width:50px; background-image: linear-gradient(to left, #c24fd6, #9c27b0)"><span class="fa fa-arrow-back"></span></div></div>

			<!--work form-->
			<form id="work" class="w3- w3-container" style="display: none;">
					<div>
		          		<label class="w3-text-black"><b>Current Location</b></label>
				        <select id="location"  name="location" class="w3-select w3-hover-white w3-border-0 w3-light-grey" style="font-size: 12px; width:100%; outline:none; -webkit-appearance:none; padding: 10px;" name="location" value="<?php echo set_value('location'); ?>">
				              <option value="" disabled selected>--Choose Your State --</option>        
				              <option value="Abia">Abia</option>
				              <option value="Adamawa">Adamawa</option>
				              <option value="Akwa Ibom">Akwa Ibom</option>
				              <option value="Anambra">Anambra</option>
				              <option value="Bauchi">Bauchi</option>
				              <option value="Bayelsa">Bayelsa</option>
				              <option value="Benue">Benue</option>
				              <option value="Borno">Borno</option>
				              <option value="Cross River">Cross River</option>
				              <option value="Delta">Delta</option>
				              <option value="Ebonyi">Ebonyi</option>
				              <option value="Edo">Edo</option>
				              <option value="Ekiti">Ekiti</option>
				              <option value="Enugu">Enugu</option>
				              <option value="Gombe">Gombe</option>
				              <option value="Imo">Imo</option>
				              <option value="Gigawa">Gigawa</option>
				              <option value="Kaduna">Kaduna</option>
				              <option value="Katsina">Katsina</option>
				              <option value="Kebi">Kebi</option>
				              <option value="Kogi">Kogi</option>
				              <option value="Kwara">Kwara</option>
				              <option value="Lagos">Lagos</option>
				              <option value="Nassarawa">Nassarawa</option>
				              <option value="Niger">Niger</option>
				              <option value="Ogun">Ogun</option>
				              <option value="Ondo">Ondo</option>
				              <option value="osun">osun</option>
				              <option value="Oyo">Oyo</option>
				              <option value="Plateau">Plateau</option>
				              <option value="Rivers">Rivers</option>
				              <option value="Sokoto">Sokoto</option>
				              <option value="Taraba">Taraba</option>
				              <option value="Yobe">Yobe</option>
				              <option value="Zamfara">Zamfara</option>
				              <option value="Gause">Gause</option>
				              <option value="Abuja">Abuja</option>
				        
				        </select>
			            <span id="location_err" class="w3-text-red w3-small"></span>
			        </div>

					<div>
			            <label class="w3-text-black"><b>Facebook Profile Link</b></label>
			            <input id="fbpl"  name="fbpl" class="w3-input w3-hover-white w3-light-grey w3-border-0" style="outline:none; " type="text" value="<?php echo set_value('fbpl'); ?>"  placeholder="Copy the link to your Facebook profile page">
			            <span id="fbpl_err" class="w3-text-red w3-small"></span>
	          		</div>

					<div>
				          <label class="w3-text-black"><b>Skill Category</b></label>
				          <select id="skill" name="skill" class="w3-select w3-hover-white w3-border-0 w3-light-grey" style="font-size: 12px; width:100%; outline:none; -webkit-appearance:none; padding: 10px;" name="skill" value="<?php echo set_value('skill'); ?>">
				              <option value="" disabled selected > --Choose Your Service -- </option>        
				              <option value="Architecture">Architecture</option>
				              <option value="Ads Services">Ads Services</option>
				              <option value="AC Installation">AC Installation</option>
				              <option value="Advance Excel Skills ">Advance Excel Skills </option>
				              <option value="Assignment Handler">Assignment Writters</option>
				              <option value="Affiliate Marketing">Affiliate Marketing</option>
				              <option value="Animated Explainers">Animated Explainers</option>
				              <option value="Aluminium and Glass Works">Aluminium and Glass Works</option>
				              <option value="" disabled  > B</option>
				              <option value="Branding">Branding</option>    
				              <option value="Branding Services">Blogging</option>    
				              <option value="Business Startup">Business Startup</option>    
				              <option value="Beads Making">Beads Making</option>    
				              <option value="Body Massage ">Body Massage </option>    
				              <option value="Baking">Baking (snacks, making cakes)</option> <option value="" disabled  >C</option>
				              <option value="Copywriting">Copywriting</option>
				              <option value="Content Writing">Content Writing</option>    
				              <option value="Comedy">Comedy (Comedian)</option>    
				              <option value="Cover Letters">Cover Letters</option>
				              <option value="Comedic Writing ">Comedic Writing </option>   
				              <option value="Calligraphy">Calligraphy</option>   
				              <option value="Cartoon Making">Cartoon Making</option>   
				              <option value="Car Mechanic">Car Mechanic</option>   
				              <option value="CCTV Installation">CCTV Installation</option>   
				              <option value="Cooking">Cooking</option>
				              <option value="Composers">Composers</option>
				              <option value="Chatbots Creation">Chatbots Creation</option>
				              <option value="cybersecurity-data-protection">cybersecurity-data-protection</option>
				              <option value="Character Animation">Character Animation</option>
				              <option value="" disabled  >D</option>   
				              <option value="Digital Marketing">Digital Marketing</option>
				              <option value="Desktop Applications Developers">Desktop Applications Developers</option>
				              <option value="Data Analysis">Data Analysis</option> 
				              <option value="Data Entry">Data Entry</option> 
				              <option value="" disabled  >E</option>  
				              <option value="Electronic repairs">Electronic repairs (Television, radio, etc) </option> 
				              <option value="Data Minning">Data Minning </option> 
				              <option value="Editing">Editing</option> 
				              <option value="E-book writing">E-book writing</option> 
				              <option value="E-Commerce Development">E-Commerce Development</option>
				              <option value="Event Planning">Event Planning</option>
				              <option value="" disabled  >F</option>
				              <option value="Flyer Distributors">Flyer Distributors</option>
				              <option value="Fitness Trainers">Fitness Trainers</option>
				              <option value="Furniture Making">Furniture Making</option>
				              <option value="Floor Tiling">Floor Tiling</option>
				              <option value="Fashion Design">Fashion Design</option>
				              <option value="Fancy Brick Making">Fancy Brick Making</option>
				              <option value="Flower Gardening">Flower Gardening</option>
				              <option value="Flipping">Flipping</option>
				              <option value="" disabled  >G</option>  
				              <option value="Graphic Design">Graphic Design</option>
				              <option value="Game Development">Game Development</option>
				              <option value="Generator Mechanic">Generator Mechanic</option>
				              <option value="Greeting Cards Writing">Greeting Cards Writing</option>
				              <option value="General Programming">General Programming</option>
				              <option value="Greeting Cards Writing">Greeting Cards Writing</option>
				              <option value="" disabled  >H</option>  
				              <option value="Hair Dressing">Hair Dressing</option>
				              <option value="Hair Barbing">Hair Barbing</option>
				              <option value="Hairstyling">Hairstyling</option>
				              <option value="Housing Agents">Housing Agents</option>
				              <option value="" disabled  >I</option>  
				              <option value="Influencer Marketing">Influencer Marketing</option>
				              <option value="Investing">Investing</option>
				              <option value="Interior Decoration">Interior Decoration</option>
				              <option value="Illustrator Design">Illustrator Design</option>
				              <option value="Industrial Generator Repairs">Industrial Generator Repairs</option>
				              <option value="Iron Bending">Iron Bending</option>
				              <option value="Instrumentation">Instrumentation</option>
				              <option value="IT Support Services">IT Support Services</option>
				              <option value="" disabled  >L</option>  
				              <option value="Logo Animationr">Logo Animation</option>
				              <option value="Lyrics Writing ">Lyrics Writing </option>
				              <option value="Legal Writing">Legal Writing</option>        
				              <option value="Legal Consulting">Legal Consulting</option> 
				              <option value="Laptop Repairs">Laptop Repairs</option>
				              <option value="" disabled  >M</option>          
				              <option value="Manicure">Manicure</option>        
				              <option value="Mobile phone Repair">Mobile phone Repair</option>              
				              <option value="Flipping">Mobile App Development</option>
				              <option value="Flipping">Machine Learning</option>
				              <option value="Music Composing and Production">Music Composing and Production</option>
				              <option value="Making Sound Effects and Jingles">Making Sound Effects and Jingles</option>
				              <option value="Mixing and Mastering">Mixing and Mastering</option>
				              <option value="Movie Editing">Movie Editing</option>
				              <option value="Movies and Music Reviews">Movies and Music Reviews </option>
				             <option value="Makeup business">Makeup business</option>
				             <option value="Market Research">Market Research</option>
				             <option value="Music Promotion">Music Promotion</option>
				             <option value="" disabled  >P</option>
				             <option value="Proofreading">Proofreading</option>
				             <option value="Plumbing">Plumbing</option>
				             <option value="Painting">Painting</option>
				             <option value="Python Programming">python programming</option>
				             <option value="Packaging Design">Packaging Design</option>
				             <option value="Poster Design">Poster Design</option>
				             <option value="Project Management">Project Management</option>
				             <option value="Presentations">Presentations</option>
				             <option value="Public Speaking ">Public Speaking </option>
				             <option value="Photography">Photography</option>
				             <option value="Professional Project Writters">Professional Project Writters</option>
				             <option value="product-design-services">product-design-services</option>
				             <option value="presentations design">presentations design</option>
				             <option value="Professional Writing">Professional Writing</option>
				             <option value="Press Release">Press Release</option>
				             <option value="Product Reviews">Product Reviews </option>
				             <option value="Poetry">Poetry </option>
				             <option value="Panel beating">Panel beating</option>
				             <option value="Proposal and Grant Writing ">Proposal and Grant Writing </option>
				             <option value="Proofreading">Proofreading </option>
				             <option value="" disabled  >R</option>
				             <option value="Resume Writing">Resume Writing</option>
				             <option value="Resume and CV writing">Resume and CV writing</option> 
				             <option value="" disabled  >S</option> 
				             <option value="Solar Power Installation">Solar Power Installation</option>
				             <option value="Software development">Software development</option>
				             <option value="Survey">Survey </option>
				             <option value="Social Media Marketing">Social Media Marketing</option>
				             <option value="Search Engine Optimisation">Search Engine Optimisation</option>
				             <option value="Startup and Business Plans">Startup and Business Plans</option>
				             <option value="Singing">Singing</option>
				             <option value="Sketching">Sketching</option>
				             <option value="Subtitles">Subtitles</option>
				             <option value="Speechwriting">Speechwriting</option>
				             <option value="Scriptwriting">Scriptwriting</option>
				             <option value="Shoemaking and Repairs">Shoemaking and Repairs</option>
				             <option value="Subtitles Writing">Subtitles Writing</option>
				             <option value="Slideshow Videos">Slideshow Videos</option>
				             <option value="Song writting">Song writting</option>
				             <option value="Sketching">Sketching</option>
				             <option value="" disabled  >T</option>
				             <option value="Tailoring">Tailoring</option>
				             <option value="Teaching Online">Teaching Online</option>
				             <option value="Translation Services">Translation Services</option>
				             <option value="T-Shirts Designs">T-Shirts Designs</option>
				             <option value="Technical Writing ">Technical Writing </option>
				             <option value="Tattoo Design">Tattoo Design</option>
				             <option value="" disabled  >U</option>
				             <option value="UX (User Experience) Design ">UX (User Experience) Design </option>
				             <option value="User Testing">User Testing</option>
				             <option value="" disabled  >V</option>
				             <option value="Visual Effects">Visual Effects</option>
				             <option value="Virtual Assistant">Virtual Assistant</option>
				             <option value="Video Shooting">Video Shooting</option>
				             <option value="Vocalists">Vocalists</option>
				             <option value="Vocal Tuning">Vocal Tuning</option>
				             <option value="" disabled  >W</option>
				             <option value="Wrist Watches Repair">Wrist Watches Repair</option>
				             <option value="Web Design">Web Design</option>
				             <option value="Whiteboard Animation">Whiteboard Animation</option>
				             <option value="Web Scraping">Web Scraping</option>
				             <option value="3D Animation">3D Animation</option>
				             <option value="2D Animation">2D Animation</option>
				             <option value="Website Development">Website Development</option>
				             <option value="Web Programming">Web Programming</option>
				             <option value="wiring/Installations">Wiring/Installations</option>
				              <option value="Wordpress Services">Wordpress Services</option>
				          </select>
	        		</div>

					<div>
				          <span id="skill_err" class="w3-text-red w3-small"></span>
				          <label class="w3-text-black"><b>Workmanship Charge</b></label>
				          <div style="margin:5px 0 0 0;">
				            <span><naira class="w3-small">From &#8358</naira> <input  type="number"  id="from" name="from"
				             min="800" max="50000" step="20" style="outline:none;" class="w3-light-grey w3-border-0" > </span>
				            

				            <span><naira class="w3-small">To &#8358 </naira><input type="number"  id="to" name="to"
				             min="4000" max="150000" step="50" style="outline:none;" class="w3-light-grey w3-border-0" > </span>
				             <span id="to_err" class="w3-text-red w3-small"></span>
				              <span id="from_err" class="w3-text-red w3-small"></span>
				         </div>
	        		</div>

					<div>
			            <label style="font-size: 15px; font-weight: 600;">Gender</label>
			            <div style="display:flex;margin-top: 10px;">
			            <label for="male">Male</label>
			            	<input type="radio" class="w3-radio" id="male" name="gender" style="flex:3;" value="male">
			            <label for="female">Female</label>
			            	<input type="radio"  class="w3-radio" id="female" name="gender" style="flex:3;" value="female">
			            <label for="other">Other</label>
			            	<input type="radio"  class="w3-radio" id="other" name="gender" style="flex:3;" value="other"> 
			           <span id="gender_err" class="w3-text-red w3-small"></span>
			           </div>
			        </div>
			</form>
			<!--arrow bottom-->
			<div class="w3-circle w3-center w3-purple" style="position:absolute;bottom:-13px; right:-12px;width:60px; height: 60px;padding:5px; ;"><div class="w3-circle" style=" height: 50px; width:50px; background-image: linear-gradient(to left, #9c27b0, #c24fd6)"><span class="fa fa-arrow-back"></span></div></div>
			
		</div>	
	</div>





	<div>
		<p class="w3-center">dont have an account ? <span class="w3-border-bottom w3-border-white">Login</span></p>
	</div>	
</div>
</body>
</html>