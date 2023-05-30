<?php require_once 'phpConnection/connect.php';

if($_GET['id']) {
    $id = $_GET['id'];
 
    $sql = "SELECT * FROM addbook WHERE id = {$id}";
    $result = $connect->query($sql);
 
    $data = $result->fetch_assoc();
 
    $connect->close();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    
    <link rel="stylesheet" href="style.css">
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
                <h2>Edit Book Info</h2>
                <form name="regfrom" action="updatebookname.php" method="POST">
                <div class="inputBx">
                        <span>Book Name</span>
                        <input type="text" name="bookname" id="bookname"  value="<?php echo $data['bookname'] ?>">
                    </div>
                    <div class="inputBx">
                        <span>Author</span>
                        <input type="text" name="author" id="author" value="<?php echo $data['author'] ?>">
                    </div>
                    <div class="inputBx" >
                        <span>Category</span>
                    <input type="text"  name="category" id="category" value="<?php echo $data['category'] ?>">
                        
                    </div>
                    
                    <div class="inputBx">
                        <span>Edition</span>
                        <input type="text" name="edition" id="edition" value="<?php echo $data['edition'] ?>">
                    </div>
                    <div class="inputBx">
                        <span>Price</span>
                        <input type="text" id="price" name="price" id="phone" value="<?php echo $data['price'] ?>">
                    </div>
					<div class="inputBx">
                        <input type="hidden" name="id" value="<?php echo $data['id']?>"/>
                        <input type="submit" name="" value="Update">
                    </div>
                    
                    <div class="inputBx">
                    <a href="bookslist.php" target="_blank">Back</a>
                        
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