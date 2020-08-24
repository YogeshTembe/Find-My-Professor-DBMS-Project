
<?php
session_start();
$slot=filter_input(INPUT_POST, 'slot');
//$day2=filter_input(INPUT_POST, 'day2');
$first_hour=filter_input(INPUT_POST, 'first_hour');
$second_hour=filter_input(INPUT_POST, 'second_hour');
$third_hour=filter_input(INPUT_POST, 'third_hour');
$fourth_hour=filter_input(INPUT_POST, 'fourth_hour');
$fifth_hour=filter_input(INPUT_POST, 'fifth_hour');
$sixth_hour=filter_input(INPUT_POST, 'sixth_hour');

if($_SERVER['REQUEST_METHOD']=="POST" and isset($_POST['findmon']))
{
    func();
}
function func() {
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
  
if (isset($_SESSION['username'])) {
   
//echo $_SESSION['username']; 
$username=$_SESSION['username'];
$slotmon=filter_input(INPUT_POST, 'slotmon');
//$day2=filter_input(INPUT_POST, 'day2');
$first_hourmon=filter_input(INPUT_POST, 'first_hourmon');
$second_hourmon=filter_input(INPUT_POST, 'second_hourmon');
$third_hourmon=filter_input(INPUT_POST, 'third_hourmon');
$fourth_hourmon=filter_input(INPUT_POST, 'fourth_hourmon');
$fifth_hourmon=filter_input(INPUT_POST, 'fifth_hourmon');
$sixth_hourmon=filter_input(INPUT_POST, 'sixth_hourmon');

$con=mysqli_connect("localhost","usernameMYSQL","PasswordMYSQL","project");

if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  
  
//echo $_SESSION['username'];
$sqlmon="UPDATE `facultytimetable` SET `slot`='$slotmon',`first hour`='$first_hourmon',`second hour`='$second_hourmon',`third hour`='$third_hourmon',`fourth hour`='$fourth_hourmon',`fifth hour`='$fifth_hourmon',`sixth hour`='$sixth_hourmon' WHERE `day`='Monday' AND `faculty number`='".$_SESSION['username']."';";

$querymon=mysqli_query($con,$sqlmon);

if($querymon)
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
mysqli_close($con);
}
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
if($_SERVER['REQUEST_METHOD']=="POST" and isset($_POST['findtue']))
{
    functue();
}
function functue() {
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
  
if (isset($_SESSION['username'])) {
   
//echo $_SESSION['username']; 
$username=$_SESSION['username'];
$slottue=filter_input(INPUT_POST, 'slottue');
//$day2=filter_input(INPUT_POST, 'day2');
$first_hourtue=filter_input(INPUT_POST, 'first_hourtue');
$second_hourtue=filter_input(INPUT_POST, 'second_hourtue');
$third_hourtue=filter_input(INPUT_POST, 'third_hourtue');
$fourth_hourtue=filter_input(INPUT_POST, 'fourth_hourtue');
$fifth_hourtue=filter_input(INPUT_POST, 'fifth_hourtue');
$sixth_hourtue=filter_input(INPUT_POST, 'sixth_hourtue');

$con=mysqli_connect("localhost","usernameMYSQL","PasswordMYSQL","project");

if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  
  
//echo $_SESSION['username'];
$sqltue="UPDATE `facultytimetable` SET `slot`='$slottue',`first hour`='$first_hourtue',`second hour`='$second_hourtue',`third hour`='$third_hourtue',`fourth hour`='$fourth_hourtue',`fifth hour`='$fifth_hourtue',`sixth hour`='$sixth_hourtue' WHERE `day`='Tuesday' AND `faculty number`='".$_SESSION['username']."';";

$querytue=mysqli_query($con,$sqltue);

if($querytue)
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
//session_destroy();
mysqli_close($con);
}
//////////////////////////////////////////////////////////////////////////////////////////////////////////////
if($_SERVER['REQUEST_METHOD']=="POST" and isset($_POST['findwed']))
{
    funcwed();
}
function funcwed() {
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
  
if (isset($_SESSION['username'])) {
   
//echo $_SESSION['username']; 
$username=$_SESSION['username'];
$slotwed=filter_input(INPUT_POST, 'slotwed');
//$day2=filter_input(INPUT_POST, 'day2');
$first_hourwed=filter_input(INPUT_POST, 'first_hourwed');
$second_hourwed=filter_input(INPUT_POST, 'second_hourwed');
$third_hourwed=filter_input(INPUT_POST, 'third_hourwed');
$fourth_hourwed=filter_input(INPUT_POST, 'fourth_hourwed');
$fifth_hourwed=filter_input(INPUT_POST, 'fifth_hourwed');
$sixth_hourwed=filter_input(INPUT_POST, 'sixth_hourwed');

$con=mysqli_connect("localhost","usernameMYSQL","PasswordMYSQL","project");

if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  
  
//echo $_SESSION['username'];
$sqlwed="UPDATE `facultytimetable` SET `slot`='$slotwed',`first hour`='$first_hourwed',`second hour`='$second_hourwed',`third hour`='$third_hourwed',`fourth hour`='$fourth_hourwed',`fifth hour`='$fifth_hourwed',`sixth hour`='$sixth_hourwed' WHERE `day`='Wednesday' AND `faculty number`='".$_SESSION['username']."';";

$querywed=mysqli_query($con,$sqlwed);

if($querywed)
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
//session_destroy();
mysqli_close($con);
}
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
if($_SERVER['REQUEST_METHOD']=="POST" and isset($_POST['findthu']))
{
    functhu();
}
function functhu() {
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
  
if (isset($_SESSION['username'])) {
   
//echo $_SESSION['username']; 
$username=$_SESSION['username'];
$slotthu=filter_input(INPUT_POST, 'slotthu');
//$day2=filter_input(INPUT_POST, 'day2');
$first_hourthu=filter_input(INPUT_POST, 'first_hourthu');
$second_hourthu=filter_input(INPUT_POST, 'second_hourthu');
$third_hourthu=filter_input(INPUT_POST, 'third_hourthu');
$fourth_hourthu=filter_input(INPUT_POST, 'fourth_hourthu');
$fifth_hourthu=filter_input(INPUT_POST, 'fifth_hourthu');
$sixth_hourthu=filter_input(INPUT_POST, 'sixth_hourthu');

$con=mysqli_connect("localhost","usernameMYSQL","PasswordMYSQL","project");

if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  
  
//echo $_SESSION['username'];
$sqlthu="UPDATE `facultytimetable` SET `slot`='$slotthu',`first hour`='$first_hourthu',`second hour`='$second_hourthu',`third hour`='$third_hourthu',`fourth hour`='$fourth_hourthu',`fifth hour`='$fifth_hourthu',`sixth hour`='$sixth_hourthu' WHERE `day`='Thursday' AND `faculty number`='".$_SESSION['username']."';";

$querythu=mysqli_query($con,$sqlthu);

if($querythu)
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
//session_destroy();
mysqli_close($con);
}
////////////////////////////////////////////////////////////////////////////////////////////////////////////////
if($_SERVER['REQUEST_METHOD']=="POST" and isset($_POST['findfri']))
{
    funcfri();
}
function funcfri() {
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
  
if (isset($_SESSION['username'])) {
   
//echo $_SESSION['username']; 
$username=$_SESSION['username'];
$slotfri=filter_input(INPUT_POST, 'slot');
//$day2=filter_input(INPUT_POST, 'day2');
$first_hourfri=filter_input(INPUT_POST, 'first_hourfri');
$second_hourfri=filter_input(INPUT_POST, 'second_hourfri');
$third_hourfri=filter_input(INPUT_POST, 'third_hourfri');
$fourth_hourfri=filter_input(INPUT_POST, 'fourth_hourfri');
$fifth_hourfri=filter_input(INPUT_POST, 'fifth_hourfri');
$sixth_hourfri=filter_input(INPUT_POST, 'sixth_hourfri');

$con=mysqli_connect("localhost","usernameMYSQL","PasswordMYSQL","project");

if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  
  
//echo $_SESSION['username'];
$sqlfri="UPDATE `facultytimetable` SET `slot`='$slotfri',`first hour`='$first_hourfri',`second hour`='$second_hourfri',`third hour`='$third_hourfri',`fourth hour`='$fourth_hourfri',`fifth hour`='$fifth_hourfri',`sixth hour`='$sixth_hourfri' WHERE `day`='Friday' AND `faculty number`='".$_SESSION['username']."';";

$queryfri=mysqli_query($con,$sqlfri);

if($queryfri)
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
//session_destroy();
mysqli_close($con);
}
if($_SERVER['REQUEST_METHOD']=="POST" and isset($_POST['findsat']))
{
    funcsat();
}
function funcsat() {
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
  
if (isset($_SESSION['username'])) {
   
//echo $_SESSION['username']; 
$username=$_SESSION['username'];
$slotsat=filter_input(INPUT_POST, 'slotsat');
//$day2=filter_input(INPUT_POST, 'day2');
$first_hoursat=filter_input(INPUT_POST, 'first_hoursat');
$second_hoursat=filter_input(INPUT_POST, 'second_hoursat');
$third_hoursat=filter_input(INPUT_POST, 'third_hoursat');
$fourth_hoursat=filter_input(INPUT_POST, 'fourth_hoursat');
$fifth_hoursat=filter_input(INPUT_POST, 'fifth_hoursat');
$sixth_hoursat=filter_input(INPUT_POST, 'sixth_hoursat');

$con=mysqli_connect("localhost","usernameMYSQL","PasswordMYSQL","project");

if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  
  
//echo $_SESSION['username'];
$sqlsat="UPDATE `facultytimetable` SET `slot`='$slotsat',`first hour`='$first_hoursat',`second hour`='$second_hoursat',`third hour`='$third_hoursat',`fourth hour`='$fourth_hoursat',`fifth hour`='$fifth_hoursat',`sixth hour`='$sixth_hoursat' WHERE `day`='Saturday' AND `faculty number`='".$_SESSION['username']."';";

$querysat=mysqli_query($con,$sqlsat);

if($querysat)
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
session_destroy();
mysqli_close($con);
}


?>


<html>
    <head>
        <title>Faculty Timetable</title>
        <link rel="icon" type="image/png" href="images/vesitlogo2"/>
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
  color: black; 
  border: 2px solid #B891F7;
  border-radius: 12px;
}

        </style>  
    </head>
    <body>
        <nav class="menu">
  <ol>
    <li class="menu-item"><a href="facultypage.php">Faculty Info</a></li>
    <li class="menu-item"><a href="factultytime.php">Faculty Timetable</a></li>
    <li class="menu-item"><a href="index2.php">Logout</a></li>
    
  </ol>
</nav>
        
        
        <h1>Timetable</h1>
        <form method="post" action="factultytime.php">
        <table>
            <tr>
                <th>Day</th>
                <th>Slot</th>
                <th>First Hour</th>
                <th>Second Hour</th>
                <th>Third Hour</th>
                <th>Fourth Hour</th>
                <th>Fifth Hour</th>
                <th>Sixth Hour</th>
                <th>Save</th>
            </tr>
            <!Monday///////////////////////////////////////////////////////////////////////////////////////////////>
            <tr>
                <td id="day2">Monday</td>
                                  
                <td><input type="text" placeholder="" name="slotmon" style="width:50px;" value="<?php
                
                $con=mysqli_connect("localhost","usernameMYSQL","PasswordMYSQL","project");

 if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  } 
  $sql3="SELECT `slot` FROM `facultytimetable` WHERE `faculty number`='".$_SESSION['username']."' AND day='Monday';"; 
 
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
            ?>"></td>
                
                <td><input type="text" placeholder="" name="first_hourmon" style="width:50px;" value="<?php
                
                $con=mysqli_connect("localhost","usernameMYSQL","PasswordMYSQL","project");

 if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  } 
  $sql3="SELECT `first hour` FROM `facultytimetable` WHERE `faculty number`='".$_SESSION['username']."' AND `day`='Monday';"; 
 
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
            ?>"></td>
                <td><input type="text" placeholder="" name="second_hourmon" style="width:50px;"  value="<?php
                
                $con=mysqli_connect("localhost","usernameMYSQL","PasswordMYSQL","project");

 if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  } 
  $sql3="SELECT `second hour` FROM `facultytimetable` WHERE `faculty number`='".$_SESSION['username']."' AND `day`='Monday';"; 
 
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
            ?>"></td>
                <td><input type="text" placeholder="" name="third_hourmon" style="width:50px;"  value="<?php
                
                $con=mysqli_connect("localhost","usernameMYSQL","PasswordMYSQL","project");

 if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  } 
  $sql3="SELECT `third hour` FROM `facultytimetable` WHERE `faculty number`='".$_SESSION['username']."' AND `day`='Monday';"; 
 
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
            ?>"></td>
                <td><input type="text" placeholder="" name="fourth_hourmon" style="width:50px;" value="<?php
                
                $con=mysqli_connect("localhost","usernameMYSQL","PasswordMYSQL","project");

 if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  } 
  $sql3="SELECT `fourth hour` FROM `facultytimetable` WHERE `faculty number`='".$_SESSION['username']."' AND `day`='Monday';"; 
 
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
            ?>"></td>
                <td><input type="text" placeholder="" name="fifth_hourmon" style="width:50px;"  value="<?php
                
                $con=mysqli_connect("localhost","usernameMYSQL","PasswordMYSQL","project");

 if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  } 
  $sql3="SELECT `fifth hour` FROM `facultytimetable` WHERE `faculty number`='".$_SESSION['username']."' AND `day`='Monday';"; 
 
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
            ?>"></td>
                <td><input type="text" placeholder="" name="sixth_hourmon" style="width:50px;" value="<?php
                
                $con=mysqli_connect("localhost","usernameMYSQL","PasswordMYSQL","project");

 if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  } 
  $sql3="SELECT `sixth hour` FROM `facultytimetable` WHERE `faculty number`='".$_SESSION['username']."' AND `day`='Monday';"; 
 
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
            ?>"></td>
                <td>
                    <div class="container-login100-form-btn">
						<button class="button1" name="findmon" value="GO">
							Save
						</button>
                                        </div>
                </td>
                
            </tr>
     <!Tuesday/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////>
             <tr>
                <td>Tuesday</td>
                                  
                <td><input type="text" placeholder="" name="slottue" style="width:50px;" value="<?php
                
                $con=mysqli_connect("localhost","usernameMYSQL","PasswordMYSQL","project");

 if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  } 
  $sql3="SELECT `slot` FROM `facultytimetable` WHERE `faculty number`='".$_SESSION['username']."' AND day='Tuesday';"; 
 
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
            ?>"></td>
                
                <td><input type="text" placeholder="" name="first_hourtue" style="width:50px;" value="<?php
                
                $con=mysqli_connect("localhost","usernameMYSQL","PasswordMYSQL","project");

 if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  } 
  $sql3="SELECT `first hour` FROM `facultytimetable` WHERE `faculty number`='".$_SESSION['username']."' AND `day`='Tuesday';"; 
 
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
            ?>"></td>
                <td><input type="text" placeholder="" name="second_hourtue" style="width:50px;"  value="<?php
                
                $con=mysqli_connect("localhost","usernameMYSQL","PasswordMYSQL","project");

 if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  } 
  $sql3="SELECT `second hour` FROM `facultytimetable` WHERE `faculty number`='".$_SESSION['username']."' AND `day`='Tuesday';"; 
 
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
            ?>"></td>
                <td><input type="text" placeholder="" name="third_hourtue" style="width:50px;"  value="<?php
                
                $con=mysqli_connect("localhost","usernameMYSQL","PasswordMYSQL","project");

 if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  } 
  $sql3="SELECT `third hour` FROM `facultytimetable` WHERE `faculty number`='".$_SESSION['username']."' AND `day`='Tuesday';"; 
 
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
            ?>"></td>
                <td><input type="text" placeholder="" name="fourth_hourtue" style="width:50px;" value="<?php
                
                $con=mysqli_connect("localhost","usernameMYSQL","PasswordMYSQL","project");

 if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  } 
  $sql3="SELECT `fourth hour` FROM `facultytimetable` WHERE `faculty number`='".$_SESSION['username']."' AND `day`='Tuesday';"; 
 
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
            ?>"></td>
                <td><input type="text" placeholder="" name="fifth_hourtue" style="width:50px;"  value="<?php
                
                $con=mysqli_connect("localhost","usernameMYSQL","PasswordMYSQL","project");

 if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  } 
  $sql3="SELECT `fifth hour` FROM `facultytimetable` WHERE `faculty number`='".$_SESSION['username']."' AND `day`='Tuesday';"; 
 
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
            ?>"></td>
                <td><input type="text" placeholder="" name="sixth_hourtue" style="width:50px;" value="<?php
                
                $con=mysqli_connect("localhost","usernameMYSQL","PasswordMYSQL","project");

 if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  } 
  $sql3="SELECT `sixth hour` FROM `facultytimetable` WHERE `faculty number`='".$_SESSION['username']."' AND `day`='Tuesday';"; 
 
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
            ?>"></td>
                <td>
                    <div class="container-login100-form-btn">
						<button class="button1" name="findtue" value="GO">
							Save
						</button>
                                        </div>
                </td>
                
            </tr>
          <!Wednesday  //////////////////////////////////////////////////////////////////////////////////////////////////////>
            <tr>
                <td>Wednesday</td>
                                  
                <td><input type="text" placeholder="" name="slotwed" style="width:50px;" value="<?php
                
                $con=mysqli_connect("localhost","usernameMYSQL","PasswordMYSQL","project");

 if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  } 
  $sql3="SELECT `slot` FROM `facultytimetable` WHERE `faculty number`='".$_SESSION['username']."' AND day='Wednesday';"; 
 
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
            ?>"></td>
                
                <td><input type="text" placeholder="" name="first_hourwed" style="width:50px;" value="<?php
                
                $con=mysqli_connect("localhost","usernameMYSQL","PasswordMYSQL","project");

 if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  } 
  $sql3="SELECT `first hour` FROM `facultytimetable` WHERE `faculty number`='".$_SESSION['username']."' AND `day`='Wednesday';"; 
 
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
            ?>"></td>
                <td><input type="text" placeholder="" name="second_hourwed" style="width:50px;"  value="<?php
                
                $con=mysqli_connect("localhost","usernameMYSQL","PasswordMYSQL","project");

 if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  } 
  $sql3="SELECT `second hour` FROM `facultytimetable` WHERE `faculty number`='".$_SESSION['username']."' AND `day`='Wednesday';"; 
 
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
            ?>"></td>
                <td><input type="text" placeholder="" name="third_hourwed" style="width:50px;"  value="<?php
                
                $con=mysqli_connect("localhost","usernameMYSQL","PasswordMYSQL","project");

 if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  } 
  $sql3="SELECT `third hour` FROM `facultytimetable` WHERE `faculty number`='".$_SESSION['username']."' AND `day`='Wednesday';"; 
 
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
            ?>"></td>
                <td><input type="text" placeholder="" name="fourth_hourwed" style="width:50px;" value="<?php
                
                $con=mysqli_connect("localhost","usernameMYSQL","PasswordMYSQL","project");

 if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  } 
  $sql3="SELECT `fourth hour` FROM `facultytimetable` WHERE `faculty number`='".$_SESSION['username']."' AND `day`='Wednesday';"; 
 
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
            ?>"></td>
                <td><input type="text" placeholder="" name="fifth_hourwed" style="width:50px;"  value="<?php
                
                $con=mysqli_connect("localhost","usernameMYSQL","PasswordMYSQL","project");

 if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  } 
  $sql3="SELECT `fifth hour` FROM `facultytimetable` WHERE `faculty number`='".$_SESSION['username']."' AND `day`='Wednesday';"; 
 
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
            ?>"></td>
                <td><input type="text" placeholder="" name="sixth_hourwed" style="width:50px;" value="<?php
                
                $con=mysqli_connect("localhost","usernameMYSQL","PasswordMYSQL","project");

 if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  } 
  $sql3="SELECT `sixth hour` FROM `facultytimetable` WHERE `faculty number`='".$_SESSION['username']."' AND `day`='Wednesday';"; 
 
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
            ?>"></td>
                <td>
                    <div class="container-login100-form-btn">
						<button class="button1" name="findwed" value="GO">
							Save
						</button>
                                        </div>
                </td>
                
            </tr>
   <!Thursday///////////////////////////////////////////////////////////////////////////////////////////////////////////////////>
   <tr>
                <td>Thursday</td>
                                  
                <td><input type="text" placeholder="" name="slotthu" style="width:50px;" value="<?php
                
                $con=mysqli_connect("localhost","usernameMYSQL","PasswordMYSQL","project");

 if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  } 
  $sql3="SELECT `slot` FROM `facultytimetable` WHERE `faculty number`='".$_SESSION['username']."' AND day='Thursday';"; 
 
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
            ?>"></td>
                
                <td><input type="text" placeholder="" name="first_hourthu" style="width:50px;" value="<?php
                
                $con=mysqli_connect("localhost","usernameMYSQL","PasswordMYSQL","project");

 if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  } 
  $sql3="SELECT `first hour` FROM `facultytimetable` WHERE `faculty number`='".$_SESSION['username']."' AND `day`='Thursday';"; 
 
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
            ?>"></td>
                <td><input type="text" placeholder="" name="second_hourthu" style="width:50px;"  value="<?php
                
                $con=mysqli_connect("localhost","usernameMYSQL","PasswordMYSQL","project");

 if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  } 
  $sql3="SELECT `second hour` FROM `facultytimetable` WHERE `faculty number`='".$_SESSION['username']."' AND `day`='Thursday';"; 
 
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
            ?>"></td>
                <td><input type="text" placeholder="" name="third_hourthu" style="width:50px;"  value="<?php
                
                $con=mysqli_connect("localhost","usernameMYSQL","PasswordMYSQL","project");

 if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  } 
  $sql3="SELECT `third hour` FROM `facultytimetable` WHERE `faculty number`='".$_SESSION['username']."' AND `day`='Thursday';"; 
 
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
            ?>"></td>
                <td><input type="text" placeholder="" name="fourth_hourthu" style="width:50px;" value="<?php
                
                $con=mysqli_connect("localhost","usernameMYSQL","PasswordMYSQL","project");

 if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  } 
  $sql3="SELECT `fourth hour` FROM `facultytimetable` WHERE `faculty number`='".$_SESSION['username']."' AND `day`='Thursday';"; 
 
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
            ?>"></td>
                <td><input type="text" placeholder="" name="fifth_hourthu" style="width:50px;"  value="<?php
                
                $con=mysqli_connect("localhost","usernameMYSQL","PasswordMYSQL","project");

 if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  } 
  $sql3="SELECT `fifth hour` FROM `facultytimetable` WHERE `faculty number`='".$_SESSION['username']."' AND `day`='Thursday';"; 
 
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
            ?>"></td>
                <td><input type="text" placeholder="" name="sixth_hourthu" style="width:50px;" value="<?php
                
                $con=mysqli_connect("localhost","usernameMYSQL","PasswordMYSQL","project");

 if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  } 
  $sql3="SELECT `sixth hour` FROM `facultytimetable` WHERE `faculty number`='".$_SESSION['username']."' AND `day`='Thursday';"; 
 
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
            ?>"></td>
                <td>
                    <div class="container-login100-form-btn">
						<button class="button1" name="findthu" value="GO">
							Save
						</button>
                                        </div>
                </td>
                
            </tr>
           <!Friday //////////////////////////////////////////////////////////////////////////////////////////////////////////>
            <tr>
                <td>Friday</td>
                                  
                <td><input type="text" placeholder="" name="slotfri" style="width:50px;" value="<?php
                
                $con=mysqli_connect("localhost","usernameMYSQL","PasswordMYSQL","project");

 if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  } 
  $sql3="SELECT `slot` FROM `facultytimetable` WHERE `faculty number`='".$_SESSION['username']."' AND day='Friday';"; 
 
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
            ?>"></td>
                
                <td><input type="text" placeholder="" name="first_hourfri" style="width:50px;" value="<?php
                
                $con=mysqli_connect("localhost","usernameMYSQL","PasswordMYSQL","project");

 if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  } 
  $sql3="SELECT `first hour` FROM `facultytimetable` WHERE `faculty number`='".$_SESSION['username']."' AND `day`='Friday';"; 
 
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
            ?>"></td>
                <td><input type="text" placeholder="" name="second_hourfri" style="width:50px;"  value="<?php
                
                $con=mysqli_connect("localhost","usernameMYSQL","PasswordMYSQL","project");

 if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  } 
  $sql3="SELECT `second hour` FROM `facultytimetable` WHERE `faculty number`='".$_SESSION['username']."' AND `day`='Friday';"; 
 
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
            ?>"></td>
                <td><input type="text" placeholder="" name="third_hourfri" style="width:50px;"  value="<?php
                
                $con=mysqli_connect("localhost","usernameMYSQL","PasswordMYSQL","project");

 if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  } 
  $sql3="SELECT `third hour` FROM `facultytimetable` WHERE `faculty number`='".$_SESSION['username']."' AND `day`='Friday';"; 
 
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
            ?>"></td>
                <td><input type="text" placeholder="" name="fourth_hourfri" style="width:50px;" value="<?php
                
                $con=mysqli_connect("localhost","usernameMYSQL","PasswordMYSQL","project");

 if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  } 
  $sql3="SELECT `fourth hour` FROM `facultytimetable` WHERE `faculty number`='".$_SESSION['username']."' AND `day`='Friday';"; 
 
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
            ?>"></td>
                <td><input type="text" placeholder="" name="fifth_hourfri" style="width:50px;"  value="<?php
                
                $con=mysqli_connect("localhost","usernameMYSQL","PasswordMYSQL","project");

 if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  } 
  $sql3="SELECT `fifth hour` FROM `facultytimetable` WHERE `faculty number`='".$_SESSION['username']."' AND `day`='Friday';"; 
 
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
            ?>"></td>
                <td><input type="text" placeholder="" name="sixth_hourfri" style="width:50px;" value="<?php
                
                $con=mysqli_connect("localhost","usernameMYSQL","PasswordMYSQL","project");

 if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  } 
  $sql3="SELECT `sixth hour` FROM `facultytimetable` WHERE `faculty number`='".$_SESSION['username']."' AND `day`='Friday';"; 
 
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
            ?>"></td>
                <td>
                    <div class="container-login100-form-btn">
						<button class="button1" name="findfri" value="GO">
							Save
						</button>
                                        </div>
                </td>
                
            </tr>
            <!saturday////////////////////////////////////////////////////////////////////////////////////////////////>
            <tr>
                <td>Saturday</td>
                                  
                <td><input type="text" placeholder="" name="slotsat" style="width:50px;" value="<?php
                
                $con=mysqli_connect("localhost","usernameMYSQL","PasswordMYSQL","project");

 if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  } 
  $sql3="SELECT `slot` FROM `facultytimetable` WHERE `faculty number`='".$_SESSION['username']."' AND day='Saturday';"; 
 
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
            ?>"></td>
                
                <td><input type="text" placeholder="" name="first_hoursat" style="width:50px;" value="<?php
                
                $con=mysqli_connect("localhost","usernameMYSQL","PasswordMYSQL","project");

 if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  } 
  $sql3="SELECT `first hour` FROM `facultytimetable` WHERE `faculty number`='".$_SESSION['username']."' AND `day`='Saturday';"; 
 
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
            ?>"></td>
                <td><input type="text" placeholder="" name="second_hoursat" style="width:50px;"  value="<?php
                
                $con=mysqli_connect("localhost","usernameMYSQL","PasswordMYSQL","project");

 if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  } 
  $sql3="SELECT `second hour` FROM `facultytimetable` WHERE `faculty number`='".$_SESSION['username']."' AND `day`='Saturday';"; 
 
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
            ?>"></td>
                <td><input type="text" placeholder="" name="third_hoursat" style="width:50px;"  value="<?php
                
                $con=mysqli_connect("localhost","usernameMYSQL","PasswordMYSQL","project");

 if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  } 
  $sql3="SELECT `third hour` FROM `facultytimetable` WHERE `faculty number`='".$_SESSION['username']."' AND `day`='Saturday';"; 
 
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
            ?>"></td>
                <td><input type="text" placeholder="" name="fourth_hoursat" style="width:50px;" value="<?php
                
                $con=mysqli_connect("localhost","usernameMYSQL","PasswordMYSQL","project");

 if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  } 
  $sql3="SELECT `fourth hour` FROM `facultytimetable` WHERE `faculty number`='".$_SESSION['username']."' AND `day`='Saturday';"; 
 
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
            ?>"></td>
                <td><input type="text" placeholder="" name="fifth_hoursat" style="width:50px;"  value="<?php
                
                $con=mysqli_connect("localhost","usernameMYSQL","PasswordMYSQL","project");

 if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  } 
  $sql3="SELECT `fifth hour` FROM `facultytimetable` WHERE `faculty number`='".$_SESSION['username']."' AND `day`='Saturday';"; 
 
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
            ?>"></td>
                <td><input type="text" placeholder="" name="sixth_hoursat" style="width:50px;" value="<?php
                
                $con=mysqli_connect("localhost","usernameMYSQL","PasswordMYSQL","project");

 if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  } 
  $sql3="SELECT `sixth hour` FROM `facultytimetable` WHERE `faculty number`='".$_SESSION['username']."' AND `day`='Saturday';"; 
 
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
            ?>"></td>
                <td>
                    <div class="container-login100-form-btn">
						<button class="button1" name="findsat" value="GO">
							Save
						</button>
                                        </div>
                </td>
                
            </tr>


            
        </table>
        
    
                                        </form>                                     
                                        </body>
</html>
