<?php

session_start();

include("conn.php"); 

$username=$_GET['name'];
$position=isset($_SESSION['position']);
?>



<!DOCTYPE html>
<html>
<head>


  <meta http-equiv="Content-Type" content="text/html; charset=gb18030">
  
  <meta http-equiv="refresh" content="1800;url=https://www.confessionweb.com/logout.php" />

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
  
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title><?php echo $username; ?> - ConfessionWeb</title>


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

<nav style="background-color: #283e4a; box-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.2), 0 1px 1px 0 rgba(0, 0, 0, 0.19);" class="navbar navbar-expand-lg">
  <a style="display: inline; padding-right: 70px;" class="navbar-brand" href="home.php"><img width="30px" height="30px" src="data:image/png;base64,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"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <i style="color: blue; font-size: 30px;" class="fas fa-caret-square-down"></i>
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
        <a class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img class="img-fluid" style="border-radius: 50%; width: 30px; height: 30px; border-color: 3px 3px white;" src="<?php echo $location; ?>">
        </a>

<?php

}
             } else {
            echo "";
           }

 ?>



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

<br>
  

<div style="padding-left: 40px; padding-right: 30px;" class="row">
  <div class="col-sm-8">
    <div class="card">

      <div class="card-body">

        <div class="card-img-top" style="background-image: url('image/background4.jpg'); height: 230px; width: 100%; padding-left: 12px;">
        
<br><br><br><br><br>


<?php 
          $username=$_GET['name'];

           $sql = "SELECT * FROM signup where name= '$username'";
              $result = $conn->query($sql);

               if ($result->num_rows > 0) {
                // output data of each row
               while($row = $result->fetch_assoc()) {
           $location= $row["image"];

           ?>



<img src="<?php echo $location; ?>" width="200px" height="200px;" style="border-radius: 50%; border: 3px solid white; background-color: white; -webkit-box-shadow: 0 8px 6px -6px black;
       -moz-box-shadow: 0 8px 6px -6px black;
            box-shadow: 0 8px 6px -6px black;">

<?php

}
             } else {
            echo "";
           }

 ?>






</div>

<?php $sql = "SELECT * FROM signup WHERE name= '$username'";
                        
                        
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
    
    

      ?>
      <br><br><br><br>

      


