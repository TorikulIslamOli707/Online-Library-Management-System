<?php 

require_once 'phpConnection/connect.php';


?>
<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
    <style>
        #customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: center;
  background-color: #04AA6D;
  color: white;
}
#customers td{
  padding: 10px;
  text-align:center;
}
body .tbox{
    padding: 150px;
}
</style>
</head>
<body>
<div >
    <p style="color:green; font-size:30px; padding:16px;text-align: left;float:left; ">ONLINE LIBRARY MANAGEMENT SYSTEM</p>
   <div style="text-align: right;margin-right:50px;margin-top:20px;"> 
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
  <a class="active" href="returnbooks.php">Returned Books</a>
  <a href="adminaccount.php">Admin Account</a>
  
</div>
</br></br></br></br>

<div class="tbox">
<div>
    <table border="1" id="customers" >
        
            <tr>
            
                <th>Student ID</th>
                <th>Category</th>
                <th>Book Name</th>
                <th>Edition</th>
                <th>Issue Date</th>
                <th>Return Date</th>
                
                
                
            </tr>
        
        <tbody>
            <?php
              
    
              

            $sql = "SELECT * FROM issuebook WHERE active = 2";
            
            $result = $connect->query($sql);
             $rdate=date('y-m-d');
            if($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo "<tr>
                    <td>".$row['id']." </td>
                    <td>".$row['category']." </td>
                        <td>".$row['bookname']." </td>
                        <td>".$row['edition']." </td>
                        <td>".$row['issuedate']."</td>
                        <td>".$row['returnbackdate']."</td>
                        
                        
                        
                        
                    </tr>";
                }
            } else {
                echo "<tr><td colspan='7'><center>No Data Avaliable</center></td></tr>";
            }
            ?>
        </tbody>

    </table>
</div>
</div>

</body>
</html>
