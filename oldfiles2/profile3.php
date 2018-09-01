<?php

session_start();

include("conn.php"); 


$username=$_SESSION['name'];
$position=isset($_SESSION['position']);
?>


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title><?php echo $username ?> | ConfessionWeb</title>
<link href="https://fonts.googleapis.com/css?family=Merriweather" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Song+Myung" rel="stylesheet">
  <!-- CSS  -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="feed/css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
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
  a {
    color:#1d1d1d;
    text-decoration:none;
}
a.active {
    text-decoration:underline;
}

.clearfix {clear:both;}

.img-circle {
    border-radius: 50%;
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
    <div class="nav-wrapper container col-7"><a id="logo-container" style="color: black; text-decoration: none; font-size: 25px;" href="home.php" class=""><img style="border-radius: 10%; width: 30px; height: 30px;" src="feed/images/logo.png"></a>
      <ul id="nav-mobile" class="right">
        <li class=""><a class="text-muted" style="color: black; text-decoration: none;" href="home.php"><i style="color: #3f3f3f;" class="far fa-newspaper"></i>&nbsp;News Feed</a></li>
        <li><a class="text-muted" style="color: black; text-decoration: none;" href="user_blog.php"><i style="color: #3f3f3f;" class="fas fa-rss"></i>&nbsp;Blogs</a></li>
        <li><a class="text-muted" style="color: black; text-decoration: none;" href="profile.php"><i style="color: #3f3f3f;" class="fas fa-handshake"></i>&nbsp;Confessions</a></li>
        <li class="active"><a style="color: black; text-decoration: none;" href="">
          
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

          <a class="dropdown" data-toggle="dropdown"><img style="border-radius: 10%; width: 30px; height: 30px;" src="image/avatar.png"></a>
          <?php 
 }else {  
?>
<div class="dropdown">

          <a class="dropdown" data-toggle="dropdown"><img style="border-radius: 10%; width: 30px; height: 30px;" src="image/avatar_female.png"></a>

        <?php }?>

          <ul style="float: center; background-color: #f1f1f1;" class="dropdown-menu dropdown-menu-right">
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




<!--Content Area-->

  <div class="container-fluid">

    <div class="section">


      <!--   Icon Section   -->
      <div class="row">


        <!-- Modal Trigger -->


  

  <div class="row">

<div>
<br>
  <div class="col-xs-2">

    <?php

include 'conn.php';


$id = isset($_GET['id']);
$sex = isset($_GET['sex']);


 $result = mysqli_query($conn, "SELECT sex AS gender FROM signup WHERE name = '$username'");

$row = mysqli_fetch_assoc($result);

$gendercheck = $row['gender'];

if ($gendercheck == "Male") {
   ?>



          <img class="img-circle" style="border-radius: 50%; width: 160px; height: 160px;" src="image/avatar.png">

<?php 
 }else {
?>
<img class="img-circle" style="border-radius: 50%; width: 160px; height: 160px;" src="image/avatar_female.png">

<?php } ?>


<br><br>



      <div>
      <p style="font-size: 19px;">Feeds</p>
      <div class="divider"></div>
      <ul class="nav flex-column">
  <li class="nav-item">
    <a style="font-size: 13px;" class="nav-link text-muted" href="home.php"><i class="far fa-newspaper"></i>&nbsp;News Feed<span style="font-size: 13px;" class="badge"><?php 
$id = isset($_SESSION['id']);

$sql1 = "SELECT * FROM posts ORDER BY id DESC LIMIT 2";
$result1 = mysqli_query($conn, $sql1);

$rowcountsfeed = mysqli_num_rows($result1);

echo $rowcountsfeed;

    ?></span></a>
  </li>

  <li class="nav-item">
    <a style="font-size: 13px;" class="nav-link text-muted" href="user_blog.php"><i class="fas fa-rss-square"></i>&nbsp;Blogs<span class="badge" style="font-size: 13px;"><?php 
$id = isset($_SESSION['id']);

$sql3 = "SELECT * FROM blogpost WHERE name = '$username'";
$result3 = mysqli_query($conn, $sql3);

$rowcountsblog = mysqli_num_rows($result3);

