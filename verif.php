<!DOCTYPE html>
<html lang="en-US">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width" />
      
      <link rel="stylesheet" href="css/components.css">
      <link rel="stylesheet" href="css/responsee.css">
      <link rel="stylesheet" href="owl-carousel/owl.carousel.css">
      <link rel="stylesheet" href="owl-carousel/owl.theme.css">
      <!-- CUSTOM STYLE -->
      <link rel="stylesheet" href="css/template-style.css">
      <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
      
   </head>
   <body class="size-1140">
      
         <div id="topbar">
            <div class="line">
               <div class="s-12 m-6 l-6">
                  <p>CONTACT US: <strong>+216 28 086 908</strong> | <strong>amine.chagour28@ieee.org</strong></p>
               </div>
               <div class="s-12 m-6 l-6">
                  <div class="social right">
                    <a href="https://facebook.com"><i class="icon-facebook_circle"></i></a> 
                    <a href="https://twitter.com"><i class="icon-twitter_circle"></i></a> 
                    <a href="https://google.com"><i class="icon-google_plus_circle"></i></a> 
                    <a href="https://instagram.com"><i class="icon-instagram_circle"></i></a>
                  </div>
               </div>
            </div>  
         </div> 
         <nav>
            <div class="line">
               <div class="s-12 l-2">
                  <p class="logo"><strong>BIEN</strong>VENUE</p>
               </div>
               <div class="top-nav s-12 l-10">
                  <p class="nav-text">Custom menu text</p>
                  <ul class="right">
                     <li><a href="index.html">Home</a></li>
                     <li><a href="features.html">Features</a></li>
                     <li><a href="about_us.html">About Us</a></li>
                     <li><a href="our_work.html">Our Work</a></li>
                     <li><a href="services.html">Services</a></li>
                     <li><a href="contact.php">Contact</a></li>
                  </ul>
               </div>
            </div>
         
         <!-- CONTACT -->
         <div id="contact">
            <div class="line">
               <h2 class="section-title">Message Reçu</h2>
            </div>
         </div>
		
         <?php
		/* Attempt MySQL server connection. Assuming you are running MySQL
		server with default setting (user 'root' with no password) */
		$link = mysqli_connect("localhost", "root", "", "projet1");
		 
		// Check connection
		if($link === false){
		    die("ERROR: Could not connect. " . mysqli_connect_error());
		}
		
		
		$var1=$_POST['email'];
		$var2=$_POST['nom'];
		$var3=$_POST['message'];

		
		$sql2='INSERT INTO `submit` (`email`, `nom`, `message`) VALUES ("'.$var1.'","'.$var2.'","'.$var3.'")';
		mysqli_query($link,$sql2);
		// Close connection
		mysqli_close($link);
	
?>


      <!-- FOOTER -->
      <footer>
         <div class="line">
            <div class="s-12 l-6">
               <p>Copyright 2018, Chagour Design - graphic</p>
               <p>All images is purchased from personal Camera. Do not use the images in your website or other applications.</p>
            </div>
            <div class="s-12 l-6">
               <a class="right" href="http://www.facebook.com/amine.chagour" title="Responsee - lightweight responsive framework">Design and coding<br> by Chagour Med Amine</a>
            </div>
         </div>
      </footer>
      <script type="text/javascript" src="owl-carousel/owl.carousel.js"></script>
      <script type="text/javascript">
         jQuery(document).ready(function($) {
            var theme_slider = $("#owl-demo");
            $("#owl-demo").owlCarousel({
                navigation: false,
                slideSpeed: 300,
                paginationSpeed: 400,
                autoPlay: 6000,
                addClassActive: true,
             // transitionStyle: "fade",
                singleItem: true
            });
            $("#owl-demo2").owlCarousel({
                slideSpeed: 300,
                autoPlay: true,
                navigation: true,
                navigationText: ["&#xf007","&#xf006"],
                pagination: false,
                singleItem: true
            });
        
            // Custom Navigation Events
            $(".next-arrow").click(function() {
                theme_slider.trigger('owl.next');
            })
            $(".prev-arrow").click(function() {
                theme_slider.trigger('owl.prev');
            })     
        }); 
      </script>
   </body>
</html>