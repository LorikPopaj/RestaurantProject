<?php
require_once '../controllers/SlideController.php';
if(isset($_GET['ID'])){
    $slideID = $_GET['ID'];
}

$slides = new SlideController;
$currentSlide = $slides->edit($slideID);

if(isset($_POST['submit'])){
    $slides->update($_POST, $slideID);
}
?>
<!DOCTYPE html>
<head>
<link rel="stylesheet" type="text/css" href="../login/css/style.css">
<style>
    input{
        border: solid 1px black;
        border-radius: 10px;
        padding: 2px;
        margin-bottom: 1%;
    }
    </style>
</head>
<body>
    <div class="container" style="justify-content: center;">
        <div class="wrap-login" style="padding: 100px; flex-direction: column; text-align: center;">
        <h2>Edit</h2>
<div>
    <form method="POST">
        Image:
        <input type="text" name="img" value="<?php echo $currentSlide['img'];?>">
        <br>
        <input type="submit" name="submit" value="Update">
    </form>
</div>
</div>
</div>
</body>