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
  <title>CWBlogs | ConfessionWeb</title>
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">

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


<body>
  <nav style="position: fixed;
    width: 100%;
    left: 0;
    top: 0;
    z-index: 100;
    border-top: 0; background-color: #283e4a;" class="white lighten-1 col-lg-12" role="navigation">
    <div class="nav-wrapper container col-7"><a id="logo-container" style="color: black; text-decoration: none; font-size: 25px;" href="home.php" class=""><img style="border-radius: 10%; width: 30px; height: 30px;" src="feed/images/logo.png"></a>
      <ul id="nav-mobile" class="right">
        <li class=""><a class="text-muted" style="color: black; text-decoration: none;" href="home.php"><img src="https://png.icons8.com/office/40/000000/news.png" width="30px" height="30px">&nbsp;News Feed</a></li>
        <li><a class="text-muted" style="color: black; text-decoration: none;" href="user_blog.php"><img width="30px" height="30px" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAYAAABXAvmHAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAAOkSURBVGhD7Znba1RXGMWPtChVQaVVUKq+1AcRtH9FvYGmNvooPrUvBfFZtL4LFks1UaPGSwlpXpvgBQxRqzZewSjWy0usrcYQ7yYaM8v9nVkDJ+esyXwztJMK84PFMDNrr7POzN77HGaiGjVq1Ph/k2uI6nON0enw+BKNEaohO1ZQVzjuGtaojBDyozpANWUdWKc8wsB6FTgu2hPVsZafcAJnZNg4KEylTtbyE06ganO+lEKX56zlRwXFjLwFhgaAp3eA+yeAnp+Bzg3A0XlZ/78o1vKjQkry5BbQveU/ORnW8qNC3ORGgHu/Am1LshkVirX8qJDyyQF/NgOHZmWzyhRr+VEhsfZOBA7OAFoXAsfqgItbgQedwLshlha8eQKcWKvznGItPypkTB2YBnR9Czy+zNaCnl35D0CNLyHW8qNC3GpfBvRfZesU948D+6fqcWOItfyokLK092Pg941hag2yeYKH54CmyXpcEbGWHxVSkdq+zF8z0vx1sqzpxFp+VEjFav4UeHSBzRPc2K39QqzlR4XEDL8Mn+ht4J+zoUBD2IlW+aZD0xR9EifXaX9KrOVHhRTF5rmdzJE52TFJNc/MTie7LbHXlT8h1vKjQkoy/Bq4tC3c/n6UHVuQrQnzJbl1UHsTYi0/KsRNb0e4LkzPji/o3CYaC4Qrdtti7aVYy48KiWVzueWL/F5//SfgRS9LpBjoyV/cVIZtsf3XaCR3W7WXYi0/KkTKtsKz3wODfWySwL6JYtOpYwVNxG4Af5mvvUGs5UeFjKmjc/VtxMUftL9xQvBfoYl0bxa+vFjLjwopKdtO0ycx/Ao4PFv7T39HExm4qX1BrOVHhbh05PMwnR6zESl2wbK72vRdrH2TwstaflRILFu8j/4A3r7IP9rztMfWRBLbNps+yfpMf3fRRE6tlz7W8qNC4rK25Y0iPG9fOtpnCzu9O3WsHO0pyNZIEtvZhI+1/KgQ9HXzKCnsFiHtvb6Tb5Ji0+j41zSQ3mPSx1p+VEg8bRT2etrbvpxvEptuaY+pdREN5Nld6WMtPyokLqFQ30DLAr5JbGGnPabmz2ggg/3Sx1p+VEg819Ua+O2rrNeu2ElG3mQ9pn2TaCBFfKzlR4XEineh8InbtHl4XpcvKI3ymNIID2v5+eB/WgyDulTYeCh0OcVafnK7o29U2HgonMBq1iqPXGO0QwVWU6HDdtapDPtzwX6fr+aasGPZMSv6Y6NGjRo1qkgUvQdcqHbE1qtMCQAAAABJRU5ErkJggg==">&nbsp;Blogs</a></li>
        <li><a class="text-muted" style="color: black; text-decoration: none;" href="profile.php"><img width="30px" height="30px" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAYAAABXAvmHAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAAP2SURBVGhD7ZdZSFRRGMePoekU0ioVoUT20EMZ0fIgkmZ7Mzert3qonnpoIVqmsaaYJKIwyyBbHopIs4Vspe4YRJbhTDm2EK2kpLQv2oZZlvfru7dPmZnOqRnvXDG6f/gzdzn3fL9vznfuPYeZMmXKlClTpv4nlS1jPT2r2VyvnTkq7GyOZznrTbciI0WW6hS3dEiRbYuUC9Zh4HJ1oVu6hKADETrfY2eN3tUM/PwJvaLMxaKpaZvwGYvXwdLwuZWYdAm2e0a3xAK3BP7GZBowmXMg27LRaYo8NZaahqSrDpaE0AUI0eQH/ZuxTY3aDkFd2HYvHlfhcXNwO+pWrOAE2uuvJydAzY4kuOboEgCg14QpFg8mHH85MR6qtycieBQXQK8JUyweVCj+UpIBj7cNNAy81YQpFg/uT248ng6P8gZg58aCt5owxeJB8tx8ZjI8zO0P+JbgBjLKhCkWD5bndwdHcQP8xT8418IyYYrFg+ValqCuIPmvI1C5Jhqq8xPh49FUaDqRWY9vpee8dqGaMMXiwv7BKtiDLQkBk1c9vrepD7zenwI/zk0LaN90Ul8ShCmWf7BwrII2lqRrkzoYOth6kiBMsXgBjXB7kyBMsXjBjHJ7kiBMsXiBjHS4SRCmWLwgRjucJAhTLF4A1Z+PpUHtzsFQXziGe1+vQ02CMMXC5XKCcl7KVEqlJbg32IMury8c/dnntMDj3SPhZk4vaCjqgCTsrAGX0+V4vAd/l1xzsMzyNSyBMEOXutHATt5Xro2FF4enaUnU7kzmAkTC+LF7W+mMycO/OooQ9EndFeHm4pv6r/jWWaBqfXeo2zVEW3k2FI3lQug1bqJmU/jICIdvMSVRf2djj6e3NvaBJ/tS4YYrHj9cGVyIkC3bPiDw/YDz0qxECh05yUtZbEU2G6ONBI7CyyPT4W5ukraoCwAK0xr8WVtf/M3BresBpdQ6gkJGXt5VLEVNQHWlMw5uuixwf3MC3M6J15vIBgphvLRNN05qtMfn7Nr4cMdQbXL71lvg+9kpPLgA41vNo7ht3oBrbukgdd9x8qxi81rL6XnxFJzc3eDrqYnQct4aABxsNQE4ldUTy8WtnbulN4aWjUi4D8hoLSd1O/kotx9UrYvD0oqFV/uGc+H9vACAReG3ZohyYVJ36rLjhfArsKQuee1RBZhES92BdJzcVrieHd02EtySkaX51EXnECaRp46EOrFr9o4CnzMGIW2/YN22K8rpGfF4fhjL5SPCF0PVwhh6tHOows5m+pVTS/BSA9/rqdS08wrXLjPwY7f1hituHEJfboOXbc3gzhpEzf4NqRMTSycfS+aiIltn0WVTpkyZMtXZxNhPg8o2NMXCFJsAAAAASUVORK5CYII=">&nbsp;Confessions</a></li>
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
  
