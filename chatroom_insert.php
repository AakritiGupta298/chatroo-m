<?php
session_start();
        
$link = mysqli_connect("localhost","root","","blog");
        
         if(mysqli_connect_error()){
           
             die("Database connection error");

    }
    
    $sender = $_SESSION['username'];
    $text=$_POST['msg'];
    $query = "INSERT INTO `chat` (`username` , `message`) VALUES ('$sender' , '$text')";
    mysqli_query($link, $query);

?>