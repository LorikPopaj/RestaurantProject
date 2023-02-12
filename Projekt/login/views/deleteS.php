<?php
require_once '../controllers/SlideController.php';
if(isset($_GET['ID'])){
    $slideID = $_GET['ID'];
}
$slides = new SlideController;
    $slides->delete($slideID);
?>