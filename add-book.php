<?php
 include 'connection.php';
$db = new Book();
$connection = $db->getConn();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>ADD BOOK</title>
</head>
<body>
    <div class="container">
      <form method="POST">
    <div class="form-floating mb-3" style="margin-top:5%;">
    <label for="floatingInput">Add New Book</label>
      <input type="text" class="form-control" name="name" id="floatingInput" placeholder="Add New Book">
    </div>
    <div class="form-floating">
      <label for="floatingPassword">Add Price</label>
      <input type="number" class="form-control" name="price" id="floatingPassword" placeholder="Add Price">
    </div><br>
    <button type="submit" class="btn btn-warning" name="submit">Save</button>
    </form>
    </div>


   <?php
      class Addition{
        public $name;
        public $price;
        function __construct($name,$price)
        {
            $this->name=$name;
            $this->price=$price;
        }
      }
      if($_SERVER['REQUEST_METHOD']=='POST'){
      $name=$_POST['name'];
      $price=$_POST['price'];
      $addNewBook=new Addition($name,$price);
      if(isset($_POST['submit'])){
        $sql2= "INSERT INTO `books` (`name`,`price`) VALUE ('$name','$price');";
        $result2=mysqli_query($connection,$sql2);
        if ($result2 == true){
            echo "You added book Successfully";
            header("location:books.php");
        }
      }
    }
   ?>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>