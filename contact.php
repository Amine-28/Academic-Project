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
                  <p class="logo"><strong>Bien</strong>venue</p>
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
               <h2 class="section-title">Contact Us</h2>
               <div class="margin">
                  <div class="s-12 m-12 l-3 hide-m hide-s margin-bottom right-align">
                    <img src="img/contact.jpg" alt="">
                  </div>
                  <div class="s-12 m-12 l-4 margin-bottom right-align">
                     <h3>Chagour Design - graphics</h3>
                     <address>
                        <p><strong>Adress:</strong> Route de Tunis, cité el Ons, Technopôle de Sfax، Sfax</p>
                        <p><strong>Country:</strong> Tunisie, Afrique</p>
                        <p><strong>E-mail:</strong> amine.chagour28@ieee.org</p>
                     </address>
                     <br />
                     <h3>Reseaux Sociales</h3>
                     <p><i class="icon-facebook icon"></i> <a href="https://www.facebook.com/pages/Vision-Design-graphic-ZOO/154664684553091">facebook.com/amine.chagour</a></p>
                     <p class="margin-bottom"><i class="icon-twitter icon"></i> <a href="https://twitter.com/MyResponsee">twitter.com/amine.chagour</a></p>
                  </div>
                  <div class="s-12 m-12 l-5">
                    <h3>contact form</h3>
                    <form class="customform" action="verif.php" method="post">
                      <div class="s-12">
                        <input name="email" placeholder="Your e-mail" title="Your e-mail" type="text" />
                      </div>
                      <div class="s-12">
                        <input name="nom" placeholder="Your name" title="Your name" type="text" />
                      </div>
                      <div class="s-12">
                        <textarea placeholder="Your massage" name="message" rows="5"></textarea>
                      </div>
                      <div class="s-12 m-12 l-4">
                        <button class="color-btn" type="submit">Submit Button</button>
                      </div>
                    </form>
                  </div>                
               </div>
            </div>
         </div>

         <!-- MAP -->
         <div id="map-block">     
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d104888.65493727612!2d10.663058444630746!3d34.761374447746796!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x13002cda1486c695%3A0x22dfe0a62c50ce6f!2sSfax!5e0!3m2!1sen!2stn!4v1539192082792" width="100%" height="450" ></iframe>
         </div>

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