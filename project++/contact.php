<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="stylesheet" href="style.css">
    <script src="onsubmit_event.js"></script>


    <title>contact</title>
</head>
<body>
    <header> 
        <a href="index.php" class="logo">hena's</a>
        <nav class="navigation"> 
            <a href="about.php"> About Us </a>
            <a href="reservation.php"> Reservation </a>
            <a href="menu.php"> Menu </a>
            <a href="contact.php"> Contact </a>
            <?php
            session_start();
            if(isset($_SESSION['username'])){ ?>
            <a href="logout.php">Logout</a>
            <?php } else { ?>
            <a href="login.php">login</a>
            <?php } ?>
        </nav>
    </header>

<img src="images/interior.jpeg" width="100%" height="25%">


<div class="content">
    <div id="myami">
            <h2 class="branch">Hena's Myami</h2>
            <div class="contact-desc">
                1168 Hamilton Street<br>
                Myami, Alexandria<br>
                Phone: 604-568-1344<br>
                Email: tfp.myami@henas.eg
            </div>

            <div class="hrs-of-operation">
                <h3>HOURS OF OPERATION</h3>
                <div class="hrs-details">
                    <p>Monday to Thursday – 11:30am to 11pm<br>
                        Friday – 11:30am to 12am<br>
                        Saturday – 11am to 12am<br>
                        Sunday – 11am to 10pm
                    </p>
                    <h4>Join us every day for Happy Hour from 3 pm to 6 pm.</h4>
                </div>
            </div>
   </div>



    <div id="smouha">
        <h2 class="branch">Hena's Smouha</h2>
        <div class="contact-desc">
            127 2nd Avenue West<br>
            Smouha, Alexandria<br>
            Phone: 604-578-1498<br>
            Email: tfp.smouha@henas.eg
        </div>

        <div class="hrs-of-operation">
            <h3>HOURS OF OPERATION</h3>
            <div class="hrs-details">
                    <p>Monday to Thursday – 11:30am to 11pm<br>
                        Friday – 11:30am to 12am<br>
                        Saturday – 11am to 12am<br>
                        Sunday – 11am to 10pm
                    </p>
                    <h4>Join us every day for Happy Hour from 3 pm to 6 pm.</h4>
                </div>
        </div>
    </div>
</div>  

    
<footer class="site-footer">
    <div class="container">
      <div class="row">
        <div class="col-sm-12 col-md-6">
          <h6>About</h6>
          <p class="text-justify"><i>HENA'S Group</i> at the Waterfront is a place to gather for lunch or dinner, but is also the ideal location for weddings and all life's special events. From the glass-walled dining room, or heated patio that overlooks a tranquil reflection pond, enjoy blue skies and sparkling water by day or a spectacular moonrise with the lights across the lake by night.

          </p>
        </div>

       
        <div class="col-xs-6 col-md-3">
          <h6>Quick Links</h6>
          <ul class="footer-links">
            <li><a href="about.php">About Us</a></li>
            <li><a href="contact.php">Contact Us</a></li>
            <li><a href="menu.php">Menu</a></li>
            <li><a href="reservation.php">Reservations</a></li>
          </ul>
        </div>
      </div>
      <hr>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-md-8 col-sm-6 col-xs-12">
          <p class="copyright-text">Copyright &copy; 2022 All Rights Reserved by 
       <a href="#">HENA'S Group</a>.
          </p>
        </div>
        <div class="col-md-4 col-sm-6 col-xs-12">
          <script>
          function gofb(){
            a= window.confirm("WE will happy of your visit to our facebook page.");
            if (a)
            window.location="https://www.facebook.com/profile.php?id=100088979765954&mibextid=LQQJ4d";
            }
            function goinsta(){
              a= window.confirm("we will be happy to visit our page on instagram? ");
            if (a)
            window.location="https://www.instagram.com/invites/contact/?i=18gqgxa0ld27&utm_content=q4dueqjhttp://www.instagram.com";
            }
            function gotwitt(){
            a= window.confirm("we will be happy to visit our page on twitter? ");
            if (a)
            window.location="https://twitter.com/henasrestaurant";
            }        </script>

            
           <ul class="social-icons">
            <li><a class="facebook"  onclick="gofb()"><i class="fa-brands fa-square-facebook"></i></a></li>
            <li><a class="instagram"onclick="goinsta()"><i class="fa-brands fa-square-instagram"></i></a></li>
            <li><a class="twitter"onclick="gotwitt()"><i class="fa-brands fa-square-twitter"></i></a></li>
           </ul>
          </div>
          
        <script>
          var str = "Primary Food Terms ..";
          document.write(str.link("https://www2.gov.bc.ca/assets/gov/employment-business-and-economic-development/business-management/liquor-regulation-licensing/guides-and-manuals/foodprimary-handbook.pdf"));
          </script>
      </div>
    </div>
</footer>

    </body>
</html>


