<?php
    include_once 'connect_To_database.php';

    $expession = $_POST['display'];
    $answer = $_POST['answer'];
    $filename = "myfile.txt";
    $fp = fopen($filename,'r');
    $filesize = filesize($filename);
    $username = fread($fp,$filesize);
    
    
    $sql = "insert into answers(username,expression,ans) values 
    ('$username','$expession','$answer')";

    if($conn->query($sql)){
        echo "Expession Inserted";
        header("Location:calculator.html");
    }else{
        echo "Expession not inserted";
}
?>