echo $rowcountsblog;

    ?></a></span>
  </li>
  <li class="nav-item">
    <a style="font-size: 13px; background-color: #e4e4e4; border-radius: 7px;" class="nav-link text-muted active" href="profile.php"><i class="fas fa-handshake"></i>&nbsp;Confessions<span style="font-size: 13px;" class="badge"><?php 
$id = isset($_SESSION['id']);

$sql2 = "SELECT * FROM posts WHERE name = '$username'";
$result2 = mysqli_query($conn, $sql2);

$rowcounts = mysqli_num_rows($result2);

echo $rowcounts;

    ?></span></a>
  </li>

<li class="nav-item">
    <a style="font-size: 13px;" class="nav-link text-muted"><i class="fas fa-eye"></i>&nbsp;Total Views<span style="font-size: 13px;" class="badge"><?php 
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
    <a style="font-size: 13px;" class="nav-link text-muted"><i class="fas fa-chart-line"></i>&nbsp;Performance<span style="font-size: 13px;" class="badge"><?php echo 
number_format($perf, 2)."%" ?></span></a>
  </li>  
  
<li class="nav-item">
    <a class="nav-link text-muted" style="font-size: 13px;"><i class="fas fa-ribbon"></i>&nbsp;CW Rank<span class="badge">

<?php

