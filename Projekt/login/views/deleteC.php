<?php
require_once '../controllers/ColumnController.php';
if(isset($_GET['ID'])){
    $columnID = $_GET['ID'];
}
$columns = new ColumnController;
    $columns->delete($columnID);
?>