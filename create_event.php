<?php 

include 'conn.php';

$ename=addslashes($_POST['ename']);
$location=addslashes($_POST['location']);
$etime=addslashes($_POST['etime']);
$description=addslashes($_POST['description']);
session_start();

$username=$_SESSION['name'];
$sql="insert into events(name,ename,location,etime,description)

values('$username','$ename','$location','$etime','$description')";

$result=$conn->query($sql);

header("Location:events.php");


?>