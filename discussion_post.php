<?php 

include 'conn.php';

$dis_post=addslashes($_POST['dis_post']);
session_start();

$username=$_SESSION['name'];
$sql="insert into discussions(name,dis_post)

values('$username','$dis_post')";

$result=$conn->query($sql);

header("Location:discussions.php");


?>