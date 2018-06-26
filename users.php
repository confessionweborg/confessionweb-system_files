<?php

session_start();

include("conn.php"); 


$username=$_SESSION['name'];
?>



<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
<link type="text/css" rel="stylesheet" href="css/bootstrap.css"/>
<script src="js/bootstrap.js"></script>
<script src="js/jquery.min.js"></script>
<link href="style.css" rel="stylesheet"/>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Confessions - ConfessionWeb</title>


	
	<style>
		
		hr { 

    display: block;
    margin-top: 0.5em;
    margin-bottom: 0.5em;
    margin-left: auto;
    margin-right: auto;
    border-style: inset;
    width: 80%;

    border: 1px solid brown;
			
			
			
} 
		#post{
			
			text-align: center;
		}
		#head{
			background-color: brown;
			color: white;
		}

	#head2{
text-align: right;
		}
		#img{
			height: 50px;
			width: 50px;
			border-radius: 100px;
			border: 1px solid brown;
                       
		}
		
		#pro3{
			text-align: right;
		}
		 input[type=submit], input[type=reset] {
    background-color:brown;
    border: 1px solid black;
    color: white;
   height: 30px;
    text-decoration: none;
    margin: 4px 2px;
    cursor: pointer;
			 border-radius: 8px;
}
		input[type=text] {
    
    border: 2px solid brown;
    
  
    text-decoration: none;
    margin: 4px 2px;
    cursor: pointer;
			border-radius: 5px;
}

textarea{
   outline: blue;
   resize: none;
   overflow: auto;
   width: 350px;
   height: 40px;
   padding: 5px;
   border: 3px solid brown;

} 

#body {
box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
transition: 0.3s;
width: 100%;
background-color: #c2f2ff;

}

#body:hover {
box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
}



.button {
  display: inline-block;
  border-radius: 4px;
  background-color: #f4511e;
  border: none;
  color: #FFFFFF;
  text-align: center;
  font-size: 20px;
  padding: 10px;
  width: 150px;
  transition: all 0.5s;
  cursor: pointer;
  margin: 5px;
}

.button span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.button span:after {
  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}

.button:hover span {
  padding-right: 25px;
}

.button:hover span:after {
  opacity: 1;
  right: 0;
}

body {

  background-color: #c2f2ff;
  background-image: url("assets/img/background.jpg");
  height: 100%;
  background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}

.details {

   font-size: 30px;

}

ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
}

li {
    float: left;
    text-decoration: none;
}

li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
    font-size: 20px;
    margin-right: 20px;
}

li a:hover {
    background-color: brown;
    text-decoration: none;
    font-color: white;
}
	</style>


<link rel="apple-touch-icon" sizes="57x57" href="favicon/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="favicon/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="favicon/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="favicon/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="favicon/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="favicon/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="favicon/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="favicon/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192"  href="favicon/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="favicon/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
<link rel="manifest" href="favicon/manifest.json">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
<meta name="theme-color" content="#ffffff">

</head>
<body>


<div class="container-fluid">
	
	<div id="head" class="row">
		
		
<ul style="margin-top: 20px;">
  <li><a href="assets/about.html"class="btn btn-danger">About</a></li>
  <li><a href="assets/freq_q_ans.html" class="btn btn-danger">FAQs</a></li>
  <li><a href="assets/privacy_policies.html" class="btn btn-danger">Privacy Policies</a></li>
  <li><a href="confess.php" class="btn btn-danger">Confessions</a></li>
  <li><a href="index.php" class="btn btn-danger">Signup/Signin</a></li>
</ul>



	<div class="col-xs-6"><h2><b>ConfessionWeb</b></h2>
	</div>
    
	

   


	</div>
    <br>
	<br>
	
	
	
	
	
  <div id="pro3" class="col-xs-8">
<br><br>

     

  </div>

</div>
	<br><br>
    
    
<div id="post" class="card">

		

                <div class="banner-text">
	
    
</div>


	<br><br><br>



               

	

<br>
	<center>
    <div id="body" class="col-xs-6">
		

	<div class="col-xs-12">	



        
		<?php	$sql = "SELECT 	* FROM signup ORDER BY id desc";
                        
                        
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
	
    $location= $row["image"];
          
          echo  "<img id='img' src='$location'>"."<br>"."Username: ".$row["name"]."<br>"."Email: ".$row["email"]."<br>"."Phone Number: ".$row["number"]."<br>"."Age: ".$row["age"].$row["post"];			

		
        echo "<br><br>";
    }
} else {
    echo "No Users yet";
}

$rowcount=mysqli_num_rows($result);

$conn->close();
?>

<h2><?php echo "<h2>"."Total users: "."</h2>";

?></h2>

<h2>
<?php echo $rowcount ?>

</h2>

</div>

</div>











	</div>
	</div>
</center>

<br><br>

<!-- Footer -->
    <footer class="py-5 bg-dark">
      <div class="container">
        <p style="color: white;" class="m-0 text-center text-white">Use of this Site is subject to express terms of use. By using this site, you signify that you agree to be bound by these <a href="/assets/privacy_policies.html">Universal Terms of Service.</a><br/>Copyright &copy; <a href = "/assets/about.html">ConfessionWeb</a> 2018<br/>All Rights Reserved.</p>
      </div>
      <!-- /.container -->
    </footer>




</body>
</html>