<?php require_once 'phpConnection/connect.php';
 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
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
  padding: 4px;
  
  
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  
  text-align: center;
  background-color: #04AA6D;
  color: white;
  font-size: 16px;
  padding: 15px 32px;
}
#customers td{
  text-align:center;
}
body .tbox{
    padding: 150px;
}
</style>
</head>
<body>
    <div>
    <p style="color:green; font-size:30px; padding:16px;">ONLINE LIBRARY MANAGEMENT SYSTEM</p>
    
    </div>

 
  
 </br>
   <p style="background: green;height:5px;"></p>
   </br>
<div class="navbar">
  <a  href="admindashboard.php">DASHBOARD</a>
  <a href="addbooks.php">Add Books</a>
  <a href="issuebooks.php">Issue Books</a>
  <a class="active" href="regstudents.php">Info</a>
  
  
</div>
</br></br></br></br></br></br></br></br></br></br></br></br>

<div class="tbox">
<div>
    <table border="1" id="customers">
    
            <tr>
                <th>Student ID</th>
                <th>Name</th>
                <th>Password</th>
                <th>Department</th>
                <th>Batch NO</th>
                <th>Email</th>
                <th>Phone Number</th>
                <th>Action</th>
            </tr>
        
        <tbody>
            <?php
            
            
           
        session_start();
        $idd=$_SESSION['sidd'];
        $dept= $_SESSION['dept'];

            $sql = "SELECT * FROM signup1 WHERE id=$idd && department=$dept";
            $result = $connect->query($sql);
 
            if($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo "<tr>
                        <td>".$row['id']." </td>
                        <td>".$row['name']."</td>
                        <td>".$row['password']."</td>
                        <td>".$row['department']." </td>
                        <td>".$row['batchno']."</td>
                        <td>".$row['email']."</td>
                        <td>".$row['phone']." </td>
                        <td>
                            <a   href='phpConnection/edit.php?id=".$row['id']."'><button type='button' style='background:#008CBA; border:none;color: white;text-align: center;text-decoration: none;display: inline-block;font-size: 16px;padding: 8px 30px; '  >Edit</button></a>
                            <a href='remove.php?id=".$row['id']."'><button type='button' style='background:#f44336; border:none;color: white;text-align: center;text-decoration: none;display: inline-block;font-size: 16px;padding: 8px 30px; ' >Remove</button></a>
                            <a href='regstudents.php?id=".$row['id']."'><button type='button' style='background:black; border:none;color: white;text-align: center;text-decoration: none;display: inline-block;font-size: 16px;padding: 8px 30px; ' >Back</button></a>
                            </td>
                        
                        
                    </tr>";
                }
            } else {
                echo "<tr><td colspan='8'><center>No Data Avaliable</center></td></tr>";
            }
            ?>
        </tbody>

    </table>
</div>
</div>
</br></br></br></br>
</body>
</html>