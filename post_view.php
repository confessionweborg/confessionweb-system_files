<?php

session_start();

include("conn.php"); 


$username=$_SESSION['name'];
?>


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="refresh" content="1800;url=https://www.confessionweb.com/logout.php" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>Confessions - ConfessionWeb</title>

  <!-- CSS  -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="feed/css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>

<script src="https://cdn.ckeditor.com/ckeditor5/10.0.1/classic/ckeditor.js"></script>

<link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
<link rel="manifest" href="favicon/site.webmanifest">
<link rel="mask-icon" href="favicon/safari-pinned-tab.svg" color="#5bbad5">
<meta name="msapplication-TileColor" content="#da532c">
<meta name="theme-color" content="#ffffff">


<style>

#active a:active{color: red;}

.div1 {
    width: 30px;
    height: 20px;
    border: 1px solid;
    background-color: #00b300;
    color: white;
    float: left;
}

</style>



</head>


<body>
  <nav style="position: fixed;
    width: 100%;
    left: 0;
    top: 0;
    z-index: 100;
    border-top: 0;" class="white lighten-1 col-lg-12" role="navigation">
    <div id="active" class="nav-wrapper container col-7"><a id="logo-container" style="color: black; text-decoration: none; font-size: 25px;" href="home.php" class=""><img style="border-radius: 10%; width: 30px; height: 30px;" src="feed/images/logo.png"></a>
      <ul id="nav-mobile" class="right">
        <li class=""><a class="text-muted" style="color: black; text-decoration: none;" href="home.php"><img width="30px" height="30px" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAAGqSURBVGhD7VlLTsMwFKzgEMDBCuxYJDkBILGBXAQkBDtEBYhELPiUgiggNixhWXEDaNyWj4xHePFUeRESx46iN9Is82bmxXEsvxaDwWA0C+0DORudiuUwzfaDNDt3SaW5F6RiKY7ljLZTDNHZcCFMxFOYCumZjyvJcF7b+h/wJlQ3HgxFPTHrF3ozf8vJVNAfscy0vfzAN0GLrF+OZOflUx6/uiG01pQm9YBvRtvLD/XQFS1yqAq/vf84JTSpB3jS9vIjSLJbWuRIdckkViWhST3Ak7aXHxzEIjkIRWODdDwEgSb1YCVIfDOW3cGX7A2+nRBaW72x/SB1oJUgkeJGdyQ3VZdcEFpUH7QSZOd5YlzHVRKa1IOVILz9liAHoeAgFslBKKaD+Nh+t6vYfsFG/BDrQCtBcGi8dnhohBY0qQcrQRpzjOfttwQ5CAUHsUgrQRpzZYoLY1oEF8oobLpwroLQWr2wcIldy7FCItraXn5g0KM60DcV9MOCgx4AozfVhXtzYXcM0uwuOPmY07aKAV0IE7GoOrI7PaysmtCEdulhKIPBYNQMrdYvnJsOnW3P0qkAAAAASUVORK5CYII=">&nbsp;News Feed</a></li>
        <li><a class="text-muted" style="color: black; text-decoration: none;" href="user_blog.php"><img width="30px" height="30px" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAYAAABXAvmHAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAAOkSURBVGhD7Znba1RXGMWPtChVQaVVUKq+1AcRtH9FvYGmNvooPrUvBfFZtL4LFks1UaPGSwlpXpvgBQxRqzZewSjWy0usrcYQ7yYaM8v9nVkDJ+esyXwztJMK84PFMDNrr7POzN77HGaiGjVq1Ph/k2uI6nON0enw+BKNEaohO1ZQVzjuGtaojBDyozpANWUdWKc8wsB6FTgu2hPVsZafcAJnZNg4KEylTtbyE06ganO+lEKX56zlRwXFjLwFhgaAp3eA+yeAnp+Bzg3A0XlZ/78o1vKjQkry5BbQveU/ORnW8qNC3ORGgHu/Am1LshkVirX8qJDyyQF/NgOHZmWzyhRr+VEhsfZOBA7OAFoXAsfqgItbgQedwLshlha8eQKcWKvznGItPypkTB2YBnR9Czy+zNaCnl35D0CNLyHW8qNC3GpfBvRfZesU948D+6fqcWOItfyokLK092Pg941hag2yeYKH54CmyXpcEbGWHxVSkdq+zF8z0vx1sqzpxFp+VEjFav4UeHSBzRPc2K39QqzlR4XEDL8Mn+ht4J+zoUBD2IlW+aZD0xR9EifXaX9KrOVHhRTF5rmdzJE52TFJNc/MTie7LbHXlT8h1vKjQkoy/Bq4tC3c/n6UHVuQrQnzJbl1UHsTYi0/KsRNb0e4LkzPji/o3CYaC4Qrdtti7aVYy48KiWVzueWL/F5//SfgRS9LpBjoyV/cVIZtsf3XaCR3W7WXYi0/KkTKtsKz3wODfWySwL6JYtOpYwVNxG4Af5mvvUGs5UeFjKmjc/VtxMUftL9xQvBfoYl0bxa+vFjLjwopKdtO0ycx/Ao4PFv7T39HExm4qX1BrOVHhbh05PMwnR6zESl2wbK72vRdrH2TwstaflRILFu8j/4A3r7IP9rztMfWRBLbNps+yfpMf3fRRE6tlz7W8qNC4rK25Y0iPG9fOtpnCzu9O3WsHO0pyNZIEtvZhI+1/KgQ9HXzKCnsFiHtvb6Tb5Ji0+j41zSQ3mPSx1p+VEg8bRT2etrbvpxvEptuaY+pdREN5Nld6WMtPyokLqFQ30DLAr5JbGGnPabmz2ggg/3Sx1p+VEg819Ua+O2rrNeu2ElG3mQ9pn2TaCBFfKzlR4XEineh8InbtHl4XpcvKI3ymNIID2v5+eB/WgyDulTYeCh0OcVafnK7o29U2HgonMBq1iqPXGO0QwVWU6HDdtapDPtzwX6fr+aasGPZMSv6Y6NGjRo1qkgUvQdcqHbE1qtMCQAAAABJRU5ErkJggg==">&nbsp;Blogs</a></li>
        <li class="active"><a id="active" class="text-muted" style="color: black; text-decoration: none;" href="profile.php"><img width="30px" height="30px" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAYAAABXAvmHAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAAP2SURBVGhD7ZdZSFRRGMePoekU0ioVoUT20EMZ0fIgkmZ7Mzert3qonnpoIVqmsaaYJKIwyyBbHopIs4Vspe4YRJbhTDm2EK2kpLQv2oZZlvfru7dPmZnOqRnvXDG6f/gzdzn3fL9vznfuPYeZMmXKlClTpv4nlS1jPT2r2VyvnTkq7GyOZznrTbciI0WW6hS3dEiRbYuUC9Zh4HJ1oVu6hKADETrfY2eN3tUM/PwJvaLMxaKpaZvwGYvXwdLwuZWYdAm2e0a3xAK3BP7GZBowmXMg27LRaYo8NZaahqSrDpaE0AUI0eQH/ZuxTY3aDkFd2HYvHlfhcXNwO+pWrOAE2uuvJydAzY4kuOboEgCg14QpFg8mHH85MR6qtycieBQXQK8JUyweVCj+UpIBj7cNNAy81YQpFg/uT248ng6P8gZg58aCt5owxeJB8tx8ZjI8zO0P+JbgBjLKhCkWD5bndwdHcQP8xT8418IyYYrFg+ValqCuIPmvI1C5Jhqq8xPh49FUaDqRWY9vpee8dqGaMMXiwv7BKtiDLQkBk1c9vrepD7zenwI/zk0LaN90Ul8ShCmWf7BwrII2lqRrkzoYOth6kiBMsXgBjXB7kyBMsXjBjHJ7kiBMsXiBjHS4SRCmWLwgRjucJAhTLF4A1Z+PpUHtzsFQXziGe1+vQ02CMMXC5XKCcl7KVEqlJbg32IMury8c/dnntMDj3SPhZk4vaCjqgCTsrAGX0+V4vAd/l1xzsMzyNSyBMEOXutHATt5Xro2FF4enaUnU7kzmAkTC+LF7W+mMycO/OooQ9EndFeHm4pv6r/jWWaBqfXeo2zVEW3k2FI3lQug1bqJmU/jICIdvMSVRf2djj6e3NvaBJ/tS4YYrHj9cGVyIkC3bPiDw/YDz0qxECh05yUtZbEU2G6ONBI7CyyPT4W5ukraoCwAK0xr8WVtf/M3BresBpdQ6gkJGXt5VLEVNQHWlMw5uuixwf3MC3M6J15vIBgphvLRNN05qtMfn7Nr4cMdQbXL71lvg+9kpPLgA41vNo7ht3oBrbukgdd9x8qxi81rL6XnxFJzc3eDrqYnQct4aABxsNQE4ldUTy8WtnbulN4aWjUi4D8hoLSd1O/kotx9UrYvD0oqFV/uGc+H9vACAReG3ZohyYVJ36rLjhfArsKQuee1RBZhES92BdJzcVrieHd02EtySkaX51EXnECaRp46EOrFr9o4CnzMGIW2/YN22K8rpGfF4fhjL5SPCF0PVwhh6tHOows5m+pVTS/BSA9/rqdS08wrXLjPwY7f1hituHEJfboOXbc3gzhpEzf4NqRMTSycfS+aiIltn0WVTpkyZMtXZxNhPg8o2NMXCFJsAAAAASUVORK5CYII=">&nbsp;Confessions</a></li>
        <li><a style="color: black; text-decoration: none;" href="">
          
