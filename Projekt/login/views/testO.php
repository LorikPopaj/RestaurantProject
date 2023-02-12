<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login V1</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="../login/css/style.css">
    <style>
        *{
            font-family: sans-serif; 
            box-sizing: border-box;
        }

button{
    border: 1px solid cornflowerblue;
    border-radius: 10px;
    padding: 5px;
    background: rgb(113, 113, 219);
    font-weight: bold;
    color: white;
    margin-bottom: 5px;
}

.content-table {
  border-collapse: collapse;
  margin: 25px 0;
  font-size: 0.9em;
  width: 100%;
  border-radius: 5px 5px 0 0;
  overflow: hidden;
  box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
}

.content-table thead tr {
  background-color: rgb(113, 113, 219);
  color: #ffffff;
  text-align: left;
  font-weight: bold;
}

.content-table th,
.content-table td {
  padding: 12px 15px;
}

.link{
    text-decoration: none;
    color: red;
    font-size: 17px;
}
.first-link{
  color: black;
  font-size: 22px;
  padding-left: 50%;
  position: relative;
  top: 20px;
}
.top-links{
    font-size: 30px;
    color: black;
    padding: 30px;
    text-decoration: none;
}

.content-table tbody tr:nth-child(even){
    background-color: #f5f5f5;
}

@media(max-width: 700px){
    .content-table, .content-table tbody, .content-table tr, .content-table td{
        display: block;
        width: 100%;
    }
}

</style>
</head>
<body onscroll="disableScrolling()" onmousewheel="enableScrolling()" onclick="enableScrolling()">
	
		<div class="container" style="display:flex; flex-direction: column">
			<div class="wrap-login" style="justify-content: center; padding: 100px;">
            <div style="display:flex; align-items: center; justify-content: center; flex-direction: column;">
            <h2>Dashboard</h2>
            <a href="../../Home.php"><button>Home</button></a>
            <a href="createO.php"><button>Create</button></a>
            <div style="display: flex; flex-direction: row;">
            <a href="test.php"><button style="margin: 5px;">Users</button></a>
            <a href="test2.php"><button style="margin: 5px;">Slides</button></a>
            <a href="testC.php"><button style="margin: 5px;">Columns</button></a>

            <a href="testCoc.php"><button style="margin: 5px;">Cocktail</button></a>
            <a href="testO.php"><button style="margin: 5px;">Order</button></a>
            </div>
            </div>
			</div>
            <?php
            require_once '../controllers/OrderController.php';
            ?>
            <div>
                <table class="content-table">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Tel</th>
                            <th>Message</th>
                            <th>Address</th>
                            <th>Delete</th>
                            <th>Edit</th>
                        </tr>
                    </thead>
                    <tbody style="background-color: white; opacity: 70%">
                <?php
                $m = new OrderController;
                $messageList = $m->readData();
                foreach($messageList as $message): ?>
                <tr>
                    <td><?php echo $message['name']; ?></td>
                    <td><?php echo $message['tel']; ?></td>
                    <td><?php echo $message['message']; ?></td>
                    <td><?php echo $message['address']; ?></td>
                    <td><a href='deleteO.php?ID=<?php echo $message['ID'];?>'>Delete</td>
                    <td><a href='editO.php?ID=<?php echo $message['ID'];?>'>Edit</td>
                </tr>
                <?php endforeach; ?> 
                    </tbody>
                </table>
            </div>
		</div>
</body>
</html>

