<?php

session_start();

$username=$_SESSION['name'];

include 'conn.php';
$pass=password_hash($_POST['pass'], PASSWORD_BCRYPT);
$uname=$_POST['name'];
$facebook=$_POST['facebook'];
$linkedin=$_POST['linkedin'];
$email=$_POST['email'];
$number=$_POST['number'];
$bio=addslashes($_POST['bio']);
$position=addslashes($_POST['position']);
$state=$_POST['state'];
$country=$_POST['country'];


$sql="UPDATE signup SET facebook = '$facebook', linkedin = '$linkedin', email = '$email', pass = '$pass', number='$number', bio = '$bio', position = '$position', state = '$state', country = '$country' where name = '$username'";

$result=$conn->query($sql);

header("Location:profile.php?user=profile?attr=success");






?>