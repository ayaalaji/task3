<?php
class User{
    public $username;
    public $phone;

    function __construct($username,$phone){
        $this->username=$username;
        $this->phone=$phone;
    }
    
}
if($_SERVER['REQUEST_METHOD']=='POST'){
    $name=validation($_POST['username']);
    $price=validation($_POST['phone']);
     
    $user1= new User($username,$phone);
}
function validation($data){
    $data = htmlspecialchars($data);
    $data = trim($data);
    $data = stripslashes($data);
}
header("location:books.php");
    ?>
