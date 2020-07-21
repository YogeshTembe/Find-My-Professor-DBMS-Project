

<?php
if(!isset($_SESSION)) 
    { 
        session_start(); 
    }
$sfirst_name=filter_input(INPUT_POST, 'sfirst_name');
$smiddle_name=filter_input(INPUT_POST, 'smiddle_name');
$slast_name=filter_input(INPUT_POST, 'slast_name');
$branch=filter_input(INPUT_POST, 'branch');
$semester=filter_input(INPUT_POST, 'semester');
$sphone_number=filter_input(INPUT_POST, 'sphone_number');
$semail_id=filter_input(INPUT_POST, 'semail_id');
$fa=filter_input(INPUT_POST, 'fa');

if($_SERVER['REQUEST_METHOD']=="POST" and isset($_POST['find']))
{
    func();
}
function func() {
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
  
if (isset($_SESSION['username'])) {
    

$username=$_SESSION['username'];
$sfirst_name=filter_input(INPUT_POST, 'sfirst_name');
$smiddle_name=filter_input(INPUT_POST, 'smiddle_name');
$slast_name=filter_input(INPUT_POST, 'slast_name');
$branch=filter_input(INPUT_POST, 'branch');
$semester=filter_input(INPUT_POST, 'semester');
$sphone_number=filter_input(INPUT_POST, 'sphone_number');
$semail_id=filter_input(INPUT_POST, 'semail_id');
$fa=filter_input(INPUT_POST, 'fa');



  

$con=mysqli_connect("localhost","root","Panda@19","project");

if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  
  

$sql="UPDATE `student` SET `first name`='$sfirst_name',`middle name`='$smiddle_name',`last name`='$slast_name',`branch`='$branch',`semester`='$semester' WHERE `student number`='".$_SESSION['username']."';";

$query=mysqli_query($con,$sql);

$sql2="UPDATE `studentinfo` SET `phone number`='$sphone_number',`email-id`='$semail_id' WHERE `student number`='".$_SESSION['username']."' LIMIT 1;";
$query2=mysqli_query($con,$sql2);


if($query && $query2)
{
    ?>

   <script type="text/javascript">
    alert("Data Updated Sucessfully");
   </script>
  <?php
}
else
{
    ?>
   <script type="text/javascript">
    alert("Error Occurred! Could Not Update Database");
   </script>
   <?php
   
}

}
 else{
     echo "hell!";
 }

}

?>



<!DOCTYPE html>
<html lang="en">
<head>
	<title>Student Info</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/vesitlogo2"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
