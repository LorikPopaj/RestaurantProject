<?php
error_reporting(0);
require_once '../controllers/UsersController.php';
$users = new UsersController;
    if(isset($_POST['submit'])){
        $FNvalid = false;
        $Uvalid = false;
        $Evalid = false;
        $Pvalid = false;
        $CPvalid = false;

        $fullname = $_POST['fname'];
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['pass'];
        $cpassword = $_POST['cpass'];

        $regexFN = "/^[A-Z]{1}[a-zA-z]*\s{1}[A-Z]{1}[a-zA-z\s]*$/";
        $regexU = "/^.{1,20}$/";
        /* regular expression rfc 5322 not working for PHP
        "/^(?:[a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*|"(?:[\x01-\x08\x0b\x0c\x0e-\x1f\x21\x23-\x5b\x5d-\x7f]|\\[\x01-\x09\x0b\x0c\x0e-\x7f])*")@(?:(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?|\[(?:(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\.){3}(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?|[a-z0-9-]*[a-z0-9]:(?:[\x01-\x08\x0b\x0c\x0e-\x1f\x21-\x5a\x53-\x7f]|\\[\x01-\x09\x0b\x0c\x0e-\x7f])+)\])$/";*/
        $regexP = "/^(?=.*[0-9])(?=.*[a-z])(?=.*[A-Z]).{4,20}$/";
        $validateFN = preg_match($regexFN, $fullname);
        $validateU = preg_match($regexU, $username);
        $validateE = filter_var($email, FILTER_VALIDATE_EMAIL);
        $validateP = preg_match($regexP, $password);

        if($validateFN && $validateU && $validateE && $validateP && $cpassword == $password){
            $u = new UsersController;
            $usersList = $u->readData();
            $check = true;
            foreach($usersList as $user){
                if($password == $user['pass'] && $username == $user['username']){ 
                    $check = false;
                }
            } 
            if($check){
                $users->register($_POST);
            } else { 
                ?><script>
                document.getElementById("error").style = 'background-color: red; text-align: center; color: white; margin-bottom: 5%;margin-left: 10%; padding: 0%; height: 30px !important; width: 80% !important';
                document.getElementById("error").classList.add("input");
                document.getElementById("error").textContent = 'Account already exists!';
                </script>
            <?php 
            }
        }
    if (!$validateFN){
        ?><script>
        console.log('Full Name empty');
        document.getElementById('fullname').style.border ='2px solid red';
        document.getElementById('not-valid-fullname').textContent = 'Both Name and Surname must start with Uppercase and be separated';
        </script>
    <?php } else{
        $FNvalid = true; 
        ?><script>
        document.getElementById('not-valid-fullname').innerHTML = '';
        document.getElementById('fullname').style.border ='0px';
        </script>
    <?php }
    if (!$validateU){ 
        ?><script>
        console.log('Username empty');
        document.getElementById('username').style.border ='2px solid red';
        document.getElementById('not-valid-username').textContent = 'Username must be less that 20 characters long';
        </script>
    <?php } else{ 
        $valid = true; 
        ?><script>
        document.getElementById('not-valid-username').innerHTML = '';
        document.getElementById('username').style.border ='0px';
        </script>
    <?php } 
    if (!$validateE){ 
        ?><script>
        console.log('Email empty');
        document.getElementById('email').style.border ='2px solid red';
        document.getElementById('not-valid-email').textContent = 'Email not valid';
        </script>
    <?php } else{
        $Evalid = true; 
        ?><script>
        document.getElementById('not-valid-email').innerHTML = '';
        document.getElementById('email').style.border ='0px';
        </script>
    <?php } 
    if (!$validateP){ 
        ?><script>
        console.log('Password empty');
        document.getElementById('password').style.border ='2px solid red';
        document.getElementById('not-valid-password').textContent = 'Password must contain Uppercase letter, Digit and from 4 to 50 characters long';
        </script>
    <?php } else{
        $Pvalid = true; 
        ?><script>
        document.getElementById('not-valid-password').innerHTML = '';
        document.getElementById('password').style.border ='0px';
        </script>
    <?php } 
    if ($cpassword != $password || ($cpassword == '' || $cpassword == null)){ 
        ?><script>
        console.log('CPassword empty');
        document.getElementById('cpassword').style.border ='2px solid red';
        document.getElementById('not-valid-cpassword').textContent = 'Passwords do not match';
        </script>
    <?php } else{
        $CPvalid = true; 
        ?><script>
        document.getElementById('not-valid-cpassword').innerHTML = '';
        document.getElementById('cpassword').style.border ='0px';
        </script>
    <?php }    
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