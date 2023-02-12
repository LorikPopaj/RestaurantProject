<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hungry</title>

    
    <link rel="stylesheet" href="css/style.css">

</head>
<body>

<?php
include "Header.php";
?>

<section class="about" id="about">

    <h1 class="heading"> <span>About</span> Us </h1>

    <div class="row">

        <div class="image">
            <img style="height: 600px;"src="images/about.jpg" alt="">
        </div>

        <div class="content" style="color: white; ">
            <h1 style = "font-size: 30px ">Profile</h1>
            <br>
            <br>
            <h2 style = "font-size: 20px ">Username : <?php 
            echo $_SESSION['username']
            ?> </h2>
            <br>
            <br>
            <h2 style = "font-size: 20px ">Email : <?php 
            echo $_SESSION['email']
            ?> </h2>
            <br>
            <br>
            <h2 style = "font-size: 20px ">Role : <?php 
            echo $_SESSION['role']
            ?> </h2>
        </div>

    </div>

</section>



<?php
include "Footer.php";
?>
</body>
</html>