<?php 
          $username=$_SESSION['name'];

           $sql = "SELECT * FROM signup where name='$username'";
              $result = $conn->query($sql);

               if ($result->num_rows > 0) {
                // output data of each row
               while($row = $result->fetch_assoc()) {
           $location= $row["image"];

           ?>

         <div class="dropdown">

          <a class="dropdown" data-toggle="dropdown"><img style="border-radius: 10%; width: 30px; height: 30px;" src="<?php echo $location; ?>"></a>
          <?php

}
             } else {
            echo "0 results";
           }

 ?>

          <ul class="dropdown-menu dropdown-menu-right" style="background-color: #f1f1f1;">
      <img class="img-fluid" style="border-radius: 50%; width: 30px; height: 30px;" src="<?php echo $location; ?>"><span style="font-size: 15px; font-weight: bold;"><?php echo $username; ?></span>

<center><a class="dropdown-item" href="profile.php">View Profile</a></center>
<hr>
<a class="dropdown-item" href="profile.php"><img width="25px" height="25px" src="https://png.icons8.com/color/48/000000/handshake.png">&nbsp;Confessions</a>

    <a class="dropdown-item" href="user_blog.php"><img width="25px" height="25px" src="https://png.icons8.com/color/48/000000/rss.png">&nbsp;Blogs</a>
    <a class="dropdown-item" href="settings.php"><img width="25px" height="25px" src="https://png.icons8.com/color/48/000000/settings.png">&nbsp;Settings</a>
    <a class="dropdown-item" href="logout.php"><img width="25px" height="25px" src="https://png.icons8.com/color/48/000000/shutdown.png">&nbsp;Sign out</a>
    </ul>
