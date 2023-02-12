<?php
require_once '../controllers/CocktailsController.php';

$columns = new CocktailsController;
if(isset($_POST['submit'])){
    $columns->insert($_POST);
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
        <h2>Create</h2>
<div>
    <form method="POST">
        Image:
        <input type="file" name="img">
        <br>
        Title:
        <input type="text" name="title">
        <br>
        Description:
        <input type="text" name="description">
        <br>
        <input type="submit" name="submit" value="Save">
    </form>
</div>
</div>
</div>
</body>