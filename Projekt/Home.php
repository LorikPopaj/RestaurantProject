<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hungry</title>

    <link rel="icon" href="images/logoo.png">
    <link rel="stylesheet" href="css/style.css">
    
</head>
<body>
<?php
include "Header.php";
?>
<section class="home" id="home">

    <div class="content">
        <h3 class="ballina" >Hungry</span> </h3>
        <p class="ballina">Nothing Brings People Together Like Good Food</p>
        <a class="btn" target="_blank" href="ContactUs.php">ORDER</a>
    </div>

</section>

<section class="menu" id="menu"> 
<h1 class="heading"> Me<span>nu</span> </h1>
    <div class="box-container" style=" text-align: center;" >
    <?php
    error_reporting(0);
      require_once 'login/controllers/ColumnController.php';
      $columns = new ColumnController;
      $cdata = $columns->readData();
      for($i=0; $i < count($cdata); $i++){
    echo '
    <a style="text-decoration: none; font-size: 2rem; color: #eee;"><div class="box" >
      <img src="'.$cdata[$i]['img'].'" width="100%" height="100%">
      <h3 style="color: #F96713;">'.$cdata[$i]['title'].'</h3>
      <p>
      '.$cdata[$i]['description'].'
      </p>
    </div>
  </a>';
    }
    ?>
  </div> </section>



  <section class="products" id="cocktails"> 
<h1 class="heading"> Co<span>cktails</span> </h1>
    <div class="box-container" style=" text-align: center;" >
    <?php
    error_reporting(0);
      require_once 'login/controllers/CocktailsController.php';
      $cocktails = new CocktailsController;
      $cdata = $cocktails->readData();
      for($i=0; $i < count($cdata); $i++){
    echo '<div class="box">
            
    <div class="image">
        <img src="'.$cdata[$i]['img'].'" alt="">
    </div>
    <div class="content">
        <h3 class="heading">'.$cdata[$i]['title'].'</h3>
        <div class="price">'.$cdata[$i]['description'].'</div>
    </div>
</div>';
    }
    ?>
  </div> </section>

  
<section class="review" id="offers"> 
<box>
<h1 class="heading"> Special<span>Offers</span> </h1>

    <div class="columns "style="display: flex; justify-content: center; width:100%; height: 500px">
    
        <?php
          error_reporting(0);
          require_once 'login/controllers/SlideController.php';
          $slides = new SlideController;
          $slideshow = $slides->readData();
          for($i=0; $i < count($slideshow); $i++){
          echo '          
          <img class="slideshowimg" style="display: none; width: 40%;" src="'.$slideshow[$i]['img'].'" alt="Img_'.[$i].'">
          ';
        }
        ?>
        
     
      <div class="home-about">
        <input id="radio1" class="radios" style="position:relative" type="radio" disabled>
        <input id="radio2" class="radios" style="position:relative" type="radio" disabled>
        <input id="radio3" class="radios" style="position:relative" type="radio" disabled>
      </div> 
    <box>
    </section>



<section class="blogs" id="specials">

    <h1 class="heading"> Our <span> Specialties</span> </h1>

    <div class="box-container">

        <div class="box">
            <div class="image">
                <img src="images/specialitet1.jpg" alt="">
            </div>
            <div class="content">
                <a href="#" class="title"> </a>
                <span>Lobster</span>
                <p>Fried lobster filled with vegetables and cheese</p>
                <a href="Lobster.php" class="btn">Read more</a>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="images/specialitet2.jpg" alt="">
            </div>
            <div class="content">
                <a href="#" class="title"></a>
                <span>Pork tenders</span>
                <p>Pork tender rolls with vegetables and sauce</p>
                <a href="PorkTenders.php" class="btn">Read more</a>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="images/specialitet3.jpg" alt="">
            </div>
            <div class="content">
                <a href="#" class="title"></a>
                <span>Beef tartar</span>
                <p>Beef tartar with beetroot sauce</p>
                <a href="BeefTartar.php" class="btn">Read more</a>
            </div>
        </div>

    </div>

</section>


<?php
include "Footer.php";
?>

</body>
</html>