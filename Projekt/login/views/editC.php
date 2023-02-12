<?php
require_once '../controllers/ColumnController.php';
if(isset($_GET['ID'])){
    $columnID = $_GET['ID'];
}

$columns = new ColumnController;
$currentColumn = $columns->edit($columnID);

if(isset($_POST['submit'])){
    $columns->update($_POST, $columnID);
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
        <input type="text" name="img" value="<?php echo $currentColumn['img'];?>">
        <br>
        Title:
        <input type="text" name="title" value="<?php echo $currentColumn['title'];?>">
        <br>
        Description:
        <input type="text" name="description" value="<?php echo $currentColumn['description'];?>">
        <br>
        <input type="submit" name="submit" value="Update">
    </form>
</div>
</div>
</div>
</body>