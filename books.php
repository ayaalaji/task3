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
    <title>show list of books</title>
</head>
<body>
<div class="container">
<a href="add-book.php" class="btn btn-secondary" style="width: 100%;font-size:20px;margin-top:20px;">Add Book</a>
<table class="table table-striped"  style="width:600px;margin:auto;font-size:20px;">
            <thead>
                <tr>
                    <th scope="col">#</th>  
                    <th scope="col">Name</th>
                    <th scope="col">Price</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
            <?php
                $i = 1;
                $sql1 = "SELECT * FROM `books`";
                $result1 = mysqli_query($connection,$sql1);
            
                if ($result1 == true) {
                    $rows = mysqli_num_rows($result1);
                    if ($rows > 0) {
                        while ($rows = mysqli_fetch_assoc($result1)) {
                            $id = $rows['id'];
                            $name = $rows['name'];
                            $price = $rows['price'];
                            ?>
                            <tr>
                            <th scope = "row"><?php echo $i++;?></th>
                            <td style="text-align:center;"><?php echo $name;?></td>
                            <td style="text-align:center;"><?php echo $price;?></td>
                            <td>
                                <a href="edit-book.php? id=<?php echo $id;?>" class="btn btn-success">edit</a>
                                <a href="delete-book.php? id=<?php echo $id;?>" class="btn btn-dark">delete</a>
                            </td>
                        </tr>
                        <?php
                        }
                    }
                }
                ?>
            </tbody>
        </table>
    </div> 
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>