if ($perf == 90) {
  
 echo "A";

 ?>

<i style="color: blue;" class="fas fa-chevron-circle-up"></i>

 <?php

}elseif ($perf <= 20 && $perf >= 1) {
  echo "D";
?>

<i style="color: red;" class="fas fa-chevron-circle-down"></i>

<?php
} 
elseif ($perf <= 60 && $perf >= 20) {
  echo "C";
  ?>


<i style="color: blue;" class="fas fa-chevron-circle-up"></i>
  
  <?php
}elseif ($perf <= 80 && $perf >= 40) {
  echo "B";

?>

<i style="color: red;" class="fas fa-chevron-circle-down"></i>


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

  <a class="text-muted" style="display: inline; font-size: 13px;" href="assets/about.html">About</a>&nbsp;&nbsp;&nbsp;
  <a class="text-muted" style="display: inline; font-size: 13px;" href="privacy.php">Privacy</a>&nbsp;&nbsp;&nbsp;
  <a class="text-muted" style="display: inline; font-size: 13px;" href="assets/termsofservice.html">Terms</a>
  <br>
  <a style="display: inline; font-size: 13px; color: black;">ConfessionWeb © 2018</a>
  
<br><br><br>
  



  

  
  
</ul>

    
</div>
</div>
    </div>

<br><br><br><br>

    <div style="display: inline-block;" class="col">

      <?php $sql = "SELECT  * FROM signup WHERE name='$username'";
                        
                        
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {

      ?>
      
      <h3 style="font-size: 38px; font-family: 'Song Myung', serif;"><b><?php echo $username; ?>

<?php

if ($sum >= 400) {

 ?>


        <i style="font-size: 22px; color: #6666FF;" class="fas fa-check-circle"></i>

<?php
}
?>


</b></h3>

     <p style="font-size: 24px; font-family: 'Song Myung', serif;"><?php echo $row['position']."  "; ?><a style="font-size: 15px;" class="text-muted" data-toggle="modal" data-target="#exampleModal1" data-whatever="@mdo" href="#">Edit</a>

<div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="exampleModalLabel">Update Position</h4>
      </div>
      <div class="modal-body">
        <form action="pos_update.php" method="post">
          <div class="form-group">
            <label for="message-text" class="control-label">Position</label>
            <textarea name="position" type="text" id="editor2"><?php echo $row['position']; ?></textarea>
    <script>
      ClassicEditor
        .create( document.querySelector( '#editor2' ) )
        .then( editor2 => {
          console.log( editor2 );
        } )
        .catch( error => {
          console.error( error );
        } );
    </script>
          </div>
<div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Update</button>
      </div>

        </form>
      </div>
    </div>
  </div>
</div>

     </p>

     <ul class="nav">
<li><div style="font-size: 14px;" class="text-muted"><?php echo $row['sex']." • "?></div></li>&nbsp;
<li><div style="font-size: 14px;" class="text-muted"><?php echo $row["number"]." •  "; ?></div></li>
<li><div style="font-size: 14px;" class="text-muted"><a href="<?php echo " ".$row["email"]." • "; ?>"><?php echo $row["email"]." • "; ?></a></div></li>
<li><div style="font-size: 14px;" class="text-muted"><?php echo " ".$row["state"].", ".$row["country"]; ?></div></li>
</ul>
<br>
<div class="divider"></div>

     <div class="clearfix">

      

     <div id="js_sel1" style="display: inline-block;" class="clearfix">  



     <p style="width: 550px fixed; font-size: 15px;"><?php echo $row['bio']."     "; ?><a onclick="myFunction()" class="js_showform" data-id="1" href="#">Edit</a></p>

   </div>





  
  <form action="bio_update.php" method="post" id="js_form" class="js_hide_form">

     <div id="myDIV">
            <textarea name="bio" type="text" id="editor5"><?php echo $row['bio']; ?></textarea>
    <script>
      ClassicEditor
        .create( document.querySelector( '#editor5' ) )
        .then( editor5 => {
          console.log( editor5 );
        } )
        .catch( error => {
          console.error( error );
        } );
    </script>
     
    <button class="btn btn-primary" style="background-color: blue; float: right;" type="submit">Update</button>
  </div>
</form>

  <script>
$(function() {
    var par = $('.js_hide_form');
    $(par).hide();
    $('.js_showform').click(function(e) {
      e.preventDefault();
      var hide_ele = "#js_sel" + $(this).data("id");
      var show_ele = "#js_form";
      if($(show_ele).is(":visible"))
        return;
      
      $(".js_hideform").data("id",$(this).data("id"));
      $(hide_ele).hide();
      $(hide_ele).after($(show_ele).detach()); 
      $(show_ele).show();
    });
    $('.js_hideform').click(function(e) {
      e.preventDefault();
      var hide_ele = "#js_form";
      var show_ele = "#js_sel" + $(this).data("id");
      $(hide_ele).hide();
      $(show_ele).show();
      
      
      $("#js_sel3").after($(hide_ele).detach()); //js_sel3 is the id of element after which we want the form should go back
      
    });
});
</script>
<br>



     <b><p style="float: left;"><?php 
$id = isset($_SESSION['id']);

$sql2 = "SELECT * FROM posts WHERE name = '$username'";
$result2 = mysqli_query($conn, $sql2);

$rowcounts = mysqli_num_rows($result2);

echo $rowcounts;

    ?> Confessions</p></b>
<div class="dropdown">
     <a class="dropdown" data-toggle="dropdown" style="float: right; text-decoration: none;" href="settings.php"><i class="fa fa-ellipsis-h"></i></a>
<ul class="dropdown-menu dropdown-menu-right">
  <center>
      <li><a href="settings.php">Settings</a></li>
      <li><a href="<?php echo $row['facebook']; ?>">View on Facebook</a></li>
      <li><a href="<?php echo $row['linkedin']; ?>">View on Linkedin</a></li>
      <li class="divider"></li>
      <li><a href="assets/about.html">About Us</a></li>
    </center>
    </ul>
  </div>



<br>
<br>
     <div class="divider"></div>
<br>


   </div>

<?php
}}


 ?>





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

      return "Posted 1 minute ago";

    } else {

      return "Posted $minutes minutes ago";

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

<?php $sql = "SELECT * FROM posts WHERE name = '$username' ORDER BY id DESC";
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

   ?>

<div class="shadow-none card rounded">
      <div style="width: 500px;" class="card-body">

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
        <div class="item">
    <p class="card-text" style="font-size: 15px; margin-left: 12px;"><?php echo $row["post"]; ?></p>
                </div>
        <hr class="my-8">
<ul class="nav">
<li><div style="font-size: 12px;" class="text-muted"><i class="fa fa-eye"></i>&nbsp;<?php echo $views." People read this · "?></div></li>&nbsp;
<li><div style="font-size: 12px;" class="text-muted"><?php echo $row["name"]." confessed this"; ?></div></li>
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
        <h5 class="modal-title" id="exampleModalLongTitle">Write your Confession</h5>
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
                  <textarea style="resize: none; height: 80px; width: 100%; border-color: lightblue;" type="text" name="des" class="textarea" placeholder="Write your Confession, <?php echo $username ?>..."
                            style="width: 100%; height: 125px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" required></textarea>
                </div>
                <div class="box-footer clearfix">
              <button type="submit" class="pull-right btn btn-default" id="sendEmail">Confess
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
