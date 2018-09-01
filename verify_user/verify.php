<?php 

session_start();

include 'conn.php';

$_SESSION['name']=$_POST['uname'];

$id = isset($_GET['id']);


$result = mysqli_query($conn, "SELECT SUM(VIEWS) AS totalsum FROM posts WHERE name = '$username'");

$row = mysqli_fetch_assoc($result);

$sum = $row['totalsum'];


if ($sum >= 300) {
 ?>

<i style="font-size: 20px; color: blue;" class="fas fa-check-circle"></i>

<?php }?>