<style>
    .selectWrapper{
  border-radius:36px;
  display:inline-block;
  overflow:hidden;
  background:#cccccc;
  border:1px solid #9457F3;
}
.selectBox{
  width:350px;
  height:55px;
  border:0px;
  outline:none;
  text-align: center;
}
table{
    border-spacing: 5px;
}
table, th, td {
  border: 1px solid black;
  border: 1px solid black;
  border-collapse: collapse;
}
th,td{
    padding: 15px;
}
th {
  text-align: left;
  color:rgb(148,87,243);
}
@font-face {
  font-family: 'Varela Round';
  font-style: normal;
  font-weight: 400;
  src: local('Varela Round Regular'), local('VarelaRound-Regular'), url(https://fonts.gstatic.com/s/varelaround/v12/w8gdH283Tvk__Lua32TysjIfp8uK.ttf) format('truetype');
}

@font-face {
  font-family: 'Font Awesome';
  font-style: normal;
  font-weight: 400;
  src: url(https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.1.0/fonts/fontawesome-webfont.ttf) format('truetype');
}

:root {
  --accent-color: #B891F7;
  --gradient-color: #B891F7;
}

* {
  box-sizing: border-box;
}

body {
  background-color:#B891F7;
  font-family: "Varela Round", sans-serif;
  margin: 0px;
  padding: 0px;
  text-transform: capitalize;
}

.menu{
  margin: 0px;
  background-color:#B891F7 ;
  margin-left: 0px;
  margin-right: 0px;
  padding-left: 0px;
  padding-right: 0px;
  margin-top: 0px;
  padding-top: 0px;
}

.menu > ol {
  background-color:#B891F7;
  list-style: none;
  margin: 0px 0px 0px 0px;
  padding: 0px 0px 0px 0px;  
}

.menu > ol > li {
  background: #B891F7;
  border-left: 0px solid var(--gradient-color);
  margin-bottom: 0px;
  position: relative;
  transition: 0.5s;
}

.menu > ol > li:nth-child(1) {
  --accent-color: #FDA085;
  --gradient-color: #F6D365;
}
.menu > ol > li:nth-child(2) {
  --accent-color: #BFF098;
  --gradient-color: #6FD6FF;
}
.menu > ol > li:nth-child(3) {
  --accent-color: #EA8D8D;
  --gradient-color: #A890FE;
}
.menu > ol > li:nth-child(4) {
  --accent-color: #D8B5FF;
  --gradient-color: #1EAE98;
}
.menu > ol > li:nth-child(5) {
  --accent-color: #C6EA8D;
  --gradient-color: #FE90AF;
}

.menu > ol .sub-menu {
  border-left: 1px solid #FBFBFB;
  margin-left: 0px;
  list-style: none;
  max-height: 0px;
  overflow: hidden;
  padding-left: 0px;
  position: relative;
  transition: 0.5s;
  z-index: 1;
}

.menu > ol > li:focus .sub-menu,
.menu > ol > li:focus-within .sub-menu {
  max-height: 100px;
}

.menu > ol > li a {
  color: #FBFBFB;
  display: block;
  padding: 15px;
  position: relative;
  text-decoration: none;
  z-index: 1;
}

.menu > ol > li a:not(:last-child):before {
    content: "\f078";
    font-family: "Font Awesome";
    font-size: 0.75em;
    line-height: 0px;
    position: absolute;
    right: 25px;
    top: 0;
    bottom: 0;
    margin: auto;
    transition: 0.5s;
  }

.menu > ol > li:focus-within a:before {
  transform: rotate(-180deg);
}

.menu > ol .sub-menu li {
  font-size: 0.9em;
}
.menu > ol .sub-menu li:hover {
  background: rgba(184, 145, 40, 0.6);
}

.menu > ol > li:after {
  background: #B891F7;
  content: "";
  position: absolute;
  left: 0;
  right: 0;
  top: 0;
  bottom: 0;
  transition: 0.5s;
  max-width: 0;
  overflow: hidden;
}

.menu > ol > li:focus-within:after,
.menu > ol > li:hover:after {
  background : linear-gradient(to left, var(--accent-color), var(--gradient-color));
  max-width: 800px;
}

.menu > ol > li:focus-within,
.menu > ol > li:hover {
  z-index: 100;
}

a:focus {
  outline: none;
  position: relative;
}
a:focus:after {
  width: 50px;
}
a:after {
  content: "";
  background: #FBFBFB;
  position: absolute;
  bottom: 5px;
  left: 15px;
  height: 3px;
  width: 0;
  transition: 0.5s;
  transition-delay: 0.2s;
}

.menu > ol .sub-menu li a:after {
  bottom: 5px;
  height: 1px;
}

.menu > ol .sub-menu li a:hover:after,
.menu > ol .sub-menu li a:focus:after {
  width: 15px;
}

@media (min-width: 600px) {
    .menu {
    margin: 0;
    margin-top: 5vh;
  }
  .menu > ol {
    
    max-width: none;
    text-align: center;
  }
  .menu > ol > li {
    border-top: 5px solid var(--accent-color);
    border-left: 0;
    display: inline-block;
    margin-left: -5px;
    vertical-align: top;
    width: 120px;
}
  .menu > ol > li a:not(:last-child):before {
    right: 12.5px;
  }

    .menu > ol > li:hover a:before {
    transform: rotate(-180deg);
  }

  .menu > ol > li:hover:after,
  .menu > ol > li:focus:after,
  .menu > ol > li:focus-within:after {
   
    border-radius: 3px;
    top: -15px;
    bottom: -15px;
    left: -9px;
    right: -9px;
  }
  .menu > ol > li:hover .sub-menu {
  max-height: 750px;
}
  .menu > ol .sub-menu {
    border-left: 0;
    margin: 0px 0px 0px;
    padding-left: 0;
  }
   a:focus,
  a:hover {
    position: relative;
  }
  a:focus:after,
  a:hover:after {
    width: 50px;
  }
  a:after {
    left: 0;
    right: 0;
    margin: auto;
  }
}

@media (min-width: 775px) {
  .menu > ol > li {
    width: 200px;
  }
  .menu > ol > li a:not(:last-child):before {
    right: 25px;
  }
}
</style>
</head>
<body style="background-color: #666666;">
    
    <nav class="menu">
  <ol>
      <li class="menu-item"><a href="studentpage.php">Student Info</a></li>
    <li class="menu-item"><a href="index.php">Find My Professor</a></li>
    <li class="menu-item"><a href="index2.php">Logout</a></li>
    
  </ol>
</nav>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
                            <form class="login100-form validate-form" method="post" action="studentpage.php">
                                
                                
					<span class="login100-form-title p-b-43" style="color: rgb(148,87,243)">
						Basic Information
					</span>
                                	
					
                                         <span style="font-size:20px;">First Name</span>
                                        <br>
                                        <div class="wrap-input100" name="sfirst_name">
						<input class="input100" type="text" name="sfirst_name" value="<?php 
                                              
                                                $con=mysqli_connect("localhost","root","Panda@19","project");

 if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  } 
  $sql3="SELECT `first name` FROM `student` WHERE `student number`='".$_SESSION['username']."';"; 
 
  if ($result=mysqli_query($con,$sql3))
  {
  // Fetch one and one row
  while ($row=mysqli_fetch_row($result))
    {
   echo $row[0];
   
    }
  // Free result set
  mysqli_free_result($result);
}
if(!$result){
    echo "Empty";
}
mysqli_close($con);
                                                
                                                
                                                ?>">
						<span class="focus-input100"></span>
						<span class="label-input100"></span>
					</div>
                                        <span style="font-size:20px;">Middle Name</span>
                                        <br>
                                        <div class="wrap-input100">
						<input class="input100" type="text" name="smiddle_name" value="<?php 
                                               $con=mysqli_connect("localhost","root","Panda@19","project");

 if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  } 
  $sql3="SELECT `middle name` FROM `student` WHERE `student number`='".$_SESSION['username']."';"; 
 
  if ($result=mysqli_query($con,$sql3))
  {
  // Fetch one and one row
  while ($row=mysqli_fetch_row($result))
    {
   echo $row[0];
   
    }
  // Free result set
  mysqli_free_result($result);
}
if(!$result){
    echo "Empty";
}
mysqli_close($con);
                                                
                                                
                                                ?>">
						<span class="focus-input100"></span>
						<span class="label-input100"></span>
					</div>
                                        <span style="font-size:20px;">Last Name</span>
                                        <br>
                                        <div class="wrap-input100">
						<input class="input100" type="text" name="slast_name" value="<?php 
                                               $con=mysqli_connect("localhost","root","Panda@19","project");

 if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  } 
  $sql3="SELECT `last name` FROM `student` WHERE `student number`='".$_SESSION['username']."';"; 
 
  if ($result=mysqli_query($con,$sql3))
  {
  // Fetch one and one row
  while ($row=mysqli_fetch_row($result))
    {
   echo $row[0];
   
    }
  // Free result set
  mysqli_free_result($result);
}
if(!$result){
    echo "Empty";
}
mysqli_close($con);
                                                
                                                
                                                ?>">
						<span class="focus-input100"></span>
						<span class="label-input100"></span>
					</div>
                                        <br>
                                        
                                        <span style="font-size:20px;">Branch(<?php 
                                               $con=mysqli_connect("localhost","root","Panda@19","project");

 if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  } 
  $sql3="SELECT `branch` FROM `student` WHERE `student number`='".$_SESSION['username']."';"; 
 
  if ($result=mysqli_query($con,$sql3))
  {
  // Fetch one and one row
  while ($row=mysqli_fetch_row($result))
    {
   echo $row[0];
   
    }
  // Free result set
  mysqli_free_result($result);
}
if(!$result){
    echo "Empty";
}
mysqli_close($con);
                                                
                                                
                                                ?>)</span>
                                        <br>
                                        <div class="selectWrapper">
                                        <select class="selectBox" type="text" name="branch">
                                                     
                                                     <option <?php if($branch == 'COMP'){echo("selected");}?>>COMP</option>
                                                     <option <?php if($branch == 'EXTC'){echo("selected");}?>>EXTC</option>
                                                     <option <?php if($branch == 'ETRX'){echo("selected");}?>>ETRX</option>
                                                     <option <?php if($branch == 'INST'){echo("selected");}?>>INST</option>
                                                     
                                                     
                                            </select>
                                        </div>
                                        <br>
                                        
                                        
                                        <span style="font-size:20px;">Semester(<?php 
                                               $con=mysqli_connect("localhost","root","Panda@19","project");

 if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  } 
  $sql3="SELECT `semester` FROM `student` WHERE `student number`='".$_SESSION['username']."';"; 
 
  if ($result=mysqli_query($con,$sql3))
  {
  // Fetch one and one row
  while ($row=mysqli_fetch_row($result))
    {
   echo $row[0];
   
    }
  // Free result set
  mysqli_free_result($result);
}
if(!$result){
    echo "Empty";
}
mysqli_close($con);
                                                
                                                
                                                ?>)</span>
                                        <br>
                                        <div class="selectWrapper">
                                        <select class="selectBox" type="text" name="semester">
                                                     
                                                     <option <?php if($semester == '1'){echo("selected");}?>>1</option>
                                                     <option <?php if($semester == '2'){echo("selected");}?>>2</option>
                                                     <option <?php if($semester == '3'){echo("selected");}?>>3</option>
                                                     <option <?php if($semester == '4'){echo("selected");}?>>4</option>
                                                     <option <?php if($semester == '5'){echo("selected");}?>>5</option>
                                                     <option <?php if($semester == '6'){echo("selected");}?>>6</option>
                                                     <option <?php if($semester == '7'){echo("selected");}?>>7</option>
                                                     <option <?php if($semester == '8'){echo("selected");}?>>8</option>
                                                     
                                                     
                                            </select>
                                        </div>
                                        <br>
                                        
					<span style="font-size:20px;">Phone Number</span>
                                        <br>
		                       <div class="wrap-input100 validate-input">
						<input class="input100" type="text" name="sphone_number" value="<?php 
                                               $con=mysqli_connect("localhost","root","Panda@19","project");

 if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  } 
  $sql3="SELECT `phone number` FROM `studentinfo` WHERE `student number`='".$_SESSION['username']."';"; 
 
  if ($result=mysqli_query($con,$sql3))
  {
  // Fetch one and one row
  while ($row=mysqli_fetch_row($result))
    {
   echo $row[0];
   echo "// ";
   
    }
  // Free result set
  mysqli_free_result($result);
}
if(!$result){
    echo "Empty";
}
mysqli_close($con);
                                                
                                                
                                                ?>">
						<span class="focus-input100"></span>
						<span class="label-input100"></span>
					</div>
                                        <br>
                                        
                                        <span style="font-size:20px;">Email-ID</span>
                                        <br>
                                        <div class="wrap-input100 validate-input">
						<input class="input100" type="text" name="semail_id" value="<?php 
                                               $con=mysqli_connect("localhost","root","Panda@19","project");

 if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  } 
  $sql3="SELECT `email-id` FROM `studentinfo` WHERE `student number`='".$_SESSION['username']."';"; 
 
  if ($result=mysqli_query($con,$sql3))
  {
  // Fetch one and one row
  while ($row=mysqli_fetch_row($result))
    {
   echo $row[0];
   echo"// ";
   
    }
  // Free result set
  mysqli_free_result($result);
}
if(!$result){
    echo "Empty";
}
mysqli_close($con);
                                                
                                                
                                                ?>">>
						<span class="focus-input100"></span>
						<span class="label-input100"></span>
					</div>
                                        <br>
                                        
                                        <span style="font-size:20px;">Faculty Assigned</span>
                                        <br>
                                        <div class="wrap-input100 validate-input">
						<input class="input100" type="text" name="fa" value="<?php 
                                               $con=mysqli_connect("localhost","root","Panda@19","project");

 if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  } 
  $sql3="SELECT `faculty number` FROM `student` WHERE `student number`='".$_SESSION['username']."';"; 
 
  if ($result=mysqli_query($con,$sql3))
  {
  // Fetch one and one row
  while ($row=mysqli_fetch_row($result))
    {
   $fa=$row[0];
   //echo row[0];
    }
  // Free result set
  mysqli_free_result($result);
}
if(!$result){
    echo "Empty1";
}

