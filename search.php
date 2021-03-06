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
	<title>Search Results - ConfessionWeb</title>


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

.dropdown-item:hover {
 background-color: #283e4a;
 color: white;
}
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

<nav style="background-color: #283e4a; box-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.2), 0 1px 1px 0 rgba(0, 0, 0, 0.19); width: 1450px;" class="navbar navbar-expand-lg">
  <a style="display: inline; padding-right: 70px;" class="navbar-brand" href="#"><img width="30px" height="30px" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAYAAABXAvmHAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAAbuSURBVGhD7Zl5bBRVHMer8Uy84pH4h3/of8bEaEKMhsSsdI8us0uhnVlqw9EgLVBFATkUAWsRlKAoIBZaoSghhEOuEDmEckgBsYUWWtCC5RBasNAD2i1td2aev9/sbzs7O2/bvUqI4ZN8A8x7+3vf9+b3jnkk3eX/zhuS9LB9oJSc7JKm2QRphVUQt8Kfu62C9ItNEFdbXeJndpeUZh0y5Cn6yZ2B3S06rC5pvc0l3rK5JNaboGMK1D8AHcryeDwPUJjbT7KQPgBG+BjPZBS6BB3PycvLu5fC9j0Wj+cRGL2V0LgaYiZ2CeJh+yDpBWqi70hJyXgecvpProl4JUjNmI7UVOJxuNNfhNyt5zaeIMH86IS3MZSaTBwWZ9pz0ADkK7/hRAo7gasZNR0//fqNuR9zlNdYn0kQr+GgkYXYIfOruY30tWAPIRvRY7N5HocAM3AkuMFvl2KZD7jBgBoCQRyDhrKPZs5ma3/ewipPVrPrjU2so6ODqarKWlvbWO35C2zv/oNs4ZIiljEix2wiDuGKF/Ee4XQOe8y/o/p/7Bz8Nvu+sFgzHCmKorDSI0fZ6NyJJjOxyjpQdJPF8FgEz7Mw6hWBH+V/8TWrv3KVbEUPdmTHryVMzBxlMhStYFDXkU0+Tqf0DOR7NVbGdMFUSRQ4CNnvfsg1FrEE6abFYrmP7BrRVhmXdAgrYsocOVpGTScOb3s7m/7pHL65CGUXxNfJshF4PfMClXbt2UdNhkFuY2rjHqZc+JYpZ2cwpWYKU87NZWrdT0z1nqFKfNravCznvdjfRLIgjSbLOnbB8yrsejJWKFyxipri4GvWTMtlyUz+482wUqpGMrX5EP3ITF39lZjnBMzPOWRbBx6WYOHI7PHM55OpGSPqjWNMPu7iGg4npTYfZnEnRTCyfVcJ12BvgoEuINt+MKcChft/44+a2rQfRv0trsnepJzOhU50UCQdXJ1iWmIFsZCs+4GZvQILxn0wVduQQlG9NUwut3PNRSql9nOKZqT08FG+yR4E2ZJP1v0rDzy4gQXbtu+isMGoTDmVrZupSGXyiYzwOubU6+LfywZ0/1ttOUIxdWRZZkOHZ3ON9qDxZD8paYAg9seHdreHNTY1U1gdtXFvtwFcbbBDPaK0M7kyXROTvf63F/h9VRZVMrJwSSHPZE9KJfsweQVxEj4cNXYChTOinJke1IFP4EkvHQDT4TqAUr1nqaJOyb6DPJNc4UppGTz4CbIP+e8Sl2EBHhdMqF2Q+zaDgehSKMWQQii13rxE4wEw1GhYwbcIWfcDD7dgQUHRSgoXREedoXE0o/ydx5TzX0Wo+dp+EBxDOfclBdfBU6zBZE+CYz1Z9wMPdmPB8h9XUzgdtbXa2PiFb6gkCrqajDFqJlOBDi6nJqM8CWKrxZ35NFn3Azm1CQvxqByK2l5rbPxUjvYM30ykUv/dZIxxdiZF17l1q4NvOFSCuIBs6+CmgIWzeXPA12JoPBFSLi6i4DoN167zDQcJBroJj/lkWwc3Bawwcap5ZBD55DDdAExg9eoGeBNjjKZqYANs2MoVbmDBdXFZDqWisoprOlh2l+Qhy0bgDaRjhVRphJaLoSiXlulG/1miPcNDmsFU+zntORfcFwJ1y63a0hrKmvWbuKYDgk/JIrJrBj/YcW3FiierT1PIIDob9GOE9gbWRfkGZuv1Ln5HQY1M/jiPazwg8FcMVu/xO+YA3wGlWBF3RB7K5eUGwzHp+CCYUzcoog7mP54CQk2bJS4mu2agA7lYSUjL1AKaUBVt+eMai0Tw7aDerKBgRhYX/MAxyxd+cJFlIxZL1kNQqN1zLlhUQKFDgC+wmDpR7oA5U0pBjFyuq4dP1wyu2XCCRWcW2TYCk3kKVkhJzWB/nTGfVzTwTVwuNh8vwkg5Pc6/b3DAY/vM/Hlck73J6pYyyLaO0+l8EGZ7JVbIzBrLWlrM+dpN13VYnQqZXDXcbBwmPJ5a1aYDUDH8wW/Nuo1ccxEJBptsG0l2Si9BJ7xYadK0WdpZvVdgYuIyiscO1nkVPHdRQXgO/17WPXEhdfdaXem2SGVzpr3R4+0cBF0U6GnFiSpqMnFs37lHu7LxmxfL+6emPkpNxw+MvhPW3E4MnjthmnbnmSh8Pp923goMDiyLp/ASjZqOH/xPukD64J1Nj3MgCnCy4mXvsHdyu81D2hxwOKQnqen4wbyCidGKwfFapTGKC9xw4CXwlm07Qi+wfDBIc8NeDcaCw5X2CrzOlkAji5cuZ2s3bI5axavWaCmSN2c+y8p5P9i0JjC+0zpQepmaTRzwQbM5tLGESZCawXiR1Z32GjWXePwTV9qpfZnFKcjtjRBrKZifgJdlCU2Vu9xRJCX9B0vGCkHwNShQAAAAAElFTkSuQmCC"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div style="color: grey;" class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li style="display: inline; padding-right: 40px;" class="nav-item">
        <a  style="font-size: 20px; color: #545454;" class="nav-link" href="home.php"><img src="https://png.icons8.com/office/40/000000/news.png" width="30px" height="30px">&nbsp;<span style="color: white;">Feed</span> <span class="sr-only">(current)</span></a>
      </li>
      
      <!--Notification system starts-->

      <li style="display: inline-block; padding right: 30px" class="nav-item dropdown">



        <a style="font-size: 20px; color: #545454; display: inline-block;" class="nav-link text-muted" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

          <img width="30px" height="30px" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAYAAABXAvmHAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAAHDSURBVGhD7ZhLTsMwEIbDBrasoahO1RXiCCw4BYdggcRFQBV1cgZ6CXY8FpUQHIEDRLKJxKphJkwqy3iTeOwqwp/0L5qJfs+0foybJRKJhDeiULdZ0+zRx/GRF7rJpXqYLzYH9GhctAX8FvE4vasO6fF42BYAElJ9zBf1hELjwCygLaJQn7NCn1GYh9NVsy8KfS2kfoVBvuxBA6ialvqChvdjUtbHMD/fHIMEFfwS36LUl5TGMHBnAKN31wBRJNUmX+obSqc/OG2cxrHkWwCYvPwxjSSWKQRGMRasSzyL2GHcarZU5/SKN7Y36zZqm3eiMAumL/tBZpqbojALW98QrYSZtCkKs9B6hmrm7MQ7UZgFmPPjbqcTiUSiJ7DltVsfI66tGkVhPvCwwUOH29xOvBOFecBjHo/7EOZm0qYo7A82WNhoBTEHTF9TFPYDW1tscYOYA9ia296d6JXh4KUCjCrbOIaE1IrSGAZe5/Ba5zKPIqmfKZX+4EW6vVC7jGNJqitKpz+7L0Ct8c80SmcYu5tCan1yXx9RGn7EWsS4YGHOP+G08f7mbUJvo1EIfZBFIWQrEY1QzVxcArTTiUTiX5JlPzGGXbXGQvRnAAAAAElFTkSuQmCC">&nbsp;<span style="color: white;">Updates</span>
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