</div>






        </a></li>
      </ul>
    </div>
  </nav>
  
<br><br><br><br><br>

  

<?php $sql = "SELECT * FROM signup INNER JOIN posts ON signup.name = posts.name WHERE posts.id = ".$_GET['id'];
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {

      $id = isset($_GET['id']);
      $username = isset($_GET['name']);
      $title = isset($_GET['title']);
      $post = isset($_GET['post']);
      $position = $row['position'];



   ?>


<div class="row">
  <div class="col-sm-8">
    <h3 class="ff-serif font-weight-normal text-black card-heading mt-0 mb-1" style="line-height: 1.25; font-size: 25px; margin-left: 15px;"><img width="30px" height="30px" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAALYSURBVGhD7Zg7aBRRFIaPLmJsouIDAsI6u8EisxqxECtNiErAQArdrIWdDywENSrYWUYMWIk2VnZaiGjhqxJBCGhl5SYbYySVQRLxgS7M9Zz1jOw81p25986dEfaDny0u95zzZWYzdxY6dOiQDk7FOi4q1uv4KdwTleIAl0kXZ8w64VQKDg4lZEJ7MWe5XDqoSrjBK1rHbOOyZtEl0ZTLXNocMhK455czVph0ytYx/HwUXC/c4PJmkL0SuG+CS4C4AivxVnrjW7/Jy8kjK0FxjlpHuEwDvAK3PeumRJzy1pMq3wnce1cArKBaYjS/Dgf/6Fk3IaIq4QZrTOEtdQvzIbCWtIguiXb5cajn1bQNlWovdHNrfZiSoCwf2ChqJaAsTvfBMI+gjkkJSpOImLHhW9WGIo8ij2kJSrNIQ6YEkzyOHGlIUAIiNjznkeKDJ9FTaUhQvhzctOwRKcFLHiseKg87Hfk+0jOlLIJP3R10Ag1rYCpfhze/VRfBh1FYcVOpH84vzPXn6hpECs/CGpjIz9EtYm5n7q+AqsidsCZJp5WEgkhxMKxRkvmXBEVKhMDvyURYwyTSToIiLULgLXY9rLHORJGgKIkQScpElaAoixBJyMSRoGgRoTc5PDIEXn5kE1eCokWkZsMIFVsa2hA6WJw0JPpjSzj4eYbHkQeLXHOLqsjISuDJV88vj3hFrjYXl5FRkDjHY6gzsx2G/E3iyMhIULRKuOBVue9vFEUmUxLE/B5Yg5f6qb/h0v7WMpmTcGGZJ/7GnwfX0y/oHgl8MZKSqPXBeW6XLK1k5netEp/2dovFgbViYXeXZy1yTEm4tJJRzDiXN8v7PHRplElHwkWTzAUuly4kg8M89g0XNdmQcJGRmbXhIm/PFtVeWI0DRpLB58Ql3pZNoshkXsKFZPAfwMOAwJ+jeLa+E+0QZcjh4Kfxr/8C8w7PaQ9mS7CPlzt0+D8A+A0G1CteBNLdTgAAAABJRU5ErkJggg==">&nbsp;
      <?php echo $row["title"]; ?>
    </h1>
    <div class="card shadow-none card rounded">
      <div class="card-body">
        <p style="font-size: 12px;" class="mb-0 small font-weight-medium text-uppercase mb-1 lts-2px">
      <small style="font-size: 13px;"><img style="border-radius: 50%;" width="35px" height="35px" src="<?php echo $row['image']; ?>">&nbsp;&nbsp;<?php echo $row["name"]; ?><?php echo $position; ?></small><br>
    </p>
    
        <p class="card-text"><?php echo $row["post"]; ?></p>
        
      

<?php 

include 'conn.php';


    mysqli_query($conn, "UPDATE posts SET `views` = `views`+1 WHERE id = ".$_GET['id']);


     $sql = mysqli_query($conn, "SELECT views FROM posts WHERE id = ".$_GET['id']);

    // output data of each row
    while($row = mysqli_fetch_assoc($sql)) {

      $id = isset($_GET['id']);
      $views = $row['views'];
      $des = isset($row['post']);




   ?>

<hr>

<ul class="nav">
<li><div style="font-size: 14px;" class="text-muted"><i class="fa fa-eye"></i>&nbsp;<?php echo $views." Views"?></div></li>&nbsp;<br>

<?php

if ($views >= 100) {

 ?>

<li><div class="text-muted" style="font-size: 14px;"><span style="font-size: 14px; color: #6666FF;" class="fas fa-check-circle"></span>&nbsp;Trending Post</div></li>

<?php
}
?>


<?php 
    
}; 
?>


<?php 
    
            }
} else {
    echo "No Blogs yet.<br> Write Your first Blog!";
}

