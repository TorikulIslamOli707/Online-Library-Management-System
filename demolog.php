<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="box1">
            <div class="formbx">
                <h2>Login</h2>
                <form  method="POST"  action="" >
                    <div class="inputBx">
                        <span>Id</span>
                        <input type="text" name="lid" id="lid">
                    </div>
                    <div class="inputBx">
                        <span>Password</span>
                        <input type="password" name="lpassword" >
                    </div>
                    
                    <div class="remember">
                        <label display="inline-block"><input type="checkbox">Remember me</label>
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

        <?php 
        if(isset($_POST['submit'])){
            $idd=$_POST['lid'];
            
                
                
                $_SESSION['id']=$idd;
                header('location:studentdashboard.php');  
              
        }
    ?>
</body>
</html>