<div class="row">
  <div class="col-sm-8">
    
        <h1 style="font-family: 'Song Myung', serif; font-weight: bold;"><?php echo $username; ?></h1>
        <h2 style="font-size: 15px;"><img width="20px" height="20px" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAGAAAABgCAYAAADimHc4AAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAAPRSURBVHhe7ZrLblNnFIUPSDAAxrRMCZNyaaVKMEMmiTILV6mMoSLhImBU4CVAMIYn4BHgFdIACQy4TDrBEagjmsopAQ57O2tAzbK9s33kY8j6pE9Icbx+9B3bx4MUQgghhBBCCCGEEEIIIeqk0WjsGB8fv2bOm8sTExPlesRz5nxjenp6G2ZFBIs2Zr7sjDqAzycnJ3djXvRiampquwV71RFwYO2CvtA7IYDFutEZryrtIvyBY0Q3LNRcR7j7dj/4EQ+H8ef4czu25vCw6Ia9Sv93w7WPpJ14aN3Y83/4csu38ZDoxpfBXPw4TdV73z1VB6t6r3b+PbPnaGtm/6P3Fw6tfLx8uCyvHtnQegNv0Tq3f97bIFP1vLm0d0dr5sBCebVB/yPSvNIo241md1X7ddfj/3f+17/pofIrvZU3Q77BsY+cRXaQ7K41e4x8g/Hu3NhxfewktI+jSu4JfsOlB8i+tmb2/YmMefwOz8Zlf1cvHWohYx77mvWJjcv+ejtkzMOGZVxkzMNGZVxkzMNGZVxkzMNGZVxkzMNGZVxkzMNGZVxkzMNGZVxkzMNGZVxkzMNGZVxkzMNGZVxkzMNGZVxkzMNGZVxkzMNGZVxkzMNGZVxkzMNGa/He9bJsLpTlP3/11n/Hf5dt1CAy5mGjtbj0lAdnLi3yjRpExjxstBZZ6F6yjRpExjxstBZZ5F6yjRpExjyfRuWv31jkXrKNIevtkDHP6sWDdHzossi9ZBtD1tshY57l3/fQ8aHrN1YWmtl8wjeG7PLZscEvwNvT221sBP4wK/w11OLfHYGvoVca5dvT2wa/AM2ThV3JEXkXfEP6q9/bIWMeH1k6tblcmf2FHiS/dmX253azyi7AmpvW3gn21mKHStParL3yN6FZpRdgTb8n+CF+hx+Zr6g16g28hTfxNp29kDFP56Bcn8iYh43KuMiYh43KuMiYh43KuMiYh43KuMiYh43KuMiYh43KuMiYh43KuMiYh43KuMiYh43KuMiYh43KuMiYh43KuMiYh43KuMiYh43KuMiYh43KuMiYh43KuMiYh43KuMiYh43KuMiYh43KuMiYh43KuMiYh43KuMiYh43KuMiY5/XJ4h0blv31dsiY5/WJ4hkbl/21dk+RMU/zRHGbjcv+2gW4iYx5mseKvTb0gR0gu2sfP6v24v0JGQfDBu90HiB7axfgFvINzrPfiq12NR+ygyT1gTdDvmooZ4stNnyn/dbih254vY2/8r0VslVP+55gh/gd3v7d8F9RvUG7hd1wvQ0yCSGEEEIIIYQQglAUnwHh5Oyb9puTIwAAAABJRU5ErkJggg=="><?php echo $row["position"];; ?></h2>
      


      
      
  </div>
  <div class="col-sm-4">
      
        <p><img width="20px" height="20px" src="data:image/png;base64,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">&nbsp;<?php echo $row['sex']; ?></p>
        <p><img width="20px" height="20px" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAGAAAABgCAYAAADimHc4AAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAAR3SURBVHhe7dxLiBxVFAbgikYXwXciRgSF7BRdCCKKREJAyUJ04UJ0J4Ju1IW4EZVCme5zx0RDSJ/b00x8bRRnoQiKb3yDgvjaCAYXPoIbTQz4NnE8t+ZM5lEnqVtdt8xM9//BTzNM3xrq767uetyaDAAAAAAAAAAAAAAq7aZLMu9eyzz9Lo+zQ4XdL/L4dDbdOUeXClF62y/Q8uxia4d+zKYmztWlQyXvnimX2DT0gi4dKoV3rFlik8hHGUQyC0wQiGSVlyIQySovRSCSVV6KQCSrvBSBSFZ5KQKRrPJSBCJ5d7hUXopApKSnIRYFInn3Xam8FIFITB+bBTYNRGJ6ziywaSASu45ZYNNAJE83mgU2DUTytMkssGmghjb2hKAGT0+YJQ4bdvfpkiEKd28yi6wbpn/l8W5dKkTr5acUlxGtUmPDdEje+bfpEqE2ds+bxcaE6e+s171ZlwRD8ZPXm+VWhv7MenSDLgWGludrpcx9dslHCbvf5PvjWl0CNOZdXir56DkoW81mHQlJ7Nx5xlyxZuELYfo5m5q8TEdBUp66ZulL86A+G5Lb1TlbXoRfjdIXwu4NfTa0wrvHSqWXQpfqsyG5MMXc0wG7+PnQO9ns7BodAckx3WUXvyjsbtVnQ3IzMyfKu/wzs/iFyB4TbdIRkNxU90o9wWaVP5+Pspn8ZB0BybF73Ch9eZ7UZ0Ny04+eJVvBt0bpS8PuXh0ByfXoankRDpnFz6f4/eR1OgKSY3rYLH5xwiy7cMcltCDsFbH7wCx+Sej74s5LaEEotvIArche3KraFk9bZUv4yyh9WejLbLBjg46CpDzdbpe+LGHe6cCdrqMgKU/bzdLLeTfbM3mqjoJkii9letEovJywJYTjCUhskK+TLeFDs/RS5Duh98hGHQnJhM/42HsMmL5OuovK7v6FZcuOAbv9Rr4pxdMXMuaTudD78vhQ8WZatcK1ZHafHinjWAmnNdhdqCOHF2bgWcsfNuy+khfjTF36KhR2OcPHjLVyy1O8MxtMZwkz8KrP0tYPu2n9C6tUuJ7M7nNz5cr5R1J/HmmYgVd1XmroyEHmqrcrP01ehLfsFTTCbpANBifp6GMLM/DCNEhrOakyEsIFGqZnzRW0wvSefJmfr6NtfXeNvFgRR+ANMzLCBfuo2RXzCeeY6BYdvVSYgRemQZrjEmfk9N2dtT42mF7P+p2LdHQYf7mU387N5FZGUr9zlZT4g7nCVsIeDtOrskU8ID//VPp9mxlZ4Sg4zCWyVnolZaSFKfDsdhTvcGvlV0LGQrFHE3Gh/3hkbMwdL0yvuK1h7PS622TF2/mPLcNkLM3dpTkhaXanZoqMtXA0HP6V8vH8WALh3RWyNURe6EkcWKRPW+SFeOl/3SLAEGbbMT0lafdMKLs/9C+CaXd3vRxD3CFFvS2FtfDfHulN/UtQqT9xnrwQ90hxr8hj85N14d3vOxfr0qGWPD+hKK+YMEZ7dAvZK4/75WOr4uoZHZDnvYxJxQAAAAAAAAAAAADVsuw/6RBJCIYTwhEAAAAASUVORK5CYII=">&nbsp;<?php echo $row['number']; ?></p>
        <p><img width="20px" height="20px" src="data:image/png;base64,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">&nbsp;<a href='mailto:<?php echo $row['email']; ?>'><?php echo $row['email']; ?></p></a>
        
        <p><img width="20px" height="20px" src="data:image/png;base64,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">&nbsp;<?php echo $row['state'].", ".$row['country']; ?></p>
      
 
 <a href="<?php echo $row['facebook']; ?>"><p><i class="fab fa-facebook-square"></i>&nbsp;Facebook</p></a>
      
      <a href="<?php echo $row['linkedin']; ?>"><p><i class="fab fa-linkedin"></i>&nbsp;Linkedin</p></a>   
  </div>
