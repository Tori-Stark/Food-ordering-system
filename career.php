<?php
require_once("db_connect.php");
session_start();

if(isset($_SESSION['name'])){

} else{
  echo '<script>alert("You are not Logged in!")</script>';
  $_SESSION["error"]="You are not Logged in";
  header("location:LogIn.php");
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Career</title>
	<link rel="stylesheet" type="text/css" href="homepage.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Italianno">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inconsolata">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Allura">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">
    
</head>
<body>
	<div class="scrollmenu">
	 	    <img src="logo.JPG"  width="50" height="50" class="roundlogo">
         <?php

            
              echo "<strong>Welcome ".$_SESSION["name"]."</strong>";

              ?>
            <a href="contact.php">Contact</a>
            <a href="aboutus.php">About Us</a>
            <a href="logout.php">Log Out</a>
     </div>
     <br>
	 <h1 class="h1">  <strong>LE  &nbsp;&nbsp;FOOD'S &nbsp;&nbsp;  PALACE</strong> 
	 	<p class="logo">" The secret is at the table" &nbsp;&nbsp;🍹🍸</p> 
	 </h1>
    <p class="image">
   
        <img src="career.JPG"  width="400" height="300"><br><br><br>
     </p>
	 
     <h2 text align="center" class="h2"><u><strong>AVAILABLE CAREER OPPORTUNITIES</strong></u></h2>
   
   <fieldset>
      <legend></legend>
      <div class="memories">
        
        <img src="career1.jpg" width="200" height="180" class="roundlogo"><br>
        <span> <h3> <Strong><u>1. Assistant Chef</u></Strong></h3>
        <strong>Description</strong><br>
          Assistant chefs are culinary professionals who work under the supervision of executive chefs. They have authority over other kitchen staff, and when the executive chef is not present they take command of the entire kitchen. <br><br>
          <strong>Requirements</strong><br>
          <li>Completion of formal culinary training</li>
          <li> 4,000 hours of on-the-job training</li>
          <li> Courses in sanitation and safety</li>
          <li> American Culinary Federation (ACF) training</li>

        </span>
        
        
        
      </div>
      
   </fieldset>
   
  <fieldset>
      <legend></legend>
      <div class="memories">
        
        <img src="career2.jpg" width="200" height="180" class="roundlogo"><br>
        <span> <h3> <Strong><u>1. Waiter</u></Strong></h3>
        <strong>Description</strong><br>
          Waiters take orders for customers to the chef and serves it to them They also assist the customers around the premises.<br><br>
          <strong>Requirements</strong><br>
          <li>  Experience: Little or no previous work-related skill, knowledge, or experience is needed</li>
          <li> High school diploma or GED certificate.</li>
          <li> Courses in sanitation and safety</li>
          <li> American Culinary Federation (ACF) training</li><br><br>
          <strong>Skills</strong><br>
              <li>Active Listening — Giving full attention to what other people are saying, taking time to understand the points being made, asking questions as appropriate, and not interrupting at inappropriate times.</li>
              <li>Service Orientation — Actively looking for ways to help people.</li>
              <li>Social Perceptiveness — Being aware of others' reactions and understanding why they react as they do.</li>
              <li>Speaking — Talking to others to convey information effectively.</li>
              <li>Coordination — Adjusting actions in relation to others' actions.</li><br><br>
          <strong>Abilities One Should have.</strong><br>
          <li>Oral Comprehension — The ability to listen to and understand information and ideas presented through spoken words and sentences.</li>
          <li>Oral Expression — The ability to communicate information and ideas in speaking so others will understand.</li>
          <li>Speech Recognition — The ability to identify and understand the speech of another person.</li>
          <li>Speech Clarity — The ability to speak clearly so others can understand you.</li>
          <li>Arm-Hand Steadiness — The ability to keep your hand and arm steady while moving your arm or while holding your arm and hand in one position.</li>

        </span>
        
        
        
      </div>
      
   </fieldset>
     <fieldset>
      <legend></legend>
      <div class="memories">
        
        <img src="career3.png" width="200" height="180" class="roundlogo"><br>
        <span> <h3> <Strong><u>1. Janitor</u></Strong></h3>
        <strong>Description</strong><br>
          Janitors ensure that the restaurant is clean during their shift hours. They also assist the guest around the premises. <br><br>
          <strong>Requirements</strong><br>
          <li> Courses in sanitation and safety</li>
          <li> No experience is needed</li>

        </span>
        
        
        
      </div>
      
   </fieldset>
   
   <fieldset>
      <legend></legend>
      <div class="memories">
        
        <img src="career4.jpg" width="200" height="180" class="roundlogo"><br>
        <span> <h3> <Strong><u>1. Accountant</u></Strong></h3><br>
        <strong>Description</strong><br>
         Accountants have the roles of bookkeeping, auditing financial records, completing tax returns and fofering guidance on the most effective uses for company or personal funds <br>
          <strong>Requirements</strong><br>
          <li>Bachelor's degree in accounting or a similar field</li>
          <li> Certified Public Accountant (CPA) course</li>
          <li> 3-5 years experience at the field</li>
          <li>  Prior legal knowledge, especially in relation to taxation, may be beneficial.</li>
          <li>5 GCSEs (grades A* - C, including maths and English), and at least two good A levels.</li>
        </span>
        
        
        
      </div>
      
   </fieldset>
 
   <br>
   <fieldset>
      <legend><u><strong>VISIT OUR SOCIAL MEDIA PAGES FOR NEWS ON THE LATEST JOBS</strong></u></legend>
      <div class="socialMedia">
        <span>
          <img src="facebook.png"  width="50" height="50" class="roundlogo">
          <br>
           <a href="https://www.facebook.com/">@LePalaceHotel</a>
           
        </span> 
        <span>
          <img src="twitter.png"  width="50" height="50" class="roundlogo">
          <br>
          <a href="https://www.twitter.com">@LePalaceHotel</a>
        </span> 
        <span>
          <img src="instagram.png"  width="50" height="50" class="roundlogo">
          <br>
           <a href="https://www.instagram.com">@LePalaceHotel</a>
        </span> 
        <span>
          <img src="youtube.png"  width="50" height="50" class="roundlogo">
          <br>
           <a href="https://www.youtube.com">@LePalaceHotel</a>
        </span> 
        <span>
          <img src="pintrest.png"  width="50" height="50" class="roundlogo">
          <br>
           <a href="https://www.pinterest.com/">@LePalaceHotel</a>
        </span>   
      </div>
      <br>
   </fieldset>

   <br><br><br>
   <fieldset class="bottom">
   <div >
   	
   	<span>
   		<strong>
      	Toll Free UAE: 800 ADDRESS (2337377)
      	<br>
        Toll Free KSA: 8008971470
        <br>
        Callback Service 
        <br>
        Phone: (+25) (0)703-0300/200/300 +254) OR (0) 730-7000/00/300 
        <br>Email: info@LePalaceHotel.com
        <br> Address: The Long Road, off Short Road, in Zwela 
        </strong>
  	</span> 
  
   	
   </div>
   </fieldset>




     


</body>
</html>