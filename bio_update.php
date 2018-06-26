<?php

session_start();

$username=$_SESSION['name'];

include 'conn.php';
$bio=addslashes($_POST['bio']);


$sql="UPDATE signup SET bio = '$bio' where name = '$username'";

$result=$conn->query($sql);

header("Location:profile.php?user=profile?bio_update=success");






?>