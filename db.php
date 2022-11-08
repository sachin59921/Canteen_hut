<?php

$conn = mysqli_connect("localhost","root","","orderdetail");

//check connection
if($conn == false){
    die("ERROR: could not connect."
    .mysqli_connect_error());
}

$name = $_REQUEST['name'];
$designation = $_REQUEST['designation'];
$orderdetail = $_REQUEST['orderdetail'];
$mobilenumber = $_REQUEST['mobilenumber'];
$timenow =  $_REQUEST['timenow'];

$sql = "INSERT INTO userdata(name, designation, orderdetail, mobilenumber, timenow) VALUES('$name', '$designation','$orderdetail', $mobilenumber , '$timenow')";

if(mysqli_query($conn, $sql))
{
    header("Location: index.html");
    exit(0);
}
else
{
    echo "Error: ";
    exit(0);
}
?>