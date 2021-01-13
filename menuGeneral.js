<!DOCTYPE html>
<html>
<head>
  <title>Menu General</title>
  <link rel="stylesheet" type="text/css" href="booking.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Italianno">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inconsolata">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Allura">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">
    
</head>
<body>
  <div class="scrollmenu">
        <img src="logo.JPG"  width="50" height="50" class="roundlogo">
            <a href="contact.html">Contact</a>
            <a href="career.html">Career</a>
            <a href="blogs.html">Blogs</a>
            <a href="homepage.html">Menu</a>
     </div>
     <br>
   <h1 class="h1">  <strong>LE  &nbsp;&nbsp;FOOD'S &nbsp;&nbsp;  PALACE</strong> 
    <p class="logo">" The secret is at the table" &nbsp;&nbsp;🍹🍸</p> 
   </h1>
    <p class="image">
   
        <img src="menuGeneral.JPG"  width="1000" height="500"><br><br><br>
     </p>


     <div id="impress" class="impress-not-supported">

            <!-- The Slides Will Go Here -->

        </div>

        <a id="arrowLeft" class="arrow">&lt;</a>
        <a id="arrowRight" class="arrow">&gt;</a>

        <!-- JavaScript includes -->
        <script src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
        <script src="assets/js/impress.js"></script>
        <script src="assets/js/script.js"></script>

        <!-- The first slide retains its default position. We could omit the data attributes -->
        <div id="intro" class="step" data-x="0" data-y="0">
             <h2>Introducing Galaxy Nexus</h2>
             <p>Android 4.0<br /> Super Amoled 720p Screen<br />
             <img src="menuGeneral.JPG" width="232" height="458" alt="Galaxy Nexus" />
        </div>

<!-- We are offsetting the second slide, rotating it and making it 1.8 times larger -->
        <div id="simplicity" class="step" data-x="1100" data-y="1200" data-scale="1.8" data-rotate="190">
             <h2>Simplicity in Android 4.0</h2>
             <p>Android 4.0, Ice Cream Sandwich brings an entirely new look and feel..</p>
             <img src="menuGeneral.JPG" width="289" height="535" alt="Galaxy Nexus" />
        </div>

<!-- Same for the rest.. -->
        <div id="connect" class="step" data-x="-300" data-y="600" data-scale="0.2" data-rotate="270">
             <h2>Connect &amp; Share</h2>
             <p>Real-life sharing is nuanced and rich. Galaxy Nexus makes sharing.. </p>
            <img src="menuGeneral.JPG" width="558" height="329" alt="Galaxy Nexus" />
        </div>

        <div id="upload" class="step" data-x="-200" data-y="1500" data-rotate="180">
             <h2>Instant Upload</h2>
             <p>Your photos upload themselves with Instant Upload, which makes ..</p>
             <img src="menuGeneral.JPG" width="248" height="510" alt="Galaxy Nexus" />
       </div>

       <div id="music" class="step" data-x="-1200" data-y="1000" data-scale="0.8" data-rotate="270">
             <h2>Jam on with Google Music</h2>
             <p>Google Music makes discovery, purchase, and listening effortless and..</p>
             <img src="menuGeneral.JPG" width="570" height="389" alt="Galaxy Nexus" />
       </div>



$(function(){

    var imp = impress();

    $('#arrowLeft').click(function(e){
        imp.prev();
        e.preventDefault();
    });

    $('#arrowRight').click(function(e){
        imp.next();
        e.preventDefault();
    });

});




    <fieldset>
      <legend><u><strong>Which Menu would like to view?</strong></u></legend>
     

             
               <div style="text-align:center;">
                  <a href="foodmenu.php" class="button" > <strong>Food Menu</strong></a>
    
             </div><br>
              <div style="text-align:center;">
                  <a href="drinkmenu.php" class="button" > <strong>Drinks Menu</strong></a>
    
             </div><br>
              <div style="text-align:center;">
                  <a href="dessertmenu.php" class="button" > <strong>Dessert Menu</strong></a>
    
             </div>
    <br><br><br>
   
    
   
   </fieldset>

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