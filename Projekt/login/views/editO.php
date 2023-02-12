<?php
require_once '../controllers/OrderController.php';
if(isset($_GET['ID'])){
    $messageID = $_GET['ID'];
}

$messages = new OrderController;
$currentMessage = $messages->edit($messageID);

if(isset($_POST['submit'])){
    $messages->update($_POST, $messageID);
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
        Name:
        <input type="text" name="name" value="<?php echo $currentMessage['name'];?>">
        <br>
        Tel:
        <input type="text" name="tel" value="<?php echo $currentMessage['tel'];?>">
        <br>
        Message:
        <input type="text" name="message" value="<?php echo $currentMessage['message'];?>">
        <br>
        Address:
        <input type="text" name="address" value="<?php echo $currentMessage['address'];?>">
        <br>
        <input type="submit" name="submit" value="Update">
    </form>
</div>
</div>
</div>
</body>