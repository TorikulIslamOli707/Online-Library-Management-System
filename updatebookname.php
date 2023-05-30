<?php 
 
 require_once 'phpConnection/connect.php';
 
 if($_POST){
    $bookname=$_POST['bookname'];
    $author = $_POST['author'];
    if(isset($_POST['category'])){
        $category = $_POST['category'];
        switch ($category) {
            case '0':
                $category='CSE';
                break;
            case '1':
                $category='EEE';
                break;
            case '2':
                $category='ME';
                break;
            case '3':
                 $category='IPE';
                 break; 
            case '4':
                 $category='BBA';
                break;   
            default:
                # code...
                break;
        }
		$edition=$_POST['edition'];
		$price = $_POST['price'];
		
		$id = $_POST['id'];
    }
    
    
    $sql="update addbook set bookname='$bookname',author='$author',category='$category',edition='$edition',price='$price' where id={$id}";
    if($connect->query($sql) === TRUE) {
        echo "<p>Succcessfully Updated</p>";
        echo "<a href='bookslist.php'><button type='button'>Back</button></a>";
        echo "<a href='admindashboard.php'><button type='button'>Home</button></a>";
    } else {

        echo "Erorr while updating record : ". $connect->error;
        echo "<a href='bookslist.php'><button type='button'>Back</button></a>";
        echo "<a href='admindashboard.php'><button type='button'>Home</button></a>";
    }
 
    $connect->close();
 
}
 
?>