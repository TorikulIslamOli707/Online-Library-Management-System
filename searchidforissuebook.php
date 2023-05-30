<?php require_once 'phpConnection/connect.php';
session_start();


?>

<?php 
        if(isset($_POST['submit'])){
            $idd=$_POST['sid'];
            $dept=$_POST['department'];
            
            
            $count=0;
            $sql=mysqli_query($connect,"select * from signup1 where (id= '$idd' AND department=$dept) ;");
            $count=mysqli_num_rows($sql); 
           
            
            if($count==0){
                 
                echo "Enter valid Information ". $connect->error;
                echo "<a href='manageissuebook.php'><button type='button'>Back</button></a>";
                echo "<a href='admindashboard.php'><button type='button'>Home</button></a>";
                
            }else{
                
                
               $_SESSION['sidd']=$idd;
                 $_SESSION['dept']=$dept;
               
                header('location:issuebooksearchbyid.php'); 
            }
            

        }
    ?>