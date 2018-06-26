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
    border-top: 0;" class="white lighten-1 col-lg-12" role="navigation">
    <div class="nav-wrapper container col-7"><a id="logo-container" style="color: black; text-decoration: none; font-size: 25px;" href="home.php" class=""><img style="border-radius: 10%; width: 30px; height: 30px;" src="feed/images/logo.png"></a>
      <ul id="nav-mobile" class="right">
        <li class=""><a class="text-muted" style="color: black; text-decoration: none;" href="home.php"><img width="30px" height="30px" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAAGqSURBVGhD7VlLTsMwFKzgEMDBCuxYJDkBILGBXAQkBDtEBYhELPiUgiggNixhWXEDaNyWj4xHePFUeRESx46iN9Is82bmxXEsvxaDwWA0C+0DORudiuUwzfaDNDt3SaW5F6RiKY7ljLZTDNHZcCFMxFOYCumZjyvJcF7b+h/wJlQ3HgxFPTHrF3ozf8vJVNAfscy0vfzAN0GLrF+OZOflUx6/uiG01pQm9YBvRtvLD/XQFS1yqAq/vf84JTSpB3jS9vIjSLJbWuRIdckkViWhST3Ak7aXHxzEIjkIRWODdDwEgSb1YCVIfDOW3cGX7A2+nRBaW72x/SB1oJUgkeJGdyQ3VZdcEFpUH7QSZOd5YlzHVRKa1IOVILz9liAHoeAgFslBKKaD+Nh+t6vYfsFG/BDrQCtBcGi8dnhohBY0qQcrQRpzjOfttwQ5CAUHsUgrQRpzZYoLY1oEF8oobLpwroLQWr2wcIldy7FCItraXn5g0KM60DcV9MOCgx4AozfVhXtzYXcM0uwuOPmY07aKAV0IE7GoOrI7PaysmtCEdulhKIPBYNQMrdYvnJsOnW3P0qkAAAAASUVORK5CYII=">&nbsp;News Feed</a></li>
        <li><a class="text-muted" style="color: black; text-decoration: none;" href="user_blog.php"><img width="30px" height="30px" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAYAAABXAvmHAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAAOkSURBVGhD7Znba1RXGMWPtChVQaVVUKq+1AcRtH9FvYGmNvooPrUvBfFZtL4LFks1UaPGSwlpXpvgBQxRqzZewSjWy0usrcYQ7yYaM8v9nVkDJ+esyXwztJMK84PFMDNrr7POzN77HGaiGjVq1Ph/k2uI6nON0enw+BKNEaohO1ZQVzjuGtaojBDyozpANWUdWKc8wsB6FTgu2hPVsZafcAJnZNg4KEylTtbyE06ganO+lEKX56zlRwXFjLwFhgaAp3eA+yeAnp+Bzg3A0XlZ/78o1vKjQkry5BbQveU/ORnW8qNC3ORGgHu/Am1LshkVirX8qJDyyQF/NgOHZmWzyhRr+VEhsfZOBA7OAFoXAsfqgItbgQedwLshlha8eQKcWKvznGItPypkTB2YBnR9Czy+zNaCnl35D0CNLyHW8qNC3GpfBvRfZesU948D+6fqcWOItfyokLK092Pg941hag2yeYKH54CmyXpcEbGWHxVSkdq+zF8z0vx1sqzpxFp+VEjFav4UeHSBzRPc2K39QqzlR4XEDL8Mn+ht4J+zoUBD2IlW+aZD0xR9EifXaX9KrOVHhRTF5rmdzJE52TFJNc/MTie7LbHXlT8h1vKjQkoy/Bq4tC3c/n6UHVuQrQnzJbl1UHsTYi0/KsRNb0e4LkzPji/o3CYaC4Qrdtti7aVYy48KiWVzueWL/F5//SfgRS9LpBjoyV/cVIZtsf3XaCR3W7WXYi0/KkTKtsKz3wODfWySwL6JYtOpYwVNxG4Af5mvvUGs5UeFjKmjc/VtxMUftL9xQvBfoYl0bxa+vFjLjwopKdtO0ycx/Ao4PFv7T39HExm4qX1BrOVHhbh05PMwnR6zESl2wbK72vRdrH2TwstaflRILFu8j/4A3r7IP9rztMfWRBLbNps+yfpMf3fRRE6tlz7W8qNC4rK25Y0iPG9fOtpnCzu9O3WsHO0pyNZIEtvZhI+1/KgQ9HXzKCnsFiHtvb6Tb5Ji0+j41zSQ3mPSx1p+VEg8bRT2etrbvpxvEptuaY+pdREN5Nld6WMtPyokLqFQ30DLAr5JbGGnPabmz2ggg/3Sx1p+VEg819Ua+O2rrNeu2ElG3mQ9pn2TaCBFfKzlR4XEineh8InbtHl4XpcvKI3ymNIID2v5+eB/WgyDulTYeCh0OcVafnK7o29U2HgonMBq1iqPXGO0QwVWU6HDdtapDPtzwX6fr+aasGPZMSv6Y6NGjRo1qkgUvQdcqHbE1qtMCQAAAABJRU5ErkJggg==">&nbsp;Blogs</a></li>
        <li><a class="text-muted" style="color: black; text-decoration: none;" href="profile.php"><img width="30px" height="30px" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAYAAABXAvmHAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAAP2SURBVGhD7ZdZSFRRGMePoekU0ioVoUT20EMZ0fIgkmZ7Mzert3qonnpoIVqmsaaYJKIwyyBbHopIs4Vspe4YRJbhTDm2EK2kpLQv2oZZlvfru7dPmZnOqRnvXDG6f/gzdzn3fL9vznfuPYeZMmXKlClTpv4nlS1jPT2r2VyvnTkq7GyOZznrTbciI0WW6hS3dEiRbYuUC9Zh4HJ1oVu6hKADETrfY2eN3tUM/PwJvaLMxaKpaZvwGYvXwdLwuZWYdAm2e0a3xAK3BP7GZBowmXMg27LRaYo8NZaahqSrDpaE0AUI0eQH/ZuxTY3aDkFd2HYvHlfhcXNwO+pWrOAE2uuvJydAzY4kuOboEgCg14QpFg8mHH85MR6qtycieBQXQK8JUyweVCj+UpIBj7cNNAy81YQpFg/uT248ng6P8gZg58aCt5owxeJB8tx8ZjI8zO0P+JbgBjLKhCkWD5bndwdHcQP8xT8418IyYYrFg+ValqCuIPmvI1C5Jhqq8xPh49FUaDqRWY9vpee8dqGaMMXiwv7BKtiDLQkBk1c9vrepD7zenwI/zk0LaN90Ul8ShCmWf7BwrII2lqRrkzoYOth6kiBMsXgBjXB7kyBMsXjBjHJ7kiBMsXiBjHS4SRCmWLwgRjucJAhTLF4A1Z+PpUHtzsFQXziGe1+vQ02CMMXC5XKCcl7KVEqlJbg32IMury8c/dnntMDj3SPhZk4vaCjqgCTsrAGX0+V4vAd/l1xzsMzyNSyBMEOXutHATt5Xro2FF4enaUnU7kzmAkTC+LF7W+mMycO/OooQ9EndFeHm4pv6r/jWWaBqfXeo2zVEW3k2FI3lQug1bqJmU/jICIdvMSVRf2djj6e3NvaBJ/tS4YYrHj9cGVyIkC3bPiDw/YDz0qxECh05yUtZbEU2G6ONBI7CyyPT4W5ukraoCwAK0xr8WVtf/M3BresBpdQ6gkJGXt5VLEVNQHWlMw5uuixwf3MC3M6J15vIBgphvLRNN05qtMfn7Nr4cMdQbXL71lvg+9kpPLgA41vNo7ht3oBrbukgdd9x8qxi81rL6XnxFJzc3eDrqYnQct4aABxsNQE4ldUTy8WtnbulN4aWjUi4D8hoLSd1O/kotx9UrYvD0oqFV/uGc+H9vACAReG3ZohyYVJ36rLjhfArsKQuee1RBZhES92BdJzcVrieHd02EtySkaX51EXnECaRp46EOrFr9o4CnzMGIW2/YN22K8rpGfF4fhjL5SPCF0PVwhh6tHOows5m+pVTS/BSA9/rqdS08wrXLjPwY7f1hituHEJfboOXbc3gzhpEzf4NqRMTSycfS+aiIltn0WVTpkyZMtXZxNhPg8o2NMXCFJsAAAAASUVORK5CYII=">&nbsp;Confessions</a></li>
        <li><a style="color: black; text-decoration: none;" href="">
          
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

          <ul class="dropdown-menu dropdown-menu-right" style="background-color: #f1f1f1;">
      <li><a style="color: black; font-size: 15px;" href="profile.php"><i class="fas fa-user-circle"></i>&nbsp;Profile</a></li>
      <li><a style="color: black; font-size: 15px;" href="user_blog.php"><i class="fas fa-rss-square"></i>&nbsp;Your Blogs</a></li>
      <li><a style="color: black; font-size: 15px;" href="profile.php"><i style="font-size: 17px;" class="fas fa-handshake"></i>&nbsp;Confessions</a></li>
      <li><a style="color: black; font-size: 15px;" href="settings.php"><i class="fas fa-sliders-h"></i>&nbsp;Settings</a></li>
    </ul>
