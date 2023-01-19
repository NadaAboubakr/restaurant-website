<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="stylesheet" href="style.css">
    <script type="text/javascript">
      var today=new Date();
      var time = today.getTimezoneOffset();
      if (time>=6)
      {
      document.write("<a href='Dinner.html'></a>");
      }
     
      </script>

    <title>Menu</title>
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
        
    <div class="menu">
        
    <div class="menu-header">
        <div class="menu-links"><a href="#lunch">Lunch</a></div>
        <div class="menu-links"><a href="#dinner">Dinner</a></div>
        <div class="menu-links"><a href="#drinks">Drinks </a></div>
        <div class="menu-links"><a href="#desserts">Desserts  </a></div>

        
    </div>  

    <div class="menu-pic"><img src="images/intro.jpg" width="100%" >
   </div>
    
            

     <div id="lunch"><h1>Lunch</h1>

            <div class="menu-category">
            <h2 class="txt-red-centre">Salads</h2>
                <div class="menu-items"><h4>Z-Salad</h4></div>
                    mixed greens topped with an assortments of mixed vegetables | 50LE
                <div class="menu-items"><h4>Zeasar Salad</h4></div>
                    Crisp romaine lettuce served with croutons | 60LE
                <div class="menu-items"><h4>superfood Salad</h4></div>
                    cucumber grilled, corn ,avocado | 90LE
                <div class="menu-items"><h4>crispy duck Salad</h4></div>
                    mooli,chilli,ginger | 50LE
                </div>     
            </div> 
    
            <div class="menu-category">
                <h2 class="txt-red-centre">Pizza</h2>                
                <div class="menu-items"><h4>Marghretta</h4></div>
                Green pepper+tomatoes+Mozzarilla cheese | 150LE
                <div class="menu-items"><h4>Stoon</h4></div>
                Chedar cheese+Flamenco+Mozzarilla cheese | 120LE
                <div class="menu-items"><h4>Deniro</h4></div>
                Green pepper+tomatoes+Mozzarilla cheese +Mushroom +Onion | 160LE
                <div class="menu-items"><h4>Montana</h4></div>
                Green pepper+tomatoes+Mozzarilla cheese | 140LE
            </div>

            <div class="menu-category">
                <h2 class="txt-red-centre">Pasta</h2>            
                <div class="menu-items"><h4>Spagetti Aglio,Olio e Peperoncino</h4></div>
                Garlic+Olive Oil+chilli | 90LE
                <div class="menu-items"><h4>Spagetti Al pormodoro e basillico </h4></div>
                Fresh tomato+Sauce+Garlic+Basil | 80LE
                <div class="menu-items"><h4>Penne all'Arrabbiata</h4></div>
                penne with arrabbiata sauce| 50LE 
                </div>

            <div class="menu-category">
                <h2 class="txt-red-centre">Main Course</h2>            
                <div class="menu-items"><h4>Grilled Fish and Potatoes | 90LE</h4></div>
                <div class="menu-items"><h4>Chicken and Rice | 120LE</h4></div>
                <div class="menu-items"><h4>Turkey and Ham pie | 130LE</h4></div>
                <div class="menu-items"><h4>Steak | 140LE</h4></div>
            </div>
    
    
</div> 
<script>

  (function() {
    var start = new Date;
    start.setHours(8, 0, 0); 
  
    function pad(num) {
      return ("0" + parseInt(num)).substr(-2);
    }
  
    function tick() {
      var now = new Date;
      if (now > start) { // too late, go to tomorrow
        start.setDate(start.getDate() + 1);
      }
      var remain = ((start - now) / 1000);
      var hh = pad((remain / 60 / 60) % 60);
      var mm = pad((remain / 60) % 60);
      var ss = pad(remain % 60);
      document.getElementById('time').innerHTML =
        hh + ":" + mm + ":" + ss;
      setTimeout(tick, 1000);
    }
  
    document.addEventListener('DOMContentLoaded', tick);
  })();</script>

