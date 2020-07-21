<?php

session_start();
$username = filter_input(INPUT_POST, 'username');
$password = filter_input(INPUT_POST, 'password');
$account = filter_input(INPUT_POST, 'account');


   $_SESSION['username']=$username;
   $_SESSION['password']=$password;
   
    

if (isset($username)){
    if(isset($password)){
        $db=mysqli_connect("localhost","root","Panda@19","project");
        
        
        
        $sql="SELECT * FROM `login` WHERE username='$username' AND password='$password' AND account='$account'"; 
        
        $query=mysqli_query($db,$sql);
        $result=mysqli_num_rows($query);
        
        if($result){
            if($account=='faculty'){
                include 'facultypage.php';
            }
            else
            {
                include 'studentpage.php' ;
            }
            
            } 
            else{
	         echo "Invalid Entry";
            } 
        
        
    }
    else{
        echo "password should not be empty";
       die();
    }
}
else{
    echo "username should not be empty";
    die();
}
mysqli_close($db);

?>



