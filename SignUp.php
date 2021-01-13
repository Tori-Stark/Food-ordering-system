<!DOCTYPE html>
<html>
<head>
	<title>Sign Up Page</title>
  <link rel="stylesheet" type="text/css" href="registration.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Italianno">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inconsolata">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Indie Flower">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Allura">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">

</head>
<body>
  <div class="scrollmenu">
        <img src="logo.JPG"  width="50" height="50" class="roundlogo">
            <a href="aboutus.php">About us</a>  
            <a href="contact.html">Contact</a>
            
     </div>
     <br>
   <h1 class="h1">  <strong>LE  &nbsp;&nbsp;FOOD'S &nbsp;&nbsp;  PALACE</strong> 
    <p class="logo">" The secret is at the table" &nbsp;&nbsp;🍹🍸</p> 
   </h1>
   <p class="image">
   
        <img src="download3.JPG"  width="1000" height="500"><br><br><br>
     </p>

    <fieldset>
      <legend><u><strong>Sign Up📃📜</strong></u></legend>

      <form action="process_signup.php" method="post">
       <ul style="list-style-type:none;">
       

       <li>
           <label for="fname"><strong>First name</strong></label><br>
           <input type="text" name="fname" id="fname" size="30px">
       </li>
       <br>
       <br>

       <li>
           <label for="lname"><strong>Last name</strong></label><br>
           <input type="text" name="lname" id="lname" size="30px">
       </li>
       <br>
       <br>

       <li>
           <label for="uname"><strong>User name</strong></label><br>
           <input type="text" name="uname" id="uname" size="30px">
       </li>
       <br>
       <br>

       <li>
            <label for="cemail"><strong>Email</strong></label><br>
            <input type="Email" name="cemail" id="cemail" size="30px" >
       </li>
       <br>
       <br>


       <li>
            <label for="cnumber"><strong>Phone Number</strong></label><br>
            <input type="telephone" name="cnumber" id="cnumber" size="30px">
       </li>
       <br>
       <br>


       <li>
            <label for="psd"><strong>Password</strong></label><br>
            <input type="Password" id="psd" name="psd" size="30px"  pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 6 or more characters" required>   
            
       </li>
       <br>
       <br>
       
     
      </ul>

             
               <div style="text-align:center;">
                 
                  <button type="submit" name="register" class="button"><strong>Sign Up</strong></button>
    
             </div>

    </form>
   
   </fieldset>
   <div id="message" style="text-align:center">
                  <h3>Password must contain the following:</h3>
                  <p id="letter" class="invalid">A <b>lowercase</b> letter</p>
                  <p id="capital" class="invalid">A <b>capital (uppercase)</b> letter</p>
                  <p id="number" class="invalid">A <b>number</b></p>
                  <p id="length" class="invalid">Minimum <b>6 characters</b></p>
                </div>


   <script>
var myInput = document.getElementById("psd");
var letter = document.getElementById("letter");
var capital = document.getElementById("capital");
var number = document.getElementById("number");
var length = document.getElementById("length");

// When the user clicks on the password field, show the message box
myInput.onfocus = function() {
  document.getElementById("message").style.display = "block";
}

// When the user clicks outside of the password field, hide the message box
myInput.onblur = function() {
  document.getElementById("message").style.display = "none";
}

// When the user starts to type something inside the password field
myInput.onkeyup = function() {
  // Validate lowercase letters
  var lowerCaseLetters = /[a-z]/g;
  if(myInput.value.match(lowerCaseLetters)) {  
    letter.classList.remove("invalid");
    letter.classList.add("valid");
  } else {
    letter.classList.remove("valid");
    letter.classList.add("invalid");
  }
  
  // Validate capital letters
  var upperCaseLetters = /[A-Z]/g;
  if(myInput.value.match(upperCaseLetters)) {  
    capital.classList.remove("invalid");
    capital.classList.add("valid");
  } else {
    capital.classList.remove("valid");
    capital.classList.add("invalid");
  }

  // Validate numbers
  var numbers = /[0-9]/g;
  if(myInput.value.match(numbers)) {  
    number.classList.remove("invalid");
    number.classList.add("valid");
  } else {
    number.classList.remove("valid");
    number.classList.add("invalid");
  }
  
  // Validate length
  if(myInput.value.length >= 8) {
    length.classList.remove("invalid");
    length.classList.add("valid");
  } else {
    length.classList.remove("valid");
    length.classList.add("invalid");
  }
}
</script>

   <br><fieldset class="bottom">
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