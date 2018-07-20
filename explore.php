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



.Div1 {
  
  width: 19%;
  
  float: left;
  margin-left: 82px;
  margin-right: 3px;
  min-height: 600px;
  position: fixed;
}

.Div2 {
  
  width: 45%;
  margin-right: 5px;
  overflow: auto;
  position: absolute;
  left: 28.5%;
}

.Div3 {
  
  width: 22%;
  
  margin-right: 40px;
  min-height: 900px;
  position: fixed;
  right: 0px;
}




#div1{
    
    float:left;
}
#div2{
    
    float:left;
}


.hr-sect {
  display: flex;
  flex-basis: 100%;
  align-items: center;
  color: rgba(0, 0, 0, 0.35);
  margin: 8px 0px;
}
.hr-sect::before,
.hr-sect::after {
  content: "";
  flex-grow: 1;
  background: rgba(0, 0, 0, 0.35);
  height: 1px;
  font-size: 0px;
  line-height: 0px;
  margin: 0px 8px;
}


#hover:hover {
  background-color: white;
  border-radius: 7px;

}


.container {
  display: flex;
}
.container > div {
  flex: 24; /*grow*/
}

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

<script>    
$(function(){ /* to make sure the script runs after page load */

  $('.item').each(function(event){ /* select all divs with the item class */
  
    var max_length = 380; /* set the max content length before a read more link will be added */
    
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

</head>
<body style="background-color: #f6f6f6;">

<nav style="background-color: #283e4a; box-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.2), 0 1px 1px 0 rgba(0, 0, 0, 0.19); width: 100%; position: fixed; z-index: 1;" class="navbar navbar-expand-lg">
  <a style="display: inline; padding-right: 120px;" class="navbar-brand" href="home.php"><img width="30px" height="30px" src="data:image/png;base64,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"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <i style="color: blue; font-size: 30px;" class="fas fa-caret-square-down"></i>
  </button>

  <div style="color: grey;" class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li style="display: inline; padding-right: 40px;" class="nav-item">
        <a  style="font-size: 20px; color: #545454;" class="nav-link" href="home.php"><img src="https://png.icons8.com/office/30/000000/news.png">&nbsp;<span style="color: white;">Feed</span> <span class="sr-only">(current)</span></a>
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
      
      <li style="display: inline; padding-right: 70px; padding-top: 8px;" class="nav-item">
        <form action="search.php" method="GET" class="form-inline my-2 my-lg-0">
  <input class="form-control mr-sm-2" type="text" name="query" placeholder="Search confessions by title, post or user..." style="width: 470px; height: 33px;">
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
             
             
             ?>
             
        <a href="signin.php"><button style="margin-right: 190px;" type="button" class="btn btn-primary btn-sm" href="signin.php">Sign in / Sign up</button></a>
      
             <?php
             
             
           }

 ?>



        <div class="dropdown-menu" aria-labelledby="navbarDropdown">


<img class="img-fluid" style="border-radius: 50%; width: 30px; height: 30px;" src="<?php echo $location; ?>"><span style="font-size: 15px; font-weight: bold;"><?php echo $username; ?></span>

<center><a class="dropdown-item" href="profile.php">View Profile</a></center>
<hr>
<a class="dropdown-item" href="profile.php"><img width="25px" height="25px" src="https://png.icons8.com/color/48/000000/handshake.png">&nbsp;Confessions</a>

    <a class="dropdown-item" href="user_blog.php"><img width="25px" height="25px" src="https://png.icons8.com/color/48/000000/rss.png">&nbsp;Blogs</a>
    <a class="dropdown-item" href="settings.php"><img width="25px" height="25px" src="https://png.icons8.com/color/48/000000/settings.png">&nbsp;Settings</a>
    <a class="dropdown-item" href="logout.php"><img width="25px" height="25px" src="https://png.icons8.com/color/48/000000/shutdown.png">&nbsp;Sign out</a>



        </div>
      </li>
    </ul>
  </div>
</nav>



<!--Checking internet connection-->

<?php
$ip = gethostbyname('www.google.com');
if($ip != 'www.google.com') {
  //connected!
} else {
?>

<!--Not Connected, Display the message-->
<div class="alert alert-primary alert-dismissible fade show" role="alert">
  Your internet connection is lost. Please try to connect to the internet and load the page again!
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>

<?php }?>





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

  <br><br><br>

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







<br><br><br><br>

  


<center><h1 style="font-size: 25px;"><img width="60px" height="60px" src="https://png.icons8.com/color/96/000000/compass.png">&nbsp;Discover People</h1></center>


<br><br>

<div class="container" style="background-image: url("image/nodes4.png");">



<?php $sql = "SELECT * FROM signup INNER JOIN posts ON signup.name = posts.name WHERE NOT signup.name = '$usernameexplore' ORDER BY RAND() DESC LIMIT 3";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {

      $id = $row['id'];
      $usernameexplore = $row['name'];
      $title = $row['title'];
      $post = $row['post'];
      $views = $row['views'];
      $time = $row['time'];
      $position = $row['position'];
      $len = strlen($row['post']);

   ?>



  <div>
    
    <div class="card" style="width: 19rem; background-color: #c2ffff;">
  <img class="card-img-top" src="image/background4.jpg" style="position: relative;" alt="Card image cap">
  
  
  <?php 
if(!empty($row['image'])) {
?>
  <img style="position: absolute; margin-top: 120px; margin-left: 100px; border-radius: 50%; border: 3px solid white; background-color: white; -webkit-box-shadow: 0 8px 6px -6px black;
       -moz-box-shadow: 0 8px 6px -6px black;
            box-shadow: 0 8px 6px -6px black;" width="100px" height="100px" src="<?php echo $row['image']; ?>">
<?php } else {?>

<img style="position: absolute; margin-top: 120px; margin-left: 100px; border-radius: 50%; border: 3px solid white; background-color: white; -webkit-box-shadow: 0 8px 6px -6px black;
       -moz-box-shadow: 0 8px 6px -6px black;
            box-shadow: 0 8px 6px -6px black;" width="100px" height="100px" src="image/avatar.png">

<?php
} ?>
  
  
  
  <div class="card-body">
    <br><br>
    <center><h3 style="font-family: 'Song Myung', serif; font-weight: bold;"><a href="profile_view.php?name=<?php echo $usernameexplore; ?>"><?php echo $usernameexplore; ?></a></h3></center>

<center><p class="card-text"><?php echo $row['position']; ?></p></center>

<br>

<div class="container">
  <div><span style="font-weight: bold;">Age</span><br><p><?php echo $row['age']; ?></p></div>
  <div><span style="font-weight: bold;">Gender</span><br><?php echo $row['sex']; ?>
  </div>  


  <div><span style="font-weight: bold;">Location</span><br><?php echo $row['state']; ?></div>


</div>

<br>

  </div>
</div>
  </div>


<?php 
    
            }
} else {
    echo "No Confessions yet.<br> Start making confessions!";
}

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



<br><br>

<center><h1 style="font-size: 25px;"><img width="60px" height="60px" src="https://png.icons8.com/color/96/000000/popular-topic.png">&nbsp;Popular Confessions</h1></center>



<br><br>


<?php $sql = "SELECT * FROM signup INNER JOIN posts ON signup.name = posts.name ORDER BY posts.views DESC";
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
      $position = $row['position'];
      $len = strlen($row['post']);

   ?>

   

    

<div style="width: 700px; margin: 0 auto; /* Added */
        float: none; /* Added */
        margin-bottom: 10px; /* Added */" class="shadow-none card rounded">
      <div class="card-body">

<?php

if ($views >= 50) {

 ?>

<div class="text-muted" style="font-size: 13px;"><span style="font-size: 13px; color: #6666FF;" class="fas fa-check-circle" data-toggle="tooltip" data-original-title="Verified"></span>&nbsp;Trending Post</div>

<?php
}
?>


        <h5 class="card-title">
        
       <?php 
if(!empty($row['image'])) {
?> 
        
        <img width="35px" height="35px" style="border-radius: 50%; width: 30px; height: 30px; border-width: 4px; border-color: white; background-color: white;" src="<?php echo $row["image"]; ?>">
        
        <?php } else {?>
        
        <img width="35px" height="35px" style="border-radius: 50%; width: 30px; height: 30px; border-width: 4px; border-color: white; background-color: white;" src="image/avatar.png">
        
        <?php
} ?>
        
        
        &nbsp;<a href="profile_view.php?name=<?php echo $username; ?>"><?php echo $row["name"];?></a><span class="text-muted" style="font-size: 12px; left: 5px;"><?php echo $position; ?></span></h5>
        
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




  </div>


</div>
</center>


  

</body>
</html>