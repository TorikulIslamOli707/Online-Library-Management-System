<?php require_once 'phpConnection/connect.php';?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <script src="admin.js"></script>
</head>
<body>
<p style="color:green; font-size:30px; padding:16px;">ONLINE LIBRARY MANAGEMENT SYSTEM</p>
 
  
 </br>
   <p style="background: green;height:5px;"></p>
   </br>
   <div class="navbar">
  <a  href="home.php">Home</a>
  <a class="active"href="adminlogin.php">Admin Login</a>
  <a href="studentlogin.php">Student Login</a>
  <a href="studentregister.php">Student Register</a>
</div>
<section>

        <div class="box1">
            <div class="formbx">
                <h2>Admin</h2>
                <form  method="POST" action="" onSubmit="return checkInputsForAdminLogin();">
                    <div class="inputBx">
                        <span>User Name</span>
                        <input type="text" name="name" id="name1">
                        <p style="color:red"id="name_error1" ></p>
                    </div>
                    <div class="inputBx">
                        <span>Password</span>
                        <input type="password" name="lpassword" id="lpassword1">
                        <p style="color:red"id="password_error1" ></p>
                    </div>
                    
                    
                    
                    <div class="inputBx">
                        
                        <input type="submit" name="submit" value="submit">
                        
                    </div>
                    
                </form>

            </div>
        </div>
    </section>
    <?php 
    
        if(isset($_POST['submit'])){
            $count=0;
            $name=$_POST['name'];
            $pass=$_POST['lpassword'];
            $sql=mysqli_query($connect,"select * from admin where name= '$name' and password='$pass';");
            
            
            $count=mysqli_num_rows($sql);
            
            if($count==0){
                
                ?>
                <script type="text/javascript">
                    alert("Enter valid User Name & password");
                </script>
                <?php
            }else{
                session_start();
                $_SESSION['name']=$name;
                header('location:admindashboard.php'); 
               // echo "<a href='../studentlogin.php'><button type='button'>Back</button></a>";
               //  echo "<a href='../home.php'><button type='button'>Home</button></a>";
                 
            }
            
        }
    
        

    ?>
</body>
</html>