<?php
$servername="localhost";
$username='root';
$password='';
$dbname="website";

$fname=$_POST['fname'];
$lname=$_POST['lname'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$service=$_POST['service'];

$conn= new mysqli($servername,$username,$password,$dbname);

if(!$conn){
    die("Connection failes:".mysqli_connect_error());
    exit();
}
$sql="INSERT INTO client(fname,lname,email,phone,service) VALUES('$fname','$lname','$email','$phone','$service')";

if(mysqli_query($conn,$sql)===TRUE){
    echo'<script> alert("submitted successfully");
    window.location.href="client.html";</script>';
    exit();
}else{
    echo"Error:".mysqli_error($conn);
}
$conn->close();
?>