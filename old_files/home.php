<?php

session_start();

include("conn.php"); 


$username=$_SESSION['name'];
?>


<!DOCTYPE html>
<html lang="en">
<head><meta http-equiv="Content-Type" content="text/html; charset=gb18030">

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
  
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>Home - ConfessionWeb</title>
<link href="https://fonts.googleapis.com/css?family=Slabo+27px" rel="stylesheet">
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






</head>

<script>    
$(function(){ /* to make sure the script runs after page load */

  $('.item').each(function(event){ /* select all divs with the item class */
  
    var max_length = 400; /* set the max content length before a read more link will be added */
    
    if($(this).html().length > max_length){ /* check for content length */
      
      var short_content   = $(this).html().substr(0,max_length); /* split the content in two parts */
      var long_content  = $(this).html().substr(max_length);
      
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


<body style="background-color: #f1f1f1;">
  <nav style="position: fixed;
    width: 100%;
    left: 0;
    top: 0;
    z-index: 100;
    border-top: 0;" class="white lighten-1 col-lg-12" role="navigation">
    <div class="nav-wrapper container col-7"><a id="logo-container" style="color: black; text-decoration: none; font-size: 25px;" href="home.php" class=""><img style="border-radius: 10%; width: 30px; height: 30px;" src="feed/images/logo.png"></a>
      <ul id="nav-mobile" class="right">
        <li class="active"><a class="text-muted" style="color: black; text-decoration: none;" href="home.php"><i style="color: #3f3f3f;" class="far fa-newspaper"></i>&nbsp;News Feed</a></li>
        <li><a class="text-muted" style="color: black; text-decoration: none;" href="user_blog.php"><i style="color: #3f3f3f;" class="fas fa-rss"></i>&nbsp;Blogs</a></li>
        <li><a class="text-muted" style="color: black; text-decoration: none;" href="profile.php"><i style="color: #3f3f3f;" class="fas fa-handshake"></i>&nbsp;Confessions</a></li>
        <li class=""><a style="color: black; text-decoration: none;" href="">
          
<?php

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


<?php }?>

          <ul class="dropdown-menu dropdown-menu-right" style="background-color: #f1f1f1;">
      <li><a style="color: black; font-size: 15px;" href="profile.php"><i class="fas fa-user-circle"></i>&nbsp;Profile</a></li>
      <li><a style="color: black; font-size: 15px;" href="user_blog.php"><i class="fas fa-rss-square"></i>&nbsp;Your Blogs</a></li>
      <li><a style="color: black; font-size: 15px;" href="profile.php"><i style="font-size: 17px;" class="fas fa-handshake"></i>&nbsp;Confessions</a></li>
      <li><a style="color: black; font-size: 15px;" href="settings.php"><i class="fas fa-sliders-h"></i>&nbsp;Settings</a></li>
      <li><a style="color: black; font-size: 15px;" href="logout.php"><i class="fas fa-sign-out-alt"></i>&nbsp;Sign out</a></li>
    </ul>
</div>






        </a></li>
      </ul>
    </div>
  </nav>
  
<br><br><br>

  <div class="container">
    <div class="section col-lg-7">

      <!--   Icon Section   -->
      <div class="row">

        <!-- Modal Trigger -->
  <div class="container">
  <div class="row">

<div>
    <div class="">
      <div>
      <p style="font-size: 17px;">Feeds</p>
      <hr>
      <ul class="nav flex-column">
  <li class="nav-item">
    <a style="background-color: #dbdbdb; border-radius: 7px;" class="nav-link active" href="home.php"><i class="far fa-newspaper"></i>&nbsp;News Feed</a>
  </li>
  <li class="nav-item">
    <a class="nav-link text-muted" href="trending.php"><i class="fas fa-check-circle"></i>&nbsp;Trending<span class="badge"><?php 
$id = isset($_SESSION['id']);

$sql5 = "SELECT * FROM posts WHERE views >= '50'";
$result5 = mysqli_query($conn, $sql5);

$rowcountstrending = mysqli_num_rows($result5);

echo $rowcountstrending;

    ?></span></a>
  </li>
  <li class="nav-item">
    <a class="nav-link text-muted" href="profile.php"><i class="fas fa-user"></i>&nbsp;Profile</a>
  </li>
  <li class="nav-item">
    <a class="nav-link text-muted" href="user_blog.php"><i class="fas fa-rss-square"></i>&nbsp;Blogs<span class="badge"><?php 
$id = isset($_SESSION['id']);

$sql3 = "SELECT * FROM blogpost WHERE name = '$username'";
$result3 = mysqli_query($conn, $sql3);

$rowcountsblog = mysqli_num_rows($result3);

echo $rowcountsblog;

    ?></span></a>
  </li>
<li class="nav-item">
    <a class="nav-link text-muted" href="profile.php"><i class="fas fa-hands-helping"></i>&nbsp;Confessions<span class="badge"><?php 
$id = isset($_SESSION['id']);

$sql2 = "SELECT * FROM posts WHERE name = '$username'";
$result2 = mysqli_query($conn, $sql2);

$rowcounts = mysqli_num_rows($result2);

echo $rowcounts;

    ?></span></a>
  </li>
</ul>

<hr>

  <a class="text-muted" style="display: inline; font-size: 13px;" href="assets/about.html">About</a>&nbsp;&nbsp;&nbsp;
  <a class="text-muted" style="display: inline; font-size: 13px;" href="assets/privacy_policies.html">Privacy</a>&nbsp;&nbsp;&nbsp;
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

<?php

include 'conn.php';


$id = isset($_GET['id']);
$sex = isset($_GET['sex']);


 $result = mysqli_query($conn, "SELECT sex AS gender FROM signup WHERE name = '$username'");

$row = mysqli_fetch_assoc($result);

$gendercheck = $row['gender'];

if ($gendercheck == "Male") {
   ?>



          <img style="border-radius: 50%; width: 25px; height: 25px;" src="image/avatar.png">

<?php 
 }else {   
?>

<img style="border-radius: 50%; width: 25px; height: 25px;" src="image/avatar_female.png">

<?php 
}
 ?>




        &nbsp;<b><a class="text-muted" style="border-radius: 50%; font-family: 'Work Sans', sans-serif;" href="profile.php"><?php echo $username; ?></a></b></h5>
        <b><p class="card-text text-muted"><a style="text-decoration: none; font-size: 20px; font-family: 'Work Sans', sans-serif;" href="" data-toggle="modal" data-target="#exampleModalCenter">Want to confess something, <?php echo $username."?"; ?><br><small>Confess your experiences, emotions and everything inside you</small></a></p></b>
      </div>
    </div>

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

<div style="width: 600px;" class="shadow-none card rounded">
      <div class="card-body">

<?php

if ($views >= 50) {

 ?>

<div class="text-muted" style="font-size: 13px;"><span style="font-size: 13px; color: #6666FF;" class="fas fa-check-circle" data-toggle="tooltip" data-original-title="Verified"></span>&nbsp;Trending Post</div>

<?php
}
?>


        <h5 class="card-title"><?php echo $row["name"];?></h5>
        <div class="text-muted" style="font-size: 13px;"><i class="far fa-clock"></i>&nbsp;<?php echo time_ago_in_php($time);?></div>
        <hr class="my-8">
        <a style="color: black; font-size: 20px;" href="post_view.php?id='<?php echo $id; ?>'"><p class="card-text" ><?php echo $row["title"]; ?></p></a>
        
    <p class="card-text" style="font-size: 15px; margin-left: 12px;"><?php echo $row["post"]; ?></p>
                
        <hr class="my-8">
<ul class="nav">
<li><div style="font-size: 12px;" class="text-muted"><i class="fa fa-eye"></i>&nbsp;<?php echo $views." People read this • "?></div></li>&nbsp;
<li><div style="font-size: 12px;" class="text-muted"><?php echo $row["name"]." confessed this "; ?></div></li>

<!-- Post Time read estimator-->
<?php
if ($len > 200 && $len < 400) {
 ?>
<li><div style="font-size: 12px;" class="text-muted">&nbsp;• 2 Mins read</div></li>
 <?php 
}elseif ($len > 400 && $len < 600) {
 ?>
 <li><div style="font-size: 12px;" class="text-muted">&nbsp;• 4 Mins read</div></li>
<?php 
}elseif ($len > 800 && $len < 1500) {
?>
<li><div style="font-size: 12px;" class="text-muted">&nbsp;• 6 Mins read</div></li>
<?php 
}elseif ($len > 1500 && $len < 3500) {
 ?>
<li><div style="font-size: 12px;" class="text-muted">&nbsp;• 8 Mins read</div></li>
<?php 
}elseif ($len > 3500 && $len < 5500) {
?>
<li><div style="font-size: 12px;" class="text-muted">&nbsp;• 10 Mins read</div></li>
<?php 
}elseif ($len > 5500 && $len < 8500) {
?>
<li><div style="font-size: 12px;" class="text-muted">&nbsp;• 12 Mins read</div></li>
<?php 
}elseif ($len > 10000) {
?>
<li><div style="font-size: 12px;" class="text-muted">&nbsp;• 18 Mins read</div></li>
<?php }?>


</ul>
      </div>
    </div>
<?php 
    
            }
} else {
    echo "No Confessions yet.<br> Start making confessions!";
}
$conn->close();
?>




    <!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">

<?php

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


<?php }?><?php echo $username." Confessed this"; ?>






</h5>
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
                  
		<textarea name="des" type="text" id="editor" placeholder="Write your confession here..." required></textarea>
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
              <button style="float: right;" type="submit" class="pull-right btn btn-primary" id="sendEmail">Confess
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


    


  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="feed/js/materialize.js"></script>
  <script src="feed/js/init.js"></script>

  </body>
</html>
