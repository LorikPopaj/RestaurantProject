
<?php 

        error_reporting(0);
        require_once "login/controllers/OrderController.php";

        $order = new OrderController;
        if(isset($_POST['submit'])){

            $order->order($_POST);
        }

        ?>