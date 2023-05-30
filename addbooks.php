<?php require_once 'phpConnection/connect.php'?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
    <script src="addBookCheck.js"></script>
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
  
  <a class="active" href="addbooks.php">Add Books</a>
  <a href="issuebooks.php">Issue Books</a>
  <a href="regstudents.php">Reg Students</a>
  
  <a href="bookslist.php">Books List</a>
  
  <a href="manageissuebook.php">Issued Books</a>
  <a href="returnbooks.php">Returned Books</a>
  <a href="adminaccount.php">Admin Account</a>
</div>
<section>

        <div class="box1">
            <div class="formbx">
                <h2>ADD BOOKS</h2>
                <form action="phpConnection/addbookdb.php" onSubmit="return addBookInputsCheck();" method="POST">
                <div class="inputBx1" style="width:200px;">
                        <span>Category : </span>
                    <select name="category" id="category" >
                        
                    <option value="">None</option>
                        <option value="0">CSE</option>
                        <option value="1">EEE</option>
                        <option value="2">ME</option>
                        <option value="3">IPE</option>
                        <option value="4">BBA</option>
                        
                    </select>
                    <p style="color:red" id="category_error" ></p>
                    </div>
                    <div class="inputBx">
                        <span>Book Name</span>
                        <input type="text" name="bookname" id="bookname" >
                        <p style="color:red" id="bookname_error" ></p>
                    </div>
                    <div class="inputBx">
                        <span>Author</span>
                        <input type="text" name="author" id="author" >
                        <p style="color:red" id="author_error" ></p>
                    </div>
                    <div class="inputBx1" style="width:200px;">
                        <span>Edition : </span>
                    <select name="edition" id="edition" >
                        
                    <option value="">None</option>
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
                        
                    </select>
                    <p style="color:red" id="edition_error" ></p>
                    </div>
                    
                    <div class="inputBx">
                        <span>Price</span>
                        <input type="number" name="price" id="price" >
                        <p style="color:red" id="price_error" ></p>
                    </div>
                    
                    
                    
                    <div class="inputBx">
                        
                        <input type="submit" name="submit" value="ADD Book">
                    </div>
                    
                </form>

            </div>
        </div>
    </section>
</body>
</html>