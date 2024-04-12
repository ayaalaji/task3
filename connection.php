<?php
class Book{
     public $conn;
     public $servername='localhost';
     public $username='root';
     public $password='';
     public $dbasename='mybook';
     function __construct()
     {
          $this->conn=mysqli_connect('localhost','root','','mybook');
          if(mysqli_connect_error()){
              die("connection is faild");
          }
     }
     public function getConn(){
          return $this->conn;
     }
     
}
// $book=new Book();


        
