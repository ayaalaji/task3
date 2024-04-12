<?php
include 'connection.php';
$db = new Book();
$connection = $db->getConn();



    $id = $_GET['id'];

    $sql3 = "SELECT * FROM books WHERE id = '$id';";

    $result3 = mysqli_query($connection,$sql3);
    $row = mysqli_fetch_assoc($result3);
    $id = $row['id'];
    $name = $row['name'];
    $price = $row['price'];

    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.rtl.min.css" integrity="sha384-dpuaG1suU0eT09tx5plTaGMLBsfDLzUCCUXOY2j/LSvXYuG6Bqs43ALlhIqAJVRb" crossorigin="anonymous">
    <title>Editing Books</title>
</head>
<body>
  <div class="container">
      <form method="POST">
         <div class="form-floating mb-3" style="margin-top:5%;">
           <label for="floatingInput">New Book</label>
           <input type="text" class="form-control" name="name" id="floatingInput" placeholder="Add New Book" value="<?php echo $name;?>">
        </div>
        <div class="form-floating">
           <label for="floatingPassword">New Price</label>
          <input type="number" class="form-control" name="price" id="floatingPassword" placeholder="Add Price" value="<?php echo $price;?>">
        </div><br>
        <button type="submit" class="btn btn-warning" name="submit">Save</button>
      </form>
    </div>



    <!-- <form action="" method="POST">
        New Book: <input type="text" name="name" value="<?php echo $name;?>"><br><br>
        New Price: <input type="number" name="price" value="<?php echo $price;?>"><br><br>
        <input type="submit" name="submit" value="Save">
    </form> -->

<?php
         if(isset($_POST['submit'])){
             $new_name=$_POST['name'];
             $new_price=$_POST['price'];
             $sql4 = "UPDATE `books` SET  `name` = '$new_name ',`price` = '$new_price' WHERE `id` = $id; ";
             $result4=mysqli_query($connection,$sql4);
             if ($result4 == true){
                 echo "You edit book Successfully";
                 header("location:books.php");
               }
         }
      
?>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html> 