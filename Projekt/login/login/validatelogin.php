<?php
    if(isset($_POST['login'])){
        if(empty($_POST['email']) || empty($_POST['pass'])){
            ?><script>
                document.getElementById("error").style = 'background-color: red; text-align: center; color: white; margin-bottom: 5%;margin-left: 10%; padding: 0%; height: 30px !important; width: 80% !important';
                document.getElementById("error").classList.add("input");
                </script>
            <?php echo 'Fill all fields please!';
        } else {
            $email = $_POST['email'];
            $pass = $_POST['pass'];

            require_once '../controllers/UsersController.php';
            $u = new UsersController;
            $usersList = $u->readData();
            $i=0;

            foreach($usersList as $user){
                $i++;
                if($email == $user['email'] && $pass == $user['pass']){
                    echo $email;
                    echo $pass;
                    
                    session_start();
                    $_SESSION['email'] = $email;
                    $_SESSION['username'] = $user['username'];
                    $_SESSION['pass'] = $pass;
                    $_SESSION['role'] = $user['role'];

                    header("Location: ../../Home.php");
                }else {
                    if($i == sizeof($usersList)){
                        ?><script>
                        document.getElementById("error").style = 'background-color: red; text-align: center; color: white; margin-bottom: 5%;margin-left: 10%; padding: 0%; height: 30px !important; width: 80% !important';
                        document.getElementById("error").classList.add("input");
                    </script>
                        <?php
                        echo 'Incorrect email or password!';
                    }
                }
            }
        }
    }

?>
<script>
function disableScrolling() {
    setTimeout(function() {
        document.body.style.overflow = 'hidden';
    }, 1000);
}
  
function enableScrolling() {
    document.body.style.overflow = '';
}


</script>