</div>






      

<hr>

<div id="js_sel1" style="display: inline-block;" class="clearfix">

<p><img width="30px" height="30px" src="data:image/png;base64,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"><span style="font-size: 25px; font-weight: bold;">Intro</span><?php echo $row["bio"];; ?></p>



</div>




      <?php }}?>

      </div>
    </div>

    <br><br>
    
    
    


<center><span style="font-size: 20px;" class="badge badge-primary">Blogs</span></center>

    <br><br>


<p style="line-height: 4px; font-weight: bold; font-family: 'Source Sans Pro', sans-serif;"><?php 
$id = isset($_SESSION['id']);

$sql2 = "SELECT * FROM blogpost WHERE name = '$username'";
$result2 = mysqli_query($conn, $sql2);

$rowcounts = mysqli_num_rows($result2);

echo $rowcounts;

    ?> Blogs</p>


    

<hr>


    <?php $sql = "SELECT * FROM signup INNER JOIN blogpost ON signup.name = blogpost.name WHERE blogpost.name = '$username' ORDER BY blogpost.id DESC";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {

      $id = $row['id'];
      $username = $row['name'];
      $btitle = $row['btitle'];
      $bpost = $row['bpost'];
      $btime = $row['btime'];
      $image = $row['image'];

   ?>

<div class="shadow-none card rounded">
      <div style="width: 100%;" class="card-body">
        
        <a style="color: black; font-size: 25px;" href="blog_view.php?id='<?php echo $id; ?>'"><p class="card-text" >

<img width="35px" height="35px" style="border-radius: 50%; width: 30px; height: 30px; border-width: 4px; border-color: white; background-color: white;" src="<?php echo $row["image"]; ?>">

          &nbsp;<?php echo $row["btitle"]; ?></p></a>
        
        <div class="text-muted" style="font-size: 13px;"><i class="far fa-clock"></i>&nbsp;<?php echo time_ago_in_php($btime);?></div>
        
      </div>
    </div>
    <br>
<?php 
    
            }
} else {
    echo $username." hasn't posted any blogs yet.";
}
?>


<br>


  </div>




  <div id="myarea" class="col-sm-4" style="padding-right: 40px;">
    <div class="card">
      <div class="card-body">


        <p style="font-size: 19px;">Feeds</p>
      <div class="divider"></div>
      <hr>
      <ul class="nav flex-column">
  <li class="nav-item">
    <a style="font-size: 15px;" class="nav-link" href="home.php"><img src="https://png.icons8.com/office/40/000000/news.png" width="20px" height="20px">&nbsp;Feed</a>
  </li>

  <li class="nav-item">
    <a style="font-size: 15px; background-color: #e4e4e4; border-radius: 7px;" class="nav-link" href="userblog_view.php?name=<?php echo $username; ?>"><img width="20px" height="20px" src="data:image/png;base64,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">&nbsp;Blogs<span class="badge" style="font-size: 13px;"><?php 
$id = isset($_SESSION['id']);

