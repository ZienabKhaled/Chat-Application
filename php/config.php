<?php

$conn = mysqli_connect("localhost","root","","PhpChat");
if(!$conn){
    echo "Failed to connect";
}

?>

<!-- database has two tables:
1.users:
-id
-firstname
-lastname
-email
-password
-status
-image

2.messages:
-messages_id
-messages
-outgoing
-incoming -->
