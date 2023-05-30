<?php 
 
require_once 'phpConnection/connect.php';
 

if($_GET['id']) {
    $id = $_GET['id'];
    #echo $id;
    $sql = "SELECT * FROM issuebook WHERE bookid = {$id} ";
    $result = $connect->query($sql);
    $data = $result->fetch_assoc();
 
    $connect->close();
    
    
    
  



?>
 
<!DOCTYPE html>
<html>
<head>
    <title>Remove Member</title>
</head>
<body>
 
<h3>Do you really want to remove ?</h3>
<form action="bookremove1.php" method="POST">
 
    <input type="hidden" name="id" value="<?php echo $data['id'] ?>" />
    <input type="hidden" name="bookid" value="<?php echo $data['bookid'] ?>" />
    <button type="submit">Save Changes</button>
    <a href="manageissuebook.php"><button type="button">Back</button></a>
</form>
 
</body>
</html>
<?php
}
?>
 
