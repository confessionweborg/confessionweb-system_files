<?php

session_start();

$username=$_SESSION['name'];

include 'conn.php';
$position=addslashes($_POST['position']);


$sql="UPDATE signup SET position = '$position' where name = '$username'";

$result=$conn->query($sql);

header("Location:profile.php?user=profile?position_update=success");






?>