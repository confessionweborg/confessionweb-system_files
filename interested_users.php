<?php 

include 'conn.php';


$username=addslashes($_POST['name']);
$id = $_SESSION['id'];
$event_id = $_POST['event_id'];
session_start();

$username=$_SESSION['name'];
$id=$_SESSION['id'];
$sql="insert into eventusers(name,id,event_id)

values('$username','$id','$event_id')";

$result=$conn->query($sql);

header("Location:events.php");


?>