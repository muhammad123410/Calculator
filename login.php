<?php
    include_once 'connect_To_database.php';

    $username = $_POST['username'];
    $password = $_POST['password'];
    
    $filename = "myfile.txt";
    $fp = fopen($filename,'w');
    fwrite($fp,$username);


    $sql = "SELECT username,password from user 
    where username='$username' and password='$password'";

    $result = $conn->query($sql);
    //echo mysqli_num_rows($result);

    if(mysqli_num_rows($result) == 1){
       //echo "welcome to company calculator page";
       header('Location:calculator.html');
       header($username);


    }else{
       // echo "wrong username or password";
        header('Location:login.html');
    }
    
    



    
?>