$sql3 = "SELECT * FROM blogpost WHERE name = '$username'";
$result3 = mysqli_query($conn, $sql3);

$rowcountsblog = mysqli_num_rows($result3);

echo $rowcountsblog;

    ?></a></span>
  </li>
  <li class="nav-item">
    <a style="font-size: 15px;" class="nav-link active" href="profile_view.php?name=<?php echo $username; ?>"><img width="20px" height="20px" src="data:image/png;base64,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">&nbsp;Confessions<span style="font-size: 13px;" class="badge"><?php 
$id = isset($_SESSION['id']);

$sql2 = "SELECT * FROM posts WHERE name = '$username'";
$result2 = mysqli_query($conn, $sql2);

$rowcounts = mysqli_num_rows($result2);

echo $rowcounts;

    ?></span></a>
  </li>

<li class="nav-item">
    <a style="font-size: 15px;" class="nav-link"><img width="20px" height="20px" src="data:image/png;base64,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">&nbsp;Total Views<span style="font-size: 13px;" class="badge"><?php 
$id = isset($_SESSION['id']);


$result = mysqli_query($conn, "SELECT SUM(VIEWS) AS totalsum FROM posts WHERE name = '$username'");

$row = mysqli_fetch_assoc($result);

$sum = $row['totalsum'];

$perf = $sum/$rowcounts;

echo "     ".$sum; ?></span>



<div style="padding-left: 25px; font-size: 12px; font-weight: bold;" class="text-muted"><?php 
$id = isset($_SESSION['id']);


$result = mysqli_query($conn, "SELECT SUM(VIEWS) AS totalsum FROM posts WHERE name = '$username' AND time >= DATE_ADD(CURDATE(),INTERVAL -7 DAY)"); //7 Days ago views

$row = mysqli_fetch_assoc($result);

$sum = $row['totalsum'];

echo "     ".$sum; ?> Views last week</div>




</a>



  </li>

