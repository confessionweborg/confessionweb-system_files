<?php

include 'conn.php';
$uname=$_POST['name'];
$pass=password_hash($_POST['pass'], PASSWORD_BCRYPT);
$email=$_POST['email'];
$number=$_POST['number'];
$sex=$_POST['sex'];
$age=$_POST['age'];
$state=$_POST['state'];
$country=$_POST['country'];


$sql="insert into signup(name,pass,email,number,sex,age,state,country)

values('$uname','$pass','$email','$number','$sex','$age','$state','$country')";

$result=$conn->query($sql);

header("Location:confirm.php");






?>