?>

</div>

    </div>
  </div>




  <div style="width: 100%;" class="col-sm-4">
    <div>
      <b><p style="font-size: 15px; font-family: PT Sans;"><img width="30px" height=30px" src="data:image/png;base64,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">&nbsp;People also read this</p></b>
      <div class="divider"></div>


<?php 

$sql4 = "SELECT * FROM posts ORDER BY RAND() LIMIT 10";
$result4 = $conn->query($sql4);

if ($result4->num_rows > 0) {
    // output data of each row
    while($row = $result4->fetch_assoc()) {

      $id = $row['id'];
      $username = $row['name'];
      $title = $row['title'];
      $post = $row['post'];
      $time = $row['time'];
      $views = $row['views'];

   ?>

      <ul class="nav flex-column">
        <br>
  <a style="font-family: PT Sans; text-decoration: none;" href="post_view.php?id='<?php echo $id; ?>'"><li class="nav-item">
  
  <?php
if ($views < 10) {

 ?>
    <div style="background-color: #7e7e7e;" class="div1 rounded">
  
<center><p data-toggle="tooltip" data-placement="top" title="Less viewed" style="font-size: 15px;"><?php echo $views; ?></center></p>
</div>

<?php } else {
 ?>

<div  class="div1 rounded">
  
<center><p data-toggle="tooltip" data-placement="top" title="More viewed" style="font-size: 15px;"><?php echo $views; ?></center></p>
</div>


 <?php } ?>


&nbsp;&nbsp;
  
  <?php echo $row["title"]; ?>&nbsp;

<?php
if ($views > 20) {

 ?>
<span style="font-size: 14px; color: #6666FF;" class="fas fa-check-circle" data-toggle="tooltip" data-original-title="Verified"></span></a>

<?php
}
?>


  </li></a>
  
</ul>

<?php 
    
            }
} else {
    echo "No Blogs yet.<br> Write Your first Blog!";
}
?>

