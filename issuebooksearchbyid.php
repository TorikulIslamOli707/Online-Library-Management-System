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
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}
#customers td{
  text-align:center;
}
#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: center;
  background-color: #04AA6D;
  color: white;
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
  <a class="active" href="manageissuebook.php">Issued Book</a>
  
  
</div>
<a style="float:left;pading:25px" href="manageissuebook.php"><button type="button">Back</button></a>
</br></br></br></br>
<div class="tbox">

    <table border="1" id="customers">
    
            <tr>
                <th>Student ID</th>
                <th>Category</th>
                <th>Book Name</th>
                <th>Edition</th>
                <th>Issue Date</th>
                <th>Return Date</th>
                <th>Today</th>
                <th>Fine</th>
                <th>Action</th>      
            </tr>
        <tbody>
            <?php
            session_start();
            $idd=$_SESSION['sidd'];
            $cat= $_SESSION['dept'];
    
                $sql = "SELECT * FROM issuebook WHERE id=$idd && category=$cat";
                $result = $connect->query($sql);
            
            if($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    $returndate=$row['returndate'];
                    $currentdate=date("Y/m/d");
                    $dateTimestamp1 = strtotime($currentdate);
                    $dateTimestamp2 = strtotime($returndate);
                    if($dateTimestamp1>$dateTimestamp2){
                        $fine=100;
                    }else{
                        $fine=0;
                    }
                    echo "<tr>
                            <td>".$row['id']." </td>
                            <td>".$row['category']." </td>
                            <td>".$row['bookname']." </td>
                            <td>".$row['edition']." </td>
                            <td>".$row['issuedate']."</td>
                            <td>".$row['returndate']."</td>
                            <td>".date('y-m-d')."</td>  
                            <td>".$fine."</td>
                            <td>
                              <a href='phpConnection/edit.php?id=".$row['id']."'><button type='button' style='background:#008CBA; border:none;color: white;text-align: center;text-decoration: none;display: inline-block;font-size: 16px;padding: 8px 30px; '  >Edit</button></a>
                              <a href='bookremove.php?id=".$row['id']."'><button type='button' style='background:#f44336; border:none;color: white;text-align: center;text-decoration: none;display: inline-block;font-size: 16px;padding: 8px 30px; '>Remove</button></a>
                            </td>    
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
</br></br></br></br>
</body>
</html>