<div id="dinner"><h1>Dinner</h1>
  <center><p>this menu opens at 6pm after:</p>
  <span id=time></span>  </center>


        <div class="menu-category">
            <h2 class="txt-red-centre">Salads</h2>
                <div class="menu-items"><h4>Z-Salad</h4></div>
                    mixed greens topped with an assortments of mixed vegetables | 50LE
                <div class="menu-items"><h4>Zeasar Salad</h4></div>
                    Crisp romaine lettuce served with croutons | 60LE
                <div class="menu-items"><h4>superfood Salad</h4></div>
                    cucumber grilled, corn ,avocado | 90LE
                <div class="menu-items"><h4>crispy duck Salad</h4></div>
                    mooli,chilli,ginger | 50LE
        </div>     

       

        <div class="menu-category">
            <h2 class="txt-red-centre">Burgers</h2>                
            <div class="menu-items"><h4>M.C. Burger | 80LE</h4></div>
            <div class="menu-items"><h4>Stoon | 120LE</h4></div>
            <div class="menu-items"><h4>CowBoy | 160LE</h4></div>
            <div class="menu-items"><h4>Montana | 140LE</h4></div>
            <div class="menu-items"><h4>Krapow | 140LE</h4></div>
        </div>
    
        


        <div class="menu-category">
            <h2 class="txt-red-centre">Specialities</h2>                
            <div class="menu-items"><h4>Crispy chicken | 90LE</h4></div>
            <div class="menu-items"><h4>meatball | 120LE</h4></div>
            <div class="menu-items"><h4>poached eggs | 130LE</h4></div>
        </div>

 <div class="menu-category">
            <h2 class="txt-red-centre">Sides</h2>   
            <div class="menu-items"><h4>Madeira Glazed Mushrooms</h4></div>
            fresh herbs, sour cream   |   14
            <div class="menu-items"><h4>Beets</h4></div>
            compressed apple, aged goat cheese   |   14
            <div class="menu-items"><h4>Crispy Brussel Sprouts</h4></div>
            maple bacon   |   14
            <div class="menu-items"><h4>Mini Yukons</h4></div>
            Ricotta Salata, black pepper vinaigrette   |   12
            <div class="menu-items"><h4>French Fries</h4></div>
            10
            <div class="menu-items"><h4>Add Chicken</h4></div>
            16
            <div class="menu-items"><h4>Add Salmon</h4></div>
            18
        </div>
</div> 



<div id="drinks"><h1>Drinks</h1>


    <div class="menu-category">
        <h2 class="txt-red-centre">Hot Drinks</h2>   
            <div class="menu-items"><h4>Tea | 30LE</h4></div>
            <div class="menu-items"><h4>Espresso | 50LE</h4></div>
            <div class="menu-items"><h4>Cappucino | 40LE</h4></div>
            <div class="menu-items"><h4>Macchiato | 60LE</h4></div>
            <div class="menu-items"><h4> Nescafe | 20LE</h4></div>
            <div class="menu-items"><h4>Mocha | 60LE</h4></div>
            <div class="menu-items"><h4>Hot Cocoa | 20LE</h4></div>
            <div class="menu-items"><h4>Chailatte | 35LE</h4></div>
            <div class="menu-items"><h4>Coofee mix | 35LE</h4></div>
    </div>


    <div class="menu-category">
         <h2 class="txt-red-centre">Juice</h2>   
            <div class="menu-items"><h4>Mango | 30LE</h4></div>
            <div class="menu-items"><h4>grapes | 50LE</h4></div>
            <div class="menu-items"><h4>apple | 40LE</h4></div>
            <div class="menu-items"><h4> Banana | 60LE</h4></div>
            <div class="menu-items"><h4>Guava | 20LE</h4></div>
            <div class="menu-items"><h4> Orange | 60LE</h4></div>
            <div class="menu-items"><h4>Ice Chocolate | 20LE</h4></div>
            <div class="menu-items"><h4>Pineapple | 35LE</h4></div>
            <div class="menu-items"><h4>Strawberry | 35LE</h4></div>
    </div>


    <div id="desserts"><h1>Desserts</h1>

      <div class="menu-category">
        <h2 class="txt-red-centre">Cakes</h2>                
            <div class="menu-items"><h4>Grapes cake | 90LE</h4></div>
            <div class="menu-items"><h4>Apple cake | 80LE</h4></div>
            <div class="menu-items"><h4>Orange Cakes | 50LE</h4></div>
      </div>


      <div class="menu-category">
        <h2 class="txt-red-centre">Ice cream</h2>    
            <div class="menu-items"><h4> Mango | 30LE</h4></div>
            <div class="menu-items"><h4>grapes | 50LE</h4></div>
            <div class="menu-items"><h4>apple | 40LE</h4></div>
            <div class="menu-items"><h4>Banana | 60LE</h4></div>
            <div class="menu-items"><h4>Guava | 20LE</h4></div>
            <div class="menu-items"><h4>Orange | 60LE</h4></div>
            <div class="menu-items"><h4>Ice Chocolate | 20LE</h4></div>
            <div class="menu-items"><h4>Pineapple | 35LE</h4></div>
            <div class="menu-items"><h4>Strawberry | 35LE</h4></div>
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
        <!--accessing anchors-->
        <center>
          <a name="dinner" href="#dinner">Dinner</a><br />
          <a name="drinks"href="#drinks" >Drinks</a><br />
          <a name="lunch" href="#lunch" >lunch</a><br /><p>Number of categories:
            <script type="text/javascript">
              document.write(document.anchors.length,"<br/>");
              </script></p></center>
       

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
          
      </div>
    </div>
</footer>

</body>
</html>