<?php

session_start();

include 'conn.php';

$username=$_SESSION['name'];
$position=isset($_SESSION['position']);


 ?>


<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?php echo $username ?> | ConfessionWeb</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="profile/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="profile/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="profile/bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="profile/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="profile/dist/css/skins/_all-skins.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">


<link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
<link rel="manifest" href="favicon/site.webmanifest">
<link rel="mask-icon" href="favicon/safari-pinned-tab.svg" color="#5bbad5">
<meta name="msapplication-TileColor" content="#da532c">
<meta name="theme-color" content="#ffffff">



<style>

.profile {
position:fixed;
    top:0;
    width:100%;
    z-index:100;
}

a:hover {
    text-decoration: underline;
    color: black;
}

</style>



</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="home.php" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>C</b>W</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Confession</b>Web</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
          <li class="dropdown messages-menu">
            
            <ul class="dropdown-menu">
              
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                  <li><!-- start message -->
                    <a href="#">
                      <div class="pull-left">
                        <img src="../../dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                      </div>
                      
                  </li>
                  <!-- end message -->
                  <li>
                    <a href="#">
                      
                  </li>
                  <li>
                    <a href="#">
                      <div class="pull-left">
                        <img src="../../dist/img/user4-128x128.jpg" class="img-circle" alt="User Image">
                      </div>
                      
                  </li>
                  
                  
                </ul>
              </li>
              <li class="footer"><a href="#">See All Messages</a></li>
            </ul>
          </li>
          <!-- Notifications: style can be found in dropdown.less -->
          <li class="dropdown notifications-menu">
            
            <ul class="dropdown-menu">
              
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                  
                  
                  
                  
                </ul>
              </li>
              
            </ul>
          </li>
          <!-- Tasks: style can be found in dropdown.less -->
          <li class="dropdown tasks-menu">
            
            <ul class="dropdown-menu">
              
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                  
                  
                  <!-- end task item -->
                  
                  
                </ul>
              </li>
              <li class="footer">
                
              </li>
            </ul>
          </li>
          
          
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      
      
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="active treeview">
          <a href="profile.php">
            <i class="fa fa-user-circle"></i> <span>Profile</span>
            
          </a>
          
        </li>
        
        <li>
          <a href="home.php">
            <i class="fas fa-newspaper"></i> <span>Feed</span>
            <span class="pull-right-container">
              <small class="label pull-right bg-green">new</small>
            </span>
          </a>
        </li>

        <li>
          <a href="settings.php">
            <i class="fa fa-cogs"></i> <span>Settings</span>
            
          </a>
        </li>
        
        <li>
          <a href="logout.php">
            <i class="fa fa-sign-out"></i> <span>Logout</span>
            
          </a>
        </li>
        
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    

    <!-- Main content -->
    <section class="content">

      <div class="row">
        <div class="col-md-4" class="profile">

          <!-- Profile Image -->


<?php $sql = "SELECT  * FROM signup WHERE name='$username'";
                        
                        
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {

      ?>


          <div class="box box-primary">
            <div class="box-body box-profile">
              
             <img class="profile-user-img img-responsive img-circle" src="<?php echo $row['image']; ?>">

              <h3 class="profile-username text-center"><?php echo $username; ?></h3>

              <p class="text-muted text-center"><i class="fa fa-briefcase"></i>&nbsp;&nbsp;<?php echo $row['position']; ?></p>

              <ul class="list-group list-group-unbordered">
                <li class="list-group-item">
                  <i class="fa fa-facebook-square"></i>&nbsp;&nbsp;<b>Facebook</b> <a href="<?php echo $row['facebook']; ?>" class="pull-right">Facebook Profile</a>
                </li>
                <li class="list-group-item">
                  <i class="fa fa-linkedin"></i>&nbsp;&nbsp;<b>Linkedin</b> <a href="<?php echo $row['linkedin']; ?>" class="pull-right">Linkedin Profile</a>
                </li>
                <li class="list-group-item">
                  <i class="fa fa-mobile"></i>&nbsp;&nbsp;<b>Phone Number</b> <a href="<?php echo $row['number']; ?>" class="pull-right"><?php echo $row['number']; ?></a>
                </li>

                <li class="list-group-item">
                  <i class="fas fa-transgender-alt"></i>&nbsp;<b>Gender</b><a class="pull-right"><?php echo $row['sex']; ?></a>
                </li>
            
                <li class="list-group-item">
                  <b>Age</b> <a class="pull-right"><?php echo $row['age']; ?></a>
                </li>

                <li class="list-group-item">
                  <i class="fa fa-envelope"></i>&nbsp;&nbsp;<b>Email</b> <a class="pull-right"><?php echo $row['email']; ?></a>
                </li>

                <li class="list-group-item">
                  <i class="fa fa-map-marker"></i>&nbsp;&nbsp;<b>Location</b> <a class="pull-right"><?php echo $row['state']." ".$row['country']; ?></a>
                </li>
              </ul>

              
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

          <!-- About Me Box -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title"><i class="fab fa-bimobject"></i>&nbsp;Bio</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">

              <p><?php echo $row['bio']; ?></p>
            </div>
            <!-- /.box-body -->
          </div>






<div class="box box-primary">
            <div class="box-header with-border">
<h3 class="box-title"><i class="fas fa-newspaper">&nbsp;</i>Feed</h3>
<hr>
<div class="box-body">
                <li class="list-group-item">
                  <i class="far fa-handshake"></i>&nbsp;&nbsp;<a href="#user_confessions"><b>Confessions</b></a> <p class="pull-right">                
    <?php 
$id = isset($_SESSION['id']);

$sql2 = "SELECT * FROM posts WHERE name = '$username'";
$result2 = mysqli_query($conn, $sql2);

$rowcounts = mysqli_num_rows($result2);

echo $rowcounts;

    ?>


                  </p>
                </li>



<li class="list-group-item">
                  <i class="fa fa-rss"></i></i>&nbsp;&nbsp;<a href="user_blog.php"><b>Blogs</b></a> <p class="pull-right">                
    <?php 
$id = isset($_SESSION['id']);

$sql3 = "SELECT * FROM blogpost WHERE name = '$username'";
$result3 = mysqli_query($conn, $sql3);

$rowcountsblog = mysqli_num_rows($result3);

echo $rowcountsblog;

    ?>


                  </p>
                </li>




              </ul>

              </div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->




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

    return "Just Now";

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

      return "Posted $hours hours ago";

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






     



          <?php
          }
} else {
    echo "No Details!";
}