<br><br><br>

  

<div class="container">
  
<?php $sql = "SELECT * FROM signup INNER JOIN blogpost ON signup.name = blogpost.name WHERE blogpost.id = ".$_GET['id']. "ORDER BY blogpost.id DESC";
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

<center><h1><img width="75px" height="75px" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAGAAAABgCAYAAADimHc4AAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAAQ9SURBVHhe7d1LipRrEIThHulGpNrrVsU7YrcuQJAqJw5E3YS6AEfOxaGif0hAibymDiJLfisDHs4kyawvPLQ9Kk8mk8lkMplMJpPJZDKZTCaTv82T0+2Ns8321tnp9v3y38/np7tv/7Mfb9xs3+nN55efXXcNh8/tSy8unp3u7i8f6uuvH/KILG/f3nt69ekF13KY6OBy+DV8oKO0/I/46qB/COeb3UP6IMdMPw1cT2/0c285eMw/dtDyB/Dl0ZXn11xTX5a/gG7TBxiyvema+qLfAPj4ONvs3rqmviy/fn2i4+PHr6ifXFNf6PDYc019oaNjzzX1hY6OPdfUFzo69lxTX+ho0oc3HxHNVmiH0GySa+oLHU2i0oRmK7RDaDbJNfWFjiZRaUKzFdohNJvkmvpCR5OoNKHZCu0Qmk1yTX2ho0lUmtBshXYIzSa5pr7Q0SQqTWi2QjuEZpNcU1/oaBKVJjRboR1Cs0muqS90NIlKE5qt0A6h2STX1Bc6mkSlCc1WaIfQbJJr6gsdTaLShGYrtENoNsk19YWOJlFpQrMV2iE0m+Sa+kJHk6g0odkK7RCaTXJNfaGjFSphTehNFdfUFzpaoUetCb2p4pr6Qkcr9Kg1oTdVXFNf6GiFHrUm9KaKa+oLHa3Qo9aE3lRxTX2hoxV61JrQmyquqS90NIlKEJqt0A6h2STX1Bc6mkSlCc1WaIfQbJJr6gsdTaLShGYrtENoNsk19YWOJlFpQrMV2iE0m+Sa+kJHk6g0odkK7RCaTXJNfaGjSVSa0GyFdgjNJrmmvtDRJCpNaLZCO4Rmk1xTX+hoEpUmNFuhHUKzSa6pL3Q0iUoTmq3QDqHZJNfUFzqaRKUJzVZoh9BskmvqCx1NotKEZiu0Q2g2yTX1hY4mUWlCsxXaITSb5Jr6QkcrVMKa0JsqrqkvdLRCj1oTelPFNfWFjlboUWtCb6q4pr7Q0Qo9ak3oTRXX1Bc6WqFHrQm9qeKa+kJHK/SoNaE3VVxTX+hoEpUgNFuhHUKzSa6pL3Q0iUoTmq3QDqHZJNfUFzqaRKUJzVZoh9BskmvqCx1NotKEZiu0Q2g2yTX1hY4mUWlCsxXaITSb5Jr6QkeTqDSh2QrtEJpNck19oaNJVJrQbIV2CM0muaa+0NEkKk1otkI7hGaTXFNf6GgSlSY0W6EdQrNJrqkvdDSJShOardAOodkk19QXOppEpQnNVmiH0GySa+oLHU2i0oRmK7RDaDbJNfWFjo4919QXOjr2XFNf6OjYc019oaNjzzX1Zb649fcO88Wt89XFv3Wory6+RceHHOLLu+fr69HBvr5eWQ4++PUDHLvlx88d19Mf/XMd+mc76IMcpc325b/6d2TuLR/gaH8c6cfOUv7dg5f/cx5f2l3VXz76DeAYfkXVG/VWvVlvdw2TyWQymUwmk8lkMplMJpPJH3Jy8h299FwNGYkYXgAAAABJRU5ErkJggg=="><b>CW</b>Blogs</h1></center>


