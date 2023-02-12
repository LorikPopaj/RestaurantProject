<?php
require_once '../controllers/UsersController.php';
if(isset($_GET['ID'])){
    $userID = $_GET['ID'];
}
$users = new UsersController;
    $users->delete($userID);

?>