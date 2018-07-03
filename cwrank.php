<?php

session_start();

include("conn.php"); 

define('CDN', 'https://cdn.confessionweb.com/');


$username=$_SESSION['name'];
?>



<!DOCTYPE html>
<html>
<head>


	<meta http-equiv="Content-Type" content="text/html; charset=gb18030">
	
	<meta http-equiv="refresh" content="1800;url=https://www.confessionweb.com/logout.php" />

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
  
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
	<title>CW RANK - ConfessionWeb</title>


	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">



<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
<script src="https://cdn.ckeditor.com/ckeditor5/10.0.1/classic/ckeditor.js"></script>



<style type="text/css">
	nav.navbar-findcond { background: #fff; border-color: #ccc; box-shadow: 0 0 2px 0 #ccc; }
nav.navbar-findcond a { color: #f14444; }
nav.navbar-findcond ul.navbar-nav a { color: #f14444; border-style: solid; border-width: 0 0 2px 0; border-color: #fff; }
nav.navbar-findcond ul.navbar-nav a:hover,
nav.navbar-findcond ul.navbar-nav a:visited,
nav.navbar-findcond ul.navbar-nav a:focus,
nav.navbar-findcond ul.navbar-nav a:active { background: #fff; }
nav.navbar-findcond ul.navbar-nav a:hover { border-color: #f14444; }
nav.navbar-findcond li.divider { background: #ccc; }
nav.navbar-findcond button.navbar-toggle { background: #f14444; border-radius: 2px; }
nav.navbar-findcond button.navbar-toggle:hover { background: #999; }
nav.navbar-findcond button.navbar-toggle > span.icon-bar { background: #fff; }
nav.navbar-findcond ul.dropdown-menu { border: 0; background: #fff; border-radius: 4px; margin: 4px 0; box-shadow: 0 0 4px 0 #ccc; }
nav.navbar-findcond ul.dropdown-menu > li > a { color: #444; }
nav.navbar-findcond ul.dropdown-menu > li > a:hover { background: #f14444; color: #fff; }
nav.navbar-findcond span.badge { background: #f14444; font-weight: normal; font-size: 11px; margin: 0 4px; }
nav.navbar-findcond span.badge.new { background: rgba(255, 0, 0, 0.8); color: #fff; }
</style>

<link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
<link rel="manifest" href="favicon/site.webmanifest">
<link rel="mask-icon" href="favicon/safari-pinned-tab.svg" color="#5bbad5">
<meta name="msapplication-TileColor" content="#da532c">
<meta name="theme-color" content="#ffffff">

</head>
<body style="background-color: #f6f6f6;">

<nav style="background-color: white; box-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.2), 0 1px 1px 0 rgba(0, 0, 0, 0.19); width: 1450px;" class="navbar navbar-expand-lg">
  <a style="display: inline; padding-right: 70px;" class="navbar-brand" href="#"><img width="30px" height="30px" src="data:image/png;base64,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"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <i style="color: blue; font-size: 30px;" class="fas fa-caret-square-down"></i>
  </button>

  <div style="color: grey;" class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li style="display: inline; padding-right: 40px;" class="nav-item">
        <a  style="font-size: 20px; color: #545454;" class="nav-link" href="home.php"><img width="30px" height="30px" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAAGqSURBVGhD7VlLTsMwFKzgEMDBCuxYJDkBILGBXAQkBDtEBYhELPiUgiggNixhWXEDaNyWj4xHePFUeRESx46iN9Is82bmxXEsvxaDwWA0C+0DORudiuUwzfaDNDt3SaW5F6RiKY7ljLZTDNHZcCFMxFOYCumZjyvJcF7b+h/wJlQ3HgxFPTHrF3ozf8vJVNAfscy0vfzAN0GLrF+OZOflUx6/uiG01pQm9YBvRtvLD/XQFS1yqAq/vf84JTSpB3jS9vIjSLJbWuRIdckkViWhST3Ak7aXHxzEIjkIRWODdDwEgSb1YCVIfDOW3cGX7A2+nRBaW72x/SB1oJUgkeJGdyQ3VZdcEFpUH7QSZOd5YlzHVRKa1IOVILz9liAHoeAgFslBKKaD+Nh+t6vYfsFG/BDrQCtBcGi8dnhohBY0qQcrQRpzjOfttwQ5CAUHsUgrQRpzZYoLY1oEF8oobLpwroLQWr2wcIldy7FCItraXn5g0KM60DcV9MOCgx4AozfVhXtzYXcM0uwuOPmY07aKAV0IE7GoOrI7PaysmtCEdulhKIPBYNQMrdYvnJsOnW3P0qkAAAAASUVORK5CYII=">&nbsp;Feed <span class="sr-only">(current)</span></a>
      </li>
      
      <!--Notification system starts-->

      <li style="display: inline-block; padding right: 30px" class="nav-item dropdown">



        <a style="font-size: 20px; color: #545454; display: inline-block;" class="nav-link text-muted" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

          <img width="30px" height="30px" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAYAAABXAvmHAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAAHDSURBVGhD7ZhLTsMwEIbDBrasoahO1RXiCCw4BYdggcRFQBV1cgZ6CXY8FpUQHIEDRLKJxKphJkwqy3iTeOwqwp/0L5qJfs+0foybJRKJhDeiULdZ0+zRx/GRF7rJpXqYLzYH9GhctAX8FvE4vasO6fF42BYAElJ9zBf1hELjwCygLaJQn7NCn1GYh9NVsy8KfS2kfoVBvuxBA6ialvqChvdjUtbHMD/fHIMEFfwS36LUl5TGMHBnAKN31wBRJNUmX+obSqc/OG2cxrHkWwCYvPwxjSSWKQRGMRasSzyL2GHcarZU5/SKN7Y36zZqm3eiMAumL/tBZpqbojALW98QrYSZtCkKs9B6hmrm7MQ7UZgFmPPjbqcTiUSiJ7DltVsfI66tGkVhPvCwwUOH29xOvBOFecBjHo/7EOZm0qYo7A82WNhoBTEHTF9TFPYDW1tscYOYA9ia296d6JXh4KUCjCrbOIaE1IrSGAZe5/Ba5zKPIqmfKZX+4EW6vVC7jGNJqitKpz+7L0Ct8c80SmcYu5tCan1yXx9RGn7EWsS4YGHOP+G08f7mbUJvo1EIfZBFIWQrEY1QzVxcArTTiUTiX5JlPzGGXbXGQvRnAAAAAElFTkSuQmCC">&nbsp;Updates
        </a>





        <div style="background-color: white;" class="dropdown-menu" aria-labelledby="navbarDropdown">
        
        <center>Updates<span style="font-size: 15px;">(<?php 
$id = isset($_SESSION['id']);

$sql2 = "SELECT * FROM posts ORDER BY id DESC LIMIT 2";
$result2 = mysqli_query($conn, $sql2);

$rowcounts = mysqli_num_rows($result2);

echo $rowcounts;

    ?>)</span>
        
        
        </center>
<hr>
<ul>

<?php $sql = "SELECT * FROM posts ORDER BY time desc LIMIT 5";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {

      $id = $row['id'];
      $uname = $row['name'];
      $title = $row['title'];
      $post = $row['post'];
      $views = $row['views'];
      $time = $row['time'];
      $len = strlen($row['post']);

   ?>


          <li style="min-width: 400px; max-height:150px;
  overflow: auto;"><i style="font-size: 18px; color: blue;" class="fas fa-portrait"></i>&nbsp;&nbsp;<?php echo $uname." recently posted "; ?><a style="color: blue; font-size: 15px; width: 20px;" href="post_view.php?id='<?php echo $id; ?>'">"<?php echo $title; ?>"</a> <span style="font-size: 12px;">(<?php echo $views." Views"; ?>)</span>
          
          
          
            <p style="font-size: 12px;"><i style="color: blue;" class="far fa-clock"></i>&nbsp;<?php echo time_ago_in_php($time); ?></p>

<div class="divider"><hr></div>
          </li>

<?php
}
}
?>



</ul>


<!----Notification system ends-->
      
      
      <li style="display: inline; padding-right: 90px; padding-top: 8px; padding-left: 40px;" class="nav-item">
        <form action="search.php" method="GET" class="form-inline my-2 my-lg-0">
  <input class="form-control mr-sm-2" type="text" name="query" placeholder='Search <?php 
$id = isset($_SESSION['id']);

$sql2 = "SELECT * FROM posts";
$result2 = mysqli_query($conn, $sql2);

$rowcounts = mysqli_num_rows($result2);

echo $rowcounts;

    ?> confessions by title, post or user...' style="width: 470px; height: 33px;">
  <input type="submit" name="search" class="btn btn-primary btn-sm" style="background-color: blue;" value="Search">
</form>
      </li>

      <?php

include 'conn.php';


$id = isset($_GET['id']);
$sex = isset($_GET['sex']);


 $result = mysqli_query($conn, "SELECT sex AS gender FROM signup WHERE name = '$username'");

$row = mysqli_fetch_assoc($result);

$gendercheck = $row['gender'];

if ($gendercheck == "Male") {
   ?>

      <li class="nav-item dropdown">
        <a class="nav-link text-muted" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img class="img-fluid" style="border-radius: 50%; width: 30px; height: 30px;" src="image/avatar.png">
        </a>


<?php 
 }else {   
?>

<li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img class="img-fluid" style="border-radius: 50%; width: 30px; height: 30px;" src="image/avatar_female.png">
        </a>

        <?php }?>



        <div style="background-color: #f1f1f1;" class="dropdown-menu" aria-labelledby="navbarDropdown">
<ul>
          <li><a style="color: black; font-size: 15px;" href="profile.php"><i class="fas fa-user-circle"></i>&nbsp;Profile</a></li>
      <li><a style="color: black; font-size: 15px;" href="user_blog.php"><i class="fas fa-rss-square"></i>&nbsp;Your Blogs</a></li>
      <li><a style="color: black; font-size: 15px;" href="profile.php"><i style="font-size: 17px;" class="fas fa-handshake"></i>&nbsp;Confessions</a></li>
      <li><a style="color: black; font-size: 15px;" href="settings.php"><i class="fas fa-sliders-h"></i>&nbsp;Settings</a></li>
      <li><a style="color: black; font-size: 15px;" href="logout.php"><i class="fas fa-sign-out-alt"></i>&nbsp;Sign out</a></li>
</ul>

        </div>
      </li>
    </ul>
    <button style="margin-right: 150px;" type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#exampleModalCenter">Add Confession</button>
  </div>
</nav>

<br><br>

  <div class="container">
    <div class="section col-lg-7">

      <!--   Icon Section   -->
      <div class="row">

        <!-- Modal Trigger -->
  <div class="container">
    <div style="position: fixed;"></div>
  <div class="row">

<div>
    <div class="">
      <div>
      <p style="font-size: 17px; line-height: 4px;">Feeds</p>
      <hr>
      <ul class="nav flex-column">
  <li class="nav-item">
    <a class="nav-link text-muted" href="home.php"><img height="20px" width="20px" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAAGqSURBVGhD7VlLTsMwFKzgEMDBCuxYJDkBILGBXAQkBDtEBYhELPiUgiggNixhWXEDaNyWj4xHePFUeRESx46iN9Is82bmxXEsvxaDwWA0C+0DORudiuUwzfaDNDt3SaW5F6RiKY7ljLZTDNHZcCFMxFOYCumZjyvJcF7b+h/wJlQ3HgxFPTHrF3ozf8vJVNAfscy0vfzAN0GLrF+OZOflUx6/uiG01pQm9YBvRtvLD/XQFS1yqAq/vf84JTSpB3jS9vIjSLJbWuRIdckkViWhST3Ak7aXHxzEIjkIRWODdDwEgSb1YCVIfDOW3cGX7A2+nRBaW72x/SB1oJUgkeJGdyQ3VZdcEFpUH7QSZOd5YlzHVRKa1IOVILz9liAHoeAgFslBKKaD+Nh+t6vYfsFG/BDrQCtBcGi8dnhohBY0qQcrQRpzjOfttwQ5CAUHsUgrQRpzZYoLY1oEF8oobLpwroLQWr2wcIldy7FCItraXn5g0KM60DcV9MOCgx4AozfVhXtzYXcM0uwuOPmY07aKAV0IE7GoOrI7PaysmtCEdulhKIPBYNQMrdYvnJsOnW3P0qkAAAAASUVORK5CYII=">&nbsp;Feed</a>
  </li>
  <li class="nav-item">
    <a style="line-height: 4px;" class="nav-link active" href="trending.php"><i class="fas fa-check-circle"></i>&nbsp;Trending<span class="badge"><?php 
$id = isset($_SESSION['id']);

$sql5 = "SELECT * FROM posts WHERE views >= '50'";
$result5 = mysqli_query($conn, $sql5);

$rowcountstrending = mysqli_num_rows($result5);

echo $rowcountstrending;

    ?></span></a>
  </li>
  <li class="nav-item">
    <a class="nav-link text-muted" href="profile.php"><img height="20px" width="20px" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAARkSURBVGhD7ZhvaJtVFMYz1g5hTlCYsFpnP7SlFRwbbbGKNG2TtEnTpI42DLcyraNjE/9QEGc3EVxm/RAcbtN1dXRE1MZlq/vTrp1D3ZZ0RbETEWEfVIqgsjnHwmzfaAf3eO7bk+59k5uStMlNlDzwo+l7z33Oc26SN2kNOeWUk3zV1dVV1NfXu/Hnp8g4Pp6IgL83UFn2CkM+jlzGwBAPXP+ayrNTGPJ1hGlDz8MgDrTRaDTeRduzQxisJypoQuAwv5hMJivZZFa1tbV2DJXoMyHiNnq0kl1m5HK5luGp/ioIlxToETKbzQVkK18Y4FlRsHg0W+uh5/kGeLnDIlr3kK18YfNLUWFiiIS/dMAGM8MOgFEH/DPkgB1b9MPgofxGtnJlsViWm/D1rQ0TQRQ+GtEweBcrJnt5whOs0YZIJHw0gmFsZC9P/E7Dm3e4zEmFj4YPs22jWR0ED2cz2csTNt3Km7+Jz4IoYDJwDxpkO9nLE2/6vxjE3lj7UqoH4Z5kL0fs6MP33egvm3xxU03MINd9DaCcbNJd0zJ9ogmuD+j3cI+u9hq4eaTsZ+5NbdIv5ivdAr5SmPFXQXD/ndAhfyPstBZAb0eJLqiWg88UqzWhY9a5a9zj9rEq4J7cm9qkX2yg1MqbwmClLuTMkB2828rhyzf017XwNe/2crVWt8a9+CADxRZqI0fMV7KLDVZM6sIsAna8cpINlHSTvVzBZ/YKUaiFwEac68hWvuC8MY+NOG6IgiUDG2n+E/yupWSbGbHR5j5RuGTAwzhEdpkTG256CIOERQETge9lZ1seJLvMCsO8IAqZCPiyeo5sskNs1OERBZ0Pvoe2Z5fYYPVbMHLngy4uWMNOPNpD27JP0Gd4At7PVz/Y4LQxdoBTeI2v8RqspW3ZJ3WQQwaYoy8PoP/uWfhj3dp/aZD5yMZB1hz87v6iPRf2rnnFe4X1LhEH18BrHtnxwZUi94W9a/d9u5JsMqfmoLK6JaD02j6/ObX0qX5YsuEw+Hfjlz9BeC2f7K5Sa/ke27nQLfQ4sP7i1CqylSfXD7DMGVRecwYUpSUYBs6qV8+q4Qqffhv+2L9COACHrz2ANby2oHtU3ctBv7/Qb9fWCcinNulVW+DWSmcgHIgEiGA6fQ3y271qwPION1z2rI4Z4htPEZThGq/htaahazqPWZQv2sZD6f3jyjEeLsaTm4xtPkv1hz9BXvsRNSjnsc5u6OzarFLduXPuOq/htSIPlYDy4/rz04XUNrWyB0P38gbCxhrqTv4OhV1H50JHU9jlV2tEe7XggX3vHGMrqH3q1BIIe0UN49E4fBVa3/kI2tweldZ9H0PDmavC2njgMIepfWrkHJuuxGeDiZqlFd5zbGotxVi8nMHwcWEjOfgoxuJk/Yrdg3eSsKCBHALKdEreK08G/7YJG8jkYriR4ixc/ENKaC4RR1BZ/H9X8M7xnshcKgHlXYqzcKHRHnyzT2QSvPW7KU5OOeW0IBkM/wL9v1qimtMQvAAAAABJRU5ErkJggg==">&nbsp;Profile</a>
  </li>
  <li class="nav-item">
    <a class="nav-link text-muted" href="user_blog.php"><img height="20px" width="20px" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAAPrSURBVGhD7ZlZSBVRHMYnso2gFaIFgpaHeo4WoteghxZ6qkzorZdooSgoKN/aXqIFvZpY3ZutmNFCi0tEqbmUklmZKEYKJoXSYql5v87f+x86c+aMjde5dyLmBx8++J1z/9+cOWfOzDECAgIC/i+QbqREQ0ZaNNOICBUmWRH6baqBy4kP0dEsoecIGfBTVEP0tDGTyxoaPBK1uo790MAFjWdkRMPNug79lKhpE5fnHtEoT9eZnxJ3SJjLc48IUmLr7O4qoOYoUHUIKNsDFG8G8hcDuROtvgSJauLy3CMaPbF1VnMEeqLA5zqg7mQsbNZIazuPRDVxee4ZWhCFb21A7XEgMsvafphKfhCT/h6gPgSEZ1j7iVPeBXmwHnh7Dmi6BrQWAV3vRLF9XPUg9HQBT3cM+5bzLohO2aOAG0uBiv1AezlX7kBbybBGJ7FBVF1ZICb9KaCvm6tX+NEB3Fyhb/sXJTeIqQvTgNfZYkHr5wQSfd+Be6v17QaRP0FMFSwHvjRzAgmaW/fX6ts4yN8gpNxJQMstTiBBI1OwTN9GI++CnJsCXJob+0uTXP3/YKIV63UWJ5Do/uh6AfAuiPwcoVuDlt93EaBki/ttSn0GdyDR9sjV0pyYICp0m9QcA85PtbZRRQXrbrOn2/V+SckJYtLTGdtQhkZY28qiOaMuAPTQDE/X+1nJDWLSchvIGW9tL4tWM9psytRn6r0s74LkjBMTfbKY8PNihZTtFluVYudtSnspcHaMtQ9Zb3LYyPz6KTaaM/VeIe+COIme5rT/Uq8w0XBe34ZEq5W6A6D3HZ1XKPFBTBVuiE16ldKdej/p1Rk2MfQK4LCCJS8IiR5wapjer87vJlcXsknizkqtN7lBSDQy6m1GV17nJXVUsol5eULr8z7I/XV/3kseb9XfCk3XuSqG5kLuBLuPVHGATcynWq3P2yD0CqvSWmgPQwuAupoVp1k9pgaWYhkxmprQ3gWhLya6lYl4ss3qJdGLlExD2O4hZY+2h85fZPN5F6R8L/+Khvd3rV4SPeFlOt/aPaa6GtnE0KcmxeNdELrqTtCcUP30JijT3yuufordR/rwkE1M6S6bx7sgeXPsDzCTe2usXtLl+fxPCadNZXM+G5jKgzaPd0FIRanKc0LMmReH7T4Sbe1VLs7Wexvz2MDQvk7xxBvE/snUFI3Ms31AVTpwY4neQzo7NrblkEU7X523aKPVR18sFQ/VxOW5RzSKqB35rfg+YoeMVF1nfkpc3KEfKwwc9GQaNboOfVJ13EdwdNwlwvh+9CZUHffRmwkfwaXSnBGSDyoTr5BxIZphbIx7JAICAgL+UQzjN0V27pESwG1GAAAAAElFTkSuQmCC">&nbsp;Blogs<span class="badge"><?php 
$id = isset($_SESSION['id']);

$sql3 = "SELECT * FROM blogpost WHERE name = '$username'";
$result3 = mysqli_query($conn, $sql3);

$rowcountsblog = mysqli_num_rows($result3);

echo $rowcountsblog;

    ?></span></a>
  </li>
<li class="nav-item">
    <a class="nav-link text-muted" href="profile.php"><img height="20px" width="20px" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAAQYSURBVGhD7ZhZaBNBGMenh/dZQVtv64UFT0TwevBA1BwtRSIIoiD6Koi2Mai12sOzKp4VqT4qarVgs4n0QTzaxKM1iVjR1lq8tQ8e1KO0mc9vxkmbxq0k2U2Isn/4M9mdyXzfL3PsTogmTZo0adKkSZN6umgiCeKjuqJW/Rpqz5hLpWU9xC1VVbWJDKrKIjlV2eSZI5sAls1oqzObzBZNupRrM+njMJMF2H6tuNW1qM3gAZsRsPxOJeMtajPmU0mvgwrTANEkLN2ykMGYeAEm8YUBBBrhvFiewvoprP2NnSQRr9NY0o4sUoz1Lrxu4+2ziId3+jf5QAKN970I5qKS4RiW5mD97dKCvNq9g286zPEtPIkgjMlTTLZVro5bCUiobilbAi+OpsLdrQnyyShxNEB+Xl0MDUfGIEC8fBJqOJIgP64sgueHR4EzkgA+RwLke+lCqCsaAU5znHzQSFhtkFcnJ2LHUQTwWW2QuqLh8oG6MBu1+9u6f5CrC8lqg3iteqg/NEI+mJ9duX3hzek0vpPh9g2evIHVcu2CdqQW+5fzc+Dp/hS4Z0lsD1a9oydf/F/Pz/ujvWKYSIH4u/XaMvCW62Tr/K0IJhogoThsmFgDYQ4LJhZBmEOGiVUQ5pBglICwQE3nZsD7kilBLeZwHDRMUCDlujQ8g6zCTgvRZQhW75V03if7hoC7IBlqi8bBo/wkAEk+GaUOhBHnlHosyxCgsDKLrMLrNJFuaHKaE/JZpw3Fs6Dpigmqc/vzh5tcImqYwbh397+DMTfgibKXSEO58Ne4xEDYK0btoQnwMLc3fDg7HT7iVMOjsWwySs1mggivnhBiOQ4rP7HdtSR89uQNAHfhUPDsGcaf6HKJhGo8TbZ2vjZUiPDqqtJCJuERdKVjCylhQI0l86Cp1AT3tnXn71z+SYRjvjYl43Fcn98QohIqDKNE6MgIR+bm72kWD48PprK5DK+LJ8G7M5MVASGEXYSIjhxmspr/OcCnWeKnmpzeuJONh8cHRsOzg8Nkkww0zn8v+usfdTdMfUWY6Mi5lczk2yBuAmwDaCyZDx9LV+BZo1vnxLowTp/b1J4xEsvn7fcko0t0H33hbnbbN83chSnAnjWNx8bCSzw5tuFbsH/ygcYRWU+vZw5BmAMIUURtmUNFt9EXn2a/H1jwYHvPNzU5vaDuxDS+dhiUHIDPmPxl0U1siO1mTjNZhOvGykbmxZk58O6Cgf+f1Z60zXiC2tLTcRRaOkDS14kuYks4Kvy1gq2Zml1J/DzfkbSxmV7TD6d2/TTcWguopM8UX4s94ahk4OL/wWDcuf0avNbOL5bUbjSIprEvh4Uk4wNzKhASxxZwx4gY3kK5Pkk0+/dEbfqluC42QrkuRdzSpEmTJk3/kwj5BZGNCEV5pFhuAAAAAElFTkSuQmCC">&nbsp;Confessions<span class="badge"><?php 
$id = isset($_SESSION['id']);

$sql2 = "SELECT * FROM posts WHERE name = '$username'";
$result2 = mysqli_query($conn, $sql2);

$rowcounts = mysqli_num_rows($result2);

echo $rowcounts;

    ?></span></a>
  </li>
  <li class="nav-item">
    <a class="nav-link text-muted" href="cwrank.php" style="background-color: #e4e4e4; border-radius: 7px;"><img width="20px" height="20px" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAYAAABXAvmHAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAAQLSURBVGhD7ZnLaxNRFMaLr4U7Xyt1bx/a6uSOFQrBmVK6cKdFraBIRRfiTqi4cWe7UARbqI+FgkgXUqGodesDhbpT6x+g1o1VqU2TtCHt9XzTkzRtzkzvZJK4yQc/CJl7zvnuzJ17b27qaqqppujSXV3rk+1266xjXyVGZl31hfiTcO0MwOdZ157wrlEbtNXX6tZx+P9TqiO2mwz2Jxz1gwzqMCRcNYnYZNzexemqp5m4tT3h2PeIeclcGJCDOjKEnJy+sqI71z3rqN+SmYhMITeXKb90V8MmulP3hcJlhTpxR1vWRi5bHukj1mYyPyYVrATUiReoyeWjie981cznoE6MluVJRBk26XOWh3TNBAwntlGaKMEpKbEp2eEmD+maKQk3dpzthNNMZ8sOWnR+SUlNSPcc0PrDHg98ltoYMvXXVdvYlrnw+IRkxmQfN+U7gM9SG3PUINsyk7fCRlikUmetvPkc+E5qawK8JJ3WnWxvbdGL2y8lMiX7aPnu58B3UltTqBN9bC9Y2GTR8JmUkpiQOlN893PgmhRjAnXgm9EGMOWqQ1ICIzrku5/DewrURow1IOlYNtv0l7clFoLztFOio0qnz1t6/mqLztxq9owtvGzQerxeNL4CaoO2iEEsciAXciK3WDNHu7rCNv1F4/+pGEykTlt68bVgqkwgN2pItZdQT9imv6jhRHHgMumLNL+/N7jTYaGcyC3VzOPYn9mmv/jXk5yASV+gF/WdYKJUKBdySrVWQAsr2/SX6fyf7qHh9Db6k0AO5JJqrAbe2Ka/TDsAsDgtvim9E4gNs8AZdcBkCBXivdivwncCMcEvrIDJEMKLIgYHMNe7XzQZBGKkXIE46hPb9Bd1YEQMDiDT1yyaDAIxUq5gTKbRtRYygewD/9XXD8RIuQJxVC/b9Jd3QCUFB7AwRquwYDIIxEi5gki6McU2/cWbue9SApFO5b+FGGfEa/VerJhTwHgzB1HjPimJBGaSYnM0RB7u1anumAc+Sx0JMwslHHWd7a0tHPeZrgdzl1fOQNnhRnFux3e4VtgWsavbSZCXuVA/aCDa1A1JyVaTubE0Ay2MNBptB9AGbRGDWKlNMWqAbZkLP6SxcMgJl8nc3KfTl2gTttZWuBBqixjEitcLceyf0x2tW9lWOCUO2yfFpFWEhk8X2ylN9PLclRJXBce+zTZK19LRohoVC1QQ1MQfJ2wjmrzDXUc9lwpVAho2z8p2uJsTDlqjHnaZoQZ0PL6By5ZfCefgCSo0VVw4MlMzjn2My1RW3hTrqkHTxS4ILFK469NtbVs4ffXEK3Yf8VUyFwRisD0IvcJWQthk4dAJ5zbYs+OHB/5HwxMCS/+pqY98rRe7SuONWU011RSgurp/bE7IYetvMB4AAAAASUVORK5CYII=">&nbsp;CW Rank</a>
  </li>
  
  <li class="nav-item">
    <a class="nav-link text-muted" href="cpolicy.php"><img width="22px" height="22px" src="data:image/png;base64,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">&nbsp;CW Policy</a>
  </li>
  
</ul>




<br>

<p style="font-size: 17px; line-height: 5px;">Most Viewed</p>
<hr>
<ul class="nav flex-column">


<?php $sql = "SELECT * FROM posts WHERE views >= '25' ORDER BY id desc LIMIT 4";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {

      $id = $row['id'];
      $name = $row['name'];
      $title = $row['title'];
      $post = $row['post'];
      $views = $row['views'];
      $time = $row['time'];
      $len = strlen($row['post']);

   ?>

<?php

if ($views >= 25) {

 ?>

<li class="nav-item" style="line-height: 30px;">



    <a class="text-muted" href="post_view.php?id='<?php echo $id; ?>'"><img height="20px" width="20px" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAAG2SURBVGhD7dk/T8JAGMdx3pluRjd1VF+Gg6OJWBGEwVUTQETxz4hDOzr4BoyDsVUcnZztUO+HNNbmqbkrd9wTck/yXbC93Cfo8ceKGzdu3MzHBGHc8qOvgFPY02R78uNH8X0QxQmnsKfJ9uTHQQzmINRiNrMGaQxGye7Js3KnwQe5njVI/+EzWdkKkoXVoVI7x0/ketYgqAyGJQQBs7wpj2ELQcAsbfjkxvOxhrRu35PF9Tty4/nYQpo38gjEEtK8HikhEDtIY/CmjECsIHgxLINAbCD1S4FYk0MAmz/NWEB+EH83WxQQOM3yrzPWIfUL8TehghAHQXpv9h2AVUjt/FUJcXT1i0hLMdYgtZ4iQvz6UesgYPbaL+TPjEK8XiSPEAcATjNqnWx+WPC4KYjXVUEMxwcBtY5sRiCqiENxEFDrqKQdUu2EM0cgrRB8DFVC9PUgkPZnZLv1SG48GxAH4kim7i+bdgj6DzNGiCOZum+ajEAQhQHCO4vI66fNGARlMUDsd0PyOh0ZhSBggKi2zSGQcQgq+lJNZzOBzCIHoRazmYNQi9msFGRu/hnqxo0bNwynUvkGoyOViE1rERQAAAAASUVORK5CYII=">&nbsp;<?php echo substr($title, 0, 18)."..."; ?></a>

    
</li>

<?php
}
?>

<?php 
    
            }
} else {
    echo "No Confessions yet.<br> Start making confessions!";
}
?>

</ul>





<br>

<p style="font-size: 17px; line-height: 5px;">Profile Stats</p>
<hr>

<ul class="nav flex-column">
  <li class="nav-item">
    <a style="font-size: 15px; line-height: 4px;" class="nav-link text-muted"><img height="20px" width="20px" src="data:image/png;base64,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">&nbsp;Total Views<span style="font-size: 13px;" class="badge"><?php 
$id = isset($_SESSION['id']);


$result = mysqli_query($conn, "SELECT SUM(VIEWS) AS totalsum FROM posts WHERE name = '$username'");

$row = mysqli_fetch_assoc($result);

$sum = $row['totalsum'];

$perf = $sum/$rowcounts;

echo "     ".$sum; ?></span></a>
  </li>

<?php $sql = "SELECT  * FROM signup WHERE name='$username'";
                        
                        
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {

      ?>
      
<li class="nav-item">
    <a style="font-size: 15px; line-height: 4px;" class="nav-link text-muted"><img height="20px" width="20px" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAALnSURBVGhD7ZVLaBNBGMfXouBBD4L0Vi3iyUNF6sFHspOIoIJtZjaIT1REih6E1lM8aMAHSC4qKCIWvQs+mswubXclSH1citZmS/Hq3R4Kgg80frN+kI075uFuYwLzgz+75P/tzPffmZ1oCoVCoYgKcqK4klCeIYzn4Xo7ZvANaHUQ2WyXTs0XhJllnxbJwPhGrGgdhFoxQs1bQgnD3Ik/14WQ4nKdWbk/QnjSKb+PZa1BZ+ZxCPCj0gT/SWj+DNpyYBXizDoKtR/8zfulM+5gdWuAbfFJ2gg1Z6DRmwnKU/HU0x5YtbNxg1/XWSEH3rzsmSpRfg2nWHoSA2MpaRMhBav8bsfgs9U4zdKiG+YR2FJfZY00K/ge3sBWG4YVHIF7o39oegVO0zjeB0fNfTDAUJIVNuPPNYEAF7xvQdJUk3qVMAp7cNh/hxworoLBXlcG9pq7iHYAERr8e5V6n6j5Ng7P7kqP9XmnGNzDC7Lh+q2qDgWn23kcNjywF6/IJoEPbRJCnYulrT7vhEmN95A0Pwy/v5TWM/OqppWX4bBVkIPFXkILC1X11HyCdjTgG/M3JNNnCOU7XiuCI/I7XE/jcH9lO5vohq17CWpHdWqdEi8HrWiAFXnob6xJLULAvTjU/yU2aG2ChuCNSxutIf5FT1tbcJhwFOd7NXtud0CTs1uxojFEGFj2B+KfFFYoF6P8GOzhO7X+tOKs8BgfD4/tZjTHLQdVmsKK8CSN5+vh7X/0hxDfRZLyfiwJTyuCCMj+/Fpo/i6cWO8hVJ4waxta0dCqIDXJlru0qdk1UgmvEdoiiO2ukzcBEl4jqCBRooL46JggdsmC+4WAnNLwb79TgoiG5H7G8yMJYrujoOmAHPckVtSmbYLUm6QeKojnqyBB6k3izFE4dR4F5JQue37HBKk3iQri+SpIEBVEBfH7KkgQFaTdgtjuDXjAluiQ54urzBfPCSZmuqW+kPAEYedQKBSKDkbTfgE/j0tbJ16LRAAAAABJRU5ErkJggg==">&nbsp;Performance<span style="font-size: 13px;" class="badge"><?php echo 
number_format($perf, 2)."%" ?></span></a>
  </li>  
  
<li class="nav-item">
    <a class="nav-link text-muted" style="font-size: 15px; line-height: 4px; background-color: #e4e4e4; border-radius: 7px;" href="cwrank.php"><img height="20px" width="20px" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAARESURBVGhD7Znba9NQHMf37F28/QuOsYtrk+EYFJIOhg6R6VQQ9iZ4e/MPUOg2L6Dgg4I+KDIRp4h/wtzEOadMH/Uf0HnBbenibGsbf9/sdLbp7zQnbdr50C98oCS/a87JyUna1FBDDdVPyd79u5OGPpg0tZFlU3u6bOqT9PsdWDb0FziGc5ahH4WtcPs/tBBr30bFnyfeJk09R8U7KsCWmpqBL2KIcPWX24CpX6GrbHGFBsLQljBSdW+Ikg/RVPlWUlDVaPPU0EmRpnb63t29mRp4yBcRIpTjayy2SaQNV0mjaw/N5zk2cQ3AAoGcIn04svo6dtFV+sQlrCmUE7lFGdUJ04muzgc2kQJ2v+bCnVMBq2Eo04xuwEdcAlXSV9tduHMBGBPlVCYKMOQJGAi7X3dyU80u+M3ZqFLxarbY07O92iU2PdruOLN7XfCbs1FHm6/oObP6sOMCqmEf1Jzc5GoTAL9xjLNVJWloo6I8NaHzap/YqZGOtSby4Bhnq4yhLwYaFex/2ECK2AcwGs0ljeAYznE+qlhm9Kwo0180rd5wQVRJJf7dG15wjvNRhabXa1Fmeblb8QC72ELsw5qzcqrTyU2UjkYenIMNbLkYftBsyVqxyE5RrlxkOMgFyIOp8Wso4vy+sM9diTJ3W53s8xYn91JevAz4wBcxEAsxEdtv+llm1xFRrlxYGThnl7juZO60skWFCXIgF1sDQTNmWJQrFxk+8ToWEdeczK3aNYPYyMHmzmPoj0W5ctGyO8U6F0JXK32zjS2kGhCz3EisQa/Noly56B55zzp7QTPXw2sGsZSaIKjGOVGuXDDinGWkr8mXWlUQg4stQ6kRpanlITVceTPw5WKWRWVqkWH5m11C5l7wBQA+XCxfVG52fM1gnX34M97CFlsO+HCx/KCplRDlykVGZR+IMri9lR/w4WL5ofRAxDty0C0KthtcoSoE3arQhc4umdoOUW550fSa4YLIWDndyRapAny5mDKokWlRpr/I+BwXREbqYum7B8AGMXWpw0W2kYQvF1OGZWpnRJn+cl+sDG2JC8SRuV28YmEziE1g4eYPv3HMu7mEb2EsHxYCv+7SqFxmArFkn4kV6xU1cKPNsQ/J5z3OwQa28IEvZ8ehtFn0SrzuznMBi6BtBb6SYLNnD0R5GwbYwge+KlsTauLLjz59iygvmPAJhgtaRB+9nxxTb8CL60sxuHOFJM3ocVFWZaIgY96g9YbekR6IcioXPlfS/TLLJagHeBQ4/ZENopzqtG4fsU39Y2gfsfNy/1bAf4F8wtDBLAi9ibwwzWhkav5HD61Q93O9bRtF2toJqxmWQ66IaqBR+Ewjf0KkqY/wnKGGRoLsAKQY+iI1kfgZj2wV4esvtyHamxHTRJYtlAG28MEn0HVtgBO+AFrx6AAVmKCrPE6jNYEFwl0k6DeO4RxslLfiDTXUUAhqavoLy0DbHDFMVm4AAAAASUVORK5CYII=">&nbsp;CW Rank<span class="badge">

<?php

if ($perf == 90) {
  
 echo "A";

 ?>

<i style="color: blue; font-size: 14px;" class="fas fa-chevron-circle-up"></i>

 <?php

}elseif ($perf <= 20 && $perf >= 1) {
  echo "D";
?>

<i style="color: red; font-size: 14px;" class="fas fa-chevron-circle-down"></i>

<?php
} 
elseif ($perf <= 60 && $perf >= 20) {
  echo "C";
  ?>


<i style="color: blue; font-size: 14px;" class="fas fa-chevron-circle-up"></i>
  
  <?php
}elseif ($perf <= 80 && $perf >= 40) {
  echo "B";

?>

<i style="color: red; font-size: 14px;" class="fas fa-chevron-circle-down"></i>


<?php

}else {
  echo "";
}


 ?>
 
</span></a>
  </li>      

<?php
}}
 ?>
</ul>






<hr>

  <a class="text-muted" style="display: inline; font-size: 13px;" href="assets/about.html">About</a>&nbsp;
  <a class="text-muted" style="display: inline; font-size: 13px;" href="privacy.php">Privacy</a>&nbsp;
  <a class="text-muted" style="display: inline; font-size: 13px;" href="assets/termsofservice.html">Terms</a>
  <br>
  <a style="display: inline; font-size: 13px; color: black;">ConfessionWeb © 2018</a>



  
</ul>
</div>
</div>
    </div>


<br>

<div class="col-5">
      <div style="width: 600px;" class="shadow-none card">
      <div class="card-body">
        <center><h5 style="font-size: 25px;" class="card-title"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAYAAABXAvmHAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAAQLSURBVGhD7ZnLaxNRFMaLr4U7Xyt1bx/a6uSOFQrBmVK6cKdFraBIRRfiTqi4cWe7UARbqI+FgkgXUqGodesDhbpT6x+g1o1VqU2TtCHt9XzTkzRtzkzvZJK4yQc/CJl7zvnuzJ17b27qaqqppujSXV3rk+1266xjXyVGZl31hfiTcO0MwOdZ157wrlEbtNXX6tZx+P9TqiO2mwz2Jxz1gwzqMCRcNYnYZNzexemqp5m4tT3h2PeIeclcGJCDOjKEnJy+sqI71z3rqN+SmYhMITeXKb90V8MmulP3hcJlhTpxR1vWRi5bHukj1mYyPyYVrATUiReoyeWjie981cznoE6MluVJRBk26XOWh3TNBAwntlGaKMEpKbEp2eEmD+maKQk3dpzthNNMZ8sOWnR+SUlNSPcc0PrDHg98ltoYMvXXVdvYlrnw+IRkxmQfN+U7gM9SG3PUINsyk7fCRlikUmetvPkc+E5qawK8JJ3WnWxvbdGL2y8lMiX7aPnu58B3UltTqBN9bC9Y2GTR8JmUkpiQOlN893PgmhRjAnXgm9EGMOWqQ1ICIzrku5/DewrURow1IOlYNtv0l7clFoLztFOio0qnz1t6/mqLztxq9owtvGzQerxeNL4CaoO2iEEsciAXciK3WDNHu7rCNv1F4/+pGEykTlt68bVgqkwgN2pItZdQT9imv6jhRHHgMumLNL+/N7jTYaGcyC3VzOPYn9mmv/jXk5yASV+gF/WdYKJUKBdySrVWQAsr2/SX6fyf7qHh9Db6k0AO5JJqrAbe2Ka/TDsAsDgtvim9E4gNs8AZdcBkCBXivdivwncCMcEvrIDJEMKLIgYHMNe7XzQZBGKkXIE46hPb9Bd1YEQMDiDT1yyaDAIxUq5gTKbRtRYygewD/9XXD8RIuQJxVC/b9Jd3QCUFB7AwRquwYDIIxEi5gki6McU2/cWbue9SApFO5b+FGGfEa/VerJhTwHgzB1HjPimJBGaSYnM0RB7u1anumAc+Sx0JMwslHHWd7a0tHPeZrgdzl1fOQNnhRnFux3e4VtgWsavbSZCXuVA/aCDa1A1JyVaTubE0Ay2MNBptB9AGbRGDWKlNMWqAbZkLP6SxcMgJl8nc3KfTl2gTttZWuBBqixjEitcLceyf0x2tW9lWOCUO2yfFpFWEhk8X2ylN9PLclRJXBce+zTZK19LRohoVC1QQ1MQfJ2wjmrzDXUc9lwpVAho2z8p2uJsTDlqjHnaZoQZ0PL6By5ZfCefgCSo0VVw4MlMzjn2My1RW3hTrqkHTxS4ILFK469NtbVs4ffXEK3Yf8VUyFwRisD0IvcJWQthk4dAJ5zbYs+OHB/5HwxMCS/+pqY98rRe7SuONWU011RSgurp/bE7IYetvMB4AAAAASUVORK5CYII=">&nbsp;
ConfessionWeb Rank (CW Rank)</h5></center>

<br>
<center><p style="font-size: 25px;">What is CW Rank?</p></center>

<center><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAGAAAABgCAYAAADimHc4AAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAAVDSURBVHhe7Z1daBxVGIZXBMUbr7wz0E3cKlVR7ySoN0URr4SilF5J0SvRUtQLQbzwrghFlzq7qbVgLK22VlPRqGCkpoJNNG41rX+ttUmLVrTUZmZ30/1JjueL3zqb9p3JT+c7E9jvgeem2bPv9j3dmT1zJtuMoiiKoiiKoiiKoiiKoizErfvMNdlCsCnrBaPdhaBsNR0m/Z1HqAPqgmtxQ1excmO35393yQvqYP0j1AnXI0suP3tttuCP4xfSwdp/kNQN1yQHveXgC1CNPRw/zTXJYYNGLg1WWS84zDXJYYM68YS7KO07wOea5EDBaijXJAcKVUO5JjlQqBrKNcmBQtVQrkkOFOrKXF9gHvuwal79pmaGJhqm9GfTnPhnxpy6MGPG/2qaL880zM7v62bz0LS5a2cZPoe0XJMcKFTaHuszn0+b0tmmOePPLMrf7MQUSzVzxxtuJ4JrkgOFSnr7jrJ5/5cGLHkx0rvkob0V+NwSck1yoFAp12wPzAfHl19+y6P28HTvLjeTwDXJgUKlfHnkIix0OdJEooyk5ZrkQKES3t1fNiftcRyV2fL4+aYZ/LVuPjlZN8f+Xvj88MiA/LuAa5IDhUr4/MFpWGLL176tmdteD0+wdKJ+8tOqmbCfiNDjyfxYbV6GhFyTHChUwgMxJ979PzfmCkfjto7W4Bjy4KT8YYhrkgOFSvj1H9ETsHGwCseQ696rwDEkrRXQmCTlmuRAoRLSomrUTgLyvphPNL390RNACzY0Jkm5JjlQ6Epy7Z7oCRizawI0Jkm5JjlQ6EryObtiRuWTA/a8gsYkKdckBwpdKdKqOe7csemzaTguSbkmOVDoSvCmYmB2H6vD4kk6AdMEobFJyjXJgULTNmfLp6ugqPiWcZ+ckpRrkgOFpimVv+tofPmeXbShsRJyTXKg0LSkw85C//J3/1CfmyQ0XkKuSQ4Umpa0MYNKb/muXTGv7sNjpeSa5EChafjoQMWcBqW3pMOS6/JJrkkOFJqGdBUUFU++Oe72sNMu1yQHCnUtbTNOTOHyv5h0f9hpl2uSA4W6ljbmUfnkegfX/OPkmuRAoa59YRjvlNFiK+oytSu5JjlQqGu3HMYTMOBo2zFOrkkOFOpa2nT58VzzMvtK7hZcUXJNcqBQNZRrkgOFqqFckxwoVA3lmuRAoWlI14EefKdiHh+smof3V+du4kKPcy3XJAcKde09b1XModPzN17ovqC01wAk1yQHCnUpXWKgDfv28lvSndK9/encFd2Sa5IDhbr0/rejN93JZ4fktx3j5JrkQKEu3XAgfgJokYbGuZJrkgOFupTuGY27DP3Ex262HqPkmuRAoa59JWIjZniyYW5J+dMQ1yQHCnUt/arSi4cuzt3rSSfekd8bZttYLbVfS2qXa5IDhaqhXJMcKFQN5ZrkQKFqKNckBwpVQ7kmOVCo+p/6ZR1p6+jranC4arqLwVNckxwwWLX6R5x8eR8O73A9v+TsS/vgC+hA6YRrj/lf0WHH6ddWohezJD0/nzHmKn46ZanAUhfvS/w0ynIBpS6s58+uKgSb+SmUKwEWHKfnN3u8qY08XLlSYMkRZj2/1uP563iokgSo6AjL9hPCAzxMSQpQ9OV6wflVfVO9PERJElj4PP2z2WL5Tn64kjS4dNYLTvUUp1bzQxUJYPGkF/yUy1e6+GGKFKj8bMEfu3m7fwM/RJEETMBwLn/uev6xIk17+dlC8FHX1tnr+EeKC8Ly/T3O//Ma5f8JKGb2mav5jxSX2PK36OVkRVEURVEURVEURVEURVkqmcy/W0mtHHARGn8AAAAASUVORK5CYII="></center>

<p>CW Rank is a rank given to every confessor who is regularly posting the confessions and getting maximum number of views in a given time. CW Rank depicts the user's overall performance on the platform and also shows the faith the other users going to have on him regarding his authenticity on this platform. If you are posting confession every other day then you will be awarded with a badge of honour <i style="color: blue;" class="fas fa-check-circle"></i> that would tell all other users that you are the authorized user of this platform.</p>

<br>
<center><p style="font-size: 25px;">How CW Rank works?</p></center>

<center><img width="100px" height="100px" src="data:image/png;base64,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"></center>

<br>
<p><b>Analysis</b> plays a huge role in determining the overall CW Rank of a user. We use the <b>CW Rank algorithm</b> to track your total number of views with the number of views your individual post is getting on a regular basis. Our system calculates your overall performance based on the criteria of your posts getting viewed by the total number of views you've got till now. We integrate the other people's posts to rate your post out of 100 which statistically gives you the overall rank out of <b>A, B, C or D</b>.</p>

<br>
<center><p style="font-size: 25px;">How to increase your CW Rank?</p></center>

<center><img width="100px" height="100px" src="data:image/png;base64,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"></center>

<center><b><p>Posting & Sharing</p></b></center>

<p>Increasing your CW Rsnk is pretty straightforward. Post as much confessions as you can. Our main goal is to make your confessing experience more richer than ever and protect them in a systematic way. Share your confessions with others, because sharing makes things much easier even if they aren't. If you do not want to share your confessions, not a problem we got you. More posting and helping others increases your rank and makes you more authentic confessor than ever.</p>

<br>
<center><p style="font-size: 25px;">What is the benefit of CW Rank?</p></center>

<center><img src="data:image/png;base64,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"></center>

<center><b><p>Authentic</p></b></center>

<p>CW Rank makes your profile more authentic and instils the faith and confidence in other people about you. Spam is bad and it is everywhere. We don't want you to be spammed by other people just because of your confession. Make your confessions memorable and be real, this is the motive we are living with to give you more authentication. Because this platform is for all from the age of 13 to older ones 75, lineancy is important and everyone should be nice to others. And this rank gives the ability to our user to be free, feel light and confess whatever they had in their minds.</p>



<br>
<center><p style="font-size: 25px;">How much time it takes to rank up your CW Rank?</p></center>

<center><img src="data:image/png;base64,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"></center>

<center><b><p>Time takes Time</p></b></center>

<p>CW Rank takes time to rank up. We have designed our CW Rank algorithm a way that it should be authentic and not a clickbait. Real things takes time, so does your CW Rank. Make sure you post real confessions which are authentic, depicts the real outcome, trustworthy and honest. Post more confessions, get more views and get your confessions in our trending confessions community where your confession will be much appreciated and your CW Rank will higher up quickly.</p>

      </div>
    </div>

    




    <br>

    <?php
          function time_ago_in_php($timestamp){
  
  date_default_timezone_set("America/Los_Angeles");         
  $time_ago        = strtotime($timestamp);
  $current_time    = time();
  $time_difference = $current_time - $time_ago;
  $seconds         = $time_difference;
  
  $minutes = round($seconds / 60); // value 60 is seconds  
  $hours   = round($seconds / 3600); //value 3600 is 60 minutes * 60 sec  
  $days    = round($seconds / 86400); //86400 = 24 * 60 * 60;  
  $weeks   = round($seconds / 604800); // 7*24*60*60;  
  $months  = round($seconds / 2629440); //((365+365+365+365+366)/5/12)*24*60*60  
  $years   = round($seconds / 31553280); //(365+365+365+365+366)/5 * 24 * 60 * 60
                
  if ($seconds <= 60){

    return "Posted Just Now";

  } else if ($minutes <= 60){

    if ($minutes == 1){

      return "Posted 1 min ago";

    } else {

      return "Posted $minutes mins ago";

    }

  } else if ($hours <= 24){

    if ($hours == 1){

      return "Posted 1 hour ago";

    } else {

      return "Posted $hours hrs ago";

    }

  } else if ($days <= 7){

    if ($days == 1){

      return "Posted yesterday";

    } else {

      return "Posted $days days ago";

    }

  } else if ($weeks <= 4.3){

    if ($weeks == 1){

      return "Posted 1 week ago";

    } else {

      return "Posted $weeks weeks ago";

    }

  } else if ($months <= 12){

    if ($months == 1){

      return "Posted 1 month ago";

    } else {

      return "Posted $months months ago";

    }

  } else {
    
    if ($years == 1){

      return "Posted 1 year ago";

    } else {

      return "Posted $years years ago";

    }
  }
}
?>






    <!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 style="font-size: 20px;" class="modal-title" id="exampleModalLongTitle"><?php

include 'conn.php';


$id = isset($_GET['id']);
$sex = isset($_GET['sex']);


 $result = mysqli_query($conn, "SELECT sex AS gender FROM signup WHERE name = '$username'");

$row = mysqli_fetch_assoc($result);

$gendercheck = $row['gender'];

if ($gendercheck == "Male") {
   ?>

         <div class="dropdown">

          <a class="dropdown" data-toggle="dropdown"><img class="img-fluid" style="border-radius: 50%; width: 30px; height: 30px;" src="image/avatar.png"></a>
          <?php 
 }else {   
?>
<div class="dropdown">

          <a class="dropdown" data-toggle="dropdown"><img class="img-fluid" style="border-radius: 50%; width: 30px; height: 30px;" src="<?php echo $row['image']; ?>"></a>


<?php }?><?php echo $username." Confessed this"; ?></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="post.php" method="post">
                
                <div class="form-group">
                  <input type="text" class="form-control" name="title" placeholder="Got something to confess? Give it a Title!" required>
                </div>
                <div>
                  
		<textarea name="des" type="text" id="editor" placeholder="Write your confession here..."></textarea>
		<script>
			ClassicEditor
				.create( document.querySelector( '#editor' ) )
				.then( editor => {
					console.log( editor );
				} )
				.catch( error => {
					console.error( error );
				} );
		</script>
                </div>
<br>
                <div class="box-footer clearfix">
              <button style="float: right;" type="submit" class="pull-right btn btn-default" id="sendEmail">Confess
                <i class="fa fa-arrow-circle-right"></i></button>
            </div>
              </form>
      </div>
    </div>
  </div>
</div>





  </div>
</div>
  </div>
        
    </div>
	

</body>
</html>