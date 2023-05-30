<?php

require_once 'phpConnection/connect.php';


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script language="javascript" type="text/javascript" src="asd.js"></script>
    <script src="main.js"></script>
</head>
<body>

<p style="color:green; font-size:30px; padding:16px;">ONLINE LIBRARY MANAGEMENT SYSTEM</p>
 
  
 </br>
   <p style="background: green;height:5px;"></p>
   </br>
   <div class="navbar">
  <a  href="home.php">Home</a>
  <a href="adminlogin.php">Admin Login</a>
  <a class="active"href="studentlogin.php">Student Login</a>
  <a href="studentregister.php">Student Register</a>
</div>
<section>

        
        <div class="box1">
            <div class="formbx">
                <h2>Login</h2>
                <form  method="POST"  action="" onSubmit="return checkInputsForStudentLogin();">
                    <div class="inputBx">
                        <span>Id</span>
                        <input type="text" name="lid" id="lid">
                        <p style="color:red"id="id_error" ></p>
                    </div>
                    <div class="inputBx">
                        <span>Password</span>
                        <input type="password" name="lpassword" id="lpassword" >
                        <p style="color:red"id="password_error" ></p>
                    </div>
                    
                    
                    
                    <div class="inputBx">
                        
                        <input type="submit" name="submit" value="submit"  >
                    </div>
                    <div class="inputBx">
                        
                        <p>Don't have an account? <a href="studentregister.php">Register</a></p>
                    </div>
                </form>

            </div>
        </div>
    </section>
    
    <?php 
        if(isset($_POST['submit'])){
            $count=0;
            $idd=$_POST['lid'];
            $pass=$_POST['lpassword'];
            
            
            $sql=mysqli_query($connect,"select * from signup1 where id= '$idd' and password='$pass';");
            $count=mysqli_num_rows($sql); 
            
            if($count==0){
                ?>
                <script type="text/javascript">
                    alert("Enter valid id & password");
                </script>
                <?php
                
                
            }else{
                
                session_start();
                $_SESSION['lid']=$idd;
               
            header('location:studentdashboard.php'); 
            }
            

        }
    ?>
    


    
</body>
</html>