</div>








        </a></li>
      </ul>
    </div>
  </nav>
  
<br><br><br>

  

<div class="container">
  
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

<center><h1><img width="75px" height="75px" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAGAAAABgCAYAAADimHc4AAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAAQ9SURBVHhe7d1LipRrEIThHulGpNrrVsU7YrcuQJAqJw5E3YS6AEfOxaGif0hAibymDiJLfisDHs4kyawvPLQ9Kk8mk8lkMplMJpPJZDKZTCaTv82T0+2Ns8321tnp9v3y38/np7tv/7Mfb9xs3+nN55efXXcNh8/tSy8unp3u7i8f6uuvH/KILG/f3nt69ekF13KY6OBy+DV8oKO0/I/46qB/COeb3UP6IMdMPw1cT2/0c285eMw/dtDyB/Dl0ZXn11xTX5a/gG7TBxiyvema+qLfAPj4ONvs3rqmviy/fn2i4+PHr6ifXFNf6PDYc019oaNjzzX1hY6OPdfUFzo69lxTX+ho0oc3HxHNVmiH0GySa+oLHU2i0oRmK7RDaDbJNfWFjiZRaUKzFdohNJvkmvpCR5OoNKHZCu0Qmk1yTX2ho0lUmtBshXYIzSa5pr7Q0SQqTWi2QjuEZpNcU1/oaBKVJjRboR1Cs0muqS90NIlKE5qt0A6h2STX1Bc6mkSlCc1WaIfQbJJr6gsdTaLShGYrtENoNsk19YWOJlFpQrMV2iE0m+Sa+kJHk6g0odkK7RCaTXJNfaGjFSphTehNFdfUFzpaoUetCb2p4pr6Qkcr9Kg1oTdVXFNf6GiFHrUm9KaKa+oLHa3Qo9aE3lRxTX2hoxV61JrQmyquqS90NIlKEJqt0A6h2STX1Bc6mkSlCc1WaIfQbJJr6gsdTaLShGYrtENoNsk19YWOJlFpQrMV2iE0m+Sa+kJHk6g0odkK7RCaTXJNfaGjSVSa0GyFdgjNJrmmvtDRJCpNaLZCO4Rmk1xTX+hoEpUmNFuhHUKzSa6pL3Q0iUoTmq3QDqHZJNfUFzqaRKUJzVZoh9BskmvqCx1NotKEZiu0Q2g2yTX1hY4mUWlCsxXaITSb5Jr6QkcrVMKa0JsqrqkvdLRCj1oTelPFNfWFjlboUWtCb6q4pr7Q0Qo9ak3oTRXX1Bc6WqFHrQm9qeKa+kJHK/SoNaE3VVxTX+hoEpUgNFuhHUKzSa6pL3Q0iUoTmq3QDqHZJNfUFzqaRKUJzVZoh9BskmvqCx1NotKEZiu0Q2g2yTX1hY4mUWlCsxXaITSb5Jr6QkeTqDSh2QrtEJpNck19oaNJVJrQbIV2CM0muaa+0NEkKk1otkI7hGaTXFNf6GgSlSY0W6EdQrNJrqkvdDSJShOardAOodkk19QXOppEpQnNVmiH0GySa+oLHU2i0oRmK7RDaDbJNfWFjo4919QXOjr2XFNf6OjYc019oaNjzzX1Zb649fcO88Wt89XFv3Wory6+RceHHOLLu+fr69HBvr5eWQ4++PUDHLvlx88d19Mf/XMd+mc76IMcpc325b/6d2TuLR/gaH8c6cfOUv7dg5f/cx5f2l3VXz76DeAYfkXVG/VWvVlvdw2TyWQymUwmk8lkMplMJpPJH3Jy8h299FwNGYkYXgAAAABJRU5ErkJggg=="><b>CW</b>Blogs</h1></center>

