<?php
//Kết nối tới Database
    $host='localhost';
    $username='root';
    $password='';
    $dbname = "users";
    $conn=mysqli_connect($host,$username,$password,$dbname);
      if(!$conn){
          die('Could not Connect MySql Server:' .mysql_error());
        }
?>