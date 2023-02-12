<?php
require_once '../controllers/OrderController.php';
if(isset($_GET['ID'])){
    $messageID = $_GET['ID'];
}
$messages = new OrderController;
    $messages->delete($messageID);
?>