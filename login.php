<?php 
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $Username =$_POST['Username'];
    $Password =$_POST['Password'];
    
    $valid_username = 'user';
    $valid_password ='pass';
    if ($Username === $valid_username && $Password=== $valid_password){
        echo " You're Welcome " . htmlspecialchars($Username) . "!";
    } else {
        echo "Invalid Username or Password ";
    }
}
?>