<center><h3 style="font-size: 20px;"><img width="45px" height="45px" style="border-radius: 50%; width: 40px; height: 40px; border-width: 4px; border-color: white; background-color: white;" src="<?php echo $row["image"]; ?>">&nbsp;<?php echo $row["name"]; ?></h3>
<?php echo $row['position']; ?>
</center>






<?php

include 'conn.php';


$id = isset($_GET['id']);


 $sql = "SELECT image FROM signup WHERE name = '$username'";
$result = mysqli_query($conn, $sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {


   ?>

         <div class="dropdown">

         <img style="border-radius: 40%; width: 30px; height: 30px;" src="<?php echo $row['image']; ?>">
          <?php 
    
            }
} else {
    echo "";
}
?>









<br>

<h3 style="font-size: 15px; float: left;"><i style="color: blue;" class="fa fa-link"></i>&nbsp;<?php echo "Posted ".$row["btime"]; ?></h3>



<div class="dropdown">
     <a class="dropdown" data-toggle="dropdown" style="float: right; text-decoration: none; margin-top: 30px;" href="#" data-toggle="tooltip" data-placement="top" title="More!"><b>•••</b></a>
<ul class="dropdown-menu dropdown-menu-right">
  <center>
      <li><a href="settings.php">Settings</a></li>



      <li><a href="" data-toggle="modal" data-target="#exampleModal">Share on Facebook</a></li>




      <li><a href="">Share on Linkedin</a></li>
      <li class="divider"></li>


      <li style="background-color: #f1f1f1;"><small><a href="index.php">Home</a> • <a href="about.php">About Us</a> • <br><a href="privacy.php">Privacy Policies</a> • <a href="terms.php">Terms of Service</a></small></li>


    </center>
    </ul>
  </div>


<div class="divider" style="height: 2px; width: 100%;"></div></center>
<br>

<center><h2 style="font-size: 35px; font-family: PT Sans;"><?php echo $row["btitle"]; ?></h2></center>
<center><h3 style="font-size: 17px;"><img style="border-radius: 40%; width: 40px; height: 40px;" src="<?php echo $row['image']; ?>">&nbsp;<?php echo "Blog post by ".$row["name"]; ?></h3><?php echo $row['position']; ?></center>
<br>
<center><div style="height: 2px; background-color: red; display: block; width: 320px;" class="divider"></div></center>

<br>

<center><p style="font-family: 'Work Sans', sans-serif;">
      <?php echo $row["bpost"]; ?>
    </p>
<br>

<?php 
    
            }
} else {
    echo "No Blogs yet.<br> Write Your first Blog!";
}

$conn->close();

?>







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
