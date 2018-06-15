<?php
$servername = "localhost";
$username ="root";
$password ="";
$conn = mysqli_connect($servername,$username,$password);

if(!$conn){
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";

$sql ="CREATE database myDB";
if(mysqli_query($conn,$sql)){
    echo "Create database Successfully";
}
else {
    echo "Error creating database;";
}
mysqli_close($conn);

?>