<?php require_once 'phpConnection/connect.php'?>
<!DOCTYPE html>
<html lang="en">
<head>
    
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
  <a href="studentlogin.php">Student Login</a>
  <a class="active"href="studentregister.php">Student Register</a>
</div>
</div>

    <section>
        </br></br>
        <div class="box1">
            <div class="formbx">
                <h2>Registration Form</h2>
                <form name="regfrom" action="phpConnection/create.php" onSubmit="return checkInputs();"  method="POST">
                <div class="inputBx">
                        <span>Name</span>
                        <input type="text" name="name" id="name" >
                        <p style="color:red" id="name_error" ></p>
                    </div>
                    <div class="inputBx">
                        <span>Id</span>
                        <input type="text" name="sid" id="sid">
                        <p style="color:red"id="id_error" ></p>
                    </div>
                    
                    

                    <div class="inputBx" style="width:200px;">
                        <span>Department : </span>
                    <select name="department" id="department" >
                    
                        
                        <option value=""  >NONE</option>
                        <option value="0">CSE</option>
                        <option value="1">EEE</option>
                        <option value="2">ME</option>
                        <option value="3">IPE</option>
                        <option value="4">BBA</option>
                        
                    </select>
                    <p style="color:red"id="dept_error" ></p>
                    </div>
                    <div class="inputBx" style="width:200px;">
                        <span>Batch No : </span>
                    <select name="batchno" id="batchno" >
                    
                        
                        <option value="" >NONE</option>
                        <option value="0">1</option>
                        <option value="1">2</option>
                        <option value="2">3</option>
                        <option value="3">4</option>
                        <option value="4">5</option>
                        <option value="5">6</option>
                        <option value="6">7</option>
                        <option value="7">8</option>
                        <option value="8">9</option>
                        <option value="9">10</option>
                        <option value="10">11</option>
                        <option value="11">12</option>
                        <option value="12">13</option>
                        <option value="13">14</option>
                        <option value="14">15</option>
                        <option value="15">16</option>
                        
                        
                    </select>
                    <p style="color:red"id="batchno_error" ></p>
                    </div>
                    
                    <div class="inputBx">
                        <span>Email</span>
                        <input type="text" name="email" id="email" >
                        <p style="color:red"id="email_error" ></p>
                    </div>
                    <div class="inputBx">
                        <span>Phone Number</span>
                        <input type="tel" id="phone" name="phone" id="phone" >
                        <p style="color:red"id="number_error" ></p>
                    </div>
                    <div class="inputBx">
                        <span>Password</span>
                        <input type="password" name="spassword" id="spassword" >
                        <p style="color:red"id="password_error" ></p>
                    </div>
                    <div class="inputBx">
                        <span>Confirm Password</span>
                        <input type="password" name="cspassword"id="cspassword" >
                        <p style="color:red"id="cspassword_error" ></p>
                    </div>
                     
 
                    <div class="inputBx">
                        
                        <input type="submit" name="" value="Register">
                    </div>
                    <div class="inputBx">
                        
                        <p>Already have an account? <a href="studentlogin.php">Login</a></p>
                    </div>
                </form>

            </div>
        </div>
    </section>

    
    
    
</body>
</html>