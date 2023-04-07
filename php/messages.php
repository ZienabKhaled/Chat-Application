<?php
include_once("config.php");

if(isset($_POST['send'])){
    $outgoing = mysqli_real_escape_string($conn, $_POST['outgoing']);
    $incoming = mysqli_real_escape_string($conn, $_POST['incoming']);
    $incoming = $_POST['incoming'];
    $outgoing = $_POST['outgoing'];
    $messages = mysqli_real_escape_string($conn, $_POST['typingField']);

    if ($outgoing == $_SESSION['id']) {
        $query = "INSERT INTO `messages` (sender, receiver, message) VALUES ('$outgoing', '$incoming', '$message')";
    } else {
        $query = "INSERT INTO `messages` (sender, receiver, message) VALUES ('$incoming', '$outgoing', '$message')";
    }
    
    $saveMsgQuery = "INSERT INTO `messages` (outgoing,incoming,messages)
    VALUES('$outgoing','$incoming', '$messages')";
    $runSaveQuery = mysqli_query($conn, $saveMsgQuery);
    
    if(!$runSaveQuery){
        echo "query Failed";
    }

}
?>