<?php $sql = "SELECT * FROM signup INNER JOIN posts ON signup.name = posts.name ORDER BY time DESC LIMIT 5";
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
  overflow: auto;">

  <img class="img-fluid" style="border-radius: 50%; width: 20px; height: 20px; border-width: 4px; border-color: white;" src="<?php echo $row["image"]; ?>">



  &nbsp;<?php echo $uname." recently posted "; ?><a style="color: blue; font-size: 15px; width: 20px;" href="post_view.php?id=<?php echo $id; ?>">"<?php echo $title; ?>"</a> <span style="font-size: 12px;">(<?php echo $views." Views"; ?>)</span>
          
          
          
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
          $username=$_SESSION['name'];

           $sql = "SELECT * FROM signup where name='$username'";
              $result = $conn->query($sql);

               if ($result->num_rows > 0) {
                // output data of each row
               while($row = $result->fetch_assoc()) {
           $location= $row["image"];

           ?>

<li class="nav-item dropdown">
        <a class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img class="img-fluid" style="border-radius: 50%; width: 30px; height: 30px;" src="<?php echo $location; ?>">
        </a>

<?php

}
             } else {
            echo "0 results";
           }

 ?>



        <div style="background-color: #f1f1f1;" class="dropdown-menu" aria-labelledby="navbarDropdown">
