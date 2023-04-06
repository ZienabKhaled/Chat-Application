<?php
session_start();
include_once("config.php");
$sql= "SELECT * FROM `users` WHERE id !='{$_SESSION['id']}' AND status='online' ";
$query=mysqli_query($conn,$sql);

if(!$query){
    echo "Failed";
}else{
    if(mysqli_num_rows($query) ==0){
        echo '<div id="errors">No users are available to chat</div>';
    }else if (mysqli_num_rows($query) >0){
        include_once("data.php");
    }else{
        echo "Failed while finding users";
    }
}
?>

