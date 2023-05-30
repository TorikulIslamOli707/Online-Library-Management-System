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
    <script src="searchboxcheck.js"></script>
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
/* Style the search box inside the navigation bar */
.topnav input[type=text] {
    padding: 20px;
  float: right;
  padding: 6px;
  border: none;
  background: white;
  margin: 8px;
  font-size: 17px;
}

.sear a{

    
    text-decoration: none;
    
    font-size: 25px;

    
}
 .inputBx{
    margin-bottom: 20px;
}
 .inputBx span{
    font-size: 16px;
    margin-bottom: 5px;
    display: inline-block;
    color: #607d8b;
    font-weight: 300;
    font-size: 16px;
    letter-spacing: 1px;
}
.inputBx input{
    width: 200%;
    padding: 10px 20px;
    outline: none;
    font-weight: 400;
    border:1px solid #607d8b;
    font-size: 16px;
    letter-spacing: 1px;
    color: #607d8b;
    background: transparent;
    border-radius: 30px;
}
.inputBx input[type="submit"]{
    background:green;
    color: #000;
    outline: none;
    border:none;
    width: 200%;
    font-weight: 500;
    cursor: pointer;
}

 .inputBx input[type="submit"]:hover{
    background: green;
    
}

 .inputBx select{
    
    width: 200%;
    padding: 10px 20px;
    outline: none;
    font-weight: 400;
    border:1px solid #607d8b;
    font-size: 16px;
    letter-spacing: 1px;
    color: #607d8b;
    background: transparent;
    border-radius: 30px;
    
}
.search{
    padding-top: 30px;
    width: 200px;
    margin-left:40% ;
}

      body .tbox{
    padding-left: 120px;
    padding-right: 120px;
}
    
   
    
}

</style>
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
  
  <a href="bookslist.php">Books List</a>
  
  <a class="active" href="manageissuebook.php">Issued Books</a>
  <a href="returnbooks.php">Returned Books</a>
  <a href="adminaccount.php">Admin Account</a>
  
  
</div >
</br></br>
<div class="search">
            <div class="formbx">
                
                <form  method="POST"  action="searchidforissuebook.php" onSubmit="return searchboxcheck();">
                    <div class="inputBx">
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
                    <div class="inputBx">
                    
                        <span>Id</span>
                        <input type="text" name="sid" id="sid">
                        <p style="color:red"id="id_error" ></p>
                    </div>
                    
                    <div class="inputBx">
                        
                        <input type="submit" name="submit" value="submit"   >
                    </div>
                </form>

            </div>
        </div>


</br></br>

</br></br>

<div class="tbox">
  <div>
    <table border="1" id="customers" >
    
            <tr>
                <th>Student ID</th>
                <th>Book ID</th>
                <th>Category</th>
                <th>Book Name</th>
                <th>Author</th>
                <th>Edition</th>
                <th>Issue Date</th>
                <th>Return Date</th>
                <th>Today</th>
                <th>Fine</th>
                <th>Action</th>      
            </tr>
        <tbody>
            <?php
            $sql = "SELECT * FROM issuebook WHERE active = 1";
            $result = $connect->query($sql);
            if($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    $returndate=$row['returndate'];
                    $currentdate=date("Y/m/d");
                    $dateTimestamp1 = strtotime($currentdate);
                    $dateTimestamp2 = strtotime($returndate);
                    if($dateTimestamp1>$dateTimestamp2){
                        $fine=100;
                        #$sql = "UPDATE issuebook SET  fine=$fine  WHERE id={$row['id']"};
                    }else{
                        $fine=0;
                    }
                    echo "<tr>
                            <td>".$row['id']." </td>
                            <td>".$row['bookid']." </td>
                            <td>".$row['category']." </td>
                            <td>".$row['bookname']." </td>
                            <td>".$row['author']." </td>
                            <td>".$row['edition']." </td>
                            <td>".$row['issuedate']."</td>
                            <td>".$row['returndate']."</td>
                            <td>".date('Y-m-d')."</td>  
                            <td>".$fine."</td>
                            <td>
                              <a href='editissuedbooks.php?id=".$row['id']."'><button type='button' style='background:#008CBA; border:none;color: white;text-align: center;text-decoration: none;display: inline-block;font-size: 16px;padding: 8px 30px; ' >Edit</button></a>
                              <a href='bookremove.php?id=".$row['bookid']."'><button type='button' style='background:#f44336; border:none;color: white;text-align: center;text-decoration: none;display: inline-block;font-size: 16px;padding: 8px 30px; '>Return</button></a>
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


</br></br></br></br></br></br></br></br>
</body>
</html>