<img width="55px" height="55px" src="https://png.icons8.com/color/96/000000/user-male-circle.png"><span style="font-size: 20px; font-weight: bold;"><?php echo $username; ?></span>

<center><a class="dropdown-item" href="profile.php">View Profile</a></center>
<hr>
<a class="dropdown-item" href="profile.php"><img width="25px" height="25px" src="https://png.icons8.com/color/48/000000/handshake.png">&nbsp;Confessions</a>

    <a class="dropdown-item" href="user_blog.php"><img width="25px" height="25px" src="https://png.icons8.com/color/48/000000/rss.png">&nbsp;Blogs</a>
    <a class="dropdown-item" href="settings.php"><img width="25px" height="25px" src="https://png.icons8.com/color/48/000000/settings.png">&nbsp;Settings</a>
    <a class="dropdown-item" href="logout.php"><img width="25px" height="25px" src="https://png.icons8.com/color/48/000000/shutdown.png">&nbsp;Sign out</a>

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
    <a style="background-color: #e4e4e4; border-radius: 7px; line-height: 4px;" class="nav-link active" href="home.php"><img height="20px" width="20px" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAAGqSURBVGhD7VlLTsMwFKzgEMDBCuxYJDkBILGBXAQkBDtEBYhELPiUgiggNixhWXEDaNyWj4xHePFUeRESx46iN9Is82bmxXEsvxaDwWA0C+0DORudiuUwzfaDNDt3SaW5F6RiKY7ljLZTDNHZcCFMxFOYCumZjyvJcF7b+h/wJlQ3HgxFPTHrF3ozf8vJVNAfscy0vfzAN0GLrF+OZOflUx6/uiG01pQm9YBvRtvLD/XQFS1yqAq/vf84JTSpB3jS9vIjSLJbWuRIdckkViWhST3Ak7aXHxzEIjkIRWODdDwEgSb1YCVIfDOW3cGX7A2+nRBaW72x/SB1oJUgkeJGdyQ3VZdcEFpUH7QSZOd5YlzHVRKa1IOVILz9liAHoeAgFslBKKaD+Nh+t6vYfsFG/BDrQCtBcGi8dnhohBY0qQcrQRpzjOfttwQ5CAUHsUgrQRpzZYoLY1oEF8oobLpwroLQWr2wcIldy7FCItraXn5g0KM60DcV9MOCgx4AozfVhXtzYXcM0uwuOPmY07aKAV0IE7GoOrI7PaysmtCEdulhKIPBYNQMrdYvnJsOnW3P0qkAAAAASUVORK5CYII=">&nbsp;Feed</a>
  </li>
  <li class="nav-item">
    <a class="nav-link text-muted" href="trending.php"><i style="color: blue;" class="fas fa-check-circle"></i>&nbsp;Trending<span class="badge"><?php 
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
    <a class="nav-link text-muted" href="cwrank.php"><img width="20px" height="20px" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAYAAABXAvmHAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAAQLSURBVGhD7ZnLaxNRFMaLr4U7Xyt1bx/a6uSOFQrBmVK6cKdFraBIRRfiTqi4cWe7UARbqI+FgkgXUqGodesDhbpT6x+g1o1VqU2TtCHt9XzTkzRtzkzvZJK4yQc/CJl7zvnuzJ17b27qaqqppujSXV3rk+1266xjXyVGZl31hfiTcO0MwOdZ157wrlEbtNXX6tZx+P9TqiO2mwz2Jxz1gwzqMCRcNYnYZNzexemqp5m4tT3h2PeIeclcGJCDOjKEnJy+sqI71z3rqN+SmYhMITeXKb90V8MmulP3hcJlhTpxR1vWRi5bHukj1mYyPyYVrATUiReoyeWjie981cznoE6MluVJRBk26XOWh3TNBAwntlGaKMEpKbEp2eEmD+maKQk3dpzthNNMZ8sOWnR+SUlNSPcc0PrDHg98ltoYMvXXVdvYlrnw+IRkxmQfN+U7gM9SG3PUINsyk7fCRlikUmetvPkc+E5qawK8JJ3WnWxvbdGL2y8lMiX7aPnu58B3UltTqBN9bC9Y2GTR8JmUkpiQOlN893PgmhRjAnXgm9EGMOWqQ1ICIzrku5/DewrURow1IOlYNtv0l7clFoLztFOio0qnz1t6/mqLztxq9owtvGzQerxeNL4CaoO2iEEsciAXciK3WDNHu7rCNv1F4/+pGEykTlt68bVgqkwgN2pItZdQT9imv6jhRHHgMumLNL+/N7jTYaGcyC3VzOPYn9mmv/jXk5yASV+gF/WdYKJUKBdySrVWQAsr2/SX6fyf7qHh9Db6k0AO5JJqrAbe2Ka/TDsAsDgtvim9E4gNs8AZdcBkCBXivdivwncCMcEvrIDJEMKLIgYHMNe7XzQZBGKkXIE46hPb9Bd1YEQMDiDT1yyaDAIxUq5gTKbRtRYygewD/9XXD8RIuQJxVC/b9Jd3QCUFB7AwRquwYDIIxEi5gki6McU2/cWbue9SApFO5b+FGGfEa/VerJhTwHgzB1HjPimJBGaSYnM0RB7u1anumAc+Sx0JMwslHHWd7a0tHPeZrgdzl1fOQNnhRnFux3e4VtgWsavbSZCXuVA/aCDa1A1JyVaTubE0Ay2MNBptB9AGbRGDWKlNMWqAbZkLP6SxcMgJl8nc3KfTl2gTttZWuBBqixjEitcLceyf0x2tW9lWOCUO2yfFpFWEhk8X2ylN9PLclRJXBce+zTZK19LRohoVC1QQ1MQfJ2wjmrzDXUc9lwpVAho2z8p2uJsTDlqjHnaZoQZ0PL6By5ZfCefgCSo0VVw4MlMzjn2My1RW3hTrqkHTxS4ILFK469NtbVs4ffXEK3Yf8VUyFwRisD0IvcJWQthk4dAJ5zbYs+OHB/5HwxMCS/+pqY98rRe7SuONWU011RSgurp/bE7IYetvMB4AAAAASUVORK5CYII=">&nbsp;CW Rank</a>
  </li>
