<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Registration</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="stylesheet" href="style.css"/>
    <script src="onsubmit_event.js"></script>

    
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


<?php
    require('db.php');
    // When form submitted, insert values into the database.
    if (isset($_REQUEST['username'])) {
        // removes backslashes
        $username = stripslashes($_REQUEST['username']);
        //escapes special characters in a string
        $username = mysqli_real_escape_string($con, $username);
        $email    = stripslashes($_REQUEST['email']);
        $email    = mysqli_real_escape_string($con, $email);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($con, $password);
        $create_datetime = date("Y-m-d H:i:s");
        $query    = "INSERT into `users` (username, password, email, create_datetime)
                     VALUES ('$username', '$password', '$email', '$create_datetime')";
        $result   = mysqli_query($con, $query);
        if ($result) {
            echo "<div class='form'>
                  <h3>You are registered successfully.</h3><br/>
                  <p class='link'>Click here to <a href='login.php'>Login</a></p>
                  </div>";
        } else {
            echo "<div class='form'>
                  <h3>Required fields are missing.</h3><br/>
                  <p class='link'>Click here to <a href='registration.php'>registration</a> again.</p>
                  </div>";
        }
    } else {
?>
   
    <form onsubmit="return ValidationEvent()" class="form" action="" method="post">
        <h1 class="login-title">Registration</h1>
        <input type="text" id="username" class="login-input" name="username" placeholder="Username" required />
        <input type="email" id="email" class="login-input" name="email" placeholder="Email Adress" required>
        <input type="password" id="password" class="login-input" name="password" placeholder="Password" required>
        <input type="submit" name="submit" value="Register" class="submit-btn">
        <p class="link"><a href="login.php">Click to Login</a></p>
    </form>
   
<?php
    }
?>



</body>
</html>