<?php $sql = "SELECT  * FROM signup WHERE name= '$username'";
                        
                        
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {

      ?>
      
<li class="nav-item">
    <a style="font-size: 15px;" class="nav-link"><img src="https://png.icons8.com/color/96/000000/bullish.png" width="23px" height="23px">&nbsp;Performance<span style="font-size: 13px; color: green;" class="badge"><?php echo 
number_format($perf, 2)."%" ?></span></a>
  </li>  
  
<li class="nav-item">
    <a class="nav-link" style="font-size: 15px;"><img width="20px" height="20px" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAGAAAABgCAYAAADimHc4AAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAAhhSURBVHhe7Z1LjBRFGMdXD75OxtfJ18EDr5WFneqBi+t2L8tGEBFB8RGN0USUQAQ5aoiJ8QbycNWIgNEYYqJR8REBPRglgBcJkZuI75O4MLM9w7I7237/nhpY2W+dnu6q6u7d+ie/MOx01/fo6urqquqeNisrKysrKysrKysrqyypvGD+DYPdTm/ZE2sHXaefODDoimNl1zkx6Il/6N8hID+fwHf1bZx+2mcN9i31dVwvi7NqptF58670PeceSuDWMNGeMzroOUESwjJwYDyxxe8uLoENac4KCja2XVr2indSonZTkkpcEpXiOqdhq9RT6IJt6cbUU9DVdUXJKzxTdsXPbKIMANslTzwNX6Rbk1/B4s6rqG3eQG32X1xS0gC+0DVj/aRvntC+U7C/cknIAnQQTvpu4W7p7uRRtat4KyX+Uy7oLELXiL2V7vm3SPfzLUr8Clz4uEAzzoDvOktlGPnTaN9tl1OvZjsTWM4Q2xGLDCsfOuOJa6mHcYgPKJccPN077xoZXrZV6S3cRLXmOBNEzhHHEZsMM5sq9RSnU5v/Gx9A/kFsiFGGmy35Xc6N1I37nXN8MoEYEasMOxvCgBc59+PFzk5aXHGs1NV5nQw/XaGHQLXiMOuoZqpPdoZw3+kGMQcrZlwm05Ce6OL0KuegCUb2zArhvjOD2C7TkI5KrrOcd0w/1SfmBsH300LwmdvGBKWewjKZDrPCrXqad7gj7806fwDwmdvGCJSDVIYt0hzbqTzeeT75DfA3blsTYOxIpsWMwlkrxhFTjLx7ofY3wN+4bU1hbBQV4/lU+1MbUq48Nr72N8B33D4mwOQOciPTpE+YTOEcMMXIO+NrfwN8x+1jCmqK1sk06RFmjKj2pzaTVXmUav8RPvkh9B224fY1AZ0Ff2odOcUcLmfYFCNvt/OJHwO24fY1BeaYZbrUKly9EK7H4Q3rpvJIk9rfAGcBbcuVYQLkKGhru0SmTZ2wdIQzaIrhXc1rfwNsy5VhCix5kWlTp7IndnHGTFB5OGLtb4CzgPbhyjIB5eotmTY1CpeSmFg0NQHDO6PX/gbYhyvLCK44o3SJS5o3XpUHC63V/gY4C2hfrkwziMUyfckVrtVkjejFXyqC4d0T9/ubgX1RBle2dlyxWaYvueqLWxkjCvDvEmHf/exzc4JzL88Oht9sD2ofzQxGv53OJjUOKAtlomzYgC3YhG3OJxXQdeCoTF8yYbaL7vCSrVLupaZkZSGorpkTDL1ISe5vD0bepyR/rS7JcYEP8AU+wTf4CF/hMxtLRKg7WlMya0ZtWR9noCkUwPDrVJu/mBEEh/ngMw35DN8RQ9yDUXaLC2Qa44tOpTVc4VGorOzMRC2PC3xHDFxsUaCzYLVMY3zRBbifKzwqlQcKweiB/B0E+AzfuZiio2DKkg7AV3zh0fGX00HYR00RE2gWga/wmYulFaj12CfTGF+qekD+MlG/HjABZwn4CF+5GFqGcifTGF/UjimbfEGfvPb5TDbwLADfVN430BlwUqYxvugonuIKj4u/pBDUPsneQYBP8I3zOTau87dMY3zRGTDEFp4AfzGdCXRjxCUiDeALfOJ8TQJyJ9MYXzoOAPAX0UH4IP2DAB/gC+djUpQcANVN0FgwFIC7UC4xJoBtncMRapogT/zCFq6Kvv8usjJFuJiLbLM+KULVRVjbQNx5FtKZ8D+rHVQTrp4gm6wvKlHRDaXT6ABbuGp6naD2of7mCDaSDrRFha4BX8o0xlfSoYhWMHE9gA3Oth4UDEUkGYxrldFv9I8ZwQZnWwd0BigYjOsRC7nCVePfW2ATpgPY4nxQjZLhaEwqJJ6QiUB11YX1/rqBLc4HlVDtr+FxXZnGZDLRExra2MEmSwewxfmgEmq61UxJQnQx2cIZUcnwa7ezydIBbHE+KMV1Nsn0JRfeNMUaUYiJLmiDsCvK+KCYRTJ9yRUuzHLFGcaIGnqcIPiOT5YWyBZssr6owHVOK38JVNkVO1ljCqjcH7MHdJC6rYD7rgmwyfmiAuq07JBpUyedi3OxFIRL0oQcmhac29YeTp4AfMbf2G0nADY5X1SgZXGuzuXpQy/NZpM0jiN0AX2DEr9ifO3F3/Bd1GWMsHlxGYr4ScvydAgPHzAGE4MVa1ySxoIHLyoPNW82sE2UBzlgk9s/Kb4rVsl0qRcuLHQWKH9EqbZ34h7QyJ6ZsR5BxT7YlysTwCa3XxK0P6IE0Q3Ges54bHqpB8S03+gqVp9KvsYfZbBdXLKpelSUKuezMk36FD6m6omTnANxQJMxNjG1z2YE1bVz1XYTqSyUibLH2orSpEUlfEzV1PtH8VAy50Qczq6rjwFhMdTZDdQz0dk/p7Jho7FIDLbZ7eKh7sYrivB4PuNEyww93xEMvdBhbJIkhGzBJmyz37cI1f6PZVrMKXxZh+cMXOzMFGSg0tN5s0yLWeFVLSaGqrMKYk/93aKDrrONc25K4DpbZRrSE17bRb2iVF5ZlibU7h/KxCvLIMz8GFm+khUo1oGu2VfL8LMh+9rKDMi+uDUDsq8uzoDwomty+uD4IHJLfl7e3RBGBbEyjAkmN9TvccQr2kc4darkFe+jYPJ4x5zvH3AYKwxbqBo7MgHGdlIbXtApjKKqHMpWTX3KVeFbTrKo8MV/nliP2SMuCWlA/vyByZQp9St7uLBhjhkTGVxSTIAaDx9yfZFNKqwgKHWLO+hA7MSCJi5RSiEbdD3aAZvaVi/kVWgC0AYPumIzNQtHqYbW2CS2AMogfqDEb6L/L5pSzUxShUvj3eICSuDq+j2F2C8PDH669hT9W/852/rnE+F3ntiHbbFP2Sv0ZOaXLqysrKysrKysrKysrEK1tf0LJ7dgnIr9sSgAAAAASUVORK5CYII=">&nbsp;CW Rank<span class="badge">

<?php

if ($perf == 90) {
?>

<span style="font-size: 15px;">A</span>&nbsp;<i style="color: blue; font-size: 13px;" class="fas fa-chevron-circle-up"></i>

 <?php

}elseif ($perf <= 20 && $perf >= 1) {
  
?>

<span style="font-size: 15px;">D</span>&nbsp;<i style="color: red; font-size: 13px;" class="fas fa-chevron-circle-down"></i>

<?php
} 
elseif ($perf <= 60 && $perf >= 20) {
  ?>


<span style="font-size: 15px;">C</span>&nbsp;<i style="color: blue; font-size: 13px;" class="fas fa-chevron-circle-up"></i>
  
  <?php
}elseif ($perf <= 80 && $perf >= 40) {
?>

<span style="font-size: 15px;">B</span>&nbsp;<i style="color: red; font-size: 13px;" class="fas fa-chevron-circle-down"></i>


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

  <a class="text-muted" style="display: inline; font-size: 13px;" href="about.php">About</a>&nbsp;&nbsp;&nbsp;
  <a class="text-muted" style="display: inline; font-size: 13px;" href="privacy.php">Privacy</a>&nbsp;&nbsp;&nbsp;
  <a class="text-muted" style="display: inline; font-size: 13px;" href="terms.php">Terms</a>
  <br>
  <a style="display: inline; font-size: 13px; color: black;">ConfessionWeb © 2018</a>
  
<br><br><br>
  



  

  
  
</ul>
      </div>
    </div>




<!--Blogs Section Starts-->
<br>
<div class="card">
  <div class="card-body">
  
<p style="font-size: 17px; line-height: 5px;"><?php echo $username."'s"; ?> Recent Blogs</p>
<hr>


<?php $sql = "SELECT * FROM blogpost WHERE name = '$username' ORDER BY id DESC LIMIT 5";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {

      $id = $row['id'];
      $username = $row['name'];
      $btitle = $row['btitle'];
      $bpost = $row['bpost'];
      $btime = $row['btime'];

   ?>


<li class="nav-item" style="line-height: 30px; list-style-type: none;">



    <a style="color: black;" href="blog_view.php?id='<?php echo $id; ?>'"><img width="20px" height="20px" src="https://png.icons8.com/color/48/000000/hashtag-activity-grid-2.png">&nbsp;<span style="font-size: 15px;"><?php echo substr($btitle, 0, 28)."..."; ?></span></a>
    <span class="text-muted" style="font-size: 10px;"><?php echo time_ago_in_phpblog($btime); ?></span>


<?php 
    
            }
} else {
    echo "No blogs posted yet.<br>";
}
?>
  </div>
</div>
<!--Blogs Section Finishes-->

    
    
    
    





<!--<script>

$(document).scroll(function() {
    var y = $(document).scrollTop(), //get page y value 
        header = $("#myarea"); // your div id
    if(y >= 400)  {
        header.css({position: "fixed", "top" : "0", "right" : "0"});
    } else {
        header.css("position", "static");
    }
});

</script>--->













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








<!--Time function for blogs--->

<?php
          function time_ago_in_phpblog($timestamp){
  
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

    return "Just Now";

  } else if ($minutes <= 60){

    if ($minutes == 1){

      return "1 min ago";

    } else {

      return "$minutes mins ago";

    }

  } else if ($hours <= 24){

    if ($hours == 1){

      return "1 hour ago";

    } else {

      return "$hours hrs ago";

    }

  } else if ($days <= 7){

    if ($days == 1){

      return "yesterday";

    } else {

      return "$days days ago";

    }

  } else if ($weeks <= 4.3){

    if ($weeks == 1){

      return "1 week ago";

    } else {

      return "$weeks weeks ago";

    }

  } else if ($months <= 12){

    if ($months == 1){

      return "1 month ago";

    } else {

      return "$months months ago";

    }

  } else {
    
    if ($years == 1){

      return "1 year ago";

    } else {

      return "$years years ago";

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