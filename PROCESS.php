<?php
//import db connetion
include 'DB_Connect.php';


//check if form has submited
if (isset($_POST['register'])) {
    //get form data to variable
    $username = $_POST['username'];
    $email = $_POST['email'];
    $city = $_POST['city'];

    //check that valus is empty
    if (empty($username) || empty($email) || empty($city)) {
        echo "All fields are required";
    } else {
        //SEND IT TO DATABASE
        $sql = "INSERT INTO USER(Name,Email,City) VALUES('$username','$email','$city')";
        $response=$conn->query($sql);
        if($response){
            echo "Data inserted successfully";
            header('location:index.php');
        }
    }
}

//update
 if(isset($_POST['update'])){
    //get id from url 
    $id=$_GET['id'];
    //get form data to variable
    $username=$_POST['username'];
    $email=$_POST['email'];
    $city=$_POST['city'];

    
    $sql="UPDATE USER SET Name='$username',Email='$email',City='$city' WHERE STD='$id'";
    $response=$conn->query($sql);
    if($response){
        echo "Data updated successfully";
        header('location:index.php');
    }
 }


 
?>