$sql4= "SELECT `first name` FROM `faculty` WHERE `faculty number`='$fa';";
if ($result2=mysqli_query($con,$sql4))
  {
  // Fetch one and one row
  while ($row2=mysqli_fetch_row($result2))
    {
   echo $row2[0];
   echo " ";
    }
  // Free result set
  mysqli_free_result($result2);
}
if(!$result2){
    echo "Empty2";
}
$sql5= "SELECT `last name` FROM `faculty` WHERE `faculty number`='$fa';";
if ($result3=mysqli_query($con,$sql5))
  {
  // Fetch one and one row
  while ($row3=mysqli_fetch_row($result3))
    {
   echo $row3[0];
    }
  // Free result set
  mysqli_free_result($result3);
}
if(!$result3){
    echo "Empty2";
}
//echo $r." ".$r2;
mysqli_close($con);
                          
?>" readonly>
						<span class="focus-input100"></span>
						<span class="label-input100"></span>
					</div>
                                        <br>
                                        <div class="container-login100-form-btn">
						<button class="login100-form-btn" name="find" value="GO">
							Save
						</button>
                                        </div><br>
                                        
                                 </form>
                             

				<div class="login100-more" style="background-image: url('images/vesit.jpg');">
				</div>
                            
			</div>
		</div>
	</div>
	
	

	
	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>


