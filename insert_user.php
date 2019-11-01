<?php
   
    include_once 'connect_To_database.php';
    
    $dbusername = $_POST['username'];
    $dbpassword = $_POST['password'];

    $sql = "INSERT INTO user(username,password) values ('$dbusername','$dbpassword')";

    if($conn->query($sql)){
        echo "SUCCESS";
    }else{
        echo "failed";
    }

    $conn->close();
?>