<ul class="nav flex-column">
        <br>
  <a href="home.php"><li class="nav-item"><i class="fas fa-plus"></i>&nbsp;Add New Confession
  </li></a>
<br>
  <a class="text-muted" href="home.php"><li class="nav-item">View more Related Confessions
  </li></a>
  
</ul>
<br><br>

<b><p style="font-size: 15px; font-family: PT Sans;">Confession Stats</p></b>
      <div class="divider"></div>

<?php $sql = "SELECT * FROM posts WHERE id = ".$_GET['id'];
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {

      $id = isset($_GET['id']);
      $username = isset($_GET['name']);
      $title = isset($_GET['title']);
      $post = isset($_GET['post']);
      $views = $row['views'];
      $time = $row['time'];
      $len = strlen($row['post']);


   ?>

<ul class="nav flex-column">
<li class="nav-item">
   <div style="font-size: 14px;" class="text-muted"><i class="fa fa-eye"></i>&nbsp;&nbsp;<?php echo $views." User Views"?></div>
 <div style="font-size: 14px;" class="text-muted"><i class="fa fa-clock"></i>&nbsp;&nbsp;<?php echo $time?></div>
 
 <?php 
$id = isset($_SESSION['id']);


$result = mysqli_query($conn, "SELECT SUM(VIEWS) AS totalsum FROM posts");

$row = mysqli_fetch_assoc($result);

$sum = $row['totalsum'];

 ?>

 <div style="font-size: 14px;" class="text-muted"><i class="fas fa-chart-line"></i>&nbsp;&nbsp;<?php echo "Your post is performing ".number_format($sum/$views, 2)."% better"?></div>

<?php
if ($len > 200 && $len < 400) {
 ?>
<div style="font-size: 14px;" class="text-muted"><i class="fab fa-readme"></i>&nbsp; 2 Mins read</div>
 <?php 
}elseif ($len > 400 && $len < 600) {
 ?>
 <div style="font-size: 14px;" class="text-muted"><i class="fab fa-readme"></i>&nbsp; 4 Mins read</div>
<?php 
}elseif ($len > 800 && $len < 1500) {
?>
<div style="font-size: 14px;" class="text-muted"><i class="fab fa-readme"></i>&nbsp; 6 Mins read</div>
<?php 
}elseif ($len > 1500 && $len < 3500) {
 ?>
<div style="font-size: 14px;" class="text-muted"><i class="fab fa-readme"></i>&nbsp; 8 Mins read</div>
<?php 
}elseif ($len > 3500 && $len < 5500) {
?>
<div style="font-size: 14px;" class="text-muted"><i class="fab fa-readme"></i>&nbsp; 10 Mins read</div>
<?php 
}elseif ($len > 5500 && $len < 8500) {
?>
<div style="font-size: 14px;" class="text-muted"><i class="fab fa-readme"></i>&nbsp; 12 Mins read</div>
<?php 
}elseif ($len > 10000) {
?>
<div style="font-size: 14px;" class="text-muted"><i class="fab fa-readme"></i>&nbsp; 18 Mins read</div>
<?php }?>

<?php
if ($views > 100) {

 ?>
<div class="text-muted"><span style="font-size: 14px;" class="fas fa-check-circle" data-toggle="tooltip" data-original-title="Verified"></span>&nbsp;This post is trending</div>

<?php
}
?>

 <div style="font-size: 14px;" class="text-muted"><i class="fa fa-edit"></i>&nbsp;&nbsp;No User Edits</div>


 </li>


   <?php 
    
            }
} else {
    echo "No Stats available!";
}
$conn->close();
?>

  
<br><br><br>
  



  

  
  
</ul>

    
</div>
</div>

    </div>
</div>



  </div>

</div>
  </div>
        
    </div>


    


  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="feed/js/materialize.js"></script>
  <script src="feed/js/init.js"></script>

  </body>
</html>
