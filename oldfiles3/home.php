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
	<title>Home - ConfessionWeb</title>


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

<script>    
$(function(){ /* to make sure the script runs after page load */

	$('.item').each(function(event){ /* select all divs with the item class */
	
		var max_length = 380; /* set the max content length before a read more link will be added */
		
		if($(this).html().length > max_length){ /* check for content length */
			
			var short_content 	= $(this).html().substr(0,max_length); /* split the content in two parts */
			var long_content	= $(this).html().substr(max_length);
			
			$(this).html(short_content+
						 '<a href="#" class="read_more">...Read More</a>'+
						 '<span class="more_text" style="display:none;">'+long_content+'</span>'); /* Alter the html to allow the read more functionality */
						 
			$(this).find('a.read_more').click(function(event){ /* find the a.read_more element within the new html and bind the following code to it */
 
				event.preventDefault(); /* prevent the a from changing the url */
				$(this).hide(); /* hide the read more button */
				$(this).parents('.item').find('.more_text').show(); /* show the .more_text span */
		 
			});
			
		}
		
	});
 
 
});
</script>

</head>
<body style="background-color: #f6f6f6;">

<nav style="background-color: white; box-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.2), 0 1px 1px 0 rgba(0, 0, 0, 0.19); width: 1450px" class="navbar navbar-expand-lg">
  <a style="display: inline; padding-right: 120px;" class="navbar-brand" href="#"><img width="30px" height="30px" src="data:image/png;base64,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"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <i style="color: blue; font-size: 30px;" class="fas fa-caret-square-down"></i>
  </button>

  <div style="color: grey;" class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li style="display: inline; padding-right: 40px;" class="nav-item">
        <a  style="font-size: 20px; color: #545454;" class="nav-link" href="home.php"><img src="https://png.icons8.com/office/40/000000/news.png" width="30px" height="30px">&nbsp;Feed <span class="sr-only">(current)</span></a>
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
  overflow: auto;"><i style="font-size: 18px; color: blue;" class="fas fa-portrait"></i>&nbsp;&nbsp;<?php echo $uname." recently posted "; ?><a style="color: blue; font-size: 15px; width: 20px;" href="post_view.php?id=<?php echo $id; ?>">"<?php echo $title; ?>"</a> <span style="font-size: 12px;">(<?php echo $views." Views"; ?>)</span>
          
          
          
            <p style="font-size: 12px;"><i style="color: blue;" class="far fa-clock"></i>&nbsp;<?php echo time_ago_in_php($time); ?></p>

<div class="divider"><hr></div>
          </li>

<?php
}
}
?>



</ul>


<!----Notification system ends-->
      
      <li style="display: inline; padding-right: 90px; padding-top: 8px;" class="nav-item">
        <form action="search.php" method="GET" class="form-inline my-2 my-lg-0">
  <input class="form-control mr-sm-2" type="text" name="query" placeholder="Search confessions by title, post or user..." style="width: 470px; height: 33px;">
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
        <a class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img class="img-fluid" style="border-radius: 50%; width: 30px; height: 30px;" src="image/avatar_female.png">
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
    <button style="margin-right: 190px;" type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#exampleModalCenter">Add Confession</button>
  </div>
</nav>



<!----Views Alert--->

<?php 

$id = isset($_SESSION['id']);


$result = mysqli_query($conn, "SELECT SUM(VIEWS) AS totalsum FROM posts WHERE name = '$username'");

$row = mysqli_fetch_assoc($result);