<center><h2 style="font-family: 'Poppins', sans-serif; font-size: 35px;"><?php echo $row["btitle"]; ?></h2></center>

<center><h3 style="font-size: 20px;"><img width="35px" height="35px" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAYAAABXAvmHAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAAVpSURBVGhD7ZltUFRVGMeZyD70sayZxtSJ+tIoUToKGNjY0NiEm5CSL8042UxgqYCB6WIgJmkxjWPgzC5LmG0xq6CNK28Wb1nmBzJgEikLKNg3XnZJwb3TyzhP57meXfbluZd72RW/7H/mN7Pcc57/+d+z59x79xIVUUQRhS4AiHYOuxOcw0KByyGccTncV50OYdxpd/8rIn4WerAN+2BfVnMPL797clmF+Szghy67YGPhQCVWrHVa3I9yu9nThG1iLptVg9Ph/ocIpgr0YF469OT2d1auYWEzG9BFhQkF5jmG3nyY8At64D62jiupwcMJOxE92x9z+LDhkc0G9zPjRmrAOwEbqwHH5MOHJnHmZzG8F7tgDss3oXbZXOu6BqaycjiY9TrkZ6TCzjWrRCoPHiD7y4HLiceYmcZtwmuUMcWY7SbU6PSQszbFG9qXbM3zcOHceRge/Iusl2EDj6NOE/aJh9gMOAnDINj1HAzvF5PBA3n3VQ201J4lfShYhrEb1hsP8ljKhV8fZUhh/sxIhpWjyVRLepHYhWM8ljKJd1iFN6nBX22wK/1FMqQcWPPnLxbSMxDxZjfknsfjTS/x8YAwojitryQDenhv3XNgfDMROvYuhW92LYMczVSbueoE6UnBMh3m8eSFD1mswBpoIMXhHZl+gZGi9SuhOisBLmuXgLXkKbB9MEV99nK2oW/3O5KfS3pSsG9hSNEDILudJ1IGUuCmxDDFGSvBtC0euvct8QtMcfrteLFm/xubSU8p2Eks5zGlxR+JSQMKz6xTQeXAmrz1qaSnFOMOYS+PKS3W8avAQjlCOQGE8pShlseUFv/hQRWTGAu2+p2AJv5xeDnhCb+w1HGswVrKUwqW7QqPKS12/R+niqX4Pn8hnNqW4A22loVEPH9LHccarKU8pcAbK48pLaXXfw+9J4vBUhLrF1YJWNN7Ut3zEWbjMaWl9gQQhy6dDCmHQ/cK6SWHwhNQt4SQkbqPyZByDNcfIb3kULaE2EahimUZsICtdGofTEtpIqux0l4ysGw/85jSYh3PBBYqYfTiWRYuLjhsEHEweqmO9FCAgsuoyhuZL6M/nJPd0NgWQnhkD48pLXzpRBQq5mLuw9CjjYGB4ifFwAh+xmPYRtUoZczuXsZjSos/zFkCi5VyIXuuLFSNEtgVSNnDHAofXSkTKWx9k7D/rTZIWVQFzdsXkMERbHth8XE4sL0dHH9Mkl6S2N2HeLzpha/7lN4Pzn/RD++sboGkGAM8M68MPt24mgyPYBv2SWZ981NbocU0QHoGwrL8reoHDYpdc3WUmYcRy03QaTsha0WTSNpikxguPbYQ2nY+EhQej2Hb7T4mb52hsFv0osbwYhfKeSzlwh/SeOOgDNn1GHR7psIjmSsa4dnHKsSAGU9roXpLMlsyC0WqtyRBRpxWbMM+2Ne3Vl/QFTSGB5Zh9PrQ9Qd4LHViP242UaYNx/v8AnjYGl/nPQmKJNaGfaha9KTGYmTwODMTm4EKX8ORwUnIe6mFDIFkJjZCGlsiuCeWzj8mkhxTKS6bwJn3JTelOXhj24UyHmPmwleL+JrPY9pwgp79cNBk7PcNj68Wo3mM0CS+3LUL9Wh8NLuDHDwcfJL7oxiejVUXtpe7HrHZmMOWk16b1k4OHg60674VrzhsrHv5sOHXl4d6Snevab1FBQiF3Zq2W8aSK8re/YSq5s/7FxzN6ejeseprMowa0KMs73Jno+G32f9fWYO+L7ai4Kf2fE3rf1Q4ObDGsK+zzWz4fRG3u3uqqYHomvLejVVF3eaPMi9ZijZ958YlgbOL4Gc8hm2VhV3mU2VXN2ANL48ooohmrKio/wHi4HXZxnIVNAAAAABJRU5ErkJggg==">&nbsp;<?php echo $row["name"]; ?></h3></center>






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


      <li style="background-color: #f1f1f1;"><small><a href="assets/index.php">Home</a> • <a href="assets/about.html">About Us</a> • <br><a href="privacy.php">Privacy Policies</a> • <a href="assets/termsofservice.html">Terms of Service</a></small></li>


    </center>
    </ul>
  </div>


