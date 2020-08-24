<?php
session_start();
$faculty_number=filter_input(INPUT_POST, 'faculty_number');
$day = filter_input(INPUT_POST, 'day');
$slot = filter_input(INPUT_POST, 'slot');
$hour = filter_input(INPUT_POST, 'hour');
$Room_Number = filter_input(INPUT_POST, 'Room Number');
$mentor=filter_input(INPUT_POST,'mentor');
$mentornumber='125001';

if($_SERVER['REQUEST_METHOD']=="POST" and isset($_POST['find']))
{
    func();
}
if($_SERVER['REQUEST_METHOD']=="POST" and isset($_POST['find2']))
{
    func2();
}

function func() {
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
  
if (isset($_SESSION['username'])) {

$faculty_number=filter_input(INPUT_POST, 'faculty_number');
$day = filter_input(INPUT_POST, 'day');
$slot = filter_input(INPUT_POST, 'slot');
$hour = filter_input(INPUT_POST, 'hour');
$Room_Number = filter_input(INPUT_POST, 'Room_Number');
$mentor=filter_input(INPUT_POST,'mentor');

$con=mysqli_connect("localhost","usernameMYSQL","PasswordMYSQL","project");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  
  if($mentor=="Mentor"){
  $sql1="SELECT `faculty number` FROM `studentfaculty` WHERE `student number`='".$_SESSION['username']."';";
  if ($result1=mysqli_query($con,$sql1))
  {
  // Fetch one and one row
  while ($row=mysqli_fetch_row($result1))
    {
   $mentornumber= $row[0];
  //echo $row[0];
    }
  // Free result set
  mysqli_free_result($result1);
}
 
$sql2="SELECT `$hour` FROM `facultytimetable` WHERE `faculty number`='$mentornumber' AND `slot`='$slot' AND `day`='$day'";

if ($result2=mysqli_query($con,$sql2))
  {
  // Fetch one and one row
  while ($row2=mysqli_fetch_row($result2))
    {
    ?>

   <script type="text/javascript">
    alert("Room Number:<?php echo $row2[0]?>");
   </script>
  <?php
   
    }
  // Free result set
  mysqli_free_result($result2);
}
if(!$result2){
     ?>

   <script type="text/javascript">
    alert("Invalid Entry!!");
   </script>
  <?php
}

  }
 
 if($mentor=="Faculty")
  {
 $sql3="SELECT `$hour` FROM `facultytimetable` WHERE `faculty number`='$faculty_number' AND `slot`='$slot' AND `day`='$day'";

if ($result3=mysqli_query($con,$sql3))
  {
  // Fetch one and one row
  while ($row=mysqli_fetch_row($result3))
    {
  ?>

   <script type="text/javascript">
    alert("Room Number:<?php echo $row[0]?>");
   </script>
  <?php
   
    }
  // Free result set
  mysqli_free_result($result3);
}
if(!$result3){
    ?>

   <script type="text/javascript">
    alert("Invalid Entry!!");
   </script>
  <?php
}
 
 }



} 
}
function func2()
{
 
$faculty_number=filter_input(INPUT_POST, 'faculty_number2');
$day=date("l");
echo $day;
date_default_timezone_set("Asia/Kolkata");
$timeh= date("H");
$timemin= date("i");
$slot=filter_input(INPUT_POST, 'slot2');
$time=$timeh.$timemin;
$realtime=(int)$time;
//echo $timeh;
//echo $timemin;
echo $realtime;

if($slot=="1"){
switch($realtime)
{
case ($realtime>=810&& $realtime<910) : $hour="first hour";
        break;
    case ($realtime>=910 && $realtime<1010) : $hour="second hour";
        break;
case ($realtime>=1010 && $realtime<1025) : $hour=" first break";
       break;
    case ($realtime>=1025 && $realtime<1125) : $hour="third hour";
        break;
    case ($realtime>=1125 && $realtime<1225) : $hour="fourth hour";
        break;
    case ($realtime>=1225 && $realtime<1245) : $hour="second break";
        break;
    case ($realtime>=1245 && $realtime<1345) : $hour="fifth hour";
        break;
    case ($realtime>=1345 && $realtime<1445) : $hour="sixth hour";
        break;
    case ($realtime<810 || $realtime>1445) : $hour="None";
        break;

}
}
else{
   switch($realtime){
    
   
    case ($realtime>=1010 && $realtime<1110) : $hour="first hour";
        break;
    case ($realtime>=1110 && $realtime<1210) : $hour="second hour";
        break;
    case ($realtime>=1210 && $realtime<1225) : $hour=" first break";
       break;
    case ($realtime>=1225 && $realtime<1325) : $hour="third hour";
        break;
    case ($realtime>=1325 && $realtime<1425) : $hour="fourth hour";
        break;
    case ($realtime>=1425 && $realtime<1445) : $hour="second break";
        break;
    case ($realtime>=1445 && $realtime<1545) : $hour="fifth hour";
        break;
    case ($realtime>=1545 && $realtime<1645) : $hour="sixth hour";
        break;
    case ($realtime<1010 || $realtime>1645) : $hour="None";
        break;
} 
}
echo $hour;
switch($hour){
   case "None": 
       //echo "yes";
   
           $con=mysqli_connect("localhost","usernameMYSQL","PasswordMYSQL","project");
// Check connection
        if (mysqli_connect_errno())
          {
          echo "Failed to connect to MySQL: " . mysqli_connect_error();
          }
          
          $sql1="SELECT `room number` FROM `faculty` WHERE `faculty number`='$faculty_number';";
          
          if ($result1=mysqli_query($con,$sql1))
          {
          // Fetch one and one row
              echo "yes2";
          while ($row1=mysqli_fetch_row($result1))
                 
    {
               echo $row1[0];
    ?>

   <script type="text/javascript">
    alert("Faculty sits in Room Number:<?php echo $row1[0]?>");
   </script>
  <?php
   
    }
          // Free result set
          mysqli_free_result($result1);
               }
              else{
     ?>

   <script type="text/javascript">
    alert("Invalid Entry!!");
   </script>
  <?php
}
break;
case "first break" : 
    $con=mysqli_connect("localhost","usernameMYSQL","PasswordMYSQL","project");
// Check connection
        if (mysqli_connect_errno())
          {
          echo "Failed to connect to MySQL: " . mysqli_connect_error();
          }
          
          $sql1="SELECT `room number` FROM `faculty` WHERE `faculty number`='$faculty_number';";
          
          if ($result1=mysqli_query($con,$sql1))
          {
          // Fetch one and one row
              echo "yes2";
          while ($row1=mysqli_fetch_row($result1))
                 
    {
               echo $row1[0];
    ?>

   <script type="text/javascript">
    alert("(First Break) faculty sits in Room Number:<?php echo $row1[0]?>");
   </script>
  <?php
   
    }
          // Free result set
          mysqli_free_result($result1);
               }
              else{
     ?>

   <script type="text/javascript">
    alert("Invalid Entry!!");
   </script>
  <?php
}
break;
   case "second break":$con=mysqli_connect("localhost","usernameMYSQL","PasswordMYSQL","project");
// Check connection
        if (mysqli_connect_errno())
          {
          echo "Failed to connect to MySQL: " . mysqli_connect_error();
          }
          
          $sql1="SELECT `room number` FROM `faculty` WHERE `faculty number`='$faculty_number';";
          
          if ($result1=mysqli_query($con,$sql1))
          {
          // Fetch one and one row
              echo "yes2";
          while ($row1=mysqli_fetch_row($result1))
                 
    {
               echo $row1[0];
    ?>

   <script type="text/javascript">
    alert("(Second Break) faculty sits in Room Number:<?php echo $row1[0]?>");
   </script>
  <?php
   
    }
          // Free result set
          mysqli_free_result($result1);
               }
              else{
     ?>

   <script type="text/javascript">
    alert("Invalid Entry!!");
   </script>
  <?php
}
break;
   default :$con=mysqli_connect("localhost","usernameMYSQL","PasswordMYSQL","project");
// Check connection
        if (mysqli_connect_errno())
          {
          echo "Failed to connect to MySQL: " . mysqli_connect_error();
          }
          
          $sql1="SELECT `$hour` FROM `facultytimetable` WHERE `faculty number`='$faculty_number' AND `day`='$day' AND `slot`='$slot';";
          
          if ($result1=mysqli_query($con,$sql1))
          {
          // Fetch one and one row
              //echo "yes2";
          while ($row1=mysqli_fetch_row($result1))
                 
    {
               echo $row1[0];
    ?>

   <script type="text/javascript">
    alert("faculty is in Room Number:<?php echo $row1[0]?>");
   </script>
  <?php
   
    }
          // Free result set
          mysqli_free_result($result1);
               }
              else{
     ?>

   <script type="text/javascript">
    alert("Invalid Entry!!");
   </script>
  <?php
}
break;
       
       

  }
   
 
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Find My Professor</title>
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
.button1 {
  background-color: white;
  width: 210px;
  border-radius: 8px;
  padding: 14px 40px;
  color: black;
  border: 2px solid #B891F7; /* Green */
   box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
}
.button1 {
  -webkit-transition-duration: 0.4s; /* Safari */
  transition-duration: 0.4s;
}

.button1:hover {
  background-color: #B891F7; /* Green */
  color: white;
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
                            
                            <form class="login100-form validate-form" action="index.php" method="post">
                                <input type="button" value="Customize Search" onclick="demoShow()" id="but" class="button1" />

                                 <input type="button" value="Search Now" id="but1" onclick="demoShow2()" class="button1"/>
                                 <br><br>
                                    <div id="myDIV2">
					<span class="login100-form-title p-b-43" style="color: rgb(148,87,243)">
						Find My Professor
					</span>
                                        <div id="men">
                                        <span style="font-size:20px;">Search My</span>
                                        <br>
					
                                        <div class="selectWrapper">
                                            <select class="selectBox" type="text" name="mentor" id="men">
                                                     
                                                     <option>Mentor</option>
                                                     <option>Faculty</option>
                                            </select>
                                        </div>
                                        <br><br>
                                        </div>
                                        
                                        <div>
					<span style="font-size:20px;">Faculty Name</span>
                                        <br>
					
                                        <div class="selectWrapper" id="test">
                                            <select class="selectBox" type="text" id="fac" name="faculty_number" value="<?php echo $faculty_number; ?>">
                                                     
                                                    <option>Select Faculty</option>
<?php
$con=mysqli_connect("localhost","usernameMYSQL","PasswordMYSQL","project");
// Check connection
        if (mysqli_connect_errno())
          {
          echo "Failed to connect to MySQL: " . mysqli_connect_error();
          }
$sql = mysqli_query($con, "SELECT * From faculty");
$row = mysqli_num_rows($sql);
while ($row = mysqli_fetch_array($sql)){
echo "<option value='". $row['faculty number'] ."'>" .$row['first name']." ".$row['last name'] ."</option>" ;
}
?>
                                            </select>
                                        </div>
                                        </div>
                                        
                                        <br>
                                        
                                        
                                        
                                        <span style="font-size:20px;">Day</span>
                                        <br>
                                        <div class="selectWrapper">
                                        <select class="selectBox" type="text" name="day" value="<?php echo $day; ?>">
                                                     
                                                     <option <?php if($day == 'Monday'){echo("selected");} ?>>Monday</option>
                                                     <option <?php if($day == 'Tuesday'){echo("selected");} ?>>Tuesday</option>
                                                     <option <?php if($day == 'Wednesday'){echo("selected");} ?>>Wednesday</option>
                                                     <option <?php if($day == 'Thursday'){echo("selected");} ?>>Thursday</option>
                                                     <option <?php if($day == 'Friday'){echo("selected");} ?>>Friday</option>
                                                     <option <?php if($day == 'Saturday'){echo("selected");} ?>>Saturday</option>
                                            </select>
                                        </div>
                                        <br><br>
                                        <span style="font-size:20px;">Slot</span>
                                        <br>
                                        <div class="selectWrapper">
                                        <select class="selectBox" type="text" name="slot" value="<?php echo $slot; ?>">
                                                     
                                                     <option <?php if($slot == '1'){echo("selected");} ?>>1</option>
                                                     <option <?php if($slot == '2'){echo("selected");} ?>>2</option>
                                                     
                                            </select>
                                        </div>
                                        <br><br>
                                        
                                        
                                        
                                        
					
					<span style="font-size:20px;">Hour</span>
                                       
                                        <br>
                                        <div class="selectWrapper">
                                        <select class="selectBox" type="text" name="hour" value="<?php echo $hour; ?>">
                                                     
                                                     <option value="first hour"  <?php if($hour == 'first hour'){echo("selected");} ?>>First</option>
                                                     <option value="second hour" <?php if($day == 'second hour'){echo("selected");} ?>>Second</option>
                                                     <option value="third hour"  <?php if($day == 'third hour'){echo("selected");} ?>>Third</option>
                                                     <option value="fourth hour" <?php if($day == 'fourth hour'){echo("selected");} ?>>Fourth</option>
                                                     <option value="fifth hour" <?php if($day == 'Fifth hour'){echo("selected");} ?>>Fifth</option>
                                                     <option value="sixth hour" <?php if($day == 'Sixth hour'){echo("selected");} ?>>Sixth</option>
                                            </select>
                                        </div>
                                        <br><br>
                                    
					<div class="container-login100-form-btn">
						<button class="login100-form-btn" name="find">
							Find
						</button>
                                        </div><br><br>
                                       
</div> 
                                 <div id="myDIV">
        
        <span class="login100-form-title p-b-43" style="color: rgb(148,87,243)">
						Real Time Search
					</span>
                <span style="font-size:20px;" id="test">Faculty Name</span>
                                        <br>
					
                                        <div class="selectWrapper" id="test">
                                            <select class="selectBox" type="text" name="faculty_number2">
                                                     
                                                    <option>Select Faculty</option>
<?php
$con=mysqli_connect("localhost","usernameMYSQL","PasswordMYSQL","project");
// Check connection
        if (mysqli_connect_errno())
          {
          echo "Failed to connect to MySQL: " . mysqli_connect_error();
          }
$sql = mysqli_query($con, "SELECT * From faculty");
$row = mysqli_num_rows($sql);
while ($row = mysqli_fetch_array($sql)){
echo "<option value='". $row['faculty number'] ."'>" .$row['first name']." ".$row['last name'] ."</option>" ;
}
?>
                                            </select>
                                        </div><br><br>
            <span style="font-size:20px;">Slot</span>
                                        <br>
                                        <div class="selectWrapper">
                                        <select class="selectBox" type="text" name="slot2">
                                                     
                                                     <option <?php if($slot == '1'){echo("selected");} ?>>1</option>
                                                     <option <?php if($slot == '2'){echo("selected");} ?>>2</option>
                                                     
                                            </select>
                                        </div>
                                        <br><br>
            <div class="container-login100-form-btn">
						<button class="login100-form-btn" name="find2">
							Find
						</button>
                                        </div><br><br>
            
        
      
</div>
	
				
				</form>

				<div class="login100-more" style="background-image: url('images/vesit.jpg');">
				</div>
			</div>
		</div>
	</div>
    
	
	<script>
            document.getElementById("myDIV").style.display="none";
            document.getElementById("but").disabled = true;
function demoShow() {   
document.getElementById("myDIV").style.display="none";
document.getElementById("myDIV2").style.display="block";
document.getElementById("but").disabled = true;
document.getElementById("but1").disabled = false;
}
function demoShow2() {   
document.getElementById("myDIV").style.display="block";
document.getElementById("myDIV2").style.display="none";
document.getElementById("but1").disabled = true;
document.getElementById("but").disabled = false;
}
function demoShow3() {   
document.getElementById("fac").style.display="none";

}
function demoShow4() {   
document.getElementById("fac").style.display="block";

}

</script>
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
