<?php require_once 'phpConnection/connect.php'


?>
<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
<div >
    <p style="color:green; font-size:30px; padding:16px;text-align: center;float:left; ">ONLINE LIBRARY MANAGEMENT SYSTEM</p>

    <div style="text-align: right;margin-top:20px;margin-right:30px;font-size:20px;font-style: bold;text-transform: uppercase;"> 

     
    <?php
    
    session_start();
    $idd=$_SESSION['lid'];
   // $_SESSION['id']=$_SESSION['lid'];
    $sql = "SELECT * FROM signup1 where id=$idd";
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
    type="submit"style="background:#4CAF50;color:white;float: right;text-align: center;width:150px;padding:10px;margin-top:40px;margin-right:30px;font-style: bold;outline: none;border:none;margin-bottom:5px;">
  
  <a style="text-decoration: none;" href="phpConnection/logout.php">LOGOUT</a></button>
    
 
  
 </br></br>
   <p style="background: green;height:5px;margin-top:50px"></p>
   </br>
<div class="navbar">
  <a  href="studentdashboard.php">DASHBOARD</a>
  <a class="active" href="onlinebooks.php">Online Books</a>
  <a href="issuedbooks.php">Issued Books</a>
  <a href="sreturnbooklist.php">Returned Books</a>
  

  </div>

  <a style="background:#4CAF50;color:white;float: right;text-align: center;width:350px;padding:10px;margin-top:40px;margin-right:40%;font-style: bold;outline: none;border:none;margin-bottom:5px;" href="https://freefrontend.com/html-css-books/">Free Frontend</a>
  <a style="background:#4CAF50;color:white;float: right;text-align: center;width:350px;padding:10px;margin-top:40px;margin-right:40%;font-style: bold;outline: none;border:none;margin-bottom:5px;" href="https://www.w3schools.com/">w3schools</a>
  <a style="background:#4CAF50;color:white;float: right;text-align: center;width:350px;padding:10px;margin-top:40px;margin-right:40%;font-style: bold;outline: none;border:none;margin-bottom:5px;" href="http://www.sciencebooksonline.info/">Science Books Online</a>

</body>
</html>