<div class="divider" style="height: 2px; width: 100%;"></div></center>
<br>

<center><h2 style="font-size: 35px; font-family: PT Sans;"><?php echo $row["btitle"]; ?></h2></center>
<center><h3 style="font-size: 17px;"><img width="35px" height="35px" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAYAAABXAvmHAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAAQ5SURBVGhD7ZdfaFt1FMdb5p/pHkRQZDD1YSb1ScQKZoMsf+1dl+Z2VINzMEZhL9PXTax2Mig6nUNQJm5Ebaq0g3bgNjQp61hm0v1ze3aMMYad4l6sxa6JWv0dz7k9V25uTkpum96k0C98SHp/v9/5fc7NL5e0aSUrWUnt4vP5HgiHw9uQ48i1UCh0F1/BJBKJBHlq4yUYDL6Ewj9Zhe3geJanN1ZQrs8uWwls4jq+HvT7/Wt5eX2DQj12ySqZxrVdXKY+wWPzAorM2sSqBhv4B78XUS7nfuhMS2JOwBoTiUTiPi7pXgKBwLOSkER3IgqpXg1ufR0zXu3j9ADgsu4FN37HLmLFKg2ZeAn2JvBT6Oey7kU6PvNJ27E1cYXLuhdswHjmO5G2Y2niFpd1L7hpgTaXxJxANfBmzHBZ98J3TpRyglmHy7qXZd2AGvLE3tixoVirBnp2biyoQc8WLr/0Uce8t/8daoFP9mglMp91ewys16xI44f3akC11JB3gssvfagBOOYtESGOoBxhv25ScRxrudsAftzUhErHVJmMQ6gGyavBFo3LuxeVjl+TpJygMvEfuZz7wQaSkpQTVKbjKJdzP5DRo5KUE9R38TCXq0/wDn4viVWDSnec5TL1ixqNPwXpjilJcD7w+P1Ga7lMfaO+1Tfhl3FSEpUw5HENL2+MqNMxD3yzURQuAeeo9Nb1vKyxAkeaAFKPAIw8A3AqBJDegrTj++DcNRrDOTy98WI0UAU8vfEiyUrw9MbI1vxM6xO9Z35Ys2vo76sHn/xLErZCc2ju4/vGLtNaLuN+4vkZX2e+OI7Aut7T0PxKEoK7e2YlaSubdr81S3PX9Y4BrdXzhTNUi8tWTDilHQj3t73Hfy48m9Pqftw02ZkrKBIg/MMT0LwtaTTR9yb+byyIEzRGc2iuf/i2sdZgrtZHgSys5m1KQvKRlAbEopqIX5x+TM8VL/y/sQXP++NzckjX66/BuQNemDz8oAG9p2vmuPeDC2XrDXLFK7H81MO8nRESNuUtTbzNw9Xn5dwfj+KduiFuTOSK0PLhRVj16pykBI09feiSMVesgej54tXEGDxEe0rykf62yfCX2nOGVNUBaMZjMyptaCd04lfw7R+E9bsOwZrtnxrQe7oWPnlHXGNHzxVOoei7tZHH4J3fIW3klNjoOOjZX8QxK+0nkqXiLB9KtTl/aiWGYRXekZvSRk6IjZ6FyEAMXhzsnreJ9pOf106eguc1Im3khI5M1pA3hSo1UXN5Sme+8LF9I6dox/vKxKK2JjZL8gP6n4uSp+BT4bxVZkHkpkEb2V8mSE3Ez/0sy6e03xctT8EjdEeUckqlJr7qKruG1EaegkeoKAotAL1CEzZqJ78UaT3aem+kXxsRxA356ED0eZ7auKnQxPKQNxPIBu4xm8Afa1PLSt4MNYHyXyxcvqnpP4PHssGGnkoWAAAAAElFTkSuQmCC">&nbsp;<?php echo "Blog post by ".$row["name"]; ?></h3></center>
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
