<?php
session_start();
?>

<header class="header">

    <a href="#" class="logo">
        <img src="images/logoo.png" alt="">
    </a>

    <nav class="navbar" style=" text-align: center;">
        <a href="Home.php">Home</a>
        <a href="#menu">menu</a>
        <a href="#cocktails">cocktails</a>
        <a href="#offers">offers</a>
        <a href="#specials">specials</a>
        <a href="AboutUs.php">About Us</a>
        <a href="ContactUs.php">Contact Us</a>
        <?php
          if(isset($_SESSION['email'])){
            if($_SESSION['role'] == "admin"){?>
                <li class="nav-list-item"><a href="login/views/test.php" class="nav_link">Dashboard</a></li>
            <?php }
          }

          ?>
    </nav>
    <nav>
        <ul class="nav_list">
        <?php
          if(isset($_SESSION['email'])){?>
            <li class="nav_list-item"><a href="profile.php" class="nav_link nav_link--btn"><?php echo $_SESSION['username'] ?></a></li>
            <li class="nav_list-item"><a href="login/login/logout.php" class="nav_link nav_link--btn nav_link--btn--highlight">Log Out</a></li>
          <?php }else { ?>
            <li class="nav_list-item"><a href="login/login/index.php" class="nav_link nav_link--btn">Login</a></li>
            <li class="nav_list-item"><a href="login/login/create.php" class="nav_link nav_link--btn nav_link--btn--highlight">Join</a></li>
          <?php } ?>
          
        </ul>
      </nav>
   
</header>