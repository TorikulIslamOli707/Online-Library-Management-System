<?php 
 
 require_once 'connect.php';
 
if($_POST) {
    $id = $_POST['id'];
 
    $sql = "UPDATE signup1 SET active = 2 WHERE id = {$id}";
    if($connect->query($sql) === TRUE) {
        echo "<p>Successfully removed!!</p>";
        echo "<a href='../regstudents.php'><button type='button'>Back</button></a>";
    } else {
        echo "Error updating record : " . $connect->error;
        echo "<a href='../regstudents.php'><button type='button'>Back</button></a>";
    }
 
    $connect->close();
}
 
?>