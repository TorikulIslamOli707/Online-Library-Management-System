<?php 

require_once 'connect.php';
if($_POST){
    $name=$_POST['name'];
    $sid = $_POST['sid'];
    $spassword = $_POST['spassword'];
    $cspassword=$_POST['cspassword'];
    if(isset($_POST['department'])){
        $department = $_POST['department'];
        switch ($department) {
            case '0':
                $department='CSE';
                break;
            case '1':
                $department='EEE';
                break;
            case '2':
                $department='ME';
                break;
            case '3':
                 $department='IPE';
                 break; 
            case '4':
                 $department='BBA';
                break;   
            default:
                # code...
                break;
        }
    }
    
    if(isset($_POST['batchno'])){
    
        $batchno=$_POST['batchno'];
        switch($batchno){
            case '0':
                $batchno='1';
                break;
            case '1':
                $batchno='2';
                break;
            case '2':
                $batchno='3';
                break;
            case '3':
                $batchno='4';
                break;
            case '4':
                $batchno='5';
                break;
            case '5':
                $batchno='6';
                break;
            case '6':
                $batchno='7';
                break;
            case '7':
                $batchno='8';
                break;
            case '8':
                $batchno='9';
                break;
            case '9':
                $batchno='10';
                break;
            case '10':
                $batchno='11';
                break;
            case '11':
                $batchno='12';
                break;
            case '12':
                $batchno='13';
                break;
            case '13':
                $batchno='14';
                break;
            case '14':
                $batchno='15';
                break;
            case '15':
                $batchno='16';
                break; 
            default:
                # code...
            break;   
        }
        
    }
    
    $email=$_POST['email'];
    $phone=$_POST['phone'];

    $count=0;
    $sql=mysqli_query($connect,"select id from signup1 where id= '$sid';");
    $count=mysqli_num_rows($sql); 
    if($count != 0){
                
                echo "Id already exist";
                echo "<a href='../studentregister.php'><button type='button'>Back</button></a>";
                echo "<a href='../home.php'><button type='button'>Home</button></a>";
        
    }else{
    
    if($spassword==$cspassword){
        $sql="insert into signup1(name,id,password,cpassword,department,batchno,email,phone,active) values ('$name','$sid','$spassword','$cspassword','$department','$batchno','$email','$phone',1)";
        if($connect->query($sql)===true){
           echo "Register successful.";
           echo "<a href='../studentregister.php'><button type='button'>Back</button></a>";
            echo "<a href='../home.php'><button type='button'>Home</button></a>";
        }else{
            echo ("Register not successful");
            $connect->connect_error;
            
        }
    }else{
        echo("password not matched!");
        echo "<a href='../studentregister.php'><button type='button'>Back</button></a>";
            echo "<a href='../home.php'><button type='button'>Home</button></a>";
    }
    
}
   
    
}

?>