</ul>



<br>

<p style="font-size: 17px; line-height: 5px;">Most Viewed</p>
<hr>
<ul class="nav flex-column">


<?php $sql = "SELECT * FROM posts WHERE views >= '25' ORDER BY id desc LIMIT 5";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {

      $id = $row['id'];
      
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
    <a class="nav-link text-muted" style="font-size: 15px; line-height: 4px;"><img height="20px" width="20px" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAARESURBVGhD7Znba9NQHMf37F28/QuOsYtrk+EYFJIOhg6R6VQQ9iZ4e/MPUOg2L6Dgg4I+KDIRp4h/wtzEOadMH/Uf0HnBbenibGsbf9/sdLbp7zQnbdr50C98oCS/a87JyUna1FBDDdVPyd79u5OGPpg0tZFlU3u6bOqT9PsdWDb0FziGc5ahH4WtcPs/tBBr30bFnyfeJk09R8U7KsCWmpqBL2KIcPWX24CpX6GrbHGFBsLQljBSdW+Ikg/RVPlWUlDVaPPU0EmRpnb63t29mRp4yBcRIpTjayy2SaQNV0mjaw/N5zk2cQ3AAoGcIn04svo6dtFV+sQlrCmUE7lFGdUJ04muzgc2kQJ2v+bCnVMBq2Eo04xuwEdcAlXSV9tduHMBGBPlVCYKMOQJGAi7X3dyU80u+M3ZqFLxarbY07O92iU2PdruOLN7XfCbs1FHm6/oObP6sOMCqmEf1Jzc5GoTAL9xjLNVJWloo6I8NaHzap/YqZGOtSby4Bhnq4yhLwYaFex/2ECK2AcwGs0ljeAYznE+qlhm9Kwo0180rd5wQVRJJf7dG15wjvNRhabXa1Fmeblb8QC72ELsw5qzcqrTyU2UjkYenIMNbLkYftBsyVqxyE5RrlxkOMgFyIOp8Wso4vy+sM9diTJ3W53s8xYn91JevAz4wBcxEAsxEdtv+llm1xFRrlxYGThnl7juZO60skWFCXIgF1sDQTNmWJQrFxk+8ToWEdeczK3aNYPYyMHmzmPoj0W5ctGyO8U6F0JXK32zjS2kGhCz3EisQa/Noly56B55zzp7QTPXw2sGsZSaIKjGOVGuXDDinGWkr8mXWlUQg4stQ6kRpanlITVceTPw5WKWRWVqkWH5m11C5l7wBQA+XCxfVG52fM1gnX34M97CFlsO+HCx/KCplRDlykVGZR+IMri9lR/w4WL5ofRAxDty0C0KthtcoSoE3arQhc4umdoOUW550fSa4YLIWDndyRapAny5mDKokWlRpr/I+BwXREbqYum7B8AGMXWpw0W2kYQvF1OGZWpnRJn+cl+sDG2JC8SRuV28YmEziE1g4eYPv3HMu7mEb2EsHxYCv+7SqFxmArFkn4kV6xU1cKPNsQ/J5z3OwQa28IEvZ8ehtFn0SrzuznMBi6BtBb6SYLNnD0R5GwbYwge+KlsTauLLjz59iygvmPAJhgtaRB+9nxxTb8CL60sxuHOFJM3ocVFWZaIgY96g9YbekR6IcioXPlfS/TLLJagHeBQ4/ZENopzqtG4fsU39Y2gfsfNy/1bAf4F8wtDBLAi9ibwwzWhkav5HD61Q93O9bRtF2toJqxmWQ66IaqBR+Ewjf0KkqY/wnKGGRoLsAKQY+iI1kfgZj2wV4esvtyHamxHTRJYtlAG28MEn0HVtgBO+AFrx6AAVmKCrPE6jNYEFwl0k6DeO4RxslLfiDTXUUAhqavoLy0DbHDFMVm4AAAAASUVORK5CYII=">&nbsp;CW Rank<span class="badge">

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



    <br>

          


    <?php

include 'conn.php';

if (isset($_GET['query'])) {


    $query = $_GET['query']; 
    // gets value sent over search form

    ?>

<div class="col-5">
      <div style="width: 600px;" class="shadow-none card">
      <div class="card-body">

<p style="font-size: 20px;" class="card-title"><span style="font-size: 25px; color: #6666FF;" class="fab fa-searchengin" data-toggle="tooltip" data-original-title="Verified"></span>&nbsp;
Search Results for "<b><?php echo $query; ?>"</b></p>   

</div>
    </div> 

    <?php
     
    $min_length = 3;
    // you can set minimum length of the query if you want
     
    if(strlen($query) >= $min_length){ // if query length is more or equal minimum length then
         
        $query = htmlspecialchars($query); 
        // changes characters used in html to their equivalents, for example: < to &gt;
         
        $query = mysqli_real_escape_string($conn, $query);
        // makes sure nobody uses SQL injection
         
        $raw_results = mysqli_query($conn, "SELECT * FROM posts
            WHERE (`title` LIKE '%".$query."%') OR (`post` LIKE '%".$query."%')") or die(mysqli_error());
             
        // * means that it selects all fields, you can also write: `id`, `title`, `text`
        // articles is the name of our table
         
        // '%$query%' is what we're looking for, % means anything, for example if $query is Hello
        // it will match "hello", "Hello man", "gogohello", if you want exact match use `title`='$query'
        // or if you want to match just full word so "gogohello" is out use '% $query %' ...OR ... '$query %' ... OR ... '% $query'
         
        if(mysqli_num_rows($raw_results) > 0){ // if one or more rows are returned do following
             
            while($results = mysqli_fetch_array($raw_results)){
            // $results = mysql_fetch_array($raw_results) puts data from database into array, while it's valid it does the loop

              $title = $results['title'];
              $post = $results['post'];
              $id = $results['id'];
              $username = $results['name'];
              $views = $results['views'];
              $time = $results['time'];

?>
<br>

      <div style="width: 600px;" class="shadow-none card">
      <div class="card-body">

<li style="display: inline; background-color: #bdbdbd;">

  <b><a style="color: black; font-size: 15px; background-color: #bdbdbd;" href="post_view.php?id='<?php echo $id; ?>'">

    <h4 style="font-size: 15px; font-weight: bold; color: blue;"><i class="fas fa-link"></i>&nbsp;<?php echo $results['title']; ?>

  </h4></a></b>

  <p style="font-size: 12px;"><?php echo "Confessed by ".$results['name']; ?>
<p style="font-size: 15px;"><?php echo substr($results['post'], 0, 200)."..."; ?>
  <hr>

<ul class="nav">
<li><div style="font-size: 12px;" class="text-muted"><i class="fa fa-eye"></i>&nbsp;<?php echo $views." Views •"?></div></li>&nbsp;
<li><div style="font-size: 12px;" class="text-muted"><?php echo time_ago_in_php($time); ?></div></li>
</ul>

</p>
</li>


</div>
</div>



<?php

            }
             
        }
        else{ // if there is no matching rows do following
?>

<div class="col-md-12">

<p>Sorry, couldn't find any results for "<b><?php echo $query; ?></b>". Try for something else!</p>

</div>

<?php


        }
         
    }
        else{ // if query length is less than minimum
            ?>

 <div class="col-md-12">

<p>Minimum length is <b><?php echo $min_length; ?></b>. Please try with more keywords!</p>

</div>           

            <?php
    }
  }
?>





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