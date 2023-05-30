<?php 

require_once 'phpConnection/connect.php';
if(isset($_POST["submit"])){
    $count=0;
    
    $sql=mysqli_query($connect,"select * from signup1 where id= '$_POST[lid]' and password='$_POST[lpassword]';");
    $count=mysqli_num_rows($sql);

            if($count==0){
                
                ?>
                <script type="text/javascript">
                    alert("error");
                </script>
                <?php
            }else{
                ?>
                <script type="text/javascript">
                    window.location="dashboard.php";
                </script>
                <?php
            }

}

?>