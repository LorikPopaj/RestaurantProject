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
<section class="contact" id="contact">

    <h1 class="heading"> <span>OR</span>DER </h1>

    <div class="row">

        <iframe style="justify-content: left;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d454.
        1819173065307!2d20.53790478662401!3d42.384631732136995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.
        1!3m3!1m2!1s0x1353a5438981ba89%3A0x684475d4a3a04bf6!2sBardhi!5e0!3m2!1sen!2s!4v1639755850527!5m2!1sen!2s"
         width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        <form method="POST">

            <h3>Info</h3>
            <div class="inputBox">
                <span class="fas fa-user"></span>
                <input type="text" placeholder="Name" name="name">
            </div>
            <div class="inputBox">
                <span class="fas fa-envelope"></span>
                <input type="text" placeholder="Nr Tel" name="tel">
            </div>
            <div class="inputBox">
                <span class="fas fa-phone"></span>
                <input type="text" placeholder="Order" name="message">
            </div>
            <div class="inputBox">
                <span class="fas fa-phone"></span>
                <input type="text" placeholder="Address" name="address">
            </div>
            <input  type="submit" name="submit" value="Order" class="btn">
        </form>
       


    </div>

</section>



<?php   
include "sendorder.php";
include "Footer.php";
?>
</body>
</html>