<?php 

require_once 'phpConnection/connect.php';
if($_POST){
    $name=$_POST['name'];
    
    $spassword = $_POST['lpassword'];
    

    
    
        $sql="insert into admin(name,password) values ('$name','$spassword')";
        if($connect->query($sql)===true){
            

           echo "Register successful.";
           echo "<a href='adminaccount.php'><button type='button'>Back</button></a>";
            echo "<a href='admindashboard.php'><button type='button'>Home</button></a>";
        }else{
            echo ("Register not successful");
            echo "<a href='adminaccount.php'><button type='button'>Back</button></a>";
            echo "<a href='admindashboard.php'><button type='button'>Home</button></a>";
            $connect->connect_error;
            
        }
    
    
    
   
    
}

?>