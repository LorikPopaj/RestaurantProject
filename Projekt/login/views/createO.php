<?php
require_once '../controllers/OrderController.php';

$messages = new OrderController;
if(isset($_POST['submit'])){
    $messages->insert($_POST);
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
        Name:
        <input type="text" name="name">
        <br>
        Tel:
        <input type="text" name="tel">
        <br>
        Message:
        <input type="text" name="message">
        <br>
        Address:
        <input type="text" name="address">
        <br>
        <input type="submit" name="submit" value="Save">
    </form>
</div>
</div>
</div>
</body>