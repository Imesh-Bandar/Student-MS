<?php
//create database connection
$SERVERNAME='localhost';
$USERNAME='root';
$PASSWORD='admin';
$DBNAME='sms';

//create connection
$conn=new mysqli($SERVERNAME,$USERNAME,$PASSWORD,$DBNAME);

//check connection
if($conn->connect_error){
    die("Connection failed: ".$conn->connect_error);
}else{
    //echo "Connection successful";
    return $conn;
}

?>