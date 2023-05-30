<?php require_once 'connect.php';

if($_GET['id']) {
    $id = $_GET['id'];
 
    $sql = "SELECT * FROM signup1 WHERE id = {$id}";
    $result = $connect->query($sql);
 
    $data = $result->fetch_assoc();
 
    $connect->close();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    
    <link rel="stylesheet" href="../style.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        a:link, a:visited {
  background-color: green;
  color: white;
  padding: 14px 180px;
  text-align: center;
  text-decoration: none;
  
  display: inline-block;
}
    </style>
    
    
    
</head>
<body>


<fieldset>
    <section>
        </br></br>
        <div class="box1">
            <div class="formbx">
                <h2>Registration Form</h2>
                <form name="regfrom" action="update.php" onSubmit="return checkInputs();"  method="POST">
                <div class="inputBx">
                        <span>Name</span>
                        <input type="text" name="name" id="name"  value="<?php echo $data['name'] ?>">
                        <p style="color:red" id="name_error" ></p>
                    </div>
                    <div class="inputBx">
                        <span>Id</span>
                        <input type="text" name="sid" id="sid" value="<?php echo $data['id'] ?>">
                        <p style="color:red"id="id_error" ></p>
                    </div>
                    <div class="inputBx">
                        <span>Password</span>
                        <input type="password" name="spassword" id="spassword" value="<?php echo $data['password'] ?>" >
                        <p style="color:red"id="password_error" ></p>
                    </div>
                    <div class="inputBx">
                        <span>Confirm Password</span>
                        <input type="password" name="cspassword"id="cspassword" value="<?php echo $data['cpassword'] ?>" >
                        <p style="color:red"id="cspassword_error" ></p>
                    </div>
                    

                    <div class="inputBx" >
                        <span>Department : </span>
                    <input type="text" name="department"  id="department" value="<?php echo $data['department'] ?>">
                    <p style="color:red"id="department_error" ></p>
                    
                    </div>
                    <div class="inputBx" >
                        <span>Batch No : </span>
                    <input type="text" name="batchno"  id="batchno" value="<?php echo $data['batchno'] ?>" >
                    <p style="color:red"id="batchno_error" ></p>
                    
                    </div>
                    
                    <div class="inputBx">
                        <span>Email</span>
                        <input type="text" name="email" id="email" value="<?php echo $data['email'] ?>">
                        <p style="color:red"id="email_error" ></p>
                    </div>
                    <div class="inputBx">
                        <span>Phone Number</span>
                        <input type="tel" id="phone" name="phone" id="phone" value="<?php echo $data['phone'] ?>">
                        <p style="color:red"id="number_error" ></p>
                    </div>
                     
 
                    <div class="inputBx">
                        
                        <input type="submit" name="" value="Update">
                    </div>
                    <div class="inputBx">
                    <a href="../regstudents.php" target="_blank">Back</a>
                        
                    </div>
                    
                </form>

            </div>
        </div>
    </section>
    </fieldset>
    
    
    
</body>
</html>
<?php
}
?>