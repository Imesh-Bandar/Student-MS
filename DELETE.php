<?php

 include './DB_Connect.php';
    //get id from url
    $id=$_GET['id'];
    $sql="DELETE FROM USER WHERE STD='$id'";
    $response=$conn->query($sql);
    if($response){
        echo "Data deleted successfully";
        header('location:index.php');
    }
      
        
 


?>