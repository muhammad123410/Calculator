<?php
    include_once 'connect_To_database.php';

    $filename = "myfile.txt";
    $fp = fopen($filename,'r');
    $filesize = filesize($filename);
    $username = fread($fp,$filesize);
    //fclose($filename);
    $sql = "SELECT expression,ans from answers
    where username='$username' ";
    $result = $conn->query($sql);
    
 

?>
<?php 
if(mysqli_num_rows($result)>0){
?>
<table>
    <thead>
        <tr>
            <td><?php echo $username?></td>
            <td></td>
        </tr>
    </thead>
    <tbody>
        <?php while($row = mysqli_fetch_array($result)){?>
    
    <tr>
        <td><?php echo $row['expression']?></td>
        <td><?php echo $row['ans']?></td>
    </tr>
    <?php }?>
    </tbody>
</table>
        

        <?php }?>