<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <link rel="stylesheet" href="style.css">

    <title>about</title>
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
            <?php } ?>        </nav>
    </header>

        <div class="about">

            <div class="img-about">
                <img src="images/chef.jpg" width="400" height="350" style="float:left">
            </div>
            <div class="about-intro">
                HENA'S Group of Restaurants is a collection of culinary experiences that deliver authentic food made by genuine people. Based on the West Coast of Canada, our restaurants draw inspiration from the diversity of fresh ingredients readily available here, and the tradition of unforgettable but humble family feasts. In short, we create experiences that feel like home – come eat with us! 
                Our mission is to always deliver fresh, high-quality farm/sea-to-table product at a great value in and in a warm setting.
                We are familiar, comfortable and consistent.
              <h4>Check out our menu page for all of the dishes we offer and details about what makes us special.</h4>

            </div>
            </div>




<div class="content">
    <a href="menu.php"><div class="card">
        <div class="icon">
       <i class="fa-solid fa-utensils"></i>
        </div>
        <div class="info">
            <a href="menu.php"><h3>Our Menue</h3></a>
        </div>
    </div></a>

    <a href="contact.php"><div class="card">
        <div class="icon">
            <i class="fa-solid fa-inbox"></i>
        </div>
        <div class="info">
            <a href="contact.php"><h3>Contact Us</h3></a>
        </div>
    </div></a>

    <a href="reservation.php"><div class="card">
        <div class="icon">
            <i class="fa-solid fa-user"></i>
                </div>
        <div class="info">
            <a href="reservation.php"><h3>Book your Table</h3></a>
        </div>
    </div></a>
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
          <script type="text/javascript" src="js.js">
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
            }</script>
            
           <ul class="social-icons">
            <li><a class="facebook" href="#" onclick="gofb()"><i class="fa-brands fa-square-facebook"></i></a></li>
            <li><a class="instagram"href="#"onclick="goinsta()"><i class="fa-brands fa-square-instagram"></i></a></li>
            <li><a class="twitter"href="#"onclick="gotwitt()"><i class="fa-brands fa-square-twitter"></i></a></li>
           </ul>
        
          
        </div>
      </div>
      <script>
        var str = "Primary Food Terms ..";
        document.write(str.link("https://www2.gov.bc.ca/assets/gov/employment-business-and-economic-development/business-management/liquor-regulation-licensing/guides-and-manuals/foodprimary-handbook.pdf"));
        </script><br/>
    </div>
    <div id="div1">
      <p>you can deliver and reserve through </p>
      </div>
    
        <ul id="myList"><li>our sites</li><li>phone no.</li></ul>
        
        
        <script>
        function myFunction()
        {
        var node=document.createElement("li");
        var textnode=document.createTextNode("our sites");
        node.appendChild(textnode);
        document.getElementById("myList").appendChild(node);
        }
        </script>
        
        



</footer>


</body>
</html>