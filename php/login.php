<?php
    include_once("config.php");
    session_start();

    if(isset($_POST["login"])){
        $email=mysqli_real_escape_string($conn,$_POST["email"]);
        $password=md5($_POST["password"]);
        $emailQuery = "SELECT * FROM `users` WHERE email='$email'";
        $runEmailQuery = mysqli_query($conn,$emailQuery);
        if(!$runEmailQuery){
            echo "Failed to login";
        }else{
            if(mysqli_num_rows($runEmailQuery)>0){
                $passwordQuery= "SELECT * FROM `users` Where password ='$password' AND email='$email'";
                $runPassQuery = mysqli_query($conn,$passwordQuery);
                if(!$runPassQuery){
                    echo "Failed to login";
                }else{
                    if (mysqli_num_rows($runPassQuery)>0){
                        $fetchData=mysqli_fetch_assoc($runPassQuery);
                        $_SESSION['id']=$fetchData['id'];
                        $status="online";
                        $statusQuery = "UPDATE users SET status = '{$status}' WHERE id = '{$_SESSION["id"]}'";
                    $runStatusQuery = mysqli_query($conn, $statusQuery);
                    if(!$runStatusQuery){
                        echo "failed while updating status";
                        }else{
                            echo "success";
                        }
                        }else{
                            echo "Password not matched";
                        }
                }
                        }else{
                            echo "Invalid email address";
                        }
                    }
                }
?>