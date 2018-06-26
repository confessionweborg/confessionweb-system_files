<?php

session_start();

include("conn.php"); 


$username=$_SESSION['name'];
?>



<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Blogs | ConfessionWeb</title>
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
  <!-- Morris chart -->
  <link rel="stylesheet" href="profile/bower_components/morris.js/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="profile/bower_components/jvectormap/jquery-jvectormap.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="profile/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="profile/bower_components/bootstrap-daterangepicker/daterangepicker.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="profile/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

<script>    
$(function(){ /* to make sure the script runs after page load */

  $('.item').each(function(event){ /* select all divs with the item class */
  
    var max_length = 150; /* set the max content length before a read more link will be added */
    
    if($(this).html().length > max_length){ /* check for content length */
      
      var short_content   = $(this).html().substr(0,max_length); /* split the content in two parts */
      var long_content  = $(this).html().substr(max_length);
      
      $(this).html(short_content+
             '<a style="text-decoration: none;" href="#" class="read_more">...Read More</a>'+
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

<link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
<link rel="manifest" href="favicon/site.webmanifest">
<link rel="mask-icon" href="favicon/safari-pinned-tab.svg" color="#5bbad5">
<meta name="msapplication-TileColor" content="#da532c">
<meta name="theme-color" content="#ffffff">


<style>
.profile_card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 200px;
  margin: auto;
  text-align: center;
  font-family: arial;
  display: inline-block;
  background-color: white;
}

.title {
  color: grey;
  font-size: 15px;
}


@import url(https://fonts.googleapis.com/css?family=Lora|Roboto:400,500);

 body {
   margin: 0;
   padding: 0;
   font-size: 16px;
   line-height: 1.5;
   text-rendering: optimizeLegibility;
   font-variant-ligatures: none;
   box-sizing: border-box;
   font-family: 'Roboto', sans-serif;
   background-color: #fafafa;
}
body::before,
body::after {
  content: "";
  display: table;
  clear: both;
}
body * {
  box-sizing: inherit;
}
p, h1 {
  margin: 0; padding: 0;
}

 body, .text-light-black {
   color: rgba(0,0,0,0.6);
}
.text-black {
  color: rgba(0,0,0,0.9);
}
.text-muted {
  color: rgba(0, 0, 0, 0.3);
}



.text-uppercase {
  text-transform: uppercase;
}
.ff-serif {
  font-family: 'Lora', serif;
}

.font-weight-normal {
  font-weight: normal;
}
.font-weight-medium {
  font-weight: 500;
}

 .lts-1px {
   letter-spacing: 1px;
}
.lts-2px {
  letter-spacing: 2px;
}


.w-full {
  width: 100%;
}

.text-center {
  text-align: center;
}
.text-left {
  text-align: left;
}
.text-right {
  text-align: right;
}

.d-block {
  display: block;
}
.d-inline-block {
  display: inline-block;
}

.p-relative {
  position: relative;
}
.p-absolute {
  position: absolute
}



.bg-white {
  background-color: #fff;
}






.small {
  font-size: 0.75rem;
}
.card-heading {
  font-size: 2.25rem;
}
.styled-link {
  text-decoration: none;
  outline: none;
  color: #2196fe;
  transition: all 0.25s ease-in; 
}
.styled-link:hover,
.styled-link:focus,
.styled-link:active {
  color: #536dfe;
}
.shadow-1 {
  box-shadow: 0 2px 5px 0 rgba(0,0,0,0.15);
}
.blue-hover {
  transition: all 0.25s ease-in;
  border-bottom: 5px solid transparent;
}
.blue-hover:hover {
  transform: translateY(-5px);
  mar
  border: none;
  border-bottom: 5px solid #2196fe;
}




.clearfix::before,
.clearfix::after {
  content: "";
  display: table;
  clear: both;
}
.float-left {
  float: left;
}
.float-right{
  float: right;
}






/**Margin and padding utilities*/
.mx-auto {
  margin-left: auto;
  margin-right: auto;
}
.ml-auto {
  margin-left: auto;
}
.mr-auto {
  margin-right: auto;
}
.mx-0 {
  margin-left: 0;
  margin-right: 0;
}
.mx-1 {
  margin-left: 1rem;
  margin-right: 1rem;
}
.mx-2 {
  margin-left: 2rem;
  margin-right: 2rem;
}
.mx-3 {
  margin-left: 3rem;
  margin-right: 3rem;
}


.my-0 {
  margin-top: 0;
  margin-bottom: 0;
}
.my-1 {
  margin-top: 1rem;
  margin-bottom: 1rem;
}
.my-2 {
  margin-top: 2rem;
  margin-bottom: 2rem;
}
.my-3 {
  margin-top: 3rem;
  margin-bottom: 3rem;
}

.mt-0 {
  margin-top: 0;
}
.mt-1 {
  margin-top: 1rem;
}
.mt-2 {
  margin-top: 2rem;
}
.mt-3 {
  margin-top: 3rem;
}

.mb-0 {
  margin-bottom: 0;
}
.mb-1 {
  margin-bottom: 1rem;
}
.mb-2 {
  margin-bottom: 2rem;
}
.mb-3 {
  margin-bottom: 3rem;
}

.ml-0 {
  margin-left: 0;
}
.ml-1 {
  margin-left: 1rem;
}
.ml-2 {
  margin-left: 2rem;
}
.ml-3 {
  margin-left: 3rem;
}




.px-0 {
  padding-left: 0;
  padding-right: 0;
}
.px-1 {
  padding-left: 1rem;
  padding-right: 1rem;
}
.px-2 {
  padding-left: 2rem;
  padding-right: 2rem;
}
.px-3 {
  padding-left: 3rem;
  padding-right: 3rem;
}


.py-0 {
  padding-top: 0;
  padding-bottom: 0;
}
.py-1 {
  padding-top: 1rem;
  padding-bottom: 1rem;
}
.py-2 {
  padding-top: 2rem;
  padding-bottom: 2rem;
}
.py-3 {
  padding-top: 3rem;
  padding-bottom: 3rem;
}

.pt-0 {
  padding-top: 0;
}
.pt-1 {
  padding-top: 1rem;
}
.pt-2 {
  padding-top: 2rem;
}
.pt-3 {
  padding-top: 3rem;
}

.pb-0 {
  padding-bottom: 0;
}
.pb-1 {
  padding-bottom: 1rem;
}
.pb-2 {
  padding-bottom: 2rem;
}
.pb-3 {
  padding-bottom: 3rem;
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
      <span class="logo-lg"><b>CW</b>Blogs</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
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
                      
                      
                  <li>
                    
                      
                        
                  
                    </a>
                  </li>
                </ul>
              </li>
              
            </ul>
          </li>
          <!-- Notifications: style can be found in dropdown.less -->
          
          <!-- Tasks: style can be found in dropdown.less -->
          <li class="dropdown tasks-menu">
            
            <ul class="dropdown-menu">
              
                <ul class="menu">
                  
                  
                  
                  
                </ul>
              </li>
              
            </ul>
          </li>
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="profile.php" class="dropdown-toggle" data-toggle="dropdown">



<?php

include 'conn.php';


$id = isset($_GET['id']);


 $sql = "SELECT image FROM signup WHERE name = '$username'";
$result = mysqli_query($conn, $sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {


   ?>


              <img src="<?php echo $row['image']; ?>" class="user-image">

<?php 
    
            }
} else {
    echo "Login";
}
?>
              




              <span class="hidden-xs"></span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                

<?php

include 'conn.php';


$id = isset($_GET['id']);


 $sql = "SELECT image FROM signup WHERE name = '$username'";
$result = mysqli_query($conn, $sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {


   ?>
                <img src="<?php echo $row['image']; ?>" class="img-circle">

<?php 
    
            }
} else {
    echo "Login"."<a href='signin.php'>"."here"."</a>"."to read more.";
}
?>




                <p style="font-size: 20px;">
                  <?php echo "$username" ?>
                </p>
              </li>
              
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="profile.php" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <a href="logout.php" class="btn btn-default btn-flat">Sign out</a>
                </div>
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
      <div class="user-panel">
        <div class="pull-left image">


<?php

include 'conn.php';


$id = isset($_GET['id']);
$fullname = '';


 $sql = "SELECT image FROM signup WHERE name = '$username'";
$result = mysqli_query($conn, $sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {


   ?>

          <img src="<?php echo $row['image']; ?>" class="img-circle">
        
<?php 
    
            }
} else {
    echo "";
}
?>


          




        </div>
        <div class="pull-left info">
          <a href="profile.php"><p style="font-size: 13px;"><?php echo $username; ?></a>
        </div>
      </div>
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li>
          <a href="https://www.confessionweb.com/home.php">
            <i class="fas fa-newspaper"></i>&nbsp;<span style="font-size: 13px;">News Feed</span>
            
          </a>
          
        </li>
        

          <li><a href="profile.php"><i class="fa fa-user-circle"></i> <span style="font-size: 13px;">Profile</span></a></li>

          <li><a href="settings.php"><i class="fa fa-cogs"></i> <span style="font-size: 13px;">Settings</span></a></li>
            
        <li><a href="logout.php"><i class="fa fa-sign-out"></i> <span style="font-size: 13px;">Sign out</span></a></li>
        
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      
      <div class="row">
        <!-- Left col -->
        <section class="col-lg-10">
          <!-- Custom tabs (Charts with tabs)-->
          
          <!-- /.nav-tabs-custom -->

          <!-- Chat box -->
          

          


            
        







        </section>
        <!-- /.Left col -->
        <!-- right col (We are only adding the ID to make the widgets sortable)-->
        <br>
        <section class="col-lg-10">

          


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

      return "one minute ago";

    } else {

      return "$minutes minutes ago";

    }

  } else if ($hours <= 24){

    if ($hours == 1){

      return "an hour ago";

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

      return "a week ago";

    } else {

      return "$weeks weeks ago";

    }

  } else if ($months <= 12){

    if ($months == 1){

      return "a month ago";

    } else {

      return "$months months ago";

    }

  } else {
    
    if ($years == 1){

      return "one year ago";

    } else {

      return "$years years ago";

    }
  }
}
?>

          
            <?php $sql = "SELECT * FROM blogpost WHERE id = ".$_GET['id']."ORDER BY id DESC";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {

      $id = isset($_GET['id']);
      $username = isset($_GET['name']);
      $btitle = isset($_GET['btitle']);
      $bpost = isset($_GET['bpost']);
      $btime = isset($_GET['btime']);



   ?>

            

        <div class="my-2 mx-auto p-relative bg-white shadow-1 blue-hover" style="width: 100%; overflow: hidden; border-radius: 1px;">    

  <div class="px-2 py-2">
    <p style="font-size: 15px;" class="mb-0 small font-weight-medium text-uppercase mb-1 lts-2px">
      <i class="fa fa-link"></i>&nbsp;<?php echo "Blog post by ".$row["name"]; ?>
    </p>
<?php echo "@"."<small>".$row["name"]."</small>"; ?>

<hr>

    <h1 class="ff-serif font-weight-normal text-black card-heading mt-0 mb-1" style="line-height: 1.25;">
      <?php echo $row["btitle"]; ?>
    </h1>



<div class="item">
    <p class="mb-1">
      <?php echo $row["bpost"]; ?>
    </p>
</div>



  </div>

</div>




                
  

<?php 
    
            }
} else {
    echo "No Blogs yet.<br> Write Your first Blog!";
}
$conn->close();
?>

  </center>          
            
          
                  
     <a href="home.php" class="btn btn-primary">Go Back</a>         


        </section>

        <!-- right col -->
      </div>

      <!-- /.row (main row) -->

    </section>
    <!-- /.content -->
  </div>










  

  <!-- Control Sidebar -->
  
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="profile/bower_components/jquery/dist/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="profile/bower_components/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src="profile/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Morris.js charts -->
<script src="profile/bower_components/raphael/raphael.min.js"></script>
<script src="profile/bower_components/morris.js/morris.min.js"></script>
<!-- Sparkline -->
<script src="profile/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="profile/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="profile/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="profile/bower_components/jquery-knob/dist/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="profile/bower_components/moment/min/moment.min.js"></script>
<script src="profile/bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="profile/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="profile/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="profile/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="profile/bower_components/fastclick/lib/fastclick.js"></script>

<script src="profile/dist/js/adminlte.min.js"></script>

<script src="profile/dist/js/pages/dashboard.js"></script>

<script src="profile/dist/js/demo.js"></script>
</body>
</html>
