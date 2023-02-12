<?php
require_once '../controllers/UsersController.php';
if(isset($_GET['ID'])){
    $userID = $_GET['ID'];
}

$users = new UsersController;
$currentUser = $users->edit($userID);

if(isset($_POST['submit'])){
    $users->update($_POST, $userID);
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
        Name and Surname:
        <input type="text" name="fname" value="<?php echo $currentUser['fname'];?>">
        <br>
        Username:
        <input type="text" name="username" value="<?php echo $currentUser['username'];?>">
        <br>
        Email:
        <input type="email" name="email" value="<?php echo $currentUser['email'];?>">
        <br>
        Password:
        <input type="password" name="pass" value="<?php echo $currentUser['pass'];?>">
        <br>
        <input type="submit" name="submit" value="Update">
    </form>
</div>
</div>
</div>
</body>