$sum = $row['totalsum'];
 if ($sum == 50) {
 ?>



<div class="alert alert-primary alert-dismissible fade show" role="alert">
  <img width="20px" height="20px" src="data:image/png;base64,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">&nbsp;<strong>Congratulations!</strong> You just crossed 50 views on your posts. Keep posting more confessions to make it to 100.
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>


<?php } elseif ($sum == 100) {
?>

<div class="alert alert-primary alert-dismissible fade show" role="alert">
  <img width="20px" height="20px" src="data:image/png;base64,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">&nbsp;<strong>Daanngggg!</strong> You just crossed 100 views on your posts. Keep posting more confessions to increase your CW Rank.
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>

<?php } elseif($sum == 200) {?>

<div class="alert alert-primary alert-dismissible fade show" role="alert">
  <img width="20px" height="20px" src="data:image/png;base64,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">&nbsp;<strong>Boom!</strong> You just crossed 200 views on your posts. Keep posting more confessions to increase your CW Rank.
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>

<?php } elseif($sum == 500) {?>

  <div class="alert alert-primary alert-dismissible fade show" role="alert">
  <img width="20px" height="20px" src="data:image/png;base64,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">&nbsp;<strong>Woah!</strong> You just crossed 500 views on your posts. Keep posting more confessions to increase your CW Rank.
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>

<?php } elseif($sum == 1000) {?>

  <div class="alert alert-primary alert-dismissible fade show" role="alert">
  <img width="20px" height="20px" src="data:image/png;base64,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">&nbsp;<strong>Homerunnnn!</strong> You just crossed 1000 views on your posts. Keep posting more confessions to increase your CW Rank.
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>

<?php }?>

<!--Views Alert end-->






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
    <a class="nav-link text-muted" href="profile.php?user=<?php echo $username; ?>"><img height="20px" width="20px" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAARkSURBVGhD7ZhvaJtVFMYz1g5hTlCYsFpnP7SlFRwbbbGKNG2TtEnTpI42DLcyraNjE/9QEGc3EVxm/RAcbtN1dXRE1MZlq/vTrp1D3ZZ0RbETEWEfVIqgsjnHwmzfaAf3eO7bk+59k5uStMlNlDzwo+l7z33Oc26SN2kNOeWUk3zV1dVV1NfXu/Hnp8g4Pp6IgL83UFn2CkM+jlzGwBAPXP+ayrNTGPJ1hGlDz8MgDrTRaDTeRduzQxisJypoQuAwv5hMJivZZFa1tbV2DJXoMyHiNnq0kl1m5HK5luGp/ioIlxToETKbzQVkK18Y4FlRsHg0W+uh5/kGeLnDIlr3kK18YfNLUWFiiIS/dMAGM8MOgFEH/DPkgB1b9MPgofxGtnJlsViWm/D1rQ0TQRQ+GtEweBcrJnt5whOs0YZIJHw0gmFsZC9P/E7Dm3e4zEmFj4YPs22jWR0ED2cz2csTNt3Km7+Jz4IoYDJwDxpkO9nLE2/6vxjE3lj7UqoH4Z5kL0fs6MP33egvm3xxU03MINd9DaCcbNJd0zJ9ogmuD+j3cI+u9hq4eaTsZ+5NbdIv5ivdAr5SmPFXQXD/ndAhfyPstBZAb0eJLqiWg88UqzWhY9a5a9zj9rEq4J7cm9qkX2yg1MqbwmClLuTMkB2828rhyzf017XwNe/2crVWt8a9+CADxRZqI0fMV7KLDVZM6sIsAna8cpINlHSTvVzBZ/YKUaiFwEac68hWvuC8MY+NOG6IgiUDG2n+E/yupWSbGbHR5j5RuGTAwzhEdpkTG256CIOERQETge9lZ1seJLvMCsO8IAqZCPiyeo5sskNs1OERBZ0Pvoe2Z5fYYPVbMHLngy4uWMNOPNpD27JP0Gd4At7PVz/Y4LQxdoBTeI2v8RqspW3ZJ3WQQwaYoy8PoP/uWfhj3dp/aZD5yMZB1hz87v6iPRf2rnnFe4X1LhEH18BrHtnxwZUi94W9a/d9u5JsMqfmoLK6JaD02j6/ObX0qX5YsuEw+Hfjlz9BeC2f7K5Sa/ke27nQLfQ4sP7i1CqylSfXD7DMGVRecwYUpSUYBs6qV8+q4Qqffhv+2L9COACHrz2ANby2oHtU3ctBv7/Qb9fWCcinNulVW+DWSmcgHIgEiGA6fQ3y271qwPION1z2rI4Z4htPEZThGq/htaahazqPWZQv2sZD6f3jyjEeLsaTm4xtPkv1hz9BXvsRNSjnsc5u6OzarFLduXPuOq/htSIPlYDy4/rz04XUNrWyB0P38gbCxhrqTv4OhV1H50JHU9jlV2tEe7XggX3vHGMrqH3q1BIIe0UN49E4fBVa3/kI2tweldZ9H0PDmavC2njgMIepfWrkHJuuxGeDiZqlFd5zbGotxVi8nMHwcWEjOfgoxuJk/Yrdg3eSsKCBHALKdEreK08G/7YJG8jkYriR4ixc/ENKaC4RR1BZ/H9X8M7xnshcKgHlXYqzcKHRHnyzT2QSvPW7KU5OOeW0IBkM/wL9v1qimtMQvAAAAABJRU5ErkJggg==">&nbsp;Profile</a>
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
  
  
  <li class="nav-item">
    <a class="nav-link text-muted" href="cpolicy.php"><img width="22px" height="22px" src="data:image/png;base64,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">&nbsp;CW Policy</a>
  </li>
  
  <br>

