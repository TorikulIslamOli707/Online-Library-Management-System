<?php require_once 'phpConnection/connect.php'?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="areg.js"></script>
</head>
<body>
<div >
    <p style="color:green; font-size:30px; padding:16px;text-align: left;float:left; ">ONLINE LIBRARY MANAGEMENT SYSTEM</p>
   <div style="text-align: right;margin-right:50px;margin-top:20px"> 
   <?php
    
    session_start();
    $name=$_SESSION['name'];
    //$_SESSION['id']=$_SESSION['lid'];
    $sql = "select * from admin where name = '$name'";
    $result = $connect->query($sql);
    if($result->num_rows > 0){
      while($row = $result->fetch_assoc()) {
      echo "<tr>
      <td>".$row['name']." </td>
      </tr>";
    }
    }
    
   ?>
  
  </div>
    <button  
    type="submit"style="background:#4CAF50;color:white;float: right;text-align: center;width:150px;padding:10px;margin-top:40px;margin-right:0px;font-style: bold;outline: none;border:none;">
  <a style="text-decoration: none;" href="phpConnection/logout.php">LOGOUT</a></button>
    </div>
 
  
 </br></br>
   <p style="background: green;height:5px;margin-top:50px"></p>
   </br>
   <div class="navbar">
   <a  href="admindashboard.php">DASHBOARD</a>
  
  <a  href="addbooks.php">Add Books</a>
  <a  href="issuebooks.php">Issue Books</a>
  <a   href="regstudents.php">Reg Students</a>
  
  <a  href="bookslist.php">Books List</a>
  
  <a  href="manageissuebook.php">Issued Books</a>
  <a  href="returnbooks.php">Returned Books</a>
  <a class="active" href="adminaccount.php">Admin Account</a>
  
</div>
<section>

        <div class="box1">
            <div class="formbx">
                <h2>Admin Register</h2>
                <form action="adminregister.php" method="POST" onSubmit="return checkInputsForAdminRegister();">
                    <div class="inputBx">
                        <span>User Name</span>
                        <input type="text" name="name" id="name1" >
                        <p style="color:red"id="name_error1" ></p>
                    </div>
                    <div class="inputBx">
                        <span>Password</span>
                        <input type="password" name="lpassword" id="lpassword1" >
                        <p style="color:red"id="password_error1" ></p>
                    </div>
                    
                    
                    
                    <div class="inputBx">
                        
                        <input type="submit" name="submit" value="Register">
                    </div>
                    
                </form>

            </div>
        </div>
    </section>
    
</body>
</html>