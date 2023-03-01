<?php

// php code to Update data from mysql database Table

if(isset($_POST['update']))
{
    
   $hostname = "localhost";
   $username = "root";
   $password = "1234";
   $databaseName = "jdbcdemo";
   $port=3306;
   
   $connect = mysqli_connect($hostname, $username, $password, $databaseName,$port);
   
   // get values form input text and number
   
   $id = $_POST['id'];
   $age = $_POST['age'];
   $dob = $_POST['dob'];
   $number = $_POST['number'];
           
   // mysql query to Update data
   $query = "UPDATE `test` SET `age`='".$age."',`dob`='".$dob."',`number`= $number WHERE `id` = $id";
   
   $result = mysqli_query($connect, $query);
   
   if($result)
   {
       echo 'Data Updated';
   }else{
       echo 'Data Not Updated';
   }
   mysqli_close($connect);
}

?>