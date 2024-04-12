<?php
include 'connection.php';
$db = new Book();
$connection = $db->getConn();



    $id = $_GET['id'];
    $sql5="DELETE FROM `books` WHERE id = '$id'";
    $result5=mysqli_query($connection,$sql5);
    if ($result5 == true) {
        echo "you deleted book successfully";
        header("location:books.php");
    }