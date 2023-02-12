<?php
require_once '../controllers/CocktailsController.php';
if(isset($_GET['ID'])){
    $columnID = $_GET['ID'];
}
$columns = new CocktailsController;
    $columns->delete($columnID);
?>