$conn->close();
?>
          <!-- /.box -->
        </div>
        <!-- /.col -->
        <div class="col-md-8">
          
              <!-- /.tab-pane -->

              <div class="tab-pane" id="user_confessions">
            </div>
            <!-- /.tab-content -->

<div class="col-md-9">
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a style="font-size: 18px;" href="#activity" data-toggle="tab"><b><?php
                include 'conn.php';

$id = isset($_SESSION['id']);
$identity = isset($_GET['id']);

$sql = "SELECT * FROM posts WHERE name = '$username'";
$result = mysqli_query($conn, $sql);

$rowcount = mysqli_num_rows($result);


               echo $rowcount ?></b> Confessions</a></li>


              
            </ul>
            <div class="tab-content">
              <div class="active tab-pane" id="activity">
                

<?php

include 'conn.php';


$id = isset($_GET['id']);


 $sql = "SELECT * FROM posts WHERE name = '$username' ORDER BY id DESC";
$result = mysqli_query($conn, $sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {

      $id = $row['id'];
      $username = $row['name'];
      $title = $row['title'];
      $post = $row['post'];
      $position = $row['position'];
      $time = $row['time'];
      $views = $row['views'];

   ?>

            

            


<div style="background-color: white;" class="card mt-3">
  <div class="card-header">
    <b><span style="font-size: 20px;"><?php echo $row["name"];?></span></b>
<div style="font-size: 13px;" class="card-footer text-muted"><i class="far fa-clock"></i>&nbsp;<?php echo time_ago_in_php($time);?></div>
                <br>

  <div class="card-body">
    <a style="color: black;" href="post_view.php?id='<?php echo $id; ?>'"><h5 style="font-size: 21px;" class="card-title"><?php echo $row["title"]; ?></h5></a>
                
    <p class="card-text" style="font-size: 16px;"><?php echo $row["post"]; ?></p><br>
                
    

<div style="font-size: 15px;" class="card-footer text-muted"><i class="fa fa-eye"></i>&nbsp;<?php echo $views." Views"?></div>
    <hr>
    
  </div>
</div>
</div>

                


<?php 
    
            }
} else {
    echo "No Confessions yet.<br> Start making confessions!";
}

?>



                
                  </div>
                  <!-- /.row -->

                  

                  
                  
                </ul>
              </div>
              <!-- /.tab-pane -->

              <div class="tab-pane" id="settings">
                
              </div>
              <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
          </div>
          <!-- /.nav-tabs-custom -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->


          </div>
          <!-- /.nav-tabs-custom -->
        </div>

        <!-- /.col -->
      </div>
      <!-- /.row -->


    </section>
    <!-- /.content -->

  </div>







  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2018 <a href="https://www.confessionweb.com">ConfessionWeb</a>.</strong> All rights
    reserved.
  </footer>

  
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="profile/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="profile/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="profile/bower_components/fastclick/lib/fastclick.js"></script>
<script src="profile/dist/js/adminlte.min.js"></script>
<script src="profile/dist/js/demo.js"></script>
</body>
</html>
