<?php 
 
 require_once 'phpConnection/connect.php';
 
if($_POST) {
    $id = $_POST['id'];
    $bookid=$_POST['bookid'];
    $currentdate = date('Y-m-d',time());
    $returnbackdate = date('Y-m-d',strtotime($currentdate));
    #echo $bookid;
    
    #$sql = "INSERT INTO issuebook(returnbackdate) VALUES ($returnbackdate) ";
    $sql = "UPDATE issuebook SET active = 2, returnbackdate='{$returnbackdate}'  WHERE bookid={$bookid}  ";
    
    if($connect->query($sql) === TRUE) {
        echo "<p>Successfully removed!!</p>";
        echo "<a href='manageissuebook.php'><button type='button'>Back</button></a>";
    } else {
        echo "Error updating record : " . $connect->error;
        echo "<a href='manageissuebook.php'><button type='button'>Back</button></a>";
    }
 
    $connect->close();
}
# && bookid={$bookid}
?>