<p style="font-size: 17px; line-height: 5px;">Most Viewed</p>
<div class="divider">
<ul class="nav flex-column">


<?php $sql6 = "SELECT * FROM posts WHERE views >= '25' ORDER BY id desc LIMIT 5";
$result6 = $conn->query($sql6);

if ($result6->num_rows > 0) {
    // output data of each row
    while($row = $result6->fetch_assoc()) {

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



    <a class="text-muted" href="post_view.php?id=<?php echo $id; ?>"><img height="20px" width="20px" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAAG2SURBVGhD7dk/T8JAGMdx3pluRjd1VF+Gg6OJWBGEwVUTQETxz4hDOzr4BoyDsVUcnZztUO+HNNbmqbkrd9wTck/yXbC93Cfo8ceKGzdu3MzHBGHc8qOvgFPY02R78uNH8X0QxQmnsKfJ9uTHQQzmINRiNrMGaQxGye7Js3KnwQe5njVI/+EzWdkKkoXVoVI7x0/ketYgqAyGJQQBs7wpj2ELQcAsbfjkxvOxhrRu35PF9Tty4/nYQpo38gjEEtK8HikhEDtIY/CmjECsIHgxLINAbCD1S4FYk0MAmz/NWEB+EH83WxQQOM3yrzPWIfUL8TehghAHQXpv9h2AVUjt/FUJcXT1i0hLMdYgtZ4iQvz6UesgYPbaL+TPjEK8XiSPEAcATjNqnWx+WPC4KYjXVUEMxwcBtY5sRiCqiENxEFDrqKQdUu2EM0cgrRB8DFVC9PUgkPZnZLv1SG48GxAH4kim7i+bdgj6DzNGiCOZum+ajEAQhQHCO4vI66fNGARlMUDsd0PyOh0ZhSBggKi2zSGQcQgq+lJNZzOBzCIHoRazmYNQi9msFGRu/hnqxo0bNwynUvkGoyOViE1rERQAAAAASUVORK5CYII=">&nbsp;<?php echo substr($title, 0, 18)."..."; ?></a>

    
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
    <a style="font-size: 15px; line-height: 4px;" class="nav-link text-muted"><img height="20px" width="20px" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAALnSURBVGhD7ZVLaBNBGMfXouBBD4L0Vi3iyUNF6sFHspOIoIJtZjaIT1REih6E1lM8aMAHSC4qKCIWvQs+mswubXclSH1citZmS/Hq3R4Kgg80frN+kI075uFuYwLzgz+75P/tzPffmZ1oCoVCoYgKcqK4klCeIYzn4Xo7ZvANaHUQ2WyXTs0XhJllnxbJwPhGrGgdhFoxQs1bQgnD3Ik/14WQ4nKdWbk/QnjSKb+PZa1BZ+ZxCPCj0gT/SWj+DNpyYBXizDoKtR/8zfulM+5gdWuAbfFJ2gg1Z6DRmwnKU/HU0x5YtbNxg1/XWSEH3rzsmSpRfg2nWHoSA2MpaRMhBav8bsfgs9U4zdKiG+YR2FJfZY00K/ge3sBWG4YVHIF7o39oegVO0zjeB0fNfTDAUJIVNuPPNYEAF7xvQdJUk3qVMAp7cNh/hxworoLBXlcG9pq7iHYAERr8e5V6n6j5Ng7P7kqP9XmnGNzDC7Lh+q2qDgWn23kcNjywF6/IJoEPbRJCnYulrT7vhEmN95A0Pwy/v5TWM/OqppWX4bBVkIPFXkILC1X11HyCdjTgG/M3JNNnCOU7XiuCI/I7XE/jcH9lO5vohq17CWpHdWqdEi8HrWiAFXnob6xJLULAvTjU/yU2aG2ChuCNSxutIf5FT1tbcJhwFOd7NXtud0CTs1uxojFEGFj2B+KfFFYoF6P8GOzhO7X+tOKs8BgfD4/tZjTHLQdVmsKK8CSN5+vh7X/0hxDfRZLyfiwJTyuCCMj+/Fpo/i6cWO8hVJ4waxta0dCqIDXJlru0qdk1UgmvEdoiiO2ukzcBEl4jqCBRooL46JggdsmC+4WAnNLwb79TgoiG5H7G8yMJYrujoOmAHPckVtSmbYLUm6QeKojnqyBB6k3izFE4dR4F5JQue37HBKk3iQri+SpIEBVEBfH7KkgQFaTdgtjuDXjAluiQ54urzBfPCSZmuqW+kPAEYedQKBSKDkbTfgE/j0tbJ16LRAAAAABJRU5ErkJggg==">&nbsp;Performance<span style="font-size: 13px; color: green;" class="badge"><?php echo 
number_format($perf, 2)."%" ?></span></a>
  </li>  
  
<li class="nav-item">
    <a class="nav-link text-muted" style="font-size: 15px; line-height: 4px;" href="cwrank.php"><img height="20px" width="20px" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAARESURBVGhD7Znba9NQHMf37F28/QuOsYtrk+EYFJIOhg6R6VQQ9iZ4e/MPUOg2L6Dgg4I+KDIRp4h/wtzEOadMH/Uf0HnBbenibGsbf9/sdLbp7zQnbdr50C98oCS/a87JyUna1FBDDdVPyd79u5OGPpg0tZFlU3u6bOqT9PsdWDb0FziGc5ahH4WtcPs/tBBr30bFnyfeJk09R8U7KsCWmpqBL2KIcPWX24CpX6GrbHGFBsLQljBSdW+Ikg/RVPlWUlDVaPPU0EmRpnb63t29mRp4yBcRIpTjayy2SaQNV0mjaw/N5zk2cQ3AAoGcIn04svo6dtFV+sQlrCmUE7lFGdUJ04muzgc2kQJ2v+bCnVMBq2Eo04xuwEdcAlXSV9tduHMBGBPlVCYKMOQJGAi7X3dyU80u+M3ZqFLxarbY07O92iU2PdruOLN7XfCbs1FHm6/oObP6sOMCqmEf1Jzc5GoTAL9xjLNVJWloo6I8NaHzap/YqZGOtSby4Bhnq4yhLwYaFex/2ECK2AcwGs0ljeAYznE+qlhm9Kwo0180rd5wQVRJJf7dG15wjvNRhabXa1Fmeblb8QC72ELsw5qzcqrTyU2UjkYenIMNbLkYftBsyVqxyE5RrlxkOMgFyIOp8Wso4vy+sM9diTJ3W53s8xYn91JevAz4wBcxEAsxEdtv+llm1xFRrlxYGThnl7juZO60skWFCXIgF1sDQTNmWJQrFxk+8ToWEdeczK3aNYPYyMHmzmPoj0W5ctGyO8U6F0JXK32zjS2kGhCz3EisQa/Noly56B55zzp7QTPXw2sGsZSaIKjGOVGuXDDinGWkr8mXWlUQg4stQ6kRpanlITVceTPw5WKWRWVqkWH5m11C5l7wBQA+XCxfVG52fM1gnX34M97CFlsO+HCx/KCplRDlykVGZR+IMri9lR/w4WL5ofRAxDty0C0KthtcoSoE3arQhc4umdoOUW550fSa4YLIWDndyRapAny5mDKokWlRpr/I+BwXREbqYum7B8AGMXWpw0W2kYQvF1OGZWpnRJn+cl+sDG2JC8SRuV28YmEziE1g4eYPv3HMu7mEb2EsHxYCv+7SqFxmArFkn4kV6xU1cKPNsQ/J5z3OwQa28IEvZ8ehtFn0SrzuznMBi6BtBb6SYLNnD0R5GwbYwge+KlsTauLLjz59iygvmPAJhgtaRB+9nxxTb8CL60sxuHOFJM3ocVFWZaIgY96g9YbekR6IcioXPlfS/TLLJagHeBQ4/ZENopzqtG4fsU39Y2gfsfNy/1bAf4F8wtDBLAi9ibwwzWhkav5HD61Q93O9bRtF2toJqxmWQ66IaqBR+Ewjf0KkqY/wnKGGRoLsAKQY+iI1kfgZj2wV4esvtyHamxHTRJYtlAG28MEn0HVtgBO+AFrx6AAVmKCrPE6jNYEFwl0k6DeO4RxslLfiDTXUUAhqavoLy0DbHDFMVm4AAAAASUVORK5CYII=">&nbsp;CW Rank<span class="badge">

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
        <h5 style="font-size: 15px;" class="card-title">





        
        <b><p class="card-text text-muted"><a style="text-decoration: blue; font-size: 20px; font-family: 'Work Sans', sans-serif;" href="" data-toggle="modal" data-target="#exampleModalCenter"><img width="30px" height="30px" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAGAAAABgCAYAAADimHc4AAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAARdSURBVHhe7Z1NixxVGIVbBMWNK3cOpGeYRIwLxZ3L+PUD8g+y1+BK1y4EEaJpTXXPKBE3mUggREHQKAgaNInmS1Fkgt9ZuJHAVHXL9HSc6307byzTnpnpnqpzZ9HngQeGrrr33Jzu+uheVBpCCCGEEEIIIYQQQmzF3hPhrma7ONjMivOz7aIbDVOm/ZvPWQfWhdeShplO7/7ZLL8ysqApNr9snXg9XOZb63c32/m3eCFTbPxAWjdeEw875OACZIin42e9Jh4x6NxosHSz4qzXxCMGTeMFdyzjEZB7TTxQsCz1mnigUFnqNfFAobLUa+KBQmWp18QDhcpSr4kHCpWlXhMPFJrSJ473wqtf9cOZa4Nw9fqNoWd+Hwxfe3ypB8ek1GvigUJTuGexCG983Q+/rfwdruVY2/Z63Gf3Ap4jhV4TDxTK1gp9b3kAS0eeivvu1JvgNfFAoWyPXOzDojfTjgQ0F1uviQcKZWrn9c1OOxv5axyzbweuCV4TDxTK9LX4SUYFj+Oh8+mPAq+JBwplanc4qNxx/DyORXMy9Zp4oFCmy/E2E5U7jjYWzcnUa+KBQpnqDRgBhTLVKWgEFMrUvuGicsdRF+Ea1G3oCCiU7ZELkx8Fh/VFrD4n/iniqn6KqF0r1H5e2Ox0ZKedVjxadqp802vigUJTuu9Yb3hxtTscu8007W97zbahMSn1mnigUFnqNfFAobLUa+KBQmWp18QDhcpSr4kHCmX74JvdsP/kX+H5T1dDK34zPvbdWnh/eS2c/mkw1P621w7HbbaP7Wtj0FxsvSYeKJTlk/Gb7CtnV8NHseRPfp7MD38cDMfaHGhull4TDxRat08f74WFS31Y7HbsXOwneyO8Jh4otC4fWCzCC/EU8vE2PvFbaXPa3JaBsuvSa+KBQuvwkaPdcPTKGiyvTi3DstAa6tBr4oFCq/ro293w7vf88m+5FC/YlonWUlWviQcKreJDb3XDO9+kK/+WlrmXcKfkNfFAoVV86YtVWFAKLRutqYpeEw8UWkVUTErRmqroNfFAoVVEpaQUramKXhMPFFpFVEpK0Zqq6DXxQKFVRKWkFK2pil4TDxQqS70mHihUlnpNPFCoLPWaeKBQWeo18UChstRr4oFCZanXxAOFypvqYR07baLH1eBwGWY7xTNeEw8YLKP55SQP78PhU26WX0r20D64gCnULrjxnP+lnXaSPrYSLWYis7zVCOEOn05MCix1fF/0acR2AaVubZav72oXz/kUogqw4M3M8htz2coBHy6qAkvewGaW9+eyfL8PFXWAit7AbrxDeMqHiboARf/frLi+a2HlMR8i6gQWfpv5H81O92HfXdQNLt3Nil/mOiu7fVfBABZvZsUP863ejO8mWKDym+38wp7F/D7fRTABb8Bn860/7/XNgs1/y2+2iw9mDq3f45tECsry86Xk/3mN+PcN6DROhDv9JZGSWP7L+jlZCCGEEEIIIYQQQohJaTT+AVY1TQ7lzeOWAAAAAElFTkSuQmCC"><span class="text-muted">Want to confess something, <?php echo $username."?"; ?><br><small>Confess your experiences, emotions and everything inside you</small></span></a></p></b>
        
        
   <hr>

<div>
        <a style="text-decoration: none; color: grey; line-height: 4px;" href="#collapse1" class="nav-toggle">Looking for Confessions?</a>
      </div>
      <div id="collapse1" style="display:none">
        
        <ul>
          <li>I want to confess about my life</li>
          <li>My life is totally...</li>
          <li>How to be the best version of myself?</li>
          <li>Love and Relationships.</li>
          <li>Studies and Career related.</li>
          <li>Jobs and Professional life.</li>
          <li>Personal and Private(Follow Platform's Respect <a href="cpolicy.php">Policy</a>)</li>
        </ul>

      </div>

      <script type="text/javascript" src="http://code.jquery.com/jquery-1.7.2.js"></script>
  <script>
    $(document).ready(function() {
      $('.nav-toggle').click(function(){
      //get collapse content selector
      var collapse_content_selector = $(this).attr('href');         
          
      //make the collapse content to be shown or hide
      var toggle_switch = $(this);
      $(collapse_content_selector).toggle(function(){
        if($(this).css('display')=='none'){
                                //change the button label to be 'Show'
        toggle_switch.html('Looking for Confessions?');
        }else{
                                //change the button label to be 'Hide'
        toggle_switch.html('Use these examples to Confess');
        }
      });
      });
        
    }); 
    </script>     
        
        
        
        
        
        
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

<?php $sql = "SELECT * FROM posts ORDER BY id desc";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {

      $id = $row['id'];
      $username = $row['name'];
      $title = $row['title'];
      $post = $row['post'];
      $views = $row['views'];
      $time = $row['time'];
      $len = strlen($row['post']);

   ?>

   <?php





    ?>

    

<div style="width: 600px;" class="shadow-none card rounded">
      <div class="card-body">

<?php

if ($views >= 50) {

 ?>

<div class="text-muted" style="font-size: 13px;"><span style="font-size: 13px; color: #6666FF;" class="fas fa-check-circle" data-toggle="tooltip" data-original-title="Verified"></span>&nbsp;Trending Post</div>

<?php
}
?>


        <h5 class="card-title"><a class="dropdown" data-toggle="dropdown"></a><img width="35px" height="35px" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAYAAABXAvmHAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAAVpSURBVGhD7ZltUFRVGMeZyD70sayZxtSJ+tIoUToKGNjY0NiEm5CSL8042UxgqYCB6WIgJmkxjWPgzC5LmG0xq6CNK28Wb1nmBzJgEikLKNg3XnZJwb3TyzhP57meXfbluZd72RW/7H/mN7Pcc57/+d+z59x79xIVUUQRhS4AiHYOuxOcw0KByyGccTncV50OYdxpd/8rIn4WerAN+2BfVnMPL797clmF+Szghy67YGPhQCVWrHVa3I9yu9nThG1iLptVg9Ph/ocIpgr0YF469OT2d1auYWEzG9BFhQkF5jmG3nyY8At64D62jiupwcMJOxE92x9z+LDhkc0G9zPjRmrAOwEbqwHH5MOHJnHmZzG8F7tgDss3oXbZXOu6BqaycjiY9TrkZ6TCzjWrRCoPHiD7y4HLiceYmcZtwmuUMcWY7SbU6PSQszbFG9qXbM3zcOHceRge/Iusl2EDj6NOE/aJh9gMOAnDINj1HAzvF5PBA3n3VQ201J4lfShYhrEb1hsP8ljKhV8fZUhh/sxIhpWjyVRLepHYhWM8ljKJd1iFN6nBX22wK/1FMqQcWPPnLxbSMxDxZjfknsfjTS/x8YAwojitryQDenhv3XNgfDMROvYuhW92LYMczVSbueoE6UnBMh3m8eSFD1mswBpoIMXhHZl+gZGi9SuhOisBLmuXgLXkKbB9MEV99nK2oW/3O5KfS3pSsG9hSNEDILudJ1IGUuCmxDDFGSvBtC0euvct8QtMcfrteLFm/xubSU8p2Eks5zGlxR+JSQMKz6xTQeXAmrz1qaSnFOMOYS+PKS3W8avAQjlCOQGE8pShlseUFv/hQRWTGAu2+p2AJv5xeDnhCb+w1HGswVrKUwqW7QqPKS12/R+niqX4Pn8hnNqW4A22loVEPH9LHccarKU8pcAbK48pLaXXfw+9J4vBUhLrF1YJWNN7Ut3zEWbjMaWl9gQQhy6dDCmHQ/cK6SWHwhNQt4SQkbqPyZByDNcfIb3kULaE2EahimUZsICtdGofTEtpIqux0l4ysGw/85jSYh3PBBYqYfTiWRYuLjhsEHEweqmO9FCAgsuoyhuZL6M/nJPd0NgWQnhkD48pLXzpRBQq5mLuw9CjjYGB4ifFwAh+xmPYRtUoZczuXsZjSos/zFkCi5VyIXuuLFSNEtgVSNnDHAofXSkTKWx9k7D/rTZIWVQFzdsXkMERbHth8XE4sL0dHH9Mkl6S2N2HeLzpha/7lN4Pzn/RD++sboGkGAM8M68MPt24mgyPYBv2SWZ981NbocU0QHoGwrL8reoHDYpdc3WUmYcRy03QaTsha0WTSNpikxguPbYQ2nY+EhQej2Hb7T4mb52hsFv0osbwYhfKeSzlwh/SeOOgDNn1GHR7psIjmSsa4dnHKsSAGU9roXpLMlsyC0WqtyRBRpxWbMM+2Ne3Vl/QFTSGB5Zh9PrQ9Qd4LHViP242UaYNx/v8AnjYGl/nPQmKJNaGfaha9KTGYmTwODMTm4EKX8ORwUnIe6mFDIFkJjZCGlsiuCeWzj8mkhxTKS6bwJn3JTelOXhj24UyHmPmwleL+JrPY9pwgp79cNBk7PcNj68Wo3mM0CS+3LUL9Wh8NLuDHDwcfJL7oxiejVUXtpe7HrHZmMOWk16b1k4OHg60674VrzhsrHv5sOHXl4d6Snevab1FBQiF3Zq2W8aSK8re/YSq5s/7FxzN6ejeseprMowa0KMs73Jno+G32f9fWYO+L7ai4Kf2fE3rf1Q4ObDGsK+zzWz4fRG3u3uqqYHomvLejVVF3eaPMi9ZijZ958YlgbOL4Gc8hm2VhV3mU2VXN2ANL48ooohmrKio/wHi4HXZxnIVNAAAAABJRU5ErkJggg==">&nbsp;<?php echo $row["name"];?></h5>
        
        <div class="text-muted" style="font-size: 13px;"><i class="far fa-clock"></i>&nbsp;<?php echo time_ago_in_php($time);?></div>
        
        <hr class="my-8">
        
        <a style="color: black; font-size: 20px;" href="post_view.php?id=<?php echo $id; ?>"><p class="card-text" ><img width="25px" height="25px" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAYAAABXAvmHAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAAF7SURBVGhD7ZixSsNQGIUjguDi5NjVxQeopotPkTeQZHLwKVJ8Ad9AsKPIFdyEji5Ojk4KPkW90SPozxlOAul/W+4H36CN536x1SFFJpPJpEl1vNhrynBVl+G9mT2sPMTZ864FWTrxB9u/Y862yNKJv/0PMuRi904gS4cNeYosHTbiKbJ02IinyNJhI54iS4eNeIosHTvwsvxcq/Z8ZOnYAXbImNrzkaVjB7xFlg4b8RRZOmzEU2Tp2AH2OR1Tez6ydOwAO2RM7fnI0rED3iJLh414iiwdNuIpsnTsAPuc9tHu9RVZOnaARfXR7vUVWTpsxFNk6bART5Glw0Y8RZYOG/EUWTpsxFNk6bARL7fhscqAB1t8aK3i0WI79NEiHe2sZ+GtOXk8wqVpwsJ/DK/n0zDBZenC4uNb+lyf3R3ikrQhN/B0MQ0HeDl9/seH+8vT2328tBn8xsc/2JtB/wW8+b6BMlxX1WIX39os4g3Mi2K1gy8zmUwmQyiKL02QMia4BytsAAAAAElFTkSuQmCC"><?php echo $row["title"]; ?></p></a>
        
    <p class="card-text" style="font-size: 15px; margin-left: 12px;">
    
    
    <?php echo $row["post"]; ?>
   
    </p>
                
        <hr class="my-8">
<ul class="nav">
<li><div style="font-size: 12px;" class="text-muted"><i class="fa fa-eye"></i>&nbsp;<?php echo $views." Views • "?></div></li>&nbsp;
<li><div style="font-size: 12px;" class="text-muted"><?php echo $row["name"]." confessed this "; ?></div></li>

<!-- Post Time read estimator-->
<?php
if ($len > 200 && $len < 400) {
 ?>
<li><div style="font-size: 12px;" class="text-muted"> • 2 Mins read</div></li>
 <?php 
}elseif ($len > 400 && $len < 600) {
 ?>
 <li><div style="font-size: 12px;" class="text-muted"> • 4 Mins read</div></li>
<?php 
}elseif ($len > 800 && $len < 1500) {
?>
<li><div style="font-size: 12px;" class="text-muted"> • 6 Mins read</div></li>
<?php 
}elseif ($len > 1500 && $len < 3500) {
 ?>
<li><div style="font-size: 12px;" class="text-muted"> • 8 Mins read</div></li>
<?php 
}elseif ($len > 3500 && $len < 5500) {
?>
<li><div style="font-size: 12px;" class="text-muted"> • 10 Mins read</div></li>
<?php 
}elseif ($len > 5500 && $len < 8500) {
?>
<li><div style="font-size: 12px;" class="text-muted"> • 12 Mins read</div></li>
<?php 
}elseif ($len > 10000) {
?>
<li><div style="font-size: 12px;" class="text-muted"> • 18 Mins read</div></li>
<?php }?>


</ul>
      </div>
    </div>
    <br>
<?php 
    
            }
} else {
    echo "No Confessions yet.<br> Start making confessions!";
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

          <a class="dropdown" data-toggle="dropdown"><img class="img-fluid" style="border-radius: 50%; width: 30px; height: 30px;" src="image/avatar_female.png"></a>


<?php }?><?php echo "Make a Confession!"; ?></h5>
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