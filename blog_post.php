<?php 

include 'conn.php';
$btitle=addslashes($_POST['btitle']);
$bpost=addslashes($_POST['bpost']);
session_start();

$username=$_SESSION['name'];
$sql="insert into blogpost(name,btitle,bpost)

values('$username','$btitle','$bpost')";

$result=$conn->query($sql);

header("Location:user_blog.php");

?>