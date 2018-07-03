<?php

session_start();

include 'conn.php';

$uname=$_POST['name'];
$email=$_POST['email'];
$pass=password_hash($_POST['pass'], PASSWORD_BCRYPT);




$sql="SELECT * from signup WHERE name='$uname' AND pass='$pass'";

$result=$conn->query($sql);


$_SESSION['name']=$_POST['uname'];


header("LOCATION:home.php?profile=user?login=success?id='$id'");






?>